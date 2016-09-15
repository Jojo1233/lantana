<?php
/*
Template Name: Портфолио
*/
?>
<?php get_header(); ?>
<section class="main-content">
	<h1><?php the_title(); ?></h1>
    <?php wp_reset_query(); ?>
    <?php $wp_query = new WP_Query(array(
        'post_type' => 'portfolio',
        'post_status' => 'publish',
        'caller_get_posts'=> 1)
         ); ?>
    <div class="container">
	   	<div class="row">
		    <?php  while ($wp_query->have_posts()) : $wp_query->the_post(); ?>  
		    <div class="col-md-4">
		  		<div class="portfol-block">
		  			<a href="<?php the_permalink(); ?>">
			  			<?php $image = get_field('миниатюра'); ?>
						<img src="<?php echo $image['url'] ?>" alt="">
						<div class="portfol-block_inner">
							<span class="title">Корпоративный сайт</span>
							
						</div>
					</a>
		  		</div>
	  		</div>
		    <?php endwhile; ?>
		    <?php wp_reset_query(); ?>
		    <div class="clearfix"></div>
		    <div class="clear"></div>
		</div>
	</div>
	<br><br><br>

</section>

<?php get_footer(); ?>
	