<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Blog extends CIF_Controller {

    public $layout = 'full';
    public $module = 'blog';
    public $model = 'blog_model';

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
        $config['base_url'] = site_url('admin/blog/index');
        $config['per_page'] = config('pagination_limit');
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        if ($this->uri->segment(4))
            $this->{$this->model}->offset = $this->uri->segment(4);

        $data['total'] = $config['total_rows'];
        $this->{$this->model}->limit = config('pagination_limit');
        $this->db->order_by('blog_id', 'DESC');
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
            $this->{$this->model}->datetime = date('Y-m-d H:i:s');
        }
        $this->load->library("form_validation");
        $this->form_validation->set_rules('blog_category_id', 'lang:global_category', 'trim|required');
        $this->form_validation->set_rules('title', 'lang:global_title', 'trim|required');
        $this->form_validation->set_rules('description', 'lang:global_description', 'trim|required');
        $this->form_validation->set_rules('short_description', 'lang:global_short_description', 'trim|required|max_length[100]');
        $this->form_validation->set_rules("image", 'lang:global_featured_image', "trim|callback_file[$id]");
        $this->form_validation->set_rules('meta_keywords', 'lang:global_tags', 'trim|required');
        $this->form_validation->set_rules('author', 'lang:global_author', 'trim|required');


        if ($this->form_validation->run() == FALSE)
            $this->load->view($this->module . '/manage', $data);

        else {
            $this->{$this->model}->blog_category_id = $this->input->post('blog_category_id');
            $this->{$this->model}->title = $this->input->post('title');
            $this->{$this->model}->description = $this->input->post('description');
            $this->{$this->model}->short_description = $this->input->post('short_description');
            $this->{$this->model}->meta_keywords = $this->input->post('meta_keywords');
            $this->{$this->model}->author = $this->input->post('author');
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

    public function file($var, $id) {
        $config['upload_path'] = './cdn/blog/';
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
