

    <!-- s-footer
    ================================================== -->
    <footer class="s-footer">

        <div class="s-footer__main">
            <div class="row">
                
                <div class="col-two md-four mob-full s-footer__sitelinks">                        
                    <h4>Посилання</h4>
                    <?php wp_nav_menu( [
                        'theme_location'  => 'menu-footer',                     
                        'menu_class'      => 's-footer__linklist', 
                        'menu_id'         => '',
                        'echo'            => true,                                     
                      ])?>                    
                </div> <!-- end s-footer__sitelinks -->

                <div class="col-two md-four mob-full s-footer__archives">      
                    <?php dynamic_sidebar( 'archives' )?>                 
                </div> <!-- end s-footer__archives -->
              
                <div class="col-two md-four mob-full s-footer__social">                        
                    <h4>Соц. мережі</h4>
                    <?php wp_nav_menu( [
                        'theme_location'  => 'menu-network',                     
                        'menu_class'      => 's-footer__linklist', 
                        'menu_id'         => '',
                        'echo'            => true,
                                     
                      ])?>                     
                </div> <!-- end s-footer__social -->
                <div class="col-five md-full end s-footer__subscribe">                        
                    <h4>Останні новини </h4>
                    <p>Якщо ви хочите дізнаватись про останні новини першими, тоді залишайте електронну пошту і отримайте відповідні посилання на новини:</p>
                    <div class="subscribe-form">
                        <form id="mc-form" class="group" novalidate="true">
                            <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email" required="">                
                            <input type="submit" name="subscribe" value="Відправити">                
                            <label for="mc-email" class="subscribe-message"></label>                
                        </form>
                    </div>
                </div> <!-- end s-footer__subscribe -->
            </div>
        </div> <!-- end s-footer__main -->

        <div class="s-footer__bottom">
            <div class="row">
                <div class="col-full">
                    <div class="s-footer__copyright">
                        <span>© Web Design News 2019-2020</span> 
                    </div>
                    <div class="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"></a>
                    </div>
                </div>
            </div>
        </div> <!-- end s-footer__bottom -->
    </footer> <!-- end s-footer -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>                
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <?php wp_footer(); ?>
</body>

</html>