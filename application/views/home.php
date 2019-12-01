<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view("_partials/header.php") ?>
<body>

	<?php $this->load->view("_partials/navbar.php") ?>
	
	<!--- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>Nike New <br>Collection!</h1>
									<h5>Nike Zoom Soldier VIII Flyease</h5>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="assets/img/banner/banner-img1.png" alt="">
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide">
							<div class="col-lg-5">
								<div class="banner-content">
									<h1>Under Armour New <br>Collection!</h1>
									<h5>Under Armour Curry 5 Low Black Gold</h5>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="assets/img/banner/banner-img2.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="assets/img/features/f-icon1.png" alt="">
						</div>
						<h6>Free Delivery</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="assets/img/features/f-icon2.png" alt="">
						</div>
						<h6>Return Policy</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="assets/img/features/f-icon3.png" alt="">
						</div>
						<h6>24/7 Support</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="assets/img/features/f-icon4.png" alt="">
						</div>
						<h6>Secure Payment</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->

	<!-- Start category Area -->
	<section class="category-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-12">
					<div class="row">
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="assets/img/category/c1.jpg" alt="">
								<a href="assets/img/category/c1.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Sneaker for Sports</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="assets/img/category/c2.jpg" alt="">
								<a href="assets/img/category/c2.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Sneaker for Sports</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="assets/img/category/c3.jpg" alt="">
								<a href="assets/img/category/c3.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Sneaker for Sports</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="assets/img/category/c4.jpg" alt="">
								<a href="assets/img/category/c4.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Sneaker for Sports</h6>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-deal">
						<div class="overlay"></div>
						<img class="img-fluid w-100" src="assets/img/category/c5.jpg" alt="">
						<a href="assets/img/category/c5.jpg" class="img-pop-up" target="_blank">
							<div class="deal-details">
								<h6 class="deal-title">Sneaker for Sports</h6>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End category Area -->

	<!-- start product Area -->
	<section class="owl-carousel active-product-area section_gap">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Latest Products</h1>
							<p>New Products for 2019</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<?php foreach( $lProduct as $pro):?>
						<div class="col-lg-3 col-md-6">
							<div class="single-product">
								<img class="img-fluid" src="assets/img/product/<?php echo $pro->gambar; ?>.jpg" alt="">
								<div class="product-details">
									<h6><?php echo $pro->name; ?></h6>
									<div class="price">
										<h6>$<?php echo strval($pro->harga); ?></h6>
										<h6 class="l-through">$100.00</h6>
									</div>
									<div class="prd-bottom">
										<a class="social-info">
											<span class="ti-bag"></span> <!-- Ini Belum Aktif -->
											<p class="hover-text">add to bag</p>
										</a>
										<a class="social-info">
											<span class="lnr lnr-move"></span> <!-- Ini sama kyak kategori view more -->
											<p class="hover-text">view more</p>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Coming Products</h1>
							<p>New Products for 2020</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<?php foreach($cProduct as $p):?>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="assets/img/product/<?php echo $p->gambar; ?>.jpg" alt="">
							<div class="product-details">
								<h6><?php echo $p->name; ?></h6>
								<div class="price">
									<h6>$<?php echo $p->harga; ?></h6>
									<h6 class="l-through">$415.00</h6>
								</div>
								<div class="prd-bottom">

									<a class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach;?>
				</div>
			</div>
		</div>
	</section>
	<!-- end product Area -->

	<!-- Start exclusive deal Area -->
	<section class="exclusive-deal-area">
		<div class="container-fluid">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6 no-padding exclusive-left">
					<div class="row clock_sec clockdiv" id="clockdiv">
						<div class="col-lg-12">
							<h1>Exclusive Hot Deal Ends Soon!</h1>
							<p>Who are in extremely love with eco friendly system.</p>
						</div>
						<div class="col-lg-12">
							<div class="row clock-wrap">
								<div class="col clockinner1 clockinner">
									<h1 class="days">19</h1>
									<span class="smalltext">Days</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="hours">05</h1>
									<span class="smalltext">Hours</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="minutes">20</h1>
									<span class="smalltext">Mins</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="seconds">59</h1>
									<span class="smalltext">Secs</span>
								</div>
							</div>
						</div>
					</div>
					<a href=<?php echo base_url('shop/category') ?> class="primary-btn">Shop Now</a>
				</div>
				<div class="col-lg-6 no-padding exclusive-right">
					<div class="active-exclusive-product-slider">
						<!-- single exclusive carousel -->
						<div class="single-exclusive-slider">
							<img class="img-fluid" src="assets/img/product/e-p1.png" alt="">
							<div class="product-details">
								<div class="price">
									<h6>$86.99</h6>
									<h6 class="l-through">$140.00</h6>
								</div>
								<h4>Mamba Focus Black</h4>
							</div>
						</div>
						<!-- single exclusive carousel -->
						<div class="single-exclusive-slider">
							<img class="img-fluid" src="assets/img/product/e-p2.png" alt="">
							<div class="product-details">
								<div class="price">
									<h6>$250.00</h6>
									<h6 class="l-through">$300.00</h6>
								</div>
								<h4>Kobe 11 Elite GCR Great Career Recall</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End exclusive deal Area -->

	<!-- Start brand Area -->
	<section class="brand-area section_gap">
		<div class="container">
			<div class="row">
				<a class="col single-img"> <!-- href ke kategori nike -->
					<img class="img-fluid d-block mx-auto" src="assets/img/brand/1.png" alt="">
				</a>
				<a class="col single-img"> <!-- href ke kategori under armour -->
					<img class="img-fluid d-block mx-auto" src="assets/img/brand/2.png" alt="">
				</a>
				<a class="col single-img"> <!-- href ke kategori adidas -->
					<img class="img-fluid d-block mx-auto" src="assets/img/brand/3.png" alt="">
				</a>
			</div>
		</div>
	</section>
	<!-- End brand Area -->

	<?php $this->load->view("_partials/footer.php")?>

	<?php $this->load->view("_partials/js.php")?>

</html>