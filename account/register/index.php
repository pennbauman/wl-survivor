<?php
	include $_SERVER["DOCUMENT_ROOT"]."/files/std.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/auth.php";
	if ($url == "empty") {
		$redirect = "/";
	} else {
		$redirect = "/".$url."/";
	}
	if ($auth) {
		header("Location: ".$redirect);
	}
	
	$prev_username = "";
	$prev_name = "";
	$username_error = "";
	$name_error = "";
	$password_error = "";
	// Check Data

	$gameData = $conn->query("SELECT game, startDate, winner FROM gameData");
	if ($gameData->num_rows > 0) {
		while($row = $gameData->fetch_assoc()) {
			if ($row["game"] == 1) {
				$start = $row["startDate"];
			}
		
		}
	}

	if (!empty($_POST) && $before) {
		$username = $_POST["username"];
		$name = $_POST["name"];
		$password = $_POST["password"];
		$password2 = $_POST["password2"];
		$prev_username = $username;
		$prev_name = $name;
	// Check Username
		for ($q = 0; $q < strlen($username); $q++) {
			if (substr($username, $q, 1) == "-" || substr($username, $q, 1) == " ") {
				$username = substr($username, 0, $q).substr($username, $q+1, strlen($username)-$q-1);
				$q--;
			}
			if (!is_numeric(substr($username, $q, 1))) {
				$username_error = "Your phone number should be a number.";
			}  //*/
		} //*/
		if (strlen($username) != 10 && $username_error == "") {
			$username_error = "Your phone number should be 10 digits.";
		} //*/
	// Check Name
		if (strlen($name) < 4) {
			$name_error = "Are you sure that's your name?";
		}
		for ($q = 0; $q < strlen($name); $q++) {
			if (is_numeric(substr($name, $q, 1))) {
				$name_error = "Are you sure that's your name?";
			}
		}
		$space = false;
		for ($q = 0; $q < strlen($name); $q++) {
			if (substr($name, $q, 1) == " ") {
				$space = true;
			}
		}
		if (!$space && $name_error == "") {
			$name_error = "Please enter both your first and last name.";
		} //*/
	// Check Password
		if (strlen($password) < 6 || strlen($password) > 20) {
			$password_error = "Your password should be between 6 and 20 character in length.";
		}
		if ($password != $password2 && $password_error == "") {
			$password_error = "Your passwords don't match.";
		}
	// Database Check
		if ($username_error == "" && $name_error =="" && $password_error == "") {
			// Check Uniqueness
			$columns = "SELECT phoneNumber, name FROM users";
			$data = $conn->query($columns);

			if ($data->num_rows > 0) {
				while($row = $data->fetch_assoc()) {
					if ($row["phoneNumber"] == $username) {
						$username_error = "This phone number is already in use.";
					}
					if (strtolower($row["name"]) == strtolower($name)) {
						$name_error = "You appear to already be signed up.";
					}
				}
			}
			// Add to DataBase
			if ($username_error == "" && $name_error =="") {
				$lifeCode = strval(rand(0,999999));
				while (strlen($lifeCode) < 6) {
					$lifeCode = "0".$lifeCode;
				}
				$password = hash("md5", $password);
				$new = "INSERT INTO users (phoneNumber, password, name, lifeCode) VALUES ('".$username."', '".$password."', '".$name."' , '".$lifeCode."')";
				// Set New Data
				if ($conn->query($new) == true) {
					// Redirect Page
					setcookie("username", $username, time() + (60 * 30), "/");
					setcookie("password", $password, time() + (60 * 30), "/");
					header("Location: /account/");
				} else {
					$password_error = "An unknown error has occured in creating your account. Please try again and if the error persists contact Penn Bauman.";
				}
			}
		}
	}
?>
<html>
	<head>
		<title>Register - WL Survivor</title>
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
				<h1>Register</h1>
				<?php
					if ($before) {
						echo "<form action='/account/register/' method='post'>";
						echo "<b>Phone Number:</b> <br/> <input type='text' name='username' value='".$prev_username."' placeholder='000-000-0000'><br>";
						echo "<h4>".$username_error."</h4> <br/><br/>";
						echo "<b>Full Name:</b> <br/> <input type='text' name='name' value='".$prev_name."'><br>";
						echo "<h4>".$name_error."</h4> <br/><br/>";
						echo "<b>Password:</b> <br/> <input type='password' name='password'><br>";
						echo "<br/> <b>Confirm Password:</b> <br/> <input type='password' name='password2'><br>";
						echo "<h4>".$password_error."</h4> <br/> <br/>";
						echo "<input type='submit' value='Register'>";
						echo "</form>";
					} else {
						echo "<h1>It is too late to register at this time</h1> <br/><br/> <a href='/'>Home</a>";
					}
				?>
			</div>
		</div>
	</body>
</html>