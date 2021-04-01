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
					<a href="<?=l('')?>" class="logo">
					<img src="<?=i('')?>logo.png" alt="">
					</a>
				</div>
				<div class="col-md-7">
					<div class="menuWrap">
					<ul class="menu">
						<li><a class="active" href="<?=l('expert-tutorial')?>">Experts Tutorials</a></li>
						<li><a href="<?=l('learning-journey')?>">Learning Journey</a></li>
						<li><a href="#">Consult with Experts</a></li>
						<!-- <li><a href="about-tutorial">About us</a></li> -->
						<li><a href="#">Enterprise Partners</a></li>
						<?php if(isset($this->session->userdata['logged_in_front']) AND array_filled($this->session->userdata['logged_in_front'])) : ?>
							<!-- <li><a href="login.php">Sign In</a></li> -->
							<li><a href="<?=l('signout')?>">Logout</a></li>
						<? else :?>
							<li><a href="<?=l('login')?>">Sign In</a></li>
							<li><a href="<?=l('signup')?>">Register</a></li>
						<? endif;?>
					</ul>
					</div>
				</div>

				<div class="col-md-3 text-right">
					<ul class="login-btn">
						<?php if(isset($this->session->userdata['logged_in_front']) AND array_filled($this->session->userdata['logged_in_front'])) : ?>
							<li><a href="<?=l('cart')?>" class="cart-icon"><i class="fas fa-shopping-cart"><sup class="cart_body">0</sup></i> </a><a href="<?=l('signout')?>">Logout</a></li>
							<li><a href="signup">Register</a></li>
						<? else :?>
							<li><a href="<?=l('cart')?>" class="cart-icon"><i class="fas fa-shopping-cart"><sup class="cart_body">0</sup></i> </a> <a href="<?=l('login')?>">Sign In</a></li>
							<li><a href="<?=l('signup')?>" class="btn-hover">Register <span></span></a></li> 
						<? endif;?> 
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>