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
							<li><a href="#"><span>Order number</span> : 60606</a></li>
							<li><a href="#"><span>Date</span> : Indonesia</a></li>
							<li><a href="#"><span>Total</span> : $805.99</a></li>
							<li><a href="#"><span>Payment method</span> : Check payments</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Billing Address</h4>
						<ul class="list">
							<li><a href="#"><span>Street</span> : U3/56</a></li>
							<li><a href="#"><span>City</span> : Indonesia</a></li>
							<li><a href="#"><span>Country</span> : Jakarta Selatan</a></li>
							<li><a href="#"><span>Postcode </span> : 36952</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Shipping Address</h4>
						<ul class="list">
							<li><a href="#"><span>Street</span> : U3/56</a></li>
							<li><a href="#"><span>City</span> : Indonesia</a></li>
							<li><a href="#"><span>Country</span> : Jakarta</a></li>
							<li><a href="#"><span>Postcode </span> : 105217</a></li>
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
							<tr>
								<td>
									<p>KD 6 All Star</p>
								</td>
								<td>
									<h6>x 01</h6>
								</td>
								<td>
									<p>$170.00</p>
								</td>
							</tr>
							<tr>
								<td>
									<p>Kobe A.D. NXT Wolf Grey</p>
								</td>
								<td>
									<h6>x 03</h6>
								</td>
								<td>
									<p>$555.00</p>
								</td>
							</tr>
							<tr>
								<td>
									<h6>Subtotal</h6>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>$725.00</p>
								</td>
							</tr>
							<tr>
								<td>
									<h6>Shipping</h6>
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
									<h4>$805.99</h4>
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