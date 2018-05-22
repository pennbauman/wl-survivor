<?php 
	if (!empty($_POST) && hash("md5", $_POST["s_password"]) == "<staff-password-md5-hash>") {
		include $_SERVER["DOCUMENT_ROOT"]."/files/std.php";
		
		$username = $_POST["number"];
		$update = "UPDATE users SET alive='T' WHERE phoneNumber='".$username."'";
		if ($conn->query($update) == true) {
		    $success = true;
		} else {
		    $success = false;
		}
	} else {
		header("Location: /error/");
	}
?>
<html>
	<head> 
		<title>Confirm</title>
		<link rel="shortcut icon" href="/files/stats_favicon.png"> 
		<link rel="stylesheet" type="text/css" href="/files/backend.css">
	</head>
	<body onload="document.body.style.fontSize = window.innerHeight*0.02; return false;">
		<h1>Confirm</h1> <br/><br/>

		<?php
			if ($success) {
				echo "Confirmation successful. <br/><br/>";
			} else {
				echo "<h4>Error updating. <br/><br/>";
			}
		?> 
		<a href="/">Home</a> - <a href="/sys/">System</a>
	</body>
</html>