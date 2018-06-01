<?php require("header.php");

require("../db/connection.php");
$criminals="SELECT * from criminals";
$res=$bd->query($criminals);

$missing="SELECT * from m_record";
$missing_res=$bd->query($missing);

$plolice="SELECT * from policeinfo";
$plolice_res=$bd->query($plolice);

$complain="SELECT * from complain";
$complain_res=$bd->query($complain);

$member="SELECT * from member";
$member_res=$bd->query($member);

?>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									overview &amp; stats
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								

								<div class="row">
									<div class="space-6"></div>

									<div  class="col-sm-7 infobox-container">
										<div  style="background-color:#ff6"class="infobox infobox-green">
											<div class="infobox-icon">
												<img src="../img/police.png" class="img-fluid rounded-circle" width="40px" height="50px">
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><center><?php
													$total_rows=mysqli_num_rows($res);
													echo $total_rows;
													?></center></span>
												<div class="infobox-content">Total police</div>
											</div>

											<div class=""></div>
										</div>

										<div style="background-color:#fd5"class="infobox infobox-blue">
											<div class="infobox-icon">
												<img src="../img/criminal.png" class="img-fluid rounded-circle" width="40px" height="50px">
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><center><?php
													$total_rows=mysqli_num_rows($res);
													echo $total_rows;
													?></center></span>
												<div class="infobox-content">Total criminals </div>
											</div>

											
										</div>

										<div style="background-color:pink" class="infobox infobox-pink">
											<div class="infobox-icon">
												<img src="../img/missing.png" class="img-fluid rounded-circle" width="40px" height="50px">
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><center><?php
													$total_rows=mysqli_num_rows($missing_res);
													echo $total_rows;
													?></center></span>
												<div class="infobox-content">Total Missing</div>
											</div>
											
										</div>

										<div style="background-color:#0f3" style="background-color:blue"class="infobox infobox-green">
											<div class="infobox-icon">
												<img src="../img/user.png" class="img-fluid rounded-circle" width="40px" height="50px">
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><center><?php
													$total_rows=mysqli_num_rows($member_res);
													echo $total_rows;
													?></center></span>
												<div class="infobox-content">Total Member</div>
											</div>

											
										</div>

										<div style="background-color:#fd2" class="infobox infobox-orange2">
											<div class="infobox-icon">
												<img src="../img/complain.png" class="img-fluid rounded-circle" width="40px" height="50px">
											</div>
											
											<div class="infobox-data">
												<span  class="infobox-data-number"><center><?php
													$total_rows=mysqli_num_rows($complain_res);
													echo $total_rows;
													?></center></span>
												<div class="infobox-content">Total Complains</div>
											</div>

											
										</div>

										<div style="background-color:#df8" class="infobox infobox-orange2">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-user"></i>
											</div>
											
											<div class="infobox-data">
												<span  class="infobox-data-number"><center><?php
													$total_rows=mysqli_num_rows($complain_res);
													echo $total_rows;
													?></center></span>
												<div class="infobox-content"> Pending Complains</div>
											</div>

											
										</div>
										
										
										
										
										<div class="space-6"></div>

										<div class="infobox infobox-green infobox-small infobox-dark">
											<div class="infobox-progress">
												<div class="easy-pie-chart percentage" data-percent="61" data-size="39">
													<span class="percent">61</span>%
												</div>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">Task</div>
												<div class="infobox-content">Completion</div>
											</div>
										</div>

										<div class="infobox infobox-blue infobox-small infobox-dark">
											<div class="infobox-chart">
												<span class="sparkline" data-values="3,4,2,3,4,4,2,2"></span>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">Earnings</div>
												<div class="infobox-content">$32,000</div>
											</div>
										</div>

										<div class="infobox infobox-grey infobox-small infobox-dark">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-download"></i>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">Downloads</div>
												<div class="infobox-content">1,205</div>
											</div>
										</div>
									</div>

									<div class="vspace-12-sm"></div>

									<div class="col-sm-5">
										<div class="widget-box">
											<div class="widget-header widget-header-flat widget-header-small">
												<h5 class="widget-title">
													<i class="ace-icon fa fa-signal"></i>
													Traffic Sources
												</h5>

												<div class="widget-toolbar no-border">
													<div class="inline dropdown-hover">
														<button class="btn btn-minier btn-primary">
															This Week
															<i class="ace-icon fa fa-angle-down icon-on-right bigger-110"></i>
														</button>

														<ul class="dropdown-menu dropdown-menu-right dropdown-125 dropdown-lighter dropdown-close dropdown-caret">
															<li class="active">
																<a href="#" class="blue">
																	<i class="ace-icon fa fa-caret-right bigger-110">&nbsp;</i>
																	This Week
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
																	Last Week
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
																	This Month
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
																	Last Month
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div id="piechart-placeholder"></div>

													<div class="hr hr8 hr-double"></div>

													<div class="clearfix">
														<div class="grid3">
															<span class="grey">
																<i class="ace-icon fa fa-facebook-square fa-2x blue"></i>
																&nbsp; likes
															</span>
															<h4 class="bigger pull-right">1,255</h4>
														</div>

														<div class="grid3">
															<span class="grey">
																<i class="ace-icon fa fa-twitter-square fa-2x purple"></i>
																&nbsp; tweets
															</span>
															<h4 class="bigger pull-right">941</h4>
														</div>

														<div class="grid3">
															<span class="grey">
																<i class="ace-icon fa fa-pinterest-square fa-2x red"></i>
																&nbsp; pins
															</span>
															<h4 class="bigger pull-right">1,050</h4>
														</div>
													</div>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col -->
								</div><!-- /.row -->
								

													<form>
														<div class="form-actions">
															<div class="input-group">
																<input placeholder="Type your message here ..." type="text" class="form-control" name="message" />
																<span class="input-group-btn">
																	<button class="btn btn-sm btn-info no-radius" type="button">
																		<i class="ace-icon fa fa-share"></i>
																		Send
																	</button>
																</span>
															</div>
														</div>
													</form>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col -->
								</div><!-- /.row -->
<?php require("footer.php");?>