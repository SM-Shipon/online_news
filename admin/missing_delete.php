<?php
include "../db/connection.php";

$tblid=$_GET['id'];

$file = "select photo FROM m_record WHERE id=$tblid";
$rs=$bd->query($file);
$row = $rs->fetch_array();
unlink('../image/'.$row['photo']);
$sql="delete from m_record where id=$tblid";
	
if(mysqli_query($bd, $sql))	{
	session_start();
	$_SESSION['delete'] = "<div class='alert alert-danger alert-dismissible'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Delete !</strong>  one record.
</div>";
	header('Location:missing_view.php?delete');
}
else
{
echo "Not Deleted";
}
?>