@extends('layout.master')

@section('title')
<title>Watches Shop - Neoncart HTML5 Template</title>

@section('navbar')
    @include('home.watch.watch_Navbar')
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
    <section class="slider_section watch_slider position-relative arrow_ycenter clearfix">
        <div class="main_slider clearfix" data-slick='{"dots":false}'>
            <div class="item" data-background="assets/images/slider/watch/bg_01.jpg">
                <div class="container-fluid prl_100">
                    <div class="item_content">
                        <h4 class="sub_title mb_15">Exclusive Collection</h4>
                        <h3 class="item_title mb_15" data-animation="fadeInUp" data-delay=".2s">The Swiss Mark</h3>
                        <p class="mb_30" data-animation="fadeInUp" data-delay=".4s">
                            Time is Rendered Timeless in this Premium 20% off
                        </p>
                        <a class="custom_btn text-uppercase bg_watch_red" href="#!" data-animation="fadeInUp" data-delay=".6s">Shop Now</a>
                    </div>
                </div>
            </div>

            <div class="item" data-background="assets/images/slider/watch/bg_02.jpg">
                <div class="container-fluid prl_100">
                    <div class="item_content text-white">
                        <h4 class="sub_title mb_15">Exclusive Collection</h4>
                        <h3 class="item_title text-white mb_15" data-animation="fadeInUp" data-delay=".2s">The Swiss Mark</h3>
                        <p class="mb_30" data-animation="fadeInUp" data-delay=".4s">
                            Time is Rendered Timeless in this Premium 20% off
                        </p>
                        <a class="custom_btn text-uppercase bg_watch_red" href="#!" data-animation="fadeInUp" data-delay=".6s">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel_nav">
            <button type="button" class="main_left_arrow"><i class="fal fa-arrow-left"></i></button>
            <button type="button" class="main_right_arrow"><i class="fal fa-arrow-right"></i></button>
        </div>

        <ul class="child_items_list ul_li clearfix">
            <li>
                <div class="child_item" data-background="assets/images/slider/watch/img_01.png">
                    <h4 class="item_title">Gold Watch</h4>
                    <div class="item_price">$89<sub>.99</sub></div>
                    <a class="details_btn" href="#!"><i class="fal fa-arrow-right"></i></a>
                </div>
            </li>

            <li>
                <div class="child_item" data-background="assets/images/slider/watch/img_01.png">
                    <h4 class="item_title">Gold Watch</h4>
                    <div class="item_price">$89<sub>.99</sub></div>
                    <a class="details_btn" href="#!"><i class="fal fa-arrow-right"></i></a>
                </div>
            </li>
        </ul>
    </section>
    <!-- slider_section - end
    ================================================== -->


    <!-- barnd_section - start
    ================================================== -->
    <div class="barnd_section sec_ptb_50 clearfix" data-bg-color="#f8f7f6">
        <div class="container-fluid prl_100">
            <div class="barnd_carousel clearfix">
                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_01.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_48.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_49.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_50.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_51.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_52.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_53.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_01.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_48.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_49.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_50.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_51.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_52.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_53.png" alt="image_not_found">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- barnd_section - end
    ================================================== -->


    <!-- watch_category_section - start
    ================================================== -->
    <section class="watch_category_section sec_ptb_100 clearfix">
        <div class="container-fluid prl_100">
            <div class="row justify-content-lg-between">
                
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="watch_category_item" data-bg-color="#f8f7f6">
                        <img class="item_image" src="assets/images/shop/watch/img_01.png" alt="image_not_found">
                        <div class="item_content">
                            <h3 class="item_title">Women’s</h3>
                            <span class="items_available">(<strong data-text-color="#fa9601">84</strong> products)</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="watch_category_item" data-bg-color="#f8f7f6">
                        <img class="item_image" src="assets/images/shop/watch/img_02.png" alt="image_not_found">
                        <div class="item_content">
                            <h3 class="item_title">Men’s</h3>
                            <span class="items_available">(<strong data-text-color="#fa9601">84</strong> products)</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="watch_category_item" data-bg-color="#f8f7f6">
                        <img class="item_image" src="assets/images/shop/watch/img_03.png" alt="image_not_found">
                        <div class="item_content">
                            <h3 class="item_title">Fashion</h3>
                            <span class="items_available">(<strong data-text-color="#fa9601">84</strong> products)</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- watch_category_section - end
    ================================================== -->


    <!-- watch_big_deals - start
    ================================================== -->
    <div class="watch_big_deals sec_ptb_140 text-white parallaxie clearfix" data-background="assets/images/deals/watch/img_01.jpg">
        <div class="container">
            <div class="item_content">
                <span class="price_text text-uppercase mb_15">Stating at <strong data-text-color="#ff3800">$299</strong></span>
                <h3 class="item_title text-white mb_30">
                    Shop Event & save Up to <span data-text-color="#ff3800">65% OFF!</span>
                </h3>
                <ul class="countdown_timer ul_li mb_50 text-center clearfix" data-countdown="2021/3/24"></ul>
                <a class="custom_btn text-uppercase bg_watch_red" href="#!">Shop Now</a>
            </div>
        </div>
    </div>
    <!-- watch_big_deals - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section sec_ptb_140 clearfix" data-bg-color="#f8f7f6">
        <div class="container-fluid prl_100">

            <div class="watch_section_title text-center mb_30">
                <span class="sub_title mb_15">Exclusive Collection</span>
                <h2 class="title_text mb-0">Featured Collection</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="watch_product_item text-center">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li data-bg-color="#000000">New</li>
                            <li data-bg-color="#b67c5a">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/watch/img_04.png" alt="image_not_found">
                        </div>
                        <ul class="child_images ul_li_block">
                            <li>
                                <img src="assets/images/shop/watch/child_01.png" alt="image_not_found">
                            </li>
                            <li>
                                <img src="assets/images/shop/watch/child_02.png" alt="image_not_found">
                            </li>
                        </ul>
                        <ul class="product_action_btns ul_li_block text-uppercase clearfix">
                            <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                            <li><a href="#!"><i class="fal fa-heart mr-2"></i> Wishlist</a></li>
                            <li><a href="#!"><i class="fal fa-search mr-2"></i> Quick View</a></li>
                        </ul>
                        <div class="item_content">
                            <ul class="item_colors ul_li_center mb_15">
                                <li data-bg-color="#d42e24"></li>
                                <li data-bg-color="#f7c163"></li>
                            </ul>
                            <h3 class="item_title mb_15">
                                <a href="#!">Skmei Bluetooth Watch</a>
                            </h3>
                            <span class="item_price">$309</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="watch_product_item text-center">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li data-bg-color="#000000">New</li>
                            <li data-bg-color="#b67c5a">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/watch/img_05.png" alt="image_not_found">
                        </div>
                        <ul class="child_images ul_li_block">
                            <li>
                                <img src="assets/images/shop/watch/child_01.png" alt="image_not_found">
                            </li>
                            <li>
                                <img src="assets/images/shop/watch/child_02.png" alt="image_not_found">
                            </li>
                        </ul>
                        <ul class="product_action_btns ul_li_block text-uppercase clearfix">
                            <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                            <li><a href="#!"><i class="fal fa-heart mr-2"></i> Wishlist</a></li>
                            <li><a href="#!"><i class="fal fa-search mr-2"></i> Quick View</a></li>
                        </ul>
                        <div class="item_content">
                            <ul class="item_colors ul_li_center mb_15">
                                <li data-bg-color="#d42e24"></li>
                                <li data-bg-color="#f7c163"></li>
                            </ul>
                            <h3 class="item_title mb_15">
                                <a href="#!">Skmei Bluetooth Watch</a>
                            </h3>
                            <span class="item_price">$309</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="watch_product_item text-center">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li data-bg-color="#000000">New</li>
                            <li data-bg-color="#b67c5a">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/watch/img_06.png" alt="image_not_found">
                        </div>
                        <ul class="child_images ul_li_block">
                            <li>
                                <img src="assets/images/shop/watch/child_01.png" alt="image_not_found">
                            </li>
                            <li>
                                <img src="assets/images/shop/watch/child_02.png" alt="image_not_found">
                            </li>
                        </ul>
                        <ul class="product_action_btns ul_li_block text-uppercase clearfix">
                            <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                            <li><a href="#!"><i class="fal fa-heart mr-2"></i> Wishlist</a></li>
                            <li><a href="#!"><i class="fal fa-search mr-2"></i> Quick View</a></li>
                        </ul>
                        <div class="item_content">
                            <ul class="item_colors ul_li_center mb_15">
                                <li data-bg-color="#d42e24"></li>
                                <li data-bg-color="#f7c163"></li>
                            </ul>
                            <h3 class="item_title mb_15">
                                <a href="#!">Skmei Bluetooth Watch</a>
                            </h3>
                            <span class="item_price">$309</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="watch_product_item text-center">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li data-bg-color="#000000">New</li>
                            <li data-bg-color="#b67c5a">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/watch/img_07.png" alt="image_not_found">
                        </div>
                        <ul class="child_images ul_li_block">
                            <li>
                                <img src="assets/images/shop/watch/child_01.png" alt="image_not_found">
                            </li>
                            <li>
                                <img src="assets/images/shop/watch/child_02.png" alt="image_not_found">
                            </li>
                        </ul>
                        <ul class="product_action_btns ul_li_block text-uppercase clearfix">
                            <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                            <li><a href="#!"><i class="fal fa-heart mr-2"></i> Wishlist</a></li>
                            <li><a href="#!"><i class="fal fa-search mr-2"></i> Quick View</a></li>
                        </ul>
                        <div class="item_content">
                            <ul class="item_colors ul_li_center mb_15">
                                <li data-bg-color="#d42e24"></li>
                                <li data-bg-color="#f7c163"></li>
                            </ul>
                            <h3 class="item_title mb_15">
                                <a href="#!">Skmei Bluetooth Watch</a>
                            </h3>
                            <span class="item_price">$309</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="watch_product_item text-center">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li data-bg-color="#000000">New</li>
                            <li data-bg-color="#b67c5a">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/watch/img_08.png" alt="image_not_found">
                        </div>
                        <ul class="child_images ul_li_block">
                            <li>
                                <img src="assets/images/shop/watch/child_01.png" alt="image_not_found">
                            </li>
                            <li>
                                <img src="assets/images/shop/watch/child_02.png" alt="image_not_found">
                            </li>
                        </ul>
                        <ul class="product_action_btns ul_li_block text-uppercase clearfix">
                            <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                            <li><a href="#!"><i class="fal fa-heart mr-2"></i> Wishlist</a></li>
                            <li><a href="#!"><i class="fal fa-search mr-2"></i> Quick View</a></li>
                        </ul>
                        <div class="item_content">
                            <ul class="item_colors ul_li_center mb_15">
                                <li data-bg-color="#d42e24"></li>
                                <li data-bg-color="#f7c163"></li>
                            </ul>
                            <h3 class="item_title mb_15">
                                <a href="#!">Skmei Bluetooth Watch</a>
                            </h3>
                            <span class="item_price">$309</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="watch_product_item text-center">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li data-bg-color="#000000">New</li>
                            <li data-bg-color="#b67c5a">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/watch/img_09.png" alt="image_not_found">
                        </div>
                        <ul class="child_images ul_li_block">
                            <li>
                                <img src="assets/images/shop/watch/child_01.png" alt="image_not_found">
                            </li>
                            <li>
                                <img src="assets/images/shop/watch/child_02.png" alt="image_not_found">
                            </li>
                        </ul>
                        <ul class="product_action_btns ul_li_block text-uppercase clearfix">
                            <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                            <li><a href="#!"><i class="fal fa-heart mr-2"></i> Wishlist</a></li>
                            <li><a href="#!"><i class="fal fa-search mr-2"></i> Quick View</a></li>
                        </ul>
                        <div class="item_content">
                            <ul class="item_colors ul_li_center mb_15">
                                <li data-bg-color="#d42e24"></li>
                                <li data-bg-color="#f7c163"></li>
                            </ul>
                            <h3 class="item_title mb_15">
                                <a href="#!">Skmei Bluetooth Watch</a>
                            </h3>
                            <span class="item_price">$309</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="watch_offer_carousel">
                        <div class="slideshow1_slider" data-click='{"arrows": false}'>
                            <div class="item" data-bg-color="#3c3c3f">
                                <div class="item_image text-center mb_30">
                                    <img src="assets/images/offer/watch/img_01.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title text-white">Shop Event & save Up to <span data-text-color="#ff3800">65% OFF!</span></h3>
                                    <a class="custom_btn text-uppercase bg_watch_red" href="#!">Shop Now</a>
                                </div>
                            </div>

                            <div class="item" data-bg-color="#3c3c3f">
                                <div class="item_image text-center mb_30">
                                    <img src="assets/images/offer/watch/img_01.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title text-white">Shop Event & save Up to <span data-text-color="#ff3800">65% OFF!</span></h3>
                                    <a class="custom_btn text-uppercase bg_watch_red" href="#!">Shop Now</a>
                                </div>
                            </div>

                            <div class="item" data-bg-color="#3c3c3f">
                                <div class="item_image text-center mb_30">
                                    <img src="assets/images/offer/watch/img_01.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title text-white">Shop Event & save Up to <span data-text-color="#ff3800">65% OFF!</span></h3>
                                    <a class="custom_btn text-uppercase bg_watch_red" href="#!">Shop Now</a>
                                </div>
                            </div>

                            <div class="item" data-bg-color="#3c3c3f">
                                <div class="item_image text-center mb_30">
                                    <img src="assets/images/offer/watch/img_01.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title text-white">Shop Event & save Up to <span data-text-color="#ff3800">65% OFF!</span></h3>
                                    <a class="custom_btn text-uppercase bg_watch_red" href="#!">Shop Now</a>
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


    <!-- feature_section - start
    ================================================== -->
    <section class="feature_section sec_ptb_140 clearfix">
        <div class="container-fluid prl_100">
            <div class="watch_feature_listlayout">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6">
                        <div class="item_image">
                            <img src="assets/images/feature/watch/img_01.png" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="item_content">
                            <span class="item_price text-uppercase mb_15">Stating at <strong data-text-color="#ff3800">$299</strong></span>
                            <h3 class="item_title">Swiss Essence</h3>
                            <p>
                                Here go three good news. First: some things will never get old. Second: we believe that a good watch is a great opportunity to complement the look. Third: watches have come in fashion again. Doesn’t matter retro or modern, watches now are essential elements of a great look.
                            </p>
                            <a class="custom_btn text-uppercase bg_watch_red" href="#!">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="watch_feature_listlayout">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 order-last">
                        <div class="item_image">
                            <img src="assets/images/feature/watch/img_02.png" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="item_content">
                            <span class="item_price text-uppercase mb_15">Stating at <strong data-text-color="#ff3800">$299</strong></span>
                            <h3 class="item_title">Smart Watch</h3>
                            <p>
                                Here go three good news. First: some things will never get old. Second: we believe that a good watch is a great opportunity to complement the look. Third: watches have come in fashion again. Doesn’t matter retro or modern, watches now are essential elements of a great look.
                            </p>
                            <a class="custom_btn text-uppercase bg_watch_red" href="#!">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_section - end
    ================================================== -->


    <!-- watch_big_feature - start
    ================================================== -->
    <div class="watch_big_feature sec_ptb_140 parallaxie has_overlay clearfix" data-background="assets/images/offer/watch/img_02.jpg">
        <div class="overlay" data-bg-color="rgba(32, 32, 32, 0.7)"></div>
        <div class="container">
            <div class="item_content text-center">
                <a class="play_btn_1 mb_30" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><span><i class="fas fa-play"></i></span></a>
                <h2 class="item_title text-white mb_50">Shop Event & save Up to <span data-text-color="#ff3800">65% OFF!</span></h2>
                <a class="custom_btn text-uppercase bg_watch_red" href="#!">Shop now</a>
            </div>
        </div>
    </div>
    <!-- watch_big_feature - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section sec_ptb_140 clearfix">
        <div class="container-fluid prl_100">

            <div class="watch_section_title text-center mb_30">
                <span class="sub_title mb_15">Exclusive Collection</span>
                <h2 class="title_text mb-0">Hot-Sales Products</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="watch_product_item text-center" data-bg-color="#fafafa">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li data-bg-color="#000000">New</li>
                            <li data-bg-color="#b67c5a">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/watch/img_04.png" alt="image_not_found">
                        </div>
                        <ul class="child_images ul_li_block">
                            <li>
                                <img src="assets/images/shop/watch/child_01.png" alt="image_not_found">
                            </li>
                            <li>
                                <img src="assets/images/shop/watch/child_02.png" alt="image_not_found">
                            </li>
                        </ul>
                        <ul class="product_action_btns ul_li_block text-uppercase clearfix">
                            <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                            <li><a href="#!"><i class="fal fa-heart mr-2"></i> Wishlist</a></li>
                            <li><a href="#!"><i class="fal fa-search mr-2"></i> Quick View</a></li>
                        </ul>
                        <div class="item_content">
                            <ul class="item_colors ul_li_center mb_15">
                                <li data-bg-color="#d42e24"></li>
                                <li data-bg-color="#f7c163"></li>
                            </ul>
                            <h3 class="item_title mb_15">
                                <a href="#!">Skmei Bluetooth Watch</a>
                            </h3>
                            <span class="item_price">$309</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="watch_product_item text-center" data-bg-color="#fafafa">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li data-bg-color="#000000">New</li>
                            <li data-bg-color="#b67c5a">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/watch/img_05.png" alt="image_not_found">
                        </div>
                        <ul class="child_images ul_li_block">
                            <li>
                                <img src="assets/images/shop/watch/child_01.png" alt="image_not_found">
                            </li>
                            <li>
                                <img src="assets/images/shop/watch/child_02.png" alt="image_not_found">
                            </li>
                        </ul>
                        <ul class="product_action_btns ul_li_block text-uppercase clearfix">
                            <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                            <li><a href="#!"><i class="fal fa-heart mr-2"></i> Wishlist</a></li>
                            <li><a href="#!"><i class="fal fa-search mr-2"></i> Quick View</a></li>
                        </ul>
                        <div class="item_content">
                            <ul class="item_colors ul_li_center mb_15">
                                <li data-bg-color="#d42e24"></li>
                                <li data-bg-color="#f7c163"></li>
                            </ul>
                            <h3 class="item_title mb_15">
                                <a href="#!">Skmei Bluetooth Watch</a>
                            </h3>
                            <span class="item_price">$309</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="watch_product_item text-center" data-bg-color="#fafafa">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li data-bg-color="#000000">New</li>
                            <li data-bg-color="#b67c5a">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/watch/img_06.png" alt="image_not_found">
                        </div>
                        <ul class="child_images ul_li_block">
                            <li>
                                <img src="assets/images/shop/watch/child_01.png" alt="image_not_found">
                            </li>
                            <li>
                                <img src="assets/images/shop/watch/child_02.png" alt="image_not_found">
                            </li>
                        </ul>
                        <ul class="product_action_btns ul_li_block text-uppercase clearfix">
                            <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                            <li><a href="#!"><i class="fal fa-heart mr-2"></i> Wishlist</a></li>
                            <li><a href="#!"><i class="fal fa-search mr-2"></i> Quick View</a></li>
                        </ul>
                        <div class="item_content">
                            <ul class="item_colors ul_li_center mb_15">
                                <li data-bg-color="#d42e24"></li>
                                <li data-bg-color="#f7c163"></li>
                            </ul>
                            <h3 class="item_title mb_15">
                                <a href="#!">Skmei Bluetooth Watch</a>
                            </h3>
                            <span class="item_price">$309</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="watch_product_item text-center" data-bg-color="#fafafa">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li data-bg-color="#000000">New</li>
                            <li data-bg-color="#b67c5a">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/watch/img_07.png" alt="image_not_found">
                        </div>
                        <ul class="child_images ul_li_block">
                            <li>
                                <img src="assets/images/shop/watch/child_01.png" alt="image_not_found">
                            </li>
                            <li>
                                <img src="assets/images/shop/watch/child_02.png" alt="image_not_found">
                            </li>
                        </ul>
                        <ul class="product_action_btns ul_li_block text-uppercase clearfix">
                            <li><a href="#!"><i class="fal fa-shopping-basket mr-2"></i> Add To Cart</a></li>
                            <li><a href="#!"><i class="fal fa-heart mr-2"></i> Wishlist</a></li>
                            <li><a href="#!"><i class="fal fa-search mr-2"></i> Quick View</a></li>
                        </ul>
                        <div class="item_content">
                            <ul class="item_colors ul_li_center mb_15">
                                <li data-bg-color="#d42e24"></li>
                                <li data-bg-color="#f7c163"></li>
                            </ul>
                            <h3 class="item_title mb_15">
                                <a href="#!">Skmei Bluetooth Watch</a>
                            </h3>
                            <span class="item_price">$309</span>
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
    <section class="product_section sec_ptb_140 clearfix">
        <div class="container-fluid prl_100">

            <div class="watch_section_title text-center mb_30">
                <span class="sub_title mb_15">Exclusive Collection</span>
                <h2 class="title_text mb-0">Journal & Blog</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="watch_blog_item text-white">
                        <img src="assets/images/blog/watch/img_01.jpg" alt="image_not_found">
                        <div class="overlay"></div>
                        <div class="item_content">
                            <div class="post_date">26 Jun. 2019</div>
                            <h3 class="item_title text-white">
                                Types of Watch Movements?
                            </h3>
                            <p>
                                Apart from repair services, we are keeping a blog where we post useful tips
                            </p>
                            <a class="custom_btn bg_watch_red text-uppercase" href="blog_details">Shop Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="watch_blog_item text-white">
                        <img src="assets/images/blog/watch/img_02.jpg" alt="image_not_found">
                        <div class="overlay"></div>
                        <div class="item_content">
                            <div class="post_date">26 Jun. 2019</div>
                            <h3 class="item_title text-white">
                                Types of Watch Movements?
                            </h3>
                            <p>
                                Apart from repair services, we are keeping a blog where we post useful tips
                            </p>
                            <a class="custom_btn bg_watch_red text-uppercase" href="blog_details">Shop Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="watch_blog_item text-white">
                        <img src="assets/images/blog/watch/img_03.jpg" alt="image_not_found">
                        <div class="overlay"></div>
                        <div class="item_content">
                            <div class="post_date">26 Jun. 2019</div>
                            <h3 class="item_title text-white">
                                Types of Watch Movements?
                            </h3>
                            <p>
                                Apart from repair services, we are keeping a blog where we post useful tips
                            </p>
                            <a class="custom_btn bg_watch_red text-uppercase" href="blog_details">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- product_section - end
    ================================================== -->


    <!-- watch_newsletter - start
    ================================================== -->
    <section class="watch_newsletter sec_ptb_100 deco_wrap overflow-hidden clearfix" data-bg-color="#fff3ef">
        <div class="container">
            <div class="content_wrap text-center">
                <h2 class="form_title mb_15">Newsletter</h2>
                <p class="">
                    Newsletter sign up for all the latest fashion news and exclusive offers.
                </p>
                <form action="#!">
                    <div class="form_item">
                        <input type="email" name="email" placeholder="Your email here">
                        <button type="button" class="submit_btn"><i class="fas fa-paper-plane"></i></button>
                    </div>
                </form>
                <ul class="circle_social_links ul_li_center">
                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#!"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="deco_image watch_image">
            <img src="assets/images/home_watch/img_01.png" alt="image_not_found">
        </div>
        <div class="deco_image pattern_image">
            <img src="assets/images/home_watch/img_02.png" alt="image_not_found">
        </div>
    </section>
    <!-- watch_newsletter - end
    ================================================== -->


    <!-- barnd_section - start
    ================================================== -->
    <div class="barnd_section sec_ptb_50 clearfix">
        <div class="container">
            <div class="barnd_carousel clearfix">
                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_54.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_55.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_56.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_57.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_55.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_54.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_55.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_56.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_57.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_55.png" alt="image_not_found">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- barnd_section - end
    ================================================== -->


    <!-- watch_instagram - start
    ================================================== -->
    <div class="watch_instagram position-relative clearfix">
        <span class="title_text text-uppercase"><i class="fab fa-instagram mr-2"></i> Follow us on instagram</span>
        <ul class="zoom-gallery ul_li">
            <li>
                <a class="popup_image" href="assets/images/instagram/img_54.jpg">
                    <img src="assets/images/instagram/img_54.jpg" alt="image_not_found">
                </a>
            </li>
            <li>
                <a class="popup_image" href="assets/images/instagram/img_54.jpg">
                    <img src="assets/images/instagram/img_55.jpg" alt="image_not_found">
                </a>
            </li>
            <li>
                <a class="popup_image" href="assets/images/instagram/img_54.jpg">
                    <img src="assets/images/instagram/img_56.jpg" alt="image_not_found">
                </a>
            </li>
            <li>
                <a class="popup_image" href="assets/images/instagram/img_54.jpg">
                    <img src="assets/images/instagram/img_57.jpg" alt="image_not_found">
                </a>
            </li>
            <li>
                <a class="popup_image" href="assets/images/instagram/img_54.jpg">
                    <img src="assets/images/instagram/img_58.jpg" alt="image_not_found">
                </a>
            </li>
            <li>
                <a class="popup_image" href="assets/images/instagram/img_54.jpg">
                    <img src="assets/images/instagram/img_59.jpg" alt="image_not_found">
                </a>
            </li>
        </ul>
    </div>
    <!-- watch_instagram - end
    ================================================== -->


</main>
@endsection

@section('footer')
    @include('home.watch.watch_Footer')
@endsection

@endsection