<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper ">
	<div class="parallax" data-parallax-image="assets/img/breadcurmb/breadcurmb-1-1.jpg"></div>
	<div class="container z-index-common">
		<div class="breadcumb-content">
			<h1 class="breadcumb-title">News</h1>
			<div class="breadcumb-menu-wrap">
				<i class="far fa-home-lg"></i>
				<ul class="breadcumb-menu">
					<li><a href="<?php echo base_url(); ?>">Home</a></li>
					<li class="active">News</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--==============================
        News Area
    ==============================-->
<section class="vs-blog-wrapper space-top space-md-bottom">
	<div class="container">
		<div class="row">
			<?php for ($i = 0; $i < 5; $i++) : ?>
				<div class="col-lg-4">
					<div class="vs-blog blog-single">
						<div class="blog-img">
							<a href="#"><img src="assets/img/blog/blog-s-1-1.jpg" alt="Blog Image"></a>
						</div>
					</div>
					<div class="vs-blog blog-single d-none">
						<div class="blog-img vs-carousel" data-fade="true" data-arrows="true" data-slide-show="1" data-next-arrow="far fa-arrow-right" data-prev-arrow="far fa-arrow-left">
							<a href="#"><img src="assets/img/blog/blog-s-1-2.jpg" alt="Blog Image"></a>
						</div>
						<div class="blog-content">
							<h2 class="blog-title h3"><a href="#">Latin derived from Cicero's 1st-century BC text De Finibus Bonorum et Malorum</a></h2>
							<p>Conveniently whiteboard team building architectures without sticky partnerships. Energistically redefine emerging paradigms after resource sucking bandwidth. Dramatically supply transparent expertise whereas market-driven testingtodo procedures. Professionally visualize client-centric services via inexpensive models.</p>
							<a href="#" class="link-btn">Read More<i class="fal fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="blog-content">
						<h2 class="blog-title h3"><a href="#">Efficiently monetize models transparent sources redefine distributed innovation</a></h2>
						<p>Conveniently whiteboard team building architectures without sticky partnerships. Energistically redefine emerging paradigms after resource sucking bandwidth. Dramatically supply transparent expertise whereas market-driven testingtodo procedures. Professionally visualize client-centric services via inexpensive models.</p>
						<a href="#" class="link-btn">Read More<i class="fal fa-long-arrow-right"></i></a>
					</div>

				</div>
			<?php endfor ?>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="vs-pagination pb-30">
					<ul>
						<li><a href="#" class="active">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#"><i class="fas fa-angle-right"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>