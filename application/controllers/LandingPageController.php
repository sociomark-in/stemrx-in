<?php

class LandingPageController extends CI_Controller
{
	public $data;

	public function condition($slug)
	{
		switch ($slug) {
			case 'infertility':
				$this->data['page'] = [
					'title' => "Best IVF Center/Clinic in Mumbai" . " - " . APP_NAME,
					'description' => "Looking for a fertility specialist or IVF center near you? Discover top IVF doctors and the best fertility hospital nearby. Trust our expert care for your towards parenthood."
				];
				$this->load->load_view('lp/diseases/infertility', $this->data);
				break;
			case 'pain-management':
				$this->data['page'] = [
					'title' => " Don't Let Pain Control Your Life. Get Expert Treatment Options" . " - " . APP_NAME
				];
				$this->load->load_view('lp/diseases/pain', $this->data);
				break;
			case 'osteoarthritis':
				$this->data['page'] = [
					'title' => " Don't Let Pain Control Your Life. Get Expert Treatment Options" . " - " . APP_NAME
				];
				$this->load->load_view('lp/diseases/osteoarthritis', $this->data);
				break;

			default:
			    show_404();
				break;
		}
	}
}
