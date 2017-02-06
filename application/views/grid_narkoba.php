<!DOCTYPE html>
<html lang="en">

<head>
	
	<link rel="stylesheet" media="all" href="https://s3.amazonaws.com/dynatable-docs-assets/css/reset.css" />
    <link rel="stylesheet" media="all" href="https://s3.amazonaws.com/dynatable-docs-assets/css/bootstrap-2.3.2.min.css" />
    <link rel="stylesheet" media="all" href="https://s3.amazonaws.com/dynatable-docs-assets/css/application.css" />
    <link rel="stylesheet" media="all" href="https://s3.amazonaws.com/dynatable-docs-assets/css/project.css" />
    <link rel="stylesheet" media="all" href="https://s3.amazonaws.com/dynatable-docs-assets/css/pygments.css" />
    <link rel="stylesheet" media="all" href="https://s3.amazonaws.com/dynatable-docs-assets/css/share.css" />   
    <link rel="stylesheet" media="all" href="https://s3.amazonaws.com/dynatable-docs-assets/css/dynatable-docs.css" />
    <script type='text/javascript' src='https://s3.amazonaws.com/dynatable-docs-assets/js/jquery-1.9.1.min.js'></script>  
    <script type='text/javascript' src='https://s3.amazonaws.com/dynatable-docs-assets/js/jquery.sharrre-1.2.0.min.js'></script>
    <link rel="stylesheet" media="all" href="https://s3.amazonaws.com/dynatable-docs-assets/css/jquery.dynatable.css" />   
    <script type='text/javascript' src='https://s3.amazonaws.com/dynatable-docs-assets/js/jquery.dynatable.js'></script>
</head>

<body>


    <div id="all">
     
    
	   
	   
        

        <!-- *** LOGIN MODAL END *** -->

        <div id="content">
            <div class="container">

                <div class="col-sm-10 col-sm-offset-1" id="error-page">

                    <div class="box">

                        <div class="col-md-12">
				<div class="dynatable-demo">
					<ul id="ul-example" class="row-fluid">
					
					  <li class="span6" data-color="gray">
						  <div class="thumbnail">
							<div class="thumbnail-image">
							  <center><img src="<?php base_url()?>assets/img/product3.jpg"/></center>
							</div>
							<div class="caption">
							  <h3>ssss</h3>
							  <p>aaa</p>
							  <center><p><a  href="detail_puskesmas.php?id_puskesmas=" class="btn btn-primary">Detail</a> </p></center>
							</div>
						  </div>
						</li>
						
						<li class="span6" data-color="gray">
						  <div class="thumbnail">
							<div class="thumbnail-image">
							  <center><img src="<?php base_url()?>assets/img/product3.jpg"/></center>
							</div>
							<div class="caption">
							  <h3>aa</h3>
							  <p>aaa</p>
							  <center><p><a  href="detail_puskesmas.php?id_puskesmas=" class="btn btn-primary">Detail</a> </p></center>
							</div>
						  </div>
						</li>
						
						<li class="span6" data-color="gray">
						  <div class="thumbnail">
							<div class="thumbnail-image">
							  <center><img src="<?php base_url()?>assets/img/product3.jpg"/></center>
							</div>
							<div class="caption">
							  <h3>aa</h3>
							  <p>aaa</p>
							  <center><p><a  href="detail_puskesmas.php?id_puskesmas=" class="btn btn-primary">Detail</a> </p></center>
							</div>
						  </div>
						</li>
						
						<li class="span6" data-color="gray">
						  <div class="thumbnail">
							<div class="thumbnail-image">
							  <center><img src="<?php base_url()?>assets/img/product3.jpg"/></center>
							</div>
							<div class="caption">
							  <h3>aa</h3>
							  <p>aaa</p>
							  <center><p><a  href="detail_puskesmas.php?id_puskesmas=" class="btn btn-primary">Detail</a> </p></center>
							</div>
						  </div>
						</li>
						
						<li class="span6" data-color="gray">
						  <div class="thumbnail">
							<div class="thumbnail-image">
							  <center><img src="<?php base_url()?>assets/img/product3.jpg"/></center>
							</div>
							<div class="caption">
							  <h3>aa</h3>
							  <p>aaa</p>
							  <center><p><a  href="detail_puskesmas.php?id_puskesmas=" class="btn btn-primary">Detail</a> </p></center>
							</div>
						  </div>
						</li>
						
						<li class="span6" data-color="gray">
						  <div class="thumbnail">
							<div class="thumbnail-image">
							  <center><img src="<?php base_url()?>assets/img/product3.jpg"/></center>
							</div>
							<div class="caption">
							  <h3>aa</h3>
							  <p>aaa</p>
							  <center><p><a  href="detail_puskesmas.php?id_puskesmas=" class="btn btn-primary">Detail</a> </p></center>
							</div>
						  </div>
						</li>
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

<
</body>

</html>