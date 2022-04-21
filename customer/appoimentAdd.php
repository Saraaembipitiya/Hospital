 
 <form action="" method="post">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="patient-name">Patient Name</label>
										<input type="text" class="form-control" placeholder="Patient Name" name="patient-name">
									</div>
									<div class="form-group col-md-6">
										<label for="department">Department</label>
										<select class="form-control" id="department" name="department">
											<option>Neuro</option>
											<option>Ortho</option>
											<option>General</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="doctor-name">Doctor Name</label>
										<input type="text" placeholder="Doctor Name" class="form-control" name="doctor-name">
									</div>
									<div class="form-group col-md-6">
										<label for="appointment-date">Appointment Date</label>
										<input type="date" placeholder="Appointment Date" class="form-control" name="appointment-date">
									</div>
									<div class="form-group col-md-6">
										<label for="time-slot">Time Slot</label>
										<select class="form-control" name="time-slot">
											<option>10AM-11AM</option>
											<option>11AM-12pm</option>
											<option>12PM-01PM</option>
											<option>2PM-3PM</option>
											<option>3PM-4PM</option>
											<option>4PM-5PM</option>
											<option>6PM-7PM</option>
											<option>7PM-8PM</option>
											<option>8PM-9PM</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="token-number">Contact Number</label>
										<input type="text" placeholder="Contact Number" class="form-control" name="contact-number">
									</div>
									<div class="form-group col-md-12">
										<label for="problem">Problem</label>
										<textarea placeholder="Problem" class="form-control"  rows="3" name="problem"></textarea>
									</div>
									
																		
									<div class="form-check col-md-12 mb-2">
										<div class="text-left">
											<div class="custom-control custom-checkbox">
												<input class="custom-control-input" type="checkbox" name="ex-check-2">
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
							
							$patientName = $_POST['patient-name'];
							$department = $_POST['department'];
							$doctorName = $_POST['doctor-name'];
							$appointmentDate = $_POST['appointment-date'];
							$timeSlot = $_POST['time-slot'];
							$contactNumber = $_POST['contact-number'];
							$problem = $_POST['problem'];

							$id =  $_SESSION['UserID'];
							
							
							$sql = "INSERT INTO appointment_table VALUES('NULL','$id','$problem','$timeSlot','$doctorName','$appointmentDate','$department','$contactNumber','$patientName')";
							if($db->query($sql)){
								echo '<div class="alert alert-primary" role="alert">
                                      Success !
                                      </div>';;
							}else{
								echo '<div class="alert alert-primary" role="alert">
                                      faild !
                                      </div>';;
							}

							}

						?>