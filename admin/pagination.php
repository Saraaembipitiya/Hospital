<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/pagination.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 05:36:02 GMT -->
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
							<h3 class="block-title">Pagination</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">UI Kit</li>
								<li class="breadcrumb-item active">Pagination</li>
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
							<!-- Pagination Set -->
							<h3 class="widget-title">Pagination</h3>
							<p class="margin-l20">just add <code>nav</code> element and add <code>ul</code> with <code>.pagination</code> and <code>.page-item</code> to each <code>li</code>.</p>
							<div class="proclinic-widget">
								<nav aria-label="Page navigation example">
									<ul class="pagination">
										<li class="page-item">
											<a class="page-link" href="#">Previous</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">1</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">2</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">3</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</nav>
							</div>
							<!-- /Pagination Set -->
							</div>
							<div class="widget-area-2 proclinic-box-shadow">
							<!-- Pagination Set -->
							<h3 class="widget-title">Working with icons</h3>
							<p class="margin-l20">We can add left and right arrow icons to pagination by adding <code>aria-label="Previous"</code> to first and last <code>li</code>.</p>
							<div class="proclinic-widget">
								<nav aria-label="Page navigation example">
									<ul class="pagination">
										<li class="page-item">
											<a class="page-link" href="#" aria-label="Previous">
												<span aria-hidden="true">&laquo;</span>
												<span class="sr-only">Previous</span>
											</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">1</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">2</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">3</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#" aria-label="Next">
												<span aria-hidden="true">&raquo;</span>
												<span class="sr-only">Next</span>
											</a>
										</li>
									</ul>
								</nav>
							</div>
							<!-- /Pagination Set -->
							</div>
							<!-- Pagination Set -->
							<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Disabled and active states</h3>
							<p class="margin-l20">Just add <code>.disabled</code> or <code>active</code> to any <code>li</code> element.</p>
							<div class="proclinic-widget">
								<nav aria-label="...">
									<ul class="pagination">
										<li class="page-item disabled">
											<a class="page-link" href="#" tabindex="-1">Previous</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">1</a>
										</li>
										<li class="page-item active">
											<a class="page-link" href="#">2
												<span class="sr-only">(current)</span>
											</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">3</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</nav>
							</div>
							<!-- /Pagination Set -->
							</div>
							<div class="widget-area-2 proclinic-box-shadow">
							<!-- Pagination Set -->
							<h3 class="widget-title">Sizing</h3>
							<p class="margin-l20">Just add <code>.pagination-lg, .pagination-sm</code> to <code>ul</code> element to get multiple sized pagination.</p>
							<div class="proclinic-widget">
								<nav aria-label="...">
									<ul class="pagination pagination-lg">
										<li class="page-item disabled">
											<a class="page-link" href="#" tabindex="-1">1</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">2</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">3</a>
										</li>
									</ul>
								</nav>
		
								<nav aria-label="...">
									<ul class="pagination pagination-sm">
										<li class="page-item disabled">
											<a class="page-link" href="#" tabindex="-1">1</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">2</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">3</a>
										</li>
									</ul>
								</nav>
							</div>
							<!-- /Pagination Set -->
							</div>
							<div class="widget-area-2 proclinic-box-shadow">
							<!-- Pagination Set -->
							<h3 class="widget-title">Alignment</h3>
							<p class="margin-l20">Just add <code>.justify-content-left, .justify-content-center, justify-content-end</code> to <code>ul</code> element to align pagination.</p>
							<div class="proclinic-widget">
		
								<nav aria-label="Page navigation example">
									<ul class="pagination justify-content-left">
										<li class="page-item disabled">
											<a class="page-link" href="#" tabindex="-1">Previous</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">1</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">2</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">3</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</nav>
		
		
								<nav aria-label="Page navigation example">
									<ul class="pagination justify-content-center">
										<li class="page-item disabled">
											<a class="page-link" href="#" tabindex="-1">Previous</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">1</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">2</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">3</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</nav>
		
		
		
								<nav aria-label="Page navigation example">
									<ul class="pagination justify-content-end">
										<li class="page-item disabled">
											<a class="page-link" href="#" tabindex="-1">Previous</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">1</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">2</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">3</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</nav>
							</div>
							<!-- /Pagination Set -->		
		
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


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/pagination.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 05:36:02 GMT -->
</html>
