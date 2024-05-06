<?php

// script, homepage meta tags
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class About extends CIF_Controller {

    public $layout = 'full';
    public $module = "about";

    public function __construct() {
        parent::__construct();
        $this->load->model('About_model');
        $this->permission();
    }

    public function index() {
        $this->load->library("form_validation");
        $config['upload_path'] = './cdn/about/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
        $this->load->library('upload', $config);
        $data['item'] = new stdClass();
        foreach ($this->About_model->get() as $about) {
            $data['item']->{ $about->key } = $about->value;
            $this->form_validation->set_rules($about->key, 'lang:global_' . $about->key, "trim");
        }
        $this->form_validation->set_rules('image', 'lang:global_avatar', "callback_image");
        $this->form_validation->set_rules('resume', 'lang:global_resume', "callback_resume");
        if ($this->form_validation->run() == false) {
            $this->load->view("about/manage", $data);
        } else {
            foreach ($this->input->post('about') as $key => $value) {
                $this->About_model->key = $key;
                $this->About_model->value = $value;
                $this->About_model->save();
            }
            redirect("admin/about");
        }
    }

    public function image($var) {

        if ($this->upload->do_upload('avatar')) {
            $data = $this->upload->data();
            if ($data['file_name']) {
                $this->About_model->key = 'avatar';
                $this->About_model->value = $data['file_name'];
                $this->About_model->save();
            }
        }
        return true;
    }
    public function resume($var) {

        if ($this->upload->do_upload('resume')) {
            $data = $this->upload->data();
            if ($data['file_name']) {
                $this->About_model->key = 'resume';
                $this->About_model->value = $data['file_name'];
                $this->About_model->save();
            }
        }
        return true;
    }

}
