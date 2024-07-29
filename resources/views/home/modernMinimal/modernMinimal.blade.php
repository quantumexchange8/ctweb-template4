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


    <!-- slider_section - start
    ================================================== -->
    <section class="slider_section minimal_slider position-relative arrow_ycenter clearfix">
        <div class="main_slider clearfix" data-slick='{"dots": false}'>
            <div class="item d-flex align-items-center clearfix" data-background="assets/images/slider/modern_minimal/bg_01.jpg">
                <div class="container">
                    <div class="slider_content">
                        <h4 class="text-uppercase" data-animation="fadeInUp" data-delay=".4s">FASHION 2020</h4>
                        <h3 data-animation="fadeInUp" data-delay=".6s">Trendy Collection</h3>
                        <p data-animation="fadeInUp" data-delay=".8s">
                            The cold weather has arrived. It’s time to sit by the fire and let your imagination go dressed in wool sweaters
                        </p>
                        <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                            <a href="#!" class="custom_btn bg_modern_red text-uppercase">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item d-flex align-items-center clearfix" data-background="assets/images/slider/modern_minimal/bg_02.jpg">
                <div class="container">
                    <div class="slider_content">
                        <h4 class="text-uppercase" data-animation="fadeInUp" data-delay=".4s">FASHION 2020</h4>
                        <h3 data-animation="fadeInUp" data-delay=".6s">Trendy Collection</h3>
                        <p data-animation="fadeInUp" data-delay=".8s">
                            The cold weather has arrived. It’s time to sit by the fire and let your imagination go dressed in wool sweaters
                        </p>
                        <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                            <a href="#!" class="custom_btn bg_modern_red text-uppercase">Shop Now</a>
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


    <!-- product_section - start
    ================================================== -->
    <section class="product_section sec_ptb_140 clearfix">
        <div class="container">
            <div class="minimal_section_title text-center mb_50">
                <h2 class="title_text mb-0">Trendy Collection</h2>
            </div>

            <ul class="carparts_inline_tabs nav ul_li_center mb_15 clearfix" role="tablist">
                <li>
                    <a class="active" data-toggle="tab" href="#men_tab">MEN</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#women_tab">WOMEN</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#accessories_tab">ACCESSORIES</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#gadgets_tab">GADGETS</a>
                </li>
            </ul>

            <div class="tab-content mb_50">
                <div id="men_tab" class="tab-pane active">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="minimal_product_item">
                                <div class="tab-content">
                                    <div id="p1tab1_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_01.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab1_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_02.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab1_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab1_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab1_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab1_3"></a></li>
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
                                    <div id="p1tab2_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_02.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab2_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_03.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab2_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab2_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab2_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab2_3"></a></li>
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
                                    <div id="p1tab3_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_03.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab3_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_04.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab3_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab3_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab3_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab3_3"></a></li>
                                </ul>
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#e12932">Hot</li>
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
                                    <div id="p1tab4_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_04.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab4_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_05.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab4_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab4_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab4_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab4_3"></a></li>
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
                                    <div id="p1tab5_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_05.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab5_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_06.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab5_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab5_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab5_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab5_3"></a></li>
                                </ul>
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#c51a83">-30% OFF</li>
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
                                    <div id="p1tab6_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_06.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab6_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_07.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab6_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab6_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab6_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab6_3"></a></li>
                                </ul>
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#297fe1">Sold</li>
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
                                    <div id="p1tab7_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_07.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab7_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_08.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab7_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab7_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab7_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab7_3"></a></li>
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
                                    <div id="p1tab8_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_08.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab8_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_09.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab8_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab8_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab8_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab8_3"></a></li>
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
                                    <div id="p1tab9_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_09.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab9_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_01.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab9_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab9_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab9_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab9_3"></a></li>
                                </ul>
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#c51a83">-30% OFF</li>
                                </ul>
                                <ul class="product_action_btns ul_li_block clearfix">
                                    <li><a class="tooltips" data-placement="right" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li><a class="tooltips" data-placement="right" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                    <li><a class="tooltips" data-placement="right" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="women_tab" class="tab-pane fade">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="minimal_product_item">
                                <div class="tab-content">
                                    <div id="p1tab1_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_01.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab1_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_02.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab1_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab1_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab1_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab1_3"></a></li>
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
                                    <div id="p1tab2_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_02.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab2_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_03.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab2_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab2_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab2_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab2_3"></a></li>
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
                                    <div id="p1tab3_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_03.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab3_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_04.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab3_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab3_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab3_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab3_3"></a></li>
                                </ul>
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#e12932">Hot</li>
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
                                    <div id="p1tab4_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_04.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab4_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_05.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab4_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab4_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab4_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab4_3"></a></li>
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
                                    <div id="p1tab5_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_05.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab5_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_06.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab5_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab5_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab5_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab5_3"></a></li>
                                </ul>
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#c51a83">-30% OFF</li>
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
                                    <div id="p1tab6_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_06.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab6_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_07.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab6_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab6_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab6_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab6_3"></a></li>
                                </ul>
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#297fe1">Sold</li>
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
                                    <div id="p1tab7_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_07.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab7_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_08.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab7_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab7_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab7_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab7_3"></a></li>
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
                                    <div id="p1tab8_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_08.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab8_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_09.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab8_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab8_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab8_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab8_3"></a></li>
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
                                    <div id="p1tab9_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_09.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab9_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_01.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab9_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab9_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab9_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab9_3"></a></li>
                                </ul>
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#c51a83">-30% OFF</li>
                                </ul>
                                <ul class="product_action_btns ul_li_block clearfix">
                                    <li><a class="tooltips" data-placement="right" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li><a class="tooltips" data-placement="right" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                    <li><a class="tooltips" data-placement="right" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="accessories_tab" class="tab-pane fade">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="minimal_product_item">
                                <div class="tab-content">
                                    <div id="p1tab1_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_01.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab1_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_02.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab1_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab1_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab1_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab1_3"></a></li>
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
                                    <div id="p1tab2_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_02.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab2_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_03.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab2_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab2_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab2_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab2_3"></a></li>
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
                                    <div id="p1tab3_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_03.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab3_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_04.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab3_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab3_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab3_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab3_3"></a></li>
                                </ul>
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#e12932">Hot</li>
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
                                    <div id="p1tab4_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_04.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab4_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_05.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab4_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab4_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab4_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab4_3"></a></li>
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
                                    <div id="p1tab5_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_05.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab5_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_06.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab5_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab5_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab5_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab5_3"></a></li>
                                </ul>
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#c51a83">-30% OFF</li>
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
                                    <div id="p1tab6_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_06.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab6_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_07.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab6_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab6_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab6_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab6_3"></a></li>
                                </ul>
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#297fe1">Sold</li>
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
                                    <div id="p1tab7_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_07.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab7_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_08.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab7_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab7_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab7_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab7_3"></a></li>
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
                                    <div id="p1tab8_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_08.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab8_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_09.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab8_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab8_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab8_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab8_3"></a></li>
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
                                    <div id="p1tab9_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_09.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab9_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_01.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab9_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab9_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab9_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab9_3"></a></li>
                                </ul>
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#c51a83">-30% OFF</li>
                                </ul>
                                <ul class="product_action_btns ul_li_block clearfix">
                                    <li><a class="tooltips" data-placement="right" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li><a class="tooltips" data-placement="right" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                    <li><a class="tooltips" data-placement="right" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="gadgets_tab" class="tab-pane fade">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="minimal_product_item">
                                <div class="tab-content">
                                    <div id="p1tab1_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_01.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab1_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_02.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab1_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab1_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab1_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab1_3"></a></li>
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
                                    <div id="p1tab2_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_02.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab2_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_03.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab2_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab2_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab2_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab2_3"></a></li>
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
                                    <div id="p1tab3_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_03.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab3_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_04.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab3_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab3_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab3_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab3_3"></a></li>
                                </ul>
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#e12932">Hot</li>
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
                                    <div id="p1tab4_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_04.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab4_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_05.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab4_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab4_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab4_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab4_3"></a></li>
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
                                    <div id="p1tab5_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_05.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab5_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_06.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab5_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab5_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab5_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab5_3"></a></li>
                                </ul>
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#c51a83">-30% OFF</li>
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
                                    <div id="p1tab6_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_06.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab6_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_07.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab6_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab6_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab6_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab6_3"></a></li>
                                </ul>
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#297fe1">Sold</li>
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
                                    <div id="p1tab7_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_07.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab7_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_08.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab7_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab7_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab7_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab7_3"></a></li>
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
                                    <div id="p1tab8_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_08.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab8_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_09.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab8_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab8_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab8_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab8_3"></a></li>
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
                                    <div id="p1tab9_1" class="tab-pane active">
                                        <img src="assets/images/shop/minimal/img_09.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab9_2" class="tab-pane fade">
                                        <img src="assets/images/shop/minimal/img_01.jpg" alt="image_not_found">
                                    </div>
                                    <div id="p1tab9_3" class="tab-pane fade">
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
                                    <li class="active"><a class="pbg_lightgreen" data-toggle="tab" href="#p1tab9_1"></a></li>
                                    <li><a class="pbg_olivegreen" data-toggle="tab" href="#p1tab9_2"></a></li>
                                    <li><a class="pbg_brown" data-toggle="tab" href="#p1tab9_3"></a></li>
                                </ul>
                                <ul class="product_label ul_li clearfix">
                                    <li data-bg-color="#c51a83">-30% OFF</li>
                                </ul>
                                <ul class="product_action_btns ul_li_block clearfix">
                                    <li><a class="tooltips" data-placement="right" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                                    <li><a class="tooltips" data-placement="right" title="Add To Cart" href="#!"><i class="fal fa-shopping-basket"></i></a></li>
                                    <li><a class="tooltips" data-placement="right" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                </ul>
                            </div>
                        </div>
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


    <!-- advertisement_section - start
    ================================================== -->
    <section class="advertisement_section sec_ptb_100 clearfix" data-background="assets/images/backgrounds/bg_06.jpg">
        <div class="minimal_advertisement">
            <div class="container">
                <div class="row align-items-center justify-content-center">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="item_image">
                            <img src="assets/images/offer/minimal/img_01.png" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                        <div class="item_content">
                            <h2 class="title_text">
                                Topshop Washed Black Dad Jean
                            </h2>
                            <p>
                                The main thing about dad jeans is that they come in a trendy wider straight leg, have a total slouchier fit and a high rise. Whereas the mom jean is a more fitted style with baggier and tapered legs.
                            </p>
                            <a class="custom_btn bg_modern_red text-uppercase" href="#!">Model Collection</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- advertisement_section - end
    ================================================== -->


    <!-- barnd_section - start
    ================================================== -->
    <div class="barnd_section sec_ptb_100 clearfix">
        <div class="container">
            <div class="barnd_carousel clearfix">
                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_13.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_14.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_15.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_16.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_17.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_18.png" alt="image_not_found">
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


</main>
@endsection

@section('footer')
    @include('home.modernMinimal.modernMinimal_Footer')
@endsection

