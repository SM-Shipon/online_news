<?php
  require_once("../db/connect.php");

    $station_name=$_GET['p_station_name'];
	$query="select * from policeinfo where pstation='$station_name'";
	$res=$mysqli->query($query);
	while($row = $res->fetch_array())
	{	
		$r = "<option value=".$row['mem_id'].">". $row['fname']. " " .$row['lname']."</option>";
		echo $r;
	}
	
?>