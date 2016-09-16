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

<div id="zvonok" class="ocenka"> 
	<a href="#" class="close"/></a>
	<form action="#" class="zvonok_form">
		<div class="topline"></div>
		<p>
			<?php echo $popup_zv; ?>
		</p>
		<input type="text" placeholder="<?php echo $popup_zv_name; ?>" name="uname">
		<input type="text" placeholder="<?php echo $popup_zv_tel; ?>" name="tel">
		<input type="submit" value="<?php echo $popup_zv_submit; ?>" id="zvonok_form_submit" class="button-1">
	</form>
</div>

<a  href="#thank-spage3_form" name="modal-thanks"></a>
<div id="thank-spage3_form" class="thanks window2"> 
	<a href="#" class="close"/></a>
	<p class="title" id="thanks-title"><?php echo $popup_tanks; ?></p> 
	<p class="cont" id="thanks-cont"><?php echo $popup_yhanks_text2; ?></p>
</div>


<?php wp_footer(); ?>

</body>
</html>