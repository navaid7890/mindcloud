<style>
	.menu li:nth-child(4) {
		margin-right: 38px;
	}

	/* Hamburger Menu */
	.menu-Bar {
		width: 30px;
		height: 27px;
		cursor: pointer;
		position: absolute;
		right: 15px;
		top: 0;
		bottom: 0px;
		margin: auto;
		z-index: 22;
		display: none;
	}

	.menu-Bar span {
		display: block;
		height: 3px;
		width: 100%;
		background: #1d8fd9;
		position: absolute;
		transition: .6s all;
		border-radius: 100px;
	}

	.menu-Bar span:nth-child(1) {
		top: 0;
	}

	.menu-Bar span:nth-child(2) {
		top: 8px;
		transform-origin: left;
	}

	.menu-Bar span:nth-child(3) {
		top: 16px;
	}

	.menu-Bar.open span {
		background: #b70404;
	}

	.menu-Bar.open span:nth-child(1) {
		transform: rotate(45deg);
		top: 12px;
		transform-origin: right-center;
	}

	.menu-Bar.open span:nth-child(2) {
		width: 0;
		opacity: 0;
	}

	.menu-Bar.open span:nth-child(3) {
		transform: rotate(-45deg);
		top: 12px;
		transform-origin: right-center;
	}

	.coutArea {
		display: flex;
	}

	/* Menu Css */
	.cart-icon>i {
		color: #1d90d9;
	}

	.menu {
		font-size: 0px;
		text-align: center;
		display: flex;
		align-items: center;
		justify-content: space-between;
	}

	.menu li {
		margin-right: 16px;
	}

	.menu li.last {
		margin: 0;
	}

	.menu li a {
		text-transform: capitalize;
		display: block;
		font-size: 14px;
		color: #33415C;
		font-weight: 300;
		padding: 30px 0;
		position: relative;
	}

	.menu li:nth-last-child(-n+2) a {
		display: none;
	}

	.menu li:hover a,
	.menu li.active a {
		text-shadow: 0 0 .65px #333, 0 0 .65px #333;
	}

	.menu li a.active {
		text-shadow: 0 0 0.65px #333, 0 0 0.65px #333 !important;
	}

	/* Drop Down Css */
	.dropdown-nav {
		position: relative;
	}

	.dropdownWrap {
		position: absolute;
		left: -20px;
		top: 30px;
		display: none;
	}

	ul.dropdown {
		width: 257px;
		border-radius: 8px;
		background-color: #ffffff;
		z-index: 1;
		padding: 0;
		text-align: left;
		box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
	}

	ul.dropdown li {
		width: 100%;
		display: block;
		margin-bottom: 5px;
	}

	ul.dropdown li a {
		font-size: 15px;
		letter-spacing: -0.1px;
		color: #636e72;
		padding: 12px 12px 12px 40px;
		position: relative;
		border-radius: 6px;
		line-height: normal;
		margin: 0;
		display: flex;
		align-items: center;
	}

	/* ul.dropdown li a:before { content: "\f570"; position: absolute; left: 12px; top: 10px; font-family: "Font Awesome 5"; font-size: 18px; font-weight: 300; font-stretch: normal; font-style: normal; line-height: 1.22; letter-spacing: normal; text-align: center; color: #2d3436; -webkit-transition: all 0.4s ease-in-out; -moz-transition: all 0.4s ease-in-out; -o-transition: all 0.4s ease-in-out; transition: all 0.4s ease-in-out; } */
	ul.dropdown li:hover a,
	ul.dropdown li.active a {
		background-color: #eef2f3;
		color: #6c5ce7;
	}

	ul.dropdown li:hover a:before,
	ul.dropdown li.active a:before {
		color: #6c5ce7;
	}

	ul.dropdown li.last {
		margin-bottom: 0px;
	}

	li.dropdown-nav a:after {
		content: "\f107";
		display: inline-block;
		font-family: "Font Awesome 5";
		font-size: 18px;
		font-weight: 300;
		font-stretch: normal;
		font-style: normal;
		letter-spacing: normal;
		text-align: center;
		color: #2d3436;
		-webkit-transition: all 0.4s ease-in-out;
		-moz-transition: all 0.4s ease-in-out;
		-o-transition: all 0.4s ease-in-out;
		transition: all 0.4s ease-in-out;
		margin-left: 10px;
		display: inline-flex;
		justify-content: flex-end;
		vertical-align: middle;
		align-items: center;
	}

	li.dropdown-nav:hover ul.dropdownWrap {
		display: block;
	}

	.menu .dropdownWrap li:nth-last-child(-n+2) a {
		display: block;
	}

	ul.dropdown li a:after {
		display: none;
	}


	.menu li:nth-last-child(-n+3) {
		display: block;
	}

	#logoutM {
		display: none;
	}

	@media (max-width:1200px) {
		#logoutM {
			display: block;
		}

		img {
			max-width: 100%;
			height: auto;
		}

		.menu-Bar {
			display: block;
			top: 0px;
		}

		.menuWrap.open {
			display: flex;
			left: 0px;
			z-index: 1;
		}

		.menuWrap {
			position: fixed;
			left: -210%;
			right: 0;
			top: 0;
			bottom: 0;
			margin: auto;
			background: #0f4c97;
			height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-flow: column;
			transition: all 0.4s ease;
			z-index: 3;
			width: 100vw;
		}

		a.b-top {
			font-size: 40px;
			position: absolute;
			right: 0;
			color: #fdbe41;
			box-shadow: 0px 3px 6px #00000029;
			border-radius: 100px;
			right: 28px;
		}

		ul.menu li {
			display: block;
		}

		ul.menu li a {
			margin-bottom: 10px;
			padding: 0;
			display: block;
			text-align: center;
			margin-bottom: 15px;
			padding-right: 0px;
			margin-right: 0px;
			color: #fff;
			font-size: 15px;
			text-transform: capitalize;
		}

		.logo img {
			max-width: 50%;
		}

		.container {
			position: relative;
		}

		header .main-header ul.menu>li {
			display: block;
			margin: 0px;
			padding: 0;
		}

		header .main-header ul.menu>li a {
			color: #fff;
			font-size: 22px;
		}

		header .main-header ul.menu>li a:before {
			display: none;
		}

		.menu {
			font-size: 0px;
			display: inline-block;
			vertical-align: middle;
		}



	}
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
				<div class="col-md-7 text-center">
					<div class="menuWrap">
						<ul class="menu">
							<li><a class="<?= ($this->uri->segment(1) == 'expert-tutorial')  ? 'active' : '' ?>" href="<?= l('account/profile/expert') ?>">Experts Tutorials</a></li>
							<li><a class="<?= ($this->uri->segment(2) == 'learing-journey')  ? 'active' : '' ?>" href="<?= l('account/profile/learning') ?>">Learning Journey</a></li>
							<li class="dropdown-nav"><a class="<?= ($this->uri->segment(1) == 'booking')  ? 'active' : '' ?>" href="<?= l('booking') ?>">Consult with Experts</a>
								<ul class="dropdownWrap dropdown ">
									<li><a href="<?= l('booking') ?>">Consult with Experts</a></li>
									<li><a href="<?= l('become-an-expert') ?>">Become An Expert</a></li>
									<!-- <li><a href="<? //= l('innovate') 
														?>">Innovate</a></li> -->
								</ul>
							</li>
							<li class="dropdown-nav"><a href="<?= l('member') ?>">Community</a>
								<ul class="dropdownWrap dropdown ">
									<li><a href="<?= l('member') ?>">Members</a></li>
									<li><a href="<?= l('newsfeed') ?>">News feed</a></li>

									<!-- <li><a href="<? //= l('booking') 
														?>">Booking</a></li><?= l('') ?> -->
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
							<!-- <li><a href="https://mindcloudacademy.com/"> The Academy</a></li> -->
							<!-- <li><a href="#"><span><img src="<? //=i('')
																	?><? //= $this->session_data['profile_image'] 
																		?>"></span> <? //= $this->session_data['username'] 
																							?> <i class="fal fa-angle-down"></i></a></li> -->


							<li id="logoutM"><a href="<?= l('signout') ?>"> <i class="far fa-sign-out-alt"></i> Logout</a></li>
							<li><a href="#" data-fancybox data-src="#video-intro"><i class="fal fa-bell"></i></a></li>
							<li><a href="#" data-fancybox data-src="#video-intro"><i class="fal fa-bell"></i></a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 text-right">
					<ul class="login-btn">
						<li class="dropdown-toggle"><a href="#"><span><img src="<?= get_image($this->layout_data['user_data']['ui_profile_image'], $this->layout_data['user_data']['ui_profile_image_path']) ?>"></span> <?= $this->session->userdata['logged_in_front']['first_name'] ?> <i class="fal fa-angle-down"></i></a>
							<div class="dropdown-box">
								<ul class="user-links">
									<li><a href="<?= l('signout') ?>"> <i class="far fa-sign-out-alt"></i> Logout</a></li>
								</ul>
							</div>
						</li>
						<li><a href="#"><i class="fal fa-envelope-open-text"></i></a></li>
						<li><a href="#" data-fancybox data-src="#video-intro"><i class="fal fa-bell"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>