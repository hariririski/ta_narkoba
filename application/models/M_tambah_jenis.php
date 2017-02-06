<?php
    class M_tambah_jenis extends CI_Model{    
        function process(){
                    $nama_jenis = $this->input->post('nama_jenis');
                    $data = array(
                        'nama_jenis'=>$nama_jenis
                               
                    );
                    $cek=$this->db->insert('jenis_narkoba',$data);
						
					   return $cek;
						
										
            }//end of simpan        
        }
?>