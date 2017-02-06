<?php

if (!isset($this->session->userdata['admin'])) {
     redirect('home', 'refresh');
}
?>
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

	<style>
	.

	</style>
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
                        <h1>Data Narkoba</h1>
                    </div>
                    <div class="col-md-5">
                       
                    </div>
                </div>
            </div>
        </div>

        <div id="content" class="clearfix">

            <div class="container">

                <div class="row">

                    <!-- *** LEFT COLUMN ***
			 _________________________________________________________ -->

                    

                    </div>
                    <!-- /.col-md-9 -->

                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
			 _________________________________________________________ -->
				 <?php echo $this->session->flashdata('pesan');?>
                    <div class="col-md-14">
						 <div class="panel panel-default">
                        <div class="panel-heading">
                            Data  Narkoba
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Nama Umum</th>
                                        <th>Nama Khusus</th>
                                        <th>Golongan</th>
                                        <th>Jenis</th>
                                        <th width="30%">Penjelasan</th>
                                        <th width="50px">EDIT</th>
                                        <th width="50px">HAPUS</th>
                                    </tr>
                                </thead>
                                <tbody>
								 <?php echo $this->load->view('common/modal', '', TRUE);?>
                                     <?php
											
											$j=0;
													foreach($data_narkoba1 as $data){
											?>
                                    <tr class="odd gradeX">
                                        <td><?php echo ++$j?></td>
                                        <td><?php echo $data->nama_umum; ?></td>
                                        <td><?php echo $data->nama_khusus; ?></td>
                                        <td><?php echo $data->nama_golongan; ?></td>
                                        <td><?php echo $data->nama_jenis; ?></td>
                                        <td><?php
											$arr_kalimat = explode (" ",$data->keterangan);
											$jumlah=count($arr_kalimat);
											if($jumlah<=10){
												echo $data->keterangan;
											}else{
												for($i=0;$i<=10;$i++){
													echo $arr_kalimat[$i];
													echo " ";
												}
												
												echo '<a id="popover" class="btn" rel="popover" data-content="'.$data->keterangan.' " title="Keterangan"> ...Lanjutan</a>';
											}
											
										 ?>  </td>
										
										<td><a href="<?php echo base_url()?>edit_narkoba?id=<?php echo $data->id_narkoba?>"  ><button type="button" class="btn btn-success">Edit</button></a></td>
										<?php
										echo"<td class='center'><a href='". base_url()."Redirect_controller/proses_hapus_narkoba/".$data->id_narkoba."' onclick=\"return confirm('Apakah Anda Yakin Menghapus ?') \" title='Hapus'><button type='button' class='btn btn-danger'>Hapus</button></a>
										</td>";
										?>
                                      
                                    </tr>
                                    <?php } ?>
                                   
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                   

                        <!-- *** CUSTOMER MENU END *** -->
                    </div>

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
    <script>
	$(document).ready(function(){
		$('#popover').popover();
	});
	</script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0-rc2/js/bootstrap.min.js"></script>
    <script>

</body>

</html>