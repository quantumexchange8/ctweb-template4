@extends('layout.master')

@section('title')
<title>Supermarket - Current Tech</title>
@endsection

@section('body_class', 'home_supermarket')

@section('navbar')
    @include('home.supermarket.supermarket_Navbar')
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
    <section class="slider_section supermarket_slider sec_ptb_50 clearfix" data-background="assets/images/backgrounds/bg_13.jpg">
        <div class="container maxw_1460">
            <div class="row justify-content-lg-between">
                <div class="col-lg-3">
                    <div class="alldepartments_menu_wrap">
                        <div class="alldepartments_dropdown show_lg collapse" id="alldepartments_dropdown">
                            <div class="card">
                                <ul class="alldepartments_menulist ul_li_block clearfix">
                                    <li>
                                        <a href="#!">
                                            <span class="icon">
                                                <img src="assets/images/icons/supermarket/icon_01.png" alt="icon_not_found">
                                            </span>
                                            <strong>Free Gift Product</strong>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <span class="icon">
                                                <img src="assets/images/icons/supermarket/icon_02.png" alt="icon_not_found">
                                            </span>
                                            <strong>Trending Product</strong>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <span class="icon">
                                                <img src="assets/images/icons/supermarket/icon_03.png" alt="icon_not_found">
                                            </span>
                                            <strong>Discount Products</strong>
                                        </a>
                                    </li>
                                    <li class="has_child">
                                        <a href="#!">
                                            <span class="icon">
                                                <img src="assets/images/icons/supermarket/icon_04.png" alt="icon_not_found">
                                            </span>
                                            Beauty & Health
                                        </a>
                                    </li>
                                    <li class="has_child">
                                        <a href="#!">
                                            <span class="icon">
                                                <img src="assets/images/icons/supermarket/icon_05.png" alt="icon_not_found">
                                            </span>
                                            Women's Fashion
                                        </a>
                                    </li>
                                    <li class="has_child">
                                        <a href="#!">
                                            <span class="icon">
                                                <img src="assets/images/icons/supermarket/icon_06.png" alt="icon_not_found">
                                            </span>
                                            Smart Phones & Tablets
                                        </a>
                                    </li>
                                    <li class="has_child">
                                        <a href="#!">
                                            <span class="icon">
                                                <img src="assets/images/icons/supermarket/icon_07.png" alt="icon_not_found">
                                            </span>
                                            Computing & Gaming
                                        </a>
                                    </li>
                                    <li class="has_child">
                                        <a href="#!">
                                            <span class="icon">
                                                <img src="assets/images/icons/supermarket/icon_08.png" alt="icon_not_found">
                                            </span>
                                            Home & Living
                                        </a>
                                    </li>
                                    <li class="has_child">
                                        <a href="#!">
                                            <span class="icon">
                                                <img src="assets/images/icons/supermarket/icon_09.png" alt="icon_not_found">
                                            </span>
                                            Diamond
                                        </a>
                                    </li>
                                    <li class="has_child">
                                        <a href="#!">
                                            <span class="icon">
                                                <img src="assets/images/icons/supermarket/icon_10.png" alt="icon_not_found">
                                            </span>
                                            Men
                                        </a>
                                    </li>
                                    <li class="has_child">
                                        <a href="#!">
                                            <span class="icon">
                                                <img src="assets/images/icons/supermarket/icon_11.png" alt="icon_not_found">
                                            </span>
                                            Accesories
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="main_slider clearfix" data-slick='{"arrows": false}'>
                        <div class="item clearfix" data-bg-color="#ffc156">
                            <div class="slider_image order-last" data-animation="fadeInUp" data-delay=".2s">
                                <img src="assets/images/slider/supermarket/img_01.png" alt="image_not_found">
                            </div>
                            <div class="slider_content">
                                <h4 data-animation="fadeInUp" data-delay=".4s">sell to get what you love</h4>
                                <h3 data-animation="fadeInUp" data-delay=".6s">The Gift you are Wishing</h3>
                                <div class="item_price" data-animation="fadeInUp" data-delay=".8s">
                                    <small>From</small>
                                    <sup>£</sup>749<sup>99</sup>
                                </div>
                                <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                                    <a href="#!" class="custom_btn btn_round bg_supermarket_red">Start Buying</a>
                                </div>
                            </div>
                        </div>

                        <div class="item clearfix" data-bg-color="#ffc156">
                            <div class="slider_image order-last" data-animation="fadeInUp" data-delay=".2s">
                                <img src="assets/images/slider/supermarket/img_01.png" alt="image_not_found">
                            </div>
                            <div class="slider_content">
                                <h4 data-animation="fadeInUp" data-delay=".4s">sell to get what you love</h4>
                                <h3 data-animation="fadeInUp" data-delay=".6s">The Gift you are Wishing</h3>
                                <div class="item_price" data-animation="fadeInUp" data-delay=".8s">
                                    <small>From</small>
                                    <sup>£</sup>749<sup>99</sup>
                                </div>
                                <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                                    <a href="#!" class="custom_btn btn_round bg_supermarket_red">Start Buying</a>
                                </div>
                            </div>
                        </div>

                        <div class="item clearfix" data-bg-color="#ffc156">
                            <div class="slider_image order-last" data-animation="fadeInUp" data-delay=".2s">
                                <img src="assets/images/slider/supermarket/img_01.png" alt="image_not_found">
                            </div>
                            <div class="slider_content">
                                <h4 data-animation="fadeInUp" data-delay=".4s">sell to get what you love</h4>
                                <h3 data-animation="fadeInUp" data-delay=".6s">The Gift you are Wishing</h3>
                                <div class="item_price" data-animation="fadeInUp" data-delay=".8s">
                                    <small>From</small>
                                    <sup>£</sup>749<sup>99</sup>
                                </div>
                                <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                                    <a href="#!" class="custom_btn btn_round bg_supermarket_red">Start Buying</a>
                                </div>
                            </div>
                        </div>

                        <div class="item clearfix" data-bg-color="#ffc156">
                            <div class="slider_image order-last" data-animation="fadeInUp" data-delay=".2s">
                                <img src="assets/images/slider/supermarket/img_01.png" alt="image_not_found">
                            </div>
                            <div class="slider_content">
                                <h4 data-animation="fadeInUp" data-delay=".4s">sell to get what you love</h4>
                                <h3 data-animation="fadeInUp" data-delay=".6s">The Gift you are Wishing</h3>
                                <div class="item_price" data-animation="fadeInUp" data-delay=".8s">
                                    <small>From</small>
                                    <sup>£</sup>749<sup>99</sup>
                                </div>
                                <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                                    <a href="#!" class="custom_btn btn_round bg_supermarket_red">Start Buying</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="sm_offer_item offer_fullimage text-white mb_30">
                        <img src="assets/images/offer/supermarket/img_01.jpg" alt="image_not_found">
                        <div class="item_content">
                            <h3 class="item_title text-white">
                                Smartphone Bestseller Products 2019
                            </h3>
                            <span class="item_price">Price: $298.99</span>
                            <a class="text_btn" href="#!">
                                <span>Pre - Order Now</span>
                                <i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="sm_offer_item offer_fullimage text-white mb_30">
                        <img src="assets/images/offer/supermarket/img_02.jpg" alt="image_not_found">
                        <div class="item_content">
                            <h3 class="item_title text-white">
                                Smartphone Bestseller Products 2019
                            </h3>
                            <span class="item_price">Price: $298.99</span>
                            <a class="text_btn" href="#!">
                                <span>Pre - Order Now</span>
                                <i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="sm_offer_item offer_fullimage text-white">
                        <img src="assets/images/offer/supermarket/img_03.jpg" alt="image_not_found">
                        <div class="item_content">
                            <h3 class="item_title text-white">
                                Smartphone Bestseller Products 2019
                            </h3>
                            <span class="item_price">Price: $298.99</span>
                            <a class="text_btn" href="#!">
                                <span>Pre - Order Now</span>
                                <i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider_section - end
    ================================================== -->


    <!-- policy_section - start
    ================================================== -->
    <section class="policy_section sec_ptb_50 pb-0 clearfix">
        <div class="container maxw_1460">
            <div class="supermarket_policy clearfix">
                <ul class="ul_li clearfix">
                    <li>
                        <div class="supermarket_policy_item clearfix">
                            <div class="item_icon">
                                <img src="assets/images/icons/supermarket/icon_12.png" alt="icon_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="text-uppercase">Free Delivery</h3>
                                <p>For all order over $120</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="supermarket_policy_item clearfix">
                            <div class="item_icon">
                                <img src="assets/images/icons/supermarket/icon_13.png" alt="icon_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="text-uppercase">Safe payment</h3>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="supermarket_policy_item clearfix">
                            <div class="item_icon">
                                <img src="assets/images/icons/supermarket/icon_14.png" alt="icon_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="text-uppercase">Shop with confidence</h3>
                                <p>If goods have problems</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="supermarket_policy_item clearfix">
                            <div class="item_icon">
                                <img src="assets/images/icons/supermarket/icon_15.png" alt="icon_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="text-uppercase">24/7 help center</h3>
                                <p>Dedicated 24/7 support</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="supermarket_policy_item clearfix">
                            <div class="item_icon">
                                <img src="assets/images/icons/supermarket/icon_16.png" alt="icon_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="text-uppercase">Friendly services</h3>
                                <p>30 day satisfaction guarantee</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- policy_section - end
    ================================================== -->


    <!-- deals_section - start
    ================================================== -->
    <section class="deals_section sec_ptb_50 clearfix">
        <div class="container maxw_1460">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="supermarket_section_title clearfix">
                        <span class="sub_title text-uppercase">A wide selection of items </span>
                        <h2 class="title_text mb-0">Top Flash Deal</h2>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="gray_line"></div>
                </div>

                <div class="col-lg-2">
                    <div class="carousel_nav align_right">
                        <button type="button" class="left_arrow5"><i class="fal fa-arrow-left"></i></button>
                        <button type="button" class="right_arrow5"><i class="fal fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>

            <div class="supermarket_deals_carousel position-relative clearfix">
                <div class="slideshow5_slider row clearfix" data-slick='{"dots": false}'>
                    <div class="item col">
                        <div class="supermarket_deals_item text-center clearfix">
                            <div class="offer_text">Flat -30%</div>
                            <a href="#!" class="item_image">
                                <img src="assets/images/shop/supermarket/img_01.png" alt="image_not_found">
                            </a>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!"> Baby Shoes </a>
                                </h3>
                            </div>
                            <span class="item_instock">21 Products</span>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="supermarket_deals_item text-center clearfix">
                            <div class="offer_text">Flat -30%</div>
                            <a href="#!" class="item_image">
                                <img src="assets/images/shop/supermarket/img_02.png" alt="image_not_found">
                            </a>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!"> Baby Shoes </a>
                                </h3>
                            </div>
                            <span class="item_instock">21 Products</span>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="supermarket_deals_item text-center clearfix">
                            <div class="offer_text">Flat -30%</div>
                            <a href="#!" class="item_image">
                                <img src="assets/images/shop/supermarket/img_03.png" alt="image_not_found">
                            </a>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!"> Baby Shoes </a>
                                </h3>
                            </div>
                            <span class="item_instock">21 Products</span>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="supermarket_deals_item text-center clearfix">
                            <div class="offer_text">Flat -30%</div>
                            <a href="#!" class="item_image">
                                <img src="assets/images/shop/supermarket/img_04.png" alt="image_not_found">
                            </a>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!"> Baby Shoes </a>
                                </h3>
                            </div>
                            <span class="item_instock">21 Products</span>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="supermarket_deals_item text-center clearfix">
                            <div class="offer_text">Flat -30%</div>
                            <a href="#!" class="item_image">
                                <img src="assets/images/shop/supermarket/img_01.png" alt="image_not_found">
                            </a>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!"> Baby Shoes </a>
                                </h3>
                            </div>
                            <span class="item_instock">21 Products</span>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="supermarket_deals_item text-center clearfix">
                            <div class="offer_text">Flat -30%</div>
                            <a href="#!" class="item_image">
                                <img src="assets/images/shop/supermarket/img_02.png" alt="image_not_found">
                            </a>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!"> Baby Shoes </a>
                                </h3>
                            </div>
                            <span class="item_instock">21 Products</span>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="supermarket_deals_item text-center clearfix">
                            <div class="offer_text">Flat -30%</div>
                            <a href="#!" class="item_image">
                                <img src="assets/images/shop/supermarket/img_03.png" alt="image_not_found">
                            </a>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!"> Baby Shoes </a>
                                </h3>
                            </div>
                            <span class="item_instock">21 Products</span>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="supermarket_deals_item text-center clearfix">
                            <div class="offer_text">Flat -30%</div>
                            <a href="#!" class="item_image">
                                <img src="assets/images/shop/supermarket/img_04.png" alt="image_not_found">
                            </a>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!"> Baby Shoes </a>
                                </h3>
                            </div>
                            <span class="item_instock">21 Products</span>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="supermarket_deals_item text-center clearfix">
                            <div class="offer_text">Flat -30%</div>
                            <a href="#!" class="item_image">
                                <img src="assets/images/shop/supermarket/img_01.png" alt="image_not_found">
                            </a>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!"> Baby Shoes </a>
                                </h3>
                            </div>
                            <span class="item_instock">21 Products</span>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="supermarket_deals_item text-center clearfix">
                            <div class="offer_text">Flat -30%</div>
                            <a href="#!" class="item_image">
                                <img src="assets/images/shop/supermarket/img_02.png" alt="image_not_found">
                            </a>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!"> Baby Shoes </a>
                                </h3>
                            </div>
                            <span class="item_instock">21 Products</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- deals_section - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section sec_ptb_100 bg_white clearfix">
        <div class="container maxw_1460">
            <div class="row justify-content-lg-between">
                <div class="col-lg-3">
                    <div class="supermarket_sidebar_tab mb_30">
                        <div class="wrap_heade bg_supermarket_red clearfix">
                            <h2>Top Flash Deal</h2>
                            <span>A wide selection of items</span>
                        </div>
                        <ul class="ul_li_block nav" role="tablist">
                            <li><a class="active" data-toggle="tab" href="#best_deals_tab">Best Deals</a></li>
                            <li><a data-toggle="tab" href="#tv_video_tab">TV & Video</a></li>
                            <li><a data-toggle="tab" href="#cameras_tab">Cameras</a></li>
                            <li><a data-toggle="tab" href="#audio_tab">Audio</a></li>
                            <li><a data-toggle="tab" href="#cell_phones_tab">Cell Phones</a></li>
                            <li><a data-toggle="tab" href="#gps_navi_tab">GPS & Navi</a></li>
                            <li><a data-toggle="tab" href="#computers_tab">Computers</a></li>
                            <li><a data-toggle="tab" href="#portable_audio_tab">Portable Audio</a></li>
                            <li><a data-toggle="tab" href="#accesoriess_tab">Accesoriess</a></li>
                        </ul>
                    </div>

                    <div class="supermarket_advertisement_3">
                        <img src="assets/images/offer/supermarket/img_05.jpg" alt="image_not_found">
                        <div class="item_content text-white">
                            <h3 class="item_title text-white">
                                ALL-NEW-SPORT
                                <span>STARTING AT</span>
                            </h3>
                            <span class="item_price"><sup>£</sup>7,90</span>
                            <a class="custom_btn bg_black btn_round" href="#!">Shop Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="tab-content">
                        <div id="best_deals_tab" class="tab-pane active">
                            <ul class="supermarket_product_columns has_4columns ul_li clearfix">
                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_05.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_06.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_07.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_08.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_09.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#8d8d8d">SOLD OUT</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_10.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="supermarket_advertisement_carousel position-relative">
                                    <div class="slideshow1_slider" data-slick='{"dots": false}'>
                                        <div class="item">
                                            <div class="supermarket_advertisement_2">
                                                <img src="assets/images/offer/supermarket/img_04.jpg" alt="image_not_found">
                                                <div class="item_content">
                                                    <span class="text-uppercase">Gaming 4k</span>
                                                    <h3 class="item_title text-white mb_15">Desktop & Case</h3>
                                                    <a href="#!" class="custom_btn btn_sm btn_round bg_supermarket_red">Shop Now</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="supermarket_advertisement_2">
                                                <img src="assets/images/offer/supermarket/img_04.jpg" alt="image_not_found">
                                                <div class="item_content">
                                                    <span class="text-uppercase">Gaming 4k</span>
                                                    <h3 class="item_title text-white mb_15">Desktop & Case</h3>
                                                    <a href="#!" class="custom_btn btn_sm btn_round bg_supermarket_red">Shop Now</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="supermarket_advertisement_2">
                                                <img src="assets/images/offer/supermarket/img_04.jpg" alt="image_not_found">
                                                <div class="item_content">
                                                    <span class="text-uppercase">Gaming 4k</span>
                                                    <h3 class="item_title text-white mb_15">Desktop & Case</h3>
                                                    <a href="#!" class="custom_btn btn_sm btn_round bg_supermarket_red">Shop Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel_nav clearfix">
                                        <button type="button" class="left_arrow"><i class="fal fa-arrow-left"></i></button>
                                        <button type="button" class="right_arrow"><i class="fal fa-arrow-right"></i></button>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_11.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_13.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_14.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_15.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div id="tv_video_tab" class="tab-pane fade">
                            <ul class="supermarket_product_columns has_4columns ul_li clearfix">
                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_05.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_06.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_07.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_08.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_09.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#8d8d8d">SOLD OUT</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_10.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_11.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_13.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_14.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_15.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div id="cameras_tab" class="tab-pane fade">
                            <ul class="supermarket_product_columns has_4columns ul_li clearfix">
                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_05.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_06.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_07.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_08.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_09.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#8d8d8d">SOLD OUT</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_10.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_11.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_13.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_14.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_15.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div id="audio_tab" class="tab-pane fade">
                            <ul class="supermarket_product_columns has_4columns ul_li clearfix">
                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_05.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_06.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_07.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_08.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_09.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#8d8d8d">SOLD OUT</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_10.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_11.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_13.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_14.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_15.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div id="cell_phones_tab" class="tab-pane fade">
                            <ul class="supermarket_product_columns has_4columns ul_li clearfix">
                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_05.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_06.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_07.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_08.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_09.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#8d8d8d">SOLD OUT</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_10.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_11.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_13.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_14.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_15.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div id="gps_navi_tab" class="tab-pane fade">
                            <ul class="supermarket_product_columns has_4columns ul_li clearfix">
                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_05.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_06.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_07.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_08.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_09.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#8d8d8d">SOLD OUT</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_10.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_11.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_13.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_14.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_15.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div id="computers_tab" class="tab-pane fade">
                            <ul class="supermarket_product_columns has_4columns ul_li clearfix">
                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_05.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_06.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_07.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_08.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_09.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#8d8d8d">SOLD OUT</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_10.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_11.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_13.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_14.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_15.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div id="portable_audio_tab" class="tab-pane fade">
                            <ul class="supermarket_product_columns has_4columns ul_li clearfix">
                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_05.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_06.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_07.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_08.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_09.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#8d8d8d">SOLD OUT</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_10.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_11.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_13.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_14.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_15.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div id="accesoriess_tab" class="tab-pane fade">
                            <ul class="supermarket_product_columns has_4columns ul_li clearfix">
                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_05.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_06.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_07.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_08.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_09.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#8d8d8d">SOLD OUT</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_10.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_11.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_12.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_13.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_14.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="supermarket_product_item">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                            <li data-bg-color="#0062bd">NEW</li>
                                        </ul>
                                        <a class="item_image" href="#!">
                                            <img src="assets/images/shop/supermarket/img_15.png" alt="image_not_found">
                                        </a>
                                        <div class="item_content">
                                            <span class="item_type text-uppercase">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">
                                                    Wireless Audio System Multiroom 360 
                                                </a>
                                            </h3>
                                            <div class="item_price">
                                                <strong>£1,300</strong>
                                                <del>£2,300</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
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
    <section class="advertisement_section sec_ptb_50 pb-0 clearfix">
        <div class="container maxw_1460">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="sm_offer_item offer_fullimage text-white">
                        <img src="assets/images/offer/supermarket/img_06.jpg" alt="image_not_found">
                        <div class="item_content">
                            <h3 class="item_title text-white">
                                Smartphone Bestseller Products 2019
                            </h3>
                            <span class="item_price">Price: $298.99</span>
                            <a class="text_btn" href="#!">
                                <span>Pre - Order Now</span>
                                <i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sm_offer_item offer_fullimage text-white">
                        <img src="assets/images/offer/supermarket/img_07.jpg" alt="image_not_found">
                        <div class="item_content">
                            <h3 class="item_title text-white">
                                Smartphone Bestseller Products 2019
                            </h3>
                            <span class="item_price">Price: $298.99</span>
                            <a class="text_btn" href="#!">
                                <span>Pre - Order Now</span>
                                <i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sm_offer_item offer_fullimage text-white">
                        <img src="assets/images/offer/supermarket/img_08.jpg" alt="image_not_found">
                        <div class="item_content">
                            <h3 class="item_title text-white">
                                Smartphone Bestseller Products 2019
                            </h3>
                            <span class="item_price">Price: $298.99</span>
                            <a class="text_btn" href="#!">
                                <span>Pre - Order Now</span>
                                <i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- advertisement_section - end
    ================================================== -->


    <!-- bestseller_section - start
    ================================================== -->
    <section class="bestseller_section sec_ptb_50 pb-0 clearfix">
        <div class="container maxw_1460">

            <div class="row mb_50 align-items-center justify-content-lg-between">
                <div class="col-lg-5">
                    <div class="supermarket_section_title clearfix">
                        <span class="sub_title text-uppercase">A wide selection of items</span>
                        <h2 class="title_text mb-0">Bestseller Products</h2>
                    </div>
                </div>

                <div class="col-lg-7">
                    <ul class="supermarket_tab_nav ul_li_right nav clearfix" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#top_tab">Top 20</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#phones_tablets_tab">Phones & Tablets</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#laptops_computers_tab">Laptops & Computers</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#video_cameras_tab">Video Cameras</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="tab-content">
                <div id="top_tab" class="tab-pane active">
                    <ul class="supermarket_product_columns has_3columns ul_li bg_white clearfix">
                        <li>
                            <div class="supermarket_product_listlayout">
                                <div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_16.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_16.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_16.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item_content">
                                    <span class="item_type text-uppercase" data-bg-color="#0062bd">Watch</span>
                                    <div class="rating_star_wrap d-flex align-items-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">4.0</span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="#!">Relogio Masculino Watches</a>
                                    </h3>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                    <ul class="info_list ul_li_block clearfix">
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-calendar-alt"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Estimated Delivery Time: 21-39days
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-truck-moving"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Total: 1327 orders
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="supermarket_product_listlayout">
                                <div class="item_image">
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_18.png" alt="image_not_found">
                                    </div>
                                    <ul class="countdown_timer content_inbox ul_li_center clearfix" data-countdown="2021/3/24"></ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_type text-uppercase" data-bg-color="#0062bd">Watch</span>
                                    <div class="rating_star_wrap d-flex align-items-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">4.0</span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="#!">Relogio Masculino Watches</a>
                                    </h3>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                    <ul class="info_list ul_li_block clearfix">
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-calendar-alt"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Estimated Delivery Time: 21-39days
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-truck-moving"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Total: 1327 orders
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="supermarket_product_listlayout">
                                <div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_17.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_17.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_17.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item_content">
                                    <span class="item_type text-uppercase" data-bg-color="#0062bd">Watch</span>
                                    <div class="rating_star_wrap d-flex align-items-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">4.0</span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="#!">Relogio Masculino Watches</a>
                                    </h3>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                    <ul class="info_list ul_li_block clearfix">
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-calendar-alt"></i>
                                            </div>
                                            <div class="info_content">
                                                <p class="mb-0">
                                                    Estimated Delivery Time: 21-39days
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-truck-moving"></i>
                                            </div>
                                            <div class="info_content">
                                                <p class="mb-0">
                                                    Total: 1327 orders
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="supermarket_product_listlayout">
                                <div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_19.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_19.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_19.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item_content">
                                    <span class="item_type text-uppercase" data-bg-color="#0062bd">Watch</span>
                                    <div class="rating_star_wrap d-flex align-items-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">4.0</span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="#!">Relogio Masculino Watches</a>
                                    </h3>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                    <ul class="info_list ul_li_block clearfix">
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-calendar-alt"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Estimated Delivery Time: 21-39days
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-truck-moving"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Total: 1327 orders
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="supermarket_product_listlayout">
                                <div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_20.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_20.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_20.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item_content">
                                    <span class="item_type text-uppercase" data-bg-color="#0062bd">Watch</span>
                                    <div class="rating_star_wrap d-flex align-items-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">4.0</span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="#!">Relogio Masculino Watches</a>
                                    </h3>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                    <ul class="info_list ul_li_block clearfix">
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-calendar-alt"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Estimated Delivery Time: 21-39days
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-truck-moving"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Total: 1327 orders
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="supermarket_product_listlayout">
                                <div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_21.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_21.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_21.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item_content">
                                    <span class="item_type text-uppercase" data-bg-color="#0062bd">Watch</span>
                                    <div class="rating_star_wrap d-flex align-items-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">4.0</span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="#!">Relogio Masculino Watches</a>
                                    </h3>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                    <ul class="info_list ul_li_block clearfix">
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-calendar-alt"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Estimated Delivery Time: 21-39days
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-truck-moving"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Total: 1327 orders
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div id="phones_tablets_tab" class="tab-pane fade">
                    <ul class="supermarket_product_columns has_3columns ul_li bg_white clearfix">
                        <li>
                            <div class="supermarket_product_listlayout">
                                <div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_16.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_16.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_16.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item_content">
                                    <span class="item_type text-uppercase" data-bg-color="#0062bd">Watch</span>
                                    <div class="rating_star_wrap d-flex align-items-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">4.0</span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="#!">Relogio Masculino Watches</a>
                                    </h3>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                    <ul class="info_list ul_li_block clearfix">
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-calendar-alt"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Estimated Delivery Time: 21-39days
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-truck-moving"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Total: 1327 orders
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="supermarket_product_listlayout">
                                <div class="item_image">
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_18.png" alt="image_not_found">
                                    </div>
                                    <ul class="countdown_timer content_inbox ul_li_center clearfix" data-countdown="2021/3/24"></ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_type text-uppercase" data-bg-color="#0062bd">Watch</span>
                                    <div class="rating_star_wrap d-flex align-items-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">4.0</span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="#!">Relogio Masculino Watches</a>
                                    </h3>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                    <ul class="info_list ul_li_block clearfix">
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-calendar-alt"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Estimated Delivery Time: 21-39days
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-truck-moving"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Total: 1327 orders
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="supermarket_product_listlayout">
                                <div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_17.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_17.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_17.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item_content">
                                    <span class="item_type text-uppercase" data-bg-color="#0062bd">Watch</span>
                                    <div class="rating_star_wrap d-flex align-items-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">4.0</span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="#!">Relogio Masculino Watches</a>
                                    </h3>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                    <ul class="info_list ul_li_block clearfix">
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-calendar-alt"></i>
                                            </div>
                                            <div class="info_content">
                                                <p class="mb-0">
                                                    Estimated Delivery Time: 21-39days
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-truck-moving"></i>
                                            </div>
                                            <div class="info_content">
                                                <p class="mb-0">
                                                    Total: 1327 orders
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="supermarket_product_listlayout">
                                <div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_19.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_19.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_19.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item_content">
                                    <span class="item_type text-uppercase" data-bg-color="#0062bd">Watch</span>
                                    <div class="rating_star_wrap d-flex align-items-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">4.0</span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="#!">Relogio Masculino Watches</a>
                                    </h3>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                    <ul class="info_list ul_li_block clearfix">
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-calendar-alt"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Estimated Delivery Time: 21-39days
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-truck-moving"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Total: 1327 orders
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="supermarket_product_listlayout">
                                <div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_20.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_20.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_20.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item_content">
                                    <span class="item_type text-uppercase" data-bg-color="#0062bd">Watch</span>
                                    <div class="rating_star_wrap d-flex align-items-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">4.0</span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="#!">Relogio Masculino Watches</a>
                                    </h3>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                    <ul class="info_list ul_li_block clearfix">
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-calendar-alt"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Estimated Delivery Time: 21-39days
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-truck-moving"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Total: 1327 orders
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="supermarket_product_listlayout">
                                <div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_21.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_21.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_21.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item_content">
                                    <span class="item_type text-uppercase" data-bg-color="#0062bd">Watch</span>
                                    <div class="rating_star_wrap d-flex align-items-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">4.0</span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="#!">Relogio Masculino Watches</a>
                                    </h3>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                    <ul class="info_list ul_li_block clearfix">
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-calendar-alt"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Estimated Delivery Time: 21-39days
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-truck-moving"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Total: 1327 orders
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div id="laptops_computers_tab" class="tab-pane fade">
                    <ul class="supermarket_product_columns has_3columns ul_li bg_white clearfix">
                        <li>
                            <div class="supermarket_product_listlayout">
                                <div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_16.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_16.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_16.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item_content">
                                    <span class="item_type text-uppercase" data-bg-color="#0062bd">Watch</span>
                                    <div class="rating_star_wrap d-flex align-items-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">4.0</span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="#!">Relogio Masculino Watches</a>
                                    </h3>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                    <ul class="info_list ul_li_block clearfix">
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-calendar-alt"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Estimated Delivery Time: 21-39days
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-truck-moving"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Total: 1327 orders
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="supermarket_product_listlayout">
                                <div class="item_image">
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_18.png" alt="image_not_found">
                                    </div>
                                    <ul class="countdown_timer content_inbox ul_li_center clearfix" data-countdown="2021/3/24"></ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_type text-uppercase" data-bg-color="#0062bd">Watch</span>
                                    <div class="rating_star_wrap d-flex align-items-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">4.0</span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="#!">Relogio Masculino Watches</a>
                                    </h3>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                    <ul class="info_list ul_li_block clearfix">
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-calendar-alt"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Estimated Delivery Time: 21-39days
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-truck-moving"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Total: 1327 orders
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="supermarket_product_listlayout">
                                <div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_17.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_17.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_17.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item_content">
                                    <span class="item_type text-uppercase" data-bg-color="#0062bd">Watch</span>
                                    <div class="rating_star_wrap d-flex align-items-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">4.0</span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="#!">Relogio Masculino Watches</a>
                                    </h3>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                    <ul class="info_list ul_li_block clearfix">
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-calendar-alt"></i>
                                            </div>
                                            <div class="info_content">
                                                <p class="mb-0">
                                                    Estimated Delivery Time: 21-39days
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-truck-moving"></i>
                                            </div>
                                            <div class="info_content">
                                                <p class="mb-0">
                                                    Total: 1327 orders
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="supermarket_product_listlayout">
                                <div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_19.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_19.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_19.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item_content">
                                    <span class="item_type text-uppercase" data-bg-color="#0062bd">Watch</span>
                                    <div class="rating_star_wrap d-flex align-items-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">4.0</span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="#!">Relogio Masculino Watches</a>
                                    </h3>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                    <ul class="info_list ul_li_block clearfix">
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-calendar-alt"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Estimated Delivery Time: 21-39days
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-truck-moving"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Total: 1327 orders
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="supermarket_product_listlayout">
                                <div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_20.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_20.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_20.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item_content">
                                    <span class="item_type text-uppercase" data-bg-color="#0062bd">Watch</span>
                                    <div class="rating_star_wrap d-flex align-items-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">4.0</span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="#!">Relogio Masculino Watches</a>
                                    </h3>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                    <ul class="info_list ul_li_block clearfix">
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-calendar-alt"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Estimated Delivery Time: 21-39days
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-truck-moving"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Total: 1327 orders
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="supermarket_product_listlayout">
                                <div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_21.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_21.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_21.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item_content">
                                    <span class="item_type text-uppercase" data-bg-color="#0062bd">Watch</span>
                                    <div class="rating_star_wrap d-flex align-items-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">4.0</span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="#!">Relogio Masculino Watches</a>
                                    </h3>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                    <ul class="info_list ul_li_block clearfix">
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-calendar-alt"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Estimated Delivery Time: 21-39days
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-truck-moving"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Total: 1327 orders
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div id="video_cameras_tab" class="tab-pane fade">
                    <ul class="supermarket_product_columns has_3columns ul_li bg_white clearfix">
                        <li>
                            <div class="supermarket_product_listlayout">
                                <div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_16.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_16.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_16.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item_content">
                                    <span class="item_type text-uppercase" data-bg-color="#0062bd">Watch</span>
                                    <div class="rating_star_wrap d-flex align-items-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">4.0</span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="#!">Relogio Masculino Watches</a>
                                    </h3>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                    <ul class="info_list ul_li_block clearfix">
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-calendar-alt"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Estimated Delivery Time: 21-39days
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-truck-moving"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Total: 1327 orders
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="supermarket_product_listlayout">
                                <div class="item_image">
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_18.png" alt="image_not_found">
                                    </div>
                                    <ul class="countdown_timer content_inbox ul_li_center clearfix" data-countdown="2021/3/24"></ul>
                                </div>
                                <div class="item_content">
                                    <span class="item_type text-uppercase" data-bg-color="#0062bd">Watch</span>
                                    <div class="rating_star_wrap d-flex align-items-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">4.0</span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="#!">Relogio Masculino Watches</a>
                                    </h3>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                    <ul class="info_list ul_li_block clearfix">
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-calendar-alt"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Estimated Delivery Time: 21-39days
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-truck-moving"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Total: 1327 orders
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="supermarket_product_listlayout">
                                <div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_17.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_17.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_17.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item_content">
                                    <span class="item_type text-uppercase" data-bg-color="#0062bd">Watch</span>
                                    <div class="rating_star_wrap d-flex align-items-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">4.0</span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="#!">Relogio Masculino Watches</a>
                                    </h3>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                    <ul class="info_list ul_li_block clearfix">
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-calendar-alt"></i>
                                            </div>
                                            <div class="info_content">
                                                <p class="mb-0">
                                                    Estimated Delivery Time: 21-39days
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-truck-moving"></i>
                                            </div>
                                            <div class="info_content">
                                                <p class="mb-0">
                                                    Total: 1327 orders
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="supermarket_product_listlayout">
                                <div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_19.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_19.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_19.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item_content">
                                    <span class="item_type text-uppercase" data-bg-color="#0062bd">Watch</span>
                                    <div class="rating_star_wrap d-flex align-items-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">4.0</span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="#!">Relogio Masculino Watches</a>
                                    </h3>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                    <ul class="info_list ul_li_block clearfix">
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-calendar-alt"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Estimated Delivery Time: 21-39days
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-truck-moving"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Total: 1327 orders
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="supermarket_product_listlayout">
                                <div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_20.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_20.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_20.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item_content">
                                    <span class="item_type text-uppercase" data-bg-color="#0062bd">Watch</span>
                                    <div class="rating_star_wrap d-flex align-items-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">4.0</span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="#!">Relogio Masculino Watches</a>
                                    </h3>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                    <ul class="info_list ul_li_block clearfix">
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-calendar-alt"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Estimated Delivery Time: 21-39days
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-truck-moving"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Total: 1327 orders
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="supermarket_product_listlayout">
                                <div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_21.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_21.png" alt="image_not_found">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/shop/supermarket/img_21.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item_content">
                                    <span class="item_type text-uppercase" data-bg-color="#0062bd">Watch</span>
                                    <div class="rating_star_wrap d-flex align-items-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">4.0</span>
                                    </div>
                                    <h3 class="item_title">
                                        <a href="#!">Relogio Masculino Watches</a>
                                    </h3>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                    <ul class="info_list ul_li_block clearfix">
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-calendar-alt"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Estimated Delivery Time: 21-39days
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item_icon">
                                                <i class="fal fa-truck-moving"></i>
                                            </div>
                                            <div class="item_content">
                                                <p class="mb-0">
                                                    Total: 1327 orders
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- bestseller_section - end
    ================================================== -->


    <!-- advertisement_section - start
    ================================================== -->
    <section class="advertisement_section sec_ptb_50 clearfix">
        <div class="container maxw_1460">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="sm_offer_item offer_fullimage text-white">
                        <img src="assets/images/offer/supermarket/img_09.jpg" alt="image_not_found">
                        <div class="item_content">
                            <h3 class="item_title text-white">
                                Smartphone Bestseller Products 2019
                            </h3>
                            <span class="item_price">Price: $298.99</span>
                            <a class="text_btn" href="#!">
                                <span>Pre - Order Now</span>
                                <i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="sm_offer_item offer_fullimage text-white">
                        <img src="assets/images/offer/supermarket/img_10.jpg" alt="image_not_found">
                        <div class="item_content">
                            <h3 class="item_title text-white">
                                Smartphone Bestseller Products 2019
                            </h3>
                            <span class="item_price">Price: $298.99</span>
                            <a class="text_btn" href="#!">
                                <span>Pre - Order Now</span>
                                <i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- advertisement_section - end
    ================================================== -->


    <!-- supermarket_feature_carousel - start
    ================================================== -->
    <section class="supermarket_feature_carousel arrow_ycenter clearfix" data-slick='{"dots": false}'>
        <div class="item sec_ptb_50 d-flex align-items-center" data-bg-color="#18171c">
            <div class="container maxw_1460">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-7 order-last">
                        <div class="item_image">
                            <img src="assets/images/feature/supermarket/img_01.png" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="item_content">
                            <span class="item_price">£99.00</span>
                            <h4 class="sub_title text-white">ALL-NEW-SPORT</h4>
                            <h3 class="item_title text-white mb_30">
                                Everything you need to Start an online store 
                            </h3>
                            <a class="custom_btn btn_round bg_electronic_blue" href="#!">Start Buying</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="item sec_ptb_50 d-flex align-items-center" data-bg-color="#18171c">
            <div class="container maxw_1460">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-7 order-last">
                        <div class="item_image">
                            <img src="assets/images/feature/supermarket/img_01.png" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="item_content">
                            <span class="item_price">£99.00</span>
                            <h4 class="sub_title text-white">ALL-NEW-SPORT</h4>
                            <h3 class="item_title text-white mb_30">
                                Everything you need to Start an online store 
                            </h3>
                            <a class="custom_btn btn_round bg_electronic_blue" href="#!">Start Buying</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="item sec_ptb_50 d-flex align-items-center" data-bg-color="#18171c">
            <div class="container maxw_1460">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-7 order-last">
                        <div class="item_image">
                            <img src="assets/images/feature/supermarket/img_01.png" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="item_content">
                            <span class="item_price">£99.00</span>
                            <h4 class="sub_title text-white">ALL-NEW-SPORT</h4>
                            <h3 class="item_title text-white mb_30">
                                Everything you need to Start an online store 
                            </h3>
                            <a class="custom_btn btn_round bg_electronic_blue" href="#!">Start Buying</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- supermarket_feature_carousel - end
    ================================================== -->


    <!-- bestseller_section - start
    ================================================== -->
    <section class="bestseller_section sec_ptb_100 clearfix">
        <div class="container">
            <div class="row justify-content-lg-between">

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="bestseller_wrap">
                        <div class="supermarket_section_title mb_50 clearfix">
                            <span class="sub_title text-uppercase">A wide selection of items</span>
                            <h2 class="title_text mb-0">Bestseller Products</h2>
                        </div>

                        <div class="supermarket_product_small">
                            <div class="item_image">
                                <img src="assets/images/shop/supermarket/img_22.png" alt="image_not_found">
                                <ul class="product_label ul_li_block clearfix">
                                    <li data-bg-color="#cc1414">-70%</li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <span class="item_type">Speakers</span>
                                <h3 class="item_title">
                                    <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                </h3>
                                <span class="item_price">£2,300</span>
                                <ul class="rating_star ul_li clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                        </div>

                        <div class="supermarket_product_small">
                            <div class="item_image">
                                <img src="assets/images/shop/supermarket/img_13.png" alt="image_not_found">
                                <ul class="product_label ul_li_block clearfix">
                                    <li data-bg-color="#cc1414">-70%</li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <span class="item_type">Speakers</span>
                                <h3 class="item_title">
                                    <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                </h3>
                                <span class="item_price">£2,300</span>
                                <ul class="rating_star ul_li clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                        </div>

                        <div class="supermarket_product_small">
                            <div class="item_image">
                                <img src="assets/images/shop/supermarket/img_16.png" alt="image_not_found">
                                <ul class="product_label ul_li_block clearfix">
                                    <li data-bg-color="#cc1414">-70%</li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <span class="item_type">Speakers</span>
                                <h3 class="item_title">
                                    <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                </h3>
                                <span class="item_price">£2,300</span>
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

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="bestseller_wrap">
                        <div class="supermarket_section_title mb_50 clearfix">
                            <span class="sub_title text-uppercase">A wide selection of items</span>
                            <h2 class="title_text mb-0">Bestseller Products</h2>
                        </div>

                        <div class="supermarket_product_small">
                            <div class="item_image">
                                <img src="assets/images/shop/supermarket/img_11.png" alt="image_not_found">
                                <ul class="product_label ul_li_block clearfix">
                                    <li data-bg-color="#cc1414">-70%</li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <span class="item_type">Speakers</span>
                                <h3 class="item_title">
                                    <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                </h3>
                                <span class="item_price">£2,300</span>
                                <ul class="rating_star ul_li clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                        </div>

                        <div class="supermarket_product_small">
                            <div class="item_image">
                                <img src="assets/images/shop/supermarket/img_19.png" alt="image_not_found">
                                <ul class="product_label ul_li_block clearfix">
                                    <li data-bg-color="#cc1414">-70%</li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <span class="item_type">Speakers</span>
                                <h3 class="item_title">
                                    <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                </h3>
                                <span class="item_price">£2,300</span>
                                <ul class="rating_star ul_li clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                        </div>

                        <div class="supermarket_product_small">
                            <div class="item_image">
                                <img src="assets/images/shop/supermarket/img_21.png" alt="image_not_found">
                                <ul class="product_label ul_li_block clearfix">
                                    <li data-bg-color="#cc1414">-70%</li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <span class="item_type">Speakers</span>
                                <h3 class="item_title">
                                    <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                </h3>
                                <span class="item_price">£2,300</span>
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

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="bestseller_wrap">
                        <div class="supermarket_section_title mb_50 clearfix">
                            <span class="sub_title text-uppercase">A wide selection of items</span>
                            <h2 class="title_text mb-0">Bestseller Products</h2>
                        </div>

                        <div class="supermarket_product_small">
                            <div class="item_image">
                                <img src="assets/images/shop/supermarket/img_23.png" alt="image_not_found">
                                <ul class="product_label ul_li_block clearfix">
                                    <li data-bg-color="#cc1414">-70%</li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <span class="item_type">Speakers</span>
                                <h3 class="item_title">
                                    <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                </h3>
                                <span class="item_price">£2,300</span>
                                <ul class="rating_star ul_li clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                        </div>

                        <div class="supermarket_product_small">
                            <div class="item_image">
                                <img src="assets/images/shop/supermarket/img_24.png" alt="image_not_found">
                                <ul class="product_label ul_li_block clearfix">
                                    <li data-bg-color="#cc1414">-70%</li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <span class="item_type">Speakers</span>
                                <h3 class="item_title">
                                    <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                </h3>
                                <span class="item_price">£2,300</span>
                                <ul class="rating_star ul_li clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                        </div>

                        <div class="supermarket_product_small">
                            <div class="item_image">
                                <img src="assets/images/shop/supermarket/img_06.png" alt="image_not_found">
                                <ul class="product_label ul_li_block clearfix">
                                    <li data-bg-color="#cc1414">-70%</li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <span class="item_type">Speakers</span>
                                <h3 class="item_title">
                                    <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                </h3>
                                <span class="item_price">£2,300</span>
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
    </section>
    <!-- bestseller_section - end
    ================================================== -->


</main>
@endsection

@section('footer')
    @include('home.supermarket.supermarket_Footer')
@endsection

