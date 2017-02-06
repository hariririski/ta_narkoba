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

      <?php echo $this->load->view('common/head', '', TRUE);?>

</head>

<body>


    <div id="all">
 <?php echo $this->load->view('common/menu', '', TRUE);?>


        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Kontak</h1>
                    </div>

                </div>
            </div>
        </div>

        <div id="content">
            <div class="container" id="contact">

                <section>

                    <div class="row">
                        <div class="col-md-12">
                            <section>
                                <div class="heading">
                                    <h2>Kontak Kami</h2>
                                </div>

                                <p class="lead">Badan Narkotika Nasional (disingkat BNN) adalah sebuah Lembaga Pemerintah Non Kementerian (LPNK) Indonesia yang mempunyai tugas melaksanakan tugas pemerintahan di bidang pencegahan, pemberantasan penyalahgunaan dan peredaran gelap psikotropika, prekursor, dan bahan adiktif lainnya kecuali bahan adiktif untuk tembakau dan alkohol.</p>
                                <p>Untuk Mengahubungi Kami pada Hari dan Jam Kerja, Senin - Jum'at, 08.00-17.00</p>
                            </section>
                        </div>
                    </div>

                </section>

                <section>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <h3>Address</h3>
                                <p>Jl. MT. Haryono No. 11
Cawang, Jakarta Timur
                                </p>
                            </div>
                            <!-- /.box-simple -->
                        </div>


                        <div class="col-md-4">

                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <h3>Call center</h3>
                                <p class="text-muted">Berikut No Telepon Yang Dapat Dihubungi</p>
                                <p><strong>Tel/Fax : (021) - 80871566 / 80871567</strong>
                                </p>
                            </div>
                            <!-- /.box-simple -->

                        </div>

                        <div class="col-md-4">

                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <h3>Email</h3>
                                <p class="text-muted">Jika Ada Pertanyaan Bisa Mengirim Ke Email Berikut</p>
                                <ul class="list-style-none">
                                    <li><strong><a href="mailto:">info@bnn.go.id</a></strong>
                                    </li>

                                </ul>
                            </div>
                            <!-- /.box-simple -->
                        </div>
                    </div>

                </section>


            </div>
            <!-- /#contact.container -->
        </div>
        <!-- /#content -->



        <!-- *** GET IT ***
_________________________________________________________ -->

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



    <!-- gmaps -->

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

    <script src="<?php base_url()?>assets/js/gmaps.js"></script>
    <script src="<?php base_url()?>assets/js/gmaps.init.js"></script>

    <!-- gmaps end -->





</body>

</html>
