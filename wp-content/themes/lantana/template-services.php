<?php
/*
Template Name: Услуги
*/
?>
<?php get_header(); ?>
<section class="main-content">
	<div class="container">
		<div class="row">
			<h1><?php the_title(); ?></h1>
			<div class="col-md-4">
				<div class="service-block">
					<div class="img-box">
						<img src="<?php echo get_template_directory_uri(); ?>/img/company2.jpg" alt="">
					</div>
					<span class="title">Разработка сайтов</span>
					<span class="price">от 30 000 рублей</span>
					<a href="/?p=99" class="more button-2">Подробнее</a>
				</div>
			</div>

			<div class="col-md-4">
				<div class="service-block">
					<div class="img-box">
						<img src="<?php echo get_template_directory_uri(); ?>/img/kontext.jpg" alt="">
					</div>
					<span class="title">Контекстная реклама</span>
					<span class="price">от 30 000 рублей</span>
					<a href="<?php the_permalink(); ?>" class="more button-2">Подробнее</a>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="service-block">
					<div class="img-box">
						<img src="<?php echo get_template_directory_uri(); ?>/img/dor.jpg" alt="">
					</div>
					<span class="title">Техническая поддержка</span>
					<span class="price">от 1 000 рублей</span>
					<a href="<?php the_permalink(); ?>" class="more button-2">Подробнее</a>
				</div>
			</div>		
		</div>
	</div>
</section>


<?php get_footer(); ?>
	