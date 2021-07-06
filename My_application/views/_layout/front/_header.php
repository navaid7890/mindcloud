<style>

</style>
<header>
	<div class="main-header">
		<div class="container-fluid">
			<div class="menu-Bar">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="row align-items-center">
				<div class="col-md-2 text-left">
					<a href="<?= l('') ?>" class="logo">
						<img src="<?= i('') ?>logo.png" alt="">
					</a>
				</div>
				<div class="col-md-7">
					<div class="menuWrap">
						<ul class="menu">

							<li class="dropdown-nav"><a href="<?= l('expert-tutorial') ?>">Experts Tutorials</a>
								<ul class="dropdownWrap dropdown ">
									<li><a href="<?= l('booking') ?>">Booking</a></li><?= l('') ?>
									<li><a href="<?= l('become-an-expert') ?>">Become An Expert</a></li>
									<li><a href="<?= l('enterprise-partners') ?>">Enterprise Partners</a></li>
									<li><a href="<?= l('innovate') ?>">Innovate</a></li>
								</ul>
							</li>
							<li><a class="active" href="<?= l('learning-journey') ?>">Learning Journey</a></li>
							<li><a href="<?= l('') ?>consult-advisors">Consult with Experts</a></li>
							<li class="dropdown-nav"><a href="#">Community</a>
								<ul class="dropdownWrap dropdown ">
									<li><a href="<?= l('about-us') ?>">About us</a></li>
									<li><a href="<?= l('member') ?>">Members</a></li>
									<li><a href="<?= l('faq') ?>">FAQs</a></li>
									<li><a href="<?= l('newsfeed') ?>">News feed</a></li>
								</ul>
							</li>

							<li><a href="https://mindcloudacademy.com/">The Academy</a></li>
							<?php if (isset($this->session->userdata['logged_in_front']) and array_filled($this->session->userdata['logged_in_front'])) : ?>
								<li><a href="<?= l('account-area') ?>"> <i class="fal fa-user-circle"></i> My Account</a></li>
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
						<li><a href="<?= l('cart') ?>" class="cart-icon"><i class="fas fa-shopping-cart"><sup class="cart_body">0</sup></i> </a></li>
						<?php if (isset($this->session->userdata['logged_in_front']) and array_filled($this->session->userdata['logged_in_front'])) : ?>
							<li class="dropdown-toggle"><a href="#"><span><img src="<?= get_image($this->layout_data['user_data']['ui_profile_image'], $this->layout_data['user_data']['ui_profile_image_path']) ?>"></span> <?= $this->session_data['username'] ?> <i class="fal fa-angle-down"></i></a>
								<div class="dropdown-box">
									<ul class="user-links">
										<li><a href="<?= l('account-area') ?>"> <i class="fal fa-user-circle"></i> My Account</a></li>
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