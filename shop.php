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
                    <h2>Our Shop</h2>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Our Shop</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- shop-page-section -->
        <section class="shop-page-section bg-color-4">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                        <div class="shop-sidebar">
                            <div class="search-widget sidebar-widget">
                                <div class="widget-title">
                                    <h4>Search</h4>
                                </div>
                                <form action="shop.php" method="post">
                                    <div class="form-group">
                                        <input type="search" name="search-field" placeholder="Search" required="">
                                        <button type="submit"><i class="icon-63"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="category-widget sidebar-widget">
                                <div class="widget-title">
                                    <h4>Categories</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                        <li><a href="shop-details.php"><i class="icon-7"></i>Power Tools (9)</a></li>
                                        <li><a href="shop-details.php"><i class="icon-7"></i>Electrical & Lighting (1)</a></li>
                                        <li><a href="shop-details.php"><i class="icon-7"></i>Measuring Tools (5)</a></li>
                                        <li><a href="shop-details.php"><i class="icon-7"></i>Ware Accessories (3)</a></li>
                                        <li><a href="shop-details.php"><i class="icon-7"></i>Hammer Drills (7)</a></li>
                                        <li><a href="shop-details.php"><i class="icon-7"></i>Screw Driver (2)</a></li>
                                        <li><a href="shop-details.php"><i class="icon-7"></i>Home Appliance (6)</a></li>
                                        <li><a href="shop-details.php"><i class="icon-7"></i>Accessories (4)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-filter sidebar-widget">
                                <div class="widget-title">
                                    <h4>by Price</h4>
                                </div>
                                <div class="range-slider clearfix p_relative">
                                    <div class="price-range-slider"></div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <button class="filter-btn">Filter</button>
                                        </div>
                                        <div class="pull-right">
                                            <p>Price:</p>
                                            <div class="title p_relative d_iblock"></div>
                                            <div class="input p_relative d_iblock"><input type="text" class="property-amount" name="field-name" readonly=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tags-widget sidebar-widget">
                                <div class="widget-title">
                                    <h4>Tags</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="tags-list clearfix">
                                        <li><a href="shop-details.php">Electrical</a></li>
                                        <li><a href="shop-details.php">Hammer</a></li>
                                        <li><a href="shop-details.php">Screw Driver</a></li>
                                        <li><a href="shop-details.php">External</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 cols-sm-12 content-side">
                        <div class="our-shop">
                            <div class="item-shorting p_relative d_block clearfix">
                                <div class="left-column pull-left clearfix">
                                    <div class="btn-box float_left p_relative clearfix mr_30">
                                        <button class="grid-view on p_relative d_iblock fs_20 b_radius_5 mr_2 centred"><i class="icon-76"></i></button>
                                        <button class="list-view p_relative d_iblock fs_20 b_radius_5 centred"><i class="icon-77"></i></button>
                                    </div>
                                    <div class="text float_left"><p class="fs_16 font_family_poppins">Showing <span class="color_black">1–12</span> of <span class="color_black">50</span> Results</p></div>
                                </div>
                                <div class="right-column pull-right clearfix">
                                    <div class="short-box clearfix">
                                        <div class="select-box">
                                            <select class="wide">
                                               <option data-display="Popularity">Popularity</option>
                                               <option value="1">New Collection</option>
                                               <option value="2">Top Sell</option>
                                               <option value="4">Top Ratted</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrapper grid">
                                <div class="shop-grid-content">
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <span class="hot">Hot</span>
                                                        <figure class="image"><img src="http://elerepara.pt/assets/images/shop/shop-48.png" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.php"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-61"></i></a></li>
                                                            <li><a href="http://elerepara.pt/assets/images/shop/shop-48.png" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.php">Gedore 7R182C0 Torque Screwdriver</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$60.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="http://elerepara.pt/assets/images/shop/shop-49.png" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.php"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-61"></i></a></li>
                                                            <li><a href="http://elerepara.pt/assets/images/shop/shop-49.png" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.php">Globe Bulbs Lights 3W Cheap LED Light Bulb</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$50.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="http://elerepara.pt/assets/images/shop/shop-50.png" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.php"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-61"></i></a></li>
                                                            <li><a href="http://elerepara.pt/assets/images/shop/shop-50.png" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.php">Bahco 4559-18 Bolt Cutter 430mm</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$25.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <span class="sale">Sale</span>
                                                        <figure class="image"><img src="http://elerepara.pt/assets/images/shop/shop-51.png" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.php"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-61"></i></a></li>
                                                            <li><a href="http://elerepara.pt/assets/images/shop/shop-51.png" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.php">Vakuumski trimer za kosu i bradu</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$40.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <span class="hot">Hot</span>
                                                        <figure class="image"><img src="http://elerepara.pt/assets/images/shop/shop-52.png" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.php"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-61"></i></a></li>
                                                            <li><a href="http://elerepara.pt/assets/images/shop/shop-52.png" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.php">Glass Pendant Light Hanging Lamps Lighting</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$30.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="http://elerepara.pt/assets/images/shop/shop-53.png" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.php"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-61"></i></a></li>
                                                            <li><a href="http://elerepara.pt/assets/images/shop/shop-53.png" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.php">Tankless Instant Electric Water Heater</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$75.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="http://elerepara.pt/assets/images/shop/shop-54.png" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.php"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-61"></i></a></li>
                                                            <li><a href="http://elerepara.pt/assets/images/shop/shop-54.png" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.php">Bahco 4559-18 Bolt Cutter 430mm</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$70.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <span class="hot">Hot</span>
                                                        <figure class="image"><img src="http://elerepara.pt/assets/images/shop/shop-55.png" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.php"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-61"></i></a></li>
                                                            <li><a href="http://elerepara.pt/assets/images/shop/shop-55.png" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.php">Men's Electric Trimmer in Black Shaver</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$90.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="http://elerepara.pt/assets/images/shop/shop-56.png" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.php"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-61"></i></a></li>
                                                            <li><a href="http://elerepara.pt/assets/images/shop/shop-56.png" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.php">DS300 Large Tool Box Carry Case</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$60.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <span class="hot">Hot</span>
                                                        <figure class="image"><img src="http://elerepara.pt/assets/images/shop/shop-57.png" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.php"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-61"></i></a></li>
                                                            <li><a href="http://elerepara.pt/assets/images/shop/shop-57.png" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.php">Aluminium Hammer Size 2 38mm 950gm</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$40.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <span class="sale">Sale</span>
                                                        <figure class="image"><img src="http://elerepara.pt/assets/images/shop/shop-58.png" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.php"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-61"></i></a></li>
                                                            <li><a href="http://elerepara.pt/assets/images/shop/shop-58.png" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.php">Custom Leather Electrical Tool Carrier</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$80.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="http://elerepara.pt/assets/images/shop/shop-59.png" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.php"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-61"></i></a></li>
                                                            <li><a href="http://elerepara.pt/assets/images/shop/shop-59.png" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.php">Westek Battery Operated Wall Sconces</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$44.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-content">
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <span class="hot">Hot</span>
                                                        <figure class="image"><img src="http://elerepara.pt/assets/images/shop/shop-52.png" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.php"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-61"></i></a></li>
                                                            <li><a href="http://elerepara.pt/assets/images/shop/shop-52.png" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.php">Glass Pendant Light Hanging Lamps Lighting</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$30.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="http://elerepara.pt/assets/images/shop/shop-53.png" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.php"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-61"></i></a></li>
                                                            <li><a href="http://elerepara.pt/assets/images/shop/shop-53.png" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.php">Tankless Instant Electric Water Heater</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$75.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="http://elerepara.pt/assets/images/shop/shop-54.png" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.php"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-61"></i></a></li>
                                                            <li><a href="http://elerepara.pt/assets/images/shop/shop-54.png" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.php">Bahco 4559-18 Bolt Cutter 430mm</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$70.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <span class="hot">Hot</span>
                                                        <figure class="image"><img src="http://elerepara.pt/assets/images/shop/shop-55.png" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.php"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-61"></i></a></li>
                                                            <li><a href="http://elerepara.pt/assets/images/shop/shop-55.png" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.php">Men's Electric Trimmer in Black Shaver</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$90.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="http://elerepara.pt/assets/images/shop/shop-56.png" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.php"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-61"></i></a></li>
                                                            <li><a href="http://elerepara.pt/assets/images/shop/shop-56.png" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.php">DS300 Large Tool Box Carry Case</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$60.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <span class="hot">Hot</span>
                                                        <figure class="image"><img src="http://elerepara.pt/assets/images/shop/shop-48.png" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.php"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-61"></i></a></li>
                                                            <li><a href="http://elerepara.pt/assets/images/shop/shop-48.png" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.php">Gedore 7R182C0 Torque Screwdriver</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$60.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="http://elerepara.pt/assets/images/shop/shop-49.png" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.php"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-61"></i></a></li>
                                                            <li><a href="http://elerepara.pt/assets/images/shop/shop-49.png" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.php">Globe Bulbs Lights 3W Cheap LED Light Bulb</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$50.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="http://elerepara.pt/assets/images/shop/shop-50.png" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.php"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-61"></i></a></li>
                                                            <li><a href="http://elerepara.pt/assets/images/shop/shop-50.png" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.php">Bahco 4559-18 Bolt Cutter 430mm</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$25.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <span class="sale">Sale</span>
                                                        <figure class="image"><img src="http://elerepara.pt/assets/images/shop/shop-51.png" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.php"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-61"></i></a></li>
                                                            <li><a href="http://elerepara.pt/assets/images/shop/shop-51.png" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.php">Vakuumski trimer za kosu i bradu</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$40.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <span class="hot">Hot</span>
                                                        <figure class="image"><img src="http://elerepara.pt/assets/images/shop/shop-57.png" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.php"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-61"></i></a></li>
                                                            <li><a href="http://elerepara.pt/assets/images/shop/shop-57.png" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.php">Aluminium Hammer Size 2 38mm 950gm</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$40.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <span class="sale">Sale</span>
                                                        <figure class="image"><img src="http://elerepara.pt/assets/images/shop/shop-58.png" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.php"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-61"></i></a></li>
                                                            <li><a href="http://elerepara.pt/assets/images/shop/shop-58.png" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.php">Custom Leather Electrical Tool Carrier</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$80.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                            <div class="shop-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="http://elerepara.pt/assets/images/shop/shop-59.png" alt=""></figure>
                                                        <ul class="option-list clearfix">
                                                            <li><a href="shop.php"><i class="icon-57"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-62"></i></a></li>
                                                            <li><a href="index-5.php"><i class="icon-61"></i></a></li>
                                                            <li><a href="http://elerepara.pt/assets/images/shop/shop-59.png" class="lightbox-image" data-fancybox="gallery"><i class="icon-63"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lower-content">
                                                        <h6><a href="shop-details.php">Westek Battery Operated Wall Sconces</a></h6>
                                                        <ul class="rating clearfix">
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                            <li><i class="icon-71"></i></li>
                                                        </ul>
                                                        <span class="price">$44.30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-wrapper centred mt_30 centred">
                                <ul class="pagination clearfix">
                                    <li><a href="shop.php" class="current">1</a></li>
                                    <li><a href="shop.php">2</a></li>
                                    <li><a href="shop.php">3</a></li>
                                    <li class="dot">...</li>
                                    <li><a href="shop.php">9</a></li>
                                    <li><a href="shop.php"><i class="icon-7"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-page-section -->


        <!-- subscribe-section -->
        <section class="subscribe-section p_relative bg-color-4">
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

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
