<?php
    class M_edit_narkoba extends CI_Model{    
        function process($new_name,$id){
                    $nama_umum = $this->input->post('nama_umum');
                    $nama_khusus = $this->input->post('nama_khusus');
                    $jenis = $this->input->post('jenis');
                    $golongan = $this->input->post('golongan');
                    $penjelasan = $this->input->post('penjelasan');
                    $efek = $this->input->post('efek');
					$jumlah_efek=count($efek);
                    $gambar=$new_name;
					
                    $data = array(
						
                        'nama_umum'=>$nama_umum,
                        'nama_khusus'=>$nama_khusus,
                        'id_jenis'=>$jenis,
                        'id_golongan'=>$golongan,
                        'keterangan'=>$penjelasan,
                        'foto'=>$gambar          
                    );
                    $this->db->where('id_narkoba',$id);
					$cek=$this->db->update('narkoba',$data); 
					
					$hapus_semua_efek=$this->db->query("DELETE FROM `memiliki` WHERE id_narkoba=$id");
						for($i=0;$i<$jumlah_efek;$i++){
							$data1 = array(
								'id_narkoba'=>$id,
								'id_efek'=>$efek[$i]
							   
				  
							);
							$cek1=$this->db->insert('memiliki',$data1);
						}
						if($cek&&$cek1){
							 return $cek=true;
						}else{
						   return $cek=false;
						}	
					return $cek=true;}					
            

			function no_foto($id){
                    $nama_umum = $this->input->post('nama_umum');
                    $nama_khusus = $this->input->post('nama_khusus');
                    $jenis = $this->input->post('jenis');
                    $golongan = $this->input->post('golongan');
                    $penjelasan = $this->input->post('penjelasan');
                    $efek = $this->input->post('efek');
					$jumlah_efek=count($efek);
                    
					
                    $data = array(
					
                        'nama_umum'=>$nama_umum,
                        'nama_khusus'=>$nama_khusus,
                        'id_jenis'=>$jenis,
                        'id_golongan'=>$golongan,
                        'keterangan'=>$penjelasan
                                  
                    );
					$this->db->where('id_narkoba',$id);
					$cek=$this->db->update('narkoba',$data); 
					
					$hapus_semua_efek=$this->db->query("DELETE FROM `memiliki` WHERE id_narkoba=$id");
       
					if($jumlah_efek>0){
						for($i=0;$i<$jumlah_efek;$i++){
							$data1 = array(
								'id_narkoba'=>$id,
								'id_efek'=>$efek[$i]
							   
				  
							);
							$cek1=$this->db->insert('memiliki',$data1);
						}
						if($cek&&$cek1){
							 return $cek=true;
						}else{
						   return $cek=false;
						}	
					}return $cek=true;					
            }//end of simpan
        }
?>