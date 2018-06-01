<?php
include('../db/connection.php');

$sql = "DELETE FROM policeinfo WHERE mem_id='$_GET[id]'";
if(mysqli_query($bd, $sql))	{
	session_start();
	$_SESSION['delete'] = "<div class='alert alert-danger alert-dismissible'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Delete !</strong>  one record.
</div>";
	header('Location:policeinfo.php?delete');
}
else
{
echo "Not Deleted";
}
?> 