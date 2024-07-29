@extends('layout.master')

@section('title')
<title>Furniture - Current Tech</title>
@endsection

@section('body_class', 'home_furniture')

@section('navbar')
    @include('home.furniture.furniture_Navbar')
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
    <section class="breadcrumb_section furniture_breadcrumb deco_wrap d-flex align-items-center clearfix" data-bg-color="#f4f2f2">
        <div class="container-fluid prl_90">
            <h1 class="f2_page_title mb-0 text-uppercase">DESIGN FURNITURE</h1>
        </div>
        <div class="deco_image">
            <img src="assets/images/shop/furniture_store/img_27.png" alt="image_not_found">
        </div>
    </section>
    <div class="container-fluid prl_90">
        <div class="f2_breadcrumb_nav_wrap">
            <ul class="ce_breadcrumb_nav ul_li clearfix">
                <li><a href="#!">Home</a></li>
                <li>Shop</li>
                <li>Furniture Store</li>
                <li>Shop Page</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb_section - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section sec_ptb_100 clearfix">
        <div class="container-fluid prl_90">

            <div class="f2_filter_bar mb_30">
                <ul class="f2p_results ul_li clearfix">
                    <li><button type="button" class="filter_sidebar_btn text-uppercase">Filter <i class="far fa-arrow-alt-circle-right ml-1"></i></button></li>
                    <li><span class="result_text">View <strong>16</strong> per page</span></li>
                </ul>

                <div class="option_select d-flex align-items-center mb-0">
                    <form action="#">
                        <select>
                            <option data-display="SHORT BY LATEST">Nothing</option>
                            <option value="1"> Popularity</option>
                            <option value="2">Another option</option>
                            <option value="3" disabled>A disabled option</option>
                            <option value="4">Potato</option>
                        </select>
                    </form>
                </div>
            </div>

            <div class="furniture_product_group row">
                <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="top_bar clearfix">
                        <ul class="rating_star ul_li float-left clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fal fa-star"></i></li>
                        </ul>
                        <ul class="product_label ul_li text-uppercase float-right clearfix">
                            <li>New</li>
                            <li>Sale</li>
                        </ul>
                    </div>
                    <div class="item_image">
                        <img src="assets/images/shop/furniture_store/img_01.png" alt="image_not_found">
                        <ul class="product_action_btns ul_li_center clearfix">
                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            <li>
                                <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                    <i class="fal fa-shopping-basket"></i> Buy
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="item_content">
                        <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                        <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                    </div>
                </div>

                <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="top_bar clearfix">
                        <ul class="rating_star ul_li float-left clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fal fa-star"></i></li>
                        </ul>
                        <ul class="product_label ul_li text-uppercase float-right clearfix">
                            <li>New</li>
                            <li>Sale</li>
                        </ul>
                    </div>
                    <div class="item_image">
                        <img src="assets/images/shop/furniture_store/img_02.png" alt="image_not_found">
                        <ul class="product_action_btns ul_li_center clearfix">
                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            <li>
                                <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                    <i class="fal fa-shopping-basket"></i> Buy
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="item_content">
                        <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                        <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                    </div>
                </div>

                <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="top_bar clearfix">
                        <ul class="rating_star ul_li float-left clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fal fa-star"></i></li>
                        </ul>
                        <ul class="product_label ul_li text-uppercase float-right clearfix">
                            <li>New</li>
                            <li>Sale</li>
                        </ul>
                    </div>
                    <div class="item_image">
                        <img src="assets/images/shop/furniture_store/img_03.png" alt="image_not_found">
                        <ul class="product_action_btns ul_li_center clearfix">
                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            <li>
                                <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                    <i class="fal fa-shopping-basket"></i> Buy
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="item_content">
                        <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                        <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                    </div>
                </div>

                <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="top_bar clearfix">
                        <ul class="rating_star ul_li float-left clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fal fa-star"></i></li>
                        </ul>
                        <ul class="product_label ul_li text-uppercase float-right clearfix">
                            <li>New</li>
                            <li>Sale</li>
                        </ul>
                    </div>
                    <div class="item_image">
                        <img src="assets/images/shop/furniture_store/img_04.png" alt="image_not_found">
                        <ul class="product_action_btns ul_li_center clearfix">
                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            <li>
                                <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                    <i class="fal fa-shopping-basket"></i> Buy
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="item_content">
                        <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                        <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                    </div>
                </div>

                <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="top_bar clearfix">
                        <ul class="rating_star ul_li float-left clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fal fa-star"></i></li>
                        </ul>
                        <ul class="product_label ul_li text-uppercase float-right clearfix">
                            <li>New</li>
                            <li>Sale</li>
                        </ul>
                    </div>
                    <div class="item_image">
                        <img src="assets/images/shop/furniture_store/img_05.png" alt="image_not_found">
                        <ul class="product_action_btns ul_li_center clearfix">
                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            <li>
                                <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                    <i class="fal fa-shopping-basket"></i> Buy
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="item_content">
                        <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                        <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                    </div>
                </div>

                <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="top_bar clearfix">
                        <ul class="rating_star ul_li float-left clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fal fa-star"></i></li>
                        </ul>
                        <ul class="product_label ul_li text-uppercase float-right clearfix">
                            <li>New</li>
                            <li>Sale</li>
                        </ul>
                    </div>
                    <div class="item_image">
                        <img src="assets/images/shop/furniture_store/img_06.png" alt="image_not_found">
                        <ul class="product_action_btns ul_li_center clearfix">
                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            <li>
                                <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                    <i class="fal fa-shopping-basket"></i> Buy
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="item_content">
                        <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                        <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                    </div>
                </div>

                <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="top_bar clearfix">
                        <ul class="rating_star ul_li float-left clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fal fa-star"></i></li>
                        </ul>
                        <ul class="product_label ul_li text-uppercase float-right clearfix">
                            <li>New</li>
                            <li>Sale</li>
                        </ul>
                    </div>
                    <div class="item_image">
                        <img src="assets/images/shop/furniture_store/img_07.png" alt="image_not_found">
                        <ul class="product_action_btns ul_li_center clearfix">
                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            <li>
                                <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                    <i class="fal fa-shopping-basket"></i> Buy
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="item_content">
                        <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                        <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                    </div>
                </div>

                <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="top_bar clearfix">
                        <ul class="rating_star ul_li float-left clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fal fa-star"></i></li>
                        </ul>
                        <ul class="product_label ul_li text-uppercase float-right clearfix">
                            <li>New</li>
                            <li>Sale</li>
                        </ul>
                    </div>
                    <div class="item_image">
                        <img src="assets/images/shop/furniture_store/img_08.png" alt="image_not_found">
                        <ul class="product_action_btns ul_li_center clearfix">
                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            <li>
                                <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                    <i class="fal fa-shopping-basket"></i> Buy
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="item_content">
                        <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                        <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                    </div>
                </div>

                <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="top_bar clearfix">
                        <ul class="rating_star ul_li float-left clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fal fa-star"></i></li>
                        </ul>
                        <ul class="product_label ul_li text-uppercase float-right clearfix">
                            <li>New</li>
                            <li>Sale</li>
                        </ul>
                    </div>
                    <div class="item_image">
                        <img src="assets/images/shop/furniture_store/img_09.png" alt="image_not_found">
                        <ul class="product_action_btns ul_li_center clearfix">
                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            <li>
                                <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                    <i class="fal fa-shopping-basket"></i> Buy
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="item_content">
                        <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                        <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                    </div>
                </div>

                <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="top_bar clearfix">
                        <ul class="rating_star ul_li float-left clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fal fa-star"></i></li>
                        </ul>
                        <ul class="product_label ul_li text-uppercase float-right clearfix">
                            <li>New</li>
                            <li>Sale</li>
                        </ul>
                    </div>
                    <div class="item_image">
                        <img src="assets/images/shop/furniture_store/img_10.png" alt="image_not_found">
                        <ul class="product_action_btns ul_li_center clearfix">
                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            <li>
                                <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                    <i class="fal fa-shopping-basket"></i> Buy
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="item_content">
                        <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                        <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                    </div>
                </div>

                <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="top_bar clearfix">
                        <ul class="rating_star ul_li float-left clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fal fa-star"></i></li>
                        </ul>
                        <ul class="product_label ul_li text-uppercase float-right clearfix">
                            <li>New</li>
                            <li>Sale</li>
                        </ul>
                    </div>
                    <div class="item_image">
                        <img src="assets/images/shop/furniture_store/img_11.png" alt="image_not_found">
                        <ul class="product_action_btns ul_li_center clearfix">
                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            <li>
                                <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                    <i class="fal fa-shopping-basket"></i> Buy
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="item_content">
                        <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                        <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                    </div>
                </div>

                <div class="furniture_product_grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="top_bar clearfix">
                        <ul class="rating_star ul_li float-left clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fal fa-star"></i></li>
                        </ul>
                        <ul class="product_label ul_li text-uppercase float-right clearfix">
                            <li>New</li>
                            <li>Sale</li>
                        </ul>
                    </div>
                    <div class="item_image">
                        <img src="assets/images/shop/furniture_store/img_12.png" alt="image_not_found">
                        <ul class="product_action_btns ul_li_center clearfix">
                            <li><a class="tooltips" data-placement="top" title="Quick View" href="#!" data-toggle="modal" data-target="#quickview_modal"><i class="fal fa-search"></i></a></li>
                            <li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
                            <li>
                                <a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">
                                    <i class="fal fa-shopping-basket"></i> Buy
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="item_content">
                        <h3 class="item_title"><a href="#!">Bathroom lighting</a></h3>
                        <span class="item_price"><strong> $100.00</strong> <del> $150.00</del></span>
                    </div>
                </div>
            </div>

            <div class="load_more text-center clearfix">
                <a class="custom_btn bg_furniture_brown text-uppercase" href="#!">View More</a>
            </div>

        </div>
    </section>

    <div class="sidebar-menu-wrapper">
        <div class="filter_sidebar">
            <button type="button" class="close_btn mb_50"><i class="fal fa-times"></i></button>
            <div class="fs_widget fs_category_list">
                <h3 class="fs_widget_title text-uppercase">Top Categories</h3>
                <ul class="ul_li_block clearfix">
                    <li><a href="#!"><span><i class="fab fa-black-tie"></i></span>Andy</a></li>
                    <li><a href="#!"><span><i class="fal fa-tshirt"></i></span>Ariadne’s Thread</a></li>
                    <li><a href="#!"><span><i class="fal fa-watch"></i></span>Black Swan</a></li>
                    <li><a href="#!"><span><i class="fal fa-compact-disc"></i></span>Disco</a></li>
                    <li><a href="#!"><span><i class="fas fa-gem"></i></span>Discovering Greece</a></li>
                    <li><a href="#!"><span><i class="fal fa-bicycle"></i></span>Folding the News</a></li>
                    <li><a href="#!"><span><i class="far fa-laptop"></i></span>George C.</a></li>
                    <li><a href="#!"><span><i class="fas fa-mobile-alt"></i></span>Helen of Troy</a></li>
                    <li><a href="#!"><span><i class="fab fa-black-tie"></i></span>Hi-Tech</a></li>
                    <li><a href="#!"><span><i class="fab fa-black-tie"></i></span>Yokoso</a></li>
                </ul>
            </div>

            <div class="fs_widget fs_price_list">
                <h3 class="fs_widget_title text-uppercase">Price filter</h3>
                <form action="#">
                    <ul class="ul_li_block clearfix">
                        <li>
                            <input id="fs_price_1" type="radio" name="fs_price_wroup" checked>
                            <label for="fs_price_1">$25 - $100</label>
                        </li>
                        <li>
                            <input id="fs_price_2" type="radio" name="fs_price_wroup">
                            <label for="fs_price_2">$100 - $200</label>
                        </li>
                        <li>
                            <input id="fs_price_3" type="radio" name="fs_price_wroup">
                            <label for="fs_price_3">$200 - $300</label>
                        </li>
                        <li>
                            <input id="fs_price_4" type="radio" name="fs_price_wroup">
                            <label for="fs_price_4">$400 - $500</label>
                        </li>
                        <li>
                            <input id="fs_price_5" type="radio" name="fs_price_wroup">
                            <label for="fs_price_5">$500 - $1000</label>
                        </li>
                    </ul>
                </form>
            </div>

            <div class="fs_widget fs_color_list">
                <h3 class="fs_widget_title text-uppercase">Color filter</h3>
                <form action="#">
                    <ul class="ul_li clearfix">
                        <li><input type="radio" name="fs_color_froup" data-bg-color="#ffa037"></li>
                        <li><input type="radio" name="fs_color_froup" data-bg-color="#6c7ae0"></li>
                        <li><input type="radio" name="fs_color_froup" data-bg-color="#f23226"></li>
                        <li><input type="radio" name="fs_color_froup" data-bg-color="#828664"></li>
                        <li><input type="radio" name="fs_color_froup" data-bg-color="#68a3c2"></li>
                        <li><input type="radio" name="fs_color_froup" data-bg-color="#009122"></li>
                        <li><input type="radio" name="fs_color_froup" data-bg-color="#0099f7"></li>
                        <li><input type="radio" name="fs_color_froup" data-bg-color="#bb8c80"></li>
                        <li><input type="radio" name="fs_color_froup" data-bg-color="#ffa037"></li>
                        <li><input type="radio" name="fs_color_froup" data-bg-color="#875546"></li>
                        <li><input type="radio" name="fs_color_froup" data-bg-color="#f74877"></li>
                        <li><input type="radio" name="fs_color_froup" data-bg-color="#1f1e29"></li>
                        <li><input type="radio" name="fs_color_froup" data-bg-color="#dddddd"></li>
                    </ul>
                </form>
            </div>

            <div class="fs_widget fs_size_list">
                <h3 class="fs_widget_title text-uppercase">Size filter</h3>
                <form action="#">
                    <ul class="ul_li clearfix">
                        <li>
                            <label for="fs_size_1"><input id="fs_size_1" type="radio" name="fs_size_group">XS</label>
                        </li>
                        <li>
                            <label for="fs_size_2"><input id="fs_size_2" type="radio" name="fs_size_group">S</label>
                        </li>
                        <li>
                            <label for="fs_size_3"><input id="fs_size_3" type="radio" name="fs_size_group">M</label>
                        </li>
                        <li>
                            <label for="fs_size_4"><input id="fs_size_4" type="radio" name="fs_size_group">L</label>
                        </li>
                        <li>
                            <label for="fs_size_5"><input id="fs_size_5" type="radio" name="fs_size_group">XL</label>
                        </li>
                        <li>
                            <label for="fs_size_6"><input id="fs_size_6" type="radio" name="fs_size_group">XXL</label>
                        </li>
                    </ul>
                </form>
            </div>

            <div class="fs_widget fs_realted_post">
                <h3 class="fs_widget_title text-uppercase">Your may also like</h3>
                <div class="small_blog">
                    <a href="/blogs_blogDetails" class="item_image">
                        <img src="assets/images/recent_post/img_01.jpg" alt="image_not_found">
                    </a>
                    <div class="item_content">
                        <h3 class="item_title">
                            <a href="/blogs_blogDetails">
                                A Sound Way To Treat Hearing Loss
                            </a>
                        </h3>
                        <span class="post_date">March 12, 2020</span>
                    </div>
                </div>

                <div class="small_blog">
                    <a href="/blogs_blogDetails" class="item_image">
                        <img src="assets/images/recent_post/img_01.jpg" alt="image_not_found">
                    </a>
                    <div class="item_content">
                        <h3 class="item_title">
                            <a href="/blogs_blogDetails">
                                A Sound Way To Treat Hearing Loss
                            </a>
                        </h3>
                        <span class="post_date">March 12, 2020</span>
                    </div>
                </div>

                <div class="small_blog">
                    <a href="/blogs_blogDetails" class="item_image">
                        <img src="assets/images/recent_post/img_01.jpg" alt="image_not_found">
                    </a>
                    <div class="item_content">
                        <h3 class="item_title">
                            <a href="/blogs_blogDetails">
                                A Sound Way To Treat Hearing Loss
                            </a>
                        </h3>
                        <span class="post_date">March 12, 2020</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product_section - end
    ================================================== -->


</main>
@endsection

@section('footer')
    @include('home.furniture.furniture_Footer')
@endsection

