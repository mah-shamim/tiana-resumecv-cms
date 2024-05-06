<?php

class Home extends CIF_Controller {

    public $layout = 'full';
    public $module = 'home';
    public $model = 'Projects_model';

    public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
    }

    public function index() {
        $data['testimonials'] = $this->db->get('testimonials')->result();
        $data['clients'] = $this->db->get('clients')->result();
        $data['experiences'] = $this->db->order_by('experience_id', 'DESC')->get('experiences')->result();
        $data['education'] = $this->db->order_by('education_id', 'DESC')->get('education')->result();
        $data['services'] = $this->db->get('services')->result();
        $data['skills_cats'] = $this->db->get('skills_categories')->result();
        $data['skills'] = $this->db->get('skills')->result();

        $data['projects_categories'] = $this->db->select('projects_categories.*, (SELECT COUNT(*) FROM projects where projects_categories.project_category_id = projects.project_category_id) as count')->order_by('title')->get('projects_categories')->result();
        $data['projects_count'] = $this->db
                        ->select("COUNT(*) AS projects_count")
                        ->get('projects')->row()->projects_count;
        $data['projects'] = $this->db
                        ->join('projects_categories', 'projects_categories.project_category_id = projects.project_category_id', 'inner')
                        ->select('projects.*, projects_categories.title as category_project')
                        ->get('projects')->result();
        $data['posts'] = $this->db
                        ->join('blog_categories', 'blog_categories.blog_category_id = blog.blog_category_id', 'inner')
                        ->select('blog.*, blog_categories.title as post_category')
                        ->limit(9)
                        ->get('blog')->result();
        $data['success'] = FALSE;
        //CONTACT
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'lang:global_Name', 'trim|required');
        $this->form_validation->set_rules('email', 'lang:global_email', 'trim|required|valid_email');
        $this->form_validation->set_rules('message', 'lang:global_Message', 'trim|required');
        if ($this->form_validation->run() == TRUE) {
            $_data = [
                'created' => date('Y-m-d H:i:s'),
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'message' => $this->input->post('message')
            ];
            $this->db->insert('messages', $_data);
            $id = $this->db->insert_id();
            //SEND EMAIL
            @mail(config('webmaster_email'), config('title'), ""
                            . "Full Name: $_POST[name]\n"
                            . "Email: $_POST[email]\n"
                            . "Message: $_POST[message]\n"
                            . "Message_url: " . site_url("admin/messages/view/$id"));
            $data['success'] = true;
        }


        $this->load->view($this->module, $data);
    }

}
