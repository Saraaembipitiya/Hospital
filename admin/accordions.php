<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/accordions.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 05:35:56 GMT -->
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
							<h3 class="block-title">Accordions</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">UI Kit</li>
								<li class="breadcrumb-item active">Accordions</li>
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
							<!-- Item -->
							<h3 class="widget-title">Collapse</h3>
							<p class="margin-l20">Just add
								<code>class="collapse"</code> to any
								<code>&lt;div&gt;</code>.</p>
							<div class="proclinic-widget">
								<p>
									<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
									 aria-controls="collapseExample">
										Link with href
									</a>
									<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample"
									 aria-expanded="false" aria-controls="collapseExample">
										Button with data-target
									</button>
								</p>
								<div class="collapse" id="collapseExample">
									<div class="card card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim
										keffiyeh helvetica,
										craft beer labore wes anderson cred nesciunt sapiente ea proident.
									</div>
								</div>
							</div>
							<!-- /Item -->
						</div>
						<div class="widget-area-2 proclinic-box-shadow">
							<!-- Item -->
							<h3 class="widget-title">Accordion Dark</h3>
							<p class="margin-l20">Just add
								<code>class="collapse"</code> to any
								<code>&lt;div&gt;</code> and add
								<code>btn</code> with data-target</p>
							<div class="proclinic-widget mb-3">
								<div id="accordion">
									<div class="card">
										<div class="accordion-header" id="headingOne">
											<h5 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												Collapsible Group Item #1
											</h5>
										</div>

										<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
											<div class="card-body">
												<small>pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
													moon officia aute,
													non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
													tempor, sunt
													aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
													helvetica,
													craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
													Leggings
													occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
													accusamus
													labore sustainable VHS.</small>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="accordion-header" id="headingTwo">
											<h5 class="mb-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												Collapsible Group Item #2
											</h5>
										</div>
										<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
											<div class="card-body">
												<small>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
													wolf moon officia
													aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
													moon tempor,
													sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
													helvetica,
													craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
													Leggings
													occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
													accusamus
													labore sustainable VHS.</small>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="accordion-header" id="headingThree">
											<h5 class="mb-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												Collapsible Group Item #3
											</h5>
										</div>
										<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
											<div class="card-body">
												<small>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
													wolf moon officia
													aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
													moon tempor,
													sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
													helvetica,
													craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
													Leggings
													occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
													accusamus
													labore sustainable VHS.</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Item -->

						</div>
						<div class="widget-area-2 proclinic-box-shadow">
							<!-- Item -->
							<h3 class="widget-title">Accordion Light</h3>
							<p class="margin-l20">Just add
								<code>class="collapse"</code> to any
								<code>&lt;div&gt;</code> and add
								<code>btn</code> with data-target</p>
							<div class="proclinic-widget mb-3">
								<div id="accordion_light">
									<div class="card">
										<div class="accordion-header" id="heading1">
											<h5 class="mb-0" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
												Collapsible Group Item #1
											</h5>
										</div>

										<div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion_light">
											<div class="card-body">
												<small>pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
													moon officia aute,
													non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
													tempor, sunt
													aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
													helvetica,
													craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
													Leggings
													occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
													accusamus
													labore sustainable VHS.</small>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="accordion-header" id="heading2">
											<h5 class="mb-0" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
												Collapsible Group Item #2
											</h5>
										</div>
										<div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion_light">
											<div class="card-body">
												<small>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
													wolf moon officia
													aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
													moon tempor,
													sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
													helvetica,
													craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
													Leggings
													occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
													accusamus
													labore sustainable VHS.</small>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="accordion-header" id="heading3">
											<h5 class="mb-0" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
												Collapsible Group Item #3
											</h5>
										</div>
										<div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion_light">
											<div class="card-body">
												<small>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
													wolf moon officia
													aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
													moon tempor,
													sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
													helvetica,
													craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
													Leggings
													occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
													accusamus
													labore sustainable VHS.</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Item -->
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


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/accordions.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 05:35:56 GMT -->
</html>
