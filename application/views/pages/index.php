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
		<section id="searchWidget"></section>
		<section id="cta">
			<div class="container">
				<div class="row m-0">
					<div class="col-lg-6 col-12">
						<div class="row m-0">
							<div class="col-md-6 col-12 mb-3">
								<a href="#" class="card h-100 card-blue-bordered-subtle-bg">
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
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="card">
							<div class="card-body"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="exploreBlogs">
			<div class="container">
				<div class="section-title">
					<h2>Explore Our Blogs</h2>
				</div>
				<div class="swiper recommendBlogs">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="card">
								<div class="card-body">
									<h4>Lorem, ipsum.</h4>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card">
								<div class="card-body">
									<h4>Lorem, ipsum.</h4>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card">
								<div class="card-body">
									<h4>Lorem, ipsum.</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
