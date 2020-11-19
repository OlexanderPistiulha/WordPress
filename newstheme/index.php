<?php get_header('index'); ?>


<div class="pageheader-content row">
            <div class="col-full">
                <div class="featured">
<!-- -------------------------------------------big jpg---------------------------------------------------------------------- -->

                    <?php
                        global $post;
                        $args = array(
                            'post_type' => 'post',
                            'numberposts' => 1,                            
                            'orderby'     => 'rand',                           
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        );
                        $myposts = get_posts( $args );
                        foreach( $myposts as $post ){ setup_postdata($post);
                            ?>
                              <div class="featured__column featured__column--big">
                                <div class="entry" style="background-image:url('<?php the_post_thumbnail_url();?>');">                            
                                    <div class="entry__content">
                                        <span class="entry__category"><?php the_category(" ");?></span>
                                        <h1 style="font-family:librebaskerville-bold, serif; font-weight: normal;"><a href="<?php the_permalink( );?>" title=""> <?php the_title();?></a></h1>
                                        <div class="entry__info">
                                            <a href="" class="entry__profile-pic">
                                            <?php global $current_user; get_currentuserinfo(); echo get_wp_user_avatar($current_user->ID); ?>
                                                <!-- <img class="avatar" src="<?php ?>" alt=""> -->
                                            </a>
                                            <ul class="entry__meta">
                                                <li><a href="https://www.instagram.com/?hl=uk"><?php the_author();?></a></li>
                                                <li><?php the_time( 'j F Y')?></li>
                                            </ul>
                                        </div>
                                    </div> <!-- end entry__content -->                            
                                </div> <!-- end entry -->
                            </div> <!-- end featured__big -->
                            <?php
                        }
                        wp_reset_postdata();
                     ?>          



                   
<!-------------------------------------------jpg two------------------------------------------------------------------------- -->
              
                    <?php
                        global $post;
                        $args = array(
                            'post_type' => 'post',
                            'numberposts' => 2,                            
                            'orderby'     => 'rand',                           
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        );
                        $myposts = get_posts( $args );
                        foreach( $myposts as $post ){ setup_postdata($post);
                            ?>
                              <div class="featured__column featured__column--small">
                                <div class="entry" style="background-image:url('<?php the_post_thumbnail_url();?>');">                            
                                    <div class="entry__content">
                                        <span class="entry__category"><?php the_category(" ");?></span>
                                        <h1 style="font-family:librebaskerville-bold, serif; font-weight: normal;"><a href="<?php the_permalink( );?>" title=""> <?php the_title();?></a></h1>
                                        <div class="entry__info">
                                            <a href="https://www.instagram.com/?hl=uk" class="entry__profile-pic">
                                                <img class="avatar" src="" alt="">
                                            </a>
                                            <ul class="entry__meta">
                                                <li><a href="https://www.instagram.com/?hl=uk"><?php the_author();?></a></li>
                                                <li><?php the_time( 'j F Y')?></li>
                                            </ul>
                                        </div>
                                    </div> <!-- end entry__content -->                            
                                </div> <!-- end entry -->
                            </div> <!-- end featured__big -->
                            <?php
                        }
                        wp_reset_postdata();
                     ?>        
<!-- -------------------------------------three jpg--------------------------------------------------------------------------- -->
                        
                </div> <!-- end featured -->
            </div> <!-- end col-full -->
        </div> <!-- end pageheader-content row -->
    </section> <!-- end s-pageheader -->


  

    <!-- s-extra
    ================================================== -->
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
            <?php dynamic_sidebar('about_us')?>
            <?php wp_nav_menu( [
                        'theme_location'  => 'menu-icons',                     
                        'menu_class'      => 'about__social', 
                        'menu_id'         => '',
                        'echo'            => true,                                       
                    ]  )?>   
            </div>         

          
        </div> <!-- end row -->    
    </section> 



<?php get_footer(); ?>

