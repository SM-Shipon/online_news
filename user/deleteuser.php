<?php
include('connection.php');

$sql = "DELETE FROM member WHERE mem_id='$_GET[id]'";
if(mysqli_query($bd, $sql))	
header("refresh:1; url=userinfo.php");	
else
echo "Not Deleted";
?>