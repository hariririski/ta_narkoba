<?php
class M_data_narkoba extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from narkoba INNER JOIN golongan on golongan.id_golongan=narkoba.id_golongan INNER JOIN jenis_narkoba on jenis_narkoba.id_jenis=narkoba.id_jenis");
        return $query->result();
    }
	function efek()
    {
        $query=$this->db->query("SELECT * from memiliki inner join efek on efek.id_efek=memiliki.id_efek ");
        return $query->result();
    }
	function edit_narkoba($id)
    {
        $query=$this->db->query("SELECT * from narkoba INNER JOIN golongan on golongan.id_golongan=narkoba.id_golongan INNER JOIN jenis_narkoba on jenis_narkoba.id_jenis=narkoba.id_jenis where narkoba.id_narkoba='$id'");
        return $query->result();
    }
	
}