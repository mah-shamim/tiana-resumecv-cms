<?php

class Login extends CI_Controller {

    public function index() {
        $this->lang->load('global');
        $this->layout = 'ajax';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'lang:global_email', 'required|callback_check');
        $this->form_validation->set_rules('password', 'lang:global_password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login/index');
        } else {
            $user = $this->db->where('email', $this->input->post('email'))->where('password', md5($this->input->post('password')))->get('users')->row();
            $this->session->set_userdata(array(
                'email' => $user->email,
                'image' => $user->image,
                'user_id' => $user->user_id,
                'username' => $user->username,
                'image' => $user->image
            ));
            redirect('admin/dashboard');
        }
    }

    public function check() {
        $user = $this->db->where('email', $this->input->post('email'))->where('password', md5($this->input->post('password')))->get('users')->row();
        if (!$user) {
            $this->form_validation->set_message('check', lang('global_invalid_email_or_password'));
            return FALSE;
        }
        else
            return TRUE;
    }

}