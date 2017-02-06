<?php
    class M_tambah_admin extends CI_Model{    
        function process(){
                    $nama_lengkap = $this->input->post('nama_lengkap');
                    $username = $this->input->post('username');
                    $password = md5($this->input->post('password'));
                  
                    $data = array(
                        'nama_lengkap'=>$nama_lengkap,
                        'username'=>$username,
                        'password'=>$password
          
                    );
                    $cek=$this->db->insert('admin',$data);
						
					   return $cek;
						
										
            }//end of simpan        
        }
?>