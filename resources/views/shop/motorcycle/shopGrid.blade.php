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


    <!-- breadcrumb_section - start
    ================================================== -->
    <section class="breadcrumb_section motorcycle_breadcrumb has_overlay text-white text-center d-flex align-items-end clearfix" data-background="assets/images/breadcrumb/bg_12.jpg">
        <div class="overlay" data-bg-color="#191919"></div>
        <div class="container">
            <h1 class="motorcycle_page_title mb_15 text-white">Shop Grid</h1>
            <ul class="motorcycle_breadcrumb_nav ul_li_center clearfix">
                <li><a href="#!">Home</a></li>
                <li>Shop</li>
                <li>Motorcycle</li>
                <li>Shop Grid</li>
            </ul>
        </div>
    </section>
    <!-- breadcrumb_section - end
    ================================================== -->


    <!-- deals_section - start
    ================================================== -->
    <section class="deals_section sec_ptb_50 pb-0 clearfix">
        <div class="container maxw_1430">
            <div class="motorcycle_deals_carousel2 position-relative text-white">
                <div class="slideshow1_slider clearfix" data-slick='{"dots": false}'>
                    <div class="item has_overlay" data-background="assets/images/backgrounds/bg_30.jpg">
                        <div class="overlay" data-bg-color="rgba(20, 20, 20, 0.9)"></div>
                        <div class="container maxw_1430">
                            <div class="row align-items-center justify-content-lg-between">
                                <div class="col-lg-5">
                                    <div class="item_image text-center">
                                        <img src="assets/images/deals/motorcycle/img_01.png" alt="image_not_found">
                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="item_content">
                                        <h3 class="item_title text-white">
                                            ACCELERATING YOUR RIDING STYLE
                                        </h3>
                                        <p>
                                            Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus 
                                            varius laoreet srtrum aenean imperdiet. Etiam ultricies nisi vel augue.
                                        </p>
                                        <ul class="countdown_timer ul_li text-center mb_30 clearfix" data-countdown="2021/3/24"></ul>
                                        <a class="custom_btn bg_carparts_red text-uppercase" href="#!">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item has_overlay" data-background="assets/images/backgrounds/bg_30.jpg">
                        <div class="overlay" data-bg-color="rgba(20, 20, 20, 0.9)"></div>
                        <div class="container maxw_1430">
                            <div class="row align-items-center justify-content-lg-between">
                                <div class="col-lg-5">
                                    <div class="item_image text-center">
                                        <img src="assets/images/deals/motorcycle/img_02.png" alt="image_not_found">
                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="item_content">
                                        <h3 class="item_title text-white">
                                            ACCELERATING YOUR RIDING STYLE
                                        </h3>
                                        <p>
                                            Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus 
                                            varius laoreet srtrum aenean imperdiet. Etiam ultricies nisi vel augue.
                                        </p>
                                        <ul class="countdown_timer ul_li text-center mb_30 clearfix" data-countdown="2021/3/24"></ul>
                                        <a class="custom_btn bg_carparts_red text-uppercase" href="#!">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item has_overlay" data-background="assets/images/backgrounds/bg_30.jpg">
                        <div class="overlay" data-bg-color="rgba(20, 20, 20, 0.9)"></div>
                        <div class="container maxw_1430">
                            <div class="row align-items-center justify-content-lg-between">
                                <div class="col-lg-5">
                                    <div class="item_image text-center">
                                        <img src="assets/images/deals/motorcycle/img_01.png" alt="image_not_found">
                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="item_content">
                                        <h3 class="item_title text-white">
                                            ACCELERATING YOUR RIDING STYLE
                                        </h3>
                                        <p>
                                            Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus 
                                            varius laoreet srtrum aenean imperdiet. Etiam ultricies nisi vel augue.
                                        </p>
                                        <ul class="countdown_timer ul_li text-center mb_30 clearfix" data-countdown="2021/3/24"></ul>
                                        <a class="custom_btn bg_carparts_red text-uppercase" href="#!">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item has_overlay" data-background="assets/images/backgrounds/bg_30.jpg">
                        <div class="overlay" data-bg-color="rgba(20, 20, 20, 0.9)"></div>
                        <div class="container maxw_1430">
                            <div class="row align-items-center justify-content-lg-between">
                                <div class="col-lg-5">
                                    <div class="item_image text-center">
                                        <img src="assets/images/deals/motorcycle/img_02.png" alt="image_not_found">
                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="item_content">
                                        <h3 class="item_title text-white">
                                            ACCELERATING YOUR RIDING STYLE
                                        </h3>
                                        <p>
                                            Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus 
                                            varius laoreet srtrum aenean imperdiet. Etiam ultricies nisi vel augue.
                                        </p>
                                        <ul class="countdown_timer ul_li text-center mb_30 clearfix" data-countdown="2021/3/24"></ul>
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
                        <span class="icon"><i class="fal fa-arrow-left"></i></span>
                    </button>
                    <button type="button" class="right_arrow">
                        <img src="assets/images/deals/motorcycle/img_02.png" alt="image_not_found">
                        <span class="icon"><i class="fal fa-arrow-right"></i></span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- deals_section - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section sec_ptb_50 clearfix">
        <div class="container maxw_1430">
            <div class="row justify-content-lg-between">
                <div class="col-lg-9 order-last">
                    <div class="carparts_filetr_bar clearfix">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col-lg-6 col-md-6">
                                <ul class="carparts_layout_btns nav ul_li" role="tablist">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#grid_layout"><i class="fas fa-th"></i></a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#list_layout"><i class="fas fa-list"></i></a>
                                    </li>
                                </ul>
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

                    <div class="tab-content">
                        <div id="grid_layout" class="tab-pane active">
                            <div class="row mb_50 justify-content-center">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="motorcycle_product_grid">
                                        <ul class="product_label ul_li text-uppercase clearfix">
                                            <li class="bg_carparts_red">New</li>
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
                                            <li class="bg_carparts_red">New</li>
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
                                            <li class="bg_carparts_red">New</li>
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
                                            <li class="bg_carparts_red">New</li>
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
                                            <li class="bg_carparts_red">New</li>
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
                                            <li class="bg_carparts_red">New</li>
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
                                            <li class="bg_carparts_red">New</li>
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
                                            <li class="bg_carparts_red">New</li>
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

                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="motorcycle_product_grid">
                                        <ul class="product_label ul_li text-uppercase clearfix">
                                            <li class="bg_carparts_red">New</li>
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

                            <ul class="carparts_pagination_nav ul_li_center clearfix">
                                <li class="active"><a href="#!">1</a></li>
                                <li><a href="#!">2</a></li>
                                <li><a href="#!">3</a></li>
                                <li><a href="#!">...</a></li>
                                <li><a href="#!">4</a></li>
                                <li><a href="#!">5</a></li>
                                <li><a href="#!">7</a></li>
                            </ul>
                        </div>

                        <div id="list_layout" class="tab-pane fade">
                            <div class="motorcycle_product_list">
                                <div class="item_image" data-bg-color="#f7f7f7">
                                    <img src="assets/images/shop/motorcycle/img_01.png" alt="image_not_found">
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">New</li>
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                    <button class="wishlist_btn" type="button"><i class="fas fa-heart"></i></button>
                                </div>
                                <div class="item_content">
                                    <span class="item_price text-white mb_15" data-bg-color="#202020">€250.00</span>
                                    <h3 class="item_title"><a href="#!">BRAKES</a></h3>
                                    <span class="item_type text-uppercase mb_15" data-text-color="#ed1d24">helmets - quality</span>
                                    <ul class="rating_star ul_li mb_15 clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <p class="mb_30">
                                        Aliquam lorem ante, dapibus in,t viverra quis, feugiat Phasellus viverra nulla ut metus varius laoreet srtrum aenean imperdiet. Etiam ultricies nisi vel augue.Aliquam lorem ante, dapibus in,t viverra quis, feugiat Phasellus viverra nulla ut metus 
                                    </p>
                                    <ul class="product_action_btns ul_li text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="motorcycle_product_list">
                                <div class="item_image" data-bg-color="#f7f7f7">
                                    <img src="assets/images/shop/motorcycle/img_01.png" alt="image_not_found">
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">New</li>
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                    <button class="wishlist_btn" type="button"><i class="fas fa-heart"></i></button>
                                </div>
                                <div class="item_content">
                                    <span class="item_price text-white mb_15" data-bg-color="#202020">€250.00</span>
                                    <h3 class="item_title"><a href="#!">BRAKES</a></h3>
                                    <span class="item_type text-uppercase mb_15" data-text-color="#ed1d24">helmets - quality</span>
                                    <ul class="rating_star ul_li mb_15 clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <p class="mb_30">
                                        Aliquam lorem ante, dapibus in,t viverra quis, feugiat Phasellus viverra nulla ut metus varius laoreet srtrum aenean imperdiet. Etiam ultricies nisi vel augue.Aliquam lorem ante, dapibus in,t viverra quis, feugiat Phasellus viverra nulla ut metus 
                                    </p>
                                    <ul class="product_action_btns ul_li text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="motorcycle_product_list">
                                <div class="item_image" data-bg-color="#f7f7f7">
                                    <img src="assets/images/shop/motorcycle/img_01.png" alt="image_not_found">
                                    <ul class="product_label ul_li text-uppercase clearfix">
                                        <li class="bg_carparts_red">New</li>
                                        <li class="bg_carparts_red">Sale</li>
                                    </ul>
                                    <button class="wishlist_btn" type="button"><i class="fas fa-heart"></i></button>
                                </div>
                                <div class="item_content">
                                    <span class="item_price text-white mb_15" data-bg-color="#202020">€250.00</span>
                                    <h3 class="item_title"><a href="#!">BRAKES</a></h3>
                                    <span class="item_type text-uppercase mb_15" data-text-color="#ed1d24">helmets - quality</span>
                                    <ul class="rating_star ul_li mb_15 clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <p class="mb_30">
                                        Aliquam lorem ante, dapibus in,t viverra quis, feugiat Phasellus viverra nulla ut metus varius laoreet srtrum aenean imperdiet. Etiam ultricies nisi vel augue.Aliquam lorem ante, dapibus in,t viverra quis, feugiat Phasellus viverra nulla ut metus 
                                    </p>
                                    <ul class="product_action_btns ul_li text-uppercase text-center clearfix">
                                        <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                        <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <ul class="carparts_pagination_nav ul_li_center mt_50 clearfix">
                                <li class="active"><a href="#!">1</a></li>
                                <li><a href="#!">2</a></li>
                                <li><a href="#!">3</a></li>
                                <li><a href="#!">...</a></li>
                                <li><a href="#!">4</a></li>
                                <li><a href="#!">5</a></li>
                                <li><a href="#!">7</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <aside class="motorcycle_sidebar sidebar_section" data-bg-color="#f9f9f9">
                        <div class="sb_widget sb_category">
                            <h3 class="sb_widget_title">Categories</h3>
                            <ul class="ul_li_block clearfix">
                                <li><a href="#!">Accessories <span>(68)</span></a></li>
                                <li><a href="#!">Clothing <span>(36)</span></a></li>
                                <li><a href="#!">Things <span>(29)</span></a></li>
                                <li><a href="#!">Polygraphy <span>(20)</span></a></li>
                                <li><a href="#!">Other <span>(7)</span></a></li>
                            </ul>
                        </div>

                        <div class="sb_widget sb_pricing_range">
                            <h3 class="sb_widget_title">Filter by Price:</h3>
                            <form action="#">
                                <div class="price-range-area clearfix">
                                    <div id="slider-range" class="slider-range"></div>
                                    <div class="price-text d-flex mb_15 align-items-center">
                                        <span>Price:</span>
                                        <input type="text" id="amount" readonly>
                                    </div>
                                    <button type="button" class="price_filter_btn bg_carparts_red text-uppercase">Filter</button>
                                </div>
                            </form>
                        </div>

                        <div class="sb_widget sb_recent_post">
                            <h3 class="sb_widget_title">Popular Items</h3>
                            <div class="carparts_small_blog">
                                <a class="item_image" href="/blogs_blogDetails">
                                    <img src="assets/images/recent_post/img_06.png" alt="image_not_found">
                                </a>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title text-uppercase">
                                        <a href="/blogs_blogDetails">
                                            earphone case
                                        </a>
                                    </h3>
                                    <div class="item_price"><strong data-text-color="#39b54a">$29.90</strong> <del>$48.90</del></div>
                                </div>
                            </div>

                            <div class="carparts_small_blog">
                                <a class="item_image" href="/blogs_blogDetails">
                                    <img src="assets/images/recent_post/img_07.png" alt="image_not_found">
                                </a>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title text-uppercase">
                                        <a href="/blogs_blogDetails">
                                            earphone case
                                        </a>
                                    </h3>
                                    <div class="item_price"><strong data-text-color="#39b54a">$29.90</strong> <del>$48.90</del></div>
                                </div>
                            </div>

                            <div class="carparts_small_blog">
                                <a class="item_image" href="/blogs_blogDetails">
                                    <img src="assets/images/recent_post/img_08.jpg" alt="image_not_found">
                                </a>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title text-uppercase">
                                        <a href="/blogs_blogDetails">
                                            earphone case
                                        </a>
                                    </h3>
                                    <div class="item_price"><strong data-text-color="#39b54a">$29.90</strong> <del>$48.90</del></div>
                                </div>
                            </div>
                        </div>

                        <div class="sb_widget sb_tags">
                            <h3 class="sb_widget_title">Popular Tags</h3>
                            <ul class="ul_li clearfix">
                                <li><a href="#!">Mock-Ups</a></li>
                                <li><a href="#!">UI</a></li>
                                <li><a href="#!">Websites</a></li>
                                <li><a href="#!">Brand</a></li>
                                <li><a href="#!">PSD Templates</a></li>
                                <li><a href="#!">WordPress</a></li>
                                <li><a href="#!">UI Kit</a></li>
                                <li><a href="#!">Graphic Design</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- product_section - end
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
