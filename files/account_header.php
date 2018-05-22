<?php
	// LOAD: 
	// include $_SERVER["DOCUMENT_ROOT"]."/files/account_header.php";
	// requires /files/auth.php

	if ($auth) {
		echo "<div> <b>".$username.":</b> <a href='/account/logout.php?a=".$page."'>Logout</a> </div>";
	} else {
		echo "<div> <a href='/account/login/?a=".$page."'>Login</a>";
		if ($before) {
			echo " - <a href='/account/register/?a=".$page."'>Register</a> </div>";	
		} 
	}
?>