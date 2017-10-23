<?php

function add_svg_to_upload_mimes( $upload_mimes ) {
    $upload_mimes['svg'] = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';
    return $upload_mimes;
}
add_filter('wp_mail_content_type','set_content_type');
function set_content_type($content_type){
return 'text/html';
}
add_filter( 'upload_mimes', 'add_svg_to_upload_mimes', 10, 1 );

add_theme_support( 'post-thumbnails' );
function insurance_scripts() {
  wp_enqueue_style('font_awesome',  get_template_directory_uri() . '/css/font-awesome.min.css' );
  wp_enqueue_style('owl',  get_template_directory_uri() . '/css/owl.carousel.css' );
  wp_enqueue_style('animate',  get_template_directory_uri() . '/css/animate.css' );
  wp_enqueue_style('lightbox',  get_template_directory_uri() . '/css/lightbox.css');
  wp_enqueue_style('mCustom',  get_template_directory_uri() . '/css/jquery.mCustomScrollbar.css');
  wp_enqueue_style('select2',  get_template_directory_uri() . '/css/select2.min.css');
  wp_enqueue_style('bootstrap-grid',  get_template_directory_uri() . '/css/bootstrap-grid.css');
  wp_enqueue_style('datepicker',  get_template_directory_uri() . '/css/datepicker.css');
  wp_enqueue_style( 'style',  get_template_directory_uri() . '/css/styles.css' );


  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/js/imagesloaded.min.js', array(), '1.0.0', true );

  wp_enqueue_script( 'insuranceApp', get_template_directory_uri() . '/js/insuranceApp.js', array(), '1.0.0', true );
  wp_enqueue_script( 'angular_upload', get_template_directory_uri() . '/js/angular-file-upload.js', array(), '1.0.0', true );

  wp_enqueue_script( 'jquery.maskedinput', get_template_directory_uri() . '/js/jquery.maskedinput.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'owl_script', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/js/jquery.smooth-scroll.js', array(), '1.0.0', true );
  wp_enqueue_script( 'masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/js/lightbox.js', array(), '1.0.0', true );
  wp_enqueue_script( 'mCustom', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.js', array(), '1.0.0', true );
  wp_enqueue_script( 'select2', get_template_directory_uri() . '/js/select2.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'datepicker-js', get_template_directory_uri() . '/js/datepicker.js', array(), '1.0.0', true );
   wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );

  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'insurance_scripts' );

function true_customizer_init( $wp_customize ) {

  $true_transport = 'postMessage'; // описание этой переменной чуть ниже


  // Добавляем собственную секцию настроек
  $wp_customize->add_section(
    'true_display_options', // id секции, должен прописываться во всех настройках, которые в неё попадают
    array(
      'title'     => 'Контакти',
      'priority'  => 200, // приоритет расположения относительно других секций
      'description' => 'Налаштування контактних даних' // описание не обязательное
    )
  );

  // Текст копирайта в футере
  $wp_customize->add_setting(
    'true_footer_copyright_address', // id
    array(
      'default'            => '', // текст по умолчанию
      'sanitize_callback'  => 'true_sanitize_copyright', // функция, обрабатывающая значение поля при сохранении
      'transport'          => $true_transport
    )
  );
  $wp_customize->add_control(
    'true_footer_copyright_address', // id
    array(
      'section'  => 'true_display_options', // id секции
      'label'    => 'Адреса',
      'type'     => 'text' // текстовое поле
    )
  );
  // Текст копирайта в футере
  $wp_customize->add_setting(
    'true_footer_copyright_tel', // id
    array(
      'default'            => 'Телефон', // текст по умолчанию
      'sanitize_callback'  => 'true_sanitize_copyright', // функция, обрабатывающая значение поля при сохранении
      'transport'          => $true_transport
    )
  );
  $wp_customize->add_control(
    'true_footer_copyright_tel', // id
    array(
      'section'  => 'true_display_options', // id секции
      'label'    => 'Телефон',
      'type'     => 'text' // текстовое поле
    )
  );
   // Текст копирайта в футере
  $wp_customize->add_setting(
    'true_footer_copyright_email', // id
    array(
      'default'            => '', // текст по умолчанию
      'sanitize_callback'  => 'true_sanitize_copyright', // функция, обрабатывающая значение поля при сохранении
      'transport'          => $true_transport
    )
  );
  $wp_customize->add_control(
    'true_footer_copyright_email', // id
    array(
      'section'  => 'true_display_options', // id секции
      'label'    => 'Email',
      'type'     => 'text' // текстовое поле
    )
  );
  $wp_customize->add_setting(
    'true_footer_copyright_g', // id
    array(
      'default'            => '', // текст по умолчанию
      'sanitize_callback'  => 'true_sanitize_copyright', // функция, обрабатывающая значение поля при сохранении
      'transport'          => $true_transport
    )
  );
  $wp_customize->add_control(
    'true_footer_copyright_g', // id
    array(
      'section'  => 'true_display_options', // id секции
      'label'    => 'G+',
      'type'     => 'text' // текстовое поле
    )
  );

  $wp_customize->add_setting(
    'true_footer_copyright_fb', // id
    array(
      'default'            => '', // текст по умолчанию
      'sanitize_callback'  => 'true_sanitize_copyright', // функция, обрабатывающая значение поля при сохранении
      'transport'          => $true_transport
    )
  );
  $wp_customize->add_control(
    'true_footer_copyright_fb', // id
    array(
      'section'  => 'true_display_options', // id секции
      'label'    => 'Facebook',
      'type'     => 'text' // текстовое поле
    )
  );

  $wp_customize->add_setting(
    'true_footer_copyright_youtube', // id
    array(
      'default'            => '', // текст по умолчанию
      'sanitize_callback'  => 'true_sanitize_copyright', // функция, обрабатывающая значение поля при сохранении
      'transport'          => $true_transport
    )
  );
  $wp_customize->add_control(
    'true_footer_copyright_youtube', // id
    array(
      'section'  => 'true_display_options', // id секции
      'label'    => 'Youtube',
      'type'     => 'text' // текстовое поле
    )
  );
  $wp_customize->add_setting(
    'true_footer_copyright_email2', // id
    array(
      'default'            => '', // текст по умолчанию
      'sanitize_callback'  => 'true_sanitize_copyright', // функция, обрабатывающая значение поля при сохранении
      'transport'          => $true_transport
    )
  );
  $wp_customize->add_control(
    'true_footer_copyright_email2', // id
    array(
      'section'  => 'true_display_options', // id секции
      'label'    => 'Email для заказа',
      'type'     => 'text' // текстовое поле
    )
  );


  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'true_background_image',
      array(
        'label'    => 'Фон сайта',
        'settings' => 'true_background_image',
        'section'  => 'true_advanced_options'
      )
    )
  );
}

add_action( 'customize_register', 'true_customizer_init' );

/*
 * Функция обработки текстовых значений, перед их сохранением в базу
 */
function true_sanitize_copyright( $value ) {
  return strip_tags( stripslashes( $value ) ); // обрезаем слеши и HTML-теги
}

/*
 * CSS для хука wp_head()
 */

/*
 * Подключение скриптов
 */
function true_customizer_live() {
  wp_enqueue_script(
    'true-theme-customizer', // название скрипта, указываем что угодно
    get_stylesheet_directory_uri() . '/js/theme-customizer.js', // URL
    array( 'jquery', 'customize-preview' ), // зависимости от других скриптов
    null,
    true
  );
}
add_action( 'customize_preview_init', 'true_customizer_live' );


add_theme_support( 'menus' );
register_nav_menus( array(
    'primary' => __( 'Головне меню',      'insurance' ),
    'footer_menu1' => __('Меню в підвалі1', 'insurance'),
    'footer_menu2' => __('Меню в підвалі2', 'insurance'),
    'footer_menu3' => __('Меню в підвалі3', 'insurance'),
  ) );

function register_my_widgets(){
  register_sidebar( array(
    'name' => "Графік роботи",
    'id' => 'sidebar',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => "</div>\n",
    'description' => 'Графік роботи',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
  ) );
}
add_action( 'widgets_init', 'register_my_widgets' );
register_post_type( 'banner',
      array(
          'label'             => __('Банер', CURRENT_THEME),
          'public'            => true,
          'show_ui'           => true,
          'show_in_nav_menus' => false,
          'menu_position'     => 6,
          'menu_icon'         => 'dashicons-admin-home',
      'description' => 'Банер',
      'exclude_from_search' => true,
          'rewrite'           => array(
          'with_front' => FALSE

      ),
      'supports' => array(
          'title',
      'editor',
      'thumbnail'
          )
      )
      );
register_post_type( 'insurance_online',
      array(
          'label'             => __('Страхування онлайн', CURRENT_THEME),
          'public'            => true,
          'show_ui'           => true,
          'show_in_nav_menus' => false,
          'menu_position'     => 6,
          'menu_icon'         => 'dashicons-admin-home',
      'description' => 'Страхування онлайн',
      'exclude_from_search' => true,
          'rewrite'           => array(
          'with_front' => FALSE

      ),
      'supports' => array(
          'title',
      'editor',
      'thumbnail'
          )
      )
      );
register_post_type( 'partners',
      array(
          'label'             => __('Партнери', CURRENT_THEME),
          'public'            => true,
          'show_ui'           => true,
          'show_in_nav_menus' => false,
          'menu_position'     => 6,
          'menu_icon'         => 'dashicons-admin-home',
      'description' => 'Партнери',
      'exclude_from_search' => true,
          'rewrite'           => array(
          'with_front' => FALSE

      ),
      'supports' => array(
      'thumbnail'
          )
      )
      );
register_post_type( 'faq',
      array(
          'label'             => __('Питання-відповіді', CURRENT_THEME),
          'public'            => true,
          'show_ui'           => true,
          'show_in_nav_menus' => false,
          'menu_position'     => 6,
          'menu_icon'         => 'dashicons-admin-home',
      'description' => 'Питання-відповіді',
      'exclude_from_search' => true,
          'rewrite'           => array(
          'with_front' => TRUE

      ),
      'supports' => array(
          'title',
      'editor'
          )
      )
      );
function trr_create_my_taxonomy() {

    register_taxonomy(
        'faq-category',
        'faq',
        array(
            'label' => __( 'Категорії FAQ' ),
            'rewrite' => array( 'slug' => 'faq-category' ),
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'trr_create_my_taxonomy' );


/*
 * "Хлебные крошки" для WordPress
 * автор: Dimox
 * версия: 2015.09.14
 * лицензия: MIT
*/
function dimox_breadcrumbs() {

  /* === ОПЦИИ === */
  $text['home'] = 'На главную'; // текст ссылки "Главная"
  $text['category'] = '%s'; // текст для страницы рубрики
  $text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
  $text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
  $text['author'] = 'Статьи автора %s'; // текст для страницы автора
  $text['404'] = 'Ошибка 404'; // текст для страницы 404
  $text['page'] = 'Страница %s'; // текст 'Страница N'
  $text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'

  $wrap_before = '<ul>'; // открывающий тег обертки
  $wrap_after = '</ul><!-- .breadcrumbs -->'; // закрывающий тег обертки
  $sep = ''; // разделитель между "крошками"
  // $sep_before = '<li class="sep">'; // тег перед разделителем
  // $sep_after = '</li>'; // тег после разделителя
  $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
  $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
  $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
  $before = '<li>'; // тег перед текущей "крошкой"
  $after = '</li>'; // тег после текущей "крошки"
  /* === КОНЕЦ ОПЦИЙ === */

  global $post;
  $home_link = home_url('/');
  $link_before = '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="breadcrumbs_item">';
  $link_after = '</li>';
  $link_attr = ' itemprop="url"';
  $link_in_before = '<span itemprop="title">';
  $link_in_after = '</span>';
  $link = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
  $frontpage_id = get_option('page_on_front');
  $parent_id = $post->post_parent;
  $sep = ' ' . $sep_before . $sep . $sep_after . ' ';

  if (is_home() || is_front_page()) {

    if ($show_on_home) echo $wrap_before . '<a href="' . $home_link . '">' . $text['home'] . '</a>' . $wrap_after;

  } else {

    echo $wrap_before;
    if ($show_home_link) echo sprintf($link, $home_link, $text['home']);

    if ( is_category() ) {
      $cat = get_category(get_query_var('cat'), false);
      if ($cat->parent != 0) {
        $cats = get_category_parents($cat->parent, TRUE, $sep);
        $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
        if ($show_home_link) echo $sep;
        echo $cats;
      }
      if ( get_query_var('paged') ) {
        $cat = $cat->cat_ID;
        echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_current) echo $sep . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
      }

    } elseif ( is_search() ) {
      if (have_posts()) {
        if ($show_home_link && $show_current) echo $sep;
        if ($show_current) echo $before . sprintf($text['search'], get_search_query()) . $after;
      } else {
        if ($show_home_link) echo $sep;
        echo $before . sprintf($text['search'], get_search_query()) . $after;
      }

    } elseif ( is_day() ) {
      if ($show_home_link) echo $sep;
      echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $sep;
      echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
      if ($show_current) echo $sep . $before . get_the_time('d') . $after;

    } elseif ( is_month() ) {
      if ($show_home_link) echo $sep;
      echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'));
      if ($show_current) echo $sep . $before . get_the_time('F') . $after;

    } elseif ( is_year() ) {
      if ($show_home_link && $show_current) echo $sep;
      if ($show_current) echo $before . get_the_time('Y') . $after;

    } elseif ( is_single() && !is_attachment() ) {
      if ($show_home_link) echo $sep;
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        printf($link, $home_link . '/' . $slug['slug'] . '/', $post_type->labels->singular_name);
        if ($show_current) echo $sep . $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        $cats = get_category_parents($cat, TRUE, $sep);
        if (!$show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
        echo $cats;
        if ( get_query_var('cpage') ) {
          echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
        } else {
          if ($show_current) echo $before . get_the_title() . $after;
        }
      }

    // custom post type
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      if ( get_query_var('paged') ) {
        echo $sep . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_current) echo $sep . $before . $post_type->label . $after;
      }

    } elseif ( is_attachment() ) {
      if ($show_home_link) echo $sep;
      $parent = get_post($parent_id);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      if ($cat) {
        $cats = get_category_parents($cat, TRUE, $sep);
        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
        echo $cats;
      }
      printf($link, get_permalink($parent), $parent->post_title);
      if ($show_current) echo $sep . $before . get_the_title() . $after;

    } elseif ( is_page() && !$parent_id ) {
      if ($show_current) echo $sep . $before . get_the_title() . $after;

    } elseif ( is_page() && $parent_id ) {
      if ($show_home_link) echo $sep;
      if ($parent_id != $frontpage_id) {
        $breadcrumbs = array();
        while ($parent_id) {
          $page = get_page($parent_id);
          if ($parent_id != $frontpage_id) {
            $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
          }
          $parent_id = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        for ($i = 0; $i < count($breadcrumbs); $i++) {
          echo $breadcrumbs[$i];
          if ($i != count($breadcrumbs)-1) echo $sep;
        }
      }
      if ($show_current) echo $sep . $before . get_the_title() . $after;

    } elseif ( is_tag() ) {
      if ( get_query_var('paged') ) {
        $tag_id = get_queried_object_id();
        $tag = get_tag($tag_id);
        echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_current) echo $sep . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
      }

    } elseif ( is_author() ) {
      global $author;
      $author = get_userdata($author);
      if ( get_query_var('paged') ) {
        if ($show_home_link) echo $sep;
        echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_home_link && $show_current) echo $sep;
        if ($show_current) echo $before . sprintf($text['author'], $author->display_name) . $after;
      }

    } elseif ( is_404() ) {
      if ($show_home_link && $show_current) echo $sep;
      if ($show_current) echo $before . $text['404'] . $after;

    } elseif ( has_post_format() && !is_singular() ) {
      if ($show_home_link) echo $sep;
      echo get_post_format_string( get_post_format() );
    }

    echo $wrap_after;

  }
} // end of dimox_breadcrumbs()


wp_localize_script( 'insurance-script', 'ajax_posts', array(
    'ajaxurl' => admin_url( 'admin-ajax.php' ),
    'noposts' => __('No older posts found', 'insurance'),
));

function more_post_ajax(){

    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;

    header("Content-Type: text/html");

    $args = array(
        'suppress_filters' => true,
        'post_type' => 'post',
        'posts_per_page' => $ppp,
        'cat' => 3,
        'paged'    => $page,
    );

    $loop = new WP_Query($args);

    $out = '';

    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
        $out .= ' <div class="news_item">
        <a href="'.get_permalink().'">
         <div class="row clearfix">
          <div class="col-md-2">
          <div class="img_container">
          '.get_the_post_thumbnail().'
            </div>
          </div>
                <div class="col-md-10"><h3>'.get_the_title().'</h3>
                <p>'.get_the_excerpt().'</p>
                 <span>'.get_the_date().'</span>
                </div>
        </a>
         </div>';

    endwhile;
    endif;
    wp_reset_postdata();
    die($out);
}

add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');
// подключение lightbox
add_action('wp_ajax_contact_form', 'contact_form');
add_action('wp_ajax_nopriv_contact_form', 'contact_form');

function contact_form()
{
  if ( ! function_exists( 'wp_handle_upload' ) ) {
        require_once( ABSPATH . 'wp-admin/includes/file.php' );
    }
$msg = $_POST['name'];
$file = $_FILES['documents' ];
$to = 'zakaz@shulman.com.ua';
$subject   = 'Яша Шульман';
$headers .= 'From: Яша Шульман <myname@mydomain.com>' . "\r\n";
add_filter(
        'wp_mail_content_type',
        'my_custom_email_content_type'
    );
    $wp_mail_return = wp_mail(
        $to,
        $subject,
        $msg,
        $headers,
        $attachments
    );
    if( $wp_mail_return ) {
        echo 'Mail send';
    } else {
        echo 'Failed';
    }
    remove_filter(
        'wp_mail_content_type',
        'my_custom_email_content_type'
    );
}
?>
