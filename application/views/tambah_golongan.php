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
    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
 <link rel="stylesheet" href="<?php base_url()?>assets/jquery.auto-complete.css">
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
                        <h1>Tambah Golongan Narkoba</h1>
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

                    <div class="col-md-9 clearfix" id="customer-account">

                      
                        <div class="box clearfix">
                            <div class="heading">
                                <h3 class="text-uppercase">Tambah Golongan</h3>
                            </div>

                        <?php echo $this->session->flashdata('pesan');?>
						 <?php
							echo form_open('Redirect_controller/proses_tambah_golongan');    
						?>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Nama Golongan</label>
                                            <input type="text" class="form-control" id="hero-demo" name="nama_golongan" required>
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

                    <div class="col-md-12">
						 <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Golongan Narkoba
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Golongan</th>
                                        <th>Edit</th>
                                        <th>Hapus</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
									<?php
											
											$i=0;
													foreach($data_golongan as $data){
											?>
                                    <tr class="odd gradeX">
                                        <td><?php echo ++$i?></td>
                                        <td><?php echo $data->nama_golongan; ?></td>
										<td><a href="<?php echo base_url()?>edit_golongan?id=<?php echo $data->id_golongan?>" ><button type="button" class="btn btn-success">Edit</button></a></td>
										<?php
										echo"<td class='center'><a href='". base_url()."Redirect_controller/proses_hapus_golongan/".$data->id_golongan."' onclick=\"return confirm('Apakah Anda Yakin Menghapus ?') \" title='Hapus'><button type='button' class='btn btn-danger'>Hapus</button></a>
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
  
    <script src="<?php base_url()?>assets/jquery.auto-complete.js"></script>
    <script>
        $(function(){
            $('#hero-demo').autoComplete({
                minChars: 1,
                source: function(term, suggest){
                    term = term.toLowerCase();
                    var choices = [ <?php foreach($data_golongan as $auto){ echo "'";
																		 echo $auto->nama_golongan;
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