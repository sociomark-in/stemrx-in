<main>
	<div class="breadcumb-wrapper d-none">
		<div class="parallax" data-parallax-image="<?= base_url() ?>assets/img/breadcurmb/breadcurmb-1-1.jpg"></div>
		<div class="container z-index-common">
			<div class="breadcumb-content">
				<h1 class="breadcumb-title">Infertility Center</h1>
				<div class="breadcumb-menu-wrap"><i class="far fa-home-lg"></i>
					<ul class="breadcumb-menu">
						<li><a href="index-2.html">Home</a></li>
						<li class="active">Infertility Center</li>
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
								<source media="(min-width: 800px)" srcset="<?= base_url('assets/img/banners/landing/') ?>lp_infertility_1200x600.webp" type="image/webp">
								<source media="(min-width: 800px)" srcset="<?= base_url('assets/img/banners/landing/') ?>lp_infertility_1200x600.jpg" type="image/jpg">
								<source srcset="<?= base_url('assets/img/banners/landing/') ?>lp_infertility_800x800.webp" type="image/webp">
								<img src="<?= base_url('assets/img/banners/landing/') ?>lp_infertility_800x800.jpg" alt="Service Image" class="w-100">
							</picture>
						</div>
						<div class="row justify-content-center">
							<div class="col-xl-11 col-xxl-10 ">
								<div class="service-bar">
									<div class="row justify-content-between align-items-center gy-4 text-center text-lg-start">
										<div class="col-sm-6 col-lg-auto">
											<span class="fs-xs">Condition</span>
											<h2 class="h5 mb-0">Infertility Conditions (Male and Female Infertility Issues)</h2>
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
						<h2 class="h1">Struggling to Conceive? You're Not Alone. <br>Our Experts at StemRx Hospitals Can Help.</h2>
						<p class="fs-md mb-4 pb-2">
							<strong class="text-title">Infertility</strong> is a complicated medical issue that encompasses a range of conditions that can impede conception. <strong class="text-title">Polycystic Ovary Syndrome (PCOS/PCOD)</strong>, for example, disrupts ovulation due to hormonal imbalances, while a thin endometrium can limit the successful implantation of an embryo. <strong class="text-title">Asherman's Syndrome</strong>, which involves intrauterine adhesions, can create an unfavorable uterine environment for pregnancy. <strong class="text-title">Erectile Dysfunction</strong> is another factor that can hinder natural conception by interfering with sexual intercourse. <strong class="text-title">Azoospermia</strong>, the absence of sperm in semen, presents a significant challenge for male fertility. Each of these conditions requires specific treatments, such as cellular therapy, hormonal therapies, assisted reproductive technologies, or even surgical interventions. Addressing these factors is a vital step with StemRx hospital.
						</p>
					</div>
					<div class="d-none">
						<h2 class="h1">Struggling to Conceive? You're Not Alone. <br>Our Experts at StemRx Hospitals Can Help.</h2>
						<p class="fs-md mb-4 pb-2">
							Trying to start a family can be a joyful journey, but sometimes it can feel like an uphill battle. Infertility is more common than you might think, affecting millions of couples worldwide. At StemRx Hospital, we understand the emotional and physical challenges you face. Whether it's PCOS, a thin endometrium, or other fertility concerns, our team of experienced specialists is here to guide you.
						</p>
						<p class="fs-md mb-4 pb-2">
							We offer a comprehensive range of treatments, including cellular therapy, hormonal therapies, and assisted reproductive technologies (ART) procedures. Our goal is to provide a personalized approach to help you achieve your dream of parenthood.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="appointment-wrapper space-md-bottom" id="appointment">
		<div class="container">
			<div class="row flex-row-reverse align-items-center">
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
							Don't wait any longer. Take the first step towards building your family. Schedule an appointment with StemRx Hospital today and let's explore your options together.
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
												<p>
													StemRx Hospital offers advanced stem cell therapy for infertility, utilizing the latest scientific advancements such as cellular therapy to enhance fertility potential.
												</p>
											</div>
										</div>
									</div>
									<div class="accordion-item py-3">
										<h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Personalized Treatment Plans</button></h2>
										<div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#vs-faq-accordion">
											<div class="accordion-body">
												<p>
													Each patient receives a customized treatment plan tailored to their specific needs and medical history, ensuring the most effective approach to infertility treatment.
												</p>
											</div>
										</div>
									</div>
									<div class="accordion-item py-3">
										<h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Multidisciplinary Team Approach</button></h2>
										<div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#vs-faq-accordion">
											<div class="accordion-body">
												<p>
													A team of specialists including fertility doctor, stem cell researchers, and holistic health practitioners collaborate to provide comprehensive care and support.
												</p>
											</div>
										</div>
									</div>
									<div class="accordion-item py-3">
										<h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">State-of-the-Art Facilities</button></h2>
										<div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#vs-faq-accordion">
											<div class="accordion-body">
												<p>
													StemRx Hospital boasts state-of-the-art facilities equipped with cutting-edge technology and resources for diagnosing and treating infertility issues.
												</p>
											</div>
										</div>
									</div>
									<div class="accordion-item py-3">
										<h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">Holistic Approach to Wellness</button></h2>
										<div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#vs-faq-accordion">
											<div class="accordion-body">
												<p>
													In addition to medical treatments, StemRx Hospital emphasizes holistic approaches to wellness, addressing lifestyle factors and emotional well-being to optimize fertility outcomes.
												</p>
											</div>
										</div>
									</div>
									<div class="accordion-item py-3">
										<h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">Track Record of Success</button></h2>
										<div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#vs-faq-accordion">
											<div class="accordion-body">
												<p>
													StemRx Hospital has a proven track record of success, with many patients achieving their goals of conception and parenthood through their innovative treatments and compassionate care.
												</p>
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

	<section class="vs-specialities-wrapper space-bottom">
		<div class="container">
			<div class="row text-center justify-content-center mb-30">
				<div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
					<h2 class="h1">All Infertility Conditions</h2>
					<!-- <p>Proactively revolutionize granular customer service after pandemic internal or "organic" sources proactive human capital rather.</p> -->
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-xl-9 col-12">
				<div class="row justify-content-center">
					<div class="col-lg-2 col-md-4 col-6">
						<a href="<?= base_url("condition/infertility/azoospermia") ?>" class="text-center">
							<div class="card bg-white sp-item mb-2">
								<div class="card-body p-5">
									<img src="<?= base_url("assets/img/icons/color/diseases/testicle.png") ?>" alt="Azoospermia" class="w-100">
								</div>
							</div>
							<h6 class="text-theme">Azoospermia</h6>
						</a>
					</div>
					<div class="col-lg-2 col-md-4 col-6">
						<a href="<?= base_url("condition/infertility/pcod-pcos") ?>" class="text-center">
							<div class="card bg-white sp-item mb-2">
								<div class="card-body p-5">
									<img src="<?= base_url("assets/img/icons/color/diseases/vagina.png") ?>" alt="PCOD" class="w-100">
								</div>
							</div>
							<h6 class="text-theme">PCOD / PCOS</h6>
						</a>
					</div>
					<div class="col-lg-2 col-md-4 col-6">
						<a href="<?= base_url("condition/infertility/decrease-ovarian-reserve") ?>" class="text-center">
							<div class="card bg-white sp-item mb-2">
								<div class="card-body p-5">
									<img src="<?= base_url("assets/img/icons/color/diseases/ovary.png") ?>" alt="Condition Single" class="w-100">
								</div>
							</div>
							<h6 class="text-theme">Decrease Ovarian Reserve</h6>
						</a>
					</div>
					<div class="col-lg-2 col-md-4 col-6">
						<a href="<?= base_url("condition/infertility/thin-endometrium") ?>" class="text-center">
							<div class="card bg-white sp-item mb-2">
								<div class="card-body p-5">
									<img src="<?= base_url("assets/img/icons/color/diseases/endometrial.png") ?>" alt="Condition Single" class="w-100">
								</div>
							</div>
							<h6 class="text-theme">Thin Endometrium </h6>
						</a>
					</div>
					<div class="col-lg-2 col-md-4 col-6">
						<a href="<?= base_url("condition/infertility/ashermen-syndrome") ?>" class="text-center">
							<div class="card bg-white sp-item mb-2">
								<div class="card-body p-5">
									<img src="<?= base_url("assets/img/icons/color/diseases/vagina.png") ?>" alt="Condition Single" class="w-100">
								</div>
							</div>
							<h6 class="text-theme">Ashermen's Syndrome </h6>
						</a>
					</div>
					<div class="col-lg-2 col-md-4 col-6">
						<a href="<?= base_url("condition/infertility/premature-menopause") ?>" class="text-center">
							<div class="card bg-white sp-item mb-2">
								<div class="card-body p-5">
									<img src="<?= base_url("assets/img/icons/color/diseases/menstrual-cycle.png") ?>" alt="Condition Single" class="w-100">
								</div>
							</div>
							<h6 class="text-theme">Premature Menopause</h6>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
