<main>
	<!-- Breadcumb -->
	<div class="breadcumb-wrapper ">
		<div class="parallax" data-parallax-image="<?= base_url("assets/") ?>img/breadcurmb/breadcurmb-1-1.jpg"></div>
		<div class="container z-index-common">
			<div class="breadcumb-content">
				<h1 class="breadcumb-title">Aquatic Therapy</h1>
				<div class="breadcumb-menu-wrap">
					<i class="far fa-home-lg"></i>
					<ul class="breadcumb-menu">
						<li><a href="<?= base_url() ?>">Home</a></li>
						<li class="active">Aquatic Therapy</li>
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
								<h2 class="h5 mb-0">Aquatic Therapy</h2>
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
						<h2 class="h1">Aquatic Therapy</h2>
						<p class="fs-md mb-4 pb-2">
							<strong>Aquatic Therapy</strong> at StemRx Hospital involves performing exercises and activities in a specialized pool or water-based environment. Under the guidance of trained therapists, patients engage in movements that take advantage of the water's buoyancy and resistance. This reduces stress on joints and muscles while promoting strength, flexibility, and balance.
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
							<strong>Aquatic Therapy</strong> at StemRx Hospital is utilized in rehabilitation programs for various conditions such as arthritis, fibromyalgia, and musculoskeletal injuries. Patients with neurological disorders or chronic pain also benefit from <strong>Aquatic Therapy</strong>, as it provides a supportive and low-impact environment for exercise.
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
							Compared to land-based therapies, <strong>Aquatic Therapy</strong> at StemRx Hospital offers several unique advantages. Firstly, the buoyancy of water reduces the impact on joints and muscles, making it suitable for patients with limited mobility or weight-bearing restrictions. This allows for earlier and more comfortable rehabilitation compared to traditional exercises on land. Additionally, <strong>Aquatic Therapy</strong> provides resistance in all directions, facilitating a more comprehensive workout and targeting multiple muscle groups simultaneously. The water's hydrostatic pressure also helps improve circulation and reduce swelling, enhancing overall therapeutic effects. Furthermore, <strong>Aquatic Therapy</strong> offers a safe and enjoyable environment for exercise, motivating patients to participate actively in their rehabilitation. Overall, <strong>Aquatic Therapy</strong> at StemRx Hospital provides a highly effective and versatile approach to rehabilitation that maximizes outcomes and enhances patient well-being.
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
