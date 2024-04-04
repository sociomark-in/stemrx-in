<form id="appointmentForm" action="<?= base_url('api/appointment/new') ?>" method="post" class="form-wrap1 <?= $props['class'] ??= "" ?>" data-bg-color="<?= $props['bg-color'] ??= "" ?>">
	<div class="form-title-box bg-title" data-bg-src="<?= $props['bg-image'] ??= "" ?>">
		<div class="row justify-content-between align-items-center">
			<div class="col">
				<h2 class="h4 mb-2 text-white"><?= $title['heading'] ??= "" ?></h2>
				<p class="mb-0 text-white-light">
					<?php //$title['desc'] ??= "" 
					?>
				</p>
			</div>
			<!-- <div class="col-auto d-none d-sm-block">
				<a href="tel:919979976862" class="ripple-icon style2"><i class="fas fa-phone-alt"></i></a>
			</div> -->
		</div>
	</div>
	<div class="form-box">
		<div class="row">
			<input type="hidden" name="source_url" value="<?= current_url() ?>">
			<div class="col-12 form-group">
				<input type="text" class="form-control style3" name="enq_name" placeholder="Your Name" required />
				<i class="fal small fa-user"></i>
			</div>
			<div class="col-12 form-group">
				<input type="email" class="form-control style3" name="enq_email" placeholder="Email Address" required />
				<i class="fal small fa-envelope"></i>
			</div>
			<div class="col-12 form-group">
				<input type="number" class="form-control style3" name="enq_contact" placeholder="Your Phone" pattern="^\d{10}" maxlength="10" minlength="10" required />
				<i class="fal small fa-phone"></i>
			</div>
			<!-- <div class="col-lg-6 form-group">
					<input type="text" class="dateTime-pick form-control style3" placeholder="Select Date & Time" />
					<i class="fal small fa-calendar-alt"></i>
				</div> -->
			<div class="col-xl-12 text-center">
				<button type="submit" class="vs-btn style2">
					Make Appointment<i class="far fa-calendar-alt"></i>
				</button>
			</div>
		</div>
	</div>
</form>
<script>
	$('#appointmentForm').validate({
		rules: {
			enq_email: 'required'
		},
		messages: {
			subscription_email: 'Email is Required!'
		}
	})
</script>
