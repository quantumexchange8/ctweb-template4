@extends('layout.master')

@section('title')
<title>Classic E-commerce Shop - Current Tech</title>
@endsection

@section('body_class', 'home_classic_ecommerce')

@section('navbar')
    @include('home.classicEcommerce.classic_Navbar')
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
    <section class="slider_section classic_ecommerce_slider position-relative clearfix">
        <div class="main_slider clearfix" data-slick='{"arrows": false}'>
            <div class="item d-flex align-items-center clearfix" data-background="assets/images/slider/classic_ecommerce/bg_01.jpg">
                <div class="container">
                    <div class="slider_content">
                        <h3 data-animation="fadeInUp" data-delay=".6s">Sweet Home Collection.</h3>
                        <p data-animation="fadeInUp" data-delay=".8s">
                            Discover new ways to dress this spring with a selection of the best designer jackets.
                        </p>
                        <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                            <a href="#!" class="custom_btn bg_white text-uppercase">Collection</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item d-flex align-items-center clearfix" data-background="assets/images/slider/classic_ecommerce/bg_01.jpg">
                <div class="container">
                    <div class="slider_content">
                        <h3 data-animation="fadeInUp" data-delay=".6s">Sweet Home Collection.</h3>
                        <p data-animation="fadeInUp" data-delay=".8s">
                            Discover new ways to dress this spring with a selection of the best designer jackets.
                        </p>
                        <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                            <a href="#!" class="custom_btn bg_white text-uppercase">Collection</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item d-flex align-items-center clearfix" data-background="assets/images/slider/classic_ecommerce/bg_01.jpg">
                <div class="container">
                    <div class="slider_content">
                        <h3 data-animation="fadeInUp" data-delay=".6s">Sweet Home Collection.</h3>
                        <p data-animation="fadeInUp" data-delay=".8s">
                            Discover new ways to dress this spring with a selection of the best designer jackets.
                        </p>
                        <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                            <a href="#!" class="custom_btn bg_white text-uppercase">Collection</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item d-flex align-items-center clearfix" data-background="assets/images/slider/classic_ecommerce/bg_01.jpg">
                <div class="container">
                    <div class="slider_content">
                        <h3 data-animation="fadeInUp" data-delay=".6s">Sweet Home Collection.</h3>
                        <p data-animation="fadeInUp" data-delay=".8s">
                            Discover new ways to dress this spring with a selection of the best designer jackets.
                        </p>
                        <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                            <a href="#!" class="custom_btn bg_white text-uppercase">Collection</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- slider progress -->
        <div class="slick-progress">
            <span></span>
        </div>
    </section>
    <!-- slider_section - end
    ================================================== -->


    <!-- policy_section - start
    ================================================== -->
    <section class="classic_ecommerce_policy d-flex align-items-center clearfix" data-bg-color="#f8f8f8">
        <div class="container">
            <div class="row mt__50">

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="ecommerce_policy_item">
                        <div class="item_icon">
                            <img src="assets/images/policy/classic_ecommerce/icon_01.png" alt="icon_not_found">
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">Worldwide Shipping</h3>
                            <p>Get free shipping over $65.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="ecommerce_policy_item">
                        <div class="item_icon">
                            <img src="assets/images/policy/classic_ecommerce/icon_02.png" alt="icon_not_found">
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">Free Returns</h3>
                            <p>30-days free return policy.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="ecommerce_policy_item">
                        <div class="item_icon">
                            <img src="assets/images/policy/classic_ecommerce/icon_03.png" alt="icon_not_found">
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">Secured payments</h3>
                            <p>Accept all major credit cards.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- policy_section - end
    ================================================== -->


    <!-- category_section - start
    ================================================== -->
    <section class="category_section sec_ptb_100 pb-0 clearfix">
        <div class="container">
            <div class="ecommerce_category_masonry grid">
                <div class="grid-sizer"></div>
                <div class="grid-item w_66">
                    <div class="ce_offer_carousel position-relative clearfix">
                        <div class="slideshow1_slider" data-slick='{"dots": false}'>
                            <div class="item">
                                <div class="ce_offer_fullimage2 offer_fullimage text-white">
                                    <img src="assets/images/category/classic_ecommerce/img_01.jpg" alt="image_not_found">
                                    <div class="item_content">
                                        <h3 class="item_title text-white">Special Offer</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet domin Quaequ e an mea
                                        </p>
                                        <a class="custom_btn bg_white text-uppercase" href="#!">View Collection</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="ce_offer_fullimage2 offer_fullimage text-white">
                                    <img src="assets/images/category/classic_ecommerce/img_01.jpg" alt="image_not_found">
                                    <div class="item_content">
                                        <h3 class="item_title text-white">Special Offer</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet domin Quaequ e an mea
                                        </p>
                                        <a class="custom_btn bg_white text-uppercase" href="#!">View Collection</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="ce_offer_fullimage2 offer_fullimage text-white">
                                    <img src="assets/images/category/classic_ecommerce/img_01.jpg" alt="image_not_found">
                                    <div class="item_content">
                                        <h3 class="item_title text-white">Special Offer</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet domin Quaequ e an mea
                                        </p>
                                        <a class="custom_btn bg_white text-uppercase" href="#!">View Collection</a>
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

                <div class="grid-item">
                    <div class="ecommerce_category_fullimage">
                        <img src="assets/images/category/classic_ecommerce/img_02.jpg" alt="image_not_found">
                        <h3 class="item_title">
                            <a href="#!">Cropped Pointelle</a>
                        </h3>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="ecommerce_category_fullimage">
                        <img src="assets/images/category/classic_ecommerce/img_03.jpg" alt="image_not_found">
                        <h3 class="item_title">
                            <a href="#!">Pouch Pocket Jacket</a>
                        </h3>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="ecommerce_category_fullimage">
                        <img src="assets/images/category/classic_ecommerce/img_04.jpg" alt="image_not_found">
                        <h3 class="item_title">
                            <a href="#!">Lightweight Quilted</a>
                        </h3>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="ecommerce_category_fullimage">
                        <img src="assets/images/category/classic_ecommerce/img_05.jpg" alt="image_not_found">
                        <h3 class="item_title">
                            <a href="#!">Faux Leather Biker</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category_section - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section sec_ptb_100 clearfix">
        <div class="container">
            <div class="row mb_30 align-items-center justify-content-lg-between">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="ecommerce_section_title">
                        <h2 class="title_text mb-0">Popular Products</h2>
                    </div>
                </div>

                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <ul class="button-group filters-button-group ul_li_right clearfix">
                        <li><button class="active" data-filter="*">All</button></li>
                        <li><button data-filter=".fall">Fall</button></li>
                        <li><button data-filter=".blouse">Blouse</button></li>
                        <li><button data-filter=".dresses">Dresses</button></li>
                        <li><button data-filter=".tops">Tops</button></li>
                        <li><button data-filter=".bodysuits">Bodysuits</button></li>
                        <li><span class="filter_sidebar_btn" data-bg-color="#f9f9f9"><i class="far fa-bars"></i> FILTER</span></li>
                    </ul>
                </div>
            </div>

            <div class="element-grid column4_element_grid mb_50">
                <div class="element-item fall " data-category="fall">
                    <div class="ecommerce_product_grid">
                        <ul class="product_label ul_li clearfix">
                            <li data-bg-color="#93be2b">New</li>
                        </ul>
                        <div class="tab-content">
                            <div id="ptab1_1" class="tab-pane fade active">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_01.png" alt="image_not_found">
                                </div>
                            </div>
                            <div id="ptab1_2" class="tab-pane fade">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_02.png" alt="image_not_found">
                                </div>
                            </div>
                            <div id="ptab1_3" class="tab-pane fade">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_03.png" alt="image_not_found">
                                </div>
                            </div>
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">
                                <a href="#!">Rag & Bone Beck Coat</a>
                            </h3>
                            <ul class="product_color ul_li nav clearfix">
                                <li class="active"><a class="pbg_brown" data-toggle="tab" href="#ptab1_1"></a></li>
                                <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab1_2"></a></li>
                                <li><a class="pbg_gray" data-toggle="tab" href="#ptab1_3"></a></li>
                            </ul>
                            <span class="item_price"><strong>$25.00</strong> <del>$35.00</del></span>
                        </div>
                    </div>
                </div>

                <div class="element-item blouse " data-category="blouse">
                    <div class="ecommerce_product_grid">
                        <div class="tab-content">
                            <div id="ptab2_1" class="tab-pane fade active">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_02.png" alt="image_not_found">
                                </div>
                            </div>
                            <div id="ptab2_2" class="tab-pane fade">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_03.png" alt="image_not_found">
                                </div>
                            </div>
                            <div id="ptab2_3" class="tab-pane fade">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_04.png" alt="image_not_found">
                                </div>
                            </div>
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">
                                <a href="#!">Rag & Bone Beck Coat</a>
                            </h3>
                            <ul class="product_color ul_li nav clearfix">
                                <li class="active"><a class="pbg_brown" data-toggle="tab" href="#ptab1_1"></a></li>
                                <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab2_2"></a></li>
                                <li><a class="pbg_gray" data-toggle="tab" href="#ptab2_3"></a></li>
                            </ul>
                            <span class="item_price"><strong>$25.00</strong> <del>$35.00</del></span>
                        </div>
                    </div>
                </div>

                <div class="element-item dresses " data-category="dresses">
                    <div class="ecommerce_product_grid">
                        <ul class="product_label ul_li clearfix">
                            <li data-bg-color="#808080">Out of Stock</li>
                        </ul>
                        <div class="tab-content">
                            <div id="ptab3_1" class="tab-pane fade active">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_03.png" alt="image_not_found">
                                </div>
                            </div>
                            <div id="ptab3_2" class="tab-pane fade">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_04.png" alt="image_not_found">
                                </div>
                            </div>
                            <div id="ptab3_3" class="tab-pane fade">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_05.png" alt="image_not_found">
                                </div>
                            </div>
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">
                                <a href="#!">Rag & Bone Beck Coat</a>
                            </h3>
                            <ul class="product_color ul_li nav clearfix">
                                <li class="active"><a class="pbg_brown" data-toggle="tab" href="#ptab3_1"></a></li>
                                <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab3_2"></a></li>
                                <li><a class="pbg_gray" data-toggle="tab" href="#ptab3_3"></a></li>
                            </ul>
                            <span class="item_price"><strong>$25.00</strong> <del>$35.00</del></span>
                        </div>
                    </div>
                </div>

                <div class="element-item tops " data-category="tops">
                    <div class="ecommerce_product_grid">
                        <ul class="product_label ul_li clearfix">
                            <li data-bg-color="#93be2b">New</li>
                        </ul>
                        <div class="tab-content">
                            <div id="ptab4_1" class="tab-pane fade active">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_04.png" alt="image_not_found">
                                </div>
                            </div>
                            <div id="ptab4_2" class="tab-pane fade">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_05.png" alt="image_not_found">
                                </div>
                            </div>
                            <div id="ptab4_3" class="tab-pane fade">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_06.png" alt="image_not_found">
                                </div>
                            </div>
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">
                                <a href="#!">Rag & Bone Beck Coat</a>
                            </h3>
                            <ul class="product_color ul_li nav clearfix">
                                <li class="active"><a class="pbg_brown" data-toggle="tab" href="#ptab4_1"></a></li>
                                <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab4_2"></a></li>
                                <li><a class="pbg_gray" data-toggle="tab" href="#ptab4_3"></a></li>
                            </ul>
                            <span class="item_price"><strong>$25.00</strong> <del>$35.00</del></span>
                        </div>
                    </div>
                </div>

                <div class="element-item bodysuits " data-category="bodysuits">
                    <div class="ecommerce_product_grid">
                        <ul class="product_label ul_li clearfix">
                            <li data-bg-color="#93be2b">New</li>
                        </ul>
                        <div class="tab-content">
                            <div id="ptab5_1" class="tab-pane fade active">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_05.png" alt="image_not_found">
                                </div>
                            </div>
                            <div id="ptab5_2" class="tab-pane fade">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_06.png" alt="image_not_found">
                                </div>
                            </div>
                            <div id="ptab5_3" class="tab-pane fade">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_07.png" alt="image_not_found">
                                </div>
                            </div>
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">
                                <a href="#!">Rag & Bone Beck Coat</a>
                            </h3>
                            <ul class="product_color ul_li nav clearfix">
                                <li class="active"><a class="pbg_brown" data-toggle="tab" href="#ptab5_1"></a></li>
                                <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab5_2"></a></li>
                                <li><a class="pbg_gray" data-toggle="tab" href="#ptab5_3"></a></li>
                            </ul>
                            <span class="item_price"><strong>$25.00</strong> <del>$35.00</del></span>
                        </div>
                    </div>
                </div>

                <div class="element-item fall " data-category="fall">
                    <div class="ecommerce_product_grid">
                        <ul class="product_label ul_li clearfix">
                            <li data-bg-color="#93be2b">New</li>
                        </ul>
                        <div class="tab-content">
                            <div id="ptab6_1" class="tab-pane fade active">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_06.png" alt="image_not_found">
                                </div>
                            </div>
                            <div id="ptab6_2" class="tab-pane fade">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_07.png" alt="image_not_found">
                                </div>
                            </div>
                            <div id="ptab6_3" class="tab-pane fade">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_08.png" alt="image_not_found">
                                </div>
                            </div>
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">
                                <a href="#!">Rag & Bone Beck Coat</a>
                            </h3>
                            <ul class="product_color ul_li nav clearfix">
                                <li class="active"><a class="pbg_brown" data-toggle="tab" href="#ptab6_1"></a></li>
                                <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab6_2"></a></li>
                                <li><a class="pbg_gray" data-toggle="tab" href="#ptab6_3"></a></li>
                            </ul>
                            <span class="item_price"><strong>$25.00</strong> <del>$35.00</del></span>
                        </div>
                    </div>
                </div>

                <div class="element-item blouse " data-category="blouse">
                    <div class="ecommerce_product_grid">
                        <ul class="product_label ul_li clearfix">
                            <li data-bg-color="#93be2b">New</li>
                        </ul>
                        <div class="tab-content">
                            <div id="ptab7_1" class="tab-pane fade active">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_07.png" alt="image_not_found">
                                </div>
                            </div>
                            <div id="ptab7_2" class="tab-pane fade">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_08.png" alt="image_not_found">
                                </div>
                            </div>
                            <div id="ptab7_3" class="tab-pane fade">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_09.png" alt="image_not_found">
                                </div>
                            </div>
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">
                                <a href="#!">Rag & Bone Beck Coat</a>
                            </h3>
                            <ul class="product_color ul_li nav clearfix">
                                <li class="active"><a class="pbg_brown" data-toggle="tab" href="#ptab7_1"></a></li>
                                <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab7_2"></a></li>
                                <li><a class="pbg_gray" data-toggle="tab" href="#ptab7_3"></a></li>
                            </ul>
                            <span class="item_price"><strong>$25.00</strong> <del>$35.00</del></span>
                        </div>
                    </div>
                </div>

                <div class="element-item dresses " data-category="dresses">
                    <div class="ecommerce_product_grid">
                        <ul class="product_label ul_li clearfix">
                            <li data-bg-color="#93be2b">New</li>
                        </ul>
                        <div class="tab-content">
                            <div id="ptab8_1" class="tab-pane fade active">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_08.png" alt="image_not_found">
                                </div>
                            </div>
                            <div id="ptab8_2" class="tab-pane fade">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_09.png" alt="image_not_found">
                                </div>
                            </div>
                            <div id="ptab8_3" class="tab-pane fade">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_10.png" alt="image_not_found">
                                </div>
                            </div>
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">
                                <a href="#!">Rag & Bone Beck Coat</a>
                            </h3>
                            <ul class="product_color ul_li nav clearfix">
                                <li class="active"><a class="pbg_brown" data-toggle="tab" href="#ptab8_1"></a></li>
                                <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab8_2"></a></li>
                                <li><a class="pbg_gray" data-toggle="tab" href="#ptab8_3"></a></li>
                            </ul>
                            <span class="item_price"><strong>$25.00</strong> <del>$35.00</del></span>
                        </div>
                    </div>
                </div>

                <div class="element-item tops " data-category="tops">
                    <div class="ecommerce_product_grid">
                        <ul class="product_label ul_li clearfix">
                            <li data-bg-color="#93be2b">New</li>
                        </ul>
                        <div class="tab-content">
                            <div id="ptab9_1" class="tab-pane fade active">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_09.png" alt="image_not_found">
                                </div>
                            </div>
                            <div id="ptab9_2" class="tab-pane fade">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_10.png" alt="image_not_found">
                                </div>
                            </div>
                            <div id="ptab9_3" class="tab-pane fade">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_11.png" alt="image_not_found">
                                </div>
                            </div>
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">
                                <a href="#!">Rag & Bone Beck Coat</a>
                            </h3>
                            <ul class="product_color ul_li nav clearfix">
                                <li class="active"><a class="pbg_brown" data-toggle="tab" href="#ptab9_1"></a></li>
                                <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab9_2"></a></li>
                                <li><a class="pbg_gray" data-toggle="tab" href="#ptab9_3"></a></li>
                            </ul>
                            <span class="item_price"><strong>$25.00</strong> <del>$35.00</del></span>
                        </div>
                    </div>
                </div>

                <div class="element-item bodysuits " data-category="bodysuits">
                    <div class="ecommerce_product_grid">
                        <ul class="product_label ul_li clearfix">
                            <li data-bg-color="#93be2b">New</li>
                        </ul>
                        <div class="tab-content">
                            <div id="ptab10_1" class="tab-pane fade active">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_10.png" alt="image_not_found">
                                </div>
                            </div>
                            <div id="ptab10_2" class="tab-pane fade">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_11.png" alt="image_not_found">
                                </div>
                            </div>
                            <div id="ptab10_3" class="tab-pane fade">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_12.png" alt="image_not_found">
                                </div>
                            </div>
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">
                                <a href="#!">Rag & Bone Beck Coat</a>
                            </h3>
                            <ul class="product_color ul_li nav clearfix">
                                <li class="active"><a class="pbg_brown" data-toggle="tab" href="#ptab10_1"></a></li>
                                <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab10_2"></a></li>
                                <li><a class="pbg_gray" data-toggle="tab" href="#ptab10_3"></a></li>
                            </ul>
                            <span class="item_price"><strong>$25.00</strong> <del>$35.00</del></span>
                        </div>
                    </div>
                </div>

                <div class="element-item fall " data-category="fall">
                    <div class="ecommerce_product_grid">
                        <ul class="product_label ul_li clearfix">
                            <li data-bg-color="#93be2b">New</li>
                        </ul>
                        <div class="tab-content">
                            <div id="ptab11_1" class="tab-pane fade active">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_11.png" alt="image_not_found">
                                </div>
                            </div>
                            <div id="ptab11_2" class="tab-pane fade">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_12.png" alt="image_not_found">
                                </div>
                            </div>
                            <div id="ptab11_3" class="tab-pane fade">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_01.png" alt="image_not_found">
                                </div>
                            </div>
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">
                                <a href="#!">Rag & Bone Beck Coat</a>
                            </h3>
                            <ul class="product_color ul_li nav clearfix">
                                <li class="active"><a class="pbg_brown" data-toggle="tab" href="#ptab11_1"></a></li>
                                <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab11_2"></a></li>
                                <li><a class="pbg_gray" data-toggle="tab" href="#ptab11_3"></a></li>
                            </ul>
                            <span class="item_price"><strong>$25.00</strong> <del>$35.00</del></span>
                        </div>
                    </div>
                </div>

                <div class="element-item blouse " data-category="blouse">
                    <div class="ecommerce_product_grid">
                        <ul class="product_label ul_li clearfix">
                            <li data-bg-color="#93be2b">New</li>
                        </ul>
                        <div class="tab-content">
                            <div id="ptab12_1" class="tab-pane fade active">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_12.png" alt="image_not_found">
                                </div>
                            </div>
                            <div id="ptab12_2" class="tab-pane fade">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_01.png" alt="image_not_found">
                                </div>
                            </div>
                            <div id="ptab12_3" class="tab-pane fade">
                                <div class="item_image">
                                    <img src="assets/images/shop/classic_ecommerce/img_02.png" alt="image_not_found">
                                </div>
                            </div>
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">
                                <a href="#!">Rag & Bone Beck Coat</a>
                            </h3>
                            <ul class="product_color ul_li nav clearfix">
                                <li class="active"><a class="pbg_brown" data-toggle="tab" href="#ptab12_1"></a></li>
                                <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab12_2"></a></li>
                                <li><a class="pbg_gray" data-toggle="tab" href="#ptab12_3"></a></li>
                            </ul>
                            <span class="item_price"><strong>$25.00</strong> <del>$35.00</del></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="load_more text-center clearfix">
                <a class="custom_btn bg_gray text-uppercase" href="#!">Load More</a>
            </div>
        </div>
    </section>

    <div class="sidebar-menu-wrapper">
        <div class="filter_sidebar">
            <button type="button" class="close_btn mb_50"><i class="fal fa-times"></i></button>
            <div class="fs_widget fs_category_list">
                <h3 class="fs_widget_title text-uppercase">Top Categories</h3>
                <ul class="ul_li_block clearfix">
                    <li><a href="#!"><span><i class="fab fa-black-tie"></i></span>Andy</a></li>
                    <li><a href="#!"><span><i class="fal fa-tshirt"></i></span>Ariadne’s Thread</a></li>
                    <li><a href="#!"><span><i class="fal fa-watch"></i></span>Black Swan</a></li>
                    <li><a href="#!"><span><i class="fal fa-compact-disc"></i></span>Disco</a></li>
                    <li><a href="#!"><span><i class="fas fa-gem"></i></span>Discovering Greece</a></li>
                    <li><a href="#!"><span><i class="fal fa-bicycle"></i></span>Folding the News</a></li>
                    <li><a href="#!"><span><i class="far fa-laptop"></i></span>George C.</a></li>
                    <li><a href="#!"><span><i class="fas fa-mobile-alt"></i></span>Helen of Troy</a></li>
                    <li><a href="#!"><span><i class="fab fa-black-tie"></i></span>Hi-Tech</a></li>
                    <li><a href="#!"><span><i class="fab fa-black-tie"></i></span>Yokoso</a></li>
                </ul>
            </div>

            <div class="fs_widget fs_price_list">
                <h3 class="fs_widget_title text-uppercase">Price filter</h3>
                <form action="#">
                    <ul class="ul_li_block clearfix">
                        <li>
                            <input id="fs_price_1" type="radio" name="fs_price_wroup" checked>
                            <label for="fs_price_1">$25 - $100</label>
                        </li>
                        <li>
                            <input id="fs_price_2" type="radio" name="fs_price_wroup">
                            <label for="fs_price_2">$100 - $200</label>
                        </li>
                        <li>
                            <input id="fs_price_3" type="radio" name="fs_price_wroup">
                            <label for="fs_price_3">$200 - $300</label>
                        </li>
                        <li>
                            <input id="fs_price_4" type="radio" name="fs_price_wroup">
                            <label for="fs_price_4">$400 - $500</label>
                        </li>
                        <li>
                            <input id="fs_price_5" type="radio" name="fs_price_wroup">
                            <label for="fs_price_5">$500 - $1000</label>
                        </li>
                    </ul>
                </form>
            </div>

            <div class="fs_widget fs_color_list">
                <h3 class="fs_widget_title text-uppercase">Color filter</h3>
                <form action="#">
                    <ul class="ul_li clearfix">
                        <li><input type="radio" name="fs_color_froup" data-bg-color="#ffa037"></li>
                        <li><input type="radio" name="fs_color_froup" data-bg-color="#6c7ae0"></li>
                        <li><input type="radio" name="fs_color_froup" data-bg-color="#f23226"></li>
                        <li><input type="radio" name="fs_color_froup" data-bg-color="#828664"></li>
                        <li><input type="radio" name="fs_color_froup" data-bg-color="#68a3c2"></li>
                        <li><input type="radio" name="fs_color_froup" data-bg-color="#009122"></li>
                        <li><input type="radio" name="fs_color_froup" data-bg-color="#0099f7"></li>
                        <li><input type="radio" name="fs_color_froup" data-bg-color="#bb8c80"></li>
                        <li><input type="radio" name="fs_color_froup" data-bg-color="#ffa037"></li>
                        <li><input type="radio" name="fs_color_froup" data-bg-color="#875546"></li>
                        <li><input type="radio" name="fs_color_froup" data-bg-color="#f74877"></li>
                        <li><input type="radio" name="fs_color_froup" data-bg-color="#1f1e29"></li>
                        <li><input type="radio" name="fs_color_froup" data-bg-color="#dddddd"></li>
                    </ul>
                </form>
            </div>

            <div class="fs_widget fs_size_list">
                <h3 class="fs_widget_title text-uppercase">Size filter</h3>
                <form action="#">
                    <ul class="ul_li clearfix">
                        <li>
                            <label for="fs_size_1"><input id="fs_size_1" type="radio" name="fs_size_group">XS</label>
                        </li>
                        <li>
                            <label for="fs_size_2"><input id="fs_size_2" type="radio" name="fs_size_group">S</label>
                        </li>
                        <li>
                            <label for="fs_size_3"><input id="fs_size_3" type="radio" name="fs_size_group">M</label>
                        </li>
                        <li>
                            <label for="fs_size_4"><input id="fs_size_4" type="radio" name="fs_size_group">L</label>
                        </li>
                        <li>
                            <label for="fs_size_5"><input id="fs_size_5" type="radio" name="fs_size_group">XL</label>
                        </li>
                        <li>
                            <label for="fs_size_6"><input id="fs_size_6" type="radio" name="fs_size_group">XXL</label>
                        </li>
                    </ul>
                </form>
            </div>

            <div class="fs_widget fs_realted_post">
                <h3 class="fs_widget_title text-uppercase">Your may also like</h3>
                <div class="small_blog">
                    <a href="/blogs_blogDetails" class="item_image">
                        <img src="assets/images/recent_post/img_01.jpg" alt="image_not_found">
                    </a>
                    <div class="item_content">
                        <h3 class="item_title">
                            <a href="/blogs_blogDetails">
                                A Sound Way To Treat Hearing Loss
                            </a>
                        </h3>
                        <span class="post_date">March 12, 2020</span>
                    </div>
                </div>

                <div class="small_blog">
                    <a href="/blogs_blogDetails" class="item_image">
                        <img src="assets/images/recent_post/img_01.jpg" alt="image_not_found">
                    </a>
                    <div class="item_content">
                        <h3 class="item_title">
                            <a href="/blogs_blogDetails">
                                A Sound Way To Treat Hearing Loss
                            </a>
                        </h3>
                        <span class="post_date">March 12, 2020</span>
                    </div>
                </div>

                <div class="small_blog">
                    <a href="/blogs_blogDetails" class="item_image">
                        <img src="assets/images/recent_post/img_01.jpg" alt="image_not_found">
                    </a>
                    <div class="item_content">
                        <h3 class="item_title">
                            <a href="/blogs_blogDetails">
                                A Sound Way To Treat Hearing Loss
                            </a>
                        </h3>
                        <span class="post_date">March 12, 2020</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product_section - end
    ================================================== -->


    <!-- offer_section - start
    ================================================== -->
    <section class="offer_section clearfix">
        <div class="container-fluid p-0">
            <div class="row no-gutters justify-content-lg-between">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="ce_offer_fullimage offer_fullimage text-white text-center">
                        <img src="assets/images/offer/classic_ecommerce/img_01.jpg" alt="image_not_found">
                        <div class="item_content">
                            <h3 class="item_title text-white mb_15">Read The Blog</h3>
                            <a class="text_btn text-uppercase" href="#!"><span>View all posts</span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="ce_offer_fullimage offer_fullimage text-white text-center">
                        <img src="assets/images/offer/classic_ecommerce/img_02.jpg" alt="image_not_found">
                        <div class="item_content">
                            <h3 class="item_title text-white mb_15">Follow Our Store On Instagram</h3>
                            <a class="text_btn text-uppercase" href="#!"><span>@JTHEMES</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- offer_section - end
    ================================================== -->


    <!-- newsletter_section - start
    ================================================== -->
    <section class="newsletter_section ecommerce_newsletter sec_ptb_100 clearfix">
        <div class="container">
            <div class="form_wrap text-center">
                <form action="#">
                    <h2>Start of Summer Up to 35% off on all items</h2>
                    <div class="form_item">
                        <input type="email" name="email" placeholder="Your email address">
                        <button type="submit" class="bg_black">Subcribe</button>
                    </div>
                    <p class="mb-0">
                        Sign up to our Newsletter and get the discount code
                    </p>
                </form>
            </div>
        </div>
    </section>
    <!-- newsletter_section - end
    ================================================== -->


</main>
@endsection

@section('footer')
    @include('home.classicEcommerce.classic_Footer')
@endsection

