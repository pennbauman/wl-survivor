<?php
	$safetyDay = date("Y-m-");
	if (date("G") > 18) {
		$d = (date("d") + 1);
		if ($d < 10) {
			$d = "0".$d;
		}
		$safetyDay = $safetyDay.$d;
	} else {
		$safetyDay = $safetyDay.(date("d"));
	}
	if (date("G") > 18) {
		$safetyDayDesc = "Tomorrow";
	} else {
		$safetyDayDesc = "Today";
	}
?>