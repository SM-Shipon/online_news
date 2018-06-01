<?php
session_start();
include('connection.php');

$name=$_POST["name"];
	
$text=$_POST["text"];
$image=$_POST["image"];
	
mysqli_query($bd,"INSERT INTO w_record(name,text,image) VALUES('$name','$text','$image')");
   
header("location: wanted.php?remarks=success");

mysqli_close($con);

?>