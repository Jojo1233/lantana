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
					<li><a href="#">О компании</a></li>
					<li><span>Контакты</span></li>
				</ul>
			</div>
    	</div>
    </div>
</section>

<section class="ab-contacts">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-12 col-xs-12">
				<span class="ab-contact-title">
					Контакты
				</span><br>
				<span class="ab-contact-txt">
					Адрес: 123298, г. Москва, ул. Берзарина, дом 12<br>
					Метро: Октябрьское поле<br>
					Телефон: +7 (495) 230-06-53<br>
					Часы работы: с 10-00 до 20-00, выходные дни - суббота, воскресенье.<br>
				</span>
				<span class="ab-contact-title-2"> Отдел снабжения </span><br>
				<span class="ab-contact-txt">
					<a href="#">snab@kariatida-stroy.com</a><br>
					Просьба предложения по строительным материалам и услугам отправлять только на этот e-mail,<br> с других почтовых ящиков предложения по поставкам автоматически удаляются.
				</span><br>

				<span class="ab-contact-title-2"> Отдел по работе с заказчиками </span><br>
				<span class="ab-contact-txt">
					<a href="#">order@kariatida-stroy.com</a><br>
					Телефон: +7 (495) 230-06-53<br>
					Менеджер по сопровождению проектов: Артем Почтарь - доб. 1010,<br>
					Менеджер по сопровождению проектов: Дмитрий Герасимчук - доб. 1008
				</span>
				<div class="ab-tablitsa">
					<table>
					  <tr class="bl">
					    <td>№ п/п </td>
					    <td>Наименование работ</td>
					    <td>Ед.Изм.</td>
					    <td>Стоимость.руб</td>
					  </tr>
					  <tr class="table-zag">
					    <td colspan="4">Раздел 1. Земляные работы</td>
					    
					  </tr>
					  <tr>
					    <td>1</td>
					    <td>Разработка грунта вручную</td>
					    <td>м3</td>
					    <td>800.00</td>
					  </tr>
					  <tr>
					    <td>2</td>
					    <td>Устройство основания песчаного или щебеночного<br>(с разравниванием и уплотнением вибротрамбовкой)</td>
					    <td>м3</td>
					    <td>400.00</td>
					  </tr>
					  <tr class="table-zag">
					    <td colspan="4">Раздел 2. Бетонные и ж/б работы (монолитные)</td>
					  </tr>
					  <tr>
					    <td>1</td>
					    <td>Устройство бетонной подготовки</td>
					    <td>м3</td>
					    <td>3000.00</td>
					  </tr>
					  <tr>
					    <td>2</td>
					    <td>Устройство ленточных монолитных фундаментов</td>
					    <td>м3</td>
					    <td>4300.00</td>
					  </tr>
					  <tr>
					    <td>3</td>
					    <td>Устройство ростверков</td>
					    <td>м3</td>
					    <td>4500.00</td>
					  </tr>
					  <tr>
					    <td>4</td>
					    <td>Устройство ж/б свай (ø300мм, L=1,8м)</td>
					    <td>шт</td>
					    <td>1000.00</td>
					  </tr>
					</table>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12">
				<h2>Компания</h2>
				<ul>
					<li><a href="#">О нас</a></li>
					<li><a href="#">События</a></li>
					<li><a href="#">Статьи</a></li>
					<li><a href="#">Презентация</a></li>
					<li><a href="#">Отзывы</a></li>
					<li><a href="#">Вакансии</a></li>
					<li><a href="#">Контакты</a></li>
					<li><a href="#">Реквизиты</a></li>
				</ul>
				<div class="ab-info-box">
					<span>Вы можете бесплатно заказать<br> расчет строительства под ключ<br> по Вашему проекту</span><br> 
					<a href="#" class="button-2">Заказать расчет работ</a>
				</div>
			</div>
			<div class="clear"></div>



				
			


















			<div class="col-md-12 col-sm-12 col-xs-12">
				<span class="ab-contact-title-2">Карта</span>
				<div class="ab-map-contact">
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=ltLwYh_QvfOw_Uc6MZWvB7fyr8p5Y6-Q&amp;width=100%&amp;height=420&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
				</div>
			</div>
			<div class="clear"></div>

		</div>
	</div>
</section>

<?php require_once('includes/footer.php'); ?>
</body>
</html>
