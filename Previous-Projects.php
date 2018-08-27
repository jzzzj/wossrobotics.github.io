<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>previous projects</title>
	<link rel="icon" type="image/x-icon" href="resources/img/logo-mini.png"/>
	<link href="css/ppr.css" rel="stylesheet" type="text/css">
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
	<div id="prevpro">
		<div id="prevprottl">
			<h1>Previous Projects</h1>
			<h2>we've done it, and we can do it again</h2>
		</div>
		<div id="imgs">
			<ul>
				<li class="imgli" data-imgn="1">
					<h1 data-imgn="1">peoples discovering</h1>
					<div class="imgcover" data-imgn="1"></div>
					<img data-imgn="1" src="resources/img/comiket.jpg">
				</li>
				<li class="imgli" data-imgn="2">
					<h1 data-imgn="2">NGC 6357 nebula inventing</h1>
					<div class="imgcover" data-imgn="2"></div>
					<img data-imgn="2" src="resources/img/madoke-nebula.jpg">
				</li>
				<li class="imgli" data-imgn="3">
					<h1 data-imgn="3">Professional Nostril Picking</h1>
					<div class="imgcover" data-imgn="3"></div>
					<img data-imgn="3" src="resources/img/nostril picking.jpg">
				</li>
				<li class="imgli" data-imgn="4">
					<h1 data-imgn="4">live cow disection+chemistry</h1>
					<div class="imgcover" data-imgn="4"></div>
					<img data-imgn="4" src="resources/img/beef.jpeg">
				</li>
			</ul>
		</div>
	</div>
	<?php
	include 'footer.html';
	?>
	
	<script>
		$(document).ready(function(){
		$("a[data-btndes='ppr']").attr('id','nav-cur');
		});
	</script><!--set nav-cur -->
	<script src="../script/nav-menu-open-script.js"></script> <!--open menu for nav-->
	<script>
		$('.imgli').mouseover(function(){
			var n =$(this).attr('data-imgn');
			$("div[data-imgn='"+n+"']").css('opacity','0');
			$("h1[data-imgn='"+n+"']").fadeOut(100);
			$('#imgs').css('cursor','pointer');
		});
		$('.imgli').mouseleave(function(){
			var n =$(this).attr('data-imgn');
			$("div[data-imgn='"+n+"']").css('opacity','0.3');
			$("h1[data-imgn='"+n+"']").fadeIn(100);
			
		});
	</script><!--script to for image shading and word appear-->
	<script>
		var vw;
		function resizeimg(){
		vw =  $('body').innerWidth()/100;
		$("li[data-imgn='1']").css('width',55*vw+'px');
		$("li[data-imgn='2']").css('width',45*vw+'px');
		$("li[data-imgn='3']").css('width',35*vw+'px');
		$("li[data-imgn='4']").css('width',65*vw+'px');
		}
		resizeimg();
		$(window).on('resize',function(){
			resizeimg();
		});
	</script><!--format size ignoring scrollbar-->
	
	<script>
	function footerfunc(){
			'use strict';
			var x=document.documentElement.clientWidth/100;
			var y=$('#imgs').position().top+$('#imgs').outerHeight(true);
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
</div>
</body>
</html>