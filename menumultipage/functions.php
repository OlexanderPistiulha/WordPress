<?php 

// хуки куда вешаем наши функции (1-название хука, 2-название нашей функции)
add_action('wp_enqueue_scripts', 'theme_add_scripts');
add_action('after_setup_theme', 'theme_setup_theme');

// филтер для скритие admin_bar в wordpress
// add_filter('show_admin_bar', '__return_false');

function theme_add_scripts() {
	// подключаем файл стилей темы
	wp_enqueue_style( 'style-main', get_template_directory_uri() . '/assets/css/style.css', '1.0.0', 'all');
};

function theme_setup_theme(){
    add_theme_support('custom-logo');/* для смены логотопа с админки (изменить в настройках в админки) */ 
    add_theme_support('title-tag');/* для смены название вкладки(title) с админки (изменить в настройках в админки) */
    add_theme_support('post-thumbnails');/* для смены миниатюры записи(uли главной картинки записи) с админки (в header использовать функцию <?php the_custom_logo() ?>)*/

    // подключение меню (1-изпользуеться в коде,  2-название зоны регистрации где будет отображаться меню)
	register_nav_menu( 'menu-header', 'menu in header' );
	register_nav_menu( 'menu-footer', 'menu in footer' );
};

// для замены путей для картинок
function my_path_images($name){
    echo  get_template_directory_uri() .'/assets/img/' . $name;
  };