<?php

class Permission {
    public $MESLAEED;
    public function __construct() {
        $this->MESLAEED = & get_instance();
    }
    public function check($role = FALSE)
    {
        return $this->MESLAEED->db->select('COUNT(*) AS available')
                        ->where('usergroup_zones.zone', $role)
                        ->where('users.user_id', session('user_id'))
                        ->where('users.password', session('password'))
                        ->join('usergroup_zones', 'usergroup_zones.usergroup_id = users.usergroup_id')
                        ->get('users')
                        ->row()->available;
    }
    public function detect($role = FALSE)
    {
        if( ! session('user_id') )
            redirect ('admin');
        if( ! $this->check($role) )
            show_error (lang('global_you_dont_have_permission'));
    }
}