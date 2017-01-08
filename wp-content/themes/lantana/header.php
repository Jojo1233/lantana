<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8" />
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<meta name="keywords" content="" />
    <meta name="description" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome-4.5.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/owl-carousel/owl.carousel.css" />
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/wow/animate.css">
	<link rel="icon" href="favicon.ico">

	<script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/jquery-mousewheel/jquery.mousewheel.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/waypoints/waypoints-1.6.2.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/scrollto/jquery.scrollTo.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/owl-carousel/owl.carousel.min.js"></script>
	


	<script src="<?php echo get_template_directory_uri(); ?>/libs/wow/wow.min.js"></script>

	<script>
    	new WOW().init();
    </script>


	<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.min.js"></script>
	<?php wp_head(); ?>
	
</head>
<body>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter36925260 = new Ya.Metrika({
                    id:36925260,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/36925260" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


<div class="wrap">
	<a name="home"></a>
    <?php 
if ( is_home() ) {
	require_once('template-top-header.php');
}
else {
	require_once('template-top-header__inner.php');
}
 ?>