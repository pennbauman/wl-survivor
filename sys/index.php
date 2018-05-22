<?php 
	include $_SERVER["DOCUMENT_ROOT"]."/files/std.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/auth.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/game_data.php";
?>
<html>
	<head> 
		<title>System</title>
		<link rel="shortcut icon" href="/files/stats_favicon.png"> 
		<link rel="stylesheet" type="text/css" href="/files/backend.css">
	</head>
	<body onload="document.body.style.fontSize = window.innerHeight*0.02; return false;">
		<h1>System</h1> <br/><br/>
		<?php
			echo "<form action='/sys/staff/' method='post'>";
		?>
			Number: <br/> <input type="text" name="number"> <br/><br/>
			Password: <br/> <input type='password' name='s_password'> <br/><br/>
			<input type='submit' value='Submit'>
		</form>
		<?php 
			echo "<br/>Today: ".date("Y-m-d");
			echo "<br/>Start: ".date("Y-m-d", $start);
			echo "<br/> Players: ".$playerSum;
			if ($before) {
				echo "<br/> Confirmed: ".$aliveSum."<br/>";	
			} else {
				echo "<br/> Remaining: ".$aliveSum."<br/>";	
			}
		?>
		<br/><br/> <a href="/">Home</a> - <a href="/sys/players/">Players</a>
	</body>
</html>