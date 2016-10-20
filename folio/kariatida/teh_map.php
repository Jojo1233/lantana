
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
<?php require_once('includes/banner.php'); ?>

<section class="ah-wrapnavbox">
    <div class="container">
	    <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<ul class="ah-navbox">
					<li><a href="#">Главная</a></li>
					<li><span>Карта сайта</span></li>
				</ul>
			</div>
    	</div>
    </div>
</section>

<section class="ab-site-map-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
			<h1>Карта сайта</h1>
				<ul class="ab-map-list">
					<li><a href="#">Главная</a></li>
					<li><a href="#">О нас</a></li>
					<li>
						<a href="#">Услуги (каталог)</a>
						<ul class="sub-list">
							<li>
								<a href="#">3.1.   Строительство</a>
								<ul class="sub-list">
									<li><a href="#">3.1.1. Деревянные дома</a></li>
									<li><a href="#">3.1.2. Кирпичные дома</a></li>
									<li><a href="#">3.1.3. Монолитные дома</a></li>
									<li><a href="#">3.1.4. Особенности домов</a></li>
								</ul>
							</li>
							<li>
								<a href="#">3.2. Ремонт</a>
								<ul class="sub-list">
									<li><a href="#">3.2.1. Ремонт квартир</a></li>
									<li><a href="#">3.2.2. Отделка коттеджей</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Дополнительно (каталог)</a>
						<ul class="sub-list">
							<li>
								<a href="#">4.1. Инженерные системы</a>
								<ul class="sub-list">
									<li><a href="#">4.1.1. Детальная</a></li>
								</ul>
							</li>
							<li>
								<a href="#">4.2. Товары и услуги партнеров</a>
								<ul class="sub-list">
									<li><a href="#">4.2.1. Детальная</a></li>
								</ul>

							</li>
							<li>
								<a href="#">4.3. Архитекторы</a>
								<ul class="sub-list">
									<li><a href="#">4.3.1. Детальная</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Проекты</a>
						<ul class="sub-list">
							<li><a href="#">5.1. Детальная страница проекта</a></li>
						</ul>
					</li>
					<li><a href="#">Цены</a></li>
					<li>
						<a href="#">Наши работы</a>
						<ul class="sub-list">
							<li><a href="#">7.1. Детальная страница работы</a></li>
						</ul>
					</li>
					<li>
						<a href="#">События</a>
						<ul class="sub-list">
							<li><a href="#">8.1. Детальная страница события (запись в блоге)</a></li>
						</ul>
					</li>
					<li><a href="#">Контакты</a></li>
					<li><a href="#">Карта сайта</a></li>
					<li><a href="#">Страница результатов поиска</a></li>
					<li><a href="#">Страница 404</a></li>
					<li><a href="#">Страница «На сайте ведутся технические работы…»</a></li>
				</ul>
			</div>
			
		</div>
	</div>
</section>

<?php require_once('includes/footer.php'); ?>
</body>
</html>

