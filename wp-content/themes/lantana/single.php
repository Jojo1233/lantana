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
				<img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="" class="img-responsive">
				<?php the_content(); ?>
				<?php endwhile;	?><br>

				<script type="text/javascript">(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>
<div class="pluso" data-background="transparent" data-options="medium,square,line,horizontal,nocounter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print"></div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
	