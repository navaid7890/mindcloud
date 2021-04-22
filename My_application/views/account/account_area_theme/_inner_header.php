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
				<div class="col-md-6 text-center">
					<div class="menuWrap">
						<ul class="menu">
							<li><a class="active" href="<?= l('expert-tutorial') ?>">Experts Tutorials</a></li>
							<li><a href="<?= l('learning-journey') ?>">Learning Journey</a></li>
							<li><a href="#">Consult with Experts</a></li>
							<li><a href="#">Community</a></li>
							<li><a href="#"><span><img src="<?= i('') ?><?= $this->session_data['profile_image'] ?>"></span> <?= $this->session_data['username'] ?> <i class="fal fa-angle-down"></i></a></li>

						</ul>
					</div>
				</div>

				<div class="col-md-4 text-right">
					<ul class="login-btn">
						<li class="dropdown-toggle"><a href="javascript:;"><span><img src="<?= i('') ?><?= $this->session_data['profile_image'] ?>"></span> <?= $this->session_data['username'] ?> <i class="fal fa-angle-down"></i></a>
						<div class="dropdown-box" style="display: none;">
							<ul class="user-links">
								<li><a href="#"> <i class="far fa-sign-out-alt"></i> Logout</a></li>
							</ul>
						</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>