<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		@yield('title')
		
		<link rel="shortcut icon" href="favicon.ico">

		<!-- fraimwork - css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

		<!-- icon - css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">

		<!-- animation - css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

		<!-- nice select - css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/nice-select.css">

		<!-- carousel - css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
		<link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

		<!-- popup images & videos - css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">

		<!-- jquery ui - css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">
		
		<!-- custom - css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	</head>


	<body class="@yield('body_class')">


		<!-- backtotop - start -->
		<div id="thetop"></div>
		<div class="backtotop bg_carparts_red">
			<a href="#" class="scroll">
				<i class="far fa-arrow-up"></i>
			</a>
		</div>
		<!-- backtotop - end -->

		<!-- preloader - start -->
		<!-- <div id="preloader"></div> -->
		<!-- preloader - end -->


		<!-- header_section - start
		================================================== -->
		@yield('navbar')
		<!-- header_section - end
		================================================== -->


		<!-- main body - start
		================================================== -->	
		@yield('content')
		<!-- main body - end
		================================================== -->


		<!-- footer_section - start
		================================================== -->
		@yield('footer')
		<!-- footer_section - end
		================================================== -->

		
		<!-- fraimwork - jquery include -->
		<script src="assets/js/jquery-3.5.1.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- mobile menu - jquery include -->
        <script src="assets/js/mCustomScrollbar.js"></script>

		<!-- google map - jquery include -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
        <script src="assets/js/gmaps.min.js"></script>

		<!-- animation - jquery include -->
        <script src="assets/js/parallaxie.js"></script>
        <script src="assets/js/wow.min.js"></script>

		<!-- nice select - jquery include -->
        <script src="assets/js/nice-select.min.js"></script>

		<!-- carousel - jquery include -->
        <script src="assets/js/slick.min.js"></script>

		<!-- countdown timer - jquery include -->
        <script src="assets/js/countdown.js"></script>

		<!-- popup images & videos - jquery include -->
        <script src="assets/js/magnific-popup.min.js"></script>

		<!-- filtering & masonry layout - jquery include -->
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>

		<!-- jquery ui - jquery include -->
        <script src="assets/js/jquery-ui.js"></script>

		<!-- custom - jquery include -->
		<script src="assets/js/custom.js"></script>
		
				<!-- product quick view - start -->
		<div class="quickview_modal modal fade" id="quickview_modal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content clearfix">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<div class="item_image">
						<img src="assets/images/shop/fashion_minimal/img_07.jpg" alt="image_not_found">
					</div>
					<div class="item_content">
						<h2 class="item_title mb_15">Digital Infrared Thermometer</h2>
						<div class="rating_star mb_30 clearfix">
							<ul class="float-left ul_li mr-2">
								<li class="active"><i class="las la-star"></i></li>
								<li class="active"><i class="las la-star"></i></li>
								<li class="active"><i class="las la-star"></i></li>
								<li class="active"><i class="las la-star"></i></li>
								<li><i class="las la-star"></i></li>
							</ul>
							<span class="review_text">(12 Reviews)</span>
						</div>
						<span class="item_price mb_15">$49.50</span>
						<p class="mb_30">
							Best Electronic Digital Thermometer adipiscing elit, sed do eiusmod teincididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse us ultrices gravidaes. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
						</p>
						<div class="quantity_form mb_30 clearfix">
							<strong class="list_title">Quantity:</strong>
							<div class="quantity_input">
								<form action="#">
									<span class="input_number_decrement">–</span>
									<input class="input_number" type="text" value="1">
									<span class="input_number_increment">+</span>
								</form>
							</div>
						</div>
						<ul class="btns_group ul_li mb_30 clearfix">
							<li><a href="#!" class="custom_btn bg_carparts_red">Add to Cart</a></li>
							<li><a href="#!" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare Product"><i class="fal fa-sync"></i></a></li>
							<li><a href="#!" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add To Wishlist"><i class="fal fa-heart"></i></a></li>
						</ul>
						<ul class="info_list ul_li_block clearfix">
							<li><strong class="list_title">Category:</strong> <a href="#!">Medical Equipment</a></li>
							<li class="social_icon">
								<strong class="list_title">Share:</strong>
								<ul class="ul_li clearfix">
									<li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#!"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#!"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#!"><i class="fab fa-pinterest-p"></i></a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- product quick view - end -->
		<!-- shop_section - end
			================================================== -->
		
	</body>
</html>