<?php
	$exemptionText = "";
	if ($page == "account") {
		if ($auth) {
			$exceptions = $conn->query("SELECT * FROM safetyExceptions");
			$targetExempt = false;
			$targetNewSafety = "";
			if ($exceptions->num_rows > 0) {
				while($row = $exceptions->fetch_assoc()) {
					if ($row["player"] == $target && $row["day"] == $safetyDay) {
						$targetExempt = true;
						$targetNewSafety = $row["newSafety"];
					}
				}
			}
			if ($targetExempt) {
				$exemptionText = "<p><b>Your Target Has The Following Safety Modification:</b><br/>".$targetNewSafety."</p>";
			}
		} //*/
	} else {
		if ($auth) {
			$exceptions = $conn->query("SELECT * FROM safetyExceptions");
			$targetExempt = false;
			$targetNewSafety = "";
			if ($exceptions->num_rows > 0) {
				while($row = $exceptions->fetch_assoc()) {
					if ($row["player"] == $target && $row["day"] == $safetyDay) {
						$targetExempt = true;
						$targetNewSafety = $row["newSafety"];
					}
				}
			}
			if ($targetExempt) {
				$exemptionText = "<p><b>Your Target Has The Following Safety Modification:</b><br/>".$targetNewSafety."</p>";
			}
		} else {
			$players = $conn->query("SELECT player, day FROM safetyExceptions");
			$playerList = "";
			if ($players->num_rows > 0) {
				while($row = $players->fetch_assoc()) {
					if ($row["day"] == $safetyDay) {
						$playerList = $playerList.$row["player"].",";
					}
				}
			}
			if ($playerList == "") {
				$exemptPlayers = "";
			} else {
				$playerList = substr($playerList, 0, -1);
				$playerList = preg_split("/,/", $playerList);
				if (count($playerList) == 1) {
					$exemptPlayers = "<p><b>The Following Player Has a Modified Safety:</b><br/>";
				} else {
					$exemptPlayers = "<p><b>The Following Players Have a Modified Safety:</b><br/>";
				}
				$users = $conn->query("SELECT phoneNumber, name FROM users");
				if ($users->num_rows > 0) {
					while($row = $users->fetch_assoc()) {
						$exempt = false;
						for ($q = 0; $q < count($playerList); $q++) {
							if ($playerList[$q] == $row["phoneNumber"]) {
								$exempt = true;
							}
						}
						if ($exempt) {
							$exemptPlayers = $exemptPlayers.$row["name"].", ";
						}
					}
				}
				$exemptPlayers = substr($exemptPlayers, 0, -2);
				$exemptPlayers = $exemptPlayers."</p>";
			} //*/
			/*for ($q = 0; $q < count($playerList); $q++) {
				$exemptionText = $exemptionText.$playerList[$q];
			} //*/
			//$exemptionText = count($playerList);
			$exemptionText = $exemptPlayers;
		}
	}
/*
// SAFETY INFO
	if ($auth) {
	// Target Exception
		
		echo "<h5>".$targetExempt."</h5>";
		echo "<p>".$targetNewSafety."</p>";
	// User Exception
		$exceptions = $conn->query("SELECT * FROM safetyExceptions");
		$userExempt = false;
		if ($exceptions->num_rows > 0) {
			while($row = $exceptions->fetch_assoc()) {
				if ($row["player"] == $username && $row["day"] == $safetyDay) {
					$userExempt = true;
					$userNewSafety = $row["newSafety"];
				}
			}
		}
		echo "<h5>".$userExempt."</h5>";
		echo "<p>".$userNewSafety."</p>";
	} else {
		
	}
} //*/
?>