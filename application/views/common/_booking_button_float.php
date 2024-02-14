<section class="booking_button-wrapper">
	<button type="button" class="btn booking_button" data-bs-toggle="modal" data-bs-target="#exampleModal">
		<i class="fa fa-calendar"></i>
	</button>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<form action="#" class="form-wrap1 bg-white">
					<div class="form-title-box bg-title">
						<div class="row justify-content-between align-items-center">
							<div class="col-auto">
								<h2 class="h4 mb-1 text-white">Book An Appointment</h2>
								<p class="mb-0 text-white-light">Please Call Us To Ensure</p>
							</div>
						</div>
					</div>
					<div class="form-box">
						<div class="row">
							<div class="col-xl-6 form-group">
								<select class="form-select style2">
									<option hidden="" disabled="disabled" selected="selected">Select Condition</option>
									<option>Neural</option>
									<option>Developmental Clinic</option>
									<option>New Hope Clinic</option>
									<option>Couple Clinic (New Hope)</option>
									<option>Pain Clinic</option>
									<option>Eye Clinic</option>
									<option>Metabolic Diseases</option>
									<option>Cosmetic</option>
									<option>Dental Treatment</option>
									<option>Regenerative Clinic</option>
									<option>Dermatology</option>
									<option>Chromosomal Disorders</option>
									<option>Surgical Procedure</option>
								</select>
							</div>
							<div class="col-xl-6 form-group"><select class="form-select style2">
									<option hidden="" disabled="disabled" selected="selected">Choose Doctor</option>
									<option>Aerospace Medicine</option>
									<option>Bariatric Surgery</option>
									<option>Infectious Diseases</option>
									<option>Laboratory Medicine</option>
								</select></div>
							<div class="col-xl-6 form-group"><input type="text" class="form-control style2" placeholder="Your Name"> <i class="fal small fa-user"></i></div>
							<div class="col-xl-6 form-group"><input type="email" class="form-control style2" placeholder="Email Address"> <i class="fal small fa-envelope"></i></div>
							<div class="col-xl-6 form-group"><input type="number" class="form-control style2" placeholder="Your Phone"> <i class="fal small fa-phone"></i></div>
							<div class="col-xl-6 form-group"><input type="text" class="dateTime-pick form-control style2" placeholder="Select Date &amp; Time"> <i class="fal small fa-calendar-alt"></i></div>
							<div class="col-xl-12 text-center"><button type="submit" class="vs-btn style2">Book Appointment<i class="far fa-calendar-alt"></i></button></div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<style>
	.modal {
		z-index: 999;
	}
</style>
