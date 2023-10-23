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
		<section id="searchWidget">
			<div class="container">
				<div class="row m-0">
					<div class="col-12">
						<form action="" method="post">
							<div class="card">
								<div class="card-body">
									<div class="row m-0">
										<div class="col-md col-12 mb-md-0 mb-3">
											<input type="search" name="" id="" class="form-control" placeholder="Search in Specialities, Doctors and more...">
										</div>
										<div class="col-md-auto col-12">
											<button type="submit" class="btn btn-primary">Search</button>
										</div>
									</div>
								</div>
							</div>
							<span class="form-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, at?</span>
						</form>
					</div>
				</div>
			</div>
		</section>
		<section id="cta">
			<div class="container">
				<div class="row m-0">
					<div class="col-lg-7 col-md-6 col-12">
						<div class="row m-0">
							<div class="col-md-6 col-12 mb-3">
								<a href="#" class="card h-100 card-success-bordered-subtle-bg">
									<div class="card-body">
										<h4>Book an Appointment</h4>
										<p class="m-0">
											With country's leading experts
										</p>
									</div>
								</a>
							</div>
							<div class="col-md-6 col-12 mb-3">
								<a href="#" class="card h-100 card-warning-bordered-subtle-bg">
									<div class="card-body">
										<h4>Specialities</h4>
										<p class="m-0">
											Our expertise in Healthcare
										</p>
									</div>
								</a>
							</div>
							<div class="col-md-6 col-12 mb-3">
								<a href="#" class="card h-100 card-violet-bordered-subtle-bg">
									<div class="card-body">
										<h4>Doctors</h4>
										<p class="m-0">Top experts for your health</p>
									</div>
								</a>
							</div>
							<div class="col-md-6 col-12 mb-3">
								<a href="#" class="card h-100 card-blue-bordered-subtle-bg">
									<div class="card-body">
										<h4>Doctors</h4>
										<p class="m-0">Top experts for your health</p>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-6 col-12">
						<h3 class="mb-3">We can help you...</h3>
						<a href="#" class="card card-blue-bordered-subtle-bg">
							<div class="card-body">
								<h4>Book an Appointment</h4>
								<p>
									With country's leading experts
								</p>
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ipsa iste magnam fuga quidem reprehenderit! Consectetur minus esse incidunt sunt.
								</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>
		<section id="exploreShop">
			<div class="container">
				<div class="row m-0 justify-content-center">
					<div class="col-xl-7 col-md-9 col-12">
						<div class="text-center">
							<h2 class="mb-3">Nutraceuticals</h2>
							<div class="row m-0 justify-content-center mb-3">
								<div class="col-auto">
									<h4>Repair</h4>
								</div>
								<div class="col-auto">
									<h4>Regenerate</h4>
								</div>
								<div class="col-auto">
									<h4>Rejuvenate</h4>
								</div>
							</div>
							<div class="card mb-3">
								<div class="card-body">
									<p>
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam repudiandae doloremque, sequi aut vel dolores et iste sapiente odit dignissimos.
									</p>
								</div>
							</div>
							<a href="" class="btn btn-primary">View All Products<i class="ti ti-external-link icon icon-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="exploreBlogs" class="">
			<div class="container">
				<div class="section-title mb-3">
					<div class="row g-0 m-0 justify-content-between align-items-end">
						<div class="col-auto">
							<h2>Explore Our Blogs</h2>
						</div>
						<div class="col-auto">
							<a class="simple-link" href="">View All</a>
						</div>
					</div>
				</div>
				<div class="swiper recommendBlogs">
					<div class="swiper-wrapper">
						<?php for ($i = 0; $i < 3; $i++) : ?>
							<div class="swiper-slide">
								<div class="card">
									<img src="<?= base_url("assets/media/images/") ?>blog-thumb-01.png" alt="Blog Image">
									<div class="card-body">
										<h4>Full Blog Title</h4>
										<p>
											Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, dolor.
										</p>
									</div>
								</div>
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
		var swiper = new Swiper(".recommendBlogs", {
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
					spaceBetweenSlides: 20
				},
				1024: {
					slidesPerView: 3,
					spaceBetween: 30,
				}
			},
		});
	</script>
</body>

</html>
