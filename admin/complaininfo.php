<?php
include('../db/connection.php');

$sql = "SELECT * FROM complain";

$records = mysqli_query($bd, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Complain Information</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="../test-home/index.php" class="navbar-brand"><b>Crime</b>Report</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="adminhome.php">Home</a></li>

                        <li><a href="../police/p_reg.php">Add New Police</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Add Details<span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="missing_person.php">Add Missing</a></li>
                                <li class="divider"></li>
                                <li><a href="recordform.php">Add Criminal</a></li>
                                <li class="divider"></li>
                                <li><a href="wanted.php">Add Most Wanted</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">View Details<span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="../user/userinfo.php">User Info</a></li>

                                <li class="divider"></li>
                                <li><a href="../police/policeinfo.php">Police Info</a></li>

                                <li class="divider"></li>
                                <li><a href="complaininfo.php">Complain Info</a></li>

                                <li class="divider"></li>
                                <li><a href="upmissinginfo.php">Missing Info</a></li>

                                <li class="divider"></li>
                                <li><a href="#">Criminal Info</a></li>

                                <li class="divider"></li>
                                <li><a href="#">Wanted Info</a></li>
                            </ul>
                        </li>

                        <li><a href="news.php">Post News</a></li>

                        <li><a href="../db/logout.php">Logout</a></li>

                    </ul>
                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    <!-- Full Width Column -->
    <div class="content-wrapper">
        <div class="container">

            <section class="content-header">
                <h1>
                    View Complain Information
                </h1>
            </section>

            <?php
            session_start();
            if (isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) > 0) {
                echo '<div class="search" style="padding:5px;color:red;">';
                echo '<ul class="err">';
                foreach ($_SESSION['ERRMSG_ARR'] as $msg) {
                    echo '<li>', $msg, '</li>';
                }
                echo '</ul>';
                echo '</div>';
                unset($_SESSION['ERRMSG_ARR']);
            }
            ?>

            <!-- Main content -->
            <section class="content"

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                                    <tr>

                                        <th>Complain_ID</th>
                                        <th>Complainer's Name</th>
                                        <th>Gender</th>
                                        <th>Police Station</th>
                                        <th>Police Name</th>
                                        <th>Next Reported Police</th>
                                        <th>Crime Type</th>
                                        <th>Crime Discription</th>
                                        <th>Crime Location</th>
                                        <th>Crime Timing</th>
                                        <th>Date_of_Incident</th>
                                        <th>Crime Support</th>
                                        <th>Evidence</th>
                                        <th>Witness</th>

                                    <tr>
                                        <?php

                                        while ($user = mysqli_fetch_assoc($records)) {

                                            echo "<tr>";

                                            echo "<td>" . $user['c_id'] . "</td>";

                                            echo "<td>" . $user['name'] . "</td>";

                                            echo "<td>" . $user['gender'] . "</td>";

                                            echo "<td>" . $user['p_station'] . "</td>";

                                            echo "<td>" . $user['p_name'] . "</td>";

                                            echo "<td>" . $user['next_p_name'] . "</td>";

                                            echo "<td>" . $user['c_type'] . "</td>";

                                            echo "<td>" . $user['c_discription'] . "</td>";

                                            echo "<td>" . $user['c_location'] . "</td>";

                                            echo "<td>" . $user['c_timing'] . "</td>";

                                            echo "<td>" . $user['date_of_incident'] . "</td>";

                                            echo "<td>" . $user['c_support'] . "</td>";

                                            echo "<td>" . $user['evidence'] . "</td>";

                                            echo "<td>" . $user['witness'] . "</td>";

                                            echo "<td><a href=deletecomplain.php?id=" . $user['c_id'] . ">Delete</a></td>";


                                            echo "</tr>";

                                        }
                                        ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->

<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="container">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2018-2019 <a href="https://adminlte.io">Crime report</a>.</strong> All rights
        reserved.
    </div>
    <!-- /.container -->
</footer>
</div>
<!-- ./wrapper -->

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
</body>
<style>
    #want {
        height: 400px;
    }

    .logo {
        background-image: url('../image/img1.jpg');
        width: 1000px;
        height: 280px;
        background-size: cover;
        margin-top: 100px;
        margin-left: 50px;
        border: 5px solid #ffffff;
    }
</style>
</html>