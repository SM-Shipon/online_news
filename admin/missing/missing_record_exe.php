<?php
session_start();
include('../db/connection.php');


$name    = $_POST['name'];
$gender  = $_POST['gender'];
$age     = $_POST['age'];
$height  = $_POST['height'];
$address = $_POST['address'];
$photo   = $_FILES['photo']['name'];
$contact = $_POST['contact'];


 

$query="INSERT INTO m_record (name,gender,age,height,address,photo,contact) VALUES('$name','$gender','$age','$height','$address','$photo','$contact')";
 $insert = $bd->query($query);

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
 mysqli_close($bd);

?>
