<?php 

class MY_Exceptions extends CI_Exceptions
{
    /**
     * Show a custom 404 error
     */

	public $data;
    public function show_404($page = '', $log_error = TRUE)
    {
        $CI =& get_instance();
        $this->data['page'] = [
			'title' => "Stemrx Brain and Spine Institute - Cell Therapy in India",
			'description' =>"Stemrx Brain and Spine Institute is the best cell therapy center in India, which treat patients with neurodegerative and neurodevelopmental disorders.",
		];
        $output = '';
        $output .= $CI->load->view("layout/misc/_1", $this->data, true);
        $output .= $CI->load->view('errors/html/error_404', $this->data, true);
        $output .= $CI->load->view('layout/misc/_2', $this->data, true);
        set_status_header(404);
        echo $output;
        exit;
    }
}
