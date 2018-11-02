<?php
    $inhni_hot_news = get_field('inhni_hot_news');
    if ( $inhni_hot_news ) :
?>
<section class="featured-news-bloc">
    <div class="wrapper">
        <h3 class="title-1 blue-polygon">
            <span><?php _e('À la une',DOMAIN) ?></span>
        </h3>

        <?php include( locate_template( 'template-parts/components/home/article-big.php', false, false ) );  ?>

        <a class="btn" href="#" title="Voir toutes les mises à la une">
            <span class="txt"><?php _e('Toutes les mises à la une',DOMAIN)?></span>
        </a>
    </div>
</section>
<?php endif;
