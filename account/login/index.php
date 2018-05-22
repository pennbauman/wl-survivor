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
	$error = "";
	if (!empty($_POST)) {
		$username = $_POST["username"];
		$password = $_POST["password"];

		for ($q = 0; $q < strlen($username); $q++) {
			if (substr($username, $q, 1) == "-" || substr($username, $q, 1) == " ") {
				$username = substr($username, 0, $q).substr($username, $q+1, strlen($username)-$q-1);
				$q--;
			}
		} //*/
		$password = hash("md5", $password);

		$columns = "SELECT phoneNumber, password FROM users";
		$data = $conn->query($columns);

		$auth = false;
		if ($data->num_rows > 0) {
			while($row = $data->fetch_assoc()) {
		        if ($row["phoneNumber"] == $username && $row["password"] == $password) {
		       		$auth = true; 
		       	} //*/
		   	} //*/
		} //
		if ($auth) { //Auth
			setcookie("username", $username, time() + (60 * 30), "/");
			setcookie("password", $password, time() + (60 * 30), "/");
			//$redirect = $redirect."?a=".$username;
			header("Location: ".$redirect);
		} else {
			$prev_username = $username; 
			$error = "Incorrect login.";
		}
	}
?>
<html>
	<head>
		<title>Login - WL Survivor</title>
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
				<h1>Login</h1>
				<?php
					if ($url == "empty") {
						$url_end = "";
					} else {
						$url_end = "?a=".$url;
					}
					echo "<form action='/account/login/".$url_end."' method='post'>";
					echo "<b>Phone Number:</b> <br/> <input type='text' name='username' value='".$prev_username."'><br><br/>";
					echo "<b>Password:</b> <br/> <input type='password' name='password'> <br/><br/>";
					echo "<h4>".$error."</h4> <br/><br/>";
					echo "<input type='submit' value='Login'>";
					echo "</form>";
				?>
			</div>
		</div>
	</body>
</html>