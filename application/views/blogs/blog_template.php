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
					<div class="hero__title text-white">
						<h1 class="">Quality – Be assured</h1>
						<p><strong>Author Name</strong> - Posted on <?= date("F j , Y") ?></p>
					</div>
				</div>
			</section>
		</article>
		<section id="descBrief">
			<div class="container">
				<div class="blog__content">
					<h3>Quality – Be assured</h3>
					<p>
						Quality provides the highest level objective for our system’s function. Quality products make an important contribution to long-term sustainability. At StemRx, we have formulated these supplements considering the functional science of the ingredients which have been tested clinically and proven for its efficiency. At StemRx, quality is the degree of excellence. We make sure that the quality of the product is neither adulterated nor manipulated and thereby we gain the highest trust value from our customers.
					</p>
					<p>
						Our selected ingredients have pure value in terms of nutrition they provide and the selection criterion is backed by a certificate of analysis of each ingredient. Our products are reliable for the efficacy of the result. They are safe and manufactured with the right process going through strict and stringent quality checks. Our products have authentic GS1 barcode systems which add to the authenticity of the product.
					</p>
				</div>
			</div>
		</section>
		<section id="relatedContent">
			<div class="container">
				<div class="section-title">
					<h2>Related Blogs</h2>
				</div>
				<div class="swiper relatedTreatments">
					<div class="swiper-wrapper">
						<?php for ($i = 0; $i < 4; $i++) : ?>
							<div class="swiper-slide">
								<a href="<?= base_url('blog-single') ?>" class="">
									<div class="bg-white row m-0 g-0">
										<div class="col-auto">
											<img src="<?= base_url("assets/media/images/") ?>blog-thumb-01.png" alt="Blog Image" width="100">
										</div>
										<div class="col p-3">
											<p>
												<strong>Blog Title</strong> <br>
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
