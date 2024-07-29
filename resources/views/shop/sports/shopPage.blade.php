@extends('layout.master')

@section('title')
<title>Parallax Shop - Current Tech</title>
@endsection

@section('body_class', 'home_sports')

@section('navbar')
    @include('home.sports.sports_Navbar')
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


    <!-- breadcrumb_section - start
    ================================================== -->
    <section class="breadcrumb_section sports_breadcrumb d-flex align-items-end clearfix" data-background="assets/images/breadcrumb/bg_14.jpg">
        <div class="container">
            <h1 class="sports_page_title mb-0 text-uppercase" data-text-color="#363636">Shop Page</h1>
        </div>
    </section>
    <div class="sports_breadcrumb_nav_wrap">
        <div class="container">
            <ul class="sports_breadcrumb_nav ul_li clearfix">
                <li><a href="/home"><i class="fas fa-home"></i></a></li>
                <li>Shop</li>
                <li>Sports</li>
                <li>Shop Page</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb_section - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section sec_ptb_100 clearfix">
        <div class="container">
            <div class="carparts_filetr_bar clearfix">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 col-md-6">
                        <p class="result_text mb-0">Showing 1 to 10 of 243 products</p>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <form action="#">
                            <div class="option_select d-flex align-items-center mb-0">
                                <span class="option_title text-uppercase">Sort by:</span>
                                <select>
                                    <option data-display="Select Your Option">Nothing</option>
                                    <option value="1" selected> Popularity</option>
                                    <option value="2">Another option</option>
                                    <option value="3" disabled>A disabled option</option>
                                    <option value="4">Potato</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="sports_product_item">
                        <div class="item_image" data-bg-color="#f5f5f5">
                            <img src="assets/images/shop/sports/img_01.png" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                <li><a href="#!"><i class="fas fa-shopping-cart"></i></a></li>
                            </ul>
                            <ul class="product_label ul_li text-uppercase clearfix">
                                <li class="bg_sports_red">50% Off</li>
                                <li class="bg_sports_red">Sale</li>
                            </ul>
                        </div>
                        <div class="item_content text-uppercase text-white">
                            <h3 class="item_title bg_black text-white mb-0">PHANTOM VISION ACADEMY</h3>
                            <span class="item_price bg_sports_red"><strong>$195</strong> <del>$390</del></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="sports_product_item">
                        <div class="item_image" data-bg-color="#f5f5f5">
                            <img src="assets/images/shop/sports/img_02.png" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                <li><a href="#!"><i class="fas fa-shopping-cart"></i></a></li>
                            </ul>
                            <ul class="product_label ul_li text-uppercase clearfix">
                                <li class="bg_sports_red">50% Off</li>
                                <li class="bg_sports_red">Sale</li>
                            </ul>
                        </div>
                        <div class="item_content text-uppercase text-white">
                            <h3 class="item_title bg_black text-white mb-0">HOODIE & MORE</h3>
                            <span class="item_price bg_sports_red"><strong>$195</strong> <del>$390</del></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="sports_product_item">
                        <div class="item_image" data-bg-color="#f5f5f5">
                            <img src="assets/images/shop/sports/img_03.png" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                <li><a href="#!"><i class="fas fa-shopping-cart"></i></a></li>
                            </ul>
                            <ul class="product_label ul_li text-uppercase clearfix">
                                <li class="bg_sports_red">50% Off</li>
                                <li class="bg_sports_red">Sale</li>
                            </ul>
                        </div>
                        <div class="item_content text-uppercase text-white">
                            <h3 class="item_title bg_black text-white mb-0">Nike Free RN Flyknit</h3>
                            <span class="item_price bg_sports_red"><strong>$195</strong> <del>$390</del></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="sports_product_item">
                        <div class="item_image" data-bg-color="#f5f5f5">
                            <img src="assets/images/shop/sports/img_04.png" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                <li><a href="#!"><i class="fas fa-shopping-cart"></i></a></li>
                            </ul>
                            <ul class="product_label ul_li text-uppercase clearfix">
                                <li class="bg_sports_red">50% Off</li>
                                <li class="bg_sports_red">Sale</li>
                            </ul>
                        </div>
                        <div class="item_content text-uppercase text-white">
                            <h3 class="item_title bg_black text-white mb-0">Water Proof Watch</h3>
                            <span class="item_price bg_sports_red"><strong>$195</strong> <del>$390</del></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="sports_product_item">
                        <div class="item_image" data-bg-color="#f5f5f5">
                            <img src="assets/images/shop/sports/img_05.png" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                <li><a href="#!"><i class="fas fa-shopping-cart"></i></a></li>
                            </ul>
                            <ul class="product_label ul_li text-uppercase clearfix">
                                <li class="bg_sports_red">50% Off</li>
                                <li class="bg_sports_red">Sale</li>
                            </ul>
                        </div>
                        <div class="item_content text-uppercase text-white">
                            <h3 class="item_title bg_black text-white mb-0">PHANTOM VISION ACADEMY</h3>
                            <span class="item_price bg_sports_red"><strong>$195</strong> <del>$390</del></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="sports_product_item">
                        <div class="item_image" data-bg-color="#f5f5f5">
                            <img src="assets/images/shop/sports/img_06.png" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                <li><a href="#!"><i class="fas fa-shopping-cart"></i></a></li>
                            </ul>
                            <ul class="product_label ul_li text-uppercase clearfix">
                                <li class="bg_sports_red">50% Off</li>
                                <li class="bg_sports_red">Sale</li>
                            </ul>
                        </div>
                        <div class="item_content text-uppercase text-white">
                            <h3 class="item_title bg_black text-white mb-0">PHANTOM VISION ACADEMY</h3>
                            <span class="item_price bg_sports_red"><strong>$195</strong> <del>$390</del></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_section - end
    ================================================== -->


    <!-- newsletter area - start
    ================================================== -->
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-lg-8">
                <div class="sports_newsletter d-flex align-items-center" data-background="assets/images/backgrounds/bg_33.jpg">
                    <div class="content_wrap text-center text-white">
                        <span class="sub_title text-uppercase" data-text-color="#ff3f3f">Join Our</span>
                        <h2 class="title_text text-uppercase text-white mb_15">Newsletters Now!</h2>
                        <p class="mb_30">
                            Hugo & Marie is an independent artist management firm and Creative agency based in New York City. Founded in 2008
                        </p>
                        <form action="#!">
                            <div class="form_item mb-0">
                                <input type="email" name="email" placeholder="Enter email">
                                <button type="submit" class="submit_btn bg_sports_red text-uppercase">SUBCRIBE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sports_feature_video" data-background="assets/images/backgrounds/bg_34.jpg">
                    <a class="play_btn_1" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><span><i class="fas fa-play"></i></span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- newsletter area - end
    ================================================== -->


    <!-- brand_section - start
    ================================================== -->
    <div class="brand_section sec_ptb_100 clearfix">
        <div class="container-fluid prl_100">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row justify-content-center">
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_31.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_32.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_33.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_34.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_35.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_36.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_32.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_34.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_31.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_36.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_35.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_33.png" alt="image_not_found">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand_section - end
    ================================================== -->


</main>
@endsection

@section('footer')
    @include('home.sports.sports_Footer')
@endsection

