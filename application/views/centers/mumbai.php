<main>
	<!--==============================
    Breadcumb
============================== -->
	<div class="breadcumb-wrapper ">
		<div class="parallax" data-parallax-image="<?= base_url() ?>assets/img/breadcurmb/breadcurmb-1-1.jpg"></div>
		<div class="container z-index-common">
			<div class="breadcumb-content">
				<h1 class="breadcumb-title">StemRx Mumbai</h1>
				<div class="breadcumb-menu-wrap">
					<i class="far fa-home-lg"></i>
					<ul class="breadcumb-menu">
						<li><a href="<?= base_url() ?>">Home</a></li>
						<li>Our Center</li>
						<li class="active">Mumbai</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<section class="vs-contact-wrapper vs-contact-layout1 space-top space-md-bottom">
		<div class="row">
			<div class="container">
				<div class="row gx-60 align-items-center">
					<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
						<form action="<?= base_url('api/contact/new') ?>" method="POST" class="form-wrap3 mb-30" data-bg-color="#f3f6f7">
							<input type="hidden" name="source_url" value="<?= current_url() ?>">
							<div class="form-title">
								<h3 class="mt-n2 fls-n2 mb-0">We are here for help you! Arrange a meeting.</h3>
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
							<h2 class="pt-2 mb-10">StemRx at Mumbai</h2>
							<div class="row">
								<div class="col-xl-6">
									<h4 class="pt-2 mb-10">Address:</h4>
									<p class="fs-md">
										1st floor, Rejoice Clinic <br>
										Raja Rani Tours & Travels Premises, 214,<br>
										Lady Jamshedji Rd, Near Shiv Sena Bhavan. <br>
										Shivaji Park, Dadar (W), Mumbai. <br>
										Maharashtra 400028
									</p>
								</div>
								<div class="col-xl-6">
									<h4 class="pt-2 mb-10">Timing</h4>
									<table class="contact-info-table">
										<tbody>
											<tr>
												<td>Wednesday:</td>
												<td>5.00 pm - 8.00 pm</td>
											</tr>
											<tr>
												<td>Saturday:</td>
												<td>5.00 pm - 8.00 pm</td>
											</tr>
										</tbody>
									</table>
									<h4 class="pt-2 mb-2">Customer Support</h4>
									<h4 class="h3 font-theme2 mb-0"><a href="tel:9979976862"><i class="far fa-phone-alt me-2"></i>+91 997 997 6862</a></h4>
								</div>
								<div class="col-12">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<div class="col-12">
		<iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d30153.37013397536!2d73.002349!3d19.143979!3m2!1i1024!2i768!4f13.1!2m1!1sStemRx%20Bioscience%20Solutions%20Private%20Limited%20Dr.%20Mahajan&#39;s%20Hospital%20%26%20ITC%20R-831%2C%20Thane%20-%20Belapur%20Rd%2C%20next%20to%20Shell%20Petrol%20Pump%2C%20T.T.C%2C%20Industrial%20Area%2C%20Rabale%2C%20Navi%20Mumbai%2C%20Maharashtra%20400708!5e0!3m2!1sen!2sus!4v1705993370658!5m2!1sen!2sus" style="border:0; width:100%; height: 400px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
</main>
