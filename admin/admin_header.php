<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Crime report</title>
</head>
<style>
body{
margin:0;
padding:0;
background:#000033;
background-size:cover;
font-family:sans-serif;
}
.main-contant{
	background:white;
	width:1200px;
	height:500px;
	opacity:0.9;
	margin-left:20px;
}
.logo{
background-image:url('image/img1.jpg');
width:1000px;
height:280px;
background-size:cover;
margin-top:100px;
margin-left:50px;
border:5px solid #ffffff;
}
.list{
width:100%;
background:#000033;
height:55px;
margin-top:25px;
opacity:0.8;}
ul{
list-style:none;
padding:0;
margin:0;
position:absolute;
}
li{
float:left;
margin-top:10px;
}
a{
width:100px;
color:white;
display:block;
text-decoration:none;
font-size:12px;
text-align:center;
padding:10px;
border-radius:10px;
font-family:Century Gothic;
font-weight:bold;
}
a:hover{
background:#669900;
transition:0.6s;
}
ul li ul{
background:#000033;
}
ul li ul li{
float:none;
}
ul li ul{
display:none;
}
ul li:hover ul{
display:block;
}
h5{
	text-align:right;
	margin-right:60px;
	color:white;
}
	
</style>

<body>
<h5>Welcome admin</h5>

<div class="main-contant">

<div class="list">
<ul>
<li><a href="adminhome.php">Home</a></li>
<li><a href="p_reg.php">Add New Police</a></li>

<li><a href="#">Add Details</a>
<ul>
<li> <a href="missing_person.php">Add Missing</a></li>
<li> <a href="recordform.php">Add Criminal</a>
<li> <a href="wanted.php">Add Most_wanted</a>

</ul>
</li>
<li><a href="#">View Details</a>
<ul>
<li> <a href="userinfo.php">User Info</a></li>
<li> <a href="policeinfo.php">Police Info</a>
<li> <a href="complaininfo.php">Complain Info</a>
<li> <a href="upmissinginfo.php">Missing Info</a>
</ul>
</li>
<li><a href="news.php">Post News</a></li>

<li><a href="logout.php">Logout</a></li>
</ul>

</div>
<div class="logo">


</div>

</div>
