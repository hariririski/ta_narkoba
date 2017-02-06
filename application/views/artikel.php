<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $this->load->view('common/title', '', TRUE);?>

    <meta name="keywords" content="">
	
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="<?php echo base_url()?>assets/css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="<?php echo base_url()?>assets/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet">

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
        

       

        <!-- *** LOGIN MODAL END *** -->

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Artikel</h1>
                    </div>
                    <div class="col-md-6">
                        

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">
                <div class="row">
                    <!-- *** LEFT COLUMN ***
			 _________________________________________________________ -->

                    <div class="col-md-9" id="blog-listing-medium">
					
					<div class="panel-body">
                            <table width="100%" class="" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
								
												<?php
												$no=0;
									foreach($data_artikel1 as $data1){
									?>
									<tr>
										<td><?php 	echo '<font color="white">'.$no++.'</font>';?> 
											<section class="post" >
											<div class="row">
												<div class="col-md-2">
													<div class="image">
														<a href="<?php echo base_url()?>detail_artikel?id=<?php echo $data1->id_artikel; ?>">
															<img src="<?php echo base_url()?>uploads/<?php echo $data1->foto; ?>" class="img-responsive" alt="Example blog post alt">
														</a>
														
													</div>
													
												</div>
												
												<div class="col-md-8">
													<h2><a href="<?php echo base_url()?>detail_artikel?id=<?php echo $data1->id_artikel; ?>"><?php echo $data1->judul; ?></a></h2>
													<div class="clearfix">
														<p class="author-category">By <a href="#">Admin
														</p>
														<p class="date-comments">
															<a href="#"><i class="fa fa-calendar-o"></i> <?php echo $data1->tanggal_post; ?></a>
															
														</p>
													</div>
													<p class="intro">
													<?php
														$arr_kalimat = explode (" ",$data1->artikel);
														$jumlah=count($arr_kalimat);
														if($jumlah<=20){
															echo $data1->artikel;
														}else{
															for($i=0;$i<=20;$i++){
																echo $arr_kalimat[$i];
																echo " ";
															}
															
															
														}
														
													 ?> 													
													
													<p class="read-more"><a href="<?php echo base_url()?>detail_artikel?id=<?php echo $data1->id_artikel; ?>" class="btn btn-template-main">Baca Selanjutnya</a>
													</p>
													
												</div>
												<div class="col-md-10">
												<hr>
												</div >
											</div>
											
										</section>	
											
										</td>
									</tr>
								<?php } ?>
								
                                </tbody>
                            </table>
                      
                           
                        </div>
                        
					
                        
					
					
					
					
					
					
					<div class="container">
			
		</div>
				
					
					
					
					
					
					

                    </div>
                    <!-- /.col-md-9 -->

                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
			 _________________________________________________________ -->

                    <div class="col-md-3">

                        <!-- *** MENUS AND WIDGETS ***
 _________________________________________________________ -->
                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">INFO</h3>
                            </div>

                            <div class="panel-body text-widget">
                                <p>Berikut Merupakan Artikel Yang Mengenai Narkoba
                                </p>

                            </div>
                        </div>

                       
                        

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** RIGHT COLUMN END *** -->

                </div>
                <!-- /.row -->
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

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url()?>assets/js/jquery.cookie.js"></script>
    <script src="<?php  echo base_url()?>assets/js/waypoints.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="<?php echo base_url()?>assets/js/front.js"></script>

     <script src="<?php base_url()?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php base_url()?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php base_url()?>assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php base_url()?>assets/vendor/datatables-responsive/dataTables.responsive.js"></script>


    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>



</body>

</html>