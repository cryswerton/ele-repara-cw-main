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
                    <h2>Checkout</h2>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- checkout-section -->
        <section class="checkout-section p_relative pt_120 pb_120 bg-color-4">
            <div class="container">
                <div class="coupon-box p_relative d_block mb_40 pl_30 pt_19 pr_30 pb_17"><h6 class="d_block fs_16 fw_medium">Have a Coupon? <a href="checkout.php" class="d_iblock">Click here to enter your code</a></h6></div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 left-column">
                        <div class="inner-box">
                            <div class="billing-info p_relative d_block mb_55">
                                <h4 class="sub-title d_block fs_30 lh_40 mb_25">Billing Details</h4>
                                <form action="#" method="post" class="billing-form p_relative d_block">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label class="p_relative d_block fs_16 font_family_poppins color_black mb_2">First Name*</label>
                                            <div class="field-input">
                                                <input type="text" name="first_name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label class="p_relative d_block fs_16 font_family_poppins color_black mb_2">Last Name*</label>
                                            <div class="field-input">
                                                <input type="text" name="last_name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label class="p_relative d_block fs_16 font_family_poppins color_black mb_2">Company Name*</label>
                                            <div class="field-input">
                                                <input type="text" name="company_name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label class="p_relative d_block fs_16 font_family_poppins color_black mb_2">Email Address*</label>
                                            <div class="field-input">
                                                <input type="email" name="email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label class="p_relative d_block fs_16 font_family_poppins color_black mb_2">Phone Number*</label>
                                            <div class="field-input">
                                                <input type="text" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label class="p_relative d_block fs_16 font_family_poppins color_black mb_2">Country*</label>
                                            <div class="select-column select-box">
                                                <select class="selectmenu" id="ui-id-1">
                                                    <option selected="selected">Select Option</option>
                                                    <option>United State</option>
                                                    <option>Australia</option>
                                                    <option>Canada</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label class="p_relative d_block fs_16 font_family_poppins color_black mb_2">Address*</label>
                                            <div class="field-input">
                                                <input type="text" name="address" class="address">
                                                <input type="text" name="address">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label class="p_relative d_block fs_16 font_family_poppins color_black mb_2">Town/City*</label>
                                            <div class="field-input">
                                                <input type="text" name="town_city">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label class="p_relative d_block fs_16 font_family_poppins color_black mb_2">State*</label>
                                            <div class="select-column select-box">
                                                <select class="selectmenu" id="ui-id-2">
                                                    <option selected="selected">Select Option</option>
                                                    <option>United State</option>
                                                    <option>Australia</option>
                                                    <option>Canada</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label class="p_relative d_block fs_16 font_family_poppins color_black mb_2">Zip Code*</label>
                                            <div class="field-input">
                                                <input type="text" name="zip">
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="create-acc p_relative d_block mt_3">
                                                <div class="check-box">
                                                    <input class="check" type="checkbox" id="checkbox">
                                                    <label for="checkbox">Create an Account?</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="additional-info">
                                <div class="note-book p_relative d_block">
                                    <label class="p_relative d_block fs_16 font_family_poppins color_black mb_2">Order Notes</label>
                                    <textarea name="note_box" placeholder="Notes about your order, e.g. special notes for your delivery"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 right-column">
                        <div class="inner-box">
                            <div class="order-info p_relative d_block pt_45 pr_50 pb_25 pl_50 mb_50">
                                <h4 class="sub-title d_block fs_24 lh_30 mb_25">Your Order</h4>
                                <div class="order-product">
                                    <ul class="order-list clearfix">
                                        <li class="p_relative d_block clearfix pt_17 pb_16">
                                            <h6 class="fs_15 lh_20 pull-left fw_medium">Tankless Instant Electric <br />Water Heater</h6>
                                            <span class="p_relative d_block pull-right fs_15 fw_medium font_family_inter color_black">$70.30</span>
                                        </li>
                                        <li class="p_relative d_block clearfix pt_17 pb_16">
                                            <h6 class="fs_15 lh_20 pull-left fw_medium">Glass Pendant Light Hanging <br />Lamps Lighting</h6>
                                            <span class="p_relative d_block pull-right fs_15 fw_medium font_family_inter color_black">$25.50</span>
                                        </li>
                                        <li class="p_relative d_block clearfix pt_17 pb_16">
                                            <h6 class="fs_15 lh_20 pull-left fw_medium">Westek Battery Operated <br />Wall Sconces</h6>
                                            <span class="p_relative d_block pull-right fs_15 fw_medium font_family_inter color_black">$90.00</span>
                                        </li>
                                        <li class="sub-total p_relative d_block clearfix pt_17 pb_16">
                                            <h6 class="fs_16 fw_medium lh_20 pull-left">Sub Total</h6>
                                            <span class="p_relative d_block pull-right fs_15 fw_medium font_family_inter color_black light">$150.00</span>
                                        </li>
                                        <li class="order-total p_relative d_block clearfix pt_17 pb_16">
                                            <h6 class="fs_16 fw_bold lh_20 pull-left">Order Total</h6>
                                            <span class="p_relative d_block pull-right fs_15 fw_bold font_family_inter color_black">$150.00</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="payment-info p_relative d_block pt_45 pr_50 pb_50 pl_50">
                                <h4 class="sub-title d_block fs_24 lh_30 mb_40">Payment</h4>
                                <div class="payment-inner p_relative d_block pt_25 pr_30 pb_20 pl_30 mb_30">
                                    <div class="option-block pb_12 mb_13">
                                        <div class="check-box">
                                            <input class="check" type="checkbox" id="checkbox2" checked>
                                            <label for="checkbox2" class="fs_16 fw_medium font_family_inter color_black">Direct Bank Transfer</label>
                                        </div>
                                        <p class="fs_14 font_family_poppins pl_30">Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                    </div>
                                    <div class="option-block clearfix">
                                        <div class="check-box pull-left mr_25">
                                            <input class="check" type="checkbox" id="checkbox3">
                                            <label for="checkbox3" class="fs_16 fw_medium font_family_inter color_black">Paypal</label>
                                        </div>
                                        <div class="link pull-left">
                                            <a href="checkout.php" class="fs_16 fw_medium font_family_inter color_black">What is Paypal?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-box">
                                    <a href="checkout.php" class="theme-btn btn-one">Place Your Order <i class="fal fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- checkout-section end -->


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
