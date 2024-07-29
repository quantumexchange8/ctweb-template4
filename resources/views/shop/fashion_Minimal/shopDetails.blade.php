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


    <!-- breadcrumb_section - start
    ================================================== -->
    <section class="breadcrumb_section medical_breadcrumb text-center d-flex align-items-center clearfix" data-background="assets/images/breadcrumb/bg_10.jpg">
        <div class="container">
            <h1 class="medical_page_title mb_15">Product Details</h1>
            <ul class="medical_breadcrumb_nav ul_li_center clearfix">
                <li><a href="#!">Home</a></li>
                <li>Shop</li>
                <li>Fashion Minimal</li>
                <li>Shop Details</li>
            </ul>
        </div>
    </section>
    <!-- breadcrumb_section - end
    ================================================== -->


    <!-- fm_details_section - start
    ================================================== -->
    <section class="fm_details_section sec_ptb_100 clearfix">
        <div class="container mb_100">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-5 col-md-7">
                    <div class="details_image">
                        <div class="tab-content">
                            <div id="di_tab_1" class="tab-pane active">
                                <img src="assets/images/details/fashion_minimal/img_01.jpg" alt="image_not_found">
                            </div>
                            <div id="di_tab_2" class="tab-pane fade">
                                <img src="assets/images/details/fashion_minimal/img_01.jpg" alt="image_not_found">
                            </div>
                            <div id="di_tab_3" class="tab-pane fade">
                                <img src="assets/images/details/fashion_minimal/img_01.jpg" alt="image_not_found">
                            </div>
                            <div id="di_tab_4" class="tab-pane fade">
                                <img src="assets/images/details/fashion_minimal/img_01.jpg" alt="image_not_found">
                            </div>
                            <div id="di_tab_5" class="tab-pane fade">
                                <img src="assets/images/details/fashion_minimal/img_01.jpg" alt="image_not_found">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-7">
                    <ul class="di_tab_nav ul_li" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#di_tab_1">
                                <img src="assets/images/details/fashion_minimal/img_02.jpg" alt="image_not_found">
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#di_tab_2">
                                <img src="assets/images/details/fashion_minimal/img_03.jpg" alt="image_not_found">
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#di_tab_3">
                                <img src="assets/images/details/fashion_minimal/img_04.jpg" alt="image_not_found">
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#di_tab_4">
                                <img src="assets/images/details/fashion_minimal/img_05.jpg" alt="image_not_found">
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#di_tab_5">
                                <img src="assets/images/details/fashion_minimal/img_06.jpg" alt="image_not_found">
                            </a>
                        </li>
                    </ul>
                    <div class="action_btns_group d-flex align-items-center">
                        <a href="#!"><i class="far fa-random"></i></a>
                        <a href="#!"><i class="fal fa-heart"></i></a>
                        <a href="#!"><i class="fal fa-share-alt"></i></a>
                    </div>
                </div>

                <div class="col-lg-5 col-md-7">
                    <div class="details_content">
                        <span class="item_type">Jackets</span>
                        <h2 class="item_title mb_15">Hyperion</h2>
                        <span class="item_price mb_15"><strong>$85.99</strong> <del>$130.00</del></span>
                        <p class="mb-0">
                            Donec id massa ut nisl auctor mollis eu nec magna. Duis mattis congue lacus ac elementum.
                        </p>
                        <hr>
                        <div class="item_color_list mb_15 d-flex align-items-center clearfix">
                            <h4 class="list_title mb-0 text-uppercase">Color:</h4>
                            <ul class="ul_li clearfix">
                                <li><button type="button"><span data-bg-color="#cc7b4a"></span></button></li>
                                <li><button type="button"><span data-bg-color="#b6b8ba"></span></button></li>
                                <li><button type="button"><span data-bg-color="#dd3333"></span></button></li>
                            </ul>
                        </div>

                        <div class="item_size_list mb_30 d-flex align-items-center clearfix">
                            <h4 class="list_title mb-0 text-uppercase">Size:</h4>
                            <div class="option_select mb-0">
                                <select>
                                    <option data-display="Select your size">Select A Option</option>
                                    <option value="1" selected>48</option>
                                    <option value="2">48</option>
                                    <option value="3">48</option>
                                    <option value="4">48</option>
                                </select>
                            </div>
                        </div>

                        <ul class="btns_group ul_li clearfix">
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
                                <a class="custom_btn btn_sm bg_fashion2_red text-uppercase" href="#!"><i class="fal fa-shopping-bag mr-2"></i> Add To Cart</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="fm_details_description">
            <div class="container">
                <ul class="nav ul_li_center mb_30" role="tablist">
                    <li>
                        <a class="active" data-toggle="tab" href="#description_tab">DESCRIPTION</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#review_ta">REVIEWS (2)</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#related_products_tab">ADDITIONAL INFO</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content">
                <div id="description_tab" class="tab-pane active">
                    <div class="container">
                        <h5 class="mb_50 text-center">
                            Integer hendrerit a diam quis ullamcorper. Proin leo libero, porttitor sit amet ullamcorper nec,vehicula sed enim. Nullam et augue et eros pellentesque suscipit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. suscipit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                        </h5>
                    </div>
                    <div class="description_video position-relative mb_50">
                        <img src="assets/images/details/fashion_minimal/img_07.jpg" alt="image_not_found">
                        <a class="play_btn" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="container">
                        <div class="table_wrap">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="assets/images/img_01.png" alt="instructions">
                                        </td>
                                        <td>
                                            <p class="mb-0">
                                                Fusce vestibulum justo id varius tristique. Vivamus purus odio, <br> interdum id massa ullamcorper, tempus.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Material:</strong></td>
                                        <td>Cotton</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Weight:</strong></td>
                                        <td>100 g</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Color:</strong></td>
                                        <td>Beige, white, blue</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Sizes:</strong></td>
                                        <td>44, 48, 50</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div id="review_ta" class="tab-pane fade">
                    <form class="container" action="#">
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

                <div id="related_products_tab" class="tab-pane fade">
                    <div class="container">
                        <div class="table_wrap">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="assets/images/img_01.png" alt="instructions">
                                        </td>
                                        <td>
                                            <p class="mb-0">
                                                Fusce vestibulum justo id varius tristique. Vivamus purus odio, <br> interdum id massa ullamcorper, tempus.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Material:</strong></td>
                                        <td>Cotton</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Weight:</strong></td>
                                        <td>100 g</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Color:</strong></td>
                                        <td>Beige, white, blue</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Sizes:</strong></td>
                                        <td>44, 48, 50</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fm_details_section - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section clearfix">
        <div class="container-fluid prl_100">

            <div class="fm_section_title text-center mb_15">
                <h2 class="title_text">Related Product</h2>
                <p class="mb-0">WooCommerce Theme</p>
            </div>

            <div class="row justify-content-center">
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
                                <img src="assets/images/shop/fashion_minimal/img_03.jpg" alt="image_not_found">
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
                                <img src="assets/images/shop/fashion_minimal/img_04.jpg" alt="image_not_found">
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
            </div>

        </div>
    </section>
    <!-- product_section - end
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

