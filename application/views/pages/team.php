<main>
	<div class="breadcumb-wrapper">
		<div class="parallax" data-parallax-image="<?= base_url() ?>assets/img/breadcurmb/breadcurmb-1-1.jpg"></div>
		<div class="container z-index-common">
			<div class="breadcumb-content">
				<h1 class="breadcumb-title">Our Doctors</h1>
				<div class="breadcumb-menu-wrap"><i class="far fa-home-lg"></i>
					<ul class="breadcumb-menu">
						<li><a href="index-2.html">Home</a></li>
						<li class="active">Our Doctors</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<section class="vs-team-wrapper space">
		<div class="container">
			<div class="row">
				<?php for ($i=0; $i < 5; $i++) :?>
				<div class="col-md-6 col-xl-4 mb-30 wow fadeInUp" data-wow-delay="0.3s">
					<div class="team-card">
						<div class="team-head"><img src="<?= base_url() ?>assets/img/team/t-1-1.png" alt="Team Area" class="w-100">
							<div class="team-card-links"><a class="team-links-toggler" href="#"><i class="fas fa-share-alt"></i></a>
								<div class="team-social"><a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fas fa-basketball-ball"></i></a></div>
							</div>
						</div>
						<div class="team-body">
							<h3 class="h4 mb-0"><a href="<?= base_url()?>doctor/doctor-<?= $i ?>-name" class="text-reset">David Smith</a></h3>
							<p class="fs-xs degi text-theme mb-2">Specialist</p>
							<p class="fs-xs">Conceptualize user-centric web-readiness via economically sound e-services. Interactively coordinate next-generation</p>
							<div class="">
								<p class="fs-xs team-info"><i class="fas fa-phone-alt text-theme"></i><a class="text-reset" href="tel:+592201520156">+592 2015 20156</a></p>
								<p class="fs-xs team-info"><i class="fas fa-envelope text-theme"></i><a class="text-reset" href="mailto:info.example@mail.com">info.example@mail.com</a></p>
							</div>
						</div>
					</div>
				</div>
				<?php endfor ?>
			</div>
			<div class="vs-pagination pt-lg-30">
				<ul>
					<li><a href="#" class="active">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#"><i class="fas fa-angle-right"></i></a></li>
				</ul>
			</div>
		</div>
	</section>
</main>
