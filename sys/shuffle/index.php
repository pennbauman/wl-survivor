<?php 
	include $_SERVER["DOCUMENT_ROOT"]."/files/std.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/auth.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/game_data.php";

	//include $_SERVER["DOCUMENT_ROOT"]."/files/func.php";
	$display = "";
	if (!empty($_POST)) {
		if (hash("md5", $_POST["password"]) == "<staff-password-md5-hash>") {
			$userList = "";
			$data = $conn->query("SELECT phoneNumber, alive FROM users");
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
			$display = "Shuffled";
		} else {
			$display = "wrong password";
		}
	}
?>
<html>
	<head> 
		<title>Shuffle</title>
		<link rel="shortcut icon" href="/files/stats_favicon.png"> 
		<link rel="stylesheet" type="text/css" href="/files/backend.css">
	</head>
	<body onload="document.body.style.fontSize = window.innerHeight*0.02; return false;">
		<h1>Shuffle</h1><br/><br/>
		<form action='/sys/shuffle/' method='post'>
			Password: <br/> <input type='password' name='password'> <br/><br/>
			<input type='submit' value='Shuffle'>
		</form>
		<?php
			echo "<p>".$display."</p>";
		?>
		<br/><br/> <a href="/">Home</a> - <a href="/sys/">System</a> <br/><br/><br/>
	</body>
</html>