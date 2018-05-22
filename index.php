<?php
	include $_SERVER["DOCUMENT_ROOT"]."/files/std.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/auth.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/user_data.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/game_data.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/safety_day.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/general_safety.php";
	$page = "home";
	include $_SERVER["DOCUMENT_ROOT"]."/files/safety_exemptions.php";

	//$before = false;
?>
<html>
	<head>
		<title>WL Survivor</title>
		<?php
			include $_SERVER["DOCUMENT_ROOT"]."/files/head.php";
		?>
		<script src="/files/tickertape.js"></script>
	</head>
	<body onmousemove="hiddenThing(event)" onload = "format()">
		<?php
			$urlEnd = "";
			include $_SERVER["DOCUMENT_ROOT"]."/files/header.php";
		?>
		<div class = "bottomHalf">

			<div class = "tabpage" id = "home">
				<h1> Welcome to 2018 Survivor <br/><span style="font-size:.5em;font-style:italic;">Formerly known as Assassins.</span></h1>
				
				<?php
					if ($before) {
						echo "<p>Dear W-L Senior Class, <br/><span style='line-height:0.5em;''><br/></span> In light of recent events, the W-L administration have requested we change the name of \"assassins.\" Together, we agreed that \"survivor\" will be the new name. We also encourage you to refer to the game as \"survivor\" at school. <br/><span style='line-height:0.5em;'><br/></span> By no means does this affect this year's game. You can still register at our website and invite your friends to play. </p>";
						echo "<span style='text-align:center'><p>The game starts on ".date("l, F jS", $start)."</p>";
						if ($playerSum > 20) {
							echo "<p>".$playerSum." players have already signed up; you could win up to $".($playerSum*5)."</p>";
						}
						echo "<br/><br/><br/><br/>";
						if ($auth) {
							if ($alive) {
								echo "<p>Remember to sign up for the Remind group by texting @wlassassin to 81010 if you haven't yet. You can also check out our Instragram <a href='https://www.instagram.com/wlsurvivor2018'>@wlsurvivor2018</a>.</p>";
							} else {
								echo "<h2 class = 'ruletitle'>You Need to Confirm Your Account</h2>";
								echo "<p>You must confirm your account before ".date("l, F jS", $start)." or your account will be deleted and you will not be able to play. </p>";
								echo "<p>Your account will be confirmed when you give the $5 entrance fee to any game master and show them your student ID (StudentVue is a valid ID). Once this process is complete your account should show up as \"confirmed\" on your account page. If you have paid and your account does not show up as confirmed please contact us at <a href='mailto:wlassassins2k18@gmail.com?Subject=Unconfirmed%20Account'>wlassassins2k18@gmail.com</a>. If you don't know where or when to find a game master check the table below. </p></span>";
								include $_SERVER["DOCUMENT_ROOT"]."/files/confirm_info.php";
							}
							echo "</span>";
						} else {
							echo "</span>";
							echo "<h2 style='text-align:center'>Don't have an account yet? Register.</h2> <br/>";
							echo "<form action='/account/register/' method='post'>";
							echo "<b>Phone Number:</b> <br/> <input type='text' name='username' placeholder='000-000-0000'><br>";
							echo "<h4></h4> <br/><br/>";
							echo "<b>Full Name:</b> <br/> <input type='text' name='name' value=''><br>";
							echo "<h4></h4> <br/><br/>";
							echo "<b>Password:</b> <br/> <input type='password' name='password'><br>";
							echo "<br/> <b>Confirm Password:</b> <br/> <input type='password' name='password2'><br>";
							echo "<h4></h4> <br/> <br/>";
							echo "<input type='submit' value='Register'>";
							echo "</form>";
						}
					} else {
						echo "<span style='text-align:center'>";
						if ($winner == "") {
							//echo $safetyDay;
							if ($safety == "") {

							} else {
								echo "<h3>";
								if ($purge) {
									echo $safetyDayDesc." is a Purge Day.";
								} else {
									echo $safetyDayDesc."'s safety is: <br/>".$safety;
								}
								echo "</h3>";
								echo $safetyVisual;
								echo "<p>".$safetyDesc."</p>";
								echo $exemptionText;
							}
							echo "<p>There are ".$aliveSum." players remaining.</p>";
						} else {
							echo "<p>The game is over! <br/>Livia and Jackie are spliting the winnings.</p>";
							//$target = $winner;
							//$auth = true;
							//include $_SERVER["DOCUMENT_ROOT"]."/files/target_data.php";
							//echo $target." has won!";
						}
						echo "</span>";

						$lists = $conn->query("SELECT * FROM dailyKills");
						$deadList = "";
						if ($lists->num_rows > 0) {
							while($row = $lists->fetch_assoc()) {
								if ($row["day"] == date("Y-m-d")) {
									$deadList = $row["dead"];
								}
							}
						}
						if ($deadList != "") {
							echo "<div class='tickertape'>
								<h4 class='killTitle'>Recent Eliminations:</h4>
								<div id = 'tickertapespace' style='overflow: hidden;'>
									<p id='listOfNames' class='listOfNames'></p>
								</div>
							</div>";

							echo  "<script> var dailyDead = '".$deadList."';\n";
							echo "var names = textToList(dailyDead);";
							echo "showRecentKills(names); </script>";
						}
					}
				?>
				<br/><br/>
				<h2 class = "ruletitle">Contact Us</h2>
				<?php
					include $_SERVER["DOCUMENT_ROOT"]."/files/contact_info.php";
				?>
			</div>
		</div>
	</body>
</html>