
<?php foreach ($posts as $post_items):?>
    <article class="item">
        <div class="image">
            <a class="lazy_responsive_image initialized lazy_loaded" href="#" title="" style="background-image:
                url('<?= get_the_post_thumbnail_url($post_items->ID,'search-items')?>');"
                    data-lazy-src-481="<?= get_the_post_thumbnail_url($post_items->ID,'search-items')?>"
                        data-lazyload-init-url="<?= get_the_post_thumbnail_url($post_items->ID,'search-items')?>">
                <noscript>
                    <img src="<?= get_the_post_thumbnail_url($post_items->ID,'search-items')?>" alt="" />
                </noscript>
            </a>
        </div>
        <div class="content">
            <h4 class="title-12">
                <a href="<?php the_permalink($post_items->ID);?>" title="<?= _e('Consulter l\'article',DOMAIN); ?>">
                    <?= $post_items->post_title?>
                </a>
            </h4>
            <p class="promotion"><?php _e('Code formation',DOMAIN);?><span>- CY417</span></p>
            <p>
                <?php the_excerpt() ;?>
            </p>
            <ul class="present-result">
                <li>
                    <p><span class="des"><?php _e('Durée :',DOMAIN);?></span> <?php the_modified_time('g');?> jour</p>
                </li>
                <li>
                    <p><span class="des"><?php _e('Public visé',DOMAIN);?> : </span><?= $post_items->post_status ;?></p>
                </li>
            </ul>
            <div class="wrap-btn">
                <span class="link-arrow link-arrow-blue link-arrow-align-right fix">
                     <a class="link" href="<?php the_permalink($post_items->ID);?>"
                        title="<?php _e('Continuer la lecture',DOMAIN);?>"><?php _e('Voir la fiche',DOMAIN);?>"
                     </a>
                </span>
            </div>
        </div>
    </article>

<?php endforeach;?>
