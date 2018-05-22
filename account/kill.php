<?php
	include $_SERVER["DOCUMENT_ROOT"]."/files/std.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/auth.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/kill_time.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/func.php";
	$forward = "";

	if ($auth && !empty($_POST["killCode"])) { //&& !$before) {
		$code = $_POST["killCode"];

		include $_SERVER["DOCUMENT_ROOT"]."/files/user_data.php";
		if (!empty($_POST["target"])) {
			$target = $_POST["target"];
			$target = teleNumFormat($target);
		}
		include $_SERVER["DOCUMENT_ROOT"]."/files/target_data.php";

		$data = $conn->query("SELECT phoneNumber, killHistory FROM users");
		if ($data->num_rows > 0) {
			while($row = $data->fetch_assoc()) {
				if ($row["phoneNumber"] == $username) {
					$record = $row["killHistory"];
				}
			}
		}

		if ($code == $targetCode && $killAttempts < 5 && $killTime) {
			if ($username == $targetTarget) {
				// set target dead
				$conn->query("UPDATE users SET alive='F' WHERE phoneNumber='".$target."'");
				// WIN!
				$conn->query("UPDATE users SET win='T' WHERE phoneNumber='".$username."'");
				// WIN!
				$conn->query("UPDATE gameData SET win='".$username."' WHERE game=1");
				// count ++
				$conn->query("UPDATE users SET killCount=".($killCount + 1)." WHERE phoneNumber='".$username."'");
				// week count ++
				$conn->query("UPDATE users SET weekCount=".($weekCount + 1)." WHERE phoneNumber='".$username."'");
				// update record
				$conn->query("UPDATE users SET killHistory='".$record.$target.", ' WHERE phoneNumber='".$username."'");
				$forward = "/account/?a=kwin";
			} else {
				// set target dead
				$conn->query("UPDATE users SET alive='F' WHERE phoneNumber='".$target."'");
				// remove target's target
				$conn->query("UPDATE users SET target='' WHERE phoneNumber='".$target."'");
				// update target
				$conn->query("UPDATE users SET target=".$targetTarget." WHERE phoneNumber='".$username."'");
				// update attempts
				$conn->query("UPDATE users SET killAttempts=0 WHERE phoneNumber='".$username."'");
				// count ++
				$conn->query("UPDATE users SET killCount=".($killCount + 1)." WHERE phoneNumber='".$username."'");
				// week count ++
				$conn->query("UPDATE users SET weekCount=".($weekCount + 1)." WHERE phoneNumber='".$username."'");
				// update record
				$conn->query("UPDATE users SET killHistory='".$record.$target.", ' WHERE phoneNumber='".$username."'");

				// add to today's dead
				$lists = $conn->query("SELECT * FROM dailyKills");
				$listExists = false;
				if ($lists->num_rows > 0) {
					while($row = $lists->fetch_assoc()) {
						if ($row["day"] == date("Y-m-d")) {
							$listExists = true;
							$deadList = $row["dead"];
						}
					}
				}
				if ($listExists) {
					$conn->query("UPDATE dailyKills SET dead='".$deadList.$targetName.", ' WHERE day='".date("Y-m-d")."'");
				} else {
					$conn->query("INSERT INTO dailyKills (day, dead) VALUES ('".date("Y-m-d")."', '".$targetName.", ')");
				}

				$forward = "/account/?a=ksuccess";
			}
		} else {
			$conn->query("UPDATE users SET killAttempts=".($killAttempts + 1)." WHERE phoneNumber='".$username."'");
			$forward = "/account/?a=kfail";
		}
	}
	header("Location: ".$forward);
?>