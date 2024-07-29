@extends('layout.master')


@section('title')
<title>Furniture - Current Tech</title>
@endsection

@section('body_class', 'home_furniture')

@section('navbar')
    @include('home.furniture.furniture_Navbar')
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
    <section class="slider_section furniture_slider arrow_ycenter clearfix">
        <div class="main_slider clearfix">
            <div class="item d-flex align-items-center clearfix" data-background="assets/images/slider/furniture_store/bg_01.jpg">
                <div class="container">
                    <div class="slider_content">
                        <h4 data-animation="fadeInUp" data-delay=".4s">30 % OFF ALL ORDER Living Room</h4>
                        <h3 data-animation="fadeInUp" data-delay=".6s">Sofa Collection</h3>
                        <p data-animation="fadeInUp" data-delay=".8s">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                        </p>
                        <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                            <a href="#!" class="custom_btn bg_furniture_brown text-uppercase">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item d-flex align-items-center clearfix" data-background="assets/images/slider/furniture_store/bg_01.jpg">
                <div class="container">
                    <div class="slider_content">
                        <h4 data-animation="fadeInUp" data-delay=".4s">30 % OFF ALL ORDER Living Room</h4>
                        <h3 data-animation="fadeInUp" data-delay=".6s">Sofa Collection</h3>
                        <p data-animation="fadeInUp" data-delay=".8s">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                        </p>
                        <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                            <a href="#!" class="custom_btn bg_furniture_brown text-uppercase">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item d-flex align-items-center clearfix" data-background="assets/images/slider/furniture_store/bg_01.jpg">
                <div class="container">
                    <div class="slider_content">
                        <h4 data-animation="fadeInUp" data-delay=".4s">30 % OFF ALL ORDER Living Room</h4>
                        <h3 data-animation="fadeInUp" data-delay=".6s">Sofa Collection</h3>
                        <p data-animation="fadeInUp" data-delay=".8s">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                        </p>
                        <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                            <a href="#!" class="custom_btn bg_furniture_brown text-uppercase">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item d-flex align-items-center clearfix" data-background="assets/images/slider/furniture_store/bg_01.jpg">
                <div class="container">
                    <div class="slider_content">
                        <h4 data-animation="fadeInUp" data-delay=".4s">30 % OFF ALL ORDER Living Room</h4>
                        <h3 data-animation="fadeInUp" data-delay=".6s">Sofa Collection</h3>
                        <p data-animation="fadeInUp" data-delay=".8s">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                        </p>
                        <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                            <a href="#!" class="custom_btn bg_furniture_brown text-uppercase">Shop Now</a>
                        </div>
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
    <section class="category_section clearfix">
        <div class="furniture_masonry">
            <div class="grid">
                <div class="grid-sizer"></div>

                <div class="grid-item w_66">
                    <div class="furniture_category_fullimage">
                        <img src="assets/images/category/furniture_store/img_01.jpg" alt="image_not_found">
                        <div class="item_content">
                            <h3 class="item_title">Ritchie chair</h3>
                            <p>Chair collection</p>
                            <a class="custom_btn btn_sm bg_furniture_brown text-uppercase" href="#!">View All</a>
                        </div>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="furniture_category_fullimage">
                        <img src="assets/images/category/furniture_store/img_02.jpg" alt="image_not_found">
                        <div class="item_content">
                            <h3 class="item_title">Ritchie chair</h3>
                            <p>Chair collection</p>
                            <a class="custom_btn btn_sm bg_furniture_brown text-uppercase" href="#!">View All</a>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="furniture_category_fullimage">
                        <img src="assets/images/category/furniture_store/img_03.jpg" alt="image_not_found">
                        <div class="item_content">
                            <h3 class="item_title">Ritchie chair</h3>
                            <p>Chair collection</p>
                            <a class="custom_btn btn_sm bg_furniture_brown text-uppercase" href="#!">View All</a>
                        </div>
                    </div>
                </div>

                <div class="grid-item furniture_category_carousel">
                    <div class="slideshow1_slider" data-slick='{"dots": false}'>
                        <div class="furniture_category_fullimage">
                            <img src="assets/images/category/furniture_store/img_04.jpg" alt="image_not_found">
                            <div class="item_content_bottom text-center">
                                <h3 class="item_title">bookshelf <strong>$100</strong></h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur uilon adipis cing elit. Quisque sed scelerisque arcu. </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel_nav clearfix">
                        <button type="button" class="left_arrow"><i class="fal fa-angle-left"></i></button>
                        <button type="button" class="right_arrow"><i class="fal fa-angle-right"></i></button>
                    </div>
                </div>

                <div class="grid-item w_66">
                    <div class="furniture_category_fullimage">
                        <img src="assets/images/category/furniture_store/img_05.jpg" alt="image_not_found">
                        <div class="item_content">
                            <h3 class="item_title">Ritchie chair</h3>
                            <p>Chair collection</p>
                            <a class="custom_btn btn_sm bg_furniture_brown text-uppercase" href="#!">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category_section - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section sec_ptb_140 clearfix">
        <div class="container-fluid prl_90">

            <div class="row mb_30 align-items-center justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="furniture_section_title">
                        <span class="sub_title mb_15">Aliquam lorem ante, dapibus in, viverra</span>
                        <h2 class="title_text mb-0">DESIGN FURNITURE</h2>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="furniture_tab_wrap clearfix">
                        <ul class="furniture_tab ul_li nav clearfix" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#chair_tab">
                                    <small>
                                        <img src="assets/images/icons/chair.png" alt="icon_not_found">
                                    </small>
                                    <span>Chair</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#sofa_tab">
                                    <small>
                                        <img src="assets/images/icons/sofa_single.png" alt="icon_not_found">
                                    </small>
                                    <span>Sofa</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#lamps_tab">
                                    <small>
                                        <img src="assets/images/icons/lamp.png" alt="icon_not_found">
                                    </small>
                                    <span>Lamps</span>
                                </a>
                            </li>
                        </ul>
                        <a href="#!" class="child_btn btn_border border_gray">ALL PRODUCTS</a>
                    </div>
                </div>
            </div>

            <div class="tab-content">
                <div id="chair_tab" class="tab-pane active">
                    <div class="furniture_product_group row">
                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                                <ul class="product_label ul_li text-uppercase float-right clearfix">
                                    <li>Sale</li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_01.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_02.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                                <ul class="product_label ul_li text-uppercase float-right clearfix">
                                    <li>Sale</li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_03.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_04.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                                <ul class="product_label ul_li text-uppercase float-right clearfix">
                                    <li>Sale</li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_05.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_06.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_07.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                                <ul class="product_label ul_li text-uppercase float-right clearfix">
                                    <li>Sale</li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_08.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_09.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_10.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_11.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_12.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>
                    </div>

                    <div class="load_more text-center clearfix">
                        <a class="custom_btn bg_furniture_brown text-uppercase" href="#!">View More</a>
                    </div>
                </div>

                <div id="sofa_tab" class="tab-pane fade">
                    <div class="furniture_product_group row">
                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                                <ul class="product_label ul_li text-uppercase float-right clearfix">
                                    <li>Sale</li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_01.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_02.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                                <ul class="product_label ul_li text-uppercase float-right clearfix">
                                    <li>Sale</li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_03.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_04.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                                <ul class="product_label ul_li text-uppercase float-right clearfix">
                                    <li>Sale</li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_05.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_06.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_07.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                                <ul class="product_label ul_li text-uppercase float-right clearfix">
                                    <li>Sale</li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_08.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_09.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_10.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_11.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_12.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>
                    </div>

                    <div class="load_more text-center clearfix">
                        <a class="custom_btn bg_furniture_brown text-uppercase" href="#!">View More</a>
                    </div>
                </div>

                <div id="lamps_tab" class="tab-pane fade">
                    <div class="furniture_product_group row">
                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                                <ul class="product_label ul_li text-uppercase float-right clearfix">
                                    <li>Sale</li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_01.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_02.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                                <ul class="product_label ul_li text-uppercase float-right clearfix">
                                    <li>Sale</li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_03.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_04.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                                <ul class="product_label ul_li text-uppercase float-right clearfix">
                                    <li>Sale</li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_05.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_06.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_07.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                                <ul class="product_label ul_li text-uppercase float-right clearfix">
                                    <li>Sale</li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_08.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_09.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_10.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_11.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>

                        <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="top_bar clearfix">
                                <ul class="rating_star ul_li float-left clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="item_image">
                                <img src="assets/images/shop/furniture_store/img_12.png" alt="image_not_found">
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li>
                                        <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                            <i class="fal fa-shopping-basket"></i> Buy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                                <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                            </div>
                        </div>
                    </div>

                    <div class="load_more text-center clearfix">
                        <a class="custom_btn bg_furniture_brown text-uppercase" href="#!">View More</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- product_section - end
    ================================================== -->


    <!-- blog_section - start
    ================================================== -->
    <section class="blog_section clearfix">
        <div class="furniture_blog_listlayout bg_black clearfix">
            <div class="container-fluid p-0">
                <div class="row no-gutters align-items-center justify-content-lg-between">
                    <div class="col-lg-6">
                        <div class="item_image">
                            <img src="assets/images/blog/furniture_store/img_01.jpg" alt="image_not_found">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item_content text-white">
                            <div class="furniture_section_title mb_15">
                                <span class="sub_title mb_15">Aliquam lorem ante, dapibus in, viverra</span>
                                <h2 class="title_text text-white mb-0">Products of the week</h2>
                            </div>
                            <p class="mb_50">
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco ommodo consequat. Duis aute irure dolor in reprehenderit dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                            </p>
                            <a class="custom_btn bg_furniture_brown text-uppercase" href="#!">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="furniture_blog_listlayout clearfix">
            <div class="container-fluid p-0">
                <div class="row no-gutters align-items-center justify-content-lg-between">
                    <div class="col-lg-6 order-last">
                        <div class="item_image">
                            <img src="assets/images/blog/furniture_store/img_02.jpg" alt="image_not_found">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item_content pb-0">
                            <div class="furniture_section_title mb_15">
                                <span class="sub_title mb_15">Aliquam lorem ante, dapibus in, viverra</span>
                                <h2 class="title_text mb-0">Products of the week</h2>
                            </div>
                            <p class="mb_50">
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco ommodo consequat. Duis aute irure dolor in reprehenderit dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                            </p>
                            <a class="custom_btn bg_furniture_brown text-uppercase" href="#!">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog_section - end
    ================================================== -->


    <!-- advertisement_section - start
    ================================================== -->
    <section class="furniture_fullwidth_advertisement sec_ptb_100 d-flex align-items-center clearfix" data-background="assets/images/backgrounds/bg_04.jpg">
        <div class="container">
            <div class="item_content text-center text-white">
                <h2 class="text-white">Your Online Store</h2>
                <p>
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco ommodo consequat. Duis aute irure dolor in reprehenderit
                </p>
                <a class="custom_btn bg_furniture_brown text-uppercase" href="#!">Purchase Now</a>
            </div>
        </div>
    </section>
    <!-- advertisement_section - end
    ================================================== -->


    <!-- feature_section - start
    ================================================== -->
    <section class="feature_furniture sec_ptb_140 text-white d-flex align-items-center clearfix" data-background="assets/images/backgrounds/bg_05.jpg">
        <div class="container-fluid prl_90">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-4">
                    <div class="furniture_section_title">
                        <h2 class="title_text mb_15 text-white">
                            We design everything we make.
                        </h2>
                        <span class="sub_title mb_15">$25.00 – $30.00</span>
                        <p class="mb_50">
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco ommodo consequat. Duis aute irure dolor in reprehenderit dolore eu 
                        </p>
                        <a class="custom_btn bg_furniture_brown text-uppercase" href="#!">Purchase Now</a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sofa_image text-center">
                        <img src="assets/images/offer/furniture_store/img_01.png" alt="image_not_found">
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="furniture_feature_content">
                        <div class="child_furniture_feature clearfix">
                            <div class="item_image">
                                <img src="assets/images/offer/furniture_store/img_02.jpg" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!">Briarwood Decorative 2</a>
                                </h3>
                            </div>
                        </div>

                        <div class="child_furniture_feature clearfix">
                            <div class="item_image">
                                <img src="assets/images/offer/furniture_store/img_03.jpg" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!">AmazonBasics 2-Seater</a>
                                </h3>
                            </div>
                        </div>

                        <div class="child_furniture_feature clearfix">
                            <div class="item_image">
                                <img src="assets/images/offer/furniture_store/img_04.jpg" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!">Aqua Globes</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_section - end
    ================================================== -->


    <!-- barnd_section - start
    ================================================== -->
    <div class="barnd_section sec_ptb_100 clearfix">
        <div class="container-fluid prl_90">
            <div class="barnd_carousel clearfix">
                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_07.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_08.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_09.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_10.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_11.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_12.png" alt="image_not_found">
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


    <!-- furniture_deals_container - start
    ================================================== -->
    <div class="container-fluid prl_90">
        <section class="furniture_deals_container bg_grey clearfix">
            <div class="item_image">
                <img src="assets/images/deals/furniture_store/img_01.png" alt="image_not_found">
            </div>
            <div class="item_content">
                <span class="discount_text">Deal of the day</span>
                <h2>
                    <strong>50% OFF BASIC</strong>
                    Tee Flavor
                </h2>

                <div class="deals_counter">
                    <h4>Expires in</h4>
                    <ul class="countdown_timer primary_counter ul_li clearfix" data-countdown="2021/3/24"></ul>
                </div>
            </div>
        </section>
    </div>
    <!-- furniture_deals_container - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section sec_ptb_140 clearfix">
        <div class="container-fluid prl_90">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="small_products_2col">
                        <h3 class="title_text text-uppercase">You may also like</h3>
                        <ul class="ul_li clearfix">
                            <li>
                                <div class="furniture_small_products">
                                    <a class="item_image" href="#!">
                                        <img src="assets/images/shop/furniture_store/img_13.png" alt="image_not_found">
                                    </a>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Grey Brown Chair</a>
                                        </h3>
                                        <span class="item_price">£150.00</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="furniture_small_products">
                                    <a class="item_image" href="#!">
                                        <img src="assets/images/shop/furniture_store/img_14.png" alt="image_not_found">
                                    </a>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Grey Brown Chair</a>
                                        </h3>
                                        <span class="item_price">£150.00</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="furniture_small_products">
                                    <a class="item_image" href="#!">
                                        <img src="assets/images/shop/furniture_store/img_15.png" alt="image_not_found">
                                    </a>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Grey Brown Chair</a>
                                        </h3>
                                        <span class="item_price">£150.00</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="furniture_small_products">
                                    <a class="item_image" href="#!">
                                        <img src="assets/images/shop/furniture_store/img_16.png" alt="image_not_found">
                                    </a>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Grey Brown Chair</a>
                                        </h3>
                                        <span class="item_price">£150.00</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="small_products_2col">
                        <h3 class="title_text text-uppercase">You may also like</h3>
                        <ul class="ul_li clearfix">
                            <li>
                                <div class="furniture_small_products">
                                    <a class="item_image" href="#!">
                                        <img src="assets/images/shop/furniture_store/img_17.png" alt="image_not_found">
                                    </a>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Grey Brown Chair</a>
                                        </h3>
                                        <span class="item_price">£150.00</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="furniture_small_products">
                                    <a class="item_image" href="#!">
                                        <img src="assets/images/shop/furniture_store/img_18.png" alt="image_not_found">
                                    </a>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Grey Brown Chair</a>
                                        </h3>
                                        <span class="item_price">£150.00</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="furniture_small_products">
                                    <a class="item_image" href="#!">
                                        <img src="assets/images/shop/furniture_store/img_19.png" alt="image_not_found">
                                    </a>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Grey Brown Chair</a>
                                        </h3>
                                        <span class="item_price">£150.00</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="furniture_small_products">
                                    <a class="item_image" href="#!">
                                        <img src="assets/images/shop/furniture_store/img_20.png" alt="image_not_found">
                                    </a>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="#!">Grey Brown Chair</a>
                                        </h3>
                                        <span class="item_price">£150.00</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-7">
                    <div class="furniture_hotproduct">
                        <h3 class="title_text text-uppercase">Hot Products</h3>
                        <div class="tab-content">
                            <div id="hottab_1" class="tab-pane active">
                                <div class="item_image">
                                    <img src="assets/images/shop/furniture_store/img_23.png" alt="image_not_found">
                                    <a class="play_btn_1 pxy_center" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                                        <span><i class="fas fa-play"></i></span>
                                    </a>
                                </div>
                            </div>
                            <div id="hottab_2" class="tab-pane fade">
                                <div class="item_image">
                                    <img src="assets/images/shop/furniture_store/img_23.png" alt="image_not_found">
                                    <a class="play_btn_1 pxy_center" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                                        <span><i class="fas fa-play"></i></span>
                                    </a>
                                </div>
                            </div>
                            <div id="hottab_3" class="tab-pane fade">
                                <div class="item_image">
                                    <img src="assets/images/shop/furniture_store/img_23.png" alt="image_not_found">
                                    <a class="play_btn_1 pxy_center" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                                        <span><i class="fas fa-play"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item_content">
                            <ul class="hotproduct_tab ul_li_right nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#hottab_1">
                                        <img src="assets/images/shop/furniture_store/img_26.png" alt="image_not_found">
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#hottab_2">
                                        <img src="assets/images/shop/furniture_store/img_24.png" alt="image_not_found">
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#hottab_3">
                                        <img src="assets/images/shop/furniture_store/img_25.png" alt="image_not_found">
                                    </a>
                                </li>
                            </ul>
                            <div class="title_wrap">
                                <h3 class="item_title">
                                    <a href="#!">Grey Brown Chair</a>
                                </h3>
                                <span class="item_price">£150.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-5">
                    <div class="small_products_wrap">
                        <h3 class="title_text text-uppercase">You may also like</h3>
                        <div class="furniture_small_products">
                            <a class="item_image" href="#!">
                                <img src="assets/images/shop/furniture_store/img_21.png" alt="image_not_found">
                            </a>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!">Grey Brown Chair</a>
                                </h3>
                                <span class="item_price">£150.00</span>
                            </div>
                        </div>

                        <div class="furniture_small_products">
                            <a class="item_image" href="#!">
                                <img src="assets/images/shop/furniture_store/img_22.png" alt="image_not_found">
                            </a>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!">Grey Brown Chair</a>
                                </h3>
                                <span class="item_price">£150.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_section - end
    ================================================== -->


</main>
@endsection

@section('footer')
    @include('home.furniture.furniture_Footer')
@endsection