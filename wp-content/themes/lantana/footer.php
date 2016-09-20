<?php wp_reset_query(); ?>
<?php $wp_query = new WP_Query('page_id=128'); ?>
<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
<?php 
$popup_zv = get_field('заказать_звонок_заголовок'); 
$popup_zv_name = get_field('заказать_звонок_ваше_имя'); 
$popup_zv_tel = get_field('заказать_звонок_ваш_телефон'); 
$popup_zv_submit = get_field('заказать_звонок_кнопка_отправить'); 
$popup_tanks = get_field('попап_спасибо_текст1'); 
$popup_yhanks_text2 = get_field('попап_спасибо_текст2'); 

$footer_text1 = get_field('футер_текст_1');  
?>
<?php endwhile;?>
<?php wp_reset_query(); ?>

<section class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<span class="copyright"><?php echo $footer_text1; ?></span>
			</div>
			<div class="col-md-3">
				<div class="soc-block">
                    <a href="https://www.facebook.com/profile.php?id=100004172596377" target="_blank" class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
                    <a href="https://vk.com/slantana" target="_blank" class="vk"><i class="fa fa-vk" aria-hidden="true"></i></a>
                    <a href="skype:SkypeUser"><span class="skype"><i class="fa fa-skype" aria-hidden="true"></i></span></a> 
                </div>    
			</div>
			
		</div>
	</div>
</section>

	<div id="mask"></div>

	<div id="zvonok" class="window"> 
		<form action="" class="common-form form1">
			<span class="close"></span>
			<span class="form-title">ОСТАВЬТЕ ВАШЕ ИМЯ И НОМЕР <br>
				ТЕЛЕФОНА И МЫ С ВАМИ <br>
				СВЯЖЕМСЯ В БЛИЖАШЕЕ <br>
				ВРЕМЯ</span>
			<input type="text" name="uname" placeholder="Введите Ваш имя">
			<input type="text" name="tel" placeholder="Введите Ваш телефон" class="phone">
			<input type="hidden" name="form" value="Форма - заказать звонок">
			<input type="submit" id="form1_submit" class="button-1" value="Заказать звонок">
		</form>
	</div>

	<div id="service" class="window"> 
		<form action="" class="common-form form2">
			<span class="close"></span>
			<span class="form-title">ОСТАВЬТЕ ВАШЕ ИМЯ И НОМЕР <br>
				ТЕЛЕФОНА И МЫ С ВАМИ <br>
				СВЯЖЕМСЯ В БЛИЖАШЕЕ <br>
				ВРЕМЯ</span>
			<input type="text" name="uname" placeholder="Введите Ваш имя">
			<input type="text" name="tel" placeholder="Введите Ваш телефон" class="phone">
			<input type="hidden" name="form" value="Форма - заказать звонок">
			<input type="submit" id="form2_submit" class="button-1" value="Заказать">
		</form>
	</div>


	<div id="thanks" class="window"> 
		<form action="" class="common-form">
			<span class="close"></span>
			<span class="form-title">СПАСИБО ЗА ВАШУ <br> ЗАЯВКУ!</span>
			<span class="form-subtitle">Наши специалисты с Вами свяжутся <br> в ближайшее время.</span>
		</form>
	</div>

	<a href="#thanks" name="modal"></a>




<?php wp_footer(); ?>

</body>
</html>