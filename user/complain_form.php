<?php
require_once("../db/connection.php");

include("header.php");
/*Manufacture list*/
$qry = "SELECT * FROM policeinfo";
$police_list = $bd->query($qry);


?> 
<script type="text/javascript">
        function validateForm() {
            var a = document.forms["reg"]["name"].value;
            var b = document.forms["reg"]["p_name"].value;
            var c = document.forms["reg"]["gender"].value;
            var d = document.forms["reg"]["p_station"].value;
            var e = document.forms["reg"]["witness"].value;
            var f = document.forms["reg"]["evidence"].value;
            var g = document.forms["reg"]["c_timing"].value;
            var h = document.forms["reg"]["c_support"].value;
            var i = document.forms["reg"]["date_of_incident"].value;
            var j = document.forms["reg"]["c_type"].value;
            var k = document.forms["reg"]["c_location"].value;
            var l = document.forms["reg"]["c_discription"].value;
            //var m = document.forms["reg"]["next_p_name"].value;

            if ((a == null || a == "") && (b == null || b == "") && (c == null || c == "") && (d == null || d == "")
                && (e == null || e == "") && (f == null || f == "") && (g == null || g == "") && (h == null || h == "")
                && (i == null || i == "") && (j == null || j == "") && (k == null || k == "") && (l == null || l == "")
                && (m == null || m == "")) {
                alert("All Field must be filled out");
                return false;
            }
            if (a == null || a == "") {
                alert("name must be filled out");
                return false;
            }
            if (b == null || b == "") {
                alert("p_name must be filled out");
                return false;
            }
            if (c == null || c == "") {
                alert("gender name must be filled out");
                return false;
            }
            if (d == null || d == "") {
                alert("p_station must be filled out");
                return false;
            }
            if (e == null || e == "") {
                alert("witness must be filled out");
                return false;
            }
            if (f == null || f == "") {
                alert("evidence must be filled out");
                return false;
            }

            if (g == null || g == "") {
                alert("c_timing must be filled out");
                return false;
            }
            if (h == null || h == "") {
                alert("c_support must be filled out");
                return false;
            }

            if (i == null || i == "") {
                alert("date_of_incident must be filled out");
                return false;
            }
            if (j == null || j == "") {
                alert("c_type must be filled out");
                return false;
            }
            if (k == null || k == "") {
                alert("c_location must be filled out");
                return false;
            }

            if (l == null || l == "") {
                alert("c_discription must be filled out");
                return false;
            }
            
        }
    </script>
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <h2 style="color:#ffff"><b>Complain Here</h2>
    </div>
    <!-- /.login-logo -->
    <div class="register-box-body">

        <?php
            // $remarks=$_GET['remarks'];
            if (!isset($_GET['remarks'])) {
                echo '<p class="login-box-msg">', 'Fill up the form to complete the complain', '</p>';
            }
            if (isset($_GET['remarks']) && $_GET['remarks'] == 'success') {
                echo '<p class="login-box-msg text-success">', 'Complained Successfully', '</p>';
            }
        ?>

        <form action="complain_form_exe.php" onsubmit="return validateForm()" method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Name" name="name">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
			
			

            <div class="form-group">
                <label>Gender:</label>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="gender" id="gender" value="male" checked>
                        Male
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" name="gender" id="gender" value="female">
                        Female
                    </label>
                </div>
            </div>

         <div class="form-group">
                <label>Select Police Station</label>
                <select class="form-control " id="p_station" name="p_station" >
                    <option> -select- </option>
                    <option> potiya thana </option>
                    <option> boalkhali thana </option>
                    <option> chandonayes thana </option>
                    <option> banshkhali thana </option>
                    <option> lohagara thana </option>
                    <option> vujpur thana </option>
                    <option> potiya thana </option>
                    <option> anowara thana </option>
                    <option> bayzid bostami thana </option>
                    <option> bondor thana </option>
                    <option> chandgao thana </option>
                    <option> double mourring thana </option>
                    <option> kotoali thana </option>
                    <option> kornafuli thana </option>
                    <option> panchlaish Model thana </option>
                    <option> hathazari thana </option>
                    <option> fatickchari thana </option>
                </select>
            </div>
			<div class="form-group">
                <select name="police_mem_id" id="police_name" class="form-control">
					<option value="">Select</option>
                </select>
            </div>
			
           <!--<div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Next Reported Police Name" name="next_p_name">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
           -->
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Complain Type" name="c_type">
                <span class="glyphicon glyphicon-list form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Complain Description" name="c_discription">
                <span class="glyphicon glyphicon-list-alt form-control-feedback"></span>
            </div>

           

            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Complain Location" name="c_location">
                <span class="glyphicon glyphicon-globe form-control-feedback"></span>
            </div>

            <div class="form-group">
                <label>Complain Support:</label>
                <div class="radio-inline">
                    <label>
                        <input type="radio" id="c_support" value="male" name="c_support" checked>
                        Male
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" id="c_support" value="female" name="c_support" value="option2">
                        Female
                    </label>
                </div>
            </div>

            <div class="form-group has-feedback">
                <label>Date of Incident:</label>
                <input type="date" class="form-control" name="date_of_incident">
            </div>

            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Witness" name="witness">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Evidence" name="evidence">
                <span class="glyphicon glyphicon-screenshot form-control-feedback"></span>
            </div>

            <div class="row">
                <!-- /.col -->
                <div class="col-xs-6">
                    <button name="submit" type="submit" value="submit" id="submit" class="btn btn-primary btn-block btn-flat">Submit Complain</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

       

    </div>
    <!-- /.login-box-body -->
</div>
<?php
include("footer.php");


?> 
<script src="../../assets/js/jquery-2.1.4.min.js"></script>
<script>
        $(document).ready(function(){
          $('#p_station').on('change', function(){
				
				var police_station_name = $(this).val();
				
				$.ajax({
					type:'get',
					url:'cheeck_p_station.php',
					data:{'p_station_name': police_station_name},
					
					success:function(data){
						if(data){
							$('#police_name').html(data);
						}else
						{
							$('#police_name').html("<option value='0'>No Police available</option>");
						}
					}
				});
			
			});
		});
</script>


<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
</body>
</html>
