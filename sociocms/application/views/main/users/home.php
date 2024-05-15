<div class="page-content">

	<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
		<div>
			<h4 class="mb-3 mb-md-0">Users Management</h4>
		</div>
		<div class="d-flex align-items-center flex-wrap text-nowrap">
			<a class="btn btn-primary btn-icon-text mb-2 mb-md-0" href="<?= base_url('users-management/new') ?>">
				<i class="icon-lg pb-3px" data-feather="plus"></i>
				Create New User
			</a>
		</div>
	</div>
	
	<div class="row">
		<div class="col-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<div class="d-flex justify-content-between align-items-baseline mb-2">
						<h6 class="card-title mb-0">All Users</h6>
						<div class="dropdown mb-2">
							<a type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
								<a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
							</div>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table table-hover mb-0" id="leadsDataTable">
							<thead>
								<tr>
									<th class="pt-0">#</th>
									<th class="pt-0">Username</th>
									<th class="pt-0">Name</th>
									<th class="pt-0">Role</th>
									<th class="pt-0">Contact Details</th>
									<th class="pt-0">Date</th>
									<th class="pt-0">Status</th>
								</tr>
							</thead>
							<tbody>
								<?php
								for ($i = 1; $i < 20; $i++) : ?>
									<tr>
										<td><?= $i++ ?></td>
										<td>
											<div class="row justify-content-between align-items-center">
												<div class="col-auto">
													<img class="img-xs rounded-circle" src="https://ui-avatars.com/api/?background=a0a0a0&amp;bold=true&amp;name=Sociomark+Admin" alt="">
												</div>
												<div class="col">
													<div class="">
														<a href="">admin</a>
													</div>
													<div class="">
														<a href="">Edit Profile</a>
													</div>
												</div>
											</div>
										</td>
										<td>Sociomark IT Company</td>
										<td>admin</td>
										<td>
											<div class="row">
												<div class="col-lg-auto">
													<div class="">
														<strong>Email:</strong><br>
														<a href="">info@sociocms.com</a>
													</div>
												</div>
												<div class="col-lg-auto">
													<div class="">
														<strong>Contact:</strong><br>
														<a href="">+091 888 888 8888</a>
													</div>
												</div>
											</div>
										</td>
										<td><?= date('Y-m-d h:i:s A') ?></td>
										<td><span class="badge bg-success">active</span></td>
									</tr>
								<?php endfor ?>
							</tbody>
						</table>
						<script>
							new DataTable('#leadsDataTable');
						</script>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- row -->

</div>
