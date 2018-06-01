<?php
include "../db/connection.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>
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
    <!-- iCheck -->
    <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <script type="text/javascript">
        function validateForm()
        {
            var a=document.forms["reg"]["fname"].value;
            var b=document.forms["reg"]["lname"].value;
            var c=document.forms["reg"]["gender"].value;
            var d=document.forms["reg"]["address"].value;
            var e=document.forms["reg"]["email"].value;
            var f=document.forms["reg"]["contact"].value;
            var g=document.forms["reg"]["nid"].value;
            var h=document.forms["reg"]["username"].value;
            var i=document.forms["reg"]["password"].value;
            if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f=="") && (g==null || g=="") && (h==null || h=="") && (i==null || i=="")  )
            {
                alert("All Field must be filled out");
                return false;
            }
            if (a==null || a=="")
            {
                alert("First name must be filled out");
                return false;
            }
            if (b==null || b=="")
            {
                alert("Last name must be filled out");
                return false;
            }
            if (c==null || c=="")
            {
                alert("Gender name must be filled out");
                return false;
            }
            if (d==null || d=="")
            {
                alert("address must be filled out");
                return false;
            }
            if (e==null || e=="")
            {
                alert("valid email must be filled out");
                return false;
            }
            if (f==null || f=="")
            {
                alert("contact must be filled out");
                return false;
            }
            if (g==null || g=="")
            {
                alert("nid must be filled out");
                return false;
            }
            if (h==null || h=="")
            {
                alert("username must be filled out");
                return false;
            }
            if (i==null || i=="")
            {
                alert("password must be filled out");
                return false;
            }
        }
    </script>
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="../index.php"><b>User Registration</a>
    </div>
    <!-- /.login-logo -->
    <div class="register-box-body">

        <?php
        // $remarks=$_GET['remarks'];
        if (!isset($_GET['remarks'])) {
            echo '<p class="login-box-msg">', 'Fill up the form to register user', '</p>';
        }
        if (isset($_GET['remarks']) && $_GET['remarks'] == 'success') {
            echo '<p class="login-box-msg text-success">', 'User registered Successfully', '</p>';
        }
        ?>

        <form name="reg" action="../db/code_exec.php" onsubmit="return validateForm()" method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="First Name" name="fname">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Last Name" name="lname">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>

            <div class="form-group">
                <label>Gender:</label>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="gender" id="gender" value="male" checked>
                        Male
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="gender" id="gender" value="female">
                        Female
                    </label>
                </div>
            </div>

            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Address" name="address">
                <span class="glyphicon glyphicon-home form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email" name="email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Contact Number" name="contact">
                <span class="glyphicon glyphicon-phone form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="NID Card Number" name="nid">
                <span class="glyphicon glyphicon-list-alt form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Username" name="username">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <div class="row">
                <!-- /.col -->
                <div class="col-xs-6">
                    <button name="submit" type="submit" value="submit" id="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </div>
                <!-- /.col -->

                <div class="col-xs-4">
                    <a href="../user/uhome.php">
                        <button class="btn btn-primary btn-block btn-flat">
                            Home
                        </button>
                    </a>
                </div>
            </div>

    </div>
    </form>

</div>
<!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
</body>
</html>
