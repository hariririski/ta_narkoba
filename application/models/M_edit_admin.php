<?php
    class M_edit_admin extends CI_Model{
        function update($id){
                    $nama_lengkap = $this->input->post('nama_lengkap');
                    $username = $this->input->post('username');
                    $password = md5($this->input->post('password'));

                    $data = array(
                        'nama_lengkap'=>$nama_lengkap,
                        'username'=>$username,
                        'password'=>$password

                    );
                    $this->db->where('username',$id);
                    $cek=$this->db->update('admin',$data);
                       return $cek;

					   return $cek;


            }//end of simpan
        }
?>
