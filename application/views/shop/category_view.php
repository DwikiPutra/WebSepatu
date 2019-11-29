<?php $this->load->view("_partials/header.php") ?>

<body id="category">

    <?php $this->load->view("_partials/navbar.php") ?>

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Shop Category page</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	
	<!-- Start Container Area -->
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<div class="head">Browse Categories</div>
					<ul class="main-categories">
						<li class="main-nav-list"><a data-toggle="collapse" href="#fruitsVegetable" aria-expanded="false" aria-controls="fruitsVegetable"><span
								 class="lnr lnr-arrow-right"></span>Basketball Shoes<span class="number">(71)</span></a>
							<ul class="collapse" id="fruitsVegetable" data-toggle="collapse" aria-expanded="false" aria-controls="fruitsVegetable">
								<li class="main-nav-list child"><a href="#">Kobe<span class="number">(10)</span></a></li> <!-- href ke kategori Kobe -->
								<li class="main-nav-list child"><a href="#">KD<span class="number">(25)</span></a></li> <!-- href ke kategori KD -->
								<li class="main-nav-list child"><a href="#">Kyrie<span class="number">(17)</span></a></li> <!-- href ke kategori Kyrie -->
								<li class="main-nav-list child"><a href="#">More<span class="number">(19)</span></a></li> <!-- href ke kategori more page basketball shoes -->
							</ul>
						</li>

						<li class="main-nav-list"><a data-toggle="collapse" href="#meatFish" aria-expanded="false" aria-controls="meatFish"><span
								 class="lnr lnr-arrow-right"></span>Running Shoes<span class="number">(54)</span></a>
							<ul class="collapse" id="meatFish" data-toggle="collapse" aria-expanded="false" aria-controls="meatFish">
								<li class="main-nav-list child"><a href="#">Nike Zoom<span class="number">(27)</span></a></li> <!-- href ke kategori nike zoom -->
								<li class="main-nav-list child"><a href="#">Springblade<span class="number">(12)</span></a></li> <!-- href ke kategori Springblade -->
								<li class="main-nav-list child"><a href="#">More<span class="number">(15)</span></a></li> <!-- href ke kategori more page running shoes -->
							</ul>
						</li>
						<li class="main-nav-list"><a data-toggle="collapse" href="#cooking" aria-expanded="false" aria-controls="cooking"><span
								 class="lnr lnr-arrow-right"></span>NMD<span class="number">(26)</span></a>
						</li>
						<li class="main-nav-list"><a data-toggle="collapse" href="#beverages" aria-expanded="false" aria-controls="beverages"><span
								 class="lnr lnr-arrow-right"></span>More<span class="number">(20)</span></a>
						</li>
					</ul>
				</div>
				<div class="sidebar-filter mt-50">
					<div class="top-filter-head">Product Filters</div>
					<div class="common-filter">
						<div class="head">Brands</div>
						<form action="#">
							<ul>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="nike" name="brand"><label for="nike">Nike<span>(82)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="adidas" name="brand"><label for="adidas">Adidas<span>(26)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="curry" name="brand"><label for="curry">Under Armour<span>(10)</span></label></li>
							</ul>
						</form>
					</div>
					<div class="common-filter">
						<div class="head">Color</div>
						<form action="#">
							<ul>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="anycolor" name="color"><label for="anycolor">Any Color<span>(171)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="blackandwhite" name="color"><label for="blackandwhite">Black and White<span>(20)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="red" name="color"><label for="red">Red<span>(80)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="gold" name="color"><label for="gold">Gold<span>(50)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="blue" name="color"><label for="blue">Blue<span>(21)</span></label></li>
							</ul>
						</form>
					</div>
					<div class="common-filter">
						<div class="head">Price</div>
						<div class="price-range-area">
							<div id="price-range"></div>
							<div class="value-wrapper d-flex">
								<div class="price">Price:</div>
								<span>$</span>
								<div id="lower-value"></div>
								<div class="to">to</div>
								<span>$</span>
								<div id="upper-value"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting">
						<select>
							<option value="1">Default sorting</option>
							<option value="1">Ascending</option>
							<option value="1">Descending</option>
						</select>
					</div>
					<div class="sorting mr-auto">
						<select>
							<option value="1">Show 6</option>
							<option value="1">Show 9</option>
							<option value="1">Show 12</option>
						</select>
					</div>
					<div class="pagination">
						<?php echo $model['pagination'];?> 
					</div>
				</div>
				<!-- End Filter Bar -->
				
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
						<!-- single product -->
						<?php foreach($model['product'] as $data):?>
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<img class="img-fluid" src="<?php echo base_url();?>assets/img/product/<?php echo $data->gambar;?>.jpg" alt="">
								<div class="product-details">
									<h6><?php echo $data->name;?></h6>
									<div class="price">
										<h6>$<?php echo $data->harga;?></h6>
										<h6 class="l-through">$100.00</h6>
									</div>
									<div class="prd-bottom">

										<a href="#" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="<?php echo base_url(). "shop/detail/". $data->product_id."/". str_replace(" ", "-", $data->name); ?> "class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</section>
				<!-- End Best Seller -->
			</div>
		</div>
	</div>
	<!-- End Container Area -->

	<?php $this->load->view("_partials/footer.php")?>

	<?php $this->load->view("_partials/js.php")?>
</body>

</html>