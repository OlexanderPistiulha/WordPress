<?php
/*
Template Name: Category-Web
*/
?>

<!-- Здесь html/php код шаблона -->

<?php get_header(); ?>

<section class="s-content">

        <!-- <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <h1>Веб-дизайн</h1>

                <p class="lead"> Тут зібрані статті в галузі веб-розробки і різновидів дизайну, які включають проектування користувацьких інтерфейсів призначених  для сайтів або веб-додатків</p>
            </div>
        </div> -->
        
        <div class="row masonry-wrap">
            <div class="masonry">
                <div class="grid-sizer"></div>            
                    <?php
                        global $post;
                        $args = array(
                            'post_type' => 'post',
                            //'numberposts' => 5,  
                            'category_name'    => 'web',                                
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'include'     => array(),
                            'exclude'     => array(),
                            'meta_key'    => '',
                            'meta_value'  =>'',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        );
                        $myposts = get_posts( $args );
                        foreach( $myposts as $post ){ setup_postdata($post);
                            ?>
                        <article class="masonry__brick entry format-standard">                        
                            <div class="entry__thumb">
                                <a href="<?php the_permalink(  );?>" class="entry__thumb-link">
                                    <img src="<?php the_post_thumbnail_url( )?>" alt="">
                                </a>
                            </div>    
                            <div class="entry__text">
                                <div class="entry__header">                            
                                    <div class="entry__date">
                                        <a href="<?php the_permalink(  );?>"><?php the_time( 'j F Y')?></a>
                                    </div>
                                    <h1 class="entry__title"><a href="<?php the_permalink(  );?>"><?php the_title(); ?></a></h1>                            
                                </div>
                                <div class="entry__excerpt">
                                    <p>   
                                        <?php the_excerpt()?>                          
                           
                                    </p>
                                </div>
                                <div class="entry__meta">
                                    <span class="entry__meta-links">
                                        <p><?php the_category(' | '); ?></p>
                                    </span>
                                </div>
                            </div>    
                        </article> <!-- end article -->
                            <?php
                        }
                        wp_reset_postdata();
                    ?>            


        <div class="row">
            <div class="col-full">
                <nav class="pgn">
                    <ul>
                        <li><a class="pgn__prev" href="#0">Prev</a></li>
                        <li><a class="pgn__num current" href="#0">1</a></li>
                        <li><span class="pgn__num ">2</span></li>
                        <li><a class="pgn__num" href="#0">3</a></li>
                        <li><a class="pgn__num" href="#0">4</a></li>
                        <li><a class="pgn__num" href="#0">5</a></li>
                        <li><span class="pgn__num dots">…</span></li>
                        <li><a class="pgn__num" href="#0">8</a></li>
                        <li><a class="pgn__next" href="#0">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </section> <!-- s-content -->
    

    <section class="s-extra">
        <div class="row top">
            <div class="col-eight md-six tab-full popular">
                <h3 style="font-family:librebaskerville-bold, serif; font-weight: 700;">Популярні статті :</h3>
                <div class="block-1-2 block-m-full popular__posts">

                <?php
                        global $post;
                        $args = array(
                            'post_type' => 'post',
                            'numberposts' => 6,                            
                            'orderby'     => 'rand',                           
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        );
                        $myposts = get_posts( $args );
                        foreach( $myposts as $post ){ setup_postdata($post);
                            ?>
                                <article class="col-block popular__post">
                                    <a href="<?php the_permalink( );?>" class="popular__thumb">
                                        <img src="<?php the_post_thumbnail_url();?>" alt="">
                                    </a>
                                    <h5><a href="<?php the_permalink( );?>"><?php the_title( );?></a></h5>
                                    <section class="popular__meta">
                                        <span class="popular__author"><p > <?php the_author();?></p></span>
                                        <span class="popular__date"><span>on</span> <time><? the_time('j F Y');?></time></span>
                                    </section>
                                </article>
                            <?php
                        }
                        wp_reset_postdata();
                ?>                 
                    
                </div> <!-- end popular_posts -->
            </div> <!-- end popular -->
            
            <div class="col-four md-six tab-full about">
                <h3>Про нас :</h3>
                <p>
                    Ми віримо, що все можливо, варто тільки спробувати, і що стандартні методи не завжди працюють, а також ми впевнені, що робота з кваліфікованими людьми завжди виходить дуже плідною і цікавою.
                    Якщо Ви хочете дізнатися щось нове про веб-розробку або вважаєте, що за допомогою Інтернету зможете вивести Ваш бізнес на новий, більш високий рівень, то даний ресурс допоможе Вам досягти вашої мети.
                </p>
                <ul class="about__social">
                    <li>
                        <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/?lang=uk"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/?hl=uk"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="https://www.pinterest.ru/"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    </li>
                </ul> <!-- end header__social -->
            </div> <!-- end about -->
        </div> <!-- end row -->    
    </section> 

<?php get_footer(); ?>