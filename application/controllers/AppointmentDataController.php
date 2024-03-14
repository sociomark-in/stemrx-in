<?php

class AppointmentDataController extends CI_Controller
{
	public function new() {
		print_r($this->input->post());
	}
}
