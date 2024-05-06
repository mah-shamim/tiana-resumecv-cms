<?php

class Dashboard extends CIF_Controller {

    public $layout = 'full';
    public $module = 'dashboard';
    public $model = 'users';

    public function index() {
        $this->permission();
        $data['services'] = $this->db->get('services')->num_rows();
        $data['projects'] = $this->db->get('projects')->num_rows();
        $data['blog'] = $this->db->get('blog')->num_rows();
        $data['testimonials'] = $this->db->get('testimonials')->num_rows();
        $data['clients'] = $this->db->get('clients')->num_rows();
        $data['messages'] = $this->db->get('messages')->num_rows();
        $data['skills'] = $this->db->get('skills')->num_rows();
        $data['visitors'] = config('visitors');
        $this->load->view($this->module, $data);
    }

}
