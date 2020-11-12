<?php
/*
Template Name: TEST FRAME FOR PAGE
*/
?>

<!-- Здесь html/php код шаблона -->

<?php get_header(); ?>

    <?php wp_nav_menu( [
	'theme_location'  => 'menu-header',
	// 'menu'            => '', 
	 'container'       => false, 
	// 'container_class' => '', 
	'container_id'    => 'ul',
	'menu_class'      => 'menu', 
	// 'menu_id'         => '',
	// 'echo'            => true,
	// 'fallback_cb'     => 'wp_page_menu',
	// 'before'          => '',
	// 'after'           => '',
	// 'link_before'     => '',
	// 'link_after'      => '',
	// 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	// 'depth'           => 0,
	// 'walker'          => '',
    ] );
    ?>


        

       <div style="width: 200px;
    height: 200px;
    background-color: red;"></div>
<?php get_footer(); ?>