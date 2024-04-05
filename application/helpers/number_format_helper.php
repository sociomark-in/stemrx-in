<?php
function phone_format($str, $group, $occurance, $has_leading_zero = false, $include_leading_zero = false): string
{
	// +918689862375;
	$str = trim($str);

	$number = "";
	if($has_leading_zero){
		$cc = substr($str, 0, 4);
		$str = substr($str, 4);
	} else {
		$cc = substr($str, 0, 3);
		$str = substr($str, 3);
	}
	$chunk = [];
	for ($i = 0; $i <= $occurance; $i++) {
		if ($i == $occurance) {
			$chunk[$i] = substr($str, $i * $group);
		} else {
			$chunk[$i] = substr($str, $i * $group, $group);
		}
	}

	if($include_leading_zero){
		if($has_leading_zero){
			$number = $cc . " " . implode(" ", $chunk);
		} else {
			$number = substr_replace($cc, "0", 1, 0) . " " . implode(" ", $chunk);
		}
	} else {
		$number = $cc . " " . implode(" ", $chunk);
	}
	return $number;
}
