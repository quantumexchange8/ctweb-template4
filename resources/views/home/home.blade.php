@extends('layout.master')
@section('title')
<title>Car Parts - Current Tech</title>
@endsection

@section('body_class', 'home_watch')

@section('navbar')
    @include('home.home_Navbar')
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
                                    <li><a href="fashion_minimal_/OtherPages_shopDetails">Shop Details</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fashion Minimal</a>
                                <ul class="dropdown-menu ul_li_block">
                                    <li><a href="/fashion_Minimal_shopPage">Shop Page</a></li>
                                    <li><a href="fashion_minimal_/OtherPages_shopDetails">Shop Details</a></li>
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
    <section class="banner_section carparts_banner parallaxie d-flex align-items-center clearfix" data-background="assets/images/banner/car_parts/bg_01.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="banner_content text-center">
                        <p>Customize, Modify, Upgrade, Repair, Replace</p>
                        <h1 class="text-white">
                            SEARCH MATCHING YOUR VEHICLE PARTS
                        </h1>
                    </div>
                </div>
            </div>
            <form action="#">
                <div class="carparts_search">
                    <ul class="ul_li_center clearfix">
                        <li>
                            <div class="option_select">
                                <select>
                                    <option data-display="Make">Select A Option</option>
                                    <option value="1">Some option</option>
                                    <option value="2">Another option</option>
                                    <option value="3" disabled>A disabled option</option>
                                    <option value="4">Potato</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="form_item">
                                <input type="text" name="model" placeholder="model">
                            </div>
                        </li>
                        <li>
                            <div class="form_item">
                                <input type="text" name="year" placeholder="year">
                            </div>
                        </li>
                        <li><button type="submit" class="submit_btn bg_carparts_red">Search</button></li>
                    </ul>
                </div>
            </form>
        </div>
    </section>
    <!-- banner_section - end
    ================================================== -->


    <!-- carparts_policy - start
    ================================================== -->
    <section class="carparts_policy d-flex align-items-center clearfix" data-bg-color="#fafafa">
        <div class="container">
            <div class="row mt__50">

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="carparts_policy_item">
                        <div class="item_icon">
                            <img src="assets/images/policy/car_parts/icon_01.png" alt="icon_not_found">
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">Free Shipping</h3>
                            <p>For orders From $50</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="carparts_policy_item">
                        <div class="item_icon">
                            <img src="assets/images/policy/car_parts/icon_02.png" alt="icon_not_found">
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">Support 24/7</h3>
                            <p>Call us anytime</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="carparts_policy_item">
                        <div class="item_icon">
                            <img src="assets/images/policy/car_parts/icon_03.png" alt="icon_not_found">
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">100% Safety</h3>
                            <p>Only secure payments</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="carparts_policy_item">
                        <div class="item_icon">
                            <img src="assets/images/policy/car_parts/icon_04.png" alt="icon_not_found">
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">Hot Offers</h3>
                            <p>Discounts up to 90%</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- carparts_policy - end
    ================================================== -->


    <!-- category_section - start
    ================================================== -->
    <section class="category_section sec_ptb_100 clearfix">
        <div class="container">

            <div class="carparts_category_carousel clearfix">
                <div class="item">
                    <div class="primary_carparts_category">
                        <div class="item_offer bg_carparts_red">
                            <span>-19</span>
                            <span>OFF</span>
                        </div>
                        <div class="item_image">
                            <img src="assets/images/category/car_parts/img_01.png" alt="image_not_found">
                            <a class="icon_btn bg_carparts_red" href="#!"><i class="fal fa-arrow-right"></i></a>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">Stoptech</h3>
                            <span class="item_instock">(898 items)</span>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="primary_carparts_category">
                        <div class="item_offer bg_carparts_red">
                            <span>-19</span>
                            <span>OFF</span>
                        </div>
                        <div class="item_image">
                            <img src="assets/images/category/car_parts/img_02.png" alt="image_not_found">
                            <a class="icon_btn bg_carparts_red" href="#!"><i class="fal fa-arrow-right"></i></a>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">Stoptech</h3>
                            <span class="item_instock">(898 items)</span>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="primary_carparts_category">
                        <div class="item_offer bg_carparts_red">
                            <span>-19</span>
                            <span>OFF</span>
                        </div>
                        <div class="item_image">
                            <img src="assets/images/category/car_parts/img_03.png" alt="image_not_found">
                            <a class="icon_btn bg_carparts_red" href="#!"><i class="fal fa-arrow-right"></i></a>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">Stoptech</h3>
                            <span class="item_instock">(898 items)</span>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="primary_carparts_category">
                        <div class="item_offer bg_carparts_red">
                            <span>-19</span>
                            <span>OFF</span>
                        </div>
                        <div class="item_image">
                            <img src="assets/images/category/car_parts/img_04.png" alt="image_not_found">
                            <a class="icon_btn bg_carparts_red" href="#!"><i class="fal fa-arrow-right"></i></a>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">Stoptech</h3>
                            <span class="item_instock">(898 items)</span>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="primary_carparts_category">
                        <div class="item_offer bg_carparts_red">
                            <span>-19</span>
                            <span>OFF</span>
                        </div>
                        <div class="item_image">
                            <img src="assets/images/category/car_parts/img_05.png" alt="image_not_found">
                            <a class="icon_btn bg_carparts_red" href="#!"><i class="fal fa-arrow-right"></i></a>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">Stoptech</h3>
                            <span class="item_instock">(898 items)</span>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="primary_carparts_category">
                        <div class="item_offer bg_carparts_red">
                            <span>-19</span>
                            <span>OFF</span>
                        </div>
                        <div class="item_image">
                            <img src="assets/images/category/car_parts/img_01.png" alt="image_not_found">
                            <a class="icon_btn bg_carparts_red" href="#!"><i class="fal fa-arrow-right"></i></a>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">Stoptech</h3>
                            <span class="item_instock">(898 items)</span>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="primary_carparts_category">
                        <div class="item_offer bg_carparts_red">
                            <span>-19</span>
                            <span>OFF</span>
                        </div>
                        <div class="item_image">
                            <img src="assets/images/category/car_parts/img_02.png" alt="image_not_found">
                            <a class="icon_btn bg_carparts_red" href="#!"><i class="fal fa-arrow-right"></i></a>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">Stoptech</h3>
                            <span class="item_instock">(898 items)</span>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="primary_carparts_category">
                        <div class="item_offer bg_carparts_red">
                            <span>-19</span>
                            <span>OFF</span>
                        </div>
                        <div class="item_image">
                            <img src="assets/images/category/car_parts/img_03.png" alt="image_not_found">
                            <a class="icon_btn bg_carparts_red" href="#!"><i class="fal fa-arrow-right"></i></a>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">Stoptech</h3>
                            <span class="item_instock">(898 items)</span>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="primary_carparts_category">
                        <div class="item_offer bg_carparts_red">
                            <span>-19</span>
                            <span>OFF</span>
                        </div>
                        <div class="item_image">
                            <img src="assets/images/category/car_parts/img_04.png" alt="image_not_found">
                            <a class="icon_btn bg_carparts_red" href="#!"><i class="fal fa-arrow-right"></i></a>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">Stoptech</h3>
                            <span class="item_instock">(898 items)</span>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="primary_carparts_category">
                        <div class="item_offer bg_carparts_red">
                            <span>-19</span>
                            <span>OFF</span>
                        </div>
                        <div class="item_image">
                            <img src="assets/images/category/car_parts/img_05.png" alt="image_not_found">
                            <a class="icon_btn bg_carparts_red" href="#!"><i class="fal fa-arrow-right"></i></a>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">Stoptech</h3>
                            <span class="item_instock">(898 items)</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- category_section - end
    ================================================== -->


    <!-- deals_section - start
    ================================================== -->
    <section class="deals_section sec_ptb_100 clearfix" data-background="assets/images/backgrounds/bg_01.jpg">
        <div class="container">
            <div class="carparts_section_title">
                <h2 class="title_text">Flash Deals</h2>
                <span class="sub_title">Customize, Modify, Upgrade</span>
            </div>

            <div class="row justify-content-lg-between">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="carparts_deals_carousel position-relative">
                        <div class="slideshow1_slider" data-slick='{"dots": false}'>
                            <div class="item">
                                <div class="carparts_deals_listlayout clearfix">
                                    <div class="deals_image">
                                        <img src="assets/images/deals/car_parts/img_01.jpg" alt="image_not_found">
                                    </div>
                                    <div class="deals_content">
                                        <span class="discount_text">GET 25% DISCOUNT</span>
                                        <h3 class="item_title">
                                            DODGE RAM 1500 BALL JOINT FRONT
                                        </h3>
                                        <ul class="countdown_timer timein_box ul_li clearfix" data-countdown="2021/3/24"></ul>
                                        <strong class="price_text">$ 236.25</strong>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut aliqua.
                                        </p>
                                        <a class="custom_btn btn_sm bg_carparts_red text-uppercase" href="#!">Shop Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="carparts_deals_listlayout clearfix">
                                    <div class="deals_image">
                                        <img src="assets/images/deals/car_parts/img_01.jpg" alt="image_not_found">
                                    </div>
                                    <div class="deals_content">
                                        <span class="discount_text">GET 25% DISCOUNT</span>
                                        <h3 class="item_title">
                                            DODGE RAM 1500 BALL JOINT FRONT
                                        </h3>
                                        <ul class="countdown_timer timein_box ul_li clearfix" data-countdown="2021/3/24"></ul>
                                        <strong class="price_text">$ 236.25</strong>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut aliqua.
                                        </p>
                                        <a class="custom_btn btn_sm bg_carparts_red text-uppercase" href="#!">Shop Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="carparts_deals_listlayout clearfix">
                                    <div class="deals_image">
                                        <img src="assets/images/deals/car_parts/img_01.jpg" alt="image_not_found">
                                    </div>
                                    <div class="deals_content">
                                        <span class="discount_text">GET 25% DISCOUNT</span>
                                        <h3 class="item_title">
                                            DODGE RAM 1500 BALL JOINT FRONT
                                        </h3>
                                        <ul class="countdown_timer timein_box ul_li clearfix" data-countdown="2021/3/24"></ul>
                                        <strong class="price_text">$ 236.25</strong>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut aliqua.
                                        </p>
                                        <a class="custom_btn btn_sm bg_carparts_red text-uppercase" href="#!">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel_nav clearfix">
                            <button type="button" class="left_arrow"><i class="fal fa-angle-left"></i></button>
                            <button type="button" class="right_arrow"><i class="fal fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="carparts_store_info text-white" data-background="assets/images/home_car_parts/img_01.jpg">
                        <h3 class="item_title">
                            DODGE RAM 1500 BALL JOINT FRONT
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                        </p>
                        <ul class="ul_li_block clearfix">
                            <li><a href="#!">Wishlist</a></li>
                            <li><a href="#!">My account</a></li>
                            <li><a href="#!">Store Locator</a></li>
                            <li><a href="#!">F.A.Q.</a></li>
                            <li><a href="#!">Wishlist</a></li>
                            <li><a href="#!">My account</a></li>
                            <li><a href="#!">Store Locator</a></li>
                            <li><a href="#!">F.A.Q.</a></li>
                        </ul>
                        <a class="custom_btn btn_sm bg_carparts_red text-uppercase" href="#!">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- deals_section - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section sec_ptb_100 clearfix">
        <div class="container">

            <div class="carparts_section_title text-center mb_15">
                <h2 class="title_text">All of Our Products</h2>
                <span class="sub_title">Customize, Modify, Upgrade, Repair, Replace</span>
            </div>

            <div class="tab_wrap position-relative">
                <ul class="carparts_block_tabs nav ul_li_block clearfix" role="tablist">
                    <li>
                        <a class="active" data-toggle="tab" href="#service_tab">Service Kit</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#lighting1_tab">Lighting</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#trending_tab">Trending</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#lighting2_tab">Lighting</a>
                    </li>
                </ul>
                <div class="tab-content mb_50 clearfix">
                    <div id="service_tab" class="tab-pane active">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_01.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">Shock Absorber</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">New</li>
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_02.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">Car Parts</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_danger">Hot</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_03.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">Car Wheel</a>
                                    </h3>
                                    <span class="price_text"><strong>$99</strong></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_04.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">Car Engine</a>
                                    </h3>
                                    <span class="price_text"><strong>$229.90</strong> <del>$428.90</del></span>
                                </div>
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">New</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_05.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">Lorem Lipsum</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_06.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">New</li>
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_07.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">New</li>
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_07.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">New</li>
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_08.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone parts</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_09.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">ear speaker</a>
                                    </h3>
                                    <span class="price_text"><strong>$49.90</strong> <del>$58.90</del></span>
                                </div>
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">Discount</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_10.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">Car Boower</a>
                                    </h3>
                                    <span class="price_text"><strong>$299.90</strong></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_11.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">Car Tyer</a>
                                    </h3>
                                    <span class="price_text"><strong>$499.90</strong> <del>$698.90</del></span>
                                </div>
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">New</li>
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div id="lighting1_tab" class="tab-pane fade">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_01.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_02.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$39.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_03.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_04.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_05.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_06.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_07.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_08.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_09.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_10.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_11.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_12.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="trending_tab" class="tab-pane fade">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_01.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_02.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_03.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_04.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_05.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_06.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_07.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_08.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_09.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_10.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_11.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_12.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="lighting2_tab" class="tab-pane fade">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_01.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_02.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_03.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_04.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_05.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_06.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_07.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_08.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_09.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_10.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_11.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="carparts_product_grid" data-bg-color="#f0eeee">
                                    <div class="item_image" data-bg-color="#f8f8f8">
                                        <img src="assets/images/shop/car_parts/img_12.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        </ul>
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
                                            <a href="#!">earphone case</a>
                                        </h3>
                                        <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    </div>
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="load_more text-center clearfix">
                    <a class="custom_btn bg_carparts_red text-uppercase" href="#!">View More</a>
                </div>
            </div>

        </div>
    </section>
    <!-- product_section - end
    ================================================== -->


    <!-- interior_carparts_section - start
    ================================================== -->
    <section class="interior_carparts_section sec_ptb_100 clearfix" data-background="assets/images/backgrounds/bg_02.jpg">
        <div class="container">
            <div class="row mt__30">

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="Interior_carparts">
                        <img src="assets/images/category/car_parts/img_06.jpg" alt="image_not_found">
                        <div class="item_content">
                            <span class="sub_title">Customize, Modify</span>
                            <h3 class="item_title text-white">Interior Parts</h3>
                            <a class="custom_btn btn_sm bg_carparts_red text-uppercase" href="#!">Shop Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="Interior_carparts">
                        <img src="assets/images/category/car_parts/img_07.jpg" alt="image_not_found">
                        <div class="item_content">
                            <span class="sub_title">Customize, Modify</span>
                            <h3 class="item_title text-white">Interior Parts</h3>
                            <a class="custom_btn btn_sm bg_carparts_red text-uppercase" href="#!">Shop Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="Interior_carparts">
                        <img src="assets/images/category/car_parts/img_08.jpg" alt="image_not_found">
                        <div class="item_content">
                            <span class="sub_title">Customize, Modify</span>
                            <h3 class="item_title text-white">Interior Parts</h3>
                            <a class="custom_btn btn_sm bg_carparts_red text-uppercase" href="#!">Shop Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- interior_carparts_section - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section sec_ptb_100 pb-0 clearfix">
        <div class="container">

            <div class="row mb_15 align-items-end justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="carparts_section_title">
                        <h2 class="title_text">All of Our Products</h2>
                        <span class="sub_title">Customize, Modify, Upgrade, Repair, Replace</span>
                    </div>
                </div>

                <div class="col-lg-6">
                    <ul class="carparts_inline_tabs nav ul_li_right" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#stoptech_tab">Stoptech</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#wheeltire_tab">Wheel & Tire</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#camera_tab">Camera</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#bodyparts_tab">Auto Body Parts</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="tab-content has_multy_carousel mb_50">
                <div id="stoptech_tab" class="tab-pane active">
                    <div class="product3_collumn_carousel row arrow_ycenter" data-slick='{"dots": false}'>
                        <div class="item col">
                            <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_13.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                            </div>
                        </div>

                        <div class="item col">
                            <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_14.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                            </div>
                        </div>

                        <div class="item col">
                            <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_15.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                            </div>
                        </div>

                        <div class="item col">
                            <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_13.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                            </div>
                        </div>

                        <div class="item col">
                            <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_14.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                            </div>
                        </div>

                        <div class="item col">
                            <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_15.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="wheeltire_tab" class="tab-pane fade">
                    <div class="product3_collumn_carousel row arrow_ycenter" data-slick='{"dots": false}'>
                        <div class="item col">
                            <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_13.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                            </div>
                        </div>

                        <div class="item col">
                            <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_14.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                            </div>
                        </div>

                        <div class="item col">
                            <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_15.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                            </div>
                        </div>

                        <div class="item col">
                            <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_13.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                            </div>
                        </div>

                        <div class="item col">
                            <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_14.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                            </div>
                        </div>

                        <div class="item col">
                            <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_15.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="camera_tab" class="tab-pane fade">
                    <div class="product3_collumn_carousel row arrow_ycenter" data-slick='{"dots": false}'>
                        <div class="item col">
                            <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_13.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                            </div>
                        </div>

                        <div class="item col">
                            <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_14.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                            </div>
                        </div>

                        <div class="item col">
                            <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_15.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                            </div>
                        </div>

                        <div class="item col">
                            <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_13.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                            </div>
                        </div>

                        <div class="item col">
                            <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_14.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                            </div>
                        </div>

                        <div class="item col">
                            <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_15.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="bodyparts_tab" class="tab-pane fade">
                    <div class="product3_collumn_carousel row arrow_ycenter" data-slick='{"dots": false}'>
                        <div class="item col">
                            <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_13.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                            </div>
                        </div>

                        <div class="item col">
                            <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_14.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                            </div>
                        </div>

                        <div class="item col">
                            <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_15.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                            </div>
                        </div>

                        <div class="item col">
                            <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_13.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                            </div>
                        </div>

                        <div class="item col">
                            <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_14.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                </div>
                            </div>
                        </div>

                        <div class="item col">
                            <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                                <div class="item_image" data-bg-color="#f8f8f8">
                                    <img src="assets/images/shop/car_parts/img_15.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
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
                                        <a href="#!">earphone case</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
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
    </section>
    <!-- product_section - end
    ================================================== -->


    <!-- interior_carparts_section - start
    ================================================== -->
    <section class="interior_carparts_section sec_ptb_100 clearfix">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="Interior_carparts">
                        <img src="assets/images/category/car_parts/img_09.jpg" alt="image_not_found">
                        <div class="item_content">
                            <span class="sub_title">Customize, Modify</span>
                            <h3 class="item_title text-white mb-0">Interior Parts</h3>
                            <ul class="parts_category_list ul_li_block text-white clearfix">
                                <li><a href="#!">Wheel Hubs</a></li>
                                <li><a href="#!">Air Suspension</a></li>
                                <li><a href="#!">Ball Joints</a></li>
                                <li><a href="#!">Brake Discs</a></li>
                            </ul>
                            <a class="icon_btn btn_sm bg_carparts_red text-uppercase" href="#!"><i class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="Interior_carparts">
                        <img src="assets/images/category/car_parts/img_10.jpg" alt="image_not_found">
                        <div class="item_content">
                            <span class="sub_title">Customize, Modify</span>
                            <h3 class="item_title text-white mb-0">Interior Parts</h3>
                            <ul class="parts_category_list ul_li_block text-white clearfix">
                                <li><a href="#!">Wheel Hubs</a></li>
                                <li><a href="#!">Air Suspension</a></li>
                                <li><a href="#!">Ball Joints</a></li>
                                <li><a href="#!">Brake Discs</a></li>
                            </ul>
                            <a class="icon_btn btn_sm bg_carparts_red text-uppercase" href="#!"><i class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- interior_carparts_section - end
    ================================================== -->


    <!-- deals_section - start
    ================================================== -->
    <section class="deals_section sec_ptb_100 clearfix" data-bg-color="#fef8ef">
        <div class="container">

            <div class="carparts_section_title text-center mb_15">
                <h2 class="title_text">Discount Deal Product</h2>
                <span class="sub_title">Customize, Modify, Upgrade, Repair, Replace</span>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="carparts_dealsgrid_carousel slideshow1_slider mb-0 row" data-slick='{"arrows": false}'>
                        <div class="item col">
                            <div class="carparts_deals_grid">
                                <div class="discount_content bg_carparts_red">
                                    <h4 class="discount_text text-white">Deal Of the Day <span>-40%</span></h4>
                                </div>
                                <div class="item_image">
                                    <img src="assets/images/deals/car_parts/img_02.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Brake Discs & Pads</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$50.00</del></span>
                                    <ul class="countdown_timer content_inbox ul_li clearfix" data-countdown="2021/3/24"></ul>
                                </div>
                            </div>
                        </div>

                        <div class="item col">
                            <div class="carparts_deals_grid">
                                <div class="discount_content bg_carparts_red">
                                    <h4 class="discount_text text-white">Deal Of the Day <span>-40%</span></h4>
                                </div>
                                <div class="item_image">
                                    <img src="assets/images/deals/car_parts/img_03.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Two Clutch Disc</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$50.00</del></span>
                                    <ul class="countdown_timer content_inbox ul_li clearfix" data-countdown="2021/3/24"></ul>
                                </div>
                            </div>
                        </div>

                        <div class="item col">
                            <div class="carparts_deals_grid">
                                <div class="discount_content bg_carparts_red">
                                    <h4 class="discount_text text-white">Deal Of the Day <span>-40%</span></h4>
                                </div>
                                <div class="item_image">
                                    <img src="assets/images/deals/car_parts/img_04.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Set of Four 19 Inch</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$50.00</del></span>
                                    <ul class="countdown_timer content_inbox ul_li clearfix" data-countdown="2021/3/24"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="carparts_dealsgrid_carousel slideshow1_slider mb-0 row" data-slick='{"arrows": false}'>
                        <div class="item col">
                            <div class="carparts_deals_grid">
                                <div class="discount_content bg_carparts_red">
                                    <h4 class="discount_text text-white">Deal Of the Day <span>-40%</span></h4>
                                </div>
                                <div class="item_image">
                                    <img src="assets/images/deals/car_parts/img_03.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Two Clutch Disc</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$50.00</del></span>
                                    <ul class="countdown_timer content_inbox ul_li clearfix" data-countdown="2021/3/24"></ul>
                                </div>
                            </div>
                        </div>

                        <div class="item col">
                            <div class="carparts_deals_grid">
                                <div class="discount_content bg_carparts_red">
                                    <h4 class="discount_text text-white">Deal Of the Day <span>-40%</span></h4>
                                </div>
                                <div class="item_image">
                                    <img src="assets/images/deals/car_parts/img_04.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Set of Four 19 Inch</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$50.00</del></span>
                                    <ul class="countdown_timer content_inbox ul_li clearfix" data-countdown="2021/3/24"></ul>
                                </div>
                            </div>
                        </div>

                        <div class="item col">
                            <div class="carparts_deals_grid">
                                <div class="discount_content bg_carparts_red">
                                    <h4 class="discount_text text-white">Deal Of the Day <span>-40%</span></h4>
                                </div>
                                <div class="item_image">
                                    <img src="assets/images/deals/car_parts/img_02.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Brake Discs & Pads</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$50.00</del></span>
                                    <ul class="countdown_timer content_inbox ul_li clearfix" data-countdown="2021/3/24"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="carparts_dealsgrid_carousel slideshow1_slider mb-0 row" data-slick='{"arrows": false}'>
                        <div class="item col">
                            <div class="carparts_deals_grid">
                                <div class="discount_content bg_carparts_red">
                                    <h4 class="discount_text text-white">Deal Of the Day <span>-40%</span></h4>
                                </div>
                                <div class="item_image">
                                    <img src="assets/images/deals/car_parts/img_04.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Set of Four 19 Inch</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$50.00</del></span>
                                    <ul class="countdown_timer content_inbox ul_li clearfix" data-countdown="2021/3/24"></ul>
                                </div>
                            </div>
                        </div>

                        <div class="item col">
                            <div class="carparts_deals_grid">
                                <div class="discount_content bg_carparts_red">
                                    <h4 class="discount_text text-white">Deal Of the Day <span>-40%</span></h4>
                                </div>
                                <div class="item_image">
                                    <img src="assets/images/deals/car_parts/img_02.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Brake Discs & Pads</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$50.00</del></span>
                                    <ul class="countdown_timer content_inbox ul_li clearfix" data-countdown="2021/3/24"></ul>
                                </div>
                            </div>
                        </div>

                        <div class="item col">
                            <div class="carparts_deals_grid">
                                <div class="discount_content bg_carparts_red">
                                    <h4 class="discount_text text-white">Deal Of the Day <span>-40%</span></h4>
                                </div>
                                <div class="item_image">
                                    <img src="assets/images/deals/car_parts/img_03.png" alt="image_not_found">
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Two Clutch Disc</a>
                                    </h3>
                                    <span class="price_text"><strong>$29.90</strong> <del>$50.00</del></span>
                                    <ul class="countdown_timer content_inbox ul_li clearfix" data-countdown="2021/3/24"></ul>
                                </div>
                            </div>
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
    <section class="product_section sec_ptb_100 clearfix">
        <div class="container">
            <div class="carparts_section_title text-center mb_15">
                <h2 class="title_text">Sale Product</h2>
                <span class="sub_title">Customize, Modify, Upgrade, Repair, Replace</span>
            </div>

            <div class="product3_collumn_carousel row arrow_ycenter mb_50" data-slick='{"dots": false}'>
                <div class="item col">
                    <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                        <div class="item_image" data-bg-color="#f8f8f8">
                            <img src="assets/images/shop/car_parts/img_16.png" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            </ul>
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
                                <a href="#!">earphone case</a>
                            </h3>
                            <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                        </div>
                    </div>
                </div>

                <div class="item col">
                    <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                        <div class="item_image" data-bg-color="#f8f8f8">
                            <img src="assets/images/shop/car_parts/img_17.png" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            </ul>
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
                                <a href="#!">earphone case</a>
                            </h3>
                            <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                        </div>
                    </div>
                </div>

                <div class="item col">
                    <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                        <div class="item_image" data-bg-color="#f8f8f8">
                            <img src="assets/images/shop/car_parts/img_18.png" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            </ul>
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
                                <a href="#!">earphone case</a>
                            </h3>
                            <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                        </div>
                    </div>
                </div>

                <div class="item col">
                    <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                        <div class="item_image" data-bg-color="#f8f8f8">
                            <img src="assets/images/shop/car_parts/img_16.png" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            </ul>
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
                                <a href="#!">earphone case</a>
                            </h3>
                            <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                        </div>
                    </div>
                </div>

                <div class="item col">
                    <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                        <div class="item_image" data-bg-color="#f8f8f8">
                            <img src="assets/images/shop/car_parts/img_17.png" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            </ul>
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
                                <a href="#!">earphone case</a>
                            </h3>
                            <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                        </div>
                    </div>
                </div>

                <div class="item col">
                    <div class="carparts_product_grid column_3" data-bg-color="#f0eeee">
                        <div class="item_image" data-bg-color="#f8f8f8">
                            <img src="assets/images/shop/car_parts/img_18.png" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            </ul>
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
                                <a href="#!">earphone case</a>
                            </h3>
                            <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="load_more text-center clearfix">
                <a class="custom_btn bg_carparts_red text-uppercase" href="#!">View More</a>
            </div>
        </div>
    </section>
    <!-- product_section - end
    ================================================== -->


    <!-- new_carparts_section - start
    ================================================== -->
    <section class="new_carparts_section sec_ptb_100 parallaxie black_overlay clearfix" data-background="assets/images/backgrounds/bg_03.jpg">
        <div class="container">
            <div class="carparts_section_title mb_15">
                <h2 class="title_text text-white">Sale Product</h2>
                <span class="sub_title">Customize, Modify, Upgrade, Repair, Replace</span>
            </div>

            <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
                    <ul class="new_carparts_images ul_li clearfix">
                        <li>
                            <img src="assets/images/shop/car_parts/img_19.jpg" alt="image_not_found">
                        </li>
                        <li>
                            <img src="assets/images/shop/car_parts/img_20.jpg" alt="image_not_found">
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="new_carparts_content text-white">
                        <h2 class="item_title text-white">
                            Find Parts That Fit Your Vehicle
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut aliqua.
                        </p>
                        <a class="custom_btn bg_carparts_red text-uppercase" href="#!">View More</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- new_carparts_section - end
    ================================================== -->


    <!-- blog_section - start
    ================================================== -->
    <section class="blog_section sec_ptb_100 pb-0 clearfix">
        <div class="container">

            <div class="carparts_blog_listlayout">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="item_image">
                            <img src="assets/images/blog/car_parts/img_01.jpg" alt="image_not_found">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                        <div class="item_content">
                            <span class="post_date"><strong>JUNE 12, 2020</strong> -  AUTO PARTS, BRAKES  BY APAR</span>
                            <h3 class="item_title">Popular Trending</h3>
                            <p>
                                While they were the darling of the “yuppie” class when new, the E30 and E36 BMW 3-Series from the 1980’s and 1990’s have now settled somewhere between. Oddly enough, it’s the 3-hole box that’s stronger, so that’s what we carry. If your car is originally equipped with a 4-mount-hole gear box, this 3-hole variant will still bolt in exactly the same as OEM.
                            </p>
                            <a href="#!" class="custom_btn bg_carparts_red text-uppercase">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carparts_blog_listlayout">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 order-last">
                        <div class="item_image">
                            <img src="assets/images/blog/car_parts/img_02.jpg" alt="image_not_found">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                        <div class="item_content">
                            <span class="post_date"><strong>JUNE 12, 2020</strong> -  AUTO PARTS, BRAKES  BY APAR</span>
                            <h3 class="item_title">Popular Trending</h3>
                            <p>
                                While they were the darling of the “yuppie” class when new, the E30 and E36 BMW 3-Series from the 1980’s and 1990’s have now settled somewhere between. Oddly enough, it’s the 3-hole box that’s stronger, so that’s what we carry. If your car is originally equipped with a 4-mount-hole gear box, this 3-hole variant will still bolt in exactly the same as OEM.
                            </p>
                            <a href="#!" class="custom_btn bg_carparts_red text-uppercase">Read More</a>
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
    <div class="barnd_section sec_ptb_100 clearfix">
        <div class="container">
            <div class="barnd_carousel clearfix">
                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_01.png" alt="image_not_found">
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

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_01.png" alt="image_not_found">
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


    <!-- carparts_newsletter - start
    ================================================== -->
    <section class="carparts_newsletter sec_ptb_100 clearfix" data-bg-color="#ebebeb">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between justify-content-md-between justify-content-sm-center">
                <div class="col-lg-5 col-md-6 col-sm-8 col-xs-12">
                    <h2 class="newsletter_title">
                        <i class="fal fa-paper-plane"></i>
                        Join Our Newsletter Now
                    </h2>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                    <div class="form_item">
                        <input type="email" name="email" placeholder="Enter Your Email">
                        <button type="submit" class="custom_btn bg_carparts_red">SUBCRIBE</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- carparts_newsletter - end
    ================================================== -->


</main>
    
@endsection

@section('footer')
    @include('home.home_Footer')
@endsection

