<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Event And Outreach</title>
<link rel="icon" type="image/x-icon" href="resources/img/logo-mini.png"/>
<link href="css/eva.css" rel="stylesheet" type="text/css">
<link href="css/body.css" rel="stylesheet" type="text/css">
<link href="css/woss-footer.css" rel="stylesheet" type="text/css">
<link href="css/wossr-header.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body><strong></strong>
	<div id="holder">
		<?php
		include 'header.html';
		?>
		<div id="evnthldr">
			<div class="hldrbx">
				<div class="strp"></div>
				<img class="bximg" src="resources/img/index 3.jpg">
				<div class="hldrtxt">
					<h1> Events</h1>
					<h1> Comming SOON~</h1>
				</div>
			</div>			
		</div>
		<?php
		include 'footer.html';
		?>		
	</div>

	<script>
		$(document).ready(function(){
		$("a[data-btndes='eao']").attr('id','nav-cur');
		});
	</script><!--set nav-cur -->
	<script>
	function footerfunc(){
			'use strict';
			var x=document.documentElement.clientWidth/100;
			var y=$('#evnthldr').position().top+$('#evnthldr').outerHeight(true);
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