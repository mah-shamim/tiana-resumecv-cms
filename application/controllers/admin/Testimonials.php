<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Testimonials extends CIF_Controller {

    public $layout = 'full';
    public $module = 'testimonials';
    public $model = 'Testimonials_model';

    public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
        $this->permission();
    }

    public function index() {
        //Pagination
        $this->load->library('pagination');
        config('pagination_limit', 10);
        $config['total_rows'] = $this->{$this->model}->get(TRUE);
        $config['suffix'] = '?' . http_build_query($_GET);
        $config['base_url'] = site_url('admin/testimonials/index');
        $config['per_page'] = config('pagination_limit');
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        if ($this->uri->segment(4))
            $this->{$this->model}->offset = $this->uri->segment(4);

        $data['total'] = $config['total_rows'];
        $this->{$this->model}->limit = config('pagination_limit');
        $this->db->order_by('testimonial_id', 'DESC');
        $data['items'] = $this->{$this->model}->get();
        $this->load->view($this->module . '/index', $data);
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
        $this->form_validation->set_rules('name', 'lang:global_name', 'trim|required');
        $this->form_validation->set_rules('position', 'lang:global_position', 'trim|required');
        $this->form_validation->set_rules('message', 'lang:global_message', 'trim|required');
        $this->form_validation->set_rules('rating', 'lang:global_rating', 'trim|required');
        $this->form_validation->set_rules("image", 'lang:global_image', "trim|callback_image[$id]");

        if ($this->form_validation->run() == FALSE)
            $this->load->view($this->module . '/manage', $data);

        else {

            $this->{$this->model}->name = $this->input->post('name');
            $this->{$this->model}->position = $this->input->post('position');
            $this->{$this->model}->message = $this->input->post('message');
            $this->{$this->model}->rating = $this->input->post('rating');
            $this->{$this->model}->save();
            redirect('admin/' . $this->module);
        }
    }

    public function delete($id = false) {
        if (!$id)
            show_404();
        $this->{$this->model}->{$this->_primary_key} = $id;
        $data['item'] = $this->{$this->model}->get();
        if (!$data['item'])
            show_404();
        $this->{$this->model}->delete();
        redirect('admin/' . $this->module);
    }

    public function image($var, $id) {
        $config['upload_path'] = './cdn/testimonials/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            $data = $this->upload->data();
            if ($data['file_name'])
                $this->{$this->model}->image = $data['file_name'];
        }
        return true;
    }

}
