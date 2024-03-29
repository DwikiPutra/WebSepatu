<!-- Start Header Area -->
<header class="header_area sticky-header">
	<div class="main_menu">
		<nav class="navbar navbar-expand-lg navbar-light main_box">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href=<?php echo base_url(); ?>><img src="<?php echo base_url(); ?>assets/img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					 <span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href=<?php echo base_url(); ?>>Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Shop</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href=<?php echo base_url('shop/category') ?>>Shop Category</a></li>
								</ul>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<?php if($this->session->username): ?>
										<li class="nav-item"><a class="nav-link" href=<?php echo base_url('login/logout')?>>Logout</a></li>
									<?php else: ?>
										<li class="nav-item"><a class="nav-link" href=<?php echo base_url('login/index')?>>Login</a></li>
									<?php endif; ?>
									<li class="nav-item"><a class="nav-link" href=<?php echo base_url('login/tracking')?>>Tracking</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href=<?php echo base_url('contact/kontak')?>>Contact</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href=<?php if($this->session->username){echo base_url('shop/cart')."/". $this->session->userid;}else{echo base_url('login/index');} ?> class="cart"><span class="ti-bag"></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
		
		<?php if($this->session->flashdata('succes') == TRUE): ?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
		<p><?php echo $this->session->flashdata('succes');?></p>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<?php elseif($this->session->flashdata('fail') == TRUE): ?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  <p><?php echo $this->session->flashdata('fail');?></p>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<?php endif; ?>
	</header>
	<!-- End Header Area -->