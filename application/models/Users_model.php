<?php

class Users_model extends CIF_model
{
    public $_table = 'users';
    public $_primary_keys = array('user_id');

//    public function get()
//    {
//        return $this->db->get('companies')->result();
//    }
//
//    public function getCompanyById($company_id)
//    {
//        return $this->db->where('company_id', $company_id)
//            ->get('companies')->row();
//    }
//
//    public function save()
//    {
//
//        $this->db->insert('companies', $this->columns);
//    }


}
