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
        <?php include 'header.php'?>
        <!-- Top Header End -->

        <!-- Start Navbar Area -->
        <?php include'navbar.php'?>
        <!-- End Navbar Area -->

        <!-- Inner Banner -->
        <div class="inner-banner inner-bg2">
            <div class="container">
                <div class="inner-title">
                    <h3>Contact Us</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Contact Us</li>
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

        <!-- Contact Area -->
        <div class="contact-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-widget-right">
                            <h3>Contact Info</h3>
                            <p>Grursus mal suada faci Lorem to the ipsum dolarorit.</p>
                            <ul class="contact-list">
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
                                        <a href="tel: +001-548-159-2492"> +001-548-159-2492</a>
                                    </div>
                                </li>
                                <li>
                                    <i class='bx bxs-envelope'></i>
                                    <div class="content">
                                        <a href="hello@medizo.com">hello@medizo.com</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="contact-form">
                            <h2>Get in Touch</h2>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn">
                                            Send Message
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-shape">
                <img src="assets/img/shape/shape2.png" alt="Images">
            </div>
        </div>
        <!-- Contact Area End -->

        <!-- Map Area -->
        <div class="map-area">
            <div class="container-fluid m-0 p-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.387759539821!2d-74.0094841843446!3d40.709479645706075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a18049ba121%3A0x51924d7e3a9cb794!2zMTIzIFdpbGxpYW0gU3QgIzgwMSwgTmV3IFlvcmssIE5ZIDEwMDM4LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1601377497844!5m2!1sbn!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <!-- Map Area End -->

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