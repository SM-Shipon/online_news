<?php
include('../db/connect.php');
 if(isset($_POST['submit'])){

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$nid=$_POST['nid'];
	$pstation=$_POST['pstation'];
	$ranking=$_POST['ranking'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query="insert into policeinfo set fname='$fname', lname='$lname', gender='$gender', address='$address', contact='$contact', nid='$nid', pstation='$pstation', ranking='$ranking', username='$username', password='$password'";
	
	//print_r($query);
	
	$rs=$mysqli->query($query);
	
	if($mysqli->affected_rows>0){
		//header("location: policeinfo.php?remarks=success");
		echo "<script>window.location.href='policeinfo.php?success='+1</script>";
	}
	else{
		echo '<div class="alert alert-danger"><strong>Danger!</strong>Data has not been Inserted</div>';	
	}
}

?>
