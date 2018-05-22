<?php 
	include $_SERVER["DOCUMENT_ROOT"]."/files/std.php";
	$exist = false;
?>
<html>
	<head> 
		<title>Hash</title>
		<link rel="shortcut icon" href="/files/stats_favicon.png"> 
		<link rel="stylesheet" type="text/css" href="/files/backend.css">
	</head>
	<body onload="document.body.style.fontSize = window.innerHeight*0.02; return false;">
		<h1>Hash</h1> <br/><br/>
		<?php
			if (!empty($_POST)) {
				echo "<b>".$_POST["text"]."</b>".$n;
				echo "<h4>".hash("md5", $_POST["text"])."</h4><br/>".$n;
			}
			echo "<form action='/sys/hash/' method='post'>";
			echo "Text: <br/> <input type='text' name='text'><br>";
			echo "<br/>";
			echo "<input type='submit' value='Hash'>";
			echo "</form>";
		?> 
		<br/><br/> <a href="/">Home</a> - <a href="/sys/">System</a> <br/><br/><br/>
	</body>
</html>