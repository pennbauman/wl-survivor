<?php
	echo "<div class='header'>";
	echo "<img id='headerImg' src='/files/logo.png'>";
	echo "<div id='title'> Washington-Lee Survivor</div>";
	echo "</div>";
	echo "<div class='navbar'>";
	echo "<a href='/' id='Home'>HOME</a>";
	echo "<a href='/rules/' id='Rules'>RULES</a>";
	echo "<a href='/faq/' id='FAQ'>FAQ</a>";
	echo "<a href='/team/' id='TEAM'>TEAM</a>";
	if ($urlEnd != "") {
		$urlEnd = "?a=".$urlEnd;
	}
	if ($auth) {
		echo "<a href='/account/logout.php".$urlEnd."' class='right'>LOGOUT</a>";
		echo "<a href='/account/' class='right' id='Account'>ACCOUNT</a>";
	} else {
		echo "<a href='/account/login/".$urlEnd."' class='right'>LOGIN</a> ";
		if ($before) {
			echo "<a href='/account/register/".$urlEnd."' class='right'> REGISTER </a>";
		}
	}
	echo "</div>";
	echo "<div id='fade'></div>";
?>