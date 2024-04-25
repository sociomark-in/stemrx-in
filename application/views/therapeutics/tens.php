<main>
	<!-- Breadcumb -->
	<div class="breadcumb-wrapper ">
		<div class="parallax" data-parallax-image="<?= base_url("assets/") ?>img/breadcurmb/breadcurmb-1-1.jpg"></div>
		<div class="container z-index-common">
			<div class="breadcumb-content">
				<h1 class="breadcumb-title">TENS (Transcutaneous Electrical Nerve Stimulation)</h1>
				<div class="breadcumb-menu-wrap">
					<i class="far fa-home-lg"></i>
					<ul class="breadcumb-menu">
						<li><a href="<?= base_url() ?>">Home</a></li>
						<li class="active">TENS</li>
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
								<h2 class="h5 mb-0">TENS (Transcutaneous Electrical Nerve Stimulation)</h2>
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
						<h2 class="h1">TENS (Transcutaneous Electrical Nerve Stimulation)</h2>
						<p class="fs-md mb-4 pb-2">
							TENS (Transcutaneous Electrical Nerve Stimulation) at StemRx Hospital involves the use of a small battery-operated device to deliver low-voltage electrical currents to specific areas of the body through electrodes placed on the skin. The electrical stimulation modulates pain signals along nerve pathways, leading to pain relief and improved function. TENS therapy can be administered in various settings, including outpatient clinics or home environments, and is typically applied for short periods.
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
							TENS at StemRx Hospital is utilized in the management of acute and chronic pain conditions, including musculoskeletal pain, neuropathic pain, arthritis, and postoperative pain. It is also used in rehabilitation programs for conditions such as fibromyalgia, migraine headaches, and labor pain. Patients undergoing TENS therapy experience targeted pain relief, reduced muscle tension, and improved quality of life.
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
							Compared to conventional pain management strategies, TENS at StemRx Hospital offers several advantages. Firstly, it provides non-invasive and drug-free pain relief, reducing the need for medications and their associated side effects. Additionally, TENS therapy is well-tolerated and safe when used as directed, with minimal risk of adverse reactions. It also offers on-demand pain relief, allowing patients to control the intensity and duration of treatment based on their individual needs. Moreover, TENS can be easily incorporated into daily activities and combined with other therapies, such as physical therapy or exercise, to enhance its effectiveness. Furthermore, TENS therapy can be self-administered at home with proper instruction, providing patients with a convenient and cost-effective pain management option. Overall, TENS at StemRx Hospital represents a safe, effective, and versatile approach to pain relief, improving the quality of life for individuals with a wide range of pain conditions.
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
