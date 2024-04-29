<?= form_open(base_url('api/appointment/new'), ['id' => 'appointmentForm', 'class' => "form-wrap3 mb-30", 'data-bg-color' => "#f3f6f7"]) ?>
<input type="hidden" name="source_url" value="<?= current_url() ?>">
<input type="hidden" name="page_name" value="<?= $page['title'] ?>">
<div class="form-title">
	<h3 class="mt-n2 fls-n2 mb-0">Send Us a Message</h3>
	<p class="text-theme mb-4">Your email address will not be published*</p>
</div>
<div class="row">
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
	<div class="col-12 form-group">
		<textarea name="enq_message" id="message" cols="30" rows="3" class="form-control style3" placeholder="Message"></textarea> <i class="fal fa-pencil-alt"></i>
	</div>
</div>

<input type="hidden" name="token">

<div class="form-btn pt-15"><button class="vs-btn style2" name="form_submit">Send Message<i class="fas fa-chevron-right"></i></button></div>
<p class="form-messages mb-0 mt-3"></p>
<?= form_close() ?>
<script>
	$('#appointmentForm').validate({
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
			enq_email: {
				// remote: "You have already put up an enquiry! Your email is already in our list.",
			},
			enq_contact: {
				minlength: "Please include 4-digit Country code. E.g. for India it is 091",
				// remote: "You have already put up an enquiry! Your contact number is already in our list.",
			}
		}
	})
</script>
