<?php
/*
Template Name: Разработка сайтов
*/
?>
<?php get_header(); ?>
<section class="main-content">
	<div class="container">
		<div class="row">
			<h1><?php the_title(); ?></h1>
			<div class="col-md-12">
				Рассчитайте стомость услуги с помощю калькулятора
				<br><br>
				<form action="">
					<label for="sel-type">Тип сайта</label>
					<select name="sel-type">
						<option value="1">Сайт-визитка</option>
						<option value="2">Сайт-каталог</option>
						<option value="3">Лендинг пейдж</option>
						<option value="4">Корпоративный сайт</option>
						<option value="5">Интернет-магазин</option>
					</select>
					<input type="hidden" name="type-of-site">
					<br>
					<label for="count-design">Количество вариантов дизайна</label>
					<input type="text" value="1">
					<input type="hidden" name="count-design-hidden" value="1">
					<br>
					<label for="count-base-pages">Количество базовых страниц</label>
					<input type="text" value="2">
					<input type="hidden" name="count-base-pages-hidden" value="2">
					<br>
					<label for="count-base-pages">Количество блоков с применением эффектов анимации</label>
					<input type="text" value="2">
					<input type="hidden" name="count-base-pages-hidden" value="2">
					<br>
					<label for="count-base-pages">Количесвто типовых слайдеров</label>
					<input type="text" value="2">
					<input type="hidden" name="count-base-pages-hidden" value="2">
					<br>
					<label for="count-base-pages">Количесвто типовых счетчиков обратного времени</label>
					<input type="text" value="2">
					<input type="hidden" name="count-base-pages-hidden" value="2">
					<br>
					<label for="count-base-pages">Количесвто калькуляторов</label>
					<input type="text" value="2">
					<input type="hidden" name="count-base-pages-hidden" value="2">
					<br>
					<label for="count-base-pages">Блоки "Акция"</label>
					<input type="text" value="2">
					<input type="hidden" name="count-base-pages-hidden" value="2">
					<br>
					<label for="count-base-pages">Блоки "Голосования"</label>
					<input type="text" value="2">
					<input type="hidden" name="count-base-pages-hidden" value="2">
					<br>
					<label for="count-base-pages">Верстка страниц</label>
					<input type="text" value="2">
					<input type="hidden" name="count-base-pages-hidden" value="2">
					<br>
					<label for="count-base-pages">Программирование страниц</label>
					<input type="text" value="2">
					<input type="hidden" name="count-base-pages-hidden" value="2">
					<br>
				</form>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
	