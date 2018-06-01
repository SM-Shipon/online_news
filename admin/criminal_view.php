<?php
	require_once('header.php');
?>
<?php
	require('../db/connect.php');
	$q = $mysqli->query('select * from criminals order by C_id desc;');
?>

<div class="main-content">
<div class="main-content-inner">
	<div class="breadcrumbs ace-save-state" id="breadcrumbs">
		<ul class="breadcrumb">
			<li>
				<i class="ace-icon fa fa-home home-icon"></i>
				<a href="adminhome.php">Home</a>
			</li>

			<li>
				<a href="#">Criminal</a>
			</li>
			<li class="active">Criminal Info</li>
		</ul><!-- /.breadcrumb -->

	</div>

	<div class="page-content">
				<div class="row">
					<div class="col-xs-12">
						
						
						
						<div class="table-header" >
							<h2 style="padding:5px">Criminal Information</h2>
						</div>

						<!-- div.table-responsive -->

						<!-- div.dataTables_borderWrap -->
						<div>
							<table id="myTable" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
									
									<th class="center">SL#</th>
										<th class="center">Criminal Name</th>
										<th class="center">Gender</th>
										<th class="center">Age</th>
										<th class="center">Crime Type</th>
										<th class="center">Target of Crime</th>
										<th class="center">Crime Equipment</th>
										<th class="center">Area of Crime</th>
										<th class="center">Wanted Status</th>
										<th class="center">Photo</th>
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
											<?=$row['c_name'];?>
										</td>
                                        <td class="center">
											<?=$row['gender'];?>
										</td>
										<td class="center">
											<?=$row['Age'];?>
										</td>
										<td class="center">
											<?=$row['c_type'];?>
										</td>
										<td class="center">
											<?=$row['c_target'];?>
										</td>
										<td class="center">
											<?=$row['c_equipment'];?>
										</td>
										
										<td class="center">
											<?=$row['c_area'];?>
										</td>
										<td class="center">
											<?=$row['wanted'];?>
										</td>
										<td class="center">
											<img src="../images/<?=$row['picture']; ?>" height="50" width="60">
										</td>
										
										<td class="center">
											<div>
												<a class="green" href="criminal_update.php?id=<?=$row['c_id']?>">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" onclick="return confirm('are you sure to delete this record?')" href="criminal_delete.php?id=<?=$row['c_id'];?>">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>
										</td>
                                      </tr>     
                                 <?php
								 } 
								 ?>
								</tbody>
							</table>
						</div>
				<!-- PAGE CONTENT ENDS -->
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->

    <!-- /.content -->

<!-- /.content-wrapper -->
	
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
include"footer.php";


?>