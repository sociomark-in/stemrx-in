<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper ">
	<div class="parallax" data-parallax-image="<?= base_url(); ?>assets/img/breadcurmb/breadcurmb-1-1.jpg"></div>
	<div class="container z-index-common">
		<div class="breadcumb-content">
			<h1 class="breadcumb-title">Blogs</h1>
			<div class="breadcumb-menu-wrap">
				<i class="far fa-home-lg"></i>
				<ul class="breadcumb-menu">
					<li><a href="<?= base_url(); ?>">Home</a></li>
					<li class="active">Blogs</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--==============================
        Blog Area
    ==============================-->
<section class="vs-blog-wrapper space-top space-md-bottom">
	<div class="container">
		<div class="row flex-row-reverse">
			<div class="col-lg-4">
				<aside class="sidebar-area">
					<div class="row">
						<div class="col-12 d-none">
							<div class="widget widget_search">
								<form class="search-form">
									<input type="text" placeholder="Search Here">
									<button type="submit"><i class="far fa-search"></i></button>
								</form>
							</div>
						</div>
						<div class="col-lg-12 col-md-6 col-12">
							<div class="widget widget_categories   ">
								<h3 class="widget_title">Categories</h3>
								<ul>
									<li>
										<a href="#">General</a>
										<span>1</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-12 col-md-6 col-12 d-none">
							<div class="widget widget_tag_cloud   ">
								<h3 class="widget_title">Popular Tags</h3>
								<div class="tagcloud">
									<a href="#">Surgery</a>
									<a href="#">Body</a>
									<a href="#">Heart</a>
									<a href="#">Child Care</a>
									<a href="#">Services</a>
									<a href="#">Mental Health</a>
									<a href="#">Urgent Care</a>
								</div>
							</div>
						</div>
						<div class="col-12 d-none">
							<div class="widget  ">
								<h3 class="widget_title">Recent Posts</h3>
								<div class="recent-post-wrap">
									<div class="thumb-post">
										<div class="media-img">
											<a href="#"><img src="https://placehold.co/90x80" alt="Blog Image"></a>
										</div>
										<div class="media-body ">
											<h4 class="post-title"><a href="#">Extend market the driven results</a></h4>
											<a class="post-date" href="#"><i class="fal fa-calendar-alt"></i>Mar 21, 2023</a>
										</div>
									</div>

									<div class="thumb-post">
										<div class="media-img">
											<a href="#"><img src="https://placehold.co/90x80" alt="Blog Image"></a>
										</div>
										<div class="media-body ">
											<h4 class="post-title"><a href="#">The purpose lorem ipsum distract </a></h4>
											<a class="post-date" href="#"><i class="fal fa-calendar-alt"></i>Mar 21, 2023</a>
										</div>
									</div>

									<div class="thumb-post">
										<div class="media-img">
											<a href="#"><img src="https://placehold.co/90x80" alt="Blog Image"></a>
										</div>
										<div class="media-body ">
											<h4 class="post-title"><a href="#">Until recently, the prevailing view</a></h4>
											<a class="post-date" href="#"><i class="fal fa-calendar-alt"></i>Mar 21, 2023</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</aside>
			</div>
			<div class="col-lg-8">
				<div class="vs-blog blog-single">
					<div class="blog-img">
						<a href="<?= base_url('blog/stem-cell-therapy-in-india-types-and-benefits') ?>"><picture>
							<source media="(min-width: 800px)" srcset="<?= base_url("uploads/") ?>1714645340_4418183677.webp" type="image/webp">
							<source media="(min-width: 800px)" srcset="<?= base_url("uploads/") ?>1714645340_4418183677.jpg" type="image/jpg">
							<source srcset="<?= base_url("uploads/") ?>1714645340_4418183677.jpg" type="image/webp">
							<img src="<?= base_url("uploads/") ?>1714645340_4418183677.jpg" alt="Service Image" class="w-100">
						</picture></a>
					</div>
					<div class="blog-content">
						<h2 class="blog-title h3"><a href="<?= base_url('blog/stem-cell-therapy-in-india-types-and-benefits') ?>">Stem Cell Therapy In India: Types & Benefits</a></h2>
						<p>In recent years, medical science has witnessed groundbreaking advancements, and one of the most promising frontiers is stem cell therapy. Stem cell therapy in India has emerged as a beacon of hope for countless individuals grappling with various health conditions.</p>
						<a href="<?= base_url('blog/stem-cell-therapy-in-india-types-and-benefits') ?>" class="link-btn">Read More<i class="fal fa-long-arrow-right"></i></a>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
