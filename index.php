<?php
include("db/connection.php");
	//Start session
	session_start();
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Crime Report</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">


    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
          type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- from Admin LTE -->
    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Crime Report</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button"
                data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">Home</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="newsdisplay.php">News</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="safety.php">Safety Tips</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="map.html">Help</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Mission</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Criminals</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <div class="dropdown">
                        <button class="dropbtn">Login</button>
                        <div class="dropdown-content">
                            <a href="login/adminlogin.php">Admin</a>
                            <a href="login/plogin.php">Policeman</a>
                            <a href="login/login.php">User</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="masthead bg-primary text-white text-center">
    <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/police.png" alt="">
        <h1 class="text-uppercase mb-0">Start Crime Reporting</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Report Crimes - End Violence - Safeguard Society</h2>
    </div>
</header>

<!-- Portfolio Grid Section -->
<section class="portfolio" id="portfolio">
    <div class="container">
        <h2 class="text-uppercase text-center text-secondary mb-0">Our Mission</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            <div class="col-md-5" style="margin:0 auto;">
                <!-- Widget: user widget style 1 -->
                <div class="box box-widget widget-user-2">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <h3 class="widget-user-desc text-center">Fighting Against Crime</h3>
                    <div class="box-footer padding">
                        <marquee id="p" behavior="scroll" direction="down" scrollamount="6">
                            <ul class="nav nav-stacked">
                                <li class="box-header with-border bg-gray">Protect your family, your community and the
                                    Nation
                                </li>
                                <li class="box-header with-border bg-gray">Terminate Jongi and terrorism activity</li>
                                <li class="box-header with-border bg-gray">Isolate the narcotic procession</li>
                                <li class="box-header with-border bg-gray">Find the identity of wanted fugitives and
                                    missing persons
                                </li>
                                <li class="box-header with-border bg-gray">Top most wanted Criminal</li>
                                <li class="box-header with-border bg-gray">Kidnapping & Missing Person</li>
                                <li class="box-header with-border bg-gray">Bank Robbers</li>
                            </ul>
                        </marquee>
                    </div>
                </div>
                <!-- /.widget-user -->
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="bg-primary text-white mb-0" id="about">
    <div class="container">
        <h2 class="text-center text-uppercase text-white">Most Wanted Criminals</h2>
        <hr class="star-light mb-5">
        <div class="row">
            <div class="col-md-5" style="margin:0 auto;">

                <div class="box-footer padding">
                    <marquee id="want" behavior="scroll" direction="down" scrollamount="15" onmouseover="this.stop()"
                             onmouseout="this.start()">
                        <ul style="list-style-type: none; text-align: center;">
                            <li class="box-header with-border bg-gray">
                                <img class="bg-white" src="../image/FreedomSohel.gif" width="180px" height="200px" <br>
                                <h5>Sohel Rana Chowdhory</h5>
                            </li>
                            <li class="box-header with-border bg-gray">
                                <img class="bg-white" src="../image/img2.gif" width="180px" height="200px" <br><h5>
                                Liakat Hossen </h5>
                            </li>
                            <li class="box-header with-border bg-gray">
                                <img class="bg-white" src="../image/img1.gif" width="180px" height="200px" <br><h5>Haris
                                Ahmed </h5>
                            </li>
                            <li class="box-header with-border bg-gray">
                                <img class="bg-white" src="../image/img5.gif" width="180px" height="200px" <br><h5>
                                Khandakar Tanveer Islam @ Joy </h5>
                            </li>
                            <li class="box-header with-border bg-gray">
                                <img class="bg-white" src="../image/prakash.gif" width="180px" height="200px" <br><h5>
                                Prokash Kumar Biswas </h5>
                            </li>
                            <li class="box-header with-border bg-gray">
                                <img class="bg-white" src="../image/JaforAhmedManik.gif" width="180px"
                                     height="200px"<br><h5>Jafor Ahmed @ Manik </h5>
                            </li>
                            <li class="box-header with-border bg-gray">
                                <img class="bg-white" src="../image/AgaShamim.gif" width="180px" height="200px" <br><h5>
                                Shamim Ahmed</h5>
                            </li>
                        </ul>
                    </marquee>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4" style="margin: auto;">
                <h4 class="text-uppercase mb-4">About the Developers</h4>
                <p class="lead mb-0">We are the students </p>
            </div>
        </div>
    </div>
</footer>

<div class="copyright py-4 text-center text-white">
    <div class="container">
        <small>Copyright &copy; Final Project </small>
    </div>
</div>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="js/freelancer.min.js"></script>

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

<script src="marquee.js"></script>

<style>
    #want {
        height: 400px;
    }

    /* Dropdown Button */
    .dropbtn {
        background-color: transparent;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #4CAF50
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {
        background-color: #4CAF50;
    }
</style>
</body>

</html>
