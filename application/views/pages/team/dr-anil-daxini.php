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
						<div class="member-details-img"><img src="<?= base_url() ?>assets/img/team/dr-anil-daxini-3x2.jpg" alt="Member Image" class="w-100"></div>
						<div class="member-angle-links">
							<div class="shape"><img src="<?= base_url() ?>assets/img/bg/member-shape.png" alt="Shape"></div>
							
						</div>
						<a href="#" class="certifate-link">See All Publications<i class="far fa-chevron-circle-right"></i></a>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="team-content">
						<h2 class="mb-0 mt-n2">David Smith</h2>
						<p class="text-theme fs-xs">MBBS, M.D of Medicine</p>
						<p class="fs-md text-title">Rapidiously productivate multimedia based scenarios and economically sound ROI. Dynamically seize cross-platform "outside the box" thinking after enterprise markets. Efficiently enhance end-to-end relationships...</p>
						<p>Productivate multimedia based scenarios and economically sound ROI. Dynamically seize cross-platform "outside the box" thinking after enterprise markets. Efficiently enhance end-to-end relationships after installed base best practices. Phosfluorescently customize proactive testing procedures via end-to-end networks. Competently scale holistic interfaces for performance based customer service.</p>
						<table class="member-table">
							<tbody>
								<tr>
									<th><strong>Speciality</strong></th>
									<td>Medicine</td>
								</tr>
								<tr>
									<th><strong>Degrees</strong></th>
									<td><span class="text-theme">MBBS, M.D</span></td>
								</tr>
								<tr>
									<th><strong>Areas of Expertise</strong></th>
									<td>
										<ul class="member-info-list">
											<li>Cardiac Imaging – Non-invasive.</li>
											<li>Cardiac Rehabilitation and Exercise.</li>
											<li>Hypertrophic Cardiomyopathy.</li>
											<li>Inherited Heart Diseases.</li>
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
	<section class="vs-specialities-wrapper space-md-bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-10 col-12">
					<div class="w-100 space">
						<iframe class="ratio ratio-16x9" src="https://www.youtube.com/embed/_m5XOHuJAxI?si=kGpwhMWmF9nP_zZU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="row mb-30">
				<div class="col-12">
					<h2 class="mb-0 mt-n2">Area of Expertise (Conditions & Therapeutics)</h2>
				</div>
			</div>
			<div class="row justify-content-center space-md-bottom">
				<div class="col-xl-11 col-12">
					<div class="row g-4">
						<?php for ($i = 0; $i < 6; $i++) : ?>
							<div class="col-lg-2 col-4">
								<a href="<?= base_url() ?>" class="text-center">
									<div class="card bg-white sp-item mb-2">
										<div class="card-body">
											<img src="<?= base_url() ?>assets/img/logo.png" alt="Speciality" class="w-100">
										</div>
									</div>
									<p>Lorem ipsum dolor sit.</p>
								</a>
							</div>
						<?php endfor ?>
						<div class="col-12">
							<div class="text-center">
								<a href="" class="vs-btn">View All Conditions</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-xl-11 col-12">
					<div class="row g-4">
						<?php for ($i = 0; $i < 6; $i++) : ?>
							<div class="col-lg-2 col-4">
								<a href="<?= base_url() ?>" class="text-center">
									<div class="card bg-white sp-item mb-2">
										<div class="card-body">
											<img src="<?= base_url() ?>assets/img/logo.png" alt="Speciality" class="w-100">
										</div>
									</div>
									<p>Lorem ipsum dolor sit.</p>
								</a>
							</div>
						<?php endfor ?>
						<div class="col-12">
							<div class="text-center">
								<a href="" class="vs-btn">View All Therapeutics</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="vs-project-wrapper">
		<div class="container z-index-common">
			<div class="row text-center justify-content-center">
				<div class="col-md-10 col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
					<div class="section-title"><span class="h3 text-theme sec-subtitle">Achievements</span>
						<h2 class="h1">Awards & Accolates</h2>
						<p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, praesentium.</p>
						<!--</div>-->
					</div>
				</div>
				<div class="row vs-carousel wow fadeInUp" data-wow-delay="0.3s" data-slide-show="5">
					<?php for ($i = 0; $i < 10; $i++) : ?>
						<div class="col-md-6 col-lg-4 col-xl-3 filter-item cat-2">
							<div class="vs-project-box mb-30">
								<div class="project-img"><a href="https://placehold.co/334x480" class=" popup-image"><img src="https://placehold.co/334x480" alt="Project Image" class="w-100"></a></div>
							</div>
						</div>
					<?php endfor ?>
				</div>
			</div>
	</section>
	<section class="testimonial-wrapper space-bottom">
		<div class="container">
			<div class="row justify-content-center align-items-md-end">
				<div class="col-xl-3 col-lg-4 col-12 wow fadeInUp" data-wow-delay="0.3s">
					<div class="section-title"><span class="h3 text-theme sec-subtitle">Testimonials</span>
						<h2 class="h1">Patient Says..</h2>
						<p>Proactively revolutionize granular customer service after pandemic internal or "organic" sources proactive human capital rather.</p>
					</div>
				</div>
				<div class="col-xl-9 col-lg-8 col-12">
					<div class="row vs-carousel wow fadeInUp" data-wow-delay="0.3s" data-slide-show="2">
						<div class="col-xl-6">
							<div class="testimonial-box mb-30 bg-white">
								<div class="content">
									<p class="fs-md">Even Motor Neuropathy can be treated at StemRx</p>
									<p class="fs-md">Meet Manish who was suffering from Motor Neuropathy, where his Nerves were getting dry and he had a hard time walking without support and had constant acute back pain. StemRx has changed Manish’s life and has made him independent to do daily chores and perform everyday task like walking on his own and his backpain has reduced by 80% in just 3 sessions.</p>
								</div>
								<div class="author-img">
									<div class="avater-line"></div>
									<div class="avater">
										<a href="https://youtu.be/_m5XOHuJAxI" target="_blank"><i class="fab fa-youtube" style="color: #ce1c1c;font-size: 28px;"></i></a>
									</div>
								</div>
								<div class="author-info">
									<div class="info">
										<h3 class="fs-20 name">Moris Jonson</h3><span class="fs-xs degi text-theme">CEO, Hosak Int. Ltd.</span>
									</div>
									<div class="testi-rating">
										<div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="testimonial-box mb-30 bg-white">
								<div class="content">
									<p class="fs-md"><strong>Miraculous Recovery: Child Achieves Delayed Development Milestones Through Innovative Treatment</strong></p>
									<p class="fs-md">In this captivating video, witness the remarkable journey of a child Tanish who defied the odds and achieved delayed development milestones through a groundbreaking and innovative treatment. Follow their progress from the initial struggles to the ultimate triumph, as they overcome the challenges associated with delayed development.</p>
								</div>
								<div class="author-img">
									<div class="avater-line"></div>
									<div class="avater">
										<a href="https://youtu.be/_m5XOHuJAxI" target="_blank"><i class="fab fa-youtube" style="color: #ce1c1c;font-size: 28px;"></i></a>
									</div>
								</div>
								<div class="author-info">
									<div class="info">
										<h3 class="fs-20 name">Peter Parker</h3><span class="fs-xs degi text-theme">HR, Tech Master Ltd.</span>
									</div>
									<div class="testi-rating">
										<div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="testimonial-box mb-30 bg-white">
								<div class="content">
									<p class="fs-md"><strong>Overcoming Parkinson's: A Journey to Recovery</strong></p>
									<p class="fs-md">A heartwarming video capturing how one patient’s positive attitude and determination helped her overcome the challenges of living with Parkinson’s.</p>
								</div>
								<div class="author-img">
									<div class="avater-line"></div>
									<div class="avater">
										<a href="https://youtu.be/_m5XOHuJAxI" target="_blank"><i class="fab fa-youtube" style="color: #ce1c1c;font-size: 28px;"></i></a>
									</div>
								</div>
								<div class="author-info">
									<div class="info">
										<h3 class="fs-20 name">David Smith</h3><span class="fs-xs degi text-theme">Founder, Ajaira LTD.</span>
									</div>
									<div class="testi-rating">
										<div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
									</div>
								</div>
							</div>
						</div>
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
				<div class="col-lg-5">
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
