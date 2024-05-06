<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */
// ------------------------------------------------------------------------

/**
 * CodeIgniter Form Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/helpers/form_helper.html
 */
// ------------------------------------------------------------------------

/**
 * Form Declaration
 *
 * Creates the opening portion of the form.
 *
 * @access	public
 * @param	string	the URI segments of the form destination
 * @param	array	a key/value pair of attributes
 * @param	array	a key/value pair hidden data
 * @return	string
 */
if (!function_exists('form_open')) {

    function form_open($action = '', $attributes = '', $hidden = array()) {
        $CI = & get_instance();

        if ($attributes == '') {
            $attributes = 'method="post"';
        }

        // If an action is not a full URL then turn it into one
        if ($action && strpos($action, '://') === FALSE) {
            $action = $CI->config->site_url($action);
        }

        // If no action is provided then set to the current url
        $action OR $action = $CI->config->site_url($CI->uri->uri_string());

        $form = '<form action="' . $action . '"';

        $form .= _attributes_to_string($attributes, TRUE);

        $form .= '>';

        // Add CSRF field if enabled, but leave it out for GET requests and requests to external websites	
        if ($CI->config->item('csrf_protection') === TRUE AND !(strpos($action, $CI->config->base_url()) === FALSE OR strpos($form, 'method="get"'))) {
            $hidden[$CI->security->get_csrf_token_name()] = $CI->security->get_csrf_hash();
        }

        if (is_array($hidden) AND count($hidden) > 0) {
            $form .= sprintf("<div style=\"display:none\">%s</div>", form_hidden($hidden));
        }

        return $form;
    }

}

// ------------------------------------------------------------------------

/**
 * Form Declaration - Multipart type
 *
 * Creates the opening portion of the form, but with "multipart/form-data".
 *
 * @access	public
 * @param	string	the URI segments of the form destination
 * @param	array	a key/value pair of attributes
 * @param	array	a key/value pair hidden data
 * @return	string
 */
if (!function_exists('form_open_multipart')) {

    function form_open_multipart($action = '', $attributes = array(), $hidden = array()) {
        if (is_string($attributes)) {
            $attributes .= ' enctype="multipart/form-data"';
        } else {
            $attributes['enctype'] = 'multipart/form-data';
        }

        return form_open($action, $attributes, $hidden);
    }

}

// ------------------------------------------------------------------------

/**
 * Hidden Input Field
 *
 * Generates hidden fields.  You can pass a simple key/value string or an associative
 * array with multiple values.
 *
 * @access	public
 * @param	mixed
 * @param	string
 * @return	string
 */
if (!function_exists('form_hidden')) {

    function form_hidden($name, $value = '', $recursing = FALSE) {
        static $form;

        if ($recursing === FALSE) {
            $form = "\n";
        }

        if (is_array($name)) {
            foreach ($name as $key => $val) {
                form_hidden($key, $val, TRUE);
            }
            return $form;
        }

        if (!is_array($value)) {
            $form .= '<input type="hidden" name="' . $name . '" value="' . form_prep($value, $name) . '" />' . "\n";
        } else {
            foreach ($value as $k => $v) {
                $k = (is_int($k)) ? '' : $k;
                form_hidden($name . '[' . $k . ']', $v, TRUE);
            }
        }

        return $form;
    }

}

// ------------------------------------------------------------------------

/**
 * Text Input Field
 *
 * @access	public
 * @param	mixed
 * @param	string
 * @param	string
 * @return	string
 */
if (!function_exists('form_input')) {

    function form_input($data = '', $value = '', $extra = '') {
        $defaults = array('type' => 'text', 'name' => ((!is_array($data)) ? $data : ''), 'value' => $value);

        return "<input " . _parse_form_attributes($data, $defaults) . $extra . " />";
    }

}

if (!function_exists('form_email')) {

    function form_email($data = '', $value = '', $extra = '') {
        $defaults = array('type' => 'email', 'name' => ((!is_array($data)) ? $data : ''), 'value' => $value);

        return "<input " . _parse_form_attributes($data, $defaults) . $extra . " />";
    }

}

if (!function_exists('form_color')) {

    function form_color($data = '', $value = '', $extra = '') {
        $defaults = array('type' => 'color', 'name' => ((!is_array($data)) ? $data : ''), 'value' => $value);

        return "<input " . _parse_form_attributes($data, $defaults) . $extra . " />";
    }

}

if (!function_exists('form_url')) {

    function form_url($data = '', $value = '', $extra = '') {
        $defaults = array('type' => 'url', 'name' => ((!is_array($data)) ? $data : ''), 'value' => $value);

        return "<input " . _parse_form_attributes($data, $defaults) . $extra . " />";
    }

}

if (!function_exists('form_date')) {

    function form_date($data = '', $value = '', $extra = '') {
        $defaults = array('type' => 'date', 'name' => ((!is_array($data)) ? $data : ''), 'value' => $value);

        return "<input " . _parse_form_attributes($data, $defaults) . $extra . " />";
    }

}

if (!function_exists('form_time')) {

    function form_time($data = '', $value = '', $extra = '') {
        $defaults = array('type' => 'time', 'name' => ((!is_array($data)) ? $data : ''), 'value' => $value);

        return "<input " . _parse_form_attributes($data, $defaults) . $extra . " />";
    }

}

if (!function_exists('form_datetime')) {

    function form_datetime($data = '', $value = '', $extra = '') {
        $defaults = array('type' => 'datetime', 'name' => ((!is_array($data)) ? $data : ''), 'value' => $value);

        return "<input " . _parse_form_attributes($data, $defaults) . $extra . " />";
    }

}

if (!function_exists('form_range')) {

    function form_range($data = '', $value = '', $extra = '') {
        $defaults = array('type' => 'range', 'name' => ((!is_array($data)) ? $data : ''), 'value' => $value);

        return "<input " . _parse_form_attributes($data, $defaults) . $extra . " />";
    }

}

if (!function_exists('form_week')) {

    function form_week($data = '', $value = '', $extra = '') {
        $defaults = array('type' => 'week', 'name' => ((!is_array($data)) ? $data : ''), 'value' => $value);

        return "<input " . _parse_form_attributes($data, $defaults) . $extra . " />";
    }

}

if (!function_exists('form_month')) {

    function form_month($data = '', $value = '', $extra = '') {
        $defaults = array('type' => 'month', 'name' => ((!is_array($data)) ? $data : ''), 'value' => $value);

        return "<input " . _parse_form_attributes($data, $defaults) . $extra . " />";
    }

}

if (!function_exists('form_search')) {

    function form_search($data = '', $value = '', $extra = '') {
        $defaults = array('type' => 'search', 'name' => ((!is_array($data)) ? $data : ''), 'value' => $value);

        return "<input " . _parse_form_attributes($data, $defaults) . $extra . " />";
    }

}

if (!function_exists('form_tel')) {

    function form_tel($data = '', $value = '', $extra = '') {
        $defaults = array('type' => 'tel', 'name' => ((!is_array($data)) ? $data : ''), 'value' => $value);

        return "<input " . _parse_form_attributes($data, $defaults) . $extra . " />";
    }

}

if (!function_exists('form_number')) {

    function form_number($data = '', $value = '', $extra = '') {
        $defaults = array('type' => 'number', 'name' => ((!is_array($data)) ? $data : ''), 'value' => $value);

        return "<input " . _parse_form_attributes($data, $defaults) . $extra . " />";
    }

}


// ------------------------------------------------------------------------

/**
 * Password Field
 *
 * Identical to the input function but adds the "password" type
 *
 * @access	public
 * @param	mixed
 * @param	string
 * @param	string
 * @return	string
 */
if (!function_exists('form_password')) {

    function form_password($data = '', $value = '', $extra = '') {
        if (!is_array($data)) {
            $data = array('name' => $data);
        }

        $data['type'] = 'password';
        return form_input($data, $value, $extra);
    }

}

// ------------------------------------------------------------------------

/**
 * Upload Field
 *
 * Identical to the input function but adds the "file" type
 *
 * @access	public
 * @param	mixed
 * @param	string
 * @param	string
 * @return	string
 */
if (!function_exists('form_upload')) {

    function form_upload($data = '', $value = '', $extra = '') {
        if (!is_array($data)) {
            $data = array('name' => $data);
        }

        $data['type'] = 'file';
        return form_input($data, $value, $extra);
    }

}

// ------------------------------------------------------------------------

/**
 * Textarea field
 *
 * @access	public
 * @param	mixed
 * @param	string
 * @param	string
 * @return	string
 */
if (!function_exists('form_textarea')) {

    function form_textarea($data = '', $value = '', $extra = '') {
        $defaults = array('name' => ((!is_array($data)) ? $data : ''), 'cols' => '40', 'rows' => '10');

        if (!is_array($data) OR !isset($data['value'])) {
            $val = $value;
        } else {
            $val = $data['value'];
            unset($data['value']); // textareas don't use the value attribute
        }

        $name = (is_array($data)) ? $data['name'] : $data;
        return "<textarea " . _parse_form_attributes($data, $defaults) . $extra . ">" . form_prep($val, $name) . "</textarea>";
    }

}

// ------------------------------------------------------------------------

/**
 * Multi-select menu
 *
 * @access	public
 * @param	string
 * @param	array
 * @param	mixed
 * @param	string
 * @return	type
 */
if (!function_exists('form_multiselect')) {

    function form_multiselect($name = '', $options = array(), $selected = array(), $extra = '') {
        if (!strpos($extra, 'multiple')) {
            $extra .= ' multiple="multiple"';
        }

        return form_dropdown($name, $options, $selected, $extra);
    }

}

// --------------------------------------------------------------------

/**
 * Drop-down Menu
 *
 * @access	public
 * @param	string
 * @param	array
 * @param	string
 * @param	string
 * @return	string
 */
if (!function_exists('form_dropdown')) {

    function form_dropdown($name = '', $options = FALSE, $selected = array(), $extra = '') {
        if (!is_array($selected)) {
            $selected = array($selected);
        }
        if (!$options)
            $options = ddgen(str_replace('_id', '', $name));
        // If no selected state was submitted we will attempt to set it automatically
        if (count($selected) === 0) {
            // If the form name appears in the $_POST array we have a winner!
            if (isset($_POST[$name])) {
                $selected = array($_POST[$name]);
            }
        }

        if ($extra != '')
            $extra = ' ' . $extra;

        $multiple = (count($selected) > 1 && strpos($extra, 'multiple') === FALSE) ? ' multiple="multiple"' : '';

        $form = '<select name="' . $name . '"' . $extra . $multiple . ">\n";


        foreach ($options as $key => $val) {
            $key = (string) $key;

            if (is_array($val) && !empty($val)) {
                $form .= '<optgroup label="' . $key . '">' . "\n";

                foreach ($val as $optgroup_key => $optgroup_val) {
                    $sel = (in_array($optgroup_key, $selected)) ? ' selected="selected"' : '';

                    $form .= '<option value="' . $optgroup_key . '"' . $sel . '>' . (string) $optgroup_val . "</option>\n";
                }

                $form .= '</optgroup>' . "\n";
            } else {
                $sel = (in_array($key, $selected)) ? ' selected="selected"' : '';

                $form .= '<option value="' . $key . '"' . $sel . '>' . (string) $val . "</option>\n";
            }
        }

        $form .= '</select>';

        return $form;
    }

}

// --------------------------------------------------------------------

/**
 * Drop-down Menu Generator
 *
 * @access	public
 * @param	string
 * @param	array
 * @param	array
 * @param	string
 * @return	array
 */
if (!function_exists('ddgen')) {

    function ddgen($table = FALSE, $structure = FALSE, $statements = FALSE, $order_by = FALSE, $direct = FALSE) {
        $data["items"] = array();
        $CI = & get_instance();


        if (!$structure) {
            $items = $CI->db->query("SHOW COLUMNS FROM $table")->result();
            foreach ($items as $item) {
                if ($item->Key == 'PRI')
                    $key = $item->Field;

                if (!isset($value)) {
                    if (strpos($item->Field, "name") !== FALSE or strpos($item->Field, "title") !== FALSE)
                        $value = $item->Field;
                }
                else
                    $value = $key;
                if (isset($key) && isset($value))
                    break;
            }
            $structure = array($key, $value);
        }

        if ($structure && !is_array($structure))
            return array('Invalid Structure');

        if (!$table)
            return array('Invalid Table');

        if (!$direct)
            $data['items'] = array('' => lang('global_select_from_menu'));

        $key = $structure['0'];
        $value = $structure['1'];
        // TODO MUHAMMAD
        if ($order_by && is_array($order_by))
            $CI->db->order_by($order_by[0], $order_by[1]);

        if ($statements)
            foreach ($statements as $statementKey => $statementValue)
                $CI->db->where($statementKey, $statementValue);

        $CI->db->select(implode(', ', $structure));
        $items = $CI->db->get($table)->result();

        foreach ($items as $item) {
            $data['items'][$item->$key] = $item->$value;
        }
        return $data['items'];
    }

}


// ------------------------------------------------------------------------

/**
 * Checkbox Field
 *
 * @access	public
 * @param	mixed
 * @param	string
 * @param	bool
 * @param	string
 * @return	string
 */
if (!function_exists('form_checkbox')) {

    function form_checkbox($data = '', $value = '', $checked = FALSE, $extra = '') {
        $defaults = array('type' => 'checkbox', 'name' => ((!is_array($data)) ? $data : ''), 'value' => $value);

        if (is_array($data) AND array_key_exists('checked', $data)) {
            $checked = $data['checked'];

            if ($checked == FALSE) {
                unset($data['checked']);
            } else {
                $data['checked'] = 'checked';
            }
        }

        if ($checked == TRUE) {
            $defaults['checked'] = 'checked';
        } else {
            unset($defaults['checked']);
        }

        return "<input " . _parse_form_attributes($data, $defaults) . $extra . " />";
    }

}

// ------------------------------------------------------------------------

/**
 * Radio Button
 *
 * @access	public
 * @param	mixed
 * @param	string
 * @param	bool
 * @param	string
 * @return	string
 */
if (!function_exists('form_radio')) {

    function form_radio($data = '', $value = '', $checked = FALSE, $extra = '') {
        if (!is_array($data)) {
            $data = array('name' => $data);
        }

        $data['type'] = 'radio';
        return form_checkbox($data, $value, $checked, $extra);
    }

}

// ------------------------------------------------------------------------

/**
 * Submit Button
 *
 * @access	public
 * @param	mixed
 * @param	string
 * @param	string
 * @return	string
 */
if (!function_exists('form_submit')) {

    function form_submit($data = '', $value = '', $extra = '') {
        $defaults = array('type' => 'submit', 'name' => ((!is_array($data)) ? $data : ''), 'value' => $value);

        return "<input " . _parse_form_attributes($data, $defaults) . $extra . " />";
    }

}

// ------------------------------------------------------------------------

/**
 * Reset Button
 *
 * @access	public
 * @param	mixed
 * @param	string
 * @param	string
 * @return	string
 */
if (!function_exists('form_reset')) {

    function form_reset($data = '', $value = '', $extra = '') {
        $defaults = array('type' => 'reset', 'name' => ((!is_array($data)) ? $data : ''), 'value' => $value);

        return "<input " . _parse_form_attributes($data, $defaults) . $extra . " />";
    }

}

// ------------------------------------------------------------------------

/**
 * Form Button
 *
 * @access	public
 * @param	mixed
 * @param	string
 * @param	string
 * @return	string
 */
if (!function_exists('form_button')) {

    function form_button($data = '', $content = '', $extra = '') {
        $defaults = array('name' => ((!is_array($data)) ? $data : ''), 'type' => 'button');

        if (is_array($data) AND isset($data['content'])) {
            $content = $data['content'];
            unset($data['content']); // content is not an attribute
        }

        return "<button " . _parse_form_attributes($data, $defaults) . $extra . ">" . $content . "</button>";
    }

}

// ------------------------------------------------------------------------

/**
 * Form Label Tag
 *
 * @access	public
 * @param	string	The text to appear onscreen
 * @param	string	The id the label applies to
 * @param	string	Additional attributes
 * @return	string
 */
if (!function_exists('form_label')) {

    function form_label($label_text = '', $id = '', $attributes = array()) {

        $label = '<label';

        if ($id != '') {
            $label .= " for=\"$id\"";
        }

        if (is_array($attributes) AND count($attributes) > 0) {
            foreach ($attributes as $key => $val) {
                $label .= ' ' . $key . '="' . $val . '"';
            }
        }

        $label .= ">$label_text</label>";

        return $label;
    }

}

// ------------------------------------------------------------------------
/**
 * Fieldset Tag
 *
 * Used to produce <fieldset><legend>text</legend>.  To close fieldset
 * use form_fieldset_close()
 *
 * @access	public
 * @param	string	The legend text
 * @param	string	Additional attributes
 * @return	string
 */
if (!function_exists('form_fieldset')) {

    function form_fieldset($legend_text = '', $attributes = array()) {
        $fieldset = "<fieldset";

        $fieldset .= _attributes_to_string($attributes, FALSE);

        $fieldset .= ">\n";

        if ($legend_text != '') {
            $fieldset .= "<legend>$legend_text</legend>\n";
        }

        return $fieldset;
    }

}

// ------------------------------------------------------------------------

/**
 * Fieldset Close Tag
 *
 * @access	public
 * @param	string
 * @return	string
 */
if (!function_exists('form_fieldset_close')) {

    function form_fieldset_close($extra = '') {
        return "</fieldset>" . $extra;
    }

}

// ------------------------------------------------------------------------

/**
 * Form Close Tag
 *
 * @access	public
 * @param	string
 * @return	string
 */
if (!function_exists('form_close')) {

    function form_close($extra = '') {
        return "</form>" . $extra;
    }

}

// ------------------------------------------------------------------------

/**
 * Form Prep
 *
 * Formats text so that it can be safely placed in a form field in the event it has HTML tags.
 *
 * @access	public
 * @param	string
 * @return	string
 */
if (!function_exists('form_prep')) {

    function form_prep($str = '', $field_name = '') {
        static $prepped_fields = array();

        // if the field name is an array we do this recursively
        if (is_array($str)) {
            foreach ($str as $key => $val) {
                $str[$key] = form_prep($val);
            }

            return $str;
        }

        if ($str === '') {
            return '';
        }

        // we've already prepped a field with this name
        // @todo need to figure out a way to namespace this so
        // that we know the *exact* field and not just one with
        // the same name
        if (isset($prepped_fields[$field_name])) {
            return $str;
        }

        $str = htmlspecialchars($str);

        // In case htmlspecialchars misses these.
        $str = str_replace(array("'", '"'), array("&#39;", "&quot;"), $str);

        if ($field_name != '') {
            $prepped_fields[$field_name] = $field_name;
        }

        return $str;
    }

}

// ------------------------------------------------------------------------

/**
 * Form Value
 *
 * Grabs a value from the POST array for the specified field so you can
 * re-populate an input field or textarea.  If Form Validation
 * is active it retrieves the info from the validation class
 *
 * @access	public
 * @param	string
 * @return	mixed
 */
if (!function_exists('set_value')) {

    function set_value($field = '', $default = '') {
        if (isset($_GET[$field])) {
            return $_GET[$field];
        }
        if (FALSE === ($OBJ = & _get_validation_object())) {
            if (!isset($_POST[$field])) {
                return $default;
            }

            return form_prep($_POST[$field], $field);
        }

        return form_prep($OBJ->set_value($field, $default), $field);
    }

}

// ------------------------------------------------------------------------

/**
 * Set Select
 *
 * Let's you set the selected value of a <select> menu via data in the POST array.
 * If Form Validation is active it retrieves the info from the validation class
 *
 * @access	public
 * @param	string
 * @param	string
 * @param	bool
 * @return	string
 */
if (!function_exists('set_select')) {

    function set_select($field = '', $value = '', $default = FALSE) {
        $OBJ = & _get_validation_object();

        if ($OBJ === FALSE) {
            if (!isset($_POST[$field])) {
                if (count($_POST) === 0 AND $default == TRUE) {
                    return ' selected="selected"';
                }
                return '';
            }

            $field = $_POST[$field];

            if (is_array($field)) {
                if (!in_array($value, $field)) {
                    return '';
                }
            } else {
                if (($field == '' OR $value == '') OR ($field != $value)) {
                    return '';
                }
            }

            return ' selected="selected"';
        }

        return $OBJ->set_select($field, $value, $default);
    }

}

// ------------------------------------------------------------------------

/**
 * Set Checkbox
 *
 * Let's you set the selected value of a checkbox via the value in the POST array.
 * If Form Validation is active it retrieves the info from the validation class
 *
 * @access	public
 * @param	string
 * @param	string
 * @param	bool
 * @return	string
 */
if (!function_exists('set_checkbox')) {

    function set_checkbox($field = '', $value = '', $default = FALSE) {
        $OBJ = & _get_validation_object();

        if ($OBJ === FALSE) {
            if (!isset($_POST[$field])) {
                if (count($_POST) === 0 AND $default == TRUE) {
                    return ' checked="checked"';
                }
                return '';
            }

            $field = $_POST[$field];

            if (is_array($field)) {
                if (!in_array($value, $field)) {
                    return '';
                }
            } else {
                if (($field == '' OR $value == '') OR ($field != $value)) {
                    return '';
                }
            }

            return ' checked="checked"';
        }

        return $OBJ->set_checkbox($field, $value, $default);
    }

}

// ------------------------------------------------------------------------

/**
 * Set Radio
 *
 * Let's you set the selected value of a radio field via info in the POST array.
 * If Form Validation is active it retrieves the info from the validation class
 *
 * @access	public
 * @param	string
 * @param	string
 * @param	bool
 * @return	string
 */
if (!function_exists('set_radio')) {

    function set_radio($field = '', $value = '', $default = FALSE) {
        $OBJ = & _get_validation_object();

        if ($OBJ === FALSE) {
            if (!isset($_POST[$field])) {
                if (count($_POST) === 0 AND $default == TRUE) {
                    return ' checked="checked"';
                }
                return '';
            }

            $field = $_POST[$field];

            if (is_array($field)) {
                if (!in_array($value, $field)) {
                    return '';
                }
            } else {
                if (($field == '' OR $value == '') OR ($field != $value)) {
                    return '';
                }
            }

            return ' checked="checked"';
        }

        return $OBJ->set_radio($field, $value, $default);
    }

}

// ------------------------------------------------------------------------

/**
 * Form Error
 *
 * Returns the error for a specific form field.  This is a helper for the
 * form validation class.
 *
 * @access	public
 * @param	string
 * @param	string
 * @param	string
 * @return	string
 */
if (!function_exists('form_error')) {

    function form_error($field = '', $prefix = '', $suffix = '') {
        if (FALSE === ($OBJ = & _get_validation_object())) {
            return '';
        }

        return $OBJ->error($field, $prefix, $suffix);
    }

}

// ------------------------------------------------------------------------

/**
 * Validation Error String
 *
 * Returns all the errors associated with a form submission.  This is a helper
 * function for the form validation class.
 *
 * @access	public
 * @param	string
 * @param	string
 * @return	string
 */
if (!function_exists('validation_errors')) {

    function validation_errors($prefix = '', $suffix = '') {
        if (FALSE === ($OBJ = & _get_validation_object())) {
            return '';
        }

        return $OBJ->error_string($prefix, $suffix);
    }

}

// ------------------------------------------------------------------------

/**
 * Parse the form attributes
 *
 * Helper function used by some of the form helpers
 *
 * @access	private
 * @param	array
 * @param	array
 * @return	string
 */
if (!function_exists('_parse_form_attributes')) {

    function _parse_form_attributes($attributes, $default) {
        if (is_array($attributes)) {
            foreach ($default as $key => $val) {
                if (isset($attributes[$key])) {
                    $default[$key] = $attributes[$key];
                    unset($attributes[$key]);
                }
            }

            if (count($attributes) > 0) {
                $default = array_merge($default, $attributes);
            }
        }

        $att = '';

        foreach ($default as $key => $val) {
            if ($key == 'value') {
                $val = form_prep($val, $default['name']);
            }

            $att .= $key . '="' . $val . '" ';
        }

        return $att;
    }

}

// ------------------------------------------------------------------------

/**
 * Attributes To String
 *
 * Helper function used by some of the form helpers
 *
 * @access	private
 * @param	mixed
 * @param	bool
 * @return	string
 */
if (!function_exists('_attributes_to_string')) {

    function _attributes_to_string($attributes, $formtag = FALSE) {
        if (is_string($attributes) AND strlen($attributes) > 0) {
            if ($formtag == TRUE AND strpos($attributes, 'method=') === FALSE) {
                $attributes .= ' method="post"';
            }

            if ($formtag == TRUE AND strpos($attributes, 'accept-charset=') === FALSE) {
                $attributes .= ' accept-charset="' . strtolower(config_item('charset')) . '"';
            }

            return ' ' . $attributes;
        }

        if (is_object($attributes) AND count($attributes) > 0) {
            $attributes = (array) $attributes;
        }

        if (is_array($attributes) AND count($attributes) > 0) {
            $atts = '';

            if (!isset($attributes['method']) AND $formtag === TRUE) {
                $atts .= ' method="post"';
            }

            if (!isset($attributes['accept-charset']) AND $formtag === TRUE) {
                $atts .= ' accept-charset="' . strtolower(config_item('charset')) . '"';
            }

            foreach ($attributes as $key => $val) {
                $atts .= ' ' . $key . '="' . $val . '"';
            }

            return $atts;
        }
    }

}

// ------------------------------------------------------------------------

/**
 * Validation Object
 *
 * Determines what the form validation class was instantiated as, fetches
 * the object and returns it.
 *
 * @access	private
 * @return	mixed
 */
if (!function_exists('_get_validation_object')) {

    function &_get_validation_object() {
        $CI = & get_instance();

        // We set this as a variable since we're returning by reference.
        $return = FALSE;

        if (FALSE !== ($object = $CI->load->is_loaded('form_validation'))) {
            if (!isset($CI->$object) OR !is_object($CI->$object)) {
                return $return;
            }

            return $CI->$object;
        }

        return $return;
    }

}


function permalink($string) {
    return strtolower(trim(preg_replace('~[^0-9a-zلإ-لآ-أ-لآ-ض-ص-ث-ق-ف-غ-ع-ه-خ-ح-ج-د-ط-ك-م-ن-ت-ا-ل-ب-ي-س-ش-ئ-ء-ؤ-ر-ل-ا-ى-ة-و-ز-ظ-إ]+~i', '-', html_entity_decode(preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($string, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), '-'));

}
/* End of file form_helper.php */
/* Location: ./system/helpers/form_helper.php */
function utf8_uri_encode( $utf8_string, $length = 0 ) {
    $unicode = '';
    $values = array();
    $num_octets = 1;
    $unicode_length = 0;

    $string_length = strlen( $utf8_string );
    for ($i = 0; $i < $string_length; $i++ ) {

        $value = ord( $utf8_string[ $i ] );

        if ( $value < 128 ) {
            if ( $length && ( $unicode_length >= $length ) )
                break;
            $unicode .= chr($value);
            $unicode_length++;
        } else {
            if ( count( $values ) == 0 ) $num_octets = ( $value < 224 ) ? 2 : 3;

            $values[] = $value;

            if ( $length && ( $unicode_length + ($num_octets * 3) ) > $length )
                break;
            if ( count( $values ) == $num_octets ) {
                if ($num_octets == 3) {
                    $unicode .= '%' . dechex($values[0]) . '%' . dechex($values[1]) . '%' . dechex($values[2]);
                    $unicode_length += 9;
                } else {
                    $unicode .= '%' . dechex($values[0]) . '%' . dechex($values[1]);
                    $unicode_length += 6;
                }

                $values = array();
                $num_octets = 1;
            }
        }
    }

    return $unicode;
}

//taken from wordpress
function seems_utf8($str) {
    $length = strlen($str);
    for ($i=0; $i < $length; $i++) {
        $c = ord($str[$i]);
        if ($c < 0x80) $n = 0; # 0bbbbbbb
        elseif (($c & 0xE0) == 0xC0) $n=1; # 110bbbbb
        elseif (($c & 0xF0) == 0xE0) $n=2; # 1110bbbb
        elseif (($c & 0xF8) == 0xF0) $n=3; # 11110bbb
        elseif (($c & 0xFC) == 0xF8) $n=4; # 111110bb
        elseif (($c & 0xFE) == 0xFC) $n=5; # 1111110b
        else return false; # Does not match any model
        for ($j=0; $j<$n; $j++) { # n bytes matching 10bbbbbb follow ?
            if ((++$i == $length) || ((ord($str[$i]) & 0xC0) != 0x80))
                return false;
        }
    }
    return true;
}

//function sanitize_title_with_dashes taken from wordpress
function sanitize($title) {
    $title = strip_tags($title);
    // Preserve escaped octets.
    $title = preg_replace('|%([a-fA-F0-9][a-fA-F0-9])|', '---$1---', $title);
    // Remove percent signs that are not part of an octet.
    $title = str_replace('%', '', $title);
    // Restore octets.
    $title = preg_replace('|---([a-fA-F0-9][a-fA-F0-9])---|', '%$1', $title);

    if (seems_utf8($title)) {
        if (function_exists('mb_strtolower')) {
            $title = mb_strtolower($title, 'UTF-8');
        }
        $title = utf8_uri_encode($title, 200);
    }

    $title = strtolower($title);
    $title = preg_replace('/&.+?;/', '', $title); // kill entities
    $title = str_replace('.', '-', $title);
    $title = preg_replace('/[^%a-z0-9 _-]/', '', $title);
    $title = preg_replace('/\s+/', '-', $title);
    $title = preg_replace('|-+|', '-', $title);
    $title = trim($title, '-');

    return $title;
}
