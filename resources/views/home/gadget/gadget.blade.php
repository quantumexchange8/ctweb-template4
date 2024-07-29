@extends('layout.master')

@section('title')
<title>Gadget Shop - Current Tech</title>
@endsection

@section('body_class', 'home_gadget')

@section('navbar')
    @include('home.gadget.gadget_Navbar')
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


    <!-- banner_section - start
    ================================================== -->
    <section class="banner_section gadget_banner text-white clearfix" data-background="assets/images/banner/gadget/bg_02.png">
        <div class="container maxw_1600">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 order-last">
                    <div class="play_btn_wrap">
                        <a class="play_btn_1" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                            <span><i class="fas fa-play"></i></span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="banner_content">
                        <h1 class="text-white">The Ultraportable Drone HDR VIDEO</h1>
                        <p>
                            Sintex camera is an optical for instrument for recording capturing more images, may be transmitted to another location, or both. The images may be individual the best camera in the world for photographs.
                        </p>
                        <a class="custom_btn bg_gadget_red btn_round text-uppercase" href="#!">Purchase Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner_image">
            <img src="assets/images/banner/gadget/img_01.png" alt="image_not_found">
        </div>
    </section>
    <!-- banner_section - end
    ================================================== -->


    <!-- gadget_feature_section - start
    ================================================== -->
    <section class="gadget_feature_section sec_ptb_100 clearfix" data-background="assets/images/backgrounds/map_bg_01.png">
        <div class="container">
            <div class="row mt_30 justify-content-center">

                <div class="col-lg-4 col-md-6 col-sm-7 col-xs-12">
                    <div class="gadget_feature_bordered bg_white text-center">
                        <div class="item_icon" data-bg-color="#fff9dd">
                            <img src="assets/images/icons/gadget/icon_01.png" alt="icon_not_found">
                        </div>
                        <h3 class="item_title">Vision Based</h3>
                        <p class="mb-0">
                            The ability to navigate with 
                            reliability,stability and precision
                            is a core requirement
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-7 col-xs-12">
                    <div class="gadget_feature_bordered bg_white text-center">
                        <div class="item_icon" data-bg-color="#ffe6e2">
                            <img src="assets/images/icons/gadget/icon_02.png" alt="icon_not_found">
                        </div>
                        <h3 class="item_title">Fully Autonomous</h3>
                        <p class="mb-0">
                            The ability to navigate with 
                            reliability,stability and precision
                            is a core requirement
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-7 col-xs-12">
                    <div class="gadget_feature_bordered bg_white text-center">
                        <div class="item_icon" data-bg-color="#e3f8fa">
                            <img src="assets/images/icons/gadget/icon_03.png" alt="icon_not_found">
                        </div>
                        <h3 class="item_title">Low Complexity</h3>
                        <p class="mb-0">
                            The ability to navigate with 
                            reliability,stability and precision
                            is a core requirement
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- gadget_feature_section - end
    ================================================== -->


    <!-- feature_section - start
    ================================================== -->
    <section class="feature_section sec_ptb_100 clearfix">
        <div class="container">
            <div class="gadget_feature_product">
                <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                    <div class="col-lg-7 col-md-8 col-sm-10 col-xs-12">
                        <div class="item_image">
                            <img src="assets/images/feature/gadget/img_01.png" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-8 col-sm-10 col-xs-12">
                        <div class="item_content">
                            <h2 class="item_title">
                                Benefits of Precision Landing in Drone Operations
                            </h2>
                            <p>
                                The ability to navigate with reliability, stability and precision is a core requirement for autonomous drone operations. Landing, in particular, must be doneprecisely, whether on a charging pad or a target docking station. For long duration,
                            </p>
                            <a class="custom_btn bg_gadget_red btn_round text-uppercase" href="#!">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_section - end
    ================================================== -->


    <!-- gadget_gallery_section - start
    ================================================== -->
    <section class="gadget_gallery_section sec_ptb_100 clearfix" data-background="assets/images/gallery/gadget/bg_01.png">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="gadget_gallery_carousel_wrap position-relative">
                        <div class="gadget_gallery_carousel" data-slick='{"dots": false}'>
                            <div class="item">
                                <div class="gadget_gallery_fullimage">
                                    <img src="assets/images/gallery/gadget/img_01.jpg" alt="image_not_found">
                                    <a class="play_btn_1" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                                        <span><i class="fas fa-play"></i></span>
                                    </a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="gadget_gallery_fullimage">
                                    <img src="assets/images/gallery/gadget/img_02.jpg" alt="image_not_found">
                                    <a class="play_btn_1" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                                        <span><i class="fas fa-play"></i></span>
                                    </a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="gadget_gallery_fullimage">
                                    <img src="assets/images/gallery/gadget/img_03.jpg" alt="image_not_found">
                                    <a class="play_btn_1" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                                        <span><i class="fas fa-play"></i></span>
                                    </a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="gadget_gallery_fullimage">
                                    <img src="assets/images/gallery/gadget/img_04.jpg" alt="image_not_found">
                                    <a class="play_btn_1" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                                        <span><i class="fas fa-play"></i></span>
                                    </a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="gadget_gallery_fullimage">
                                    <img src="assets/images/gallery/gadget/img_01.jpg" alt="image_not_found">
                                    <a class="play_btn_1" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                                        <span><i class="fas fa-play"></i></span>
                                    </a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="gadget_gallery_fullimage">
                                    <img src="assets/images/gallery/gadget/img_02.jpg" alt="image_not_found">
                                    <a class="play_btn_1" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                                        <span><i class="fas fa-play"></i></span>
                                    </a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="gadget_gallery_fullimage">
                                    <img src="assets/images/gallery/gadget/img_03.jpg" alt="image_not_found">
                                    <a class="play_btn_1" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                                        <span><i class="fas fa-play"></i></span>
                                    </a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="gadget_gallery_fullimage">
                                    <img src="assets/images/gallery/gadget/img_04.jpg" alt="image_not_found">
                                    <a class="play_btn_1" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                                        <span><i class="fas fa-play"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel_nav">
                            <button type="button" class="ggc_left_arrow"><i class="fal fa-angle-left"></i></button>
                            <button type="button" class="ggc_right_arrow"><i class="fal fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-7 col-sm-9 col-xs-12">
                    <div class="gadget_gallery_content text-white">
                        <h2 class="item_title text-white">
                            Visit our Best Video Gallery
                        </h2>
                        <p class="mb_30">
                            The ability to navigate with reliability, stability and precision is a core requirement for autonomous drone operations. Landing, in 
                            particular, must be done precisely, whether on 
                        </p>
                        <a class="custom_btn bg_gadget_red btn_round text-uppercase" href="#!">Purchase Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gadget_gallery_section - end
    ================================================== -->


    <!-- gadget_feature2_section - start
    ================================================== -->
    <section class="gadget_feature2_section sec_ptb_100 clearfix" data-background="assets/images/backgrounds/bg_20.png">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="gadget_feature2_wrap">
                        <div class="shape_image">
                            <img src="assets/images/feature/gadget/img_02.png" alt="image_not_found">
                        </div>

                        <div class="gadget_feature_listlayout">
                            <div class="item_icon" data-bg-color="#f69e22">
                                <span><i class="fal fa-lightbulb-on"></i></span>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">Innovative Retail Solution</h3>
                                <p class="mb-0">We develop the relationships that underpin</p>
                            </div>
                        </div>

                        <div class="gadget_feature_listlayout">
                            <div class="item_icon" data-bg-color="#6f60ff">
                                <span><i class="fal fa-cube"></i></span>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">Innovative Retail Solution</h3>
                                <p class="mb-0">We develop the relationships that underpin</p>
                            </div>
                        </div>

                        <div class="gadget_feature_listlayout">
                            <div class="item_icon" data-bg-color="#1aa68e">
                                <span><i class="far fa-bullseye"></i></span>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">Innovative Retail Solution</h3>
                                <p class="mb-0">We develop the relationships that underpin</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="gadget_feature2_content">
                        <h4>Get installed new inventory Management</h4>
                        <h2>We Help You Embrace the Future</h2>
                        <p class="mb_30">
                            We develop the relationships that underpin the next phase in your organisation’s growth. We do this by discerning the people and that platforms where interests converge.
                        </p>
                        <a class="custom_btn bg_gadget_red btn_round text-uppercase" href="#!">GET STARTED</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gadget_feature2_section - end
    ================================================== -->


    <!-- gb_product_section - start
    ================================================== -->
    <section class="gb_product_section sec_ptb_100 pb-0 clearfix" data-background="assets/images/backgrounds/bg_21.jpg">
        <div class="container">

            <div class="gadget_section_title text-center text-uppercase">
                <h4 class="sub_title mb_15 text-white"><span class="line bg_gadget_red"></span> Best Products <span class="line bg_gadget_red"></span></h4>
                <h2 class="title_text mb-0 text-white">Drone Products</h2>
            </div>

            <div class="best_drone_carousel arrow_ycenter">
                <div class="slideshow1_slider" data-slick='{"dots": false}'>
                    <div class="item">
                        <div class="gadget_best_product">
                            <div class="item_image" data-background="assets/images/backgrounds/bg_24.jpg">
                                <img src="assets/images/shop/gadget/img_01.png" alt="image_not_found">
                            </div>
                            <div class="item_content" data-bg-color="#da3434">
                                <span class="item_price text-white"><strong>$190</strong> <del>$890</del></span>
                                <h3 class="item_title">
                                    <a class="text-white" href="#!">
                                        ProFlight Seeker Drone with 2MP Camera
                                    </a>
                                </h3>
                                <ul class="action_btns ul_li clearfix">
                                    <li><a class="tooltips" href="#!" data-placement="top" title="Tooltip on top"><i class="fal fa-heart"></i></a></li>
                                    <li><a class="tooltips" href="#!" data-placement="top" title="Tooltip on top"><i class="fal fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="gadget_best_product">
                            <div class="item_image" data-background="assets/images/backgrounds/bg_24.jpg">
                                <img src="assets/images/shop/gadget/img_01.png" alt="image_not_found">
                            </div>
                            <div class="item_content" data-bg-color="#da3434">
                                <span class="item_price text-white"><strong>$190</strong> <del>$890</del></span>
                                <h3 class="item_title">
                                    <a class="text-white" href="#!">
                                        ProFlight Seeker Drone with 2MP Camera
                                    </a>
                                </h3>
                                <ul class="action_btns ul_li clearfix">
                                    <li><a class="tooltips" href="#!" data-placement="top" title="Tooltip on top"><i class="fal fa-heart"></i></a></li>
                                    <li><a class="tooltips" href="#!" data-placement="top" title="Tooltip on top"><i class="fal fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="gadget_best_product">
                            <div class="item_image" data-background="assets/images/backgrounds/bg_24.jpg">
                                <img src="assets/images/shop/gadget/img_01.png" alt="image_not_found">
                            </div>
                            <div class="item_content" data-bg-color="#da3434">
                                <span class="item_price text-white"><strong>$190</strong> <del>$890</del></span>
                                <h3 class="item_title">
                                    <a class="text-white" href="#!">
                                        ProFlight Seeker Drone with 2MP Camera
                                    </a>
                                </h3>
                                <ul class="action_btns ul_li clearfix">
                                    <li><a class="tooltips" href="#!" data-placement="top" title="Tooltip on top"><i class="fal fa-heart"></i></a></li>
                                    <li><a class="tooltips" href="#!" data-placement="top" title="Tooltip on top"><i class="fal fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_nav">
                    <button type="button" class="left_arrow"></button>
                    <button type="button" class="right_arrow"></button>
                </div>
            </div>
            
        </div>
    </section>
    <!-- gb_product_section - end
    ================================================== -->


    <!-- drone_info_feature_section - start
    ================================================== -->
    <section class="drone_info_feature_section sec_ptb_100 clearfix" data-background="assets/images/backgrounds/bg_25.jpg">
        <div class="container maxw_1460">
            <div class="gadget_section_title text-center text-uppercase mb_50">
                <h4 class="sub_title mb_15"><span class="line bg_gadget_red"></span> Best Products <span class="line bg_gadget_red"></span></h4>
                <h2 class="title_text mb-0">Drone Features</h2>
            </div>

            <div class="drone_info_image2 text-center">
                <img src="assets/images/feature/gadget/img_03.png" alt="image_not_found">
            </div>
        </div>
    </section>
    <!-- drone_info_feature_section - end
    ================================================== -->


    <!-- drone_flat_sale - start
    ================================================== -->
    <section class="drone_flat_sale sec_ptb_140 deco_wrap clearfix" data-background="assets/images/backgrounds/bg_26.jpg">
        <div class="container maxw_1460">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-7">
                    <div class="item_image">
                        <img src="assets/images/shop/gadget/img_05.png" alt="image_not_found">
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="item_content">
                        <h4 class="mb_15">FLAT SALE $250</h4>
                        <h2>
                            A Drone, in a technological Context, is an unmanned Aircraft
                        </h2>
                        <p class="mb_30">
                            We develop the relationships that underpin the next phase in your organisation’s growth. We do this by discerning the people and that platforms where interests converge.
                        </p>
                        <a class="custom_btn btn_round bg_gadget_red text-uppercase" href="#!">Get Started</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="deco_image">
            <img src="assets/images/shop/gadget/img_03.png" alt="image_not_found">
        </div>
    </section>
    <!-- drone_flat_sale - end
    ================================================== -->


    <!-- gadget_feature_section - start
    ================================================== -->
    <section class="gadget_feature_section sec_ptb_140 has_overlay parallaxie clearfix" data-background="assets/images/backgrounds/bg_27.jpg">
        <div class="overlay" data-bg-color="rgba(26, 26, 26, 0.8)"></div>
        <div class="container">

            <div class="gadget_section_title text-center text-uppercase mb_50">
                <h4 class="sub_title mb_15 text-white"><span class="line bg_gadget_red"></span> Best Products <span class="line bg_gadget_red"></span></h4>
                <h2 class="title_text mb-0 text-white">Drone Features</h2>
            </div>

            <div class="gadget_feature_carousel arrow_ycenter">
                <div class="slideshow3_slider row mb_50" data-slick='{"dots": false}'>
                    <div class="item col">
                        <div class="gadget_feature_card" data-bg-color="#ffffff">
                            <div class="item_image">
                                <img src="assets/images/shop/gadget/img_07.png" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="item_price">$190</h4>
                                <h3 class="item_title text-uppercase mb_15">
                                    <a href="#!">Drone Features</a>
                                </h3>
                                <ul class="action_btns ul_li clearfix">
                                    <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li><a href="#!"><i class="fal fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="gadget_feature_card" data-bg-color="#ffffff">
                            <div class="item_image">
                                <img src="assets/images/shop/gadget/img_08.png" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="item_price">$190</h4>
                                <h3 class="item_title text-uppercase mb_15">
                                    <a href="#!">Drone Features</a>
                                </h3>
                                <ul class="action_btns ul_li clearfix">
                                    <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li><a href="#!"><i class="fal fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="gadget_feature_card" data-bg-color="#ffffff">
                            <div class="item_image">
                                <img src="assets/images/shop/gadget/img_09.png" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="item_price">$190</h4>
                                <h3 class="item_title text-uppercase mb_15">
                                    <a href="#!">Drone Features</a>
                                </h3>
                                <ul class="action_btns ul_li clearfix">
                                    <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li><a href="#!"><i class="fal fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="gadget_feature_card" data-bg-color="#ffffff">
                            <div class="item_image">
                                <img src="assets/images/shop/gadget/img_07.png" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="item_price">$190</h4>
                                <h3 class="item_title text-uppercase mb_15">
                                    <a href="#!">Drone Features</a>
                                </h3>
                                <ul class="action_btns ul_li clearfix">
                                    <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li><a href="#!"><i class="fal fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="gadget_feature_card" data-bg-color="#ffffff">
                            <div class="item_image">
                                <img src="assets/images/shop/gadget/img_08.png" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="item_price">$190</h4>
                                <h3 class="item_title text-uppercase mb_15">
                                    <a href="#!">Drone Features</a>
                                </h3>
                                <ul class="action_btns ul_li clearfix">
                                    <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li><a href="#!"><i class="fal fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="gadget_feature_card" data-bg-color="#ffffff">
                            <div class="item_image">
                                <img src="assets/images/shop/gadget/img_09.png" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="item_price">$190</h4>
                                <h3 class="item_title text-uppercase mb_15">
                                    <a href="#!">Drone Features</a>
                                </h3>
                                <ul class="action_btns ul_li clearfix">
                                    <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li><a href="#!"><i class="fal fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel_nav">
                    <button type="button" class="ss3_left_arrow"><i class="fal fa-angle-left"></i></button>
                    <button type="button" class="ss3_right_arrow"><i class="fal fa-angle-right"></i></button>
                </div>
            </div>

            <div class="abtn_wrap text-center">
                <a class="custom_btn btn_round bg_gadget_red text-uppercase" href="#!">View More</a>
            </div>
            
        </div>
    </section>
    <!-- gadget_feature_section - end
    ================================================== -->


    <!-- gadget_big_feature - start
    ================================================== -->
    <section class="gadget_big_feature sec_ptb_140 has_overlay parallaxie clearfix" data-background="assets/images/backgrounds/bg_28.jpg">
        <div class="overlay" data-bg-color="rgba(218, 52, 52, 0.8)"></div>
        <div class="container">
            <div class="item_content text-center">
                <a class="play_btn_1 mb_30" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                    <span><i class="fas fa-play"></i></span>
                </a>
                <h2 class="text-white">Provides high-quality Drones</h2>
                <a class="custom_btn btn_round bg_black text-uppercase" href="#!">View More</a>
            </div>
        </div>
    </section>
    <!-- gadget_big_feature - end
    ================================================== -->


    <!-- gadget_offer_section - start
    ================================================== -->
    <section class="gadget_offer_section clearfix">
        <div class="container maxw_1460">
            <div class="gadget_big_offer sec_ptb_140">
                <div class="row align-items-end justify-content-lg-between">
                    <div class="col-lg-7">
                        <div class="item_image">
                            <img src="assets/images/shop/gadget/img_10.png" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="item_content">
                            <h3 class="item_title">
                                Able to shoot true 4K video and Full HD slow motion
                            </h3>
                            <p class="mb_30">
                                We develop the relationships that underpin the next phase in your organisation’s growth. We do this by discerning the 
                            </p>
                            <a class="custom_btn btn_round bg_gadget_red text-uppercase" href="#!">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gadget_big_offer sec_ptb_140">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-7 order-last">
                        <div class="item_image">
                            <img src="assets/images/shop/gadget/img_11.png" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="item_content text-xl-right">
                            <h3 class="item_title">
                                Pro Camera Drone is DJI's most advanced Phantom
                            </h3>
                            <p class="mb_30">
                                We develop the relationships that underpin the next phase in your organisation’s growth. We do this by discerning the 
                            </p>
                            <a class="custom_btn btn_round bg_gadget_red text-uppercase" href="#!">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gadget_offer_section - end
    ================================================== -->


    <!-- gadget_testimonial_section - start
    ================================================== -->
    <section class="gadget_testimonial_section sec_ptb_140 has_overlay clearfix" data-background="assets/images/backgrounds/bg_29.jpg">
        <div class="overlay" data-bg-color="rgba(26, 26, 26, 0.8)"></div>
        <div class="container">
            <div class="slideshow2_slider row" data-slick='{"dots": false, "arrows": false}'>
                <div class="item col">
                    <div class="gadget_testimonial_item">
                        <div class="border_wrap" data-background="assets/images/border_red.png">
                            <div class="content_wrap text-white" data-bg-color="#212121">
                                <h4 class="hero_name text-white">Diana Austin - <span>Web Designer</span></h4>
                                <ul class="rating_star ul_li clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                                <p class="mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad inim veniam, quis nostrud exercitation
                                </p>
                            </div>
                        </div>
                        <div class="hero_thumbnail">
                            <img src="assets/images/meta/img_01.png" alt="image_not_found">
                        </div>
                    </div>
                </div>

                <div class="item col">
                    <div class="gadget_testimonial_item">
                        <div class="border_wrap" data-background="assets/images/border_red.png">
                            <div class="content_wrap text-white" data-bg-color="#212121">
                                <h4 class="hero_name text-white">Diana Austin - <span>Web Designer</span></h4>
                                <ul class="rating_star ul_li clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                                <p class="mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad inim veniam, quis nostrud exercitation
                                </p>
                            </div>
                        </div>
                        <div class="hero_thumbnail">
                            <img src="assets/images/meta/img_05.png" alt="image_not_found">
                        </div>
                    </div>
                </div>

                <div class="item col">
                    <div class="gadget_testimonial_item">
                        <div class="border_wrap" data-background="assets/images/border_red.png">
                            <div class="content_wrap text-white" data-bg-color="#212121">
                                <h4 class="hero_name text-white">Diana Austin - <span>Web Designer</span></h4>
                                <ul class="rating_star ul_li clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                                <p class="mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad inim veniam, quis nostrud exercitation
                                </p>
                            </div>
                        </div>
                        <div class="hero_thumbnail">
                            <img src="assets/images/meta/img_01.png" alt="image_not_found">
                        </div>
                    </div>
                </div>

                <div class="item col">
                    <div class="gadget_testimonial_item">
                        <div class="border_wrap" data-background="assets/images/border_red.png">
                            <div class="content_wrap text-white" data-bg-color="#212121">
                                <h4 class="hero_name text-white">Diana Austin - <span>Web Designer</span></h4>
                                <ul class="rating_star ul_li clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                                <p class="mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad inim veniam, quis nostrud exercitation
                                </p>
                            </div>
                        </div>
                        <div class="hero_thumbnail">
                            <img src="assets/images/meta/img_05.png" alt="image_not_found">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gadget_testimonial_section - end
    ================================================== -->


    <!-- blog_section - start
    ================================================== -->
    <section class="blog_section sec_ptb_140 pb-0 mb_30 clearfix">
        <div class="container">

            <div class="gadget_section_title text-center text-uppercase">
                <h4 class="sub_title mb_15"><span class="line bg_gadget_red"></span> Best Products <span class="line bg_gadget_red"></span></h4>
                <h2 class="title_text mb-0">Drone News</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                    <div class="gadget_blog_grid">
                        <a class="item_image" href="#!" data-bg-color="#000000">
                            <img src="assets/images/blog/gadget/img_01.jpg" alt="image_not_found">
                        </a>
                        <div class="item_content">
                            <h4 class="post_date">February 8, 2018</h4>
                            <h3 class="item_title mb_15">
                                <a href="#!">Apple’s new iPhone software tem pus lorem ipsum dolor</a>
                            </h3>
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur lit, sed do eiusmod tempor incididunt ut bore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                    <div class="gadget_blog_grid">
                        <a class="item_image" href="#!" data-bg-color="#000000">
                            <img src="assets/images/blog/gadget/img_02.jpg" alt="image_not_found">
                        </a>
                        <div class="item_content">
                            <h4 class="post_date">February 8, 2018</h4>
                            <h3 class="item_title mb_15">
                                <a href="#!">Apple’s new iPhone software tem pus lorem ipsum dolor</a>
                            </h3>
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur lit, sed do eiusmod tempor incididunt ut bore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                    <div class="gadget_blog_grid">
                        <a class="item_image" href="#!" data-bg-color="#000000">
                            <img src="assets/images/blog/gadget/img_03.jpg" alt="image_not_found">
                        </a>
                        <div class="item_content">
                            <h4 class="post_date">February 8, 2018</h4>
                            <h3 class="item_title mb_15">
                                <a href="#!">Apple’s new iPhone software tem pus lorem ipsum dolor</a>
                            </h3>
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur lit, sed do eiusmod tempor incididunt ut bore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="barnd_section clearfix">
                <div class="container">
                    <div class="barnd_carousel clearfix">
                        <div class="item">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_43.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="item">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_44.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="item">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_45.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="item">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_46.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="item">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_47.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="item">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_43.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="item">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_44.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="item">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_45.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="item">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_46.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="item">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_47.png" alt="image_not_found">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- blog_section - end
    ================================================== -->


</main>
@endsection

@section('footer')
    @include('home.gadget.gadget_Footer')
@endsection