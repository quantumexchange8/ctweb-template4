@extends('layout.master')

@section('title')
<title>Electronic - Current Tech</title>
@endsection

@section('body_class', 'home_electronic bg-white')

@section('navbar')
    @include('home.electronic.electronic_Navbar')
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
    <div class="container maxw_1600">
        <div class="f2_breadcrumb_nav_wrap mt-0 sec_ptb_50">
            <ul class="ce_breadcrumb_nav ul_li clearfix">
                <li><a href="#!">Home</a></li>
                <li>Shop</li>
                <li>Electronic</li>
                <li>Shop Page</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb_section - end
    ================================================== -->


    <!-- trending_section - start
    ================================================== -->
    <section class="trending_section clearfix">
        <div class="container maxw_1600">
            <div class="row justify-content-lg-between">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="electronic_trending_carousel position-relative" data-bg-color="#131315">
                        <div class="slideshow1_slider" data-slick='{"dots": false}'>
                            <div class="item">
                                <div class="electronic_trending_item text-white">
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_37.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <span class="item_price"><strong>$165.00</strong> <del>$319.00</del></span>
                                        <h3 class="item_title text-white">Virtual Reality Headsets</h3>
                                        <p>
                                            Nullam dignissim elit ut urna rutrum, a fermentum mi auctor. Mauris efficitur magna orci, et dignissim lacus scelerisque sit amet. Proin malesuada
                                        </p>
                                        <a class="custom_btn btn_sm bg_electronic_blue" href="#!">Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="electronic_trending_item text-white">
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_37.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <span class="item_price"><strong>$165.00</strong> <del>$319.00</del></span>
                                        <h3 class="item_title text-white">Virtual Reality Headsets</h3>
                                        <p>
                                            Nullam dignissim elit ut urna rutrum, a fermentum mi auctor. Mauris efficitur magna orci, et dignissim lacus scelerisque sit amet. Proin malesuada
                                        </p>
                                        <a class="custom_btn btn_sm bg_electronic_blue" href="#!">Add To Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="electronic_trending_item text-white">
                                    <div class="item_image">
                                        <img src="assets/images/shop/electronic/img_37.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <span class="item_price"><strong>$165.00</strong> <del>$319.00</del></span>
                                        <h3 class="item_title text-white">Virtual Reality Headsets</h3>
                                        <p>
                                            Nullam dignissim elit ut urna rutrum, a fermentum mi auctor. Mauris efficitur magna orci, et dignissim lacus scelerisque sit amet. Proin malesuada
                                        </p>
                                        <a class="custom_btn btn_sm bg_electronic_blue" href="#!">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel_nav">
                            <button type="button" class="left_arrow"><i class="fal fa-angle-left"></i></button>
                            <button type="button" class="right_arrow"><i class="fal fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <ul class="trending_products_list ul_li clearfix">
                        <li>
                            <div class="etp_small_item text-center">
                                <a class="item_image" href="#!">
                                    <img src="assets/images/shop/electronic/img_38.png" alt="image_not_found">
                                </a>
                                <h4 class="item_title mb-0">Laptops</h4>
                            </div>
                        </li>
                        <li>
                            <div class="etp_small_item text-center">
                                <a class="item_image" href="#!">
                                    <img src="assets/images/shop/electronic/img_39.png" alt="image_not_found">
                                </a>
                                <h4 class="item_title mb-0">Dekstop PCs</h4>
                            </div>
                        </li>
                        <li>
                            <div class="etp_small_item text-center">
                                <a class="item_image" href="#!">
                                    <img src="assets/images/shop/electronic/img_40.png" alt="image_not_found">
                                </a>
                                <h4 class="item_title mb-0">Ultrabooks</h4>
                            </div>
                        </li>
                        <li>
                            <div class="etp_small_item text-center">
                                <a class="item_image" href="#!">
                                    <img src="assets/images/shop/electronic/img_41.png" alt="image_not_found">
                                </a>
                                <h4 class="item_title mb-0">Mac Computers</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- trending_section - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section sec_ptb_100 clearfix">
        <div class="container maxw_1600">
            <div class="row justify-content-lg-between">

                <div class="col-lg-9 order-last">
                    <ul class="electronic_filter_bar ul_li mb_30">
                        <li>
                            <ul class="layout_btns nav ul_li clearfix" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#grid_layout"><i class="fas fa-th"></i></a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#list_layout"><i class="fas fa-bars"></i></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="product_show option_select">
                                <select>
                                    <option data-display="Show on page:">Select A Option</option>
                                    <option value="1" selected>Show on page: 18</option>
                                    <option value="2">Show on page: 20</option>
                                    <option value="3" disabled>Show on page: 22</option>
                                    <option value="4">Show on page: 24</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="shortby_select option_select">
                                <select>
                                    <option data-display="Select:">Select A Option</option>
                                    <option value="1" selected>Popularity</option>
                                    <option value="2">Popularity</option>
                                    <option value="3" disabled>Popularity</option>
                                    <option value="4">Popularity</option>
                                </select>
                            </div>
                        </li>
                        <li><p class="result_text mb-0 d-flex align-items-center"><span class="active_page">1</span> of 3 <a class="next_btn" href="#!"><i class="fal fa-long-arrow-right"></i></a></p></li>
                    </ul>

                    <div class="tab-content mb_50">
                        <div id="grid_layout" class="tab-pane active">
                            <ul class="electronic_product_columns ul_li has_4columns clearfix">
                                <li>
                                    <div class="electronic_product_item">
                                        <ul class="product_label ul_li clearfix">
                                            <li>-$30</li>
                                        </ul>
                                        <div class="item_image">
                                            <img src="assets/images/shop/electronic/img_02.png" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <span class="item_name">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">Wireless Audio System Multiroom 360</a>
                                            </h3>
                                            <span class="item_price">$685.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="electronic_product_item">
                                        <ul class="product_label ul_li clearfix">
                                            <li>-$30</li>
                                        </ul>
                                        <div class="item_image">
                                            <img src="assets/images/shop/electronic/img_03.png" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <span class="item_name">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">Wireless Audio System Multiroom 360</a>
                                            </h3>
                                            <span class="item_price">$685.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="electronic_product_item">
                                        <ul class="product_label ul_li clearfix">
                                            <li>-$30</li>
                                        </ul>
                                        <div class="item_image">
                                            <img src="assets/images/shop/electronic/img_04.png" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <span class="item_name">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">Wireless Audio System Multiroom 360</a>
                                            </h3>
                                            <span class="item_price">$685.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="electronic_product_item">
                                        <ul class="product_label ul_li clearfix">
                                            <li>-$30</li>
                                        </ul>
                                        <div class="item_image">
                                            <img src="assets/images/shop/electronic/img_05.png" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <span class="item_name">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">Wireless Audio System Multiroom 360</a>
                                            </h3>
                                            <span class="item_price">$685.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="electronic_product_item">
                                        <ul class="product_label ul_li clearfix">
                                            <li>-$30</li>
                                        </ul>
                                        <div class="item_image">
                                            <img src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <span class="item_name">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">Wireless Audio System Multiroom 360</a>
                                            </h3>
                                            <span class="item_price">$685.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="electronic_product_item">
                                        <ul class="product_label ul_li clearfix">
                                            <li>-$30</li>
                                        </ul>
                                        <div class="item_image">
                                            <img src="assets/images/shop/electronic/img_07.png" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <span class="item_name">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">Wireless Audio System Multiroom 360</a>
                                            </h3>
                                            <span class="item_price">$685.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="electronic_product_item">
                                        <ul class="product_label ul_li clearfix">
                                            <li>-$30</li>
                                        </ul>
                                        <div class="item_image">
                                            <img src="assets/images/shop/electronic/img_08.png" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <span class="item_name">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">Wireless Audio System Multiroom 360</a>
                                            </h3>
                                            <span class="item_price">$685.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="electronic_product_item">
                                        <ul class="product_label ul_li clearfix">
                                            <li>-$30</li>
                                        </ul>
                                        <div class="item_image">
                                            <img src="assets/images/shop/electronic/img_09.png" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <span class="item_name">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">Wireless Audio System Multiroom 360</a>
                                            </h3>
                                            <span class="item_price">$685.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="electronic_product_item">
                                        <ul class="product_label ul_li clearfix">
                                            <li>-$30</li>
                                        </ul>
                                        <div class="item_image">
                                            <img src="assets/images/shop/electronic/img_02.png" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <span class="item_name">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">Wireless Audio System Multiroom 360</a>
                                            </h3>
                                            <span class="item_price">$685.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="electronic_product_item">
                                        <ul class="product_label ul_li clearfix">
                                            <li>-$30</li>
                                        </ul>
                                        <div class="item_image">
                                            <img src="assets/images/shop/electronic/img_03.png" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <span class="item_name">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">Wireless Audio System Multiroom 360</a>
                                            </h3>
                                            <span class="item_price">$685.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="electronic_product_item">
                                        <ul class="product_label ul_li clearfix">
                                            <li>-$30</li>
                                        </ul>
                                        <div class="item_image">
                                            <img src="assets/images/shop/electronic/img_04.png" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <span class="item_name">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">Wireless Audio System Multiroom 360</a>
                                            </h3>
                                            <span class="item_price">$685.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="electronic_product_item">
                                        <ul class="product_label ul_li clearfix">
                                            <li>-$30</li>
                                        </ul>
                                        <div class="item_image">
                                            <img src="assets/images/shop/electronic/img_05.png" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <span class="item_name">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">Wireless Audio System Multiroom 360</a>
                                            </h3>
                                            <span class="item_price">$685.00</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div id="list_layout" class="tab-pane fade">
                            <ul class="electronic_product_columns ul_li has_4columns clearfix">
                                <li>
                                    <div class="electronic_product_item">
                                        <ul class="product_label ul_li clearfix">
                                            <li>-$30</li>
                                        </ul>
                                        <div class="item_image">
                                            <img src="assets/images/shop/electronic/img_02.png" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <span class="item_name">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">Wireless Audio System Multiroom 360</a>
                                            </h3>
                                            <span class="item_price">$685.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="electronic_product_item">
                                        <ul class="product_label ul_li clearfix">
                                            <li>-$30</li>
                                        </ul>
                                        <div class="item_image">
                                            <img src="assets/images/shop/electronic/img_03.png" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <span class="item_name">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">Wireless Audio System Multiroom 360</a>
                                            </h3>
                                            <span class="item_price">$685.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="electronic_product_item">
                                        <ul class="product_label ul_li clearfix">
                                            <li>-$30</li>
                                        </ul>
                                        <div class="item_image">
                                            <img src="assets/images/shop/electronic/img_04.png" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <span class="item_name">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">Wireless Audio System Multiroom 360</a>
                                            </h3>
                                            <span class="item_price">$685.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="electronic_product_item">
                                        <ul class="product_label ul_li clearfix">
                                            <li>-$30</li>
                                        </ul>
                                        <div class="item_image">
                                            <img src="assets/images/shop/electronic/img_05.png" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <span class="item_name">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">Wireless Audio System Multiroom 360</a>
                                            </h3>
                                            <span class="item_price">$685.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="electronic_product_item">
                                        <ul class="product_label ul_li clearfix">
                                            <li>-$30</li>
                                        </ul>
                                        <div class="item_image">
                                            <img src="assets/images/shop/electronic/img_06.png" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <span class="item_name">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">Wireless Audio System Multiroom 360</a>
                                            </h3>
                                            <span class="item_price">$685.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="electronic_product_item">
                                        <ul class="product_label ul_li clearfix">
                                            <li>-$30</li>
                                        </ul>
                                        <div class="item_image">
                                            <img src="assets/images/shop/electronic/img_07.png" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <span class="item_name">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">Wireless Audio System Multiroom 360</a>
                                            </h3>
                                            <span class="item_price">$685.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="electronic_product_item">
                                        <ul class="product_label ul_li clearfix">
                                            <li>-$30</li>
                                        </ul>
                                        <div class="item_image">
                                            <img src="assets/images/shop/electronic/img_08.png" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <span class="item_name">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">Wireless Audio System Multiroom 360</a>
                                            </h3>
                                            <span class="item_price">$685.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="electronic_product_item">
                                        <ul class="product_label ul_li clearfix">
                                            <li>-$30</li>
                                        </ul>
                                        <div class="item_image">
                                            <img src="assets/images/shop/electronic/img_09.png" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <span class="item_name">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">Wireless Audio System Multiroom 360</a>
                                            </h3>
                                            <span class="item_price">$685.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="electronic_product_item">
                                        <ul class="product_label ul_li clearfix">
                                            <li>-$30</li>
                                        </ul>
                                        <div class="item_image">
                                            <img src="assets/images/shop/electronic/img_02.png" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <span class="item_name">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">Wireless Audio System Multiroom 360</a>
                                            </h3>
                                            <span class="item_price">$685.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="electronic_product_item">
                                        <ul class="product_label ul_li clearfix">
                                            <li>-$30</li>
                                        </ul>
                                        <div class="item_image">
                                            <img src="assets/images/shop/electronic/img_03.png" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <span class="item_name">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">Wireless Audio System Multiroom 360</a>
                                            </h3>
                                            <span class="item_price">$685.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="electronic_product_item">
                                        <ul class="product_label ul_li clearfix">
                                            <li>-$30</li>
                                        </ul>
                                        <div class="item_image">
                                            <img src="assets/images/shop/electronic/img_04.png" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <span class="item_name">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">Wireless Audio System Multiroom 360</a>
                                            </h3>
                                            <span class="item_price">$685.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="electronic_product_item">
                                        <ul class="product_label ul_li clearfix">
                                            <li>-$30</li>
                                        </ul>
                                        <div class="item_image">
                                            <img src="assets/images/shop/electronic/img_05.png" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <span class="item_name">Speakers</span>
                                            <h3 class="item_title">
                                                <a href="#!">Wireless Audio System Multiroom 360</a>
                                            </h3>
                                            <span class="item_price">$685.00</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="abtn_wrap text-center mb_50">
                        <a href="#!" class="custom_btn btn_border border_electronic">Load more</a>
                    </div>

                    <div class="advertisement_image">
                        <a href="#!">
                            <img src="assets/images/offer/electronic/img_04.jpg" alt="image_not_found">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3">
                    <aside class="electronic_sidebar sidebar_section">
                        <div class="sb_widget sb_collapse_category">
                            <h3 class="sb_widget_title">All Categories</h3>
                            <div id="sb_category_accordion" class="sb_category_accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <a data-toggle="collapse" href="#collapse_one">
                                            Wearable Technology (84)
                                        </a>
                                    </div>
                                    <div id="collapse_one" class="collapse show" data-parent="#sb_category_accordion">
                                        <div class="card-body p-0">
                                            <ul class="ul_li_block clearfix">
                                                <li><a href="#!">Lights</a></li>
                                                <li><a href="#!">Raincoats</a></li>
                                                <li><a href="#!">Shorts</a></li>
                                                <li><a href="#!">Pants</a></li>
                                                <li><a href="#!">Shirts</a></li>
                                                <li><a href="#!">Tires</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed" data-toggle="collapse" href="#collapse_two">
                                            Android VR  (36)
                                        </a>
                                    </div>
                                    <div id="collapse_two" class="collapse" data-parent="#sb_category_accordion">
                                        <div class="card-body p-0">
                                            <ul class="ul_li_block clearfix">
                                                <li><a href="#!">Lights</a></li>
                                                <li><a href="#!">Raincoats</a></li>
                                                <li><a href="#!">Shorts</a></li>
                                                <li><a href="#!">Pants</a></li>
                                                <li><a href="#!">Shirts</a></li>
                                                <li><a href="#!">Tires</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed" data-toggle="collapse" href="#collapse_three">
                                            iOS VR (8)
                                        </a>
                                    </div>
                                    <div id="collapse_three" class="collapse" data-parent="#sb_category_accordion">
                                        <div class="card-body p-0">
                                            <ul class="ul_li_block clearfix">
                                                <li><a href="#!">Lights</a></li>
                                                <li><a href="#!">Raincoats</a></li>
                                                <li><a href="#!">Shorts</a></li>
                                                <li><a href="#!">Pants</a></li>
                                                <li><a href="#!">Shirts</a></li>
                                                <li><a href="#!">Tires</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed" data-toggle="collapse" href="#collapse_four">
                                            Video Consoles (18)
                                        </a>
                                    </div>
                                    <div id="collapse_four" class="collapse" data-parent="#sb_category_accordion">
                                        <div class="card-body p-0">
                                            <ul class="ul_li_block clearfix">
                                                <li><a href="#!">Lights</a></li>
                                                <li><a href="#!">Raincoats</a></li>
                                                <li><a href="#!">Shorts</a></li>
                                                <li><a href="#!">Pants</a></li>
                                                <li><a href="#!">Shirts</a></li>
                                                <li><a href="#!">Tires</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed" data-toggle="collapse" href="#collapse_five">
                                            Accesories (31)
                                        </a>
                                    </div>
                                    <div id="collapse_five" class="collapse" data-parent="#sb_category_accordion">
                                        <div class="card-body p-0">
                                            <ul class="ul_li_block clearfix">
                                                <li><a href="#!">Lights</a></li>
                                                <li><a href="#!">Raincoats</a></li>
                                                <li><a href="#!">Shorts</a></li>
                                                <li><a href="#!">Pants</a></li>
                                                <li><a href="#!">Shirts</a></li>
                                                <li><a href="#!">Tires</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sb_widget sb_pricing_range">
                            <h3 class="sb_widget_title text-uppercase">Filters</h3>
                            <form action="#">
                                <div class="price-range-area clearfix">
                                    <div id="slider-range" class="slider-range"></div>
                                    <div class="price-text d-flex align-items-center">
                                        <span>Price:</span>
                                        <input type="text" id="amount" readonly>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="sb_widget sb_color_checkbox">
                            <h3 class="sb_widget_title text-uppercase">Brands</h3>
                            <form action="#">
                                <ul class="ul_li_block clearfix">
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="oculus_rift_checkbox" type="checkbox" checked>
                                            <label for="oculus_rift_checkbox">Oculus Rift</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="huawei_checkbox" type="checkbox">
                                            <label for="huawei_checkbox">Huawei</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="htc_checkbox" type="checkbox">
                                            <label for="htc_checkbox">HTC</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="samsung_checkbox" type="checkbox">
                                            <label for="samsung_checkbox">Samsung</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="envato_checkbox" type="checkbox">
                                            <label for="envato_checkbox">Envato</label>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </div>

                        <div class="sb_widget sb_color_checkbox">
                            <h3 class="sb_widget_title text-uppercase">Color</h3>
                            <form action="#">
                                <ul class="ul_li_block clearfix">
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="black_color_checkbox" type="checkbox" checked>
                                            <label for="black_color_checkbox">Black</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="white_color_checkbox" type="checkbox">
                                            <label for="white_color_checkbox">White</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="blue_color_checkbox" type="checkbox">
                                            <label for="blue_color_checkbox">Blue</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="green_color_checkbox" type="checkbox">
                                            <label for="green_color_checkbox">Green</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="yellow_color_checkbox" type="checkbox">
                                            <label for="yellow_color_checkbox">Yellow</label>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </aside>
                </div>

            </div>
        </div>
    </section>
    <!-- product_section - end
    ================================================== -->


</main>
@endsection

@section('footer')
    @include('home.electronic.electronic_Footer')
@endsection

