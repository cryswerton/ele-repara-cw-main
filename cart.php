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
                    <h2>Cart Page</h2>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Cart Page</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- cart section -->
        <section class="cart-section p_relative pt_120 pb_120 bg-color-4">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 table-column">
                        <div class="table-outer">
                            <table class="cart-table">
                                <thead class="cart-header">
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th class="prod-column">Product Name</th>
                                        <th>&nbsp;</th>
                                        <th>&nbsp;</th>
                                        <th class="price">Price</th>
                                        <th class="quantity">Quantity</th>
                                        <th>Subtotal</th>
                                    </tr>    
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="4" class="prod-column">
                                            <div class="column-box">
                                                <div class="remove-btn">
                                                    <i class="icon-78"></i>
                                                </div>
                                                <div class="prod-thumb">
                                                    <img src="http://elerepara.pt/assets/images/shop/cart-1.jpg" alt="">
                                                </div>
                                                <div class="prod-title">
                                                    Tankless Instant Electric <br />Water Heater
                                                </div>    
                                            </div>
                                        </td>
                                        <td class="price">$70.30</td>
                                        <td class="qty">
                                            <div class="item-quantity">
                                                <input class="quantity-spinner" type="text" value="1" name="quantity">
                                            </div>
                                        </td>
                                        <td class="sub-total">$70.30</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="prod-column">
                                            <div class="column-box">
                                                <div class="remove-btn">
                                                    <i class="icon-78"></i>
                                                </div>
                                                <div class="prod-thumb">
                                                    <img src="http://elerepara.pt/assets/images/shop/cart-2.jpg" alt="">
                                                </div>
                                                <div class="prod-title">
                                                    Glass Pendant Light Hanging <br />Lamps Lighting
                                                </div>    
                                            </div>
                                        </td>
                                        <td class="price">$50.00</td>
                                        <td class="qty">
                                            <div class="item-quantity">
                                                <input class="quantity-spinner" type="text" value="1" name="quantity">
                                            </div>
                                        </td>
                                        <td class="sub-total">$50.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="prod-column">
                                            <div class="column-box">
                                                <div class="remove-btn">
                                                    <i class="icon-78"></i>
                                                </div>
                                                <div class="prod-thumb">
                                                    <img src="http://elerepara.pt/assets/images/shop/cart-3.jpg" alt="">
                                                </div>
                                                <div class="prod-title">
                                                    Westek Battery Operated <br />Wall Sconces
                                                </div>    
                                            </div>
                                        </td>
                                        <td class="price">$85.00</td>
                                        <td class="qty">
                                            <div class="item-quantity">
                                                <input class="quantity-spinner" type="text" value="1" name="quantity">
                                            </div>
                                        </td>
                                        <td class="sub-total">$85.00</td>
                                    </tr>
                                </tbody>    
                            </table>
                        </div>
                    </div>
                </div>
                <div class="othre-content clearfix">
                    <div class="coupon-box pull-left clearfix">
                        <input type="text" placeholder="Coupon code...">
                        <button type="button" class="theme-btn btn-one">Apply Coupon<i class="fal fa-angle-right"></i></button>
                    </div>
                    <div class="update-btn pull-right">
                        <button type="button" class="theme-btn">Update Cart<i class="fal fa-angle-right"></i></button>
                    </div>
                </div>
                <div class="cart-total">
                    <div class="row">
                        <div class="col-xl-5 col-lg-12 col-md-12 offset-xl-7 cart-column">
                            <div class="total-cart-box clearfix">
                                <h3 class="fs_24 fw_sbold lh_30 d_block">Cart Totals</h3>
                                <ul class="list clearfix mb_30">
                                    <li>Subtotal:<span>$150.50</span></li>
                                    <li>Order Total:<span>$150.50</span></li>
                                </ul>
                                <a href="cart.php" class="theme-btn btn-one">Proceed to Checkout <i class="icon-74"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cart section end -->


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
    <script src="assets/js/jquery.bootstrap-touchspin.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
