@extends('layout.master')

@section('title')
<title>Carparts Shop Page - Current Tech</title>
@endsection

@section('body_class', 'home_carparts')

@section('navbar')
    @include('home.carParts.carParts_Navbar')
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
    <div class="breadcrumb_section carparts_breadcrumb text-white text-center text-uppercase d-flex align-items-end clearfix" data-background="assets/images/breadcrumb/bg_02.jpg">
        <div class="container">
            <ul class="breadcrumb_nav ul_li_center clearfix">
                <li><a href="#!">Home</a></li>
                <li>Shop</li>
                <li>Car Parts</li>
                <li>Car Parts Shop</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb_section - end
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


    <div class="container">
        <hr class="m-0">
    </div>


    <!-- product_section - start
    ================================================== -->
    <section class="product_section sec_ptb_100 clearfix">
        <div class="container">
            <div class="carparts_filetr_bar clearfix">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <ul class="carparts_layout_btns nav ul_li" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#grid_layout"><i class="fas fa-th"></i></a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#list_layout"><i class="fas fa-list"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <h4 class="result_text text-center">Showing 1 to 10 of 243 products</h4>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
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
                                        <a href="#!">Engine Oil</a>
                                    </h3>
                                    <span class="price_text"><strong>$339.90</strong> <del>$448.90</del></span>
                                </div>
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">New</li>
                                    <li class="bg_carparts_red">Sale</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="carparts_pagination_wrap clearfix">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <button type="button" class="custom_btn bg_carparts_red text-uppercase"><i class="fas fa-arrow-circle-down mr-2"></i> Load More</button>
                            </div>

                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <ul class="carparts_pagination_nav ul_li_right clearfix">
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
                </div>

                <div id="list_layout" class="tab-pane fade">
                    <div class="mb_50">
                        <div class="carparts_product_listlayout" data-bg-color="#f0eeee">
                            <div class="item_image" data-bg-color="#f8f8f8">
                                <img src="assets/images/shop/car_parts/img_01.png" alt="image_not_found">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">New</li>
                                    <li class="bg_carparts_red">Sale</li>
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
                                <h3 class="item_title text-uppercase">
                                    <a href="#!">earphone case</a>
                                </h3>
                                <p class="mb-0">
                                    Praesent quis vestibulum risus. Suspendisse non malesuada risus, ut venenatis nisi. Quisque aliquam justo in est tempor malesuada ac eu sem. 
                                </p>
                                <div class="action_btns_wrap">
                                    <span class="price_text"><strong>$19.90</strong> <del>$28.90</del></span>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="carparts_product_listlayout" data-bg-color="#f0eeee">
                            <div class="item_image" data-bg-color="#f8f8f8">
                                <img src="assets/images/shop/car_parts/img_02.png" alt="image_not_found">
                                <ul class="product_label ul_li text-uppercase clearfix">
                                    <li class="bg_carparts_red">New</li>
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
                                <h3 class="item_title text-uppercase">
                                    <a href="#!">earphone case</a>
                                </h3>
                                <p class="mb-0">
                                    Praesent quis vestibulum risus. Suspendisse non malesuada risus, ut venenatis nisi. Quisque aliquam justo in est tempor malesuada ac eu sem. 
                                </p>
                                <div class="action_btns_wrap">
                                    <span class="price_text"><strong>$29.90</strong> <del>$48.90</del></span>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="carparts_product_listlayout" data-bg-color="#f0eeee">
                            <div class="item_image" data-bg-color="#f8f8f8">
                                <img src="assets/images/shop/car_parts/img_03.png" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <ul class="rating_star ul_li clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                                <h3 class="item_title text-uppercase">
                                    <a href="#!">earphone case</a>
                                </h3>
                                <p class="mb-0">
                                    Praesent quis vestibulum risus. Suspendisse non malesuada risus, ut venenatis nisi. Quisque aliquam justo in est tempor malesuada ac eu sem. 
                                </p>
                                <div class="action_btns_wrap">
                                    <span class="price_text"><strong>$299.90</strong></span>
                                    <ul class="product_action_btns ul_li clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carparts_pagination_wrap clearfix">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <button type="button" class="custom_btn bg_carparts_red text-uppercase"><i class="fas fa-arrow-circle-down mr-2"></i> Load More</button>
                            </div>

                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <ul class="carparts_pagination_nav ul_li_right clearfix">
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
                </div>
            </div>
        </div>
    </section>
    <!-- product_section - end
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
    @include('home.carParts.carParts_Footer')
@endsection

