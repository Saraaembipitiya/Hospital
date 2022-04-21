<div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.html" class="logo">
                    <img src="assets/img/logo.png" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/img/logo.jpg" alt="Logo" width="100px">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        Home 
                                        
                                    </a>
                                    
                                </li>
                                <li class="nav-item">
                                    <a href="about.php" class="nav-link">
                                        About
                                    </a>
                                </li>
                                 <li class="nav-item">
                                    <a href="terms-condition.php" class="nav-link">
                                        T & C
                                    </a>
                                 </li>
                               
                                        
                                       
                                         
                                       
                                       
                                       

                                <li class="nav-item">
                                    <a href="doctors.php" class="nav-link">
                                        Doctors 
                                        
                                    </a>
                                   
                                </li>
                                 <?php 
                                if(isset($_SESSION['UserID'])){
                                  echo '<li class="nav-item">
                                  <a href="logout.php" class="nav-link">
                                  Logout
                                  </a>
                                  </li>';
                                   }
                                   ?>
                                


                                
                            

                                     <?php
                                        if(!isset($_SESSION['UserName'])){
                                            echo ' <li class="nav-item">
                                            <a href="appointment.php" class="nav-link">
                                                Appointment
                                            </a>
                                            </li>';


                                        }
                                        
                                        
                                        
                                        ?>
                                         <?php
                                        if(!isset($_SESSION['UserName'])){
                                            echo ' <li class="nav-item">
                                            <a href="sign-in.php" class="nav-link">
                                                Sign In
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="sign-up.php" class="nav-link">
                                                Sign Up
                                            </a>
                                        </li>';


                                        }
                                        
                                        
                                        
                                        ?>
                                         <li class="nav-item">
                                            <a href="privacy-policy.php" class="nav-link">
                                                Privacy Policy
                                            </a>
                                        </li>

                                <li class="nav-item">
                                    <a href="contact.php" class="nav-link">
                                        Contact
                                    </a>
                                </li>
                            </ul>

                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <i class='search-btn bx bx-search'></i>
                                    <i class='close-btn bx bx-x'></i>
                                    <div class="search-overlay search-popup">
                                        <div class='search-box'>
                                            <form class="search-form">
                                                <input class="search-input" name="search" placeholder="Search" type="text">

                                                <button class="search-button" type="submit">
                                                    <i class="bx bx-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <div class="add-cart-btn">
                                        <a href="#" class="cart-btn-icon">
                                            <i class='bx bx-shopping-bag'></i>
                                            <span>0</span>
                                        </a>
                                    </div>	
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="side-nav-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="circle-inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="side-nav-inner">
                            <div class="side-nav justify-content-center align-items-center">
                                <div class="side-item">
                                    <div class="option-item">
                                        <i class='search-btn bx bx-search'></i>
                                        <i class='close-btn bx bx-x'></i>
                                        <div class="search-overlay search-popup">
                                            <div class='search-box'>
                                                <form class="search-form">
                                                    <input class="search-input" name="search" placeholder="Search" type="text">
    
                                                    <button class="search-button" type="submit">
                                                        <i class="bx bx-search"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="option-item">
                                        <div class="add-cart-btn">
                                            <a href="#" class="cart-btn-icon">
                                                <i class='bx bx-shopping-bag'></i>
                                                <span>0</span>
                                            </a>
                                        </div>	
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>