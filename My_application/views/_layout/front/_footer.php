<? 
$footer = array();
$footer = $this->model_config->find_all_active($footer);

$logo=$this->model_logo->find_all_active();
?>

<? // if ($this->router->fetch_class() == 'registration' && $this->router->fetch_method() == 'index') { ?>

	<!-- <div style="display:none;"> -->
		<footer>
			<div class="container">

				<a href="#top" class="b-top"><i class="fas fa-arrow-circle-up"></i></a>

				<a href="./" class="footer-logo"><img src="<?=get_image($logo[0]['logo_footer_image'],$logo[0]['logo_image_path'])?>" alt=""></a>
				<div class="space"><br><br><br></div>

				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="widget">
							<h4>OFFERINGS</h4>
							<ul class="quick-links">
								<li><a href="<?= l('expert-tutorial') ?>">Experts Tutorials</a></li>
								<li><a href="<?= l('learning-journey') ?>">Learning Journey</a></li>
								<li><a href="<?= l('booking') ?>">Consult with Experts</a></li>
								<li><a href="<?= l('consult-advisors') ?>">Advisory</a></li>
								<li><a href="<?= l('become-an-expert') ?>">Join our Tribe Experts</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="widget">
							<h4>navigation</h4>
							<ul class="quick-links">
								<li><a href="<?= l('enterprise-partners') ?>">Enterprise Partners</a></li>
								<li><a href="<?= l('about-us') ?>">About Us</a></li>
								<li><a href="<?= l('innovate') ?>">Competition</a></li>
								<li><a href="<?= l('newsfeed') ?>">News Feed</a></li>
								<li><a href="<?= l('faq') ?>">FAQs</a></li>
								<li><a href="<?= l('contact_us') ?>">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="widget">
							<h4>top experts tutorials</h4>
							<ul class="quick-links">
								<li><a href="<?= l('course-detail/building-retaining-the-right-team-') ?>">Building the Right Team</a></li>
								<li><a href="<?= l('course-detail/business-valuation-fundamentals') ?>">Business Valuation Fundamentals</a></li>
								<li><a href="<?= l('course-detail/digital-marketing-sales-for-startups') ?>">Digital Marketing and Sales for Start-Ups</a></li>
								<li><a href="<?= l('course-detail/overview-of-seo') ?>">Overview of S.E.O</a></li>
								<li><a href="<?= l('course-detail/human-resources-hr-101') ?>">Human Resources 101 for Start-Ups</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 flex-center">
						<div class="widget">
							<h4>get in touch</h4>
							<ul class="quick-links">
								<li><a href="tel:<?= $footer[5]['config_value'] ?>"><?= $footer[5]['config_value'] ?></a></li>
								<li><a href="mailto:<?= $footer[2]['config_value'] ?>"><?= $footer[2]['config_value'] ?></a></li>
								<li>
									<p>Area 2071, Emirates Tower<br>P.O. Box 555509<br>United Arab Emirates</p>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</footer>
		<div class="copyright-top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-8 col-md-12">
						<p>Mind Cloud Tribe is part of Mind Cloud Academy with Knowledge and Human Development Authority ( KHDA ) Permit # 628780</p>
					</div>

					<div class="col-lg-4 col-md-12">
						<div class="ftr-pay">
							<ul class="social-links">
								<li>Follow us:</li>
							<li><a href="<?= g('db.admin.facebook_id') ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="<?= g('db.admin.instagram_id') ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="<?= g('db.admin.linkedin_id') ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="<?= g('db.admin.youtube_id') ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
							</ul>

							<ul class="social-links">
								<li>Payment</li>
								<li><a href="#"><i class="fab fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fab fa-cc-visa"></i></a></li>
								<li><a href="#"  style="background: #fff;"><img src="<?= i('') ?>verified_master.png" class="img-fluid img-responsive"></a></li>
								<li><a href="#"  style="background: #fff;"><img src="<?= i('') ?>verified_visa.png" class="img-fluid img-responsive"></a></li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="container">
				<ul>
					<li><?= $footer[9]['config_value'] ?></li>
					<li><a href="<?= l('privacy-policy') ?>">Privacy Policy</a></li>
					<li><a href="<?= l('terms-and-conditions') ?>">Terms of use and Refund</a></li>
				</ul>
			</div>
		</div>
	</div>


<?// } else { ?>
	<!-- <footer>
		<div class="container">

			<a href="#top" class="b-top"><i class="fas fa-arrow-circle-up"></i></a>

			<a href="./" class="footer-logo"><img src="<?//= i('') ?>footer-logo.png" alt=""></a>
			<div class="space"><br><br><br></div>

			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="widget">
						<h4>OFFERINGS</h4>
						<ul class="quick-links">
							<li><a href="<?//= l('expert-tutorial') ?>">Experts Tutorials</a></li>
							<li><a href="<?//= l('learning-journey') ?>">Learning Journey</a></li>
							<li><a href="<?//= l('booking') ?>">Consult with Experts</a></li>
							<li><a href="<?//= l('consult-advisors') ?>">Advisory</a></li>
							<li><a href="<?//= l('') ?>">Join our Tribe Experts</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="widget">
						<h4>navigation</h4>
						<ul class="quick-links">
							<li><a href="<?//= l('enterprise-partners') ?>">Enterprise Partners</a></li>
							<li><a href="<?//= l('about-us') ?>">About Us</a></li>
							<li><a href="<?//= l('innovate') ?>">Competition</a></li>
							<li><a href="<?//= l('faq') ?>">FAQs</a></li>
							<li><a href="<?//= l('') ?>">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="widget">
						<h4>top experts tutorials</h4>
						<ul class="quick-links">
							<li><a href="<?//= l('course-detail/building-retaining-the-right-team-') ?>">Building the Right Team</a></li>
							<li><a href="<?//= l('course-detail/business-valuation-fundamentals') ?>">Business Valuation Fundamentals</a></li>
							<li><a href="<?//= l('course-detail/digital-marketing-sales-for-startups') ?>">Digital Marketing and Sales for Start-Ups</a></li>
							<li><a href="<?//= l('course-detail/overview-of-seo') ?>">Overview of S.E.O</a></li>
							<li><a href="<?//= l('course-detail/human-resources-hr-101') ?>">Human Resources 101 for Start-Ups</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 flex-center">
					<div class="widget">
						<h4>get in touch</h4>
						<ul class="quick-links">
							<li><a href="tel:<?//= $footer[5]['config_value'] ?>"><?= $footer[5]['config_value'] ?></a></li>
							<li><a href="mailto:<?//= $footer[2]['config_value'] ?>"><?= $footer[2]['config_value'] ?></a></li>
							<li>
								<p>Area 2071, Emirates Tower<br>P.O. Box 555509<br>United Arab Emirates</p>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</footer> -->



	<!-- <div class="copyright-top">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-8 col-md-12">
					<p>Mind Cloud Tribe is part of Mind Cloud Academy with Knowledge and Human Development Authority ( KHDA ) Permit # : 628780</p>
				</div>

				<div class="col-lg-4 col-md-12">
					<div class="ftr-pay">
						<ul class="social-links">
							<li>Follow us:</li>
							<li><a href="<?//= $footer[0]['config_value'] ?>"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="<?//= $footer[3]['config_value'] ?>"><i class="fab fa-instagram"></i></a></li>
							<li><a href="<?//= $footer[10]['config_value'] ?>"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="<?//= $footer[1]['config_value'] ?>"><i class="fab fa-youtube"></i></a></li>
						</ul>

						<ul class="social-links">
							<li>Payment</li>
							<li><a href="#"><i class="fab fa-cc-mastercard"></i></a></li>
							<li><a href="#"><i class="fab fa-cc-visa"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- <div class="copyright">
		<div class="container">
			<ul>
				<li><?//= $footer[9]['config_value'] ?></li>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Terms of use and Refund</a></li>
			</ul>
		</div>
	</div>
	<div style="display: none;" id="hidden-content-1">
		<div class="login-wrap">
			<div class="w-100">
				<div class="login-content">
					<h4>ComingSoon!</h4>
				</div>
				<div class="space"><br><br></div>

				<div class="login-form signup-form">
					<div>
						<form action="">
							<div class="fld-login">
								<label>Email Address</label>
								<input type="text" placeholder="examle@dmain.com" required="">
							</div>

							<div class="fld-btn">
								<input type="submit" value="Register">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div> -->
<? // } ?>