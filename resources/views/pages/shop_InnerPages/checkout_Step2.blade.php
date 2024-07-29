@extends('layout.master')

@section('title')
<title>Checkout 2nd Step Page - Current Tech</title>
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
            <h1 class="page_title text-white">Checkout</h1>
            <ul class="breadcrumb_nav ul_li_center clearfix">
                <li><a href="#!">Home</a></li>
                <li>Shop</li>
                <li>Checkout</li>
            </ul>
        </div>
    </section>
    <!-- breadcrumb_section - end
    ================================================== -->


    <!-- checkout_section - start
    ================================================== -->
    <section class="checkout_section sec_ptb_140 clearfix">
        <div class="container">

            <ul class="checkout_step ul_li clearfix">
                <li class="activated"><a href="/shopInnerPages_checkout_Step1"><span>01.</span> Shopping Cart</a></li>
                <li class="active"><a href="/shopInnerPages_checkout_Step2"><span>02.</span> Checkout</a></li>
                <li><a href="/shopInnerPages_checkout_Step3"><span>03.</span> Order Completed</a></li>
            </ul>

            <div class="row">
                <div class="col-lg-6">
                    <div class="checkout_collapse_content">
                        <div class="wrap_heade">
                            <p class="mb-0">
                                Returning customer? <a class="collapsed" data-toggle="collapse" href="#loginform_collapse" aria-expanded="false" role="button">Click here to login</a>
                            </p>
                        </div>
                        <div id="loginform_collapse" class="collapse_form_wrap collapse">
                            <div class="card-body">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form_item">
                                                <input type="email" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_item">
                                                <input type="password" name="password" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="login_button">
                                        <div class="checkbox_item">
                                            <label for="remember_checkbox"><input id="remember_checkbox" type="checkbox"> Remember me</label>
                                        </div>
                                        <button type="submit" class="custom_btn bg_default_red">Login Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="checkout_collapse_content">
                        <div class="wrap_heade">
                            <p class="mb-0">
                                <i class="ti-info-alt"></i>
                                Have a coupon? <a class="collapsed" data-toggle="collapse" href="#coupon_collapse" aria-expanded="false">Click here to enter your code</a>
                            </p>
                        </div>
                        <div id="coupon_collapse" class="collapse_form_wrap collapse">
                            <div class="card-body">
                                <form action="#">
                                    <div class="form_item">
                                        <input type="text" name="coupon" placeholder="Coupon Code">
                                    </div>
                                    <button type="submit" class="custom_btn bg_default_red">Apply coupon</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="billing_form mb_50">
                <h3 class="form_title mb_30">Billing details</h3>
                <form action="#">
                    <div class="form_wrap">

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form_item">
                                    <span class="input_title">First Name<sup>*</sup></span>
                                    <input type="text" name="firstname">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form_item">
                                    <span class="input_title">Last Name<sup>*</sup></span>
                                    <input type="text" name="lastname">
                                </div>
                            </div>
                        </div>

                        <div class="form_item">
                            <span class="input_title">Company Name<sup>*</sup></span>
                            <input type="text" name="company">
                        </div>

                        <div class="option_select">
                            <span class="input_title">Country<sup>*</sup></span>
                            <select name="country">
                                <option value="USA" selected>United States</option>
                                <option value="USA">United States</option>
                                <option value="USA">United States</option>
                                <option value="USA">United States</option>
                            </select>
                        </div>

                        <div class="form_item">
                            <span class="input_title">Address<sup>*</sup></span>
                            <input type="text" name="address" placeholder="House number and street name">
                        </div>

                        <div class="form_item">
                            <span class="input_title">Town/City<sup>*</sup></span>
                            <input type="text" name="city">
                        </div>

                        <div class="form_item">
                            <span class="input_title">County<sup>*</sup></span>
                            <input type="text" name="county">
                        </div>

                        <div class="form_item">
                            <span class="input_title">Postcode / Zip<sup>*</sup></span>
                            <input type="text" name="postcode">
                        </div>

                        <div class="form_item">
                            <span class="input_title">Phone<sup>*</sup></span>
                            <input type="tel" name="phone">
                        </div>

                        <div class="form_item">
                            <span class="input_title">Email Address<sup>*</sup></span>
                            <input type="email" name="email">
                        </div>

                        <div class="checkbox_item">
                            <label for="account_create_checkbox"><input id="account_create_checkbox" type="checkbox"> Create an account?</label>
                        </div>

                        <hr>

                        <div class="checkbox_item mb_30">
                            <label for="ship_address_checkbox"><input id="ship_address_checkbox" type="checkbox"> Ship to a different address?</label>
                        </div>

                        <div class="form_item mb-0">
                            <span class="input_title">Order notes<sup>*</sup></span>
                            <textarea name="note" placeholder="Note about your order, eg. special notes fordelivery."></textarea>
                        </div>

                    </div>
                </form>
            </div>

            <div class="billing_form">
                <h3 class="form_title mb_30">Your order</h3>
                <form action="#">
                    <div class="form_wrap">

                        <div class="checkout_table">
                            <table class="table text-center mb_50">
                                <thead class="text-uppercase text-uppercase">
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
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
                                                    <h4 class="item_title mb-0">Top Curabitur Lectus</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="price_text">$69.00</span>
                                        </td>
                                        <td>
                                            <span class="quantity_text">2</span>
                                        </td>
                                        <td><span class="total_price">$138.00</span></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="cart_product">
                                                <div class="item_image">
                                                    <img src="assets/images/cart/img_04.jpg" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h4 class="item_title mb-0">Dress Lobortis Laculis</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="price_text">$69.00</span>
                                        </td>
                                        <td>
                                            <span class="quantity_text">2</span>
                                        </td>
                                        <td><span class="total_price">$138.00</span></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="cart_product">
                                                <div class="item_image">
                                                    <img src="assets/images/cart/img_04.jpg" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <h4 class="item_title mb-0">Boot Curabitur Lectus</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="price_text">$69.00</span>
                                        </td>
                                        <td>
                                            <span class="quantity_text">2</span>
                                        </td>
                                        <td><span class="total_price">$138.00</span></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <span class="subtotal_text">Subtotal</span>
                                        </td>
                                        <td><span class="total_price">$414.00</span></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <span class="subtotal_text">Shipping</span>
                                        </td>
                                        <td class="text-left">
                                            <div class="checkbox_item mb_15">
                                                <label for="shipping_checkbox"><input id="shipping_checkbox" type="checkbox" checked> Free Shipping</label>
                                            </div>
                                            <div class="checkbox_item mb_15">
                                                <label for="flatrate_checkbox"><input id="flatrate_checkbox" type="checkbox"> Flat rate: $15.00</label>
                                            </div>
                                            <div class="checkbox_item">
                                                <label for="localpickup_checkbox"><input id="localpickup_checkbox" type="checkbox"> Local Pickup: $8.00</label>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-left">
                                            <span class="subtotal_text">TOTAL</span>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <span class="total_price">$135.00</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="billing_payment_mathod">
                            <ul class="ul_li_block clearfix">
                                <li>
                                    <div class="checkbox_item mb_15 pl-0">
                                        <label for="bank_transfer_checkbox"><input id="bank_transfer_checkbox" type="checkbox" checked> Direct Bank Transfer</label>
                                    </div>
                                    <p class="mb-0">
                                        Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                    </p>
                                </li>

                                <li>
                                    <div class="checkbox_item mb-0 pl-0">
                                        <label for="check_payments"><input id="check_payments" type="checkbox">Check Payments</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox_item mb-0 pl-0">
                                        <label for="cash_delivery"><input id="cash_delivery" type="checkbox"> Cash On Delivery</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox_item mb-0 pl-0">
                                        <label for="paypal_checkbox"><input id="paypal_checkbox" type="checkbox"> Paypal <a href="#!"><img class="paypal_image" src="assets/images/payment_methods_03.png" alt="image_not_found"></a></label>
                                    </div>
                                </li>
                            </ul>
                            <button type="submit" class="custom_btn bg_default_red">PLACE ORDER</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </section>
    <!-- checkout_section - end
    ================================================== -->


</main>
@endsection

@section('footer')
    @include('pages.pages_Footer')
@endsection

