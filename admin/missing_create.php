<?php
include "../db/connection.php";

require_once('header.php');
?>

<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="adminhome.php">Home</a>
				</li>
				<li>
					<a href="#">Missing</a>
				</li>
				<li class="active">Add New Missing</li>
			</ul><!-- /.breadcrumb -->

		</div>
		
		<!-- Full Width Column -->
    <div class="content-wrapper content-box">
        <div class="container">

            <section class="content-header">
			<div class="page-header">
							
                <h1>
                   Create Missing<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									 Fill up the form to create a Missing
								</small>
                </h1>
			</div>
            </section>
            <!-- Main content -->
      <section class="content">

            <div class="box box-default">

                <div class="box1 col-md-5 col-md-offset-3" style="text-align:center;">
					
					<span  style="font-size:20px;font-weight:bold;">Add Missing</span>
                    <div class="box-body"  style="text-align:left;">
					

					<form name="missing"  action="missing_record_exe.php"  method="post" enctype="multipart/form-data" >
						<div class="form-group has-feedback">
							<input type="text" class="form-control" placeholder="Name" name="name" required>
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
							<input type="text" class="form-control" placeholder="Age" name="age" required >
							<span class="glyphicon glyphicon-user form-control-feedback"></span>
						</div>

						<div class="form-group has-feedback">
							<input type="text" class="form-control" placeholder="Height" name="height" required >
							<span class="glyphicon glyphicon-user form-control-feedback"></span>
						</div>

						<div class="form-group has-feedback">
							<input type="text" class="form-control" placeholder="Address" name="address" required>
							<span class="glyphicon glyphicon-home form-control-feedback"></span>
						</div>

						<div class="form-group">
							<label for="exampleInputFile">Choose File</label>
							<input type="file" id="photo" name="photo" required>
						</div>

						<div class="form-group has-feedback">
							<input type="text" class="form-control" placeholder="Contact Number" name="contact" required>
							<span class="glyphicon glyphicon-home form-control-feedback"></span>
						</div>


						<div class="row">
							<!-- /.col -->
							<div class="col-xs-8">
								<button name="submit" type="submit" value="submit" id="submit" class="btn btn-primary btn-block btn-flat">Add Missiong Person</button>
							</div>
						</div>

				   </div>
				</form>
							

             </div>
          </div>
       </section>
            <!-- /.content -->

      </div>
        <!-- /.container -->
     </div>
   </div>
</div>


    <script type="text/javascript">
        function validateForm()
        {
            var a=document.forms["missing"]["name"].value;
            var b=document.forms["missing"]["gender"].value;
            var c=document.forms["missing"]["age"].value;
            var d=document.forms["missing"]["height"].value;
            var e=document.forms["missing"]["address"].value;
            var f=document.forms["missing"]["photo"].value;
            var g=document.forms["missing"]["contact"].value;
            if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f=="") && (g==null || g=="") )
            {
                alert("All Field must be filled out");
                return false;
            }
            if (a==null || a=="")
            {
                alert(" name must be filled out");
                return false;
            }
            if (b==null || b=="")
            {
                alert("gender must be filled out");
                return false;
            }
            if (c==null || c=="")
            {
                alert("age name must be filled out");
                return false;
            }
            if (d==null || d=="")
            {
                alert("height must be filled out");
                return false;
            }
            if (e==null || e=="")
            {
                alert("address must be filled out");
                return false;
            }
            if (f==null || f=="")
            {
                alert("photo must be filled out");
                return false;
            }
            if (g==null || g=="")
            {
                alert("contact must be filled out");
                return false;
            }

        }
    </script>


<?php
require_once('footer.php');
?>	


