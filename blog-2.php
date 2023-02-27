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
<link href="assets/css/nice-select.css" rel="stylesheet">
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
                    <h2>Blog Standard</h2>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Blog Standard</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- sidebar-page-container -->
        <section class="sidebar-page-container pt_120 pb_120">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="blog-standard-content p_relative d_block">
                            <div class="news-block-one">
                                <div class="inner-box p_relative d_block">
                                    <figure class="image-box">
                                        <a href="blog-details.php"><img src="http://elerepara.pt/assets/images/news/news-13.jpg" alt=""></a>
                                        <div class="category"><a href="blog-details.php">Installation</a></div>
                                    </figure>
                                    <div class="lower-content p_relative d_block">
                                        <h3><a href="blog-details.php">The Importance Of The Air Quality.</a></h3>
                                        <ul class="post-info clearfix">
                                            <li><i class="icon-42"></i>10 Oct, 2021</li>
                                            <li><i class="icon-43"></i><a href="blog-details.php">Ashley Bronks</a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                                        <div class="link"><a href="blog-details.php">Read more<i class="icon-7"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-one">
                                <div class="inner-box p_relative d_block">
                                    <figure class="image-box">
                                        <a href="blog-details.php"><img src="http://elerepara.pt/assets/images/news/news-14.jpg" alt=""></a>
                                        <div class="category"><a href="blog-details.php">Installation</a></div>
                                        <div class="video-btn">
                                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="icon-27"></i></a>
                                        </div>
                                    </figure>
                                    <div class="lower-content p_relative d_block">
                                        <h3><a href="blog-details.php">How to Repair Electricity to Car Engine.</a></h3>
                                        <ul class="post-info clearfix">
                                            <li><i class="icon-42"></i>10 Oct, 2021</li>
                                            <li><i class="icon-43"></i><a href="blog-details.php">Ashley Bronks</a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                                        <div class="link"><a href="blog-details.php">Read more<i class="icon-7"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-one">
                                <div class="inner-box p_relative d_block">
                                    <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                                        <figure class="image-box">
                                            <img src="http://elerepara.pt/assets/images/news/news-15.jpg" alt="">
                                            <div class="category"><a href="blog-details.php">Installation</a></div>
                                        </figure>
                                        <figure class="image-box">
                                            <img src="http://elerepara.pt/assets/images/news/news-14.jpg" alt="">
                                            <div class="category"><a href="blog-details.php">Installation</a></div>
                                        </figure>
                                        <figure class="image-box">
                                            <img src="http://elerepara.pt/assets/images/news/news-13.jpg" alt="">
                                            <div class="category"><a href="blog-details.php">Installation</a></div>
                                        </figure>
                                    </div>
                                    <div class="lower-content p_relative d_block">
                                        <h3><a href="blog-details.php">Install Landscape Lighting & Boost Value.</a></h3>
                                        <ul class="post-info clearfix">
                                            <li><i class="icon-42"></i>10 Oct, 2021</li>
                                            <li><i class="icon-43"></i><a href="blog-details.php">Ashley Bronks</a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                                        <div class="link"><a href="blog-details.php">Read more<i class="icon-7"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-one">
                                <div class="inner-box p_relative d_block">
                                    <div class="quote-box">
                                        <div class="icon-box"><i class="icon-31"></i></div>
                                        <p>Lorem ipsum dolor amet con sectur elitadicing elit sed do usmod tempor uincididunt enim minim veniam nostrud.</p>
                                        <h6>Kevin Spacey</h6>
                                    </div>
                                    <div class="lower-content p_relative d_block">
                                        <h3><a href="blog-details.php">The Quote Post</a></h3>
                                        <ul class="post-info clearfix">
                                            <li><i class="icon-42"></i>10 Oct, 2021</li>
                                            <li><i class="icon-43"></i><a href="blog-details.php">Ashley Bronks</a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                                        <div class="link"><a href="blog-details.php">Read more<i class="icon-7"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-block-one">
                                <div class="inner-box p_relative d_block">
                                    <figure class="image-box">
                                        <a href="blog-details.php"><img src="http://elerepara.pt/assets/images/news/news-16.jpg" alt=""></a>
                                        <div class="category"><a href="blog-details.php">Installation</a></div>
                                    </figure>
                                    <div class="lower-content p_relative d_block">
                                        <h3><a href="blog-details.php">Learn Best Basic Electric Safety Rules.</a></h3>
                                        <ul class="post-info clearfix">
                                            <li><i class="icon-42"></i>10 Oct, 2021</li>
                                            <li><i class="icon-43"></i><a href="blog-details.php">Ashley Bronks</a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                                        <div class="link"><a href="blog-details.php">Read more<i class="icon-7"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-wrapper">
                                <ul class="pagination clearfix">
                                    <li><a href="blog-2.php" class="current">1</a></li>
                                    <li><a href="blog-2.php">2</a></li>
                                    <li><a href="blog-2.php">3</a></li>
                                    <li class="dot">...</li>
                                    <li><a href="blog-2.php">9</a></li>
                                    <li><a href="blog-2.php"><i class="fas fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="blog-sidebar ml_20">
                            <div class="sidebar-widget search-widget">
                                <div class="widget-title">
                                    <h4>Search</h4>
                                </div>
                                <form action="blog-2.php" method="post">
                                    <div class="form-group">
                                        <input type="search" name="search-field" placeholder="Search" required="">
                                        <button type="submit"><i class="icon-63"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="sidebar-widget category-widget">
                                <div class="widget-title">
                                    <h4>Categories</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                        <li><a href="blog-details.php"><i class="icon-7"></i>Power Tools</a></li>
                                        <li><a href="blog-details.php"><i class="icon-7"></i>Electrical & Lighting</a></li>
                                        <li><a href="blog-details.php"><i class="icon-7"></i>Measuring Tools</a></li>
                                        <li><a href="blog-details.php"><i class="icon-7"></i>Ware Accessories</a></li>
                                        <li><a href="blog-details.php"><i class="icon-7"></i>Hammer Drills</a></li>
                                        <li><a href="blog-details.php"><i class="icon-7"></i>Screw Driver</a></li>
                                        <li><a href="blog-details.php"><i class="icon-7"></i>Home Appliance</a></li>
                                        <li><a href="blog-details.php"><i class="icon-7"></i>Accessories</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget post-widget">
                                <div class="widget-title">
                                    <h4>Recent Posts</h4>
                                </div>
                                <div class="post-inner">
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.php"><img src="http://elerepara.pt/assets/images/news/post-1.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.php">The Importance Of The Air Quality.</a></h5>
                                        <div class="post-date"><i class="icon-42"></i>Oct 20, 2022</div>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.php"><img src="http://elerepara.pt/assets/images/news/post-2.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.php">Best Basic Electric Safety Rules.</a></h5>
                                        <div class="post-date"><i class="icon-42"></i>Oct 19, 2022</div>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.php"><img src="http://elerepara.pt/assets/images/news/post-3.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.php">Electric Wiring For Home & Office.</a></h5>
                                        <div class="post-date"><i class="icon-42"></i>Oct 18, 2022</div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget category-widget">
                                <div class="widget-title">
                                    <h4>Archives</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                        <li><a href="blog-details.php"><i class="icon-7"></i>November 2016 (3)</a></li>
                                        <li><a href="blog-details.php"><i class="icon-7"></i>December 2017 (8)</a></li>
                                        <li><a href="blog-details.php"><i class="icon-7"></i>January 2018 (2)</a></li>
                                        <li><a href="blog-details.php"><i class="icon-7"></i>February 2019 (10)</a></li>
                                        <li><a href="blog-details.php"><i class="icon-7"></i>March 2020 (2)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget tags-widget">
                                <div class="widget-title">
                                    <h4>Tags</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="tags-list clearfix">
                                        <li><a href="blog-details.php">Electrical</a></li>
                                        <li><a href="blog-details.php">Repairs</a></li>
                                        <li><a href="blog-details.php">Bulb</a></li>
                                        <li><a href="blog-details.php">Commercial</a></li>
                                        <li><a href="blog-details.php">Energy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sidebar-page-container end -->


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
    <script src="assets/js/product-filter.js"></script>
    <script src="assets/js/jquery.bootstrap-touchspin.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
