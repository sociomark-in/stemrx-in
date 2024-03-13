<main>
	<!-- Breadcumb -->
	<div class="breadcumb-wrapper ">
		<div class="parallax" data-parallax-image="<?= base_url("assets/") ?>img/breadcurmb/breadcurmb-1-1.jpg"></div>
		<div class="container z-index-common">
			<div class="breadcumb-content">
				<h1 class="breadcumb-title">Faradic and Galvanic Stimulation</h1>
				<div class="breadcumb-menu-wrap">
					<i class="far fa-home-lg"></i>
					<ul class="breadcumb-menu">
						<li><a href="<?= base_url() ?>">Home</a></li>
						<li class="active">Faradic and Galvanic Stimulation</li>
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
								<h2 class="h5 mb-0">Faradic and Galvanic Stimulation</h2>
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
						<h2 class="h1">Faradic and Galvanic Stimulation</h2>
						<p class="fs-md mb-4 pb-2">
							<strong>Faradic and Galvanic Stimulation</strong> at StemRx Hospital involves the application of electrical currents to activate muscles and nerves. Faradic stimulation delivers short bursts of electrical current to induce muscle contractions, while galvanic stimulation applies a continuous direct current to the body. These techniques are used to improve muscle strength, reduce pain, and promote tissue healing.
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
							<strong>Faradic and Galvanic Stimulation</strong> at StemRx Hospital are utilized in physical therapy for various musculoskeletal conditions, including muscle weakness, paralysis, and pain. They are also effective in promoting circulation, reducing swelling, and improving muscle tone. Patients undergoing <strong>Faradic and Galvanic Stimulation</strong> experience targeted muscle activation and pain relief.
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
							Compared to conventional therapies, <strong>Faradic and Galvanic Stimulation</strong> at StemRx Hospital offer several advantages. Firstly, they provide targeted muscle activation and pain relief without the need for medications or invasive procedures, reducing the risk of side effects and complications. Additionally, <strong>Faradic and Galvanic Stimulation</strong> can be adjusted to target specific muscle groups or nerve pathways, allowing for personalized treatment plans tailored to each patient's needs. Moreover, these techniques are non-invasive and generally well-tolerated, making them suitable for patients of all ages and fitness levels. Overall, <strong>Faradic and Galvanic Stimulation</strong> at StemRx Hospital offer a safe, effective, and versatile approach to muscle rehabilitation and pain management.
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
