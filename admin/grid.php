<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 05:36:02 GMT -->
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
							<h3 class="block-title">Grid</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">UI Kit</li>
								<li class="breadcrumb-item active">Grid</li>
							</ol>
						</div>
					</div>
				</div>
			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-grid proclinic-box-shadow">
							<!-- Grid Item -->
							<h3 class="widget-title">Three Columns</h3>
							<p class="margin-l20">Bootstrap grid system is beatiful and very easy to implement. split <code>.col-sm</code> inside <code>.row</code>.</p>
							<div class="proclinic-widget">
								<div class="row">
									<div class="col-sm">
										One of three columns
									</div>
									<div class="col-sm">
										One of three columns
									</div>
									<div class="col-sm">
										One of three columns
									</div>
								</div>		
							</div>
							<!-- /Grid Item -->
							</div>
							<div class="widget-area-2 proclinic-grid proclinic-box-shadow">
							<!-- Grid Item -->
							<h3 class="widget-title">Equal-width</h3>
							<p class="margin-l20">This grid system automatically split <code>.col</code> eqal width.</p>
							<div class="proclinic-widget">
								<div class="row">
									<div class="col">
										1 of 2
									</div>
									<div class="col">
										2 of 2
									</div>
								</div>
								<div class="row">
									<div class="col">
										1 of 3
									</div>
									<div class="col">
										2 of 3
									</div>
									<div class="col">
										3 of 3
									</div>
								</div>
							</div>
							<!-- /Grid Item -->
							</div>
							<div class="widget-area-2 proclinic-grid proclinic-box-shadow">
							<!-- Grid Item -->
							<h3 class="widget-title">Setting one column width</h3>
							<p class="margin-l20">This grid system automatically adjust <code>.col</code> width.</p>
							<div class="proclinic-widget">
								<div class="row">
									<div class="col">
										1 of 3
									</div>
									<div class="col-6">
										2 of 3 (wider)
									</div>
									<div class="col">
										3 of 3
									</div>
								</div>
								<div class="row">
									<div class="col">
										1 of 3
									</div>
									<div class="col-5">
										2 of 3 (wider)
									</div>
									<div class="col">
										3 of 3
									</div>
								</div>
							</div>
							<!-- /Grid Item -->
							</div>
							<div class="widget-area-2 proclinic-grid proclinic-box-shadow">
							<!-- Grid Item -->
							<h3 class="widget-title">Variable width content</h3>
							<p class="margin-l20">This grid system automatically justify <code>.col</code> width.</p>
							<div class="proclinic-widget">
								<div class="row justify-content-md-center">
									<div class="col col-lg-2">
										1 of 3
									</div>
									<div class="col-md-auto">
										Variable width content
									</div>
									<div class="col col-lg-2">
										3 of 3
									</div>
								</div>
								<div class="row">
									<div class="col">
										1 of 3
									</div>
									<div class="col-md-auto">
										Variable width content
									</div>
									<div class="col col-lg-2">
										3 of 3
									</div>
								</div>
							</div>
							<!-- /Grid Item -->
							</div>
							<div class="widget-area-2 proclinic-grid proclinic-box-shadow">
							<!-- Grid Item -->
							<h3 class="widget-title">Equal-width multi-row</h3>
							<p class="margin-l20">This grid system give equal <code>.col</code> width.</p>
							<div class="proclinic-widget">
								<div class="row">
									<div class="col">col</div>
									<div class="col">col</div>
									<div class="w-100"></div>
									<div class="col">col</div>
									<div class="col">col</div>
								</div>
							</div>
							<!-- /Grid Item -->
							</div>
							<div class="widget-area-2 proclinic-grid proclinic-box-shadow">
							<!-- Grid Item -->
							<h3 class="widget-title">Stacked to horizontal</h3>
							<p class="margin-l20">This grid system Stacked to horizontal</p>
							<div class="proclinic-widget">
								<div class="row">
									<div class="col-sm-8">col-sm-8</div>
									<div class="col-sm-4">col-sm-4</div>
								</div>
								<div class="row">
									<div class="col-sm">col-sm</div>
									<div class="col-sm">col-sm</div>
									<div class="col-sm">col-sm</div>
								</div>
							</div>
							<!-- /Grid Item -->
							</div>
							<div class="widget-area-2 proclinic-grid proclinic-box-shadow">		
							<!-- Grid Item -->
							<h3 class="widget-title">Mix and match</h3>
							<p class="margin-l20">This grid system is mix and match</p>
							<div class="proclinic-widget">
								<!-- Stack the columns on mobile by making one full-width and the other half-width -->
								<div class="row">
									<div class="col-12 col-md-8">.col-12 .col-md-8</div>
									<div class="col-6 col-md-4">.col-6 .col-md-4</div>
								</div>
		
								<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
								<div class="row">
									<div class="col-6 col-md-4">.col-6 .col-md-4</div>
									<div class="col-6 col-md-4">.col-6 .col-md-4</div>
									<div class="col-6 col-md-4">.col-6 .col-md-4</div>
								</div>
		
								<!-- Columns are always 50% wide, on mobile and desktop -->
								<div class="row">
									<div class="col-6">.col-6</div>
									<div class="col-6">.col-6</div>
								</div>
		
							</div>
							<!-- /Grid Item -->
							</div>
							<div class="widget-area-2 proclinic-grid proclinic-box-shadow">
							<!-- Grid Item -->
							<h3 class="widget-title">Vertical alignment</h3>
							<p class="margin-l20">This grid system gives Vertical alignment</p>
							<div class="proclinic-widget">
								<div class="row align-items-start">
									<div class="col">
										One of three columns
									</div>
									<div class="col">
										One of three columns
									</div>
									<div class="col">
										One of three columns
									</div>
								</div>
								<div class="row align-items-center">
									<div class="col">
										One of three columns
									</div>
									<div class="col">
										One of three columns
									</div>
									<div class="col">
										One of three columns
									</div>
								</div>
								<div class="row align-items-end">
									<div class="col">
										One of three columns
									</div>
									<div class="col">
										One of three columns
									</div>
									<div class="col">
										One of three columns
									</div>
								</div>
		
							</div>
							<!-- /Grid Item -->
							</div>
							<div class="widget-area-2 proclinic-grid proclinic-box-shadow">		
							<!-- Grid Item -->		
							<h3 class="widget-title">Horizontal alignment</h3>
							<p class="margin-l20">This grid system gives horizontal alignment.</p>
							<div class="proclinic-widget">
								<div class="row justify-content-start">
									<div class="col-4">
										One of two columns
									</div>
									<div class="col-4">
										One of two columns
									</div>
								</div>
								<div class="row justify-content-center">
									<div class="col-4">
										One of two columns
									</div>
									<div class="col-4">
										One of two columns
									</div>
								</div>
								<div class="row justify-content-end">
									<div class="col-4">
										One of two columns
									</div>
									<div class="col-4">
										One of two columns
									</div>
								</div>
								<div class="row justify-content-around">
									<div class="col-4">
										One of two columns
									</div>
									<div class="col-4">
										One of two columns
									</div>
								</div>
								<div class="row justify-content-between">
									<div class="col-4">
										One of two columns
									</div>
									<div class="col-4">
										One of two columns
									</div>
								</div>
							</div>
							<!-- /Grid Item -->
							</div>
							<div class="widget-area-2 proclinic-grid proclinic-box-shadow">		
							<!-- Grid Item -->		
							<h3 class="widget-title">Column wrapping</h3>
							<p class="margin-l20">This grid system give column wrapping.</p>
							<div class="proclinic-widget">
								<div class="row">
									<div class="col-9">.col-9</div>
									<div class="col-4">.col-4
										<br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</div>
									<div class="col-6">.col-6
										<br>Subsequent columns continue along the new line.</div>
								</div>
							</div>
							<!-- /Grid Item -->
							</div>
							<div class="widget-area-2 proclinic-grid proclinic-box-shadow">
							<!-- Grid Item -->		
							<h3 class="widget-title">Column breaks</h3>
							<p class="margin-l20">This grid system gives column breaks.</p>
							<div class="proclinic-widget mb-3">
								<div class="row">
									<div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
									<div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
		
									<!-- Force next columns to break to new line -->
									<div class="w-100"></div>
		
									<div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
									<div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
								</div>
		
		
								<div class="row">
									<div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
									<div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
		
									<!-- Force next columns to break to new line at md breakpoint and up -->
									<div class="w-100 d-none d-md-block"></div>
		
									<div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
									<div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
								</div>
							</div>
							<!-- /Grid Item -->
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


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 05:36:02 GMT -->
</html>
