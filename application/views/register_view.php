<?php $this->load->view("_partials/header.php") ?>

<body>

    <?php $this->load->view("_partials/navbar.php") ?>

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Register</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
                <div class="col-lg-3">
					
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Register</h3>
						<form class="row login_form" action="<?php echo base_url('login/formRegister')?>" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" value="<?php echo set_value('name');?>" id="name" name="name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
								<?php echo form_error('name'); ?>
							</div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" value="<?php echo set_value('email');?>"id="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
								<?php echo form_error('email'); ?>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="pass" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
								<?php echo form_error('password'); ?>
							</div>
							<div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="passconf" name="passwordconf" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
								<?php echo form_error('passwordconf'); ?>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Create</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->

	<?php $this->load->view("_partials/footer.php")?>

	<?php $this->load->view("_partials/js.php")?>
</body>

</html>