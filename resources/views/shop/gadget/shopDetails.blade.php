@extends('layout.master')

@section('title')
<title>Gadget Shop - Current Tech</title>
@endsection

@section('body_class', 'home_gadget')

@section('navbar')
    @include('home.gadget.gadget_Navbar')
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
    <section class="breadcrumb_section gadget_breadcrumb d-flex align-items-end text-center clearfix" data-background="assets/images/breadcrumb/bg_06.jpg">
        <div class="container">
            <h1 class="g_page_title text-uppercase text-white">Product Detail page</h1>
            <ul class="g_breadcrumb_nav ul_li_center text-white text-uppercase clearfix">
                <li><a href="#!">Home</a></li>
                <li>Shop</li>
                <li>Gadget</li>
                <li>Shop Details</li>
            </ul>
        </div>
    </section>
    <!-- breadcrumb_section - end
    ================================================== -->


    <!-- gadget_details_section - start
    ================================================== -->
    <section class="gadget_details_section sec_ptb_140 clearfix">
        <div class="container maxw_1600">
            <div class="row mb_100 justify-content-lg-between">
                <div class="col-lg-7">
                    <div class="shop_details_image">
                        <div class="tab-content mb_50">
                            <div id="tab_1" class="tab-pane position-relative active">
                                <img src="assets/images/details/gadget/img_01.png" alt="image_not_found">
                                <button type="button" class="scale_btn"><i class="fal fa-search"></i></button>
                            </div>
                            <div id="tab_2" class="tab-pane position-relative fade">
                                <img src="assets/images/details/gadget/img_01.png" alt="image_not_found">
                                <button type="button" class="scale_btn"><i class="fal fa-search"></i></button>
                            </div>
                            <div id="tab_3" class="tab-pane position-relative fade">
                                <img src="assets/images/details/gadget/img_01.png" alt="image_not_found">
                                <button type="button" class="scale_btn"><i class="fal fa-search"></i></button>
                            </div>
                            <div id="tab_4" class="tab-pane position-relative fade">
                                <img src="assets/images/details/gadget/img_01.png" alt="image_not_found">
                                <button type="button" class="scale_btn"><i class="fal fa-search"></i></button>
                            </div>
                        </div>

                        <ul class="nav ul_li_center clearfix" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#tab_1">
                                    <img src="assets/images/details/gadget/img_02.png" alt="image_not_found">
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab_2">
                                    <img src="assets/images/details/gadget/img_03.png" alt="image_not_found">
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab_3">
                                    <img src="assets/images/details/gadget/img_04.png" alt="image_not_found">
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab_4">
                                    <img src="assets/images/details/gadget/img_05.png" alt="image_not_found">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="shop_details_content">
                        <div class="price_wrap mb_15 d-flex align-items-center justify-content-lg-between">
                            <span class="item_price" data-text-color="#ff0000">$20.00</span>
                            <span class="sold_tile" data-text-color="#ff0000">8 SOLD - <small>in last 16 hours</small></span>
                        </div>
                        <h2 class="item_title text-uppercase">Able to shoot true 4K video HD slow motion</h2>
                        <ul class="rating_star ul_li mb_15">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <p class="mb_30">
                            Want to experience the mind-blowing feeling of being on a beautiful beach, with its fresh air and sunny weather? Apply just a small amount of Acqua Di Gio and be immediately transferred to the serene environment. The aquatic yet pleasurably sweet feeling.
                        </p>
                        <h4 class="instuck_text mb_30"><span data-text-color="#ff0000">PLEASE HURRY,</span> ONLY 120 In Stock</h4>

                        <ul class="gadget_product_info ul_li_block mb_50">
                            <li><span>Weight</span> <small>900G</small></li>
                            <li><span>SN</span> <small>DRN22</small></li>
                            <li><span>Camera</span> <small>With Camera</small></li>
                            <li><span>Brand</span> <small>Drone Tech</small></li>
                            <li><span>Product Type</span> <small>Fixed wing Tech Camera</small></li>
                        </ul>

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
                                <a class="custom_btn btn_round bg_gadget_red text-uppercase" href="#!"><i class="fal fa-shopping-bag mr-2"></i> Add To Cart</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="gadget_product_description deco_wrap clearfix">
            <div class="container maxw_1460 position-relative">
                <div class="gadget_section_title text-center text-uppercase mb_50">
                    <h4 class="sub_title mb_15"><span class="line bg_gadget_red"></span> Revos Drones <span class="line bg_gadget_red"></span></h4>
                    <h2 class="title_text mb-0">Product Description</h2>
                </div>

                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6">
                        <div class="item_image">
                            <img src="assets/images/details/gadget/img_06.png" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="item_content">
                            <p class="mb_30">
                                We develop the relationships that underpin the next phase in your organisation’s growth. We do this by discerning the people and that platforms where interests converge.We develop the relationships that underpin the next phase in your organisation’s growth. We do this by discerning the people and that platforms where interests converge.We develop the relationships that underpin the next phase in your organisation’s growth. We do this by discerning the people and that platforms where interests converge.
                            </p>
                            <div class="info_video_wrap d-lg-flex d-md-flex align-items-center">
                                <div class="video_wrap position-relative">
                                    <img src="assets/images/details/gadget/img_08.jpg" alt="image_not_found">
                                    <a class="play_btn" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fas fa-play"></i></a>
                                </div>
                                <ul class="ul_li_block text-uppercase clearfix">
                                    <li><i class="fas fa-check-circle mr-1"></i> AERIAL PHOTOGRAPHY</li>
                                    <li><i class="fas fa-check-circle mr-1"></i> RESOLUTION</li>
                                    <li><i class="fas fa-check-circle mr-1"></i> PROPELLERS</li>
                                    <li><i class="fas fa-check-circle mr-1"></i> POWERFUL & PORTABLE</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="deco_image deco_image_1">
                    <img src="assets/images/details/gadget/img_07.png" alt="image_not_found">
                </div>
            </div>

            <div class="deco_image deco_image_2">
                <img src="assets/images/shop/gadget/img_06.png" alt="image_not_found">
            </div>
        </div>
    </section>
    <!-- gadget_details_section - end
    ================================================== -->


    <!-- gadget_big_feature - start
    ================================================== -->
    <div class="container maxw_1460">
        <section class="gadget_big_feature sec_ptb_140 has_overlay parallaxie clearfix" data-background="assets/images/backgrounds/bg_28.jpg">
            <div class="overlay" data-bg-color="rgba(218, 52, 52, 0.8)"></div>
            <div class="item_content text-center">
                <a class="play_btn_1 mb_30" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                    <span><i class="fas fa-play"></i></span>
                </a>
                <h2 class="text-white">Provides high-quality Drones</h2>
                <a class="custom_btn btn_round bg_black text-uppercase" href="#!">View More</a>
            </div>
        </section>
    </div>
    <!-- gadget_big_feature - end
    ================================================== -->


    <!-- gadget_offer_section - start
    ================================================== -->
    <section class="gadget_offer_section clearfix">
        <div class="container maxw_1460">
            <div class="gadget_big_offer sec_ptb_140">
                <div class="row align-items-end justify-content-lg-between">
                    <div class="col-lg-7">
                        <div class="item_image">
                            <img src="assets/images/shop/gadget/img_10.png" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="item_content">
                            <h3 class="item_title">
                                Able to shoot true 4K video and Full HD slow motion
                            </h3>
                            <p class="mb_30">
                                We develop the relationships that underpin the next phase in your organisation’s growth. We do this by discerning the 
                            </p>
                            <a class="custom_btn btn_round bg_gadget_red text-uppercase" href="#!">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gadget_offer_section - end
    ================================================== -->


    <!-- gadget_feature_section - start
    ================================================== -->
    <section class="gadget_feature_section sec_ptb_140 has_overlay parallaxie clearfix" data-background="assets/images/backgrounds/bg_27.jpg">
        <div class="overlay" data-bg-color="rgba(26, 26, 26, 0.8)"></div>
        <div class="container">

            <div class="gadget_section_title text-center text-uppercase mb_50">
                <h4 class="sub_title mb_15 text-white"><span class="line bg_gadget_red"></span> Best Products <span class="line bg_gadget_red"></span></h4>
                <h2 class="title_text mb-0 text-white">Drone Features</h2>
            </div>

            <div class="gadget_feature_carousel arrow_ycenter">
                <div class="slideshow3_slider row mb_50" data-slick='{"dots": false}'>
                    <div class="item col">
                        <div class="gadget_feature_card" data-bg-color="#ffffff">
                            <div class="item_image">
                                <img src="assets/images/shop/gadget/img_07.png" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="item_price">$190</h4>
                                <h3 class="item_title text-uppercase mb_15">
                                    <a href="#!">Drone Features</a>
                                </h3>
                                <ul class="action_btns ul_li clearfix">
                                    <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li><a href="#!"><i class="fal fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="gadget_feature_card" data-bg-color="#ffffff">
                            <div class="item_image">
                                <img src="assets/images/shop/gadget/img_08.png" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="item_price">$190</h4>
                                <h3 class="item_title text-uppercase mb_15">
                                    <a href="#!">Drone Features</a>
                                </h3>
                                <ul class="action_btns ul_li clearfix">
                                    <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li><a href="#!"><i class="fal fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="gadget_feature_card" data-bg-color="#ffffff">
                            <div class="item_image">
                                <img src="assets/images/shop/gadget/img_09.png" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="item_price">$190</h4>
                                <h3 class="item_title text-uppercase mb_15">
                                    <a href="#!">Drone Features</a>
                                </h3>
                                <ul class="action_btns ul_li clearfix">
                                    <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li><a href="#!"><i class="fal fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="gadget_feature_card" data-bg-color="#ffffff">
                            <div class="item_image">
                                <img src="assets/images/shop/gadget/img_07.png" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="item_price">$190</h4>
                                <h3 class="item_title text-uppercase mb_15">
                                    <a href="#!">Drone Features</a>
                                </h3>
                                <ul class="action_btns ul_li clearfix">
                                    <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li><a href="#!"><i class="fal fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="gadget_feature_card" data-bg-color="#ffffff">
                            <div class="item_image">
                                <img src="assets/images/shop/gadget/img_08.png" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="item_price">$190</h4>
                                <h3 class="item_title text-uppercase mb_15">
                                    <a href="#!">Drone Features</a>
                                </h3>
                                <ul class="action_btns ul_li clearfix">
                                    <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li><a href="#!"><i class="fal fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="item col">
                        <div class="gadget_feature_card" data-bg-color="#ffffff">
                            <div class="item_image">
                                <img src="assets/images/shop/gadget/img_09.png" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="item_price">$190</h4>
                                <h3 class="item_title text-uppercase mb_15">
                                    <a href="#!">Drone Features</a>
                                </h3>
                                <ul class="action_btns ul_li clearfix">
                                    <li><a href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li><a href="#!"><i class="fal fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel_nav">
                    <button type="button" class="ss3_left_arrow"><i class="fal fa-angle-left"></i></button>
                    <button type="button" class="ss3_right_arrow"><i class="fal fa-angle-right"></i></button>
                </div>
            </div>

            <div class="abtn_wrap text-center">
                <a class="custom_btn btn_round bg_gadget_red text-uppercase" href="#!">View More</a>
            </div>
            
        </div>
    </section>
    <!-- gadget_feature_section - end
    ================================================== -->


    <!-- barnd_section - start
    ================================================== -->
    <div class="barnd_section sec_ptb_50 clearfix">
        <div class="container">
            <div class="barnd_carousel clearfix">
                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_43.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_44.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_45.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_46.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_47.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_43.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_44.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_45.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_46.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_47.png" alt="image_not_found">
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
    @include('home.gadget.gadget_Footer')
@endsection

