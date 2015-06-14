$(document).ready(function(){

	$(".artist-box").hover(function(){
		$(this).find(".artist-name").fadeToggle("slow");
	});

	$(".past-show").hover(function(){
		$(this).find(".past-show-caption").fadeToggle("slow").css("bottom", "0px");
	});

	$(".icon").hover(function(){
		$(this).toggleClass("iconSpin");
	});

})