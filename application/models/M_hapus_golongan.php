<?php
    class M_hapus_golongan extends CI_Model{    
        function delete($id){
					$this->db->where('id_golongan', $id);
					$cek=$this->db->delete('golongan');
                    return $cek;
            }//end of simpan        
        }
?>