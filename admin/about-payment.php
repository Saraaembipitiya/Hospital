<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/about-payment.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 05:35:51 GMT -->
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
							<h3 class="block-title">Payment Invoice</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">Payments</li>
								<li class="breadcrumb-item active">Payment Invoice</li>
							</ol>
						</div>
					</div>
				</div>
			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container">
				<div class="row">
						<div class="col-md-12">
							<div class="widget-area-2 proclinic-box-shadow pb-3">
								<!-- Invoice Head -->
								<div class="row ">
									<div class="col-sm-6 mb-5">
                                        <img src="images/logo-dark.png" alt="logo hospital" class="img-thumbnail">
                                        <br>    
                                        <br>                                     
										<span>Street Address</span>
										<br>
										<span>[City, ST ZIP Code]</span>
										<br>
										<span class="pr-2">Phone: +00 123456</span>
										<span>Fax: 432 1231 3456</span>
									</div>
									<div class="col-sm-6 text-md-right mb-5">
										<h3>INVOICE</h3>
										<br>
										<br>
										<span>Invoice # [123]</span>
										<br>
										<span>Date: Nov 16, 2018</span>
									</div>
								</div>
								<!-- /Invoice Head -->
								<!-- Invoice Content -->
								<div class="row">
									<div class="col-sm-6 mb-5">
										<h6 class="proclinic-text-color">PATIENT DETAILS:</h6>
										<span><strong>Name:</strong> Daniel</span>
										<br>
										<span><strong>Age:</strong> 20</span>
										<br>
										<span><strong>Address: </strong>60-21/100, Smith street</span>
										<br>
										<span>Banglore, India</span>
										<br>
										<span><strong>Phone:</strong> +91 12345 67890</span>
									</div>
									<div class="col-sm-6 mb-5">
										<span><strong>Patient ID:</strong> PI675</span>
										<br>
										<span><strong>Total Days:</strong> 10</span>
										<br>
										<span><strong>Payment Type:</strong> Credit Card</span>
										<br>
										<span>1234 5678 9012 3456</span>
										<br>
										<span>Paypal</span>
									</div>
									<div class="col-sm-12 mb-2">
										<strong class="proclinic-text-color">Services:</strong>
									</div>
									<div class="col-sm-12">
										<table class="table table-bordered table-striped table-invioce">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Service</th>
													<th scope="col">Unit Cost</th>
													<th scope="col">Discount <small>(%)</small></th>
													<th scope="col">Total</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Chest X-ray</td>
													<td>$ 120</td>
													<td>10</td>
													<td>$ 108</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Injury Operation</td>
													<td>$ 1000</td>
													<td>20</td>
													<td>$ 800</td>
												</tr>
		
											</tbody>
										</table>
									</div>
									<div class="col-sm-4 ml-auto">
										<table class="table table-bordered table-striped">
											<tbody>
												<tr>
													<td>Total</td>
													<td>$ 1200</td>
												</tr>
												<tr>
													<td>Tax</td>
													<td>$ 50</td>
												</tr>
		
												<tr>
													<td>Discount</td>
													<td>$ 212</td>
												</tr>
												<tr>
													<td>
														<strong>GRAND TOTAL</strong>
													</td>
													<td>
														<strong>$ 1038</strong>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
		
									<div class="col-sm-12">
										<div class="border p-4">
											<strong>Note:</strong>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur id illo incidunt, iste libero quisquam? A aut cumque
											fuga fugit iusto libero officia optio quasi, quisquam saepe voluptate voluptatibus voluptatum.
											<br>
											<br>
											<strong class="f12">Signature</strong>
										</div>
									</div>
									<div class="col-sm-12">
                                    <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-center export-pagination mt-3 mb-0">
                                                <li class="page-item">
                                                    <a class="page-link" href="#"><span class="ti-printer"></span>  print</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
                                                </li>
                                            </ul>
										</nav>
									</div>
                                </div>
                                
								<!-- /Invoice Content -->
						</div>
					</div>
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


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/about-payment.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 05:35:51 GMT -->
</html>
