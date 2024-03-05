<?php

class DiseasesController extends CI_Controller
{
	public $data;
	public $diseases_group;

	public function __construct()
	{
		parent::__construct();
	}
	public function condition($group)
	{
		switch ($group) {
			case "neural":
				$this->load->load_view('diseases/neurological', $this->data);
				break;
				// case "new-hope-clinic":
				// 	$this->load->load_view('diseases/new-hope-clinic-group', $this->data);
				// 	break;
			case "developmental-problem":
				$this->load->load_view('diseases/developmental-problem', $this->data);
				break;
			case "infertility":
				$this->load->load_view('diseases/infertility', $this->data);
				break;
			case "couple-clinic":
				$this->load->load_view('diseases/couple-clinic', $this->data);
				break;
			case "pain-care":
				$this->load->load_view('diseases/pain-care', $this->data);
				break;
			case "eye-care":
				$this->load->load_view('diseases/eye-care', $this->data);
				break;
			case "metabolic-diseases":
				$this->load->load_view('diseases/metabolic-diseases', $this->data);
				break;
			case "cosmatic-diseases":
				$this->load->load_view('diseases/cosmatic-diseases', $this->data);
				break;
			case "regenerative-clinic":
				$this->load->load_view('diseases/regenerative-clinic', $this->data);
				break;
			case "dermatology-care":
				$this->load->load_view('diseases/dermatology-care', $this->data);
				break;

			default:
				redirect('');
				break;
		}
	}
	public function condition_detail($group, $condition)
	{
		switch ($group) {
			case 'neural':
				switch ($condition) {
					case 'neural':
						# code...
						$this->load->load_view('diseases/condition/neural_new', $this->data);
						break;
					case 'cerebral-palsy':
						# code...
						$this->load->load_view('diseases/condition/neural/cerebral-palsy-detail', $this->data);
						break;
					case 'developmental-delay':
						# code...
						$this->load->load_view('diseases/condition/neural/developmental-delay', $this->data);
						break;
					case 'alzheimers-disease':
						# code...
						$this->load->load_view('diseases/condition/neural/alzheimers-disease', $this->data);
						break;
					case 'parkinsons-disease':
						# code...
						$this->load->load_view('diseases/condition/neural/parkinsons-disease', $this->data);
						break;
					case 'multiple-sclerosis':
						# code...
						$this->load->load_view('diseases/condition/neural/multiple-sclerosis', $this->data);
						break;
					case 'neurogenetic-disorder':
						# code...
						$this->load->load_view('diseases/condition/neural/neurogenetic-disorder', $this->data);
						break;

					default:
						redirect('condition/neural');
						break;
				}
				break;

			case 'infertility':
				switch ($condition) {
					case 'azoospermia':
						# code...
						$this->load->load_view('diseases/condition/infertility/azoospermia-detail');
						break;
					case 'pcod-pcos':
						# code...
						$this->load->load_view('diseases/condition/infertility/pcod-detail');
						break;

					default:
						redirect('condition/infertility');
						break;
				}
				break;

			default:
				switch ($condition) {
					case 'neural':
						# code...
						$this->load->load_view('diseases/condition/neural_new');
						break;

					default:
						$this->load->load_view('diseases/conditions-details');
						break;
				}
				break;
		}
	}
}
