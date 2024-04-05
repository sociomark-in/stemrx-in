<main>
	<!-- <div class="breadcumb-wrapper">
		<div class="parallax" data-parallax-image="<?= base_url() ?>assets/img/breadcurmb/breadcurmb-1-1.jpg"></div>
		<div class="container z-index-common">
			<div class="breadcumb-content">
				<h1 class="breadcumb-title">David Smith</h1>
				<div class="breadcumb-menu-wrap"><i class="far fa-home-lg"></i>
					<ul class="breadcumb-menu">
						<li><a href="<?= base_url() ?>">Home</a></li>
						<li class="active">Doctors Details</li>
					</ul>
				</div>
			</div>
		</div>
	</div> -->
	<section class="vs-details-wrapper space-top">
		<div class="container">
			<div class="row gx-40">
				<div class="col-lg-5">
					<div class="member-header mb-40 overflow-hidden rounded-3 position-relative">
						<div class="member-details-img"><img src="<?= base_url() ?>assets/img/project/gauri600_800.jpg" alt="Member Image" class="w-100"></div>
						<div class="member-angle-links">
							<div class="shape"><img src="<?= base_url() ?>assets/img/bg/member-shape.png" alt="Shape"></div>

						</div>
						<!-- <a href="#" class="certifate-link">See All Publications<i class="far fa-chevron-circle-right"></i></a> -->
					</div>
				</div>
				<div class="col-lg-7">
					<div class="team-content">
						<h2 class="mb-0 mt-n2">Dr. Gauri Khanderao</h2>
						<p class="text-theme fs-xs">BHMS, B.ACU, PGDHM</p>
						<!-- <p class="fs-md text-title">Rapidiously productivate multimedia based scenarios and economically sound ROI. Dynamically seize cross-platform "outside the box" thinking after enterprise markets. Efficiently enhance end-to-end relationships...</p> -->
						<p>Have experience working in Regenerative Medicine for more than a decade. She is a Consultant Homeopathic physician, Alternative Therapist for Ozone, Acupuncturist, and Detoxification Specialist. She is an assistant to Dr. Pradeep Mahajan in conducting different procedures related to treatment in regenerative medicine</p>
						<table class="member-table">
							<tbody>
								<tr>
									<th><strong>Speciality</strong></th>
									<td>FMAS Infertility</td>
								</tr>
								<tr>
									<th><strong>Degrees</strong></th>
									<td><span class="text-theme">BHMS, B.ACU, PGDHM</span></td>
								</tr>
								<tr>
									<th><strong>Areas of Expertise</strong></th>
									<td>
										<ul class="member-info-list">
											<li>Obstetrics</li>
											<li>Gynecology</li>
											<li>Infertility treatment</li>
										</ul>
									</td>
								</tr>
								<!-- <tr>
									<th><strong>Office</strong></th>
									<td>374 William S Canning Blvd, Fall River MA 2721</td>
								</tr>
								<tr>
									<th><strong>University</strong></th>
									<td>Harvard University</td>
								</tr> -->
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row gx-40">
				<div class="col-lg-7">
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
							'class' => "form-wrap1 shadow-none mb-30 rounded-3 overflow-hidden wow fadeInUp",
							'bg-image' => "",
							'bg-color' => "#f3f6f7",
						],
						"fields" => [
							'condition' => "enabled",
							'doctor' => "disabled"
						]
					];
					$this->load->view('common/forms/appointment_form', $data); ?>
				</div>
				<div class="col-lg-5 d-none">
					<div class="team-schedule bg-smoke wow fadeInUp" data-wow-delay="0.3s">
						<h3 class="h4 border-title">Timings & Schedule</h3>
						<table class="team-schedule-table">
							<tbody>
								<tr>
									<td>Mon - Fri:</td>
									<td>8.00 am - 8.00 pm</td>
								</tr>
								<tr>
									<td>Saturday:</td>
									<td>9.00 am - 6.00 pm</td>
								</tr>
								<tr>
									<td>Sunday:</td>
									<td>9.00 am - 6.00 pm</td>
								</tr>
							</tbody>
						</table>
						<a href="tel:66925682596" class="vs-btn style2">(669) 2568 2596<i class="fas fa-phone-alt"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
