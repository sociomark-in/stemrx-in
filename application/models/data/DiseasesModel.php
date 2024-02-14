<?php

class DiseasesModel extends CI_Model
{
	public $therapeutics = [
		"Neural",
		"Developmental Clinic",
		"New Hope Clinic",
		"Couple Clinic (New Hope)",
		"Pain Clinic",
		"Eye Clinic",
		"Metabolic Diseases",
		"Cosmetic",
		"Dental Treatment",
		"Regenerative Clinic",
		"Dermatology",
		"Chromosomal Disorders",
		"Surgical Procedure",
	];
	public $therapeutics_detail = [
		[
			'name' => "Neural",
		],
		[
			'name' => "Developmental Clinic",
		],
		[
			'name' => "New Hope Clinic",
		],
		[
			'name' => "Couple Clinic (New Hope)",
		],
		[
			'name' => "Pain Clinic",
		],
		[
			'name' => "Eye Clinic",
		],
		[
			'name' => "Metabolic Diseases",
		],
		[
			'name' => "Cosmetic",
		],
		[
			'name' => "Dental Treatment",
		],
		[
			'name' => "Regenerative Clinic",
		],
		[
			'name' => "Dermatology",
		],
		[
			'name' => "Chromosomal Disorders",
		],
		[
			'name' => "Surgical Procedure",
		],

	];
	public function get()
	{
		$result = [];
		foreach ($this->therapeutics as $key => $procedure) {
			switch ($procedure) {
				default:
					$link = trim(str_replace([" ", "(", ")", "/"], ["-", ""], strtolower($procedure)));
					$item['text'] = $procedure;
					$item['link'] = $link;
					$item['view'] = "conditions-group";
					$item['icon'] = "disease-" . $key  . ".png";
					array_push($result, $item);
					break;
					/* Custom URL */
				case 'Neural':
					$link = trim(str_replace([" ", "(", ")", "/"], ["-", ""], strtolower($procedure)));
					$item['text'] = $procedure;
					$item['link'] = $link;
					$item['view'] = "neural";
					$item['icon'] = "disease-" . $key  . ".png";
					array_push($result, $item);
					break;
			}
		}
		return json_encode($result);
	}
}
