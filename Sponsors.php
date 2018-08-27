<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sponsors</title>
<link rel="icon" type="image/x-icon" href="resources/img/logo-mini.png"/>
<link href="css/sponsors.css" rel="stylesheet" type="text/css">
<link href="css/body.css" rel="stylesheet" type="text/css">
<link href="css/woss-footer.css" rel="stylesheet" type="text/css">
<link href="css/wossr-header.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
	<div id="holder">
	<?php
		include 'header.html';
	?>
	<div id="sprattr">
		<h1>Become a Sponsor</h1>
		<p>Interested in becoming a sponsor? Click the button bellow to become a member of the honoral sponsors of White Oaks Robotics team</p>
		<a href="///donate"><button type="button"><p>Donate</p></button></a>
	</div>
	<div id="sprs">
		<div class="sprs-holder" id="premiere-sponsor">
			<h1>Premiere Sponsors</h1>
			<ul class='sprs-list' id="premiere-lst">
				<li><img src="resources/img/logo.png"></li>
			</ul>
		</div>
		<div class="sprs-holder" id="golden-sponsor">
			<h1>Golden Sponsor</h1>
			<ul class='sprs-list' id="golden-lst">
				<li><img src="resources/img/google.png"></li>
				<li><img src="resources/img/Apple.png"></li>
				<li><img src="resources/img/Microsoft.png"></li>
			</ul>
		</div>
		<div class="sprs-holder" id="silver-sponsor">
			<h1>Golden Sponsor</h1>
			<ul class='sprs-list' id="silver-lst">
				<li><img src="resources/img/communist party.png"></li>
				<li><img src="resources/img/pride-flag.jpeg"></li>
				<li><img src="resources/img/sss.png"></li>
				<li><img src="resources/img/good-smile-company.png"></li>
				<li><img src="resources/img/sad-panda.jpg"></li>
				<li><img src="resources/img/blendS.png"></li>
				<li><img src="resources/img/hentai-haven.png"></li>
			</ul>
		</div>
		
	</div><!--sponsor portion-->
		
	</div>
	<?php
		include 'footer.html';
	?>

	<script>
		$(document).ready(function(){
		$("a[data-btndes='spr']").attr('id','nav-cur');
		});
	</script><!--set nav-cur -->
	<script>
	$(document).ready(function(){
		$('#sprs').css({'top','+=110'});
	});
	
	</script>
	<script>
	function footerfunc(){
			'use strict';
			var x=document.documentElement.clientWidth/100;
			var y=$('#sprs').position().top+$('#sprs').outerHeight(true);
			var a=y;
			var b=x*7+y;
			var locstr1 = a + 'px';
			var locstr2 = b + 'px';
			$('.footerblend').css('top',locstr1);
			$('.footer').css('top',locstr2);
			}
			$(document).ready(function(){
			'use strict';
			footerfunc();
			$(window).on('resize',function(){
				footerfunc();
			});
		});
	</script><!--footer positioning script-->
</body>
</html>