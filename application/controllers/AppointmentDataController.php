<?php

class AppointmentDataController extends CI_Controller
{
	public $data;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('leads/LeadsModel', 'LeadsModel');
	}

	public function new_contact()
	{
		if($this->LeadsModel->new_enquiry($this->input->post())){
			redirect('thank-you');
		}
	}
	public function new()
	{
		if($this->LeadsModel->new_appointment($this->input->post())){
			redirect('thank-you');
		}
	}

	public function thank_you()
	{
		$this->data['page'] = [
			'title' => APP_NAME
		];
		$this->load->load_view('pages/thank-you', $this->data);
	}
}
