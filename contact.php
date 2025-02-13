<?php
    $res = 0;
    if(isset($_GET['res'])) {
        if($_GET['res'] == 'yes') {
            $res = 1;
        }
        if($_GET['res'] == 'no') {
            $res = 2;
        }
    }
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>eStock Studies</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta property="og:title" content="eStock Studies">
    <meta property="og:type" content="stock, course, commodity stock, trading, option trading">
    <meta property="og:url" content="https://estockstudies.com/">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="eStock Studies">
    <meta property="og:image" itemprop="image" content="https://estockstudies.com/assets/images/paathshaala/thumbnail.png"/>
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="300"/>
    <meta property="og:image:height" content="200"/>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/paathshaala/favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/plugins/all.min.css">
    <link rel="stylesheet" href="assets/css/plugins/flaticon.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.powertip.min.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>

<body>

    <div class="main-wrapper">

        <!-- Header Start  -->
        <div class="section header">
            <div class="header-bottom-section">

                <div class="container-fluid custom-container">
                    <div class="header-bottom-wrap">

                        <div class="header-logo-menu">

                            <!--  Header Logo Start  -->
                            <div class="header-logo">
                                <a href="index.html"><h3>eStock Studies</h3></a>
                            </div>
                            <!--  Header Logo End  -->

                            <!--  Header Menu Start  -->
                            <div class="header-menu d-none d-lg-block">
                                <ul class="main-menu">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li class="active-menu"><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                            <!--  Header Menu End  -->

                        </div>
                        <div class="hero-btn d-none d-sm-block">
                            <a class="btn" href="https://angel-one.onelink.me/Wjgr/r0xzq244">Start a free lecture</a>
                        </div>



                        <div class="header-toggle d-lg-none">
                            <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>


                    </div>
                </div>


            </div>
        </div>
        <!-- Header End -->


        <!-- Offcanvas Start -->
        <div class="offcanvas offcanvas-start" id="offcanvasMenu">

            <div class="offcanvas-header">
                <!-- Offcanvas Logo Start -->
                <div class="offcanvas-logo">
                    <a href="index.html"><h3 style="color: #fff">eStock Studies</h3></a>
                </div>
                <!-- Offcanvas Logo End -->

                <button type="button" class="close-btn" data-bs-dismiss="offcanvas"><i class="flaticon-close"></i></button>

            </div>
            <div class="offcanvas-body">
                <div class="offcanvas-menu">
                    <ul class="main-menu">
                        <li class="active-menu"><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="hero-btn d-none d-sm-block">
                <a class="btn" href="https://angel-one.onelink.me/Wjgr/r0xzq244">Start a free lecture</a>
            </div>
        </div>
        <!-- Offcanvas End -->

        <!-- Page Banner Start -->
        <div class="section page-banner-section" style="background-image: url(assets/images/bg/page-banner.jpg);">
            <div class="shape-1">
                <img src="assets/images/shape/shape-7.png" alt="">
            </div>
            <div class="shape-2">
                <img src="assets/images/shape/shape-1.png" alt="">
            </div>
            <div class="shape-3"></div>
            <div class="container">
                <div class="page-banner-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Page Banner Content Start -->
                            <div class="page-banner text-center">
                                <h2 class="title">Contact Us</h2>
                                <ul class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                </ul>
                            </div>
                            <!-- Page Banner Content End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner End -->
        <div class="section upstudy-counter-section-04 section-padding">
            <div class="container">
                <div class="counter-wrap">
                    <!-- Section Title Start -->
                    <div class="section-title text-center">
                        <?php
                            if($res == 1) {
                                echo '<h2 class="title">Thank You for <span>Contacting Us</span></h2>';
                            }
                            if($res == 2) {
                                echo '<h2 class="title">Fill the complete form <span>Please!</span></h2>';
                            }
                        ?>
                    </div>
                    <!-- Section Title End -->
                    <div class="shape-1"></div>
                    <img class="shape-2" src="assets/images/shape/shape-6.png" alt="">
                </div>
            </div>
        </div>


        <!-- Footer Start -->
        <div class="footer-section section">
            <div class="container">

                <!-- Footer Widget Wrapper Start -->
                <div class="footer-widget-wrap">
                    <div class="row">

                        <div class="col-lg-4 col-sm-6">
                            <!-- Footer Widget Start -->
                            <div class="footer-widget widget-about">
                                <div class="footer-logo">
                                    <h1 style="color: #fff;">eStock Studies</h1>
                                </div>
                                <div class="copyright-social">
                                    <ul class="social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                                
                            </div>
                            <!-- Footer Widget End -->
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <!-- Footer Widget Start -->
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Quick Links</h4>
                                <div class="widget-link">
                                    <ul class="link">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="assets/docs/PrivacyPolicy.pdf">Privacy Policy</a></li>
                                        <li><a href="assets/docs/TermsAndConditions.pdf">Terms & Conditions</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Footer Widget End -->
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <!-- Footer Widget Start -->
                            <div class="footer-widget widget-about">
                                <h4 class="footer-widget-title">Contact Us</h4>
                                
                                <div class="widget-info widget-link">
                                    <div class="info-icon">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <div class="info-text">
                                        <a href="tel:+919867929138">+91 98679 29138</a>
                                    </div>
                                </div>
                                <div class="widget-info">
                                    <div class="info-icon">
                                        <i class="flaticon-email"></i>
                                    </div>
                                    <div class="info-text">
                                        <a href="mailto:info@estockstudies.com"><p>info@estockstudies.com</p></a>
                                    </div>
                                </div>
                                <div class="widget-info">
                                    <div class="info-icon">
                                        <i class="flaticon-pin"></i>
                                    </div>
                                    <div class="info-text">
                                        <p>Office No. 303, 3rd Floor, Nirma Plaza, Makwana Road, Marol, Andheri East, Pin code : 400 059</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer Widget End -->
                        </div>
                    </div>
                </div>
                <!-- Footer Widget Wrapper End -->

                <!-- Footer Copyright Start -->
                <div class="footer-copyright">
                    <div class="copyright-wrapper">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-md-12">
                                <!-- Footer Copyright Text Start -->
                                <div class="copyright-text">
                                    <p>© Copyright 2024 Angel Sales &amp; Services All rights reserved. </p>
                                </div>
                                <!-- Footer Copyright Text End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Copyright End -->

            </div>
        </div>
        <!-- Footer End -->

        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- back to top end -->

    </div>

    <!-- JS
    ============================================ -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/aos.js"></script>
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <script src="assets/js/plugins/jquery.counterup.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/back-to-top.js"></script>
    <script src="assets/js/plugins/jquery.powertip.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->


    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>