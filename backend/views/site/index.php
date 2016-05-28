<?php 

    $this->title = '首页';

?>

<!-- PAGE HEADER-->
						<div class="row">
							<div class="col-sm-12">
								<div class="page-header">
									<!-- STYLER -->
									
									<!-- /STYLER -->
									<!-- BREADCRUMBS -->
									<ul class="breadcrumb">
										<li>
											<i class="fa fa-home"></i>
											<a href="index.html">Home</a>
										</li>
										<li>Dashboard - shared on weidea.net</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">Dashboard</h3>
										<!-- DATE RANGE PICKER -->
										<span class="date-range pull-right">
											<div class="btn-group">
												<a class="js_update btn btn-default" href="#">Today</a>
												<a class="js_update btn btn-default" href="#">Last 7 Days</a>
												<a class="js_update btn btn-default hidden-xs" href="#">Last month</a>
												
												<a id="reportrange" class="btn reportrange">
													<i class="fa fa-calendar"></i>
													<span>Custom</span>
													<i class="fa fa-angle-down"></i>
												</a>
											</div>
										</span>
										<!-- /DATE RANGE PICKER -->
									</div>
									<div class="description">Overview, Statistics and more</div>
								</div>
							</div>
						</div>
						<!-- /PAGE HEADER -->
						<!-- DASHBOARD CONTENT -->
						<div class="row">
							<!-- COLUMN 1 -->
							<div class="col-md-6">
								<div class="row">
								  <div class="col-lg-6">
									 <div class="dashbox panel panel-default">
										<div class="panel-body">
										   <div class="panel-left red">
												<i class="fa fa-instagram fa-3x"></i>
										   </div>
										   <div class="panel-right">
												<div class="number">6718</div>
												<div class="title">Likes</div>
												<span class="label label-success">
													26% <i class="fa fa-arrow-up"></i>
												</span>
										   </div>
										</div>
									 </div>
								  </div>
								  <div class="col-lg-6">
									 <div class="dashbox panel panel-default">
										<div class="panel-body">
										   <div class="panel-left blue">
												<i class="fa fa-twitter fa-3x"></i>
										   </div>
										   <div class="panel-right">
												<div class="number">2724</div>
												<div class="title">Followers</div>
												<span class="label label-warning">
													5% <i class="fa fa-arrow-down"></i>
												</span>
										   </div>
										</div>
									 </div>
								  </div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="quick-pie panel panel-default">
											<div class="panel-body">
												<div class="col-md-4 text-center">
													<div id="dash_pie_1" class="piechart" data-percent="59">
														<span class="percent">59%</span>
													<canvas height="220" width="220" style="height: 110px; width: 110px;"></canvas></div>
													<a href="#" class="title">New Visitors <i class="fa fa-angle-right"></i></a>
												</div>
												<div class="col-md-4 text-center">
													<div id="dash_pie_2" class="piechart" data-percent="73">
														<span class="percent">73%</span>
													<canvas height="220" width="220" style="height: 110px; width: 110px;"></canvas></div>
													<a href="#" class="title">Bounce Rate <i class="fa fa-angle-right"></i></a>
												</div>
												<div class="col-md-4 text-center">
													<div id="dash_pie_3" class="piechart" data-percent="90">
														<span class="percent">90%</span>
													<canvas height="220" width="220" style="height: 110px; width: 110px;"></canvas></div>
													<a href="#" class="title">Brand Popularity <i class="fa fa-angle-right"></i></a>
												</div>
											</div>
										</div>
									</div>
							   </div>
							</div>
							<!-- /COLUMN 1 -->
							
							<!-- COLUMN 2 -->
							<div class="col-md-6">
								<div class="box solid grey">
									<div class="box-title">
										<h4><i class="fa fa-dollar"></i>Revenue</h4>
										<div class="tools">
											<span class="label label-danger">
												20% <i class="fa fa-arrow-up"></i>
											</span>
											<a href="#box-config" data-toggle="modal" class="config">
												<i class="fa fa-cog"></i>
											</a>
											<a href="javascript:;" class="reload">
												<i class="fa fa-refresh"></i>
											</a>
											<a href="javascript:;" class="collapse">
												<i class="fa fa-chevron-up"></i>
											</a>
											<a href="javascript:;" class="remove">
												<i class="fa fa-times"></i>
											</a>
										</div>
									</div>
									<div class="box-body">
										<div id="chart-revenue" style="height: 240px; padding: 0px; position: relative;"><canvas class="flot-base" width="1070" height="480" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 535px; height: 240px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; max-width: 76px; top: 227px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 11.5px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); left: 69px; text-align: center;">2</div><div style="position: absolute; max-width: 76px; top: 227px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 11.5px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); left: 160px; text-align: center;">4</div><div style="position: absolute; max-width: 76px; top: 227px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 11.5px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); left: 250px; text-align: center;">6</div><div style="position: absolute; max-width: 76px; top: 227px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 11.5px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); left: 341px; text-align: center;">8</div><div style="position: absolute; max-width: 76px; top: 227px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 11.5px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); left: 429px; text-align: center;">10</div><div style="position: absolute; max-width: 76px; top: 227px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 11.5px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); left: 520px; text-align: center;">12</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; top: 217px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 11.5px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); left: 15px; text-align: right;">0</div><div style="position: absolute; top: 174px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 11.5px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); left: 9px; text-align: right;">20</div><div style="position: absolute; top: 131px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 11.5px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); left: 9px; text-align: right;">40</div><div style="position: absolute; top: 89px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 11.5px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); left: 9px; text-align: right;">60</div><div style="position: absolute; top: 46px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 11.5px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); left: 9px; text-align: right;">80</div><div style="position: absolute; top: 4px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 11.5px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); left: 2px; text-align: right;">100</div></div></div><canvas class="flot-overlay" width="1070" height="480" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 535px; height: 240px;"></canvas></div>
									</div>
								</div>
							</div>
							<!-- /COLUMN 2 -->
						</div>
					   <!-- /DASHBOARD CONTENT -->
					   <!-- HERO GRAPH -->
						<div class="row">
							<div class="col-md-12">
								<!-- BOX -->
								<div class="box border green">
									<div class="box-title">
										<h4><i class="fa fa-bars"></i> <span class="hidden-inline-mobile">Traffic &amp; Sales</span></h4>
									</div>
									<div class="box-body">
										<div class="tabbable header-tabs">
											<ul class="nav nav-tabs">
												 <li><a href="#box_tab2" data-toggle="tab"><i class="fa fa-search-plus"></i> <span class="hidden-inline-mobile">Select &amp; Zoom Sales Chart</span></a></li>
												 <li class="active"><a href="#box_tab1" data-toggle="tab"><i class="fa fa-bar-chart-o"></i> <span class="hidden-inline-mobile">Traffic Statistics</span></a></li>
											 </ul>
											 <div class="tab-content">
												 <div class="tab-pane fade in active" id="box_tab1">
													<!-- TAB 1 -->
													<div id="chart-dash" class="chart" style="padding: 0px; position: relative;"><canvas class="flot-base" width="2244" height="600" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1122px; height: 300px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 124px; top: 283px; left: 25px; text-align: center;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 124px; top: 283px; left: 199px; text-align: center;">5</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 124px; top: 283px; left: 370px; text-align: center;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 124px; top: 283px; left: 544px; text-align: center;">15</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 124px; top: 283px; left: 718px; text-align: center;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 124px; top: 283px; left: 892px; text-align: center;">25</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 124px; top: 283px; left: 1066px; text-align: center;">30</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 265px; left: 5px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 199px; left: 5px; text-align: right;">2</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 133px; left: 5px; text-align: right;">4</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 67px; left: 5px; text-align: right;">6</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 5px; text-align: right;">8</div></div></div><canvas class="flot-overlay" width="2244" height="600" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1122px; height: 300px;"></canvas></div>
													<hr class="margin-bottom-0">
												   <!-- /TAB 1 -->
												 </div>
												 <div class="tab-pane fade" id="box_tab2">
													<div class="row">
														<div class="col-md-8">
															<div class="demo-container">
																<div id="placeholder" class="demo-placeholder" style="padding: 0px; position: relative;"><canvas class="flot-base" width="200" height="200" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 100px; height: 100px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 33px; top: 100px; left: 15px; text-align: center;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 33px; top: 100px; left: 56px; text-align: center;">5</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 90px; left: 5px; text-align: right;">-1.2</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 83px; left: 5px; text-align: right;">-1.0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 76px; left: 5px; text-align: right;">-0.8</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 70px; left: 5px; text-align: right;">-0.6</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 63px; left: 5px; text-align: right;">-0.4</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 56px; left: 5px; text-align: right;">-0.2</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 49px; left: 5px; text-align: right;">0.0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 42px; left: 5px; text-align: right;">0.2</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 35px; left: 5px; text-align: right;">0.4</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 29px; left: 5px; text-align: right;">0.6</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 22px; left: 5px; text-align: right;">0.8</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 15px; left: 5px; text-align: right;">1.0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 8px; left: 5px; text-align: right;">1.2</div></div></div><canvas class="flot-overlay" width="200" height="200" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 100px; height: 100px;"></canvas></div>
															</div>
														</div>
														<div class="col-md-4">
															<div class="demo-container" style="height:100px;">
																<div id="overview" class="demo-placeholder" style="padding: 0px; position: relative;"><canvas class="flot-base" width="200" height="200" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 100px; height: 100px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 20px; top: 100px; left: 8px; text-align: center;">0.0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 20px; top: 100px; left: 30px; text-align: center;">2.5</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 20px; top: 100px; left: 53px; text-align: center;">5.0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 20px; top: 100px; left: 75px; text-align: center;">7.5</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 50px; left: 0px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 29px; left: 0px; text-align: right;">1</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 8px; left: 0px; text-align: right;">2</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 92px; left: 0px; text-align: right;">-2</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 71px; left: 0px; text-align: right;">-1</div></div></div><canvas class="flot-overlay" width="200" height="200" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 100px; height: 100px;"></canvas></div>
															</div>
															<div class="well well-bottom">
																<h4>Month over Month Analysis</h4>
																<ol>
																	<li>Selection support makes it easy to construct flexible zooming schemes.</li>
																	<li>With a few lines of code, the small overview plot to the right has been connected to the large plot.</li>
																	<li>Try selecting a rectangle on either of them.</li>
																</ol>
															</div>
														</div>
													</div>
												</div>
											 </div>
										</div>
									</div>
								</div>
								<!-- /BOX -->
							</div>
						</div>
						<!-- /HERO GRAPH -->
						<!-- NEW ORDERS & STATISTICS -->
						<div class="row">
							<!-- NEW ORDERS -->
							<div class="col-md-6">
								<div class="box border">
									<div class="box-title">
										<h4><i class="fa fa-columns"></i> <span class="hidden-inline-mobile">Sales Tab</span></h4>
									</div>
									<div class="box-body">
								<div class="tabbable header-tabs">
									<ul class="nav nav-tabs">
									   <li class="active"><a href="#sales" data-toggle="tab"><i class="fa fa-bookmark"></i> <span class="hidden-inline-mobile">New Orders</span></a></li>
									   <li><a href="#feed" data-toggle="tab"><i class="fa fa-rss"></i> <span class="hidden-inline-mobile">Recent Activities</span></a></li>
									</ul>
									<div class="tab-content">
									   <div class="tab-pane active" id="sales">
										  <div class="panel panel-default">
											  <div class="panel-body orders no-opaque">
												<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 450px;"><div class="scroller" data-height="450px" data-always-visible="1" data-rail-visible="1" style="overflow: hidden; width: auto; height: 450px;">
													<ul class="list-unstyled">
														<li class="clearfix">
															<div class="pull-left">
																<p>
																	</p><h5><strong>#A14</strong> Rikki S. Stover</h5>
																<p></p>
																<p><i class="fa fa-clock-o"></i> <abbr class="timeago" title="Oct 9, 2013">Oct 9, 2013</abbr></p>
																																
															</div>
															<div class="text-right pull-right">
																<h4 class="cost">$124.00</h4>
																<p>
																	<span class="label label-success arrow-in-right"><i class="fa fa-check"></i> Complete</span>
																</p>
															</div>
															<div class="clearfix"></div>
															<div class="progress progress-sm">
															  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
																<span class="sr-only">85% Complete</span>
															  </div>
															</div>
														</li>
														<li class="clearfix">
															<div class="pull-left">
																<p>
																	</p><h5><strong>#A15</strong> Scott Allen</h5>
																<p></p>
																<p><i class="fa fa-clock-o"></i> <abbr class="timeago" title="Oct 10, 2013">Oct 10, 2013</abbr></p>
																
															</div>
															<div class="text-right pull-right">
																<h4 class="cost">$235.00</h4>
																<p>
																	<span class="label label-warning arrow-in-right"><i class="fa fa-cog"></i> In Progress</span>
																</p>
															</div>
															<div class="clearfix"></div>
															<div class="progress progress-sm">
															  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
																<span class="sr-only">30% Complete</span>
															  </div>
															</div>
														</li>
														<li class="clearfix">
															<div class="pull-left">
																<p>
																	</p><h5><strong>#A16</strong> Larry Wright</h5>
																<p></p>
																<p><i class="fa fa-clock-o"></i> <abbr class="timeago" title="Oct 11, 2013">Oct 11, 2013</abbr></p>
																
															</div>
															<div class="text-right pull-right">
																<h4 class="cost">$77.00</h4>
																<p>
																	<span class="label label-primary arrow-in-right"><i class="fa fa-archive"></i> Archived</span>
																</p>
															</div>
															<div class="clearfix"></div>
															<div class="progress progress-sm">
															  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width: 97%;">
																<span class="sr-only">97% Complete</span>
															  </div>
															</div>
														</li>
														<li class="clearfix">
															<div class="pull-left">
																<p>
																	</p><h5><strong>#A17</strong> John Dale</h5>
																<p></p>
																<p><i class="fa fa-clock-o"></i> <abbr class="timeago" title="Oct 10, 2013">Oct 10, 2013</abbr></p>
																
															</div>
															<div class="text-right pull-right">
																<h4 class="cost">$174.00</h4>
																<p>
																	<span class="label label-danger arrow-in-right"><i class="fa fa-star"></i> New</span>
																</p>
															</div>
															<div class="clearfix"></div>
															<div class="progress progress-sm">
															  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
																<span class="sr-only">10% Complete</span>
															  </div>
															</div>
														</li>
														<li class="clearfix">
															<div class="pull-left">
																<p>
																	</p><h5><strong>#A18</strong> MJ Perkins</h5>
																<p></p>
																<p><i class="fa fa-clock-o"></i> <abbr class="timeago" title="Oct 11, 2013">Oct 11, 2013</abbr></p>
																
															</div>
															<div class="text-right pull-right">
																<h4 class="cost">$68.00</h4>
																<p>
																	<span class="label label-info arrow-in-right"><i class="fa fa-truck"></i> In Transit</span>
																</p>
															</div>
															<div class="clearfix"></div>
															<div class="progress progress-sm">
															  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
																<span class="sr-only">50% Complete</span>
															  </div>
															</div>
														</li>
														<li class="clearfix">
															<div class="pull-left">
																<p>
																	</p><h5><strong>#A19</strong> Stephen Stover</h5>
																<p></p>
																<p><i class="fa fa-clock-o"></i> <abbr class="timeago" title="Oct 9, 2013">Oct 9, 2013</abbr></p>
																																
															</div>
															<div class="text-right pull-right">
																<h4 class="cost">$124.00</h4>
																<p>
																	<span class="label label-success arrow-in-right"><i class="fa fa-check"></i> Complete</span>
																</p>
															</div>
															<div class="clearfix"></div>
															<div class="progress progress-sm">
															  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
																<span class="sr-only">80% Complete</span>
															  </div>
															</div>
														</li>
														<li class="clearfix">
															<div class="pull-left">
																<p>
																	</p><h5><strong>#A20</strong> Edward Lus</h5>
																<p></p>
																<p><i class="fa fa-clock-o"></i> <abbr class="timeago" title="Oct 11, 2013">Oct 11, 2013</abbr></p>
																
															</div>
															<div class="text-right pull-right">
																<h4 class="cost">$52.00</h4>
																<p>
																	<span class="label label-danger arrow-in-right"><i class="fa fa-star"></i> New</span>
																</p>
															</div>
															<div class="clearfix"></div>
															<div class="progress progress-sm">
															  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
																<span class="sr-only">20% Complete</span>
															  </div>
															</div>
														</li>
														<li class="clearfix">
															<div class="pull-left">
																<p>
																	</p><h5><strong>#A21</strong> Alice Mangrum</h5>
																<p></p>
																<p><i class="fa fa-clock-o"></i> <abbr class="timeago" title="Oct 11, 2013">Oct 11, 2013</abbr></p>
																
															</div>
															<div class="text-right pull-right">
																<h4 class="cost">$14.00</h4>
																<p>
																	<span class="label label-info arrow-in-right"><i class="fa fa-truck"></i> In Transit</span>
																</p>
															</div>
															<div class="clearfix"></div>
															<div class="progress progress-sm">
															  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
																<span class="sr-only">65% Complete</span>
															  </div>
															</div>
														</li>
														<li class="clearfix">
															<div class="pull-left">
																<p>
																	</p><h5><strong>#A22</strong> Tamika Owens</h5>
																<p></p>
																<p><i class="fa fa-clock-o"></i> <abbr class="timeago" title="Oct 11, 2013">Oct 11, 2013</abbr></p>
																
															</div>
															<div class="text-right pull-right">
																<h4 class="cost">$604.00</h4>
																<p>
																	<span class="label label-warning arrow-in-right"><i class="fa fa-cog"></i> In Progress</span>
																</p>
															</div>
															<div class="clearfix"></div>
															<div class="progress progress-sm">
															  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
																<span class="sr-only">75% Complete</span>
															  </div>
															</div>
														</li>
													</ul>
												</div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 190.858px; background: rgb(161, 178, 189);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: block; border-radius: 7px; opacity: 0.1; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div>
											  </div>
											   <div class="text-center">
												<ul class="pagination">
												  <li class="disabled">
													<a href="#">
													  <i class="fa fa-angle-left"></i>
													</a>
												  </li>
												  <li class="active">
													<a href="#">
													  1
													</a>
												  </li>
												  <li>
													<a href="#">2</a>
												  </li>
												  <li>
													<a href="#">3</a>
												  </li>
												  <li>
													<a href="#">4</a>
												  </li>
												  <li>
													<a href="#">5</a>
												  </li>
												  <li>
													<a href="#">
													  <i class="fa fa-angle-right"></i>
													</a>
												  </li>
												</ul>
											  </div>
											</div>
									   </div>
									   <div class="tab-pane" id="feed">
										  <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 450px;"><div class="scroller" data-height="450px" data-always-visible="1" data-rail-visible="1" style="overflow: hidden; width: auto; height: 450px;">
											  <div class="feed-activity clearfix">
												<div>
													<i class="pull-left roundicon fa fa-check btn btn-info"></i>
													<a class="user" href="#"> John Doe </a>
													accepted your connection request.
													<br>
													<a href="#">View profile</a>
													
												</div>
												<div class="time">
													<i class="fa fa-clock-o"></i>
													5 hours ago
												</div>
											  </div>
											  <div class="feed-activity clearfix">
												<div>
													<i class="pull-left roundicon fa fa-picture-o btn btn-danger"></i>
													<a class="user" href="#"> Jack Doe </a>
													uploaded a new photo.
													<br>
													<a href="#">Take a look</a>
													
												</div>
												<div class="time">
													<i class="fa fa-clock-o"></i>
													5 hours ago
												</div>
											  </div>
											  <div class="feed-activity clearfix">
												<div>
													<i class="pull-left roundicon fa fa-edit btn btn-pink"></i>
													<a class="user" href="#"> Jess Doe </a>
													edited their skills.
													<br>
													<a href="#">Endorse them</a>
													
												</div>
												<div class="time">
													<i class="fa fa-clock-o"></i>
													5 hours ago
												</div>
											  </div>
											  <div class="feed-activity clearfix">
												<div>
													<i class="pull-left roundicon fa fa-bitcoin btn btn-yellow"></i>
													<a class="user" href="#"> Divine Doe </a>
													made a bitcoin payment.
													<br>
													<a href="#">Check your financials</a>
													
												</div>
												<div class="time">
													<i class="fa fa-clock-o"></i>
													6 hours ago
												</div>
											  </div>
											  <div class="feed-activity clearfix">
												<div>
													<i class="pull-left roundicon fa fa-dropbox btn btn-primary"></i>
													<a class="user" href="#"> Lisbon Doe </a>
													saved a new document to Dropbox.
													<br>
													<a href="#">Download</a>
													
												</div>
												<div class="time">
													<i class="fa fa-clock-o"></i>
													1 day ago
												</div>
											  </div>
											  <div class="feed-activity clearfix">
												<div>
													<i class="pull-left roundicon fa fa-pinterest btn btn-inverse"></i>
													<a class="user" href="#"> Bob Doe </a>
													pinned a new photo to Pinterest.
													<br>
													<a href="#">Take a look</a>
													
												</div>
												<div class="time">
													<i class="fa fa-clock-o"></i>
													2 days ago
												</div>
											  </div>
											  <div class="feed-activity clearfix">
												<div>
													<i class="pull-left roundicon fa fa-clock-o btn btn-success"></i>
													<a class="user" href="#"> John Doe </a>
													accepted your connection request.
													<br>
													<a href="#">View profile</a>
													
												</div>
												<div class="time">
													<i class="fa fa-clock-o"></i>
													5 hours ago
												</div>
											  </div>
											  <div class="feed-activity clearfix">
												<div>
													<i class="pull-left roundicon fa fa-heart btn btn-purple"></i>
													<a class="user" href="#"> Jack Doe </a>
													uploaded a new photo.
													<br>
													<a href="#">Take a look</a>
													
												</div>
												<div class="time">
													<i class="fa fa-clock-o"></i>
													5 hours ago
												</div>
											  </div>
											  <div class="feed-activity clearfix">
												<div>
													<i class="pull-left roundicon fa fa-gift btn btn-pink"></i>
													<a class="user" href="#"> Jess Doe </a>
													edited their skills.
													<br>
													<a href="#">Endorse them</a>
													
												</div>
												<div class="time">
													<i class="fa fa-clock-o"></i>
													5 hours ago
												</div>
											  </div>
											  <div class="feed-activity clearfix">
												<div>
													<i class="pull-left roundicon fa fa-random btn btn-yellow"></i>
													<a class="user" href="#"> Divine Doe </a>
													made a bitcoin payment.
													<br>
													<a href="#">Check your financials</a>
													
												</div>
												<div class="time">
													<i class="fa fa-clock-o"></i>
													6 hours ago
												</div>
											  </div>
										  </div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; background: rgb(161, 178, 189);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: block; border-radius: 7px; opacity: 0.1; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div>
									   </div>
									</div>
								</div>
									</div>
								</div>
							</div>
							<!-- /NEW ORDERS -->
							<!-- STATISTICS -->
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-6">
										<div class="box border inverse">
											<div class="box-title">
												<h4><i class="fa fa-money"></i>Sales Summary</h4>
												<div class="tools">												
													<a href="javascript:;" class="reload">
														<i class="fa fa-refresh"></i>
													</a>
													<a href="javascript:;" class="remove">
														<i class="fa fa-times"></i>
													</a>
												</div>
											</div>
											<div class="box-body">
												  <div class="sparkline-row">
													<span class="title">Total sales</span>
													<span class="value">$78,273</span>
													<span class="sparkline big" data-color="blue"><canvas width="82" height="40" style="display: inline-block; width: 82px; height: 40px; vertical-align: top;"></canvas></span>
												  </div>
												  <div class="sparkline-row">
													<span class="title">Profit</span>
													<span class="value">$6,543</span>
													<span class="sparkline big" data-color="red"><canvas width="82" height="40" style="display: inline-block; width: 82px; height: 40px; vertical-align: top;"></canvas></span>
												  </div>
												  <div class="sparkline-row">
													<span class="title">Orders</span>
													<span class="value">985</span>
													<span class="sparkline big" data-color="green"><canvas width="82" height="40" style="display: inline-block; width: 82px; height: 40px; vertical-align: top;"></canvas></span>
												  </div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="box border purple">
											<div class="box-title">
												<h4><i class="fa fa-adjust"></i>Distribution Index</h4>
												<div class="tools">
													<a href="javascript:;" class="reload">
														<i class="fa fa-refresh"></i>
													</a>
													<a href="javascript:;" class="remove">
														<i class="fa fa-times"></i>
													</a>
												</div>
											</div>
											<div class="box-body">									
												  <div class="sparkline-row">
													<span class="title">Revenue distribution</span>
													<span class="value"><i class="fa fa-usd"></i> 25674</span>
													<span class="sparklinepie"><canvas width="50" height="50" style="display: inline-block; width: 50px; height: 50px; vertical-align: top;"></canvas></span>
												  </div>
												  <div class="sparkline-row">
													<span class="title">Sales</span>
													<span class="value"><i class="fa fa-money"></i> 19 999,99</span>
													<span class="sparklinepie"><canvas width="50" height="50" style="display: inline-block; width: 50px; height: 50px; vertical-align: top;"></canvas></span>
												  </div>
												  <div class="sparkline-row">
													<span class="title">Employee/ Dept</span>
													<span class="value"><i class="fa fa-user"></i> 645783</span>
													<span class="sparklinepie"><canvas width="50" height="50" style="display: inline-block; width: 50px; height: 50px; vertical-align: top;"></canvas></span>
												  </div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /STATISTICS -->
							<div class="col-md-6">
								<div class="panel panel-default">
									<div class="panel-body">
										<table class="table table-striped table-bordered table-hover">
										 <thead>
											<tr>
											   <th><i class="fa fa-user"></i> Client</th>
											   <th class="hidden-xs"><i class="fa fa-quote-left"></i> Sales Item</th>
											   <th><i class="fa fa-dollar"></i> Amount</th>
											   <th><i class="fa fa-bars"></i> Status</th>
											</tr>
										 </thead>
										 <tbody>
											<tr>
											   <td><a href="#">Fortune 500</a></td>
											   <td class="hidden-xs">Gold Level Virtual Server</td>
											   <td>$ 2310.23</td>
											   <td><span class="label label-success label-sm">Paid</span></td>
											</tr>
											<tr>
											   <td><a href="#">Cisco Inc.</a></td>
											   <td class="hidden-xs">Platinum Level Virtual Server</td>
											   <td>$ 5502.67</td>
											   <td><span class="label label-warning label-sm">Pending</span></td>
											</tr>
											<tr>
											   <td><a href="#">VMWare Ltd.</a></td>
											   <td class="hidden-xs">Hardware Switch</td>
											   <td>$ 3472.54</td>
											   <td><span class="label label-success label-sm">Paid</span></td>
											</tr>
											<tr>
											   <td><a href="#">Wall-Mart Stores</a></td>
											   <td class="hidden-xs">Branding &amp; Marketing</td>
											   <td>$ 6653.25</td>
											   <td><span class="label label-success label-sm">Paid</span></td>
											</tr>
											<tr>
											   <td><a href="#">Exxon Mobil</a></td>
											   <td class="hidden-xs">UX and UI Services</td>
											   <td>$ 45645.45</td>
											   <td><span class="label label-danger label-sm">Overdue</span></td>
											</tr>
											<tr>
											   <td><a href="#">General Electric</a></td>
											   <td class="hidden-xs">Web Designing</td>
											   <td>$ 3432.11</td>
											   <td><span class="label label-warning label-sm">Pending</span></td>
											</tr>
										 </tbody>
									</table>
									</div>
								</div>
							</div>
						</div>
						<!-- /NEW ORDERS & STATISTICS -->
						<!-- CALENDAR & CHAT -->
						<div class="row">
							<!-- CALENDAR -->
							<div class="col-md-6">
								<div class="box border primary">
									<div class="box-title">
										<h4><i class="fa fa-calendar"></i>Calendar</h4>
										<div class="tools">
											<a href="#box-config" data-toggle="modal" class="config">
												<i class="fa fa-cog"></i>
											</a>
											<a href="javascript:;" class="reload">
												<i class="fa fa-refresh"></i>
											</a>
											<a href="javascript:;" class="collapse">
												<i class="fa fa-chevron-up"></i>
											</a>
											<a href="javascript:;" class="remove">
												<i class="fa fa-times"></i>
											</a>
										</div>
									</div>
									<div class="box-body">
										<div id="calendar" class="fc fc-ltr"><table class="fc-header" style="width:100%"><tbody><tr><td class="fc-header-left"><span class="fc-button fc-button-prev fc-state-default fc-corner-left" unselectable="on"><span class="fc-text-arrow">‹</span></span><span class="fc-button fc-button-next fc-state-default fc-corner-right" unselectable="on"><span class="fc-text-arrow">›</span></span><span class="fc-header-space"></span><span class="fc-button fc-button-today fc-state-default fc-corner-left fc-corner-right fc-state-disabled" unselectable="on">today</span></td><td class="fc-header-center"><span class="fc-header-title"><h2>February 2016</h2></span></td><td class="fc-header-right"><span class="fc-button fc-button-month fc-state-default fc-corner-left fc-state-active" unselectable="on">month</span><span class="fc-button fc-button-agendaWeek fc-state-default" unselectable="on">week</span><span class="fc-button fc-button-agendaDay fc-state-default fc-corner-right" unselectable="on">day</span></td></tr></tbody></table><div class="fc-content" style="position: relative;"><div class="fc-view fc-view-month fc-grid" style="position:relative" unselectable="on"><div class="fc-event-container" style="position:absolute;z-index:8;top:0;left:0"><div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 79px; width: 71px; top: 40px; background-color: rgb(112, 175, 196);"><div class="fc-event-inner"><span class="fc-event-title">All Day Event</span></div><div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div></div><div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 155px; width: 299px; top: 227px; background-color: rgb(217, 83, 79);"><div class="fc-event-inner"><span class="fc-event-title">Long Event</span></div><div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div></div><div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 307px; width: 71px; top: 249px; background-color: rgb(252, 215, 106);"><div class="fc-event-inner"><span class="fc-event-time">4p</span><span class="fc-event-title">Repeating Event</span></div><div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div></div><div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 307px; width: 71px; top: 311px; background-color: rgb(94, 135, 176);"><div class="fc-event-inner"><span class="fc-event-time">4p</span><span class="fc-event-title">Repeating Event</span></div><div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div></div><div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 3px; width: 71px; top: 333px; background-color: rgb(168, 188, 123);"><div class="fc-event-inner"><span class="fc-event-time">10:30a</span><span class="fc-event-title">Meeting</span></div><div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div></div><div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 3px; width: 71px; top: 356px; background-color: rgb(217, 83, 79);"><div class="fc-event-inner"><span class="fc-event-time">12p</span><span class="fc-event-title">Lunch</span></div><div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div></div><div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 79px; width: 71px; top: 333px; background-color: rgb(107, 120, 127);"><div class="fc-event-inner"><span class="fc-event-time">7p</span><span class="fc-event-title">Birthday Party</span></div><div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div></div><a href="http://google.com/" class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 3px; width: 147px; top: 311px; background-color: rgb(168, 188, 123);"><div class="fc-event-inner"><span class="fc-event-title">Click for Google</span></div><div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div></a></div><table class="fc-border-separate" style="width:100%" cellspacing="0"><thead><tr class="fc-first fc-last"><th class="fc-day-header fc-sun fc-widget-header fc-first" style="width: 76px;">Sun</th><th class="fc-day-header fc-mon fc-widget-header" style="width: 76px;">Mon</th><th class="fc-day-header fc-tue fc-widget-header" style="width: 76px;">Tue</th><th class="fc-day-header fc-wed fc-widget-header" style="width: 76px;">Wed</th><th class="fc-day-header fc-thu fc-widget-header" style="width: 76px;">Thu</th><th class="fc-day-header fc-fri fc-widget-header" style="width: 76px;">Fri</th><th class="fc-day-header fc-sat fc-widget-header fc-last">Sat</th></tr></thead><tbody><tr class="fc-week fc-first"><td class="fc-day fc-sun fc-widget-content fc-other-month fc-past fc-first" data-date="2016-01-31"><div style="min-height: 62px;"><div class="fc-day-number">31</div><div class="fc-day-content"><div style="position: relative; height: 39px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content fc-past" data-date="2016-02-01"><div><div class="fc-day-number">1</div><div class="fc-day-content"><div style="position: relative; height: 39px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-past" data-date="2016-02-02"><div><div class="fc-day-number">2</div><div class="fc-day-content"><div style="position: relative; height: 39px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-past" data-date="2016-02-03"><div><div class="fc-day-number">3</div><div class="fc-day-content"><div style="position: relative; height: 39px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-past" data-date="2016-02-04"><div><div class="fc-day-number">4</div><div class="fc-day-content"><div style="position: relative; height: 39px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-past" data-date="2016-02-05"><div><div class="fc-day-number">5</div><div class="fc-day-content"><div style="position: relative; height: 39px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-past fc-last" data-date="2016-02-06"><div><div class="fc-day-number">6</div><div class="fc-day-content"><div style="position: relative; height: 39px;">&nbsp;</div></div></div></td></tr><tr class="fc-week"><td class="fc-day fc-sun fc-widget-content fc-past fc-first" data-date="2016-02-07"><div style="min-height: 61px;"><div class="fc-day-number">7</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content fc-past" data-date="2016-02-08"><div><div class="fc-day-number">8</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-past" data-date="2016-02-09"><div><div class="fc-day-number">9</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-past" data-date="2016-02-10"><div><div class="fc-day-number">10</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-past" data-date="2016-02-11"><div><div class="fc-day-number">11</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-past" data-date="2016-02-12"><div><div class="fc-day-number">12</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-past fc-last" data-date="2016-02-13"><div><div class="fc-day-number">13</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td></tr><tr class="fc-week"><td class="fc-day fc-sun fc-widget-content fc-past fc-first" data-date="2016-02-14"><div style="min-height: 61px;"><div class="fc-day-number">14</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content fc-past" data-date="2016-02-15"><div><div class="fc-day-number">15</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-past" data-date="2016-02-16"><div><div class="fc-day-number">16</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-past" data-date="2016-02-17"><div><div class="fc-day-number">17</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-past" data-date="2016-02-18"><div><div class="fc-day-number">18</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-past" data-date="2016-02-19"><div><div class="fc-day-number">19</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-past fc-last" data-date="2016-02-20"><div><div class="fc-day-number">20</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td></tr><tr class="fc-week"><td class="fc-day fc-sun fc-widget-content fc-past fc-first" data-date="2016-02-21"><div style="min-height: 61px;"><div class="fc-day-number">21</div><div class="fc-day-content"><div style="position: relative; height: 62px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content fc-past" data-date="2016-02-22"><div><div class="fc-day-number">22</div><div class="fc-day-content"><div style="position: relative; height: 62px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-past" data-date="2016-02-23"><div><div class="fc-day-number">23</div><div class="fc-day-content"><div style="position: relative; height: 62px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-past" data-date="2016-02-24"><div><div class="fc-day-number">24</div><div class="fc-day-content"><div style="position: relative; height: 62px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-past" data-date="2016-02-25"><div><div class="fc-day-number">25</div><div class="fc-day-content"><div style="position: relative; height: 62px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-past" data-date="2016-02-26"><div><div class="fc-day-number">26</div><div class="fc-day-content"><div style="position: relative; height: 62px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-past fc-last" data-date="2016-02-27"><div><div class="fc-day-number">27</div><div class="fc-day-content"><div style="position: relative; height: 62px;">&nbsp;</div></div></div></td></tr><tr class="fc-week"><td class="fc-day fc-sun fc-widget-content fc-today fc-state-highlight fc-first" data-date="2016-02-28"><div style="min-height: 61px;"><div class="fc-day-number">28</div><div class="fc-day-content"><div style="position: relative; height: 68px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content fc-future" data-date="2016-02-29"><div><div class="fc-day-number">29</div><div class="fc-day-content"><div style="position: relative; height: 68px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-other-month fc-future" data-date="2016-03-01"><div><div class="fc-day-number">1</div><div class="fc-day-content"><div style="position: relative; height: 68px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-other-month fc-future" data-date="2016-03-02"><div><div class="fc-day-number">2</div><div class="fc-day-content"><div style="position: relative; height: 68px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-other-month fc-future" data-date="2016-03-03"><div><div class="fc-day-number">3</div><div class="fc-day-content"><div style="position: relative; height: 68px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-other-month fc-future" data-date="2016-03-04"><div><div class="fc-day-number">4</div><div class="fc-day-content"><div style="position: relative; height: 68px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-other-month fc-future fc-last" data-date="2016-03-05"><div><div class="fc-day-number">5</div><div class="fc-day-content"><div style="position: relative; height: 68px;">&nbsp;</div></div></div></td></tr><tr class="fc-week fc-last"><td class="fc-day fc-sun fc-widget-content fc-other-month fc-future fc-first" data-date="2016-03-06"><div style="min-height: 64px;"><div class="fc-day-number">6</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content fc-other-month fc-future" data-date="2016-03-07"><div><div class="fc-day-number">7</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-other-month fc-future" data-date="2016-03-08"><div><div class="fc-day-number">8</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content fc-other-month fc-future" data-date="2016-03-09"><div><div class="fc-day-number">9</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content fc-other-month fc-future" data-date="2016-03-10"><div><div class="fc-day-number">10</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content fc-other-month fc-future" data-date="2016-03-11"><div><div class="fc-day-number">11</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-other-month fc-future fc-last" data-date="2016-03-12"><div><div class="fc-day-number">12</div><div class="fc-day-content"><div style="position: relative; height: 0px;">&nbsp;</div></div></div></td></tr></tbody></table></div></div></div>
									</div>
								</div>
							</div>
							<!-- /CALENDAR -->
							<!-- CHAT -->
							<div class="col-md-6">
								<!-- BOX -->
								<div class="box border red chat-window">
									<div class="box-title">
										<h4><i class="fa fa-comments"></i>Chat Window</h4>
										<div class="tools">
											<a href="#box-config" data-toggle="modal" class="config">
												<i class="fa fa-cog"></i>
											</a>
											<a href="javascript:;" class="reload">
												<i class="fa fa-refresh"></i>
											</a>
											<a href="javascript:;" class="collapse">
												<i class="fa fa-chevron-up"></i>
											</a>
											<a href="javascript:;" class="remove">
												<i class="fa fa-times"></i>
											</a>
										</div>
									</div>
									<div class="box-body big">
										<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 402px;"><div class="scroller" data-height="402px" data-always-visible="1" data-rail-visible="1" style="overflow: hidden; width: auto; height: 402px;">
											<ul class="media-list chat-list">
												<li class="media">
												  <a class="pull-left" href="#">
													<img class="media-object" alt="Generic placeholder image" src="img/chat/headshot1.jpg">
												  </a>
												  <div class="media-body chat-pop">
													<h4 class="media-heading">John Doe <span class="pull-right"><i class="fa fa-clock-o"></i> <abbr class="timeago" title="Oct 9, 2013">Oct 9, 2013</abbr> </span></h4>
													<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
													
												  </div>
												</li>
												<li class="media">
												  <a class="pull-right" href="#">
													<img class="media-object" alt="Generic placeholder image" src="img/chat/headshot2.jpg">
												  </a>
												  <div class="pull-right media-body chat-pop mod">
													<h4 class="media-heading">You <span class="pull-left"><abbr class="timeago" title="Oct 10, 2013">Oct 10, 2013</abbr> <i class="fa fa-clock-o"></i></span></h4>
													Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
												  </div>
												</li>
												<li class="media">
												  <a class="pull-left" href="#">
													<img class="media-object" alt="Generic placeholder image" src="img/chat/headshot3.jpg">
												  </a>
												  <div class="media-body chat-pop">
													<h4 class="media-heading">Tim Row <span class="pull-right"><i class="fa fa-clock-o"></i> <abbr class="timeago" title="Oct 10, 2013">Oct 10, 2013</abbr> </span></h4>
													<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
												  </div>
												</li>
												<li class="media">
												  <a class="pull-left" href="#">
													<img class="media-object" alt="Generic placeholder image" src="img/chat/headshot5.jpg">
												  </a>
												  <div class="media-body chat-pop">
													<h4 class="media-heading">Jenny Doe <span class="pull-right"><i class="fa fa-clock-o"></i> <abbr class="timeago" title="Oct 10, 2013">Oct 10, 2013</abbr> </span></h4>
													<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
												  </div>
												</li>
												<li class="media">
												  <a class="pull-right" href="#">
													<img class="media-object" alt="Generic placeholder image" src="img/chat/headshot2.jpg">
												  </a>
												  <div class="pull-right media-body chat-pop mod">
													<h4 class="media-heading">You <span class="pull-left"><abbr class="timeago" title="Oct 11, 2013">Oct 11, 2013</abbr> <i class="fa fa-clock-o"></i></span></h4>
													Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
												  </div>
												</li>
												<li class="media">
												  <a class="pull-left" href="#">
													<img class="media-object" alt="Generic placeholder image" src="img/chat/headshot4.jpg">
												  </a>
												  <div class="media-body chat-pop">
													<h4 class="media-heading">Jess Doe <span class="pull-right"><i class="fa fa-clock-o"></i> <abbr class="timeago" title="Oct 12, 2013">Oct 12, 2013</abbr> </span></h4>
													<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
												  </div>
												</li>
												<li class="media">
												  <a class="pull-right" href="#">
													<img class="media-object" alt="Generic placeholder image" src="img/chat/headshot2.jpg">
												  </a>
												  <div class="pull-right media-body chat-pop mod">
													<h4 class="media-heading">You <span class="pull-left"><abbr class="timeago" title="Oct 12, 2013">Oct 12, 2013</abbr> <i class="fa fa-clock-o"></i></span></h4>
													Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
												  </div>
												</li>
											</ul>
										</div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 174.896px; background: rgb(161, 178, 189);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: block; border-radius: 7px; opacity: 0.1; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div>
										<div class="divide-20"></div>
										<div class="chat-form">
											<div class="input-group"> 
												<input type="text" class="form-control" placeholder="Type something...really, it works"> 
												<span class="input-group-btn"> <button class="btn btn-primary" type="button"><i class="fa fa-check"></i></button> </span> 
											</div>
										</div>
									</div>
								</div>
								<!-- /BOX -->
							</div>
							<!-- CHAT -->
						</div>
						<!-- /CALENDAR & CHAT -->
						<div class="footer-tools">
							<span class="go-top">
								<i class="fa fa-chevron-up"></i> Top
							</span>
						</div>
