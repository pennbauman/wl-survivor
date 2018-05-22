<?php 
	// LOAD: 
	// include $_SERVER["DOCUMENT_ROOT"]."/files/std.php";

	$conn = new mysqli("localhost", "valypfnd_admin", "2101143259", "valypfnd_assassins_users");
	
	if (isset($_GET["a"])) {
		$url = $_GET["a"];
	} else {
		$url = "empty";
	}
	$n = "<br/> \n";
?>