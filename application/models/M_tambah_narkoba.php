<?php
    class M_tambah_narkoba extends CI_Model{    
        function process($new_name){
                    $nama_umum = $this->input->post('nama_umum');
                    $nama_khusus = $this->input->post('nama_khusus');
                    $jenis = $this->input->post('jenis');
                    $golongan = $this->input->post('golongan');
                    $penjelasan = $this->input->post('penjelasan');
                    $efek = $this->input->post('efek');
					$jumlah_efek=count($efek);
                    $gambar=$new_name;
					$id_narkoba=time();
                    $data = array(
						'id_narkoba'=>$id_narkoba,
                        'nama_umum'=>$nama_umum,
                        'nama_khusus'=>$nama_khusus,
                        'id_jenis'=>$jenis,
                        'id_golongan'=>$golongan,
                        'keterangan'=>$penjelasan,
                        'foto'=>$gambar          
                    );
                    $cek=$this->db->insert('narkoba',$data);
					if($jumlah_efek>0){
						for($i=0;$i<$jumlah_efek;$i++){
							$data1 = array(
								'id_narkoba'=>$id_narkoba,
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