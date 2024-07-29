@extends('layout.master')

@section('title')
<title>Blog Details - Current Tech</title>
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
            <h1 class="page_title text-white">Blog Details</h1>
            <ul class="breadcrumb_nav ul_li_center clearfix">
                <li><a href="#!">Home</a></li>
                <li>Blog</li>
                <li>Blog Details</li>
            </ul>
        </div>
    </section>
    <!-- breadcrumb_section - end
    ================================================== -->


    <!-- details_section - start
    ================================================== -->
    <section class="details_section blog_details sec_ptb_140 clearfix">
        <div class="container">
            <div class="row justify-content-lg-between">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="details_image mb_30">
                        <img src="assets/images/blog/main_blog/img_07.jpg" alt="image_not_found">
                    </div>
                    <div class="row mb_15 align-items-center justify-content-lg-between">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <ul class="post_meta ul_li clearfix">
                                <li><a class="post_admin" href="#!"><span class="admin_thumbnail"><img src="assets/images/meta/img_01.png" alt="image_not_found"></span> by Admin</a></li>
                                <li>May 25, 2020</li>
                                <li><a href="#!">Business</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <ul class="post_meta ul_li_right clearfix">
                                <li><a href="#!"><i class="fas fa-heart"></i> 20</a></li>
                                <li><a href="#!"><i class="fas fa-comment-alt-lines"></i> 9</a></li>
                            </ul>
                        </div>
                    </div>
                    <h2 class="item_title mb_30">Blog Single Left SideBar</h2>
                    <p class="mb_30">
                        Morbi rutrum est quam, nec hendrerit nulla fringilla vitae. In lacinia cursus felis, et fringilla augue sagittis eu. Sed volutpat mattis suscipit. Nulla facilisi. Sed ac porta elit. Sed congue nisi non ipsum tincidunt, nec consectetur ipsum convallis.
                    </p>
                    <p class="mb_30">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget mi sem. Nulla facilisi. Sed ultricies eros a nibh tempus, in sodales mi vestibulum. Nullam quis dui ac nisl ultrices euismod et sit amet urna. Morbi semper sapien quis ex tempor, sit amet scelerisque eros rhoncus. Cras scelerisque auctor gravida. Nunc fermentum luctus rhoncus. Nulla vulputate fermentum convallis. In quis pellentesque tortor. Cras metus nibh, gravida vitae ante vel, finibus semper tellus. Nulla vel tincidunt magna. Morbi tempor velit lectus, eu commodo quam volutpat vitae. 
                    </p>
                    <ul class="dotted_info_list ul_li_block mb_50 clearfix">
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                        <li>Fusce dignissim tortor et elit dapibus cursus. Aenean lorem ligula, egestas et magna</li>
                        <li>Nunc sed vulputate velit quis luctus lectus</li>
                        <li>Aenean lectus mauris, fermentum sed turpis eget, condimentum molestie leo</li>
                        <li>Proin suscipit, justo sit amet tristique ultrices, ex magna efficitur lectus, at rutrum dui ex id nulla</li>
                        <li>Integer in elementum risus. Fusce nec metus leo. </li>
                        <li>Quisque vel pretium neque. Proin hendrerit, ante molestie eleifend mattis, tellus nunc elementum felis</li>
                        <li>Sollicitudin sapien magna quis est. Quisque non vestibulum libero</li>
                    </ul>

                    <blockquote class="mb_50">
                        <p class="mb_15">
                            Cras nec odio facilisis, suscipit sem sit amet, tincidunt turpis. Praesent diam eros, consectetur ac viverra vitae, imperdiet ut est. 
                        </p>
                        <h4 class="blockquote_title text-uppercase mb-0">John Doe, Envato</h4>
                    </blockquote>

                    <ul class="item_tag_list ul_li clearfix">
                        <li><h4 class="list_title text-uppercase mb-0">Tags:</h4></li>
                        <li><a href="#!">Design</a></li>
                        <li><a href="#!">Theme</a></li>
                        <li><a href="#!">Mobile</a></li>
                        <li><a href="#!">WordPress</a></li>
                        <li><a href="#!">Responsive</a></li>
                        <li><a href="#!">Development</a></li>
                    </ul>

                    <div class="post_share_box mb_50" data-bg-color="#da0a2c">
                        <h4 class="wrap_title text-uppercase text-white">Share this Article</h4>
                        <ul class="circle_social_links ul_li clearfix">
                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#!"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>

                    <div class="other_post_wrap mb_50">
                        <a class="other_post" href="#!">
                            <small class="text-uppercase"><i class="fal fa-angle-left mr-2"></i> Prev</small>
                            <span>
                                15 Notable Products at Borvo Interior Design Contest
                            </span>
                        </a>
                        <a class="other_post" href="#!">
                            <small class="text-uppercase">Next <i class="fal fa-angle-right ml-2"></i></small>
                            <span>
                                5 Small Studio Apartments With Beautiful Design
                            </span>
                        </a>
                    </div>

                    <div class="post_author mb_100 clearfix" data-bg-color="#e6e6e6">
                        <div class="author_image">
                            <img src="assets/images/meta/img_05.png" alt="image_not_found">
                        </div>
                        <div class="author_info_content">
                            <h4 class="author_name text-uppercase">John Doe / <span>About author</span></h4>
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget mi sem. Nulla facilisi. Sed ultricies eros a nibh tempus, in sodales mi vestibulum. Nullam quis dui ac nisl ultrices euismod et sit amet urna. Morbi semper sapien quis ex te
                            </p>
                        </div>
                    </div>

                    <div class="related_post_carousel position-relative mb_100">
                        <h3 class="title_text text-uppercase mb_30">Related Articles</h3>
                        <div class="slideshow3_slider" data-slick='{"dots": false}'>
                            <div class="item">
                                <div class="blog_grid">
                                    <a class="blog_image" href="/blogs_blogDetails">
                                        <img src="assets/images/blog/main_blog/img_08.jpg" alt="image_not_found">
                                    </a>
                                    <div class="blog_content">
                                        <ul class="post_meta ul_li clearfix">
                                            <li>May 25, 2020</li>
                                            <li><a href="#!">By Admin</a></li>
                                        </ul>
                                        <h3 class="blog_title">
                                            <a href="#!">Foundation for a Smart Nation</a>
                                        </h3>
                                        <p class="mb_15">
                                            Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare ligula eget porta tellu
                                        </p>
                                        <a class="text_btn" href="/blogs_blogDetails"><span>Read More</span> <i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="blog_grid">
                                    <a class="blog_image" href="/blogs_blogDetails">
                                        <img src="assets/images/blog/main_blog/img_09.jpg" alt="image_not_found">
                                    </a>
                                    <div class="blog_content">
                                        <ul class="post_meta ul_li clearfix">
                                            <li>May 25, 2020</li>
                                            <li><a href="#!">By Admin</a></li>
                                        </ul>
                                        <h3 class="blog_title">
                                            <a href="#!">Great Benefits Of Natural Skin Care</a>
                                        </h3>
                                        <p class="mb_15">
                                            Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare ligula eget porta tellu
                                        </p>
                                        <a class="text_btn" href="/blogs_blogDetails"><span>Read More</span> <i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="blog_grid">
                                    <a class="blog_image" href="/blogs_blogDetails">
                                        <img src="assets/images/blog/main_blog/img_10.jpg" alt="image_not_found">
                                    </a>
                                    <div class="blog_content">
                                        <ul class="post_meta ul_li clearfix">
                                            <li>May 25, 2020</li>
                                            <li><a href="#!">By Admin</a></li>
                                        </ul>
                                        <h3 class="blog_title">
                                            <a href="#!">The Importance Of Food Elements</a>
                                        </h3>
                                        <p class="mb_15">
                                            Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare ligula eget porta tellu
                                        </p>
                                        <a class="text_btn" href="/blogs_blogDetails"><span>Read More</span> <i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="blog_grid">
                                    <a class="blog_image" href="/blogs_blogDetails">
                                        <img src="assets/images/blog/main_blog/img_08.jpg" alt="image_not_found">
                                    </a>
                                    <div class="blog_content">
                                        <ul class="post_meta ul_li clearfix">
                                            <li>May 25, 2020</li>
                                            <li><a href="#!">By Admin</a></li>
                                        </ul>
                                        <h3 class="blog_title">
                                            <a href="#!">Foundation for a Smart Nation</a>
                                        </h3>
                                        <p class="mb_15">
                                            Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare ligula eget porta tellu
                                        </p>
                                        <a class="text_btn" href="/blogs_blogDetails"><span>Read More</span> <i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="blog_grid">
                                    <a class="blog_image" href="/blogs_blogDetails">
                                        <img src="assets/images/blog/main_blog/img_09.jpg" alt="image_not_found">
                                    </a>
                                    <div class="blog_content">
                                        <ul class="post_meta ul_li clearfix">
                                            <li>May 25, 2020</li>
                                            <li><a href="#!">By Admin</a></li>
                                        </ul>
                                        <h3 class="blog_title">
                                            <a href="#!">Great Benefits Of Natural Skin Care</a>
                                        </h3>
                                        <p class="mb_15">
                                            Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare ligula eget porta tellu
                                        </p>
                                        <a class="text_btn" href="/blogs_blogDetails"><span>Read More</span> <i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="blog_grid">
                                    <a class="blog_image" href="/blogs_blogDetails">
                                        <img src="assets/images/blog/main_blog/img_10.jpg" alt="image_not_found">
                                    </a>
                                    <div class="blog_content">
                                        <ul class="post_meta ul_li clearfix">
                                            <li>May 25, 2020</li>
                                            <li><a href="#!">By Admin</a></li>
                                        </ul>
                                        <h3 class="blog_title">
                                            <a href="#!">The Importance Of Food Elements</a>
                                        </h3>
                                        <p class="mb_15">
                                            Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare ligula eget porta tellu
                                        </p>
                                        <a class="text_btn" href="/blogs_blogDetails"><span>Read More</span> <i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel_nav">
                            <button type="button" class="ss3_left_arrow"><i class="fal fa-angle-left"></i></button>
                            <button type="button" class="ss3_right_arrow"><i class="fal fa-angle-right"></i></button>
                        </div>
                    </div>

                    <div class="comment_form">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form_item">
                                        <input type="text" name="name" placeholder="Your Name *">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form_item">
                                        <input type="email" name="email" placeholder="Email Address *">
                                    </div>
                                </div>
                            </div>

                            <div class="form_item">
                                <input type="text" name="website" placeholder="Website *">
                            </div>

                            <div class="form_item">
                                <textarea name="comment" placeholder="Your Comment *"></textarea>
                            </div>

                            <button type="submit" class="custom_btn bg_default_red text-uppercase">Send Now <i class="fal fa-paper-plane ml-2"></i></button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <aside class="sidebar_section clearfix">
                        <div class="sb_widget sb_search">
                            <form action="#">
                                <div class="form_item mb-0">
                                    <input type="search" name="search" placeholder="Search...">
                                    <button type="submit" class="submit_btn"><i class="fal fa-search"></i></button>
                                </div>
                            </form>
                        </div>

                        <div class="sb_widget sb_recent_post">
                            <h3 class="sb_widget_title">Recent Posts</h3>
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
                                    <img src="assets/images/recent_post/img_02.jpg" alt="image_not_found">
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
                                    <img src="assets/images/recent_post/img_03.jpg" alt="image_not_found">
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
                                    <img src="assets/images/recent_post/img_04.jpg" alt="image_not_found">
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
                                    <img src="assets/images/recent_post/img_05.jpg" alt="image_not_found">
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

                        <div class="sb_widget sb_instagram">
                            <h3 class="sb_widget_title">Instagram</h3>
                            <ul class="zoom-gallery ul_li clearfix">
                                <li>
                                    <a class="popup_image" href="assets/images/instagram/img_48.jpg">
                                        <img src="assets/images/instagram/img_48.jpg" alt="image_not_found">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="popup_image" href="assets/images/instagram/img_49.jpg">
                                        <img src="assets/images/instagram/img_49.jpg" alt="image_not_found">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="popup_image" href="assets/images/instagram/img_50.jpg">
                                        <img src="assets/images/instagram/img_50.jpg" alt="image_not_found">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="popup_image" href="assets/images/instagram/img_51.jpg">
                                        <img src="assets/images/instagram/img_51.jpg" alt="image_not_found">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="popup_image" href="assets/images/instagram/img_52.jpg">
                                        <img src="assets/images/instagram/img_52.jpg" alt="image_not_found">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="popup_image" href="assets/images/instagram/img_53.jpg">
                                        <img src="assets/images/instagram/img_53.jpg" alt="image_not_found">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="sb_widget sb_category">
                            <h3 class="sb_widget_title">Category</h3>
                            <ul class="ul_li_block clearfix">
                                <li><a href="#!">Business <span>(161)</span></a></li>
                                <li><a href="#!">Technology <span>(52)</span></a></li>
                                <li><a href="#!">Art & Design <span>(120)</span></a></li>
                                <li><a href="#!">Life Style <span>(35)</span></a></li>
                                <li><a href="#!">Sport <span>(6)</span></a></li>
                                <li><a href="#!">Music <span>(2)</span></a></li>
                            </ul>
                        </div>

                        <div class="sb_widget sb_tags">
                            <h3 class="sb_widget_title">Tags</h3>
                            <ul class="ul_li clearfix">
                                <li><a href="#!">Design</a></li>
                                <li><a href="#!">Theme</a></li>
                                <li><a href="#!">Mobile</a></li>
                                <li><a href="#!">WordPress</a></li>
                                <li><a href="#!">Responsive</a></li>
                                <li><a href="#!">Development</a></li>
                                <li><a href="#!">Design</a></li>
                                <li><a href="#!">Theme</a></li>
                                <li><a href="#!">Mobile</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- details_section - end
    ================================================== -->


</main>
@endsection

@section('footer')
    @include('pages.pages_Footer')
@endsection

