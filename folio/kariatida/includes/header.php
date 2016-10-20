
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
			<div class="col-md-12 col-sm-12 col-xs-12 ah-col">
				<ul class="ah-menu-list">
					<li class="ah-menu-list_item">
						<a href="#"><i class="triangle"></i>Строительство под ключ</a>
						<ul class="ah-submenu-list">
							<li><a href="#">Деревянные дома</a></li>
							<li><a href="#">Кирпичные дома</a></li>
							<li><a href="#">Монолитные дома</a></li>
							<li><a href="#">Бани и сауны</a></li>
						</ul>
						 <div class="submenu-bg"></div>
					</li>
					<li class="ah-menu-list_item">
						<a href="#"><i class="triangle"></i>Отдельные этапы работ</a>
						<ul class="ah-submenu-list">
							<li><a href="#">Фундамент</a></li>
							<li><a href="#">Стены</a></li>
							<li><a href="#">Кровля</a></li>
							<li><a href="#">Отделочные работы</a></li>
							<li><a href="#">Инженерные системы</a></li>
							<li><a href="#">Дополнительные услуги</a></li>
						</ul>
						<div class="submenu-bg"></div>
					</li>
					<li class="ah-menu-list_item"><a href="#">Проекты</a>
					</li>
					<li class="ah-menu-list_item">
						<a href="#"><i class="triangle"></i>О нас</a>
						<ul class="ah-submenu-list">
							<li><a href="#">О нас</a></li>
							<li><a href="#">События</a></li>
							<li><a href="#">Статьи</a></li>
							<li><a href="#">Презентация</a></li>
							<li><a href="#">Отзывы</a></li>
							<li><a href="#">Вакансии</a></li>
							<li><a href="#">Контакты</a></li>
							<li><a href="#">Реквизиты</a></li>
						</ul>
						 <div class="submenu-bg"></div>
					</li>
					<li class="ah-menu-list_item">
						<a href="#"><i class="triangle"></i>Цены</a>
						<ul class="ah-submenu-list">
							<li><a href="#">Цены 1</a></li>
							<li><a href="#">Цены 2</a></li>
							<li><a href="#">Пример расчета сметы</a></li>
						</ul>
						 <div class="submenu-bg"></div>
					</li>
					<li class="ah-menu-list_item"><a href="#">Наши работы</a>
					</li>
					<li class="ah-menu-list_item"><a href="#">Контакты</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<script>

$(document).ready(function(){
	if(window.matchMedia('(min-width : 320px)').matches)
	    {
			$('.ah-head1-span').click(function(){
				$('.ah-menu-list').slideToggle(500);
			});
			// $('.ah-menu-list li').click(function(){
			// 	$(this).find('.ah-submenu-list').slideToggle(500);
			// });
		}

	if(window.matchMedia('(max-width : 992px)').matches)
	    {

			// $('.ah-head1-span').click(function(){
			// 	$('.ah-menu-list').slideToggle(500);
			// });
			$('.ah-menu-list li').click(function(){
				$(this).find('.ah-submenu-list').slideToggle(500);
			});
		}
});


</script>