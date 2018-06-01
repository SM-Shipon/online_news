<?php
include('../db/connection.php');
 if(isset($_POST['submit'])){

	$name = $_POST['name'];
	$text = $_POST['text'];
	$photo= $_FILES['photo']['name'];
	
	$query="insert into w_record set name='$name', text='$text', image='$photo'";
	
	
	
	$rs=$bd->query($query);
	
	//print_r($rs);
	if(isset($_FILES['photo'])){
   $file_name=$_FILES['photo']['name'];
  $file_temp=$_FILES['photo']['tmp_name'];
  
  $file_path="../images/";
  move_uploaded_file($file_temp,$file_path.$file_name);
	 
 }
 
		 if($bd->affected_rows>0){
				echo"<script> location.href='wanted_view.php';</script>";
				exit;
			}
		 mysqli_close($bd);

}

?>
