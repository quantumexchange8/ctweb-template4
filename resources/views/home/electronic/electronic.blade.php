@extends('layout.master')


@section('title')
<title>Electronic - Current Tech</title>
@endsection

@section('body_class', 'home_electronic')

@section('navbar')
    @include('home.electronic.electronic_Navbar')
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
    <section class="slider_section sec_ptb_50 clearfix">
        <div class="container maxw_1600">
            <div class="row justify-content-lg-between">
                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                    <div class="alldepartments_menu_wrap">
                        <button class="alldepartments_btn bg_electronic_blue text-uppercase" type="button" data-toggle="collapse" data-target="#alldepartments_dropdown" aria-expanded="false" aria-controls="alldepartments_dropdown">
                            <i class="far fa-bars"></i> All Departments
                        </button>
                        <div class="alldepartments_dropdown show_lg collapse" id="alldepartments_dropdown">
                            <div class="card">
                                <ul class="alldepartments_menulist ul_li_block clearfix">
                                    <li><a href="#!">Top 100 Offers</a></li>
                                    <li><a href="#!">New Arrivals</a></li>
                                    <li class="has_child"><a href="#!">Computers & Laptops</a></li>
                                    <li class="has_child"><a href="#!">Cameras & Photo</a></li>
                                    <li class="has_child"><a href="#!">Smart Phones & Tablets</a></li>
                                    <li><a href="#!">Video Games & Consoles</a></li>
                                    <li class="has_child"><a href="#!">TV & Audio</a></li>
                                    <li><a href="#!">Gadgets</a></li>
                                    <li class="has_child"><a href="#!">Car Electronic & GPS</a></li>
                                    <li class="has_child"><a href="#!">Accesories</a></li>
                                    <li><a href="#!">Virtual Reality</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div class="electronic_slider position-relative clearfix">
                        <div class="main_slider clearfix" data-slick='{"arrows": false}'>
                            <div class="item clearfix" data-background="assets/images/slider/electronic/bg_01.jpg">
                                <div class="slider_image order-last" data-animation="fadeInUp" data-delay=".4s">
                                    <img src="assets/images/slider/electronic/img_01.png" alt="image_not_found">
                                </div>
                                <div class="slider_content">
                                    <h3 class="text-uppercase" data-animation="fadeInUp" data-delay=".6s">The Gift you are Wishing</h3>
                                    <p data-animation="fadeInUp" data-delay=".8s">
                                        Big screens in incredibly slim designs that in your hand.
                                    </p>
                                    <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                                        <a href="#!" class="custom_btn btn_sm btn_border border_electronic">Browse Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item clearfix" data-background="assets/images/slider/electronic/bg_01.jpg">
                                <div class="slider_image order-last" data-animation="fadeInUp" data-delay=".4s">
                                    <img src="assets/images/slider/electronic/img_01.png" alt="image_not_found">
                                </div>
                                <div class="slider_content">
                                    <h3 class="text-uppercase" data-animation="fadeInUp" data-delay=".6s">The Gift you are Wishing</h3>
                                    <p data-animation="fadeInUp" data-delay=".8s">
                                        Big screens in incredibly slim designs that in your hand.
                                    </p>
                                    <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                                        <a href="#!" class="custom_btn btn_sm btn_border border_electronic">Browse Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item clearfix" data-background="assets/images/slider/electronic/bg_01.jpg">
                                <div class="slider_image order-last" data-animation="fadeInUp" data-delay=".4s">
                                    <img src="assets/images/slider/electronic/img_01.png" alt="image_not_found">
                                </div>
                                <div class="slider_content">
                                    <h3 class="text-uppercase" data-animation="fadeInUp" data-delay=".6s">The Gift you are Wishing</h3>
                                    <p data-animation="fadeInUp" data-delay=".8s">
                                        Big screens in incredibly slim designs that in your hand.
                                    </p>
                                    <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                                        <a href="#!" class="custom_btn btn_sm btn_border border_electronic">Browse Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- slider progress -->
                        <div class="slick-progress">
                            <span></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="advertisement_image mb_30">
                        <a href="#!">
                            <img src="assets/images/offer/electronic/img_02.jpg" alt="image_not_found">
                        </a>
                    </div>
                    <div class="advertisement_image">
                        <a href="#!">
                            <img src="assets/images/offer/electronic/img_03.jpg" alt="image_not_found">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- slider_section - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section mb_50 clearfix">
        <div class="container maxw_1600">
            <div class="electronic_content_container">
                <div class="row justify-content-lg-between">

                    <div class="col-lg-4">
                        <div class="electronic_deals_slider">
                            <div class="item_header">
                                <h2 class="title_text text-white mb-0"><strong>Deals</strong> of the week</h2>
                            </div>
                            <div class="weekly_deals_carousel position-relative">
                                <div class="slideshow1_slider" data-slick='{"dots": false}'>
                                    <div class="item">
                                        <div class="electronic_deals_item">
                                            <ul class="item_variations ul_li clearfix">
                                                <li>
                                                    <button type="button">
                                                        <img src="assets/images/shop/electronic/child_01.png" alt="image_not_found">
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button">
                                                        <img src="assets/images/shop/electronic/child_01.png" alt="image_not_found">
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button">
                                                        <img src="assets/images/shop/electronic/child_01.png" alt="image_not_found">
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button">
                                                        <img src="assets/images/shop/electronic/child_01.png" alt="image_not_found">
                                                    </button>
                                                </li>
                                            </ul>
                                            <div class="item_price">
                                                <strong>$425.89</strong> <del>$239.99</del>
                                            </div>
                                            <h3 class="item_title mb-0">
                                                <a href="#!">Tablet Red EliteBook Revolve</a>
                                            </h3>
                                            <div class="item_image">
                                                <img src="assets/images/shop/electronic/img_01.png" alt="image_not_found">
                                            </div>
                                            <div class="countdown_wrap">
                                                <div class="countdown_content">
                                                    <h4>Hurry up!</h4>
                                                    <p>Offer ends in:</p>
                                                </div>
                                                <ul class="countdown_timer timein_box ul_li clearfix" data-countdown="2021/3/24"></ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="electronic_deals_item">
                                            <ul class="item_variations ul_li clearfix">
                                                <li>
                                                    <button type="button">
                                                        <img src="assets/images/shop/electronic/child_01.png" alt="image_not_found">
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button">
                                                        <img src="assets/images/shop/electronic/child_01.png" alt="image_not_found">
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button">
                                                        <img src="assets/images/shop/electronic/child_01.png" alt="image_not_found">
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button">
                                                        <img src="assets/images/shop/electronic/child_01.png" alt="image_not_found">
                                                    </button>
                                                </li>
                                            </ul>
                                            <div class="item_price">
                                                <strong>$425.89</strong> <del>$239.99</del>
                                            </div>
                                            <h3 class="item_title mb-0">
                                                <a href="#!">Tablet Red EliteBook Revolve</a>
                                            </h3>
                                            <div class="item_image">
                                                <img src="assets/images/shop/electronic/img_01.png" alt="image_not_found">
                                            </div>
                                            <div class="countdown_wrap">
                                                <div class="countdown_content">
                                                    <h4>Hurry up!</h4>
                                                    <p>Offer ends in:</p>
                                                </div>
                                                <ul class="countdown_timer timein_box ul_li clearfix" data-countdown="2021/3/24"></ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="electronic_deals_item">
                                            <ul class="item_variations ul_li clearfix">
                                                <li>
                                                    <button type="button">
                                                        <img src="assets/images/shop/electronic/child_01.png" alt="image_not_found">
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button">
                                                        <img src="assets/images/shop/electronic/child_01.png" alt="image_not_found">
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button">
                                                        <img src="assets/images/shop/electronic/child_01.png" alt="image_not_found">
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button">
                                                        <img src="assets/images/shop/electronic/child_01.png" alt="image_not_found">
                                                    </button>
                                                </li>
                                            </ul>
                                            <div class="item_price">
                                                <strong>$425.89</strong> <del>$239.99</del>
                                            </div>
                                            <h3 class="item_title mb-0">
                                                <a href="#!">Tablet Red EliteBook Revolve</a>
                                            </h3>
                                            <div class="item_image">
                                                <img src="assets/images/shop/electronic/img_01.png" alt="image_not_found">
                                            </div>
                                            <div class="countdown_wrap">
                                                <div class="countdown_content">
                                                    <h4>Hurry up!</h4>
                                                    <p>Offer ends in:</p>
                                                </div>
                                                <ul class="countdown_timer timein_box ul_li clearfix" data-countdown="2021/3/24"></ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel_nav clearfix">
                                    <button type="button" class="left_arrow d-inline-block"><i class="fal fa-angle-left mr-1"></i> Previous deal</button>
                                    <button type="button" class="right_arrow d-inline-block">Next deal <i class="fal fa-angle-right ml-1"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="electronic_product_group clearfix">
                            <ul class="electronic_tabs_nav nav ul_li_right clearfix">
                                <li><a class="active" data-toggle="tab" href="#featured_tab">Featured</a></li>
                                <li><a data-toggle="tab" href="#onsale_tab">On Sale</a></li>
                                <li><a data-toggle="tab" href="#toprated_tab">Top Rated</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="featured_tab" class="tab-pane fade active">
                                    <ul class="electronic_product_columns ul_li has_4columns clearfix">
                                        <li>
                                            <div class="electronic_product_item">
                                                <ul class="product_label ul_li clearfix">
                                                    <li>-$30</li>
                                                </ul>
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_02.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <span class="item_name">Speakers</span>
                                                    <h3 class="item_title">
                                                        <a href="#!">Wireless Audio System Multiroom 360</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <ul class="product_label ul_li clearfix">
                                                    <li>-$30</li>
                                                </ul>
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_03.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <span class="item_name">Speakers</span>
                                                    <h3 class="item_title">
                                                        <a href="#!">Wireless Audio System Multiroom 360</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <ul class="product_label ul_li clearfix">
                                                    <li>-$30</li>
                                                </ul>
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_04.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <span class="item_name">Speakers</span>
                                                    <h3 class="item_title">
                                                        <a href="#!">Wireless Audio System Multiroom 360</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <ul class="product_label ul_li clearfix">
                                                    <li>-$30</li>
                                                </ul>
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_05.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <span class="item_name">Speakers</span>
                                                    <h3 class="item_title">
                                                        <a href="#!">Wireless Audio System Multiroom 360</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <ul class="product_label ul_li clearfix">
                                                    <li>-$30</li>
                                                </ul>
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <span class="item_name">Speakers</span>
                                                    <h3 class="item_title">
                                                        <a href="#!">Wireless Audio System Multiroom 360</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <ul class="product_label ul_li clearfix">
                                                    <li>-$30</li>
                                                </ul>
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_07.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <span class="item_name">Speakers</span>
                                                    <h3 class="item_title">
                                                        <a href="#!">Wireless Audio System Multiroom 360</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <ul class="product_label ul_li clearfix">
                                                    <li>-$30</li>
                                                </ul>
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_08.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <span class="item_name">Speakers</span>
                                                    <h3 class="item_title">
                                                        <a href="#!">Wireless Audio System Multiroom 360</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <ul class="product_label ul_li clearfix">
                                                    <li>-$30</li>
                                                </ul>
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_09.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <span class="item_name">Speakers</span>
                                                    <h3 class="item_title">
                                                        <a href="#!">Wireless Audio System Multiroom 360</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div id="onsale_tab" class="tab-pane fade">
                                    <ul class="electronic_product_columns ul_li has_4columns clearfix">
                                        <li>
                                            <div class="electronic_product_item">
                                                <ul class="product_label ul_li clearfix">
                                                    <li>-$30</li>
                                                </ul>
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_02.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <span class="item_name">Speakers</span>
                                                    <h3 class="item_title">
                                                        <a href="#!">Wireless Audio System Multiroom 360</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <ul class="product_label ul_li clearfix">
                                                    <li>-$30</li>
                                                </ul>
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_03.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <span class="item_name">Speakers</span>
                                                    <h3 class="item_title">
                                                        <a href="#!">Wireless Audio System Multiroom 360</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <ul class="product_label ul_li clearfix">
                                                    <li>-$30</li>
                                                </ul>
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_04.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <span class="item_name">Speakers</span>
                                                    <h3 class="item_title">
                                                        <a href="#!">Wireless Audio System Multiroom 360</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <ul class="product_label ul_li clearfix">
                                                    <li>-$30</li>
                                                </ul>
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_05.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <span class="item_name">Speakers</span>
                                                    <h3 class="item_title">
                                                        <a href="#!">Wireless Audio System Multiroom 360</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <ul class="product_label ul_li clearfix">
                                                    <li>-$30</li>
                                                </ul>
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <span class="item_name">Speakers</span>
                                                    <h3 class="item_title">
                                                        <a href="#!">Wireless Audio System Multiroom 360</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <ul class="product_label ul_li clearfix">
                                                    <li>-$30</li>
                                                </ul>
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_07.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <span class="item_name">Speakers</span>
                                                    <h3 class="item_title">
                                                        <a href="#!">Wireless Audio System Multiroom 360</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <ul class="product_label ul_li clearfix">
                                                    <li>-$30</li>
                                                </ul>
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_08.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <span class="item_name">Speakers</span>
                                                    <h3 class="item_title">
                                                        <a href="#!">Wireless Audio System Multiroom 360</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <ul class="product_label ul_li clearfix">
                                                    <li>-$30</li>
                                                </ul>
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_09.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <span class="item_name">Speakers</span>
                                                    <h3 class="item_title">
                                                        <a href="#!">Wireless Audio System Multiroom 360</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div id="toprated_tab" class="tab-pane fade">
                                    <ul class="electronic_product_columns ul_li has_4columns clearfix">
                                        <li>
                                            <div class="electronic_product_item">
                                                <ul class="product_label ul_li clearfix">
                                                    <li>-$30</li>
                                                </ul>
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_02.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <span class="item_name">Speakers</span>
                                                    <h3 class="item_title">
                                                        <a href="#!">Wireless Audio System Multiroom 360</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <ul class="product_label ul_li clearfix">
                                                    <li>-$30</li>
                                                </ul>
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_03.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <span class="item_name">Speakers</span>
                                                    <h3 class="item_title">
                                                        <a href="#!">Wireless Audio System Multiroom 360</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <ul class="product_label ul_li clearfix">
                                                    <li>-$30</li>
                                                </ul>
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_04.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <span class="item_name">Speakers</span>
                                                    <h3 class="item_title">
                                                        <a href="#!">Wireless Audio System Multiroom 360</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <ul class="product_label ul_li clearfix">
                                                    <li>-$30</li>
                                                </ul>
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_05.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <span class="item_name">Speakers</span>
                                                    <h3 class="item_title">
                                                        <a href="#!">Wireless Audio System Multiroom 360</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <ul class="product_label ul_li clearfix">
                                                    <li>-$30</li>
                                                </ul>
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <span class="item_name">Speakers</span>
                                                    <h3 class="item_title">
                                                        <a href="#!">Wireless Audio System Multiroom 360</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <ul class="product_label ul_li clearfix">
                                                    <li>-$30</li>
                                                </ul>
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_07.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <span class="item_name">Speakers</span>
                                                    <h3 class="item_title">
                                                        <a href="#!">Wireless Audio System Multiroom 360</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <ul class="product_label ul_li clearfix">
                                                    <li>-$30</li>
                                                </ul>
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_08.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <span class="item_name">Speakers</span>
                                                    <h3 class="item_title">
                                                        <a href="#!">Wireless Audio System Multiroom 360</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <ul class="product_label ul_li clearfix">
                                                    <li>-$30</li>
                                                </ul>
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_09.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <span class="item_name">Speakers</span>
                                                    <h3 class="item_title">
                                                        <a href="#!">Wireless Audio System Multiroom 360</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- product_section - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section mb_50 clearfix">
        <div class="container maxw_1600">
            <div class="electronic_section_title clearfix">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-3">
                        <h2 class="title_text mb-0" data-bg-color="#ffd4d3">
                            <span data-bg-color="#e09e9c"><i class="fal fa-plug"></i></span> <strong>Flash</strong> Deal
                        </h2>
                    </div>

                    <div class="col-lg-3 order-last">
                        <div class="deals_items_countdown countdown_wrap">
                            <div class="countdown_content">
                                <h4>Hurry up!</h4>
                                <p>Offer ends in:</p>
                            </div>
                            <ul class="countdown_timer timein_box ul_li_right clearfix" data-countdown="2021/3/24"></ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <ul class="electronic_tabs_nav2 ul_li_center nav" role="tablist">
                            <li><a class="active" data-toggle="tab" href="#tvvideo_tab">TV & Video</a></li>
                            <li><a data-toggle="tab" href="#cameras_tab">Cameras</a></li>
                            <li><a data-toggle="tab" href="#audio_tab">Audio</a></li>
                            <li><a data-toggle="tab" href="#cellphones_tab">Cell Phones</a></li>
                            <li><a data-toggle="tab" href="#gpsnavi_tab">GPS & Navi</a></li>
                            <li><a data-toggle="tab" href="#computers_tab">Computers</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="electronic_content_container">
                <div class="tab-content">
                    <div id="tvvideo_tab" class="tab-pane active">
                        <ul class="electronic_product_columns ul_li has_5columns mb_50 clearfix">
                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_10.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_11.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_12.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_13.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_14.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_15.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_16.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_17.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_18.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_19.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="abtn_wrap text-center clearfix">
                            <a href="#!" class="custom_btn btn_border border_electronic">View All Products</a>
                        </div>
                    </div>

                    <div id="cameras_tab" class="tab-pane fade">
                        <ul class="electronic_product_columns ul_li has_5columns mb_50 clearfix">
                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_10.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_11.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_12.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_13.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_14.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_15.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_16.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_17.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_18.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_19.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="abtn_wrap text-center clearfix">
                            <a href="#!" class="custom_btn btn_border border_electronic">View All Products</a>
                        </div>
                    </div>

                    <div id="audio_tab" class="tab-pane fade">
                        <ul class="electronic_product_columns ul_li has_5columns mb_50 clearfix">
                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_10.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_11.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_12.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_13.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_14.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_15.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_16.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_17.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_18.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_19.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="abtn_wrap text-center clearfix">
                            <a href="#!" class="custom_btn btn_border border_electronic">View All Products</a>
                        </div>
                    </div>

                    <div id="cellphones_tab" class="tab-pane fade">
                        <ul class="electronic_product_columns ul_li has_5columns mb_50 clearfix">
                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_10.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_11.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_12.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_13.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_14.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_15.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_16.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_17.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_18.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_19.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="abtn_wrap text-center clearfix">
                            <a href="#!" class="custom_btn btn_border border_electronic">View All Products</a>
                        </div>
                    </div>

                    <div id="gpsnavi_tab" class="tab-pane fade">
                        <ul class="electronic_product_columns ul_li has_5columns mb_50 clearfix">
                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_10.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_11.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_12.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_13.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_14.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_15.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_16.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_17.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_18.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_19.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="abtn_wrap text-center clearfix">
                            <a href="#!" class="custom_btn btn_border border_electronic">View All Products</a>
                        </div>
                    </div>

                    <div id="computers_tab" class="tab-pane fade">
                        <ul class="electronic_product_columns ul_li has_5columns mb_50 clearfix">
                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_10.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_11.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_12.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_13.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_14.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_15.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_16.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_17.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_18.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>-$30 off</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_19.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Wireless Audio System Multiroom 360</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <span class="item_price">$685.00</span>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="abtn_wrap text-center clearfix">
                            <a href="#!" class="custom_btn btn_border border_electronic">View All Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_section - end
    ================================================== -->


    <!-- consumer_section - start
    ================================================== -->
    <section class="consumer_section mb_50 clearfix">
        <div class="container maxw_1600">
            <div class="electronic_section_title justify-content-lg-between clearfix">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-5">
                        <h2 class="title_text mb-0" data-bg-color="#ffd4d3">
                            <span data-bg-color="#e09e9c"><i class="fal fa-plug"></i></span> <strong>Flash</strong> Deal
                        </h2>
                    </div>

                    <div class="col-lg-7">
                        <ul class="electronic_tabs_nav2 ul_li_right nav" role="tablist">
                            <li><a class="active" data-toggle="tab" href="#cameras2_tab">Cameras</a></li>
                            <li><a data-toggle="tab" href="#audio2_tab">Audio</a></li>
                            <li><a data-toggle="tab" href="#gpsnavi2_tab">GPS & Navi</a></li>
                            <li><a data-toggle="tab" href="#tvvideo2_tab">TV & Video</a></li>
                            <li><a data-toggle="tab" href="#cellphones2_tab">Cell Phones</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tab-content">
                <div id="cameras2_tab" class="tab-pane active">
                    <div class="electronic_content_container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4">
                                <div class="consumer_content_wrap">
                                    <h3 class="wrap_title">Earphones & Headphones</h3>
                                    <span class="interested_text">(195535 interested)</span>
                                    <small class="wrap_label" data-background="assets/images/label_01.png">Most Popular</small>
                                    <ul class="items_columns ul_li clearfix">
                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_20.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_21.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_22.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_23.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="abtn_wrap text-center clearfix">
                                        <a href="#!" class="custom_btn btn_sm btn_border border_electronic">Browse Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="consumer_content_wrap">
                                    <h3 class="wrap_title">Mobile & Accessories</h3>
                                    <span class="interested_text">(195535 interested)</span>
                                    <small class="wrap_label" data-background="assets/images/label_01.png">Most Popular</small>
                                    <ul class="items_columns ul_li clearfix">
                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_24.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_25.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_26.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_27.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="abtn_wrap text-center clearfix">
                                        <a href="#!" class="custom_btn btn_sm btn_border border_electronic">Browse Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="consumer_content_wrap">
                                    <h3 class="wrap_title">Dustproof</h3>
                                    <span class="interested_text">(195535 interested)</span>
                                    <small class="wrap_label" data-background="assets/images/label_01.png">Most Popular</small>
                                    <ul class="items_columns ul_li clearfix">
                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_28.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_29.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_30.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_31.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="abtn_wrap text-center clearfix">
                                        <a href="#!" class="custom_btn btn_sm btn_border border_electronic">Browse Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="audio2_tab" class="tab-pane fade">
                    <div class="electronic_content_container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4">
                                <div class="consumer_content_wrap">
                                    <h3 class="wrap_title">Earphones & Headphones</h3>
                                    <span class="interested_text">(195535 interested)</span>
                                    <small class="wrap_label" data-background="assets/images/label_01.png">Most Popular</small>
                                    <ul class="items_columns ul_li clearfix">
                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_20.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_21.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_22.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_23.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="abtn_wrap text-center clearfix">
                                        <a href="#!" class="custom_btn btn_sm btn_border border_electronic">Browse Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="consumer_content_wrap">
                                    <h3 class="wrap_title">Mobile & Accessories</h3>
                                    <span class="interested_text">(195535 interested)</span>
                                    <small class="wrap_label" data-background="assets/images/label_01.png">Most Popular</small>
                                    <ul class="items_columns ul_li clearfix">
                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_24.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_25.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_26.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_27.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="abtn_wrap text-center clearfix">
                                        <a href="#!" class="custom_btn btn_sm btn_border border_electronic">Browse Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="consumer_content_wrap">
                                    <h3 class="wrap_title">Dustproof</h3>
                                    <span class="interested_text">(195535 interested)</span>
                                    <small class="wrap_label" data-background="assets/images/label_01.png">Most Popular</small>
                                    <ul class="items_columns ul_li clearfix">
                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_28.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_29.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_30.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_31.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="abtn_wrap text-center clearfix">
                                        <a href="#!" class="custom_btn btn_sm btn_border border_electronic">Browse Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="gpsnavi2_tab" class="tab-pane fade">
                    <div class="electronic_content_container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4">
                                <div class="consumer_content_wrap">
                                    <h3 class="wrap_title">Earphones & Headphones</h3>
                                    <span class="interested_text">(195535 interested)</span>
                                    <small class="wrap_label" data-background="assets/images/label_01.png">Most Popular</small>
                                    <ul class="items_columns ul_li clearfix">
                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_20.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_21.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_22.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_23.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="abtn_wrap text-center clearfix">
                                        <a href="#!" class="custom_btn btn_sm btn_border border_electronic">Browse Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="consumer_content_wrap">
                                    <h3 class="wrap_title">Mobile & Accessories</h3>
                                    <span class="interested_text">(195535 interested)</span>
                                    <small class="wrap_label" data-background="assets/images/label_01.png">Most Popular</small>
                                    <ul class="items_columns ul_li clearfix">
                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_24.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_25.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_26.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_27.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="abtn_wrap text-center clearfix">
                                        <a href="#!" class="custom_btn btn_sm btn_border border_electronic">Browse Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="consumer_content_wrap">
                                    <h3 class="wrap_title">Dustproof</h3>
                                    <span class="interested_text">(195535 interested)</span>
                                    <small class="wrap_label" data-background="assets/images/label_01.png">Most Popular</small>
                                    <ul class="items_columns ul_li clearfix">
                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_28.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_29.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_30.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_31.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="abtn_wrap text-center clearfix">
                                        <a href="#!" class="custom_btn btn_sm btn_border border_electronic">Browse Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="tvvideo2_tab" class="tab-pane fade">
                    <div class="electronic_content_container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4">
                                <div class="consumer_content_wrap">
                                    <h3 class="wrap_title">Earphones & Headphones</h3>
                                    <span class="interested_text">(195535 interested)</span>
                                    <small class="wrap_label" data-background="assets/images/label_01.png">Most Popular</small>
                                    <ul class="items_columns ul_li clearfix">
                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_20.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_21.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_22.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_23.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="abtn_wrap text-center clearfix">
                                        <a href="#!" class="custom_btn btn_sm btn_border border_electronic">Browse Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="consumer_content_wrap">
                                    <h3 class="wrap_title">Mobile & Accessories</h3>
                                    <span class="interested_text">(195535 interested)</span>
                                    <small class="wrap_label" data-background="assets/images/label_01.png">Most Popular</small>
                                    <ul class="items_columns ul_li clearfix">
                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_24.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_25.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_26.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_27.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="abtn_wrap text-center clearfix">
                                        <a href="#!" class="custom_btn btn_sm btn_border border_electronic">Browse Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="consumer_content_wrap">
                                    <h3 class="wrap_title">Dustproof</h3>
                                    <span class="interested_text">(195535 interested)</span>
                                    <small class="wrap_label" data-background="assets/images/label_01.png">Most Popular</small>
                                    <ul class="items_columns ul_li clearfix">
                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_28.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_29.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_30.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_31.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="abtn_wrap text-center clearfix">
                                        <a href="#!" class="custom_btn btn_sm btn_border border_electronic">Browse Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="cellphones2_tab" class="tab-pane fade">
                    <div class="electronic_content_container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4">
                                <div class="consumer_content_wrap">
                                    <h3 class="wrap_title">Earphones & Headphones</h3>
                                    <span class="interested_text">(195535 interested)</span>
                                    <small class="wrap_label" data-background="assets/images/label_01.png">Most Popular</small>
                                    <ul class="items_columns ul_li clearfix">
                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_20.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_21.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_22.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_23.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="abtn_wrap text-center clearfix">
                                        <a href="#!" class="custom_btn btn_sm btn_border border_electronic">Browse Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="consumer_content_wrap">
                                    <h3 class="wrap_title">Mobile & Accessories</h3>
                                    <span class="interested_text">(195535 interested)</span>
                                    <small class="wrap_label" data-background="assets/images/label_01.png">Most Popular</small>
                                    <ul class="items_columns ul_li clearfix">
                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_24.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_25.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_26.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_27.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="abtn_wrap text-center clearfix">
                                        <a href="#!" class="custom_btn btn_sm btn_border border_electronic">Browse Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="consumer_content_wrap">
                                    <h3 class="wrap_title">Dustproof</h3>
                                    <span class="interested_text">(195535 interested)</span>
                                    <small class="wrap_label" data-background="assets/images/label_01.png">Most Popular</small>
                                    <ul class="items_columns ul_li clearfix">
                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_28.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_29.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_30.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="electronic_product_item">
                                                <div class="item_image">
                                                    <img src="assets/images/shop/electronic/img_31.png" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h3 class="item_title text-uppercase">
                                                        <a href="#!">Headphone solo 3 novo</a>
                                                    </h3>
                                                    <span class="item_price">$685.00</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="abtn_wrap text-center clearfix">
                                        <a href="#!" class="custom_btn btn_sm btn_border border_electronic">Browse Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- consumer_section - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section mb_50 clearfix">
        <div class="container-fluid p-0">
            <div class="row no-gutters">

                <div class="col-lg-3">
                    <div class="alldepartments_dropdown audiovisual_entertainment d-block" data-background="assets/images/backgrounds/bg_11.jpg">
                        <h3 class="title_text mb_30 text-white">
                            <span data-bg-color="#333333"><i class="fal fa-plug"></i></span>
                            <strong>Powerful Audio & Visual</strong> entertainment
                        </h3>
                        <ul class="alldepartments_menulist ul_li_block clearfix">
                            <li class="has_child">
                                <a href="#!">
                                    <span class="icon">
                                        <img src="assets/images/icons/electronic/icon_01.png" alt="icon_not_found">
                                    </span>
                                    Desktop PCs
                                </a>
                            </li>
                            <li class="has_child">
                                <a href="#!">
                                    <span class="icon">
                                        <img src="assets/images/icons/electronic/icon_02.png" alt="icon_not_found">
                                    </span>
                                    Ultrabooks
                                </a>
                            </li>
                            <li class="has_child">
                                <a href="#!">
                                    <span class="icon">
                                        <img src="assets/images/icons/electronic/icon_03.png" alt="icon_not_found">
                                    </span>
                                    Smartphones
                                </a>
                            </li>
                            <li class="has_child">
                                <a href="#!">
                                    <span class="icon">
                                        <img src="assets/images/icons/electronic/icon_04.png" alt="icon_not_found">
                                    </span>
                                    Internet Cams
                                </a>
                            </li>
                            <li class="has_child">
                                <a href="#!">
                                    <span class="icon">
                                        <img src="assets/images/icons/electronic/icon_05.png" alt="icon_not_found">
                                    </span>
                                    Accesories
                                </a>
                            </li>
                            <li class="has_child">
                                <a href="#!">
                                    <span class="icon">
                                        <img src="assets/images/icons/electronic/icon_01.png" alt="icon_not_found">
                                    </span>
                                    Desktop PCs
                                </a>
                            </li>
                            <li class="has_child">
                                <a href="#!">
                                    <span class="icon">
                                        <img src="assets/images/icons/electronic/icon_02.png" alt="icon_not_found">
                                    </span>
                                    Ultrabooks
                                </a>
                            </li>
                            <li class="has_child">
                                <a href="#!">
                                    <span class="icon">
                                        <img src="assets/images/icons/electronic/icon_03.png" alt="icon_not_found">
                                    </span>
                                    Smartphones
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="electronic_content_container">
                        <ul class="electronic_product_columns ul_li has_3columns mb_50 clearfix">
                            <li>
                                <div class="electronic_product_listlayout">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/electronic/img_18.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <div class="item_price">
                                            <strong>$898.89</strong>
                                            <del>$969.99</del>
                                        </div>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                55" KU6470 6 Series Crystal Colour HDR
                                            </a>
                                        </h3>
                                        <ul class="rating_star ul_li mb_15 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_listlayout">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/electronic/img_19.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <div class="item_price">
                                            <strong>$898.89</strong>
                                            <del>$969.99</del>
                                        </div>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                55" KU6470 6 Series Crystal Colour HDR
                                            </a>
                                        </h3>
                                        <ul class="rating_star ul_li mb_15 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_listlayout">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/electronic/img_20.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <div class="item_price">
                                            <strong>$898.89</strong>
                                            <del>$969.99</del>
                                        </div>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                55" KU6470 6 Series Crystal Colour HDR
                                            </a>
                                        </h3>
                                        <ul class="rating_star ul_li mb_15 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_listlayout">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/electronic/img_20.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <div class="item_price">
                                            <strong>$898.89</strong>
                                            <del>$969.99</del>
                                        </div>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                55" KU6470 6 Series Crystal Colour HDR
                                            </a>
                                        </h3>
                                        <ul class="rating_star ul_li mb_15 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_listlayout">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/electronic/img_21.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <div class="item_price">
                                            <strong>$898.89</strong>
                                            <del>$969.99</del>
                                        </div>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                55" KU6470 6 Series Crystal Colour HDR
                                            </a>
                                        </h3>
                                        <ul class="rating_star ul_li mb_15 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_listlayout">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/electronic/img_22.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <div class="item_price">
                                            <strong>$898.89</strong>
                                            <del>$969.99</del>
                                        </div>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                55" KU6470 6 Series Crystal Colour HDR
                                            </a>
                                        </h3>
                                        <ul class="rating_star ul_li mb_15 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_listlayout">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/electronic/img_24.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <div class="item_price">
                                            <strong>$898.89</strong>
                                            <del>$969.99</del>
                                        </div>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                55" KU6470 6 Series Crystal Colour HDR
                                            </a>
                                        </h3>
                                        <ul class="rating_star ul_li mb_15 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_listlayout">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/electronic/img_25.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <div class="item_price">
                                            <strong>$898.89</strong>
                                            <del>$969.99</del>
                                        </div>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                55" KU6470 6 Series Crystal Colour HDR
                                            </a>
                                        </h3>
                                        <ul class="rating_star ul_li mb_15 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="electronic_product_listlayout">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/electronic/img_26.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <div class="item_price">
                                            <strong>$898.89</strong>
                                            <del>$969.99</del>
                                        </div>
                                        <h3 class="item_title">
                                            <a href="#!">
                                                55" KU6470 6 Series Crystal Colour HDR
                                            </a>
                                        </h3>
                                        <ul class="rating_star ul_li mb_15 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="abtn_wrap text-center clearfix">
                            <a href="#!" class="custom_btn btn_border border_electronic">Browse Now</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- product_section - end
    ================================================== -->


    <!-- advertisement_section - start
    ================================================== -->
    <div class="advertisement_section mb_50 clearfix">
        <div class="container maxw_1600">
            <div class="row justify-content-lg-between">
                <div class="col-lg-9 col-md-8">
                    <div class="advertisement_image">
                        <a href="#!">
                            <img src="assets/images/offer/electronic/img_04.jpg" alt="image_not_found">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="advertisement_image">
                        <a href="#!">
                            <img src="assets/images/offer/electronic/img_05.jpg" alt="image_not_found">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- advertisement_section - end
    ================================================== -->


    <!-- category_section - start
    ================================================== -->
    <section class="category_section mb_50 clearfix">
        <div class="container maxw_1600">

            <div class="electronic_section_title clearfix">
                <h2 class="title_text mb-0" data-bg-color="#f6eaea">
                    <span data-bg-color="#c1b1b1"><i class="fal fa-plug"></i></span> <strong>Top Categories</strong> this Week
                </h2>
            </div>

            <div class="electronic_content_container">
                <div class="row mb_50 justify-content-lg-between">
                    <div class="col-lg-6">
                        <div class="electronic_category_wrap" data-bg-color="#ecf7f3">
                            <h3 class="wrap_title">Home Entertainment</h3>
                            <div class="row justify-content-lg-between">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 order-last">
                                    <div class="image_wrap" data-bg-color="#ffffff">
                                        <img src="assets/images/category/electronic/img_01.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="ul_li_block clearfix">
                                        <li><a href="#!">Desktop PCs</a></li>
                                        <li><a href="#!">Ultrabooks</a></li>
                                        <li><a href="#!">Smartphones</a></li>
                                        <li><a href="#!">Ultrabooks</a></li>
                                        <li><a href="#!">Smartphones</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="ul_li_block clearfix">
                                        <li><a href="#!">Desktop PCs</a></li>
                                        <li><a href="#!">Ultrabooks</a></li>
                                        <li><a href="#!">Smartphones</a></li>
                                        <li><a href="#!">Ultrabooks</a></li>
                                        <li><a href="#!">Smartphones</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="electronic_category_wrap" data-bg-color="#ecf7f3">
                            <h3 class="wrap_title">Home Entertainment</h3>
                            <div class="row justify-content-lg-between">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="image_wrap" data-bg-color="#ffffff">
                                        <img src="assets/images/category/electronic/img_02.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="ul_li_block clearfix">
                                        <li><a href="#!">Desktop PCs</a></li>
                                        <li><a href="#!">Ultrabooks</a></li>
                                        <li><a href="#!">Smartphones</a></li>
                                        <li><a href="#!">Ultrabooks</a></li>
                                        <li><a href="#!">Smartphones</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="ul_li_block clearfix">
                                        <li><a href="#!">Desktop PCs</a></li>
                                        <li><a href="#!">Ultrabooks</a></li>
                                        <li><a href="#!">Smartphones</a></li>
                                        <li><a href="#!">Ultrabooks</a></li>
                                        <li><a href="#!">Smartphones</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="electronic_category_wrap" data-bg-color="#f6eaea">
                            <h3 class="wrap_title">Home Entertainment</h3>
                            <div class="row justify-content-lg-between">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 order-last">
                                    <div class="image_wrap" data-bg-color="#ffffff">
                                        <img src="assets/images/category/electronic/img_03.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="ul_li_block clearfix">
                                        <li><a href="#!">Desktop PCs</a></li>
                                        <li><a href="#!">Ultrabooks</a></li>
                                        <li><a href="#!">Smartphones</a></li>
                                        <li><a href="#!">Ultrabooks</a></li>
                                        <li><a href="#!">Smartphones</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="ul_li_block clearfix">
                                        <li><a href="#!">Desktop PCs</a></li>
                                        <li><a href="#!">Ultrabooks</a></li>
                                        <li><a href="#!">Smartphones</a></li>
                                        <li><a href="#!">Ultrabooks</a></li>
                                        <li><a href="#!">Smartphones</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="electronic_category_wrap" data-bg-color="#f6eaea">
                            <h3 class="wrap_title">Home Entertainment</h3>
                            <div class="row justify-content-lg-between">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="image_wrap" data-bg-color="#ffffff">
                                        <img src="assets/images/category/electronic/img_04.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="ul_li_block clearfix">
                                        <li><a href="#!">Desktop PCs</a></li>
                                        <li><a href="#!">Ultrabooks</a></li>
                                        <li><a href="#!">Smartphones</a></li>
                                        <li><a href="#!">Ultrabooks</a></li>
                                        <li><a href="#!">Smartphones</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="ul_li_block clearfix">
                                        <li><a href="#!">Desktop PCs</a></li>
                                        <li><a href="#!">Ultrabooks</a></li>
                                        <li><a href="#!">Smartphones</a></li>
                                        <li><a href="#!">Ultrabooks</a></li>
                                        <li><a href="#!">Smartphones</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="abtn_wrap text-center clearfix">
                    <a href="#!" class="custom_btn btn_border border_electronic">Browse Now</a>
                </div>
            </div>
            
        </div>
    </section>
    <!-- category_section - end
    ================================================== -->


    <!-- feature_section - start
    ================================================== -->
    <section class="feature_section electronic_feature_carousel mb_50 clearfix">
        <div class="slideshow1_slider clearfix" data-slick='{"arrows": false}'>
            <div class="item" data-background="assets/images/backgrounds/bg_12.jpg">
                <div class="container maxw_1600">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-7">
                            <div class="item_image">
                                <img src="assets/images/feature/electronic/img_01.png" alt="image_not_found">
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="item_content">
                                <span class="item_price">
                                    <strong>£99.00</strong>
                                    <i>ALL-NEW-SPORT</i>
                                </span>
                                <div class="item_type">
                                    <strong>5K</strong>
                                    <span>
                                        <i>STARTING AT</i>
                                        <small>OS Tablet</small>
                                    </span>
                                </div>
                                <h3 class="item_title text-white">
                                    Acer Chromebook Tab 10 Is Official
                                </h3>
                                <a href="#!" class="custom_btn bg_white">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item" data-background="assets/images/backgrounds/bg_12.jpg">
                <div class="container maxw_1600">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-7">
                            <div class="item_image">
                                <img src="assets/images/feature/electronic/img_01.png" alt="image_not_found">
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="item_content">
                                <span class="item_price">
                                    <strong>£99.00</strong>
                                    <i>ALL-NEW-SPORT</i>
                                </span>
                                <div class="item_type">
                                    <strong>5K</strong>
                                    <span>
                                        <i>STARTING AT</i>
                                        <small>OS Tablet</small>
                                    </span>
                                </div>
                                <h3 class="item_title text-white">
                                    Acer Chromebook Tab 10 Is Official
                                </h3>
                                <a href="#!" class="custom_btn bg_white">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item" data-background="assets/images/backgrounds/bg_12.jpg">
                <div class="container maxw_1600">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-7">
                            <div class="item_image">
                                <img src="assets/images/feature/electronic/img_01.png" alt="image_not_found">
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="item_content">
                                <span class="item_price">
                                    <strong>£99.00</strong>
                                    <i>ALL-NEW-SPORT</i>
                                </span>
                                <div class="item_type">
                                    <strong>5K</strong>
                                    <span>
                                        <i>STARTING AT</i>
                                        <small>OS Tablet</small>
                                    </span>
                                </div>
                                <h3 class="item_title text-white">
                                    Acer Chromebook Tab 10 Is Official
                                </h3>
                                <a href="#!" class="custom_btn bg_white">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_section - end
    ================================================== -->


    <!-- dailydeals_section - start
    ================================================== -->
    <section class="dailydeals_section mb_50 clearfix">
        <div class="container maxw_1600">

            <div class="electronic_section_title justify-content-lg-between clearfix">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-5">
                        <h2 class="title_text mb-0 text-white" data-bg-color="#201d1d">
                            <span class="text-white" data-bg-color="#3d3b3b"><i class="fal fa-plug"></i></span> <strong>Daily deals!</strong> Get best prices.
                        </h2>
                    </div>

                    <div class="col-lg-7">
                        <ul class="electronic_tabs_nav2 ul_li_right nav" role="tablist">
                            <li><a class="active" data-toggle="tab" href="#cameras3_tab">Cameras</a></li>
                            <li><a data-toggle="tab" href="#audio3_tab">Audio</a></li>
                            <li><a data-toggle="tab" href="#tv_video3_tab">TV & Video</a></li>
                            <li><a data-toggle="tab" href="#cell_phones3_tab">Cell phones</a></li>
                            <li><a data-toggle="tab" href="#computers3_tab">Computers</a></li>
                            <li><a data-toggle="tab" href="#accesories3_tab">Accesories</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="electronic_content_container">
                <div class="tab-content">
                    <div id="cameras3_tab" class="tab-pane active">
                        <div class="row justify-content-lg-between">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="electronic_product_biglistlayout">
                                    <div class="item_image">
                                        <div class="tab-content">
                                            <img id="child_tab1_1_1" class="tab-pane active" src="assets/images/shop/electronic/img_32.png" alt="image_not_found">
                                            <img id="child_tab1_1_2" class="tab-pane fade" src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                            <img id="child_tab1_1_3" class="tab-pane fade" src="assets/images/shop/electronic/img_03.png" alt="image_not_found">
                                        </div>
                                        <ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#child_tab1_1_1">
                                                    <img src="assets/images/shop/electronic/img_32.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab1_1_2">
                                                    <img src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab1_1_3">
                                                    <img src="assets/images/shop/electronic/img_03.png" alt="image_not_found">
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="item_quality">A++</div>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <div class="rating_star_wrap d-flex align-items-center clearfix">
                                            <ul class="rating_star ul_li mr-2 clearfix">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="rating_value">(5)</span>
                                        </div>
                                        <span class="item_price">$223.28</span>
                                        <h3 class="item_title">
                                            <a href="#!">Embodying the Raw, Wayward Spirit</a>
                                        </h3>
                                        <ul class="item_info_list ul_li_block clearfix">
                                            <li>- Picture Quality Index: 1300</li>
                                            <li>- Technologia PurColour & HDR</li>
                                            <li>- Android TV</li>
                                        </ul>
                                        <div class="progress_wrap clearfix">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <a href="#!" class="custom_btn btn_sm bg_electronic_blue">ShopNow</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="electronic_product_biglistlayout">
                                    <div class="item_image">
                                        <div class="tab-content">
                                            <img id="child_tab1_2_1" class="tab-pane active" src="assets/images/shop/electronic/img_33.png" alt="image_not_found">
                                            <img id="child_tab1_2_2" class="tab-pane fade" src="assets/images/shop/electronic/img_27.png" alt="image_not_found">
                                            <img id="child_tab1_2_3" class="tab-pane fade" src="assets/images/shop/electronic/img_28.png" alt="image_not_found">
                                        </div>
                                        <ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#child_tab1_2_1">
                                                    <img src="assets/images/shop/electronic/img_33.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab1_2_2">
                                                    <img src="assets/images/shop/electronic/img_27.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab1_2_3">
                                                    <img src="assets/images/shop/electronic/img_28.png" alt="image_not_found">
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="item_quality">A++</div>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <div class="rating_star_wrap d-flex align-items-center clearfix">
                                            <ul class="rating_star ul_li mr-2 clearfix">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="rating_value">(5)</span>
                                        </div>
                                        <span class="item_price">$223.28</span>
                                        <h3 class="item_title">
                                            <a href="#!">Embodying the Raw, Wayward Spirit</a>
                                        </h3>
                                        <ul class="item_info_list ul_li_block clearfix">
                                            <li>- Picture Quality Index: 1300</li>
                                            <li>- Technologia PurColour & HDR</li>
                                            <li>- Android TV</li>
                                        </ul>
                                        <div class="progress_wrap clearfix">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <a href="#!" class="custom_btn btn_sm bg_electronic_blue">ShopNow</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="electronic_product_biglistlayout">
                                    <div class="item_image">
                                        <div class="tab-content">
                                            <img id="child_tab1_3_1" class="tab-pane active" src="assets/images/shop/electronic/img_34.png" alt="image_not_found">
                                            <img id="child_tab1_3_2" class="tab-pane fade" src="assets/images/shop/electronic/img_15.png" alt="image_not_found">
                                            <img id="child_tab1_3_3" class="tab-pane fade" src="assets/images/shop/electronic/img_30.png" alt="image_not_found">
                                        </div>
                                        <ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#child_tab1_3_1">
                                                    <img src="assets/images/shop/electronic/img_34.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab1_3_2">
                                                    <img src="assets/images/shop/electronic/img_15.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab1_3_3">
                                                    <img src="assets/images/shop/electronic/img_30.png" alt="image_not_found">
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="item_quality">A++</div>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <div class="rating_star_wrap d-flex align-items-center clearfix">
                                            <ul class="rating_star ul_li mr-2 clearfix">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="rating_value">(5)</span>
                                        </div>
                                        <span class="item_price">$223.28</span>
                                        <h3 class="item_title">
                                            <a href="#!">Embodying the Raw, Wayward Spirit</a>
                                        </h3>
                                        <ul class="item_info_list ul_li_block clearfix">
                                            <li>- Picture Quality Index: 1300</li>
                                            <li>- Technologia PurColour & HDR</li>
                                            <li>- Android TV</li>
                                        </ul>
                                        <div class="progress_wrap clearfix">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <a href="#!" class="custom_btn btn_sm bg_electronic_blue">ShopNow</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="electronic_product_biglistlayout">
                                    <div class="item_image">
                                        <div class="tab-content">
                                            <img id="child_tab1_4_1" class="tab-pane active" src="assets/images/shop/electronic/img_35.png" alt="image_not_found">
                                            <img id="child_tab1_4_2" class="tab-pane fade" src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                            <img id="child_tab1_4_3" class="tab-pane fade" src="assets/images/shop/electronic/img_14.png" alt="image_not_found">
                                        </div>
                                        <ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#child_tab1_4_1">
                                                    <img src="assets/images/shop/electronic/img_35.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab1_4_2">
                                                    <img src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab1_4_3">
                                                    <img src="assets/images/shop/electronic/img_14.png" alt="image_not_found">
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="item_quality">A++</div>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <div class="rating_star_wrap d-flex align-items-center clearfix">
                                            <ul class="rating_star ul_li mr-2 clearfix">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="rating_value">(5)</span>
                                        </div>
                                        <span class="item_price">$223.28</span>
                                        <h3 class="item_title">
                                            <a href="#!">Embodying the Raw, Wayward Spirit</a>
                                        </h3>
                                        <ul class="item_info_list ul_li_block clearfix">
                                            <li>- Picture Quality Index: 1300</li>
                                            <li>- Technologia PurColour & HDR</li>
                                            <li>- Android TV</li>
                                        </ul>
                                        <div class="progress_wrap clearfix">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <a href="#!" class="custom_btn btn_sm bg_electronic_blue">ShopNow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="audio3_tab" class="tab-pane fade">
                        <div class="row justify-content-lg-between">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="electronic_product_biglistlayout">
                                    <div class="item_image">
                                        <div class="tab-content">
                                            <img id="child_tab2_1_1" class="tab-pane active" src="assets/images/shop/electronic/img_32.png" alt="image_not_found">
                                            <img id="child_tab2_1_2" class="tab-pane fade" src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                            <img id="child_tab2_1_3" class="tab-pane fade" src="assets/images/shop/electronic/img_03.png" alt="image_not_found">
                                        </div>
                                        <ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#child_tab2_1_1">
                                                    <img src="assets/images/shop/electronic/img_32.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab2_1_2">
                                                    <img src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab2_1_3">
                                                    <img src="assets/images/shop/electronic/img_03.png" alt="image_not_found">
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="item_quality">A++</div>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <div class="rating_star_wrap d-flex align-items-center clearfix">
                                            <ul class="rating_star ul_li mr-2 clearfix">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="rating_value">(5)</span>
                                        </div>
                                        <span class="item_price">$223.28</span>
                                        <h3 class="item_title">
                                            <a href="#!">Embodying the Raw, Wayward Spirit</a>
                                        </h3>
                                        <ul class="item_info_list ul_li_block clearfix">
                                            <li>- Picture Quality Index: 1300</li>
                                            <li>- Technologia PurColour & HDR</li>
                                            <li>- Android TV</li>
                                        </ul>
                                        <div class="progress_wrap clearfix">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <a href="#!" class="custom_btn btn_sm bg_electronic_blue">ShopNow</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="electronic_product_biglistlayout">
                                    <div class="item_image">
                                        <div class="tab-content">
                                            <img id="child_tab2_2_1" class="tab-pane active" src="assets/images/shop/electronic/img_33.png" alt="image_not_found">
                                            <img id="child_tab2_2_2" class="tab-pane fade" src="assets/images/shop/electronic/img_27.png" alt="image_not_found">
                                            <img id="child_tab2_2_3" class="tab-pane fade" src="assets/images/shop/electronic/img_28.png" alt="image_not_found">
                                        </div>
                                        <ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#child_tab2_2_1">
                                                    <img src="assets/images/shop/electronic/img_33.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab2_2_2">
                                                    <img src="assets/images/shop/electronic/img_27.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab2_2_3">
                                                    <img src="assets/images/shop/electronic/img_28.png" alt="image_not_found">
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="item_quality">A++</div>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <div class="rating_star_wrap d-flex align-items-center clearfix">
                                            <ul class="rating_star ul_li mr-2 clearfix">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="rating_value">(5)</span>
                                        </div>
                                        <span class="item_price">$223.28</span>
                                        <h3 class="item_title">
                                            <a href="#!">Embodying the Raw, Wayward Spirit</a>
                                        </h3>
                                        <ul class="item_info_list ul_li_block clearfix">
                                            <li>- Picture Quality Index: 1300</li>
                                            <li>- Technologia PurColour & HDR</li>
                                            <li>- Android TV</li>
                                        </ul>
                                        <div class="progress_wrap clearfix">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <a href="#!" class="custom_btn btn_sm bg_electronic_blue">ShopNow</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="electronic_product_biglistlayout">
                                    <div class="item_image">
                                        <div class="tab-content">
                                            <img id="child_tab2_3_1" class="tab-pane active" src="assets/images/shop/electronic/img_34.png" alt="image_not_found">
                                            <img id="child_tab2_3_2" class="tab-pane fade" src="assets/images/shop/electronic/img_15.png" alt="image_not_found">
                                            <img id="child_tab2_3_3" class="tab-pane fade" src="assets/images/shop/electronic/img_30.png" alt="image_not_found">
                                        </div>
                                        <ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#child_tab2_3_1">
                                                    <img src="assets/images/shop/electronic/img_34.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab2_3_2">
                                                    <img src="assets/images/shop/electronic/img_15.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab2_3_3">
                                                    <img src="assets/images/shop/electronic/img_30.png" alt="image_not_found">
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="item_quality">A++</div>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <div class="rating_star_wrap d-flex align-items-center clearfix">
                                            <ul class="rating_star ul_li mr-2 clearfix">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="rating_value">(5)</span>
                                        </div>
                                        <span class="item_price">$223.28</span>
                                        <h3 class="item_title">
                                            <a href="#!">Embodying the Raw, Wayward Spirit</a>
                                        </h3>
                                        <ul class="item_info_list ul_li_block clearfix">
                                            <li>- Picture Quality Index: 1300</li>
                                            <li>- Technologia PurColour & HDR</li>
                                            <li>- Android TV</li>
                                        </ul>
                                        <div class="progress_wrap clearfix">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <a href="#!" class="custom_btn btn_sm bg_electronic_blue">ShopNow</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="electronic_product_biglistlayout">
                                    <div class="item_image">
                                        <div class="tab-content">
                                            <img id="child_tab2_4_1" class="tab-pane active" src="assets/images/shop/electronic/img_35.png" alt="image_not_found">
                                            <img id="child_tab2_4_2" class="tab-pane fade" src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                            <img id="child_tab2_4_3" class="tab-pane fade" src="assets/images/shop/electronic/img_14.png" alt="image_not_found">
                                        </div>
                                        <ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#child_tab2_4_1">
                                                    <img src="assets/images/shop/electronic/img_35.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab2_4_2">
                                                    <img src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab2_4_3">
                                                    <img src="assets/images/shop/electronic/img_14.png" alt="image_not_found">
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="item_quality">A++</div>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <div class="rating_star_wrap d-flex align-items-center clearfix">
                                            <ul class="rating_star ul_li mr-2 clearfix">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="rating_value">(5)</span>
                                        </div>
                                        <span class="item_price">$223.28</span>
                                        <h3 class="item_title">
                                            <a href="#!">Embodying the Raw, Wayward Spirit</a>
                                        </h3>
                                        <ul class="item_info_list ul_li_block clearfix">
                                            <li>- Picture Quality Index: 1300</li>
                                            <li>- Technologia PurColour & HDR</li>
                                            <li>- Android TV</li>
                                        </ul>
                                        <div class="progress_wrap clearfix">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <a href="#!" class="custom_btn btn_sm bg_electronic_blue">ShopNow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="tv_video3_tab" class="tab-pane fade">
                        <div class="row justify-content-lg-between">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="electronic_product_biglistlayout">
                                    <div class="item_image">
                                        <div class="tab-content">
                                            <img id="child_tab3_1_1" class="tab-pane active" src="assets/images/shop/electronic/img_32.png" alt="image_not_found">
                                            <img id="child_tab3_1_2" class="tab-pane fade" src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                            <img id="child_tab3_1_3" class="tab-pane fade" src="assets/images/shop/electronic/img_03.png" alt="image_not_found">
                                        </div>
                                        <ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#child_tab3_1_1">
                                                    <img src="assets/images/shop/electronic/img_32.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab3_1_2">
                                                    <img src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab3_1_3">
                                                    <img src="assets/images/shop/electronic/img_03.png" alt="image_not_found">
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="item_quality">A++</div>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <div class="rating_star_wrap d-flex align-items-center clearfix">
                                            <ul class="rating_star ul_li mr-2 clearfix">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="rating_value">(5)</span>
                                        </div>
                                        <span class="item_price">$223.28</span>
                                        <h3 class="item_title">
                                            <a href="#!">Embodying the Raw, Wayward Spirit</a>
                                        </h3>
                                        <ul class="item_info_list ul_li_block clearfix">
                                            <li>- Picture Quality Index: 1300</li>
                                            <li>- Technologia PurColour & HDR</li>
                                            <li>- Android TV</li>
                                        </ul>
                                        <div class="progress_wrap clearfix">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <a href="#!" class="custom_btn btn_sm bg_electronic_blue">ShopNow</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="electronic_product_biglistlayout">
                                    <div class="item_image">
                                        <div class="tab-content">
                                            <img id="child_tab3_2_1" class="tab-pane active" src="assets/images/shop/electronic/img_33.png" alt="image_not_found">
                                            <img id="child_tab3_2_2" class="tab-pane fade" src="assets/images/shop/electronic/img_27.png" alt="image_not_found">
                                            <img id="child_tab3_2_3" class="tab-pane fade" src="assets/images/shop/electronic/img_28.png" alt="image_not_found">
                                        </div>
                                        <ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#child_tab3_2_1">
                                                    <img src="assets/images/shop/electronic/img_33.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab3_2_2">
                                                    <img src="assets/images/shop/electronic/img_27.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab3_2_3">
                                                    <img src="assets/images/shop/electronic/img_28.png" alt="image_not_found">
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="item_quality">A++</div>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <div class="rating_star_wrap d-flex align-items-center clearfix">
                                            <ul class="rating_star ul_li mr-2 clearfix">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="rating_value">(5)</span>
                                        </div>
                                        <span class="item_price">$223.28</span>
                                        <h3 class="item_title">
                                            <a href="#!">Embodying the Raw, Wayward Spirit</a>
                                        </h3>
                                        <ul class="item_info_list ul_li_block clearfix">
                                            <li>- Picture Quality Index: 1300</li>
                                            <li>- Technologia PurColour & HDR</li>
                                            <li>- Android TV</li>
                                        </ul>
                                        <div class="progress_wrap clearfix">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <a href="#!" class="custom_btn btn_sm bg_electronic_blue">ShopNow</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="electronic_product_biglistlayout">
                                    <div class="item_image">
                                        <div class="tab-content">
                                            <img id="child_tab3_3_1" class="tab-pane active" src="assets/images/shop/electronic/img_34.png" alt="image_not_found">
                                            <img id="child_tab3_3_2" class="tab-pane fade" src="assets/images/shop/electronic/img_15.png" alt="image_not_found">
                                            <img id="child_tab3_3_3" class="tab-pane fade" src="assets/images/shop/electronic/img_30.png" alt="image_not_found">
                                        </div>
                                        <ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#child_tab3_3_1">
                                                    <img src="assets/images/shop/electronic/img_34.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab3_3_2">
                                                    <img src="assets/images/shop/electronic/img_15.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab3_3_3">
                                                    <img src="assets/images/shop/electronic/img_30.png" alt="image_not_found">
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="item_quality">A++</div>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <div class="rating_star_wrap d-flex align-items-center clearfix">
                                            <ul class="rating_star ul_li mr-2 clearfix">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="rating_value">(5)</span>
                                        </div>
                                        <span class="item_price">$223.28</span>
                                        <h3 class="item_title">
                                            <a href="#!">Embodying the Raw, Wayward Spirit</a>
                                        </h3>
                                        <ul class="item_info_list ul_li_block clearfix">
                                            <li>- Picture Quality Index: 1300</li>
                                            <li>- Technologia PurColour & HDR</li>
                                            <li>- Android TV</li>
                                        </ul>
                                        <div class="progress_wrap clearfix">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <a href="#!" class="custom_btn btn_sm bg_electronic_blue">ShopNow</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="electronic_product_biglistlayout">
                                    <div class="item_image">
                                        <div class="tab-content">
                                            <img id="child_tab3_4_1" class="tab-pane active" src="assets/images/shop/electronic/img_35.png" alt="image_not_found">
                                            <img id="child_tab3_4_2" class="tab-pane fade" src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                            <img id="child_tab3_4_3" class="tab-pane fade" src="assets/images/shop/electronic/img_14.png" alt="image_not_found">
                                        </div>
                                        <ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#child_tab3_4_1">
                                                    <img src="assets/images/shop/electronic/img_35.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab3_4_2">
                                                    <img src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab3_4_3">
                                                    <img src="assets/images/shop/electronic/img_14.png" alt="image_not_found">
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="item_quality">A++</div>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <div class="rating_star_wrap d-flex align-items-center clearfix">
                                            <ul class="rating_star ul_li mr-2 clearfix">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="rating_value">(5)</span>
                                        </div>
                                        <span class="item_price">$223.28</span>
                                        <h3 class="item_title">
                                            <a href="#!">Embodying the Raw, Wayward Spirit</a>
                                        </h3>
                                        <ul class="item_info_list ul_li_block clearfix">
                                            <li>- Picture Quality Index: 1300</li>
                                            <li>- Technologia PurColour & HDR</li>
                                            <li>- Android TV</li>
                                        </ul>
                                        <div class="progress_wrap clearfix">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <a href="#!" class="custom_btn btn_sm bg_electronic_blue">ShopNow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="cell_phones3_tab" class="tab-pane fade">
                        <div class="row justify-content-lg-between">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="electronic_product_biglistlayout">
                                    <div class="item_image">
                                        <div class="tab-content">
                                            <img id="child_tab4_1_1" class="tab-pane active" src="assets/images/shop/electronic/img_32.png" alt="image_not_found">
                                            <img id="child_tab4_1_2" class="tab-pane fade" src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                            <img id="child_tab4_1_3" class="tab-pane fade" src="assets/images/shop/electronic/img_03.png" alt="image_not_found">
                                        </div>
                                        <ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#child_tab4_1_1">
                                                    <img src="assets/images/shop/electronic/img_32.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab4_1_2">
                                                    <img src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab4_1_3">
                                                    <img src="assets/images/shop/electronic/img_03.png" alt="image_not_found">
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="item_quality">A++</div>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <div class="rating_star_wrap d-flex align-items-center clearfix">
                                            <ul class="rating_star ul_li mr-2 clearfix">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="rating_value">(5)</span>
                                        </div>
                                        <span class="item_price">$223.28</span>
                                        <h3 class="item_title">
                                            <a href="#!">Embodying the Raw, Wayward Spirit</a>
                                        </h3>
                                        <ul class="item_info_list ul_li_block clearfix">
                                            <li>- Picture Quality Index: 1300</li>
                                            <li>- Technologia PurColour & HDR</li>
                                            <li>- Android TV</li>
                                        </ul>
                                        <div class="progress_wrap clearfix">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <a href="#!" class="custom_btn btn_sm bg_electronic_blue">ShopNow</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="electronic_product_biglistlayout">
                                    <div class="item_image">
                                        <div class="tab-content">
                                            <img id="child_tab4_2_1" class="tab-pane active" src="assets/images/shop/electronic/img_33.png" alt="image_not_found">
                                            <img id="child_tab4_2_2" class="tab-pane fade" src="assets/images/shop/electronic/img_27.png" alt="image_not_found">
                                            <img id="child_tab4_2_3" class="tab-pane fade" src="assets/images/shop/electronic/img_28.png" alt="image_not_found">
                                        </div>
                                        <ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#child_tab4_2_1">
                                                    <img src="assets/images/shop/electronic/img_33.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab4_2_2">
                                                    <img src="assets/images/shop/electronic/img_27.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab4_2_3">
                                                    <img src="assets/images/shop/electronic/img_28.png" alt="image_not_found">
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="item_quality">A++</div>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <div class="rating_star_wrap d-flex align-items-center clearfix">
                                            <ul class="rating_star ul_li mr-2 clearfix">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="rating_value">(5)</span>
                                        </div>
                                        <span class="item_price">$223.28</span>
                                        <h3 class="item_title">
                                            <a href="#!">Embodying the Raw, Wayward Spirit</a>
                                        </h3>
                                        <ul class="item_info_list ul_li_block clearfix">
                                            <li>- Picture Quality Index: 1300</li>
                                            <li>- Technologia PurColour & HDR</li>
                                            <li>- Android TV</li>
                                        </ul>
                                        <div class="progress_wrap clearfix">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <a href="#!" class="custom_btn btn_sm bg_electronic_blue">ShopNow</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="electronic_product_biglistlayout">
                                    <div class="item_image">
                                        <div class="tab-content">
                                            <img id="child_tab4_3_1" class="tab-pane active" src="assets/images/shop/electronic/img_34.png" alt="image_not_found">
                                            <img id="child_tab4_3_2" class="tab-pane fade" src="assets/images/shop/electronic/img_15.png" alt="image_not_found">
                                            <img id="child_tab4_3_3" class="tab-pane fade" src="assets/images/shop/electronic/img_30.png" alt="image_not_found">
                                        </div>
                                        <ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#child_tab4_3_1">
                                                    <img src="assets/images/shop/electronic/img_34.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab4_3_2">
                                                    <img src="assets/images/shop/electronic/img_15.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab4_3_3">
                                                    <img src="assets/images/shop/electronic/img_30.png" alt="image_not_found">
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="item_quality">A++</div>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <div class="rating_star_wrap d-flex align-items-center clearfix">
                                            <ul class="rating_star ul_li mr-2 clearfix">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="rating_value">(5)</span>
                                        </div>
                                        <span class="item_price">$223.28</span>
                                        <h3 class="item_title">
                                            <a href="#!">Embodying the Raw, Wayward Spirit</a>
                                        </h3>
                                        <ul class="item_info_list ul_li_block clearfix">
                                            <li>- Picture Quality Index: 1300</li>
                                            <li>- Technologia PurColour & HDR</li>
                                            <li>- Android TV</li>
                                        </ul>
                                        <div class="progress_wrap clearfix">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <a href="#!" class="custom_btn btn_sm bg_electronic_blue">ShopNow</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="electronic_product_biglistlayout">
                                    <div class="item_image">
                                        <div class="tab-content">
                                            <img id="child_tab4_4_1" class="tab-pane active" src="assets/images/shop/electronic/img_35.png" alt="image_not_found">
                                            <img id="child_tab4_4_2" class="tab-pane fade" src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                            <img id="child_tab4_4_3" class="tab-pane fade" src="assets/images/shop/electronic/img_14.png" alt="image_not_found">
                                        </div>
                                        <ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#child_tab4_4_1">
                                                    <img src="assets/images/shop/electronic/img_35.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab4_4_2">
                                                    <img src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab4_4_3">
                                                    <img src="assets/images/shop/electronic/img_14.png" alt="image_not_found">
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="item_quality">A++</div>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <div class="rating_star_wrap d-flex align-items-center clearfix">
                                            <ul class="rating_star ul_li mr-2 clearfix">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="rating_value">(5)</span>
                                        </div>
                                        <span class="item_price">$223.28</span>
                                        <h3 class="item_title">
                                            <a href="#!">Embodying the Raw, Wayward Spirit</a>
                                        </h3>
                                        <ul class="item_info_list ul_li_block clearfix">
                                            <li>- Picture Quality Index: 1300</li>
                                            <li>- Technologia PurColour & HDR</li>
                                            <li>- Android TV</li>
                                        </ul>
                                        <div class="progress_wrap clearfix">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <a href="#!" class="custom_btn btn_sm bg_electronic_blue">ShopNow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="computers3_tab" class="tab-pane fade">
                        <div class="row justify-content-lg-between">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="electronic_product_biglistlayout">
                                    <div class="item_image">
                                        <div class="tab-content">
                                            <img id="child_tab5_1_1" class="tab-pane active" src="assets/images/shop/electronic/img_32.png" alt="image_not_found">
                                            <img id="child_tab5_1_2" class="tab-pane fade" src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                            <img id="child_tab5_1_3" class="tab-pane fade" src="assets/images/shop/electronic/img_03.png" alt="image_not_found">
                                        </div>
                                        <ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#child_tab5_1_1">
                                                    <img src="assets/images/shop/electronic/img_32.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab5_1_2">
                                                    <img src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab5_1_3">
                                                    <img src="assets/images/shop/electronic/img_03.png" alt="image_not_found">
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="item_quality">A++</div>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <div class="rating_star_wrap d-flex align-items-center clearfix">
                                            <ul class="rating_star ul_li mr-2 clearfix">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="rating_value">(5)</span>
                                        </div>
                                        <span class="item_price">$223.28</span>
                                        <h3 class="item_title">
                                            <a href="#!">Embodying the Raw, Wayward Spirit</a>
                                        </h3>
                                        <ul class="item_info_list ul_li_block clearfix">
                                            <li>- Picture Quality Index: 1300</li>
                                            <li>- Technologia PurColour & HDR</li>
                                            <li>- Android TV</li>
                                        </ul>
                                        <div class="progress_wrap clearfix">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <a href="#!" class="custom_btn btn_sm bg_electronic_blue">ShopNow</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="electronic_product_biglistlayout">
                                    <div class="item_image">
                                        <div class="tab-content">
                                            <img id="child_tab5_2_1" class="tab-pane active" src="assets/images/shop/electronic/img_33.png" alt="image_not_found">
                                            <img id="child_tab5_2_2" class="tab-pane fade" src="assets/images/shop/electronic/img_27.png" alt="image_not_found">
                                            <img id="child_tab5_2_3" class="tab-pane fade" src="assets/images/shop/electronic/img_28.png" alt="image_not_found">
                                        </div>
                                        <ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#child_tab5_2_1">
                                                    <img src="assets/images/shop/electronic/img_33.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab5_2_2">
                                                    <img src="assets/images/shop/electronic/img_27.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab5_2_3">
                                                    <img src="assets/images/shop/electronic/img_28.png" alt="image_not_found">
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="item_quality">A++</div>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <div class="rating_star_wrap d-flex align-items-center clearfix">
                                            <ul class="rating_star ul_li mr-2 clearfix">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="rating_value">(5)</span>
                                        </div>
                                        <span class="item_price">$223.28</span>
                                        <h3 class="item_title">
                                            <a href="#!">Embodying the Raw, Wayward Spirit</a>
                                        </h3>
                                        <ul class="item_info_list ul_li_block clearfix">
                                            <li>- Picture Quality Index: 1300</li>
                                            <li>- Technologia PurColour & HDR</li>
                                            <li>- Android TV</li>
                                        </ul>
                                        <div class="progress_wrap clearfix">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <a href="#!" class="custom_btn btn_sm bg_electronic_blue">ShopNow</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="electronic_product_biglistlayout">
                                    <div class="item_image">
                                        <div class="tab-content">
                                            <img id="child_tab5_3_1" class="tab-pane active" src="assets/images/shop/electronic/img_34.png" alt="image_not_found">
                                            <img id="child_tab5_3_2" class="tab-pane fade" src="assets/images/shop/electronic/img_15.png" alt="image_not_found">
                                            <img id="child_tab5_3_3" class="tab-pane fade" src="assets/images/shop/electronic/img_30.png" alt="image_not_found">
                                        </div>
                                        <ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#child_tab5_3_1">
                                                    <img src="assets/images/shop/electronic/img_34.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab5_3_2">
                                                    <img src="assets/images/shop/electronic/img_15.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab5_3_3">
                                                    <img src="assets/images/shop/electronic/img_30.png" alt="image_not_found">
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="item_quality">A++</div>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <div class="rating_star_wrap d-flex align-items-center clearfix">
                                            <ul class="rating_star ul_li mr-2 clearfix">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="rating_value">(5)</span>
                                        </div>
                                        <span class="item_price">$223.28</span>
                                        <h3 class="item_title">
                                            <a href="#!">Embodying the Raw, Wayward Spirit</a>
                                        </h3>
                                        <ul class="item_info_list ul_li_block clearfix">
                                            <li>- Picture Quality Index: 1300</li>
                                            <li>- Technologia PurColour & HDR</li>
                                            <li>- Android TV</li>
                                        </ul>
                                        <div class="progress_wrap clearfix">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <a href="#!" class="custom_btn btn_sm bg_electronic_blue">ShopNow</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="electronic_product_biglistlayout">
                                    <div class="item_image">
                                        <div class="tab-content">
                                            <img id="child_tab5_4_1" class="tab-pane active" src="assets/images/shop/electronic/img_35.png" alt="image_not_found">
                                            <img id="child_tab5_4_2" class="tab-pane fade" src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                            <img id="child_tab5_4_3" class="tab-pane fade" src="assets/images/shop/electronic/img_14.png" alt="image_not_found">
                                        </div>
                                        <ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#child_tab5_4_1">
                                                    <img src="assets/images/shop/electronic/img_35.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab5_4_2">
                                                    <img src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab5_4_3">
                                                    <img src="assets/images/shop/electronic/img_14.png" alt="image_not_found">
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="item_quality">A++</div>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <div class="rating_star_wrap d-flex align-items-center clearfix">
                                            <ul class="rating_star ul_li mr-2 clearfix">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="rating_value">(5)</span>
                                        </div>
                                        <span class="item_price">$223.28</span>
                                        <h3 class="item_title">
                                            <a href="#!">Embodying the Raw, Wayward Spirit</a>
                                        </h3>
                                        <ul class="item_info_list ul_li_block clearfix">
                                            <li>- Picture Quality Index: 1300</li>
                                            <li>- Technologia PurColour & HDR</li>
                                            <li>- Android TV</li>
                                        </ul>
                                        <div class="progress_wrap clearfix">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <a href="#!" class="custom_btn btn_sm bg_electronic_blue">ShopNow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="accesories3_tab" class="tab-pane fade">
                        <div class="row justify-content-lg-between">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="electronic_product_biglistlayout">
                                    <div class="item_image">
                                        <div class="tab-content">
                                            <img id="child_tab6_1_1" class="tab-pane active" src="assets/images/shop/electronic/img_32.png" alt="image_not_found">
                                            <img id="child_tab6_1_2" class="tab-pane fade" src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                            <img id="child_tab6_1_3" class="tab-pane fade" src="assets/images/shop/electronic/img_03.png" alt="image_not_found">
                                        </div>
                                        <ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#child_tab6_1_1">
                                                    <img src="assets/images/shop/electronic/img_32.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab6_1_2">
                                                    <img src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab6_1_3">
                                                    <img src="assets/images/shop/electronic/img_03.png" alt="image_not_found">
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="item_quality">A++</div>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <div class="rating_star_wrap d-flex align-items-center clearfix">
                                            <ul class="rating_star ul_li mr-2 clearfix">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="rating_value">(5)</span>
                                        </div>
                                        <span class="item_price">$223.28</span>
                                        <h3 class="item_title">
                                            <a href="#!">Embodying the Raw, Wayward Spirit</a>
                                        </h3>
                                        <ul class="item_info_list ul_li_block clearfix">
                                            <li>- Picture Quality Index: 1300</li>
                                            <li>- Technologia PurColour & HDR</li>
                                            <li>- Android TV</li>
                                        </ul>
                                        <div class="progress_wrap clearfix">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <a href="#!" class="custom_btn btn_sm bg_electronic_blue">ShopNow</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="electronic_product_biglistlayout">
                                    <div class="item_image">
                                        <div class="tab-content">
                                            <img id="child_tab6_2_1" class="tab-pane active" src="assets/images/shop/electronic/img_33.png" alt="image_not_found">
                                            <img id="child_tab6_2_2" class="tab-pane fade" src="assets/images/shop/electronic/img_27.png" alt="image_not_found">
                                            <img id="child_tab6_2_3" class="tab-pane fade" src="assets/images/shop/electronic/img_28.png" alt="image_not_found">
                                        </div>
                                        <ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#child_tab6_2_1">
                                                    <img src="assets/images/shop/electronic/img_33.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab6_2_2">
                                                    <img src="assets/images/shop/electronic/img_27.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab6_2_3">
                                                    <img src="assets/images/shop/electronic/img_28.png" alt="image_not_found">
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="item_quality">A++</div>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <div class="rating_star_wrap d-flex align-items-center clearfix">
                                            <ul class="rating_star ul_li mr-2 clearfix">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="rating_value">(5)</span>
                                        </div>
                                        <span class="item_price">$223.28</span>
                                        <h3 class="item_title">
                                            <a href="#!">Embodying the Raw, Wayward Spirit</a>
                                        </h3>
                                        <ul class="item_info_list ul_li_block clearfix">
                                            <li>- Picture Quality Index: 1300</li>
                                            <li>- Technologia PurColour & HDR</li>
                                            <li>- Android TV</li>
                                        </ul>
                                        <div class="progress_wrap clearfix">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <a href="#!" class="custom_btn btn_sm bg_electronic_blue">ShopNow</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="electronic_product_biglistlayout">
                                    <div class="item_image">
                                        <div class="tab-content">
                                            <img id="child_tab6_3_1" class="tab-pane active" src="assets/images/shop/electronic/img_34.png" alt="image_not_found">
                                            <img id="child_tab6_3_2" class="tab-pane fade" src="assets/images/shop/electronic/img_15.png" alt="image_not_found">
                                            <img id="child_tab6_3_3" class="tab-pane fade" src="assets/images/shop/electronic/img_30.png" alt="image_not_found">
                                        </div>
                                        <ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#child_tab6_3_1">
                                                    <img src="assets/images/shop/electronic/img_34.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab6_3_2">
                                                    <img src="assets/images/shop/electronic/img_15.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab6_3_3">
                                                    <img src="assets/images/shop/electronic/img_30.png" alt="image_not_found">
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="item_quality">A++</div>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <div class="rating_star_wrap d-flex align-items-center clearfix">
                                            <ul class="rating_star ul_li mr-2 clearfix">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="rating_value">(5)</span>
                                        </div>
                                        <span class="item_price">$223.28</span>
                                        <h3 class="item_title">
                                            <a href="#!">Embodying the Raw, Wayward Spirit</a>
                                        </h3>
                                        <ul class="item_info_list ul_li_block clearfix">
                                            <li>- Picture Quality Index: 1300</li>
                                            <li>- Technologia PurColour & HDR</li>
                                            <li>- Android TV</li>
                                        </ul>
                                        <div class="progress_wrap clearfix">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <a href="#!" class="custom_btn btn_sm bg_electronic_blue">ShopNow</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="electronic_product_biglistlayout">
                                    <div class="item_image">
                                        <div class="tab-content">
                                            <img id="child_tab6_4_1" class="tab-pane active" src="assets/images/shop/electronic/img_35.png" alt="image_not_found">
                                            <img id="child_tab6_4_2" class="tab-pane fade" src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                            <img id="child_tab6_4_3" class="tab-pane fade" src="assets/images/shop/electronic/img_14.png" alt="image_not_found">
                                        </div>
                                        <ul class="child_items_nav nav d-flex align-items-center justify-content-center" role="tablist">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#child_tab6_4_1">
                                                    <img src="assets/images/shop/electronic/img_35.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab6_4_2">
                                                    <img src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#child_tab6_4_3">
                                                    <img src="assets/images/shop/electronic/img_14.png" alt="image_not_found">
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="item_quality">A++</div>
                                        <ul class="product_label ul_li clearfix">
                                            <li data-bg-color="#62ab00">-$30</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <div class="rating_star_wrap d-flex align-items-center clearfix">
                                            <ul class="rating_star ul_li mr-2 clearfix">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="rating_value">(5)</span>
                                        </div>
                                        <span class="item_price">$223.28</span>
                                        <h3 class="item_title">
                                            <a href="#!">Embodying the Raw, Wayward Spirit</a>
                                        </h3>
                                        <ul class="item_info_list ul_li_block clearfix">
                                            <li>- Picture Quality Index: 1300</li>
                                            <li>- Technologia PurColour & HDR</li>
                                            <li>- Android TV</li>
                                        </ul>
                                        <div class="progress_wrap clearfix">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="value_text">796 Sold</span>
                                        </div>
                                        <a href="#!" class="custom_btn btn_sm bg_electronic_blue">ShopNow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="abtn_wrap text-center clearfix">
                    <a href="#!" class="custom_btn btn_border border_electronic">Browse Now</a>
                </div>
            </div>

        </div>
    </section>
    <!-- dailydeals_section - end
    ================================================== -->


    <!-- blog_section - end
    ================================================== -->
    <section class="blog_section mb_50 clearfix">
        <div class="container maxw_1600">
            <div class="electronic_section_title clearfix">
                <h2 class="title_text mb-0" data-bg-color="#ffe7e7">
                    <span data-bg-color="#edb5b5"><i class="fal fa-plug"></i></span> <strong>Latest</strong> News.
                </h2>
            </div>

            <div class="electronic_content_container">
                <div class="electronic_blog_listlayout">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-7">
                            <div class="item_image">
                                <img src="assets/images/blog/electronic/img_01.jpg" alt="image_not_found">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="item_content">
                                <h3 class="item_title mb_30">
                                    Acer Chromebook Tab 10 Is Official
                                </h3>
                                <ul class="modern_post_meta ul_li mb_15 clearfix">
                                    <li>24 Sep 2020</li>
                                    <li><a href="#!"><i class="far fa-heart"></i> 18</a></li>
                                    <li><a href="#!"><i class="far fa-comment-alt"></i> 3</a></li>
                                </ul>
                                <p class="mb_30">
                                    Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et 
                                </p>
                                <a class="custom_btn btn_sm bg_electronic_blue" href="#!">Browse Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="electronic_blog_listlayout">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-7 order-last">
                            <div class="item_image">
                                <img src="assets/images/blog/electronic/img_02.jpg" alt="image_not_found">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="item_content">
                                <h3 class="item_title mb_30">
                                    Acer Chromebook Tab 10 Is Official
                                </h3>
                                <ul class="modern_post_meta ul_li mb_15 clearfix">
                                    <li>24 Sep 2020</li>
                                    <li><a href="#!"><i class="far fa-heart"></i> 18</a></li>
                                    <li><a href="#!"><i class="far fa-comment-alt"></i> 3</a></li>
                                </ul>
                                <p class="mb_30">
                                    Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et 
                                </p>
                                <a class="custom_btn btn_sm bg_electronic_blue" href="#!">Browse Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="abtn_wrap text-center clearfix">
                    <a href="#!" class="custom_btn btn_border border_electronic">View More News</a>
                </div>
            </div>
        </div>
    </section>
    <!-- blog_section - end
    ================================================== -->


    <!-- feature_section - start
    ================================================== -->
    <section class="feature_section bg_white sec_ptb_100 clearfix">
        <div class="container maxw_1600">
            <div class="row justify-content-lg-between">

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="featured_products_wrap">
                        <h3 class="wrap_title">Featured Products</h3>
                        <div class="electronic_feature_carousel2 arrow_ycenter mb_50" data-slick='{"dots": false}'>
                            <div class="item">
                                <div class="electronic_deals_grid clearfix">
                                    <div class="item_image" data-bg-color="#ecf7f3">
                                        <img src="assets/images/shop/electronic/img_36.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content position-relative">
                                        <span class="item_price">$3,49.99</span>
                                        <h4 class="item_title">
                                            <a href="#!">
                                                Red Wireless Headphones Reality Into Screen
                                            </a>
                                        </h4>
                                        <div class="counter_wrap">
                                            <ul class="item_info_list ul_li_block clearfix">
                                                <li>- Picture Quality Index: 1300</li>
                                                <li>- Technologia PurColour &amp; HDR</li>
                                                <li>- Android TV</li>
                                            </ul>
                                            <ul class="countdown_timer timein_box ul_li clearfix" data-countdown="2021/3/24"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="electronic_deals_grid clearfix">
                                    <div class="item_image" data-bg-color="#ecf7f3">
                                        <img src="assets/images/shop/electronic/img_36.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content position-relative">
                                        <span class="item_price">$3,49.99</span>
                                        <h4 class="item_title">
                                            <a href="#!">
                                                Red Wireless Headphones Reality Into Screen
                                            </a>
                                        </h4>
                                        <div class="counter_wrap">
                                            <ul class="item_info_list ul_li_block clearfix">
                                                <li>- Picture Quality Index: 1300</li>
                                                <li>- Technologia PurColour &amp; HDR</li>
                                                <li>- Android TV</li>
                                            </ul>
                                            <ul class="countdown_timer timein_box ul_li clearfix" data-countdown="2021/3/24"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="electronic_deals_grid clearfix">
                                    <div class="item_image" data-bg-color="#ecf7f3">
                                        <img src="assets/images/shop/electronic/img_36.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content position-relative">
                                        <span class="item_price">$3,49.99</span>
                                        <h4 class="item_title">
                                            <a href="#!">
                                                Red Wireless Headphones Reality Into Screen
                                            </a>
                                        </h4>
                                        <div class="counter_wrap">
                                            <ul class="item_info_list ul_li_block clearfix">
                                                <li>- Picture Quality Index: 1300</li>
                                                <li>- Technologia PurColour &amp; HDR</li>
                                                <li>- Android TV</li>
                                            </ul>
                                            <ul class="countdown_timer timein_box ul_li clearfix" data-countdown="2021/3/24"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="text_btn" href="#!">
                            <span>VIEW MORE</span>
                            <i class="fal fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 order-first">
                    <div class="featured_products_wrap">
                        <h3 class="wrap_title">Featured Products</h3>

                        <div class="mb_50 clearfix">
                            <div class="electronic_product_small">
                                <a class="item_image" href="#!">
                                    <img src="assets/images/shop/electronic/img_27.png" alt="image_not_found">
                                </a>
                                <div class="item_content">
                                    <h4 class="item_title">
                                        <a href="#!">Red Wireless Headphones Solo 2 HD Mobile</a>
                                    </h4>
                                    <span class="item_price">$3,49.99</span>
                                </div>
                            </div>

                            <div class="electronic_product_small">
                                <a class="item_image" href="#!">
                                    <img src="assets/images/shop/electronic/img_31.png" alt="image_not_found">
                                </a>
                                <div class="item_content">
                                    <h4 class="item_title">
                                        <a href="#!">Red Wireless Headphones Solo 2 HD Mobile</a>
                                    </h4>
                                    <span class="item_price">$3,49.99</span>
                                </div>
                            </div>

                            <div class="electronic_product_small">
                                <a class="item_image" href="#!">
                                    <img src="assets/images/shop/electronic/img_24.png" alt="image_not_found">
                                </a>
                                <div class="item_content">
                                    <h4 class="item_title">
                                        <a href="#!">Red Wireless Headphones Solo 2 HD Mobile</a>
                                    </h4>
                                    <span class="item_price">$3,49.99</span>
                                </div>
                            </div>
                        </div>

                        <a class="text_btn" href="#!">
                            <span>VIEW MORE</span>
                            <i class="fal fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="featured_products_wrap">
                        <h3 class="wrap_title">Featured Products</h3>

                        <div class="mb_50 clearfix">
                            <div class="electronic_product_small">
                                <a class="item_image" href="#!">
                                    <img src="assets/images/shop/electronic/img_23.png" alt="image_not_found">
                                </a>
                                <div class="item_content">
                                    <h4 class="item_title">
                                        <a href="#!">Red Wireless Headphones Solo 2 HD Mobile</a>
                                    </h4>
                                    <span class="item_price">$3,49.99</span>
                                </div>
                            </div>

                            <div class="electronic_product_small">
                                <a class="item_image" href="#!">
                                    <img src="assets/images/shop/electronic/img_26.png" alt="image_not_found">
                                </a>
                                <div class="item_content">
                                    <h4 class="item_title">
                                        <a href="#!">Red Wireless Headphones Solo 2 HD Mobile</a>
                                    </h4>
                                    <span class="item_price">$3,49.99</span>
                                </div>
                            </div>

                            <div class="electronic_product_small">
                                <a class="item_image" href="#!">
                                    <img src="assets/images/shop/electronic/img_07.png" alt="image_not_found">
                                </a>
                                <div class="item_content">
                                    <h4 class="item_title">
                                        <a href="#!">Red Wireless Headphones Solo 2 HD Mobile</a>
                                    </h4>
                                    <span class="item_price">$3,49.99</span>
                                </div>
                            </div>
                        </div>

                        <a class="text_btn" href="#!">
                            <span>VIEW MORE</span>
                            <i class="fal fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- feature_section - end
    ================================================== -->


    <!-- electronic_newsletter - start
    ================================================== -->
    <section class="electronic_newsletter clearfix">
        <div class="container maxw_1600">
            <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div class="col-lg-3 col-md-7 col-sm-9 col-xs-12">
                    <div class="title_wrap">
                        <i class="fal fa-paper-plane"></i>
                        <h2>Sign up for Newsletter</h2>
                        <p class="mb-0">...and receive $20 coupon for first shopping.</p>
                    </div>
                </div>

                <div class="col-lg-5 col-md-7 col-sm-9 col-xs-12">
                    <form action="#">
                        <div class="form_item">
                            <input type="email" name="email" placeholder="Enter your email address">
                            <button type="submit" class="custom_btn bg_electronic_blue">Sign up</button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-3 col-md-7 col-sm-9 col-xs-12">
                    <div class="payment_mathoud">
                        <p>WE USING SAFE PAYMENTS</p>
                        <img src="assets/images/payment_methods_01.png" alt="image_not_found">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- electronic_newsletter - end
    ================================================== -->


</main>
@endsection

@section('footer')
    @include('home.electronic.electronic_Footer')
@endsection
