<?php
    $postID = $inhni_hot_news->ID;
?>
<article class="article big">
    <!--{# When the "video" class is present, an icon will be added in css #}-->
    <div class="image">
        <a class="lazy_responsive_image"
           href="#"
           title="Consulter l'article"
           style="background-image: url('<?php echo ASSETS_PATH.'images/'?>placeholder.gif');"
           data-lazy-src-0-480="<?= get_the_post_thumbnail_url($postID, 'hot-new-mobile') ?>"
           data-lazy-src-481="<?= get_the_post_thumbnail_url($postID, 'hot-news') ?>">
            <noscript>
                <img src="<?= get_the_post_thumbnail_url($postID, 'hot-news') ?>" alt="Journée mondiale de la propreté"/>
            </noscript>
        </a>
    </div>
    <div class="content">
        <ul class="tags">
            <li>
                <span><?php _e("Actualités",DOMAIN); ?></span>
            </li>
        </ul>
        <h4 class="title-3">
            <a href="#" title="Consulter l'article">
                <?= $inhni_hot_news->post_title ?>
            </a>
        </h4>
        <p> <?php get_the_excerpt($postID) ?></p>
        <span class="link-arrow link-arrow-blue">
            <a class="link" href="<?= get_the_permalink($postID) ?>" title="Continuer la lecture"><?php _e('Lire la suite',DOMAIN);?></a>
        </span>
    </div>

</article>