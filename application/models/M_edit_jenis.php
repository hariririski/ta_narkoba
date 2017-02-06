<?php
    class M_edit_jenis extends CI_Model{    
        function update($id){
                   $nama_jenis = $this->input->post('nama_jenis');
                    $data = array(
                        'nama_jenis'=>$nama_jenis
                               
                    );
                   
					$this->db->where('id_jenis',$id);
					$cek=$this->db->update('jenis_narkoba',$data); 	
					   return $cek;
						
									
            }//end of simpan        
        }
?>