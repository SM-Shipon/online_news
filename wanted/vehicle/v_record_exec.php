<?php
session_start();
include('connection.php');


$policestation = $_POST['policestation'];
$fir = $_POST['fir'];
$date = $_POST['date'];
$vehicle = $_POST['vehicle'];
$vehicletype = $_POST['vehicletype'];
$model = $_POST['model'];
$color = $_POST['color'];

mysqli_query($bd,"INSERT INTO  v_record(policestation,fir,date,vehicle,vehicletype,model,color) VALUES('$policestation','$fir','$date','$vehicle','$vehicletype','$model','$color')");

header("location: vehicle_record.php?remarks=success");
 
mysqli_close($con);


?>
