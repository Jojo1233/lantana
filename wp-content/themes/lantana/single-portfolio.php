<?php get_header(); ?>
<section class="header-inner">
	<?php include_once('template-top-header.php'); ?>
</section>

<section class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="ab-h1-portfolio"><?php the_title(); ?></h1>
			</div>
			<div class="clearfix"></div>
					<?php
					while ( have_posts() ) : the_post();
					?>
			<div class="col-md-6">
				
				<?php the_content(); ?> 
				<h3>Детали проекта</h3>
			
				<div class="ab-wrap-details">	
					<div class="ab-col ab-left">
						<a class="ab-button orange" target="_blank" href="<?php the_field('ссылка_на_верстку'); ?>">Смотреть верстку</a>
					</div>
					<div class="ab-col">
					
						<span class="ab-platforma">Платформа</span><?php the_field('платформа'); ?>
					</div>
					<div class="ab-col">
						
						<span class="ab-platforma">Тип проекта</span><?php the_field('тип_проекта'); ?>
					</div>
				</div>
			</div>	
			<div class="col-md-6">
				<div class="ab-img-monitor">
					<?php $image = get_field('скриншот'); ?>
				<img src="<?php echo $image['url']; ?>" alt="">
				</div>
			<?php endwhile; ?>
		    <?php wp_reset_query(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
	

