<?php if (!defined('BASEPATH'))   exit('No direct script access allowed');

class CIF_form_validation extends CI_Form_validation {

    private $_standard_date_format = 'Y-m-d H:i:s';
    private $mime_types;

    public function __construct() {
        parent::__construct();
    }

    function set_rules($field, $label = '', $rules = '') {
        if (count($_POST) === 0 AND count($_FILES) > 0) { //it will prevent the form_validation from working
            //add a dummy $_POST
            $_POST['DUMMY_ITEM'] = '';
            parent::set_rules($field, $label, $rules);
            unset($_POST['DUMMY_ITEM']);
        } else {
            //we are safe just run as is
            parent::set_rules($field, $label, $rules);
        }
    }

    function run($group = '') {
        $rc = FALSE;
        log_message('DEBUG', 'called MY_form_validation:run()');
        if (count($_POST) === 0 AND count($_FILES) > 0) {//does it have a file only form?
            //add a dummy $_POST
            $_POST['DUMMY_ITEM'] = '';
            $rc = parent::run($group);
            unset($_POST['DUMMY_ITEM']);
        } else {
            //we are safe just run as is
            $rc = parent::run($group);
        }

        return $rc;
    }

    function file_upload_error_message($field, $error_code) {
        switch ($error_code) {
            case UPLOAD_ERR_INI_SIZE:
                return $this->CI->lang->line('error_max_filesize_phpini');
            case UPLOAD_ERR_FORM_SIZE:
                return $this->CI->lang->line('error_max_filesize_form');
            case UPLOAD_ERR_PARTIAL:
                return $this->CI->lang->line('error_partial_upload');
            case UPLOAD_ERR_NO_FILE:
                $line = $this->CI->lang->line('file_required');
                return sprintf($line, $this->_translate_fieldname($field));
            case UPLOAD_ERR_NO_TMP_DIR:
                return $this->CI->lang->line('error_temp_dir');
            case UPLOAD_ERR_CANT_WRITE:
                return $this->CI->lang->line('error_disk_write');
            case UPLOAD_ERR_EXTENSION:
                return $this->CI->lang->line('error_stopped');
            default:
                return $this->CI->lang->line('error_unexpected') . $error_code;
        }
    }

    function _execute($row, $rules, $postdata = NULL, $cycles = 0) {

        log_message('DEBUG', 'called CIF_form_validation::_execute ' . $row['field']);
        if (isset($_FILES[$row['field']])) {// it is a file so process as a file
            log_message('DEBUG', 'processing as a file');
            $postdata = $_FILES[$row['field']];

            //required bug
            //if some stupid like me never remember that it's file_required and not required
            //this will save a lot of var_dumping time.
            if (in_array('required', $rules)) {
                $rules[array_search('required', $rules)] = 'file_required';
            }
            //before doing anything check for errors
            if ($postdata['error'] !== UPLOAD_ERR_OK) {
                //If the error it's 4 (ERR_NO_FILE) and the file required it's deactivated don't call an error
                if ($postdata['error'] != UPLOAD_ERR_NO_FILE) {
                    $this->_error_array[$row['field']] = $this->file_upload_error_message($row['label'], $postdata['error']);
                    return FALSE;
                } elseif ($postdata['error'] == UPLOAD_ERR_NO_FILE and in_array('file_required', $rules)) {
                    $this->_error_array[$row['field']] = $this->file_upload_error_message($row['label'], $postdata['error']);
                    return FALSE;
                }
            }

            $_in_array = FALSE;

            // If the field is blank, but NOT required, no further tests are necessary
            $callback = FALSE;
            if (!in_array('file_required', $rules) AND $postdata['size'] == 0) {
                // Before we bail out, does the rule contain a callback?
                if (preg_match("/(callback_\w+)/", implode(' ', $rules), $match)) {
                    $callback = TRUE;
                    $rules = (array('1' => $match[1]));
                } else {
                    return;
                }
            }

            foreach ($rules as $rule) {
                /// COPIED FROM the original class
                // Is the rule a callback?			
                $callback = FALSE;
                if (substr($rule, 0, 9) == 'callback_') {
                    $rule = substr($rule, 9);
                    $callback = TRUE;
                }

                // Strip the parameter (if exists) from the rule
                // Rules can contain a parameter: max_length[5]
                $param = FALSE;
                if (preg_match("/(.*?)\[(.*?)\]/", $rule, $match)) {
                    $rule = $match[1];
                    $param = $match[2];
                }

                // Call the function that corresponds to the rule
                if ($callback === TRUE) {
                    if (!method_exists($this->CI, $rule)) {
                        continue;
                    }

                    // Run the function and grab the result
                    $result = $this->CI->$rule($postdata, $param);

                    // Re-assign the result to the master data array
                    if ($_in_array == TRUE) {
                        $this->_field_data[$row['field']]['postdata'][$cycles] = (is_bool($result)) ? $postdata : $result;
                    } else {
                        $this->_field_data[$row['field']]['postdata'] = (is_bool($result)) ? $postdata : $result;
                    }

                    // If the field isn't required and we just processed a callback we'll move on...
                    if (!in_array('file_required', $rules, TRUE) AND $result !== FALSE) {
                        return;
                    }
                } else {
                    if (!method_exists($this, $rule)) {
                        // If our own wrapper function doesn't exist we see if a native PHP function does. 
                        // Users can use any native PHP function call that has one param.
                        if (function_exists($rule)) {
                            $result = $rule($postdata);

                            if ($_in_array == TRUE) {
                                $this->_field_data[$row['field']]['postdata'][$cycles] = (is_bool($result)) ? $postdata : $result;
                            } else {
                                $this->_field_data[$row['field']]['postdata'] = (is_bool($result)) ? $postdata : $result;
                            }
                        }

                        continue;
                    }

                    $result = $this->$rule($postdata, $param);

                    if ($_in_array == TRUE) {
                        $this->_field_data[$row['field']]['postdata'][$cycles] = (is_bool($result)) ? $postdata : $result;
                    } else {
                        $this->_field_data[$row['field']]['postdata'] = (is_bool($result)) ? $postdata : $result;
                    }
                }

                //this line needs testing !!!!!!!!!!!!! not sure if it will work
                //it basically puts back the tested values back into $_FILES
                //$_FILES[$row['field']] = $this->_field_data[$row['field']]['postdata'];
                // Did the rule test negatively?  If so, grab the error.
                if ($result === FALSE) {
                    if (!isset($this->_error_messages[$rule])) {
                        if (FALSE === ($line = $this->CI->lang->line($rule))) {
                            $line = 'Unable to access an error message corresponding to your field name.';
                        }
                    } else {
                        $line = $this->_error_messages[$rule];
                    }

                    // Is the parameter we are inserting into the error message the name
                    // of another field?  If so we need to grab its "field label"
                    if (isset($this->_field_data[$param]) && isset($this->_field_data[$param]['label'])) {
                        $param = $this->_field_data[$param]['label'];
                    }

                    // Build the error message
                    $message = sprintf($line, $this->_translate_fieldname($row['label']), $param);

                    // Save the error message
                    $this->_field_data[$row['field']]['error'] = $message;

                    $this->_error_array[$row['field']][] = $message;


                    return;
                }
            }
        } else {
            log_message('DEBUG', 'Called parent _execute');
            parent::_execute($row, $rules, $postdata, $cycles);
        }
    }

    /**
     * Future function. To return error message of choice.
     * It will use $msg if it cannot find one in the lang files
     * 
     * @param string $msg the error message
     */
    function set_error($msg) {
        $CI = & get_instance();
        $CI->lang->load('upload');
        return ($CI->lang->line($msg) == FALSE) ? $msg : $CI->lang->line($msg);
    }

    // --------------------------------------------------------------------

    /**
     * Checks if the a required file is uploaded
     *
     * @access	public
     * @param	mixed $file
     * @return	bool
     */
    function file_required($file) {
        if ($file['size'] === 0) {
            return FALSE;
        }

        return TRUE;
    }

    // --------------------------------------------------------------------

    /**
     * Returns FALSE if the file is bigger than the given size
     *
     * @access	public
     * @param	mixed $file
     * @param	string
     * @return	bool
     */
    function file_size_max($file, $max_size) {
        $max_size_bit = $this->let_to_bit($max_size);
        if ($file['size'] > $max_size_bit) {
            return FALSE;
        }
        return TRUE;
    }

    // --------------------------------------------------------------------

    /**
     * Returns FALSE if the file is smaller than the given size
     *
     * @access	public
     * @param	mixed $file
     * @param	string
     * @return	bool
     */
    function file_size_min($file, $min_size) {
        $min_size_bit = $this->let_to_bit($min_size);
        if ($file['size'] < $min_size_bit) {
            return FALSE;
        }
        return TRUE;
    }

    // ----------------------

    function load_mimes() {
        // Get mime types for later
        if (defined('ENVIRONMENT') AND file_exists(APPPATH . 'config/' . ENVIRONMENT . '/mimes.php')) {
            include APPPATH . 'config/' . ENVIRONMENT . '/mimes.php';
        } else {
            include APPPATH . 'config/mimes.php';
        }

        $this->mime_types = $mimes;
    }

    // --------------------------------------------------------------------

    /**
     * Tests the file extension for valid file types
     *
     * @access	public
     * @param	mixed $file
     * @param	mixed
     * @return	bool
     */
    function file_allowed_type($file, $type) {

        //is type of format a,b,c,d? -> convert to array
        $exts = explode(',', $type);

        //is $type array? run self recursively
        if (count($exts) > 1) {
            foreach ($exts as $v) {
                $rc = $this->file_allowed_type($file, $v);
                if ($rc === TRUE) {
                    return TRUE;
                }
            }
        }

        //is type a group type? image, application, word_document, code, zip .... -> load proper array
        $ext_groups = array();
        $ext_groups['image'] = array('jpg', 'jpeg', 'gif', 'png');
        $ext_groups['image_icon'] = array('jpg', 'jpeg', 'gif', 'png', 'ico', 'image/x-icon');
        $ext_groups['application'] = array('exe', 'dll', 'so', 'cgi');
        $ext_groups['php_code'] = array('php', 'php4', 'php5', 'inc', 'phtml');
        $ext_groups['word_document'] = array('rtf', 'doc', 'docx');
        $ext_groups['compressed'] = array('zip', 'gzip', 'tar', 'gz');
        $ext_groups['document'] = array('txt', 'text', 'doc', 'docx', 'dot', 'dotx', 'word', 'rtf', 'rtx');

        //if there is a group type in the $type var and not a ext alone, we get it
        if (array_key_exists($exts[0], $ext_groups)) {
            $exts = $ext_groups[$exts[0]];
        }

        $this->load_mimes();


        $exts_types = array_flip($exts);
        $intersection = array_intersect_key($this->mime_types, $exts_types);

        //if we can use the finfo function to check the mime AND the mime
        //exists in the mime file of codeigniter...
        if (function_exists('finfo_open') and ! empty($intersection)) {
            $exts = array();

            foreach ($intersection as $in) {
                if (is_array($in)) {
                    $exts = array_merge($exts, $in);
                } else {
                    $exts[] = $in;
                }
            }

            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $file_type = finfo_file($finfo, $file['tmp_name']);
        } else {
            //get file ext
            $file_type = strtolower(strrchr($file['name'], '.'));
            $file_type = substr($file_type, 1);
        }

        if (!in_array($file_type, $exts)) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    // --------------------------------------------------------------------

    /**
     * Tests the file extension for no-valid file types
     *
     * @access	public
     * @param	mixed $file
     * @param	mixed
     * @return	bool
     */
    function file_disallowed_type($file, $type) {
        if ($this->file_allowed_type($file, $type) == FALSE) {
            return TRUE;
        }

        return FALSE;
    }

    // --------------------------------------------------------------------

    /**
     * Given an string in format of ###AA converts to number of bits it is assignin
     *
     * @access	public
     * @param	string
     * @return	integer number of bits
     */
    function let_to_bit($sValue) {
        // Split value from name
        if (!preg_match('/([0-9]+)([ptgmkb]{1,2}|)/ui', $sValue, $aMatches)) { // Invalid input
            return FALSE;
        }

        if (empty($aMatches[2])) { // No name -> Enter default value
            $aMatches[2] = 'KB';
        }

        if (strlen($aMatches[2]) == 1) { // Shorted name -> full name
            $aMatches[2] .= 'B';
        }

        $iBit = (substr($aMatches[2], -1) == 'B') ? 1024 : 1000;
        // Calculate bits:

        switch (strtoupper(substr($aMatches[2], 0, 1))) {
            case 'P':
                $aMatches[1] *= $iBit;
            case 'T':
                $aMatches[1] *= $iBit;
            case 'G':
                $aMatches[1] *= $iBit;
            case 'M':
                $aMatches[1] *= $iBit;
            case 'K':
                $aMatches[1] *= $iBit;
                break;
        }

        // Return the value in bits
        return $aMatches[1];
    }

    // --------------------------------------------------------------------

    /**
     * Returns FALSE if the image is bigger than given dimension
     *
     * @access	public
     * @param	string
     * @param	array
     * @return	bool
     */
    function file_image_maxdim($file, $dim) {
        log_message('debug', 'MY_form_validation: file_image_maxdim ' . $dim);
        $dim = explode(',', $dim);

        if (count($dim) !== 2) {
            // Bad size given
            log_message('error', 'MY_Form_validation: invalid rule, expected similar to 150,300.');
            return FALSE;
        }

        log_message('debug', 'MY_form_validation: file_image_maxdim ' . $dim[0] . ' ' . $dim[1]);

        //get image size
        $d = $this->get_image_dimension($file['tmp_name']);

        log_message('debug', $d[0] . ' ' . $d[1]);

        if (!$d) {
            log_message('error', 'MY_Form_validation: dimensions not detected.');
            return FALSE;
        }

        if ($d[0] <= $dim[0] && $d[1] <= $dim[1]) {
            return TRUE;
        }

        return FALSE;
    }

    // --------------------------------------------------------------------

    /**
     * Returns FALSE if the image is smaller than given dimension
     *
     * @access	public
     * @param	mixed
     * @param	array
     * @return	bool
     */
    function file_image_mindim($file, $dim) {
        $dim = explode(',', $dim);

        if (count($dim) !== 2) {
            // Bad size given
            log_message('error', 'MY_Form_validation: invalid rule, expected similar to 150,300.');
            return FALSE;
        }

        //get image size
        $d = $this->get_image_dimension($file['tmp_name']);

        if (!$d) {
            log_message('error', 'MY_Form_validation: dimensions not detected.');
            return FALSE;
        }

        log_message('debug', $d[0] . ' ' . $d[1]);

        if ($d[0] >= $dim[0] && $d[1] >= $dim[1]) {
            return TRUE;
        }

        return FALSE;
    }

    // --------------------------------------------------------------------

    /**
     * Returns FALSE if the image is not the given dimension
     *
     * @access	public
     * @param	mixed
     * @param	array
     * @return	bool
     */
    function file_image_exactdim($file, $dim) {
        $dim = explode(',', $dim);

        if (count($dim) !== 2) {
            // Bad size given
            log_message('error', 'MY_Form_validation: invalid rule, expected similar to 150,300.');
            return FALSE;
        }

        //get image size
        $d = $this->get_image_dimension($file['tmp_name']);

        if (!$d) {
            log_message('error', 'MY_Form_validation: dimensions not detected.');
            return FALSE;
        }

        log_message('debug', $d[0] . ' ' . $d[1]);

        if ($d[0] == $dim[0] && $d[1] == $dim[1]) {
            return TRUE;
        }

        return FALSE;
    }

    // --------------------------------------------------------------------

    /**
     * Attempts to determine the image dimension
     *
     * @access	public
     * @param	mixed
     * @return	array
     */
    function get_image_dimension($file_name) {
        log_message('debug', $file_name);
        if (function_exists('getimagesize')) {
            $D = @getimagesize($file_name);

            return $D;
        }

        return FALSE;
    }

    // --------------------------------------------------------------------

    /**
     * Check if the field's value is in the list
     *
     * @access	public
     * @param	string
     * @param	string
     * @return	bool
     */
    function is_exactly($str, $list) {
        $list = str_replace(', ', ',', $list); // Just taking some precautions
        $list = explode(',', $list);

        if (!in_array(trim($str), $list)) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    // --------------------------------------------------------------------

    /**
     * Check if the field's value is not permitted
     *
     * @access	public
     * @param	string
     * @param	string
     * @return	bool
     */
    function is_not($str, $list) {
        $list = str_replace(', ', ',', $list); // Just taking some precautions
        $list = explode(',', $list);

        if (in_array(trim($str), $list)) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    /**
     * Error String
     *
     * Returns the error messages as a string, wrapped in the error delimiters
     *
     * @param   string
     * @param   string
     * @return  string
     */
    public function error_string($prefix = '', $suffix = '') {
        // No errors, validation passes!
        if (count($this->_error_array) === 0) {
            return '';
        }

        if ($prefix === '') {
            $prefix = $this->_error_prefix;
        }

        if ($suffix === '') {
            $suffix = $this->_error_suffix;
        }

        // Generate the error string
        $str = '';
        foreach ($this->_error_array as $val) {
            if ($val !== '') {
                //if field has more than one error, then all will be listed
                if (is_array($val)) {
                    foreach ($val as $v) {
                        $str .= $prefix . $v . $suffix . "\n";
                    }
                } else {
                    $str .= $prefix . $val . $suffix . "\n";
                }
            }
        }

        return $str;
    }

    public function wysiwyg_strip_tags($str) {
        return strip_tags($str, '<strong><b><p><ul><ol><li><a><span>');
    }

    // --------------------------------------------------------------------

    /**
     * Check if the field's value is a valid 24 hour
     *
     * @access	public
     * @param	string
     * @return	bool
     */
    function valid_hour($hour, $type) {
        if (substr_count($hour, ':') >= 2) {
            $has_seconds = TRUE;
        } else {
            $has_seconds = FALSE;
        }

        $pattern = "/^" . (($type == '24H') ? "([1-2][0-3]|[01]?[1-9])" : "(1[0-2]|0?[1-9])") . ":([0-5]?[0-9])" . (($has_seconds) ? ":([0-5]?[0-9])" : "") . (($type == '24H') ? '' : '( AM| PM| am| pm)') . "$/";

        if (preg_match($pattern, $hour)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // Function that simulates a date_parse_from_format for PHP versions 5.2 or lower.
    // snippet of code thanks to http://stackoverflow.com/questions/6668223/php-date-parse-from-format-alternative-in-php-5-2
    // thanks to Jeremy: http://stackoverflow.com/users/1955094/jeremy
    // thanks to Rudie: http://stackoverflow.com/users/247372/rudie

    private function _date_parse_from_format($format, $date) {
        // reverse engineer date formats
        $keys = array(
            'Y' => array('year', '\d{4}'),
            'y' => array('year', '\d{2}'),
            'm' => array('month', '\d{2}'),
            'n' => array('month', '\d{1,2}'),
            'M' => array('month', '[A-Z][a-z]{3}'),
            'F' => array('month', '[A-Z][a-z]{2,8}'),
            'd' => array('day', '\d{2}'),
            'j' => array('day', '\d{1,2}'),
            'D' => array('day', '[A-Z][a-z]{2}'),
            'l' => array('day', '[A-Z][a-z]{6,9}'),
            'u' => array('hour', '\d{1,6}'),
            'h' => array('hour', '\d{2}'),
            'H' => array('hour', '\d{2}'),
            'g' => array('hour', '\d{1,2}'),
            'G' => array('hour', '\d{1,2}'),
            'i' => array('minute', '\d{2}'),
            's' => array('second', '\d{2}')
        );

        // convert format string to regex
        $regex = '';
        $chars = str_split($format);
        foreach ($chars AS $n => $char) {
            $lastChar = isset($chars[$n - 1]) ? $chars[$n - 1] : '';
            $skipCurrent = '\\' == $lastChar;
            if (!$skipCurrent && isset($keys[$char])) {
                $regex .= '(?P<' . $keys[$char][0] . '>' . $keys[$char][1] . ')';
            } else if ('\\' == $char) {
                $regex .= $char;
            } else {
                $regex .= preg_quote($char);
            }
        }

        $dt = array();

        // now try to match it
        if (preg_match('#^' . $regex . '$#', $date, $dt)) {
            foreach ($dt AS $k => $v) {
                if (is_int($k)) {
                    unset($dt[$k]);
                }
            }
            if (!checkdate($dt['month'], $dt['day'], $dt['year'])) {
                $dt['error_count'] = 1;
            } else {
                $dt['error_count'] = 0;
            }
        } else {
            $dt['error_count'] = 1;
        }

        $dt['errors'] = array();
        $dt['fraction'] = '';
        $dt['warning_count'] = 0;
        $dt['warnings'] = array();
        $dt['is_localtime'] = 0;
        $dt['zone_type'] = 0;
        $dt['zone'] = 0;
        $dt['is_dst'] = '';

        return $dt;
    }

    // --------------------------------------------------------------------

    /**
     * Check if the field's value has a valid date format, if not provided,
     * it will use the $_standard_date_format value
     *
     * @access	public
     * @param	string
     * @return	bool
     */
    public function valid_date($str, $format = NULL) {
        if (is_null($format) or $format === FALSE) {
            $format = $this->_standard_date_format;
        }

        if (function_exists('date_parse_from_format')) {
            $parsed = date_parse_from_format($format, $str);
        } else {
            $parsed = $this->_date_parse_from_format($format, $str);
        }

        if ($parsed['warning_count'] > 0 or $parsed['error_count'] > 0) {
            return FALSE;
        }
        return TRUE;
    }

    // --------------------------------------------------------------------

    /**
     * Check if the field's value has a valid range of two date format, if not provided,
     * it will use the $_standard_date_format value
     *
     * @access	public
     * @param	string
     * @return	bool
     */
    public function valid_range_date($str, $format = NULL) {

        if (is_null($format) or $format === FALSE) {
            $format = $this->_standard_date_format;
        }

        $separation_char = '-';


        $exploded = explode($separation_char, $str);

        foreach ($exploded as $key => $e) {
            $exploded[$key] = trim($e);
        }

        if (count($exploded) > 2) {
            //in case we are using dates like Y-m-d and separation char is - etc...

            $sub_exploded = $exploded;
            $count_rows = count($exploded);

            $exploded = array();

            $vector_exploded = array();

            for ($i = 0; $i < ($count_rows / 2); $i++) {
                $vector_exploded[] = $sub_exploded[$i];
            }

            $exploded[0] = implode($separation_char, $vector_exploded);
            $vector_exploded = array();

            for ($i = ($count_rows / 2); $i < $count_rows; $i++) {
                $vector_exploded[] = $sub_exploded[$i];
            }

            $exploded[1] = implode($separation_char, $vector_exploded);
        }

        $dates = array();
        $valid_dates = TRUE;
        foreach ($exploded as $e) {
            if (function_exists('date_parse_from_format')) {
                $parsed = date_parse_from_format($format, $e);
            } else {
                $parsed = $this->_date_parse_from_format($format, $e);
            }


            $dates[] = $parsed;
            if ($parsed['warning_count'] > 0 or $parsed['error_count'] > 0) {
                $valid_dates = FALSE;
            }
        }
        if ($valid_dates == FALSE) {
            return FALSE;
        }
        //why use strtotime when you can get hardcore!
        if (mktime($dates[0]['hour'], $dates[0]['minute'], $dates[0]['second'], $dates[0]['month'], $dates[0]['day'], $dates[0]['year']) >
                mktime($dates[1]['hour'], $dates[1]['minute'], $dates[1]['second'], $dates[1]['month'], $dates[1]['day'], $dates[1]['year'])
        ) {
            return FALSE;
        }
        return TRUE;
    }

    /**
     * Max Length
     *
     * @access	public
     * @param	string
     * @param	value
     * @return	bool
     */
    function arabic($val) {
        if (!preg_match("/{Arabic}/", $val)) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function valid_datetime($val) {
        if (!preg_match("/([0-9]{4})-([0-9]{2})-([0-9]{2}) ([0-9]{2}):([0-9]{2}):([0-9]{2})/", $val))
            return FALSE;
        else
            return TRUE;
    }

    public function dropdown($str, $available_values = null) {
        if( ! $available_values)
            $check = (bool) preg_match('/^[\-+]?[0-9]+$/', $str);
        else{
            
            $check = (bool) preg_match('/^[\-+]?[0-9]+$/', $str);
        }
            
        if ($check) {
            
        } else {
            return FALSE;
        }
    }

    // --------------------------------------------------------------------

    /**
     * Validate URL
     *
     * @access    public
     * @param    string
     * @return    string
     */
    function valid_url($url) {
        $pattern = "/^((ht|f)tp(s?)\:\/\/|~/|/)?([w]{2}([\w\-]+\.)+([\w]{2,5}))(:[\d]{1,5})?/";
        if (!preg_match($pattern, $url)) {
            return FALSE;
        }

        return TRUE;
    }

    // --------------------------------------------------------------------

    /**
     * Real URL
     *
     * @access    public
     * @param    string
     * @return    string
     */
    function real_url($url) {
        return @fsockopen("$url", 80, $errno, $errstr, 30);
    }

}

/* End of file CIF_form_validation.php */
/* Location: ./application/libraries/CIF_form_validation.php */