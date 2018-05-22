<?php
	include $_SERVER["DOCUMENT_ROOT"]."/files/std.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/auth.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/user_data.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/target_data.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/safety_day.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/kill_time.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/general_safety.php";
	//include $_SERVER["DOCUMENT_ROOT"]."/files/game_data.php";
	$page = "account";
	include $_SERVER["DOCUMENT_ROOT"]."/files/safety_exemptions.php";
?>
<html>
	<head>
		<title>Account - WL Survivor</title>
		<?php
			include $_SERVER["DOCUMENT_ROOT"]."/files/head.php";
		?>
		<script src="/files/account.js"></script>
	</head>
	<body onmousemove="hiddenThing(event)" onload = "format()">
		<?php
			$urlEnd = "account";
			include $_SERVER["DOCUMENT_ROOT"]."/files/header.php";
		?>
		<div class = "bottomHalf">
			<div class = "tabpage" id = "home">
				<?php 	
					if ($auth) {
						echo "<h1>Hello, ".$name.".<br/><span style='font-size:0.6em; font-style:italic;'>Welcome to your account.</span> </h1>";
						if ($before) {
							include $_SERVER["DOCUMENT_ROOT"]."/files/game_data.php";
							if ($alive) {
								echo "<span style='text-align:center'><p>Your account is confirmed. The game starts on ".date("l, F jS", $start).".</p>";
								echo "<p>While you wait you can sign up for the Remind group that will announce safeties by texting @wlsurvivor to 81010.</p></span>";
							} else {
								echo "<span style='text-align:center'><p>Your account is <span class='highlight'>not confirmed</span>. You have until ".date("l, F jS", $start).", to confirm your account, or it will be deleted and you will not be able to play.</p>";
								echo "<p>Your account will be confirmed when you give the $5 entrance fee to any game master and show them your student ID (StudentVue is a valid ID). Once this process is complete your account should show up as \"confirmed\" on your account page. If you have paid and your account does not show up as confirmed please contact us at <a href='mailto:wlsurvivor2018@gmail.com?Subject=Unconfirmed%20Account'>wlsurvivor2018@gmail.com</a>. If you don't know where or when to find a game master check the table below. </p></span>";
								include $_SERVER["DOCUMENT_ROOT"]."/files/confirm_info.php";
							}
						} else {
							echo "<span style='text-align:center'>";
							if ($alive) {
								if ($win) {
									echo "<br/><p style='font-size:5em' class='highlight'>You won!</p>";
								} else {	
									echo "<div class='fake_form'><b>Your life code is <span id='killcode' class='highlight'>".$lifeCode."</span><span id='decoycode' class='error'>******</span></b> <br/><br/> <button id='revealbutton' class='fake_form_button' onclick='toggleCode();'>Show Code</button></div>";
									if ($safety != "Dodgeball" && $safety != "Purge") {
										echo "<p>Your target is <span class='highlight'>".$targetName."</span>.</p>"; 
										echo $exemptionText;
									}

									if ($killAttempts < 5 && $killTime){ // $time
										echo "<form action='/account/kill.php' method='post'>";
										if ($safety = "Dodgeball" || $safety == "Purge") {
											echo "<b>Target</b> <br/> <input type='text' name='target' placeholder='000-000-0000'> <br/>";
											echo "<b>Life Code</b> <br/> <input type='text' name='killCode' placeholder='000000'> <br/>";
										} else {
											echo "<b>Target Life Code</b> <br/> <input type='text' name='killCode' placeholder='000000'> <br/>";
										}
										echo "<b>You have ".(5 - $killAttempts)." attempts remaining.</b> <br/><br/>";
										echo "<input type='submit' value='KILL'> </form> <br/>";
									} else if ($killAttempts >= 5) {
										echo "<p><span class='error'>You have used all of your attempts to enter your target's life code. Please contact Penn Bauman.</span></p>";
									} else {
										echo "<p>It is currently outside of play hours and you cannot enter your target's life code. </p>";
									}
									if ($killCount > 1) {
										echo "<p>You have killed ".$killCount." people.</p>";
									} else if ($killCount == 1) {
										echo "<p>You have killed ".$killCount." person.</p>";
									}
								}
							} else {
								echo "<p>You are dead. Sorry.</p>";
							}
							echo "</span>";
						}
					} else {
						echo "<h1></h1>";
						echo "<p style='text-align:center' class='error'>You are not currently logged in.</p>";
						if ($before) {
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
						} else {
							echo "<form action='/account/login/?a=account' method='post'>";
							echo "<b>Phone Number:</b> <br/> <input type='text' name='username'><br><br/>";
							echo "<b>Password:</b> <br/> <input type='password' name='password'> <br/><br/>";
							echo "<h4></h4> <br/><br/>";
							echo "<input type='submit' value='Login'>";
							echo "</form>";
						}
					}
				?>
			</div>
		</div>
	</body>
</html>