@extends('layout.master')


@section('title')
<title>Creative Onelook - Current Tech</title>
@endsection

@section('body_class', 'home_creative_onelook')

@section('navbar')
    @include('home.creativeOneLook.creative_Navbar')
@endsection

@section('content')
<main>


    <!-- sidebar mobile menu & sidebar cart - start
    ================================================== -->
    <div class="sidebar-menu-wrapper">
        <div class="filter_sidebar">
            <button type="button" class="close_btn mb_50"><i class="fal fa-times"></i></button>
            <div class="fs_widget fs_category_list">
                <h3 class="fs_widget_title text-uppercase">Top Categories</h3>
                <ul class="ul_li_block clearfix">
                    <li><a href="#!">Video</a></li>
                    <li><a href="#!">Charachters</a></li>
                    <li><a href="#!">Comics</a></li>
                    <li><a href="#!">Movies</a></li>
                    <li><a href="#!">Games</a></li>
                    <li><a href="#!">News</a></li>
                    <li><a href="#!">More</a></li>
                </ul>
            </div>
        </div>

        <div class="overlay"></div>
    </div>
    <!-- sidebar mobile menu & sidebar cart - end
    ================================================== -->


    <!-- slider_section - start
    ================================================== -->
    <section class="onelook_slider clearfix" data-slick='{"arrows": false, "dots": false}' data-background="assets/images/backgrounds/bg_14.png">

        <!-- slider section - start -->
        <div class="slider-item clearfix">
            <div class="onelook_main_slider position-relative">
                <div class="main_slider clearfix" data-slick='{"dots": false}'>
                    <div class="item d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-lg-between">
                                <div class="col-lg-6 order-last">
                                    <div class="slider_image" data-animation="fadeInRight" data-delay=".2s">
                                        <img src="assets/images/slider/creative_onelook/img_01.png" alt="image_not_found">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="slider_content">
                                        <h3 data-animation="fadeInUp" data-delay=".4s">Sabdiavin WorkBag</h3>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <h4 data-animation="fadeInUp" data-delay=".6s">The first time with Marvel Studios Ant - Man</h4>
                                            </div>
                                            <div class="col-lg-7">
                                                <p class="mb_30" data-animation="fadeInUp" data-delay=".8s">
                                                    Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium. legunt saepius claritas est.
                                                </p>
                                                <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                                                    <a href="#!" class="custom_btn bg_onelook_red">Go to Purchase Bag</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-lg-between">
                                <div class="col-lg-6 order-last">
                                    <div class="slider_image" data-animation="fadeInRight" data-delay=".2s">
                                        <img src="assets/images/slider/creative_onelook/img_01.png" alt="image_not_found">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="slider_content">
                                        <h3 data-animation="fadeInUp" data-delay=".4s">Sabdiavin WorkBag</h3>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <h4 data-animation="fadeInUp" data-delay=".6s">The first time with Marvel Studios Ant - Man</h4>
                                            </div>
                                            <div class="col-lg-7">
                                                <p class="mb_30" data-animation="fadeInUp" data-delay=".8s">
                                                    Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium. legunt saepius claritas est.
                                                </p>
                                                <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                                                    <a href="#!" class="custom_btn bg_onelook_red">Go to Purchase Bag</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-lg-between">
                                <div class="col-lg-6 order-last">
                                    <div class="slider_image" data-animation="fadeInRight" data-delay=".2s">
                                        <img src="assets/images/slider/creative_onelook/img_01.png" alt="image_not_found">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="slider_content">
                                        <h3 data-animation="fadeInUp" data-delay=".4s">Sabdiavin WorkBag</h3>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <h4 data-animation="fadeInUp" data-delay=".6s">The first time with Marvel Studios Ant - Man</h4>
                                            </div>
                                            <div class="col-lg-7">
                                                <p class="mb_30" data-animation="fadeInUp" data-delay=".8s">
                                                    Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium. legunt saepius claritas est.
                                                </p>
                                                <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                                                    <a href="#!" class="custom_btn bg_onelook_red">Go to Purchase Bag</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_nav">
                    <button type="button" class="main_left_arrow"><i class="fal fa-chevron-left"></i></button>
                    <button type="button" class="main_right_arrow"><i class="fal fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
        <!-- slider section - end -->

        <div class="slider-item">
            <div class="onelook_carousel_wrap1 vh-100 d-flex align-items-center justify-content-center clearfix">
                <div class="container">
                    <div class="ol_product_carousel arrow_ycenter">
                        <div class="slideshow3_slider row" data-slick='{"dots": false}'>
                            <div class="item col">
                                <div class="onelook_product1 text-center">
                                    <div class="item_image">
                                        <img src="assets/images/shop/creative_onelook/img_01.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="!">WorkBag</a>
                                        </h3>
                                        <span class="item_price">$230 - $420</span>
                                        <p class="mb-0">
                                            Investigationes demonstraverunt lectores legere me lius quod ii legunt 
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="item col">
                                <div class="onelook_product1 text-center">
                                    <div class="item_image">
                                        <img src="assets/images/shop/creative_onelook/img_01.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="!">WorkBag</a>
                                        </h3>
                                        <span class="item_price">$230 - $420</span>
                                        <p class="mb-0">
                                            Investigationes demonstraverunt lectores legere me lius quod ii legunt 
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="item col">
                                <div class="onelook_product1 text-center">
                                    <div class="item_image">
                                        <img src="assets/images/shop/creative_onelook/img_01.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="!">WorkBag</a>
                                        </h3>
                                        <span class="item_price">$230 - $420</span>
                                        <p class="mb-0">
                                            Investigationes demonstraverunt lectores legere me lius quod ii legunt 
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="item col">
                                <div class="onelook_product1 text-center">
                                    <div class="item_image">
                                        <img src="assets/images/shop/creative_onelook/img_01.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="!">WorkBag</a>
                                        </h3>
                                        <span class="item_price">$230 - $420</span>
                                        <p class="mb-0">
                                            Investigationes demonstraverunt lectores legere me lius quod ii legunt 
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="item col">
                                <div class="onelook_product1 text-center">
                                    <div class="item_image">
                                        <img src="assets/images/shop/creative_onelook/img_01.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="!">WorkBag</a>
                                        </h3>
                                        <span class="item_price">$230 - $420</span>
                                        <p class="mb-0">
                                            Investigationes demonstraverunt lectores legere me lius quod ii legunt 
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="item col">
                                <div class="onelook_product1 text-center">
                                    <div class="item_image">
                                        <img src="assets/images/shop/creative_onelook/img_01.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="!">WorkBag</a>
                                        </h3>
                                        <span class="item_price">$230 - $420</span>
                                        <p class="mb-0">
                                            Investigationes demonstraverunt lectores legere me lius quod ii legunt 
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="item col">
                                <div class="onelook_product1 text-center">
                                    <div class="item_image">
                                        <img src="assets/images/shop/creative_onelook/img_01.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="!">WorkBag</a>
                                        </h3>
                                        <span class="item_price">$230 - $420</span>
                                        <p class="mb-0">
                                            Investigationes demonstraverunt lectores legere me lius quod ii legunt 
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="item col">
                                <div class="onelook_product1 text-center">
                                    <div class="item_image">
                                        <img src="assets/images/shop/creative_onelook/img_01.png" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="!">WorkBag</a>
                                        </h3>
                                        <span class="item_price">$230 - $420</span>
                                        <p class="mb-0">
                                            Investigationes demonstraverunt lectores legere me lius quod ii legunt 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel_nav">
                            <button type="button" class="ss3_left_arrow"><i class="fal fa-chevron-left"></i></button>
                            <button type="button" class="ss3_right_arrow"><i class="fal fa-chevron-right"></i></button>
                        </div>
                    </div>

                    <div class="abtn_wrap text-center clearfix">
                        <a class="text_btn" href="#!"><span>More Collection</span> <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item d-flex align-items-center">
            <div class="container">
                <div class="onelook_section_title mb_30 text-right clearfix">
                    <h2 class="title_text mb-0 text-white"><span>New BAGS Collection</span></h2>
                </div>

                <div class="onelook_carousel_wrap2 arrow_ycenter clearfix mb_50">
                    <div class="slideshow4_slider" data-slick='{"dots": false}'>
                        <div class="item">
                            <div class="onelook_product2 text-center">
                                <div class="item_image">
                                    <img src="assets/images/shop/creative_onelook/img_01.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="!">WorkBag</a>
                                    </h3>
                                    <span class="item_price">$230 - $420</span>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="onelook_product2 text-center">
                                <div class="item_image">
                                    <img src="assets/images/shop/creative_onelook/img_01.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="!">WorkBag</a>
                                    </h3>
                                    <span class="item_price">$230 - $420</span>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="onelook_product2 text-center">
                                <div class="item_image">
                                    <img src="assets/images/shop/creative_onelook/img_01.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="!">WorkBag</a>
                                    </h3>
                                    <span class="item_price">$230 - $420</span>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="onelook_product2 text-center">
                                <div class="item_image">
                                    <img src="assets/images/shop/creative_onelook/img_01.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="!">WorkBag</a>
                                    </h3>
                                    <span class="item_price">$230 - $420</span>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="onelook_product2 text-center">
                                <div class="item_image">
                                    <img src="assets/images/shop/creative_onelook/img_01.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="!">WorkBag</a>
                                    </h3>
                                    <span class="item_price">$230 - $420</span>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="onelook_product2 text-center">
                                <div class="item_image">
                                    <img src="assets/images/shop/creative_onelook/img_01.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="!">WorkBag</a>
                                    </h3>
                                    <span class="item_price">$230 - $420</span>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="onelook_product2 text-center">
                                <div class="item_image">
                                    <img src="assets/images/shop/creative_onelook/img_01.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="!">WorkBag</a>
                                    </h3>
                                    <span class="item_price">$230 - $420</span>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="onelook_product2 text-center">
                                <div class="item_image">
                                    <img src="assets/images/shop/creative_onelook/img_01.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="!">WorkBag</a>
                                    </h3>
                                    <span class="item_price">$230 - $420</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel_nav">
                        <button type="button" class="ss4_left_arrow"><i class="fal fa-chevron-left"></i></button>
                        <button type="button" class="ss4_right_arrow"><i class="fal fa-chevron-right"></i></button>
                    </div>
                </div>

                <div class="abtn_wrap text-center clearfix">
                    <a class="text_btn" href="#!"><span>More Collection</span> <i class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="slider-item d-flex align-items-center">
            <div class="container">

                <div class="onelook_carousel_wrap3 position-relative">
                    <div class="slideshow1_slider" data-slick='{"dots": false}'>
                        <div class="item">
                            <div class="onelook_product3 text-white text-center">
                                <div class="item_image">
                                    <img src="assets/images/shop/creative_onelook/img_03.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <div class="item_price"><del>$23.99</del> <strong>$16.99</strong></div>
                                    <h3 class="item_title">
                                        <a href="#!">Marketing Strategy</a>
                                    </h3>
                                    <div class="rating_star_wrap mb_15 d-flex align-items-center justify-content-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">3 customer Reviews</span>
                                    </div>
                                    <p>
                                        Qolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibham liber tempor cum soluta nobis eleifend option congue nihil uarta decima et quinta. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.
                                    </p>
                                    <ul class="btns_group ul_li_center clearfix">
                                        <li>
                                            <div class="quantity_input rounded-0 bg-white p-0">
                                                <form action="#">
                                                    <span class="input_number_decrement">–</span>
                                                    <input class="input_number" type="text" value="1">
                                                    <span class="input_number_increment">+</span>
                                                </form>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="custom_btn bg_onelook_red" href="#!">Add To Cart <i class="fas fa-shopping-cart ml-1"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="onelook_product3 text-white text-center">
                                <div class="item_image">
                                    <img src="assets/images/shop/creative_onelook/img_03.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <div class="item_price"><del>$23.99</del> <strong>$16.99</strong></div>
                                    <h3 class="item_title">
                                        <a href="#!">Marketing Strategy</a>
                                    </h3>
                                    <div class="rating_star_wrap mb_15 d-flex align-items-center justify-content-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">3 customer Reviews</span>
                                    </div>
                                    <p>
                                        Qolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibham liber tempor cum soluta nobis eleifend option congue nihil uarta decima et quinta. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.
                                    </p>
                                    <ul class="btns_group ul_li_center clearfix">
                                        <li>
                                            <div class="quantity_input rounded-0 bg-white p-0">
                                                <form action="#">
                                                    <span class="input_number_decrement">–</span>
                                                    <input class="input_number" type="text" value="1">
                                                    <span class="input_number_increment">+</span>
                                                </form>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="custom_btn bg_onelook_red" href="#!">Add To Cart <i class="fas fa-shopping-cart ml-1"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="onelook_product3 text-white text-center">
                                <div class="item_image">
                                    <img src="assets/images/shop/creative_onelook/img_03.png" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <div class="item_price"><del>$23.99</del> <strong>$16.99</strong></div>
                                    <h3 class="item_title">
                                        <a href="#!">Marketing Strategy</a>
                                    </h3>
                                    <div class="rating_star_wrap mb_15 d-flex align-items-center justify-content-center clearfix">
                                        <ul class="rating_star ul_li mr-2 clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="rating_value">3 customer Reviews</span>
                                    </div>
                                    <p>
                                        Qolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibham liber tempor cum soluta nobis eleifend option congue nihil uarta decima et quinta. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.
                                    </p>
                                    <ul class="btns_group ul_li_center clearfix">
                                        <li>
                                            <div class="quantity_input rounded-0 bg-white p-0">
                                                <form action="#">
                                                    <span class="input_number_decrement">–</span>
                                                    <input class="input_number" type="text" value="1">
                                                    <span class="input_number_increment">+</span>
                                                </form>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="custom_btn bg_onelook_red" href="#!">Add To Cart <i class="fas fa-shopping-cart ml-1"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel_nav">
                        <button type="button" class="left_arrow"><i class="fal fa-long-arrow-left"></i></button>
                        <button type="button" class="right_arrow"><i class="fal fa-long-arrow-right"></i></button>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- slider_section - end
    ================================================== -->


</main>
@endsection

