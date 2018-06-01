<?php
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
					<a href="#">Criminal</a>
				</li>
				<li class="active">Add New Criminal</li>
			</ul><!-- /.breadcrumb -->

		</div>
		
		<!-- Full Width Column -->
    <div class="content-wrapper content-box">
        <div class="container">

            <section class="content-header">
			<div class="page-header">
							
                <h1>
                   Create Criminal<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									 Fill up the form to create a criminal
								</small>
                </h1>
			</div>
            </section>
            <!-- Main content -->
            <section class="content">

            <div class="box box-default">

                <div class="box1 col-md-5 col-md-offset-3" style="text-align:center;">
					
					<span  style="font-size:20px;font-weight:bold;">Add Criminal</span>
                    <div class="box-body"  style="text-align:left;">
					
					

        <form name="reg"   action="criminal_rcord_exe.php"  method="post" enctype="multipart/form-data">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Criminal Name" name="c_name" required >
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Crime Type" name="c_type" required>
                <span class="glyphicon glyphicon-list form-control-feedback"></span>
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
                <input type="text" class="form-control" placeholder="Age" name="Age" required>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Crime Equipment" name="c_equipment" required>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Target of Crime" name="c_target" required>
                <span class="glyphicon glyphicon-screenshot form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Area of Crime" name="c_area">
                <span class="glyphicon glyphicon-map form-control-feedback"></span>
            </div>

            <div class="form-group">
                <label for="exampleInputFile">Choose File</label>
                <input type="file" id="picture" name="picture" required>
            </div>

            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Wanted Status" name="wanted" required>
                <span class="glyphicon glyphicon form-control-feedback"></span>
            </div>


            <div class="row">
                <!-- /.col -->
                <div class="col-xs-6">
                    <button name="submit" type="submit" value="submit" id="submit" class="btn btn-primary btn-block btn-flat">Add Criminal</button>
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
            var a=document.forms["reg"]["fname"].value;
            var b=document.forms["reg"]["lname"].value;
            var c=document.forms["reg"]["gender"].value;
            var d=document.forms["reg"]["address"].value;
            var e=document.forms["reg"]["contact"].value;
            var f=document.forms["reg"]["nid"].value;
            var g=document.forms["reg"]["pstation"].value;
            var h=document.forms["reg"]["ranking"].value;
            var i=document.forms["reg"]["username"].value;
            var j=document.forms["reg"]["password"].value;
            if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f=="") && (g==null || g=="") && (h==null || h=="") && (i==null || i=="") && (j==null || j=="")  )
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
                alert("Address must be filled out");
                return false;
            }
            if (e==null || e=="")
            {
                alert("Contact must be filled out");
                return false;
            }
            if (f==null || f=="")
            {
                alert("nid must be filled out");
                return false;
            }
            if (g==null || g=="")
            {
                alert("pstation must be filled out");
                return false;
            }
            if (h==null || h=="")
            {
                alert("ranking must be filled out");
                return false;
            }
            if (i==null || i=="")
            {
                alert("username must be filled out");
                return false;
            }
            if (j==null || j=="")
            {
                alert("password must be filled out");
                return false;
            }
        }
    </script>
<?php
require_once('footer.php');
?>	
