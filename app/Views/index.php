<!DOCTYPE html>
<html lang="en">
<head>
<title>Elora's</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/styles/bootstrap4/bootstrap.min.css">
<link href="assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="assets/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="assets/styles/responsive.css">
</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">
	<?php $session = session(); ?>

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">BEBAS ONGKIR TANPA SYARAT UP TO 50K</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">
								<!-- whatsapp -->
								<li class="wa">
									<a href="#">
										<i class="fa fa-whatsapp" aria-hidden="true"></i>
										085727275037
									</a>
								</li>
								<li class="account">
									<?php if ($session->get('username')) : ?>
										<a href="#">
											<i class="fa fa-user" aria-hidden="true"></i> <?= $session->get('username'); ?>
											<i class="fa fa-angle-down"></i>
										</a>
										<ul class="account_selection">
											<li><a href="/orders"><i class="fa fa-list" aria-hidden="true"></i>Pesanan Saya</a></li> 
											<li><a href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
										</ul>
									<?php else : ?>
										<a href="#">
											<i class="fa fa-user" aria-hidden="true"></i> Sign In / Register
											<i class="fa fa-angle-down"></i>
										</a>
										<ul class="account_selection">
											<li><a href="/login"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a></li>
											<li><a href="/register"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a></li>
										</ul>
									<?php endif; ?>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="index">Elo<span>ra's</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="/index">beranda</a></li>
								<li><a href="/kategori">kategori</a></li>
								<!-- <li><a href="#">brand</a></li>
								<li><a href="#">promosi</a></li>
								<li><a href="#">e-Gift Card</a></li> -->
								<li><a href="/kontak">Kontak</a></li>
							</ul>
							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
								<?php $session = session(); ?>
								<li class="checkout">
									<a href="<?= site_url('cart'); ?>">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items"><?= count($session->get('cart') ?? []); ?></span>
									</a>
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item has-children">
					<a href="#">
						<i class="fa fa-whatsapp" aria-hidden="true"></i>
							085727275037
					</a>
				</li>
				<li class="account">
					<?php if ($session->get('username')) : ?>
						<a href="#">
							<i class="fa fa-user" aria-hidden="true"></i> <?= $session->get('username'); ?>
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="account_selection">
							<li><a href="/orders"><i class="fa fa-list" aria-hidden="true"></i> Pesanan Saya</a></li>
							<li><a href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
						</ul>
					<?php else : ?>
						<a href="#">
							<i class="fa fa-user" aria-hidden="true"></i> Sign In / Register
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="account_selection">
							<li><a href="/login"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a></li>
							<li><a href="/register"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a></li>
						</ul>
					<?php endif; ?>
				</li>
					<li><a href="/index">beranda</a></li>
					<li><a href="/kategori">kategori</a></li>
					<!-- <li><a href="#">brand</a></li>
					<li><a href="#">promosi</a></li>
					<li><a href="#">e-Gift Card</a></li> -->
					<li><a href="/kontak">Kontak</a></li>		
			</ul>
		</div>
	</div>

	<!-- Slider -->

	<div class="main_slider">
    <div id="carouselExample" class="carousel slide" data-ride="carousel" style="max-width: 70%; margin: auto;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div style="background-image:url(assets/img/1.png); height: 90vh; background-size: contain; background-position: center; background-repeat: no-repeat; display: flex; justify-content: center; align-items: center;">
                </div>
            </div>
            <div class="carousel-item">
                <div style="background-image:url(assets/img/2.png); height: 90vh; background-size: contain; background-position: center; background-repeat: no-repeat; display: flex; justify-content: center; align-items: center;">
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev" style="position: absolute; top: 50%; transform: translateY(-50%); left: 10px;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next" style="position: absolute; top: 50%; transform: translateY(-50%); right: 10px;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>




	<!-- Banner -->

	<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(assets/img/skincare.avif)">
						<div class="banner_category">
							<a href="categories.html">SKincare</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(assets/img/makeup.jpg)">
						<div class="banner_category">
							<a href="categories.html">Make Up</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(assets/img/bodycare.jpg)">
						<div class="banner_category">
							<a href="categories.html">Hair & Bodycare</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Produk</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".skincare">skincare</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".makeup">makeup</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".hairnbody">hair & bodycare</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

						<!-- Product 1 -->

						<div class="product-item skincare">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="assets/img/skintific.jpeg" alt="">
								</div>
								<div class="favorite favorite_left"></div>
								<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-20%</span></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">SKINTIFIC MSH Niacinamide Brightening Moisturizer Glowing Moisture Gel 30g </a></h6>
									<div class="product_price">Rp 128.000<span>Rp 160.000</span></div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="<?= site_url('cart/addToCart/1'); ?>">add to cart</a></div>
						</div>

						<!-- Product 2 -->

						<div class="product-item makeup">
							<div class="product product_filter">
								<div class="product_image">
									<img src="assets/img/bedak-skintific.jpeg" alt="">
								</div>
								<div class="favorite"></div>
								<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">SKINTIFIC Ultra Cover Powder Foundation 9g</a></h6>
									<div class="product_price">Rp 148.800</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="<?= site_url('cart/addToCart/2'); ?>">add to cart</a></div>
						</div>

						<!-- Product 3 -->

						<div class="product-item makeup">
							<div class="product product_filter">
								<div class="product_image">
									<img src="assets/img/tirtir.png" alt="">
								</div>
								<div class="favorite"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">TIRTIR Mask Fit Red Cushion</a></h6>
									<div class="product_price">Rp 288.000</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="<?= site_url('cart/addToCart/3'); ?>">add to cart</a></div>
						</div>

						<!-- Product 4 -->

						<div class="product-item makeup">
							<div class="product product_filter">
								<div class="product_image">
									<img src="assets/img/maybelline-lipteddy.jpeg" alt="">
								</div>
								<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
								<div class="favorite favorite_left"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">Maybelline Superstay Teddy Tint</a></h6>
									<div class="product_price">Rp 140.900</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="<?= site_url('cart/addToCart/4'); ?>">add to cart</a></div>
						</div>

						<!-- Product 5 -->

						<div class="product-item skincare">
							<div class="product product_filter">
								<div class="product_image">
									<img src="assets/img/skintific-retinol-gold.png" alt="">
								</div>
								<div class="favorite"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">SKINTIFIC Retinol Skin Renewal Moisturizer</a></h6>
									<div class="product_price">Rp 115.600</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="<?= site_url('cart/addToCart/5'); ?>">add to cart</a></div>
						</div>

						<!-- Product 6 -->

						<div class="product-item skincare">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="assets/img/dermaangel-hologram.png" alt="">
								</div>
								<div class="favorite favorite_left"></div>
								<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-10%</span></div>
								<div class="product_info">
									<h6 class="product_name"><a href="#single.html">Derma Angel Acne Beauty Patch Hologram - Butterfly & Star</a></h6>
									<div class="product_price">Rp 38.700<span>Rp 43.000</span></div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="<?= site_url('cart/addToCart/6'); ?>">add to cart</a></div>
						</div>

						<!-- Product 7 -->

						<div class="product-item skincare">
							<div class="product product_filter">
								<div class="product_image">
									<img src="assets/img/dermaangel-hologram2.png" alt="">
								</div>
								<div class="favorite"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">Derma Angel Acne Beauty Patch Hologram - Heart & Flower</a></h6>
									<div class="product_price">Rp 43.000</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="<?= site_url('cart/addToCart/7'); ?>">add to cart</a></div>
						</div>

						<!-- Product 8 -->

						<div class="product-item skincare">
							<div class="product product_filter">
								<div class="product_image">
									<img src="assets/img/cosrx.avif" alt="">
								</div>
								<div class="favorite"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">COSRX Ultra-Light Invisible Sunscreen SPF 50 PA++++</a></h6>
									<div class="product_price">Rp 249.000</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="<?= site_url('cart/addToCart/8'); ?>">add to cart</a></div>
						</div>

						<!-- Product 9 -->

						<div class="product-item hairnbody">
							<div class="product product_filter">
								<div class="product_image">
									<img src="assets/img/cbd.png" alt="">
								</div>
								<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
								<div class="favorite favorite_left"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">CBD Professional Bio+Peptide Complex Hair Mask</a></h6>
									<div class="product_price">Rp 126.990</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="<?= site_url('cart/addToCart/9'); ?>">add to cart</a></div>
						</div>

						<!-- Product 10 -->

						<div class="product-item hairnbody">
							<div class="product product_filter">
								<div class="product_image">
									<img src="assets/img/bodyscrub.png" alt="">
								</div>
								<div class="favorite"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">Scarlett Whitening Scarlett Whitening Body Scrub Jolly</a></h6>
									<div class="product_price">Rp 67.500</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="<?= site_url('cart/addToCart/10'); ?>">add to cart</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Deal of the week -->

	<!-- <div class="deal_ofthe_week">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="deal_ofthe_week_img">
						<img src="assets/img/deal_ofthe_week.png" alt="">
					</div>
				</div>
				<div class="col-lg-6 text-right deal_ofthe_week_col">
					<div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
						<div class="section_title">
							<h2>Deal Of The Week</h2>
						</div>
						<ul class="timer">
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="day" class="timer_num">03</div>
								<div class="timer_unit">Day</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="hour" class="timer_num">15</div>
								<div class="timer_unit">Hours</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="minute" class="timer_num">45</div>
								<div class="timer_unit">Mins</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="second" class="timer_num">23</div>
								<div class="timer_unit">Sec</div>
							</li>
						</ul>
						<div class="red_button deal_ofthe_week_button"><a href="#">shop now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- flashsale -->
<!-- 
	<div class="container-flash-sale">
        <h1 class="flash-sale">Elora's Flash Sale</h1>
        <div class="product">
            <img src="https://via.placeholder.com/250x200" alt="Product 1" class="product-image">
            <h2 class="product-title">Product 1</h2>
            <p class="product-price">Rp 100.000</p>
            <p class="product-discount">Rp 80.000</p>
            <p>Stock: 10</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <button class="product-button">Buy Now</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/250x200" alt="Product 2" class="product-image">
            <h2 class="product-title">Product 2</h2>
            <p class="product-price">Rp 150.000</p>
            <p class="product-discount">Rp 120.000</p>
            <p>Stock: 5</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <button class="product-button">Buy Now</button>
        </div>
    </div> -->

	<!-- Best Sellers -->

	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Best Sellers</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product_slider_container">
						<div class="owl-carousel owl-theme product_slider">

							<!-- Slide 1 -->

							<div class="owl-item product_slider_item">
								<div class="product-item skincare">
									<div class="product discount">
										<div class="product_image">
											<img src="assets/img/skintific.jpeg" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-20%</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">SKINTIFIC MSH Niacinamide Brightening Moisturizer Glowing Moisture Gel 30g</a></h6>
											<div class="product_price">Rp 128.000<span>Rp 160.000</span></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 2 -->

							<div class="owl-item product_slider_item">
								<div class="product-item makeup">
									<div class="product">
										<div class="product_image">
											<img src="assets/img/tirtir.png" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">TIRTIR Mask Fit Red Cushion</a></h6>
											<div class="product_price">Rp 288.000</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 3 -->

							<div class="owl-item product_slider_item">
								<div class="product-item makeup">
									<div class="product">
										<div class="product_image">
											<img src="assets/img/bedak-skintific.jpeg" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">SKINTIFIC Ultra Cover Powder Foundation 9g</a></h6>
											<div class="product_price">Rp 148.800</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 4 -->

							<div class="owl-item product_slider_item">
								<div class="product-item makeup">
									<div class="product">
										<div class="product_image">
											<img src="assets/img/maybelline-lipteddy.jpeg" alt="">
										</div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
										<div class="favorite favorite_left"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">Maybelline Superstay Teddy Tint</a></h6>
											<div class="product_price">Rp 140.900</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 5 -->

							<div class="owl-item product_slider_item">
								<div class="product-item skincare">
									<div class="product">
										<div class="product_image">
											<img src="assets/img/skintific-retinol-gold.png" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">SKINTIFIC Retinol Skin Renewal Moisturizer</a></h6>
											<div class="product_price">Rp 115.600</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 6 -->

							<div class="owl-item product_slider_item">
								<div class="product-item skincare">
									<div class="product discount">
										<div class="product_image">
											<img src="assets/img/dermaangel-hologram.png" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="#single.html">Derma Angel Acne Beauty Patch Hologram - Butterfly & Star</a></h6>
											<div class="product_price">Rp 38.700<span>Rp 43.000</span></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 7 -->

							<div class="owl-item product_slider_item">
								<div class="product-item skincare">
									<div class="product">
										<div class="product_image">
											<img src="assets/img/dermaangel-hologram2.png" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">Derma Angel Acne Beauty Patch Hologram - Heart & Flower</a></h6>
											<div class="product_price">Rp 43.000</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 8 -->

							<div class="owl-item product_slider_item">
								<div class="product-item skincare">
									<div class="product">
										<div class="product_image">
											<img src="assets/img/cosrx.avif" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">COSRX Ultra-Light Invisible Sunscreen SPF 50 PA++++</a></h6>
											<div class="product_price">Rp 249.000</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 9 -->

							<div class="owl-item product_slider_item">
								<div class="product-item hairnbody">
									<div class="product">
										<div class="product_image">
											<img src="assets/img/cbd.png" alt="">
										</div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
										<div class="favorite favorite_left"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">CBD Professional Bio+Peptide Complex Hair Mask</a></h6>
											<div class="product_price">Rp 126.990</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 10 -->

							<div class="owl-item product_slider_item">
								<div class="product-item hairnbody">
									<div class="product">
										<div class="product_image">
											<img src="assets/img/bodyscrub.png" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">Scarlett Whitening Scarlett Whitening Body Scrub Jolly</a></h6>
											<div class="product_price">Rp 67.500</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Slider Navigation -->

						<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Benefit -->

	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>free shipping</h6>
							<p>Suffered Alteration in Some Form</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>cach on delivery</h6>
							<p>The Internet Tend To Repeat</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>45 days return</h6>
							<p>Making it Look Like Readable</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>opening all week</h6>
							<p>8AM - 09PM</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Blogs -->

	<div class="blogs">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h2>Latest Blogs</h2>
					</div>
				</div>
			</div>
			<div class="row blogs_container">
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(assets/img/blog1.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">4 Toner Skintific yang Bantu Kulit Jadi Glowing To The Max!</h4>
							<span class="blog_meta">by BeautyHaul | 1 Oktober 2024</span>
							<a class="blog_more" href="https://www.beautyhaul.com/blog/4-toner-skintific-yang-bantu-kulit-jadi-glowing-to-the-max">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(assets/img/blog2.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Foundation Terbaik untuk Kulit Berminyak dan Tahan Lama Seharian</h4>
							<span class="blog_meta">by BeautyHaul | 18 September 2024</span>
							<a class="blog_more" href="https://www.beautyhaul.com/blog/foundation-terbaik-untuk-kulit-berminyak-dan-tahan-lama-seharian">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(assets/img/blog3.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">5 Rekomendasi Acne Patch untuk Hempas Jerawat dengan Maksimal!</h4>
							<span class="blog_meta">by BeautyHaul | 24 September 2024</span>
							<a class="blog_more" href="https://www.beautyhaul.com/blog/5-rekomendasi-acne-patch-untuk-hempas-jerawat-dengan-maksimal">Read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>Newsletter</h4>
						<p>Subscribe to our newsletter and get 20% off your first purchase</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="post">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="contact.html">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr">©2018 All Rights Reserverd. Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Colorlib</a> &amp; distributed by <a href="https://themewagon.com">ThemeWagon</a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/styles/bootstrap4/popper.js"></script>
<script src="assets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="assets/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="assets/plugins/easing/easing.js"></script>
<script src="assets/js/custom.js"></script>
</body>

</html>
