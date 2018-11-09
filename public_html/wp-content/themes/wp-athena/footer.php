
<footer id="footer">
    <div class="footer-top">
        <div class="wrapper">
            <div class="footer-top-left">
                <?php get_template_part( 'template-parts/footer/footer', 'contact' ) ?>
            </div>
            <div class="footer-top-right">
                <div class="footer-top-right-top">
                <?php get_template_part( 'template-parts/footer/footer', 'title-menu1' ) ?>
                <?php get_template_part( 'template-parts/footer/footer', 'title-menu2' ) ?>
                    <div class="footer-top-right-top-right">
                        <p class="title-6 blue-polygon"><?php _e('Suivez-nous !',DOMAIN);?></p>
                        <?php get_template_part( 'template-parts/footer/social-networks' ) ?>

                    </div>
                </div>
                <div class="footer-top-right-bottom">
                    <p class="title-6 blue-polygon">Partenaires certifiants</p>
                        <?php get_template_part( 'template-parts/footer/partners' ) ?>

                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="wrapper">
                     <?php get_template_part( 'template-parts/footer/big-menu' ) ?>

            <p class="copyright">INHNI © Copyright 2018</p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Roboto+Condensed:400,500,700|Roboto:300,400,500|Source+Serif+Pro:600,700,900" rel="stylesheet">

    </body>
</html>
