<main>
	<div class="breadcumb-wrapper">
		<div class="parallax" data-parallax-image="<?= base_url() ?>assets/img/breadcurmb/breadcurmb-1-1.jpg"></div>
		<div class="container z-index-common">
			<div class="breadcumb-content">
				<h1 class="breadcumb-title">Contact Us</h1>
				<div class="breadcumb-menu-wrap"><i class="far fa-home-lg"></i>
					<ul class="breadcumb-menu">
						<li><a href="<?= base_url() ?>">Home</a></li>
						<li class="active">Contact Us</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<section class="vs-contact-wrapper vs-contact-layout1 space-top space-md-bottom">
		<div class="container">
			<div class="row gx-60 align-items-center">
				<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
					<form action="<?= base_url('api/contact/new') ?>" method="POST" class="form-wrap3 mb-30" data-bg-color="#f3f6f7">
						<input type="hidden" name="source_url" value="<?= current_url() ?>">
						<div class="form-title">
							<h3 class="mt-n2 fls-n2 mb-0">Send Us a Message</h3>
							<p class="text-theme mb-4">Your email address will not be published*</p>
						</div>
						<div class="form-group mb-15"><input type="text" class="form-control style3" name="name" id="name" placeholder="Name"> <i class="fal fa-user"></i></div>
						<div class="form-group mb-15"><input type="text" class="form-control style3" name="email" id="email" placeholder="E-mail"> <i class="fal fa-envelope"></i></div>
						<div class="form-group mb-15"><textarea name="message" id="message" cols="30" rows="3" class="form-control style3" placeholder="Message"></textarea> <i class="fal fa-pencil-alt"></i></div>
						<div class="form-btn pt-15"><button class="vs-btn style2">Send Message<i class="fas fa-chevron-right"></i></button></div>
						<p class="form-messages mb-0 mt-3"></p>
					</form>
				</div>
				<div class="col-lg-6">
					<div class="contact-information mb-30">
						<h2 class="mt-n2">We are here for help you! Arrange a meeting.</h2>
						<div class="row">
							<div class="col-xxl-10">
								<!-- <p>Holisticly engage inexpensive architectures via high-quality solutions. Efficiently implement synergistic applications vis-a-vis best-of-breed ecommerce onotonectally enable client-based portals</p> -->
							</div>
						</div>
						<!-- <h3 class="h4 pt-2 mb-10">Opening Hours</h3>
						<table class="contact-info-table">
							<tr>
								<td>Mon - Fri:</td>
								<td>8.00 am - 8.00 pm</td>
							</tr>
						</table> -->
						<h4 class="pt-2 mb-10">Address</h4>
						<p class="fs-md"><i class="far fa-map-marker-alt me-2"></i>StemRx Bioscience Solutions Private Limited( Dr. Mahajan’s Hospital )
							Dr. Mahajan’s Hospital & ITC R-831,<br>
							Thane – Belapur Rd, next to Shell Petrol Pump, T.T.C,<br>
							Industrial Area, Rabale,<br>
							Navi Mumbai, Maharashtra 400708</p>
						<h4 class="pt-2 mb-2">Customer Support</h4>
						<h4 class="h3 font-theme2 mb-0"><a href="tel:<?= MAIN_CONTACT?>"><i class="far fa-phone-alt me-2"></i><?= phone_format(MAIN_CONTACT, 3,2) ?></a></h4>
					</div>
				</div>
			</div>
			<div class="ratio ratio-21x9 contact-map mt-70 mb-30">
				<iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d30153.37013397536!2d73.002349!3d19.143979!3m2!1i1024!2i768!4f13.1!2m1!1sStemRx%20Bioscience%20Solutions%20Private%20Limited%20Dr.%20Mahajan&#39;s%20Hospital%20%26%20ITC%20R-831%2C%20Thane%20-%20Belapur%20Rd%2C%20next%20to%20Shell%20Petrol%20Pump%2C%20T.T.C%2C%20Industrial%20Area%2C%20Rabale%2C%20Navi%20Mumbai%2C%20Maharashtra%20400708!5e0!3m2!1sen!2sus!4v1705993370658!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.1583088354!2d-74.11976389828038!3d40.697663748695746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1615903229405!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
			</div>
		</div>
	</section>
</main>
