

    <div class="header-top">
        <div class="header-top-up">
             <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="ab-phone">
                          тел. +7 (960) 429 23 55
                        </div>  
                    </div>
                     <div class="col-md-7 col-sm-12 col-xs-12">
                        <a href="#zvonok" name="modal" class="button-3">Заказать звонок</a>
                    </div>
                    <div class="col-md-2 col-sm-12 col-xs-12">
                        <div class="ab-right">
                            RU-RU
                        </div>
                        
                       <!--  <div class="ab-language">
                            <div id="cur-lang">
                                <div id="current-lang">
                                    <div class="lang-wrap">
                                        <div class="img-box">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/rus.png" alt="">
                                        </div>
                                    </div>
                                    <div class="txt-box">
                                        <span>ru</span>
                                    </div>
                                </div>
                            </div>
                            <ul class="lang-switcher">
                                <li>
                                    <div class="lang-wrap">
                                        <div class="img-box">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/en.png" alt="">
                                        </div>
                                        <div class="txt-box">
                                            <span>en</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>  
            </div>
        </div>
        <div class="header-top-down">
        
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="logo-box">
                            <a class="logo" href="/"><span>Lantana</span>-studio</a>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12 col-sm-12 header-fade">
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
        </div>  