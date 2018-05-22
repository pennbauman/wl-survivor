<?php
	// LOAD: 
	// include $_SERVER["DOCUMENT_ROOT"]."/files/user_data.php";

	if ($auth) {
		$columns = "SELECT phoneNumber, password, name, alive, lifeCode, target, killAttempts, killCount, weekCount, win FROM users";
		$data = $conn->query($columns);
		if ($data->num_rows > 0) {
			while($row = $data->fetch_assoc()) {
				if ($row["phoneNumber"] == $username) {
					$name = $row["name"];
					$alive = ($row["alive"] == "T");
					$lifeCode = $row["lifeCode"];
					$target = $row["target"];
					$killAttempts = $row["killAttempts"];
					$killCount = $row["killCount"];
					$weekCount = $row["weekCount"];
					$win = ($row["win"] == "T");
				}
			}
		}
	} //*/ 
?>