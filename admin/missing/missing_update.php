<?php
include "../db/connection.php";
include"header.php";


?>

<div  style="height:1100px" >  
<div>
      <section class="row" id="form">
			<div style="background-color:#ffe; margin-top:20px"class="col-md-offset-4 col-md-4 col-sm-6 sign-in">
				<h2 align="center" >Update Missing Person</h2>
				
				
				
				 <?php 
					  $ids=$_GET['id'];
					  $result=$bd->query("select * from  m_record where id=$ids");
					  while($rs=$result->fetch_array()){
                   ?>
	               <form name="myForm" enctype="multipart/form-data" action="" method="POST"  >
			
				
				
					
					<div class="modal-body">

					<div class="form-group">
						<label for="first_name">Name: <span class="req"> * </span></label>
						<input type="text"   name="name" placeholder="Crime Type" value="<?=$rs['1']?>" class="form-control">
					
					</div>
					<div class="form-group form-control" >
					
					<label for="gender">Gender: <span class="req"> * </span></label>
						
					 
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
					
					<div class="form-group">
						<label for="email">Age: <span class="req"> * </span></label>
						<input type="text" placeholder="Age" name="age" value="<?=$rs['3']?>" class="form-control">
					
					</div>
					<div class="form-group">
						<label for="height">Height: <span class="req"> * </span></label>
						
						<input type="text"  placeholder="Crime Type" name="height" value="<?=$rs['4']?>" class="form-control">
					</div>
					<div class="form-group from-control">
						<label for="address">Address: <span class="req"> * </span></label>
						 <input type="text"  placeholder="Address" name="address" value="<?=$rs['5']?>" class="form-control">
					</div>
					
					
					 <div class="form-group">
			
					<label for="exampleInputFile">Choose File</label>
					<input type="file" id="picture" name="photo">
					 </div>
					 
					<div class="form-group">
						<label for="contact">Contact: <span class="req"> * </span></label>
						 <input type="text"  placeholder="Wanted Status" name="contact" value="<?=$rs['7']?>" class="form-control">
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
			
       </section>
		 
   </div>

</div>



<?php

if(isset($_POST['save'])){
 

$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$height = $_POST['height'];
$address = $_POST['address'];
$photo = $_FILES['photo']['name'];
$contact = $_POST['contact'];

$query="update m_record set name='$name', gender='$gender', age='$age', height='$height',address='$address', photo='$photo', contact='$contact' where id=$ids";
	$rs=$bd->query($query);
	
  if(isset($_FILES['photo'])){
   $file_name=$_FILES['photo']['name'];
  $file_temp=$_FILES['photo']['tmp_name'];
  
  $file_path="../images/";
  move_uploaded_file($file_temp,$file_path.$file_name);
	 
 }
	
	
	if($bd->affected_rows>0){
				echo"<script> location.href='missing_view.php';</script>";
				exit;
			}
	



}

?>



<?php
include"footer.php";


?>