<?php
include "../db/connection.php";

$tblid=$_GET['id'];
$query="delete from m_record where id=$tblid";
	$rs=$bd->query($query);
	if($bd->affected_rows>0){
				echo"<script> location.href='missing_view.php';</script>";
				exit;
			}
	
?>