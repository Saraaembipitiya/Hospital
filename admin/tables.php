<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 05:36:08 GMT -->
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
					<h3 class="block-title">Tables</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index.html">
								<span class="ti-home"></span>
							</a>
						</li>
						<li class="breadcrumb-item">UI Kit</li>
						<li class="breadcrumb-item active">Tables</li>
					</ol>
				</div>
			</div>
			</div>
			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container">

				<div class="row">
					<!--General Table-->
					<div class="col-md-6">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">General Table</h3>
							<p class="margin-l20">Just add the base
								<code>.table</code> to any
								<code>&lt;table&gt;</code>
							</p>
							<div class="table-div">
								<table class="table">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">First</th>
											<th scope="col">Last</th>
											<th scope="col">Handle</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Larry</td>
											<td>the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- /General Table-->

					<!--Dark Table-->
					<div class="col-md-6">
						<div class="widget-area-2 proclinic-box-shadow">
				
							<h3 class="widget-title">Dark Table</h3>
							<p class="margin-l20">Just add the base
								<code>.table .table-dark</code> to any
								<code>&lt;table&gt;</code>
							</p>
							<div class="table-div">
				
								<table class="table table-dark">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">First</th>
											<th scope="col">Last</th>
											<th scope="col">Handle</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Larry</td>
											<td>the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
				
						</div>
					</div>
					<!-- /Dark Table-->
					
					<!-- Hoverable rows Table-->
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Hoverable rows</h3>
							<p class="margin-l20">Just add the base
								<code>.table .table-hover</code> to any
								<code>&lt;table&gt;</code>
							</p>
							<div class="table-div">
								<table class="table table-hover">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">First</th>
											<th scope="col">Last</th>
											<th scope="col">Handle</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
				
						</div>
					</div>
					<!-- /Hoverable rows Table-->

					<!-- Responsive Table-->
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Responsive Table</h3>
							<p class="margin-l20">use
								<code>.table-responsive</code> for horizontally scrolling tables.</p>
							<div class="table-div">
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">Heading</th>
												<th scope="col">Heading</th>
												<th scope="col">Heading</th>
												<th scope="col">Heading</th>
												<th scope="col">Heading</th>
												<th scope="col">Heading</th>
												<th scope="col">Heading</th>
												<th scope="col">Heading</th>
												<th scope="col">Heading</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
												<td>Cell</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
				
						</div>
					</div>
					<!-- /Responsive Table-->
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
	<!-- Custom Script-->
	<script src="js/custom.js"></script>
</body>


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 05:36:08 GMT -->
</html>
