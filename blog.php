<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Easton - php 5 Template Preview</title>

<!-- Fav Icon -->
<link rel="icon" href="http://elerepara.pt/assets/images/favicoon.png" type="image/x-icon">

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
                                E
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                l
                            </span>
                            <span data-text-preloader="s" class="letters-loading">
                                e
                            </span>
                            <br>
                            <br>
                            <span data-text-preloader="t" class="letters-loading">
                                 
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                r
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                p
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                               a
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                r
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                a
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
                    <figure class="logo-box pull-left"><a href="index.php"><img src="http://elerepara.pt/assets/images/logo-4.png" alt=""></a></figure>
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
                    <h2>Blog Grid</h2>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Blog Grid</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- news-section -->
        <section class="news-section alternat-2 blog-grid p_relative">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <figure class="image-box">
                                    <a href="blog-details.php"><img src="http://elerepara.pt/assets/images/news/news-1.jpg" alt=""></a>
                                    <div class="category"><a href="blog-details.php">Installation</a></div>
                                </figure>
                                <div class="lower-content p_relative d_block">
                                    <h3><a href="blog-details.php">The Importance Of The Air Quality.</a></h3>
                                    <ul class="post-info clearfix">
                                        <li><i class="icon-42"></i>10 Oct, 2021</li>
                                        <li><i class="icon-43"></i><a href="blog-details.php">Ashley Bronks</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet consecte adipisicing sed eiusmod tempor incid idunt labore dolore.</p>
                                    <div class="link"><a href="blog-details.php">Read more<i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <figure class="image-box">
                                    <a href="blog-details.php"><img src="http://elerepara.pt/assets/images/news/news-2.jpg" alt=""></a>
                                    <div class="category"><a href="blog-details.php">Installation</a></div>
                                </figure>
                                <div class="lower-content p_relative d_block">
                                    <h3><a href="blog-details.php">How to Repair Electricity to Car Engine.</a></h3>
                                    <ul class="post-info clearfix">
                                        <li><i class="icon-42"></i>09 Oct, 2021</li>
                                        <li><i class="icon-43"></i><a href="blog-details.php">Ashley Bronks</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet consecte adipisicing sed eiusmod tempor incid idunt labore dolore.</p>
                                    <div class="link"><a href="blog-details.php">Read more<i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <figure class="image-box">
                                    <a href="blog-details.php"><img src="http://elerepara.pt/assets/images/news/news-3.jpg" alt=""></a>
                                    <div class="category"><a href="blog-details.php">Installation</a></div>
                                </figure>
                                <div class="lower-content p_relative d_block">
                                    <h3><a href="blog-details.php">Electrical Wiring For Home & Office.</a></h3>
                                    <ul class="post-info clearfix">
                                        <li><i class="icon-42"></i>08 Oct, 2021</li>
                                        <li><i class="icon-43"></i><a href="blog-details.php">Ashley Bronks</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet consecte adipisicing sed eiusmod tempor incid idunt labore dolore.</p>
                                    <div class="link"><a href="blog-details.php">Read more<i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <figure class="image-box">
                                    <a href="blog-details.php"><img src="http://elerepara.pt/assets/images/news/news-4.jpg" alt=""></a>
                                    <div class="category"><a href="blog-details.php">Installation</a></div>
                                </figure>
                                <div class="lower-content p_relative d_block">
                                    <h3><a href="blog-details.php">Best Tips for Emergency Electrical Service.</a></h3>
                                    <ul class="post-info clearfix">
                                        <li><i class="icon-42"></i>10 Oct, 2021</li>
                                        <li><i class="icon-43"></i><a href="blog-details.php">Ashley Bronks</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet consecte adipisicing sed eiusmod tempor incid idunt labore dolore.</p>
                                    <div class="link"><a href="blog-details.php">Read more<i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <figure class="image-box">
                                    <a href="blog-details.php"><img src="http://elerepara.pt/assets/images/news/news-5.jpg" alt=""></a>
                                    <div class="category"><a href="blog-details.php">Installation</a></div>
                                </figure>
                                <div class="lower-content p_relative d_block">
                                    <h3><a href="blog-details.php">Learn Best Basic Electric Safety Rules.</a></h3>
                                    <ul class="post-info clearfix">
                                        <li><i class="icon-42"></i>09 Oct, 2021</li>
                                        <li><i class="icon-43"></i><a href="blog-details.php">Ashley Bronks</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet consecte adipisicing sed eiusmod tempor incid idunt labore dolore.</p>
                                    <div class="link"><a href="blog-details.php">Read more<i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <figure class="image-box">
                                    <a href="blog-details.php"><img src="http://elerepara.pt/assets/images/news/news-6.jpg" alt=""></a>
                                    <div class="category"><a href="blog-details.php">Installation</a></div>
                                </figure>
                                <div class="lower-content p_relative d_block">
                                    <h3><a href="blog-details.php">Install Landscape Lighting & Boost Value.</a></h3>
                                    <ul class="post-info clearfix">
                                        <li><i class="icon-42"></i>08 Oct, 2021</li>
                                        <li><i class="icon-43"></i><a href="blog-details.php">Ashley Bronks</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet consecte adipisicing sed eiusmod tempor incid idunt labore dolore.</p>
                                    <div class="link"><a href="blog-details.php">Read more<i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <figure class="image-box">
                                    <a href="blog-details.php"><img src="http://elerepara.pt/assets/images/news/news-7.jpg" alt=""></a>
                                    <div class="category"><a href="blog-details.php">Installation</a></div>
                                </figure>
                                <div class="lower-content p_relative d_block">
                                    <h3><a href="blog-details.php">Newly Built & Customized Power Plants</a></h3>
                                    <ul class="post-info clearfix">
                                        <li><i class="icon-42"></i>10 Oct, 2021</li>
                                        <li><i class="icon-43"></i><a href="blog-details.php">Ashley Bronks</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet consecte adipisicing sed eiusmod tempor incid idunt labore dolore.</p>
                                    <div class="link"><a href="blog-details.php">Read more<i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <figure class="image-box">
                                    <a href="blog-details.php"><img src="http://elerepara.pt/assets/images/news/news-8.jpg" alt=""></a>
                                    <div class="category"><a href="blog-details.php">Installation</a></div>
                                </figure>
                                <div class="lower-content p_relative d_block">
                                    <h3><a href="blog-details.php">How to Save Energy in Domestic Building</a></h3>
                                    <ul class="post-info clearfix">
                                        <li><i class="icon-42"></i>09 Oct, 2021</li>
                                        <li><i class="icon-43"></i><a href="blog-details.php">Ashley Bronks</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet consecte adipisicing sed eiusmod tempor incid idunt labore dolore.</p>
                                    <div class="link"><a href="blog-details.php">Read more<i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <figure class="image-box">
                                    <a href="blog-details.php"><img src="http://elerepara.pt/assets/images/news/news-9.jpg" alt=""></a>
                                    <div class="category"><a href="blog-details.php">Installation</a></div>
                                </figure>
                                <div class="lower-content p_relative d_block">
                                    <h3><a href="blog-details.php">Searching The Best Elctrician Near You</a></h3>
                                    <ul class="post-info clearfix">
                                        <li><i class="icon-42"></i>08 Oct, 2021</li>
                                        <li><i class="icon-43"></i><a href="blog-details.php">Ashley Bronks</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet consecte adipisicing sed eiusmod tempor incid idunt labore dolore.</p>
                                    <div class="link"><a href="blog-details.php">Read more<i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <figure class="image-box">
                                    <a href="blog-details.php"><img src="http://elerepara.pt/assets/images/news/news-10.jpg" alt=""></a>
                                    <div class="category"><a href="blog-details.php">Installation</a></div>
                                </figure>
                                <div class="lower-content p_relative d_block">
                                    <h3><a href="blog-details.php">Electrical Upgrade During Your Remodel</a></h3>
                                    <ul class="post-info clearfix">
                                        <li><i class="icon-42"></i>10 Oct, 2021</li>
                                        <li><i class="icon-43"></i><a href="blog-details.php">Ashley Bronks</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet consecte adipisicing sed eiusmod tempor incid idunt labore dolore.</p>
                                    <div class="link"><a href="blog-details.php">Read more<i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <figure class="image-box">
                                    <a href="blog-details.php"><img src="http://elerepara.pt/assets/images/news/news-11.jpg" alt=""></a>
                                    <div class="category"><a href="blog-details.php">Installation</a></div>
                                </figure>
                                <div class="lower-content p_relative d_block">
                                    <h3><a href="blog-details.php">Why Should You Hire Our Expert Electrician</a></h3>
                                    <ul class="post-info clearfix">
                                        <li><i class="icon-42"></i>09 Oct, 2021</li>
                                        <li><i class="icon-43"></i><a href="blog-details.php">Ashley Bronks</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet consecte adipisicing sed eiusmod tempor incid idunt labore dolore.</p>
                                    <div class="link"><a href="blog-details.php">Read more<i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <figure class="image-box">
                                    <a href="blog-details.php"><img src="http://elerepara.pt/assets/images/news/news-12.jpg" alt=""></a>
                                    <div class="category"><a href="blog-details.php">Installation</a></div>
                                </figure>
                                <div class="lower-content p_relative d_block">
                                    <h3><a href="blog-details.php">Electrical Wiring For Home & Office.</a></h3>
                                    <ul class="post-info clearfix">
                                        <li><i class="icon-42"></i>08 Oct, 2021</li>
                                        <li><i class="icon-43"></i><a href="blog-details.php">Ashley Bronks</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet consecte adipisicing sed eiusmod tempor incid idunt labore dolore.</p>
                                    <div class="link"><a href="blog-details.php">Read more<i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->


        <!-- subscribe-section -->
        <!-- <section class="subscribe-section p_relative">
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
        </section> -->
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
