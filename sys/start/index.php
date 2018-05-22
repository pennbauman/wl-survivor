<?php 
	include $_SERVER["DOCUMENT_ROOT"]."/files/std.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/auth.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/game_data.php";

	//include $_SERVER["DOCUMENT_ROOT"]."/files/func.php";

	$today = (date("Y-m-d") == date("Y-m-d", $start));
	$hour = (date("G") >= 18);
	$time = ($today && $hour && $before);
	$success = "<h4>ERROR</h4>";

	if (true) {
		$conn->query("DELETE FROM users WHERE alive='F'");

		$userList = "";
		$columns = "SELECT phoneNumber, alive FROM users";
		$data = $conn->query($columns);
		if ($data->num_rows > 0) {
			while($row = $data->fetch_assoc()) {
				if ($row["alive"] == "T") {
					$userList = $userList.",".$row["phoneNumber"];
				}
			}
		}
		$userList = substr($userList, 1);
		$userList = preg_split("/,/", $userList);
		shuffle($userList);
		$conn->query("UPDATE users SET target=".$userList[0]." WHERE phoneNumber='".$userList[count($userList)-1]."'");
		for ($q = 0; $q < count($userList)-1; $q++) {
			$conn->query("UPDATE users SET target=".$userList[$q+1]." WHERE phoneNumber='".$userList[$q]."'");
		} //*/
		$conn->query("UPDATE gameData SET beforeGame='F' WHERE game=1");
		$success = "Game Successfully Started. ";
	} //*/
?>
<html>
	<head> 
		<title>Start</title>
		<link rel="shortcut icon" href="/files/stats_favicon.png"> 
		<link rel="stylesheet" type="text/css" href="/files/backend.css">
	</head>
	<body onload="document.body.style.fontSize = window.innerHeight*0.02; return false;">
		<h1>Start</h1><br/><br/>
		<?php
			echo $success;
		?>
	</body>
</html>