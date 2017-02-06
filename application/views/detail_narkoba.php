
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

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

 <?php echo $this->load->view('common/head', '', TRUE);?>
    <!-- owl carousel css -->

    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

</head>

<body>
	<?php
		foreach($detail_narkoba as $data){
	?>

    <div id="all">
        <?php echo $this->load->view('common/menu', '', TRUE);?>    
        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1><?php echo $data->nama_umum;?></h1>
                    </div>
                    <div class="col-md-5">
                        

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h2><?php echo $data->nama_umum;?> / <?php echo $data->nama_khusus;?></h2>
                        </div>

                       
                    </div>
                </div>
                <div class="row portfolio-project">

                    <section>

                        <div class="col-sm-8">
                            <div class="project owl-carousel">
                                <div class="item">
                                    <img src="<?php base_url()?>uploads/<?php echo $data->foto?>" alt="" class="img-responsive">
                                </div>
                               
                            </div>
                            <!-- /.project owl-slider -->

                        </div>

                        <div class="col-sm-4">
                            <div class="project-more">
                                <h4>Nama Umum</h4>
                                <p><?php echo $data->nama_umum;?></p>
                                <h4>Nama Khusus</h4>
                                <p><?php echo $data->nama_khusus;?></p>
                                <h4>Golongan Narkoba</h4>
                                <p><?php echo $data->nama_golongan;?></p>
                                <h4>Jenis Narkoba</h4>
                                <p><?php echo $data->nama_jenis;?></p>
								<h4>Cetak Data</h4><br>
                                <p><a href="<?php echo base_url()?>cetak_per_narkoba?id=<?php echo $data->id_narkoba?>"  ><button type="submit" class="btn btn-success">Cetak PDF</button></a></p>
                            </div>
                        </div>

                    </section>

                    <section>

                        <div class="col-sm-12">

                            <div class="heading">
                                <h3>Penjelasan Narkoba</h3>
                            </div>

                             <p class="lead"><?php echo $data->keterangan;?></p>
                        </div>
                    </section>
					
					<div class="col-md-10">
					 <div class="heading">
                                <h3>Efek Yang Ditimbukan </h3>
                            </div>
                            <div class="panel-group accordion" id="accordionThree">
							
							<?php
								foreach($efek_narkoba as $data){
							?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

                                                <a data-toggle="collapse" data-parent="#accordionThree" href="#<?php echo $data->nama_efek;?>">

                                                    <?php echo $data->nama_efek;?>

                                                </a>

                                            </h4>
                                    </div>
                                    <div id="<?php echo $data->nama_efek;?>" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <?php echo $data->penjelasan;?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							<?php }?>
							
							
                                 </div>
                        </div>
                </div>

               </div>
            <!-- /.container -->


        </div>
        <!-- /#content -->

        <!-- *** GET IT ***
_________________________________________________________ -->



        <!-- *** GET IT END *** -->


        <!-- *** FOOTER ***
_________________________________________________________ -->

        
      <?php echo $this->load->view('common/footer', '', TRUE);?>  





    </div>
		<?php }?>
    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="<?php base_url()?>js/jquery.cookie.js"></script>
    <script src="<?php base_url()?>js/waypoints.min.js"></script>
    <script src="<?php base_url()?>js/jquery.counterup.min.js"></script>
    <script src="<?php base_url()?>js/jquery.parallax-1.1.3.js"></script>
    <script src="<?php base_url()?>js/front.js"></script>

    

    <!-- owl carousel -->
    <script src="<?php base_url()?>js/owl.carousel.min.js"></script>



</body>

</html>