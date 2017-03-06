<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sundae - West Java Culture</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lily+Script+One" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/superfish.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flexslider.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.2.0/css/mdb.min.css"> -->
    <!-- Modernizr JS -->
    <script src="<?php echo base_url(); ?>/assets/js/modernizr-2.6.2.min.js"></script>

    <script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
$('#myInput').focus()
})
    </script>

    <!-- Modal -->

<!-- /.Live preview-->
    <div id="fh5co-header">
        <header id="fh5co-header-section">
            <div class="container">
                <div class="nav-header">
                    <!-- START #fh5co-menu-wrap -->
                    <nav id="fh5co-menu-wrap" role="navigation">
                        <ul class="sf-menu" id="fh5co-primary-menu">
                            <li>
                                <a class="navbar-brand melayang" href="#"><img src="<?php echo base_url(); ?>/assets/images/fixfixfixfix.png"></a>
                            </li>
                            <li>
                                <h1 class="melayangtext">Sundae</h1>
                            </li>
                            <li class="">
                                <a class="" href="<?php echo base_url();?>">Beranda</a>
                            </li>
                            <li><a href="<?php echo base_url()?>welcome/sejarah">Sejarah</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kebudayaan</a>
                                <ul class="dropdown-menu sf-menu">
                                    <li><a href="<?php echo base_url('kebudayaan/kesenian');?>">Kesenian</a></li>
                                    <li><a href="<?php echo base_url('kebudayaan/kuliner');?>">Kuliner</a></li>
                                    <li><a href="<?php echo base_url('kebudayaan/musik');?>">Musik</a></li>
                                    <li><a href="<?php echo base_url('kebudayaan/tarian');?>">Tarian</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url('welcome/berita');?>">Berita</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
    </div>


</head>

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">
            <!-- end:fh5co-header -->
            <?php echo $contents;?>
</body>
<footer>
    <div id="footer">
        <div class="col-md-6 col-md-offset-3 text-center">
            <p><i>&quot;Nu ngarana hirup mah loba cobaan. Mun loba saweran eta ngarana dangdutan.&quot;</i></p>
        </div>
        <div class="row copy-right">
            <div class="col-md-6 col-md-offset-3 text-center">
                <p><span class="team">Team :</span>
                    <br>Back-end - Aditya Dharma, Front-end - Wirya Ramadhan &amp; Database Schema - Harles Bayu.
                    <br>All Rights Reserved.
                    <br>Made with <i class="icon-heart3"></i> by Student of Gunadarma University.
                </p>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- END page -->
</div>
<!-- END wrapper -->
<!-- jQuery -->
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="<?php echo base_url(); ?>/assets/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="<?php echo base_url(); ?>/assets/js/jquery.waypoints.min.js"></script>
<!-- Superfish -->
<script src="<?php echo base_url(); ?>/assets/js/hoverIntent.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/superfish.js"></script>
<!-- Flexslider -->
<script src="<?php echo base_url(); ?>/assets/js/jquery.flexslider-min.js"></script>
<!-- Main JS (Do not remove) -->
<script src="<?php echo base_url(); ?>/assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.2.0/js/mdb.min.js"></script>
<script type="text/javascript">

    var url = window.location;
    // Will only work if string in href matches with location
    $('ul.sf-menu a[href="'+ url +'"]').parent().addClass('active');

    // Will also work for relative and absolute hrefs
    $('ul.sf-menu a').filter(function() {
        return this.href == url;
    }).parent().addClass('active');
    </script>
</body>

</html>
