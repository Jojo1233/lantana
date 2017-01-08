<?php 
/*
Template name: blog
*/
?>

<?php get_header(); ?>


<section class="section section_position">
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
				<h1 class="ab-h1-blog"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<?php the_post_thumbnail(); ?>
				<div class="ab-author">
				<?php echo get_the_time('d').' '.repl_mon(get_the_time('m')).' '.get_the_time('Y'); ?>
				<br> 
				<?php $author_id=$post->post_author; ?>
				<?php echo the_author_meta( 'user_nicename' , $author_id ); ?> 

				</div>
				<?php the_excerpt(); ?>
				<div class="ab-author ab-metki">
					<?php the_tags(); ?>
				</div>
				
				<a class="ab-button-blog-1" href="<?php the_permalink(); ?>">Читать далее</a>
				<hr>
	
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
	