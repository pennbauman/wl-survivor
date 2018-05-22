<?php 
	if (isset($_GET["a"])) {
		$url = $_GET["a"];
	} else {
		$url = "empty";
	}

	setcookie("username", "", time() - 100, "/");
	setcookie("password", "", time() - 100, "/");

	if ($url == "empty") {
		$redirect = "/";
	} else {
		$redirect = "/".$url."/";
	}
	header("Location: ".$redirect."");
?>