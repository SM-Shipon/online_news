<?php
require_once('header.php');
?>
<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="#">Home</a>
				</li>
				<li>
					<a href="#">Missing</a>
				</li>
				<li class="active">Edit Missing Info</li>
			</ul><!-- /.breadcrumb -->

		</div>
		
		<!-- Full Width Column -->
    <div class="content-wrapper content-box">
        <div class="container">

            <section class="content-header">
			<div class="page-header">
							
                <h1>
                   Edit Missing
                </h1>
			</div>
            </section>
            <!-- Main content -->
      <section class="content">

            <div class="box box-default">

                <div class="box1 col-md-5 col-md-offset-3" style="text-align:center;">
					
					<span  style="font-size:20px;font-weight:bold;">Edit Missing Information</span>
                    <div class="box-body"  style="text-align:left;">
					<?php 
					  $ids=$_GET['id'];
					  $result=$bd->query("select * from  m_record where id=$ids");
					  while($rs=$result->fetch_array()){
                   ?>

					<form name="missing"  method="post" enctype="multipart/form-data" >
						<div class="form-group has-feedback">
							<input type="text" class="form-control" placeholder="Name" name="name" value="<?=$rs['name']?>" required>
							<span class="glyphicon glyphicon-user form-control-feedback"></span>
						</div>

						<div class="form-group">
							<label>Gender:</label>
							<div class="radio-inline">
								<label>
									<input type="radio" name="gender" id="gender" value="male" <?php echo $rs['gender']=='male'?'checked':''?>>
									Male
								</label>
							</div>
							<div class="radio-inline">
								<label>
									<input type="radio" name="gender" id="gender" value="female" <?php echo $rs['gender']=='female'?'checked':''?>>
									Female
								</label>
							</div>
						</div>

						<div class="form-group has-feedback">
							<input type="text" class="form-control" placeholder="Age" name="age" value="<?=$rs['age']?>" required >
							<span class="glyphicon glyphicon-user form-control-feedback"></span>
						</div>

						<div class="form-group has-feedback">
							<input type="text" class="form-control" placeholder="Height" name="height" value="<?=$rs['height']?>" required >
							<span class="glyphicon glyphicon-user form-control-feedback"></span>
						</div>

						<div class="form-group has-feedback">
							<input type="text" class="form-control" placeholder="Address" name="address" value="<?=$rs['address']?>" required>
							<span class="glyphicon glyphicon-home form-control-feedback"></span>
						</div>
						<input type="hidden" name="hid" value="<?=$rs['photo']?>"/>
						<img src="../image/<?=$rs['photo']?>" alt="no image" width="80" height="100" id="img"/>
						<div class="form-group">
							<label for="exampleInputFile">Choose File</label>
							<input type="file" id="photo" name="photo" onchange="showMyImage(this)">
						</div>

						<div class="form-group has-feedback">
							<input type="text" class="form-control" placeholder="Contact Number" name="contact" value="<?=$rs['contact']?>" required>
							<span class="glyphicon glyphicon-home form-control-feedback"></span>
						</div>


						<div class="row">
							<!-- /.col -->
							<div class="col-xs-8">
								<button name="submit" type="submit" value="submit" id="submit" class="btn btn-primary btn-block btn-flat">Update Missiong Person</button>
							</div>
						</div>

				   </div>
				</form>
				<?php 
					  }
				?>			

             </div>
          </div>
       </section>
            <!-- /.content -->

      </div>
        <!-- /.container -->
     </div>
        <!-- /.container -->
    </div>
</div>

<script src="../../assets/js/jquery-2.1.4.min.js"></script>

<script type="text/javascript">
        function validateForm()
        {
            var a=document.forms["missing"]["name"].value;
            var b=document.forms["missing"]["gender"].value;
            var c=document.forms["missing"]["age"].value;
            var d=document.forms["missing"]["height"].value;
            var e=document.forms["missing"]["address"].value;
            var f=document.forms["missing"]["photo"].value;
            var g=document.forms["missing"]["contact"].value;
            if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f=="") && (g==null || g=="") )
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
                alert("gender must be filled out");
                return false;
            }
            if (c==null || c=="")
            {
                alert("age name must be filled out");
                return false;
            }
            if (d==null || d=="")
            {
                alert("height must be filled out");
                return false;
            }
            if (e==null || e=="")
            {
                alert("address must be filled out");
                return false;
            }
            if (g==null || g=="")
            {
                alert("contact must be filled out");
                return false;
            }

        }
		/*==========change image before upload========*/ 
		 function showMyImage(fileInput) {
				var files = fileInput.files;
				for (var i = 0; i < files.length; i++) {           
					var file = files[i];
					var imageType = /image.*/;     
					if (!file.type.match(imageType)) {
						continue;
					}           
					var img=document.getElementById("img");            
					img.file = file;    
					var reader = new FileReader();
					reader.onload = (function(aImg) { 
						return function(e) { 
							aImg.src = e.target.result; 
						}; 
					})(img);
					reader.readAsDataURL(file);
				}    
			}
    </script>

<?php

if(isset($_POST['submit'])){
 

$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$height = $_POST['height'];
$address = $_POST['address'];
$photo = $_FILES['photo']['name'];
$contact = $_POST['contact'];

$query="update m_record set name='$name', gender='$gender', age='$age', height='$height',address='$address', photo='$photo', contact='$contact' where id=$ids";
	$rs=$bd->query($query);
	
  if(isset($_FILES['photo'])){
	  unlink('../image/'.$_POST['hid']);
   $file_name=$_FILES['photo']['name'];
  $file_temp=$_FILES['photo']['tmp_name'];
  
  $file_path="../image/";
  move_uploaded_file($file_temp,$file_path.$file_name);
	 
 }
	
	
	if($bd->affected_rows>0){
				echo"<script> location.href='missing_view.php?update='+1;</script>";
			}
	



}

?>
<?php
require_once('footer.php');
?>	