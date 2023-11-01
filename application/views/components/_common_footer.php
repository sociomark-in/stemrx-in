<section>
	<div class="container">
		<div class="row m-0">
			<div class="col-xxl-4 col-xl-5 col-lg-6 col-12">
				<div class="heading mb-3">
					<h3>Ask Us Your Queries...</h3>
				</div>
				<div class="card">
					<img src="<?= base_url("assets/media/images/") ?>blog-thumb-01.png" alt="Blog Image" height="120">
					<div class="card-body">
						<form action="<?= base_url("s") ?>" method="get">
							<input type="search" name="q" id="" placeholder="Type in your query..." class="form-control" />
							<input type="hidden" name="type" value="FAQ" />
						</form>
					</div>
				</div>
			</div>
			<div class="col-xxl-8 col-xl-7 col-lg-6 col-12">
				<div class="">
					<div class="row m-0">
						<div class="col-lg-4 col-md-6 col-12">
							<div class="list-group list-group-flush">
								<strong class="list-group-item list-group-item-heading">Treatments</strong>
								<a href="" class="list-group-item list-group-item-action">Hair Fall (Trichology) Treatments</a>
								<a href="" class="list-group-item list-group-item-action">Other Treatments</a>
								<a href="" class="list-group-item list-group-item-action">Other Treatments</a>
								<a href="" class="list-group-item list-group-item-action">Other Treatments</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="list-group list-group-flush">
								<strong class="list-group-item list-group-item-heading">Specialities</strong>
								<a href="" class="list-group-item list-group-item-action">Other Specialities</a>
								<a href="" class="list-group-item list-group-item-action">Other Specialities</a>
								<a href="" class="list-group-item list-group-item-action">Other Specialities</a>
								<a href="" class="list-group-item list-group-item-action">Other Specialities</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="list-group list-group-flush">
								<strong class="list-group-item list-group-item-heading">Address</strong>
								<a href="" class="list-group-item list-group-item-action">
									Dr. Mahajan’s Hospital & ITC R-831, <br>
									Thane – Belapur Rd, <br>
									Next to Shell Petrol Pump, <br>
									TTC Industrial Area, Rabale, <br>
									Navi Mumbai, Maharashtra 400708.
								</a>
								<strong class="list-group-item list-group-item-heading">Contact</strong>
								<div class="list-group-item list-group-item-action p-0">
									<ul class="nav flex-row">
										<li class="nav-item"><a href="" class="nav-link text-black"><i class="fa-brands fa-facebook-f"></i></a></li>
										<li class="nav-item"><a href="" class="nav-link text-black"><i class="fa-brands fa-linkedin-in"></i></a></li>
										<li class="nav-item"><a href="" class="nav-link text-black"><i class="fa-brands fa-youtube"></i></a></li>
										<li class="nav-item"><a href="" class="nav-link text-black"><i class="fa-brands fa-x-twitter"></i></a></li>
									</ul>
								</div>
								<a href="" class="list-group-item list-group-item-action">Other Specialities</a>
								<a href="" class="list-group-item list-group-item-action">Other Specialities</a>
							</div>
						</div>
					</div>
				</div>
				<div class="d-none">
					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Links List #1
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<div class="row m-0">
										<div class="col-md-6 col-12">
											<div class="list-group list-group-flush">
												<strong class="list-group-item list-group-item-heading">Category</strong>
												<a href="" class="disabled list-group-item list-group-item-action">Other Specialities</a>
												<a href="" class="disabled list-group-item list-group-item-action">Other Specialities</a>
												<a href="" class="disabled list-group-item list-group-item-action">Other Specialities</a>
												<a href="" class="disabled list-group-item list-group-item-action">Other Specialities</a>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="list-group list-group-flush">
												<strong class="list-group-item list-group-item-heading">Category</strong>
												<a href="" class="disabled list-group-item list-group-item-action">Other Specialities</a>
												<a href="" class="disabled list-group-item list-group-item-action">Other Specialities</a>
												<a href="" class="disabled list-group-item list-group-item-action">Other Specialities</a>
												<a href="" class="disabled list-group-item list-group-item-action">Other Specialities</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php for ($i = 2; $i <= 5; $i++) : ?>
							<div class="accordion-item">
								<h2 class="accordion-header" id="heading<?= $i ?>">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $i ?>" aria-expanded="false" aria-controls="collapse<?= $i ?>">
										Links List #<?= $i ?>
									</button>
								</h2>
								<div id="collapse<?= $i ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $i ?>" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<div class="row m-0">
											<div class="col-md-6 col-12">
												<div class="list-group list-group-flush">
													<strong class="list-group-item list-group-item-heading">Category</strong>
													<a href="" class="disabled list-group-item list-group-item-action">Other Specialities</a>
													<a href="" class="disabled list-group-item list-group-item-action">Other Specialities</a>
													<a href="" class="disabled list-group-item list-group-item-action">Other Specialities</a>
													<a href="" class="disabled list-group-item list-group-item-action">Other Specialities</a>
												</div>
											</div>
											<div class="col-md-6 col-12">
												<div class="list-group list-group-flush">
													<strong class="list-group-item list-group-item-heading">Category</strong>
													<a href="" class="disabled list-group-item list-group-item-action">Other Specialities</a>
													<a href="" class="disabled list-group-item list-group-item-action">Other Specialities</a>
													<a href="" class="disabled list-group-item list-group-item-action">Other Specialities</a>
													<a href="" class="disabled list-group-item list-group-item-action">Other Specialities</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endfor ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="py-3 bg-dark text-white">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<?= date('Y') ?> &copy;<a href="<?= base_url() ?>"><?= APP_NAME ?></a>.
			</div>
			<div class="col-sm-6">
				<div class="text-sm-end d-none d-sm-block">
					Designed &amp; Developed by <a href="https://sociomark.in/?utm_source=<?= APP_LINK ?>&amp;utm_medium=website_traffic&amp;utm_campaign=direct_footer_click" target="_blank" class="link">Sociomark</a>
				</div>
			</div>
		</div>
	</div>
</div>
