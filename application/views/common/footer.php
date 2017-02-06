
        <footer id="footer">
            <div class="container">
                
                <!-- /.col-md-3 -->
				<div class="col-md-3 col-sm-6">

                    <h4>Narkoba Terbaru</h4>

                    <div class="blog-entries">
					<?php
											
											$j=0;
													foreach($data_narkoba as $data){
											?>
                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always">
                                <a href="<?php base_url()?>detail_narkoba?id=<?php echo$data->id_narkoba;?>">
                                    <img class="img-responsive" src="<?php base_url()?>uploads/<?php echo $data->foto?>" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always">
                                <h5><a href="<?php base_url()?>detail_narkoba?id=<?php echo$data->id_narkoba;?>"><?php echo $data->nama_umum?></a></h5>
                            </div>
                        </div>
													<?php }?>
                       
                    </div>

                    <hr class="hidden-md hidden-lg">

                </div>
                
                <div class="col-md-3 col-sm-6">

                    <h4>Artikel Terbaru</h4>

                    <div class="blog-entries">
					<?php
											
											$j=0;
													foreach($data_artikel as $data){
											?>
                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always">
                                <a href="<?php echo base_url()?>detail_artikel?id=<?php echo $data->id_artikel; ?>">
                                    <img class="img-responsive" src="<?php base_url()?>uploads/<?php echo $data->foto?>" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always">
                                <h5><a href="<?php echo base_url()?>detail_artikel?id=<?php echo $data->id_artikel; ?>"><?php echo $data->judul?></a></h5>
                            </div>
                        </div>
							<?php }?>
                        

                     
                    </div>

                    <hr class="hidden-md hidden-lg">

                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">

                    <h4>Contact</h4>

                    <p><strong>BNN RI</strong>
                        <br>Jl. MT. Haryono No. 11
Cawang, Jakarta Timur
                        
                    </p>

                    <a href="<?php base_url()?>contact" class="btn btn-small btn-template-main">Go to contact page</a>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->



                
            </div>
            <!-- /.container -->
        </footer>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->

        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left">&copy; 2016. Badan Narkotika Nasional</p>
                </div>
            </div>
        </div>
        <!-- /#copyright -->

        <!-- *** COPYRIGHT END *** -->



    </div>
   
