function resizePeople() {
	var w = window.innerWidth;
	var h = window.innerHeight;
	var people = document.getElementsByClassName("info");
	for (var i = 0; i < people.length; i++) {
		var picture = people[i].getElementsByClassName("picture")[0].getElementsByClassName("teamPic")[0];
		if (w < h) {
			picture.style.minHeight = "56vw";
			picture.style.minWidth = "42vw";
		} else {
			picture.style.minHeight = "16em";
			picture.style.minWidth = "12em";
		}
		if (2*w > 3*h) {
			people[i].style.maxWidth = w/3;
		} else {
			people[i].style.maxWidth = w;
			people[i].style.minHeight = "0px";
		}
	}
}
window.addEventListener('resize', resizePeople);
resizePeople();