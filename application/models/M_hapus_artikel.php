<?php
    class M_hapus_artikel extends CI_Model{    
        function delete($id){
					$this->db->where('id_artikel', $id);
					$cek=$this->db->delete('artikel');
                    return $cek;
            }//end of simpan        
        }
?>