<?php
	$data = $conn->query("SELECT * FROM safeties");
	$safety = "";
	$safetyDesc = "";
	$type = "";
	if ($data->num_rows > 0) {
		while($row = $data->fetch_assoc()) {
			if ($row["day"] == $safetyDay) {
				$safety = $row["title"];
				$safetyDesc = $row["description"];
				$type = $row["type"];
				$safetyUrl = $row["url"];
			}
		}
	}
	$purge = ($safety == "Purge");
	$safetyVisual = "";
	if ($type == "img") {
		$safetyVisual = "<img id='safety_img' src='".$safetyUrl."'/>";
	} else if ($type == "vid") { // tpye = vid
		$safetyVisual = '<iframe id="safety_vid" src="'.$safetyUrl.'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'; //
	}
?>
