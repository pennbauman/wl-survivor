<?php
	include $_SERVER["DOCUMENT_ROOT"]."/files/std.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/auth.php";
?>
<html>
	<head>
		<title>FAQ - WL Survivor</title>
		<?php	
			include $_SERVER["DOCUMENT_ROOT"]."/files/head.php";
		?>
	</head>
	<body onmousemove="hiddenThing(event)" onload = "format()">
		<?php
			$urlEnd = "faq";
			include $_SERVER["DOCUMENT_ROOT"]."/files/header.php";
		?>

		<div class = "bottomHalf">
			<div class = "tabpage" id = "faq_page">
				<h1> FAQ </h1>

				<h2 class = "question">
					What can I win?
				</h2>
				<p class = "response">
					The last survivor standing will win the majority of the pot, and the person with the most kill each week will win a smaller cash prize. 
				</p>

				<h2 class = "question">
					When does the game start/How long will Survivor 2018 last?
				</h2>
				<p class = "response">
					The game starts on Tuesday, April 3rd, and ends on Thursday, May 10th, or until a winner is decided.
				</p>

				<!--<h2 class = "question">
					When are payments due?
				</h2>
				<p class = "response">
					The $5 enrollment fee is due IN CASH before 4 P.M. on April 2nd. A valid student ID will need to be shown when the payment is turned in. StudentVue is also a valid source of ID. Since this is senior skip day, you can contact us to deliver your payment. If you do not pay by this time, you will not be able to participate in Survivor 2018.
				</p>

				<h2 class = "question">
					Where will targets be assigned?
				</h2>
				<p class = "response">
					Targets are assigned via this website. Targets will be released on April 2nd at 6 P.M. on your account page. Upon input of your target’s kill code, a new target will be assigned to you.
				</p>-->

				<h2 class = "question">
					How will safeties be announced?
				</h2>
				<p class = "response">
					Each school night at 6 P.M. a video or poster revealing the safety for the next day will be released. These videos and posters can be accessed through the official Survivor instagram (<a href="https://www.instagram.com/wlsurvivor2018">@wlsurvivor2018</a>) or on the homepage of this website. A Remind will also be sent out giving links to where to find the safety. 
				</p>

				<!--<h2 class = "question">
					How do I confirm my account?
				</h2>
				<p class = "response">
					Accounts are confirmed after the $5 fee is paid. You can check your status on your account. If your status is “Confirmed” then you have successfully paid. If you have paid and your status is still “unconfirmed,” please contact us at <a href="mailto:wlsurvivor2018@gmail.com?Subject=Unconfirmed%20Account">wlsurvivor2018@gmail.com</a> or through the Remind. 
				</p>

				<h2 class = "question">
					Who do I give money to? And when?
				</h2>
				<div class = "response">
					<p>
						You can give payment to any of the <a href="/team/">game masters</a>. If you don't know any game masters consult the table below to find one. 
					</p>-->
					<?php
						//include $_SERVER["DOCUMENT_ROOT"]."/files/confirm_info.php";
					?>
				<!--</div>-->

				<!--<h2 class = "question">
					I forgot my password, how to I get a new one?
				</h2>
				<p class = "response">
					If you feel like you were unfairly eliminated and have evidence to back you up, contact any of the game masters. Do not give your elimination code to your assassin. Do not waste our time with fake news. Decisions made by the game masters are FINAL.
				</p>-->

				<h2 class = "question">
					Under what circumstances can I contest a kill?
				</h2>
				<p class = "response">
					If you feel like you were unfairly eliminated and have evidence to back you up, contact any of the game masters. Do not give your elimination code to your assassin. Do not waste our time with fake news. Decisions made by the game masters are FINAL.
				</p>

				<h2 class = "question">
					How can I report rule breakers?
				</h2>
				<p class = "response">
					If you witnessed someone break the rules, please contact a game master. The situation will be dealt with accordingly and the decision reached is final.
				</p>

				<h2 class = "question">
					How long do I have to kill my target?
				</h2>
				<p class = "response">
					There is no time limit to kill your target.
				</p>

				<h2 class = "question">
					Are the game masters getting paid?
				</h2>
				<p class = "response">
					No, we are a non-profit, volunteer-based organization, but we will take a small cut of the pot to pay for the cost of running the game.
				</p>

				<h2 class = "question">
					Why are you using our phone numbers as usernames?
				</h2>
				<p class = "response">
					We are using phone numbers to easily ensure that no one makes duplicate accounts. They also allow use to contact you in case of an issue. They will not be released to anyone except the game masters. 
				</p>

				<h2 class = "question">
					Will the game masters be playing?
				</h2>
				<p class = "response">
					No one who worked on the game will be playing.
				</p>

				<h2 class = "question">
					What if I have a health issue that prohibits me from doing the safety?
				</h2>
				<p class = "response">
					You can contact us through the Survivor instagram (<a href="https://www.instagram.com/wlsurvivor2018">@wlsurvivor2018</a>) or message us through Remind. We will modify the safety appropriately and notify your hunter of the change. Accommodations will only be made if we are notified the night before the safety is in effect. 
				</p>

				<h2 class = "question">
					Can I send in pictures or video of my kills to be featured on the Instagram page?
				</h2>
				<p class = "response">
					We highly suggest that you record your eliminations, as it reduces the risk of arguments over if you actually got your target out. You can send in pictures and videos through the Remind or via direct message on the Instagram page.
				</p>

				<h2 class = "question">
					Still can't find the answer you were looking for?
				</h2>
				<p class = "response">
					Email us at <a href="mailto:wlsurvivor2018@gmail.com?Subject=Question">wlsurvivor2018@gmail.com</a> and we will get back to you as soon as possible. 
				</p>
			</div>
		</div>
		<script src="/files/button_header.js"></script>
		<script type="text/javascript"> makeButtonHeaders("question"); </script>
	</body>
</html>