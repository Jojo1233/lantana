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

				<h1><?php the_title(); ?></h1>
				<?php while ( have_posts() ) : the_post(); ?>
				<?php	the_post_thumbnail(); ?>
				<?php the_content(); ?>
				<?php endwhile;	?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
	