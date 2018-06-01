<?php
	require_once('header.php');
?>
<?php
	require('../db/connection.php');
	$query="SELECT * FROM (complain left JOIN policeinfo ON complain.police_mem_id=policeinfo.mem_id)";
	$complain_list=$bd->query($query);
	
	
	//$q = $mysqli->query('select * from complain order by C_id desc;');
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
				<a href="#">Complain</a>
			</li>
			<li class="active">Complain Info</li>
		</ul><!-- /.breadcrumb -->

	</div>

	<div class="page-content">
				<div class="row">
					<div class="col-xs-12">
						
						
						
						<div class="table-header" >
							<h2 style="padding:5px">Complain Information</h2>
						</div>

						<!-- div.table-responsive -->

						<!-- div.dataTables_borderWrap -->
						<div>
							<table id="myTable" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
									
									<th class="center">SL#</th>
										<th class="center"> Name</th>
										
										<th class="center">Police Station</th>
										<th class="center">Police Name</th>
										<th class="center">Crime Type</th>
										<th class="center">Crime Description </th>
										<th class="center">Crime location</th>
										<th class="center">Complain Time</th>
										<th class="center">Date of Incident</th>
										<th class="center">Evidence</th>
										<th class="center">Witness</th>
										<th class="center">Action</th>

                                       
                                    </tr>
                                 </thead>

								<tbody>  
                                         <?php 
									$i = 0;
									while($row = $complain_list->fetch_array()){
									$i++;
								   ?>
								    <tr>
										<td class="center">
											<?=$i;?>
										</td>

										<td class="center">
											<?=$row['name'];?>
										</td>
                                        
										<td class="center">
											<?=$row['p_station'];?>
										</td>
										<td class="center">
											<?=$row['fname'];?>
										</td>
										<td class="center">
											<?=$row['c_type'];?>
										</td>
										<td class="center">
											<?=$row['c_discription'];?>
										</td>
										<td class="center">
											<?=$row['c_location'];?>
										</td>
										
										<td class="center">
											<?=$row['c_timing'];?>
										</td>
										<td class="center">
											<?=$row['date_of_incident'];?>
										</td>
										<td class="center">
											<?=$row['evidence'];?>
										</td>
										<td class="center">
											<?=$row['witness'];?>
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