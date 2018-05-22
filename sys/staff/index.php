<?php 
	if (!empty($_POST) && hash("md5", $_POST["s_password"]) == "<staff-password-md5-hash>") {
		include $_SERVER["DOCUMENT_ROOT"]."/files/std.php";
		
		$username = $_POST["number"];
		$data = $conn->query("SELECT phoneNumber FROM users");
		$exist = false;
		if ($data->num_rows > 0) {
			while($row = $data->fetch_assoc()) {
		        if ($row["phoneNumber"] == $username) {
			       	$exist = true;
			    } 
			} 
		} 
		if ($exist) {
			include $_SERVER["DOCUMENT_ROOT"]."/files/auth.php";
			$auth = true;
			$username = $_POST["number"];
			include $_SERVER["DOCUMENT_ROOT"]."/files/user_data.php";
			include $_SERVER["DOCUMENT_ROOT"]."/files/game_data.php";
		}
	} else {
		header("Location: /error/");
	}
?>
<html>
	<head> 
		<title>Staff System</title>
		<link rel="shortcut icon" href="/files/stats_favicon.png"> 
		<link rel="stylesheet" type="text/css" href="/files/backend.css">
	</head>
	<body onload="document.body.style.fontSize = window.innerHeight*0.02; return false;">
		<h1>Staff System</h1> <br/><br/>

		<?php
			if ($exist) {
				echo "<b>Phone Number:</b> ".$username."<br/>";
				echo "<b>Name:</b> ".$name."<br/>";
				if ($before) {
					if ($alive) {
						echo "Account confirmed. <br/>";
					} else {
						echo "Account not confirmed. <br/><br/>";
						echo "<form action='/sys/confirm/' method='post'>";
						echo "<input type='hidden' name='number' value='".$username."'>";
						echo "Password: <br/> <input type='password' name='s_password'><br><br/>";
						echo "<input type='submit' value='Confirm'>";
						echo "</form>";
					}
				} else {
					echo "<b>Kill Code:</b> ".$lifeCode."<br/>";
				}
			} else {
				echo "Account ".$username." does not exist. <br/>";
			}
		?> 
		<br/> <a href="/">Home</a> - <a href="/sys/">System</a>
	</body>
</html>