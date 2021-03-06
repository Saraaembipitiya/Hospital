<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/progress-bars.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 05:36:02 GMT -->
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
					<h3 class="block-title">Progress Bars</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index.html">
								<span class="ti-home"></span>
							</a>
						</li>
						<li class="breadcrumb-item">UI Kit</li>
						<li class="breadcrumb-item active">Progress Bars</li>
					</ol>
				</div>
			</div>
			</div>
			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container">	
				<div class="row">
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow">
							<!-- Process Bars Set -->
							<h3 class="widget-title">Progress Bars</h3>
							<p class="margin-l20">Here are the well customized progress bars. Add <code>.progress</code> to element and add <code>.progress-bar</code> to the inside element.</p>
							<div class="progress-bar-div">
								<span>Project one</span>
								<div class="progress">
									<div class="progress-bar width-pb10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<span>Project Two</span>
								<div class="progress">
									<div class="progress-bar bg-success width-pb25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<span>Project Three</span>
								<div class="progress">
									<div class="progress-bar bg-info width-pb50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<span>Project Four</span>
								<div class="progress">
									<div class="progress-bar bg-warning width-pb75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<span>Project Five</span>
								<div class="progress">
									<div class="progress-bar bg-danger width-pb100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<!-- /Process Bars Set -->
							</div>
							<div class="widget-area-2 proclinic-box-shadow">
							<!-- Process Bars Set -->
							<h3 class="widget-title">Labels</h3>
							<p class="margin-l20">labeled progress bar.</p>
							<div class="progress-bar-div">
								<div class="progress">
									<div class="progress-bar width-pb25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
								</div>
							</div>
							<!-- /Process Bars Set -->
							</div>
							<div class="widget-area-2 proclinic-box-shadow">
							<!-- Process Bars Set -->
							<h3 class="widget-title">Height</h3>
							<p class="margin-l20">we can give height to progress bars.</p>
							<div class="progress-bar-div">
								<div class="progress height-pb1">
									<div class="progress-bar width-pb25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress height-pb20">
									<div class="progress-bar width-pb25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<!-- /Process Bars Set -->	
							</div>
							<div class="widget-area-2 proclinic-box-shadow">
							<!-- Process Bars Set -->
							<h3 class="widget-title">Backgrounds</h3>
							<p class="margin-l20">we can give Background color by adding <code>.bg-success, .bg-info, .bg-warning, .bg-danger</code>.</p>
							<div class="progress-bar-div">
								<div class="progress">
									<div class="progress-bar bg-success width-pb25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress">
									<div class="progress-bar bg-info width-pb50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress">
									<div class="progress-bar bg-warning width-pb75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress">
									<div class="progress-bar bg-danger width-pb100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<!-- /Process Bars Set -->	
							</div>
							<div class="widget-area-2 proclinic-box-shadow">	
							<!-- Process Bars Set -->
							<h3 class="widget-title">Multiple bars</h3>
							<p class="margin-l20">we can give multiple background color to same progress bar by adding <code>.bg-success, .bg-info, .bg-warning, .bg-danger</code> and spilt values to each <code>.progress-bar</code>.</p>
							<div class="progress-bar-div">
								<div class="progress">
									<div class="progress-bar width-pb15" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar bg-success width-pb30" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
									<div class="progress-bar bg-info width-pb25" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<!-- /Process Bars Set -->	
							</div>
							<div class="widget-area-2 proclinic-box-shadow">	
							<!-- Process Bars Set -->
							<h3 class="widget-title">Striped</h3>
							<p class="margin-l20">just add <code>.progress-bar-striped</code> to any <code>progress-bar</code>.</p>
							<div class="progress-bar-div">
								<div class="progress">
									<div class="progress-bar progress-bar-striped width-pb10" role="progressbar" aria-valuenow="10" aria-valuemin="0"
									 aria-valuemax="100"></div>
								</div>
								<div class="progress">
									<div class="progress-bar progress-bar-striped bg-success width-pb25" role="progressbar" aria-valuenow="25" aria-valuemin="0"
									 aria-valuemax="100"></div>
								</div>
								<div class="progress">
									<div class="progress-bar progress-bar-striped bg-info width-pb50" role="progressbar" aria-valuenow="50" aria-valuemin="0"
									 aria-valuemax="100"></div>
								</div>
								<div class="progress">
									<div class="progress-bar progress-bar-striped bg-warning width-pb75" role="progressbar" aria-valuenow="75" aria-valuemin="0"
									 aria-valuemax="100"></div>
								</div>
								<div class="progress">
									<div class="progress-bar progress-bar-striped bg-danger width-pb100" role="progressbar" aria-valuenow="100" aria-valuemin="0"
									 aria-valuemax="100"></div>
								</div>
							</div>
							<!-- /Process Bars Set -->
							</div>
							<div class="widget-area-2 proclinic-box-shadow">	
							<!-- Process Bars Set -->
							<h3 class="widget-title">Animated stripes</h3>
							<p class="margin-l20">just add <code>.progress-bar-striped</code> and <code>.progress-bar-animated</code> to any <code>progress-bar</code>.</p>
							<div class="progress-bar-div">
								<div class="progress">
									<div class="progress-bar progress-bar-striped progress-bar-animated width-pb75" role="progressbar" aria-valuenow="75" aria-valuemin="0"
									 aria-valuemax="100"></div>
								</div>
							</div>
							<!-- /Process Bars Set -->
						</div>
					</div>
	
				</div>
	
			</div>
			<!-- /Main Content -->
			<!--Copy Rights-->
			<div class="container">
				<div class="d-sm-flex justify-content-center">
				  <span class="text-muted text-center d-block d-sm-inline-block">Copyright ?? 2018 <a href="http://www.konnectplugins.com/" target="_blank">konnectcode</a>. All rights reserved.</span>
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


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/progress-bars.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 05:36:02 GMT -->
</html>
