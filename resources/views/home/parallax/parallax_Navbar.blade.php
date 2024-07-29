<header class="header_section parallax_shop_header sticky_header clearfix">
    <div class="header_content_wrap d-flex align-items-center">
        <div class="container-fluid prl_90">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-5">
                    <div class="brand_logo">
                        <a class="brand_link" href="/home">
                            <img src="assets/images/logo/logo.svg" srcset="assets/images/logo/logo_23_2x.png 2x" alt="logo_not_found">
                        </a>
                    </div>
                </div>

                <div class="col-7">
                    <ul class="action_btns_group ul_li_right clearfix">
                        <li>
                            <button type="button" class="search_btn" data-toggle="collapse" data-target="#search_body_collapse" aria-expanded="false" aria-controls="search_body_collapse">
                                <i class="fal fa-search"></i>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="user_btn" data-toggle="collapse" data-target="#use_deropdown" aria-expanded="false" aria-controls="use_deropdown">
                                <i class="fal fa-user"></i>
                            </button>
                            <div id="use_deropdown" class="collapse_dropdown collapse">
                                <div class="dropdown_content">
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
                        </li>
                        <li><button type="button" class="wishlist_btn"><i class="fal fa-heart"></i></button></li>
                        <li>
                            <button type="button" class="cart_btn">
                                <i class="fal fa-shopping-cart"></i>
                                <span class="btn_badge" data-bg-color="#ff3800">2</span>
                            </button>
                        </li>
                        <li><button type="button" class="mobile_menu_btn"><i class="fal fa-bars"></i></button></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="search_body_collapse" class="search_body_collapse collapse">
        <div class="search_body">
            <div class="container-fluid prl_90">
                <form action="#">
                    <div class="form_item mb-0">
                        <input type="search" name="search" placeholder="Type here...">
                        <button type="submit"><i class="fal fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>