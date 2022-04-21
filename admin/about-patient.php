<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/about-patient.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 05:35:50 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ProClinic-Bootstrap4 Hospital Admin</title>
	<!-- Fav  Icon Link -->
	<link rel="shortcut icon" type="image/png" href="images/fav.png">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- themify icons CSS -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Animations CSS -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/green.css" id="style_theme">
	<link rel="stylesheet" href="css/responsive.css">
	<!-- morris charts -->
	<link rel="stylesheet" href="charts/css/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="css/jquery-jvectormap.css">
	<link rel="stylesheet" href="datatable/dataTables.bootstrap4.min.css">

	<script src="js/modernizr.min.js"></script>
</head>

<body>
	<!-- Pre Loader -->
	<div class="loading">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<!--/Pre Loader -->
	<!-- Color Changer -->
	<div class="theme-settings" id="switcher">
		<span class="theme-click">
			<span class="ti-settings"></span>
		</span>
		<span class="theme-color theme-default theme-active" data-color="green"></span>
		<span class="theme-color theme-blue" data-color="blue"></span>
		<span class="theme-color theme-red" data-color="red"></span>
		<span class="theme-color theme-violet" data-color="violet"></span>
		<span class="theme-color theme-yellow" data-color="yellow"></span>
	</div>
	<!-- /Color Changer -->
	<div class="wrapper">
		<!-- Page Content -->
		<div id="content">
				<!-- Top Navigation -->
				<?php include 'nav.php'?>
				<!-- /Top Navigation -->
				<!-- Menu -->
				<?php include 'menu.php'?>
				<!-- /Menu -->
				<!-- Breadcrumb -->
				<!-- Page Title -->
				<div class="container mt-0">
					<div class="row breadcrumb-bar">
				<div class="col-md-6">
					<h3 class="block-title">Patient Details</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">						
						<li class="breadcrumb-item">
							<a href="index.html">
								<span class="ti-home"></span>
							</a>
                        </li>
                        <li class="breadcrumb-item">Patients</li>
						<li class="breadcrumb-item active">Patient Details</li>
					</ol>
				</div>
			</div>
			</div>
			<!-- /Page Title -->

			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container">

				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-6">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Patient Details</h3>
							<div class="table-responsive">
								<table class="table table-bordered">
									<tbody>
										<tr>											
											<td><strong>Name</strong></td>
											<td>Daniel Smith</td>
										</tr>
										<tr>
											<td><strong>Date Of Birth</strong> </td>
											<td>26-10-1989</td>
										</tr>
										<tr>
											<td><strong>Gender</strong></td>
											<td>Male</td>
										</tr>
										<tr>
											<td><strong>Address</strong></td>
											<td>Koramangala 
                                                Banglore, India</td>
										</tr>
										<tr>
											<td><strong>Phone </strong></td>
											<td>+91 11111 11111</td>
										</tr>
										<tr>
											<td><strong>Email</strong></td>
											<td>your@email.com</td>
                                        </tr>									
									</tbody>
								</table>
							</div>
							
								<!--Export links-->
								<nav aria-label="Page navigation example">
									<ul class="pagination justify-content-center export-pagination">
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-download"></span> csv</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-printer"></span>  print</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-align-justify"></span> Excel</a>
										</li>
									</ul>
								</nav>
								<!-- /Export links-->
                            <button type="button" class="btn btn-success mb-3"><span class="ti-pencil-alt"></span> Edit Patient</button>
                            <button type="button" class="btn btn-danger mb-3"><span class="ti-trash"></span> Delete Patient</button>
                            <button type="button" class="btn btn-info mb-3"><span class="ti-arrow-down"></span> Download File</button>
						</div>
					</div>
                    <!-- /Widget Item -->
                    <!-- Widget Item -->
					<div class="col-md-6">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Patient Visits</h3>
							<div class="table-responsive">
								<table class="table table-bordered table-striped">
									<thead>
										<tr>										
											<th>Doctor Name</th>
											<th>Cost</th>
											<th>Visit Date</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<?php
										include 'db.php';
										
										
										?>
										<tr>											
											<td>Manoj Kumar</td>
											<td>$30</td>
											<td>12-03-2018</td>
											<td>Resheduled</td>
										</tr>
										<tr>
											<td>Riya </td>
											<td>$26</td>
											<td>12-10-2018</td>
											<td>Operation</td>
										</tr>
										<tr>
											<td>Paul</td>
											<td>$46</td>
											<td>45-10-2018</td>
											<td>Fever</td>
										</tr>
										<tr>
											<td>Manoj Kumar</td>
											<td>$30</td>
											<td>12-03-2018</td>
											<td>Ortho</td>
										</tr>
										<tr>
											<td>Riya </td>
											<td>26</td>
											<td>12-10-2018</td>
											<td>General Check-up</td>
										</tr>
										<tr>
											<td>Paul</td>
											<td>46</td>
											<td>45-10-2018</td>
											<td>Injury</td>
										</tr>										
									</tbody>
								</table>
								
								<!--Export links-->
								<nav aria-label="Page navigation example">
									<ul class="pagination justify-content-center export-pagination">
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-download"></span> csv</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-printer"></span>  print</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-align-justify"></span> Excel</a>
										</li>
									</ul>
								</nav>
								<!-- /Export links-->
							</div>
						</div>
					</div>
                    <!-- /Widget Item -->
                     <!-- Widget Item -->
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Patient Payment Transactions</h3>
							<div class="table-responsive">
								<table class="table table-bordered table-striped">
									<thead>
										<tr>										
											<th>Date</th>
											<th>Cost</th>
											<th>Discount</th>
											<th>Payment Type</th>
											<th>Invoive</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>											
											<td>12-03-2018</td>
											<td>$300</td>
											<td>15%</td>
											<td>Check</td>
											<td><button type="button" class="btn btn-outline-info mb-0"><span class="ti-arrow-down"></span> Invoice</button></td>
											<td><span class="badge badge-warning">Pending</span></td>
                                        </tr>
                                        <tr>											
											<td>12-03-2018</td>
											<td>$130</td>
											<td>5%</td>
											<td>Credit Card</td>
											<td><button type="button" class="btn btn-outline-info mb-0"><span class="ti-arrow-down"></span> Invoice</button></td>
											<td><span class="badge badge-success">Completed</span></td>
                                        </tr>
                                        <tr>											
											<td>12-03-2018</td>
											<td>$30</td>
											<td>5%</td>
											<td>Credit Card</td>
											<td><button type="button" class="btn btn-outline-info mb-0"><span class="ti-arrow-down"></span> Invoice</button></td>
											<td><span class="badge badge-danger">Cancelled</span></td>
                                        </tr>
                                        <tr>											
											<td>12-03-2018</td>
											<td>$30</td>
											<td>5%</td>
											<td>Cash</td>
											<td><button type="button" class="btn btn-outline-info mb-0"><span class="ti-arrow-down"></span> Invoice</button></td>
											<td><span class="badge badge-success">Completed</span></td>
                                        </tr>
                                        <tr>											
											<td>12-03-2018</td>
											<td>$30</td>
											<td>5%</td>
											<td>Credit Card</td>
											<td><button type="button" class="btn btn-outline-info mb-0"><span class="ti-arrow-down"></span> Invoice</button></td>
											<td><span class="badge badge-success">Completed</span></td>
                                        </tr>
                                        <tr>											
											<td>12-03-2018</td>
											<td>$30</td>
											<td>5%</td>
											<td>Insurance</td>
											<td><button type="button" class="btn btn-outline-info mb-0"><span class="ti-arrow-down"></span> Invoice</button></td>
											<td><span class="badge badge-success">Completed</span></td>
                                        </tr>
                                        <tr>											
											<td>12-03-2018</td>
											<td>$30</td>
											<td>5%</td>
											<td>Credit Card</td>
											<td><button type="button" class="btn btn-outline-info mb-0"><span class="ti-arrow-down"></span> Invoice</button></td>
											<td><span class="badge badge-success">Completed</span></td>
										</tr>									
									</tbody>
								</table>
								
								<!--Export links-->
								<nav aria-label="Page navigation example">
									<ul class="pagination justify-content-center export-pagination">
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-download"></span> csv</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-printer"></span>  print</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-align-justify"></span> Excel</a>
										</li>
									</ul>
								</nav>
								<!-- /Export links-->
							</div>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
			</div>
			<!-- /Main Content -->
			<!--Copy Rights-->
			<div class="container">
				<div class="d-sm-flex justify-content-center">
				  <span class="text-muted text-center d-block d-sm-inline-block">Copyright © 2018 <a href="http://www.konnectplugins.com/" target="_blank">konnectcode</a>. All rights reserved.</span>
				</div>
			</div>
			<!-- /Copy Rights-->
		</div>
		<!-- /Page Content -->
	</div>
	<!-- Back to Top -->
	<a id="back-to-top" href="#" class="back-to-top">
		<span class="ti-angle-up"></span>
	</a>
	<!-- /Back to Top -->
	<!-- Jquery Library-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Popper Library-->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap Library-->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Datatable  -->
	<script src="datatable/jquery.dataTables.min.js"></script>
	<script src="datatable/dataTables.bootstrap4.min.js"></script>
    
	<!-- Custom Script-->
	<script src="js/custom.js"></script>

</body>


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/about-patient.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 05:35:50 GMT -->
</html>