<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>About</title>
	<link rel="icon" type="image/x-icon" href="resources/img/logo-mini.png"/>
	<link href="css/about.css" rel="stylesheet" type="text/css">
	<link href="css/body.css" rel="stylesheet" type="text/css">
	<link href="css/woss-footer.css" rel="stylesheet" type="text/css">
	<link href="css/wossr-header.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
	<?php 
	include 'header.html';
	?><!--header-->
	<div id="cont">
		<img src="resources/img/comiket.jpg">
		<div id="cont-pag">
			<div class="cont-txt" id="cont-abt">
				<hr>
				<h1> About </h1>
				<p>
					Through the course of the year, students in White Oaks Robotics Club design, build, code and test robots for the Skills competitions and the FTC Challenge. The club offers several other take-aways besides the technical skill that are taught, such as public relations and marketing. Wherther students are willing to go far as competing outside of the school or not, members are rewarded for any level of dedication they put into the club.	
				</p>
			</div>
			<div class="cont-txt" id="cont-gl">
				<hr>
				<h1> Goal </h1>
				<embed src="resources/txt/ASCII-art.txt">(embed)
				
			</div>
			<div class="cont-txt" id="cont-vls">
				<hr>
				<h1> Values </h1>
				<embed src="resources/txt/ASCII-art-2.txt">(embed)
				
			</div>
			<div class="cont-txt" id="cont-hst">
				<hr>
				<h1> History </h1>
				<h2>funny stories(h2)</h2>
				<p>One night during high school, my friend and I got invited to a party. I didn't drive back then so my friend picked me up. All went well on our way to the party. On the way back however, he got pulled over. As we were pulling to the side of the road, I told him that I was gonna pretend to be sleeping (since I was the passenger). Anyway, I hear the cop get out of his cop car, walk towards our car, stops at the window but doesn't say anything. I can feel the brightness of his flashlight but I don't hear him or my friend say anything. After about what seemed like an eternity, I decide to open my eyes to see what's going on. That's when I see my friend, the guy who is driving, is pretending like he is sleeping too.</p>
				<p>
				I can sum it up very easily: We were at the shooting range, his gun jammed, he looked down the barrel to see what was wrong.
				</p>
			</div>
		</div>
	</div><!--content of writing stuff-->
	<?php
	include 'footer.html';
	?><!--footer-->
	
	<script>
		$(document).ready(function(){
		$("a[data-btndes='abt']").attr('id','nav-cur');
		});
	</script><!--set nav-cur -->
	<script>
		$(document).ready(function(){
			function footerfunc(){
			var x=document.documentElement.clientWidth/100;
			var y=$('#cont').position().top+$('#cont').outerHeight(true);
			var a=y;
			var b=x*7+y;
			var locstr1 = a + 'px';
			var locstr2 = b + 'px';
			$('.footerblend').css('top',locstr1);
			$('.footer').css('top',locstr2);
			}
			footerfunc();
			$(window).on('resize',function(){
				footerfunc();
			});
		});
	</script><!--bad use of javascript to format footer-->
</div>
</body>
</html>