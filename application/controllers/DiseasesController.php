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
					'title' => "Best IVF Center/Clinic in Mumbai | Stemrx Hospital" . " - " . APP_NAME,
					'description' => "Looking for a fertility specialist or IVF center near you? Discover top IVF doctors and the best fertility hospital nearby. Trust our expert care for your towards parenthood."
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
					'title' => "Effective Pain Care Solutions: Visit Our Pain Management Clinic Today" . " - " . APP_NAME,
					'description' => "Seeking relief from pain? Our pain management clinic offers effective solutions for various types of pain. Visit us now for personalized care and relief."
				];
				$this->load->load_view('diseases/pain-care', $this->data);
				break;
			case "eye-care":
				$this->data['page'] = [
					'title' => "Comprehensive Eye Care & Vision Services at StemRx Hospital" . " - " . APP_NAME,
					'description' => "Experience top-quality eye care and vision services at StemRx Hospital. Our expert team provides comprehensive solutions tailored to your needs. Trust us for your eye health."
				];
				$this->load->load_view('diseases/eye-care', $this->data);
				break;
			case "metabolic-diseases":
				$this->data['page'] = [
					'title' => "Effective Metabolic Syndrome Treatments: Find Relief at StemRx Hospital" . " - " . APP_NAME,
					'description' => "Explore effective treatments for metabolic syndrome at StemRx Hospital. Our dedicated team offers personalized care to manage and improve metabolic health. Take the first step towards a healthier lifestyle today."
				];
				$this->load->load_view('diseases/metabolic-diseases', $this->data);
				break;
			case "cosmatic-diseases":
				$this->data['page'] = [
					'title' => "Cosmetic Treatments at StemRx Hospital" . " - " . APP_NAME,
					'description' => "Transform your appearance with simple cosmetic treatments at StemRx Hospital. Feel confident and beautiful with our easy procedures. Book your appointment now!"
				];
				$this->load->load_view('diseases/cosmatic-diseases', $this->data);
				break;
			case "regenerative-clinic":
				$this->data['page'] = [
					'title' => "Transformative Regenerative Treatments at StemRx Hospital" . " - " . APP_NAME,
					'description' => "Discover the power of regenerative medicine at StemRx Hospital's dedicated clinic. Our advanced treatments harness the body's natural healing abilities to restore function and vitality. Experience personalized care and rejuvenation today."
				];
				$this->load->load_view('diseases/regenerative-clinic', $this->data);
				break;
			case "dermatology-care":
				$this->data['page'] = [
					'title' => "Expert Dermatologist in Mumbai: Visit StemRx Hospital Today" . " - " . APP_NAME,
					'description' => "Looking for a trusted dermatologist in Mumbai? StemRx Hospital offers expert skin care services to address all your dermatological concerns. Schedule your appointment now for healthy, glowing skin."
				];
				$this->load->load_view('diseases/dermatology-care', $this->data);
				break;
			case "chromosomal-disorder":
				$this->data['page'] = [
					'title' => "Comprehensive Care for Chromosomal Disorders at StemRx Hospital" . " - " . APP_NAME,
					'description' => "Find expert care and support for chromosomal disorders at StemRx Hospital. Our specialized team offers comprehensive treatments to manage and improve the quality of life for individuals with chromosomal abnormalities. "
				];
				$this->load->load_view('diseases/chromosomal-disorder', $this->data);
				break;
			case "infertility2":
				$this->data['page'] = [
					'title' => "Infertility" . " - " . APP_NAME
				];
				$this->load->load_view('diseases/infertility2', $this->data);
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
							'title' => "Cerebral Palsy Hospital in Mumbai | Top Treatment & Expert Doctors - StemRx Hospital" . " - " . APP_NAME,
							'description' => "Seeking the best treatment for cerebral palsy in India? StemRx Hospital in Mumbai offers advanced therapies led by top doctors specializing in cerebral palsy treatment."
						];
						$this->load->load_view('diseases/condition/neural/cerebral-palsy-detail', $this->data);
						break;
					case 'developmental-delay':
						$this->data['page'] = [
							'title' => "Development Delay Treatment: Mumbai, India - StemRx Hospital" . " - " . APP_NAME,
							'description' => "Expert care for developmental delay at StemRx Hospital in Mumbai. Our specialists offer effective treatment for better progress. Trust us for your loved one's growth."
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
						show_404();
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
					case 'decrease-ovarian-reserve':
						$this->data['page'] = [
							'title' => "Decrease Ovarian Reserve" . " - " . APP_NAME
						];
						# code...
						$this->load->load_view('diseases/condition/infertility/ovarian-reserve', $this->data);
						break;
					case 'thin-endometrium':
						$this->data['page'] = [
							'title' => "Thin Endometrium" . " - " . APP_NAME
						];
						# code...
						$this->load->load_view('diseases/condition/infertility/thin-endometrium', $this->data);
						break;
					case 'ashermen-syndrome':
						$this->data['page'] = [
							'title' => "Ashermen's Syndrome" . " - " . APP_NAME
						];
						# code...
						$this->load->load_view('diseases/condition/infertility/ashermen', $this->data);
						break;
					case 'premature-menopause':
						$this->data['page'] = [
							'title' => "PCOD / PCOS" . " - " . APP_NAME
						];
						# code...
						$this->load->load_view('diseases/condition/infertility/menopause', $this->data);
						break;
					default:
						show_404();
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
						show_404();
						break;
				}
				break;

			case 'pain-care':
				switch ($condition) {
					case 'migraine':
						$this->data['page'] = [
							'title' => "Migraine" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/pain-care/migraine', $this->data);
						break;
					case 'cervical-spondylitis':
						$this->data['page'] = [
							'title' => "Cervical spondylitis" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/pain-care/cervical-spondylitis', $this->data);
						break;
					case 'osteoarthritis':
						$this->data['page'] = [
							'title' => "Osteoarthritis" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/pain-care/osteoarthritis', $this->data);
						break;
					case 'avascular-necrosis':
						$this->data['page'] = [
							'title' => "Avascular necrosis" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/pain-care/avascular-necrosis', $this->data);
						break;
					default:
						show_404();
						break;
				}
				break;


			case 'developmental-problem':
				switch ($condition) {
					case 'muscular-dystrophy':
						$this->data['page'] = [
							'title' => "Muscular Dystrophy" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/developmental/muscular-dystrophy', $this->data);
						break;
					case 'congenital-myopathy':
						$this->data['page'] = [
							'title' => "Congenital Myopathy" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/developmental/congenital-myopathy', $this->data);
						break;
					case 'autism-spectrum-disorder':
						$this->data['page'] = [
							'title' => "Autism Spectrum Disorder" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/developmental/autism-spectrum', $this->data);

						break;
					case 'adhd':
						$this->data['page'] = [
							'title' => "Neurogenetic Disorder" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/developmental/adhd', $this->data);

						break;

					default:
						show_404();
						break;
				}
				break;

			case 'chromosomal-disorder':
				switch ($condition) {
					case 'trisomy-21':
						$this->data['page'] = [
							'title' => "Muscular Dystrophy" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/chromosomal-disorder/trisomy-21', $this->data);
						break;
					default:
						show_404();
						break;
				}
				break;

			case 'dermatology-care':
				switch ($condition) {
					case 'psoriasis':
						$this->data['page'] = [
							'title' => "Psoriasis" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/dermatology/psoriasis', $this->data);
						break;
					case 'melasma':
						$this->data['page'] = [
							'title' => "Melasma" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/dermatology/melasma', $this->data);
						break;
					case 'alopecia-areata':
						$this->data['page'] = [
							'title' => "Alopecia Areata" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/dermatology/alopecia-areata', $this->data);
						break;
						// case 'vitiligo':
						// 	$this->data['page'] = [
						// 		'title' => "Alopecia Areata" . " - " . APP_NAME
						// 	];
						// 	$this->load->load_view('diseases/condition/dermatology/vitiligo', $this->data);
						// 	break;
					default:
						show_404();
						break;
				}
				break;

			case 'eye-care':
				switch ($condition) {
					case 'diabetic-retinopathy':
						$this->data['page'] = [
							'title' => "Diabetic Ratinopathy" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/eye/ratinopathy', $this->data);
						break;
					case 'cataract':
						$this->data['page'] = [
							'title' => "Cataract" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/eye/cataract', $this->data);
						break;
					case 'glaucoma':
						$this->data['page'] = [
							'title' => "Glaucoma" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/eye/glaucoma', $this->data);
						break;
					case 'amd':
						$this->data['page'] = [
							'title' => "Age-related Macular Degeneration - AMD" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/eye/amd', $this->data);
						break;
					case 'optic-nerve-injury':
						$this->data['page'] = [
							'title' => "Optic Nerve Injury" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/eye/optic', $this->data);
						break;
					default:
						show_404();
						break;
				}
				break;

			default:
				show_404();
				break;
		}
	}
}
