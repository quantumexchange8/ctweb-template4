@extends('layout.master')


@section('title')
<title>Fashion - Current Tech</title>
@endsection

@section('body_class', 'home_fashion')

@section('navbar')
    @include('home.fashion.fashion_Navbar')
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
    <section class="slider_section fashion_slider position-relative clearfix">
        <div class="main_slider clearfix" data-slick='{"dots": false}'>
            <div class="item d-flex align-items-center clearfix" data-bg-color="#d8f6ff">
                <div class="container maxw_1430">
                    <div class="slider_content">
                        <h4 class="text-uppercase" data-animation="fadeInUp" data-delay=".4s">EST COLLECTION</h4>
                        <h3 data-animation="fadeInUp" data-delay=".6s">
                            Winter Stock Summer <span>Collection</span>
                        </h3>
                        <p data-animation="fadeInUp" data-delay=".8s">
                            Subscribe to our newsletter and be the first to receive the latest fashion news, promotions and more! Would you like to stop receiving our newsletter?
                        </p>
                        <ul class="btns_group ul_li clearfix" data-animation="fadeInUp" data-delay="1s">
                            <li>
                                <a href="#!" class="custom_btn btn_round bg_fashion_red text-uppercase">Shop Now</a>
                            </li>
                            <li>
                                <a class="play_btn_2 text-uppercase" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                                    <span><i class="fas fa-play"></i></span>
                                    <small>watch lookbook</small>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="slider_image">
                    <img data-animation="fadeInRight" data-delay=".7s" src="assets/images/slider/fashion/img_01.png" alt="image_not_found">
                    <div class="circle_shape">
                        <span data-animation="zoomIn" data-delay=".3s"></span>
                    </div>
                </div>
            </div>

            <div class="item d-flex align-items-center clearfix" data-bg-color="#d8f6ff">
                <div class="container maxw_1430">
                    <div class="slider_content">
                        <h4 class="text-uppercase" data-animation="fadeInUp" data-delay=".4s">EST COLLECTION</h4>
                        <h3 data-animation="fadeInUp" data-delay=".6s">
                            Winter Stock Summer <span>Collection</span>
                        </h3>
                        <p data-animation="fadeInUp" data-delay=".8s">
                            Subscribe to our newsletter and be the first to receive the latest fashion news, promotions and more! Would you like to stop receiving our newsletter?
                        </p>
                        <ul class="btns_group ul_li clearfix" data-animation="fadeInUp" data-delay="1s">
                            <li>
                                <a href="#!" class="custom_btn btn_round bg_fashion_red text-uppercase">Shop Now</a>
                            </li>
                            <li>
                                <a class="play_btn_2 text-uppercase" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                                    <span><i class="fas fa-play"></i></span>
                                    <small>watch lookbook</small>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="slider_image">
                    <img data-animation="fadeInRight" data-delay=".7s" src="assets/images/slider/fashion/img_01.png" alt="image_not_found">
                    <div class="circle_shape">
                        <span data-animation="zoomIn" data-delay=".3s"></span>
                    </div>
                </div>
            </div>

            <div class="item d-flex align-items-center clearfix" data-bg-color="#d8f6ff">
                <div class="container maxw_1430">
                    <div class="slider_content">
                        <h4 class="text-uppercase" data-animation="fadeInUp" data-delay=".4s">EST COLLECTION</h4>
                        <h3 data-animation="fadeInUp" data-delay=".6s">
                            Winter Stock Summer <span>Collection</span>
                        </h3>
                        <p data-animation="fadeInUp" data-delay=".8s">
                            Subscribe to our newsletter and be the first to receive the latest fashion news, promotions and more! Would you like to stop receiving our newsletter?
                        </p>
                        <ul class="btns_group ul_li clearfix" data-animation="fadeInUp" data-delay="1s">
                            <li>
                                <a href="#!" class="custom_btn btn_round bg_fashion_red text-uppercase">Shop Now</a>
                            </li>
                            <li>
                                <a class="play_btn_2 text-uppercase" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                                    <span><i class="fas fa-play"></i></span>
                                    <small>watch lookbook</small>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="slider_image">
                    <img data-animation="fadeInRight" data-delay=".7s" src="assets/images/slider/fashion/img_01.png" alt="image_not_found">
                    <div class="circle_shape">
                        <span data-animation="zoomIn" data-delay=".3s"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel_nav clearfix">
            <button type="button" class="main_left_arrow"><i class="fal fa-angle-left"></i></button>
            <button type="button" class="main_right_arrow"><i class="fal fa-angle-right"></i></button>
        </div>

        <!-- slider progress -->
        <div class="slick-progress">
            <span></span>
        </div>
    </section>
    <!-- slider_section - end
    ================================================== -->


    <!-- category_section - start
    ================================================== -->
    <section class="category_section sec_ptb_140 clearfix">
        <div class="container">
            <div class="row mt__50 justify-content-center">

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="fashion_category_circle">
                        <div class="item_offer bg_fashion_red text-white">
                            <span>50%</span>
                            <span>FLAT</span>
                        </div>
                        <div class="item_image">
                            <img src="assets/images/category/fashion/img_01.jpg" alt="image_not_found">
                            <a class="icon_btn bg_fashion_red" href="#!"><i class="fal fa-arrow-right"></i></a>
                        </div>
                        <div class="item_content text-uppercase">
                            <h3 class="item_title">Women</h3>
                            <span class="item_instock">10 ITEMS</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="fashion_category_circle">
                        <div class="item_offer bg_fashion_red text-white">
                            <span>45%</span>
                            <span>FLAT</span>
                        </div>
                        <div class="item_image">
                            <img src="assets/images/category/fashion/img_02.jpg" alt="image_not_found">
                            <a class="icon_btn bg_fashion_red" href="#!"><i class="fal fa-arrow-right"></i></a>
                        </div>
                        <div class="item_content text-uppercase">
                            <h3 class="item_title">Bags</h3>
                            <span class="item_instock">15 ITEMS</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="fashion_category_circle">
                        <div class="item_offer bg_fashion_red text-white">
                            <span>35%</span>
                            <span>FLAT</span>
                        </div>
                        <div class="item_image">
                            <img src="assets/images/category/fashion/img_03.jpg" alt="image_not_found">
                            <a class="icon_btn bg_fashion_red" href="#!"><i class="fal fa-arrow-right"></i></a>
                        </div>
                        <div class="item_content text-uppercase">
                            <h3 class="item_title">Mens</h3>
                            <span class="item_instock">8 ITEMS</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="fashion_category_circle">
                        <div class="item_offer bg_fashion_red text-white">
                            <span>20%</span>
                            <span>FLAT</span>
                        </div>
                        <div class="item_image">
                            <img src="assets/images/category/fashion/img_04.jpg" alt="image_not_found">
                            <a class="icon_btn bg_fashion_red" href="#!"><i class="fal fa-arrow-right"></i></a>
                        </div>
                        <div class="item_content text-uppercase">
                            <h3 class="item_title">Kids</h3>
                            <span class="item_instock">5 ITEMS</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- category_section - end
    ================================================== -->


    <!-- split_section - start
    ================================================== -->
    <section class="split_section clearfix" data-bg-color="#d8f6ff">
        <div class="container-fluid p-0">
            <div class="row no-gutters align-items-center justify-content-lg-between">

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="fashion_product_wrap sec_ptb_50">
                        <div class="fashion_section_title text-center">
                            <h2 class="title_text mb_15">Men's Wear Deal</h2>
                            <h4 class="sub_title text-uppercase">Aenean feugiat libero ligula</h4>
                        </div>
                        <div class="row mb_50 align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="fashion_product_item">
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_fashion_red">Sale</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/fashion/img_01.jpg" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li>
                                                <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                                    <i class="fal fa-shopping-basket"></i> Buy
                                                </a>
                                            </li>
                                            <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <span class="item_category text-uppercase">category</span>
                                        <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                                        <span class="item_price">€160.00</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="fashion_product_item">
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_fashion_red">Sale</li>
                                    </ul>
                                    <div class="item_image">
                                        <img src="assets/images/shop/fashion/img_02.jpg" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li>
                                                <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                                    <i class="fal fa-shopping-basket"></i> Buy
                                                </a>
                                            </li>
                                            <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <span class="item_category text-uppercase">category</span>
                                        <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                                        <span class="item_price">€160.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="load_more text-center clearfix">
                            <a class="custom_btn btn_round bg_fashion_red text-uppercase" href="#!">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="fashion_deals_wrap">
                        <ul class="tabs_nav nav ul_li_block text-right clearfix" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#mens_tab">Men's Wear Deals</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#womens_tab">Women Wear Deals</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#kidss_tab">Kids Wear Deals</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="mens_tab" class="tab-pane active">
                                <div class="fashion_delas_item">
                                    <img src="assets/images/shop/fashion/img_03.jpg" alt="image_not_found">
                                    <div class="item_content text-center">
                                        <h4>All Men's Wear Deal</h4>
                                        <ul class="countdown_timer text-uppercase ul_li_center clearfix" data-countdown="2021/3/24"></ul>
                                    </div>
                                </div>
                            </div>

                            <div id="womens_tab" class="tab-pane fade">
                                <div class="fashion_delas_item">
                                    <img src="assets/images/shop/fashion/img_03.jpg" alt="image_not_found">
                                    <div class="item_content text-center">
                                        <h4>All Women Wear Deal</h4>
                                        <ul class="countdown_timer text-uppercase ul_li_center clearfix" data-countdown="2021/3/24"></ul>
                                    </div>
                                </div>
                            </div>

                            <div id="kidss_tab" class="tab-pane fade">
                                <div class="fashion_delas_item">
                                    <img src="assets/images/shop/fashion/img_03.jpg" alt="image_not_found">
                                    <div class="item_content text-center">
                                        <h4>All Kids Wear Deal</h4>
                                        <ul class="countdown_timer text-uppercase ul_li_center clearfix" data-countdown="2021/3/24"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- split_section - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section sec_ptb_140 pb-0 clearfix">
        <div class="container-fluid prl_60">

            <div class="fashion_section_title text-center mb_50">
                <h2 class="title_text mb_15">Men's Wear Deal</h2>
                <h4 class="sub_title text-uppercase">Aenean feugiat libero ligula</h4>
            </div>

            <ul class="fashion_filter_btns mb_15 button-group filters-button-group ul_li_center clearfix">
                <li><button class="active" data-filter="*">ALL</button></li>
                <li><button data-filter=".men">MEN</button></li>
                <li><button data-filter=".women">WOMEN</button></li>
                <li><button data-filter=".collection">COLLECTION</button></li>
            </ul>

            <div class="element-grid column5_element_grid mb_50">
                <div class="element-item women " data-category="women">
                    <div class="fashion_product_item">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li class="bg_fashion_red">New</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/fashion/img_04.jpg" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li>
                                    <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                        <i class="fal fa-shopping-basket"></i> Buy
                                    </a>
                                </li>
                                <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <span class="item_category text-uppercase">category</span>
                            <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                            <span class="item_price">€160.00</span>
                        </div>
                    </div>
                </div>

                <div class="element-item collection " data-category="collection">
                    <div class="fashion_product_item">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li class="bg_fashion_red">New</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/fashion/img_05.jpg" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li>
                                    <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                        <i class="fal fa-shopping-basket"></i> Buy
                                    </a>
                                </li>
                                <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <span class="item_category text-uppercase">category</span>
                            <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                            <span class="item_price">€160.00</span>
                        </div>
                    </div>
                </div>

                <div class="element-item men " data-category="men">
                    <div class="fashion_product_item">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li class="bg_fashion_red">New</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/fashion/img_06.jpg" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li>
                                    <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                        <i class="fal fa-shopping-basket"></i> Buy
                                    </a>
                                </li>
                                <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <span class="item_category text-uppercase">category</span>
                            <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                            <span class="item_price">€160.00</span>
                        </div>
                    </div>
                </div>

                <div class="element-item women " data-category="women">
                    <div class="fashion_product_item">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li class="bg_fashion_red">New</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/fashion/img_07.jpg" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li>
                                    <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                        <i class="fal fa-shopping-basket"></i> Buy
                                    </a>
                                </li>
                                <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <span class="item_category text-uppercase">category</span>
                            <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                            <span class="item_price">€160.00</span>
                        </div>
                    </div>
                </div>

                <div class="element-item collection " data-category="collection">
                    <div class="fashion_product_item">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li class="bg_fashion_red">New</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/fashion/img_08.jpg" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li>
                                    <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                        <i class="fal fa-shopping-basket"></i> Buy
                                    </a>
                                </li>
                                <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <span class="item_category text-uppercase">category</span>
                            <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                            <span class="item_price">€160.00</span>
                        </div>
                    </div>
                </div>

                <div class="element-item men " data-category="men">
                    <div class="fashion_product_item">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li class="bg_fashion_red">New</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/fashion/img_09.jpg" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li>
                                    <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                        <i class="fal fa-shopping-basket"></i> Buy
                                    </a>
                                </li>
                                <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <span class="item_category text-uppercase">category</span>
                            <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                            <span class="item_price">€160.00</span>
                        </div>
                    </div>
                </div>

                <div class="element-item women " data-category="women">
                    <div class="fashion_product_item">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li class="bg_fashion_red">New</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/fashion/img_10.jpg" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li>
                                    <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                        <i class="fal fa-shopping-basket"></i> Buy
                                    </a>
                                </li>
                                <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <span class="item_category text-uppercase">category</span>
                            <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                            <span class="item_price">€160.00</span>
                        </div>
                    </div>
                </div>

                <div class="element-item collection " data-category="collection">
                    <div class="fashion_product_item">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li class="bg_fashion_red">New</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/fashion/img_11.jpg" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li>
                                    <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                        <i class="fal fa-shopping-basket"></i> Buy
                                    </a>
                                </li>
                                <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <span class="item_category text-uppercase">category</span>
                            <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                            <span class="item_price">€160.00</span>
                        </div>
                    </div>
                </div>

                <div class="element-item women " data-category="women">
                    <div class="fashion_product_item">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li class="bg_fashion_red">New</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/fashion/img_12.jpg" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li>
                                    <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                        <i class="fal fa-shopping-basket"></i> Buy
                                    </a>
                                </li>
                                <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <span class="item_category text-uppercase">category</span>
                            <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                            <span class="item_price">€160.00</span>
                        </div>
                    </div>
                </div>

                <div class="element-item men " data-category="men">
                    <div class="fashion_product_item">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li class="bg_fashion_red">New</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/fashion/img_13.jpg" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li>
                                    <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                        <i class="fal fa-shopping-basket"></i> Buy
                                    </a>
                                </li>
                                <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <span class="item_category text-uppercase">category</span>
                            <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                            <span class="item_price">€160.00</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="load_more text-center clearfix">
                <a class="custom_btn btn_round bg_fashion_red text-uppercase" href="#!">View More</a>
            </div>
        </div>
    </section>
    <!-- product_section - end
    ================================================== -->


    <!-- feature_section - start
    ================================================== -->
    <section class="feature_section fashion_feature_item sec_ptb_140 clearfix">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 order-last">
                    <div class="item_image">
                        <img src="assets/images/feature/fashion/img_01.png" alt="image_not_found">
                        <ul class="child_image ul_li_block clearfix">
                            <li>
                                <img src="assets/images/feature/fashion/img_02.png" alt="image_not_found">
                            </li>
                            <li>
                                <img src="assets/images/feature/fashion/img_02.png" alt="image_not_found">
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="item_content">
                        <div class="fashion_section_title mb_50">
                            <h4 class="sub_title text-uppercase mb_15">Aenean feugiat libero ligula,</h4>
                            <h2 class="title_text mb_30">Garfield & Bershka T-shirt</h2>
                            <p class="mb_50">
                                Subscribe to our newsletter and be the first to receive the latest fashion news, promotions and more! Would you like to stop receiving our newsletter?
                            </p>
                            <a class="custom_btn btn_round bg_fashion_red text-uppercase" href="#!">Add to Basket</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_section - end
    ================================================== -->


    <!-- advertisement_section - start
    ================================================== -->
    <section class="advertisement_section clearfix">
        <div class="container-fluid p-0">
            <div class="row no-gutters">

                <div class="col-lg-6">
                    <div class="fashion_advertisement" data-background="assets/images/offer/fashion/img_01.jpg">
                        <div class="item_content">
                            <div class="fashion_section_title">
                                <h4 class="sub_title text-uppercase mb_15">Most popular brands</h4>
                                <h2 class="title_text mb_30">Fashionable 2020 Accessories</h2>
                                <a class="custom_btn btn_round bg_fashion_red text-uppercase" href="#!">Add to Basket</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="fashion_advertisement" data-background="assets/images/offer/fashion/img_02.jpg">
                        <div class="video_btn text-center">
                            <a class="play_btn" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                                <i class="fas fa-play"></i>
                            </a>
                            <p class="text-uppercase text-white mb-0">Fashion Promo 2020</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- advertisement_section - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section sec_ptb_140 clearfix">
        <div class="container">

            <div class="fashion_section_title mb_30 text-center">
                <h2 class="title_text mb_15">Popular Products</h2>
                <h4 class="sub_title text-uppercase mb-0">Aenean feugiat libero ligula,</h4>
            </div>

            <div class="fp_popular_carousel arrow_ycenter">
                <div class="slideshow3_slider row clearfix" data-slick='{"dots": false}'>
                    <div class="item col">
                        <div class="fashion_product_item">
                            <ul class="product_label ul_li text-uppercase clearfix">
                                <li class="bg_fashion_red">New</li>
                            </ul>
                            <div class="item_image">
                                <img src="assets/images/shop/fashion/img_04.jpg" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                    <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <span class="item_category text-uppercase">category</span>
                                <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                                <span class="item_price">€160.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="fashion_product_item">
                            <ul class="product_label ul_li text-uppercase clearfix">
                                <li class="bg_fashion_red">New</li>
                            </ul>
                            <div class="item_image">
                                <img src="assets/images/shop/fashion/img_05.jpg" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                    <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <span class="item_category text-uppercase">category</span>
                                <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                                <span class="item_price">€160.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="fashion_product_item">
                            <ul class="product_label ul_li text-uppercase clearfix">
                                <li class="bg_fashion_red">New</li>
                            </ul>
                            <div class="item_image">
                                <img src="assets/images/shop/fashion/img_06.jpg" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                    <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <span class="item_category text-uppercase">category</span>
                                <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                                <span class="item_price">€160.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="fashion_product_item">
                            <ul class="product_label ul_li text-uppercase clearfix">
                                <li class="bg_fashion_red">New</li>
                            </ul>
                            <div class="item_image">
                                <img src="assets/images/shop/fashion/img_07.jpg" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                    <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <span class="item_category text-uppercase">category</span>
                                <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                                <span class="item_price">€160.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="fashion_product_item">
                            <ul class="product_label ul_li text-uppercase clearfix">
                                <li class="bg_fashion_red">New</li>
                            </ul>
                            <div class="item_image">
                                <img src="assets/images/shop/fashion/img_08.jpg" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                    <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <span class="item_category text-uppercase">category</span>
                                <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                                <span class="item_price">€160.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="fashion_product_item">
                            <ul class="product_label ul_li text-uppercase clearfix">
                                <li class="bg_fashion_red">New</li>
                            </ul>
                            <div class="item_image">
                                <img src="assets/images/shop/fashion/img_09.jpg" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                    <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <span class="item_category text-uppercase">category</span>
                                <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                                <span class="item_price">€160.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_nav">
                    <button type="button" class="ss3_left_arrow"><i class="fal fa-arrow-left"></i></button>
                    <button type="button" class="ss3_right_arrow"><i class="fal fa-arrow-right"></i></button>
                </div>
            </div>

        </div>
    </section>
    <!-- product_section - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section sec_ptb_140 clearfix" data-background="assets/images/backgrounds/bg_09.jpg">
        <div class="container">
            <div class="fashion_section_title mb_50 text-center">
                <h2 class="title_text mb_15">Instagram Product</h2>
                <h4 class="sub_title text-uppercase mb-0">Aenean feugiat libero ligula,</h4>
            </div>

            <ul class="fashion_insta_products_group ul_li clearfix">
                <li>
                    <div class="image_wrap">
                        <img src="assets/images/instagram/img_13.jpg" alt="image_not_found">
                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-bag"></i></a>
                    </div>
                </li>
                <li>
                    <div class="image_wrap">
                        <img src="assets/images/instagram/img_14.jpg" alt="image_not_found">
                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-bag"></i></a>
                    </div>
                </li>
                <li>
                    <div class="image_wrap">
                        <img src="assets/images/instagram/img_15.jpg" alt="image_not_found">
                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-bag"></i></a>
                    </div>
                </li>
                <li>
                    <div class="image_wrap">
                        <img src="assets/images/instagram/img_16.jpg" alt="image_not_found">
                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-bag"></i></a>
                    </div>
                </li>

                <li>
                    <div class="image_wrap">
                        <img src="assets/images/instagram/img_17.jpg" alt="image_not_found">
                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-bag"></i></a>
                    </div>
                </li>
                <li>
                    <div class="image_wrap">
                        <img src="assets/images/instagram/img_18.jpg" alt="image_not_found">
                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-bag"></i></a>
                    </div>
                </li>
                <li>
                    <div class="image_wrap">
                        <img src="assets/images/instagram/img_19.jpg" alt="image_not_found">
                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-bag"></i></a>
                    </div>
                </li>
                <li>
                    <div class="image_wrap">
                        <img src="assets/images/instagram/img_20.jpg" alt="image_not_found">
                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-bag"></i></a>
                    </div>
                </li>

                <li>
                    <div class="image_wrap">
                        <img src="assets/images/instagram/img_21.jpg" alt="image_not_found">
                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-bag"></i></a>
                    </div>
                </li>
                <li>
                    <div class="image_wrap">
                        <img src="assets/images/instagram/img_22.jpg" alt="image_not_found">
                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-bag"></i></a>
                    </div>
                </li>
                <li>
                    <div class="image_wrap">
                        <img src="assets/images/instagram/img_23.jpg" alt="image_not_found">
                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-bag"></i></a>
                    </div>
                </li>
                <li>
                    <div class="image_wrap">
                        <img src="assets/images/instagram/img_24.jpg" alt="image_not_found">
                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-bag"></i></a>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- product_section - end
    ================================================== -->


    <!-- barnd_section - start
    ================================================== -->
    <div class="barnd_section sec_ptb_50 clearfix">
        <div class="container">
            <div class="barnd_carousel clearfix">
                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_26.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_27.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_28.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_29.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_30.png" alt="image_not_found">
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
    @include('home.fashion.fashion_Footer')
@endsection


