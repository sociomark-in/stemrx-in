<?php

class ApplicationModel extends CI_Model
{
	public $active_table;
	public function __construct()
	{
		parent::__construct();
		$this->active_table = (in_array('registrations', $this->db->list_tables()) ? 'registrations' : '');
	}

	public function get($columns = null, $where = null, $table = 'ldm_vcdojtxev66laxb1_tables')
	{
		if (null !== $columns && count($columns) > 0) {
			$this->db->select($columns);
		}
		if (null !== $where && count($where) > 0) {
			$this->db->where($where);
		}
		return json_encode($this->db->get($table)->result_array());
	}

	public function get_tables($tables)
	{
		$data = [];
		foreach ($tables as $key => $table) {
			if (in_array($table, $this->db->list_tables())) {
				array_push($data, $table);
			}
		}
		return $data;
	}

	public function is_linked()
	{
		$flag = false;
		foreach ($this->active_tables as $key => $a_table) {
			if ($a_table == $table) {
				$flag = true;
			}
		}
	}


	public function load($item = "tables")
	{
		$results = [];
		switch ($item) {
			case 'settings':
				# code...
				break;

			default:
				$tables = json_decode($this->get(['name', 'table']), true);
				foreach ($tables as $key => $item) {
					array_push($results, trim($item["table"]));
				}
				break;
		}
		return json_encode(["tables" => $results]);
	}
}
