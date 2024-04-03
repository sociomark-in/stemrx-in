<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminDashboard extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model("User");
		$this->load->model("LeadsModel", "Leads");
	}
	
	public function login()
    {
        $data = [
            'page' => [
                'title' => "Login Page". " • " . APP_NAME
            ]
        ];
        $this->load->view('pages/login', $data);
    }
    public function register()
    {
        
    }

	public function index()
	{
		if (isset($_SESSION['user'])) {
			$id = $_SESSION['user']['id'];
			$user = (array)$this->User->get($id);
			$this->session->set_userdata(['user' => $user]);
			$data = [
				'page' => [
					'title' => "Dashboard" . " • " . APP_NAME
				],
				'user' => $user,
				'leads' => json_decode($this->Leads->get(), true, 4)
			];
			$this->session->set_userdata(['user' => $user]);
			$this->load->view('dashboard/index', $data);
		} else {
			redirect('/login');
		}
	}

	public function register()
	{
		if (isset($_SESSION['user'])) {
			$data = [
				'page' => [
					'title' => "Register Page". " • " . APP_NAME
				]
			];
			$this->load->view('dashboard/register', $data);
		} else {
			redirect('/login');
		}
	}
}
