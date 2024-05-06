<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contactus extends CIF_Controller {

    public $layout = 'full';
    public $module = 'contactus';
    public $model = 'Contactus_model';

    public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
        $this->permission();
    }

    public function manage($id = FALSE) {
        $data = array();

        if ($id) {
            $this->{$this->model}->{$this->_primary_key} = $id;
            $data['item'] = $this->{$this->model}->get();
            if (!$data['item'])
                show_404();
        } else {
            $data['item'] = new Std();
        }
        $this->load->library("form_validation");
        $this->form_validation->set_rules('phone', 'phone', 'trim');
        $this->form_validation->set_rules('fax', 'fax', 'trim');
        $this->form_validation->set_rules('whatsapp', 'whatsapp', 'trim');
        $this->form_validation->set_rules('address', 'address', 'trim');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('twitter', 'twitter', 'trim');
        $this->form_validation->set_rules('facebook', 'facebook', 'trim');
        $this->form_validation->set_rules('linkedin', 'linkedin', 'trim');
        $this->form_validation->set_rules('google', 'google', 'trim');
        $this->form_validation->set_rules('youtube', 'youtube', 'trim');
        $this->form_validation->set_rules('longitude', 'longitude', 'trim');
        $this->form_validation->set_rules('latitude', 'latitude', 'trim');


        if ($this->form_validation->run() == FALSE)
            $this->load->view($this->module . '/manage', $data);

        else {
            $this->{$this->model}->phone = $this->input->post('phone');
            $this->{$this->model}->fax = $this->input->post('fax');
            $this->{$this->model}->whatsapp = $this->input->post('whatsapp');
            $this->{$this->model}->address = $this->input->post('address');
            $this->{$this->model}->email = $this->input->post('email');
            $this->{$this->model}->twitter = $this->input->post('twitter');
            $this->{$this->model}->facebook = $this->input->post('facebook');
            $this->{$this->model}->linkedin = $this->input->post('linkedin');
            $this->{$this->model}->google = $this->input->post('google');
            $this->{$this->model}->youtube = $this->input->post('youtube');
            $this->{$this->model}->longitude = $this->input->post('longitude');
            $this->{$this->model}->latitude = $this->input->post('latitude');
            $this->{$this->model}->save();
            redirect('admin/dashboard');
        }
    }

}
