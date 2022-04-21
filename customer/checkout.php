<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!-- Flaticon CSS --> 
        <link rel="stylesheet" href="assets/fonts/flaticon.css">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="assets/css/boxicons.min.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="assets/css/boxicons.min.css">
        <!-- Owl Carousel Min CSS --> 
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!-- Nice Select Min CSS --> 
        <link rel="stylesheet" href="assets/css/nice-select.min.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">


        <title>Medizo - Healthcare Clinic & Doctor HTML Template</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>
    <body>
        <!-- Pre Loader -->
        <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="spinner"></div>
                </div>
            </div>
        </div>
        <!-- End Pre Loader -->

        <!-- Top Header Start -->
        <header class="top-header top-header-bg-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-8">
                        <div class="header-left">
                            <div class="header-left-card">
                                <ul>
                                    <li>
                                        <div class="head-icon">
                                            <i class='bx bx-mail-send'></i>
                                        </div>
                                        <a href="mailto:hello@medizo.com">hello@medizo.com</a>
                                    </li>
    
                                    <li>
                                        <div class="head-icon">
                                            <i class='bx bx-time-five'></i>
                                        </div>
                                        <a href="#">Mon - Sat: 8.00 am - 7.00 pm</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="header-right">
                            <div class="top-social-link">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-youtube'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-instagram'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-google-plus'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Top Header End -->

        <!-- Start Navbar Area -->
        <?php include'navbar.php'?>
        <!-- End Navbar Area -->

        <!-- Inner Banner -->
        <div class="inner-banner inner-bg1">
            <div class="container">
                <div class="inner-title">
                    <h3>Checkout</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
            <div class="inner-banner-shape">
                <div class="shape1">
                    <img src="assets/img/inner-banner/inner-banner-shape1.png" alt="Images">
                </div>
                <div class="shape2">
                    <img src="assets/img/inner-banner/inner-banner-shape2.png" alt="Images">
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Checkout Area -->
		<section class="checkout-area pt-100 pb-70">
			<div class="container">
				<form>
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="billing-details">
								<h3 class="title">Billing Details</h3>

								<div class="row">
									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<label>Country <span class="required">*</span></label>
										
											<div class="select-box">
												<select class="form-control">
													<option value="5">United Arab Emirates</option>
													<option value="1">China</option>
													<option value="2">United Kingdom</option>
													<option value="0">Germany</option>
													<option value="3">France</option>
													<option value="4">Japan</option>
												</select>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>First Name <span class="required">*</span></label>
											<input type="text" class="form-control">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Last Name <span class="required">*</span></label>
											<input type="text" class="form-control">
										</div>
									</div>

									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<label>Company Name</label>
											<input type="text" class="form-control">
										</div>
									</div>

									<div class="col-lg-12 col-md-6">
										<div class="form-group">
											<label>Address <span class="required">*</span></label>
											<input type="text" class="form-control">
										</div>
									</div>

									<div class="col-lg-12 col-md-6">
										<div class="form-group">
											<label>Town / City <span class="required">*</span></label>
											<input type="text" class="form-control">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>State / County <span class="required">*</span></label>
											<input type="text" class="form-control">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Postcode / Zip <span class="required">*</span></label>
											<input type="text" class="form-control">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Email Address <span class="required">*</span></label>
											<input type="email" class="form-control">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Phone <span class="required">*</span></label>
											<input type="text" class="form-control">
										</div>
									</div>

									<div class="col-lg-12 col-md-12">
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="create-an-account">
											<label class="form-check-label" for="create-an-account">Create an account?</label>
										</div>
									</div>

									<div class="col-lg-12 col-md-12">
										<div class="form-check">
											<input type="checkbox" class="form-check-input" id="ship-different-address">
											<label class="form-check-label" for="ship-different-address">Ship to a different address?</label>
										</div>
									</div>

									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<textarea name="notes" id="notes" cols="30" rows="5" placeholder="Order Notes" class="form-message"></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-12">
							<div class="order-details">
								<div class="order-table table-responsive">
									<h3>Your Order</h3>
									<table class="table table-bordered">
										<thead>
											<tr>
												<th scope="col">Product Name</th>
												<th scope="col">Total</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td class="product-name">
													<a href="#">Brand New Tyre</a>
												</td>

												<td class="product-total">
													<span class="subtotal-amount">$50.00</span>
												</td>
											</tr>

											<tr>
												<td class="product-name">
													<a href="#">Brake Disk</a>
												</td>

												<td class="product-total">
													<span class="subtotal-amount">$30.00</span>
												</td>
											</tr>

											<tr>
												<td class="product-name">
													<a href="#">	Oil Filter</a>
												</td>

												<td class="product-total">
													<span class="subtotal-amount">$75.00</span>
												</td>
											</tr>

											<tr>
												<td class="product-name">
													<a href="#">	Car Wheels</a>
												</td>

												<td class="product-total">
													<span class="subtotal-amount">$95.00</span>
												</td>
											</tr>

											<tr>
												<td class="order-subtotal">
													<span>Cart Subtotal</span>
												</td>

												<td class="order-subtotal-price">
													<span class="order-subtotal-amount">$250.00</span>
												</td>
											</tr>

											<tr>
												<td class="order-shipping">
													<span>Shipping</span>
												</td>

												<td class="shipping-price">
													<span>$5.00</span>
												</td>
											</tr>

											<tr>
												<td class="total-price">
													<span>Order Total</span>
												</td>

												<td class="product-subtotal">
													<span class="subtotal-amount">$255.00</span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="payment-box">
									<div class="payment-method">
										<p>
											<input type="radio" id="direct-bank-transfer" name="radio-group" checked>
											<label for="direct-bank-transfer">Direct Bank Transfer</label>
                                            Make your payment directly into our bank account. Please use your Order
                                            ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
										</p>
										<p>
											<input type="radio" id="paypal" name="radio-group">
											<label for="paypal">PayPal</label>
										</p>
										<p>
											<input type="radio" id="cash-on-delivery" name="radio-group">
											<label for="cash-on-delivery">Cash On Delivery</label>
										</p>
									</div>
	
									<a href="#" class="order-btn three">
										Place to Order
									</a>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</section>
		<!-- Checkout Area End -->

        <!-- Footer Area -->
        <footer class="footer-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html">
                                    <img src="assets/img/logo.png" alt="Images">
                                </a>
                            </div>
                            <p>Grursus mal suada faci Lorem to the ipsum dolarorit more ame tion more consectetu.</p>
                            <ul class="social-link">
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                                </li> 
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                                </li> 
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                                </li> 
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
                                </li> 
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-youtube'></i></a>
                                </li> 
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget">
                            <h3>Important Link</h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="about.html" target="_blank">
                                        <i class='bx bxs-chevron-right'></i>
                                        About Us
                                    </a>
                                </li> 
                                <li>
                                    <a href="departments.html" target="_blank">
                                        <i class='bx bxs-chevron-right'></i>
                                        Departments
                                    </a>
                                </li> 
                                <li>
                                    <a href="services-1.html" target="_blank">
                                        <i class='bx bxs-chevron-right'></i>
                                        Services
                                    </a>
                                </li> 
                                <li>
                                    <a href="doctors.html" target="_blank">
                                        <i class='bx bxs-chevron-right'></i>
                                        Doctors
                                    </a>
                                </li> 
                                <li>
                                    <a href="case-study.html" target="_blank">
                                        <i class='bx bxs-chevron-right'></i>
                                        Case Study
                                    </a>
                                </li> 
                                <li>
                                    <a href="testimonials.html" target="_blank">
                                        <i class='bx bxs-chevron-right'></i>
                                        Testimonials
                                    </a>
                                </li> 
                                <li>
                                    <a href="contact.html" target="_blank">
                                        <i class='bx bxs-chevron-right'></i>
                                        Contact Us
                                    </a>
                                </li> 
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <h3>Open Hours</h3>
                            <ul class="open-hours-list">
                                <li>
                                    Monday
                                    <span>8:00 am - 9:30 pm</span>
                                </li> 
                                <li>
                                    Tuesday
                                    <span>8:00 am - 9:30 pm</span>
                                </li> 
                                <li>
                                    Wednesday
                                    <span>8:00 am - 9:30 pm</span>
                                </li> 
                                <li>
                                    Thursday
                                    <span>8:00 am - 9:30 pm</span>
                                </li> 
                                <li>
                                    Friday
                                    <span>8:00 am - 9:30 pm</span>
                                </li> 
                                <li>
                                    Saturday
                                    <span>8:00 am - 9:30 pm</span>
                                </li> 
                                <li>
                                    Sunday
                                    <span>8:00 am - 9:30 pm</span>
                                </li> 
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget ps-3">
                            <h3>Contact Info</h3>
                            <p>Grursus mal suada faci Lorem to the ipsum dolarorit.</p>
                            <ul class="footer-contact-list">
                                <li>
                                    <i class='flaticon-pin'></i>
                                    <div class="content">
                                        123 William St Suite 801, New York, USA
                                    </div>
                                </li>
                                <li>
                                    <i class='flaticon-phone-call'></i>
                                    <div class="content">
                                        <a href="tel:+001-548-159-2491">+001-548-159-2491</a>
                                        <a href="tel:+001-548-159-2492"> +001-548-159-2492</a>
                                    </div>
                                </li>
                                <li>
                                    <i class='bx bxs-envelope'></i>
                                    <div class="content">
                                        <a href="mailto:hello@medizo.com">hello@medizo.com</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->

        <!-- Copy-Right Area -->
        <div class="copy-right-area">
            <div class="container">
                <div class="copy-right-text text-center">
                    <p>
                        Copyright ©2021 Medizo. All Rights Reserved by 
                        <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a> 
                    </p>
                </div>
            </div>
        </div>
        <!-- Copy-Right Area End -->


         <!-- Jquery Min JS -->
        <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
        <!-- Bootstrap Min JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- Magnific Popup Min JS -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Owl Carousel Min JS -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Nice Select Min JS -->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!-- Wow Min JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Meanmenu JS -->
        <script src="assets/js/meanmenu.js"></script>
        <!-- Datepicker JS -->
        <script src="assets/js/datepicker.min.js"></script>
        <!-- Ajaxchimp Min JS -->
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Form Validator Min JS -->
        <script src="assets/js/form-validator.min.js"></script>
        <!-- Contact Form JS -->
        <script src="assets/js/contact-form-script.js"></script>
        <!-- Custom JS -->
        <script src="assets/js/custom.js"></script>
        
    </body>
</html>