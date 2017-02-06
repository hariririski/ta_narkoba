<?php

if (!isset($this->session->userdata['admin'])) {
     redirect('home', 'refresh');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
       <?php echo $this->load->view('common/title', '', TRUE);?>

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="<?php base_url()?>assets/css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="<?php base_url()?>assets/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="<?php base_url()?>assets/css/custom.css" rel="stylesheet">
	<script src="<?php base_url()?>assets/ckeditor/ckeditor.js"></script>
	<script src="<?php base_url()?>assets/ckeditor/js/sample.js"></script>

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

  
    <?php echo $this->load->view('common/head', '', TRUE);?>      
</head>

<body>


    <div id="all">
	
	 <?php echo $this->load->view('common/menu', '', TRUE);?>    
    
          <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Edit Narkoba</h1>
                    </div>
                 
                </div>
            </div>
        </div>

        <div id="content" class="clearfix">

            <div class="container">

                <div class="row">

                    <!-- *** LEFT COLUMN ***
			 _________________________________________________________ -->

                    <div class="col-md-12 clearfix" id="customer-account">


                        <div class="box clearfix">
                            <div class="heading">
                                <h3 class="text-uppercase">Edit Narkoba</h3>
                            </div>
						<?php
						 foreach($edit_narkoba as $edit){
						?>
                         <?php echo $this->session->flashdata('pesan');?>
						 <?php
							$id=$_GET['id'];
							echo form_open_multipart("Redirect_controller/proses_edit_narkoba?id=$id");    
						?>
                           
                                <div class="row">
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <label for="firstname">Nama Umum Narkoba</label>
                                            <input type="text" class="form-control" id="firstname" value="<?php echo $edit->nama_umum?>" name="nama_umum" required>
                                        </div>
										<div class="form-group">
                                            <label for="firstname">Nama Khusus Narkoba</label>
                                            <input type="text" class="form-control" id="firstname" name="nama_khusus" value="<?php echo $edit->nama_khusus?>" required>
                                        </div>
										<div class="form-group">
                                            <label for="firstname">Jenis Narkoba</label>
                                          <select class="form-control" id="state" required name="jenis">
										    <option value="<?php echo $edit->id_jenis?>"><?php echo $edit->nama_jenis?></option>
										  <?php
											foreach($data_jenis as $jenis){
													if($jenis->id_jenis!=$edit->id_jenis){
											?>
											 <option value="<?php echo $jenis->id_jenis?>"><?php echo $jenis->nama_jenis?></option>
											<?php }
											
											}
											?>
										 
										  
										  </select>
                                        </div>
										<div class="form-group">
                                            <label for="firstname">Golongan Narkoba</label>
                                          <select class="form-control" id="state" required name="golongan">
										     <option value="<?php echo $edit->id_golongan?>"><?php echo $edit->nama_golongan?></option>
										 <?php
											foreach($data_golongan as $data2){
												if($data2->id_golongan!=$edit->id_golongan){
											?>
											 <option value="<?php echo $data2->id_golongan?>"><?php echo $data2->nama_golongan?></option>
											<?php }
												}?>
										  
										  </select>
                                        </div>
										<div class="form-group">
                                            <label for="firstname">Penjelasan Narkoba</label>
                                         <textarea rows="4" cols="50" name="penjelasan" id="editor" required>
											<?php echo $edit->keterangan?>
											</textarea>
                                        </div>
										<div class="form-group">
                                            <label for="firstname">Foto Narkoba </label><br>
											<img src="<?php echo base_url()."uploads/".$edit->foto?>" width="50%"><br><br>
                                           <input type="file" name="gambar" id="fileToUpload" >
                                        </div>
										
										<div class="form-group">
                                            <label for="firstname">Efek Narkoba</label><br>
											
											<?php
												
												
												$jumlah=count($lihat_efek);
												if($jumlah==0){
													?>
													
													
														 <?php foreach($data_efek as $data){ ?>			
																
																	<input type="checkbox" name="efek[]"  value="<?php echo $data->id_efek?>"> <?php echo $data->nama_efek; ?><br>
															<?php  } ?>
														
													
												<?php	
												}else{
													$id_efek;		
													$nama_efek;		
													$check_efek;		
													
															
																foreach($data_efek as $data){
																	$kode_efek=$data->id_efek;
																	$id_efek[$kode_efek]=$data->id_efek;
																	$nama_efek[$kode_efek]=$data->nama_efek;
																	$check_efek[$kode_efek]=" ";
																
																}
																foreach($lihat_efek as $lihat){
																	$kode_efek=$lihat->id_efek;
																	$check_efek[$kode_efek]="checked";
																
																  
																}
																
																foreach($data_efek as $data){
																	$kode_efek=$data->id_efek;
																	
																
																	echo '<input type="checkbox" name="efek[]" '.$check_efek[$kode_efek].' value="'.$id_efek[$kode_efek].'">'.$nama_efek[$kode_efek].'<br>';
																 
																}
																
															?>
														
														

											<?php }
											//print_r($check_efek);
											?>
                                        </div>
										
										
										
                                    </div>
                                  
                                </div>
                                <!-- /.row -->

                               
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-template-main"><i class="fa fa-save"></i> Save changes</button>

                                    </div>

                                </div>

                         <?php
								echo form_close();
							?>
						<?php }?>
                        </div>

                    </div>
                    <!-- /.col-md-9 -->

                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
			 _________________________________________________________ -->

                  
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** FOOTER ***
_________________________________________________________ -->
   <?php echo $this->load->view('common/footer', '', TRUE);?>  

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="<?php base_url()?>assets/js/jquery.cookie.js"></script>
    <script src="<?php base_url()?>assets/js/waypoints.min.js"></script>
    <script src="<?php base_url()?>assets/js/jquery.counterup.min.js"></script>
    <script src="<?php base_url()?>assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="<?php base_url()?>assets/js/front.js"></script>

    <script>
	initSample();
</script>




</body>

</html>