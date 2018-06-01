<?php
include('../db/connection.php');

$sql = "DELETE FROM w_record WHERE id='$_GET[id]'";
if(mysqli_query($bd, $sql))	{
	session_start();
	$_SESSION['delete'] = "<div class='alert alert-danger alert-dismissible'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Delete !</strong>  one record.
</div>";
	
		 if($bd->affected_rows>0){
				echo"<script> location.href='wanted_view.php';</script>";
				exit;
			}
		 mysqli_close($bd);
}
else
{
echo "Not Deleted";
}
?> 