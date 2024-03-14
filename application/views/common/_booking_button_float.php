<section class="booking_button-wrapper">
	<button type="button" class="btn booking_button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-trigger="hover" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">
		<i class="fa fa-calendar"></i>
	</button>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<?php
				$data = [
					"action" => [
						"method" => "POST",
						"action" => base_url()
					],
					"title" => [
						'bg-image' => "",
						'heading' => "Book An Appointment",
						'desc' => "Please Call Us To Ensure",
					],
					"props" => [
						'class' => "shadow-none mb-0",
						'bg-image' => "",
						'bg-color' => "#f3f6f7",
					],
					"fields" => [
						"condition" => "disabled",
						"doctor" => "enabled",
					]
				];
				$this->load->view('common/forms/appointment_form', $data); ?>
			</div>
		</div>
	</div>
</div>
<style>
	.modal {
		z-index: 999;
	}
</style>
