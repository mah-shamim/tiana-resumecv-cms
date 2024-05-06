<?php

class Post extends CIF_Controller {

    public $layout = 'full';
    public $module = 'post';
    public $model = 'Blog_model';

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
                        ->where('blog_id', $id)
                        ->get('blog')->row())
            show_404();
        $this->db->where('blog_id', $id)->set('visits', 'visits +1 ', false)->update('blog');
        $this->data['item'] = $this->db
                ->select("blog.*, blog_categories.title as category")
                ->where("blog.blog_id", $id)
                ->join("blog_categories", "blog_categories.blog_category_id = blog.blog_category_id")
                ->get('blog')
                ->row();

        config('title', $this->data['item']->title . ' - ' . config('title'));
        if (!$this->data['item'])
            show_404();
        $this->data['categories'] = $this->db
                        ->select("blog_categories.*, (SELECT COUNT(*) FROM blog WHERE blog.blog_category_id = blog_categories.blog_category_id) as posts")
                        ->get('blog_categories')->result();
        
        $this->data['related_items'] = $this->db
                        ->limit('4')
                        ->where('blog.blog_id !=', $id)
                        ->where('blog.blog_category_id', $this->data['item']->blog_category_id)
                        ->get('blog')->result();

        $this->data['latest_added'] = $this->db
                        ->select('blog.*')
                        ->limit('4')
                        ->where('blog.blog_id !=', $id)
                        ->order_by('blog_id', 'desc')
                        ->get('blog')->result();


        $this->load->view('blog/post', $this->data);
    }

}
