<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/typography.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 05:35:51 GMT -->
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
					<h3 class="block-title">Typography</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index.html">
								<span class="ti-home"></span>
							</a>
						</li>
						<li class="breadcrumb-item">UI Kit</li>
						<li class="breadcrumb-item active">Typography</li>
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
							<!-- Typography Set -->
							<h3 class="widget-title">Headings</h3>
							<p class="margin-l20">Use tags
								<code>h1 to h6</code> for get desire heading.
							</p>
							<div class="table-div">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Heading</th>
											<th>Example</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<p>
													<code class="highlighter-rouge">&lt;h1&gt;&lt;/h1&gt;</code>
												</p>
	
											</td>
											<td>
												<span class="h1">h1. Bootstrap heading</span>
											</td>
										</tr>
										<tr>
											<td>
												<p>
													<code class="highlighter-rouge">&lt;h2&gt;&lt;/h2&gt;</code>
												</p>
	
											</td>
											<td>
												<span class="h2">h2. Bootstrap heading</span>
											</td>
										</tr>
										<tr>
											<td>
												<p>
													<code class="highlighter-rouge">&lt;h3&gt;&lt;/h3&gt;</code>
												</p>
	
											</td>
											<td>
												<span class="h3">h3. Bootstrap heading</span>
											</td>
										</tr>
										<tr>
											<td>
												<p>
													<code class="highlighter-rouge">&lt;h4&gt;&lt;/h4&gt;</code>
												</p>
	
											</td>
											<td>
												<span class="h4">h4. Bootstrap heading</span>
											</td>
										</tr>
										<tr>
											<td>
												<p>
													<code class="highlighter-rouge">&lt;h5&gt;&lt;/h5&gt;</code>
												</p>
	
											</td>
											<td>
												<span class="h5">h5. Bootstrap heading</span>
											</td>
										</tr>
										<tr>
											<td>
												<p>
													<code class="highlighter-rouge">&lt;h6&gt;&lt;/h6&gt;</code>
												</p>
	
											</td>
											<td>
												<span class="h6">h6. Bootstrap heading</span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- /Typography Set -->
						</div>
						<div class="widget-area-2 proclinic-box-shadow">
							<!-- Typography Set -->
							<h3 class="widget-title">Display headings</h3>
							<p class="margin-l20">Use classes
								<code>display-1 - display-4</code> to any
								<code>Tag</code>.
							</p>
							<div class="table-div">
								<div class="bd-example bd-example-type">
									<table class="table table-bordered">
										<tbody>
											<tr>
												<td>
													<span class="display-1">Display 1</span>
												</td>
											</tr>
											<tr>
												<td>
													<span class="display-2">Display 2</span>
												</td>
											</tr>
											<tr>
												<td>
													<span class="display-3">Display 3</span>
												</td>
											</tr>
											<tr>
												<td>
													<span class="display-4">Display 4</span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- /Typography Set -->
							</div>
							<div class="widget-area-2 proclinic-box-shadow">
							<!-- Typography Set -->
							<h3 class="widget-title">Inline text elements</h3>
							<p class="margin-l20">Use
								<code>mark, del, s, ins, u, small, strong & em </code> Inline text elements.
							</p>
							<div class="table-div">
								<p>You can use the mark tag to
									<mark>highlight</mark> text.</p>
								<p>
									<del>This line of text is meant to be treated as deleted text.</del>
								</p>
								<p>
									<s>This line of text is meant to be treated as no longer accurate.</s>
								</p>
								<p>
									<ins>This line of text is meant to be treated as an addition to the document.</ins>
								</p>
								<p>
									<u>This line of text will render as underlined</u>
								</p>
								<p>
									<small>This line of text is meant to be treated as fine print.</small>
								</p>
								<p>
									<strong>This line rendered as bold text.</strong>
								</p>
								<p>
									<em>This line rendered as italicized text.</em>
								</p>
							</div>	
							<!-- /Typography Set -->
	
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


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/typography.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 05:35:51 GMT -->
</html>
