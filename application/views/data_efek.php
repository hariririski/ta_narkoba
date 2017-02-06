
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

    <!-- Favicon and apple touch icons-->
   <?php echo $this->load->view('common/head', '', TRUE);?>
</head>

<body>


    <div id="all">
        <?php echo $this->load->view('common/menu', '', TRUE);?>    
      

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Efek Narkoba</h1>
                    </div>
                    <div class="col-md-5">
                       
                    </div>
                </div>
            </div>
        </div>

        <div id="content" class="clearfix">

            <div class="container">

                

                    <div class="row">
                        <div class="col-md-10">
                            <div class="panel-group accordion" id="accordionThree">
							
							<?php
								foreach($data_efek as $data){
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
	
	
	
	 <!-- jQuery -->
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