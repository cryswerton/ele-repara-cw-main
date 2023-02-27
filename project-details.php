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
        <?php include "common/mobile-menu.php"; ?>
        <!-- End Mobile Menu -->


        <!-- Page Title -->
        <section class="page-title centred">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image: url(http://elerepara.pt/assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>House Wiring Repair</h2>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Project Details 1</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- project-details -->
        <section class="project-details p_relative">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="project-sidebar mr_20">
                            <div class="text">
                                <h3>Project Info</h3>
                                <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                            </div>
                            <ul class="project-info clearfix">
                                <li><span>Client:</span>Robert Downey</li>
                                <li><span>Date:</span>November, 2021</li>
                                <li><span>Category:</span><a href="product-details.php">Business</a> , <a href="project-details.php">Invest</a></li>
                                <li class="social-links"><span>Social:</span><a href="project-details.php"><i class="fab fa-facebook-f"></i></a><a href="project-details.php"><i class="fab fa-twitter"></i></a><a href="product-details.php"><i class="fab fa-pinterest-p"></i></a><a href="product-details.php"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="project-details-content ml_50">
                            <div class="content-one">
                                <figure class="image-box"><img src="http://elerepara.pt/assets/images/project/project-18.jpg" alt=""></figure>
                                <div class="text">
                                    <h3>Project Discription</h3>
                                    <p>Exercitation ullamco laboris nisi ut aliquip ex commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur. excepteur sint occae cat cupidatat non proident sunt in culpa officia deseunt molit anim est laborum Sed perspiciatis unde omnis iste natus error sit voluptatem acusantium dolore mque laudantium, totam rem aperiam eaque.</p>
                                    <p>Abodit ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conse quuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                            </div>
                            <div class="content-two">
                                <div class="image-box">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                            <figure class="image"><img src="http://elerepara.pt/assets/images/project/project-19.jpg" alt=""></figure>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                            <figure class="image"><img src="http://elerepara.pt/assets/images/project/project-20.jpg" alt=""></figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="text">
                                    <h3>Project Challenges</h3>
                                    <p>Exercitation ullamco laboris nisi ut aliquip ex commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur. excepteur sint occae cat cupidatat non proident sunt in culpa officia deseunt molit anim est laborum Sed perspiciatis unde omnis iste natus error sit voluptatem acusantium dolore mque laudantium, totam rem aperiam eaque.</p>
                                    <p>Abodit ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conse quuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                    <ul class="list-style-one clearfix">
                                        <li>Emergency power solutions</li>
                                        <li>Full-service electrical layout</li>
                                        <li>Rapid response times</li>
                                    </ul>
                                    <p>Aliquip ex commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur. excepteur sint occae cat cupidatat non proident sunt in culpa officia deseunt molit anim est laborum Sed perspiciatis unde omnis iste natus error sit voluptatem acusantium.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-btn clearfix">
                    <div class="prev-btn pull-left">
                        <h6><a href="product-details.php"><i class="far fa-angle-left"></i>Prev Project</a></h6>
                    </div>
                    <div class="next-btn pull-right">
                        <h6><a href="product-details.php">Next Project<i class="far fa-angle-right"></i></a></h6>
                    </div>
                </div>
            </div>
        </section>
        <!-- project-details end -->


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
