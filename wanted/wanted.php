<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Most Wanted</title>
</head>
<style>
body{
	background:white;
	color:white;
	padding-top:50px;
	
}
#form{
	background:#003366;
	margin:50px 400px 0px 400px;
	height:430px
	
}

a{
	margin-left:14;
	color:white;
	
}
#record{
	
	background:#CCFFCC;
	color:black;
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
    var a=document.forms["image"]["name"].value;
    var b=document.forms["image"]["text"].value;
    var c=document.forms["image"]["image"].value;
    
if ((a==null || a=="") && (b==null || b=="") && (c==null || c==""))
{
	  alert("All Field must be filled out");
      return false;
    }
    if (a==null || a=="")
    {
      alert(" name must be filled out");
      return false;
    }
    if (b==null || b=="")
    {
      alert("text must be filled out");
      return false;
	  }
	   if (c==null || c=="")
    {
      alert("image must be filled out");
      return false;
	  }
}
</script>
 <body>
 
 <div id="form">
  
<form name="image"  action="w_record.php" onsubmit="return validateForm()" method="post">
  <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
	 <tr>
      <td colspan="2">
        <div align="center" id="record">
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
        <td width="95"><div align="right">Name:</div><br></td>
        <td width="171"><input type="text" name="name"></td>
	</tr> 
        
	  <tr>
        <td><div align="right">Text:</div><br></td>
		<td><textarea type="text" name="text" rows=15 cols=21></textarea></td>
		
         </tr>
 <tr>
        <td width="95"><div align="right">Image:</div><br></td>
        <td width="171"><input type="file" name="image"></td>
	</tr> 
        
		 <tr>
		 <td><div align="right"><input type="submit" value="submit" name="submit" id="submit"</td>
		 </tr>
		  </table>
  </form>
  <a href="adminhome.php"><button>Back</button></a>
  
  </div>
</body>
</html>