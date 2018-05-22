<?php 
	// LOAD: 
	// include $_SERVER["DOCUMENT_ROOT"]."/files/auth.php";

	// Authorize
	$auth = false;
	if(isset($_COOKIE["username"]) && isset($_COOKIE["password"])) {
		$username = $_COOKIE["username"];
		$password = $_COOKIE["password"];

		$columns = "SELECT phoneNumber, password FROM users";
		$data = $conn->query($columns);

		if ($data->num_rows > 0) {
			while($row = $data->fetch_assoc()) {
		        if ($row["phoneNumber"] == $username && $row["password"] == $password) {
		       		$auth = true; 
		       		setcookie("username", $username, time() + (60 * 30), "/");
					setcookie("password", $password, time() + (60 * 30), "/");
		       	} //*/
		   	} //*/
		} //*
	}
	// Check Date
	$gameData = $conn->query("SELECT * FROM gameData");
	if ($gameData->num_rows > 0) {
		while($row = $gameData->fetch_assoc()) {
			if ($row["game"] == 1) {
				$before = ($row["beforeGame"] == "T");
			}
		
		}
	}	
?>