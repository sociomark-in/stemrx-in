<?php

class ProcedureController extends CI_Controller
{
	public $data;

	public function __construct()
	{
		parent::__construct();
		$this->load->model("data/TherapeuticsModel", "TherapeuticsModel");
		$this->data['therapeutics'] = json_decode($this->TherapeuticsModel->get(), true);
	}

	public function home()
	{
		$this->load->load_view('treatments/treatment-home', $this->data);
	}
	public function procedure($procedure)
	{
		switch ($procedure) {
			case 'advanced-pain-management':
				$this->load->load_view('therapeutics/advanced-pain-management', $this->data);
				break;
			case 'hyperbaric-oxygen-therapy':
				$this->data['page'] = [
					'title' => "Hyperbaric Oxygen Therapy" . " - " . APP_NAME
				];
				$this->load->load_view('therapeutics/hbot', $this->data);
				break;
			case 'laser-therapy':
				$this->data['page'] = [
					'title' => "Laser Therapy" . " - " . APP_NAME
				];
				$this->load->load_view('therapeutics/laser-therapy', $this->data);
				break;
			case 'aquatic-therapy':
				$this->data['page'] = [
					'title' => "Aquatic Therapy" . " - " . APP_NAME
				];
				$this->load->load_view('therapeutics/aquatic-therapy', $this->data);
				break;
			case 'ozone-therapy':
				$this->data['page'] = [
					'title' => "Ozone Therapy" . " - " . APP_NAME
				];
				$this->load->load_view('therapeutics/ozone-therapy', $this->data);
				break;
			case 'detoxification-therapy':
				$this->data['page'] = [
					'title' => "Detoxification Therapy" . " - " . APP_NAME
				];
				$this->load->load_view('therapeutics/detoxification-therapy', $this->data);
				break;
			case 'energy-therapy':
				$this->data['page'] = [
					'title' => "Energy Therapy" . " - " . APP_NAME
				];
				$this->load->load_view('therapeutics/energy-therapy', $this->data);
				break;
			case 'very-intense-pressure-pulse':
				$this->data['page'] = [
					'title' => "Very Intense Pressure Pulse (VIPP)" . " - " . APP_NAME
				];
				$this->load->load_view('therapeutics/vipp', $this->data);
				break;
			case 'electromagnetic-field-therapy':
				$this->data['page'] = [
					'title' => "Electromagnetic Field Therapy" . " - " . APP_NAME
				];
				$this->load->load_view('therapeutics/em-therapy', $this->data);
				break;
			case 'rhythm-therapy':
				$this->data['page'] = [
					'title' => "Vibration / Resonance / Rhythm Therapy" . " - " . APP_NAME
				];
				$this->load->load_view('therapeutics/rhythm-therapy', $this->data);
				break;
			case 'brain-stimulation':
				$this->data['page'] = [
					'title' => "Brain Stimulation Therapy" . " - " . APP_NAME
				];
				$this->load->load_view('therapeutics/brain-stimulation', $this->data);
				break;
			case 'faradic-and-galvanic-stimulation':
				$this->data['page'] = [
					'title' => "Faradic and Galvanic Stimulation Therapy" . " - " . APP_NAME
				];
				$this->load->load_view('therapeutics/faradic-stimulation', $this->data);
				break;
			case 'brain-retrainer':
				$this->data['page'] = [
					'title' => "Brain Retrainer" . " - " . APP_NAME
				];
				$this->load->load_view('therapeutics/brain-retrainer', $this->data);
				break;
			case 'infrared-sauna':
				$this->data['page'] = [
					'title' => "Infrared Sauna" . " - " . APP_NAME
				];
				$this->load->load_view('therapeutics/infrared-sauna', $this->data);
				break;
			case 'trans-corneal-electrical-stimulation':
				$this->data['page'] = [
					'title' => "Infrared Sauna" . " - " . APP_NAME
				];
				$this->load->load_view('therapeutics/tces', $this->data);
				break;
			case 'cryotherapy':
				$this->data['page'] = [
					'title' => "Infrared Sauna" . " - " . APP_NAME
				];
				$this->load->load_view('therapeutics/cryotherapy', $this->data);
				break;
			case 'robotic-gloves':
				$this->data['page'] = [
					'title' => "Infrared Sauna" . " - " . APP_NAME
				];
				$this->load->load_view('therapeutics/robotic-gloves', $this->data);
				break;
			case 'treadmill-with-harness':
				$this->data['page'] = [
					'title' => "Infrared Sauna" . " - " . APP_NAME
				];
				$this->load->load_view('therapeutics/treadmill-with-harness', $this->data);
				break;
			case 'magnetic-resonance-therapy':
				$this->data['page'] = [
					'title' => "Infrared Sauna" . " - " . APP_NAME
				];
				$this->load->load_view('therapeutics/mrt', $this->data);
				break;


			case 'cell-regulation':
				$this->load->load_view('therapeutics/cell-regulation', $this->data);
				break;
			case 'tens':
				$this->load->load_view('therapeutics/tens', $this->data);
				break;
			case 'non-surgical-spinal-decompression-therapy':
				$this->load->load_view('therapeutics/non-surgical-spinal-decompression-therapy', $this->data);
				break;
			case 'stem-therapy':
				$this->load->load_view('therapeutics/stem-therapy', $this->data);
				break;

			case 'transcranial-optic-stimulation':
				$this->load->load_view('therapeutics/transcranial-optic-stimulation', $this->data);
				break;
			case 'treadmill-with-motorized-exoskeleton':
				$this->load->load_view('therapeutics/treadmill-with-motorized-exoskeleton', $this->data);
				break;
			case 'fmt':
				$this->load->load_view('therapeutics/fmt', $this->data);
				break;

			default:
				$this->load->load_view('treatments/details/treatment-details', $this->data);
				break;
		}
	}
}
