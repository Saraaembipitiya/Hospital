<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/add-room.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 05:35:51 GMT -->
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
							<h3 class="block-title">Add Room Allotment</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">Room Allotments</li>
								<li class="breadcrumb-item active">Add Room Allotment</li>
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
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Add Room Allotment</h3>
							<form  method="POST" action="">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="room-number">Room Number</label>
										<input type="text" class="form-control" placeholder="Room Number" name="room_number">
									</div>
									<div class="form-group col-md-6">
										<label for="room-type">Room Type</label>
										<select class="form-control" name="room_type">
											<option>ICU</option>
											<option>General</option>
											<option>AC Room</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="patient-name">Patient Name</label>
										<input type="text" placeholder="Patient Name" class="form-control" name="patient_name">
									</div>
									<div class="form-group col-md-6">
										<label for="allot-date">Allotment Date</label>
										<input type="date" placeholder="Allotment Date" class="form-control" name="allot_date">
									</div>
									<div class="form-group col-md-6">
										<label for="discharge-date">Discharge Date</label>
										<input type="date" placeholder="Discharge Date" class="form-control" name="discharge_date">
									</div>
									<div class="form-group col-md-6">
										<label for="doctor-name">Doctor Name</label>
										<input type="text" placeholder="Doctor Name" class="form-control" name="doctor_name">
									</div>
																		
									<div class="form-check col-md-12 mb-2">
										<div class="text-left">
											<div class="custom-control custom-checkbox">
												<input class="custom-control-input" type="checkbox" id="ex-check-2">
												<label class="custom-control-label" for="ex-check-2">Please Confirm</label>
											</div>
										</div>
									</div>
									<div class="form-group col-md-6 mb-3">
										<button type="submit" class="btn btn-primary btn-lg" name="submit">Allot Room</button>
									</div>
								</div>
							</form>
							<?php
							include 'db.php';

							if(isset($_POST['submit'])){
							$rNum = $_POST['room_number'];
							$rType = $_POST['room_type'];
							$pName = $_POST['patient_name'];
							$alDate = $_POST['allot_date'];
							$disDate = $_POST['discharge_date']; 
							$dName = $_POST['doctor_name'];
							
							$sql = "INSERT INTO add_a_room VALUES('$rNum','$rType','$pName','$alDate','$disDate','$dName')";

						if($db->query($sql)){
							echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>Successfully Done!</strong> Please check in Allotment list
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>';
						}else{
							echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
								<strong>Holy guacamole!</strong> You should check in on some of those fields below.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>';
						}

							
							
							}
							
							
							
							
							
							?>
							<!-- Alerts-->
							
							
							<!-- /Alerts-->
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


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/add-room.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 05:35:51 GMT -->
</html>
