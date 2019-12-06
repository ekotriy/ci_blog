<?php 
class Admin_model extends CI_Model{
    //
    function login($where){         
        return $this->db->get_where('users',$where);     
    }

    //
    public function getUser()
    {
        $query = $this->db->get('kategori');
        return $query->result_array();
    }
}