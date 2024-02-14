<form action="#" class="form-wrap1 <?= $props['class'] ??= "" ?>" data-bg-color="<?= $props['bg-color'] ??= "" ?>">
	<div class="form-title-box bg-title" data-bg-src="<?= $props['bg-image'] ??= "" ?>">
		<div class="row justify-content-between align-items-center">
			<div class="col">
				<h2 class="h4 mb-2 text-white"><?= $title['heading'] ??= "" ?></h2>
				<p class="mb-0 text-white-light">
					<?= $title['desc'] ??= "" ?>
				</p>
			</div>
			<div class="col-auto d-none d-sm-block">
				<a href="tel:0088123456789" class="ripple-icon style2"><i class="fas fa-phone-alt"></i></a>
			</div>
		</div>
	</div>
	<div class="form-box">
		<div class="row">
			<?php if (!is_array($fields)) : ?>
				<div class="col-lg-6 form-group">
					<select class="form-select style3">
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
				<div class="col-lg-6 form-group">
					<select class="form-select style3">
						<option hidden disabled="disabled" selected="selected">
							Choose Doctor
						</option>
						<option>Aerospace Medicine</option>
						<option>Bariatric Surgery</option>
						<option>Infectious Diseases</option>
						<option>Laboratory Medicine</option>
					</select>
				</div>
				<div class="col-lg-6 form-group">
					<input type="text" class="form-control style3" placeholder="Your Name" />
					<i class="fal small fa-user"></i>
				</div>
				<div class="col-lg-6 form-group">
					<input type="email" class="form-control style3" placeholder="Email Address" />
					<i class="fal small fa-envelope"></i>
				</div>
				<div class="col-lg-6 form-group">
					<input type="number" class="form-control style3" placeholder="Your Phone" />
					<i class="fal small fa-phone"></i>
				</div>
				<div class="col-lg-6 form-group">
					<input type="text" class="dateTime-pick form-control style3" placeholder="Select Date & Time" />
					<i class="fal small fa-calendar-alt"></i>
				</div>
				<div class="col-xl-12 text-center">
					<button type="submit" class="vs-btn style2">
						Make Appointment<i class="far fa-calendar-alt"></i>
					</button>
				</div>
			<?php else : ?>
				<?php if ($fields["condition"] == "disabled") : ?>
					<input type="hidden" name="">
				<?php else : ?>
					<div class="col-lg-6 form-group">
						<select class="form-select style3">
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
				<?php endif ?>
				<?php if ($fields["doctor"] == "disabled") : ?>
					<input type="hidden" name="">
				<?php else : ?>
					<div class="col-lg-6 form-group">
						<select class="form-select style3">
							<option hidden disabled="disabled" selected="selected">
								Choose Doctor
							</option>
							<option>Aerospace Medicine</option>
							<option>Bariatric Surgery</option>
							<option>Infectious Diseases</option>
							<option>Laboratory Medicine</option>
						</select>
					</div>
				<?php endif ?>
				<div class="col-lg-6 form-group">
					<input type="text" class="dateTime-pick form-control style3" placeholder="Select Date & Time" />
					<i class="fal small fa-calendar-alt"></i>
				</div>
				<div class="col-lg-6 form-group">
					<input type="text" class="form-control style3" placeholder="Your Name" />
					<i class="fal small fa-user"></i>
				</div>
				<div class="col-lg-6 form-group">
					<input type="number" class="form-control style3" placeholder="Your Phone" />
					<i class="fal small fa-phone"></i>
				</div>
				<div class="col-12 form-group">
					<input type="email" class="form-control style3" placeholder="Email Address" />
					<i class="fal small fa-envelope"></i>
				</div>
				<div class="col-xl-12 text-center">
					<button type="submit" class="vs-btn style2">
						Book an Appointment<i class="far fa-calendar-alt"></i>
					</button>
				</div>
			<?php endif ?>
		</div>
	</div>
</form>
