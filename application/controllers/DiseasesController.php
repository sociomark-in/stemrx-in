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
				$this->data['page'] = [
					'title' => "Neurological Conditions" . " - " . APP_NAME
				];
				$this->load->load_view('diseases/neurological', $this->data);
				break;
				// case "new-hope-clinic":
				// 	$this->load->load_view('diseases/new-hope-clinic-group', $this->data);
				// 	break;
			case "developmental-problem":
				$this->data['page'] = [
					'title' => "Developmental Problems" . " - " . APP_NAME
				];
				$this->load->load_view('diseases/developmental-problem', $this->data);
				break;
			case "infertility":
				$this->data['page'] = [
					'title' => "Infertility" . " - " . APP_NAME
				];
				$this->load->load_view('diseases/infertility', $this->data);
				break;
			case "couple-clinic":
				$this->data['page'] = [
					'title' => "Couple Clinic" . " - " . APP_NAME
				];
				$this->load->load_view('diseases/couple-clinic', $this->data);
				break;
			case "pain-care":
				$this->data['page'] = [
					'title' => "Pain Care Conditions" . " - " . APP_NAME
				];
				$this->load->load_view('diseases/pain-care', $this->data);
				break;
			case "eye-care":
				$this->data['page'] = [
					'title' => "Eye Care Conditions" . " - " . APP_NAME
				];
				$this->load->load_view('diseases/eye-care', $this->data);
				break;
			case "metabolic-diseases":
				$this->data['page'] = [
					'title' => "Metabolic Diseases" . " - " . APP_NAME
				];
				$this->load->load_view('diseases/metabolic-diseases', $this->data);
				break;
			case "cosmatic-diseases":
				$this->data['page'] = [
					'title' => "Cosmetic Diseases" . " - " . APP_NAME
				];
				$this->load->load_view('diseases/cosmatic-diseases', $this->data);
				break;
			case "regenerative-clinic":
				$this->data['page'] = [
					'title' => "Regenerative Clinic" . " - " . APP_NAME
				];
				$this->load->load_view('diseases/regenerative-clinic', $this->data);
				break;
			case "dermatology-care":
				$this->data['page'] = [
					'title' => "Dermatology Care" . " - " . APP_NAME
				];
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
						$this->data['page'] = [
							'title' => "Cerebral Palsy" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/neural/cerebral-palsy-detail', $this->data);
						break;
					case 'developmental-delay':
						$this->data['page'] = [
							'title' => "Developmental Delay" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/neural/developmental-delay', $this->data);
						break;
					case 'alzheimers-disease':
						$this->data['page'] = [
							'title' => "Alzheimer's Disease" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/neural/alzheimers-disease', $this->data);
						break;
					case 'parkinsons-disease':
						$this->data['page'] = [
							'title' => "Parkinson's Disease" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/neural/parkinsons-disease', $this->data);
						break;
					case 'multiple-sclerosis':
						$this->data['page'] = [
							'title' => "Multiple Sclerosis" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/neural/multiple-sclerosis', $this->data);
						break;
					case 'neurogenetic-disorder':
						$this->data['page'] = [
							'title' => "Neurogenetic Disorder" . " - " . APP_NAME
						];
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
						$this->data['page'] = [
							'title' => "Azoospermia" . " - " . APP_NAME
						];
						# code...
						$this->load->load_view('diseases/condition/infertility/azoospermia-detail', $this->data);
						break;
					case 'pcod-pcos':
						$this->data['page'] = [
							'title' => "PCOD / PCOS" . " - " . APP_NAME
						];
						# code...
						$this->load->load_view('diseases/condition/infertility/pcod-detail', $this->data);
						break;

					default:
						redirect('condition/infertility');
						break;
				}
				break;

			case 'metabolic-diseases':
				switch ($condition) {
					case 'diabetes':
						$this->data['page'] = [
							'title' => "Diabetes" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/metabolic/diabetes', $this->data);
						break;
					case 'hyperlipidemia':
						$this->data['page'] = [
							'title' => "Hyperlipidemia" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/metabolic/hyperlipidemia', $this->data);
						break;
					case 'obesity':
						$this->data['page'] = [
							'title' => "Obesity" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/metabolic/obesity', $this->data);
						break;

					default:
						redirect("condition/metabolic-diseases");
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
