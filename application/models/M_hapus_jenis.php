<?php
    class M_hapus_jenis extends CI_Model{    
        function delete($id){
					$this->db->where('id_jenis', $id);
					$cek=$this->db->delete('jenis_narkoba');
                    return $cek;
            }//end of simpan        
        }
?>