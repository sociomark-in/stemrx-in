<main>
	<div class="breadcumb-wrapper d-none">
		<div class="parallax" data-parallax-image="<?= base_url() ?>assets/img/breadcurmb/breadcurmb-1-1.jpg"></div>
		<div class="container z-index-common">
			<div class="breadcumb-content">
				<h1 class="breadcumb-title">Osteoarthritis</h1>
				<div class="breadcumb-menu-wrap"><i class="far fa-home-lg"></i>
					<ul class="breadcumb-menu">
						<li><a href="index-2.html">Home</a></li>
						<li class="active">Osteoarthritis</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<section class="vs-service-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="service-content mb-30">
						<div class="vs-surface wow" data-wow-delay="0.3s">
							<picture>
								<source media="(min-width: 800px)" srcset="<?= base_url('assets/img/banners/landing/') ?>lp_arthritis_1200x600.webp" type="image/webp">
								<source media="(min-width: 800px)" srcset="<?= base_url('assets/img/banners/landing/') ?>lp_arthritis_1200x600.jpg" type="image/jpg">
								<source srcset="<?= base_url('assets/img/banners/landing/') ?>lp_arthritis_800x800.webp" type="image/webp">
								<img src="<?= base_url('assets/img/banners/landing/') ?>lp_arthritis_800x800.jpg" alt="Service Image" class="w-100">
							</picture>
						</div>
						<div class="row justify-content-center">
							<div class="col-xl-11 col-xxl-10 ">
								<div class="service-bar">
									<div class="row justify-content-between align-items-center gy-4 text-center text-lg-start">
										<div class="col-sm-6 col-lg-auto">
											<span class="fs-xs">Condition</span>
											<h2 class="h5 mb-0">Osteoarthritis and Other Pain Care Conditions</h2>
										</div>

										<div class="col-sm-6 col-lg-auto">
											<a href="#appointment" class="vs-btn style2">Book an Appointment<i class="fal fa-calendar-alt"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="vs-detail-wrapper space-bottom">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="">
						<h2 class="h1">Stop Suffering in Silence. Discover Personalized Osteoarthritis Treatment with StemRx Hospitals!</h2>
						<p class="fs-md mb-4 pb-2">
						    Osteoarthritis, often called the wear-and-tear arthritis, is a debilitating condition affecting millions worldwide. It gradually erodes the protective cartilage that cushions the ends of bones, leading to pain, stiffness, and reduced mobility in affected joints, commonly the knees, hips, hands, and spine. While age is a primary risk factor, other contributors include genetics, joint injuries, and obesity. Symptoms worsen over time, impacting daily activities and diminishing quality of life. Management typically involves a combination of pain relief, exercise, weight management, and, in severe cases, surgical interventions like joint replacement. Due to the advanced treatment options in this condition including cellular therapy, osteoarthritis doesn’t remains a significant health challenge.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="appointment-wrapper space-md-bottom" id="appointment">
		<div class="container">
			<div class="row flex-row-reverse">
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
				<div class="col-xl-6 mb-30">
					<div class="about-content">
						<!-- <span class="sec-subtitle text-theme h3 mb-2 mb-sm-0">StemRx Medical Care!</span> -->
						<h2 class="h1 mb-3">We're Here For You</h2>
						<p class="fs-md mb-4 pb-2">
							Don't wait any longer. Take the first step towards managing your pain. Schedule an appointment with StemRx Hospital today and let's explore your options together.
						</p>
						<div class="row">
							<div class="col-xl-10 pb-md-1">
								<!-- <p class="mb-md-4">Proactively revolutionize granular customer service after pandemic internal or "organic" sources. Distinctively impact proactive human capital rather than client-centered benefits.</p> -->
							</div>
							<!-- <div class="col-md-6 col-lg-5 col-xl-4">
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
							</div> -->
							<div class="col-12">
								<div class="vs-accordion accordion accordion-style2" id="vs-faq-accordion">
									<div class="accordion-item py-3">
										<h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">Cutting-edge Stem Cell Therapy</button></h2>
										<div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#vs-faq-accordion" style="">
											<div class="accordion-body">
												<p>StemRx Hospital offers cutting-edge stem cell therapy for osteoarthritis, harnessing the regenerative potential of stem cells to promote tissue repair and pain relief.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item py-3">
										<h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Personalized Treatment Plans</button></h2>
										<div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#vs-faq-accordion">
											<div class="accordion-body">
												<p>StemRx Hospital offers cutting-edge stem cell therapy for osteoarthritis, harnessing the regenerative potential of stem cells to promote tissue repair and pain relief.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item py-3">
										<h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Multidisciplinary Team Approach</button></h2>
										<div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#vs-faq-accordion">
											<div class="accordion-body">
												<p>StemRx Hospital offers cutting-edge stem cell therapy for osteoarthritis, harnessing the regenerative potential of stem cells to promote tissue repair and pain relief.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item py-3">
										<h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">State-of-the-Art Facilities</button></h2>
										<div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#vs-faq-accordion">
											<div class="accordion-body">
												<p>Our hospital is equipped with state-of-the-art facilities, including advanced imaging technology and specialized rehabilitation equipment, to support the diagnosis and treatment of osteoarthritis.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item py-3">
										<h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">Holistic Approach to Wellness</button></h2>
										<div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#vs-faq-accordion">
											<div class="accordion-body">
												<p>Beyond medical interventions, StemRx Hospital emphasizes a holistic approach to wellness, integrating lifestyle modifications, nutrition counseling, and stress management techniques to enhance overall well-being.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item py-3">
										<h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">Track Record of Success</button></h2>
										<div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#vs-faq-accordion">
											<div class="accordion-body">
												<p>With a proven track record of success, StemRx Hospital has helped numerous patients achieve significant improvements in pain relief, mobility, and quality of life, setting a benchmark in osteoarthritis treatment outcomes.</p>
											</div>
										</div>
									</div>
								</div>
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
			</div>
		</div>
	</section>
	
	<section class="vs-specialities-wrapper space-md-bottom">
		<div class="container">
			<div class="row text-center justify-content-center mb-30">
				<div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
					<h2 class="h1">All Other Pain Care Conditions</h2>
					<!-- <p>Proactively revolutionize granular customer service after pandemic internal or "organic" sources proactive human capital rather.</p> -->
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-xl-9 col-12">
				<div class="row justify-content-center">
				    <div class="col-lg-2 col-md-4 col-6 d-none">
						<a href="<?= base_url("condition/pain-care/osteoarthritis") ?>" class="text-center">
							<div class="card bg-white sp-item mb-2">
								<div class="card-body p-5">
									<img src="<?= base_url("assets/img/icons/color/diseases/pain.png") ?>" alt="Osteo Arthritis" class="w-100">
								</div>
							</div>
							<h6 class="text-theme">Osteo Arthritis </h6>
						</a>
					</div>
					<div class="col-lg-2 col-md-4 col-6">
						<a href="<?= base_url("condition/pain-care/avascular-necrosis") ?>" class="text-center">
							<div class="card bg-white sp-item mb-2">
								<div class="card-body p-5">
									<img src="<?= base_url("assets/img/icons/color/diseases/heart.png") ?>" alt="Avasular Necrosis" class="w-100">
								</div>
							</div>
							<h6 class="text-theme">Avasular Necrosis </h6>
						</a>
					</div>
					<div class="col-lg-2 col-md-4 col-6">
						<a href="<?= base_url("condition/pain-care/cervical-spondylitis") ?>" class="text-center">
							<div class="card bg-white sp-item mb-2">
								<div class="card-body p-5">
									<img src="<?= base_url("assets/img/icons/color/diseases/neck.png") ?>" alt="Cervical Spondylitis" class="w-100">
								</div>
							</div>
							<h6 class="text-theme">Cervical Spondylitis</h6>
						</a>
					</div>
					<div class="col-lg-2 col-md-4 col-6">
						<a href="<?= base_url("condition/pain-care/migraine") ?>" class="text-center">
							<div class="card bg-white sp-item mb-2">
								<div class="card-body p-5">
									<img src="<?= base_url("assets/img/icons/color/diseases/headache.png") ?>" alt="Migrain" class="w-100">
								</div>
							</div>
							<h6 class="text-theme">Migrain </h6>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
