<?php
    class M_tambah_golongan extends CI_Model{    
        function process(){
                    $nama_golongan = $this->input->post('nama_golongan');
                    $data = array(
                        'nama_golongan'=>$nama_golongan
                               
                    );
                    $cek=$this->db->insert('golongan',$data);
						
					   return $cek;
						
										
            }//end of simpan        
        }
?>