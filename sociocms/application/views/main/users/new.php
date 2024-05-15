<div class="page-content">
	<form action="" method="post">
		<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
			<div class="d-flex gap-2">
				<div class="nav-item">
					<a href="<?= base_url("users-management") ?>" class="nav-link"><i class="link-arrow" data-feather="chevron-left"></i></a>
				</div>
				<div>
					<h4 class="mb-3 mb-md-0">Add New User</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-12">
				<div class="card">
					<div class="card-body">
						<div class="row align-items-end">
							<div class="col-md-6 col-12">
								<div class="mb-3">
									<label class="form-label" for="inputUserFullName">Username (required)</label>
									<input type="text" class="form-control" id="inputUserFullName">
								</div>
							</div>
							<div class="col-md-6 col-12">
								<div class="mb-3">
									<label class="form-label" for="inputUserFullName">Password (required)</label>
									<input type="text" class="form-control" id="inputUserFullName">
								</div>
							</div>
							<div class="col-md-6 col-12">
								<div class="mb-3">
									<label class="form-label" for="inputUserFullName">First Name</label>
									<input type="text" class="form-control" id="inputUserFullName">
								</div>
							</div>
							<div class="col-md-6 col-12">
								<div class="mb-3">
									<label class="form-label" for="inputUserFullName">Last Name</label>
									<input type="text" class="form-control" id="inputUserFullName">
								</div>
							</div>
							<div class="col-12">
								<div class="mb-3">
									<label class="form-label" for="inputUserFullName">Email (required)</label>
									<input type="text" class="form-control" id="inputUserFullName">
								</div>
							</div>
							<div class="col-12">
								<div class="mb-3">
									<label class="form-label" for="inputUserFullName">Website</label>
									<input type="text" class="form-control" id="inputUserFullName">
								</div>
							</div>
							<div class="col-md-6 col-12">
								<div class="mb-3">
									<label class="form-label" for="inputUserFullName">Role</label>
									<select class="form-control" name="" id="selectRole">
										<option value="">Select Role</option>
										<?php for ($i = 0; $i < 5; $i++) : ?>
											<option value="">Select <?= $i ?></option>
										<?php endfor ?>
									</select>
									<script>
										$("#selectRole").select2({
											theme: "bootstrap-5"
										});
									</script>
								</div>
							</div>
							<div class="col-md-6 col-12">
								<div class="mb-3">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
										<label class="form-check-label" for="flexCheckChecked">
											Send the new user an email about their account
										</label>
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="">
									<button type="submit" class="btn me-2 btn-primary btn-icon-text"><i class="link-arrow btn-icon-prepend" data-feather="save"></i>Save User Details</button>
									<button type="reset" class="btn btn-outline-secondary">Discard</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
