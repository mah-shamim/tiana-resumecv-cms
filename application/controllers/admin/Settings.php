<?php

// script, homepage meta tags
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Settings extends CIF_Controller {

    public $layout = 'full';
    public $module = "settings";
    public $image_file = null;

    public function __construct() {
        parent::__construct();
        $this->load->model('settings_model');
        $this->permission();
    }

    public function index() {
        $this->load->library("form_validation");
        $config['upload_path'] = './cdn/settings/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
        $this->load->library('upload', $config);
        $data['item'] = new stdClass();
        foreach ($this->settings_model->get() as $setting) {
            $data['item']->{ $setting->key } = $setting->value;
            $this->form_validation->set_rules('setting[' . $setting->key . ']', 'lang:settings_' . $setting->key, "trim");
        }
        $this->form_validation->set_rules('favicon', 'lang:global_favicon', "callback_favicon");
        $this->form_validation->set_rules('about_bg', 'lang:global_about_bg', "callback_about_bg");
        $this->form_validation->set_rules('contact_bg', 'lang:global_contact_bg', "callback_contact_bg");
        $this->form_validation->set_rules('home_bg', 'lang:global_home_bg', "callback_home_bg");

        if ($this->form_validation->run() == false) {
            $this->load->view("settings/manage", $data);
        } else {
            foreach ($this->input->post('setting') as $key => $value) {
                $this->settings_model->key = $key;
                $this->settings_model->value = $value;
                $this->settings_model->save();
            }
            redirect("admin/settings");
        }
    }

    public function favicon($var) {

        if ($this->upload->do_upload('favicon')) {
            $data = $this->upload->data();
            if ($data['file_name']) {
                $this->settings_model->key = 'favicon';
                $this->settings_model->value = $data['file_name'];
                $this->settings_model->save();
            }
        }
        return true;
    }
    public function about_bg($var) {

        if ($this->upload->do_upload('about_bg')) {
            $data = $this->upload->data();
            if ($data['file_name']) {
                $this->settings_model->key = 'about_bg';
                $this->settings_model->value = $data['file_name'];
                $this->settings_model->save();
            }
        }
        return true;
    }
    public function contact_bg($var) {

        if ($this->upload->do_upload('contact_bg')) {
            $data = $this->upload->data();
            if ($data['file_name']) {
                $this->settings_model->key = 'contact_bg';
                $this->settings_model->value = $data['file_name'];
                $this->settings_model->save();
            }
        }
        return true;
    }
    public function home_bg($var) {

        if ($this->upload->do_upload('home_bg')) {
            $data = $this->upload->data();
            if ($data['file_name']) {
                $this->settings_model->key = 'home_bg';
                $this->settings_model->value = $data['file_name'];
                $this->settings_model->save();
            }
        }
        return true;
    }

}
