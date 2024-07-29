@extends('layout.master')

@section('title')
<title>Medical Shop - Current Tech</title>
@endsection

@section('body_class', 'home_medical')

@section('navbar')
    @include('home.medical.medical_Navbar')
@endsection

@section('content')
<main>


    <!-- sidebar mobile menu & sidebar cart - start
    ================================================== -->
    <div class="sidebar-menu-wrapper">
        <div class="cart_sidebar">
            <button type="button" class="close_btn"><i class="fal fa-times"></i></button>

            <ul class="cart_items_list ul_li_block mb_30 clearfix">
                <li>
                    <div class="item_image">
                        <img src="assets/images/cart/img_01.jpg" alt="image_not_found">
                    </div>
                    <div class="item_content">
                        <h4 class="item_title">Yellow Blouse</h4>
                        <span class="item_price">$30.00</span>
                    </div>
                    <button type="button" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
                </li>
                <li>
                    <div class="item_image">
                        <img src="assets/images/cart/img_01.jpg" alt="image_not_found">
                    </div>
                    <div class="item_content">
                        <h4 class="item_title">Yellow Blouse</h4>
                        <span class="item_price">$30.00</span>
                    </div>
                    <button type="button" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
                </li>
                <li>
                    <div class="item_image">
                        <img src="assets/images/cart/img_01.jpg" alt="image_not_found">
                    </div>
                    <div class="item_content">
                        <h4 class="item_title">Yellow Blouse</h4>
                        <span class="item_price">$30.00</span>
                    </div>
                    <button type="button" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
                </li>
            </ul>

            <ul class="total_price ul_li_block mb_30 clearfix">
                <li>
                    <span>Subtotal:</span>
                    <span>$90</span>
                </li>
                <li>
                    <span>Vat 5%:</span>
                    <span>$4.5</span>
                </li>
                <li>
                    <span>Discount 20%:</span>
                    <span>- $18.9</span>
                </li>
                <li>
                    <span>Total:</span>
                    <span>$75.6</span>
                </li>
            </ul>

            <ul class="btns_group ul_li_block clearfix">
                <li><a href="/shopInnerPages_shoppingCart">View Cart</a></li>
                <li><a href="/shopInnerPages_checkout_Step1">Checkout</a></li>
            </ul>
        </div>

        <div class="sidebar_mobile_menu">
            <button type="button" class="close_btn"><i class="fal fa-times"></i></button>

            <div class="msb_widget brand_logo text-center">
                <a href="/home">
                    <img src="assets/images/logo/logo_25_1x.png" srcset="assets/images/logo/logo_25_2x.png 2x" alt="logo_not_found">
                </a>
            </div>

            <div class="msb_widget mobile_menu_list clearfix">
                <h3 class="title_text mb_15 text-uppercase"><i class="far fa-bars mr-2"></i> Menu List</h3>
                <ul class="ul_li_block clearfix">
                    <li class="active dropdown">
                        <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                        <ul class="ul_li_block dropdown-menu">
                            <li><a href="/home_carParts">Carparts</a></li>
                            <li><a href="/home_classicEcommerce">Classic Ecommerce</a></li>
                            <li><a href="/home_creativeOneLook">Creative Onelook</a></li>
                            <li><a href="/home_electronic">Electronic</a></li>
                            <li><a href="/home_fashion">Fashion</a></li>
                            <li><a href="/home_fashionMinimal">Fashion Minimal</a></li>
                            <li><a href="/home_furniture">Furniture</a></li>
                            <li><a href="/home_gadget">Gadget</a></li>
                            <li><a href="/home_lookBook_Creative">Lookbook Creative</a></li>
                            <li><a href="/home_lookBook_Slide">Lookbook Slide</a></li>
                            <li><a href="/home_medical">Medical</a></li>
                            <li><a href="/home_modern">Modern</a></li>
                            <li><a href="/home_modernMinimal">Modern Minimal</a></li>
                            <li><a href="/home_motorcycle">Motorcycle</a></li>
                            <li><a href="/home_parallax_Shop">Parallax Shop</a></li>
                            <li><a href="/home_simpleShop">Simple Shop</a></li>
                            <li><a href="/home_singleStory_Black">Single Story Black</a></li>
                            <li><a href="/home_singleStory_White">Single Story White</a></li>
                            <li><a href="/home_sportsShop">Sports</a></li>
                            <li><a href="/home_supermarket">Supermarket</a></li>
                            <li><a href="/home_watch">Watch</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown ul_li_block">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Carparts</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="/carParts_shopPage">Shop Page</a></li>
                                    <li><a href="/carParts_shopGrid">Shop Grid</a></li>
                                    <li><a href="/carParts_shopList">Shop List</a></li>
                                    <li><a href="/carParts_shopDetails">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Classic Ecommerce</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="/classicEcommerce_shopPage">Shop Page</a></li>
                                    <li><a href="/classicEcommerce_shopDetails">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Electronic</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="/electronic_shopPage">Shop Page</a></li>
                                    <li><a href="/electronic_shopDetails">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fashion</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="/fashion_shopPage">Shop Page</a></li>
                                    <li><a href="/fashion_shopDetails">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fashion Minimal</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="/fashion_Minimal_shopPage">Shop Page</a></li>
                                    <li><a href="/fashion_Minimal_shopDetails">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fashion Minimal</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="/fashion_Minimal_shopPage">Shop Page</a></li>
                                    <li><a href="/fashion_Minimal_shopDetails">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Furniture</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="/furniture_shopPage">Shop Page</a></li>
                                    <li><a href="/furniture_shopDetails">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gadget</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="/gadget_shopPage">Shop Page</a></li>
                                    <li><a href="/gadget_shopDetails">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Medical</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="/medical_shopPage">Shop Page</a></li>
                                    <li><a href="/medical_shopDetails">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Modern Minimal</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="/modern_Minimal_shopPage">Shop Page</a></li>
                                    <li><a href="/modern_Minimal_shopDetails">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Modern</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="/modern_shopPage">Shop Page</a></li>
                                    <li><a href="/modern_shopDetails">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Motorcycle</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="/motorcycle_shopGrid">Shop Grid</a></li>
                                    <li><a href="/motorcycle_shopList">Shop List</a></li>
                                    <li><a href="/motorcycle_shopDetails">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Simple Shop</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="/simpleShop_shopPage">Shop Page</a></li>
                                    <li><a href="/simpleShop_shopDetails">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sports</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="/sports_shopPage">Shop Page</a></li>
                                    <li><a href="/sports_shopDetails">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lookbook</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="/lookBook_shopPage">Shop Page</a></li>
                                    <li><a href="/lookBook_shopDetails">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop Other Pages</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="#!"><del>Shop Page</del></a></li>
                                    <li><a href="/OtherPages_shopDetails">Shop Details</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop Inner Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/shopInnerPages_shoppingCart">Shopping Cart</a></li>
                                    <li><a href="/shopInnerPages_checkout_Step1">Checkout Step 1</a></li>
                                    <li><a href="/shopInnerPages_checkout_Step2">Checkout Step 2</a></li>
                                    <li><a href="/shopInnerPages_checkout_Step3">Checkout Step 3</a></li>
                                </ul>
                            </li>
                            <li><a href="/404_Page">404 Page</a></li>
                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blogs</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/blogs_blogPage">Blog Page</a></li>
                                    <li><a href="/blogs_blogDetails">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Compare</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/compare_V1">Compare V.1</a></li>
                                    <li><a href="/compare_V2">Compare V.2</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Register</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/register_Login">Login</a></li>
                                    <li><a href="/register_signUp">Sign Up</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="/contactUs">Conatct</a></li>    
                </ul>
            </div>

            <div class="user_info">
                <h3 class="title_text mb_30 text-uppercase"><i class="fas fa-user mr-2"></i> User Info</h3>
                <div class="profile_info clearfix">
                    <div class="user_thumbnail">
                        <img src="assets/images/meta/img_01.png" alt="thumbnail_not_found">
                    </div>
                    <div class="user_content">
                        <h4 class="user_name">Jone Doe</h4>
                        <span class="user_title">Seller</span>
                    </div>
                </div>
                <ul class="settings_options ul_li_block clearfix">
                    <li><a href="#!"><i class="fal fa-user-circle"></i> Profile</a></li>
                    <li><a href="#!"><i class="fal fa-user-cog"></i> Settings</a></li>
                    <li><a href="#!"><i class="fal fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </div>
        </div>

        <div class="overlay"></div>
    </div>
    <!-- sidebar mobile menu & sidebar cart - end
    ================================================== -->


    <!-- slider_section - start
    ================================================== -->
    <section class="slider_section medical_slider clearfix">
        <div class="main_slider clearfix" data-slick='{"arrows": false}'>
            <div class="item d-flex align-items-center clearfix" data-bg-color="#b8e8fe">
                <div class="container">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 order-last">
                            <div class="slider_image" data-animation="fadeInUp" data-delay=".2s">
                                <img src="assets/images/slider/medical/img_01.png" alt="image_not_found">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="slider_content">
                                <h4 class="text-uppercase" data-animation="fadeInUp" data-delay=".2s"><strong>10%</strong> off</h4>
                                <h3 data-animation="fadeInUp" data-delay=".4s">
                                    On the entire range of NeonCart
                                </h3>
                                <p data-animation="fadeInUp" data-delay=".6s">
                                    Don’t miss the  sale  and grab all the available products
                                </p>
                                <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay=".8s">
                                    <a class="custom_btn bg_medical_blue text-uppercase" href="#!">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item d-flex align-items-center clearfix" data-bg-color="#b8e8fe">
                <div class="container">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 order-last">
                            <div class="slider_image" data-animation="fadeInUp" data-delay=".2s">
                                <img src="assets/images/slider/medical/img_02.png" alt="image_not_found">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="slider_content">
                                <h4 class="text-uppercase" data-animation="fadeInUp" data-delay=".2s"><strong>10%</strong> off</h4>
                                <h3 data-animation="fadeInUp" data-delay=".4s">
                                    On the entire range of NeonCart
                                </h3>
                                <p data-animation="fadeInUp" data-delay=".6s">
                                    Don’t miss the  sale  and grab all the available products
                                </p>
                                <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay=".8s">
                                    <a class="custom_btn bg_medical_blue text-uppercase" href="#!">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item d-flex align-items-center clearfix" data-bg-color="#b8e8fe">
                <div class="container">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 order-last">
                            <div class="slider_image" data-animation="fadeInUp" data-delay=".2s">
                                <img src="assets/images/slider/medical/img_01.png" alt="image_not_found">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="slider_content">
                                <h4 class="text-uppercase" data-animation="fadeInUp" data-delay=".2s"><strong>10%</strong> off</h4>
                                <h3 data-animation="fadeInUp" data-delay=".4s">
                                    On the entire range of NeonCart
                                </h3>
                                <p data-animation="fadeInUp" data-delay=".6s">
                                    Don’t miss the  sale  and grab all the available products
                                </p>
                                <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay=".8s">
                                    <a class="custom_btn bg_medical_blue text-uppercase" href="#!">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item d-flex align-items-center clearfix" data-bg-color="#b8e8fe">
                <div class="container">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 order-last">
                            <div class="slider_image" data-animation="fadeInUp" data-delay=".2s">
                                <img src="assets/images/slider/medical/img_02.png" alt="image_not_found">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="slider_content">
                                <h4 class="text-uppercase" data-animation="fadeInUp" data-delay=".2s"><strong>10%</strong> off</h4>
                                <h3 data-animation="fadeInUp" data-delay=".4s">
                                    On the entire range of NeonCart
                                </h3>
                                <p data-animation="fadeInUp" data-delay=".6s">
                                    Don’t miss the  sale  and grab all the available products
                                </p>
                                <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay=".8s">
                                    <a class="custom_btn bg_medical_blue text-uppercase" href="#!">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- slider progress -->
        <div class="slick-progress">
            <span></span>
        </div>
    </section>
    <!-- slider_section - end
    ================================================== -->


    <!-- policy_section - start
    ================================================== -->
    <section class="policy_section sec_ptb_100 pb-0 clearfix">
        <div class="container">
            <div class="row mt__50 align-items-center">

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="medical_policy_item">
                        <div class="item_icon">
                            <i class="fas fa-car-side"></i>
                        </div>
                        <div class="item_content">
                            <h3>Free Shipping</h3>
                            <p>On All Order</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="medical_policy_item">
                        <div class="item_icon">
                            <i class="fas fa-funnel-dollar"></i>
                        </div>
                        <div class="item_content">
                            <h3>100% Money Back</h3>
                            <p>Within 30 Days Guaranted</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="medical_policy_item">
                        <div class="item_icon">
                            <i class="fas fa-file-invoice-dollar"></i>
                        </div>
                        <div class="item_content">
                            <h3>Secure Payment</h3>
                            <p>100% secure payment</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="medical_policy_item">
                        <div class="item_icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="item_content">
                            <h3>24/7 Live Support</h3>
                            <p>Get help when you need</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- policy_section - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section sec_ptb_100 clearfix">
        <div class="container">

            <div class="row mb_30 align-items-center justify-content-lg-between">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="medical_section_title">
                        <h2 class="title_text mb-0">Current Products</h2>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <ul class="medical_tabs_nav nav ul_li_right" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#painkiller_tab">Painkiller</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#digestion_tab">Digestion</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#cough_tab">Cough</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#antibiotics_tab">Antibiotics</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="tab-content has_multy_carousel">
                <div id="painkiller_tab" class="tab-pane active">
                    <div class="product_carousel arrow_ycenter">
                        <div class="slideshow4_slider medical_product_group" data-slick='{"dots": false}'>
                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_01.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_02.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_03.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_04.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_01.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_02.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_03.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_04.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel_nav">
                            <button type="button" class="ss4_left_arrow"><i class="fal fa-angle-left"></i></button>
                            <button type="button" class="ss4_right_arrow"><i class="fal fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>

                <div id="digestion_tab" class="tab-pane fade">
                    <div class="product_carousel arrow_ycenter">
                        <div class="slideshow4_slider medical_product_group" data-slick='{"dots": false}'>
                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_01.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_02.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_03.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_04.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_01.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_02.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_03.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_04.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel_nav">
                            <button type="button" class="ss4_left_arrow"><i class="fal fa-angle-left"></i></button>
                            <button type="button" class="ss4_right_arrow"><i class="fal fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>

                <div id="cough_tab" class="tab-pane fade">
                    <div class="product_carousel arrow_ycenter">
                        <div class="slideshow4_slider medical_product_group" data-slick='{"dots": false}'>
                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_01.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_02.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_03.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_04.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_01.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_02.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_03.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_04.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel_nav">
                            <button type="button" class="ss4_left_arrow"><i class="fal fa-angle-left"></i></button>
                            <button type="button" class="ss4_right_arrow"><i class="fal fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>

                <div id="antibiotics_tab" class="tab-pane fade">
                    <div class="product_carousel arrow_ycenter">
                        <div class="slideshow4_slider medical_product_group" data-slick='{"dots": false}'>
                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_01.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_02.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_03.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_04.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_01.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_02.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_03.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="medical_product_item">
                                    <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                    <div class="item_image">
                                        <img src="assets/images/shop/medical/img_04.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                Advanced Upper Arm Blood Pressure
                                            </a>
                                        </h3>
                                        <span class="price_text">$30.00</span>
                                        <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel_nav">
                            <button type="button" class="ss4_left_arrow"><i class="fal fa-angle-left"></i></button>
                            <button type="button" class="ss4_right_arrow"><i class="fal fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- product_section - end
    ================================================== -->


    <!-- blog_section - start
    ================================================== -->
    <section class="blog_section sec_ptb_100 parallaxie black_overlay clearfix" data-background="assets/images/backgrounds/bg_07.jpg">
        <div class="container">

            <div class="medical_section_title text-center mb_15 clearfix">
                <h2 class="title_text text-white mb-0">Our blog News</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                    <div class="medical_blog_grid">
                        <a class="item_image" href="#!">
                            <img src="assets/images/blog/medical/img_01.jpg" alt="image_not_found">
                        </a>
                        <div class="item_content">
                            <span class="post_date bg_medical_blue text-white">Nov 05, 2020</span>
                            <h3 class="item_title mb-0">
                                <a class="text-white" href="#!">
                                    It might be time to seek a medical your muscle
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                    <div class="medical_blog_grid">
                        <a class="item_image" href="#!">
                            <img src="assets/images/blog/medical/img_02.jpg" alt="image_not_found">
                        </a>
                        <div class="item_content">
                            <span class="post_date bg_medical_blue text-white">Nov 05, 2020</span>
                            <h3 class="item_title mb-0">
                                <a class="text-white" href="#!">
                                    It might be time to seek a medical your muscle
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                    <div class="medical_blog_grid">
                        <a class="item_image" href="#!">
                            <img src="assets/images/blog/medical/img_03.jpg" alt="image_not_found">
                        </a>
                        <div class="item_content">
                            <span class="post_date bg_medical_blue text-white">Nov 05, 2020</span>
                            <h3 class="item_title mb-0">
                                <a class="text-white" href="#!">
                                    It might be time to seek a medical your muscle
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- blog_section - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section sec_ptb_100 clearfix">
        <div class="container">

            <div class="row mb_30 align-items-center justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="medical_section_title">
                        <h2 class="title_text mb-0">Current Products</h2>
                    </div>
                </div>

                <div class="col-lg-6">
                    <ul class="medical_tabs_nav nav ul_li_right" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#supplements_tab">Supplements</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#cosmetics_tab">Cosmetics</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#cough2_tab">Cough</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#vaccines_tab">Vaccines</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="tab-content mb_50">
                <div id="supplements_tab" class="tab-pane active">
                    <div class="row no-gutters medical_product_group justify-content-center">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_05.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_06.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_07.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_08.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_09.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_10.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_11.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_12.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="cosmetics_tab" class="tab-pane fade">
                    <div class="row no-gutters medical_product_group justify-content-center">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_05.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_06.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_07.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_08.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_09.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_10.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_11.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_12.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="cough2_tab" class="tab-pane fade">
                    <div class="row no-gutters medical_product_group justify-content-center">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_05.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_06.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_07.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_08.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_09.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_10.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_11.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_12.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="vaccines_tab" class="tab-pane fade">
                    <div class="row no-gutters medical_product_group justify-content-center">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_05.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_06.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_07.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_08.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_09.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_10.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_11.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="medical_product_item">
                                <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                                <div class="item_image">
                                    <img src="assets/images/shop/medical/img_12.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="#!">
                                            Advanced Upper Arm Blood Pressure
                                        </a>
                                    </h3>
                                    <span class="price_text">$30.00</span>
                                    <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="load_more text-center clearfix">
                <a class="custom_btn bg_medical_blue text-uppercase" href="#!">View More</a>
            </div>

        </div>
    </section>
    <!-- product_section - end
    ================================================== -->


    <!-- consultation_section - start
    ================================================== -->
    <div class="consultation_section bg_medical_blue clearfix">
        <div class="container-fluid p-0">
            <div class="row no-gutters align-items-center justify-content-lg-between">
                <div class="col-lg-6 order-last">
                    <div class="consultation_image">
                        <img src="assets/images/consultation/img_01.jpg" alt="image_not_found">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="consultation_content text-white">
                        <h2 class="text-white">Get online Consultation</h2>
                        <p>
                            In most cases, the initial consultation will be sufficient. In more complicated cases, a second, follow-up consultation may be necessary. You can contact our center at any time and ask your questions. Our professional support representative will answer your questions 
                        </p>
                        <a class="custom_btn bg_black text-uppercase" href="#!">Get Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- consultation_section - end
    ================================================== -->


    <!-- barnd_section - start
    ================================================== -->
    <div class="barnd_section sec_ptb_50 clearfix">
        <div class="container">
            <div class="barnd_carousel clearfix">
                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_19.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_20.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_21.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_22.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_23.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_24.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_25.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_02.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_03.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_04.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_05.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_06.png" alt="image_not_found">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- barnd_section - end
    ================================================== -->


</main>
@endsection

@section('footer')
    @include('home.medical.medical_Footer')
@endsection

