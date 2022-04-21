<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/doctors.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 05:35:50 GMT -->
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
							<h3 class="block-title">Doctors</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">Doctors</li>
								<li class="breadcrumb-item active">All Doctors</li>
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
					<form action="" method="POST" >
    							<input type="text" class="form-control" name="find"/>
    							<button type="submit" name="search" class=
								"btn btn-primary mt-3 mb-0">Search</button>
						</form>
					<div class="col-md-12">
						<form method="POST" action="deleteD.php" >
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Doctors List</h3>
							<div class="table-responsive mb-3">
								
								<table id="" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th class="no-sort">
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="select-all">
													<label class="custom-control-label" for="select-all"></label>
												</div>
											</th>
											<th>Doctor ID</th>
											<th>Doctor Name</th>
											<th>Experience <small>(in Years)</small></th>
											<th>Phone</th>
											<th>Specialization</th>
											<th>Availability</th>
											<th>About</th>

										</tr>
									</thead>
									<tbody>
										<?php
									
										include 'db.php';
										if(!isset($_POST['search'])){
										$sql = 'SELECT * FROM doctor_table';
										}else{
										$search = $_POST['find'];
										$sql = "SELECT * FROM doctor_table WHERE FirstName='$search'";
										}
										
											
										    $data=$db->query($sql);
											if($data){
												while($details = $data->fetch_assoc()){
													echo "<tr>
											<td>
												<div class='custom-control custom-checkbox'>
													<input class='custom-control-input' type='checkbox' id=".$details['DoctorID']." name='check[]' value=".$details['DoctorID'].">
													<label class='custom-control-label' for=".$details['DoctorID']."></label>
												</div>
											
											</td>
											<td>".$details['DoctorID']."</td>
											<td><a href='about-doctor.php?id=".$details['DoctorID']."'>".$details['FirstName']." ".$details['LastName']."</a></td>
											<td>".$details['Experience']."</td>
											<td>".$details['PhoneNumber']."</td>
											<td>".$details['Specialization']."</td>
											<td>
												<span class='badge badge-success'>Available</span>
											</td>
											<td><a href='about-doctor.php'>About</a></td>
											
										</tr>";
												}
												
											}
											
											
											
											?>
										

									</tbody>
									</form>

									 
                                </table>
                                <button type='submit' class='btn btn-primary mt-3 mb-0' name="edit"><span class='ti-pencil-alt'></span> EDIT</button>
								<button type='submit' class='btn btn-danger mt-3 mb-0' name="delete"><span class='ti-trash' name="delete"></span> DELETE</button>
								
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
	<script src="js/custom-datatables.js"></script>
</body>


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/doctors.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 05:35:50 GMT -->
</html>
