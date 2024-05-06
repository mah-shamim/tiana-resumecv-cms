<?php

class Project extends CIF_Controller {

    public $layout = 'full';
    public $module = 'project';
    public $model = 'projects_model';

    public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
    }

    public function index($id = NULL) {
        $id = (int) $id;
        if (!$id)
            show_404();
        if (!$this->db
                        ->where('project_id', $id)
                        ->get('projects')->row())
            show_404();
        $this->data['item'] = $this->db
                ->select("projects.*, projects_categories.title as category")
                ->where("projects.project_id", $id)
                ->join("projects_categories", "projects_categories.project_category_id = projects.project_category_id")
                ->get('projects')
                ->row();

        config('title', $this->data['item']->title . ' - ' . config('title'));
        if (!$this->data['item'])
            show_404();

        $this->data['related_items'] = $this->db
                        ->join('projects_categories', 'projects_categories.project_category_id = projects.project_category_id', 'inner')
                        ->select("projects.*, projects_categories.title as category")
                        ->where('projects.project_category_id', $this->data['item']->project_category_id)
                        ->where('projects.project_id !=', $id)
                        ->limit('2')
                        ->get('projects')->result();

        $this->load->view('project', $this->data);
    }

}
