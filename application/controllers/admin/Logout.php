<?php

class Logout extends CI_Controller {

    public function index() {

        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            $this->layout = 'ajax';
            if (!session('username'))
                redirect('admin/login');
            $this->load->view('admin/login/logout');
            $this->session->sess_destroy();
        } else {
            $this->session->sess_destroy();
            redirect('admin/login');
        }
    }

}