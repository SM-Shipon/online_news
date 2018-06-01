<?php
require_once('header.php');
?>
<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="#">Home</a>
				</li>
				<li>
					<a href="#">Wanted</a>
				</li>
				<li class="active">Add Wanted</li>
			</ul><!-- /.breadcrumb -->

		</div>
		
		<!-- Full Width Column -->
    <div class="content-wrapper content-box">
        <div class="container">

            <section class="content-header">
			<div class="page-header">
							
                <h1>
                    Add Wanted Information <small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									 Fill up the form to add most wanted
								</small>
                </h1>
			</div>
            </section>
            <!-- Main content -->
            <section class="content">

            <div class="box box-default">

                <div class="box1 col-md-5 col-md-offset-3" style="text-align:center;">
					
				  <span  style="font-size:20px;font-weight:bold;">Wanted Record Form</span>
                    <div class="box-body"  style="text-align:left;">
                        
						<form name="wanted" action="wanted_create_exe.php" method="post" enctype="multipart/form-data">
							
							<div class="form-group has-feedback">
								<input type="text" class="form-control" placeholder="Name" name="name">
								<span class="glyphicon glyphicon-user form-control-feedback"></span>
							</div>

							<div class="form-group has-feedback">
								<input textarea type="text" name="text" class="form-control" placeholder="Text">
								<span class="glyphicon glyphicon-pencil form-control-feedback"></span>
							</div>

							<div class="form-group">
								<label for="exampleInputFile">Choose File</label>
								<input type="file" id="photo" name="photo">
							</div>


							<div class="row">
								<!-- /.col -->
								<div class="col-xs-6">
									<button name="submit" type="submit" value="submit" id="submit"
											class="btn btn-primary btn-block btn-flat">
										Add to List
									</button>
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
        function validateForm() {
            var a = document.forms["image"]["name"].value;
            var b = document.forms["image"]["text"].value;
            var c = document.forms["image"]["image"].value;

            if ((a == null || a == "") && (b == null || b == "") && (c == null || c == "")) {
                alert("All Field must be filled out");
                return false;
            }
            if (a == null || a == "") {
                alert(" name must be filled out");
                return false;
            }
            if (b == null || b == "") {
                alert("text must be filled out");
                return false;
            }
            if (c == null || c == "") {
                alert("image must be filled out");
                return false;
            }
        }
    </script>
<?php
require_once('footer.php');
?>	