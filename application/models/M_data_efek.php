<?php
class M_data_efek extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from efek");
        return $query->result();
    }
	function edit_efek($id)
    {
        $query=$this->db->query("SELECT * from efek where id_efek='$id'");
        return $query->result();
    }
	function lihat_efek($id)
    {
        $query=$this->db->query("SELECT * from efek inner join memiliki on memiliki.id_efek=efek.id_efek where memiliki.id_narkoba='$id'");
        return $query->result();
    }
}