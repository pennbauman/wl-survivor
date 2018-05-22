<?php 
	// LOAD: 
	// include $_SERVER["DOCUMENT_ROOT"]."/files/std.php";

	$conn = new mysqli("<host>", "<username>", "<password>", "<database>");
	
	if (isset($_GET["a"])) {
		$url = $_GET["a"];
	} else {
		$url = "empty";
	}
	$n = "<br/> \n";
?>