<?php
	function boolToStr($bool) {
		if ($bool == true) {
			return "true";
		} else if ($bool == false) {
			return "false";
		} else {
			return "false";
		}
	}
	function teleNumFormat($number) {
		for ($q = 0; $q < strlen($number); $q++) {
			if (substr($number, $q, 1) == "-" || substr($number, $q, 1) == " ") {
				$number = substr($number, 0, $q).substr($number, $q+1, strlen($number)-$q-1);
				$q--;
			}	
		} 
		return $number;
	}
?>