<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dondate</title>
<link href="css/body.css" rel="stylesheet" type="text/css">
<link href="css/woss-footer.css" rel="stylesheet" type="text/css">
<link href="css/wossr-header.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
<div id="holder">
	
	<?php 
	include 'header.html';
	?><!--header-->
	
	<?php 
	include 'footer.html';
	?><!--footer-->
</div>

	<script>
		$(document).ready(function(){
		$("a[data-btndes='dnt']").attr('id','nav-cur');
		});
	</script><!--set nav-cur -->
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