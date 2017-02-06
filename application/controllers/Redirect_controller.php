<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Redirect_controller extends CI_Controller {

		public function index() {
         $this->load->helper('url');
         $this->home();
		}




		public function home() {
		 $this->load->helper('url');
    $this->load->model('M_footer');
		 $this->load->model('M_latest');
		 $this->load->model('M_jumlah');
			$data['data_narkoba'] = $this->M_footer->narkoba();
			$data['data_artikel'] = $this->M_footer->artikel();
			$data['latest_narkoba'] = $this->M_latest->narkoba();
			$data['latest_artikel'] = $this->M_latest->artikel();
			$data['jumlah_narkoba'] = $this->M_jumlah->jumlah_narkoba();
			$data['jumlah_artikel'] = $this->M_jumlah->jumlah_artikel();
			$data['jumlah_golongan'] = $this->M_jumlah->jumlah_golongan();
			$data['jumlah_jenis'] = $this->M_jumlah->jumlah_jenis();
		 $this->load->view('home',$data);

		}

		public function detail_narkoba() {
			$id_narkoba=$_GET['id'];
			$this->load->helper('url');
			$this->load->model('M_detail_narkoba');
			$data['detail_narkoba'] = $this->M_detail_narkoba->get_user_all($id_narkoba);
			$data['efek_narkoba'] = $this->M_detail_narkoba->efek($id_narkoba);


			$this->load->model('M_footer');
			$data['data_narkoba'] = $this->M_footer->narkoba();
			$data['data_artikel'] = $this->M_footer->artikel();
         $this->load->view('detail_narkoba',$data);
		}

		public function detail_artikel() {
			$id_artikel=$_GET['id'];
			$this->load->helper('url');
			$this->load->model('M_detail_artikel');
			$data['detail_artikel'] = $this->M_detail_artikel->get_user_all($id_artikel);



			$this->load->model('M_footer');
			$data['data_narkoba'] = $this->M_footer->narkoba();
			$data['data_artikel'] = $this->M_footer->artikel();
         $this->load->view('detail_artikel',$data);
		}

		public function narkoba() {
         $this->load->helper('url');
			$this->load->model('M_data_narkoba');
			$data['data_narkoba1'] = $this->M_data_narkoba->get_user_all();
			$this->load->model('M_footer');
			$data['data_narkoba'] = $this->M_footer->narkoba();
			$data['data_artikel'] = $this->M_footer->artikel();
         $this->load->view('narkoba',$data);
		}

		public function data_efek() {
         $this->load->helper('url');
			$this->load->model('M_data_efek');
			$data['data_efek'] = $this->M_data_efek->get_user_all();
			$this->load->model('M_footer');
			$data['data_narkoba'] = $this->M_footer->narkoba();
			$data['data_artikel'] = $this->M_footer->artikel();
         $this->load->view('data_efek',$data);
		}

		public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model('M_data');
		$this->load->library("pagination");
	}

		public function artikel() {

			$this->load->helper('url');
			$this->load->model('M_artikel');
			$data['data_artikel1'] = $this->M_artikel->get_user_all();



			$this->load->model('M_footer');
			$data['data_narkoba'] = $this->M_footer->narkoba();
			$data['data_artikel'] = $this->M_footer->artikel();
         $this->load->view('artikel',$data);

		}

		 public function login() {
         $this->load->helper('url');
         $this->load->view('login');
		}

		 public function contact() {
         $this->load->helper('url');
			$this->load->model('M_footer');
			$data['data_narkoba'] = $this->M_footer->narkoba();
			$data['data_artikel'] = $this->M_footer->artikel();
         $this->load->view('contact',$data);
		}

		public function grid() {
         $this->load->helper('url');
			$this->load->model('M_footer');
			$data['data_narkoba'] = $this->M_footer->narkoba();
			$data['data_artikel'] = $this->M_footer->artikel();
         $this->load->view('grid_narkoba',$data);
		}

		 public function tambah_narkoba() {
         $this->load->helper('url');
			$this->load->model('M_data_narkoba');
			$data['data_umum'] = $this->M_data_narkoba->get_user_all();
			$data['data_khusus'] = $this->M_data_narkoba->get_user_all();
			$this->load->model('M_data_golongan');
			$data['data_golongan'] = $this->M_data_golongan->get_user_all();
			$this->load->model('M_data_jenis');
			$data['data_jenis'] = $this->M_data_jenis->get_user_all();
			$this->load->model('M_footer');
			$data['data_narkoba'] = $this->M_footer->narkoba();
			$data['data_artikel'] = $this->M_footer->artikel();
			$this->load->model('M_data_efek');
			$data['data_efek'] = $this->M_data_efek->get_user_all();
         $this->load->view('tambah_narkoba',$data);
		}

		 public function tambah_artikel() {
         $this->load->helper('url');

			$this->load->model('M_footer');
			$this->load->model('M_artikel');
			$data['data_judul'] = $this->M_artikel->get_user_all();
			$data['data_narkoba'] = $this->M_footer->narkoba();
			$data['data_artikel'] = $this->M_footer->artikel();

         $this->load->view('tambah_artikel',$data);
		}
		 public function gambar() {
         $this->load->helper('url');
         $this->load->view('gambar');
		}

		public function tambah_golongan() {
			$this->load->helper('url');
			$this->load->model('M_data_golongan');
			$data['data_golongan'] = $this->M_data_golongan->get_user_all();
			$this->load->model('M_footer');
			$data['data_narkoba'] = $this->M_footer->narkoba();
			$data['data_artikel'] = $this->M_footer->artikel();
			$this->load->view('tambah_golongan', $data);
		}

		public function tambah_jenis() {


			$this->load->helper('url');
			$this->load->model('M_data_jenis');
			$data['data_jenis'] = $this->M_data_jenis->get_user_all();
			$this->load->model('M_footer');
			$data['data_narkoba'] = $this->M_footer->narkoba();
			$data['data_artikel'] = $this->M_footer->artikel();
			$this->load->view('tambah_jenis', $data);
		}

		public function tambah_admin() {
			$this->load->helper('url');
			$this->load->model('M_data_admin');
      $username=$this->session->userdata['admin'];
			$data['data_admin'] = $this->M_data_admin->get_user_all();
			$data['edit_admin'] = $this->M_data_admin->edit_admin($username);
			$this->load->model('M_footer');
			$data['data_narkoba'] = $this->M_footer->narkoba();
			$data['data_artikel'] = $this->M_footer->artikel();
			$this->load->view('tambah_admin', $data);
		}

		public function tambah_efek() {
			$this->load->helper('url');
			$this->load->model('M_data_efek');
			$data['data_efek'] = $this->M_data_efek->get_user_all();
			$this->load->model('M_footer');
			$data['data_narkoba'] = $this->M_footer->narkoba();
			$data['data_artikel'] = $this->M_footer->artikel();
			$this->load->view('tambah_efek', $data);
		}

		public function data_narkoba_efek() {
			$object['controller']=$this;
			$this->load->helper('url');
			$this->load->model('M_data_narkoba');

			$data['data_narkoba2'] = $this->M_data_narkoba->efek();

			$this->load->view('data_narkoba', $object);
		}

		public function data_narkoba() {

			$this->load->helper('url');
			$this->load->model('M_data_narkoba');
			$data['data_narkoba1'] = $this->M_data_narkoba->get_user_all();
			$data['data_narkoba2'] = $this->M_data_narkoba->efek();
			$this->load->model('M_footer');
			$data['data_narkoba'] = $this->M_footer->narkoba();
			$data['data_artikel'] = $this->M_footer->artikel();
			$this->load->view('data_narkoba', $data);
		}

		public function data_artikel() {
			$this->load->helper('url');
			$this->load->model('M_data_artikel');
			$data['data_artikel1'] = $this->M_data_artikel->get_user_all();
			$this->load->model('M_footer');
			$data['data_narkoba'] = $this->M_footer->narkoba();
			$data['data_artikel'] = $this->M_footer->artikel();
			$this->load->view('data_artikel', $data);
		}

		public function proses_login() {
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->model('M_login');
			$cek=$this->M_login->login();
				if($cek){
					$username = $this->input->post('username');
					$this->session->set_userdata('admin',$username);
					redirect('home');
				}else{
					$this->session->set_flashdata('login', '
							<div id="boxes">
							  <div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window"> Gagal Login
								<div id="lorem">
								  <center><p>Maaf Anda Gagal Login</p></center>
								</div>
								<div id="popupfoot"> <a href="#" class="close agree">OK</a> </div>
							  </div>
							  <div style="width: 1478px; font-size: 32pt; color:white; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
							</div>');
					redirect('home');
				}
		}

		public function logout() {
			$this->session->unset_userdata('admin');
			$this->session->sess_destroy();
			$this->home();
		}

//halaman Edit
		public function edit_golongan() {
			$this->load->helper('url');
			$this->load->model('M_data_golongan');
			$id=$_GET['id'];
			$data['data_golongan'] = $this->M_data_golongan->get_user_all();
			$data['edit_golongan'] = $this->M_data_golongan->edit_golongan($id);
			$this->load->model('M_footer');
			$data['data_narkoba'] = $this->M_footer->narkoba();
			$data['data_artikel'] = $this->M_footer->artikel();
			$this->load->view('edit_golongan', $data);
		}

		public function edit_jenis() {
			$this->load->helper('url');
			$this->load->model('M_data_jenis');
			$id=$_GET['id'];
			$data['data_jenis'] = $this->M_data_jenis->get_user_all();
			$data['edit_jenis'] = $this->M_data_jenis->edit_jenis($id);
			$this->load->model('M_footer');
			$data['data_narkoba'] = $this->M_footer->narkoba();
			$data['data_artikel'] = $this->M_footer->artikel();
			$this->load->view('edit_jenis', $data);
		}

		public function edit_efek() {
			$this->load->helper('url');
			$this->load->model('M_data_efek');
			$id=$_GET['id'];
			$data['data_efek'] = $this->M_data_efek->get_user_all();
			$data['edit_efek'] = $this->M_data_efek->edit_efek($id);
			$this->load->model('M_footer');
			$data['data_narkoba'] = $this->M_footer->narkoba();
			$data['data_artikel'] = $this->M_footer->artikel();
			$this->load->view('edit_efek', $data);
		}

		public function edit_narkoba() {
			$this->load->helper('url');
			$this->load->model('M_data_narkoba');
			$id=$_GET['id'];
			$this->load->model('M_data_golongan');
			$data['data_golongan'] = $this->M_data_golongan->get_user_all();
			$this->load->model('M_data_jenis');
			$data['data_jenis'] = $this->M_data_jenis->get_user_all();
			$data['edit_narkoba'] = $this->M_data_narkoba->edit_narkoba($id);
			$this->load->model('M_data_efek');
			$data['data_efek'] = $this->M_data_efek->get_user_all();
			$data['lihat_efek'] = $this->M_data_efek->lihat_efek($id);
			$this->load->model('M_footer');
			$data['data_narkoba'] = $this->M_footer->narkoba();
			$data['data_artikel'] = $this->M_footer->artikel();
			$this->load->view('edit_narkoba', $data);
		}

		public function edit_artikel() {
			$this->load->helper('url');
			$this->load->model('M_data_artikel');
			$id=$_GET['id'];
			$data['edit_artikel'] = $this->M_data_artikel->edit_artikel($id);

			$this->load->model('M_footer');
			$data['data_narkoba'] = $this->M_footer->narkoba();
			$data['data_artikel'] = $this->M_footer->artikel();
			$this->load->view('edit_artikel', $data);
		}

//proses edit
		public function proses_edit_golongan() {

				$id=$_GET['id'];
				$this->load->model('M_edit_golongan');
				$cek=$this->M_edit_golongan->update($id);
				if($cek){
					$this->edit_berhasil();
					redirect('tambah_golongan');
				}else{
					$this->edit_gagal();
					redirect('edit_golongan?id='.$id.'');
				}

		}

    public function proses_edit_admin() {

				$id=$_GET['id'];
				$this->load->model('M_edit_admin');
        $id=$this->session->userdata['admin'];
				$cek=$this->M_edit_admin->update($id);
				if($cek){
          function hapus_berhasil(){
      			$this->session->set_flashdata('edit', '
      							<div class="alert alert-success fade in">
      							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      							<strong>Berhasil!</strong> Data Berhasil Diperbaharui!.
      							</div>');
      		}

					redirect('logout');
				}else{
          function hapus_gagal(){
      			$this->session->set_flashdata('edit', '
      							<div class="alert alert-danger fade in">
      							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      							<strong>Gagal!</strong> Data Gagal Di Perbaharui!.
      							</div>');
      		}
					redirect('tambah_admin');
				}

		}

		public function proses_edit_jenis() {

				$id=$_GET['id'];
				$this->load->model('M_edit_jenis');
				$cek=$this->M_edit_jenis->update($id);
				if($cek){
					$this->edit_berhasil();
					redirect('tambah_jenis');
				}else{
					$this->edit_gagal();
					redirect('edit_jenis?id='.$id.'');
				}

		}
		public function proses_edit_efek() {

				$id=$_GET['id'];
				$this->load->model('M_edit_efek');
				$cek=$this->M_edit_efek->update($id);
				if($cek){
					$this->edit_berhasil();
					redirect('tambah_efek');
				}else{
					$this->edit_gagal();
					redirect('edit_efek?id='.$id.'');
				}

		}
		public function proses_edit_artikel() {


				 $id=$_GET['id'];
				 $config['upload_path']   = './uploads/';
				 $config['allowed_types'] = 'gif|jpg|png';
				 $config['max_size']      = 1000;
				 $config['max_width']     = 10240;
				 $config['max_height']    = 7680;
				 $new_name ="Artikel".time().$_FILES["gambar"] ['name'];
				 $config['file_name']=$new_name;
				 $this->load->library('upload', $config);
				if($_FILES["gambar"] ['name']==null){

					$this->load->model('M_edit_artikel');
					$cek=$this->M_edit_artikel->no_foto($id);
						if($cek){
							$this->edit_berhasil();
							redirect("edit_artikel?id=$id");
						}else{
							$this->edit_gagal();
							redirect("edit_artikel?id=$id");
						}
				}
				 else {

					 if ( ! $this->upload->do_upload('gambar')) {

					$this->session->set_flashdata('pesan', '
									<div class="alert alert-danger fade in">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<strong>Gagal!</strong> Gambar Terlalu Besar.
									</div>');
					redirect("edit_artikel?id=$id");
					}


					else {

						   $this->load->model('M_edit_artikel');
							$cek=$this->M_edit_artikel->process($new_name,$id);
							if($cek){
									$this->edit_berhasil();
									redirect("edit_artikel?id=$id");
								}else{
									$this->edit_gagal();
									redirect("edit_artikel?id=$id");
								}
					}
				 }
		}


		public function proses_edit_narkoba() {


				 $id=$_GET['id'];
				 $config['upload_path']   = './uploads/';
				 $config['allowed_types'] = 'gif|jpg|png';
				 $config['max_size']      = 1000;
				 $config['max_width']     = 10240;
				 $config['max_height']    = 7680;
				 $new_name ="Edit_narkoba".time().$_FILES["gambar"] ['name'];
				 $config['file_name']=$new_name;
				 $this->load->library('upload', $config);
				if($_FILES["gambar"] ['name']==null){

					$this->load->model('M_edit_narkoba');
					$cek=$this->M_edit_narkoba->no_foto($id);
						if($cek){
							$this->edit_berhasil();
							redirect("edit_narkoba?id=$id");
						}else{
							$this->edit_gagal();
							redirect("edit_narkoba?id=$id");
						}
				}
				 else {

					 if ( ! $this->upload->do_upload('gambar')) {

					$this->session->set_flashdata('pesan', '
									<div class="alert alert-danger fade in">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<strong>Gagal!</strong> Gambar Terlalu Besar.
									</div>');
					redirect("edit_narkoba?id=$id");
					}


					else {

						   $this->load->model('M_edit_narkoba');
							$cek=$this->M_edit_narkoba->process($new_name,$id);
							if($cek){
									$this->edit_berhasil();
									redirect("edit_narkoba?id=$id");
								}else{
									$this->edit_gagal();
									redirect("edit_narkoba?id=$id");
								}
					}
				 }
		}

//cetak
	public function cetak_per_narkoba() {
			$id_narkoba=$_GET['id'];
			$this->load->helper('url');
			$this->load->model('M_detail_narkoba');
			$data['detail_narkoba'] = $this->M_detail_narkoba->get_user_all($id_narkoba);
			$data['efek_narkoba'] = $this->M_detail_narkoba->efek($id_narkoba);


         $this->load->view('cetak_per_narkoba',$data);
		}
	function efek($id_narkoba) {

			$this->load->helper('url');
			$this->load->model('M_detail_narkoba');

			$data['efek_narkoba'] = $this->M_detail_narkoba->efek($id_narkoba);


    echo $data;
	}

	public function cetak_semua_narkoba($id_narkoba=null) {
			$id_narkoba;
			$this->load->helper('url');
			$this->load->model('M_detail_narkoba');
			$data['detail_narkoba'] = $this->M_detail_narkoba->semua();
			$data['efek_narkoba'] = $this->M_detail_narkoba->efek($id_narkoba);

         $this->load->view('cetak_semua_narkoba',$data);
		}

	public function cetak_semua_narkoba2($id_narkoba=null) {
			$id_narkoba;
			$this->load->helper('url');
			$this->load->model('M_detail_narkoba');
			$data['detail_narkoba'] = $this->M_detail_narkoba->semua();
			$data['efek_narkoba'] = $this->M_detail_narkoba->efek($id_narkoba);
			$this->load->model('M_data_golongan');
			$data['data_golongan'] = $this->M_data_golongan->get_user_all();
			$this->load->model('M_data_jenis');
			$data['data_jenis'] = $this->M_data_jenis->get_user_all();
         $this->load->view('cetak_semua_narkoba2',$data);
		}

//Proses Tambah
		function proses_tambah_golongan(){
            $this->load->model('M_tambah_golongan');
			$cek=$this->M_tambah_golongan->process();
			if($cek){
				$this->tambah_berhasil();
				redirect('tambah_golongan');
			}else{
				$this->tambah_gagal();
				redirect('tambah_golongan');
			}

		}

		function proses_tambah_jenis(){
            $this->load->model('M_tambah_jenis');
			$cek=$this->M_tambah_jenis->process();
			if($cek){
				$this->tambah_berhasil();
				redirect('tambah_jenis');
			}else{
				$this->tambah_gagal();
				redirect('tambah_jenis');
			}

		}

		function proses_tambah_efek(){
            $this->load->model('M_tambah_efek');
			$cek=$this->M_tambah_efek->process();
			if($cek){
				$this->tambah_berhasil();
				redirect('tambah_efek');
			}else{
				$this->tambah_gagal();
				redirect('tambah_efek');
			}

		}

		function proses_tambah_admin(){
            $this->load->model('M_tambah_admin');
			$cek=$this->M_tambah_admin->process();
			if($cek){
				$this->tambah_berhasil();
				redirect('tambah_admin');
			}else{
				$this->tambah_gagal();
				redirect('tambah_admin');
			}

		}

		function proses_tambah_narkoba(){
		 $config['upload_path']   = './uploads/';
         $config['allowed_types'] = 'gif|jpg|png';
         $config['max_size']      = 1000;
         $config['max_width']     = 10240;
         $config['max_height']    = 7680;
		 $new_name =time().$_FILES["gambar"] ['name'];
		 $config['file_name']=$new_name;
         $this->load->library('upload', $config);

         if ( ! $this->upload->do_upload('gambar')) {

			$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Gambar Terlalu Besar.
							</div>');
			redirect('data_artikel');
         }

         else {

           $this->load->model('M_tambah_narkoba');
			$cek=$this->M_tambah_narkoba->process($new_name);
			if($cek){
				$this->tambah_berhasil();
				redirect('tambah_narkoba');
			}else{
				$this->tambah_gagal();
				redirect('tambah_narkoba');
			}
         }
		}

		 function proses_tambah_artikel(){
		 $config['upload_path']   = './uploads/';
         $config['allowed_types'] = 'gif|jpg|png';
         $config['max_size']      = 1000;
         $config['max_width']     = 10240;
         $config['max_height']    = 7680;
		 $new_name ="Artikel".time().$_FILES["gambar"] ['name'];
		 $config['file_name']=$new_name;
         $this->load->library('upload', $config);

         if ( ! $this->upload->do_upload('gambar')) {

			$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Gambar Terlalu Besar.
							</div>');
			redirect('data_artikel');
         }


         else {

           $this->load->model('M_tambah_artikel');
			$cek=$this->M_tambah_artikel->process($new_name);
			if($cek){
				$this->tambah_berhasil();
				redirect('data_artikel');
			}else{
				$this->tambah_gagal();
				redirect('tambah_artikel');
			}
         }




		}

//Halamaan Edit

//Proses Edit

//Proses Hapus
		function proses_hapus_jenis($id){

      $this->load->model('M_hapus_jenis');
			$cek=$this->M_hapus_jenis->delete($id);
			if($cek){
				$this->hapus_berhasil();
				redirect('tambah_jenis');
			}else{
				$this->hapus_gagal();
				redirect('tambah_jenis');
			}

       }

	   function proses_hapus_golongan($id){

            $this->load->model('M_hapus_golongan');
			$cek=$this->M_hapus_golongan->delete($id);
			if($cek){
				$this->hapus_berhasil();
				redirect('tambah_golongan');
			}else{
				$this->hapus_gagal();
				redirect('tambah_golongan');
			}

       }

	   function proses_hapus_efek($id){

            $this->load->model('M_hapus_efek');
			$cek=$this->M_hapus_efek->delete($id);
			if($cek){
				$this->hapus_berhasil();
				redirect('tambah_efek');
			}else{
				$this->hapus_gagal();
				redirect('tambah_efek');
			}

       }

	   function proses_hapus_admin($id){

            $this->load->model('M_hapus_admin');
			$cek=$this->M_hapus_admin->delete($id);
			if($cek){
				$this->hapus_berhasil();
				redirect('tambah_admin');
			}else{
				$this->hapus_gagal();
				redirect('tambah_eadmin');
			}

       }

	   function proses_hapus_narkoba($id){

            $this->load->model('M_hapus_narkoba');
			$cek=$this->M_hapus_narkoba->delete($id);
			if($cek){
				$this->hapus_berhasil();
				redirect('data_narkoba');
			}else{
				$this->hapus_gagal();
				redirect('data_narkoba');
			}

       }

	   function proses_hapus_artikel($id){

            $this->load->model('M_hapus_artikel');
			$cek=$this->M_hapus_artikel->delete($id);
			if($cek){
				$this->hapus_berhasil();
				redirect('data_artikel');
			}else{
				$this->hapus_gagal();
				redirect('data_artikel');
			}

       }

//tambahan
		function tambah_berhasil(){
			$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Berhasil Di Tambahkan!.
							</div>');
		}
		function tambah_gagal(){
			$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal ditambahkan!.
							</div>');
		}
		function edit_berhasil(){
			$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Berhasil Di Perbaharui!.
							</div>');
		}
		function edit_gagal(){
			$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal Di Perbaharui!.
							</div>');
		}
		function hapus_berhasil(){
			$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Berhasil Dihapus!.
							</div>');
		}
		function hapus_gagal(){
			$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal Di Hapus!.
							</div>');
		}






   }
?>
