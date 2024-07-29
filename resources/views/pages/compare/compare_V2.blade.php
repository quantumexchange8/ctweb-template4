@extends('layout.master')

@section('title')
<title>Compare page V.2 - Current Tech</title>
@endsection

@section('navbar')
    @include('pages.pages_Navbar')
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
    <section class="breadcrumb_section text-white text-center text-uppercase d-flex align-items-end clearfix" data-background="assets/images/breadcrumb/bg_01.jpg">
        <div class="overlay" data-bg-color="#1d1d1d"></div>
        <div class="container">
            <h1 class="page_title text-white">Compare V.2</h1>
            <ul class="breadcrumb_nav ul_li_center clearfix">
                <li><a href="#!">Home</a></li>
                <li>Pages</li>
                <li>Compare V.2</li>
            </ul>
        </div>
    </section>
    <!-- breadcrumb_section - end
    ================================================== -->


    <!-- compare_section - start
    ================================================== -->
    <section class="compare_section sec_ptb_140 clearfix">
        <div class="container">

            <div class="compare_content_wrap2">
                <form action="#">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>
                                    <button type="button" class="reload_btn"><i class="far fa-sync-alt"></i></button>
                                </th>
                                <th>
                                    <div class="form_item mb-0">
                                        <input type="search" name="search" placeholder="Search Product">
                                    </div>
                                </th>
                                <th>
                                    <div class="form_item mb-0">
                                        <input type="search" name="search" placeholder="Search Product">
                                    </div>
                                </th>
                                <th>
                                    <div class="form_item mb-0">
                                        <input type="search" name="search" placeholder="Search Product">
                                    </div>
                                </th>
                                <th>
                                    <div class="form_item mb-0">
                                        <input type="search" name="search" placeholder="Search Product">
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="add_banner">
                                        <img src="assets/images/checkout/img_01.jpg" alt="image_not_found">
                                        <div class="item_content text-center">
                                            <a class="video_btn" href="#!"><i class="fas fa-play"></i></a>
                                            <h3 class="item_title mb-0 text-white">Advertisement</h3>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                                    <div class="product_image mb_15">
                                        <img src="assets/images/checkout/img_02.jpg" alt="image_not_found">
                                    </div>
                                    <div class="product_content">
                                        <span class="item_category text-uppercase mb_15">Lifestyle</span>
                                        <h3 class="item_title">Note 8 Pro</h3>
                                        <ul class="rating_star ul_li_center clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="review_text mb_15">23 Reviews</span>
                                        <span class="price_text">$235.00</span>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                                    <div class="product_image mb_15">
                                        <img src="assets/images/checkout/img_03.jpg" alt="image_not_found">
                                    </div>
                                    <div class="product_content">
                                        <span class="item_category text-uppercase mb_15">Lifestyle</span>
                                        <h3 class="item_title">KD 8 EXT</h3>
                                        <ul class="rating_star ul_li_center clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="review_text mb_15">23 Reviews</span>
                                        <span class="price_text">$145.00</span>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                                    <div class="product_image mb_15">
                                        <img src="assets/images/checkout/img_04.jpg" alt="image_not_found">
                                    </div>
                                    <div class="product_content">
                                        <span class="item_category text-uppercase mb_15">Lifestyle</span>
                                        <h3 class="item_title">Galaxy Note10</h3>
                                        <ul class="rating_star ul_li_center clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="review_text mb_15">23 Reviews</span>
                                        <span class="price_text">$599.00</span>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                                    <div class="product_image mb_15">
                                        <img src="assets/images/checkout/img_05.jpg" alt="image_not_found">
                                    </div>
                                    <div class="product_content">
                                        <span class="item_category text-uppercase mb_15">Lifestyle</span>
                                        <h3 class="item_title">Apple iPhone 11</h3>
                                        <ul class="rating_star ul_li_center clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="review_text mb_15">23 Reviews</span>
                                        <span class="price_text">$200.00</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left"><span class="equipment_title text-uppercase"><i class="far fa-check-circle mr-1"></i> Material:</span></td>
                                <td><span>Fabric</span></td>
                                <td><span>Front/back glass</span></td>
                                <td><span>aluminum frame</span></td>
                                <td><span>Gorilla Glass 5</span></td>
                            </tr>
                            <tr>
                                <td class="text-left"><span class="equipment_title text-uppercase"><i class="far fa-check-circle mr-1"></i> Colors:</span></td>
                                <td>
                                    <ul class="color_list ul_li_center clearfix">
                                        <li data-bg-color="#3a54d6"></li>
                                        <li data-bg-color="#23a5e8"></li>
                                        <li data-bg-color="#5bb22c"></li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="color_list ul_li_center clearfix">
                                        <li data-bg-color="#3a54d6"></li>
                                        <li data-bg-color="#23a5e8"></li>
                                        <li data-bg-color="#5bb22c"></li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="color_list ul_li_center clearfix">
                                        <li data-bg-color="#3a54d6"></li>
                                        <li data-bg-color="#23a5e8"></li>
                                        <li data-bg-color="#5bb22c"></li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="color_list ul_li_center clearfix">
                                        <li data-bg-color="#3a54d6"></li>
                                        <li data-bg-color="#23a5e8"></li>
                                        <li data-bg-color="#5bb22c"></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left"><span class="equipment_title text-uppercase"><i class="far fa-check-circle mr-1"></i> Resolution:</span></td>
                                <td><span>1080 x 2340 pixels</span></td>
                                <td><span>1440 x 3040 pixels</span></td>
                                <td><span>1440 x 2960 pixels</span></td>
                                <td><span>1080 x 2340 pixels</span></td>
                            </tr>
                            <tr>
                                <td class="text-left"><span class="equipment_title text-uppercase"><i class="far fa-check-circle mr-1"></i> shoelace:</span></td>
                                <td><span class="check_icon"><i class="far fa-check"></i></span></td>
                                <td><span class="check_icon"><i class="far fa-check"></i></span></td>
                                <td><span class="check_icon"><i class="far fa-check"></i></span></td>
                                <td><span class="check_icon"><i class="far fa-check"></i></span></td>
                            </tr>
                            <tr>
                                <td class="text-left"><span class="equipment_title text-uppercase"><i class="far fa-check-circle mr-1"></i> Chipest:</span></td>
                                <td><span>Mediatek Helio G90T</span></td>
                                <td><span>Exynos 9825</span></td>
                                <td><span>Exynos 8895</span></td>
                                <td><span>Apple A13 Bionic</span></td>
                            </tr>
                            <tr>
                                <td class="text-left"><span class="equipment_title text-uppercase"><i class="far fa-check-circle mr-1"></i> Description:</span></td>
                                <td class="text-left">
                                    <p>
                                        Mauris id leo lectus. Donec pellentesque volutpat lacus at laoreet.
                                    </p>
                                </td>
                                <td class="text-left">
                                    <p>
                                        Pellentesque accumsan mollis tristique. Vivamus in dapibus justo. 
                                    </p>
                                </td>
                                <td class="text-left">
                                    <p>
                                        Aliquam vitae aliquam orci. Aenean non urna a libero mattis porta.
                                    </p>
                                </td>
                                <td class="text-left">
                                    <p>
                                        Pellentesque sed ultricies neque. Curabitur eu erat rhoncus, 
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>

        </div>
    </section>
    <!-- compare_section - end
    ================================================== -->


</main>
@endsection

@section('footer')
    @include('pages.pages_Footer')
@endsection

