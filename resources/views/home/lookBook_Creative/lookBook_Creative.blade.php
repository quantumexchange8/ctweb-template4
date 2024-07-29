@extends('layout.master')

@section('title')
<title>LookBook Creative - Current Tech</title>
@endsection

@section('body_class', 'home_lookbook_creative')

@section('navbar')
    @include('home.lookBook_Creative.creative_Navbar')
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
    <section class="slider_section lookbook_creative_slider arrow_ycenter clearfix">
        <div class="main_slider clearfix" data-slick='{"dots": false}'>
            <div class="item d-flex align-items-center clearfix" data-background="assets/images/slider/lookbook/bg_01.jpg">
                <div class="container maxw_1430">
                    <div class="slider_content">
                        <h4 class="text-uppercase" data-animation="fadeInUp" data-delay=".4s">FASHION DESIGN 2020</h4>
                        <h3 class="text-white" data-animation="fadeInUp" data-delay=".6s">
                            MEET OUR STUDIO
                        </h3>
                        <p data-animation="fadeInUp" data-delay=".8s">
                            Cras in semper ex. Mauris tincidunt purus blandit arcu finibus. Aliquam a iaculis est, eu vehicula elit. Vestibulum urna magna, varius in sollicitudin  Nullam dui dolor, sagittis ut ante eget, aliquam faucibus
                        </p>
                        <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                            <a href="#!" class="custom_btn btn_round bg_lookbook_red text-uppercase">View Collection</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item d-flex align-items-center clearfix" data-background="assets/images/slider/lookbook/bg_01.jpg">
                <div class="container maxw_1430">
                    <div class="slider_content">
                        <h4 class="text-uppercase" data-animation="fadeInUp" data-delay=".4s">FASHION DESIGN 2020</h4>
                        <h3 class="text-white" data-animation="fadeInUp" data-delay=".6s">
                            MEET OUR STUDIO
                        </h3>
                        <p data-animation="fadeInUp" data-delay=".8s">
                            Cras in semper ex. Mauris tincidunt purus blandit arcu finibus. Aliquam a iaculis est, eu vehicula elit. Vestibulum urna magna, varius in sollicitudin  Nullam dui dolor, sagittis ut ante eget, aliquam faucibus
                        </p>
                        <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                            <a href="#!" class="custom_btn btn_round bg_lookbook_red text-uppercase">View Collection</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item d-flex align-items-center clearfix" data-background="assets/images/slider/lookbook/bg_01.jpg">
                <div class="container maxw_1430">
                    <div class="slider_content">
                        <h4 class="text-uppercase" data-animation="fadeInUp" data-delay=".4s">FASHION DESIGN 2020</h4>
                        <h3 class="text-white" data-animation="fadeInUp" data-delay=".6s">
                            MEET OUR STUDIO
                        </h3>
                        <p data-animation="fadeInUp" data-delay=".8s">
                            Cras in semper ex. Mauris tincidunt purus blandit arcu finibus. Aliquam a iaculis est, eu vehicula elit. Vestibulum urna magna, varius in sollicitudin  Nullam dui dolor, sagittis ut ante eget, aliquam faucibus
                        </p>
                        <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                            <a href="#!" class="custom_btn btn_round bg_lookbook_red text-uppercase">View Collection</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel_nav clearfix">
            <button type="button" class="main_left_arrow">
                <span>P R</span>
                <span>E V</span>
            </button>
            <button type="button" class="main_right_arrow">
                <span>N E</span>
                <span>X T</span>
            </button>
        </div>

        <!-- slider progress -->
        <div class="slick-progress">
            <span></span>
        </div>
    </section>
    <!-- slider_section - end
    ================================================== -->


    <!-- feature_section - start
    ================================================== -->
    <section class="feature_section clearfix">
        <div class="lookbook_feature_fullwidth sec_ptb_100 parallaxie d-flex align-items-center" data-background="assets/images/feature/lookbook/img_01.jpg">
            <div class="container maxw_1430">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="lookbook_section_title">
                            <h4 class="sub_title text-uppercase mb_15">FASHION DESIGN 2020</h4>
                            <h2 class="title_text mb_15 text-uppercase">fashion Dress Young</h2>
                            <p class="mb_30">
                                Cras in semper ex. Mauris tincidunt purus blandit arcu finibus. Aliquam a iaculis est, eu vehicula elit. Vestibulum urna magna, varius in sollicitudin  Nullam dui dolor, sagittis ut ante eget, aliquam faucibus  
                            </p>
                            <a href="#!" class="custom_btn btn_round bg_lookbook_red text-uppercase">View Collection</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_section - end
    ================================================== -->


    <!-- lookbook_collection_section - start
    ================================================== -->
    <section class="lookbook_collection_section clearfix" data-background="assets/images/backgrounds/bg_10.jpg">
        <div class="container-fluid p-0">
            <div class="row no-gutters align-items-center justify-content-lg-between">

                <div class="col-lg-6">
                    <div class="lookbook_collection_content sec_ptb_50">
                        <div class="lookbook_section_title clearfix">
                            <h4 class="sub_title text-uppercase mb_15">THE BEST DESIGN 2020</h4>
                            <h2 class="title_text mb_15 text-uppercase text-white">CIRCLE COLLECTION</h2>
                            <p class="mb-0">
                                Cras in semper ex. Mauris tincidunt purus blandit arcu finibus. Aliquam a iaculis est, eu vehicula elit
                            </p>
                            <ul class="collection_list ul_li_block clearfix">
                                <li><a href="#!">Bags collection No.22</a></li>
                                <li><a href="#!">Fall/Winter 2020</a></li>
                                <li><a href="#!">Jean trending collection</a></li>
                                <li><a href="#!">Kinici clothing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="lookbook_collection_carousel arrow_ycenter">
                    <div class="slideshow2_slider" data-slick='{"dots": false}'>
                        <div class="item">
                            <div class="lookbook_product_item">
                                <img src="assets/images/shop/lookbook/img_01.jpg" alt="image_not_found">
                                <div class="item_content">
                                    <span class="item_price text-uppercase">start from $400</span>
                                    <h3 class="item_title mb-0 text-white">
                                        ARTIMISIA LIGHT TWILL COAT
                                    </h3>
                                </div>
                                <div class="hover_content text-center">
                                    <h3 class="item_title2 mb_30">
                                        <a href="#!">
                                            ARTIMISIA LIGHT TWILL COAT
                                        </a>
                                    </h3>
                                    <ul class="product_action_btns ul_li_block text-uppercase clearfix">
                                        <li>
                                            <a href="#!">
                                                <i class="fal fa-shopping-basket"></i>
                                                Shop Now
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fal fa-search"></i>
                                                Quick View
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fal fa-heart"></i>
                                                Wishlist
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="lookbook_product_item">
                                <img src="assets/images/shop/lookbook/img_02.jpg" alt="image_not_found">
                                <div class="item_content">
                                    <span class="item_price text-uppercase">start from $400</span>
                                    <h3 class="item_title mb-0 text-white">
                                        ARTIMISIA LIGHT TWILL COAT
                                    </h3>
                                </div>
                                <div class="hover_content text-center">
                                    <h3 class="item_title2 mb_30">
                                        <a href="#!">
                                            ARTIMISIA LIGHT TWILL COAT
                                        </a>
                                    </h3>
                                    <ul class="product_action_btns ul_li_block text-uppercase clearfix">
                                        <li>
                                            <a href="#!">
                                                <i class="fal fa-shopping-basket"></i>
                                                Shop Now
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fal fa-search"></i>
                                                Quick View
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fal fa-heart"></i>
                                                Wishlist
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="lookbook_product_item">
                                <img src="assets/images/shop/lookbook/img_01.jpg" alt="image_not_found">
                                <div class="item_content">
                                    <span class="item_price text-uppercase">start from $400</span>
                                    <h3 class="item_title mb-0 text-white">
                                        ARTIMISIA LIGHT TWILL COAT
                                    </h3>
                                </div>
                                <div class="hover_content text-center">
                                    <h3 class="item_title2 mb_30">
                                        <a href="#!">
                                            ARTIMISIA LIGHT TWILL COAT
                                        </a>
                                    </h3>
                                    <ul class="product_action_btns ul_li_block text-uppercase clearfix">
                                        <li>
                                            <a href="#!">
                                                <i class="fal fa-shopping-basket"></i>
                                                Shop Now
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fal fa-search"></i>
                                                Quick View
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fal fa-heart"></i>
                                                Wishlist
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="lookbook_product_item">
                                <img src="assets/images/shop/lookbook/img_02.jpg" alt="image_not_found">
                                <div class="item_content">
                                    <span class="item_price text-uppercase">start from $400</span>
                                    <h3 class="item_title mb-0 text-white">
                                        ARTIMISIA LIGHT TWILL COAT
                                    </h3>
                                </div>
                                <div class="hover_content text-center">
                                    <h3 class="item_title2 mb_30">
                                        <a href="#!">
                                            ARTIMISIA LIGHT TWILL COAT
                                        </a>
                                    </h3>
                                    <ul class="product_action_btns ul_li_block text-uppercase clearfix">
                                        <li>
                                            <a href="#!">
                                                <i class="fal fa-shopping-basket"></i>
                                                Shop Now
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fal fa-search"></i>
                                                Quick View
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fal fa-heart"></i>
                                                Wishlist
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel_nav">
                        <button type="button" class="ss2_left_arrow"><i class="fal fa-arrow-left"></i></button>
                        <button type="button" class="ss2_right_arrow"><i class="fal fa-arrow-right"></i></button>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- lookbook_collection_section - end
    ================================================== -->


    <!-- feature_section - start
    ================================================== -->
    <section class="feature_section clearfix">
        <div class="lookbook_feature_fullwidth sec_ptb_100 parallaxie d-flex align-items-center" data-background="assets/images/feature/lookbook/img_02.jpg">
            <div class="container maxw_1430">
                <div class="row align-items-center justify-content-lg-end">
                    <div class="col-lg-6">
                        <div class="lookbook_section_title">
                            <h4 class="sub_title text-uppercase mb_15">Fall 2020</h4>
                            <h2 class="title_text mb_15 text-uppercase">KITH WOMEN FALL 2020</h2>
                            <p class="mb_30">
                                Cras in semper ex. Mauris tincidunt purus blandit arcu finibus. Aliquam a iaculis est, eu vehicula elit. Vestibulum urna magna, varius in sollicitudin  Nullam dui dolor, sagittis ut ante eget, aliquam faucibus  
                            </p>
                            <a href="#!" class="custom_btn btn_round bg_lookbook_red text-uppercase">View Collection</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_section - end
    ================================================== -->


    <!-- feature_section - start
    ================================================== -->
    <section class="feature_section clearfix">
        <div class="lookbook_feature_fullwidth sec_ptb_100 parallaxie d-flex align-items-center" data-background="assets/images/feature/lookbook/img_03.jpg">
            <div class="container maxw_1430">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <div class="lookbook_section_title">
                            <h4 class="sub_title text-uppercase mb_15">FASHION DESIGN 2020</h4>
                            <h2 class="title_text mb_15 text-uppercase">We get it. <br> You've never <br> done this before.</h2>
                            <p class="mb_30">
                                Cras in semper ex. Mauris tincidunt purus blandit arcu finibus. Aliquam a iaculis est, eu vehicula elit. Vestibulum urna magna, varius in sollicitudin  Nullam dui dolor, sagittis ut ante eget, aliquam faucibus  
                            </p>
                            <a href="#!" class="custom_btn btn_round bg_lookbook_red text-uppercase">View Collection</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_section - end
    ================================================== -->


</main>
@endsection

@section('footer')
    @include('home.lookBook_Creative.creative_Footer')
@endsection