<?php 
	// LOAD: 
	// include $_SERVER["DOCUMENT_ROOT"]."/files/game_data.php";

	// Count Players
	$columns = "SELECT phoneNumber, alive FROM users";
	$data = $conn->query($columns);
	$playerSum = 0;
	$aliveSum = 0;
	if ($data->num_rows > 0) {
		while($row = $data->fetch_assoc()) {
	        $playerSum++;
	        if ($row["alive"] == "T") {
	        	$aliveSum++;
			}
	   	} //*/
	} //*
	// Get Start Date
	$columns = "SELECT game, startDate, winner FROM gameData";
	$gameData = $conn->query($columns);
	if ($gameData->num_rows > 0) {
		while($row = $gameData->fetch_assoc()) {
			if ($row["game"] == 1) {
				$start = $row["startDate"];
				$winner = $row["winner"];
			}
		
		}
	}
	$start = strtotime($start);
?>