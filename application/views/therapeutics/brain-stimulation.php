<main>
	<!-- Breadcumb -->
	<div class="breadcumb-wrapper ">
		<div class="parallax" data-parallax-image="<?= base_url("assets/") ?>img/breadcurmb/breadcurmb-1-1.jpg"></div>
		<div class="container z-index-common">
			<div class="breadcumb-content">
				<h1 class="breadcumb-title">Brain Stimulation</h1>
				<div class="breadcumb-menu-wrap">
					<i class="far fa-home-lg"></i>
					<ul class="breadcumb-menu">
						<li><a href="<?= base_url() ?>">Home</a></li>
						<li class="active">Brain Stimulation</li>
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
								<h2 class="h5 mb-0">Brain Stimulation</h2>
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
						<h2 class="h1">Brain Stimulation</h2>
						<p class="fs-md mb-4 pb-2">
							<strong>Brain Stimulation</strong> at StemRx Hospital involves techniques such as transcranial magnetic stimulation (TMS) or transcranial direct current stimulation (tDCS). These methods deliver controlled electrical or magnetic impulses to specific areas of the brain, modulating neuronal activity and promoting neural plasticity.
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
							<strong>Brain Stimulation</strong> at StemRx Hospital is applied in the treatment of neurological and psychiatric conditions such as Autism spectrum disorder, depression, anxiety, chronic pain, and cognitive disorders. It is also used in research settings to study brain function and explore potential therapeutic interventions for various brain-related conditions.
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
							Compared to conventional treatments, <strong>Brain Stimulation</strong> at StemRx Hospital offers several advantages. Firstly, it provides targeted modulation of brain activity, allowing for precise interventions tailored to individual patient needs. This can lead to improved symptom management and enhanced treatment outcomes. Additionally, <strong>Brain Stimulation</strong> techniques are non-invasive and generally well-tolerated, with minimal side effects reported. They also offer a relatively rapid onset of therapeutic effects, making them suitable for patients who have not responded to other treatments or who require adjunctive therapies. Moreover, <strong>Brain Stimulation</strong> can be customized to target specific brain regions or neural circuits, optimizing treatment efficacy and minimizing the risk of off-target effects. Overall, <strong>Brain Stimulation</strong> at StemRx Hospital represents a promising approach to treating a wide range of neurological and psychiatric disorders, offering personalized and effective therapeutic interventions.
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
