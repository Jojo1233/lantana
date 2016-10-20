<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kontakt</title>

	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.css" />
	<link rel="stylesheet" href="libs/wow/animate.css">
	<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />

	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="css/style.css">

</head>
<body class="zk_bg_kontakt">
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

	<?php require_once('includes/header9.php'); ?>	
	<?php require_once('includes/footer.php'); ?>

<div class="container">
	<div class="row">		
			<div class="zk_kontakt">
				<div class="col-md-6">
					<div class="zk_form_all">
						<ul>
							<li class="zk_first_li">KW Real Estate</li>
							<li>Weinstrasse 4</li>
							<li>80333 München</li>
							<li class="zk_br">Frau Maria Iskudi</li>
							<li>Assistentin des Geschäftsführers</li>
							<li>Telefon	+49 (0)89 – 33 99 55 40</li>
							<li>Mobil	+49 (0)172 – 888 11 01</li>
							<li>E-Mail	kw@konstantin-wettig.com</li>
						</ul>
						
						<div class="zk_form">
							<h3 class="zk_first_li">Kontaktformular</h3>
							<form action="" name="feedback" method="post" class="zk_form">		
								<input type="text" name="from" placeholder="Ihr Name(Pflichtfeld)" /><br/>		
								<input type="text" name="to" placeholder="Ihr Name(Pflichtfeld)" /><br/>
								<textarea name="message" cols="" rows="5" placeholder="Ihre Nachricht"></textarea>		
							</form>
							<a href="#">senden<span><img src="img/zk_send.png" alt=""></span></a>		
						</div>					
					</div>
				</div>
				<div class="col-md-6">
					<div class="zk_map">
						<img src="img/zk_map.jpg" alt="">		
					</div>
				</div>		
				<div class="clear"></div>	
			</div>
		
	</div>
</div>

	
</body>
</html>

