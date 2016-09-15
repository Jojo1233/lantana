<?


add_action('add_meta_boxes', 'my_extra_fields', 1);

function my_extra_fields() {
    add_meta_box( 'extra_fields', 'Дополнительные поля', 'extra_fields_box_func', 'cases', 'normal', 'high'  );
}

// код блока
function extra_fields_box_func( $post ){
?>
	
	
	
<?php
}


  if (function_exists('register_sidebar'))
	register_sidebar(array('name' => 'Sidebar'));

register_nav_menus(array(
	'top' => 'Верхнее меню',            
	'bottom' => 'Нижнее меню'   
));

add_theme_support('menus');

add_theme_support( 'post-thumbnails' );

function my_function_admin_bar(){
return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

add_action('init', 'remove_else_link');

add_image_size('squareThumb', 292, 278, true);

function remove_else_link()
{

remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head');
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); 
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'feed_links_extra', 3 ); 

remove_action('wp_head','feed_links_extra', 3); // ссылки на дополнительные rss категорий
remove_action('wp_head','feed_links', 2); //ссылки на основной rss и комментарии
remove_action('wp_head','rsd_link');  // для сервиса Really Simple Discovery
remove_action('wp_head','wlwmanifest_link'); // для Windows Live Writer
remove_action('wp_head','wp_generator');  // убирает версию wordpress
 
// убираем разные ссылки при отображении поста - следующая, предыдущая запись, оригинальный url и т.п.
remove_action('wp_head','start_post_rel_link',10,0);
remove_action('wp_head','index_rel_link');
remove_action('wp_head','rel_canonical');
remove_action( 'wp_head','adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head','wp_shortlink_wp_head', 10, 0 );
}

function repl_mon( $str ){
//	echo 'sss'.$str;
	$healthy = array('Янв',  'Фев', 'Мар', 'Апр','Май','Июн','Июл','Авг','Сен','Окт','Ноя','Дек');
	$healthy2 = array('01',  '02', '03', '04','05','06','07','08','09','10','11','12');
	$yummy   = array('января', 'февраля', 'марта','апреля', 'мая', 'июня','июля','августа.','сентября','октября','ноября','декабря.');

	//$rt = str_replace($healthy, $yummy, $str);
	$rt = str_replace($healthy2, $yummy, $str);
	//echo "rt=".$rt;
	return $rt;
}
/* 
 * Хлебные крошки для WordPress (breadcrumbs)
 *
 * $sep  - разделитель. По умолчанию ' » '
 * $l10n - массив. для локализации. См. переменную $default_l10n.
 * $args - массив. дополнительные аргументы.
 * version 0.5
*/
function kama_breadcrumbs( $sep = 0, $l10n = array(), $args = array() ){
    global $post, $wp_query, $wp_post_types;

    // Локализация
    $default_l10n = array(
        'home'       => 'Главная',
        'paged'      => 'Страница %s',
        '_404'       => 'Ошибка 404',
        'search'     => 'Результаты поиска по запросу - <b>%s</b>',
        'author'     => 'Архив автора: <b>%s</b>',
        'year'       => 'Архив за <b>%s</b> год',
        'month'      => 'Архив за: <b>%s</b>',
        'day'        => '',
        'attachment' => 'Медиа: %s',
        'tag'        => 'Записи по метке: <b>%s</b>',
        'tax_tag'    => '%s из "%s" по тегу: <b>%s</b>',
    );
    
    // Параметры по умолчанию
    $default_args = array(
        'on_front_page'   => true, // выводить крошки на главной странице
        'show_post_title' => true, // показывать ли название записи в конце (последний элемент). Для записей, страниц, вложений
        'sep'             => ' » ', // разделитель
    );
    
    // Фильтрует аргументы по умолчанию.
    $default_args = apply_filters('kama_breadcrumbs_default_args', $default_args );
    
    $loc  = (object) array_merge( $default_l10n, $l10n );
    $args = (object) array_merge( $default_args, $args );

    if( $sep === 0 ) $sep = $args->sep;

    $w1 = '<div class="kama_breadcrumbs" prefix="v: http://rdf.data-vocabulary.org/#">';
    $w2 = '</div>';
    $patt1 = '<span typeof="v:Breadcrumb"><a href="%s" rel="v:url" property="v:title">';
    $sep .= '</span>'; // закрываем span после разделителя!
    $linkpatt = $patt1.'%s</a>';
    
    
    // Вывод
    $pg_end = '';
    if( $paged = $wp_query->query_vars['paged'] ){
        $pg_patt = $patt1;
        $pg_end = '</a>'. $sep . sprintf( $loc->paged, $paged );
    }

    $out = '';
    if( is_front_page() ){
        return $args->on_front_page ? ( print $w1 .( $paged ? sprintf( $pg_patt, home_url() ) : '' ) . $loc->home . $pg_end . $w2 ) : '';
    }
    elseif( is_404() ){
        $out = $loc->_404; 
    }
    elseif( is_search() ){
        $out = sprintf( $loc->search, strip_tags( $GLOBALS['s'] ) );
    }
    elseif( is_author() ){
        $q_obj = &$wp_query->queried_object;
        $out = ( $paged ? sprintf( $pg_patt, get_author_posts_url( $q_obj->ID, $q_obj->user_nicename ) ):'') . sprintf( $loc->author, $q_obj->display_name ) . $pg_end;
    }
    elseif( is_year() || is_month() || is_day() ){
        $y_url  = get_year_link( $year=get_the_time('Y') );
        $m_url  = get_month_link( $year, get_the_time('m') );
        $y_link = sprintf( $linkpatt, $y_url, $year);
        $m_link = sprintf( $linkpatt, $m_url, get_the_time('F'));
        if( is_year() )
            $out = ( $paged?sprintf( $pg_patt, $y_url):'') . sprintf( $loc->year, $year ) . $pg_end;
        elseif( is_month() )
            $out = $y_link . $sep . ( $paged ? sprintf( $pg_patt, $m_url ) : '') . sprintf( $loc->month, get_the_time('F') ) . $pg_end;
        elseif( is_day() )
            $out = $y_link . $sep . $m_link . $sep . get_the_time('l');
    }

    // Страницы и древовидные типы записей
    elseif( is_singular() && $wp_post_types[ $post->post_type ]->hierarchical ){
        $parent = $post->post_parent;
        $crumbs = array();
        while( $parent ){
            $page = & get_post( $parent );
            $crumbs[] = sprintf( $linkpatt, get_permalink( $page->ID ), $page->post_title );
            $parent = $page->post_parent;
        }
        $crumbs = array_reverse( $crumbs );
        
        foreach( $crumbs as $crumb ) $out .= $crumb . $sep;
        
        $out = $out . ( $args->show_post_title ? $post->post_title : '');
    }
    // Таксономии, вложения и не древовидные типы записей
    else
    {
        // Определяем термины
        if( is_singular() ){
            if( ! $taxonomies ){
                $taxonomies = get_taxonomies( array('hierarchical' => true, 'public' => true) );
                if( count( $taxonomies ) == 1 ) $taxonomies = 'category';
            }
            if( $term = get_the_terms( $post->post_parent ? $post->post_parent : $post->ID, $taxonomies ) ){
                $term = array_shift( $term );
            }
        }
        else
            $term = $wp_query->get_queried_object();
        

        //if( ! $term && ! is_attachment() ) return print "Error: Taxonomy is not defined!"; 
        
        if( $term ){
            $term = apply_filters('kama_breadcrumbs_term', $term );
            
            $pg_term_start = ( $paged && $term->term_id ) ? sprintf( $pg_patt, get_term_link( (int) $term->term_id, $term->taxonomy ) ) : '';

            if( is_attachment() ){
                if( ! $post->post_parent )
                    $out = sprintf( $loc->attachment, $post->post_title );
                else
                    $out = __crumbs_tax( $term->term_id, $term->taxonomy, $sep, $linkpatt ) . sprintf( $linkpatt, get_permalink( $post->post_parent ), get_the_title( $post->post_parent ) ) . $sep . ( $args->show_post_title ? $post->post_title : '');
            }
            elseif( is_single() ){
                $out = __crumbs_tax( $term->parent, $term->taxonomy, $sep, $linkpatt ) . sprintf( $linkpatt, get_term_link( (int) $term->term_id, $term->taxonomy ), $term->name ). $sep . ( $args->show_post_title ? $post->post_title : '');
            // Метки, архивная страница типа записи, произвольные одноуровневые таксономии
            }
            elseif( ! is_taxonomy_hierarchical( $term->taxonomy ) ){
                // метка
                if( is_tag() )
                    $out = $pg_term_start . sprintf( $loc->tag, $term->name ) . $pg_end;
                // таксономия
                elseif( is_tax() ){
                    $post_label = $wp_post_types[ $post->post_type ]->labels->name;
                    $tax_label = $GLOBALS['wp_taxonomies'][ $term->taxonomy ]->labels->name;
                    $out = $pg_term_start . sprintf( $loc->tax_tag, $post_label, $tax_label, $term->name ) .  $pg_end;
                }
            }
            // Рубрики и таксономии
            else
                $out = __crumbs_tax( $term->parent, $term->taxonomy, $sep, $linkpatt ) . $pg_term_start . $term->name . $pg_end;
        }
    }

    // замена ссылки на архивную страницу для типа записи 
    $home_after = apply_filters('kama_breadcrumbs_home_after', false, $linkpatt, $sep );

    // ссылка на архивную страницу произвольно типа поста. Ссылку можно заменить с помощью хука 'kama_breadcrumbs_home_after'
    if( ! $home_after && isset( $post->post_type ) && ! in_array( $post->post_type, array('post','page','attachment') ) ){
        $pt_name = $wp_post_types[ $post->post_type ]->labels->name;
        $pt_url  = get_post_type_archive_link( $post->post_type );
        $home_after = ( is_post_type_archive() && ! $paged ) ? $pt_name : ( sprintf( $linkpatt, $pt_url, $pt_name ). ($pg_end?$pg_end:$sep) );
    }

    
    $home = sprintf( $linkpatt, home_url(), $loc->home ). $sep . $home_after;
    
    $out = $w1. $home . $out .$w2;

    return print apply_filters('kama_breadcrumbs', $out, $sep );
}
function __crumbs_tax( $term_id, $tax, $sep, $linkpatt ){
    $termlink = array();
    while( (int) $term_id ){
        $term2      = get_term( $term_id, $tax );
        $termlink[] = sprintf( $linkpatt, get_term_link( (int) $term2->term_id, $term2->taxonomy ), $term2->name ). $sep;
        $term_id    = (int) $term2->parent;
    }
    
    $termlinks = array_reverse( $termlink );
    
    return implode('', $termlinks );
}

add_action('init', 'review_register');
function review_register() {
    $args = array(
        'label'               => __('Отзывы'),
        'labels'              => array(
            'name'               => __('Отзывы'),
            'singular_name'      => __('Отзывы'),
            'menu_name'          => __('Отзывы'),
            'all_items'          => __('Все отзывы'),
            'add_new'            => _x('Добавить отзыв', 'product'),
            'add_new_item'       => __('Новый отзыв'),
            'edit_item'          => __('Редактировать отзыв'),
            'new_item'           => __('Новый отзыв'),
            'view_item'          => __('Отзыв'),
            'not_found'          => __('отзыв не найден'),
            'not_found_in_trash' => __('Удаленных отзывов нет'),
            'search_items'       => __('Найти отзыв')
        ),
        'description'         => __('Отзывы'),
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array(
            'title',
            'editor',
            
   
        ),
        'has_archive'         => false,
        'rewrite'             => array(
            'slug'       => 'review',
            'with_front' => false
        )
    );
    register_post_type('review', $args);
}

add_action('init', 'client_register');
function client_register() {
    $args = array(
        'label'               => __('Клиенты'),
        'labels'              => array(
            'name'               => __('Клиенты'),
            'singular_name'      => __('Клиенты'),
            'menu_name'          => __('Клиенты'),
            'all_items'          => __('Все клиенты'),
            'add_new'            => _x('Добавить клиента', 'product'),
            'add_new_item'       => __('Новый клиент'),
            'edit_item'          => __('Редактировать клиента'),
            'new_item'           => __('Новый клиент'),
            'view_item'          => __('Клиент'),
            'not_found'          => __('Клиент не найден'),
            'not_found_in_trash' => __('Удаленных клиентов нет'),
            'search_items'       => __('Найти клиента')
        ),
        'description'         => __('Клиенты'),
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array(
            'title',
            'editor',
            'thumbnail',
   'excerpt',
   'custom-fields',
   
        ),
        'has_archive'         => false,
        'rewrite'             => array(
            'slug'       => 'client',
            'with_front' => false
        )
    );
    register_post_type('client', $args);
}

add_action('init', 'service_register');
function service_register() {
    $args = array(
        'label'               => __('Услуги'),
        'labels'              => array(
            'name'               => __('Услуги'),
            'singular_name'      => __('Услуги'),
            'menu_name'          => __('Услуги'),
            'all_items'          => __('Все услуги'),
            'add_new'            => _x('Добавить услугу', 'service'),
            'add_new_item'       => __('Новая услуга'),
            'edit_item'          => __('Редактировать услугу'),
            'new_item'           => __('Новая услуга'),
            'view_item'          => __('Услуга'),
            'not_found'          => __('Услуга не найден'),
            'not_found_in_trash' => __('Удаленных услуг нет'),
            'search_items'       => __('Найти услугу')
        ),
        'description'         => __('Услуги'),
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array(
            'title',
            'editor',
            'thumbnail',
   'excerpt',
   'custom-fields',
        ),
        'has_archive'         => false,
        'rewrite'             => array(
            'slug'       => 'service',
            'with_front' => false
        )
    );
    register_post_type('service', $args);
}




add_action('init', 'team_register');
function team_register() {
    $args = array(
        'label'               => __('Команда'),
        'labels'              => array(
            'name'               => __('Команда'),
            'singular_name'      => __('Команда'),
            'menu_name'          => __('Команда'),
            'all_items'          => __('Вся команда'),
            'add_new'            => _x('Добавить сотрудника', 'product'),
            'add_new_item'       => __('Новый сотрудник'),
            'edit_item'          => __('Редактировать сотрудника'),
            'new_item'           => __('Новый сотрудник'),
            'view_item'          => __('Сотрудник'),
            'not_found'          => __('Сотрудник не найден'),
            'not_found_in_trash' => __('Удаленных сотрудников нет'),
            'search_items'       => __('Найти сотрудника')
        ),
        'description'         => __('Команда'),
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array(
            'title',
            'editor',
            'thumbnail',
   'excerpt',
   'custom-fields',
   
        ),
        'has_archive'         => false,
        'rewrite'             => array(
            'slug'       => 'team',
            'with_front' => false
        )
    );
    register_post_type('team', $args);
}


add_action('init', 'portfolio_register');
function portfolio_register() {
    $args = array(
        'label'               => __('Портфолио'),
        'labels'              => array(
            'name'               => __('Портфолио'),
            'singular_name'      => __('Портфолио'),
            'menu_name'          => __('Портфолио'),
            'all_items'          => __('Все работы'),
            'add_new'            => _x('Добавить работу', 'portfolio'),
            'add_new_item'       => __('Новая работа'),
            'edit_item'          => __('Редактировать работу'),
            'new_item'           => __('Новая работа'),
            'view_item'          => __('Портфолио'),
            'not_found'          => __('Работа не найден'),
            'not_found_in_trash' => __('Удаленных работ нет'),
            'search_items'       => __('Найти работу')
        ),
        'description'         => __('Портфолио'),
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array(
            'title',
            'editor',
   
        ),
        'has_archive'         => false,
        'rewrite'             => array(
            'slug'       => '',
            'with_front' => false
        )
    );
    register_post_type('portfolio', $args);
}



class Mainmenu_Walker_Nav_Menu extends Walker_Nav_Menu{
    /**
     * What the class handles.
     *
     * @see Walker::$tree_type
     * @since 3.0.0
     * @var string
     */
    public $tree_type = array( 'post_type', 'taxonomy', 'custom' );

    /**
     * Database fields to use.
     *
     * @see Walker::$db_fields
     * @since 3.0.0
     * @todo Decouple this.
     * @var array
     */
    public $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );

    /**
     * Starts the list before the elements are added.
     *
     * @see Walker::start_lvl()
     *
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     */
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu\">\n";
    }

    /**
     * Ends the list of after the elements are added.
     *
     * @see Walker::end_lvl()
     *
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     */
    public function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    /**
     * Start the element output.
     *
     * @see Walker::start_el()
     *
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item   Menu item data object.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     * @param int    $id     Current item ID.
     */
    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        /**
         * Filter the CSS class(es) applied to a menu item's list item element.
         *
         * @since 3.0.0
         * @since 4.1.0 The `$depth` parameter was added.
         *
         * @param array  $classes The CSS classes that are applied to the menu item's `<li>` element.
         * @param object $item    The current menu item.
         * @param array  $args    An array of {@see wp_nav_menu()} arguments.
         * @param int    $depth   Depth of menu item. Used for padding.
         */
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        /**
         * Filter the ID applied to a menu item's list item element.
         *
         * @since 3.0.1
         * @since 4.1.0 The `$depth` parameter was added.
         *
         * @param string $menu_id The ID that is applied to the menu item's `<li>` element.
         * @param object $item    The current menu item.
         * @param array  $args    An array of {@see wp_nav_menu()} arguments.
         * @param int    $depth   Depth of menu item. Used for padding.
         */
        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names .'>';

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

        /**
         * Filter the HTML attributes applied to a menu item's anchor element.
         *
         * @since 3.6.0
         * @since 4.1.0 The `$depth` parameter was added.
         *
         * @param array $atts {
         *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
         *
         *     @type string $title  Title attribute.
         *     @type string $target Target attribute.
         *     @type string $rel    The rel attribute.
         *     @type string $href   The href attribute.
         * }
         * @param object $item  The current menu item.
         * @param array  $args  An array of {@see wp_nav_menu()} arguments.
         * @param int    $depth Depth of menu item. Used for padding.
         */
        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
      
        $item_output = $args->before;
      
        $bol = 0;
       
        $arr3 = $item-> classes;
        foreach ( $arr3 as $key => $value) {
            if ($value == 'menu-item-has-children'){
                $bol = 1;
            }else{
                  
            }
        }

        if ($bol == 1){
            $item_output .= '<a'. $attributes .'><span>';
            /** This filter is documented in wp-includes/post-template.php */
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output .= '</span><span class="arrow-2"></span></a>';
        }else{
            $item_output .= '<a'. $attributes .'>';
            /** This filter is documented in wp-includes/post-template.php */
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output .= '</a>';
        }
        
        $item_output .= $args->after;

        /**
         * Filter a menu item's starting output.
         *
         * The menu item's starting output only includes `$args->before`, the opening `<a>`,
         * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
         * no filter for modifying the opening and closing `<li>` for a menu item.
         *
         * @since 3.0.0
         *
         * @param string $item_output The menu item's starting HTML output.
         * @param object $item        Menu item data object.
         * @param int    $depth       Depth of menu item. Used for padding.
         * @param array  $args        An array of {@see wp_nav_menu()} arguments.
         */
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    /**
     * Ends the element output, if needed.
     *
     * @see Walker::end_el()
     *
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item   Page data object. Not used.
     * @param int    $depth  Depth of page. Not Used.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     */
    public function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= "</li>\n";
    }

} // Walker_Nav_Menu


class Footer_Walker_Nav_Menu extends Walker_Nav_Menu{
    /**
     * What the class handles.
     *
     * @see Walker::$tree_type
     * @since 3.0.0
     * @var string
     */
    public $tree_type = array( 'post_type', 'taxonomy', 'custom' );

    /**
     * Database fields to use.
     *
     * @see Walker::$db_fields
     * @since 3.0.0
     * @todo Decouple this.
     * @var array
     */
    public $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );

    /**
     * Starts the list before the elements are added.
     *
     * @see Walker::start_lvl()
     *
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     */
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu\">\n";
    }

    /**
     * Ends the list of after the elements are added.
     *
     * @see Walker::end_lvl()
     *
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     */
    public function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    /**
     * Start the element output.
     *
     * @see Walker::start_el()
     *
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item   Menu item data object.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     * @param int    $id     Current item ID.
     */
    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        /**
         * Filter the CSS class(es) applied to a menu item's list item element.
         *
         * @since 3.0.0
         * @since 4.1.0 The `$depth` parameter was added.
         *
         * @param array  $classes The CSS classes that are applied to the menu item's `<li>` element.
         * @param object $item    The current menu item.
         * @param array  $args    An array of {@see wp_nav_menu()} arguments.
         * @param int    $depth   Depth of menu item. Used for padding.
         */
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        /**
         * Filter the ID applied to a menu item's list item element.
         *
         * @since 3.0.1
         * @since 4.1.0 The `$depth` parameter was added.
         *
         * @param string $menu_id The ID that is applied to the menu item's `<li>` element.
         * @param object $item    The current menu item.
         * @param array  $args    An array of {@see wp_nav_menu()} arguments.
         * @param int    $depth   Depth of menu item. Used for padding.
         */
        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names .'>';

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

        /**
         * Filter the HTML attributes applied to a menu item's anchor element.
         *
         * @since 3.6.0
         * @since 4.1.0 The `$depth` parameter was added.
         *
         * @param array $atts {
         *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
         *
         *     @type string $title  Title attribute.
         *     @type string $target Target attribute.
         *     @type string $rel    The rel attribute.
         *     @type string $href   The href attribute.
         * }
         * @param object $item  The current menu item.
         * @param array  $args  An array of {@see wp_nav_menu()} arguments.
         * @param int    $depth Depth of menu item. Used for padding.
         */
        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        /** This filter is documented in wp-includes/post-template.php */
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        /**
         * Filter a menu item's starting output.
         *
         * The menu item's starting output only includes `$args->before`, the opening `<a>`,
         * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
         * no filter for modifying the opening and closing `<li>` for a menu item.
         *
         * @since 3.0.0
         *
         * @param string $item_output The menu item's starting HTML output.
         * @param object $item        Menu item data object.
         * @param int    $depth       Depth of menu item. Used for padding.
         * @param array  $args        An array of {@see wp_nav_menu()} arguments.
         */
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    /**
     * Ends the element output, if needed.
     *
     * @see Walker::end_el()
     *
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item   Page data object. Not used.
     * @param int    $depth  Depth of page. Not Used.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     */
    public function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= "</li>\n";
    }

} // Walker_Nav_Menu

?>