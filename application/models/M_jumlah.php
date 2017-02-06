<?php
class M_jumlah extends CI_Model{
    function jumlah_narkoba()
    {
        $query=$this->db->query("SELECT count(id_narkoba)as jumlah_narkoba from narkoba INNER JOIN golongan on golongan.id_golongan=narkoba.id_golongan INNER JOIN jenis_narkoba on jenis_narkoba.id_jenis=narkoba.id_jenis limit 9");
        return $query->result();
    }
	
	 function jumlah_artikel()
    {
        $query=$this->db->query("SELECT count(id_artikel) as jumlah_artikel from artikel ");
        return $query->result();
    }
	
	function jumlah_golongan()
    {
        $query=$this->db->query("SELECT count(id_golongan) as jumlah_golongan from golongan ");
        return $query->result();
    }
	
	function jumlah_jenis()
    {
        $query=$this->db->query("SELECT count(id_jenis) as jumlah_jenis from jenis_narkoba ");
        return $query->result();
    }
}