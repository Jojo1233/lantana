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


<section class="ah-head">
	<div class="container">
		<span class="ah-head1-span"><i class="fa fa-bars" aria-hidden="true"></i></span>
		<div class="ah-head1">
			<div class="ah-logobox">
				<a href="/"><img src="img/ah-logotop.png" class="img-responsive" alt="ah-logotop"></a>
			</div>
			<span class="ah-head-span">Московская<br>строительная<br>компания</span>
		</div>
		<div class="ah-head2">
			<span class="ah-head-span1">+7 (495) 230-06-53</span>
			<a href="#"><span class="ah-head-span2">Заказать обратный звонок</span></a>
			<a href="#"><span class="ah-head-span3"></span></a>
		</div>
		<div class="ah-head3">
			<a href="#zayavka2" name="modal" class="ah-head-link ah-link">Заказать расчет работ</a>
			<a href="#" class="ah-head-link ah-link1">Загрузить презентацию о компании</a>
			<a href="#" class="ah-head-link2 ah-link2">Личный кабинет</a>
		</div>
	</div>
</section>

<div class="clearfix"></div>

<section class="ah-menu">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<ul class="ah-menu-list">
					<li class="ah-menu-list_item">
						<a href="#"><i class="triangle"></i>Договоры</a>
					</li>
					<li class="ah-menu-list_item">
						<a href="#"><i class="triangle"></i>Контакты для связи</a>
					</li>
					<li class="ah-menu-list_item"><a href="#"><i class="triangle"></i>Профиль</a>
					</li>
					
				</ul>
			</div>
		</div>
	</div>
</section>

<script>

$(document).ready(function(){

	$('.ah-head1-span').click(function(){
		$('.ah-menu-list').slideToggle(500);
	});
	$('.ah-menu-list li').click(function(){
		$(this).find('.ah-submenu-list').slideToggle(500);
	});

});


</script>

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


<section class="ab-lp">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="ab-all-profile-head">
					<span>Контакты для связи</span>
				</div>
			</div>
			<div class="clear"></div>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="profile-wrapp profile-wrapp-all">		
					<div class="ab-profile-img ab-profile-img-2">
						<img src="img/all-1.png" alt="">
					</div>
					<div class="ab-profile-info ab-profile-info-2">
						<div class="ab-first-pro ab-first-pro-2">
							<span>Менеджер по Договору №347 от 28.06.2016 года</span><br>
							<span>Сидоров Иван Михайлович</span>
						</div>
						<div class="ab-prof-table-wrap">
							<div class="ab-prof-table ab-prof-table-img">
								<span>Телефон рабочий</span>
							</div>
							<div class="ab-prof-table">
								<span>+7 (495) 991-42-17 дб.765</span>
							</div>
						</div>
						<div class="ab-prof-table-wrap">
							<div class="ab-prof-table ab-prof-table-img-2">
								<span>Телефон мобильный</span>
							</div>
							<div class="ab-prof-table">
								<span>+7 (987) 654-32-10</span>
							</div>
						</div>
						<div class="ab-prof-table-wrap">
							<div class="ab-prof-table ab-prof-table-img-3">
								<span>Электронная почта</span>
							</div>
							<div class="ab-prof-table">
								<span>sidorov@kariatida-stroy.com</span>
							</div>
						</div>
					</div>
					<div class="ab-right-pr">
						<span class="ab-r-f">Предмет договора</span><br>
						<span class="ab-r-f-2">
						Описание работпо договору со строительной компанией. Три-четыри строки тезисно, чтоб было понятно о чем речь. Описание работпо договору со строительной компанией. Три-четыри строки тезисно, чтоб было понятно о чем речь.Описание работпо договору со строительной компанией. Три-четыри строки тезисно, чтоб было понятно о чем речь.
						</span>	
					</div>	
				</div>	
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="profile-wrapp profile-wrapp-next">
					<div class="ab-profile-img ab-profile-img-next">
						<img src="img/all-2.png" alt="">
					</div>
					<div class="ab-profile-info ab-profile-info-next">
						<div class="ab-first-pro ab-first-pro-next">
							<span class="ab-99">Главный инженер</span><br>
							<span>Петров Сергей Иванович</span>
						</div>
						<div class="ab-prof-table-wrap">
							<div class="ab-prof-table ab-prof-table-img">
								<span>Телефон рабочий</span>
							</div>
							<div class="ab-prof-table">
								<span>+7 (495) 991-42-17 дб.765</span>
							</div>
						</div>
						<div class="ab-prof-table-wrap">
							<div class="ab-prof-table ab-prof-table-img-2">
								<span>Телефон мобильный</span>
							</div>
							<div class="ab-prof-table">
								<span>+7 (987) 654-32-10</span>
							</div>
						</div>
						<div class="ab-prof-table-wrap">
							<div class="ab-prof-table ab-prof-table-img-3">
								<span>Электронная почта</span>
							</div>
							<div class="ab-prof-table">
								<span>sidorov@kariatida-stroy.com</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="profile-wrapp profile-wrapp-next">
					<div class="ab-profile-img ab-profile-img-next">
						<img src="img/all-3.png" alt="">
					</div>
					<div class="ab-profile-info ab-profile-info-next">
						<div class="ab-first-pro ab-first-pro-next">
							<span class="ab-99">Прораб по Договору №123 от 12.05.2015 года</span><br>
							<span>Добрецов Дмитрий Романович</span>
						</div>
						<div class="ab-prof-table-wrap">
							<div class="ab-prof-table ab-prof-table-img">
								<span>Телефон рабочий</span>
							</div>
							<div class="ab-prof-table">
								<span>+7 (495) 991-42-17 дб.765</span>
							</div>
						</div>
						<div class="ab-prof-table-wrap">
							<div class="ab-prof-table ab-prof-table-img-2">
								<span>Телефон мобильный</span>
							</div>
							<div class="ab-prof-table">
								<span>+7 (987) 654-32-10</span>
							</div>
						</div>
						<div class="ab-prof-table-wrap">
							<div class="ab-prof-table ab-prof-table-img-3">
								<span>Электронная почта</span>
							</div>
							<div class="ab-prof-table">
								<span>sidorov@kariatida-stroy.com</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="profile-wrapp profile-wrapp-next">
					<div class="ab-profile-img ab-profile-img-next">
						<img src="img/face-pro.png" alt="">
					</div>
					<div class="ab-profile-info ab-profile-info-next">
						<div class="ab-first-pro ab-first-pro-next">
							<span class="ab-99">Бухгалтер</span><br>
							<span>Трусов Антон Антонович</span>
						</div>
						<div class="ab-prof-table-wrap">
							<div class="ab-prof-table ab-prof-table-img">
								<span>Телефон рабочий</span>
							</div>
							<div class="ab-prof-table">
								<span>+7 (495) 991-42-17 дб.765</span>
							</div>
						</div>
						<div class="ab-prof-table-wrap">
							<div class="ab-prof-table ab-prof-table-img-2">
								<span>Телефон мобильный</span>
							</div>
							<div class="ab-prof-table">
								<span>+7 (987) 654-32-10</span>
							</div>
						</div>
						<div class="ab-prof-table-wrap">
							<div class="ab-prof-table ab-prof-table-img-3">
								<span>Электронная почта</span>
							</div>
							<div class="ab-prof-table">
								<span>sidorov@kariatida-stroy.com</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="profile-wrapp profile-wrapp-next">
					<div class="ab-profile-img ab-profile-img-next">
						<img src="img/all-4.png" alt="">
					</div>
					<div class="ab-profile-info ab-profile-info-next">
						<div class="ab-first-pro ab-first-pro-next">
							<span class="ab-99">Генеральный директор</span><br>
							<span>Серебрякова Анна Сергеевна</span>
						</div>
						<div class="ab-prof-table-wrap">
							<div class="ab-prof-table ab-prof-table-img">
								<span>Телефон рабочий</span>
							</div>
							<div class="ab-prof-table">
								<span>+7 (495) 991-42-17 дб.765</span>
							</div>
						</div>
						<div class="ab-prof-table-wrap">
							<div class="ab-prof-table ab-prof-table-img-2">
								<span>Телефон мобильный</span>
							</div>
							<div class="ab-prof-table">
								<span>+7 (987) 654-32-10</span>
							</div>
						</div>
						<div class="ab-prof-table-wrap">
							<div class="ab-prof-table ab-prof-table-img-3">
								<span>Электронная почта</span>
							</div>
							<div class="ab-prof-table">
								<span>sidorov@kariatida-stroy.com</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</section>

<section class="footer-profile">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="footer-profile-left">
					<ul>
						<li><a href="#">Договоры</a></li>
						<li><a href="#">Контакты</a></li>
						<li><a href="#">Написать письмо руководству</a></li>
						<li><a href="#">Профиль</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="footer-profile-right">
					<div class="ab-right-span">
						<span>Мы в соцсетях</span>
					</div>
					<div class="ab-soc-ico">
						<a href="#"><img src="img/facebook.png" alt=""></a>
						<a href="#"><img src="img/inst.png" alt=""></a>
					</div>
					<div class="clear"></div>
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
