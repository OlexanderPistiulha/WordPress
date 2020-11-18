<?php get_header()?>

    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow s-content--no-padding-bottom">
      
        <?php while( have_posts() ) : the_post();  ?>           
            
            <article class="row format-standard">

                <div class="s-content__header col-full">
                    <h1 class="s-content__header-title">
                    <?php the_title();?>
                    </h1>
                    <ul class="s-content__header-meta">
                        <li class="date"><?php the_time('j F Y');?></li>
                    </ul>
                </div> <!-- end s-content__header -->
                <div>
                     <?php the_content(); ?> 
                </div>
            </article>
        <?php endwhile; ?>                   
      
        

    </section> <!-- s-content -->


    <section class="s-extra">
        <div class="row top">
            <div class="col-eight md-six tab-full popular">
                <h3 style="font-family:librebaskerville-bold, serif; font-weight: 700;">Популярні статті :</h3>
                <div class="block-1-2 block-m-full popular__posts">
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="../images/thumbs/small/1.1.1.jpg" alt="">
                        </a>
                        <h5><a href="#0">5 способів створення успішної посадкової сторінки від Тодда Бейлі</a></h5>
                        <section class="popular__meta">
                                <!-- <span class="popular__author"><a href="#0"> Alexander</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-19">Dec 19, 2017</time></span> -->
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="../images/thumbs/small/2.2.2.jpg" alt="">
                        </a>
                        <h5><a href="#0">Вільний простір у веб-дизайні. 9 сайтів для натхнення</a></h5>
                        <section class="popular__meta">
                                <!-- <span class="popular__author"><a href="#0"> Alexander</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-19">Dec 19, 2017</time></span> -->
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="../images/thumbs/small/3.3.3.png" alt="">
                        </a>
                        <h5><a href="#0">100 кращих безкоштовних тем для WordPress</a></h5>
                        <section class="popular__meta">
                                <!-- <span class="popular__author"><a href="#0"> Alexander</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-19">Dec 19, 2017</time></span> -->
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="../images/thumbs/small/4.4.4.png" alt="">
                        </a>
                        <h5><a href="#0">Чому вашу розсилку ніхто не читає: 15 причин</a></h5>
                        <section class="popular__meta">
                                <!-- <span class="popular__author"><a href="#0"> Alexander</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-19">Dec 19, 2017</time></span> -->
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="../images/thumbs/small/5.5.5.jpg" alt="">
                        </a>
                        <h5><a href="#0">У чому секрет ефективності контекстної реклами?</a></h5>
                        <section class="popular__meta">
                                <!-- <span class="popular__author"><a href="#0"> Alexander</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-19">Dec 19, 2017</time></span> -->
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="../images/thumbs/small/6.6.6.jpg" alt="">
                        </a>
                        <h5><a href="#0">Як створити сайт самостійно: керівництво по WordPress для малого бізнесу</a></h5>
                        <section class="popular__meta">
                                <!-- <span class="popular__author"><a href="#0"> Alexander</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-19">Dec 19, 2017</time></span> -->
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="../images/thumbs/small/7.7.7.jpg" alt="">
                        </a>
                        <h5><a href="#0">Покази, кліки, ліди: за що вигідніше платити</a></h5>
                        <section class="popular__meta">
                                <!-- <span class="popular__author"><a href="#0"> Alexander</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-19">Dec 19, 2017</time></span> -->
                        </section>
                    </article>
                   
                    
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


 <? get_footer( )?>