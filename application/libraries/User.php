<?php

class User
{
    public static $info;

    public static function get($attr = null)
    {
        if (!self::$info)
            self::$info = get_instance()->db
                ->where('email', session('email'))
                ->where('password', session('password'))
                ->where('status', 'active')
                ->join('usergroups', 'usergroups.usergroup_id = users.usergroup_id')
                ->get('users')
                ->row();

        if ($attr)
            if (isset(self::$info->$attr))
                return self::$info->$attr;
            else
                return null;
        else
            return self::$info;
    }

    public static function notifications($limit = null)
    {
        return get_instance()->db
            ->where('user_id', self::get('user_id'))
            ->order_by('created', 'DESC')
            ->get('notifications', $limit)
            ->result();
    }

    public static function messages($limit = null)
    {
        return get_instance()->db
            ->where('user_id', self::get('user_id'))
            ->order_by('created', 'DESC')
            ->get('notifications', $limit)
            ->result();
    }

    public static function menu()
    {
        return [
            [
                'icon' => 'fa fa-home',
                'link' => 'main.dashboard',
                'title' => lang('Dashboard')
            ],
            [
                'icon' => 'fa fa-cog',
                'link' => 'main.settings',
                'title' => lang('Settings')
            ],
            [
                'icon' => 'fa fa-bars',
                'link' => 'main.menus',
                'title' => lang('Menus')
            ],
            [
                'icon' => 'fa fa-files-o',
                'link' => 'main.pages',
                'title' => lang('Pages')
            ],
            [
                'icon' => 'fa fa-newspaper-o',
                'link' => 'main.posts',
                'title' => lang('Posts')
            ],
            [
                'icon' => 'fa fa-sitemap',
                'link' => 'main.categories',
                'title' => lang('Categories')
            ],
            [
                'icon' => 'fa fa-heart',
                'link' => 'main.partners',
                'title' => lang('Partners')
            ],
            [
                'icon' => 'fa fa-black-tie',
                'link' => 'main.careers',
                'title' => lang('Careers')
            ],
            [
                'icon' => 'fa fa-picture-o',
                'link' => 'main.sliders',
                'title' => lang('Sliders')
            ],
            [
                'icon' => 'fa fa-leaf',
                'link' => 'main.ads',
                'title' => lang('Ads')
            ],

            [
                'icon' => 'fa fa-cubes',
                'link' => 'main.products',
                'title' => lang('Products')
            ],
            [
                'icon' => 'fa fa-briefcase',
                'link' => 'main.packages',
                'title' => lang('Packages')
            ],
            [
                'icon' => 'fa fa-question-circle',
                'link' => 'main.faqs',
                'title' => lang('Faqs')
            ],
            [
                'icon' => 'fa fa-user',
                'link' => 'main.users',
                'title' => lang('Users')
            ],
            [
                'icon' => 'fa fa-users',
                'link' => 'main.usergroups',
                'title' => lang('Usergroups')
            ],
        ];
    }

    public static function permission($module = null, $action = true)
    {
        // CHECK PERMISSION
//        if (!$this->user->user_id)
//            if ($action)
//                redirect('admin/login');
//            else
//                return false;
//
//        // CHECK USERGROUP PERMISSIONS
//        $usergroup = $this->db->where('usergroup_id', $this->user->usergroup_id)->get('usergroups')->row();
//        $perms = [];
//        foreach(json_decode($usergroup->permissions) as $p) if($p->checked) $perms[] = $p->id;
//        if(!in_array($module, $perms))
//            if ($action)
//                redirect('admin/login');
//            else
//                return false;
        return true;
    }

}
