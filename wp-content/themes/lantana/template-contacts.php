<?php
/*
Template Name: Контакты
*/
?>
<?php get_header(); ?>

<section class="header-inner">
	<?php include_once('template-top-header.php'); ?>
</section>

<section class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php the_title(); ?></h1>
				<?
				while ( have_posts() ) : the_post();
					the_content(); 
				endwhile;
				?>
			</div>
			<div class="clearfix"></div>
			
		</div>
	</div>
	<section class="map">
				<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=4lJ3eValpAIzaMs-B5LfiUzEZS3cFWia&width=100%&height=350"></script>
			</section>
</section>

<?php get_footer(); ?>
	
