<section class="booking_button-wrapper p-3">
	<!-- <div class="mb-3 d-block d-md-none">
		<button type="button" class="btn booking_button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-trigger="hover" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">
			<i class="fa fa-calendar"></i>
		</button>
	</div> -->
	<div class="mb-3">
		<button type="button" class="btn vs-btn booking_button style3 style3-sm hover-white" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-trigger="hover" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">
			<i class="fa fa-calendar"></i>&nbsp;&nbsp;Book Appointment
		</button>
	</div>
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
						'desc' => "",
					],
					"props" => [
						'class' => "shadow-none mb-0",
						'bg-image' => "",
						'bg-color' => "#f3f6f7",
					],
					"fields" => NULL
				];
				$this->load->view('common/forms/floating_form', $data); ?>
			</div>
		</div>
	</div>
</div>
<style>
	.modal {
		z-index: 999;
	}
</style>
