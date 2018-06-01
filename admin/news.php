<?php
require_once('header.php');
?>
<?php
	require('../db/connect.php');
	if(isset($_POST['form1']))
	{
		try{
			if(empty($_POST['news']))
			{
				throw new Exception('<span style="color:red; font-style:italic;padding-top:15px">Post News field cannot be empty..</span>');
				
			}
			$q = $mysqli->query("insert into news set news = '$_POST[news]';");
			if($q){
				echo "<script>window.location.href='newsinfo.php?success='+1</script>";
			} 
			
			
		}
		catch(Exception $e)
		{
			$error_message = $e->getMessage();
		}
		
	}
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
					<a href="#">Post News</a>
				</li>
				<li class="active">Add Post News</li>
			</ul><!-- /.breadcrumb -->

		</div>
		
		<!-- Full Width Column -->
    <div class="content-wrapper content-box">
        <div class="container">

            <section class="content-header">
                <h1>
                    Post News
                </h1>
            </section>
			<span style="padding-top: 25px;">
				<?php 
				if($error_message)
					{echo $error_message;}
				?>
			</span>
            <!-- Main content -->
            <section class="content">

            <div class="box box-default">

                <div class="box box-primary">

                    <div class="box-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <br>
                                <br>
                                <label><b>News:</b></label>
                                <textarea class="form-control" rows="3" type="text" name="news" placeholder="Post News Here" id="news"></textarea>
                                <br>
                                <input type="submit" value="Post" name="form1"/>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

            </section>
            <!-- /.content -->

        </div>
        <!-- /.container -->
    </div>
	</div>
</div>

<script src="../../assets/js/jquery-2.1.4.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
	jQuery(function($) {
		/*--------------setTimeout---------*/
		setTimeout(function(){ $('.alert').hide(); }, 2000);
		
		/*--------------editor1---------*/
		tinymce.init({ 
			  selector:'textarea',
			  height: 120,
			  theme: 'modern',
			  plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
			  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
			  image_advtab: true,
			  templates: [
				{ title: 'Test template 1', content: 'Test 1' },
				{ title: 'Test template 2', content: 'Test 2' }
			  ],
			  content_css: [
				'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
				'//www.tinymce.com/css/codepen.min.css'
			  ],
			  forced_root_block : false,
			  branding: false,
			  content_style: "body {margin-top: 20px}"
		});

	})
</script>
<?php
require_once('footer.php');
?>	