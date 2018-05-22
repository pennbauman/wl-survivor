<?php
	include $_SERVER["DOCUMENT_ROOT"]."/files/std.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/auth.php";
?>
<html>
	<head>
		<title>Team - WL Survivor</title>
		<?php
			include $_SERVER["DOCUMENT_ROOT"]."/files/head.php";
		?>
	</head>
	<body onmousemove="hiddenThing(event)" onload = "format()">
		<?php
			$urlEnd = "team";
			include $_SERVER["DOCUMENT_ROOT"]."/files/header.php";
		?>

		<div class = "bottomHalf">
			<div class = "tabpage" id = "Team">
				<h1>Team</h1>

				<h2 class = "ruletitle">Contact Us</h2>
				<?php
					include $_SERVER["DOCUMENT_ROOT"]."/files/contact_info.php";
				?>
				<h2 class = "ruletitle">Meet the Team!</h2>

				<div class = "bioset">
					<div class = "info">
						<div class = picture> 
							<img id = "Inky" class = 'teamPic' align = "left" src="/files/inky.png">
						</div>
						<div class = "peopleText">
							<h2 class="name">Inky</h2>
							<p style="text-align: justify;">
								Inky is our mascot for this year’s game. He is cute and supports us at every turn. Please enjoy his fluffiness.
							</p>
						</div>
					</div>

					<div class = "info">
						<div class = picture> 
							<img id = "Penn" class = 'teamPic' align = "right" src="/files/penn.png">
						</div>
						<div class = "peopleText">
							<h2 class="name">Penn</h2>
							<p style="text-align: justify;">
								Penn Bauman is the head game master for the Survivor 2018 project. He handles the back end of the website, from the login system to the accounts. He also owns our mascot, Inky.
							</p>
						</div>
					</div>
				</div>

				<div class = "bioset">
					<div class = "info">
						<div class = picture> 
							<img id = "Alisa" class = 'teamPic' align = "left" src="/files/alisa.png">
						</div>
						<div class = "peopleText">
							<h2 class="name">Alisa</h2>
							<p style="text-align: justify;">
								Alisa Khuu wrote and designed the user end of the website from scratch, writing the code and laying out the general aesthetic. She also contributed to safety ideas.
							</p>
						</div>
					</div>

					<div class = "info">
						<div class = picture> 
							<img id = "Vince" class = 'teamPic' align = "right" src="/files/vince.png">
						</div>
						<div class = "peopleText">
							<h2 class="name">Vince</h2>
							<p style="text-align: justify;">
								Vince LaGrassa is the most reasonable and sane<span title="This claim needs references to reliable sources." style="cursor: pointer;"><sup><em><small>[<a>citation&nbsp;needed</a>]</small></em></sup></span> person out of the whole lot of us. He has helped code, organize, and proofread the website. He gets a cookie.
							</p>
						</div>
					</div>
				</div>

				<div class = "bioset">
					<div class = "info">
						<div class = picture> 
							<img id = "Faith" class = 'teamPic' align = "left" src="/files/faith.png">
						</div>
						<div class = "peopleText">
							<h2 class="name">Faith</h2>
							<p style="text-align: justify;">
								Faith Zeng is the creative director for all promotional material. She films, edits, and directs all the videos herself with her keen eye. She also helps manage all of our social media accounts.
							</p>
						</div>
					</div>

					<div class = "info">
						<div class = picture> 
							<img id = "Kara" class = 'teamPic' align = "right" src="/files/kara.png">
						</div>
						<div class = "peopleText">
							<h2 class="name">Kara</h2>
							<p style="text-align: justify;">
								Kara Probasco is the designated chauffeur and
								<a
								onclick="location.href = 'http://i0.kym-cdn.com/photos/images/facebook/001/058/942/9df.png'; location.href.target='_blank';"
								style="cursor:text; text-decoration:none;"
								onMouseOver="this.style.color='#79abe0'"
								onMouseOut="this.style.color='#79abe0'"
								>
								vegan
								</a>
								of the group. She has written a large portion of what you read on this website and is the main manager of our social media accounts. Kara has participated in filming and has organized this year’s game.
							</p>
						</div>
					</div>
				</div>

				<div class = "bioset">
					<div class = "info">
						<div class = picture> 
							<img id = "Abby" class = 'teamPic' align = "left" src="/files/abby.png">
						</div>
						<div class = "peopleText">
							<h2 class="name">Abby</h2>
							<p style="text-align: justify;">
								Abby Ryan is our official Penn handler. She created our logo and uses her artistic abilities to make our project actually look good. She also serves as a vital source of emotional support.
							</p>
						</div>
					</div>

					<div class = "info">
						<div class = picture> 
							<img id = "Annabeth" class = 'teamPic' align = "right" src="/files/annabeth.png">
						</div>
						<div class = "peopleText">
							<h2 class="name">Annabeth</h2>
							<p style="text-align: justify;">
								Annabeth Stokely is in charge of managing our communication, most notably the Remind group, and can be seen in our promotional videos. Her role as a problem solver is crucial.
							</p>
						</div>
					</div>
				</div>

				<div class = "bioset">
					<div class = "info">
						<div class = picture> 
							<img id = "Claire" class = 'teamPic' align = "left" src="/files/claire.png">
						</div>
						<div class = "peopleText">
							<h2 class="name">Claire</h2>
							<p style="text-align: justify;">
								Claire Baptiste is one of the more recent additions to the project. She helps with filming and other general creative tasks.
							</p>
						</div>
					</div>
				</div>
			</div>
			<script src='/files/team.js'></script>
		</div>
	</body>
</html>