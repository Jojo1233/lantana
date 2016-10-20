<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Transaktionsvolumen</title>

	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.css" />
	<link rel="stylesheet" href="libs/wow/animate.css">
	<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />

	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="css/style.css">

</head>
<body class="ah-transakvolbody">
	<script src="libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="libs/owl.carousel/owl.carousel.js"></script>
	<script src="libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="libs/wow/wow.min.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>

	<script>
    	new WOW().init();
    </script>

	<script src="js/responsiveTabs.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/common.js"></script>

	<?php require_once('includes/header5.php'); ?>
	
<div class="clearfix"></div>

<section class="ah-transakvol">
    <div class="container-fluid">
	    <div class="row">
		    <div class="col-md-12 col-sm-12 col-xs-12">
				<div class="az-col">
					<div class="ah-arr ah-arr1"></div>
				</div>
				<div class="az-col">
					<div class="ah-arr ah-arr2"></div>
					<div class="ah-transleft">
						<span class="ah-transakvol-title">2014</span>
						<span class="ah-transakvol-text">40 MIO.<br>EURO</span>
					</div>
				</div>
				<div class="az-col">
					<div class="ah-arr ah-arr3"></div>
				</div>
				<div class="az-col">
					<div class="ah-arr ah-arr4"></div>
					<div class="ah-transright">
						<span class="ah-transakvol-title">2015</span>
						<span class="ah-transakvol-text">60 MIO.<br>EURO</span>
					</div>
				</div>
				<div class="az-col">
					<div class="ah-arr ah-arr5"></div>
					<div class="az-arrow"></div>
				</div>
				<div class="clearfix"></div>
				

				

		    </div>
	    </div>
    </div>
</section>
<script>
	var az_deg = function(a, b){
		return Math.atan(a/b)/Math.PI*180;
	};
	$(document).ready(function(){
		var start = 50;
		var h1 = 340;
		var h2 = 450;
		var h3 = 550;
		var w1 = $('.az-col').width();
		$('.ah-arr1').css({
			'bottom' : start + 'px',
			'left' : '0px',
			'transform': 'skewY(' + -az_deg(h1-start, w1) + 'deg)'
		});
		$('.ah-arr2').css({
			'bottom' : h1 + 'px',
			'left' : '0px',
		});
		$('.ah-arr3').css({
			'bottom' : h1 + 'px',
			'left' : '0px',
			'transform': 'skewY(' + -az_deg(h2-h1, w1) + 'deg)'
		});
		$('.ah-arr4').css({
			'bottom' : h2 + 'px',
			'left' : '0px',
		});
		$('.ah-arr5').css({
			'bottom' : h2 + 'px',
			'left' : '0px',
			'transform': 'skewY(' + -az_deg(h3-h2, w1) + 'deg)'
		});
		$('.az-arrow').css({
			'bottom' : h2 + 'px',
			'left' :  '0px',
			'transform': 'translate(-15px, 5px) rotate(' + -az_deg(h3-h2, w1) + 'deg)',
			'transform-origin': '50% 50%',
		});
		$('.az-arrow').animate({
			'bottom' : h3 + 'px',
			'left' : w1 + 'px',
		}, 2400);
		$('.ah-transleft').height(h1-100);
		$('.ah-transright').height(h2-100);
	});
	
</script>
<div class="clearfix"></div>


	<?php require_once('includes/footer.php'); ?>

	
</body>
</html>

