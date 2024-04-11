<?= form_open(base_url('api/contact/new'), ['id' => 'appointmentForm', 'class' => "form-wrap3 mb-30", 'data-bg-color' => "#f3f6f7"]) ?>
<input type="hidden" name="source_url" value="<?= current_url() ?>">
<div class="form-title">
	<h3 class="mt-n2 fls-n2 mb-0">Send Us a Message</h3>
	<p class="text-theme mb-4">Your email address will not be published*</p>
</div>
<div class="form-group mb-15"><input type="text" class="form-control style3" name="name" id="name" placeholder="Name"> <i class="fal fa-user"></i></div>
<div class="form-group mb-15"><input type="text" class="form-control style3" name="email" id="email" placeholder="E-mail"> <i class="fal fa-envelope"></i></div>
<div class="form-group mb-15"><textarea name="message" id="message" cols="30" rows="3" class="form-control style3" placeholder="Message"></textarea> <i class="fal fa-pencil-alt"></i></div>

<input type="hidden" name="token">

<div class="form-btn pt-15"><button class="vs-btn style2">Send Message<i class="fas fa-chevron-right"></i></button></div>
<p class="form-messages mb-0 mt-3"></p>
<?= form_close() ?>
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
