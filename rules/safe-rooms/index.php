<?php
	include $_SERVER["DOCUMENT_ROOT"]."/files/std.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/auth.php";

	$error = "";
	if (!empty($_POST)) {
		$teacher = $_POST["teacher"];
		$room = $_POST["room"];
		//$desc = $_POST["desc"];

		if (!is_numeric($room) || $teacher == "" || $room == "") {
			$error = "Please fill out the form properly.";
		} else {
			$conn->query("INSERT INTO safeRooms (teacher, room) VALUES ('".$teacher."', '".$room."')");
			header("Location: /rules/");
		}
	}
?>
<html>
	<head>
		<title>New Safe Room - WL Survivor</title>
		<?php
			include $_SERVER["DOCUMENT_ROOT"]."/files/head.php";
		?>
	</head>
	<body onload="format()">
		<?php
			$urlEnd = "";
			include $_SERVER["DOCUMENT_ROOT"]."/files/header.php";
		?>
		<div class = "bottomHalf">
			<div class = "tabpage" id = "home">
				<h1>New Safe Room</h1>
				<?php
					echo "<form action='/rules/safe-rooms/' method='post'>";
					echo "<b>Teacher:</b> <br/> <input type='text' name='teacher'><br><br/>";
					echo "<b>Room Number:</b> <br/> <input type='text' name='room'> <br/><br/>";
					//echo "<b>Other Information:</b> <br/> <input type='text' name='desc'> <br/><br/>";
					echo "<h4>".$error."</h4> <br/><br/>";
					echo "<input type='submit' value='Submit'>";
					echo "</form>";
				?>
			</div>
		</div>
	</body>
</html>