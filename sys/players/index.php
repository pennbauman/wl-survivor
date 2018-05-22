<?php 
	include $_SERVER["DOCUMENT_ROOT"]."/files/std.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/auth.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/game_data.php";
	$error = "";
	$auth = false;
	if (!empty($_POST)) {
		if (hash("md5", $_POST["s_password"]) == "<staff-password-md5-hash>") {
			
			$auth = true;
			$table = "";
			$table2 = "";

			$data = $conn->query("SELECT phoneNumber, name, alive, killCount, weekCount FROM users");
			if ($data->num_rows > 0) {
				while($row = $data->fetch_assoc()) {
					$line = "";
					$line = $line."<tr><td>".$row["phoneNumber"]."</td><td>".$row["name"]."</td>";
					if ($before) {
						if ($row["alive"] == "F") {
							$line = $line."<td class='highlight'>".$row["alive"]."</td>";	
						} else {
							$line = $line."<td>".$row["alive"]."</td>";
						}
			        } else {
			        	if ($row["alive"] == "F") {
							$line = $line."<td>".$row["alive"]."</td>";
						} else {
							$line = $line."<td class='highlight'>".$row["alive"]."</td>";
						}
						$line = $line."<td>".$row["weekCount"]." / ".$row["killCount"]."</td>";
			        }
			        $line = $line."</tr>";
			        if ($row["alive"] == "T") {
			        	$table = $table.$line;
			        } else {
			        	$table2 = $table2.$line;
			        }
				}
			}
			$table = $table.$table2;

			$killedToday = "";
			$data = $conn->query("SELECT * FROM dailyKills");
			if ($data->num_rows > 0) {
				while($row = $data->fetch_assoc()) {
					if ($row["day"] == date("Y-m-d")) {
						$killedToday = $row["dead"];
					}
				}
			}
		}
	}
?>
<html>
	<head> 
		<title>Players</title>
		<link rel="shortcut icon" href="/files/stats_favicon.png"> 
		<link rel="stylesheet" type="text/css" href="/files/backend.css">
	</head>
	<body onload="document.body.style.fontSize = window.innerHeight*0.02; return false;">
		<h1>Players</h1> <br/><br/>

		<?php
			if ($auth) {
				echo "Total Players: ".$playerSum;
				if ($before) {
					echo "<br/> Total Confirmed: ".$aliveSum."<br/><br/>";	
				} else {
					echo "<br/> Remaining: ".$aliveSum."<br/>";	
				}
				if ($before) {
					echo "<table><tr><th>Number</th><th>Name</th><th>Confirmed</th></tr>";
				} else {
					echo "<table><tr><th>Number</th><th>Name</th><th>Alive</th><th>Kill Count</th></tr>";
				}
				if ($killedToday != "") {
					echo "<br/> Killed Today: ".$killedToday."<br/>";
				}
				echo "<br/>";
				echo $table;
				echo "</table>";
				echo "<br/> Total Players: ".$playerSum;
				if ($before) {
					echo "<br/> Total Confirmed: ".$aliveSum."<br/>";	
				} else {
					echo "<br/> Remaining: ".$aliveSum."<br/>";	
				}
			} else {
				echo "<form action='/sys/players/' method='post'>";
				//echo "<input type='hidden' name='number' value='".$username."'>";
				echo "Password: <br/> <input type='password' name='s_password'><br>";
				echo $error."<br/>";
				echo "<input type='submit' value='Submit'>";
				echo "</form>";
				echo "<br/> Total Players: ".$playerSum;
				if ($before) {
					echo "<br/> Total Confirmed: ".$aliveSum;	
				} else {
					echo "<br/> Remaining: ".$aliveSum."<br/>";	
				}
			}
		?> 
		<br/><br/> <a href="/">Home</a> - <a href="/sys/">System</a> <br/><br/><br/>
	</body>
</html>