<?php
    class M_edit_golongan extends CI_Model{    
        function update($id){
                   $nama_golongan = $this->input->post('nama_golongan');
                    $data = array(
                        'nama_golongan'=>$nama_golongan
                               
                    );
                   
					$this->db->where('id_golongan',$id);
					$cek=$this->db->update('golongan',$data); 	
					   return $cek;
						
									
            }//end of simpan        
        }
?>