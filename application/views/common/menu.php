   <?php echo $this->session->flashdata('login');?>
 <header>

            <!-- *** TOP ***
_________________________________________________________ -->
            <div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 contact">
                            <p class="hidden-sm hidden-xs">Kontak Tel/Fax : (021) - 80871566 / 80871567 Atau info@bnn.go.id.</p>
                            <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </p>
                        </div>
                        <div class="col-xs-7">
                            <div class="social">
                                <a href="https://www.facebook.com/humas.bnn/" target="_blank" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="https://plus.google.com/collection/g8kM" target="_blank" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="https://twitter.com/infobnn?lang=en" target="_blank" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                
                            </div>
							<?php if(!isset($this->session->userdata['admin'])){ ?>
							<div class="login">
                                <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Sign in</span></a>
                               
                            </div>
							<?php }
							else{
								?>
							<div class="login">
                                <a href="<?php base_url()?>logout" ><i class="glyphicon glyphicon-log-out"></i> <span class="hidden-xs text-uppercase">Logout</span></a>
                               
                            </div>	
								
							<?php }?>

                        </div>
                    </div>
                </div>
            </div>

            <!-- *** TOP END *** -->

            <!-- *** NAVBAR ***
    _________________________________________________________ -->

            <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

                <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                    <div class="container">
                        <div class="navbar-header">

                            <a class="navbar-brand home" href="<?php base_url()?>home">
                                <img src="<?php base_url()?>assets/img/bnn.png" alt="BNN" width="65%" >
                          
                            </a>
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>
                        <!--/.navbar-header -->

                        <div class="navbar-collapse collapse" id="navigation">

                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown <?php $link=uri_string(); if($link =="home"){ echo "active";} ?>">
                                    <a href="<?php base_url()?>home" class="dropdown-toggle" >Home </a>
                                   
                                </li>
								 <li class="dropdown <?php $link=uri_string(); if($link =="artikel"){ echo "active";} ?>" >
                                    <a href="<?php base_url()?>artikel" class="dropdown-toggle" >Artikel</a>
                                   
                                </li>
                                <li class="dropdown use-yamm yamm-fw <?php $link=uri_string(); if($link =="narkoba" || $link =="efek"){ echo "active";} ?>">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Narkoba<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li >
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img src="<?php base_url()?>assets/img/narkoba.png" class="img-responsive hidden-xs" alt="">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Narkoba</h5>
                                                        <ul>
                                                            <li><a href="<?php base_url()?>narkoba">Data Narkoba</a>
                                                            </li>
                                                            <li><a href="<?php base_url()?>efek">Efek Narkoba</a>
                                                            </li>
															<li><a href="<?php base_url()?>cetak_semua_narkoba">Cetak Semua Narkoba</a>
                                                            </li>
															<li><a href="<?php base_url()?>cetak_semua_narkoba2">Cetak Semua Narkoba Tipe 2</a>
                                                            </li>
                                                           
                                                        </ul>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
								<?php if(isset($this->session->userdata['admin'])){ ?>
                                <li class="dropdown use-yamm yamm-fw <?php $link=uri_string(); if($link =="data_artikel" || $link =="tambah_artikel"||$link =="data_narkoba"||$link =="tambah_narkoba"||$link =="tambah_golongan"||$link =="tambah_efek"||$link =="tambah_jenis"||$link =="tambah_admin"){ echo "active";} ?>">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Data <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img src="<?php base_url()?>assets/img/bnn3.png" class="img-responsive hidden-xs" alt="">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Artikel</h5>
                                                        <ul>
                                                            <li><a href="<?php base_url()?>data_artikel">Data Artikel</a>
                                                            </li>
                                                            <li><a href="<?php base_url()?>tambah_artikel">Tambah Artikel</a>
                                                            </li>
                                                           
                                                        </ul>
														<h5>Narkoba</h5>
                                                        <ul>
                                                            <li><a href="<?php base_url()?>data_narkoba">Data Narkoba</a>
                                                            </li>
                                                            <li><a href="<?php base_url()?>tambah_narkoba">Tambah Narkoba</a>
                                                            </li>
                                                           
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Setting</h5>
                                                        <ul>
                                                          
															 <li><a href="<?php base_url()?>tambah_golongan">Golongan Narkoba</a>
                                                            </li>
                                                             <li><a href="<?php base_url()?>tambah_efek">Efek Narkoba</a>
                                                            </li>
                                                            
                                                         
															 <li><a href="<?php base_url()?>tambah_jenis">Jenis Narkoba</a>
                                                            </li>
                                                           
                                                        </ul>
                                                        <h5>Admin</h5>
                                                        <ul>
                                                            <li><a href="<?php base_url()?>tambah_admin">Data Admin</a>
                                                            </li>
															
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
								<?php }?>
                                <!-- ========== FULL WIDTH MEGAMENU ================== -->
                                <!-- ========== FULL WIDTH MEGAMENU END ================== -->

                                <li class="dropdown <?php $link=uri_string(); if($link =="contact"){ echo "active";} ?>" >
                                    <a href="<?php base_url()?>contact" >Kontak</a>
                                    
                                </li>
								
								
                            </ul>

                        </div>
                        <!--/.nav-collapse -->



                        <div class="collapse clearfix" id="search">

                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">

                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>

                </span>
                                </div>
                            </form>

                        </div>
                        <!--/.nav-collapse -->

                    </div>


                </div>
                <!-- /#navbar -->

            </div>

            <!-- *** NAVBAR END *** -->

        </header>
		<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">login</h4>
                    </div>
                    <div class="modal-body">
                      <?php
							echo form_open('Redirect_controller/proses_login');    
						?>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_modal" placeholder="username" name="username" >
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_modal" placeholder="password" name="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                       <?php
								echo form_close();
							?>



                    </div>
                </div>
            </div>
        </div>