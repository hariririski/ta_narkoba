<?php
    class M_edit_efek extends CI_Model{    
        function update($id){
                   $nama_efek = $this->input->post('nama_efek');
                    $penjelasan = $this->input->post('penjelasan');
                    $data = array(
                        'nama_efek'=>$nama_efek,
                        'penjelasan'=>$penjelasan
						
                               
                    );
					$this->db->where('id_efek',$id);
					$cek=$this->db->update('efek',$data); 	
					   return $cek;
						
									
            }//end of simpan        
        }
?>