<?php
class M_footer extends CI_Model{
    function narkoba()
    {
        $query=$this->db->query("SELECT * from narkoba order by tanggal_post DESC limit 3 ");
        return $query->result();
    }
	
	 function artikel()
    {
        $query=$this->db->query("SELECT * from artikel order by tanggal_post DESC limit 3");
        return $query->result();
    }
}