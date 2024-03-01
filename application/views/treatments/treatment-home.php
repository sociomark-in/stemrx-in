<main>
	<div class="breadcumb-wrapper">
		<div class="parallax" data-parallax-image="<?= base_url() ?>assets/img/breadcurmb/breadcurmb-1-1.jpg"></div>
		<div class="container z-index-common">
			<div class="breadcumb-content">
				<h1 class="breadcumb-title">Our Therapeutics</h1>
				<div class="breadcumb-menu-wrap"><i class="far fa-home-lg"></i>
					<ul class="breadcumb-menu">
						<li><a href="<?= base_url() ?>">Home</a></li>
						<li class="active">Our Therapeutics</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<section class="vs-specialities-wrapper space-top space-md-bottom">
		<div class="container">
			<div class="row text-center justify-content-center mb-30">
				<div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
					<h2 class="h1">Our Therapeutics, Treatments & Procedures</h2>
					<p>Proactively revolutionize granular customer service after pandemic internal or "organic" sources proactive human capital rather.</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-xl-9 col-12">
				<div class="row justify-content-center">
					<?php foreach ($therapeutics as $key => $procedure) : ?>
						<div class="col-2">
							<a href="<?= base_url("therapeutics/" . $procedure['link']) ?>" class="text-center">
								<div class="card bg-white sp-item mb-2">
									<div class="card-body">
										<img src="<?= base_url() ?>assets/img/therapeutics/color/<?= $procedure['icon'] ?>" alt="<?= $procedure['text'] ?>" class="w-100">
									</div>
								</div>
								<h6 class="text-theme"><?= $procedure['text'] ?></h6>
							</a>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</section>
</main>
