
			function footerfunc(){
			'use strict';
			var x=document.documentElement.clientWidth/100;
			var y=$('.sponsor').position().top+$('.sponsor').outerHeight(true);
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