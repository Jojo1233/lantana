    <?php get_header(); ?>

    <?php wp_reset_query(); ?>
    <?php $wp_query = new WP_Query('page_id=128'); ?>
    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
    <?php 
    $TopMainText = get_field('main_top_text'); 
    $Head_portfoio = get_field('заголовок_портфолио'); 
    $Head_service = get_field('заголовок_услуги'); 
    $Head_review = get_field('заголовок_отзывы'); 
    $Head_contacts = get_field('заголовок_контакты'); 

    $button_portfolio = get_field('кнопка_посмотреть_портфолио'); 
    $button_pricing = get_field('кнопка_узнать_стоимость'); 
    $button_order = get_field('кнопка_заказать_сейчас'); 
    $button_send = get_field('кнопка_отправить'); 
    $button_code = get_field('кнопка_посмотреть_верстку'); 
    $button_tosite = get_field('кнопка_перейти_на_сайт'); 

    ?>
    <?php endwhile;?>
    <?php wp_reset_query(); ?>


    <a name="main"></a>
    <section class="header">
   
        <?php require_once('template-top-header.php') ?>       
        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <?php echo $TopMainText; ?> 
                    </div>
                </div>
            </div>  
        </div>

        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 left">
                                <a href="#portfolio" class="button-1"><?php echo $button_portfolio; ?></a>
                            </div>
                            <div class="col-md-6 col-sm-6 right">
                                <a href="#services" class="button-1"><?php echo $button_pricing; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>
    
    <div class="clearfix"></div>

<a name="portfolio"></a>
<section class="home-page-portfolio">	
	<?php wp_reset_query(); ?>
	<?php $wp_query = new WP_Query(array(
	   'post_type' => 'portfolio',
	   'post_status' => 'publish',
	   'caller_get_posts'=> 1)
	); ?>
	<div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $Head_portfoio ?></h2>
            </div>
            
	    	<div class="clearfix"></div>
		    <?php  while ($wp_query->have_posts()) : $wp_query->the_post(); ?>  
		    <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="portfol-block">
                    <div class="figure">
                        <div class="figure-img">
                            <?php $image = get_field('миниатюра'); ?>
                            <img src="<?php echo $image['url'] ?>" alt="" class="img-responsive">
                        </div>
                     
                        <div class="overlay">
                            <div class="overlay-inner">
                                <a href="<?php the_permalink(); ?>">
                                    <span class="title"><?php the_title(); ?></span>
                                </a>
                                <?php if (get_field('вид_работы')=='Верстка') { ?>
                                <a href="<?php echo "/".get_field('ссылка_на_верстку') ?>" class="button-2" target="_blank"><?php echo $button_code; ?></a>
                                <?php } ?>
                                <?php if (get_field('вид_работы')=='Сайт') { ?>
                                <a href="<?php echo get_field('ссылка_на_сайт') ?>" class="button-2" target="_blank"><?php echo $button_tosite; ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="figure-caption">
                        <div class="caption-left">
                            <span class="title">Веб-сайт</span>
                            <span class="sub-title">Вид работы: <?php echo get_field('тип_проекта') ?></span>

                        </div>
                        <div class="caption-right">
                            <p>
                                <?php if (get_field('описание')=="") { ?>
                                
                                    Lorem ipsum dolor sit amet.zxf consectetui addtticing elit,sed do eiusmod tdempor ini didunt utthoi laboure et.Lorem ipsum ne.
     
                                <?php } else { ?>
                                <?php echo get_field('описание'); } ?>

                            </p>
                        </div>
                    </div>
                </div>
	  		</div>
		    <?php endwhile; ?>
		    <?php wp_reset_query(); ?>
		    <div class="clearfix"></div>
        </div>  
	</div>
</section>

<a name="services"></a>
<section class="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $Head_service; ?></h2>
            </div>
            <div class="clearfix"></div>
            <?php wp_reset_query(); ?>
            <?php $wp_query = new WP_Query(array('post_type' => 'service')); ?>
            <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <div class="col-md-4">
                <div class="service-block wow fadeInUp" data-wow-duration="1.3s">
                    <span class="icon-block"><i class="fa fa-html5"></i></span>
                    <span class="title"><?php the_title(); ?></span>
                    <p class="desc"><?php echo get_field('услуги_краткое_описание_'); ?>
                    </p>
                    <div class="price">
                     <?php echo get_field('услуги_цена_'); ?>
                    </div>
                     <a href="#zvonok" name="modal-thanks" class="button-5"><?php echo $button_order; ?></a>
                </div>
            </div>
            <?php endwhile;?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>
 

<section class="advantage parallax-window" data-parallax="scroll" data-image-src="/video/avd2.jpg">

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Почему следует заказать услугу у нас?</h2>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="adv-box">
                            <span class="advant-title">Железные <br>сроки</span>
                            <p>Мы стараемся придерживаться заранее оговоренных сроков</p>
                        </div>    
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="adv-box">
                            <span class="advant-title">Узкая <br> специализация</span>
                            <p>Мы работам только с использованием CMS Wordpress, что позволяет фокусированно решать задачи</p>
                        </div> 
                    </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="adv-box">
                            <span class="advant-title">Высокое <br>качество кода</span>
                            <p>Мы пишем читабельный код, который пригоден для дальнейшего сопровождения</p>
                        </div> 
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="adv-box">
                            <span class="advant-title">Опыт <br> работы</span>
                            <p>Нами создано более 150 проектов</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            
		</div>
	</div>
</section> 

<!-- Блок Технологии (Аслан) 17.09.16  -->

<section class="ab-h2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Технологии</h2>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="ab-tehnology-wrap">
                            <div class="ab-tehnology-table ab-html5">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/html5.png" alt="">
                            </div>
                            <div class="ab-tehnology-table">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/css3.png" alt="">
                            </div>
                            <div class="ab-tehnology-table">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/java.png" alt="">
                            </div>
                            <div class="ab-tehnology-table">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/jquery.png" alt="">
                            </div>
                            <div class="ab-tehnology-table">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/boot.png" alt="">
                            </div>
                            <div class="ab-tehnology-table">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/mysql.png" alt="">
                            </div>
                            <!--<div class="ab-tehnology-table">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/ajs.png" alt="">
                            </div>-->
                            <div class="ab-tehnology-table">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/git.png" alt="">
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section> 

<!--<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="ab-tehnology-wrap2">    
                    <div class="ab-tehnology-table2">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/mysql.png" alt="">
                    </div>
                    <div class="ab-tehnology-table2">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/ajs.png" alt="">
                    </div>
                    <div class="ab-tehnology-table2">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/git.png" alt="">
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>-->

<!-- //////////////////////////// -->

<!-- Блок платформы -->
<section>
    <div class="container">  
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="ab-tehnology-wrap2 ab-platforma">
                    <div class="ab-tehnology-table2 table3">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/wordpress-img.png" alt="">
                    </div>
                    <div class="ab-tehnology-table2 opencart-img">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/opencart-img.png" alt="">
                    </div>
                    <div class="ab-tehnology-table2 table3">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/yii2-img.png" alt="">
                    </div>
                    <div class="ab-tehnology-table">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/ajs.png" alt="">
                    </div>
                </div>    
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</section> 
<!-- //////////////////////////// -->



<section class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $Head_review; ?></h2>
                <div class="slider">
                    <?php 
                    wp_reset_query(); 
                    $wp_query = new WP_Query(array(
                        'post_type' => 'review',
                        'post_status' => 'publish',
                        'caller_get_posts'=> 1)
                    ); ?>
                    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <?php  if (get_field('на_главной')=='Да'){ ?>
                    <div class="item">
                        <span class="name"><?php the_title() ?></span>
                        <div class="review"><?php the_content() ?></div>
                    </div>    
                    <?php } ?>
                    <?php endwhile ?>
                </div>
            </div>
        </div>
    </div>
</section>

<a name="contacts"></a>
<section class="contacts-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2><?php echo $Head_contacts; ?></h2>
                <form action="#" class="form-contact">
                    <span class="title">Заполните, пожалуйста, форму</span>
                    <input type="text" placeholder="Ваше имя" name="uname">
                    <input type="text" placeholder="Ваш телефон или email" name="tel">
                    <input type="text" placeholder="Сфера деятельности" name="activity">
                    <select name="budget" id="">
                        <option value="1">1 - 5000 рублей</option>
                        <option value="1">5001 - 10000 рублей</option>
                        <option value="1">10 000 - 50 000 рублей</option>
                        <option value="1">50 000 - 100 000 рублей</option>
                        <option value="1">100 000 - 500 000 рублей</option>
                        <option value="1">500 000 - 1 000 000 рублей</option>
                    </select>
                    <textarea name="text" placeholder="Дополнительная информация"></textarea>

                    <input type="submit" value="<?php echo $button_send; ?>" id="form-contact_submit" class="button-1">
                </form>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
	