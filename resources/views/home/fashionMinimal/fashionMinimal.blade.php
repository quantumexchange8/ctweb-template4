@extends('layout.master')

@section('title')
<title>Fashion Minimal - Current Tech</title>
@endsection

@section('body_class', 'home_fashion_minimal')

@section('navbar')
    @include('home.fashionMinimal.fashionMinimal_Navbar')
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


    <!-- banner_section - start
    ================================================== -->
    <section class="banner_section fashion_minimal_banner clearfix">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="fm_banner_item text-uppercase">
                        <img src="assets/images/banner/fashion_minimal/img_01.jpg" alt="image_not_found">
                        <div class="item_content">
                            <h4>New arrival</h4>
                            <h3>Women</h3>
                            <a class="custom_btn bg_fashion2_red" href="#!">Shop this look</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="fm_banner_item text-uppercase">
                        <img src="assets/images/banner/fashion_minimal/img_02.jpg" alt="image_not_found">
                        <div class="item_content">
                            <h4 class="text-white">New arrival</h4>
                            <h3 class="text-white">Men's</h3>
                            <a class="custom_btn bg_white" href="#!">Shop this look</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner_section - end
    ================================================== -->


    <!-- fashion_policy - start
    ================================================== -->
    <section class="fashion_policy sec_ptb_100 clearfix">
        <div class="container">
            <div class="row mt__50">

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="fashion_policy_item">
                        <div class="item_icon">
                            <img src="assets/images/policy/fashion/icon_01.png" alt="icon_not_found">
                        </div>
                        <div class="item_content">
                            <h3 class="text-uppercase">Free shipping</h3>
                            <p class="mb-0">On All Orders</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="fashion_policy_item">
                        <div class="item_icon">
                            <img src="assets/images/policy/fashion/icon_02.png" alt="icon_not_found">
                        </div>
                        <div class="item_content">
                            <h3 class="text-uppercase">100% Money Back</h3>
                            <p class="mb-0">Within 30 Days Guaranted</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="fashion_policy_item">
                        <div class="item_icon">
                            <img src="assets/images/policy/fashion/icon_03.png" alt="icon_not_found">
                        </div>
                        <div class="item_content">
                            <h3 class="text-uppercase">Secure payment</h3>
                            <p class="mb-0">100% Secure Payment</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="fashion_policy_item">
                        <div class="item_icon">
                            <img src="assets/images/policy/fashion/icon_04.png" alt="icon_not_found">
                        </div>
                        <div class="item_content">
                            <h3 class="text-uppercase">24/7 Live support</h3>
                            <p class="mb-0">Get help When Your Need</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- fashion_policy - end
    ================================================== -->


    <!-- offer_section - start
    ================================================== -->
    <section class="offer_section clearfix">
        <div class="container-fluid prl_100">
            <div class="row mt__30">
                <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                    <div class="fm_offer_item has_border">
                        <img src="assets/images/offer/fashion_minimal/img_01.jpg" alt="image_not_found">
                        <div class="item_content position_bottom">
                            <h3 class="item_title">Men‘s jacket</h3>
                            <span class="item_price">From $59.00</span>
                            <a class="custom_btn bg_white text-uppercase" href="#!">Shop This Look</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="fm_offer_item">
                        <img src="assets/images/offer/fashion_minimal/img_02.jpg" alt="image_not_found">
                        <div class="item_content position_top">
                            <h3 class="item_title">Men‘s jacket</h3>
                            <span class="item_price">From $59.00</span>
                        </div>
                    </div>

                    <div class="fm_offer_item">
                        <img src="assets/images/offer/fashion_minimal/img_03.jpg" alt="image_not_found">
                        <div class="item_content position_top">
                            <h3 class="item_title">Men‘s jacket</h3>
                            <span class="item_price">From $59.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- offer_section - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section sec_ptb_100 clearfix">
        <div class="container-fluid prl_100">

            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-5">
                    <div class="fm_section_title">
                        <h2 class="title_text">Great Selection</h2>
                        <p class="mb-0">popular trends and get exclusive items shop</p>
                    </div>
                </div>

                <div class="col-lg-7">
                    <ul class="fm_tabs_nav ul_li_right nav" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#new_arrival">New Arrival</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#best_sellers">Best Sellers</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#sale_products">Sale Products</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="tab-content mb_100">
                <div id="new_arrival" class="tab-pane active">
                    <div class="row justify-content-lg-between">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="fashion_minimal_product">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#fb5d5d">-20%</li>
                                    <li data-bg-color="#82ca9c">NEW</li>
                                </ul>
                                <div class="item_image">
                                    <a class="image_wrap" href="#!">
                                        <img src="assets/images/shop/fashion_minimal/img_01.jpg" alt="image_not_found">
                                    </a>
                                    <span class="coming_soon text-uppercase">Coming Soon</span>
                                    <a class="addto_wishlist tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a>
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        <li><a class="addtocart_btn text-uppercase" href="#!">Add To Cart</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                        <ul class="item_color ul_li clearfix">
                                            <li><a href="#!" data-bg-color="#739f7f"></a></li>
                                            <li><a href="#!" data-bg-color="#eede86"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="fashion_minimal_product">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#fb5d5d">-20%</li>
                                    <li data-bg-color="#82ca9c">NEW</li>
                                </ul>
                                <div class="item_image">
                                    <a class="image_wrap" href="#!">
                                        <img src="assets/images/shop/fashion_minimal/img_02.jpg" alt="image_not_found">
                                    </a>
                                    <a class="addto_wishlist tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a>
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        <li><a class="addtocart_btn text-uppercase" href="#!">Add To Cart</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                        <ul class="item_color ul_li clearfix">
                                            <li><a href="#!" data-bg-color="#739f7f"></a></li>
                                            <li><a href="#!" data-bg-color="#eede86"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="fashion_minimal_product">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#fb5d5d">-20%</li>
                                    <li data-bg-color="#82ca9c">NEW</li>
                                </ul>
                                <div class="item_image">
                                    <a class="image_wrap" href="#!">
                                        <img src="assets/images/shop/fashion_minimal/img_03.jpg" alt="image_not_found">
                                    </a>
                                    <a class="addto_wishlist tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a>
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        <li><a class="addtocart_btn text-uppercase" href="#!">Add To Cart</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                        <ul class="item_color ul_li clearfix">
                                            <li><a href="#!" data-bg-color="#739f7f"></a></li>
                                            <li><a href="#!" data-bg-color="#eede86"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="fashion_minimal_product">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#fb5d5d">-20%</li>
                                    <li data-bg-color="#82ca9c">NEW</li>
                                </ul>
                                <div class="item_image">
                                    <a class="image_wrap" href="#!">
                                        <img src="assets/images/shop/fashion_minimal/img_04.jpg" alt="image_not_found">
                                    </a>
                                    <a class="addto_wishlist tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a>
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        <li><a class="addtocart_btn text-uppercase" href="#!">Add To Cart</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                        <ul class="item_color ul_li clearfix">
                                            <li><a href="#!" data-bg-color="#739f7f"></a></li>
                                            <li><a href="#!" data-bg-color="#eede86"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="fashion_minimal_product">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#fb5d5d">-20%</li>
                                    <li data-bg-color="#82ca9c">NEW</li>
                                </ul>
                                <div class="item_image">
                                    <a class="image_wrap" href="#!">
                                        <img src="assets/images/shop/fashion_minimal/img_05.jpg" alt="image_not_found">
                                    </a>
                                    <a class="addto_wishlist tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a>
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        <li><a class="addtocart_btn text-uppercase" href="#!">Add To Cart</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                        <ul class="item_color ul_li clearfix">
                                            <li><a href="#!" data-bg-color="#739f7f"></a></li>
                                            <li><a href="#!" data-bg-color="#eede86"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="fashion_minimal_product">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#fb5d5d">-20%</li>
                                    <li data-bg-color="#82ca9c">NEW</li>
                                </ul>
                                <div class="item_image">
                                    <a class="image_wrap" href="#!">
                                        <img src="assets/images/shop/fashion_minimal/img_06.jpg" alt="image_not_found">
                                    </a>
                                    <a class="addto_wishlist tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a>
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        <li><a class="addtocart_btn text-uppercase" href="#!">Add To Cart</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                        <ul class="item_color ul_li clearfix">
                                            <li><a href="#!" data-bg-color="#739f7f"></a></li>
                                            <li><a href="#!" data-bg-color="#eede86"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="fashion_minimal_product">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#fb5d5d">-20%</li>
                                    <li data-bg-color="#82ca9c">NEW</li>
                                </ul>
                                <div class="item_image">
                                    <a class="image_wrap" href="#!">
                                        <img src="assets/images/shop/fashion_minimal/img_07.jpg" alt="image_not_found">
                                    </a>
                                    <a class="addto_wishlist tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a>
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        <li><a class="addtocart_btn text-uppercase" href="#!">Add To Cart</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                        <ul class="item_color ul_li clearfix">
                                            <li><a href="#!" data-bg-color="#739f7f"></a></li>
                                            <li><a href="#!" data-bg-color="#eede86"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="fashion_minimal_product">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#fb5d5d">-20%</li>
                                    <li data-bg-color="#82ca9c">NEW</li>
                                </ul>
                                <div class="item_image">
                                    <a class="image_wrap" href="#!">
                                        <img src="assets/images/shop/fashion_minimal/img_08.jpg" alt="image_not_found">
                                    </a>
                                    <a class="addto_wishlist tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a>
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        <li><a class="addtocart_btn text-uppercase" href="#!">Add To Cart</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                        <ul class="item_color ul_li clearfix">
                                            <li><a href="#!" data-bg-color="#739f7f"></a></li>
                                            <li><a href="#!" data-bg-color="#eede86"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="best_sellers" class="tab-pane fade">
                    <div class="row justify-content-lg-between">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="fashion_minimal_product">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#fb5d5d">-20%</li>
                                    <li data-bg-color="#82ca9c">NEW</li>
                                </ul>
                                <div class="item_image">
                                    <a class="image_wrap" href="#!">
                                        <img src="assets/images/shop/fashion_minimal/img_01.jpg" alt="image_not_found">
                                    </a>
                                    <span class="coming_soon text-uppercase">Coming Soon</span>
                                    <a class="addto_wishlist tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a>
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        <li><a class="addtocart_btn text-uppercase" href="#!">Add To Cart</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                        <ul class="item_color ul_li clearfix">
                                            <li><a href="#!" data-bg-color="#739f7f"></a></li>
                                            <li><a href="#!" data-bg-color="#eede86"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="fashion_minimal_product">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#fb5d5d">-20%</li>
                                    <li data-bg-color="#82ca9c">NEW</li>
                                </ul>
                                <div class="item_image">
                                    <a class="image_wrap" href="#!">
                                        <img src="assets/images/shop/fashion_minimal/img_02.jpg" alt="image_not_found">
                                    </a>
                                    <a class="addto_wishlist tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a>
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        <li><a class="addtocart_btn text-uppercase" href="#!">Add To Cart</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                        <ul class="item_color ul_li clearfix">
                                            <li><a href="#!" data-bg-color="#739f7f"></a></li>
                                            <li><a href="#!" data-bg-color="#eede86"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="fashion_minimal_product">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#fb5d5d">-20%</li>
                                    <li data-bg-color="#82ca9c">NEW</li>
                                </ul>
                                <div class="item_image">
                                    <a class="image_wrap" href="#!">
                                        <img src="assets/images/shop/fashion_minimal/img_03.jpg" alt="image_not_found">
                                    </a>
                                    <a class="addto_wishlist tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a>
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        <li><a class="addtocart_btn text-uppercase" href="#!">Add To Cart</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                        <ul class="item_color ul_li clearfix">
                                            <li><a href="#!" data-bg-color="#739f7f"></a></li>
                                            <li><a href="#!" data-bg-color="#eede86"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="fashion_minimal_product">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#fb5d5d">-20%</li>
                                    <li data-bg-color="#82ca9c">NEW</li>
                                </ul>
                                <div class="item_image">
                                    <a class="image_wrap" href="#!">
                                        <img src="assets/images/shop/fashion_minimal/img_04.jpg" alt="image_not_found">
                                    </a>
                                    <a class="addto_wishlist tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a>
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        <li><a class="addtocart_btn text-uppercase" href="#!">Add To Cart</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                        <ul class="item_color ul_li clearfix">
                                            <li><a href="#!" data-bg-color="#739f7f"></a></li>
                                            <li><a href="#!" data-bg-color="#eede86"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="fashion_minimal_product">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#fb5d5d">-20%</li>
                                    <li data-bg-color="#82ca9c">NEW</li>
                                </ul>
                                <div class="item_image">
                                    <a class="image_wrap" href="#!">
                                        <img src="assets/images/shop/fashion_minimal/img_05.jpg" alt="image_not_found">
                                    </a>
                                    <a class="addto_wishlist tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a>
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        <li><a class="addtocart_btn text-uppercase" href="#!">Add To Cart</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                        <ul class="item_color ul_li clearfix">
                                            <li><a href="#!" data-bg-color="#739f7f"></a></li>
                                            <li><a href="#!" data-bg-color="#eede86"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="fashion_minimal_product">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#fb5d5d">-20%</li>
                                    <li data-bg-color="#82ca9c">NEW</li>
                                </ul>
                                <div class="item_image">
                                    <a class="image_wrap" href="#!">
                                        <img src="assets/images/shop/fashion_minimal/img_06.jpg" alt="image_not_found">
                                    </a>
                                    <a class="addto_wishlist tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a>
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        <li><a class="addtocart_btn text-uppercase" href="#!">Add To Cart</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                        <ul class="item_color ul_li clearfix">
                                            <li><a href="#!" data-bg-color="#739f7f"></a></li>
                                            <li><a href="#!" data-bg-color="#eede86"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="fashion_minimal_product">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#fb5d5d">-20%</li>
                                    <li data-bg-color="#82ca9c">NEW</li>
                                </ul>
                                <div class="item_image">
                                    <a class="image_wrap" href="#!">
                                        <img src="assets/images/shop/fashion_minimal/img_07.jpg" alt="image_not_found">
                                    </a>
                                    <a class="addto_wishlist tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a>
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        <li><a class="addtocart_btn text-uppercase" href="#!">Add To Cart</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                        <ul class="item_color ul_li clearfix">
                                            <li><a href="#!" data-bg-color="#739f7f"></a></li>
                                            <li><a href="#!" data-bg-color="#eede86"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="fashion_minimal_product">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#fb5d5d">-20%</li>
                                    <li data-bg-color="#82ca9c">NEW</li>
                                </ul>
                                <div class="item_image">
                                    <a class="image_wrap" href="#!">
                                        <img src="assets/images/shop/fashion_minimal/img_08.jpg" alt="image_not_found">
                                    </a>
                                    <a class="addto_wishlist tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a>
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        <li><a class="addtocart_btn text-uppercase" href="#!">Add To Cart</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                        <ul class="item_color ul_li clearfix">
                                            <li><a href="#!" data-bg-color="#739f7f"></a></li>
                                            <li><a href="#!" data-bg-color="#eede86"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="sale_products" class="tab-pane fade">
                    <div class="row justify-content-lg-between">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="fashion_minimal_product">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#fb5d5d">-20%</li>
                                    <li data-bg-color="#82ca9c">NEW</li>
                                </ul>
                                <div class="item_image">
                                    <a class="image_wrap" href="#!">
                                        <img src="assets/images/shop/fashion_minimal/img_01.jpg" alt="image_not_found">
                                    </a>
                                    <span class="coming_soon text-uppercase">Coming Soon</span>
                                    <a class="addto_wishlist tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a>
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        <li><a class="addtocart_btn text-uppercase" href="#!">Add To Cart</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                        <ul class="item_color ul_li clearfix">
                                            <li><a href="#!" data-bg-color="#739f7f"></a></li>
                                            <li><a href="#!" data-bg-color="#eede86"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="fashion_minimal_product">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#fb5d5d">-20%</li>
                                    <li data-bg-color="#82ca9c">NEW</li>
                                </ul>
                                <div class="item_image">
                                    <a class="image_wrap" href="#!">
                                        <img src="assets/images/shop/fashion_minimal/img_02.jpg" alt="image_not_found">
                                    </a>
                                    <a class="addto_wishlist tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a>
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        <li><a class="addtocart_btn text-uppercase" href="#!">Add To Cart</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                        <ul class="item_color ul_li clearfix">
                                            <li><a href="#!" data-bg-color="#739f7f"></a></li>
                                            <li><a href="#!" data-bg-color="#eede86"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="fashion_minimal_product">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#fb5d5d">-20%</li>
                                    <li data-bg-color="#82ca9c">NEW</li>
                                </ul>
                                <div class="item_image">
                                    <a class="image_wrap" href="#!">
                                        <img src="assets/images/shop/fashion_minimal/img_03.jpg" alt="image_not_found">
                                    </a>
                                    <a class="addto_wishlist tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a>
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        <li><a class="addtocart_btn text-uppercase" href="#!">Add To Cart</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                        <ul class="item_color ul_li clearfix">
                                            <li><a href="#!" data-bg-color="#739f7f"></a></li>
                                            <li><a href="#!" data-bg-color="#eede86"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="fashion_minimal_product">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#fb5d5d">-20%</li>
                                    <li data-bg-color="#82ca9c">NEW</li>
                                </ul>
                                <div class="item_image">
                                    <a class="image_wrap" href="#!">
                                        <img src="assets/images/shop/fashion_minimal/img_04.jpg" alt="image_not_found">
                                    </a>
                                    <a class="addto_wishlist tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a>
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        <li><a class="addtocart_btn text-uppercase" href="#!">Add To Cart</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                        <ul class="item_color ul_li clearfix">
                                            <li><a href="#!" data-bg-color="#739f7f"></a></li>
                                            <li><a href="#!" data-bg-color="#eede86"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="fashion_minimal_product">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#fb5d5d">-20%</li>
                                    <li data-bg-color="#82ca9c">NEW</li>
                                </ul>
                                <div class="item_image">
                                    <a class="image_wrap" href="#!">
                                        <img src="assets/images/shop/fashion_minimal/img_05.jpg" alt="image_not_found">
                                    </a>
                                    <a class="addto_wishlist tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a>
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        <li><a class="addtocart_btn text-uppercase" href="#!">Add To Cart</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                        <ul class="item_color ul_li clearfix">
                                            <li><a href="#!" data-bg-color="#739f7f"></a></li>
                                            <li><a href="#!" data-bg-color="#eede86"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="fashion_minimal_product">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#fb5d5d">-20%</li>
                                    <li data-bg-color="#82ca9c">NEW</li>
                                </ul>
                                <div class="item_image">
                                    <a class="image_wrap" href="#!">
                                        <img src="assets/images/shop/fashion_minimal/img_06.jpg" alt="image_not_found">
                                    </a>
                                    <a class="addto_wishlist tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a>
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        <li><a class="addtocart_btn text-uppercase" href="#!">Add To Cart</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                        <ul class="item_color ul_li clearfix">
                                            <li><a href="#!" data-bg-color="#739f7f"></a></li>
                                            <li><a href="#!" data-bg-color="#eede86"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="fashion_minimal_product">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#fb5d5d">-20%</li>
                                    <li data-bg-color="#82ca9c">NEW</li>
                                </ul>
                                <div class="item_image">
                                    <a class="image_wrap" href="#!">
                                        <img src="assets/images/shop/fashion_minimal/img_07.jpg" alt="image_not_found">
                                    </a>
                                    <a class="addto_wishlist tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a>
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        <li><a class="addtocart_btn text-uppercase" href="#!">Add To Cart</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                        <ul class="item_color ul_li clearfix">
                                            <li><a href="#!" data-bg-color="#739f7f"></a></li>
                                            <li><a href="#!" data-bg-color="#eede86"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="fashion_minimal_product">
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#fb5d5d">-20%</li>
                                    <li data-bg-color="#82ca9c">NEW</li>
                                </ul>
                                <div class="item_image">
                                    <a class="image_wrap" href="#!">
                                        <img src="assets/images/shop/fashion_minimal/img_08.jpg" alt="image_not_found">
                                    </a>
                                    <a class="addto_wishlist tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a>
                                    <ul class="product_action_btns ul_li_center clearfix">
                                        <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                        <li><a class="addtocart_btn text-uppercase" href="#!">Add To Cart</a></li>
                                        <li><a class="tooltips" data-placement="top" title="Compare" href="#!"><i class="far fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                        <ul class="item_color ul_li clearfix">
                                            <li><a href="#!" data-bg-color="#739f7f"></a></li>
                                            <li><a href="#!" data-bg-color="#eede86"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="abtn_wrap text-center clearfix">
                <a class="custom_btn bg_gray text-uppercase" href="#!">Load More</a>
            </div>

        </div>
    </section>
    <!-- product_section - end
    ================================================== -->


    <!-- feature_section - start
    ================================================== -->
    <section class="feature_section clearfix">
        <div class="container-fluid prl_100">

            <div class="fm_feature_product clearfix">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 order-last">
                        <div class="item_image position-relative">
                            <div class="slideshow1_slider" data-slick='{"dots": false}'>
                                <div class="item">
                                    <img src="assets/images/feature/fashion_minimal/img_01.jpg" alt="image_not_found">
                                </div>
                                <div class="item">
                                    <img src="assets/images/feature/fashion_minimal/img_02.jpg" alt="image_not_found">
                                </div>
                            </div>
                            <div class="carousel_nav">
                                <button type="button" class="left_arrow"><i class="fal fa-angle-left"></i></button>
                                <button type="button" class="right_arrow"><i class="fal fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="item_content">
                            <h3 class="item_title">We Love Fashion</h3>
                            <p>
                                The template comes with Elementor – the most advanced frontend drag & drop WordPress page builder. Create high-end, pixel perfect websites at record speeds.
                            </p>
                            <a class="custom_btn bg_gray text-uppercase" href="#!">Shop this look</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fm_feature_product clearfix">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6">
                        <div class="item_image">
                            <img src="assets/images/feature/fashion_minimal/img_02.jpg" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="item_content">
                            <h3 class="item_title">We Love Fashion</h3>
                            <p>
                                The template comes with Elementor – the most advanced frontend drag & drop WordPress page builder. Create high-end, pixel perfect websites at record speeds.
                            </p>
                            <a class="custom_btn bg_gray text-uppercase" href="#!">Shop this look</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- feature_section - end
    ================================================== -->


    <!-- discount_section - start
    ================================================== -->
    <section class="discount_section sec_ptb_100 clearfix">
        <div class="container-fluid prl_100">

            <div class="fm_section_title text-center">
                <h2 class="title_text">Great Discount</h2>
                <p class="mb-0">Follow the most popular trends</p>
            </div>

            <div class="row justify-content-lg-between">
                <div class="col-lg-4 col-md-4 col-md-6 col-xs-12">
                    <div class="fm_discount_item text-center">
                        <div class="item_image">
                            <img src="assets/images/shop/fashion_minimal/img_09.jpg" alt="image_not_found">
                            <a class="custom_btn btn_sm bg_white text-uppercase" href="#!">Shop This Look</a>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">Suit Blazer</h3>
                            <span class="discount_text">Flat - 60%</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-md-6 col-xs-12">
                    <div class="fm_discount_item text-center">
                        <div class="item_image">
                            <img src="assets/images/shop/fashion_minimal/img_10.jpg" alt="image_not_found">
                            <a class="custom_btn btn_sm bg_white text-uppercase" href="#!">Shop This Look</a>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">Suit Blazer</h3>
                            <span class="discount_text">Flat - 60%</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-md-6 col-xs-12">
                    <div class="fm_discount_item text-center">
                        <div class="item_image">
                            <img src="assets/images/shop/fashion_minimal/img_11.jpg" alt="image_not_found">
                            <a class="custom_btn btn_sm bg_white text-uppercase" href="#!">Shop This Look</a>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">Suit Blazer</h3>
                            <span class="discount_text">Flat - 60%</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- discount_section - end
    ================================================== -->


    <!-- newsletter_section - start
    ================================================== -->
    <section class="newsletter_section clearfix" data-background="assets/images/backgrounds/bg_15.jpg">
        <div class="fm_newsletter sec_ptb_140 text-center clearfix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-8 col-sm-10 col-xs-12">
                        <form action="#">
                            <h2 class="title_text">Subscribe to our Newsletter</h2>
                            <p class="mb_50">Be the first to get the latest news about trends, promotions and much more!</p>

                            <div class="form_item mb-0">
                                <input type="email" name="email" placeholder="your email address">
                                <button type="submit">Subcribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter_section - end
    ================================================== -->


    <!-- blog_section - start
    ================================================== -->
    <section class="blog_section sec_ptb_100 pb-0 clearfix">
        <div class="container-fluid prl_100">

            <div class="fm_section_title text-center">
                <h2 class="title_text">Fashion News & Trips</h2>
                <p class="mb-0">Follow the most popular trends </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
                    <div class="fm_blog_grid">
                        <a class="item_image" href="#!">
                            <img src="assets/images/blog/fashion_minimal/img_01.jpg" alt="image_not_found">
                        </a>
                        <div class="item_content">
                            <h3 class="item_title">
                                <a href="#!">Fashion Inspired By Nature</a>
                            </h3>
                            <span class="post_date">11/13/2020</span>
                            <p class="mb_30">
                                Presents itself as a reference point for fashion targeting this increasingly Demanding public and, in just 2 years, hasconsolidated its brand 
                            </p>
                            <a class="custom_btn btn_sm bg_gray text-uppercase" href="#!">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
                    <div class="fm_blog_grid">
                        <a class="item_image" href="#!">
                            <img src="assets/images/blog/fashion_minimal/img_02.jpg" alt="image_not_found">
                        </a>
                        <div class="item_content">
                            <h3 class="item_title">
                                <a href="#!">Fashion Inspired By Nature</a>
                            </h3>
                            <span class="post_date">11/13/2020</span>
                            <p class="mb_30">
                                Presents itself as a reference point for fashion targeting this increasingly Demanding public and, in just 2 years, hasconsolidated its brand 
                            </p>
                            <a class="custom_btn btn_sm bg_gray text-uppercase" href="#!">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
                    <div class="fm_blog_grid">
                        <a class="item_image" href="#!">
                            <img src="assets/images/blog/fashion_minimal/img_03.jpg" alt="image_not_found">
                        </a>
                        <div class="item_content">
                            <h3 class="item_title">
                                <a href="#!">Fashion Inspired By Nature</a>
                            </h3>
                            <span class="post_date">11/13/2020</span>
                            <p class="mb_30">
                                Presents itself as a reference point for fashion targeting this increasingly Demanding public and, in just 2 years, hasconsolidated its brand 
                            </p>
                            <a class="custom_btn btn_sm bg_gray text-uppercase" href="#!">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- blog_section - end
    ================================================== -->


    <!-- brand_section - start
    ================================================== -->
    <div class="brand_section sec_ptb_100 clearfix">
        <div class="container-fluid prl_100">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row justify-content-center">
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_31.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_32.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_33.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_34.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_35.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_36.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_32.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_34.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_31.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_36.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_35.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-4 col-6">
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
    @include('home.fashionMinimal.fashionMinimal_Footer')
@endsection

