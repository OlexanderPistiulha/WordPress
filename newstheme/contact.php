<?php
/*
Template Name: Contact
*/
?>

<!-- Здесь html/php код шаблона -->

<?php get_header(); ?>

    <section class="s-content s-content--narrow">

    <div class="row">

        <div class="s-content__header col-full">
            <h1 style="font-family:librebaskerville-bold, serif; font-weight: normal;" class="s-content__header-title">
                Зв'яжіться з нами, будемо раді почути вашу думку.
            </h1>
        </div> <!-- end s-content__header -->
        <div class="col-full s-content__main">
        <div class="row">
                <div class="col-six tab-full">
                    <h3 style="font-family:librebaskerville-bold, serif; font-weight: normal;" >Де нас знайти:</h3>
                    <p>Україна Київ<br> вул. Космічна 8-а</p>
                </div>
                <div class="col-six tab-full">
                    <h3 style="font-family:librebaskerville-bold, serif; font-weight: normal;">Контактна інформація:</h3>
                    <p>olexanderfreelance@gmail.com<br>Телефон: +380 967 326 459</p>

                </div>
            </div> <!-- end row -->

            <h3 style="font-family:librebaskerville-bold, serif; font-weight: normal;">Напишіть нам.</h3>
            <form name="cForm" id="cForm" method="post" action="">
                <fieldset>
                    <div class="form-field">
                        <input name="cName" type="text" id="cName" class="full-width" placeholder="Ім'я" value="">
                    </div>
                    <div class="form-field">
                        <input name="cEmail" type="text" id="cEmail" class="full-width" placeholder="Email" value="">
                    </div>
                    <div class="form-field">
                        <input name="cWebsite" type="text" id="cWebsite" class="full-width" placeholder="Телефон"  value="">
                    </div>
                    <div class="message form-field">
                    <textarea name="cMessage" id="cMessage" class="full-width" placeholder="Повідомлення" ></textarea>
                    </div>
                    <button type="submit" class="submit btn btn--primary full-width">Відправити</button>
                </fieldset>
            </form> <!-- end form -->
        </div> <!-- end s-content__main -->
    </div> <!-- end row -->
    </section> <!-- s-content -->

<?php get_footer(); ?>