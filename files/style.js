function adjustSizing() {
	if($(window).outerHeight() > $(window).width()) {
		document.getElementById("title").innerHTML = "W-L Survivor";
	} else {
		document.getElementById("title").innerHTML = "Washington-Lee Survivor";
	}
}
$(document).ready(function() { 
	document.body.style.fontSize = window.innerHeight*0.01;	
	adjustSizing();
});
$(window).resize(adjustSizing);

$(window).scroll(function(event){
	var scrollTop = $(window).scrollTop();
	var navY = $(".header").outerHeight(true);
	if (scrollTop >=navY){
		$(".navbar").css({top:0});
	}
	if (scrollTop < navY) {
		$(".navbar").css({top:navY-scrollTop});
	}
}); //*/

function hiddenThing(e) {
	// Take care of this conditional up front
	if ($(window).outerHeight() <= $(window).width()) {
		var x = e.clientX;
    	var y = e.clientY;
    	// I adjusted the bounds to fit the actual cat image
	    var xup  = $( window ).width() * 1.00;
	    var xlow = $( window ).width() * 0.90;
	    var yup  = $( window ).outerHeight() * 1.00;
	    var ylow = $( window ).outerHeight() * 0.73;
	    // Make this a straightforward if/then block
	    if (xlow<x && x<xup && ylow<y && y<yup){
	   		showEyes();
	    } else {
	    	hideEyes();
	    }
	}
}
function showEyes(){
	$("#fade").css({
		"background-image": "url('/files/big_eyes.png'), url('/files/small_eyes.png'), url('/files/side_cat.png'), linear-gradient(#2f2c89, #24226b, #0c0c27)",
		"background-position": "right bottom, left bottom, right bottom",
		"background-size": "12vw 67vh, 7vw 77vh, 12vw 66vh, 100vw 100vh"
	});
}
function hideEyes(){
	$("#fade").css({
	    "background-image": 'url("/files/side_cat.png"), linear-gradient(#2f2c89, #24226b, #0c0c27)',
		'background-position': 'right bottom',
		'background-size': '12vw 66vh, 100vw 100vh'
	});
}