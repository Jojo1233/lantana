<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Главная страница</title>

	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.css" />
	<link rel="stylesheet" href="libs/wow/animate.css">
	<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />

	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Droid+Sans" />
	

	<meta content="telephone=no" name="format-detection"/>
	

	

</head>
<body>
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


<?php require_once('includes/header.php'); ?>

<section class="ah-wrapnavbox">
    <div class="container">
	    <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<ul class="ah-navbox">
					<li><a href="#">Личный кабинет</a></li>
					<li><span>Контакты для связи</span></li>
				</ul>
			</div>
    	</div>
    </div>
</section>

<section>
    <div class="container">
	    <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="ab-login-wrapper">
					<div class="ab-login-header">	
						<span>Авторизация</span>
					</div>
					<div class="clear"></div>
					<div class="ab-incorrect-login ab-incorrect-login-2">
						<div class="red-kresik-2"></div>
						<div class="ab-log-txt">
							<span>Не правильный логин или пароль</span>
						</div>	
						<div class="kresik-2"></div>
						<div class="clear"></div>
					</div>
					<div class="ab-window-modal-bottom">	
				    	<form class="form2">
							<div class="ab-inputs-wrap ab-inputs-wrap-2">
								<div class="ab-inputs-span ab-inputs-span-2">
									<span>Введите email</span>
								</div>
								<div class="ab-inputs">
									<input class="inputs-text" type="text" placeholder="myemail@yandex.ru" name="name" />
								</div>
							</div>
							<div class="ab-inputs-wrap ab-inputs-wrap-2">
								<div class="ab-inputs-span ab-inputs-span-2">
									<span>Введите пароль</span>
								</div>
								<div class="ab-inputs">
									<input class="inputs-text" type="text" placeholder="*********" name="name"/>
								</div>
							</div>
							<div class="ab-remember">
								<label>
								    <input class="checkbox" type="checkbox" name="checkbox-test" checked>
								    <span class="checkbox-custom"></span>
								    <span class="label">Запомнить меня</span>
								</label>
							</div>
								<div class="ab-but-log ab-but-log-2">
									<span><a href="#">Забыли свой пароль?</a></span>
									<label class="ab-input-label ab-input-label-2">
							    		<input type="submit" class="button-2 ab-otprvit" value="войти">
						    		</label>
						    	</div>
						    	<div class="clear"></div>	
						    </div>     		
						</form>
					</div>
				</div>
			</div>
    	</div>
    </div>
</section>

<section class="footer-bottom">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-12 col-xs-12">
				<span class="ab-footer-txt">Сайт разработан в <a href="#">Citadel.digital</a></span>
			</div>
			<div class="col-md-7 col-sm-12 col-xs-12">
				<span class="ab-footer-txt">© 2008-2016 «Кариатида-СТРОЙ» - строительство загородных домов. Все права защищены </span>
			</div>
			<div class="col-md-2 col-sm-12 col-xs-12">
				<img class="img-responsive" src="img/footer-logo.png" alt="">
			</div>
		</div>
	</div>
</section>
</body>
</html>
