<?php
class M_latest extends CI_Model{
    function narkoba()
    {
        $query=$this->db->query("SELECT * from narkoba INNER JOIN golongan on golongan.id_golongan=narkoba.id_golongan INNER JOIN jenis_narkoba on jenis_narkoba.id_jenis=narkoba.id_jenis order by tanggal_post DESC limit 8 ");
        return $query->result();
    }
	
	 function artikel()
    {
        $query=$this->db->query("SELECT * from artikel order by tanggal_post DESC limit 4 ");
        return $query->result();
    }
}