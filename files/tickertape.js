function showRecentKills(listOfNames) {
	var tape = document.getElementById("listOfNames");
	var longspace = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	var newText = "||";
	for (var i = 0; i < listOfNames.length; i++) {
		newText += longspace;
		newText += listOfNames[i];
		newText += longspace + "||";
	}
	tape.innerHTML = newText;
	calcMaxTapeWidth();
	resetTickertape();
	setInterval(moveTickertape, 60);
	window.addEventListener('resize', calcMaxTapeWidth);
}

function moveTickertape() {
	var tape = document.getElementById("listOfNames");
	tape.style.width = currentTapeWidth;
	currentTapeWidth += 3;
	if (currentTapeWidth > maxTapeWidth) {
		resetTickertape();
	}
}

function resetTickertape() {
	var tape = document.getElementById("listOfNames");
	tape.style.transition = "width 0.0s";
	tape.style.width = "0vw";
	currentTapeWidth = 0;
	tape.offsetWidth;
	tape.style.transition = "width 0.1s";
}

function getTextWidth(text, font) {
    var canvas = document.createElement("div");
    document.body.appendChild(canvas);

	canvas.style.whiteSpace = "nowrap";
    canvas.style.visibility = "hidden";
    canvas.style.position = "absolute";
    canvas.style.left = -1000;
    canvas.style.top = -1000;
    canvas.style.font = font;

    canvas.innerHTML = text;
    ret = canvas.offsetWidth;
    canvas.remove();
    return ret;
}

function calcMaxTapeWidth() {
	maxTapeWidth = getTextWidth(document.getElementById("listOfNames").innerHTML, "2.5em arvo") + document.getElementById("tickertapespace").offsetWidth;
} 

function textToList(text) {
	text = text.substring(0, text.length-2);
	return text.split(", ");
}