<!DOCTYPE html>
<html lang="en">

<head>
     <?php echo $this->load->view('common/title', '', TRUE);?>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>
	

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
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
		
</head>

<body>


    <div id="all">
       <?php echo $this->load->view('common/menu', '', TRUE);?>     
     <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Narkoba</h1>
                    </div>
                    <div class="col-md-5">
                        

                    </div>
                </div>
            </div>
        </div>

	   
	   
        

        <!-- *** LOGIN MODAL END *** -->

        <div id="content">
            <div class="container">

                <div class="col-sm-12 col-sm-offset-0" id="error-page">

						<hr>
                        <div class="col-md-14">
						
						<table width="100%" border='0' id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th width="50%"></th>
                                        <th></th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
								<?php
								$urut=2;
								$cek=1;
								foreach($data_narkoba1 as $data){
								$jumlah_data=count($data_narkoba1);
								?>
								<?php if($urut%2==0){?>
									<tr>
								<?php }?>		
										<td>
										<?php $cek++;
										$cek;
										echo '<font color="white">'.$urut.' '.$data->id_narkoba.' '.$data->nama_khusus.' '.$data->nama_umum.' '.$data->nama_golongan.' '.$data->nama_jenis.'</font>';?>
											 <div class="col-md-12 col-sm-8">
                                <div class="product">
                                    <div class="image">
                                        <a align="center" href="<?php base_url()?>detail_narkoba?id=<?php echo$data->id_narkoba;?>">
                                           <center> <img  src="<?php base_url()?>uploads/<?php echo $data->foto?>" alt="" class="img-responsive image1" style="width:360px; height:360px">
                                        </a></center>
                                    </div>
                                    <!-- /.image -->
                                    <div class="text">
                                        <h3><a href="shop-detail.html"> <?php echo $data->nama_umum;?> /  <?php echo $data->nama_khusus ;?></a></h3>
                                        <p class="price">Golongan :  <?php echo $data->nama_golongan;?></p>
                                        <p class="price">Jenis :  <?php echo $data->nama_jenis ;?></p>
										<a href="<?php base_url()?>detail_narkoba?id=<?php echo$data->id_narkoba;?>" class="btn btn-template-main">Baca Selanjutnya</a>
                                       
                                    </div>
                                    <!-- /.text -->
                                </div>
                                <!-- /.product -->
                            </div>
								
										</td>
										
								<?php 
								
								
								if($urut%2!=0){
									
										echo "</tr>";
										
									
									}$urut++;?>
																		
									
									<?php }
									if($urut%2!=0){
									 echo "<td></td></tr>";
									}									 
									?>
									
									
                                </tbody>
						</table>
						
				</div>
				
			
			
			
			



      


                </div>
				
                <!-- /.col-sm-6 -->
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
 <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

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