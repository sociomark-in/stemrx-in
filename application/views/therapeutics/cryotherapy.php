<main>
	<!-- Breadcumb -->
	<div class="breadcumb-wrapper ">
		<div class="parallax" data-parallax-image="<?= base_url("assets/") ?>img/breadcurmb/breadcurmb-1-1.jpg"></div>
		<div class="container z-index-common">
			<div class="breadcumb-content">
				<h1 class="breadcumb-title">Cryotherapy</h1>
				<div class="breadcumb-menu-wrap">
					<i class="far fa-home-lg"></i>
					<ul class="breadcumb-menu">
						<li><a href="<?= base_url() ?>">Home</a></li>
						<li class="active">Cryotherapy</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--
    Service Area
    -->
	<section class="vs-service-wrapper space-top">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="service-bar">
						<div class="row justify-content-between gy-4 text-center text-lg-start">
							<div class="col-sm-6 col-lg-3 col-xl-auto">
								<span class="fs-xs">Name of the Treatment</span>
								<h2 class="h5 mb-0">Cryotherapy</h2>
							</div>
							<!-- 
							<div class="col-sm-6 col-lg-3 col-xl-auto">
								<span class="fs-xs">Time Duration</span>
								<h2 class="h5 mb-0">More Than 12 Hour</h2>
							</div>
							<div class="col-sm-6 col-lg-3 col-xl-auto">
								<span class="fs-xs">Doctor Name</span>
								<h2 class="h5 mb-0">Dr. Pallavi & Dr. Mahajan</h2>
							</div> -->
							<div class="col-sm-6 col-lg-3 col-xl-auto">
								<a href="#appointment" class="vs-btn style2">Appointment<i class="fal fa-calendar-alt"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="vs-detail-wrapper space-md-bottom">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="">
						<h2 class="h1">Cryotherapy</h2>
						<p class="fs-md mb-4 pb-2">
							Cryotherapy at StemRx Hospital involves exposing the body to extremely cold temperatures for therapeutic purposes. During the procedure, patients may undergo whole-body cryotherapy, where the few body parts is immersed in a cryotherapy chamber, or localized cryotherapy, where specific areas of the body are targeted with cold air or ice packs. Cryotherapy promotes various health benefits, including pain relief, reduced inflammation, improved circulation, and enhanced recovery.
						</p>
					</div>
				</div>
			</div>
			<div class="row mb-md-4 mb-3">
				<div class="col-12">
					<div class="title mb-3">
						<h3>Application:</h3>
					</div>
					<div class="desc mb-3">
						<p>
							Cryotherapy at StemRx Hospital is utilized for various health conditions, including musculoskeletal injuries, chronic pain, inflammatory disorders, and sports injuries. It is also used in beauty and wellness treatments to improve skin health, reduce cellulite, and promote anti-aging effects. Patients undergoing Cryotherapy experience rapid pain relief, reduced inflammation, and increased energy levels.
						</p>
					</div>
				</div>
			</div>

			<div class="row mb-md-4 mb-3">
				<div class="col-12">
					<div class="title mb-3">
						<h3>Advantages:</h3>
					</div>
					<div class="desc mb-3">
						<p>
							Compared to conventional therapies, Cryotherapy at StemRx Hospital offers several advantages. Firstly, it provides rapid pain relief and reduced inflammation without the need for medications or invasive procedures, reducing the risk of side effects and complications. Additionally, Cryotherapy stimulates the body's natural healing processes, promoting tissue repair and regeneration. This leads to faster recovery times and improved functional outcomes compared to traditional treatments alone. Moreover, Cryotherapy is non-invasive and generally well-tolerated, with minimal side effects reported. It also offers a convenient and accessible way to promote overall health and well-being. Overall, Cryotherapy at StemRx Hospital provides a safe, effective, and versatile approach to pain management, inflammation reduction, and tissue repair.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="appointment-wrapper space-md-bottom" id="appointment">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 mb-30">
					<div class="about-content">
						<!-- <span class="sec-subtitle text-theme h3 mb-2 mb-sm-0">StemRx Medical Care!</span> -->
						<h2 class="h1 mb-3">We're Here For You</h2>
						<div class="row">
							<div class="col-xl-10 mb-md-2 pb-md-1">
								<!-- <p class="mb-md-4">Proactively revolutionize granular customer service after pandemic internal or "organic" sources. Distinctively impact proactive human capital rather than client-centered benefits.</p> -->
							</div>
							<div class="col-md-6 col-lg-5 col-xl-4">
								<ul class="vs-list list-unstyled text-title">
									<li>99% success rate</li>
									<li>100% Confidential</li>
									<li>Affordable Fees</li>
								</ul>
							</div>
							<div class="col-md-6 col-lg-5 col-xl-5">
								<ul class="vs-list list-unstyled text-title">
									<li>Free Consultation</li>
									<li>Expert surveillance agents</li>
									<li>Over 50 years experience</li>
								</ul>
							</div>
						</div>
						<div class="d-none">
							<ul class="offer-counter counter-list list-unstyled" data-offer-date="01/01/2024">
								<li>
									<div class="day count-number">00</div><span class="count-name">Days</span>
								</li>
								<li>
									<div class="hour count-number">00</div><span class="count-name">Hours</span>
								</li>
								<li>
									<div class="minute count-number">00</div><span class="count-name">Minutes</span>
								</li>
								<li>
									<div class="seconds count-number">00</div><span class="count-name">Seconds</span>
								</li>
							</ul>
							<div class="vs-code-box mt-20">Use Code: <span class="text-theme">Native</span></div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 mb-30 pt-30 pt-xl-0">
					<div class=" bg-white wow fadeInUp">
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
						$this->load->view('common/forms/appointment_form', $data); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
