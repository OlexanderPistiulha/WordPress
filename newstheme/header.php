<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>

    <!--- basic page needs ================================================== -->

    <meta charset="utf-8">

    <title><?php echo wp_get_document_title(); ?></title>

    <meta name="description" content="Статті, інструменти, останні новини та навчальні матеріали для WEB, думки та поради експертів, інструменти моніторингу та поліпшення продуктивності веб-сайту.">
    <meta name="keywords" content="статті, новини, веб, SEO, верстка, дизайн">
    <meta name="subject" content="News">
    <meta name="author" content="">

    <?php wp_head()?>

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">   

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=cyrillic-ext" rel="stylesheet">
</head>

<body id="top">

    
<div class="s-pageheader">
        <header class="header">
            <div class="header__content row">
                <div class="header__logo">
                    <a class="logo" href="index.php">
                    <?php $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); // получаем url кастомного логотипа ?>
                        <img src="<?php echo $custom_logo__url[0] // выводим логотип ?>" class="logo" alt="логотип">
                    </a>
                </div> <!-- end header__logo -->

                <?php wp_nav_menu( [
                        'theme_location'  => 'menu-icons',                     
                        'menu_class'      => 'header__social', 
                        'menu_id'         => '',
                        'echo'            => true,
                       // 'fallback_cb'     => 'wp_page_menu',                      
                       // 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',                      
                ])?>   

                <a class="header__search-trigger" href="#0"></a>
                <div class="header__search">
                    <form role="search" method="get" class="header__search-form" action="#">
                        <label>
                            <span class="hide-content">Шукати:</span>
                            <input type="search" class="search-field"  value="" name="s" title="Search for:" >
                        </label>
                        <input type="submit" class="search-submit" value="Search">
                    </form>        
                    <a href="#0" title="Close Search" class="header__overlay-close">Close</a>
                </div>  <!-- end header__search -->

                <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
                <nav class="header__nav-wrap">
                    <h2 class="header__nav-heading h6">Навігація</h2>

                    <?php wp_nav_menu( [
                        'theme_location'  => 'menu-header',                     
                        'menu_class'      => 'header__nav', 
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',                      
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',                      
                    ])?>                  

                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>
                </nav> <!-- end header__nav-wrap -->
            </div> <!-- header-content -->
        </header> <!-- header -->
    </div> <!-- end s-pageheader -->
