<?php $this->load->view("_partials/header.php") ?>

<body>

    <?php $this->load->view("_partials/navbar.php") ?>

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Checkout</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Billing Details</h3>
                        <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="first" name="name">
                                <span class="placeholder" data-placeholder="First name"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="last" name="name">
                                <span class="placeholder" data-placeholder="Last name"></span>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="company" name="company" placeholder="Company name">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="number" name="number">
                                <span class="placeholder" data-placeholder="Phone number"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="email" name="compemailany">
                                <span class="placeholder" data-placeholder="Email Address"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select class="country_select">
									<option value="" selected="selected">Select Country</option> 
									<option value="United Kingdom">United Kingdom</option> 
									<option value="Australia">Australia</option>
									<option value="Belgium">Belgium</option> 
									<option value="Brazil">Brazil</option> 
									<option value="Brunei Darussalam">Brunei Darussalam</option> 
									<option value="Bulgaria">Bulgaria</option> 
									<option value="China">China</option> 
									<option value="Denmark">Denmark</option> 
									<option value="Finland">Finland</option> 
									<option value="France">France</option>
									<option value="Germany">Germany</option> 
									<option value="Hong Kong">Hong Kong</option> 
									<option value="Hungary">Hungary</option> 
									<option value="Iceland">Iceland</option> 
									<option value="India">India</option> 
									<option value="Indonesia">Indonesia</option>
									<option value="Japan">Japan</option>
									<option value="Netherlands">Netherlands</option>
									<option value="Saudi Arabia">Saudi Arabia</option> 
									<option value="Singapore">Singapore</option> 
									<option value="United States">United States</option> 
                                </select>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add1" name="add1">
                                <span class="placeholder" data-placeholder="Address line"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="city" name="city">
                                <span class="placeholder" data-placeholder="Town/City"></span>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP">
                            </div>
                            <div class="col-md-12 form-group">
                                <!-- Ini Dipakai Ngga?
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="selector">
                                    <label for="f-option2">Create an account?</label>
                                </div>
                                --> <!-- Pakai ini -->
                                <a class="primary-btn" href="#">Confirm</a> <!-- Optional si Sa, Atau Ini. Klau Aku Ini -->
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            <ul class="list">
                                <li><a>Product <span>Total</span></a></li>
                                <?php $subtotal = 0;  
                                foreach($cart as $crt): 
                                $total = $crt->harga * $crt->quantity;
                                $subtotal += $total; ?>
                                <li><a><?php echo $crt->name; ?> <span class="middle">x <?php echo $crt->quantity; ?></span> <span class="last">$<?php echo $total; ?></span></a></li>
                                <?php endforeach;?>
                            </ul>
                            <ul class="list list_2">
                                <li><a>Subtotal <span>$<?php echo $subtotal; ?></span></a></li>
                                <li><a>Shipping <span>$8.99</span></a></li>
                                <li><a>Total <span>$<?php echo $subtotal + 8.99; ?></span></a></li>
                            </ul>
                            <div class="payment_item active">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option6" name="selector">
                                    <label for="f-option6">Paypal </label>
                                    <img src="<?php echo base_url();?>assets/img/product/card.jpg" alt="">
                                    <div class="check"></div>
                                </div>
                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                                    account.</p>
                            </div>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector">
                                <label for="f-option4">I’ve read and accept the </label>
                                <a>terms & conditions*</a>
                            </div>
                            <a class="primary-btn" href=<?php echo base_url('shop/confirmation')."/". $this->session->userid ?>>Proceed to Paypal</a> <!-- href ke confirmation-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->

	<?php $this->load->view("_partials/footer.php")?>

	<?php $this->load->view("_partials/js.php")?>
</body>

</html>