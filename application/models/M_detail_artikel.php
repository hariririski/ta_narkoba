<?php
class M_detail_artikel extends CI_Model{
    function get_user_all($id)
    {
        $query=$this->db->query("SELECT * from artikel where id_artikel='$id'");
        return $query->result();
    }
	
}