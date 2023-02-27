<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Easton - php 5 Template Preview</title>

<!-- Fav Icon -->
<link rel="icon" href="http://elerepara.pt/assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/elpath.css" rel="stylesheet">
<link href="assets/css/jquery-ui.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="s" class="letters-loading">
                                s
                            </span>
                            <span data-text-preloader="t" class="letters-loading">
                                t
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                o
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                n
                            </span>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left"><a href="index.php"><img src="http://elerepara.pt/assets/images/logo.png" alt=""></a></figure>
                    <div class="close-search pull-right"><span class="far fa-times"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="index.php">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value="" placeholder="Type your keyword and hit" required >
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- main header -->
        <?php include "common/header.php"; ?>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        < <?php include "common/mobile-menu.php"; ?>
        <!-- End Mobile Menu -->



        <!-- Page Title -->
        <section class="page-title centred">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image: url(http://elerepara.pt/assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Services 1</h2>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Services 1</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- service-style-two -->
        <section class="service-style-two service-page-1 sec-pad">
            <div class="auto-container">
                <div class="sec-title p_relative centred mb_50">
                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9">Serviços</h5>
                    <h2 class="d_block fs_40 lh_50 fw_bold">We are a Full Service Electrical <br />Contractor</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one">
                            <div class="inner-box">
                                <div class="image-box p_relative d_block">
                                    <div class="shape-1 p_absolute l_0 b_0"></div>
                                    <div class="shape-2 p_absolute l_0 b_0"></div>
                                    <figure class="image p_relative d_block"><a href="air-conditioning.php"><img src="http://elerepara.pt/assets/images/service/service-3.jpg" alt=""></a></figure>
                                </div>
                                <div class="lower-content p_relative d_block">
                                    <div class="icon-box p_absolute r_30 w_90 h_90 lh_90 fs_40 b_radius_50 centred"><i class="icon-15"></i></div>
                                    <h3><a href="air-conditioning.php">Air Conditioning</a></h3>
                                    <p>Lorem ipsum dolor amet consectur adicing elit sed.</p>
                                    <div class="link"><a href="air-conditioning.php">Read more<i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one">
                            <div class="inner-box">
                                <div class="image-box p_relative d_block">
                                    <div class="shape-1 p_absolute l_0 b_0"></div>
                                    <div class="shape-2 p_absolute l_0 b_0"></div>
                                    <figure class="image p_relative d_block"><a href="heating-service.php"><img src="http://elerepara.pt/assets/images/service/service-4.jpg" alt=""></a></figure>
                                </div>
                                <div class="lower-content p_relative d_block">
                                    <div class="icon-box p_absolute r_30 w_90 h_90 lh_90 fs_40 b_radius_50 centred"><i class="icon-16"></i></div>
                                    <h3><a href="heating-service.php">Heating Service</a></h3>
                                    <p>Lorem ipsum dolor amet consectur adicing elit sed.</p>
                                    <div class="link"><a href="heating-service.php">Read more<i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one">
                            <div class="inner-box">
                                <div class="image-box p_relative d_block">
                                    <div class="shape-1 p_absolute l_0 b_0"></div>
                                    <div class="shape-2 p_absolute l_0 b_0"></div>
                                    <figure class="image p_relative d_block"><a href="power-outlets.php"><img src="http://elerepara.pt/assets/images/service/service-5.jpg" alt=""></a></figure>
                                </div>
                                <div class="lower-content p_relative d_block">
                                    <div class="icon-box p_absolute r_30 w_90 h_90 lh_90 fs_40 b_radius_50 centred"><i class="icon-17"></i></div>
                                    <h3><a href="power-outlets.php">Eectrical Service</a></h3>
                                    <p>Lorem ipsum dolor amet consectur adicing elit sed.</p>
                                    <div class="link"><a href="power-outlets.php">Read more<i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one">
                            <div class="inner-box">
                                <div class="image-box p_relative d_block">
                                    <div class="shape-1 p_absolute l_0 b_0"></div>
                                    <div class="shape-2 p_absolute l_0 b_0"></div>
                                    <figure class="image p_relative d_block"><a href="security-system.php"><img src="http://elerepara.pt/assets/images/service/service-12.jpg" alt=""></a></figure>
                                </div>
                                <div class="lower-content p_relative d_block">
                                    <div class="icon-box p_absolute r_30 w_90 h_90 lh_90 fs_40 b_radius_50 centred"><i class="icon-18"></i></div>
                                    <h3><a href="security-system.php">Security System</a></h3>
                                    <p>Lorem ipsum dolor amet consectur adicing elit sed.</p>
                                    <div class="link"><a href="security-system.php">Read more<i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one">
                            <div class="inner-box">
                                <div class="image-box p_relative d_block">
                                    <div class="shape-1 p_absolute l_0 b_0"></div>
                                    <div class="shape-2 p_absolute l_0 b_0"></div>
                                    <figure class="image p_relative d_block"><a href="power-outlets.php"><img src="http://elerepara.pt/assets/images/service/service-13.jpg" alt=""></a></figure>
                                </div>
                                <div class="lower-content p_relative d_block">
                                    <div class="icon-box p_absolute r_30 w_90 h_90 lh_90 fs_40 b_radius_50 centred"><i class="icon-19"></i></div>
                                    <h3><a href="power-outlets.php">Power Outlets</a></h3>
                                    <p>Lorem ipsum dolor amet consectur adicing elit sed.</p>
                                    <div class="link"><a href="power-outlets.php">Read more<i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one">
                            <div class="inner-box">
                                <div class="image-box p_relative d_block">
                                    <div class="shape-1 p_absolute l_0 b_0"></div>
                                    <div class="shape-2 p_absolute l_0 b_0"></div>
                                    <figure class="image p_relative d_block"><a href="power-outlets.php"><img src="http://elerepara.pt/assets/images/service/service-14.jpg" alt=""></a></figure>
                                </div>
                                <div class="lower-content p_relative d_block">
                                    <div class="icon-box p_absolute r_30 w_90 h_90 lh_90 fs_40 b_radius_50 centred"><i class="icon-20"></i></div>
                                    <h3><a href="power-outlets.php">Eectrical Service</a></h3>
                                    <p>Lorem ipsum dolor amet consectur adicing elit sed.</p>
                                    <div class="link"><a href="power-outlets.php">Read more<i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-style-two end -->


        <!-- subscribe-section -->
        <section class="subscribe-section p_relative">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                            <div class="text p_relative d_block">
                                <h2>Subscribe to Our Newsletter</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                            <div class="form-inner p_relative d_block">
                                <form action="index.php" method="post">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Your email address" required="">
                                        <button type="submit">Subscribe Now<i class="icon-7"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe-section end -->


        <!-- main-footer -->
        <?php include "common/footer.php"; ?>
        <!-- main-footer end -->



        <!--Scroll to top-->
        <div class="scroll-to-top">
            <div>
                <div class="scroll-top-inner">
                    <div class="scroll-bar">
                        <div class="bar-inner"></div>
                    </div>
                    <div class="scroll-bar-text">Go To Top</div>
                </div>
            </div>
        </div>
        <!-- Scroll to top end -->
        
    </div>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
