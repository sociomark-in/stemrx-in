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
				<?php
						$data = [
							"action" => [
								"method" => "POST",
								"action" => base_url()
							],
							"title" => [
								'bg-image' => "",
								'heading' => "Book An Appointment",
								'desc' => "Please Call Us To Ensure",
							],
							"props" => [
								'class' => "shadow-none mb-0",
								'bg-image' => "",
								'bg-color' => "#f3f6f7",
							],
							"fields" => [
								"condition" => "disabled",
								"doctor" => "enabled",
							]
						];
						$this->load->view('common/forms/contact_form', $data); ?>
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
		</div>
	</section>
</main>
