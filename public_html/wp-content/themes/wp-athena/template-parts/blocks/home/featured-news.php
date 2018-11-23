
<?php if(have_rows(INHNI_LATEST_NEWS)):?>
    <section class="featured-news-bloc">
        <div class="wrapper">
            <h3 class="title-1 blue-polygon">
                <span><?php _e('À la une',DOMAIN) ?></span>
            </h3>
            <?php while(have_rows(INHNI_LATEST_NEWS)):the_row();?>
                <?php include(locate_template( 'template-parts/components/home/article-big.php', false, false ));?>
                <a class="btn" href="<?= get_sub_field('lates_news_link');?>" title="<?php _e('Voir toutes les mises à la une\'',DOMAIN)?>">
                    <span class="txt"><?php _e('Toutes les mises à la une',DOMAIN)?></span>
                </a>
            <?php endwhile;?>
        </div>
    </section>
<?php endif;?>
