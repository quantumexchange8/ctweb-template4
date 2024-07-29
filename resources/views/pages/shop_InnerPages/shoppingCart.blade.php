@extends('layout.master')

@section('title')
<title>Shop Cart - Neoncart HTML5 Template</title>
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
            <h1 class="page_title text-white">Cart Page</h1>
            <ul class="breadcrumb_nav ul_li_center clearfix">
                <li><a href="#!">Home</a></li>
                <li>Shop</li>
                <li>Shopping Cart</li>
            </ul>
        </div>
    </section>
    <!-- breadcrumb_section - end
    ================================================== -->


    <!-- cart_section - start
    ================================================== -->
    <section class="cart_section sec_ptb_140 clearfix">
        <div class="container">

            <div class="cart_table mb_50">
                <table class="table">
                    <thead class="text-uppercase">
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="cart_product">
                                    <div class="item_image">
                                        <img src="assets/images/cart/img_04.jpg" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h4 class="item_title">Men's Polo T-shirt</h4>
                                        <span class="item_type">Clothes</span>
                                    </div>
                                    <button type="button" class="remove_btn">
                                        <i class="fal fa-times"></i>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <span class="price_text">$69.00</span>
                            </td>
                            <td>
                                <div class="quantity_input">
                                    <form action="#">
                                        <span class="input_number_decrement">–</span>
                                        <input class="input_number" type="text" value="2">
                                        <span class="input_number_increment">+</span>
                                    </form>
                                </div>
                            </td>
                            <td><span class="total_price">$138.00</span></td>
                        </tr>

                        <tr>
                            <td>
                                <div class="cart_product">
                                    <div class="item_image">
                                        <img src="assets/images/cart/img_05.jpg" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h4 class="item_title">Men's Polo T-shirt</h4>
                                        <span class="item_type">Clothes</span>
                                    </div>
                                    <button type="button" class="remove_btn">
                                        <i class="fal fa-times"></i>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <span class="price_text">$23.00</span>
                            </td>
                            <td>
                                <div class="quantity_input">
                                    <form action="#">
                                        <span class="input_number_decrement">–</span>
                                        <input class="input_number" type="text" value="1">
                                        <span class="input_number_increment">+</span>
                                    </form>
                                </div>
                            </td>
                            <td><span class="total_price">$23.00</span></td>
                        </tr>

                        <tr>
                            <td>
                                <div class="cart_product">
                                    <div class="item_image">
                                        <img src="assets/images/cart/img_06.jpg" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h4 class="item_title">Men's Polo T-shirt</h4>
                                        <span class="item_type">Clothes</span>
                                    </div>
                                    <button type="button" class="remove_btn">
                                        <i class="fal fa-times"></i>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <span class="price_text">$36.00</span>
                            </td>
                            <td>
                                <div class="quantity_input">
                                    <form action="#">
                                        <span class="input_number_decrement">–</span>
                                        <input class="input_number" type="text" value="1">
                                        <span class="input_number_increment">+</span>
                                    </form>
                                </div>
                            </td>
                            <td><span class="total_price">$36.00</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="coupon_wrap mb_50">
                <div class="row justify-content-lg-between">
                    <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                        <div class="coupon_form">
                            <div class="form_item mb-0">
                                <input type="text" class="coupon" placeholder="Coupon Code">
                            </div>
                            <button type="submit" class="custom_btn bg_danger text-uppercase">Apply Coupon</button>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                        <div class="cart_update_btn">
                            <button type="button" class="custom_btn bg_secondary text-uppercase">Update Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-lg-end">
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="cart_pricing_table pt-0 text-uppercase" data-bg-color="#f2f3f5">
                        <h3 class="table_title text-center" data-bg-color="#ededed">Cart Total</h3>
                        <ul class="ul_li_block clearfix">
                            <li><span>Subtotal</span> <span>$197.99</span></li>
                            <li><span>Total</span> <span>$197.99</span></li>
                        </ul>
                        <a href="/shopInnerPages_checkout_Step1" class="custom_btn bg_success">Proceed to Checkout</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- cart_section - end
    ================================================== -->


</main>
@endsection

@section('footer')
    @include('pages.pages_Footer')
@endsection



