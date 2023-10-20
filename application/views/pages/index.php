<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link media="screen and (min-width:250px)" rel="stylesheet" href="<?= base_url() ?>assets/css/style.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="icon" href="<?= base_url("assets/media/favicons/")?>favicon.ico">
	<meta name="title" content="Network18">
	<meta name="description" content="Network18">
	<title>Network18</title>
</head>

<body>
	<header>
		<?php $this->load->view("components/_common_nav"); ?>
	</header>
	<main>
		<section class="main_banner" id="fullBanner">
			<img src="<?= base_url("assets/media/images/") ?>banner.jpeg" alt="" class="w-100">
		</section>
		<section id="trending18">
			<div class="container">
				<div class="section-heading brand-touch">
					<h2>Trending</h2>
				</div>
				<div class="row m-0 align-items-center">
					<div class="col-lg-5 col-md-6 col-12 mb-3">
						<div class="media-content">
							<img src="<?= base_url("assets/media/") ?>images/thumbnail.png" alt="" class="w-100">
						</div>
					</div>
					<div class="col-lg-7 col-md-6">
						<div class="text-content">
							<div class="title">
								<h3>Text Heading&nbsp;<span class="text-18">Special</span></h3>
							</div>
							<div class="desc">
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex cumque quod accusantium praesentium ratione ad labore, molestias voluptatibus ab vero.
								</p>
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex cumque quod accusantium praesentium ratione ad labore, molestias voluptatibus ab vero.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="Video18">
			<div class="container">
				<div class="section-heading brand-touch">
					<h2>Videos</h2>
				</div>
				<div class="gallery">
					<div class="swiper videoSwiper">
						<div class="swiper-wrapper">
							<?php for ($i = 0; $i < 15; $i++) : ?>
								<div class="swiper-slide">
									<a href="" class="card">
										<div class="video">
											<video src="" poster="<?= base_url("assets/media/") ?>podcast.gif"></video>
										</div>
										<div class="card-body">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, est.
										</div>
									</a>
								</div>
							<?php endfor ?>
						</div>
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
					</div>
				</div>
			</div>
		</section>
		<section id="Podcasts18">
			<div class="container">
				<div class="section-heading brand-touch">
					<h2>Podcasts</h2>
				</div>
				<div class="gallery">
					<div class="swiper podcastsSwiper">
						<div class="swiper-wrapper">
							<?php for ($i = 0; $i < 15; $i++) : ?>
								<div class="swiper-slide">
									<div class="card podcast-card">
										<div class="video">
											<video src="" poster="<?= base_url("assets/media/") ?>podcast.gif"></video>
										</div>
										<div class="card-body">
											<div class="redirect play-btn">
												<a href="">
													<i class="fa-solid fa-play"></i>
												</a>
											</div>
											<div class="row justify-content-end">
												<div class="col-xl-9 col-md-6 col-12">
													<div class="speaker">
														Lorem ipsum,
														<div class="desingation">
															<small>sit amet consectetur</small>
														</div>
													</div>
												</div>
												<div class="col-12">
													<div class="desc">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, molestias!
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endfor ?>
						</div>
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
					</div>
				</div>
			</div>
		</section>
		<section id="aboutNW18">
			<div class="container">
				<div class="section-heading brand-touch">
					<h2>About&nbsp;Us
				</div>
				<div class="row m-0 align-items-center flex-row-reverse">
					<div class="col-lg-5 col-md-6 mb-3">
						<div class="media-content">
							<img src="<?= base_url("assets/media/") ?>images/thumbnail.png" alt="" class="w-100">
						</div>
					</div>
					<div class="col-lg-7 col-md-6">
						<div class="text-content">
							<div class="title">
								<h3>Text Heading&nbsp;<span class="text-18">Special</span></h3>
							</div>
							<div class="desc">
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex cumque quod accusantium praesentium ratione ad labore, molestias voluptatibus ab vero.
								</p>
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex cumque quod accusantium praesentium ratione ad labore, molestias voluptatibus ab vero.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


	<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
	<script>
		var swiper = [
			new Swiper(".videoSwiper", {
				slidesPerView: 1,
				breakpoints: {
					// when window width is <= 499px
					499: {
						slidesPerView: 2.5,
						spaceBetweenSlides: 10
					},
					// when window width is <= 999px
					999: {
						slidesPerView: 3.5,
						spaceBetweenSlides: 20
					},
					1024: {
						slidesPerView: 4.5,
						spaceBetween: 30,
					}
				},
				loop: true,
				initialSlide: 2,
				/* autoplay:{
					duration: 1000,
				}, */
				centeredSlides: true,
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
			}),
			new Swiper(".podcastsSwiper", {
				slidesPerView: 1,
				breakpoints: {
					// when window width is <= 499px
					499: {
						slidesPerView: 2.5,
						spaceBetweenSlides: 10
					},
					// when window width is <= 999px
					999: {
						slidesPerView: 3.5,
						spaceBetweenSlides: 20
					},
					1024: {
						slidesPerView: 4.5,
						spaceBetween: 30,
					}
				},
				loop: true,
				initialSlide: 2,
				/* autoplay:{
					duration: 1000,
				}, */
				centeredSlides: true,
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
			}),
		];
	</script>
</body>

</html>
