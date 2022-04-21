<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/add-doctor.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 05:35:50 GMT -->
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
							<h3 class="block-title">Add Doctor</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">Doctors</li>
								<li class="breadcrumb-item active">Add Doctor</li>
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
							<h3 class="widget-title">Add Doctor</h3>
							<form  action="" method="post"  enctype="multipart/form-data">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="Doctor-name">First Name</label>
										<input type="text" class="form-control" placeholder="Doctor name" id="Doctor-name" name="Fname">
									</div>
									<div class="form-group col-md-6">
										<label for="Doctor-name">Last Name</label>
										<input type="text" class="form-control" placeholder="Doctor name" id="Doctor-name" name="Lname">
									</div>
									<div class="form-group col-md-6">
										<label for="dob">Date Of Birth</label>
										<input type="date" placeholder="Date of Birth" class="form-control" id="dob" name="dob">
                                    </div>
                                    <div class="form-group col-md-6">
										<label for="specialization">Specialization</label>
										<input type="text" placeholder="Specialization" class="form-control" id="specialization" name="spec">
									</div>
									<div class="form-group col-md-6">
										<label for="experience">Experience</label>
										<input type="text" placeholder="Experience" class="form-control" id="experience"  name="exp">
									</div>
									<div class="form-group col-md-6">
										<label for="age">Age</label>
										<input type="text" placeholder="Age" class="form-control" id="age"  name="age">
									</div>
									<div class="form-group col-md-6">
										<label for="phone">Phone</label>
										<input type="text" placeholder="Phone" class="form-control" id="phone"  name="phone">
									</div>
									<div class="form-group col-md-6">
										<label for="email">Email</label>
										<input type="email" placeholder="email" class="form-control" id="Email"  name="mail">
									</div>
									<div class="form-group col-md-6">
										<label for="gender">Gender</label>
										<select class="form-control" name="gender">
											<option value='Male'>Male</option>
											<option value='Female'>Female</option>
											<option value='Other'>Other</option>
										</select>
									</div>
									
									<div class="form-group col-md-6">
										<label for="about-doctor">Doctor Details</label>
										<textarea placeholder="Doctor Details" class="form-control" id="about-doctor" rows="3"  name="doctorDetails"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
										<label for="address">Address</label>
										<textarea placeholder="Address" class="form-control" id="address" rows="3" name="address"></textarea>
									</div>
									<div class="form-group col-md-12">
										<label for="file">Image</label>
										<input type="file" class="form-control" name="image">
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
										<button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button>
									</div>
								</div>
							</form>
									<?php
							
							include 'db.php';
							
							
							if(isset($_POST['submit'])){
							$Fname = $_POST['Fname'];
							$Lname = $_POST['Lname'];
							$pNumber = $_POST['phone'];
							$mail = $_POST['mail'];
							
							$gender = $_POST['gender'];
							$doctorDetails = $_POST['doctorDetails'];
							$exp = $_POST['exp'];
							$spec = $_POST['spec'];
							$age = $_POST['age'];
							$dob = $_POST['dob'];
							$address = $_POST['address'];
							$target = "images/".basename($_FILES['image']['name']);
                            $image = $_FILES['image']['name'];
							
							
							$sql = "INSERT INTO doctor_table(FirstName,LastName,PhoneNumber,EmailAddress,Gender,Doctor_Details,Experience,Specialization,Age,DOB,Dimage,DAddress) VALUES ('$Fname','$Lname','$pNumber','$mail','$gender','$doctorDetails','$exp','$spec','$age','$dob','$image','$address')";
							if($db -> query($sql) === true){
								
								echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
								<strong>Successfully Done!</strong> Please Check in doctors list
								<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
									<span aria-hidden='true'>×</span>
								</button>
							</div>";
								$db ->close();
							}else{
								echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
								<strong>Holy guacamole!</strong> You should check in on some of those fields below.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								
								</button>
							</div>'.$db->error;

							}
							if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
								echo "Image upload success";
							}else{
								echo "Image Upload Error";
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


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/add-doctor.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 05:35:50 GMT -->
</html>
