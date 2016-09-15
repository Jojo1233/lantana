       <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="logo-box">
                            <a class="logo" href="/"><span>Lantana</span>-studio</a>
                        </div>
                    </div>
                    <div class="col-md-7 col-xs-12 col-sm-12 col-md-pull-14 header-fade">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <? 
                                $args = array(
                                  'theme_location'  => '',
                                  'menu'            => 'Главное меню', 
                                  'container'       => flase, 
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
                    <div class="col-md-1 hidden-xs">

                        <div class="lang-box">
<ul>
    <li class="en">
        <a href="/en"><img src="<?php echo get_template_directory_uri(); ?>/img/en.png" alt=""></a>
    </li>
    <li class="ru">
        <a href="/ru"><img src="<?php echo get_template_directory_uri(); ?>/img/rus.png" alt=""></a>
    </li>
</ul>
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
                                  'container'       => flase, 
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
                </div>
            </div>
        </div>  