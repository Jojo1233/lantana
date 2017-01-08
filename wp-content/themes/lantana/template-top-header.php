<div class="header">
    <div class="header__top header__top_position">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="header-logo header-logo_view">
                        <a href="/" class="header-logo__link header-logo__link_view">LS</a>
                    </div>    
                </div>
                <div class="col-md-10">
                    <ul class="main-menu main-menu_view">
                        <?php  if ( 'ru' === $GLOBALS['q_config']['language']){ ?>
                        <li class="main-menu__item main-menu__item_view"><a href="#home" class="main-menu__link main-menu__link_view">Главная</a></li>
                        <li class="main-menu__item main-menu__item_view"><a href="#services" class="main-menu__link main-menu__link_view">Услуги</a></li>
                        <li class="main-menu__item main-menu__item_view"><a href="#portfolio" class="main-menu__link main-menu__link_view">Портфолио</a></li>
                        <li class="main-menu__item main-menu__item_view"><a href="/blog" class="main-menu__link main-menu__link_view">Блог</a></li>
                        <li class="main-menu__item main-menu__item_view"><a href="#contacts" class="main-menu__link main-menu__link_view">Контакты</a></li>
                        <?php } ?>
                        <?php  if ( 'en' === $GLOBALS['q_config']['language']){?>
                        <li class="main-menu__item main-menu__item_view"><a href="#homee" class="main-menu__link main-menu__link_view">Home</a></li>
                        <li class="main-menu__item main-menu__item_view"><a href="#services" class="main-menu__link main-menu__link_view">Services</a></li>
                        <li class="main-menu__item main-menu__item_view"><a href="#portfolio" class="main-menu__link main-menu__link_view">Portfolio</a></li>
                        <li class="main-menu__item main-menu__item_view"><a href="/blog" class="main-menu__link main-menu__link_view">Blog</a></li>
                        <li class="main-menu__item main-menu__item_view"><a href="#contacts" class="main-menu__link main-menu__link_view">Contacts</a></li>
                        <?php } ?>
 
                        <li class="main-menu__item main-menu__item_view"><span class="main-menu_tel"><i class="fa fa-phone" aria-hidden="true"></i>
8 800 555555</span></li>
                        <li class="main-menu__item main-menu__item_view">
                            <div class="lang-box lang-box_view">
                                <?php  if ( 'ru' === $GLOBALS['q_config']['language']){ ?>
                                    <img src ="<?php echo get_template_directory_uri(); ?>/img/rus.png" class="lang-box__view_flag lang-box__view_flag_size"/>
                                <?php } ?>
                                <?php  if ( 'en' === $GLOBALS['q_config']['language']){?>
                                    <img src ="<?php echo get_template_directory_uri(); ?>/img/en.png" class="lang-box__view_flag lang-box__view_flag_size"//>
                                <?php } ?>
                                <div class="lang-box__inner lang-box__inner_position">
                                    <a href ="<?php echo get_option( 'siteurl' ).'/en' ?>"><img src ="<?php echo get_template_directory_uri(); ?>/img/en.png" class="lang-box__view_flag lang-box__view_flag_size"/></a>
                                    <a href = "<?php echo get_option( 'siteurl' ).'/ru' ?>"><img src = "<?php echo get_template_directory_uri(); ?>/img/rus.png" class="lang-box__view_flag lang-box__view_flag_size"//></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header__middle header__middle_position">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-middle">
                    <?php  if ( 'ru' === $GLOBALS['q_config']['language']){ ?>
                    <span class="header-middle__title">Производственная студия. Профессиональная верстка и разработка сайтов на Wordpress</span>
                    <?php } ?>
                    <?php  if ( 'en' === $GLOBALS['q_config']['language']){?>
                    <span class="header-middle__title">Production studio. Professional HTML, CSS coding and Wordpress development.</span>
                    <?php } ?>
                        
                    </div>
                    <div class="header-buttons header-buttons_position">
                         <a href="#portfolio" class="button-1"><?php echo $button_portfolio; ?></a> <a href="#services" class="button-1"><?php echo $button_pricing; ?></a>
                     </div>
                </div>
               
            </div>
        </div>
    </div>
</div>


 <div class="anz-menu">
    <input type="checkbox" id="check_1" class="anz-mobile"/>
    <label class="anz-menu-ch anz-mobile" for="check_1"><i class="fa fa-bars" aria-hidden="true"></i><i class="fa fa-times" aria-hidden="true"></i></label>
    <div class="anz-perspective">
        <div class="menu-list-pressed">
            <? 
            $args = array(
              'theme_location'  => '',
              'menu'            => 'Главное меню', 
              'container'       => false, 
              'container_class' => '', 
              'container_id'    => '',
              'menu_class'      => 'menu', 
              'menu_id'         => '',
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      => '<ul class="main-menu">%3$s</ul>',
              'depth'           => 0
            );
            wp_nav_menu($args ); 
            ?>
        </div>
    </div>
</div>

    
        