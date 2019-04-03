// JavaScript Document

var alert;

$(document).ready(function(){	
	var tabHover = false;
	var tabPos = 0;
	$('#selectHomeTab').mousedown(function(){
		$([document.documentElement, document.body]).animate({scrollTop: $("header").offset().top}, 2000);
	});
	$('#selectAboutUsTab').mousedown(function(){
		$([document.documentElement, document.body]).animate({scrollTop: $("#aboutUs").offset().top}, 2000);
	});
	$('#selectTeamMemberTab').mousedown(function(){
		$([document.documentElement, document.body]).animate({scrollTop: $("#teamMember").offset().top}, 2000);
	});
	$('#selectSignUpTab').mousedown(function(){
		$([document.documentElement, document.body]).animate({scrollTop: $("#contactUs").offset().top}, 2000);
	});
	$('#selectEventsTab').mousedown(function(){
		$([document.documentElement, document.body]).animate({scrollTop: $("#calendarSponsor").offset().top}, 2000);
	});
	$('#selectionTab').mousedown(function(){
		console.log(tabPos);
		if (tabPos%2 == 0){
			$('#selectionTab').animate({height: "+=100vw"}, "slow");
			$('#selectionTab').animate({left: "+=16vw"}, "fast");
			console.log("1");
			//tabPos++;
			console.log(tabPos);
			tabPos++;
		} 
		else if (tabPos%2 == 1){
			$('#selectionTab').animate({left: "-=16vw"}, "fast");
			$('#selectionTab').animate({height: "-=100vw"}, "slow");
			tabPos++;
		}
	});
	$(document).keypress(function(event){
		var keycode = (event.keyCode ? event.keycode : event.which);
		if (keycode == '13'){
			alert('You pressed a "enter" key in somewhere');
		}
	});
});
	
function scroll_to(div){
	$('html, body').animate({
		scrollTop: $("selectHomeTab").offset().top
	},1000);
}