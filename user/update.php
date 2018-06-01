<?php
require_once('../connection.php');
session_start();
if(isset($_SESSION['SESS_FIRST_NAME'])){
  if (isset($_POST['update'])) {
    $status = $_POST['status'];
    $description = $_POST['status_detail'];
    $result = $res = mysqli_query($bd,"update status set victim_feedback = '".$description."' where id = '".$status."'");
    if($result){
        $_SESSION['ERRMSG_ARR'] = array("Feedback updated successfully!!");
        session_write_close();
        header("location: ../uhome.php");
        exit();
    }else {
      $_SESSION['ERRMSG_ARR'] = array("Feedback update failed!!");
      session_write_close();
      header("location: ../uhome.php");
      exit();
    }
  }
}
else
{
  $_SESSION['ERRMSG_ARR'] = array("Please Login first!!");
  session_write_close();
  header("location: ../uhome.php");
  exit();
}
?>
