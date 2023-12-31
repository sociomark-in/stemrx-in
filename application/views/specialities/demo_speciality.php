<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link media="screen and (min-width:250px)" rel="stylesheet" href="<?= base_url() ?>assets/css/style.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<title>Document</title>
</head>

<body>
	<header>
		<?php $this->load->view("components/_common_nav"); ?>
	</header>
	<main>
		<article class="hero__banner">
			<img src="<?= base_url("assets/media/images/") ?>banner-tricology.jpg" alt="Banner" class="w-100">
			<section id="pageHeading">
				<div class="container">
					<div class="hero__title">
						<h1 class="text-white">Trichology</h1>
					</div>
					<a href="" class="btn btn-primary"><i class="ti ti-stethoscope me-2"></i>Find a Doctor for Trichology</a>
				</div>
			</section>
		</article>
		<section id="descBrief">
			<div class="container">
				<div class="blog__content">
					<h3>Lorem ipsum dolor sit amet.</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut atque dolores qui dolore molestias unde ipsum sequi officia inventore est.</p>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere, nobis hic architecto repudiandae commodi, fugiat, officiis excepturi repellat ipsum amet est tempora? Laboriosam aliquid veniam provident doloremque recusandae nesciunt, blanditiis veritatis. Voluptatibus voluptate incidunt ratione ipsam optio id labore, temporibus eveniet, laborum, ut quas deserunt non aliquam! Assumenda, alias voluptates?</p>
					<p><br></p>
					<h3>Lorem ipsum dolor sit amet.</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut atque dolores qui dolore molestias unde ipsum sequi officia inventore est.</p>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere, nobis hic architecto repudiandae commodi, fugiat, officiis excepturi repellat ipsum amet est tempora? Laboriosam aliquid veniam provident doloremque recusandae nesciunt, blanditiis veritatis. Voluptatibus voluptate incidunt ratione ipsam optio id labore, temporibus eveniet, laborum, ut quas deserunt non aliquam! Assumenda, alias voluptates?</p>
				</div>
			</div>
		</section>
		<section id="doctorSpecialists" class="">
			<div class="container">
				<div class="section-title mb-3">
					<div class="row g-0 m-0 justify-content-between align-items-end">
						<div class="col-auto">
							<h2>Our Trichology Specialists</h2>
						</div>
						<div class="col-auto">
							<a class="simple-link" href="">View List of Doctors</a>
						</div>
					</div>
				</div>
				<div class="swiper recommendDoctors">
					<div class="swiper-wrapper">
						<?php for ($i = 0; $i < 4; $i++) : ?>
							<div class="swiper-slide">
								<div class="card">
									<div class="text-center">
										<img src="<?= base_url("assets/media/images/") ?>doctor-thumb-01.jpg" alt="Blog Image" width="150">
									</div>
									<div class="card-body">
										<p>
											<strong>Doctor Name</strong> <br>
											<small class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, dolor.</small>
										</p>
									</div>
									<div class="card-footer">
										<div class="row m-0 g-0 justify-content-between">
											<div class="col-md-auto col-12">
												<a href="" class="btn btn-primary"><i class="ti ti-eye"></i></a>
											</div>
											<div class="col-md-auto col-12">
												<a href="" class="btn btn-blue">Book Appointment</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endfor ?>
					</div>
				</div>
			</div>
		</section>
		<section id="relatedContent">
			<div class="container">
				<div class="section-title">
					<h2>Related Treatments</h2>
				</div>
				<div class="swiper relatedTreatments">
					<div class="swiper-wrapper">
						<?php for ($i = 0; $i < 4; $i++) : ?>
							<div class="swiper-slide">
								<a href="" class="">
									<div class="bg-white row m-0 g-0">
										<div class="col-auto">
											<img src="<?= base_url("assets/media/images/") ?>blog-thumb-01.png" alt="Blog Image" width="100">
										</div>
										<div class="col p-3">
											<p>
												<strong>Treatments</strong> <br>
												<small class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, dolor.</small>
											</p>
										</div>
									</div>
								</a>
							</div>
						<?php endfor ?>
					</div>
				</div>
			</div>
		</section>
	</main>
	<footer>
		<?php $this->load->view('components/_common_footer') ?>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

	<!-- Swiper JS -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

	<!-- Initialize Swiper -->
	<script>
		var swiper = [
			new Swiper(".recommendDoctors", {
				slidesPerView: 1,
				spaceBetweenSlides: 10,
				breakpoints: {
					// when window width is <= 499px
					499: {
						slidesPerView: 2,
						spaceBetweenSlides: 10,
					},
					// when window width is <= 999px
					999: {
						slidesPerView: 3,
						spaceBetweenSlides: 20,
					},
					1024: {
						slidesPerView: 4,
						spaceBetween: 30,
					}
				},
			}),
			new Swiper(".relatedTreatments", {
				slidesPerView: 1,
				spaceBetweenSlides: 10,
				breakpoints: {
					// when window width is <= 499px
					499: {
						slidesPerView: 2,
						spaceBetweenSlides: 10
					},
					// when window width is <= 999px
					999: {
						slidesPerView: 3,
						spaceBetweenSlides: 30
					}
				},
			})
		]
	</script>
</body>

</html>
