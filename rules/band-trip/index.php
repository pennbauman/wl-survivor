<?php
	include $_SERVER["DOCUMENT_ROOT"]."/files/std.php";
	include $_SERVER["DOCUMENT_ROOT"]."/files/auth.php";
?>
<html>
	<head>
		<title>Band Trip Rules - WL Survivor</title>
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
				<h1> Band Trip Rules </h1>
				<h2 class = "ruletitle" style="display:block">Additional Safeties</h2>
				<div class = "rulesection">
					<ul>
						<li>Safe while preforming and setting up performance.</li>
						<li>Safe while loading luggage.</li>
						<li>Safe during meetings with teachers.</li>
						<li>Safe from your roommate in your room.</li>
						<li>Safe from others in your room unless they are invited in.</li>
						<li>Safe on the bus.</li>
					</ul>
				</div>

				<h2 class = "ruletitle" style="display:block">Additional Information</h2>
				<div class = "rulesection">
					<p>The games still only runs from 6AM to 4PM.</p>
					<p>You will need the following items.</p>
					<ul>
						<li>A Shakespeare text (book, printed out, or digital)</li>
						<li>A banana.</li>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>