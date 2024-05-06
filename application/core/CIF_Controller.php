<?php

/**
 * The master controller, it prepare the languages and global configurations
 * 
 * @version 1.0
 */
class CIF_Controller extends CI_Controller {

//    public $lang;
//    public $language;
    protected $data = array();
    public $language_id;
    protected $module;
    protected $action;
    protected $hash;

    public function __construct() {
        parent::__construct();


        if (!session('visitor')) {
            session('visitor', 1);
            $this->db->where('key', 'visitors')->set('value', 'value+1', false)->update('settings');
        }
        if (session('user_id') && session('password'))
            if ($user = $this->db->where('user_id', session('user_id'))->where('password', session('password'))->get('users')->row()) {
                $this->data['user'] = $user;
            } else {
                session('user_id', "");
                session('password', "");
            }
        $this->lang->load("global");
    }
    
      /**
     * Render this page
     */
    function render($template = null, $data = []) {
        global $OUT;

        $output = $this->output->get_output();
        
        $data['that'] = & $this;
        
        $content = $this->load->view($template, $data, true);
        
        $layout = str_replace('{layout}', $content, $this->load->view('layout/' . $this->layout, $data, true));

        $OUT->_display($layout);
    }

    protected function permission($permission = null) {
        if (!session('user_id'))
            redirect('admin/login');
        if (!$permission)
            return;

        $user = $this->db->where('user_id', session('user_id'))->get('users')->row();
        $selected_permission = array();
        if ($user->permissions)
            $selected_permission = array_keys(unserialize($user->permissions));
        if (!in_array($permission, $selected_permission))
            die("<script>
                    alert('Permission Denied');
                    window.history.go(-1);
                </script>");
//            show_error("Permission Denied");
    }

    

    public function __destruct() {
        if (!headers_sent())
            return $this->response();
    }

    public function response(array $data = null) {
        $result = [];

        if ($this->output)
            return;

        if (count($this->_errors) || validation_errors())
            $result = [
                'error' => true,
                'message' => $this->_errors ? implode("<br />", $this->_errors) : nl2br(implode("<br />", validation_errors()))
            ];
        else
            $result = [
                'error' => false
            ];

        if ($data)
            $result['data'] = $data;
        else
            $result['data'] = $this->_data;

        echo json_encode($result);
        $this->output = true;
        exit(200);
    }

    public function validation_errors() {
        $string = strip_tags($this->form_validation->error_string(), '<a>');
        return explode(PHP_EOL, trim($string, PHP_EOL));
    }

}
