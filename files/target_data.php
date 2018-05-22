<?php
	// LOAD: 
	// include $_SERVER["DOCUMENT_ROOT"]."/files/target_data.php";
	// requires /files/auth.php, /files/user_data.php

	if ($auth) {
		$columns = "SELECT phoneNumber, name, lifeCode, target FROM users";
		// Get Target Name
		$data = $conn->query($columns);
		if ($data->num_rows > 0) {
			while($row = $data->fetch_assoc()) {
				if ($row["phoneNumber"] == $target) {
					$targetName = $row["name"];
					$targetCode = $row["lifeCode"];
					$targetTarget = $row["target"];
				}
			}
		}
	} //*/ 
?>