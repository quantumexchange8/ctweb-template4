@extends('layout.master')

@section('title')
<title>Medical Shop - Current Tech</title>
@endsection

@section('body_class', 'home_medical')

@section('navbar')
    @include('home.medical.medical_Navbar')
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
    <section class="breadcrumb_section medical_breadcrumb text-center d-flex align-items-end clearfix" data-background="assets/images/breadcrumb/bg_09.jpg">
        <div class="container">
            <h1 class="medical_page_title mb_15">Products Details</h1>
            <ul class="medical_breadcrumb_nav ul_li_center clearfix">
                <li><a href="#!">Home</a></li>
                <li>Shop</li>
                <li>Medical</li>
                <li>Shop Details</li>
            </ul>
        </div>
    </section>
    <!-- breadcrumb_section - end
    ================================================== -->


    <!-- medical_details_section - start
    ================================================== -->
    <section class="medical_details_section sec_ptb_100 pb-0 clearfix">
        <div class="container">
            <div class="row mb_100 justify-content-lg-between">
                <div class="col-lg-6 col-md-7">
                    <div class="details_image position-relative">
                        <div class="tab-content">
                            <div id="di_tab_1" class="tab-pane active">
                                <div class="image_wrap">
                                    <img src="assets/images/details/medical/img_01.jpg" alt="image_not_found">
                                </div>
                            </div>
                            <div id="di_tab_2" class="tab-pane fade">
                                <div class="image_wrap">
                                    <img src="assets/images/details/medical/img_01.jpg" alt="image_not_found">
                                </div>
                            </div>
                            <div id="di_tab_3" class="tab-pane fade">
                                <div class="image_wrap">
                                    <img src="assets/images/details/medical/img_01.jpg" alt="image_not_found">
                                </div>
                            </div>
                            <div id="di_tab_4" class="tab-pane fade">
                                <div class="image_wrap">
                                    <img src="assets/images/details/medical/img_01.jpg" alt="image_not_found">
                                </div>
                            </div>
                        </div>
                        <ul class="nav ul_li_center clearfix" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#di_tab_1">
                                    <img src="assets/images/details/medical/img_02.jpg" alt="image_not_found">
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#di_tab_2">
                                    <img src="assets/images/details/medical/img_03.jpg" alt="image_not_found">
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#di_tab_3">
                                    <img src="assets/images/details/medical/img_04.jpg" alt="image_not_found">
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#di_tab_4">
                                    <img src="assets/images/details/medical/img_05.jpg" alt="image_not_found">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-9">
                    <div class="details_content">
                        <span class="item_price d-flex align-items-center"><del>$23.99</del> <strong>$16.99</strong></span>
                        <h2 class="item_title">Free Packaging Medicine</h2>
                        <div class="rating_review_wrap d-flex align-items-center mb_15 clearfix">
                            <ul class="rating_star ul_li mr-3">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                            <span data-text-color="#4e97fd">3 customer reviews</span>
                        </div>
                        <p class="mb_30">
                            Qolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibham liber tempor cum soluta nobis eleifend option congue nihil uarta decima et quinta. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.
                        </p>
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
                            <li><a class="custom_btn bg_medical_blue text-uppercase" href="#!"><i class="fas fa-cart-arrow-down mr-2"></i>Add to Cart</a></li>
                        </ul>
                        <hr>
                        <div class="item_author d-flex align-items-center mb_15">
                            <h4 class="list_title mb-0 mr-2">Author:</h4>
                            <strong data-text-color="#4e97fd">Samuel Peterson</strong>
                        </div>
                        <div class="item_tags d-flex align-items-center mb_15">
                            <h4 class="list_title mb-0 mr-2">Tags:</h4>
                            <a href="#!">Free Packaging Medicine</a>
                            <a href="#!">Books</a>
                            <a href="#!">Marketing</a>
                            <a href="#!">Strategy</a>
                        </div>
                        <div class="post_share d-flex align-items-center">
                            <h4 class="list_title mb-0 mr-3">Share:</h4>
                            <a href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a href="#!"><i class="fab fa-twitter"></i></a>
                            <a href="#!"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#!"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#!"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="medical_details_description">
            <div class="container">
                <div class="nav_wrap d-inline-block">
                    <ul class="nav ul_li text-uppercase" role="tablist" data-bg-color="#f1f3f3">
                        <li>
                            <a class="active" data-toggle="tab" href="#description_tab"><span>Description</span></a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#reviews_tab"><span>Reviews</span></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="sec_ptb_100" data-bg-color="#f7f9f9">
                <div class="container">
                    <div class="tab-content">
                        <div id="description_tab" class="tab-pane active">
                            <h3 class="title_text mb_15">Product Description:</h3>
                            <p class="mb_15">
                                Iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat <span data-text-color="#2f2c2c">nulla facilisis at vero eros et accumsan</span> et iusto odio dignissim qui blandit praesent luptatum quam nunc putamus parum claram. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. 
                            </p>
                            <p class="mb_30">
                                Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                            </p>
                            <ul class="info_list ul_li_block clearfix">
                                <li>
                                    <i class="far fa-check"></i>
                                    <p class="mb-0">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh <span data-text-color="#4cc2c0">euismod tincidunt</span>;
                                    </p>
                                </li>
                                <li>
                                    <i class="far fa-check"></i>
                                    <p class="mb-0">
                                        Mirum est notare quam littera gothica;
                                    </p>
                                </li>
                                <li>
                                    <i class="far fa-check"></i>
                                    <p class="mb-0">
                                        <span data-text-color="#4e97fd">Claritas est etiam processus dynamicus sequitur;</span>
                                    </p>
                                </li>
                                <li>
                                    <i class="far fa-check"></i>
                                    <p class="mb-0">
                                        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore;
                                    </p>
                                </li>
                                <li>
                                    <i class="far fa-check"></i>
                                    <p class="mb-0">
                                        Investigationes demonstraverunt lectores.
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div id="reviews_tab" class="tab-pane fade">
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
            </div>
        </div>
    </section>
    <!-- medical_details_section - end
    ================================================== -->


    <!-- product_section - start
    ================================================== -->
    <section class="product_section sec_ptb_100 clearfix">
        <div class="container">
            <div class="medical_section_title text-center mb_50 clearfix">
                <h2 class="title_text">Related Product</h2>
                <p class="mb-0">Best Madcican Product</p>
            </div>

            <div class="product_carousel arrow_ycenter">
                <div class="slideshow4_slider medical_product_group" data-slick='{"dots": false}'>
                    <div class="item">
                        <div class="medical_product_item">
                            <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                            <div class="item_image">
                                <img src="assets/images/shop/medical/img_01.png" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <ul class="rating_star ul_li clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                                <h3 class="item_title">
                                    <a href="#!">
                                        Advanced Upper Arm Blood Pressure
                                    </a>
                                </h3>
                                <span class="price_text">$30.00</span>
                                <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="medical_product_item">
                            <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                            <div class="item_image">
                                <img src="assets/images/shop/medical/img_02.png" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <ul class="rating_star ul_li clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                                <h3 class="item_title">
                                    <a href="#!">
                                        Advanced Upper Arm Blood Pressure
                                    </a>
                                </h3>
                                <span class="price_text">$30.00</span>
                                <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="medical_product_item">
                            <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                            <div class="item_image">
                                <img src="assets/images/shop/medical/img_03.png" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <ul class="rating_star ul_li clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                                <h3 class="item_title">
                                    <a href="#!">
                                        Advanced Upper Arm Blood Pressure
                                    </a>
                                </h3>
                                <span class="price_text">$30.00</span>
                                <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="medical_product_item">
                            <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                            <div class="item_image">
                                <img src="assets/images/shop/medical/img_04.png" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <ul class="rating_star ul_li clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                                <h3 class="item_title">
                                    <a href="#!">
                                        Advanced Upper Arm Blood Pressure
                                    </a>
                                </h3>
                                <span class="price_text">$30.00</span>
                                <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="medical_product_item">
                            <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                            <div class="item_image">
                                <img src="assets/images/shop/medical/img_01.png" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <ul class="rating_star ul_li clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                                <h3 class="item_title">
                                    <a href="#!">
                                        Advanced Upper Arm Blood Pressure
                                    </a>
                                </h3>
                                <span class="price_text">$30.00</span>
                                <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="medical_product_item">
                            <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                            <div class="item_image">
                                <img src="assets/images/shop/medical/img_02.png" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <ul class="rating_star ul_li clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                                <h3 class="item_title">
                                    <a href="#!">
                                        Advanced Upper Arm Blood Pressure
                                    </a>
                                </h3>
                                <span class="price_text">$30.00</span>
                                <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="medical_product_item">
                            <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                            <div class="item_image">
                                <img src="assets/images/shop/medical/img_03.png" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <ul class="rating_star ul_li clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                                <h3 class="item_title">
                                    <a href="#!">
                                        Advanced Upper Arm Blood Pressure
                                    </a>
                                </h3>
                                <span class="price_text">$30.00</span>
                                <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="medical_product_item">
                            <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
                            <div class="item_image">
                                <img src="assets/images/shop/medical/img_04.png" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <ul class="rating_star ul_li clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                                <h3 class="item_title">
                                    <a href="#!">
                                        Advanced Upper Arm Blood Pressure
                                    </a>
                                </h3>
                                <span class="price_text">$30.00</span>
                                <a href="#!" class="addtocart_btn bg_medical_blue"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_nav">
                    <button type="button" class="ss4_left_arrow"><i class="fal fa-angle-left"></i></button>
                    <button type="button" class="ss4_right_arrow"><i class="fal fa-angle-right"></i></button>
                </div>
            </div>
        </div>
    </section>
    <!-- product_section - end
    ================================================== -->


</main>
@endsection

@section('footer')
    @include('home.medical.medical_Footer')
@endsection

