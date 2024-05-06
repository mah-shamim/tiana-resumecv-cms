<?php

class Projects extends CIF_Controller {

    public $layout = 'full';
    public $module = 'projects';
    public $model = 'Projects_model';

    public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
        $this->permission();
    }

    public function index($offset = 0) {
        $this->{$this->model}->custom_select = 'projects.*, projects_categories.title as category';
        $this->{$this->model}->joins = array(
            'projects_categories' => array('projects_categories.project_category_id = projects.project_category_id', 'inner')
        );
        $count = $this->db
                        ->select("COUNT(*) AS count")
                        ->join('projects_categories', 'projects_categories.project_category_id = projects.project_category_id', 'inner')
                        ->get('projects')
                        ->row()->count;
        //Pagination
        $this->load->library('pagination');
        config('pagination_limit', 10);
        $config['total_rows'] = $count;
        $config['base_url'] = site_url('admin/projects/index');
        $config['per_page'] = config('pagination_limit');
        if ($this->uri->segment(2))
            $this->db->offset = $offset;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $this->db->limit($config['per_page'], $offset);
        $this->db->order_by('project_id', 'DESC');
        $data['items'] = $this->db
                        ->join('projects_categories', 'projects_categories.project_category_id = projects.project_category_id', 'inner')
                        ->select('projects.*, projects_categories.title as category')
                        ->get('projects')->result();
        $this->load->view($this->module . '/index', $data);
    }

    public function manage($id = null) {
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
        $this->form_validation->set_rules('title', 'lang:global_title', 'trim|required');
        $this->form_validation->set_rules('project_category_id', 'lang:global_category', 'trim|required');
        $this->form_validation->set_rules("link", 'lang:global_link', "trim|required");
        $this->form_validation->set_rules("datetime", 'lang:global_published', "trim|required");
        $this->form_validation->set_rules("description", 'lang:global_description', "trim|required");
        $this->form_validation->set_rules("image", 'lang:global_image', "trim|callback_image[$id]");

        if ($this->form_validation->run() == FALSE)
            $this->load->view($this->module . '/manage', $data);

        else {
            $this->{$this->model}->title = $this->input->post('title');
            $this->{$this->model}->project_category_id = $this->input->post('project_category_id');
            $this->{$this->model}->link = $this->input->post('link');
            $this->{$this->model}->datetime = $this->input->post('datetime');
            $this->{$this->model}->description = $this->input->post('description');

            $this->{$this->model}->save();
            redirect('admin/' . $this->module);
        }
    }

    public function delete($id = null) {
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
        $config['upload_path'] = './cdn/projects/';
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
