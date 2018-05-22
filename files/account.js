function toggleCode() {
	var killcode = document.getElementById("killcode");
	var decoycode = document.getElementById("decoycode");
	var revealbutton = document.getElementById("revealbutton");
	if (killcode.style.display === "none" || killcode.style.display === "") {
		killcode.style.display = "inline";
		decoycode.style.display = "none";
		revealbutton.childNodes[0].nodeValue = "Hide Code";
	} else {
		killcode.style.display = "none";
		decoycode.style.display = "inline";
		revealbutton.childNodes[0].nodeValue = "Show Code";
	}
}