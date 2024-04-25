<?= form_open(base_url('api/appointment/new'), ["id" => "floatingForm", "class" => "form-wrap1 " .  $props['class'] ??= "", "data-bg-color" => $props['bg-color'] ??= ""]) ?>
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
		<input type="hidden" name="page_name" value="<?= $page['title'] ?>">
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
		<input type="hidden" name="token">
		<div class="col-xl-12 text-center">
			<button type="submit" class="vs-btn style2" name="form_submit">
				Make Appointment<i class="far fa-calendar-alt"></i>
			</button>
		</div>
	</div>
</div>
<?= form_close() ?>
<script>
	$('#floatingForm').validate({
		rules: {
			// enq_email: {
			// 	normalizer: (value)=> {
			// 		return $.trim(value)
			// 	},
			// 	remote: {
			// 		url: '<?= base_url('api/leads/check-duplicate') ?>',
			// 		data: {
			// 			column: 'email',
			// 		}
			// 	}
			// },
			// enq_contact: {
			// 	remote: {
			// 		url: '<?= base_url('api/leads/check-duplicate') ?>',
			// 		data: {
			// 			column: 'contact',
			// 		}
			// 	}
			// }
		},
		messages: {
			// enq_email: {
			// 	required: 'Required',
			// 	remote: "You have already put up an enquiry! Your email is already in our list.",
			// },
			enq_contact: {
				minlength: "Please include 4-digit Country code. E.g. for India it is 091",
				// remote: "You have already put up an enquiry! Your contact number is already in our list.",
			}
		}
	})
</script>
