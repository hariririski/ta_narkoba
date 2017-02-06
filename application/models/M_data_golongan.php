<?php
class M_data_golongan extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from golongan");
        return $query->result();
    }
	function edit_golongan($id)
    {
        $query=$this->db->query("SELECT * from golongan where id_golongan='$id'");
        return $query->result();
    }
}