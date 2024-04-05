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

	public function procedure_detail($procedure_group, $procedure)
	{
		switch ($procedure_group) {
			case 'advanced-infertility-treatment':
				switch ($procedure) {
					case 'ivf':
						$this->data['page'] = [
							'title' => "IVF" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/infertility2/ivf', $this->data);
						break;
					case 'endometrium-rejuvenation':
						$this->data['page'] = [
							'title' => "Endometrium Rejuvenation" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/infertility2/endometrim-rejuvenation', $this->data);
						break;
					case 'menopausal-symptoms-reversal':
						$this->data['page'] = [
							'title' => "Menopausal Symptoms Reversal" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/infertility2/menopausal-symtoms-reversal', $this->data);
						break;
					case 'ovarian-rejuvenation':
						$this->data['page'] = [
							'title' => "Ovarian Rejuvenation" . " - " . APP_NAME
						];
						$this->load->load_view('diseases/condition/infertility2/ovarian-rejuvenation', $this->data);
						break;


					default:
						redirect('therapeutics/advanced-infertility-treatment');
						break;
				}
				break;

			default:
				# code...
				break;
		}
	}
	public function procedure($procedure)
	{
		switch ($procedure) {
			case 'advanced-pain-management':
				$this->data['page'] = [
					'title' => "Hyperbaric Oxygen Therapy" . " - " . APP_NAME
				];
				$this->load->load_view('therapeutics/advanced-pain-management', $this->data);
				break;
			case "advanced-infertility-treatment":
				$this->data['page'] = [
					'title' => "Advanced Infertility Treatment" . " - " . APP_NAME
				];
				$this->load->load_view('therapeutics/infertility', $this->data);
				break;
			case 'hyperbaric-oxygen-therapy':
				$this->data['page'] = [
					'title' => "Hyperbaric Oxygen Therapy" . " - " . APP_NAME
				];
				$this->load->load_view('therapeutics/hbot', $this->data);
				break;
			case 'laser-therapy':
				$this->data['page'] = [
					'title' => "Advanced Laser Therapy Solutions at Stemrx in Navi Mumbai" . " - " . APP_NAME,
					'description' => "Experience cutting-edge laser therapy at Stemrx for effective and non-invasive treatments in Navi Mumbai. Our experts provide personalized care for optimal results."
				];
				$this->load->load_view('therapeutics/laser-therapy', $this->data);
				break;
			case 'aquatic-therapy':
				$this->data['page'] = [
					'title' => "Experience Aquatic Therapy: Healing Waters at StemRx Hospital" . " - " . APP_NAME,
					'description' => "Dive into the benefits of aquatic therapy at StemRx Hospital. Our expert team utilizes the gentle resistance and buoyancy of water to facilitate healing and rehabilitation. Discover the therapeutic power of water for your recovery journey."
				];
				$this->load->load_view('therapeutics/aquatic-therapy', $this->data);
				break;
			case 'ozone-therapy':
				$this->data['page'] = [
					'title' => "Discover Healing with Ozone Therapy at StemRx Hospital" . " - " . APP_NAME,
					'description' => "Unlock the potential of ozone therapy at StemRx Hospital. Our specialized treatments harness the healing properties of ozone to promote wellness and rejuvenation. Experience natural healing and vitality with our expert team."
				];
				$this->load->load_view('therapeutics/ozone-therapy', $this->data);
				break;
			case 'detoxification-therapy':
				$this->data['page'] = [
					'title' => "Revitalize Your Body with Detoxification Therapy at StemRx Hospital" . " - " . APP_NAME,
					'description' => "Experience the cleansing benefits of detoxification therapy at StemRx Hospital. Our specialized treatments help rid your body of toxins and promote overall wellness. Rejuvenate your health and vitality with our expert team today."
				];
				$this->load->load_view('therapeutics/detoxification-therapy', $this->data);
				break;
			case 'energy-therapy':
				$this->data['page'] = [
					'title' => "Energize Your Life with Energy Therapy at StemRx Hospital" . " - " . APP_NAME,
					'description' => "Recharge your body and mind with energy therapy at StemRx Hospital. Our holistic approach harnesses the power of energy to promote balance and well-being. Experience revitalization and vitality with our expert practitioners."
				];
				$this->load->load_view('therapeutics/energy-therapy', $this->data);
				break;
			case 'very-intense-pressure-pulse':
				$this->data['page'] = [
					'title' => "Breakthrough VIPP Therapy for Deep Healing at StemRx Hospital" . " - " . APP_NAME,
					'description' => "Experience the cutting-edge Very Intense Pressure Pulse (VIPP) Therapy at StemRx Hospital. Our advanced treatment delivers deep healing and relief for various conditions. Discover the transformative power of VIPP therapy with our expert team today."
				];
				$this->load->load_view('therapeutics/vipp', $this->data);
				break;
			case 'electromagnetic-field-therapy':
				$this->data['page'] = [
					'title' => "Experience Healing with Electromagnetic Field Therapy at StemRx Hospital" . " - " . APP_NAME,
					'description' => "Explore the innovative Electromagnetic Field Therapy at StemRx Hospital. Our advanced treatment harnesses electromagnetic fields to promote healing and wellness. Discover the potential of electromagnetic therapy for your health and vitality with our expert team."
				];
				$this->load->load_view('therapeutics/em-therapy', $this->data);
				break;
			case 'rhythm-therapy':
				$this->data['page'] = [
					'title' => "Harmonize Your Body with Vibration, Resonance, and Rhythm Therapy at StemRx Hospital" . " - " . APP_NAME,
					'description' => "Discover the transformative effects of Vibration, Resonance, and Rhythm Therapy at StemRx Hospital. Our holistic approach utilizes sound and vibration to promote balance, relaxation, and healing. Experience harmony and well-being with our expert practitioners."
				];
				$this->load->load_view('therapeutics/rhythm-therapy', $this->data);
				break;
			case 'brain-stimulation':
				$this->data['page'] = [
					'title' => "Enhance Brain Function with Advanced Brain Stimulation Therapy at StemRx Hospital" . " - " . APP_NAME,
					'description' => "Unlock the potential of brain stimulation therapy at StemRx Hospital. Our advanced treatments utilize innovative techniques to enhance cognitive function and promote neurological health."
				];
				$this->load->load_view('therapeutics/brain-stimulation', $this->data);
				break;
			case 'faradic-and-galvanic-stimulation':
				$this->data['page'] = [
					'title' => "Optimize Muscle Function with Faradic and Galvanic Stimulation at StemRx Hospital" . " - " . APP_NAME,
					'description' => "Experience the benefits of Faradic and Galvanic Stimulation therapy at StemRx Hospital. Our specialized treatments use electrical currents to improve muscle strength, reduce pain, and promote rehabilitation."
				];
				$this->load->load_view('therapeutics/faradic-stimulation', $this->data);
				break;
			case 'brain-retrainer':
				$this->data['page'] = [
					'title' => "Enhance Cognitive Function with Brain Retrainer Therapy at StemRx Hospital" . " - " . APP_NAME,
					'description' => "Discover the power of Brain Retrainer therapy at StemRx Hospital. Our specialized program utilizes innovative techniques to enhance memory, focus, and overall cognitive function. Experience personalized care and improve your brain health today."
				];
				$this->load->load_view('therapeutics/brain-retrainer', $this->data);
				break;
			case 'infrared-sauna':
				$this->data['page'] = [
					'title' => "Revitalize Your Body with Infrared Sauna Therapy at StemRx Hospital" . " - " . APP_NAME,
					'description' => "Experience the soothing benefits of Infrared Sauna Therapy at StemRx Hospital. Our advanced treatments utilize infrared heat to promote detoxification, relaxation, and overall well-being. Rejuvenate your body and mind with our expert practitioners."
				];
				$this->load->load_view('therapeutics/infrared-sauna', $this->data);
				break;
			case 'trans-corneal-electrical-stimulation':
				$this->data['page'] = [
					'title' => "Elevate Visual Wellness with Trans Corneal Electrical Stimulation | StemRX Hospitals" . " - " . APP_NAME,
					'description' => "Discover how Trans Corneal Electrical Stimulation (TCES) therapy offered at StemRX Hospitals can revolutionize visual health. Explore our therapeutic solutions and learn about the transformative benefits of TCES in enhancing ocular function."
				];
				$this->load->load_view('therapeutics/tces', $this->data);
				break;
			case 'cryotherapy':
				$this->data['page'] = [
					'title' => "Explore Cryotherapy Treatments at StemRX Hospitals | ApogeeDigitech" . " - " . APP_NAME,
					'description' => "Discover the benefits of cryotherapy treatments offered at StemRX Hospitals. Learn how this innovative therapeutic approach can aid in various medical conditions, providing relief and promoting healing. Visit now for advanced cryotherapy solutions."
				];
				$this->load->load_view('therapeutics/cryotherapy', $this->data);
				break;
			case 'robotic-gloves':
				$this->data['page'] = [
					'title' => "Revolutionize Rehabilitation with Robotic Gloves | StemRX Hospitals" . " - " . APP_NAME,
					'description' => "Explore the future of rehabilitation with robotic gloves at StemRX Hospitals. Our therapeutic solutions empower patients with enhanced motor skills and improved functionality. Discover how our advanced technology is reshaping the landscape of healthcare."
				];
				$this->load->load_view('therapeutics/robotic-gloves', $this->data);
				break;
			case 'treadmill-with-harness':
				$this->data['page'] = [
					'title' => "Revolutionize Rehabilitation with Treadmill with Harness Therapy at StemRX Hospitals" . " - " . APP_NAME,
					'description' => "Explore the benefits of Treadmill with Harness therapy offered at StemRX Hospitals' therapeutic center. Discover how this innovative rehabilitation approach facilitates safe and effective recovery for patients with mobility challenges."
				];
				$this->load->load_view('therapeutics/treadmill-with-harness', $this->data);
				break;
			case 'magnetic-resonance-therapy':
				$this->data['page'] = [
					'title' => "Unlock Healing Potential with Magnetic Resonance Therapy (MRT) at StemRx Hospital" . " - " . APP_NAME,
					'description' => "Experience the transformative effects of Magnetic Resonance Therapy (MRT) at StemRx Hospital. Our advanced treatment harnesses magnetic fields to promote healing and pain relief. Discover personalized care and holistic wellness with our expert team."
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
