<?php

use function PHPSTORM_META\map;

class TherapeuticsModel extends CI_Model
{
	public $therapeutics = [
		"Hyperbaric Oxygen Therapy",
		"Laser Therapy",
		"Aquatic Therapy",
		"Ozone Therap",
		"Detoxification Therapy",
		"Energy Therapy",
		"Very Intense Pressure Pulse (VIPP)",
		"Electromagnetic Field",
		"Vibration Therapy/ Resonance or Rhythm Therapy",
		"Brain Stimulation",
		"Stem Therapy",
		"Faradic and Galvanic Stimulation",
		"Cell Regulation",
		"TENS Transcutaneous Electrical Nerve Stimulation",
		"Non-Surgical Spinal Decompression Therapy",
		"Magnetic Resonance Therapy (MRT)",
		"Infrared Sauna",
		"Brain Retrainer",
		"Trans Corneal Electrical Stimulation",
		"Cryotherapy",
		"Transcranial Optic Stimulation",
		"Robotic Gloves",
		"Treadmill with Motorized Exoskeleton",
		"FMT- (Fecal Microbiota Transplant)",
		"Treadmill with Harness"
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
					$item['icon'] = "procedure-" . $key  . ".png";
					array_push($result, $item);
					break;
					/* Custom URL */
				case 'value':
					$link = trim(str_replace([" ", "(", ")", "/"], ["-", ""], strtolower($procedure)));
					$item['text'] = $procedure;
					$item['link'] = $link;
					$item['icon'] = "procedure-" . $key  . ".png";
					array_push($result, $item);
					break;
			}
		}
		return json_encode($result);
	}
}
