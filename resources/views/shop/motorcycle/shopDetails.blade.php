@extends('layout.master')

@section('title')
<title>Motorcycle Parts - Current Tech</title>
@endsection

@section('body_class', 'home_motorcycle')

@section('navbar')
    @include('home.motorcycle.motorcycle_Navbar')
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
    <section class="breadcrumb_section motorcycle_breadcrumb has_overlay text-white text-center d-flex align-items-end clearfix" data-background="assets/images/breadcrumb/bg_12.jpg">
        <div class="overlay" data-bg-color="#191919"></div>
        <div class="container">
            <h1 class="motorcycle_page_title mb_15 text-white">Shop Details</h1>
            <ul class="motorcycle_breadcrumb_nav ul_li_center clearfix">
                <li><a href="#!">Home</a></li>
                <li>Shop</li>
                <li>Motorcycle</li>
                <li>Shop Details</li>
            </ul>
        </div>
    </section>
    <!-- breadcrumb_section - end
    ================================================== -->


    <!-- motorcycle_details - start
    ================================================== -->
    <section class="motorcycle_details clearfix">
        <div class="sec_ptb_100" data-bg-color="#f7f7f7">
            <div class="container maxw_1430">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-5 col-md-7">
                        <div class="product_details_slider">
                            <div class="pd_slide" data-slick='{"dots": false, "arrows": false}'>
                                <div class="item">
                                    <div class="motorcycle_details_image d-flex align-items-center justify-content-center" data-bg-color="#ffffff">
                                        <img src="assets/images/shop/motorcycle/img_01.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="motorcycle_details_image d-flex align-items-center justify-content-center" data-bg-color="#ffffff">
                                        <img src="assets/images/shop/motorcycle/img_02.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="motorcycle_details_image d-flex align-items-center justify-content-center" data-bg-color="#ffffff">
                                        <img src="assets/images/shop/motorcycle/img_03.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="motorcycle_details_image d-flex align-items-center justify-content-center" data-bg-color="#ffffff">
                                        <img src="assets/images/shop/motorcycle/img_04.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="motorcycle_details_image d-flex align-items-center justify-content-center" data-bg-color="#ffffff">
                                        <img src="assets/images/shop/motorcycle/img_01.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="motorcycle_details_image d-flex align-items-center justify-content-center" data-bg-color="#ffffff">
                                        <img src="assets/images/shop/motorcycle/img_02.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="motorcycle_details_image d-flex align-items-center justify-content-center" data-bg-color="#ffffff">
                                        <img src="assets/images/shop/motorcycle/img_03.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="motorcycle_details_image d-flex align-items-center justify-content-center" data-bg-color="#ffffff">
                                        <img src="assets/images/shop/motorcycle/img_04.png" alt="image_not_found">
                                    </div>
                                </div>
                            </div>

                            <div class="pd_slide_nav" data-slick='{"dots": false, "arrows": false}'>
                                <div class="item">
                                    <div class="motorcycle_details_image d-flex align-items-center justify-content-center" data-bg-color="#ffffff">
                                        <img src="assets/images/shop/motorcycle/img_01.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="motorcycle_details_image d-flex align-items-center justify-content-center" data-bg-color="#ffffff">
                                        <img src="assets/images/shop/motorcycle/img_02.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="motorcycle_details_image d-flex align-items-center justify-content-center" data-bg-color="#ffffff">
                                        <img src="assets/images/shop/motorcycle/img_03.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="motorcycle_details_image d-flex align-items-center justify-content-center" data-bg-color="#ffffff">
                                        <img src="assets/images/shop/motorcycle/img_04.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="motorcycle_details_image d-flex align-items-center justify-content-center" data-bg-color="#ffffff">
                                        <img src="assets/images/shop/motorcycle/img_01.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="motorcycle_details_image d-flex align-items-center justify-content-center" data-bg-color="#ffffff">
                                        <img src="assets/images/shop/motorcycle/img_02.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="motorcycle_details_image d-flex align-items-center justify-content-center" data-bg-color="#ffffff">
                                        <img src="assets/images/shop/motorcycle/img_03.png" alt="image_not_found">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="motorcycle_details_image d-flex align-items-center justify-content-center" data-bg-color="#ffffff">
                                        <img src="assets/images/shop/motorcycle/img_04.png" alt="image_not_found">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-7">
                        <div class="motorcycle_details_content">
                            <div class="item_price mb_15 d-flex align-items-center">
                                <span class="text-white" data-bg-color="#202020">€250.00</span> <del>€550.00</del>
                            </div>
                            <h2 class="item_title mb_15">BRAKES M</h2>
                            <ul class="rating_star ul_li mb_30 clearfix">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fal fa-star"></i></li>
                            </ul>
                            <h3 class="title_text text-uppercase">Short description</h3>
                            <p class="mb_30">
                                Aliquam lorem ante, dapibus in,t viverra quis, feugiat Phasellus viverra nulla ut metus varius laoreet srtrum aenean imperdiet. Etiam ultricies nisi vel augue.Aliquam lorem ante, dapibus in,t viverra quis, feugiat Phasellus viverra nulla ut metus 
                            </p>
                            <div class="quantity_input mb_30">
                                <form action="#">
                                    <span class="input_number_decrement"><i class="fal fa-minus"></i></span>
                                    <input class="input_number" type="text" value="1">
                                    <span class="input_number_increment"><i class="fal fa-plus"></i></span>
                                </form>
                            </div>
                            <ul class="btns_group ul_li mb_30 text-uppercase text-center clearfix">
                                <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Add To Cart</span></a></li>
                                <li><a href="#!"><span><i class="fas fa-eye"></i></span> <span>Quick View</span></a></li>
                                <li><a href="#!"><span><i class="fas fa-filter"></i></span> <span>Compare</span></a></li>
                            </ul>
                            <ul class="item_info_list ul_li_block clearfix">
                                <li><strong>SKU:</strong> N/A</li>
                                <li><strong>Categories:</strong> Clothing, Shoes, Jwellery</li>
                                <li><strong>Tags:</strong> Modern, Retro, Clothes</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="motorcycle_big_feature sec_ptb_140 text-center text-white has_overlay mb_100" data-background="assets/images/details/motorcycle/img_01.jpg">
            <div class="overlay" data-bg-color="rgba(25, 25, 25, 0.6)"></div>
            <div class="container">
                <div class="item_content">
                    <a class="play_btn_2 text-white" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fal fa-play-circle"></i></a>
                    <h3 class="item_title text-white mb_15">ACCELERATING YOUR</h3>
                    <p class="mb_30">
                        Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus 
                        varius laoreet srtrum aenean imperdiet. Etiam ultricies nisi vel augue.
                    </p>
                    <a class="custom_btn bg_carparts_red text-uppercase" href="#!">Add To Cart</a>
                </div>
            </div>
        </div>

        <div class="fd_description_tab">
            <div class="container maxw_1430">
                <ul class="nav ul_li text-uppercase" role="tablist">
                    <li>
                        <a class="active" data-toggle="tab" href="#description_tab">Product Description</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#reviews_tab">Reviews</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#information_tab">Additional Information</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="description_tab" class="tab-pane active">
                        <p class="mb_30">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>

                        <h4 class="list_title mb_15">Why do we use it?</h4>
                        <p class="mb_30">
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </p>

                        <h4 class="list_title mb_15">Where does it come from?</h4>
                        <p class="mb-0">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                        </p>
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

                    <div id="information_tab" class="tab-pane fade">
                        <p class="mb_30">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>

                        <h4 class="list_title mb_15">Why do we use it?</h4>
                        <p class="mb_30">
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </p>

                        <h4 class="list_title mb_15">Where does it come from?</h4>
                        <p class="mb-0">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- motorcycle_details - end
    ================================================== -->


    <!-- barnd_section - start
    ================================================== -->
    <div class="barnd_section sec_ptb_50 clearfix">
        <div class="container maxw_1430">
            <div class="barnd_carousel clearfix">
                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_37.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_38.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_39.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_40.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_41.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_42.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_37.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_38.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_39.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_40.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_41.png" alt="image_not_found">
                    </a>
                </div>

                <div class="item">
                    <a class="brand_item" href="#!">
                        <img src="assets/images/brands/img_42.png" alt="image_not_found">
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
    @include('home.motorcycle.motorcycle_Footer')
@endsection
