<?php
	include $_SERVER["DOCUMENT_ROOT"]."/files/std.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/auth.php";
?>
<html>
	<head>
		<title>Rules - WL Survivor</title>
		<?php
			include $_SERVER["DOCUMENT_ROOT"]."/files/head.php";
		?>
	</head>
	<body onmousemove="hiddenThing(event)" onload = "format()">
		<?php
			$urlEnd = "rules";
			include $_SERVER["DOCUMENT_ROOT"]."/files/header.php";
		?>

		<div class = "bottomHalf">
			<div class = "tabpage" id = "rules">
				<h1> Rules </h1>
				<?php 
					if (date("j") < 16) {
						echo '<p style="text-align:center"><a href="/rules/band-trip/" class="highlight">Additional Rules for The Band Trip </a></p>';
					}
				?>

				<h2 class = "ruletitle" style="display:block">General</h2>
				<div class = "rulesection">
					<p>DECISIONS BY THE GAME MAKERS ARE FINAL.</p>
					<p>Violation of rules is grounds for the removal of your account.</p>
					<p>Ignorance of the rules does not exempt you from them.</p>
					<p>You must respect other players and the game makers.</p>
				</div>

				<h2 class = "ruletitle">Target Elimination</h2>
				<div class = "rulesection">
					<p>The game runs every school day from 6&nbsp;A.M. to 4&nbsp;P.M.</p>
					<p>You must hit your target with a sock ball to eliminate them.</p>
					<ul>
						<li>Backpacks do not count as an elimination if they are hit; the person’s body must be hit.</li>
						<li>Headshots are permitted but are highly discouraged. Don't aim for the head and don't be stupid.</li>
					</ul>
					<p>The sock ball you use must follow the following guidelines:</p>
					<ul>
						<li>Must only contain socks.</li>
						<li>Socks must be clean and dry.</li>
						<li>Socks cannot be worn when used, and can contain only other socks.</li>
					</ul>
					<p>To report an elimination enter your target's code into the form on your <a href="/account/">Account Page</a>.</p>
					<ul>
						<li>You are only able to enter a kill code during play hours. The sooner you enter it, the better.</li>
						<li>Unless you have good reason to claim that you were not properly eliminated, please hand over your kill code to the person who eliminated you.</li>
					</ul>
					<p>You may not eliminate your target after you yourself have been eliminated. Once you are killed, your account page will prevent you from entering kill codes.</p>
					<ul>
						<li>If you kill your target, and then are killed yourself before you can enter their kill code, please enter their code immediately, then hand over your own.</li>
						<li>Please be accomodating of others in this position, but remember that you may only refuse to hand over your code in the case of a legitimate dispute.</li>
					</ul>
					<p>If there is a dispute, please contact <a href="/team/">Penn Bauman or any of the game makers</a>.</p>
					<ul>
						<li>Please see our <a href="/faq/">FAQ Page</a> for procedures to report an unfair kill or a rule breaker.</li>
					</ul>
				</div>

				<h2 class = "ruletitle">Safeties Reference</h2>
				<div class = "rulesection">
					<p>
						The list below is meant to be used as a reminder only and is not a substitute for the full listing of the rules. Please consult the sections above for specifics.
					</p>

				<table>
					<col width = "100">
					<col width = "200">
					<col width = "200">
					<tr>
						<th style="width:20%">Location</th>
						<th style="width:40%">Safe...</th>
						<th style="width:40%">NOT safe...</th>
					</tr>
					<tr>
						<td>Classrooms</td>
						<td>...when class is actively in session, or if the teacher has specified that it is a safe zone.</td>
						<td>...before or after the school day and between classes.</td>
					</tr>
					<tr>
						<td>School Library</td>
						<td>...at all times.</td>
						<td>...never.</td>
					</tr>
					<tr>
						<td>School Sponsored Practices/Activities</td>
						<td>...for participants only.</td>
						<td>...for spectators.</td>
					</tr>
					<tr>
						<td>AP and IB Exams</td>
						<td>...in the test room before, during, and immediately after the exam, as well as any location during test breaks.</td>
						<td>...in other cases..</td>
					</tr>
					<tr>
						<td>The School Parking Lot</td>
						<td>...at all times.</td>
						<td>...never.</td>
					</tr>
					<tr>
						<td>Religious Services</td>
						<td>...at all times.</td>
						<td>...never.</td>
					</tr>
					<tr>
						<td>The Target's House</td>
						<td>...in all other cases.</td>
						<td>...if the assassin was invited inside.</td>
					</tr>
					<tr>
						<td>At a Job</td>
						<td>...during the target's shift.</td>
						<td>...outside of the target's shift.</td>
					</tr>
					<tr>
						<td>Inside a Car</td>
						<td>...at all times.</td>
						<td>...never.</td>
					</tr>
					<tr>
						<td>Other Public Spaces</td>
						<td>...never.</td>
						<td>...at all times.</td>
					</tr>
				</table>
				</div>

				<h2 class = "ruletitle">Safeties</h2>
				<div class = "rulesection">
					<p>Daily safeties will be announced on this website, the instagram page <a href="https://www.instagram.com/wlsurvivor2018">@wlsurvivor2018</a>, the twitter <a href='http://twitter.com/wlsurvivor2018'>@wlsurvivor2018</a>, and on remind.</p>
					<ul>
						<li> You cannot physically force anyone to stop doing a safety. </li>
						<li> When you are in a safe zone you cannot be eliminated, and you cannot eliminate someone. </li>
					</ul>
					<p>At school:</p>
					<ul>
						<li>Classrooms are safe only during class time, this includes GP.</li>
						<li>Certain teachers have made their classrooms a permanent safe zone. Check with your teachers to see if they will allow you to play in their room, and use your best judgement when doing so. Keep in mind that many classrooms, especially the science labs, may contain fragile and/or dangerous items. These permanent safe zones include but are not limitd to: </li>
						<ul>
							<li> Dr. East’s room (2012) </li>
							<li> Ms. Claassen's room (2210 &amp; 2209) </li>
							<li> In Mr. Lester's room (2005) you are safe unless you do the safety. </li>
							<li> Sra. Catello’s (3209) </li>
							<li> Ms. Stallworth’s (2018) </li>
							<li> Dr. East’s room (2012) </li>
							<li> Ms. McCoart's room (4004) </li>
							<li> Ms. Miller’s room (3003) </li>
							<li> Mr. Sober's room (1117) </li>
							<li> Mr. Vettori's room (4010) </li>
							<li> Mr. Lunt's room (1401) </li>
							<li> Mr. Vogel's room (3023) </li>
							<li> Mr. Lunt’s room (1401) </li>
							<li> Mrs. Macleod’s room (4036) </li>
							<li> Ms. Holcombe's room (2223) </li>
							<li> Ms. Larson's room (2016) </li>
							<li> Ms. Reyes's room (2219) </li>
							<li> Mr. Grove's room (3012) </li>
							<li> Ms. Shivers' GP &amp; math help (4017) </li>
							<li> Mr. Drake's room </li>
							<li> Ms. Mendez's room (3036) </li>
							<li> Mr. Przydzial's room ()
						</ul>
						<li>The school library is always safe. </li>
						<li>The nurse's office and the counselors' offices are safe.</li>
						<li>Sports games and practices are safe for the players, but not for the spectators.</li>
						<li>Buses are safe.</li>
						<li>If you have an AP or IB exam, you are safe before your exam only if you are in your testing room. You are safe during the exam breaks no matter where you go (although you can't really go far).</li>
						<li>The parking lot is safe, but bridge is not.</li>
						<li>You are safe if you are in a bathroom stall or if you are using a urinal.</li>
						<li>In the case of a fire drill, the game is paused for the duration of the dirll and the return to class. </li>
					</ul>

					<p>Outside of school:</p>
					<ul>
						<li>Religious services are safe.</li>
						<li>You cannot eliminate your target while they are inside of their house unless you were invited in by someone who lives there.</li>
						<li>Students at work are safe.</li>
						<li>If you are in a vehicle you cannot get your target out or be eliminated.</li>
					</ul>
					
					<p>Although public spaces are not safe, use your common sense when going in for the kill. Situations and settings that may require you to not act on pure impulse alone include, but are not limited to: </p>
					<ul>
						<li>Museums</li>
						<li>Libraries</li>
						<li>Restaurants</li>
						<li>Metro cars and Metro stations</li>
						<li>Crosswalks</li>
						<li>Buses</li>
					</ul>
				</div>
			</div>
			<h2 class = "disclaimertitle" style = "color: #d83434;">DISCLAIMER</h2>
			<div class = "rulesection">
				<p>We are not responsible for anyone's stupidity.
				If you incur the wrath of administrators, teachers, or other students, you're on your own (and also probably an idiot). Please play safe and good luck.</p>
			</div>
		</div>
		<script src="/files/button_header.js"></script>
		<script type="text/javascript"> makeButtonHeaders("ruletitle"); </script>
	</body>
</html>