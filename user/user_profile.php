<?php
include("connection.php");
$mem_id=$_SESSION['SESS_MEMBER_ID'];
$result3= mysql_query("SELECT * FROM member where mem_id='$mem_id'");
while($row3 = mysql_fetch_array($result3))
{ 
$fname=$row3['fname'];
$lname=$row3['lname'];
$address=$row3['address'];
$contact=$row3['contact'];
$nid=$row3['nid'];
$gender=$row3['gender'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta charset="UTF-8">
  <title>User Profile</title>
</head>
<body>
<table width="398" border="0" align="center" cellpadding="0">
  <tr>
    <td height="26" colspan="2">Your Profile Information </td>
	<td><div align="right"><a href="index.php">logout</a></div></td>
  </tr>
  <tr>
    <td width="82" valign="top"><div align="left">FirstName:</div></td>
    <td width="165" valign="top"><?php echo $fname ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">LastName:</div></td>
    <td valign="top"><?php echo $lname ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Gender:</div></td>
    <td valign="top"><?php echo $gender ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Address:</div></td>
    <td valign="top"><?php echo $address ?></td>
  </tr>
  <tr>
  <td valign="top"><div align="left">Contact No.: </div></td>
    <td valign="top"><?php echo $contact ?></td>
  </tr>
  <tr>
  <td valign="top"><div align="left">NID No.: </div></td>
    <td valign="top"><?php echo $nid ?></td>
  </tr>
</table>
<p align="center"><a href="login.php"></a></p>
</body>
</html>