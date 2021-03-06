<?

$logo=$this->model_logo->find_all_active();
//debug($logo);

?>

<header>


	<div class="main-header">
		<div class="container-fluid">
			<div class="menu-Bar homeArea">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="row align-items-center">
				<div class="col-md-2 text-left">
					<a href="<?= l('') ?>" class="logo">
						<img src="<?=i('')?>test1.png" alt="">
					</a>
				</div>
				<div class="col-md-7">
					<div class="menuWrap">
						<ul class="menu">
							<li><a class="<?= ($this->uri->segment(1) == 'expert-tutorial')  ? 'active' : '' ?>" href="<?= l('expert-tutorial') ?>">Experts Tutorials</a></li>
							<li><a class="<?= ($this->uri->segment(1) == 'learning-journey')  ? 'active' : '' ?>" href="<?= l('learning-journey') ?>">Learning Journey</a></li>
							<li class="dropdown-nav"><a class="<?= ($this->uri->segment(1) == 'booking')  ? 'active' : '' ?>" href="<?= l('booking') ?>">Consult with Experts</a>
								<ul class="dropdownWrap dropdown ">
									<li><a href="<?= l('booking') ?>">Consult with Experts</a></li>
									<li><a href="<?= l('become-an-expert') ?>">Become An Expert</a></li>

									<!-- <li><a href="<?//= l('innovate') ?>">Innovate</a></li> -->
								</ul>
							</li>
							<li class="dropdown-nav"><a href="#">Community</a>
								<ul class="dropdownWrap dropdown ">
									<li><a href="<?= l('expert') ?>">Expert</a></li>
									<li><a href="<?= l('student') ?>">Members</a></li>
									<li><a href="<?= l('newsfeed') ?>">News feed</a></li>
									<!-- <li><a href="<?//= l('booking') ?>">Booking</a></li><?= l('') ?> -->
								</ul>
							</li>
							<li class="dropdown-nav"><a href="<?= l('about-us') ?>">About us</a>
								<ul class="dropdownWrap dropdown ">
									<li><a href="<?= l('about-us') ?>">About us</a></li>
									<li><a href="https://mindcloudacademy.com/" target="_blank">The Academy</a></li>
									<li><a href="<?= l('enterprise-partners') ?>">Enterprise Partners</a></li>
									<li><a href="<?= l('faq') ?>">FAQs</a></li>
								</ul>
							</li>


							<?php if (isset($this->session->userdata['logged_in_front']) and array_filled($this->session->userdata['logged_in_front'])) : ?>
								<li><a href="<?= l('account-area') ?>"> <i class="fal fa-user-circle"></i> My Dashboard</a></li>
								<li><a href="<?= l('signout') ?>"> <i class="far fa-sign-out-alt"></i> Logout</a></li>
							<? else : ?>
								<li><a href="<?= l('login') ?>">Sign In</a></li>
								<li><a href="<?= l('signup') ?>">Register</a></li>
							<? endif; ?>
						</ul>
					</div>
				</div>
				<div class="col-md-3 text-right">
					<ul class="login-btn">
						<!-- <li><a href="<?//= l('cart') ?>" class="cart-icon"><i class="fas fa-shopping-cart"><sup class="cart_body">0</sup></i> </a></li> -->
						<?php if (isset($this->session->userdata['logged_in_front']) and array_filled($this->session->userdata['logged_in_front'])) : ?>
							<li class="dropdown-toggle"><a href="#"><span><img src="<?= get_image($this->layout_data['user_data']['ui_profile_image'], $this->layout_data['user_data']['ui_profile_image_path']) ?>"></span> <?=$this->session->userdata['logged_in_front']['first_name']?> <i class="fal fa-angle-down"></i></a>
								<div class="dropdown-box">
									<ul class="user-links">
										<li><a href="<?= l('account-area') ?>"> <i class="fal fa-user-circle"></i> My Dashboard</a></li>
										<li><a href="<?= l('signout') ?>"> <i class="far fa-sign-out-alt"></i> Logout</a></li>
									</ul>
								</div>
							</li>
						<? else : ?>
							<li><a href="<?= l('login') ?>">Sign In</a></li>
							<li><a href="<?= l('signup') ?>" class="btn-signup btn-hover">Register <span></span></a></li>
						<? endif; ?>
					</ul>
				</div>

			</div>
		</div>
	</div>
</header>