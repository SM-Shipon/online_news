<?php
include "../db/connection.php";

$tblid=$_GET['id'];
$query="delete from criminals where c_id=$tblid";
	$rs=$bd->query($query);
	if($bd->affected_rows>0){
				echo"<script> location.href='criminal_view.php';</script>";
				exit;
			}
	
?>