@extends('layout.master')

@section('title')
<title>Modern Minimal - Current Tech</title>
@endsection

@section('body_class', 'home_minimal')

@section('navbar')
    @include('home.modernMinimal.modernMinimal_Navbar')
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
    <section class="breadcrumb_section minimal_breadcrumb d-flex align-items-end clearfix" data-background="assets/images/breadcrumb/bg_11.jpg">
        <div class="container maxw_1430">
            <h1 class="minimal_page_title mb_15">Shop Page</h1>
            <div class="f2_breadcrumb_nav_wrap mt-0">
                <ul class="ce_breadcrumb_nav ul_li clearfix">
                    <li><a href="#!">Home</a></li>
                    <li>Shop</li>
                    <li>Minimal Shop</li>
                    <li>Shop Page</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- breadcrumb_section - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section sec_ptb_100 clearfix">
        <div class="container">
            <div class="carparts_filetr_bar">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 col-md-6">
                        <h4 class="result_text">Showing 1 to 16 of 17 total</h4>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="option_select d-flex align-items-center mb-0">
                            <span class="option_title text-uppercase">Sort by:</span>
                            <select style="display: none;">
                                <option data-display="Select Your Option">Nothing</option>
                                <option value="1" selected=""> Name</option>
                                <option value="2">Another option</option>
                                <option value="3" disabled="">A disabled option</option>
                                <option value="4">Potato</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb_50 justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="minimal_product_item">
                        <div class="tab-content">
                            <div id="ptab1_1" class="tab-pane active">
                                <img src="assets/images/shop/minimal/img_01.jpg" alt="image_not_found">
                            </div>
                            <div id="ptab1_2" class="tab-pane fade">
                                <img src="assets/images/shop/minimal/img_02.jpg" alt="image_not_found">
                            </div>
                            <div id="ptab1_3" class="tab-pane fade">
                                <img src="assets/images/shop/minimal/img_03.jpg" alt="image_not_found">
                            </div>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">
                                <a href="#!">Cyrus short</a>
                            </h3>
                            <span class="item_category">Model Collection</span>
                            <span class="item_price">£ 80.00</span>
                        </div>
                        <ul class="product_color ul_li_block nav clearfix">
                            <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#ptab1_1"></a></li>
                            <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab1_2"></a></li>
                            <li><a class="pbg_brown" data-toggle="tab" href="#ptab1_3"></a></li>
                        </ul>
                        <ul class="product_label ul_li clearfix">
                            <li class="bg_black">New</li>
                        </ul>
                        <ul class="product_action_btns ul_li_block clearfix">
                            <li><a class="tooltips" data-placement="right" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            <li><a class="tooltips" data-placement="right" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                            <li><a class="tooltips" data-placement="right" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="minimal_product_item">
                        <div class="tab-content">
                            <div id="ptab2_1" class="tab-pane active">
                                <img src="assets/images/shop/minimal/img_02.jpg" alt="image_not_found">
                            </div>
                            <div id="ptab2_2" class="tab-pane fade">
                                <img src="assets/images/shop/minimal/img_03.jpg" alt="image_not_found">
                            </div>
                            <div id="ptab2_3" class="tab-pane fade">
                                <img src="assets/images/shop/minimal/img_04.jpg" alt="image_not_found">
                            </div>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">
                                <a href="#!">Cyrus short</a>
                            </h3>
                            <span class="item_category">Model Collection</span>
                            <span class="item_price">£ 80.00</span>
                        </div>
                        <ul class="product_color ul_li_block nav clearfix">
                            <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#ptab2_1"></a></li>
                            <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab2_2"></a></li>
                            <li><a class="pbg_brown" data-toggle="tab" href="#ptab2_3"></a></li>
                        </ul>
                        <ul class="product_label ul_li clearfix">
                            <li class="bg_black">New</li>
                        </ul>
                        <ul class="product_action_btns ul_li_block clearfix">
                            <li><a class="tooltips" data-placement="right" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            <li><a class="tooltips" data-placement="right" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                            <li><a class="tooltips" data-placement="right" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="minimal_product_item">
                        <div class="tab-content">
                            <div id="ptab3_1" class="tab-pane active">
                                <img src="assets/images/shop/minimal/img_03.jpg" alt="image_not_found">
                            </div>
                            <div id="ptab3_2" class="tab-pane fade">
                                <img src="assets/images/shop/minimal/img_04.jpg" alt="image_not_found">
                            </div>
                            <div id="ptab3_3" class="tab-pane fade">
                                <img src="assets/images/shop/minimal/img_05.jpg" alt="image_not_found">
                            </div>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">
                                <a href="#!">Cyrus short</a>
                            </h3>
                            <span class="item_category">Model Collection</span>
                            <span class="item_price">£ 80.00</span>
                        </div>
                        <ul class="product_color ul_li_block nav clearfix">
                            <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#ptab3_1"></a></li>
                            <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab3_2"></a></li>
                            <li><a class="pbg_brown" data-toggle="tab" href="#ptab3_3"></a></li>
                        </ul>
                        <ul class="product_label ul_li clearfix">
                            <li class="bg_black">New</li>
                        </ul>
                        <ul class="product_action_btns ul_li_block clearfix">
                            <li><a class="tooltips" data-placement="right" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            <li><a class="tooltips" data-placement="right" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                            <li><a class="tooltips" data-placement="right" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="minimal_product_item">
                        <div class="tab-content">
                            <div id="ptab4_1" class="tab-pane active">
                                <img src="assets/images/shop/minimal/img_04.jpg" alt="image_not_found">
                            </div>
                            <div id="ptab4_2" class="tab-pane fade">
                                <img src="assets/images/shop/minimal/img_05.jpg" alt="image_not_found">
                            </div>
                            <div id="ptab4_3" class="tab-pane fade">
                                <img src="assets/images/shop/minimal/img_06.jpg" alt="image_not_found">
                            </div>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">
                                <a href="#!">Cyrus short</a>
                            </h3>
                            <span class="item_category">Model Collection</span>
                            <span class="item_price">£ 80.00</span>
                        </div>
                        <ul class="product_color ul_li_block nav clearfix">
                            <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#ptab4_1"></a></li>
                            <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab4_2"></a></li>
                            <li><a class="pbg_brown" data-toggle="tab" href="#ptab4_3"></a></li>
                        </ul>
                        <ul class="product_label ul_li clearfix">
                            <li class="bg_black">New</li>
                        </ul>
                        <ul class="product_action_btns ul_li_block clearfix">
                            <li><a class="tooltips" data-placement="right" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            <li><a class="tooltips" data-placement="right" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                            <li><a class="tooltips" data-placement="right" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="minimal_product_item">
                        <div class="tab-content">
                            <div id="ptab5_1" class="tab-pane active">
                                <img src="assets/images/shop/minimal/img_05.jpg" alt="image_not_found">
                            </div>
                            <div id="ptab5_2" class="tab-pane fade">
                                <img src="assets/images/shop/minimal/img_06.jpg" alt="image_not_found">
                            </div>
                            <div id="ptab5_3" class="tab-pane fade">
                                <img src="assets/images/shop/minimal/img_07.jpg" alt="image_not_found">
                            </div>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">
                                <a href="#!">Cyrus short</a>
                            </h3>
                            <span class="item_category">Model Collection</span>
                            <span class="item_price">£ 80.00</span>
                        </div>
                        <ul class="product_color ul_li_block nav clearfix">
                            <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#ptab5_1"></a></li>
                            <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab5_2"></a></li>
                            <li><a class="pbg_brown" data-toggle="tab" href="#ptab5_3"></a></li>
                        </ul>
                        <ul class="product_label ul_li clearfix">
                            <li class="bg_black">New</li>
                        </ul>
                        <ul class="product_action_btns ul_li_block clearfix">
                            <li><a class="tooltips" data-placement="right" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            <li><a class="tooltips" data-placement="right" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                            <li><a class="tooltips" data-placement="right" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="minimal_product_item">
                        <div class="tab-content">
                            <div id="ptab6_1" class="tab-pane active">
                                <img src="assets/images/shop/minimal/img_06.jpg" alt="image_not_found">
                            </div>
                            <div id="ptab6_2" class="tab-pane fade">
                                <img src="assets/images/shop/minimal/img_07.jpg" alt="image_not_found">
                            </div>
                            <div id="ptab6_3" class="tab-pane fade">
                                <img src="assets/images/shop/minimal/img_08.jpg" alt="image_not_found">
                            </div>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">
                                <a href="#!">Cyrus short</a>
                            </h3>
                            <span class="item_category">Model Collection</span>
                            <span class="item_price">£ 80.00</span>
                        </div>
                        <ul class="product_color ul_li_block nav clearfix">
                            <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#ptab6_1"></a></li>
                            <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab6_2"></a></li>
                            <li><a class="pbg_brown" data-toggle="tab" href="#ptab6_3"></a></li>
                        </ul>
                        <ul class="product_label ul_li clearfix">
                            <li class="bg_black">New</li>
                        </ul>
                        <ul class="product_action_btns ul_li_block clearfix">
                            <li><a class="tooltips" data-placement="right" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            <li><a class="tooltips" data-placement="right" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                            <li><a class="tooltips" data-placement="right" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="minimal_product_item">
                        <div class="tab-content">
                            <div id="ptab7_1" class="tab-pane active">
                                <img src="assets/images/shop/minimal/img_07.jpg" alt="image_not_found">
                            </div>
                            <div id="ptab7_2" class="tab-pane fade">
                                <img src="assets/images/shop/minimal/img_08.jpg" alt="image_not_found">
                            </div>
                            <div id="ptab7_3" class="tab-pane fade">
                                <img src="assets/images/shop/minimal/img_09.jpg" alt="image_not_found">
                            </div>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">
                                <a href="#!">Cyrus short</a>
                            </h3>
                            <span class="item_category">Model Collection</span>
                            <span class="item_price">£ 80.00</span>
                        </div>
                        <ul class="product_color ul_li_block nav clearfix">
                            <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#ptab7_1"></a></li>
                            <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab7_2"></a></li>
                            <li><a class="pbg_brown" data-toggle="tab" href="#ptab7_3"></a></li>
                        </ul>
                        <ul class="product_label ul_li clearfix">
                            <li class="bg_black">New</li>
                        </ul>
                        <ul class="product_action_btns ul_li_block clearfix">
                            <li><a class="tooltips" data-placement="right" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            <li><a class="tooltips" data-placement="right" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                            <li><a class="tooltips" data-placement="right" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="minimal_product_item">
                        <div class="tab-content">
                            <div id="ptab8_1" class="tab-pane active">
                                <img src="assets/images/shop/minimal/img_08.jpg" alt="image_not_found">
                            </div>
                            <div id="ptab8_2" class="tab-pane fade">
                                <img src="assets/images/shop/minimal/img_09.jpg" alt="image_not_found">
                            </div>
                            <div id="ptab8_3" class="tab-pane fade">
                                <img src="assets/images/shop/minimal/img_01.jpg" alt="image_not_found">
                            </div>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">
                                <a href="#!">Cyrus short</a>
                            </h3>
                            <span class="item_category">Model Collection</span>
                            <span class="item_price">£ 80.00</span>
                        </div>
                        <ul class="product_color ul_li_block nav clearfix">
                            <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#ptab8_1"></a></li>
                            <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab8_2"></a></li>
                            <li><a class="pbg_brown" data-toggle="tab" href="#ptab8_3"></a></li>
                        </ul>
                        <ul class="product_label ul_li clearfix">
                            <li class="bg_black">New</li>
                        </ul>
                        <ul class="product_action_btns ul_li_block clearfix">
                            <li><a class="tooltips" data-placement="right" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            <li><a class="tooltips" data-placement="right" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                            <li><a class="tooltips" data-placement="right" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="minimal_product_item">
                        <div class="tab-content">
                            <div id="ptab9_1" class="tab-pane active">
                                <img src="assets/images/shop/minimal/img_09.jpg" alt="image_not_found">
                            </div>
                            <div id="ptab9_2" class="tab-pane fade">
                                <img src="assets/images/shop/minimal/img_01.jpg" alt="image_not_found">
                            </div>
                            <div id="ptab9_3" class="tab-pane fade">
                                <img src="assets/images/shop/minimal/img_02.jpg" alt="image_not_found">
                            </div>
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">
                                <a href="#!">Cyrus short</a>
                            </h3>
                            <span class="item_category">Model Collection</span>
                            <span class="item_price">£ 80.00</span>
                        </div>
                        <ul class="product_color ul_li_block nav clearfix">
                            <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#ptab9_1"></a></li>
                            <li><a class="pbg_olivegreen" data-toggle="tab" href="#ptab9_2"></a></li>
                            <li><a class="pbg_brown" data-toggle="tab" href="#ptab9_3"></a></li>
                        </ul>
                        <ul class="product_label ul_li clearfix">
                            <li class="bg_black">New</li>
                        </ul>
                        <ul class="product_action_btns ul_li_block clearfix">
                            <li><a class="tooltips" data-placement="right" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            <li><a class="tooltips" data-placement="right" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                            <li><a class="tooltips" data-placement="right" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="load_more text-center clearfix">
                <a class="custom_btn bg_modern_red text-uppercase" href="#!">Load More</a>
            </div>
        </div>
    </section>
    <!-- product_section - end
    ================================================== -->


</main>
@endsection

@section('footer')
    @include('home.modernMinimal.modernMinimal_Footer')
@endsection

