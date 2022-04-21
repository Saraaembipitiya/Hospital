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
        <div class="inner-banner inner-bg11">
            <div class="container">
                <div class="inner-title">
                    <h3>Shop</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Shop</li>
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

        <!-- Product Area -->
        <div class="product-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="product-result-count">
                            <p>Showing 1-8 of 14 results</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="product-search-widget">
                            <form class="product-search-form">
                                <input type="search" class="form-control" placeholder="Search...">
                                <button type="submit">
                                    <i class="bx bx-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="product-top-bar-ordering">
                            <select>
                                <option value="1">Default sorting</option>
                                <option value="2">Sort by popularity</option>
                                <option value="0">Sort by average rating</option>
                                <option value="3">Sort by latest</option>
                                <option value="4">Sort by price: low to high</option>
                                <option value="5">Sort by price: high to low</option>
                                <option value="6">Sort by new</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-img">
                                <a href="shop-details.html"><img src="assets/img/product/product1.png" alt="Images"></a>
                                <div class="product-add">
                                    <ul>
                                        <li><a href="#"><i class="flaticon-view"></i></a></li>
                                        <li><a href="#"><i class="flaticon-testing"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h4>Care, Health <del class="price">$450</del></h4>
                                <h3>Remdesivir <span>$300</span></h3>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>

                                <div class="product-btn">
                                    <a href="cart.html" class="add-btn">Add To Cart <i class="flaticon-shopping-cart icon"></i></a>
                                    <a href="wishlist.html" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-img">
                                <a href="shop-details.html"><img src="assets/img/product/product2.png" alt="Images"></a>
                                <div class="product-add">
                                    <ul>
                                        <li><a href="#"><i class="flaticon-view"></i></a></li>
                                        <li><a href="#"><i class="flaticon-testing"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h4>Care, Health <del class="price">$250</del></h4>
                                <h3>Tocilizumab <span>$200</span></h3>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>

                                <div class="product-btn">
                                    <a href="cart.html" class="add-btn">Add To Cart <i class="flaticon-shopping-cart icon"></i></a>
                                    <a href="wishlist.html" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-img">
                                <a href="shop-details.html"><img src="assets/img/product/product3.png" alt="Images"></a>
                                <div class="product-add">
                                    <ul>
                                        <li><a href="#"><i class="flaticon-view"></i></a></li>
                                        <li><a href="#"><i class="flaticon-testing"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h4>Care, Health <del class="price">$150</del></h4>
                                <h3>Dexamethasone <span>$100</span></h3>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>

                                <div class="product-btn">
                                    <a href="cart.html" class="add-btn">Add To Cart <i class="flaticon-shopping-cart icon"></i></a>
                                    <a href="wishlist.html" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-img">
                                <a href="shop-details.html"><img src="assets/img/product/product4.png" alt="Images"></a>
                                <div class="product-add">
                                    <ul>
                                        <li><a href="#"><i class="flaticon-view"></i></a></li>
                                        <li><a href="#"><i class="flaticon-testing"></i></a></li>
                                    </ul>
                                </div>
                                <h3 class="best-sale">Sale</h3>
                            </div>
                            <div class="content">
                                <h4>Care, Health <del class="price">$250</del></h4>
                                <h3>Xeljanz <span>$200</span></h3>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>

                                <div class="product-btn">
                                    <a href="cart.html" class="add-btn">Add To Cart <i class="flaticon-shopping-cart icon"></i></a>
                                    <a href="wishlist.html" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-img">
                                <a href="shop-details.html"><img src="assets/img/product/product5.png" alt="Images"></a>
                                <div class="product-add">
                                    <ul>
                                        <li><a href="#"><i class="flaticon-view"></i></a></li>
                                        <li><a href="#"><i class="flaticon-testing"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h4>Care, Health <del class="price">$250</del></h4>
                                <h3>Jakafi <span>$200</span></h3>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>

                                <div class="product-btn">
                                    <a href="cart.html" class="add-btn">Add To Cart <i class="flaticon-shopping-cart icon"></i></a>
                                    <a href="wishlist.html" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-img">
                                <a href="shop-details.html"><img src="assets/img/product/product6.png" alt="Images"></a>
                                <div class="product-add">
                                    <ul>
                                        <li><a href="#"><i class="flaticon-view"></i></a></li>
                                        <li><a href="#"><i class="flaticon-testing"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h4>Care, Health <del class="price">$95</del></h4>
                                <h3>Olumiant <span>$90</span></h3>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>

                                <div class="product-btn">
                                    <a href="cart.html" class="add-btn">Add To Cart <i class="flaticon-shopping-cart icon"></i></a>
                                    <a href="wishlist.html" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-img">
                                <a href="shop-details.html"><img src="assets/img/product/product7.png" alt="Images"></a>
                                <div class="product-add">
                                    <ul>
                                        <li><a href="#"><i class="flaticon-view"></i></a></li>
                                        <li><a href="#"><i class="flaticon-testing"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h4>Care, Health <del class="price">$75</del></h4>
                                <h3>Mavrilimumab <span>$70</span></h3>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>

                                <div class="product-btn">
                                    <a href="cart.html" class="add-btn">Add To Cart <i class="flaticon-shopping-cart icon"></i></a>
                                    <a href="wishlist.html" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="product-card">
                            <div class="product-img">
                                <a href="shop-details.html"><img src="assets/img/product/product8.png" alt="Images"></a>
                                <div class="product-add">
                                    <ul>
                                        <li><a href="#"><i class="flaticon-view"></i></a></li>
                                        <li><a href="#"><i class="flaticon-testing"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h4>Care, Health <del class="price">$115</del></h4>
                                <h3>Tocilizumab <span>$110</span></h3>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>

                                <div class="product-btn">
                                    <a href="cart.html" class="add-btn">Add To Cart <i class="flaticon-shopping-cart icon"></i></a>
                                    <a href="wishlist.html" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                            <a href="#" class="prev page-numbers">
                                <i class="bx bx-chevron-left"></i>
                            </a>

                            <span class="page-numbers current" aria-current="page">1</span>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers">3</a>
                            
                            <a href="#" class="next page-numbers">
                                <i class="bx bx-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End -->

        <!-- Best Product Area -->
        <div class="best-product-area pb-70">
            <div class="container">
                <h2>Best Selling Products</h2>
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="best-product-card">
                            <img src="assets/img/product/product1.png" alt="Images">
                            <div class="content">
                                <h3>Remdesivir</h3>
                                <span><del>450</del>300</span>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                            </div>
                            <a href="#" class="cart-btn">
                                <i class='bx bx-cart'></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="best-product-card">
                            <img src="assets/img/product/product2.png" alt="Images">
                            <div class="content">
                                <h3>Xeljanz</h3>
                                <span><del>150</del>100</span>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                            </div>
                            <a href="#" class="cart-btn">
                                <i class='bx bx-cart'></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="best-product-card">
                            <img src="assets/img/product/product3.png" alt="Images">
                            <div class="content">
                                <h3>Olumiant</h3>
                                <span><del>250</del>200</span>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                            </div>
                            <a href="#" class="cart-btn">
                                <i class='bx bx-cart'></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="best-product-card">
                            <img src="assets/img/product/product4.png" alt="Images">
                            <div class="content">
                                <h3>Tocilizumab</h3>
                                <span><del>350</del>300</span>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                            </div>
                            <a href="#" class="cart-btn">
                                <i class='bx bx-cart'></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="best-product-card">
                            <img src="assets/img/product/product5.png" alt="Images">
                            <div class="content">
                                <h3>Jakafi</h3>
                                <span><del>100</del>90</span>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                            </div>
                            <a href="#" class="cart-btn">
                                <i class='bx bx-cart'></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="best-product-card">
                            <img src="assets/img/product/product6.png" alt="Images">
                            <div class="content">
                                <h3>Olumiant</h3>
                                <span><del>250</del>200</span>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                            </div>
                            <a href="#" class="cart-btn">
                                <i class='bx bx-cart'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Best Product Area End -->

        <!-- Prescription Area -->
        <div class="prescription-area pb-100">
            <div class="container">
                <div class="prescription-bg-3 ptb-100">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="prescription-content">
                                <h2>Give Prescription Get Medicine</h2>
                                <p>Give your prescription online and get the medicine at your door at this corona pandemic. Stay home Stay Safe.</p>
                                <a href="#" class="prescription-btn">
                                    Upload Prescription
                                    <i class="flaticon-upload"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="prescription-shape">
                        <img src="assets/img/prescription/prescription-shape.png" alt="Images">
                    </div>
                </div>
            </div>
        </div>
        <!-- Prescription Area End -->

        <!-- product Slider Area End -->
        <div class="product-slider-area pb-70">
            <div class="container">
                <div class="product-title">
                   <h2>Popular Safety Products</h2>
                </div>
                <div class="product-slider owl-carousel owl-theme">
                    <div class="product-item">
                        <a href="shop-details.html"><img src="assets/img/product/product9.png" alt="Images"></a>
                        <div class="content">
                            <h4>Care, Health</h4>
                            <h3>Surgical Mask <span>$15</span></h3>
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bx-star'></i>
                            </div>
                            <a href="cart.html" class="product-add-btn">
                                Add To Cart <i class="flaticon-shopping-cart icon"></i>
                            </a>
                        </div>
                    </div>

                    <div class="product-item">
                        <a href="shop-details.html"><img src="assets/img/product/product10.png" alt="Images"></a>
                        <div class="content">
                            <h4>Care, Health</h4>
                            <h3>Hand Sanitizer <span>$25</span></h3>
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bx-star'></i>
                            </div>
                            <a href="cart.html" class="product-add-btn">
                                Add To Cart <i class="flaticon-shopping-cart icon"></i>
                            </a>
                        </div>
                    </div>

                    <div class="product-item">
                        <a href="shop-details.html"><img src="assets/img/product/product11.png" alt="Images"></a>
                        <div class="content">
                            <h4>Care, Health</h4>
                            <h3>Face Shield <span>$20</span></h3>
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bx-star'></i>
                            </div>
                            <a href="cart.html" class="product-add-btn">
                                Add To Cart <i class="flaticon-shopping-cart icon"></i>
                            </a>
                        </div>
                    </div>

                    <div class="product-item">
                        <a href="shop-details.html"><img src="assets/img/product/product12.png" alt="Images"></a>
                        <div class="content">
                            <h4>Care, Health</h4>
                            <h3>Hand Gloves <span>$30</span></h3>
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bx-star'></i>
                            </div>
                            <a href="cart.html" class="product-add-btn">
                                Add To Cart <i class="flaticon-shopping-cart icon"></i>
                            </a>
                        </div>
                    </div>

                    <div class="product-item">
                        <a href="shop-details.html"><img src="assets/img/product/product9.png" alt="Images"></a>
                        <div class="content">
                            <h4>Care, Health</h4>
                            <h3>Surgical Mask <span>$15</span></h3>
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bx-star'></i>
                            </div>
                            <a href="cart.html" class="product-add-btn">
                                Add To Cart <i class="flaticon-shopping-cart icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product Slider Area End -->

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
                                        <a href="tel:+001-548-159-2492">+001-548-159-2492</a>
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