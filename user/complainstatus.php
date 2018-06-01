<?php
require_once('../db/connection.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Complain Status</title>
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
                        <li><a href="uhome.php">Home</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">File Complain<span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="cform.php">Crime File Complain</a></li>
                            </ul>
                        </li>

                        <li><a href="../user/complainstatus.php">Complain Status</a></li>

                        <li><a href="../db/logout.php">Logout</a></li>

                    </ul>
                </div>

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
                <form method="post" action="psearch.php" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search Police Station...">
                        <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                    </div>
                </form>
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    <!-- Full Width Column -->
    <div class="content-wrapper">
        <div class="container">

            <section class="content-header">
                <h1>
                    Complain Status
                </h1>
            </section>

            <!-- Main content -->
            <section class="content"

            <div class="box box-default">

                <div class="box box-primary">
                    <?php
                    session_start();
                    if(isset($_SESSION['SESS_FIRST_NAME'])){

                        $res=mysqli_query($bd,"SELECT * from complain WHERE name like '%".$_SESSION['SESS_FIRST_NAME']."%'");
                        echo "<div class='search'>";
                        if ($res) {
                            $rowCount=mysqli_num_rows($res);
                            //echo $rowCount;
                            if($rowCount>0){
                                //var_dump($row);

                                echo "<div class=\"box-body table-responsive no-padding\">";
                                echo "<table class=\"table table-hover\">";
                                echo "<tr>";

                                echo "<th>"; echo "Complain"; echo "</th>";
                                echo "<th>"; echo "Location"; echo "</th>";
                                echo "<th>"; echo "Police Station"; echo "</th>";
                                echo "<th>"; echo "Inspector"; echo "</th>";
                                echo "<th>"; echo "Ranking"; echo "</th>";
                                echo "<th>"; echo "Police contact no."; echo "</th>";
                                echo "<th>"; echo "Time and "; echo "Date"; echo "</th>";
                                echo "<th>"; echo "Status"; echo "</th>";
                                echo "<th>"; echo "Feedback"; echo "</th>";

                                echo "</tr>";

                                while($row=mysqli_fetch_array($res))
                                {
                                    echo "<tr>";
                                    echo "<td>"; echo $row["c_discription"]; echo "</td>";
                                    echo "<td>"; echo $row["c_location"]; echo "</td>";
                                    echo "<td>"; echo $row["p_station"]; echo "</td>";

                                    $name_part=explode(" ",$row["p_name"]);

                                    $p_infos=mysqli_query($bd,"SELECT * from policeinfo WHERE username like '%".$name_part[0]."%'");

                                    $p_info = mysqli_fetch_array($p_infos);

                                    echo "<td>"; echo $row["p_name"]; echo "</td>";
                                    echo "<td>"; echo $p_info["ranking"]; echo "</td>";
                                    echo "<td>"; echo $p_info["contact"];  echo "</td>";
                                    echo "<td>"; echo $row["c_timing"]; echo "<br>".$row["date_of_incident"]; echo "</td>";

                                    if (is_null($row['status_id'])) {
                                        echo "<td>"; echo "Not reviewed yet"; echo "</td>";
                                        ?>
                                        <td>
                                            <form action="<?php echo $base;?>/../user/addFeedback_copy.php" method="POST">
                                                <input type="hidden" name="complain" value="<?php echo $row['c_id']; ?>">
                                                <input type="submit" name="save" value="add">
                                            </form>
                                        </td>
                                        <?php
                                    }else {
                                        $result = mysqli_query($bd,"SELECT description,victim_feedback from status WHERE complain_id ='".$row["c_id"]."' and id='".$row["status_id"]."'");
                                        if($result){
                                            $status_details = mysqli_fetch_array($result);

                                            $status_detail = $status_details['description'];
                                            if(is_null($status_detail)){
                                                echo "<td>"; echo "Not reviewed yet"; echo "</td>";
                                            }
                                            else{
                                                echo "<td>"; echo $status_detail; echo "</td>";
                                            }

                                            ?>
                                            <td>
                                                <form action="<?php echo $base;?>/user/updateFeedback.php" method="POST">
                                                    <input type="hidden" name="complain" value="<?php echo $row['c_id']; ?>">
                                                    <input type="hidden" name="status" value="<?php echo $row['status_id']; ?>">
                                                    <input type="submit" name="edit" value="update">
                                                </form>
                                            </td>
                                            <?php

                                        }else{
                                            echo "<td>"; echo "query failed!!"; echo "</td>";
                                        }
                                    }

                                    echo "</tr>";

                                }
                                echo "</table>";
                                echo "</div>";
                            }else {
                                echo '<div style="color:red;"> you have no Complain!!</div>';
                            }
                        }else {
                            echo '<div style="color:red;"> you have no Complain!!</div>';
                        }
                        echo "</div>";
                    }
                    else
                    {
                        $_SESSION['ERRMSG_ARR'] = array("Please Login first!!");
                        session_write_close();
                        header("location: ".$base."/uhome.php");
                        exit();
                    }
                    include "footer.php";
                    ?>

                </div>

            </div>


            </section>
            <!-- /.content -->

        </div>
        <!-- /.container -->
    </div>
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