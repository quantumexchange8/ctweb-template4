@extends('layout.master')

@section('title')
<title>Fashion - Current Tech</title>
@endsection

@section('body_class', 'home_fashion')

@section('navbar')
    @include('home.fashion.fashion_Navbar')
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


    <!-- fashion_banner - start
    ================================================== -->
    <section class="fashion_banner d-flex align-items-center clearfix" data-background="assets/images/breadcrumb/bg_04.jpg">
        <div class="container">
            <div class="banner_content">
                <h1 class="title_text">Winter Stock Summer <span>Collection</span></h1>
                <a class="play_btn_2 text-uppercase" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                    <span><i class="fas fa-play"></i></span>
                    <small>watch lookbook</small>
                </a>
            </div>
        </div>
    </section>
    <!-- fashion_banner - end
    ================================================== -->


    <!-- category_section - start
    ================================================== -->
    <section class="category_section sec_ptb_100 pb-0 clearfix">
        <div class="container">
            <div class="row mt__50 justify-content-center">

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="fashion_category_circle">
                        <div class="item_offer bg_fashion_red text-white">
                            <span>50%</span>
                            <span>FLAT</span>
                        </div>
                        <div class="item_image">
                            <img src="assets/images/category/fashion/img_01.jpg" alt="image_not_found">
                            <a class="icon_btn bg_fashion_red" href="#!"><i class="fal fa-arrow-right"></i></a>
                        </div>
                        <div class="item_content text-uppercase">
                            <h3 class="item_title">Women</h3>
                            <span class="item_instock">5 ITEMS</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="fashion_category_circle">
                        <div class="item_offer bg_fashion_red text-white">
                            <span>50%</span>
                            <span>FLAT</span>
                        </div>
                        <div class="item_image">
                            <img src="assets/images/category/fashion/img_02.jpg" alt="image_not_found">
                            <a class="icon_btn bg_fashion_red" href="#!"><i class="fal fa-arrow-right"></i></a>
                        </div>
                        <div class="item_content text-uppercase">
                            <h3 class="item_title">Bags</h3>
                            <span class="item_instock">5 ITEMS</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="fashion_category_circle">
                        <div class="item_offer bg_fashion_red text-white">
                            <span>50%</span>
                            <span>FLAT</span>
                        </div>
                        <div class="item_image">
                            <img src="assets/images/category/fashion/img_03.jpg" alt="image_not_found">
                            <a class="icon_btn bg_fashion_red" href="#!"><i class="fal fa-arrow-right"></i></a>
                        </div>
                        <div class="item_content text-uppercase">
                            <h3 class="item_title">Mens</h3>
                            <span class="item_instock">5 ITEMS</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="fashion_category_circle">
                        <div class="item_offer bg_fashion_red text-white">
                            <span>50%</span>
                            <span>FLAT</span>
                        </div>
                        <div class="item_image">
                            <img src="assets/images/category/fashion/img_04.jpg" alt="image_not_found">
                            <a class="icon_btn bg_fashion_red" href="#!"><i class="fal fa-arrow-right"></i></a>
                        </div>
                        <div class="item_content text-uppercase">
                            <h3 class="item_title">Kids</h3>
                            <span class="item_instock">5 ITEMS</span>
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
    <section class="product_section sec_ptb_100 clearfix">
        <div class="container-fluid prl_60">

            <div class="fp_filter_bar text-uppercase mb_30">
                <ul class="btns_group ul_li">
                    <li class="dropdown">
                        <button type="button" id="fp_gender_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gender</button>
                        <div class="dropdown-menu" aria-labelledby="fp_gender_dropdown">
                            <form action="#">
                                <ul class="ul_li_block">
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc1_1" type="checkbox">
                                            <label for="fc1_1">Summer.RDy <span>(29)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc1_2" type="checkbox">
                                            <label for="fc1_2">Ultraboost 20 <span>(8)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc1_3" type="checkbox">
                                            <label for="fc1_3">Ultraboost 19 <span>(3)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc1_4" type="checkbox">
                                            <label for="fc1_4">Ultraboost PB <span>(7)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc1_5" type="checkbox">
                                            <label for="fc1_5">Ultraboost 4.0 <span>(2)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc1_6" type="checkbox">
                                            <label for="fc1_6">Ultraboost XT <span>(5)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc1_7" type="checkbox">
                                            <label for="fc1_7">Ultraboost X <span>(7)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc1_8" type="checkbox">
                                            <label for="fc1_8">Ultraboost DAN <span>(8)</span></label>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </li>
                    <li class="dropdown">
                        <button type="button" id="fp_color_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Color</button>
                        <div class="dropdown-menu" aria-labelledby="fp_color_dropdown">
                            <form action="#">
                                <ul class="ul_li_block">
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc2_1" type="checkbox">
                                            <label for="fc2_1">Summer.RDy <span>(29)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc2_2" type="checkbox">
                                            <label for="fc2_2">Ultraboost 20 <span>(8)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc2_3" type="checkbox">
                                            <label for="fc2_3">Ultraboost 19 <span>(3)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc2_4" type="checkbox">
                                            <label for="fc2_4">Ultraboost PB <span>(7)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc2_5" type="checkbox">
                                            <label for="fc2_5">Ultraboost 4.0 <span>(2)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc2_6" type="checkbox">
                                            <label for="fc2_6">Ultraboost XT <span>(5)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc2_7" type="checkbox">
                                            <label for="fc2_7">Ultraboost X <span>(7)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc2_8" type="checkbox">
                                            <label for="fc2_8">Ultraboost DAN <span>(8)</span></label>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </li>
                    <li class="dropdown">
                        <button type="button" id="fp_size_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Size</button>
                        <div class="dropdown-menu" aria-labelledby="fp_size_dropdown">
                            <form action="#">
                                <ul class="ul_li_block">
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc3_1" type="checkbox">
                                            <label for="fc3_1">Summer.RDy <span>(29)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc3_2" type="checkbox">
                                            <label for="fc3_2">Ultraboost 20 <span>(8)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc3_3" type="checkbox">
                                            <label for="fc3_3">Ultraboost 19 <span>(3)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc3_4" type="checkbox">
                                            <label for="fc3_4">Ultraboost PB <span>(7)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc3_5" type="checkbox">
                                            <label for="fc3_5">Ultraboost 4.0 <span>(2)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc3_6" type="checkbox">
                                            <label for="fc3_6">Ultraboost XT <span>(5)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc3_7" type="checkbox">
                                            <label for="fc3_7">Ultraboost X <span>(7)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc3_8" type="checkbox">
                                            <label for="fc3_8">Ultraboost DAN <span>(8)</span></label>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </li>
                    <li class="dropdown">
                        <button type="button" id="fp_price_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Price</button>
                        <div class="dropdown-menu" aria-labelledby="fp_price_dropdown">
                            <form action="#">
                                <ul class="ul_li_block">
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc4_1" type="checkbox">
                                            <label for="fc4_1">Summer.RDy <span>(29)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc4_2" type="checkbox">
                                            <label for="fc4_2">Ultraboost 20 <span>(8)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc4_3" type="checkbox">
                                            <label for="fc4_3">Ultraboost 19 <span>(3)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc4_4" type="checkbox">
                                            <label for="fc4_4">Ultraboost PB <span>(7)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc4_5" type="checkbox">
                                            <label for="fc4_5">Ultraboost 4.0 <span>(2)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc4_6" type="checkbox">
                                            <label for="fc4_6">Ultraboost XT <span>(5)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc4_7" type="checkbox">
                                            <label for="fc4_7">Ultraboost X <span>(7)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc4_8" type="checkbox">
                                            <label for="fc4_8">Ultraboost DAN <span>(8)</span></label>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </li>
                    <li class="dropdown">
                        <button type="button" id="fp_activity_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Activity</button>
                        <div class="dropdown-menu" aria-labelledby="fp_activity_dropdown">
                            <form action="#">
                                <ul class="ul_li_block">
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc5_1" type="checkbox">
                                            <label for="fc5_1">Summer.RDy <span>(29)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc5_2" type="checkbox">
                                            <label for="fc5_2">Ultraboost 20 <span>(8)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc5_3" type="checkbox">
                                            <label for="fc5_3">Ultraboost 19 <span>(3)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc5_4" type="checkbox">
                                            <label for="fc5_4">Ultraboost PB <span>(7)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc5_5" type="checkbox">
                                            <label for="fc5_5">Ultraboost 4.0 <span>(2)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc5_6" type="checkbox">
                                            <label for="fc5_6">Ultraboost XT <span>(5)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc5_7" type="checkbox">
                                            <label for="fc5_7">Ultraboost X <span>(7)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc5_8" type="checkbox">
                                            <label for="fc5_8">Ultraboost DAN <span>(8)</span></label>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </li>
                    <li class="dropdown">
                        <button type="button" id="fp_bestfor_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Best For</button>
                        <div class="dropdown-menu" aria-labelledby="fp_bestfor_dropdown">
                            <form action="#">
                                <ul class="ul_li_block">
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc6_1" type="checkbox">
                                            <label for="fc6_1">Summer.RDy <span>(29)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc6_2" type="checkbox">
                                            <label for="fc6_2">Ultraboost 20 <span>(8)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc6_3" type="checkbox">
                                            <label for="fc6_3">Ultraboost 19 <span>(3)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc6_4" type="checkbox">
                                            <label for="fc6_4">Ultraboost PB <span>(7)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc6_5" type="checkbox">
                                            <label for="fc6_5">Ultraboost 4.0 <span>(2)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc6_6" type="checkbox">
                                            <label for="fc6_6">Ultraboost XT <span>(5)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc6_7" type="checkbox">
                                            <label for="fc6_7">Ultraboost X <span>(7)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc6_8" type="checkbox">
                                            <label for="fc6_8">Ultraboost DAN <span>(8)</span></label>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </li>
                    <li class="dropdown">
                        <button type="button" id="fp_model_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Model</button>
                        <div class="dropdown-menu" aria-labelledby="fp_model_dropdown">
                            <form action="#">
                                <ul class="ul_li_block">
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc7_1" type="checkbox">
                                            <label for="fc7_1">Summer.RDy <span>(29)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc7_2" type="checkbox">
                                            <label for="fc7_2">Ultraboost 20 <span>(8)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc7_3" type="checkbox">
                                            <label for="fc7_3">Ultraboost 19 <span>(3)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc7_4" type="checkbox">
                                            <label for="fc7_4">Ultraboost PB <span>(7)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc7_5" type="checkbox">
                                            <label for="fc7_5">Ultraboost 4.0 <span>(2)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc7_6" type="checkbox">
                                            <label for="fc7_6">Ultraboost XT <span>(5)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc7_7" type="checkbox">
                                            <label for="fc7_7">Ultraboost X <span>(7)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc7_8" type="checkbox">
                                            <label for="fc7_8">Ultraboost DAN <span>(8)</span></label>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </li>
                    <li class="dropdown">
                        <button type="button" id="fp_patters_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Patters</button>
                        <div class="dropdown-menu" aria-labelledby="fp_patters_dropdown">
                            <form action="#">
                                <ul class="ul_li_block">
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc8_1" type="checkbox">
                                            <label for="fc8_1">Summer.RDy <span>(29)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc8_2" type="checkbox">
                                            <label for="fc8_2">Ultraboost 20 <span>(8)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc8_3" type="checkbox">
                                            <label for="fc8_3">Ultraboost 19 <span>(3)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc8_4" type="checkbox">
                                            <label for="fc8_4">Ultraboost PB <span>(7)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc8_5" type="checkbox">
                                            <label for="fc8_5">Ultraboost 4.0 <span>(2)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc8_6" type="checkbox">
                                            <label for="fc8_6">Ultraboost XT <span>(5)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc8_7" type="checkbox">
                                            <label for="fc8_7">Ultraboost X <span>(7)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox_item">
                                            <input id="fc8_8" type="checkbox">
                                            <label for="fc8_8">Ultraboost DAN <span>(8)</span></label>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </li>
                </ul>

                <div class="option_select d-flex align-items-center mb-0">
                    <form action="#">
                        <select>
                            <option data-display="Select Your Option">Nothing</option>
                            <option value="1" selected> Popularity</option>
                            <option value="2">Another option</option>
                            <option value="3" disabled>A disabled option</option>
                            <option value="4">Potato</option>
                        </select>
                    </form>
                </div>
            </div>

            <ul class="fp_popular_tags ul_li clearfix">
                <li><a class="tag_item" href="#!">Women <span class="remove_btn"><i class="fal fa-times"></i></span></a></li>
                <li><a class="tag_item" href="#!">Ultraboost <span class="remove_btn"><i class="fal fa-times"></i></span></a></li>
                <li><a class="tag_item" href="#!">White <span class="remove_btn"><i class="fal fa-times"></i></span></a></li>
                <li><a class="allclear_btn" href="#!">Clear All</a></li>
            </ul>

            <div class="element-grid column5_element_grid mb_50">
                <div class="element-item">
                    <div class="fashion_product_item">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li class="bg_fashion_red">New</li>
                            <li class="bg_fashion_red">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/fashion/img_04.jpg" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li>
                                    <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                        <i class="fal fa-shopping-basket"></i> Buy
                                    </a>
                                </li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <span class="item_category text-uppercase">category</span>
                            <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                            <span class="item_price">€160.00</span>
                        </div>
                    </div>
                </div>

                <div class="element-item">
                    <div class="fashion_product_item">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li class="bg_fashion_red">New</li>
                            <li class="bg_fashion_red">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/fashion/img_05.jpg" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li>
                                    <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                        <i class="fal fa-shopping-basket"></i> Buy
                                    </a>
                                </li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <span class="item_category text-uppercase">category</span>
                            <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                            <span class="item_price">€160.00</span>
                        </div>
                    </div>
                </div>

                <div class="element-item">
                    <div class="fashion_product_item">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li class="bg_fashion_red">New</li>
                            <li class="bg_fashion_red">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/fashion/img_06.jpg" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li>
                                    <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                        <i class="fal fa-shopping-basket"></i> Buy
                                    </a>
                                </li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <span class="item_category text-uppercase">category</span>
                            <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                            <span class="item_price">€160.00</span>
                        </div>
                    </div>
                </div>

                <div class="element-item">
                    <div class="fashion_product_item">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li class="bg_fashion_red">New</li>
                            <li class="bg_fashion_red">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/fashion/img_07.jpg" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li>
                                    <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                        <i class="fal fa-shopping-basket"></i> Buy
                                    </a>
                                </li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <span class="item_category text-uppercase">category</span>
                            <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                            <span class="item_price">€160.00</span>
                        </div>
                    </div>
                </div>

                <div class="element-item">
                    <div class="fashion_product_item">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li class="bg_fashion_red">New</li>
                            <li class="bg_fashion_red">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/fashion/img_08.jpg" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li>
                                    <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                        <i class="fal fa-shopping-basket"></i> Buy
                                    </a>
                                </li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <span class="item_category text-uppercase">category</span>
                            <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                            <span class="item_price">€160.00</span>
                        </div>
                    </div>
                </div>

                <div class="element-item">
                    <div class="fashion_product_item">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li class="bg_fashion_red">New</li>
                            <li class="bg_fashion_red">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/fashion/img_09.jpg" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li>
                                    <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                        <i class="fal fa-shopping-basket"></i> Buy
                                    </a>
                                </li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <span class="item_category text-uppercase">category</span>
                            <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                            <span class="item_price">€160.00</span>
                        </div>
                    </div>
                </div>

                <div class="element-item">
                    <div class="fashion_product_item">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li class="bg_fashion_red">New</li>
                            <li class="bg_fashion_red">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/fashion/img_10.jpg" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li>
                                    <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                        <i class="fal fa-shopping-basket"></i> Buy
                                    </a>
                                </li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <span class="item_category text-uppercase">category</span>
                            <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                            <span class="item_price">€160.00</span>
                        </div>
                    </div>
                </div>

                <div class="element-item">
                    <div class="fashion_product_item">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li class="bg_fashion_red">New</li>
                            <li class="bg_fashion_red">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/fashion/img_11.jpg" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li>
                                    <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                        <i class="fal fa-shopping-basket"></i> Buy
                                    </a>
                                </li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <span class="item_category text-uppercase">category</span>
                            <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                            <span class="item_price">€160.00</span>
                        </div>
                    </div>
                </div>

                <div class="element-item">
                    <div class="fashion_product_item">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li class="bg_fashion_red">New</li>
                            <li class="bg_fashion_red">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/fashion/img_12.jpg" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li>
                                    <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                        <i class="fal fa-shopping-basket"></i> Buy
                                    </a>
                                </li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <span class="item_category text-uppercase">category</span>
                            <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                            <span class="item_price">€160.00</span>
                        </div>
                    </div>
                </div>

                <div class="element-item">
                    <div class="fashion_product_item">
                        <ul class="product_label ul_li text-uppercase clearfix">
                            <li class="bg_fashion_red">New</li>
                            <li class="bg_fashion_red">Sale</li>
                        </ul>
                        <div class="item_image">
                            <img src="assets/images/shop/fashion/img_13.jpg" alt="image_not_found">
                            <ul class="product_action_btns ul_li_center clearfix">
                                <li>
                                    <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                        <i class="fal fa-shopping-basket"></i> Buy
                                    </a>
                                </li>
                                <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                                <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="item_content">
                            <span class="item_category text-uppercase">category</span>
                            <h3 class="item_title"><a href="#!">Striped slides with jute</a></h3>
                            <span class="item_price">€160.00</span>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="fashion_pagination_nav ul_li_center text-uppercase clearfix">
                <li><a href="#!">Prev</a></li>
                <li class="active"><a href="#!">1</a></li>
                <li><a href="#!">2</a></li>
                <li><a href="#!">3</a></li>
                <li><a href="#!">Next</a></li>
            </ul>
        </div>
    </section>
    <!-- product_section - end
    ================================================== -->


    <!-- barnd_section - start
    ================================================== -->
    <div class="barnd_section sec_ptb_50 pt-0 clearfix">
        <div class="container">
            <div class="barnd_carousel clearfix">
                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_26.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_27.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_28.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_29.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_30.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_24.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_25.png" alt="image_not_found">
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
    @include('home.fashion.fashion_Footer')
@endsection


