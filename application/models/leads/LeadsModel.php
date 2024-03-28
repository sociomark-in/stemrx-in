<?php

class LeadsModel extends CI_Model
{
	public $data, $table;
	public function __construct()
	{
		parent::__construct();
		$this->table['appointment'] = 'web_form_appointments';
	}

	public function new_appointment($data) {
		if($this->db->insert($this->table['appointment'], $data)){
			return true;
		} else {
			return false;
		}
	}
	
	public function new_enquiry($form_data) {
		
		// if($this->db->insert($this->table['appointment'])){
			
		// }
		return true;
	}
	

}
