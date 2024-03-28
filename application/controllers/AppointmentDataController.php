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
		$form_data = $this->input->post();
		$data = [
			'name' => $form_data['enq_name'],
			'email' => $form_data['enq_email'],
			'contact' => $form_data['enq_contact'],
			'source_url' => $form_data['source_url'],
		];
		if($this->LeadsModel->new_appointment($data)){
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
