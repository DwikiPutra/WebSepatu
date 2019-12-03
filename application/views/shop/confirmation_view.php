<?php $this->load->view("_partials/header.php") ?>

<body>

    <?php $this->load->view("_partials/navbar.php") ?>

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Confirmation</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Order Details Area =================-->
	<section class="order_details section_gap">
		<div class="container">
			<h3 class="title_confirmation">Thank you. Your order has been received.</h3>
			<div class="row order_d_inner">
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Order Info</h4>
						<ul class="list">
							<li><a><span>Order number</span> : 60606</a></li>
							<li><a><span>Date</span> : 12/5/2019</a></li>
							<li><a><span>Time</span> : 06:30</a></li>
							<li><a><span>Payment method</span> : PayPal</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4"> <!-- Ini Sesuai Dengan class="col-lg-8" -->
					<div class="details_item">
						<h4>Billing Address</h4>
						<ul class="list">
							<li><a><span>Street</span> : Jl. Raya Bogor</a></li>
							<li><a><span>City</span> : Bogor</a></li>
							<li><a><span>Country</span> : Indonesia</a></li>
							<li><a><span>Postcode </span> : 36952</a></li>
						</ul>
					</div>
				</div>
				<!-- Ini Bingung Dapat Addressnya dari mana mulai dari 47-58 -->
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Shipping Address</h4>
						<ul class="list">
							<li><a><span>Street</span> : Jl. Jendral Sudirman</a></li>
							<li><a><span>City</span> : Jakarta Selatan</a></li>
							<li><a><span>Country</span> : Indonesia</a></li>
							<li><a><span>Postcode </span> : 105217</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="order_details_table">
				<h2>Order Details</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Product</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
							<?php $subtotal = 0;
							foreach($cart as $crt):
								$total = $crt->harga * $crt->quantity; 
								$subtotal += $total; ?>
							<tr>
								<td>
									<p><?php echo $crt->name; ?></p>
								</td>
								<td>
									<h6>x <?php echo $crt->quantity; ?></h6>
								</td>
								<td>
									<p>$<?php echo $total?></p>
								</td>
							</tr>
							<?php endforeach;?>
							<tr>
								<td>
									<h6>Subtotal</h6>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>$<?php echo $subtotal; ?></p>
								</td>
							</tr>
							<tr>
								<td>
									<h6>Shipping</h6> <!-- Ini Default Aja Harganya 8.99 -->
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>$8.99</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Total</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<h4>$<?php echo $subtotal + 8.99; ?></h4>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Order Details Area =================-->

	<?php $this->load->view("_partials/footer.php")?>

	<?php $this->load->view("_partials/js.php")?>
</body>

</html>