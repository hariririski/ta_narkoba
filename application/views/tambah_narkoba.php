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
 <link rel="stylesheet" href="<?php base_url()?>assets/jquery.auto-complete.css">
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
                        <h1>Tambah Narkoba</h1>
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
                                <h3 class="text-uppercase">Tambah Narkoba</h3>
                            </div>

                         <?php echo $this->session->flashdata('pesan');?>
						 <?php
							echo form_open_multipart('Redirect_controller/proses_tambah_narkoba');
						?>

                                <div class="row">
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <label for="firstname">Nama Umum Narkoba</label>
                                            <input type="text" class="form-control" id="umum" name="nama_umum" required>
                                        </div>
										<div class="form-group">
                                            <label for="firstname">Nama Khusus Narkoba</label>
                                            <input type="text" class="form-control" id="khusus" name="nama_khusus" required>
                                        </div>
										<div class="form-group">
                                            <label for="firstname">Jenis Narkoba</label>
                                          <select class="form-control" id="state" required name="jenis">
										   <option value=""> Pilih Jenis Narkoba</option>
										  <?php
											foreach($data_jenis as $data){
											?>
											 <option value="<?php echo $data->id_jenis?>"><?php echo $data->nama_jenis?></option>
											<?php }?>


										  </select>
                                        </div>
										<div class="form-group">
                                            <label for="firstname">Golongan Narkoba</label>
                                          <select class="form-control" id="state" required name="golongan">
										     <option value=""> Pilih Golongan Narkoba</option>
										 <?php
											foreach($data_golongan as $data){
											?>
											 <option value="<?php echo $data->id_golongan?>"><?php echo $data->nama_golongan?></option>
											<?php }?>

										  </select>
                                        </div>
										<div class="form-group">
                                            <label for="firstname">Penjelasan Narkoba</label>
                                         <textarea rows="4" cols="50" name="penjelasan" id="editor" required>
											                  </textarea>
                                        </div>
										<div class="form-group">
                                            <label for="firstname">Foto Narkoba </label>
                                           <input type="file" name="gambar" id="fileToUpload" required>
                                        </div>

										<div class="form-group">
                                            <label for="firstname">Efek Narkoba</label><br>
											 <?php
											foreach($data_efek as $data){
											?>

											  <input type="checkbox" name="efek[]"  value="<?php echo $data->id_efek?>"> <?php echo $data->nama_efek; ?><br>
											<?php }?>

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
	 <script src="<?php base_url()?>assets/jquery-1.11.1.min.js"></script>
    <script src="<?php base_url()?>assets/jquery.auto-complete.js"></script>
    <script>
        $(function(){
            $('#umum').autoComplete({
                minChars: 1,
                source: function(term, suggest){
                    term = term.toLowerCase();
                    var choices = [ <?php foreach($data_umum as $auto){ echo "'";
																		 echo $auto->nama_umum;
																		 echo "'";
																		 echo","; }  ?> 'Tidak Ada'];
                    var suggestions = [];
                    for (i=0;i<choices.length;i++)
                        if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
                    suggest(suggestions);
                }
            });

        });


    </script>
	<script>
        $(function(){
            $('#khusus').autoComplete({
                minChars: 1,
                source: function(term, suggest){
                    term = term.toLowerCase();
                    var choices = [ <?php foreach($data_khusus as $auto){ echo "'";
																		 echo $auto->nama_khusus;
																		 echo "'";
																		 echo","; }  ?> 'Tidak Ada'];
                    var suggestions = [];
                    for (i=0;i<choices.length;i++)
                        if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
                    suggest(suggestions);
                }
            });

        });


    </script>



</body>

</html>
