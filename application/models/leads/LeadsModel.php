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

	public function get($columns= null, $where = null){
        if(null !== $columns && count($columns)> 0){
            $this->db->select($columns);
        }
        if(null !== $where && count($where)> 0){
            $this->db->where($where);
        }
        if(null !== $this->table){
            return json_encode($this->db->get($this->table)->result_array());
        } else {
            return json_encode(["ERROR"]);
        }
    }
	
	public function new_enquiry($form_data) {

		return true;
	}
	

}
