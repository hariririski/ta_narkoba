<?php
    class M_tambah_efek extends CI_Model{    
        function process(){
                    $nama_efek = $this->input->post('nama_efek');
                    $penjelasan = $this->input->post('penjelasan');
                    $data = array(
                        'nama_efek'=>$nama_efek,
                        'penjelasan'=>$penjelasan
						
                               
                    );
                    $cek=$this->db->insert('efek',$data);
						
					   return $cek;
						
										
            }//end of simpan        
        }
?>