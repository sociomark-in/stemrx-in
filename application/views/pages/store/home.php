<main>
	<div class="breadcumb-wrapper">
		<div class="parallax" data-parallax-image="<?= base_url() ?>assets/img/breadcurmb/breadcurmb-1-1.jpg"></div>
		<div class="container z-index-common">
			<div class="breadcumb-content">
				<h1 class="breadcumb-title">Our Store</h1>
				<div class="breadcumb-menu-wrap"><i class="far fa-home-lg"></i>
					<ul class="breadcumb-menu">
						<li><a href="<?= base_url() ?>">Home</a></li>
						<li class="active">Our Store</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<section class="vs-product-wrapper space-top space-md-bottom">
		<div class="container">
			<div class="vs-sort-bar mb-40">
				<div class="row text-center text-md-start justify-content-between align-items-center">
					<div class="col-md-auto">
						<div class="nav d-block" role="tablist"><a href="#" class="icon-btn style3" id="tab-shop-grid" data-bs-toggle="tab" data-bs-target="#tab-grid" role="tab" aria-controls="tab-grid" aria-selected="false"><i class="fas fa-th"></i></a> <a href="#" class="icon-btn style3 active" id="tab-shop-list" data-bs-toggle="tab" data-bs-target="#tab-list" role="tab" aria-controls="tab-grid" aria-selected="true"><i class="fas fa-list"></i></a></div>
					</div>
					<div class="col-md-auto">
						<div class="row">
							<div class="col-md-auto mt-3 mt-md-0 d-flex align-items-center justify-content-center"><label for="filterby">Filter By</label> <select class="form-select style2" name="filterby" id="filterby">
									<option>$0 - $200</option>
									<option>$200 - $300</option>
									<option>$300 - $400</option>
									<option>$400 - $600</option>
									<option>$600 - $800</option>
								</select></div>
							<div class="col-md-auto mt-3 mt-md-0 d-flex align-items-center justify-content-center"><label for="sortby">Sort by</label> <select class="form-select style2" name="sortby" id="sortby">
									<option>Date Listing</option>
									<option>Week Listing</option>
									<option>Day Listing</option>
									<option>Month Listing</option>
									<option>Year Listing</option>
								</select></div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade" id="tab-grid" role="tabpanel" aria-labelledby="tab-shop-grid">
					<div class="shop-grid-area">
						<div class="row">
							<?php for ($i = 0; $i < 12; $i++) : ?>
								<div class="col-md-6 col-lg-4 col-xl-3 mb-30">
									<div class="vs-product-box product-grid">
										<div class="product-img"><img src="<?= base_url() ?>assets/img/logo.png" class="w-100" alt="Product Image">
											<div class="actions-btn">
												<!-- <a class="icon-btn" href="#"><i class="fal fa-heart"></i></a>  -->
												<a class="icon-btn" href="#"><i class="fal fa-shopping-cart"></i></a>
												<a class="icon-btn" href="<?= base_url() ?>product/product-<?= $i?>-details"><i class="far fa-eye"></i></a>
											</div>
										</div>
										<div class="product-content">
											<div class="rating-wrap">
												<div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
											</div>
											<h4 class="product-title h5"><a href="<?= base_url() ?>product/product-<?= $i?>-details">Ibuprofen</a></h4><span class="price">$99.00</span>
										</div>
									</div>
								</div>
							<?php endfor ?>
						</div>
					</div>
				</div>
				<div class="tab-pane fade show active" id="tab-list" role="tabpanel" aria-labelledby="tab-shop-list">
					<div class="shop-list-area">
						<div class="row">
							<?php for ($i = 0; $i < 12; $i++) : ?>
								<div class="col-md-6 col-lg-6 col-xl-4 mb-30">
									<div class="vs-product-box product-list">
										<div class="product-img"><img src="<?= base_url() ?>assets/img/logo.png" class="w-100" alt="Product Image">
											<div class="actions-btn">
												<!-- <a class="icon-btn" href="#"><i class="fal fa-heart"></i></a>  -->
												<a class="icon-btn" href="#"><i class="fal fa-shopping-cart"></i></a>
												<a class="icon-btn" href="<?= base_url() ?>product/product-<?= $i?>-details"><i class="far fa-eye"></i></a>
											</div>
										</div>
										<div class="product-content">
											<div class="rating-wrap">
												<div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
											</div>
											<h4 class="product-title h5"><a href="<?= base_url() ?>product/product-<?= $i?>-details">Ibuprofen</a></h4><span class="price">$99.00</span>
										</div>
									</div>
								</div>
							<?php endfor ?>
						</div>
					</div>
				</div>
			</div>
			<div class="vs-pagination mb-30">
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
