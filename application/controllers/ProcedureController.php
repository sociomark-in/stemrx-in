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
				$this->load->load_view('condition/advanced-pain-management', $this->data);
				break;
			case 'hyperbaric-oxygen-therapy':
				$this->load->load_view('condition/hyperbaric-oxygen-therapy', $this->data);
				break;
			case 'laser-therapy':
				$this->load->load_view('condition/laser-therapy', $this->data);
				break;
			case 'aquatic-therapy':
				$this->load->load_view('condition/aquatic-therapy', $this->data);
				break;
			case 'ozone-therapy':
				$this->load->load_view('condition/ozone-therapy', $this->data);
				break;
			case 'detoxification-therapy':
				$this->load->load_view('condition/detoxification-therapy', $this->data);
				break;
			case 'energy-therapy':
				$this->load->load_view('condition/energy-therapy', $this->data);
				break;
			case 'very-intense-pressure-pulse':
				$this->load->load_view('condition/vipp', $this->data);
				break;
			case 'rhythm-therapy':
				$this->load->load_view('condition/rhythm-therapy', $this->data);
				break;
			case 'brain-stimulation':
				$this->load->load_view('condition/brain-stimulation', $this->data);
				break;
			case 'stem-therapy':
				$this->load->load_view('condition/stem-therapy', $this->data);
				break;
			case 'faradic-and-galvanic-stimulation':
				$this->load->load_view('condition/faradic-stimulation', $this->data);
				break;
			case 'cell-regulation':
				$this->load->load_view('condition/cell-regulation', $this->data);
				break;
			case 'tens':
				$this->load->load_view('condition/tens', $this->data);
				break;
			case 'non-surgical-spinal-decompression-therapy':
				$this->load->load_view('condition/non-surgical-spinal-decompression-therapy', $this->data);
				break;
			case 'brain-retrainer':
				$this->load->load_view('condition/brain-retrainer', $this->data);
				break;
			case 'infrared-sauna':
				$this->load->load_view('condition/infrared-sauna', $this->data);
				break;
			case 'trans-corneal-electrical-stimulation':
				$this->load->load_view('condition/trans-corneal-electrical-stimulation', $this->data);
				break;
			case 'cryotherapy':
				$this->load->load_view('condition/cryotherapy', $this->data);
				break;
			case 'transcranial-optic-stimulation':
				$this->load->load_view('condition/transcranial-optic-stimulation', $this->data);
				break;
			case 'robotic-gloves':
				$this->load->load_view('condition/robotic-gloves', $this->data);
				break;
			case 'treadmill-with-motorized-exoskeleton':
				$this->load->load_view('condition/treadmill-with-motorized-exoskeleton', $this->data);
				break;
			case 'fmt':
				$this->load->load_view('condition/fmt', $this->data);
				break;
			case 'treadmill-with-harness':
				$this->load->load_view('condition/treadmill-with-harness', $this->data);
				break;

			default:
				$this->load->load_view('treatments/details/treatment-details', $this->data);
				break;
		}
	}
}
