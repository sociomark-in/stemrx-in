<main>
	<!--==============================
    Breadcumb
============================== -->
	<div class="breadcumb-wrapper ">
		<div class="parallax" data-parallax-image="<?= base_url() ?>assets/img/breadcurmb/breadcurmb-1-1.jpg"></div>
		<div class="container z-index-common">
			<div class="breadcumb-content">
				<h1 class="breadcumb-title">Mauritius Center</h1>
				<div class="breadcumb-menu-wrap">
					<i class="far fa-home-lg"></i>
					<ul class="breadcumb-menu">
						<li><a href="<?= base_url() ?>">Home</a></li>
						<li>Our Center</li>
						<li class="active">Mauritius</li>
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
							<h2 class="pt-2 mb-10">StemRx at Mauritius</h2>
							<div class="row">
								<div class="col-xl-6">
									<h4 class="pt-2 mb-10">Address:</h4>
									<p class="fs-md">
									PREVENTIVE MEDICARE LTD., Hollyrood No 1 Vacoas, Rep of Mauritius Tel : +230 5989 0370 /57601786
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
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3804.8177846454246!2d78.44508101744384!3d17.516209600000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9020d64d040b%3A0x7f5f5b2917bbac12!2sMEDIVISION%20SUPER%20SPECIALTY%20HOSPITAL!5e0!3m2!1sen!2sin!4v1713345629416!5m2!1sen!2sin" style="border:0; width:100%; height: 400px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
</main>
