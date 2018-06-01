<?php
require_once('../connection.php');
session_start();
if(isset($_SESSION['SESS_FIRST_NAME'])){
  if (isset($_POST['add'])) {
    $complain = $_POST['complain'];
    $description = $_POST['status_detail'];
    $result = mysqli_query($bd,"insert into status (victim_feedback,complain_id) values ('$description','$complain')");
    if($result){
      $status = mysqli_insert_id($bd);
      $res = mysqli_query($bd,"update complain set status_id = '".$status."' where c_id = '".$complain."'");
      if ($res) {
        $_SESSION['ERRMSG_ARR'] = array("Feedback added successfully!!");
        session_write_close();
        header("location: ../uhome.php");
        exit();
      }else {
        $_SESSION['ERRMSG_ARR'] = array("Feedback addition failed!!");
        session_write_close();
        header("location: ../uhome.php");
        exit();
      }
    }else {
      $_SESSION['ERRMSG_ARR'] = array("Feedback addition failed!!");
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
