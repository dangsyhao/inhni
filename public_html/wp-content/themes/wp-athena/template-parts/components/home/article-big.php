
<?php $news_items=get_sub_field('news_items');?>

<?php if(isset($news_items)):?>
    <?php setup_postdata($news_items);?>
    <article class="article big">
        <div class="image">
            <a class="lazy_responsive_image"
               href="#"
               title="Consulter l'article"
               style="background-image: url('<?php echo ASSETS_PATH.'images/'?>placeholder.gif');"
               data-lazy-src-0-480="<?= get_the_post_thumbnail_url($news_items->ID, 'hot-new-mobile') ?>"
               data-lazy-src-481="<?= get_the_post_thumbnail_url($news_items->ID, 'hot-news') ?>">
                <noscript>
                    <img src="<?= get_the_post_thumbnail_url($news_items->ID, 'hot-news') ?>" alt="<?php _e('Journée mondiale de la propreté',DOMAIN);?>"/>
                </noscript>
            </a>
        </div>
        <div class="content">
            <ul class="tags">
                <li>
                    <span><?php _e("Actualités",DOMAIN); ?></span>
                </li>s
            </ul>
            <h4 class="title-3">
                <a href="<?= get_the_permalink($news_items->ID) ?>" title="<?php _e('Consulter l\'article',DOMAIN);?>">
                    <?= $news_items->post_title ?>
                </a>
            </h4>
            <p> <?= get_the_excerpt($news_items->ID) ?></p>
            <span class="link-arrow link-arrow-blue">
                    <a class="link" href="<?= get_the_permalink($news_items->ID) ?>" title="<?php _e('Continuer la lecture',DOMAIN);?>"><?php _e('Lire la suite',DOMAIN);?></a>
                </span>
        </div>
    </article>

<?php wp_reset_postdata();
endif;?>
