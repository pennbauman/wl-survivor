<?php
	if ($before) {
		$killTime = false;
	//} else if (date("N") > 5) {
	} else if (date("G") < 6) {
		$killTime = false;
	} else if (date("G") > 17) {
		$killTime = false;
	} else if (date("n") == 4 && date("j") == 9) {
		$killTime = false;
	} else {
		$killTime = true;
	}
?>