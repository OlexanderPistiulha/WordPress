<?php 

include_once(__DIR__.'/inc/archive_widget.php'); /*подключаем свой виджет */

// хуки куда вешаем наши функции (1-название хука, 2-название нашей функции)
add_action('wp_enqueue_scripts', 'theme_add_scripts');
add_action('after_setup_theme', 'theme_setup_theme');
add_action( 'widgets_init', 'register_my_widgets' );

// фильтры для измениния стандартного поведения функции
add_filter( 'document_title_separator', function(){
	return ' | ';
} );
add_filter('excerpt_more', function($more) {
	return '...';
});

// филтер для скритие admin_bar в wordpress
// add_filter('show_admin_bar', '__return_false');

function theme_add_scripts() {

    // подключение скриптов
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'script-modernizr', get_template_directory_uri() . '/assets/js/modernizr.js' );
    wp_enqueue_script( 'script-pace-min', get_template_directory_uri() . '/assets/js/js/pace.min.js');
    wp_enqueue_script( 'script-plagins', get_template_directory_uri() . '/assets/js/plugins.js',  array('jquery'),  in_footer);
    wp_enqueue_script( 'script-main', get_template_directory_uri() . '/assets/js/main.js',  array('jquery'),  in_footer);
    
    // подключаем файл стилей темы
    wp_enqueue_style( 'style-base', get_template_directory_uri() . '/assets/css/base.css', '1.0.0', 'all');
    wp_enqueue_style( 'style-vendor', get_template_directory_uri() . '/assets/css/vendor.css', '1.0.0', 'all');
    wp_enqueue_style( 'style-main', get_template_directory_uri() . '/assets/css/main.css', '1.0.0', 'all');
    
};


function theme_setup_theme(){
    add_theme_support('custom-logo');/* для смены логотопа с админки (изменить в настройках в админки) */ 
    add_theme_support('title-tag');/* для смены название вкладки(title) с админки (изменить в настройках в админки) */
    add_theme_support('post-thumbnails');/* для смены миниатюры записи(uли главной картинки записи) с админки (в header использовать функцию <?php the_custom_logo() ?>)*/
    add_theme_support( 'widgets' ); /*нужно для того что бы была достурпна вкладка виджеты в админке (в случаи визова функции register_sidebar() можно не добавлять, добавиться автоматически) */

    // подключение меню (1-изпользуеться в коде,  2-название зоны регистрации где будет отображаться меню)
	register_nav_menu( 'menu-header', 'menu in header' );
    register_nav_menu( 'menu-icons', 'menu in heade (social icon)' );
    register_nav_menu( 'menu-footer', 'menu in footer' );
    register_nav_menu( 'menu-network', 'menu in footer (social network)' );
};

function register_my_widgets(){
	register_sidebar( array(
		'name'          =>  'About Us',
		'id'            => "about_us",
		'description'   => 'description',
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
    ) );
    register_sidebar( array(
		'name'          =>  'Archives',
		'id'            => "archives",
		'description'   => 'description',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => "",
		'before_title'  => '<h4>',
		'after_title'   => "</h4>",
    ) );
    register_widget( 'archive_widget' );
}

// для замены путей для картинок
function my_path_images($name){
    echo  get_template_directory_uri() .'/assets/img/' . $name;
  };


 