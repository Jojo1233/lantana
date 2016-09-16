
<?php get_header(); ?>
<section class="header-vn">
	<?php include_once('template-top-header.php'); ?>
</section>


<section class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' » '); ?>
				
			</div>
			<div class="clearfix"></div>
			<div class="col-md-8 col-md-offset-2">
				
				<?php wp_reset_query(); ?>
				<?php $wp_query = new WP_Query(array('cat' => '3')); ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<h1 class="ab-h1-blog"> <?php the_title(); ?></h1>
				<?php the_post_thumbnail(); ?>
				<div class="ab-author">
					<?php the_time('d m Y'); ?> <br> by Аслан Березгов 
				</div>
				<?php the_excerpt(); ?>
				<div class="ab-author ab-metki">
					<?php the_tags(); ?>
				</div>
				
				<a class="ab-button-blog-1" href="<?php the_permalink(); ?>" target="_blank">Читать далее</a>
				<hr>
	
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
	