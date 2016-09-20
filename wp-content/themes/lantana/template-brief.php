<?php 
/*
Template name: Бриф
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
				
				<table>
					<tr>
						<td>
							левая стороня
						</td>
						<td>
							правая сторона
						</td>
					</tr>
					<tr>
						<td>
							Ваше имя
						</td>
						<td>
							<input type="text">
						</td>
					</tr>
				</table>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
	