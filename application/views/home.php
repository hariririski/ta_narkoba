<!DOCTYPE html>
<html lang="en">

<head>
     <?php echo $this->load->view('common/title', '', TRUE);?>
	
<link rel="stylesheet" href="<?php base_url()?>assets/main.css">
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

    

    <link href="<?php base_url()?>assets/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php base_url()?>assets/css/owl.theme.css" rel="stylesheet">
	<?php echo $this->load->view('common/head', '', TRUE);?>
</head>

<body>

    <div id="all">

        <?php echo $this->load->view('common/menu', '', TRUE);?>    
         


        <section>
            <!-- *** HOMEPAGE CAROUSEL ***
 _________________________________________________________ -->

            <div class="home-carousel">

                <div class="dark-mask"></div>

                <div class="container">
                    <div class="homepage owl-carousel">
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-5 right">
                                    <p>
                                        <img src="<?php base_url()?>assets/img/bnn2.png" alt="" width="35%">
                                    </p>
                                    <h1>Hidup Cerdas Tanpa Narkoba</h1>
                                    <p>Perangi Narkoba Bersama-Sama.
                                       </p>
                                </div>
                                <div class="col-sm-7">
                                    <img class="img-responsive" src="<?php base_url()?>assets/img/stop.png" alt="" width="50%">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">

                                <div class="col-sm-7 text-center">
                                    <img class="img-responsive" src="<?php base_url()?>assets/img/stop2.png" alt="" width="50%">
                                </div>

                                <div class="col-sm-5">
                                    <h2><?php foreach($jumlah_narkoba as $data){ echo $data->jumlah_narkoba;}?> Informasi Narkoba</h2>
                                    <ul class="list-style-none">
                                        <li>Terdiri:</li>
                                        <li><?php foreach($jumlah_golongan as $data){ echo $data->jumlah_golongan;}?> Golongan Narkoba</li>
                                        <li><?php foreach($jumlah_artikel as $data){ echo $data->jumlah_artikel;}?> Jenis Narkoba</li>
                                      
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-5 right">
                                    <h1>BNN</h1>
                                    <ul class="list-style-none">
                                        <li>Badan Narkotika Nasional (disingkat BNN) adalah sebuah Lembaga Pemerintah Non Kementerian (LPNK) Indonesia yang mempunyai tugas melaksanakan tugas pemerintahan di bidang pencegahan, pemberantasan penyalahgunaan dan peredaran gelap psikotropika, prekursor, dan bahan adiktif lainnya kecuali bahan adiktif untuk tembakau dan alkohol. </li>
                                        
                                    </ul>
                                </div>
                                <div class="col-sm-7">
                                    <img class="img-responsive" src="<?php base_url()?>assets/img/bnn3.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- /.project owl-slider -->
                </div>
            </div>

            <!-- *** HOMEPAGE CAROUSEL END *** -->
        </section>

        <section class="bar background-white no-mb">
            <div class="container" data-animate="fadeInUp">
                <div class="row">
                    <div class="col-md-12">

                      

                        <div class="heading text-center">
                            <h3>Narkoba Terbaru</h3>
                        </div>

                        <div class="row portfolio no-space">
						<?php
											
													$i=1;
													foreach($latest_narkoba as $data){
																									?>
                            <div class="col-sm-3">
                                <div class=" col-sm-13 box-image">
                                    <div class="image">
                                        <img src="<?php base_url()?>uploads/<?php echo $data->foto?>" alt="" class="img-responsive" style="width:290px; height:290px" >
                                    </div>
                                    <div class="bg"></div>
                                    <div class="name">
                                        <h3><a href="<?php base_url()?>detail_narkoba?id=<?php echo$data->id_narkoba;?>"><?php echo $data->nama_umum?></a></h3> 
                                    </div>
                                    <div class="text">
                                        <p class="hidden-sm">Nama Khusus : <?php echo $data->nama_khusus?><br>
															 Golongan Narkoba	: <?php echo $data->nama_golongan?><br>
															 Jenis Narkoba : <?php echo $data->nama_jenis?></p>
                                        <p class="buttons">
                                            <a href="<?php base_url()?>detail_narkoba?id=<?php echo$data->id_narkoba;?>"class="btn btn-template-transparent-primary">Lihat</a>
                                           
                                        </p>
                                    </div>
                                </div>
                                <!-- /.box-image -->

                            </div>
							
							<?php 
							}?>
                            
                        </div>

                        <div class="see-more">
                            <a href="<?php base_url(); ?>narkoba" class="btn btn-template-main">Lihat Lainnya</a>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <section class="bar background-pentagon no-mb">
            <div class="container">
                <div class="row showcase">
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon"><i class="fa fa-align-justify"></i>
                            </div>
                            <h4><span class="counter"><?php foreach($jumlah_narkoba as $data){ echo $data->jumlah_narkoba;}?></span><br>

		Narkoba</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon"><i class="fa fa-users"></i>
                            </div>
                            <h4><span class="counter"><?php foreach($jumlah_golongan as $data){ echo $data->jumlah_golongan;}?></span><br>

		Golongan Narkoba</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon"><i class="fa fa-copy"></i>
                            </div>
                            <h4><span class="counter"><?php foreach($jumlah_jenis as $data){ echo $data->jumlah_jenis;}?></span><br>

		Jenis Narkoba</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon"><i class="fa fa-font"></i>
                            </div>
                            <h4><span class="counter"><?php foreach($jumlah_artikel as $data){ echo $data->jumlah_artikel;}?></span><br> 

		Artikel</h4>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.bar -->

        <section class="bar background-white no-mb">
            <div class="container">

                <div class="col-md-12">
                    <div class="heading text-center">
                        <h2>Artikel Terbaru</h2>
                    </div>

                    <p class="lead">Berikut Artikel Terbaru Terkait Dengan Narkoba   <a href="<?php base_url()?>artikel"><span class="accent">Lihat Semua Artikel!</span></a>
                    </p>

                    <!-- *** BLOG HOMEPAGE ***
_________________________________________________________ -->

                    <div class="row">
					<?php
											
								
													foreach($latest_artikel as $data){
											?>
                        <div class="col-md-3 col-sm-6">
                            <div class="box-image-text blog">
								
                                <div class="top">
                                    <div class="image">
                                        <img src="<?php base_url()?>uploads/<?php echo $data->foto?>" alt="" class="img-responsive" style="width:460px; height:200px" >
                                    </div>
                                    <div class="bg"></div>
                                    <div class="text">
                                        <p class="buttons">
                                            <a href="<?php echo base_url()?>detail_artikel?id=<?php echo $data->id_artikel; ?>" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Baca Selanjutnya</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="content">
								<div class="col-md-12">
                                    <h5><a href="<?php echo base_url()?>detail_artikel?id=<?php echo $data->id_artikel; ?>"><?php echo $data->judul?></a></h4>
                                    
                                    <p class="intro">
									<?php
									
									$arr_kalimat = explode (" ",$data->artikel);
											$jumlah=count($arr_kalimat);
											if($jumlah<=5){
												echo $data->artikel;
											}else{
												for($i=0;$i<=5;$i++){
													echo $arr_kalimat[$i];
													echo " ";
												}
												
												
											}
									?>	
									
									
									</p>
                                   
								</div>
								 <p class="read-more"><a href="<?php echo base_url()?>detail_artikel?id=<?php echo $data->id_artikel; ?>" class="btn btn-template-main">Baca Selanjutnya</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.box-image-text -->

                        </div>

													<?php }?>
                    </div>
                    <!-- /.row -->

                    <!-- *** BLOG HOMEPAGE END *** -->

                </div>

            </div>
            <!-- /.container -->
        </section>
        <!-- /.bar -->

        

    

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

    

    <!-- owl carousel -->
    <script src="<?php base_url()?>assets/js/owl.carousel.min.js"></script>

	<script src="<?php base_url()?>assets/main.js"></script>

</body>

</html>