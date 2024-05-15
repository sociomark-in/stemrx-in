<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PagesController extends CI_Controller
{

	public $data;

	public function page_404()
	{
		$this->data['page'] = [
			'title' => "Stemrx Brain and Spine Institute - Cell Therapy in India",
			'description' => "Stemrx Brain and Spine Institute is the best cell therapy center in India, which treat patients with neurodegerative and neurodevelopmental disorders.",
		];
		$this->load->load_misc('errors/html/error_404', $this->data);
	}

	public function index()
	{
		$this->data['page'] = [
			'title' => "Stemrx Brain and Spine Institute - Cell Therapy in India",
			'description' => "Stemrx Brain and Spine Institute is the best cell therapy center in India, which treat patients with neurodegerative and neurodevelopmental disorders.",
		];
		$this->load->load_view('pages/new/index', $this->data);
	}

	public function blogs()
	{
		$this->data['page'] = [
			'title' => "Blogs" . " - " . APP_NAME
		];
		$this->load->load_view('blogs/blogs', $this->data);
	}
	public function about()
	{
		$this->data['page'] = [
			'title' => "About StemRx" . " - " . APP_NAME
		];
		$this->load->load_view('pages/about', $this->data);
	}
	public function why_stemrx()
	{
		$this->data['page'] = [
			'title' => "Why StemRx" . " - " . APP_NAME
		];
		$this->load->load_view('pages/why_stemrx', $this->data);
	}
	public function regenerative_therapy()
	{
		$this->data['page'] = [
			'title' => "Regenerative Therapy" . " - " . APP_NAME
		];
		$this->load->load_view('pages/regenerative_therapy', $this->data);
	}
	public function contact()
	{
		$this->data['page'] = [
			'title' => "Contact Us" . " - " . APP_NAME
		];
		$this->load->load_view('pages/contact', $this->data);
	}
	public function gallery()
	{
		$this->data['page'] = [
			'title' => "Gallery" . " - " . APP_NAME
		];
		$this->load->load_view('pages/gallery', $this->data);
	}
	public function parent_testmonial()
	{
		$playlist = [
			"PL05ESIAYp-Mk5CyO8JS-LDARMhjbwq3Bz",
			"PL05ESIAYp-Mn8HCeCSqN6Ymz4rrDGh0Lv",
			"PL05ESIAYp-Mk6CBQ-k5UJq6RkpTiEE0va",
			"PL05ESIAYp-MkamvLCRD4Mc73n8Lyj8P4R",
			"PL05ESIAYp-MlFGVdQqDQxM-PQcjTJLyFk",
			"PL05ESIAYp-MlTlTmW1UnRZTTIR3EzJEG5",
			"PL05ESIAYp-MnYMSAA-uivpSVlG1TfI58E",
			"PL05ESIAYp-MnOhL1hW6eGO7WvGtUS2_jt",
			"PL05ESIAYp-MkkE4BwR_p0IkuYpHVncpgA",
			"PL05ESIAYp-MnFUWlbUqsQvDe4mykrsM8b",
			"PL05ESIAYp-MloL2PnOaIRYcjB5EEllRy3",
			"PL05ESIAYp-MmjDa0CjB97yHA69H9HohbZ",
			"PL05ESIAYp-Mn08EdQRmf5UHo_g9_QNb15",
			"PL05ESIAYp-MmZhLZxJZTR1GMwCDDoTsho",
			"PL05ESIAYp-Ml2Y7wf0HwJ7QLVsfuJJx0K",
			"PL05ESIAYp-Mkr2zXf0adskyo9za-sP4eW",
			"PL05ESIAYp-MkGpJyZy22r2MXuoJKyKpcz",
			"PL05ESIAYp-Mk5CyO8JS-LDARMhjbwq3Bz",
			"PL05ESIAYp-Ml3vgkiuqy2gf_e6C-6W_wj",
			"PL05ESIAYp-MkzUOIX8so0SIS5cRK4wJHj",
			"PL05ESIAYp-MkRRO2PcaHIi-qdrOLhzNBn",
			"PL05ESIAYp-Mmt0OV7SBPd1obLn9aZH0ux",
			"PL05ESIAYp-Ml_mezmrevN2c2XX3ZOymT3",
			"PL05ESIAYp-MnXW-jQFdTsJfvfeHNfySGt",
			"PL05ESIAYp-Mm4zvFD1Cy_yICvvyiF_0hG",
			"PL05ESIAYp-Mm9AapLqL16kJtcx5LE-1AH",
			"PL05ESIAYp-MnMJTdDyRvy6dK0gHJZLhFD",
			"PL05ESIAYp-Mk3zTJ60iU9nJ9G9VBBmGln",
		];
		$this->data['playlist'] = $playlist;
		$this->data['page'] = [
			'title' => "Testimonials" . " - " . APP_NAME
		];
		$this->load->load_view('pages/parent-testmonial', $this->data);
	}
	public function appointment()
	{
		$this->data['page'] = [
			'title' => "Appointment" . " - " . APP_NAME
		];
	}
	public function projects()
	{
		$this->data['page'] = [
			'title' => "Projects" . " - " . APP_NAME
		];
	}
	public function dr_pradeep_mahajan()
	{
		$this->data['page'] = [
			'title' => "Dr Pradeep Mahajan" . " - " . APP_NAME
		];
		$this->load->load_view('pages/dr-pradeep-mahajan', $this->data);
	}
	public function news()
	{
		$this->data['page'] = [
			'title' => "News" . " - " . APP_NAME
		];
		$this->load->load_view('pages/news', $this->data);
	}
	public function articles()
	{
		$this->data['page'] = [
			'title' => "Articles" . " - " . APP_NAME
		];
		$this->load->load_view('pages/pr-articles', $this->data);
	}
	public function services()
	{
		$this->data['page'] = [
			'title' => "Services" . " - " . APP_NAME
		];
		$this->load->load_view('pages/service', $this->data);
	}

	public function service_single($service)
	{
		switch ($service) {
			case 'cosmetic-gynecology':
				$this->data['page'] = [
					'title' => "Cosmetic Gynecology" . " - " . APP_NAME
				];
				$this->load->load_view('treatments/cosmatic-gynac', $this->data);
				break;
			case 'infertility':
				$this->data['page'] = [
					'title' => "Infertility" . " - " . APP_NAME
				];
				$this->load->load_view('treatments/infertility', $this->data);
				break;

			case 'hairfall':
				$this->data['page'] = [
					'title' => "Hairfall" . " - " . APP_NAME
				];
				$this->load->load_view('treatments/hairfall', $this->data);
				break;

			default:
				$this->data['page'] = [
					'title' => "Service Single" . " - " . APP_NAME
				];
				$this->load->load_view('pages/service-details', $this->data);
				break;
		}
	}
	public function media($media)
	{
		switch ($media) {
			case 'instagram-media':
				$this->data['page'] = [
					'title' => "Media on Instagram" . " - " . APP_NAME
				];
				$this->load->load_view('media/instagram-media', $this->data);
				break;
			case 'youtube-media':
				$this->data['page'] = [
					'title' => "Media on YouTube" . " - " . APP_NAME
				];
				$this->load->load_view('media/youtube-media', $this->data);
				break;

			default:
				$this->data['page'] = [
					'title' => "Media" . " - " . APP_NAME
				];
				$this->load->load_view('pages/service-details', $this->data);
				break;
		}
	}
	public function center($center)
	{
		switch ($center) {
			case 'navi-mumbai':
				$this->data['page'] = [
					'title' => "StemRx at Navi Mumbai" . " - " . APP_NAME
				];
				$this->load->load_view('centers/navi-mumbai', $this->data);
				break;
			case 'mumbai':
				$this->data['page'] = [
					'title' => "StemRx at Mumbai" . " - " . APP_NAME
				];
				$this->load->load_view('centers/mumbai', $this->data);
				break;
			case 'hyderabad':
				$this->data['page'] = [
					'title' => "StemRx at Hyderabad" . " - " . APP_NAME
				];
				$this->load->load_view('centers/hyderabad', $this->data);
				break;
			case 'nepal':
				$this->data['page'] = [
					'title' => "StemRx at Nepal" . " - " . APP_NAME
				];
				$this->load->load_view('centers/nepal', $this->data);
				break;
			case 'ghana':
				$this->data['page'] = [
					'title' => "StemRx at Ghana" . " - " . APP_NAME
				];
				$this->load->load_view('centers/ghana', $this->data);
				break;
			case 'mauritius':
				$this->data['page'] = [
					'title' => "StemRx at Maldives" . " - " . APP_NAME
				];
				$this->load->load_view('centers/mauritius', $this->data);
				break;
			default:
				show_404();
				break;
		}
	}

	public function teams()
	{
		$this->data['page'] = [
			'title' => "Team of Experts" . " - " . APP_NAME
		];
		$this->load->load_view('pages/teams', $this->data);
	}
	public function shop()
	{
		$this->data['page'] = [
			'title' => "Shop" . " - " . APP_NAME
		];
		$this->load->load_view('pages/shop', $this->data);
	}
	public function privacy_policy()
	{
		$this->data['page'] = [
			'title' => "Privacy Policy" . " - " . APP_NAME
		];
		$this->load->load_view('footer/privacy_policy', $this->data);
	}
	public function terms_condition()
	{
		$this->data['page'] = [
			'title' => "Terms & Conditions" . " - " . APP_NAME
		];
		$this->load->load_view('footer/terms_condition', $this->data);
	}
	public function disclaimer()
	{
		$this->data['page'] = [
			'title' => "Disclaimer" . " - " . APP_NAME
		];
		$this->load->load_view('footer/disclaimer', $this->data);
	}
	public function return_policy()
	{
		$this->data['page'] = [
			'title' => "Return Policy" . " - " . APP_NAME
		];
		$this->load->load_view('footer/return_policy', $this->data);
	}
	public function shop_details()
	{
		$this->data['page'] = [
			'title' => "Shop Detail" . " - " . APP_NAME
		];
		$this->load->load_view('pages/shop-detail', $this->data);
	}
	public function page($url)
	{
		switch ($url) {
			case 'contact':
				# code...
				break;

			default:
				$this->load->load_view('pages/' . $url, $this->data);
				break;
		}
	}



	public function test()
	{
		$this->data['page'] = [
			'title' => "Service Single" . " - " . APP_NAME
		];
		$this->load->load_view('test/test', $this->data);
	}
}
