<main>
	<div class="breadcumb-wrapper">
		<div class="parallax" data-parallax-image="assets/img/breadcurmb/breadcurmb-1-1.jpg"></div>
		<div class="container z-index-common">
			<div class="breadcumb-content">
				<h1 class="breadcumb-title">Appointment</h1>
				<div class="breadcumb-menu-wrap">
					<i class="far fa-home-lg"></i>
					<ul class="breadcumb-menu">
						<li><a href="<?= base_url() ?>">Home</a></li>
						<li class="active">Appointment</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<section class="appointment-wrapper space">
		<div class="container">
			<div class="row gx-40">
				<div class="col-xl-6 mb-40 mb-xl-0 wow fadeInUp" data-wow-delay="0.3s">
					<?php
					$data = [
						"action" => [
							"method" => "POST",
							"action" => base_url()
						],
						"title" => [
							'bg-image' => "",
							'heading' => "Book An Appointment",
							'desc' => "Dynamically seize cross platform \"outside the box\" thinking after enterprise...",
						],
						"props" => [
							'class' => "shadow-none mb-0",
							'bg-image' => "assets/img/bg/bg-shape-9.jpg",
							'bg-color' => "#f3f6f7 ",
						],
						"fields" => [
							'condition' => "disabled",
							'doctor' => "enabled"
						]
					];
					$this->load->view('common/forms/appointment_form', $data); ?>
				</div>
				<div class="col-xl-6">
					<div class="vs-accordion accordion" id="vsaccordion">
						<div class="accordion-item">
							<h2 class="accordion-header">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
									Uniquely optimize reliable models before wireless results
									ofessionally impact progressive core.
								</button>
							</h2>
							<div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#vsaccordion">
								<div class="accordion-body">
									<p>
										Professionally impact distributed data via value-added
										experiences. Proacti incentivize 24/365 applications
										whereas turnkey total linkage. whiteboard multifunctional
										channels with interoperable value.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
									Lorem ipsum is placeholder text commonly used in the
									graphic, print, and publishing industries for
								</button>
							</h2>
							<div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#vsaccordion">
								<div class="accordion-body">
									<p>
										Professionally impact distributed data via value-added
										experiences. Proacti incentivize 24/365 applications
										whereas turnkey total linkage. whiteboard multifunctional
										channels with interoperable value.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
									From its medieval origins to the digital era, learn
									everything there is to know about the ubiquitous
								</button>
							</h2>
							<div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#vsaccordion">
								<div class="accordion-body">
									<p>
										Professionally impact distributed data via value-added
										experiences. Proacti incentivize 24/365 applications
										whereas turnkey total linkage. whiteboard multifunctional
										channels with interoperable value.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
									Lorem ipsum began as scrambled, nonsensical Latin derived
									from Cicero's 1st-century BC text De Finibus
								</button>
							</h2>
							<div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#vsaccordion">
								<div class="accordion-body">
									<p>
										Professionally impact distributed data via value-added
										experiences. Proacti incentivize 24/365 applications
										whereas turnkey total linkage. whiteboard multifunctional
										channels with interoperable value.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
									Some claim lorem ipsum threatens to promote design over
									content, while others defend its value process
								</button>
							</h2>
							<div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#vsaccordion">
								<div class="accordion-body">
									<p>
										Professionally impact distributed data via value-added
										experiences. Proacti incentivize 24/365 applications
										whereas turnkey total linkage. whiteboard multifunctional
										channels with interoperable value.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</main>
