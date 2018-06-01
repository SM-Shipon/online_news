<?php
session_start();
 
include('../db/connection.php');
 
$c_name=$_POST['c_name'];
$c_type=$_POST['c_type'];
$c_equipment=$_POST['c_equipment'];
$c_target=$_POST['c_target'];
$c_area=$_POST['c_area'];
$Age=$_POST['Age'];
$picture=$_FILES['picture']['name'];
$gender=$_POST['gender'];
$wanted=$_POST['wanted'];



$query="INSERT INTO criminals(c_name, c_type, gender, c_equipment, c_target, picture, c_area, Age, wanted)VALUES('$c_name', '$c_type', '$gender', '$c_equipment', '$c_target', '$picture', '$c_area', '$Age', '$wanted')";

  $insert = $bd->query($query);


  if(isset($_FILES['picture'])){
   $file_name=$_FILES['picture']['name'];
  $file_temp=$_FILES['picture']['tmp_name'];
  
  $file_path="../images/";
  move_uploaded_file($file_temp,$file_path.$file_name);
	 
 }

   if($bd->affected_rows>0){
		echo"<script> location.href='criminal_view.php';</script>";
		exit;
	}

 
mysqli_close($bd);
?>