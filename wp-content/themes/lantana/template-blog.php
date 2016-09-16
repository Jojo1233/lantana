<?php 
/*
Template name: blog
*/
?>

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
				<h1 class="ab-h1-blog">Данный раздел в разработке</h1>
				<img src="<?php echo get_template_directory_uri(); ?>/img/Programer.jpg" alt="">
				<div class="ab-author">
					15 сентября 2016 <br> by Аслан Березгов 
				</div>
				<p>Wow, where does the time go? It has already been two months since our previous webinar. As you may recall, our CEO, Brad Williams, shared his experience working with WordPress in the enterprise space. The hour-long webinar was filled with great information from Brad and wrapped up with a number of excellent questions from the live audience. It felt just like being at a WordPress conference, except the entire audience was in their PJs (or so we assume! I know I was.).<br>

				We had such a great time doing the first webinar, we wanted to turn right around and do it all over again. So mark your calendar: On October 6th, 2016, we’re hosting our next webinar: Your WordPress Site Into a Mobile App, hosted by me, John Hawkins.<br>

				A couple of months back, after being head down in AppPresser, I decided to learn firsthand what it takes to turn a WordPress site into a mobile app. I wanted to learn the entire process, from start to finish (using both AppPresser and otherwise), and so I did!<br>

				If you’ve been wondering how to do it, don’t miss this opportunity to pick my brain on the process. I’ll be sharing what worked, what didn’t, the shortcuts I discovered, and the pitfalls I came across.<br>

				Here are the details:</p>
				<div class="ab-author ab-metki">
					Метки: верстка, программирование, wordpress 
				</div>
			</div>
			
		
		</div>
	</div>
</section>

<?php get_footer(); ?>
	