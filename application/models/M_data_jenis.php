<?php
class M_data_jenis extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from jenis_narkoba");
        return $query->result();
    }
	function edit_jenis($id)
    {
        $query=$this->db->query("SELECT * from jenis_narkoba where id_jenis='$id'");
        return $query->result();
    }
}