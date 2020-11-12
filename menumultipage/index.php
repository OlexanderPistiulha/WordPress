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

<?php get_footer(); ?>



<!--------------------- меню с которого было делано --------------------->

        <!-- <ul class="menu">
			<li class="current"><a href="">Главная</a></li>
			<li><a class="current" href="">О компании</a>
				<ul>
					<li><a href="">Производство</a></li>
					<li><a href="">Клиенты</a></li>
					<li><a href="">Для партнеров</a></li>
					<li><a href="">Для клиентов</a></li>
					<li><a href="">Реклама</a></li>
                    <li><a href="">Производство</a></li>
				</ul>
			</li>
			<li><a href="">Услуги</a></li>
			<li><a href="">Фотогалерея</a></li>
			<li><a href="">Цены</a></li>
			<li><a href="">Отзывы</a></li>
			<li><a href="">Контакты</a></li>
        </ul> -->
        
<!-- ------------------------------------------------------------------ -->