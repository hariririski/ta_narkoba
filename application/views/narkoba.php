<!DOCTYPE html>
<html lang="en">

<head>
     <?php echo $this->load->view('common/title', '', TRUE);?>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>
	
	
    <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/bootstrap-2.3.2.min.css" />
    <link rel="stylesheet" media="all" href="https://s3.amazonaws.com/dynatable-docs-assets/css/application.css" />
 
    <link rel="stylesheet" media="all" href="https://s3.amazonaws.com/dynatable-docs-assets/css/dynatable-docs.css" />
   <script type='text/javascript' src='https://s3.amazonaws.com/dynatable-docs-assets/js/jquery-1.9.1.min.js'></script>  
	
     <script type='text/javascript' src='https://s3.amazonaws.com/dynatable-docs-assets/js/jquery.sharrre-1.2.0.min.js'></script>
    <link rel="stylesheet" media="all" href="https://s3.amazonaws.com/dynatable-docs-assets/css/jquery.dynatable.css" /> 
     <script type='text/javascript' src='https://s3.amazonaws.com/dynatable-docs-assets/js/jquery.dynatable.js'></script> 

	
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
                 
                </div>
            </div>
        </div>
	   
	   
        

        <!-- *** LOGIN MODAL END *** -->

        <div id="content">
            <div class="container">

                <div class="col-sm-10 col-sm-offset-1" id="error-page">

                    <div class="box">

                        <div class="col-md-12">
				<div class="dynatable-demo">
					<ul id="ul-example" class="row-fluid">
					<?php
								foreach($data_narkoba1 as $data){
							?>
							
					  <li class="span6" data-color="gray">
						  <div class="thumbnail">
							<div class="thumbnail-image">
							  <center><img src="<?php base_url()?>uploads/<?php echo $data->foto?>" style="width:260px; height:260px" /></center>
							</div>
							<div class="caption">
							 <br>
							 <br>
							 <br>
							 <br>
							 <br>
							  <p>
							  <?php echo $data->nama_umum;?>
										
							  
							  
							 
							 <br>
							  Golongan : <?php echo $data->nama_golongan;?> <br>
							  Jenis	: <?php echo $data->nama_jenis;?> 
							  
							  
							  </p>
							  <center><p><a  href="<?php base_url()?>detail_narkoba?id=<?php echo$data->id_narkoba;?>" class="btn btn-primary">Detail</a> </p></center>
							</div>
						  </div>
						</li>
					<?php }?>
								
						</ul>
				</div>
			</div>
				
			
			
			
			




					<script>
					(function() {
					  // Function that renders the list items from our records
					  function ulWriter(rowIndex, record, columns, cellWriter) {
						var cssClass = "span4", li;
						if (rowIndex % 3 === 0) { cssClass += ' first'; }
						li = '<li class="' + cssClass + '"><div class="thumbnail"><div class="thumbnail-image">' + record.thumbnail + '</div><div class="caption">' + record.caption + '</div></div></li>';
						return li;
					  }

					  // Function that creates our records from the DOM when the page is loaded
					  function ulReader(index, li, record) {
						var $li = $(li),
							$caption = $li.find('.caption');
						record.thumbnail = $li.find('.thumbnail-image').html();
						record.caption = $caption.html();
						record.label = $caption.find('h3').text();
						record.description = $caption.find('p').text();
						record.color = $li.data('color');
					  }

					  $('#ul-example').dynatable({
						table: {
						  bodyRowSelector: 'li'
						},
						dataset: {
						  perPageDefault: 3,
						  perPageOptions: [3, 6, 9, 11]
						},
						writers: {
						  _rowWriter: ulWriter
						},
						readers: {
						  _rowReader: ulReader
						},
						params: {
						  records: 'Narkoba'
						}
					  });
					})();
					</script>

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

      

</body>

</html>