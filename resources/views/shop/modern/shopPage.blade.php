@extends('layout.master')

@section('title')
<title>Modern - Current Tech</title>
@endsection

@section('body_class', 'home_modern')

@section('content')
<main>


    <!-- sidebar mobile menu & sidebar cart - start
    ================================================== -->
    <div class="sidebar-menu-wrapper">
        <div class="sidebar_mobile_menu modern_mobile_sidebar">
            <button type="button" class="close_btn"><i class="fal fa-times"></i></button>

            <div class="brand_logo mb_50">
                <a href="/home">
                    <img src="assets/images/logo/logo_08_1x.png" srcset="assets/images/logo/logo_08_2x.png 2x" alt="logo_not_found">
                </a>
            </div>

            <div class="form_item mb_50">
                <input type="search" name="search">
                <button type="submit" class="submit_btn"><i class="fal fa-search"></i></button>
            </div>

            <div class="mobile_menu_list mb_50 clearfix">
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

            <ul class="action_btns_group mb_50 ul_li clearfix">
                <li>
                    <button type="button" class="user_btn">
                        <i class="fal fa-user"></i>
                    </button>
                </li>
                <li>
                    <button type="button" class="cart_btn">
                        <i class="fal fa-shopping-cart"></i>
                        <span class="btn_badge">2</span>
                    </button>
                </li>
            </ul>

            <ul class="primary_social_links ul_li clearfix">
                <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
            </ul>
        </div>

        <div class="overlay"></div>
    </div>
    <!-- sidebar mobile menu & sidebar cart - end
    ================================================== -->


    <!-- modern container - start -->
    <div class="modern_container clearfix">

        <!-- breadcrumb_section - start
        ================================================== -->
        <div class="breadcrumb_section modern_breadcrumb pb-0 mb_50 clearfix">
            <div class="f2_breadcrumb_nav_wrap mt-0">
                <ul class="ce_breadcrumb_nav ul_li clearfix">
                    <li><a href="#!">Home</a></li>
                    <li>Shop</li>
                    <li>Modern</li>
                    <li>Shop Page</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb_section - end
        ================================================== -->


        <!-- feature_section - start
        ================================================== -->
        <section class="feature_section clearfix">
            <div class="modern_feature_carousel arrow_ycenter">
                <div class="slideshow4_slider row" data-slick='{"dots": false}'>
                    <div class="item col">
                        <div class="modern_product_fullimage text-center">
                            <img src="assets/images/feature/modern/img_01.jpg" alt="image_not_found">
                            <h3 class="item_title text-uppercase text-white">Vasagle Vanity Table</h3>
                            <a class="text_btn text-uppercase text-white" href="#!"><span>NEW COLLECTION</span><i class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="modern_product_fullimage text-center">
                            <img src="assets/images/feature/modern/img_02.jpg" alt="image_not_found">
                            <h3 class="item_title text-uppercase text-white">Vasagle Vanity Table</h3>
                            <a class="text_btn text-uppercase text-white" href="#!"><span>NEW COLLECTION</span><i class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="modern_product_fullimage text-center">
                            <img src="assets/images/feature/modern/img_03.jpg" alt="image_not_found">
                            <h3 class="item_title text-uppercase text-white">Vasagle Vanity Table</h3>
                            <a class="text_btn text-uppercase text-white" href="#!"><span>NEW COLLECTION</span><i class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="modern_product_fullimage text-center">
                            <img src="assets/images/feature/modern/img_04.jpg" alt="image_not_found">
                            <h3 class="item_title text-uppercase text-white">Vasagle Vanity Table</h3>
                            <a class="text_btn text-uppercase text-white" href="#!"><span>NEW COLLECTION</span><i class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="modern_product_fullimage text-center">
                            <img src="assets/images/feature/modern/img_01.jpg" alt="image_not_found">
                            <h3 class="item_title text-uppercase text-white">Vasagle Vanity Table</h3>
                            <a class="text_btn text-uppercase text-white" href="#!"><span>NEW COLLECTION</span><i class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="modern_product_fullimage text-center">
                            <img src="assets/images/feature/modern/img_02.jpg" alt="image_not_found">
                            <h3 class="item_title text-uppercase text-white">Vasagle Vanity Table</h3>
                            <a class="text_btn text-uppercase text-white" href="#!"><span>NEW COLLECTION</span><i class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="modern_product_fullimage text-center">
                            <img src="assets/images/feature/modern/img_03.jpg" alt="image_not_found">
                            <h3 class="item_title text-uppercase text-white">Vasagle Vanity Table</h3>
                            <a class="text_btn text-uppercase text-white" href="#!"><span>NEW COLLECTION</span><i class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="modern_product_fullimage text-center">
                            <img src="assets/images/feature/modern/img_04.jpg" alt="image_not_found">
                            <h3 class="item_title text-uppercase text-white">Vasagle Vanity Table</h3>
                            <a class="text_btn text-uppercase text-white" href="#!"><span>NEW COLLECTION</span><i class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="carousel_nav">
                    <button type="button" class="ss4_left_arrow"><i class="fal fa-angle-left"></i></button>
                    <button type="button" class="ss4_right_arrow"><i class="fal fa-angle-right"></i></button>
                </div>
            </div>
        </section>
        <!-- feature_section - end
        ================================================== -->


        <!-- product_section - start
        ================================================== -->
        <section class="product_section sec_ptb_100 pb-0 clearfix">
            <div class="carparts_filetr_bar clearfix">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 col-md-6">
                        <h4 class="result_text">Showing 1 to 10 of 243 products</h4>
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
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="modern_product_item bg_lightyellow text-uppercase">
                        <ul class="product_label ul_li_right clearfix">
                            <li class="bg_black">New</li>
                            <li class="bg_black">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/modern/img_01.png" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <ul class="rating_star ul_li clearfix">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fal fa-star"></i></li>
                            </ul>
                            <span class="item_category">CLOTHING SIZE CHART</span>
                            <h3 class="item_title">
                                <a class="underline_effect" href="#!">Merino Small</a>
                            </h3>
                            <div class="effect_wrap">
                                <span class="item_price"><strong>$15.00</strong> <del>$45.00</del></span>
                                <ul class="action_btns ul_li clearfix">
                                    <li><a class="bg_black" href="#!">ADD TO CART</a></li>
                                    <li><a class="bg_white" href="#!"><i class="fal fa-search"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="modern_product_item bg_gray text-uppercase">
                        <ul class="product_label ul_li_right clearfix">
                            <li class="bg_black">New</li>
                            <li class="bg_black">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/modern/img_02.png" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <ul class="rating_star ul_li clearfix">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fal fa-star"></i></li>
                            </ul>
                            <span class="item_category">CLOTHING SIZE CHART</span>
                            <h3 class="item_title">
                                <a class="underline_effect" href="#!">Merino Small</a>
                            </h3>
                            <div class="effect_wrap">
                                <span class="item_price"><strong>$15.00</strong> <del>$45.00</del></span>
                                <ul class="action_btns ul_li clearfix">
                                    <li><a class="bg_black" href="#!">ADD TO CART</a></li>
                                    <li><a class="bg_white" href="#!"><i class="fal fa-search"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="modern_product_item bg_sweet1 text-uppercase">
                        <ul class="product_label ul_li_right clearfix">
                            <li class="bg_black">New</li>
                            <li class="bg_black">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/modern/img_03.png" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <ul class="rating_star ul_li clearfix">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fal fa-star"></i></li>
                            </ul>
                            <span class="item_category">CLOTHING SIZE CHART</span>
                            <h3 class="item_title">
                                <a class="underline_effect" href="#!">Merino Small</a>
                            </h3>
                            <div class="effect_wrap">
                                <span class="item_price"><strong>$15.00</strong> <del>$45.00</del></span>
                                <ul class="action_btns ul_li clearfix">
                                    <li><a class="bg_black" href="#!">ADD TO CART</a></li>
                                    <li><a class="bg_white" href="#!"><i class="fal fa-search"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="modern_product_item bg_past text-uppercase">
                        <ul class="product_label ul_li_right clearfix">
                            <li class="bg_black">New</li>
                            <li class="bg_black">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/modern/img_04.png" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <ul class="rating_star ul_li clearfix">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fal fa-star"></i></li>
                            </ul>
                            <span class="item_category">CLOTHING SIZE CHART</span>
                            <h3 class="item_title">
                                <a class="underline_effect" href="#!">Merino Small</a>
                            </h3>
                            <div class="effect_wrap">
                                <span class="item_price"><strong>$15.00</strong> <del>$45.00</del></span>
                                <ul class="action_btns ul_li clearfix">
                                    <li><a class="bg_black" href="#!">ADD TO CART</a></li>
                                    <li><a class="bg_white" href="#!"><i class="fal fa-search"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="modern_product_item bg_sweet2 text-uppercase">
                        <ul class="product_label ul_li_right clearfix">
                            <li class="bg_black">New</li>
                            <li class="bg_black">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/modern/img_05.png" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <ul class="rating_star ul_li clearfix">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fal fa-star"></i></li>
                            </ul>
                            <span class="item_category">CLOTHING SIZE CHART</span>
                            <h3 class="item_title">
                                <a class="underline_effect" href="#!">Merino Small</a>
                            </h3>
                            <div class="effect_wrap">
                                <span class="item_price"><strong>$15.00</strong> <del>$45.00</del></span>
                                <ul class="action_btns ul_li clearfix">
                                    <li><a class="bg_black" href="#!">ADD TO CART</a></li>
                                    <li><a class="bg_white" href="#!"><i class="fal fa-search"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="modern_product_item bg_pink text-uppercase">
                        <ul class="product_label ul_li_right clearfix">
                            <li class="bg_black">New</li>
                            <li class="bg_black">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/modern/img_06.png" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <ul class="rating_star ul_li clearfix">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fal fa-star"></i></li>
                            </ul>
                            <span class="item_category">CLOTHING SIZE CHART</span>
                            <h3 class="item_title">
                                <a class="underline_effect" href="#!">Merino Small</a>
                            </h3>
                            <div class="effect_wrap">
                                <span class="item_price"><strong>$15.00</strong> <del>$45.00</del></span>
                                <ul class="action_btns ul_li clearfix">
                                    <li><a class="bg_black" href="#!">ADD TO CART</a></li>
                                    <li><a class="bg_white" href="#!"><i class="fal fa-search"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="modern_product_item bg_lightblue text-uppercase">
                        <ul class="product_label ul_li_right clearfix">
                            <li class="bg_black">New</li>
                            <li class="bg_black">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/modern/img_07.png" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <ul class="rating_star ul_li clearfix">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fal fa-star"></i></li>
                            </ul>
                            <span class="item_category">CLOTHING SIZE CHART</span>
                            <h3 class="item_title">
                                <a class="underline_effect" href="#!">Merino Small</a>
                            </h3>
                            <div class="effect_wrap">
                                <span class="item_price"><strong>$15.00</strong> <del>$45.00</del></span>
                                <ul class="action_btns ul_li clearfix">
                                    <li><a class="bg_black" href="#!">ADD TO CART</a></li>
                                    <li><a class="bg_white" href="#!"><i class="fal fa-search"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="modern_product_item bg_pink text-uppercase">
                        <ul class="product_label ul_li_right clearfix">
                            <li class="bg_black">New</li>
                            <li class="bg_black">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/modern/img_08.png" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <ul class="rating_star ul_li clearfix">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fal fa-star"></i></li>
                            </ul>
                            <span class="item_category">CLOTHING SIZE CHART</span>
                            <h3 class="item_title">
                                <a class="underline_effect" href="#!">Merino Small</a>
                            </h3>
                            <div class="effect_wrap">
                                <span class="item_price"><strong>$15.00</strong> <del>$45.00</del></span>
                                <ul class="action_btns ul_li clearfix">
                                    <li><a class="bg_black" href="#!">ADD TO CART</a></li>
                                    <li><a class="bg_white" href="#!"><i class="fal fa-search"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="modern_product_item bg_light text-uppercase">
                        <ul class="product_label ul_li_right clearfix">
                            <li class="bg_black">New</li>
                            <li class="bg_black">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/modern/img_09.png" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <ul class="rating_star ul_li clearfix">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fal fa-star"></i></li>
                            </ul>
                            <span class="item_category">CLOTHING SIZE CHART</span>
                            <h3 class="item_title">
                                <a class="underline_effect" href="#!">Merino Small</a>
                            </h3>
                            <div class="effect_wrap">
                                <span class="item_price"><strong>$15.00</strong> <del>$45.00</del></span>
                                <ul class="action_btns ul_li clearfix">
                                    <li><a class="bg_black" href="#!">ADD TO CART</a></li>
                                    <li><a class="bg_white" href="#!"><i class="fal fa-search"></i></a></li>
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
        <section class="advertisement_section sec_ptb_100 clearfix">
            <div class="row justify-content-lg-between">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="modern_advertisement align-items-center justify-content-end" data-background="assets/images/offer/modern/img_01.jpg">
                        <div class="item_content">
                            <h4 class="text-white">BACKPACK</h4>
                            <h3 class="text-white mb_15">ORIGINALS FLORAL</h3>
                            <a class="text_btn text-white" href="#!"><span>NEW COLLECTION</span> <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="modern_advertisement align-items-center justify-content-end" data-background="assets/images/offer/modern/img_02.jpg">
                        <div class="item_content">
                            <h4>BACKPACK</h4>
                            <h3 class="mb_15">ORIGINALS FLORAL</h3>
                            <a class="text_btn" href="#!"><span>NEW COLLECTION</span> <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- advertisement_section - end
        ================================================== -->

    </div>
    <!-- modern container - end -->


</main>
@endsection

@section('footer')
    @include('home.modern.modern_Footer')
@endsection

