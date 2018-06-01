<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Stolen Record</title>
</head>
<style>
body{
	background:white;
	color:white;
	padding-top:50px;
	
}
#missing{
	
	background:#CCFFCC;
	color:black;
}
#form{
	background:#003366;
	margin:50px 400px 0px 400px;
	height:410px;
	
}
#submit{
	background:green;
	color:white;
}
button{
	background-color:white;
	color:black;
	margin-left:300px;
	
}
</style>

<script type="text/javascript">
  function validateForm()
  {
    var a=document.forms["stole"]["policestation"].value;
    var b=document.forms["stole"]["fir"].value;
    var c=document.forms["stole"]["date"].value;
    var d=document.forms["stole"]["vehicle"].value;
	var e=document.forms["stole"]["vehicletype"].value;
	var f=document.forms["stole"]["model"].value;
	var g=document.forms["stole"]["color"].value;
    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f=="") && (g==null || g=="") )
	{
	  alert("All Field must be filled out");
      return false;
    }
    if (a==null || a=="")
    {
      alert(" policestation must be filled out");
      return false;
    }
    if (b==null || b=="")
    {
      alert("fir must be filled out");
      return false;
	  }
    if (c==null || c=="")
    {
      alert("date name must be filled out");
      return false;
    }
    if (d==null || d=="")
    {
      alert("vehicle must be filled out");
      return false;
    }
    if (e==null || e=="")
    {
      alert("vehicletype must be filled out");
      return false;
    }
	if (f==null || f=="")
    {
      alert("model must be filled out");
      return false;
    }
    if (g==null || g=="")
    {
      alert("color must be filled out");
      return false;
    }
    
  }
</script>
<body>
 <div id="form">
 
<form name="stole" action="v_record_exec.php" onsubmit="return validateForm()" method="post">
  <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2">
        <div align="center" id="missing">
          <?php 
          // $remarks=$_GET['remarks'];
          if (!isset($_GET['remarks']))
          {
            echo 'Record Here';
          }
          if (isset($_GET['remarks']) && $_GET['remarks']=='success')
          {
            echo 'Recorded Successfully';
          }
          ?>  
        </div><br></td>
      </tr>
      <tr>
        <td width="95"><div align="right">Police Station:</div><br></td>
        <td width="171"><input type="text" name="policestation" /></td>
      </tr>
       <tr>
        <td width="95"><div align="right">FIR No:</div><br></td>
        <td width="171"><input type="text" name="fir" /></td>
      </tr>
     <tr>
	<td><div align="right">Date:</div><br></td>
       
		
		<td><input type="date" name="date" /></td>
		</tr>
		
       <tr>
        <td width="95"><div align="right">Make of Vehicle:</div><br></td>
        <td width="171"><input type="text" name="vehicle" /></td>
      </tr>
      <tr>
        <td><div align="right">Vehicle Type:</div><br></td>
	    <td>
		<input type="radio" value="2 Wheeler" name="vehicletype">2Wheeler
	    <input type="radio" value="4 Wheeler" name="vehicletype">4Wheeler</td>
      </tr>
	   <tr>
	  <td><div align="right">Model:</div><br></td>
        <td><input type="text" name="model" /></td>
      </tr>
	  <tr>
	  <td><div align="right">Color:</div><br></td>
        <td><input type="text" name="color" /></td>
      </tr>

	  <tr>
        <td><div align="right"></div></td>
        <td><input name="submit" type="submit" value="Submit" id="submit" /></td>
      </tr>
    </table>
  </form>
  <a href="adminhome.php"><button>Back</button>
  
  </div>
</body>
</html>