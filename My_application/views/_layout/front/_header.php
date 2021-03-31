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
				<?php if(isset($this->session->userdata['logged_in_front']) AND array_filled($this->session->userdata['logged_in_front'])) : ?>
				<div class="col-md-7">
					<div class="menuWrap">
					<ul class="menu">
						<li><a class="active" href="<?=l('expert-tutorial')?>">Experts Tutorials</a></li>
						<li><a href="<?=l('learning-journey')?>">Learning Journey</a></li>
						<li><a href="#">Consult with Experts</a></li>
						<!-- <li><a href="<?=l('about-us')?>">About us</a></li> -->
						<li><a href="#">Enterprise Partners</a></li>
						<!-- <li><a href="#">Sign In</a></li> -->
						<li><a href="<?=l('signout')?>">Logout</a></li>
					</ul>
					</div>
				</div>

				<div class="col-md-3 text-right">
					<ul class="login-btn">
						<!-- <li><a href="#"><i class="fas fa-shopping-cart"></i> Sign In</a></li> -->
						<li><a href="<?=l('signout')?>" class="btn-hover">Logout <span></span></a></li>
					</ul>
				</div>
				<? else :?>
					<div class="col-md-7">
					<div class="menuWrap">
					<ul class="menu">
					<li><a class="active" href="<?=l('expert-tutorial')?>">Experts Tutorials</a></li>
						<li><a href="<?=l('learning-journey')?>">Learning Journey</a></li>
						<li><a href="#">Consult with Experts</a></li>
						<li><a href="#">About us</a></li>
						<li><a href="#">Enterprise Partners</a></li>
						<li><a href="<?=l('login')?>">Sign In</a></li>
						<li><a href="<?=l('signup')?>">Register</a></li>
					</ul>
					</div>
				</div>

				<div class="col-md-3 text-right">
					<ul class="login-btn">
						<li><a href="<?=l('login')?>"><i class="fas fa-shopping-cart"></i> Sign In</a></li>
						<li><a href="<?=l('signup')?>" class="btn-hover">Register <span></span></a></li>
					</ul>
				</div>
				<? endif;?>
			</div>
		</div>
	</div>
</header>