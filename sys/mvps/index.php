<?php 
	include $_SERVER["DOCUMENT_ROOT"]."/files/std.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/auth.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/game_data.php";
	
	$error = "";
	$table = "";
	$listed = 0;
	$currentCount = 0;
	$amounts = [0,0,0,0,0,0,0,0,0,0,0,0,0,0];
	
	while ($listed < $playerSum) {
		$data = $conn->query("SELECT name, killCount FROM users");
		if ($data->num_rows > 0) {
			while($row = $data->fetch_assoc()) {
				if ($row["killCount"] == $currentCount) {
					$table = "<tr><td>".$row["name"]."</td><td>".$row["killCount"]."</td></tr>".$table;
					$listed += 1;
					$amounts[$currentCount] += 1;
				}
			}
		}
		$currentCount += 1;
	}
?>
<html>
	<head> 
		<title>Players</title>
		<link rel="shortcut icon" href="/files/stats_favicon.png"> 
		<link rel="stylesheet" type="text/css" href="/files/backend.css">
	</head>
	<body onload="document.body.style.fontSize = window.innerHeight*0.02; return false;">
		<h1>Players</h1> <br/>
		<p>By Kill Count</p><br/>

		<?php
			echo "<table><tr><th>Name</th><th>Kill Count</th></tr>";
			echo $table;
			echo "</table><br/>";
			for ($q = 0; $q < 14; $q++) {
				echo "<b>".$q."</b>: ".$amounts[$q]."<br/>";
			}
		?> 
		<br/><br/> <a href="/">Home</a> - <a href="/sys/">System</a> <br/><br/><br/>
	</body>
</html>