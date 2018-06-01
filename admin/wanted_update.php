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
					<a href="#">Police</a>
				</li>
				<li class="active">Edit Police Info</li>
			</ul><!-- /.breadcrumb -->

		</div>
		
		<!-- Full Width Column -->
    <div class="content-wrapper content-box">
        <div class="container">

            <section class="content-header">
			<div class="page-header">
							
                <h1>
                    Edit Wanted Information
                </h1>
			</div>
            </section>
            <!-- Main content -->
            <section class="content">

            <div class="box box-default">

                <div class="box1 col-md-5 col-md-offset-3" style="text-align:center;">
					
					<span  style="font-size:20px;font-weight:bold;">Wanted Information</span>
                    <div class="box-body"  style="text-align:left;">
					<?php 
					  $ids=$_GET['id'];
					  $result=$bd->query("select * from  w_record where id=$ids");
					  while($rs=$result->fetch_array()){
                   ?>
                        <form name="frm" action="" method="post" enctype="multipart/form-data">
							
							<div class="form-group has-feedback">
								<input type="text" class="form-control" placeholder="Name" name="name" value="<?=$rs['name']?>">
								<span class="glyphicon glyphicon-user form-control-feedback"></span>
							</div>

							<div class="form-group has-feedback">
								<input textarea type="text" name="text" class="form-control" placeholder="Text" value="<?=$rs['text']?>">
								<span class="glyphicon glyphicon-pencil form-control-feedback"></span>
							</div>

							<div class="form-group">
								<label for="exampleInputFile">Choose File</label>
								<input type="file" id="photo" name="photo" value="<?=$rs['photo']?>" required>
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
					<?php 
					  }
					 ?>
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

 if(isset($_POST['submit'])){

	$name = $_POST['name'];
	$text = $_POST['text'];
	$photo   = $_FILES['photo']['name'];
	
	$query="update w_record set name='$name', text='$text', image='$photo' where id=$ids";
	
	//print_r($query);
	
	$rs=$bd->query($query);
	
	
	 if(isset($_FILES['photo'])){
		$file_name=$_FILES['photo']['name'];
		$file_temp=$_FILES['photo']['tmp_name'];
  
		$file_path="../images/";
		move_uploaded_file($file_temp,$file_path.$file_name);
	 
 }
	
	       if($bd->affected_rows>0){
				echo"<script> location.href='wanted_view.php?';</script>";
				exit;
			}
}

?>

<?php
require_once('footer.php');
?>	