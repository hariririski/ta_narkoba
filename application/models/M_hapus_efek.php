<?php
    class M_hapus_efek extends CI_Model{    
        function delete($id){
					$this->db->where('id_efek', $id);
					$cek=$this->db->delete('efek');
                    return $cek;
            }//end of simpan        
        }
?>