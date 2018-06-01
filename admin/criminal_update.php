<?php
require_once('header.php');
?>
<div class="main-content">
	<div class="main-content-inner">
	
	<!-----------Breadcrumbs------>
	
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="adminhome.php">Home</a>
				</li>
				<li>
					<a href="#">Criminal</a>
				</li>
				<li class="active">Edit Criminal Info</li>
			</ul><!-- /.breadcrumb -->

		</div>
		<!-----------End  Breadcrumbs------>
		
		
		<!-- Full Width Column -->
    <div class="content-wrapper content-box">
        <div class="container">

            <section class="content-header">
			<div class="page-header">
							
                <h1>
                    Edit Criminal Information
                </h1>
			</div>
            </section>
            <!-- Main content -->
            <section class="content">

            <div class="box box-default">

                <div class="box1 col-md-5 col-md-offset-3" style="text-align:center;">
					
					<span  style="font-size:20px;font-weight:bold;">Criminal Information</span>
                    <div class="box-body"  style="text-align:left;">
					<?php 
					  $ids=$_GET['id'];
					  $result=$bd->query("select * from  criminals where C_id=$ids");
					  while($rs=$result->fetch_array()){
                   ?>
							 <form name="myForm" action="" method="POST" enctype="multipart/form-data"  >
									
										
										
											
											<div class="modal-body">

											<div class="form-group">
												<label for="first_name">Criminal Name: <span class="req"> * </span></label>
												<input type="text"   name="c_name" placeholder="Crime Type" value="<?=$rs['1']?>" class="form-control">
											
											</div>
											<div class="form-group form-control" >
											
											<label for="last_name">Gender: <span class="req"> * </span></label>
												
											 
											 <div class="radio-inline">
												<label>
													<input type="radio" name="gender" id="gender" value="male"  <?php echo $rs['gender']=='male'?'checked':''?>>
													Male
												</label>
											</div>
											<div class="radio-inline">
												<label>
													<input type="radio" name="gender" id="gender" value="female"  <?php echo $rs['gender']=='female'?'checked':''?>>
													Female
												</label>
											</div>
											
											</div>
											
											<div class="form-group">
												<label for="email">Age: <span class="req"> * </span></label>
												<input type="text" placeholder="Age" name="Age" value="<?=$rs['6']?>" class="form-control">
											
											</div>
											<div class="form-group">
												<label for="last_name">Crime Type: <span class="req"> * </span></label>
												
												<input type="text"  placeholder="Crime Type" name="c_type" value="<?=$rs['2']?>" class="form-control">
											</div>
											<div class="form-group from-control">
												<label for="email">Crime Equipment: <span class="req"> * </span></label>
												 <input type="text"  placeholder="Crime Equipment" name="c_equipment" value="<?=$rs['3']?>" class="form-control">
											</div>
											
											<div class="form-group">
												<label for="phone">Crime Target: <span class="req"> * </span></label>
												<input type="text"  placeholder="Target of Crime" name="c_target" value="<?=$rs['4']?>" class="form-control">
											</div>
											
											<div class="form-group">
												<label for="first_name">Crime Area: <span class="req"> * </span></label>
												<input type="text"  placeholder="Area of Crime" name="c_area" value="<?=$rs['5']?>" class="form-control">
											</div>
											
											 <div class="form-group">
									
											<label for="exampleInputFile">Choose File</label>
											
											<input type="file" id="picture" name="picture"   >
											 </div>
											 
											<div class="form-group">
												<label for="last_name">Wanted Status: <span class="req"> * </span></label>
												 <input type="text"  placeholder="Wanted Status" name="wanted" value="<?=$rs['9']?>" class="form-control">
												<span class="glyphicon glyphicon form-control-feedback"></span>
											</div>
											 <div class="row">
										<!-- /.col -->
											<div class="col-xs-6">
												<button name="save" type="submit" value="submit" id="submit" class="btn btn-primary btn-block btn-flat">Update</button>
											</div>
										</div>

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

<?php

if(isset($_POST['save'])){
 
$c_name=$_POST['c_name'];
$c_type=$_POST['c_type'];
$c_equipment=$_POST['c_equipment'];
$c_target=$_POST['c_target'];
$c_area=$_POST['c_area'];
$Age=$_POST['Age'];
$picture=$_FILES['picture']['name'];
$gender=$_POST['gender'];
$wanted=$_POST['wanted'];

$query="update criminals set c_name='$c_name', c_type='$c_type', c_equipment='$c_equipment', c_target='$c_target',c_area='$c_area', Age='$Age', picture='$picture', gender='$gender' , wanted='$wanted'  where c_id=$ids";
	$rs=$bd->query($query);
	
  if(isset($_FILES['picture'])){
   $file_name=$_FILES['picture']['name'];
  $file_temp=$_FILES['picture']['tmp_name'];
  
  $file_path="../images/";
  move_uploaded_file($file_temp,$file_path.$file_name);
	 
 }
	
	if($bd->affected_rows>0){
				echo"<script> location.href='criminal_view.php?';</script>";
				exit;
			}
	



}

?>


<?php
require_once('footer.php');
?>	