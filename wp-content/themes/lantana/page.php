<?php get_header(); ?>


<section class="section section_position">
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
		</div>
	</div>
</section>

<?php get_footer(); ?>
	