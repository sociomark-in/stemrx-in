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
		if ($this->LeadsModel->new_enquiry($this->input->post())) {
			redirect('thank-you');
		}
	}

	public function new()
	{
		if (isset($_POST['form_submit'])) {
			$url = "https://www.google.com/recaptcha/api/siteverify";
			$data = [
				'secret' => "your_secret_key_here",
				'response' => $_POST['token'],
				// 'remoteip' => $_SERVER['REMOTE_ADDR']
			];

			$api_url = 'https://www.google.com/recaptcha/api/siteverify'; 
            $resq_data = array( 
                'secret' => "6LclYrApAAAAAJyeVKwmOPxHa8UwB3Tj8f3cJJFG", 
                'response' => $_POST['token'], 
                'remoteip' => $_SERVER['REMOTE_ADDR'] 
            ); 
 
            $curlConfig = array( 
                CURLOPT_URL => $api_url, 
                CURLOPT_POST => true, 
                CURLOPT_RETURNTRANSFER => true, 
                CURLOPT_POSTFIELDS => $resq_data, 
                CURLOPT_SSL_VERIFYPEER => false 
            ); 
 
            $ch = curl_init(); 
            curl_setopt_array($ch, $curlConfig); 
            $response = curl_exec($ch); 
            if (curl_errno($ch)) { 
				$api_error = curl_error($ch); 
				print_r($api_error); 
            } 
            curl_close($ch);

			$res = json_decode($response, true);
			print_r($this->input->post());
			if ($res['success'] == true) {
				print_r($this->input->post()); 
				$form_data = $this->input->post();
				$this->data = [
					'name' => $form_data['enq_name'],
					'email' => $form_data['enq_email'],
					'contact' => $form_data['enq_contact'],
					'source_url' => $form_data['source_url'],
				];
				$data_email['enquiry'] = $this->data;
				if ($this->LeadsModel->new_appointment($this->data)) {
					// $this->send_email($data_email);
					redirect('thank-you');
				}
			}
		}
	}

	public function send_email($data)
	{
		$this->load->library('email');

		$config = array(
			'smtp_crypto' 	=> 'ssl',
			'protocol' 		=> 'smtp',
			'smtp_host' 	=> 'stemrx.in',
			'smtp_port' 	=> 465,
			'smtp_timeout' 	=> '10',
			'smtp_user' 	=> 'noreply@stemrx.in',
			'smtp_pass' 	=> 'ff6kqHqzc76d',
			'charset'    	=> 'utf-8',
			'newline'    	=> "\r\n",
			'mailtype' 		=> 'html',
			'wordwrap' 		=> TRUE,
			'validation' 	=> FALSE,
		);
		$this->email->initialize($config);

		$this->email->from('userinfo@stemrx.in', 'StemRx Hospitals');
		$this->email->to('hemant@sociomark.in');
		// $this->email->to('info@stemrx.in');
		// $this->email->cc('another@another-example.com');
		// $this->email->bcc('them@their-example.com');

		$this->email->subject('New Appointment / Enquiry');
		$this->email->message($this->load->view('templates/emails/appointment', $data, true));

		$this->email->send();
		$this->email->print_debugger();

		// $this->load->view('templates/emails/appointment', $this->data);
	}

	public function thank_you()
	{

		$this->data['page'] = [
			'title' => APP_NAME
		];
		$this->load->load_view('pages/thank-you', $this->data);
	}
}
