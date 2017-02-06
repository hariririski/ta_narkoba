<?php
    class M_hapus_narkoba extends CI_Model{    
        function delete($id){
					$this->db->where('id_narkoba', $id);
					$cek=$this->db->delete('narkoba');
                    return $cek;
            }//end of simpan        
        }
?>