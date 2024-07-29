@extends('layout.master')

@section('title')
<title>Parallax Shop - Current Tech</title>
@endsection

@section('body_class', 'home_sports')

@section('navbar')
    @include('home.sports.sports_Navbar')
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
    <section class="breadcrumb_section sports_breadcrumb d-flex align-items-end clearfix" data-background="assets/images/breadcrumb/bg_14.jpg">
        <div class="container">
            <h1 class="sports_page_title mb-0 text-uppercase" data-text-color="#363636">Shop Details</h1>
        </div>
    </section>
    <div class="sports_breadcrumb_nav_wrap">
        <div class="container">
            <ul class="sports_breadcrumb_nav ul_li clearfix">
                <li><a href="/home"><i class="fas fa-home"></i></a></li>
                <li>Shop</li>
                <li>Sports</li>
                <li>Shop Details</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb_section - end
    ================================================== -->


    <!-- sports_details - start
    ================================================== -->
    <section class="sports_details sec_ptb_100 pb-0 clearfix">
        <div class="container">
            <div class="row justify-content-lg-between">

                <div class="col-lg-9">
                    <div class="row mb_100 justify-content-lg-between">
                        <div class="col-lg-6 col-md-7">
                            <div class="details_image_tab">
                                <div class="tab-content mb_30">
                                    <div id="di_tab_1" class="tab-pane active">
                                        <div class="details_image">
                                            <img src="assets/images/details/sports/img_01.jpg" alt="image_not_found">
                                        </div>
                                    </div>

                                    <div id="di_tab_2" class="tab-pane fade">
                                        <div class="details_image">
                                            <img src="assets/images/details/sports/img_01.jpg" alt="image_not_found">
                                        </div>
                                    </div>

                                    <div id="di_tab_3" class="tab-pane fade">
                                        <div class="details_image">
                                            <img src="assets/images/details/sports/img_01.jpg" alt="image_not_found">
                                        </div>
                                    </div>

                                    <div id="di_tab_4" class="tab-pane fade">
                                        <div class="details_image">
                                            <img src="assets/images/details/sports/img_01.jpg" alt="image_not_found">
                                        </div>
                                    </div>
                                </div>

                                <ul class="details_image_nav nav ul_li_center" role="tablist">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#di_tab_1">
                                            <img src="assets/images/details/sports/img_02.jpg" alt="image_not_found">
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#di_tab_2">
                                            <img src="assets/images/details/sports/img_03.jpg" alt="image_not_found">
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#di_tab_3">
                                            <img src="assets/images/details/sports/img_04.jpg" alt="image_not_found">
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#di_tab_4">
                                            <img src="assets/images/details/sports/img_05.jpg" alt="image_not_found">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-8">
                            <div class="details_content">
                                <span class="item_type">Clothes</span>
                                <h2 class="item_title mb_15">Men's Polo Bag</h2>
                                <div class="rating_wrap d-flex align-items-center mb_15 text-uppercase">
                                    <ul class="rating_star ul_li mr-2 clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <span class="review_text" data-text-color="#ff3f3f">(5.0 Rating)</span>
                                </div>
                                <p class="mb_15">
                                    Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius est etiam processus dynamicus qui.
                                </p>
                                <span class="product_price mb_30"><del>$99.99</del> <strong>$69.00</strong></span>
                                <div class="item_size d-flex align-items-center mb_30">
                                    <h4 class="list_title text-uppercase mb-0 mr-3">Size:</h4>
                                    <ul class="ul_li clearfix">
                                        <li><button type="button">XS</button></li>
                                        <li><button type="button">X</button></li>
                                        <li><button type="button" class="active">M</button></li>
                                        <li><button type="button">L</button></li>
                                        <li><button type="button">XL</button></li>
                                    </ul>
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
                                        <a class="custom_btn bg_sports_red text-uppercase" href="#!">Add To Cart</a>
                                    </li>
                                </ul>
                                <hr>
                                <div class="item_tags mb_15 d-flex align-items-center">
                                    <h4 class="list_title text-uppercase mb-0 mr-3">Tags:</h4>
                                    <ul class="ul_li clearfix">
                                        <li><a href="#!">T-Shirt</a></li>
                                        <li><a href="#!">Clothes</a></li>
                                        <li><a href="#!">Fashion</a></li>
                                        <li><a href="#!">Shop</a></li>
                                    </ul>
                                </div>
                                <div class="share_links d-flex align-items-center">
                                    <h4 class="list_title text-uppercase mb-0 mr-3">Share:</h4>
                                    <ul class="primary_social_links ul_li_right clearfix">
                                        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sports_description_tab mb_100">
                        <ul class="nav text-uppercase" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#description_tab">Description</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#information_tab">Additional Information</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#review_tab">Reviews (3)</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="description_tab" class="tab-pane active">
                                <h3 class="title_text mb_15">Description:</h3>
                                <p class="mb_15">
                                    Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                                </p>
                                <p class="mb_15">
                                    Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                                </p>
                                <p class="mb-0">
                                    Eodem modo typi, qui nunc nobis videntur parum clari.
                                </p>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <ul class="des_info_list ul_li_block">
                                            <li><i class="fas fa-caret-right"></i>Nam liber tempor cum;</li>
                                            <li><i class="fas fa-caret-right"></i>Mirum est notare quam;</li>
                                            <li><i class="fas fa-caret-right"></i>Claritas est etiam;</li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-5">
                                        <ul class="des_info_list ul_li_block">
                                            <li><i class="fas fa-caret-right"></i>Typi non habent claritatem;</li>
                                            <li><i class="fas fa-caret-right"></i>Eodem modo typi.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div id="information_tab" class="tab-pane fade">
                                
                                <div class="row mb_50">
                                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 order-last">
                                        <div class="image_wrap">
                                            <img src="assets/images/details/shop/img_07.jpg" alt="image_not_found">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                        <div class="content_wrap">
                                            <h4 class="list_title">Paragraph text</h4>
                                            <p class="mb_15">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                            </p>
                                            <p class="mb_30">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                            </p>
                                            
                                            <h4 class="list_title">Pretium turpis et arcu</h4>
                                            <p class="mb-0">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <span class="aware_info_icons">
                                    <img src="assets/images/icons/aware_icons.png" alt="image_not_found">
                                </span>
                                
                            </div>

                            <div id="review_tab" class="tab-pane fade">
                                <form action="#">
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
                        </div>
                    </div>

                    <div class="sports_related_products">
                        <div class="sports_section_title text-uppercase">
                            <span class="sub_title mb-0">Join Our</span>
                            <h3 class="title_text mb-0">Related Products</h3>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="sports_product_item">
                                    <div class="item_image" data-bg-color="#f5f5f5">
                                        <img src="assets/images/shop/sports/img_01.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                            <li><a href="#!"><i class="fas fa-shopping-cart"></i></a></li>
                                        </ul>
                                        <ul class="product_label ul_li text-uppercase clearfix">
                                            <li class="bg_sports_red">50% Off</li>
                                            <li class="bg_sports_red">Sale</li>
                                        </ul>
                                    </div>
                                    <div class="item_content text-uppercase text-white">
                                        <h3 class="item_title bg_black text-white mb-0">PHANTOM VISION ACADEMY</h3>
                                        <span class="item_price bg_sports_red"><strong>$195</strong> <del>$390</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="sports_product_item">
                                    <div class="item_image" data-bg-color="#f5f5f5">
                                        <img src="assets/images/shop/sports/img_02.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                            <li><a href="#!"><i class="fas fa-shopping-cart"></i></a></li>
                                        </ul>
                                        <ul class="product_label ul_li text-uppercase clearfix">
                                            <li class="bg_sports_red">50% Off</li>
                                            <li class="bg_sports_red">Sale</li>
                                        </ul>
                                    </div>
                                    <div class="item_content text-uppercase text-white">
                                        <h3 class="item_title bg_black text-white mb-0">HOODIE & MORE</h3>
                                        <span class="item_price bg_sports_red"><strong>$195</strong> <del>$390</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="sports_product_item">
                                    <div class="item_image" data-bg-color="#f5f5f5">
                                        <img src="assets/images/shop/sports/img_03.png" alt="image_not_found">
                                        <ul class="product_action_btns ul_li_center clearfix">
                                            <li><a href="#!"><i class="fal fa-search"></i></a></li>
                                            <li><a href="#!"><i class="fas fa-shopping-cart"></i></a></li>
                                        </ul>
                                        <ul class="product_label ul_li text-uppercase clearfix">
                                            <li class="bg_sports_red">50% Off</li>
                                            <li class="bg_sports_red">Sale</li>
                                        </ul>
                                    </div>
                                    <div class="item_content text-uppercase text-white">
                                        <h3 class="item_title bg_black text-white mb-0">Nike Free RN Flyknit</h3>
                                        <span class="item_price bg_sports_red"><strong>$195</strong> <del>$390</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <aside class="sports_sidebar sidebar_section">
                        <div class="sb_widget sb_search">
                            <h3 class="sb_widget_title text-uppercase">Search</h3>
                            <form action="#">
                                <div class="form_item mb-0">
                                    <input type="search" name="search" placeholder="Type and hit Enter...">
                                </div>
                            </form>
                        </div>

                        <div class="sb_widget sb_category">
                            <h3 class="sb_widget_title text-uppercase">Categories</h3>
                            <ul class="ul_li_block clearfix">
                                <li><a href="#!"><i class="fas fa-caret-right mr-2"></i> Accessories <span>(68)</span></a></li>
                                <li><a href="#!"><i class="fas fa-caret-right mr-2"></i> Clothing <span>(36)</span></a></li>
                                <li><a href="#!"><i class="fas fa-caret-right mr-2"></i> Things <span>(29)</span></a></li>
                                <li><a href="#!"><i class="fas fa-caret-right mr-2"></i> Polygraphy <span>(20)</span></a></li>
                                <li><a href="#!"><i class="fas fa-caret-right mr-2"></i> Other <span>(7)</span></a></li>
                            </ul>
                        </div>

                        <div class="sb_widget sb_pricing_range">
                            <h3 class="sb_widget_title text-uppercase">Filter by Price:</h3>
                            <form action="#">
                                <div class="price-range-area clearfix">
                                    <div id="slider-range" class="slider-range"></div>
                                    <div class="price-text d-flex mb_15 align-items-center">
                                        <span>Price:</span>
                                        <input type="text" id="amount" readonly>
                                    </div>
                                    <button type="button" class="price_filter_btn text-uppercase">Filter</button>
                                </div>
                            </form>
                        </div>

                        <div class="sb_widget sb_recent_post">
                            <h3 class="sb_widget_title text-uppercase">Popular Items</h3>
                            <div class="carparts_small_blog">
                                <a class="item_image" href="/blogs_blogDetails">
                                    <img src="assets/images/details/sports/img_02.jpg" alt="image_not_found">
                                </a>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title text-uppercase">
                                        <a href="/blogs_blogDetails">
                                            earphone case
                                        </a>
                                    </h3>
                                    <div class="item_price"><strong data-text-color="#39b54a">$29.90</strong> <del>$48.90</del></div>
                                </div>
                            </div>

                            <div class="carparts_small_blog">
                                <a class="item_image" href="/blogs_blogDetails">
                                    <img src="assets/images/details/sports/img_03.jpg" alt="image_not_found">
                                </a>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title text-uppercase">
                                        <a href="/blogs_blogDetails">
                                            earphone case
                                        </a>
                                    </h3>
                                    <div class="item_price"><strong data-text-color="#39b54a">$29.90</strong> <del>$48.90</del></div>
                                </div>
                            </div>

                            <div class="carparts_small_blog">
                                <a class="item_image" href="/blogs_blogDetails">
                                    <img src="assets/images/details/sports/img_04.jpg" alt="image_not_found">
                                </a>
                                <div class="item_content">
                                    <ul class="rating_star ul_li clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <h3 class="item_title text-uppercase">
                                        <a href="/blogs_blogDetails">
                                            earphone case
                                        </a>
                                    </h3>
                                    <div class="item_price"><strong data-text-color="#39b54a">$29.90</strong> <del>$48.90</del></div>
                                </div>
                            </div>
                        </div>

                        <div class="sb_widget sb_newsletter">
                            <h3 class="sb_widget_title text-uppercase">Search</h3>
                            <form action="#">
                                <div class="form_item mb-0">
                                    <input type="email" name="email" placeholder="Email Address">
                                    <button type="submit" class="submit_btn">
                                        <img src="assets/images/icons/send.png" alt="icon_not_found">
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="sb_widget sb_tags">
                            <h3 class="sb_widget_title text-uppercase">Popular Tags</h3>
                            <ul class="ul_li clearfix">
                                <li><a href="#!">Mock-Ups</a></li>
                                <li><a href="#!">UI</a></li>
                                <li><a href="#!">Websites</a></li>
                                <li><a href="#!">Brand</a></li>
                                <li><a href="#!">PSD Templates</a></li>
                                <li><a href="#!">WordPress</a></li>
                                <li><a href="#!">UI Kit</a></li>
                                <li><a href="#!">Graphic Design</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
                
            </div>
        </div>
    </section>
    <!-- sports_details - end
    ================================================== -->


    <!-- brand_section - start
    ================================================== -->
    <div class="brand_section sec_ptb_100 clearfix">
        <div class="container-fluid prl_100">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row justify-content-center">
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_31.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_32.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_33.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_34.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_35.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_36.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_32.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_34.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_31.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_36.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6">
                            <a class="brand_item" href="#!">
                                <img src="assets/images/brands/img_35.png" alt="image_not_found">
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6">
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
    @include('home.sports.sports_Footer')
@endsection

