<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends CIF_Controller {

    public $layout = 'full';
    public $module = 'users';
    public $model = 'users_model';

    public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
        $this->permission();
    }

    public function index() {
        //Pagination
        $this->load->library('pagination');
        config('pagination_limit', 5);
        $config['total_rows'] = $this->{$this->model}->get(TRUE);
        $config['suffix'] = '?' . http_build_query($_GET);
        $config['base_url'] = site_url('admin/users/index');
        $config['per_page'] = config('pagination_limit');
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        if ($this->uri->segment(4))
            $this->{$this->model}->offset = $this->uri->segment(4);

        $data['total'] = $config['total_rows'];
        $this->{$this->model}->limit = config('pagination_limit');
        $this->db->order_by('user_id', 'DESC');
        $data['items'] = $this->{$this->model}->get();
        $this->load->view($this->module . '/index', $data);
    }

    public function manage($id = NULL) {
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
        $this->form_validation->set_rules('username', 'lang:users_username', 'trim|required');
        $this->form_validation->set_rules("email", 'lang:users_email', "trim|required|valid_email");
        if ($id)
            $this->form_validation->set_rules('password', 'lang:users_password', 'trim');
        else
            $this->form_validation->set_rules('password', 'lang:users_password', 'trim|required');

        if ($this->form_validation->run() == FALSE)
            $this->load->view($this->module . '/manage', $data);

        else {
            $this->users_model->username = $this->input->post('username');
            $this->users_model->email = $this->input->post('email');
            if (strlen($this->input->post('password')) > 0)
                $this->{$this->model}->password = md5($this->input->post('password'));

            $this->{$this->model}->save();
            redirect('admin/users/manage/1');
        }
    }
 
}

/* End of file users.php */
/* Location: ./application/controllers/admin/users.php */