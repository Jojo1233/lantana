<?php
/*
Template Name: Заказ услуги
*/
?>
<?php get_header(); ?>

<section class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-md-offset-3">
				<h1>Заказ услуги</h1>
				<form action="#" class="order-service">
					<input type="text" placeholder="Ваше имя" name="uname">
					<input type="text" placeholder="Ваш телефон" name="tel">
					<textarea name="" id="" cols="30" rows="10" placeholder="Сообщение"></textarea>
						
					<label for="typeservice">Выберите услугу</label>
					<select name="typeservice" id="">
						<option value="">Разработка корпоративного сайта</option>
						<option value="">Разработка лендинга</option>
						<option value="">Разработка интернет-магазина</option>
						<option value="">Доработка сайта</option>
						<option value="">Контекстная реклама</option>
						<option value="">Другое</option>
					</select>
					<label for="budget">Ваш примерный бюджет (в рублях)</label>
					<select name="budget" id="" >
						<option value="">от 10 000 до 30 000</option>
						<option value="">от 30 000 до 60 000</option>
						<option value="">от 60 000 до 90 000</option>
						<option value="">от 90 000 до 120 000</option>
						<option value="">от 120 000 до 150 000</option>
						<option value="">от 150 000</option>
					</select>
					<input type="submit" class="order-call" id="order-service_submit" value="Отправить">
				</form>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
	