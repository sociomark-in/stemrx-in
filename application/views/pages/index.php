<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link media="screen and (min-width:250px)" rel="stylesheet" href="<?= base_url() ?>assets/css/style.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<title>Document</title>
</head>

<body>
	<?php $this->load->view("components/_common_nav"); ?>
	<main id="home">
		<article class="hero__banner">
			<div class="row m-0 flex-row-reverse">
				<div class="col-xl-4  offset-xl-1 col-lg-5 col-md-6 col-12">
					<div class="swiper advt_banner">
						<div class="swiper-wrapper">
							<?php for ($i = 1; $i <= 2; $i++) : ?>
								<div class="swiper-slide">
									<div class="banner_image">
										<div class="media-content">
											<div class="wrap">
												<img src="<?= base_url('assets/media/images/doctor-0' . $i . '-thumb.jpg') ?>" alt="">
											</div>
										</div>
									</div>
								</div>
							<?php endfor ?>
						</div>
					</div>
				</div>
				<div class="col-xl-7 col-lg-7 col-md-6 col-12">
					<div class="text-content h-100">
						<div class="row justify-content-end g-0 m-0 align-items-center h-100">
							<div class="col-xl-9 col-lg-10 col-12">
								<div class="banner__title mb-4">
									<p class="m-0">Welcome to StemRx</p>
									<h2>We are Here to Hear and Heal your Problems</h2>
								</div>
								<div class="banner__content">
									<p>
										Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos temporibus ex nemo incidunt, sequi placeat iure. Porro explicabo tempora asperiores?
									</p>
									<p>
										Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos temporibus ex nemo incidunt, sequi placeat iure. Porro explicabo tempora asperiores?
									</p>
									<a href="" class="btn btn-primary">Book an Appointment</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>
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
					<div class="col-lg-3 col-md-6 col-12 mb-3">
						<a href="#" class="card h-100 card-success-bordered-subtle-bg">
							<div class="card-body">
								<h4>Book an Appointment</h4>
								<p class="m-0">
									With country's leading experts
								</p>
							</div>
						</a>
					</div>
					<div class="col-lg-3 col-md-6 col-12 mb-3">
						<a href="#" class="card h-100 card-warning-bordered-subtle-bg">
							<div class="card-body">
								<h4>Specialities</h4>
								<p class="m-0">
									Our expertise in Healthcare
								</p>
							</div>
						</a>
					</div>
					<div class="col-lg-3 col-md-6 col-12 mb-3">
						<a href="#" class="card h-100 card-violet-bordered-subtle-bg">
							<div class="card-body">
								<h4>Treatments</h4>
								<p class="m-0">Top class in-house treatments</p>
							</div>
						</a>
					</div>
					<div class="col-lg-3 col-md-6 col-12 mb-3">
						<a href="#" class="card h-100 card-blue-bordered-subtle-bg">
							<div class="card-body">
								<h4>Doctors</h4>
								<p class="m-0">Top experts for your health</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-lg-5 col-md-6 col-12 d-none">
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
		<section id="aboutStemRxnPVM">
			<div class="container">
				<div class="section-title text-center mb-3 pb-3">
					<h2>You Carry Your Own Repairing Kits... <br> in Your Body!</h2>
				</div>
				<div class="row m-0">
					<div class="col-md-6 col-12 mb-3">
						<div class="card">
							<div class="card-body">
								<div class="row m-0 mb-3">
									<div class="col-lg-4 col-md-6 col-12 mb-3">
										<div class="media-content">
											<img src="<?= base_url() ?>assets/media/images/drpvmahajan1.jpg" class="w-100" alt="">
										</div>
									</div>
									<div class="col-lg col-12">
										<div class="text-content">
											<div class="title">
												<h3 class="text-primary">About Dr. Pradeep Mahajan</h3>
											</div>
											<div class="desc">
												<p>
													Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, iste? Nesciunt ad quos veniam omnis culpa repellat rerum nobis excepturi.
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="row m-0 justify-content-center">
									<div class="col-auto">
										<a href="" class="text-center btn btn-primary">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="row m-0">
							<div class="col-12">
								<div class="card bg-primary text-white">
									<div class="card-body">
										<div class="text-content">
											<div class="title">
												<h3 class="">About <strong>StemRx</strong></h3>
											</div>
											<div class="desc">
												<p>
													Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, iste? Nesciunt ad quos veniam omnis culpa repellat rerum nobis excepturi.
												</p>
												<p>
													Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi reprehenderit nisi, a, odit nulla quae doloremque earum quis, illo nobis deleniti tempora hic magnam. Cum aut voluptate officiis nesciunt dolorum?
												</p>
												<div class="text-center">
													<a href="" class="btn btn-white">Read More</a>
												</div>
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
		<section id="patientsTestimonials">
			
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
								<a class="card" href="<?= base_url("blog-single") ?>">
									<img src="<?= base_url("assets/media/images/") ?>blog-thumb-01.png" alt="Blog Image">
									<div class="card-body">
										<h4>Full Blog Title</h4>
										<p>
											Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, dolor.
										</p>
									</div>
								</a>
							</div>
						<?php endfor ?>
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
										A unique range of nutraceuticals by StemRx's Research Wing. Formulating and developing nutritionally beneficial herbal extracts, therapeutic molecules, and dietarysupple-ments with proven health benefits, the highest levels of safety, efficacy, and quality.
									</p>
								</div>
							</div>
							<a href="" class="btn btn-primary">View All Products<i class="ti ti-external-link icon icon-right"></i></a>
						</div>
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
			new Swiper(".advt_banner", {
				loop: true,
				centeredSlides: true,
				spaceBetweenSlides: 0,
				effect: 'fade',
				fadeEffect: {
					crossFade: true
				},
				autoplay: {
					duration: 3000
				}
			}),
			new Swiper(".recommendBlogs", {
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
			})
		];
	</script>
</body>

</html>
