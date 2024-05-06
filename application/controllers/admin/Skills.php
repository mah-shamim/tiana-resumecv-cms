<?php

class Skills extends CIF_Controller {

    public $layout = 'full';
    public $module = 'skills';
    public $model = 'Skills_model';

    public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
        $this->permission();
    }

    public function index($offset = 0) {
        $this->{$this->model}->custom_select = 'skills.*, skills_categories.title as category';
        $this->{$this->model}->joins = array(
            'skills_categories' => array('skills_categories.skill_category_id = skills.skill_category_id', 'inner')
        );
        $count = $this->db
                        ->select("COUNT(*) AS count")
                        ->join('skills_categories', 'skills_categories.skill_category_id = skills.skill_category_id', 'inner')
                        ->get('skills')
                        ->row()->count;
        //Pagination
        $this->load->library('pagination');
        config('pagination_limit', 10);
        $config['total_rows'] = $count;
        $config['base_url'] = site_url('admin/skills/index');
        $config['per_page'] = config('pagination_limit');
        if ($this->uri->segment(2))
            $this->db->offset = $offset;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $this->db->limit($config['per_page'], $offset);
        $this->db->order_by('skill_id', 'DESC');
        $data['items'] = $this->db
                        ->join('skills_categories', 'skills_categories.skill_category_id = skills.skill_category_id', 'inner')
                        ->select('skills.*, skills_categories.title as category')
                        ->get('skills')->result();
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
        $this->form_validation->set_rules('skill_category_id', 'lang:global_category', 'trim|required');
        $this->form_validation->set_rules("rate", 'lang:rating', "trim|required");

        if ($this->form_validation->run() == FALSE)
            $this->load->view($this->module . '/manage', $data);

        else {
            $this->{$this->model}->title = $this->input->post('title');
            $this->{$this->model}->skill_category_id = $this->input->post('skill_category_id');
            $this->{$this->model}->rate = $this->input->post('rate');

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

}
