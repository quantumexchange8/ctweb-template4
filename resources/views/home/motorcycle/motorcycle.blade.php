@extends('layout.master')

@section('title')
<title>Motorcycle Parts - Current Tech</title>
@endsection

@section('body_class', 'home_motorcycle')

@section('navbar')
    @include('home.motorcycle.motorcycle_Navbar')
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
    <section class="slider_section motorcycle_slider position-relative clearfix">
        <div class="main_slider clearfix" data-slick='{"dots": false}'>
            <div class="item d-flex align-items-center text-white" data-background="assets/images/slider/motorcycle/bg_01.jpg">
                <span class="overlay" data-bg-color="#191919"></span>
                <div class="container maxw_1430">
                    <div class="col-lg-6">
                        <div class="slider_content">
                            <h3 class="text-white" data-animation="fadeInUp" data-delay=".4s">
                                Agility <span>and</span> Performance
                            </h3>
                            <p data-animation="fadeInUp" data-delay=".6s">
                                Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus 
                                varius laoreet srtrum aenean imperdiet. Etiam ultricies nisi vel augue.
                            </p>
                            <div class="abtn_wrap" data-animation="fadeInUp" data-delay=".8s">
                                <a class="custom_btn bg_carparts_red text-uppercase" href="#!">Search Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slider_image" data-animation="fadeInRight" data-delay=".2s">
                    <img src="assets/images/slider/motorcycle/img_01.png" alt="image_not_found">
                </div>
            </div>

            <div class="item d-flex align-items-center text-white" data-background="assets/images/slider/motorcycle/bg_01.jpg">
                <span class="overlay" data-bg-color="#191919"></span>
                <div class="container maxw_1430">
                    <div class="col-lg-6">
                        <div class="slider_content">
                            <h3 class="text-white" data-animation="fadeInUp" data-delay=".4s">
                                Agility <span>and</span> Performance
                            </h3>
                            <p data-animation="fadeInUp" data-delay=".6s">
                                Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus 
                                varius laoreet srtrum aenean imperdiet. Etiam ultricies nisi vel augue.
                            </p>
                            <div class="abtn_wrap" data-animation="fadeInUp" data-delay=".8s">
                                <a class="custom_btn bg_carparts_red text-uppercase" href="#!">Search Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slider_image" data-animation="fadeInRight" data-delay=".2s">
                    <img src="assets/images/slider/motorcycle/img_01.png" alt="image_not_found">
                </div>
            </div>

            <div class="item d-flex align-items-center text-white" data-background="assets/images/slider/motorcycle/bg_01.jpg">
                <span class="overlay" data-bg-color="#191919"></span>
                <div class="container maxw_1430">
                    <div class="col-lg-6">
                        <div class="slider_content">
                            <h3 class="text-white" data-animation="fadeInUp" data-delay=".4s">
                                Agility <span>and</span> Performance
                            </h3>
                            <p data-animation="fadeInUp" data-delay=".6s">
                                Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus 
                                varius laoreet srtrum aenean imperdiet. Etiam ultricies nisi vel augue.
                            </p>
                            <div class="abtn_wrap" data-animation="fadeInUp" data-delay=".8s">
                                <a class="custom_btn bg_carparts_red text-uppercase" href="#!">Search Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slider_image" data-animation="fadeInRight" data-delay=".2s">
                    <img src="assets/images/slider/motorcycle/img_01.png" alt="image_not_found">
                </div>
            </div>
        </div>
        <div class="carousel_nav">
            <button type="button" class="main_left_arrow"><i class="fal fa-arrow-left"></i></button>
            <button type="button" class="main_right_arrow"><i class="fal fa-arrow-right"></i></button>
        </div>
        <div class="slide_count_wrap">
            <span class="current">3</span>
            <span class="total">3</span>
        </div>
    </section>
    <!-- slider_section - end
    ================================================== -->


    <!-- category_section - start
    ================================================== -->
    <div class="category_section sec_ptb_100 clearfix">
        <div class="container maxw_1430">
            <ul class="motorcycle_category_group ul_li clearfix">
                <li>
                    <a class="motorcycle_category_item text-center" href="#!">
                        <span class="item_image">
                            <img src="assets/images/category/motorcycle/img_01.png" alt="image_not_found">
                        </span>
                        <small class="item_type">Racing boots</small>
                        <strong class="item_title">X-FOURTEET BOOTS</strong>
                    </a>
                </li>

                <li>
                    <a class="motorcycle_category_item text-center" href="#!">
                        <span class="item_image">
                            <img src="assets/images/category/motorcycle/img_02.png" alt="image_not_found">
                        </span>
                        <small class="item_type">Racing boots</small>
                        <strong class="item_title">X-FOURTEET BOOTS</strong>
                    </a>
                </li>

                <li>
                    <a class="motorcycle_category_item text-center" href="#!">
                        <span class="item_image">
                            <img src="assets/images/category/motorcycle/img_03.png" alt="image_not_found">
                        </span>
                        <small class="item_type">Racing boots</small>
                        <strong class="item_title">X-FOURTEET BOOTS</strong>
                    </a>
                </li>

                <li>
                    <a class="motorcycle_category_item text-center" href="#!">
                        <span class="item_image">
                            <img src="assets/images/category/motorcycle/img_04.png" alt="image_not_found">
                        </span>
                        <small class="item_type">Racing boots</small>
                        <strong class="item_title">X-FOURTEET BOOTS</strong>
                    </a>
                </li>

                <li>
                    <a class="motorcycle_category_item text-center" href="#!">
                        <span class="item_image">
                            <img src="assets/images/category/motorcycle/img_05.png" alt="image_not_found">
                        </span>
                        <small class="item_type">Racing boots</small>
                        <strong class="item_title">X-FOURTEET BOOTS</strong>
                    </a>
                </li>

                <li>
                    <a class="motorcycle_category_item text-center" href="#!">
                        <span class="item_image">
                            <img src="assets/images/category/motorcycle/img_06.png" alt="image_not_found">
                        </span>
                        <small class="item_type">Racing boots</small>
                        <strong class="item_title">X-FOURTEET BOOTS</strong>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- category_section - end
    ================================================== -->


    <!-- deals_section - start
    ================================================== -->
    <section class="deals_section clearfix" data-bg-color="#f5f5f5">
        <div class="motorcycle_deals_carousel sec_ptb_50 position-relative">
            <div class="slideshow1_slider clearfix" data-slick='{"dots": false}'>

                <div class="item">
                    <div class="container maxw_1430">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="item_image text-center">
                                    <img src="assets/images/deals/motorcycle/img_01.png" alt="image_not_found">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="item_content">
                                    <h3 class="item_title">
                                        Agility <span>and</span> Performance
                                    </h3>
                                    <p>
                                        Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus 
                                        varius laoreet srtrum aenean imperdiet. Etiam ultricies nisi vel augue.
                                    </p>
                                    <div class="countdown_wrap mb_30">
                                        <span class="wrap_title">Offer is time limited!</span>
                                        <ul class="countdown_timer timein_box ul_li clearfix" data-countdown="2021/3/24"></ul>
                                    </div>
                                    <a class="custom_btn bg_carparts_red text-uppercase" href="#!">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="container maxw_1430">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="item_image text-center">
                                    <img src="assets/images/deals/motorcycle/img_01.png" alt="image_not_found">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="item_content">
                                    <h3 class="item_title">
                                        Agility <span>and</span> Performance
                                    </h3>
                                    <p>
                                        Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus 
                                        varius laoreet srtrum aenean imperdiet. Etiam ultricies nisi vel augue.
                                    </p>
                                    <div class="countdown_wrap mb_30">
                                        <span class="wrap_title">Offer is time limited!</span>
                                        <ul class="countdown_timer timein_box ul_li clearfix" data-countdown="2021/3/24"></ul>
                                    </div>
                                    <a class="custom_btn bg_carparts_red text-uppercase" href="#!">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="container maxw_1430">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="item_image text-center">
                                    <img src="assets/images/deals/motorcycle/img_01.png" alt="image_not_found">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="item_content">
                                    <h3 class="item_title">
                                        Agility <span>and</span> Performance
                                    </h3>
                                    <p>
                                        Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus 
                                        varius laoreet srtrum aenean imperdiet. Etiam ultricies nisi vel augue.
                                    </p>
                                    <div class="countdown_wrap mb_30">
                                        <span class="wrap_title">Offer is time limited!</span>
                                        <ul class="countdown_timer timein_box ul_li clearfix" data-countdown="2021/3/24"></ul>
                                    </div>
                                    <a class="custom_btn bg_carparts_red text-uppercase" href="#!">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="carousel_nav">
                <button type="button" class="left_arrow">
                    <img src="assets/images/deals/motorcycle/img_01.png" alt="image_not_found">
                </button>
                <button type="button" class="right_arrow">
                    <img src="assets/images/deals/motorcycle/img_01.png" alt="image_not_found">
                </button>
            </div>
        </div>
    </section>
    <!-- deals_section - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section sec_ptb_100 deco_wrap clearfix">
        <div class="container maxw_1430">
            <div class="motorcycle_section_title mb_30 text-center">
                <h2 class="title_text">Our <span>Products</span></h2>
                <p class="mb-0">Aliquam lorem ante, dapibus in, viverra</p>
            </div>

            <ul class="motorcycle_tabs_nav ul_li_center nav text-uppercase" role="tablist">
                <li>
                    <a class="active" data-toggle="tab" href="#latest_tab">Latest Product</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#best_tab">Best Product</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#featured_tab">Featured Product</a>
                </li>
            </ul>

            <div class="tab-content mb_50">
                <div id="latest_tab" class="tab-pane active">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_01.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_02.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_03.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_04.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_05.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_06.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_07.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li data-bg-color="#1db0ed">Sold</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_08.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_09.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="best_tab" class="tab-pane fade">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_01.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_02.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_03.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_04.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_05.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_06.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_07.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li data-bg-color="#1db0ed">Sold</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_08.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_09.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="featured_tab" class="tab-pane fade">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_01.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_02.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_03.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_04.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_05.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_06.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_07.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li data-bg-color="#1db0ed">Sold</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_08.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="motorcycle_product_grid">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/motorcycle/img_09.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_price">$250.00</span>
                                    <h3 class="item_title">
                                        <a href="#!">BRAKES</a>
                                    </h3>
                                    <span class="item_type text-uppercase">helmets - quality</span>
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="load_more text-center clearfix">
                <a class="custom_btn bg_carparts_red text-uppercase" href="#!">View More</a>
            </div>
        </div>

        <div class="deco_image motorcycle_image_1">
            <img src="assets/images/home_motorcycle/img_01.png" alt="image_not_found">
        </div>
    </section>
    <!-- product_section - end
    ================================================== -->


    <!-- feature_section - start
    ================================================== -->
    <section class="feature_section motorcycle_big_feature sec_ptb_100 has_overlay parallaxie clearfix" data-background="assets/images/backgrounds/bg_16.jpg">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                    <ul class="tabs_menu nav ul_li_block clearfix" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#tab_one">
                                <img src="assets/images/feature/motorcycle/img_02.png" alt="image_not_found">
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab_two">
                                <img src="assets/images/feature/motorcycle/img_03.png" alt="image_not_found">
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab_three">
                                <img src="assets/images/feature/motorcycle/img_04.png" alt="image_not_found">
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-10">
                    <div class="tab-content">
                        <div id="tab_one" class="tab-pane active">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="item_image text-center">
                                        <img src="assets/images/feature/motorcycle/img_01.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="item_content">
                                        <h3 class="item_title mb_15">
                                            Adjusts The Hydraulic Fork
                                        </h3>
                                        <p class="mb_15">
                                            Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus 
                                            varius laoreet srtrum aenean imperdiet. Etiam ultricies nisi vel augue.
                                        </p>
                                        <ul class="info_list ul_li_block mb_30 clearfix">
                                            <li><i class="fal fa-check"></i> web & Mobile - Optimized</li>
                                            <li><i class="fal fa-check"></i> Coustom domain server</li>
                                            <li><i class="fal fa-check"></i> best hosting on the market</li>
                                            <li><i class="fal fa-check"></i> outstanding support</li>
                                        </ul>
                                        <a class="custom_btn bg_carparts_red text-uppercase" href="#!">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="tab_two" class="tab-pane fade">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="item_image text-center">
                                        <img src="assets/images/feature/motorcycle/img_01.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="item_content">
                                        <h3 class="item_title mb_15">
                                            Adjusts The Hydraulic Fork
                                        </h3>
                                        <p class="mb_15">
                                            Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus 
                                            varius laoreet srtrum aenean imperdiet. Etiam ultricies nisi vel augue.
                                        </p>
                                        <ul class="info_list ul_li_block mb_30 clearfix">
                                            <li><i class="fal fa-check"></i> web & Mobile - Optimized</li>
                                            <li><i class="fal fa-check"></i> Coustom domain server</li>
                                            <li><i class="fal fa-check"></i> best hosting on the market</li>
                                            <li><i class="fal fa-check"></i> outstanding support</li>
                                        </ul>
                                        <a class="custom_btn bg_carparts_red text-uppercase" href="#!">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="tab_three" class="tab-pane fade">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="item_image text-center">
                                        <img src="assets/images/feature/motorcycle/img_01.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="item_content">
                                        <h3 class="item_title mb_15">
                                            Adjusts The Hydraulic Fork
                                        </h3>
                                        <p class="mb_15">
                                            Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus 
                                            varius laoreet srtrum aenean imperdiet. Etiam ultricies nisi vel augue.
                                        </p>
                                        <ul class="info_list ul_li_block mb_30 clearfix">
                                            <li><i class="fal fa-check"></i> web & Mobile - Optimized</li>
                                            <li><i class="fal fa-check"></i> Coustom domain server</li>
                                            <li><i class="fal fa-check"></i> best hosting on the market</li>
                                            <li><i class="fal fa-check"></i> outstanding support</li>
                                        </ul>
                                        <a class="custom_btn bg_carparts_red text-uppercase" href="#!">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_section - end
    ================================================== -->


    <!-- feature_section - start
    ================================================== -->
    <section class="feature_section clearfix">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="feature_fullimage text-center">
                        <img src="assets/images/feature/motorcycle/img_05.jpg" alt="image_not_found">
                        <div class="item_content">
                            <h3 class="item_title text-white mb_30">ACCELERATING </h3>
                            <a class="custom_btn btn_sm bg_black text-uppercase" href="#!">Shop Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="feature_fullimage text-center">
                        <img src="assets/images/feature/motorcycle/img_06.jpg" alt="image_not_found">
                        <div class="item_content">
                            <h3 class="item_title text-white mb_30">ACCELERATING </h3>
                            <a class="custom_btn btn_sm bg_black text-uppercase" href="#!">Shop Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="feature_fullimage text-center">
                        <img src="assets/images/feature/motorcycle/img_07.jpg" alt="image_not_found">
                        <div class="item_content">
                            <h3 class="item_title text-white mb_30">ACCELERATING </h3>
                            <a class="custom_btn btn_sm bg_black text-uppercase" href="#!">Shop Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="feature_fullimage text-center">
                        <img src="assets/images/feature/motorcycle/img_08.jpg" alt="image_not_found">
                        <div class="item_content">
                            <h3 class="item_title text-white mb_30">ACCELERATING </h3>
                            <a class="custom_btn btn_sm bg_black text-uppercase" href="#!">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_section - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section sec_ptb_100 deco_wrap clearfix">
        <div class="container maxw_1430">
            <div class="motorcycle_section_title mb_30 text-center">
                <h2 class="title_text">Our <span>Products</span></h2>
                <p class="mb-0">Aliquam lorem ante, dapibus in, viverra</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="motorcycle_product_grid">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li class="bg_carparts_red">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/motorcycle/img_08.png" alt="image_not_found">
                            <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <span class="item_price">$250.00</span>
                            <h3 class="item_title">
                                <a href="#!">BRAKES</a>
                            </h3>
                            <span class="item_type text-uppercase">helmets - quality</span>
                            <ul class="rating_star ul_li clearfix">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fal fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="motorcycle_product_grid">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li class="bg_carparts_red">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/motorcycle/img_09.png" alt="image_not_found">
                            <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <span class="item_price">$250.00</span>
                            <h3 class="item_title">
                                <a href="#!">BRAKES</a>
                            </h3>
                            <span class="item_type text-uppercase">helmets - quality</span>
                            <ul class="rating_star ul_li clearfix">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fal fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="motorcycle_product_grid">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li class="bg_carparts_red">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/motorcycle/img_04.png" alt="image_not_found">
                            <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <span class="item_price">$250.00</span>
                            <h3 class="item_title">
                                <a href="#!">BRAKES</a>
                            </h3>
                            <span class="item_type text-uppercase">helmets - quality</span>
                            <ul class="rating_star ul_li clearfix">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fal fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="motorcycle_product_grid">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li class="bg_carparts_red">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/motorcycle/img_07.png" alt="image_not_found">
                            <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <span class="item_price">$250.00</span>
                            <h3 class="item_title">
                                <a href="#!">BRAKES</a>
                            </h3>
                            <span class="item_type text-uppercase">helmets - quality</span>
                            <ul class="rating_star ul_li clearfix">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fal fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_section - end
    ================================================== -->


    <!-- testimonial_section - start
    ================================================== -->
    <section class="testimonial_section motorcycle_testimonial sec_ptb_100 clearfix">
        <div class="half_bg parallaxie" data-background="assets/images/backgrounds/bg_17.jpg"></div>
        <div class="container maxw_1430">
            <div class="carousel_wrap position-relative">
                <div class="motorcycle_testimonial_carousel" data-slick='{"dots": false}'>
                    <div class="item">
                        <div class="motorcycle_testimonial_item bg_white">
                            <div class="item_image">
                                <img src="assets/images/meta/img_02.jpg" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="sub_title">TESTIMONIALS</h4>
                                <h3 class="title_text">
                                    <span>BOSTON'S</span> MOTORCYCLE CLUB
                                </h3>
                                <span class="quote_icon">
                                    <i class="fas fa-quote-left"></i>
                                </span>
                                <ul class="admin_image ul_li mb_30 clearfix">
                                    <li><img src="assets/images/meta/img_03.jpg" alt="image_not_found"></li>
                                    <li><img src="assets/images/meta/img_04.jpg" alt="image_not_found"></li>
                                </ul>
                                <h5 class="admin_name">JOHN DOE</h5>
                                <p class="mb-0">
                                    If you are looking to find a group of well-established and safe to ride with, you’ve found us. We were founded as a formal motorcycle club in Boston in 1985, and are still going strong. We focus on safe riding and we also ride for with any questions you may have.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="motorcycle_testimonial_item bg_white">
                            <div class="item_image">
                                <img src="assets/images/meta/img_02.jpg" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="sub_title">TESTIMONIALS</h4>
                                <h3 class="title_text">
                                    <span>BOSTON'S</span> MOTORCYCLE CLUB
                                </h3>
                                <span class="quote_icon">
                                    <i class="fas fa-quote-left"></i>
                                </span>
                                <ul class="admin_image ul_li mb_30 clearfix">
                                    <li><img src="assets/images/meta/img_03.jpg" alt="image_not_found"></li>
                                    <li><img src="assets/images/meta/img_04.jpg" alt="image_not_found"></li>
                                </ul>
                                <h5 class="admin_name">JOHN DOE</h5>
                                <p class="mb-0">
                                    If you are looking to find a group of well-established and safe to ride with, you’ve found us. We were founded as a formal motorcycle club in Boston in 1985, and are still going strong. We focus on safe riding and we also ride for with any questions you may have.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="motorcycle_testimonial_item bg_white">
                            <div class="item_image">
                                <img src="assets/images/meta/img_02.jpg" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="sub_title">TESTIMONIALS</h4>
                                <h3 class="title_text">
                                    <span>BOSTON'S</span> MOTORCYCLE CLUB
                                </h3>
                                <span class="quote_icon">
                                    <i class="fas fa-quote-left"></i>
                                </span>
                                <ul class="admin_image ul_li mb_30 clearfix">
                                    <li><img src="assets/images/meta/img_03.jpg" alt="image_not_found"></li>
                                    <li><img src="assets/images/meta/img_04.jpg" alt="image_not_found"></li>
                                </ul>
                                <h5 class="admin_name">JOHN DOE</h5>
                                <p class="mb-0">
                                    If you are looking to find a group of well-established and safe to ride with, you’ve found us. We were founded as a formal motorcycle club in Boston in 1985, and are still going strong. We focus on safe riding and we also ride for with any questions you may have.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel_nav">
                    <button type="button" class="mt_left_arrow"><i class="fal fa-angle-left"></i></button>
                    <button type="button" class="mt_right_arrow"><i class="fal fa-angle-right"></i></button>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial_section - end
    ================================================== -->


    <!-- motorcycle_instagram - start
    ================================================== -->
    <div class="motorcycle_instagram clearfix" data-bg-color="#f5f5f5">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-2 col-md-3 col-md-4 col-6">
                    <a class="motorcycle_instagram_image">
                        <img src="assets/images/instagram/img_31.jpg" alt="image_not_found">
                    </a>
                </div>

                <div class="col-lg-2 col-md-3 col-md-4 col-6">
                    <a class="motorcycle_instagram_image">
                        <img src="assets/images/instagram/img_32.jpg" alt="image_not_found">
                    </a>
                </div>

                <div class="col-lg-2 col-md-3 col-md-4 col-6">
                    <a class="motorcycle_instagram_image">
                        <img src="assets/images/instagram/img_33.jpg" alt="image_not_found">
                    </a>
                </div>

                <div class="col-lg-2 col-md-3 col-md-4 col-6">
                    <a class="motorcycle_instagram_image">
                        <img src="assets/images/instagram/img_34.jpg" alt="image_not_found">
                    </a>
                </div>

                <div class="col-lg-2 col-md-3 col-md-4 col-6">
                    <a class="motorcycle_instagram_image">
                        <img src="assets/images/instagram/img_35.jpg" alt="image_not_found">
                    </a>
                </div>

                <div class="col-lg-2 col-md-3 col-md-4 col-6">
                    <a class="motorcycle_instagram_image">
                        <img src="assets/images/instagram/img_36.jpg" alt="image_not_found">
                    </a>
                </div>

                <div class="col-lg-2 col-md-3 col-md-4 col-6">
                    <a class="motorcycle_instagram_image">
                        <img src="assets/images/instagram/img_37.jpg" alt="image_not_found">
                    </a>
                </div>

                <div class="col-lg-2 col-md-3 col-md-4 col-6">
                    <a class="motorcycle_instagram_image">
                        <img src="assets/images/instagram/img_38.jpg" alt="image_not_found">
                    </a>
                </div>

                <div class="col-lg-2 col-md-3 col-md-4 col-6">
                    <a class="motorcycle_instagram_image">
                        <img src="assets/images/instagram/img_39.jpg" alt="image_not_found">
                    </a>
                </div>

                <div class="col-lg-2 col-md-3 col-md-4 col-6">
                    <a class="motorcycle_instagram_image">
                        <img src="assets/images/instagram/img_40.jpg" alt="image_not_found">
                    </a>
                </div>

                <div class="col-lg-2 col-md-3 col-md-4 col-6">
                    <a class="motorcycle_instagram_image">
                        <img src="assets/images/instagram/img_41.jpg" alt="image_not_found">
                    </a>
                </div>

                <div class="col-lg-2 col-md-3 col-md-4 col-6">
                    <a class="motorcycle_instagram_image">
                        <img src="assets/images/instagram/img_42.jpg" alt="image_not_found">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- motorcycle_instagram - end
    ================================================== -->


    <!-- barnd_section - start
    ================================================== -->
    <div class="barnd_section sec_ptb_50 clearfix">
        <div class="container maxw_1430">
            <div class="barnd_carousel clearfix">
                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_37.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_38.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_39.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_40.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_41.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_42.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_37.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_38.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_39.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_40.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_41.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_42.png" alt="image_not_found">
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
    @include('home.motorcycle.motorcycle_Footer')
@endsection
