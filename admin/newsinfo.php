<?php
	require_once('header.php');
?>
<?php
	require('../db/connect.php');
	$q = $mysqli->query('select * from news order by id desc;');
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
			<li class="active">Post News Info</li>
		</ul><!-- /.breadcrumb -->

	</div>

	<div class="page-content">
				<div class="row">
					<div class="col-xs-12">
						<h3 class="header smaller lighter blue">Post News Info</h3>

						<div class="clearfix">
							<div class="pull-right tableTools-container"></div>
						</div>
						<?php
						session_start();
						if(isset($_GET['delete']))
							echo $_SESSION['delete'];
						
						if($_GET['update']=='1'){
							echo "<div class='alert alert-info alert-dismissible'>
							  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							  <strong>Updated !</strong> one record.
							</div>";
						}
						if($_GET['success']=='1'){
							echo "<div class='alert alert-success alert-dismissible'>
							  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							  <strong>Success !</strong> Inserted record.
							</div>";
						}
						?>
						
						<div class="table-header">
							Results for "Latest Post News"
						</div>

						<!-- div.table-responsive -->

						<!-- div.dataTables_borderWrap -->
						<div>
							<table id="myTable" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th class="center">SL#</th>
										<th class="center">News</th>
										<th class="center">Action</th>
									</tr>
								</thead>

								<tbody>
								<?php 
									$i = 0;
									while($row = $q->fetch_array()){
									$i++;
								?>
									<tr>
										<td class="center">
											<?=$i;?>
										</td>

										<td class="center">
											<?=$row['news'];?>
										</td>
										<td class="center">
											<div>
												<a class="green" href="newsedit.php?id=<?=$row['id']?>">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" onclick="return confirm('are you sure to delete this record?')" href="newsdelete.php?id=<?=$row['id'];?>">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>
										</td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>
				<!-- PAGE CONTENT ENDS -->
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->

<script src="../../assets/js/jquery-2.1.4.min.js"></script>
<script src="../../assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	jQuery(function($) {
		/*--------------datatables---------*/
		$('#myTable').DataTable();
		
		/*--------------setTimeout---------*/
		setTimeout(function(){ $('.alert').hide(); }, 3000);
	})
</script>
<?php
	require_once('footer.php');
?>