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


    <!-- breadcrumb_section - start
    ================================================== -->
    <section class="breadcrumb_section classic_ecommerce_breadcrumb d-flex align-items-end clearfix" data-background="assets/images/breadcrumb/bg_03.jpg">
        <div class="container">
            <p class="mb_15">Fresh looks for summer</p>
            <h1 class="ce_page_title mb_30">New Arrivals</h1>
            <a class="custom_btn bg_white text-uppercase" href="#!">Collection</a>
        </div>
    </section>
    <div class="container">
        <div class="ce_breadcrumb_nav_wrap">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <ul class="ce_breadcrumb_nav ul_li clearfix">
                        <li><a href="/home"><i class="fas fa-home"></i></a></li>
                        <li>Shop</li>
                        <li>Classic Ecommerce</li>
                        <li>Shop Details</li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <a class="goback_btn float-lg-right" href="#!"><i class="fal fa-long-arrow-left mr-2"></i> Return to previous page</a>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb_section - end
    ================================================== -->


    <!-- details_section - start
    ================================================== -->
    <section class="details_section shop_details sec_ptb_140 clearfix">
        <div class="container">
            <div class="row mb_100 justify-content-lg-between">
                <div class="col-lg-5 col-md-5">
                    <div class="shop_details_image">
                        <div class="tab-content">
                            <div id="tab_1" class="tab-pane active">
                                <img src="assets/images/details/shop/img_01.jpg" alt="image_not_found">
                            </div>
                            <div id="tab_2" class="tab-pane fade">
                                <img src="assets/images/details/shop/img_01.jpg" alt="image_not_found">
                            </div>
                            <div id="tab_3" class="tab-pane fade">
                                <img src="assets/images/details/shop/img_01.jpg" alt="image_not_found">
                            </div>
                            <div id="tab_4" class="tab-pane fade">
                                <img src="assets/images/details/shop/img_01.jpg" alt="image_not_found">
                            </div>
                        </div>

                        <ul class="nav ul_li clearfix" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#tab_1">
                                    <img src="assets/images/details/shop/img_02.jpg" alt="image_not_found">
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab_2">
                                    <img src="assets/images/details/shop/img_03.jpg" alt="image_not_found">
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab_3">
                                    <img src="assets/images/details/shop/img_04.jpg" alt="image_not_found">
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab_4">
                                    <img src="assets/images/details/shop/img_05.jpg" alt="image_not_found">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-7 col-md-7">
                    <div class="shop_details_content">
                        <h2 class="item_title">Beautifully Design Dress</h2>
                        <span class="item_price">$30.00 – $40.00</span>
                        <hr>
                        <div class="row mb_30 align-items-center justify-content-lg-between">
                            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                <div class="item_brand d-flex align-items-center">
                                    <span class="brand_title">Brands:</span>
                                    <span class="brand_image d-flex align-items-center justify-content-center" data-bg-color="#f7f7f7">
                                        <img src="assets/images/product_brands/img_01.png" alt="image_not_found">
                                    </span>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                                <div class="rating_review_wrap d-flex align-items-center clearfix">
                                    <ul class="rating_star ul_li">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <span>4 Review(s)</span>
                                    <button type="button" class="add_review_btn">Add Your Review</button>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo
                        </p>
                        <hr>
                        <div class="item_color_list mb_30 clearfix">
                            <h4 class="list_title mb_15 text-uppercase">Color</h4>
                            <ul class="ul_li clearfix">
                                <li>
                                    <button type="button"><span><small data-bg-color="#cc7b4a"></small></span> Brown</button>
                                </li>
                                <li>
                                    <button type="button"><span><small data-bg-color="#b6b8ba"></small></span> Grey</button>
                                </li>
                                <li>
                                    <button type="button"><span><small data-bg-color="#dd3333"></small></span> Red</button>
                                </li>
                            </ul>
                        </div>
                        <div class="item_size_list mb_30 clearfix">
                            <h4 class="list_title mb_15 text-uppercase">Size</h4>
                            <ul class="ul_li clearfix">
                                <li><button type="button">XL</button></li>
                                <li><button type="button">L</button></li>
                                <li><button type="button">M</button></li>
                                <li><button type="button">SM</button></li>
                                <li><a class="size_guide" href="#!"><i class="far fa-tape mr-1"></i> Size Guide</a></li>
                            </ul>
                        </div>

                        <ul class="btns_group_1 ul_li mb_30 clearfix">
                            <li>
                                <div class="quantity_input">
                                    <form action="#">
                                        <span class="input_number_decrement">–</span>
                                        <input class="input_number" type="text" value="1">
                                        <span class="input_number_increment">+</span>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <a class="custom_btn bg_black text-uppercase" href="#!"><i class="fal fa-shopping-bag mr-2"></i> Add To Cart</a>
                            </li>
                        </ul>

                        <ul class="btns_group_2 ul_li clearfix">
                            <li><a href="#!"><span><i class="far fa-heart"></i></span> Add to Wishlist</a></li>
                            <li><a href="#!"><span><i class="fal fa-repeat"></i></span> Compare</a></li>
                        </ul>

                        <hr>

                        <ul class="product_info ul_li_block clearfix">
                            <li><strong>SKU:</strong> U2012</li>
                            <li><strong>Categories:</strong> <a href="#!">Dress</a> <a href="#!">Handbag</a> <a href="#!">T-Shirts</a></li>
                            <li><strong>Tags:</strong> <a href="#!">Hot</a> <a href="#!">Women</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="details_description_tab mb_100">
                <ul class="nav ul_li text-uppercase" role="tablist">
                    <li>
                        <a class="active" data-toggle="tab" href="#description_tab">Product Description</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#reviews_tab">Reviews</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#information_tab">Additional Information</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="description_tab" class="tab-pane active">
                        <div class="row mb_50">
                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                <div class="image_wrap">
                                    <img src="assets/images/details/shop/img_06.jpg" alt="image_not_found">
                                </div>
                            </div>

                            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                <div class="content_wrap">
                                    <p class="mb_30">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                    </p>

                                    <h4 class="list_title">Pretium turpis et arcu</h4>
                                    <p class="mb_30">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                    </p>

                                    <h4 class="list_title">Unordered list</h4>
                                    <p class="mb_30">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>

                                    <ul class="product_info ul_li_block clearfix">
                                        <li><strong>Color:</strong> Brown, Grey, Nude, Red</li>
                                        <li><strong>Size:</strong> L, M, S, XL, XS</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row mb_50">
                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 order-last">
                                <div class="image_wrap">
                                    <img src="assets/images/details/shop/img_07.jpg" alt="image_not_found">
                                </div>
                            </div>

                            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                <div class="content_wrap">
                                    <h4 class="list_title">Paragraph text</h4>
                                    <p class="mb_15">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                    </p>
                                    <p class="mb_30">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                    </p>

                                    <h4 class="list_title">Pretium turpis et arcu</h4>
                                    <p class="mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                    </p>
                                </div>
                            </div>
                        </div>

                        <span class="aware_info_icons">
                            <img src="assets/images/icons/aware_icons.png" alt="image_not_found">
                        </span>
                    </div>

                    <div id="reviews_tab" class="tab-pane fade">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form_item">
                                        <input type="text" name="name" placeholder="Your Name">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form_item">
                                        <input type="email" name="email" placeholder="Your Email">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form_item">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                            </div>

                            <div class="form_item">
                                <textarea name="message" placeholder="Your Message"></textarea>
                            </div>
                            <button type="submit" class="custom_btn bg_default_red text-uppercase">Submit Review</button>
                        </form>
                    </div>

                    <div id="information_tab" class="tab-pane fade">
                        <div class="row mb_50">
                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                <div class="image_wrap">
                                    <img src="assets/images/details/shop/img_06.jpg" alt="image_not_found">
                                </div>
                            </div>

                            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                <div class="content_wrap">
                                    <p class="mb_30">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                    </p>

                                    <h4 class="list_title">Pretium turpis et arcu</h4>
                                    <p class="mb_30">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                    </p>

                                    <h4 class="list_title">Unordered list</h4>
                                    <p class="mb_30">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>

                                    <ul class="product_info ul_li_block clearfix">
                                        <li><strong>Color:</strong> Brown, Grey, Nude, Red</li>
                                        <li><strong>Size:</strong> L, M, S, XL, XS</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row mb_50">
                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 order-last">
                                <div class="image_wrap">
                                    <img src="assets/images/details/shop/img_07.jpg" alt="image_not_found">
                                </div>
                            </div>

                            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                <div class="content_wrap">
                                    <h4 class="list_title">Paragraph text</h4>
                                    <p class="mb_15">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                    </p>
                                    <p class="mb_30">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                    </p>

                                    <h4 class="list_title">Pretium turpis et arcu</h4>
                                    <p class="mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                    </p>
                                </div>
                            </div>
                        </div>

                        <span class="aware_info_icons">
                            <img src="assets/images/icons/aware_icons.png" alt="image_not_found">
                        </span>
                    </div>
                </div>
            </div>

            <hr class="mt-0 mb_100">

            <div class="popular_products arrow_ycenter mt__30">
                <div class="slideshow4_slider row" data-slick='{"dots": false}'>
                    <div class="col item">
                        <div class="ecommerce_product_grid">
                            <ul class="product_label ul_li clearfix">
                                <li class="bg_leafgreen">New</li>
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

                    <div class="col item">
                        <div class="ecommerce_product_grid">
                            <ul class="product_label ul_li clearfix">
                                <li class="bg_leafgreen">New</li>
                            </ul>
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

                    <div class="col item">
                        <div class="ecommerce_product_grid">
                            <ul class="product_label ul_li clearfix">
                                <li class="bg_leafgreen">New</li>
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

                    <div class="col item">
                        <div class="ecommerce_product_grid">
                            <ul class="product_label ul_li clearfix">
                                <li class="bg_leafgreen">New</li>
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

                    <div class="col item">
                        <div class="ecommerce_product_grid">
                            <ul class="product_label ul_li clearfix">
                                <li class="bg_leafgreen">New</li>
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

                    <div class="col item">
                        <div class="ecommerce_product_grid">
                            <ul class="product_label ul_li clearfix">
                                <li class="bg_leafgreen">New</li>
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

                    <div class="col item">
                        <div class="ecommerce_product_grid">
                            <ul class="product_label ul_li clearfix">
                                <li class="bg_leafgreen">New</li>
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

                    <div class="col item">
                        <div class="ecommerce_product_grid">
                            <ul class="product_label ul_li clearfix">
                                <li class="bg_leafgreen">New</li>
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
                </div>
                <div class="carousel_nav">
                    <button type="button" class="ss4_left_arrow"><i class="fal fa-angle-left"></i></button>
                    <button type="button" class="ss4_right_arrow"><i class="fal fa-angle-right"></i></button>
                </div>
            </div>
        </div>
    </section>
    <!-- details_section - end
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


</main>
@endsection

@section('footer')
    @include('home.classicEcommerce.classic_Footer')
@endsection

