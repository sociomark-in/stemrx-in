<header>
	<nav class="navbar navbar-expand-md bordered bordered-bottom p-md-0">
		<div class="container ">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSubNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-between" id="navbarSubNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link px-3 text-white bg-danger" href="#"><i class="ti ti-search me-2"></i>Find a Doctor</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" aria-disabled="true">Disabled</a>
					</li>
				</ul>
				<ul class="navbar-nav align-items-center">

					<!-- <li class="nav-item">
						<a class="nav-link" href="#"><i class="ti ti-search"></i></a>
					</li> -->
					<!-- <li class="nav-item">
						<a class="nav-link" href="#"><i class="ti ti-world icon icon-left"></i>Language</a>
					</li> -->
					<li class="nav-item">
						<a class="nav-link" href="#"><i class="ti ti-map-pin icon icon-left"></i>Location</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-3 text-white bg-blue" href="#"><i class="ti ti-shopping-bag me-2"></i>Shop</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="main-nav">
		<nav class="navbar navbar-expand-md">
			<div class="container">
				<a class="navbar-brand" href="<?= base_url() ?>">
					<img src="<?= base_url("assets/media/") ?>images/stemrx-og-website-logo.png" alt="" height="45">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
					<ul class="navbar-nav align-items-md-center">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item dropdown dropdown-hover position-static">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Specialities
							</a>
							<!-- Dropdown menu -->
							<div class="dropdown-menu w-100 mt-0" aria-labelledby="navbarDropdown" style="border-top-left-radius: 0;
									border-top-right-radius: 0;
								  ">

								<div class="container">
									<div class="row my-4">
										<div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
											<div class="list-group list-group-flush">
												<strong class="list-group-item list-group-item-heading">Specialities</strong>
												<a href="<?= base_url("specialities/hair-fall") ?>" class="list-group-item list-group-item-action">Hair Fall</a>
												<a href="<?= base_url("specialities/hair-fall") ?>" class="list-group-item list-group-item-action">Infertility</a>
												<a href="<?= base_url("specialities/hair-fall") ?>" class="list-group-item list-group-item-action">Cosmetics Gynecology</a>
												<!-- <a href="" class="disabled list-group-item list-group-item-action">Other Specialities</a> -->
											</div>
										</div>
										<div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
											<div class="list-group list-group-flush">
												<strong class="list-group-item list-group-item-heading">Treatments</strong>
												<a href="" class="disabled list-group-item list-group-item-action">Other Specialities</a>
												<a href="" class="disabled list-group-item list-group-item-action">Other Specialities</a>
												<a href="" class="disabled list-group-item list-group-item-action">Other Specialities</a>
												<a href="" class="disabled list-group-item list-group-item-action">Other Specialities</a>
												<a href="" class="disabled list-group-item list-group-item-action">Other Specialities</a>
											</div>
										</div>
										<div class="col-md-6 col-lg-3 mb-3 mb-md-0">
											<div class="list-group list-group-flush">
												<strong class="list-group-item list-group-item-heading">Conditions</strong>
												<a href="" class="disabled list-group-item list-group-item-action">Category Item</a>
												<a href="" class="disabled list-group-item list-group-item-action">Category Item</a>
												<a href="" class="disabled list-group-item list-group-item-action">Category Item</a>
												<a href="" class="disabled list-group-item list-group-item-action">Category Item</a>
											</div>
										</div>
										<div class="col-md-6 col-lg-3">
											<div class="list-group list-group-flush">
												<strong class="list-group-item list-group-item-heading">Therapies</strong>
												<a href="" class="disabled list-group-item list-group-item-action">Other Specialities</a>
												<a href="" class="disabled list-group-item list-group-item-action">Other Specialities</a>
												<a href="" class="disabled list-group-item list-group-item-action">Other Specialities</a>
												<a href="" class="disabled list-group-item list-group-item-action">Other Specialities</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Media Center</a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link disabled" aria-disabled="true">Disabled</a>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" aria-disabled="true">Disabled</a>
						</li> -->
						<li class="nav-item">
							<a class="btn btn-primary" href="#">Call Us Now</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>
<nav class="navbar navbar-expand-md bg-light navbar-bottom-fixed">
	<div class="container justify-content-center" id="navbarSubNav">
		<ul class="navbar-nav gap-3">
			<li class="nav-item">
				<button class="nav-link" data-bs-toggle="modal" data-bs-target="#callbackModal"><i class="ti ti-phone me-2"></i><span class="d-none d-md-inline">Request a Callback</span></button>
			</li>
			<li class="nav-item">
				<a class="btn btn-primary" href="#"><i class="ti ti-calendar-event me-2"></i><span class="d-none d-md-inline">Book Appointment</span></a>
			</li>
			<li class="nav-item">
				<button class="nav-link" data-bs-toggle="modal" data-bs-target="#callbackModal"><i class="ti ti-stethoscope me-2"></i><span class="d-none d-md-inline">Get health Checkup</span></button>
			</li>
		</ul>
	</div>
</nav>

<!-- Modal -->
<div class="modal fade" id="callbackModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="callbackModalLabel">C</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Understood</button>
			</div>
		</div>
	</div>
</div>
