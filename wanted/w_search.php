<?php
include('connection.php');
include('header.php');
?>
<html>
<head>
<title>Wanted Search</title>
</head>
<style>
body{
	background-image:url('image/crimeback.jpg');
}
table{
	background:#ffffff;
	opacity:0.6;
	color:#000033;
	margin:100px 0px 0px 400px;

}

</style>
<body>

<?php

	if(isset($_POST["Go"]))
  {
	$res=mysqli_query($bd,"SELECT * from w_record WHERE name='$_POST[name]'");
	$rowCount=mysqli_num_rows($res);
      if($rowCount>0){
      echo "<table align=center border=1>";
	  echo "<tr>";
	  
	  echo "<th>"; echo "Name"; echo "</th>";
	  echo "<th>"; echo "Address"; echo "</th>";
	  echo "<th>"; echo "Image"; echo "</th>";
 
      echo "</tr>";
	  
	 while($row=mysqli_fetch_array($res))
	  {
		  echo "<tr>";
		  
	         echo "<td>"; echo $row["name"]; echo "</td>";
			 echo "<td>"; echo $row["text"]; echo "</td>";
		     echo "<td>";?> <img src="./image/<?php echo $row["image"];?>" height="100" width="100"> <?php echo "</td>";
		  
	      echo "</tr>";
	
	
	  }
	
	echo "</table>";
	}
	else {?>

	<div style="color: red; margin-left: 400px; margin-top: 250px; font">  <h1> No Result Found</h1></div>
	<?php }
  }
 
  
?>

</body>
</html>


