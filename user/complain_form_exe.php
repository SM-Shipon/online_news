<?php
session_start();
 
include('../db/connection.php');
 
$name=$_POST['name'];

$gender=$_POST['gender'];
$p_station=$_POST['p_station'];
$police_mem_id=$_POST['police_mem_id'];
//$next_p_name=$_POST['next_p_name'];
$witness=$_POST['witness'];
$evidence=$_POST['evidence'];
$c_timing=date('Y-m-d H:i:s',time());
$c_support=$_POST['c_support'];
$date_of_incident=$_POST['date_of_incident'];
$c_type=$_POST['c_type'];
$c_location=$_POST['c_location'];
$c_discription=$_POST['c_discription'];
$status='Not Respond Yet';

//$complain_id=mysqli_insert_id();
  
$query=mysqli_query($bd, "INSERT INTO complain(name, gender, p_station,  police_mem_id,witness, evidence, c_timing, c_support, date_of_incident, c_type, c_location, c_discription,status_id )VALUES('$name','$gender', '$p_station','$police_mem_id', '$witness', '$evidence', '$c_timing', '$c_support', '$date_of_incident', '$c_type', '$c_location', '$c_discription','$status')");


/*$complain_id=mysqli_insert_id($bd);	
$updated_date=date('Y-m-d H:i:s',time());
mysqli_query($bd, "INSERT INTO status(complain_id, description, created_at, updated_at )VALUES('$complain_id','$c_discription','$c_timing','$updated_date')");
*/
	


 
header("location:complain_form.php?remarks=success");
 
mysqli_close($con);
?>