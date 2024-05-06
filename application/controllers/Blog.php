<?php

class Blog extends CIF_Controller {

    public $layout = 'full';
    public $module = 'blog';
    public $model = 'Blog_model';

    public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
    }

    public function index($offset = 0) {
        config('title', 'Blog - ' . config('title'));

        if ($this->input->get('q')) {
            $this->db->like('blog.title', $this->input->get('q'), 'both');
            $this->db->or_like('blog.description', $this->input->get('q'), 'both');
            $this->db->or_like('blog.short_description', $this->input->get('q'), 'both');
            $this->db->or_like('blog.meta_keywords', $this->input->get('q'), 'both');
        }
        $count = $this->db
                        ->select("COUNT(*) AS count")
                        ->order_by('blog.blog_id', 'Desc')
                        ->join("blog_categories", "blog_categories.blog_category_id = blog.blog_category_id")
                        ->get('blog')
                        ->row()->count;
        $this->data['categories'] = $this->db
                        ->select("blog_categories.*, (SELECT COUNT(*) FROM blog WHERE blog.blog_category_id = blog_categories.blog_category_id) as posts")
                        ->get('blog_categories')->result();

        $this->data['most_popular'] = $this->db
                        ->select("blog.*")
                        ->order_by('visits', 'desc')
                        ->get('blog', 4)->result();

        $this->data['latest_added'] = $this->db
                        ->select("blog.*")
                        ->order_by('blog_id', 'desc')
                        ->get('blog', 4)->result();


        // PAGINATION
        config('pagination_limit', 6);
        $this->load->library('pagination');
        $config['base_url'] = site_url('blog/index');
        $config['total_rows'] = $count;
        $config['per_page'] = config('pagination_limit');
        if ($this->uri->segment(2))
            $this->{$this->model}->offset = $offset;
        $this->pagination->initialize($config);
        $this->data['pagination'] = $this->pagination->create_links();

        if ($this->input->get('q')) {
            $this->db->like('blog.title', $this->input->get('q'), 'both');
            $this->db->or_like('blog.description', $this->input->get('q'), 'both');
            $this->db->or_like('blog.short_description', $this->input->get('q'), 'both');
            $this->db->or_like('blog.meta_keywords', $this->input->get('q'), 'both');
        }
        $this->db->limit($config['per_page'], $offset);
        $this->data['items'] = $this->db
                ->select("blog.*, blog_categories.title as category")
                ->order_by('blog.blog_id', 'Desc')
                ->join("blog_categories", "blog_categories.blog_category_id = blog.blog_category_id")
                ->get('blog')
                ->result();

        $this->load->view('blog/index', $this->data);
    }

    function category($id = false, $offset = 0) {
        if (!$id)
            show_404();

        $this->data['category'] = $this->db->where('blog_category_id', $id)->get('blog_categories')->row();
        if (!$this->data['category'])
            show_404();

        config('title', $this->data['category']->title . ' - ' . config('title'));


        $count = $this->db
                        ->select("COUNT(*) AS count")
                        ->order_by('blog.blog_id', 'Desc')
                        ->where("blog_categories.blog_category_id", $id)
                        ->join("blog_categories", "blog_categories.blog_category_id = blog.blog_category_id")
                        ->get('blog')
                        ->row()->count;
        $this->data['categories'] = $this->db
                        ->select("blog_categories.*, (SELECT COUNT(*) FROM blog WHERE blog.blog_category_id = blog_categories.blog_category_id) as posts")
//                        ->where('blog_categories.blog_category_id !=', $id)
                        ->get('blog_categories')->result();
        $this->data['most_popular'] = $this->db
                        ->select("blog.*")
                        ->order_by('visits', 'desc')
                        ->get('blog', 5)->result();
        $this->data['latest_added'] = $this->db
                        ->select("blog.*")
                        ->order_by('blog_id', 'desc')
                        ->get('blog', 4)->result();
        // PAGINATION
        $this->load->library('pagination');
        $config['base_url'] = site_url('blog/category/' . $id);
        $config['total_rows'] = $count;
        $config['per_page'] = 6;
        $config['reuse_query_string'] = TRUE;
        $config['uri_segment'] = 4;
        $this->pagination->initialize($config);
        $this->data['pagination'] = $this->pagination->create_links();


        $this->db->limit($config['per_page'], $offset);
        $this->data['items'] = $this->db
                ->select("blog.*, blog_categories.title as category")
                ->order_by('blog.blog_id', 'Desc')
                ->where("blog_categories.blog_category_id", $id)
                ->join("blog_categories", "blog_categories.blog_category_id = blog.blog_category_id")
                ->get('blog')
                ->result();

        $this->load->view('blog/category', $this->data);
    }

}
