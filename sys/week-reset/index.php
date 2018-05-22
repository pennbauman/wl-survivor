<?php 
	include $_SERVER["DOCUMENT_ROOT"]."/files/std.php";
	$auth = false;
	if (!empty($_POST) && hash("md5", $_POST["s_password"]) == "<staff-password-md5-hash>") {
		$auth = true;
		$setting = $_POST["setting"];
		if ($setting == "check") {
			$maxKills = 0;
			$MVA = "";
			$data = $conn->query("SELECT phoneNumber, name, weekCount FROM users");
			if ($data->num_rows > 0) {
				while($row = $data->fetch_assoc()) {
			        if ($row["weekCount"] == $maxKills) {
				       	$maxKills = $row["weekCount"];
				       	$MVA = $MVA.$row["name"]." (".$row["phoneNumber"].") ";
				    } else if ($row["weekCount"] > $maxKills) {
				    	$maxKills = $row["weekCount"];
				       	$MVA = $row["name"]." (".$row["phoneNumber"].") ";
				    }
				} 
			} 
		} else if ($setting == "reset") {
			$data = $conn->query("SELECT phoneNumber FROM users");
			if ($data->num_rows > 0) {
				while($row = $data->fetch_assoc()) {
			       $conn->query("UPDATE users SET weekCount=0 WHERE phoneNumber='".$row["phoneNumber"]."'");
				} 
			} 
			header("Location: /sys/");
		}
	}
?>
<html>
	<head> 
		<title>Week Reset</title>
		<link rel="shortcut icon" href="/files/stats_favicon.png"> 
		<link rel="stylesheet" type="text/css" href="/files/backend.css">
	</head>
	<body onload="document.body.style.fontSize = window.innerHeight*0.02; return false;">
		<h1>Week Reset</h1> <br/><br/>

		<?php
			if (!$auth) {
				echo "<form action='/sys/week-reset/' method='post'>";
				echo "<input type='hidden' name='setting' value='check'>";
				echo "Password: <br/> <input type='password' name='s_password'><br><br/>";
				echo "<input type='submit' value='Check'>";
				echo "</form>";
			} else {
				echo "<b>Max Kills: ".$maxKills."</b>".$n;
				echo $MVA."<br/>".$n;
				echo "<form action='/sys/week-reset/' method='post'>";
				echo "<input type='hidden' name='setting' value='reset'>";
				echo "Password: <br/> <input type='password' name='s_password'><br><br/>";
				echo "<input type='submit' value='Reset'>";
				echo "</form>";
			}
			echo "<br/>Today is ".date("l")." and it is ".date("h:ia").$n;
		?> 
		<br/> <a href="/">Home</a> - <a href="/sys/">System</a>
	</body>
</html>