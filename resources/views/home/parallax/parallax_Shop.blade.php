@extends('layout.master')

@section('title')
<title>Parallax Shop - Current Tech</title>
@endsection

@section('body_class', 'home_parallax_shop')

@section('navbar')
    @include('home.parallax.parallax_Navbar')
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
    <section class="slider_section parallax_shop_slider position-relative clearfix">
        <div class="main_slider clearfix" data-slick='{"dots": false}'>
            <div class="item d-flex align-items-center" data-background="assets/images/slider/parallax_shop/bg_01.jpg">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="slider_content text-center">
                            <h4 data-animation="fadeInUp" data-delay=".2s">NEW SPRING</h4>
                            <h3 data-animation="fadeInUp" data-delay=".4s">Arrivals Sale</h3>
                            <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay=".6s">
                                <a class="custom_btn bg_shop_brown text-uppercase" href="#!">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item d-flex align-items-center" data-background="assets/images/slider/parallax_shop/bg_02.jpg">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="slider_content text-center">
                            <h4 data-animation="fadeInUp" data-delay=".2s">NEW SPRING</h4>
                            <h3 data-animation="fadeInUp" data-delay=".4s">Arrivals Sale</h3>
                            <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay=".6s">
                                <a class="custom_btn bg_shop_brown text-uppercase" href="#!">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel_nav">
            <button type="button" class="main_left_arrow"><i class="fal fa-arrow-left"></i></button>
            <button type="button" class="main_right_arrow"><i class="fal fa-arrow-right"></i></button>
        </div>
    </section>
    <!-- slider_section - end
    ================================================== -->


    <!-- offer_section - start
    ================================================== -->
    <section class="offer_section clearfix">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="ps_offer_item">
                        <img src="assets/images/offer/parallax_shop/img_01.jpg" alt="image_not_found">
                        <div class="item_content text-center pb-0" data-bg-color="#eef9f1">
                            <h4 data-text-color="#8cc39b">Sports Shoe</h4>
                            <h3>Winter collections</h3>
                            <span>Flat 50% Off</span>
                            <div class="abtn_wrap clearfix">
                                <a class="custom_btn bg_shop_brown text-uppercase" href="#!">View Collection</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="ps_offer_item">
                        <img src="assets/images/offer/parallax_shop/img_02.jpg" alt="image_not_found">
                        <div class="item_content text-center pb-0" data-bg-color="#fef4e8">
                            <h4 data-text-color="#d2af85">Women's</h4>
                            <h3>Winter collections</h3>
                            <span>Flat 50% Off</span>
                            <div class="abtn_wrap clearfix">
                                <a class="custom_btn bg_shop_brown text-uppercase" href="#!">View Collection</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="ps_offer_item">
                        <img src="assets/images/offer/parallax_shop/img_03.jpg" alt="image_not_found">
                        <div class="item_content text-center pb-0" data-bg-color="#fef5fa">
                            <h4 data-text-color="#de9dc1">Men's</h4>
                            <h3>Winter collections</h3>
                            <span>Flat 50% Off</span>
                            <div class="abtn_wrap clearfix">
                                <a class="custom_btn bg_shop_brown text-uppercase" href="#!">View Collection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- offer_section - end
    ================================================== -->


    <!-- deals_section - start
    ================================================== -->
    <section class="deals_section clearfix">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="ps_explore_item">
                        <img src="assets/images/deals/parallax_shop/img_01.jpg" alt="image_not_found">
                        <div class="item_content">
                            <h3 class="text-uppercase">Explore</h3>
                            <p>
                                The cold weather has arrived. It’s time to sit by the fire and let your imagination go dressed in wool sweaters, warm trousers and leotards.
                            </p>
                            <a class="custom_btn bg_shop_brown text-uppercase" href="#!">View Collection</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="ps_deals_item">
                        <img src="assets/images/deals/parallax_shop/img_02.jpg" alt="image_not_found">
                        <div class="item_content text-center">
                            <h3 class="text-uppercase">SALE NOW ON</h3>
                            <p>
                                The cold weather has arrived. It’s time to sit by the fire and let your imagination go dressed in wool
                            </p>
                            <ul class="countdown_timer content_inbox ul_li_center text-uppercase mb_30 clearfix" data-countdown="2021/3/24"></ul>
                            <a class="custom_btn bg_shop_brown text-uppercase" href="#!">Explore now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- deals_section - end
    ================================================== -->


    <!-- ps_big_feature - start
    ================================================== -->
    <section class="ps_big_feature sec_ptb_100 parallaxie d-flex align-items-center clearfix" data-background="assets/images/deals/parallax_shop/img_03.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="item_content text-center">
                        <h4 class="text-white text-uppercase">Sports Shoe</h4>
                        <h3 class="text-white text-uppercase">Spring collection Release</h3>
                        <a class="custom_btn bg_black text-uppercase" href="#!">View Collection</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ps_big_feature - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section sec_ptb_140 clearfix">
        <div class="container">
            <div class="ps_section_title text-center size_big mb_30">
                <span class="sub_title mb_15 text-uppercase">Up to 70% off</span>
                <h2 class="title_text mb-0">New Sale</h2>
            </div>

            <ul class="ps_tabs_menu nav ul_li_center text-uppercase clearfix" role="tablist">
                <li>
                    <a class="active" data-toggle="tab" href="#men_tab">Men</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#women_tab">Women</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#accessories_tab">Accessories</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#gadgets_tab">Gadgets</a>
                </li>
            </ul>

            <div class="tab-content mb_50">
                <div id="men_tab" class="tab-pane active">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ps_proguct_item">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#262626">New</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/parallax_shop/img_01.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center text-uppercase clearfix" data-bg-color="#141414">
                                        <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                                        <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Stylish Gadgets</a>
                                    </h3>
                                    <span class="item_price">$259</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ps_proguct_item">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#02bad0">New</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/parallax_shop/img_02.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center text-uppercase clearfix" data-bg-color="#141414">
                                        <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                                        <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Stylish Gadgets</a>
                                    </h3>
                                    <span class="item_price">$259</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ps_proguct_item">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#38cb89">New</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/parallax_shop/img_03.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center text-uppercase clearfix" data-bg-color="#141414">
                                        <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                                        <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Stylish Gadgets</a>
                                    </h3>
                                    <span class="item_price">$259</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ps_proguct_item">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#262626">New</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/parallax_shop/img_04.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center text-uppercase clearfix" data-bg-color="#141414">
                                        <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                                        <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Stylish Gadgets</a>
                                    </h3>
                                    <span class="item_price">$259</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ps_proguct_item">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#d0021b">Hot</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/parallax_shop/img_05.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center text-uppercase clearfix" data-bg-color="#141414">
                                        <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                                        <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Stylish Gadgets</a>
                                    </h3>
                                    <span class="item_price">$259</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ps_proguct_item">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#38cb89">-20% OFF</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/parallax_shop/img_06.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center text-uppercase clearfix" data-bg-color="#141414">
                                        <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                                        <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Stylish Gadgets</a>
                                    </h3>
                                    <span class="item_price">$259</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="women_tab" class="tab-pane fade">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ps_proguct_item">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#262626">New</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/parallax_shop/img_01.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center text-uppercase clearfix" data-bg-color="#141414">
                                        <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                                        <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Stylish Gadgets</a>
                                    </h3>
                                    <span class="item_price">$259</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ps_proguct_item">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#02bad0">New</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/parallax_shop/img_02.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center text-uppercase clearfix" data-bg-color="#141414">
                                        <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                                        <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Stylish Gadgets</a>
                                    </h3>
                                    <span class="item_price">$259</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ps_proguct_item">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#38cb89">New</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/parallax_shop/img_03.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center text-uppercase clearfix" data-bg-color="#141414">
                                        <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                                        <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Stylish Gadgets</a>
                                    </h3>
                                    <span class="item_price">$259</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ps_proguct_item">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#262626">New</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/parallax_shop/img_04.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center text-uppercase clearfix" data-bg-color="#141414">
                                        <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                                        <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Stylish Gadgets</a>
                                    </h3>
                                    <span class="item_price">$259</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ps_proguct_item">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#d0021b">Hot</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/parallax_shop/img_05.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center text-uppercase clearfix" data-bg-color="#141414">
                                        <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                                        <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Stylish Gadgets</a>
                                    </h3>
                                    <span class="item_price">$259</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ps_proguct_item">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#38cb89">-20% OFF</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/parallax_shop/img_06.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center text-uppercase clearfix" data-bg-color="#141414">
                                        <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                                        <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Stylish Gadgets</a>
                                    </h3>
                                    <span class="item_price">$259</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="accessories_tab" class="tab-pane fade">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ps_proguct_item">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#262626">New</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/parallax_shop/img_01.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center text-uppercase clearfix" data-bg-color="#141414">
                                        <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                                        <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Stylish Gadgets</a>
                                    </h3>
                                    <span class="item_price">$259</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ps_proguct_item">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#02bad0">New</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/parallax_shop/img_02.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center text-uppercase clearfix" data-bg-color="#141414">
                                        <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                                        <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Stylish Gadgets</a>
                                    </h3>
                                    <span class="item_price">$259</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ps_proguct_item">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#38cb89">New</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/parallax_shop/img_03.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center text-uppercase clearfix" data-bg-color="#141414">
                                        <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                                        <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Stylish Gadgets</a>
                                    </h3>
                                    <span class="item_price">$259</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ps_proguct_item">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#262626">New</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/parallax_shop/img_04.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center text-uppercase clearfix" data-bg-color="#141414">
                                        <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                                        <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Stylish Gadgets</a>
                                    </h3>
                                    <span class="item_price">$259</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ps_proguct_item">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#d0021b">Hot</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/parallax_shop/img_05.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center text-uppercase clearfix" data-bg-color="#141414">
                                        <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                                        <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Stylish Gadgets</a>
                                    </h3>
                                    <span class="item_price">$259</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ps_proguct_item">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#38cb89">-20% OFF</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/parallax_shop/img_06.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center text-uppercase clearfix" data-bg-color="#141414">
                                        <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                                        <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Stylish Gadgets</a>
                                    </h3>
                                    <span class="item_price">$259</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="gadgets_tab" class="tab-pane fade">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ps_proguct_item">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#262626">New</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/parallax_shop/img_01.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center text-uppercase clearfix" data-bg-color="#141414">
                                        <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                                        <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Stylish Gadgets</a>
                                    </h3>
                                    <span class="item_price">$259</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ps_proguct_item">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#02bad0">New</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/parallax_shop/img_02.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center text-uppercase clearfix" data-bg-color="#141414">
                                        <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                                        <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Stylish Gadgets</a>
                                    </h3>
                                    <span class="item_price">$259</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ps_proguct_item">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#38cb89">New</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/parallax_shop/img_03.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center text-uppercase clearfix" data-bg-color="#141414">
                                        <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                                        <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Stylish Gadgets</a>
                                    </h3>
                                    <span class="item_price">$259</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ps_proguct_item">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#262626">New</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/parallax_shop/img_04.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center text-uppercase clearfix" data-bg-color="#141414">
                                        <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                                        <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Stylish Gadgets</a>
                                    </h3>
                                    <span class="item_price">$259</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ps_proguct_item">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#d0021b">Hot</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/parallax_shop/img_05.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center text-uppercase clearfix" data-bg-color="#141414">
                                        <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                                        <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Stylish Gadgets</a>
                                    </h3>
                                    <span class="item_price">$259</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ps_proguct_item">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#38cb89">-20% OFF</li>
                                </ul>
                                <div class="item_image">
                                    <img src="assets/images/shop/parallax_shop/img_06.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center text-uppercase clearfix" data-bg-color="#141414">
                                        <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                                        <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Stylish Gadgets</a>
                                    </h3>
                                    <span class="item_price">$259</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="abtn_wrap text-center clearfix">
                <a class="custom_btn bg_shop_brown text-uppercase" href="#!">View More</a>
            </div>
        </div>
    </section>
    <!-- product_section - end
    ================================================== -->


    <!-- blog_section - start
    ================================================== -->
    <section class="blog_section clearfix">
        <div class="container">
            <div class="ps_section_title text-center mb_50">
                <span class="sub_title mb_15 text-uppercase">Our fashion news</span>
                <h2 class="title_text mb-0">Our Blog</h2>
            </div>
        </div>

        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="ps_blog_fullimage">
                        <img src="assets/images/blog/parallax_shop/img_01.jpg" alt="image_not_found">
                        <div class="item_content text-white">
                            <span class="post_date text-uppercase">February 25, 2020 </span>
                            <h3 class="item_title">
                                <a href="#!">Advertising Outdoors</a>
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac dolor dignissim, pulvinar tortor id, vulputate metus. Morbi rutrum est quam, nec hendrerit nulla fringilla vitae
                            </p>
                            <div class="abtn_wrap clearfix">
                                <a class="custom_btn bg_shop_brown text-uppercase" href="#!">View More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="ps_blog_fullimage">
                        <img src="assets/images/blog/parallax_shop/img_02.jpg" alt="image_not_found">
                        <div class="item_content text-white">
                            <span class="post_date text-uppercase">February 25, 2020 </span>
                            <h3 class="item_title">
                                <a href="#!">Advertising Outdoors</a>
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac dolor dignissim, pulvinar tortor id, vulputate metus. Morbi rutrum est quam, nec hendrerit nulla fringilla vitae
                            </p>
                            <div class="abtn_wrap clearfix">
                                <a class="custom_btn bg_shop_brown text-uppercase" href="#!">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog_section - end
    ================================================== -->


    <!-- barnd_section - start
    ================================================== -->
    <div class="barnd_section sec_ptb_50 clearfix">
        <div class="container">
            <div class="barnd_carousel clearfix">
                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_13.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_14.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_15.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_16.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_17.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_18.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_13.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_14.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_15.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_16.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_17.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_18.png" alt="image_not_found">
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
    @include('home.parallax.parallax_Footer')
@endsection

