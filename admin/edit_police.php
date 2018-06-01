<?php
require_once('header.php');
?>
<div class="main-content">
	<div class="main-content-inner">
	
	<!-----------Breadcrumbs------>
	
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="adminhome.php">Home</a>
				</li>
				<li>
					<a href="#">Police</a>
				</li>
				<li class="active">Edit Police Info</li>
			</ul><!-- /.breadcrumb -->

		</div>
		<!-----------End  Breadcrumbs------>
		
		
		<!-- Full Width Column -->
    <div class="content-wrapper content-box">
        <div class="container">

            <section class="content-header">
			<div class="page-header">
							
                <h1>
                    Edit Police Information
                </h1>
			</div>
            </section>
            <!-- Main content -->
            <section class="content">

            <div class="box box-default">

                <div class="box1 col-md-5 col-md-offset-3" style="text-align:center;">
					
					<span  style="font-size:20px;font-weight:bold;">Police Information</span>
                    <div class="box-body"  style="text-align:left;">
					<?php 
					  $ids=$_GET['id'];
					  $result=$bd->query("select * from  policeinfo where mem_id=$ids");
					  while($rs=$result->fetch_array()){
                   ?>
                        <form name="reg" onsubmit="return validateForm()" method="post">
							<div class="form-group has-feedback">
								<input type="text" class="form-control" placeholder="First Name" name="fname" value="<?=$rs['fname']?>">
								<span class="glyphicon glyphicon-user form-control-feedback"></span>
							</div>

							<div class="form-group has-feedback">
								<input type="text" class="form-control" placeholder="Last Name" name="lname" value="<?=$rs['lname']?>">
								<span class="glyphicon glyphicon-user form-control-feedback"></span>
							</div>

							<div class="form-group">
								<label><span style="font-weight:bold;color:#666666">Gender:  </span></label>
								<div class="radio-inline">
									<label>
										<input type="radio" name="gender" id="gender" value="male" <?php echo $rs['gender']=='male'?'checked':''?>>
										Male
									</label>
								</div>
								<div class="radio-inline">
									<label>
										<input type="radio" name="gender" id="gender" value="female" <?php echo $rs['gender']=='female'? 'checked':''?>>
										Female
									</label>
								</div>
							</div>

							<div class="form-group has-feedback">
								<input type="text" class="form-control" placeholder="Address" name="address" value="<?=$rs['address']?>">
								<span class="glyphicon glyphicon-home form-control-feedback"></span>
							</div>

							<div class="form-group has-feedback">
								<input type="text" class="form-control" placeholder="Contact Number" name="contact" value="<?=$rs['contact']?>">
								<span class="glyphicon glyphicon-phone form-control-feedback"></span>
							</div>

							<div class="form-group has-feedback">
								<input type="text" class="form-control" placeholder="NID Card Number" name="nid" value="<?=$rs['nid']?>">
								<span class="glyphicon glyphicon-list-alt form-control-feedback"></span>
							</div>

							<div class="form-group">
								<label><span style="font-weight:bold;color:#666666">Select Police Station</span></label>
								<select class="form-control" name="pstation" value="<?=$rs['pstation']?>">
									<option <?php echo $rs['pstation']=='Boalkhali thana'? 'selected':''?>> Boalkhali thana </option>
									<option <?php echo $rs['pstation']=='Chandonayes thana'? 'selected':''?>> Chandonayes thana </option>
									<option <?php echo $rs['pstation']=='Banshkhali thana'? 'selected':''?>> Banshkhali thana </option>
									<option <?php echo $rs['pstation']=='Lohagara thana'? 'selected':''?>> Lohagara thana </option>
									<option <?php echo $rs['pstation']=='Vujpur thana'? 'selected':''?>> Vujpur thana </option>
									<option <?php echo $rs['pstation']=='Pahartali thana'? 'selected':''?>> Pahartali thana </option>
									<option <?php echo $rs['pstation']=='Anowara thana'? 'selected':''?>> Anowara thana </option>
									<option <?php echo $rs['pstation']=='Bayzid bostami thana'? 'selected':''?>> Bayzid bostami thana </option>
									<option <?php echo $rs['pstation']=='Bondor thana'? 'selected':''?>> Bondor thana </option>
									<option <?php echo $rs['pstation']=='Chandgao thana'? 'selected':''?>> Chandgao thana </option>
									<option <?php echo $rs['pstation']=='Double mourring thana'? 'selected':''?>> Double mourring thana </option>
									<option <?php echo $rs['pstation']=='Kotoali thana'? 'selected':''?>> Kotoali thana </option>
									<option <?php echo $rs['pstation']=='Kornafuli thana'? 'selected':''?>> Kornafuli thana </option>
									<option <?php echo $rs['pstation']=='Panchlaish Model thana'? 'selected':''?>> Panchlaish Model thana </option>
									<option <?php echo $rs['pstation']=='Hathazari thana'? 'selected':''?>> Hathazari thana </option>
									<option <?php echo $rs['pstation']=='Fatickchari thana'? 'selected':''?>> Fatickchari thana </option>
								</select>
							</div>

							<div class="form-group has-feedback">
								<input type="text" class="form-control" placeholder="Ranking" name="ranking" value="<?=$rs['ranking']?>">
								<span class="glyphicon glyphicon-list form-control-feedback"></span>
							</div>

							<div class="form-group has-feedback">
								<input type="text" class="form-control" placeholder="Username" name="username" value="<?=$rs['username']?>">
								<span class="glyphicon glyphicon-user form-control-feedback"></span>
							</div>

							<div class="form-group has-feedback">
								<input type="text" class="form-control" placeholder="Password" name="password" value="<?=$rs['password']?>">
								<span class="glyphicon glyphicon-lock form-control-feedback"></span>
							</div>

							<div class="row">
								<!-- /.col -->
								<div class="col-xs-6">
									<button name="submit" type="submit" value="submit" id="submit" class="btn btn-primary btn-block btn-flat">Edit Police</button>
								</div>
								<!-- /.col -->

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
	</div>
</div>
<script type="text/javascript">
        function validateForm()
        {
            var a=document.forms["reg"]["fname"].value;
            var b=document.forms["reg"]["lname"].value;
            var c=document.forms["reg"]["gender"].value;
            var d=document.forms["reg"]["address"].value;
            var e=document.forms["reg"]["contact"].value;
            var f=document.forms["reg"]["nid"].value;
            var g=document.forms["reg"]["pstation"].value;
            var h=document.forms["reg"]["ranking"].value;
            var i=document.forms["reg"]["username"].value;
            var j=document.forms["reg"]["password"].value;
            if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f=="") && (g==null || g=="") && (h==null || h=="") && (i==null || i=="") && (j==null || j=="")  )
            {
                alert("All Field must be filled out");
                return false;
            }
            if (a==null || a=="")
            {
                alert("First name must be filled out");
                return false;
            }
            if (b==null || b=="")
            {
                alert("Last name must be filled out");
                return false;
            }
            if (c==null || c=="")
            {
                alert("Gender name must be filled out");
                return false;
            }
            if (d==null || d=="")
            {
                alert("Address must be filled out");
                return false;
            }
            if (e==null || e=="")
            {
                alert("Contact must be filled out");
                return false;
            }
            if (f==null || f=="")
            {
                alert("nid must be filled out");
                return false;
            }
            if (g==null || g=="")
            {
                alert("pstation must be filled out");
                return false;
            }
            if (h==null || h=="")
            {
                alert("ranking must be filled out");
                return false;
            }
            if (i==null || i=="")
            {
                alert("username must be filled out");
                return false;
            }
            if (j==null || j=="")
            {
                alert("password must be filled out");
                return false;
            }
        }
    </script>
	
<?php

 if(isset($_POST['submit'])){

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$nid=$_POST['nid'];
	$pstation=$_POST['pstation'];
	$ranking=$_POST['ranking'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query="update policeinfo set fname='$fname', lname='$lname', gender='$gender', address='$address', contact='$contact', nid='$nid', pstation='$pstation', ranking='$ranking', username='$username', password='$password' where mem_id=$ids";
	
	//print_r($query);
	
	$rs=$bd->query($query);
	
	if($bd->affected_rows>0){
		//header("location: policeinfo.php?remarks=success");
		
		echo"<script> location.href='policeinfo.php?update='+1;</script>";
	}
	
}

?>

<?php
require_once('footer.php');
?>	