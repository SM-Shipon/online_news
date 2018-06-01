<?php
session_start();
include('dbconnect.php');
if(isset($_POST['submit']));


$policestation = $_POST['policestation'];
$fir = $_POST['fir'];
$date = $_POST['date'];
$vehicle = $_POST['vehicle'];
$vehicletype = $_POST['vehicletype'];
$model = $_POST['model'];
$color = $_POST['color'];

$sql= "INSERT INTO  v_record(policestation,fir,date,vehicle,vehicletype,model,color) VALUES('$policestation','$fir','$date','$vehicle','$vehicletype','$model','$color')";

if(! mysqli_query($con,$sql))
{
	
 echo 'Not Inserted';
}

else
{
 echo 'Inserted Successfully';
}