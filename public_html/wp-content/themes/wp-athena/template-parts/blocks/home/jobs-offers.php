
<?php
$args=array(
    'posts_per_page'   => 4,
    'post_type'     =>'alternating_offers'
);
$results=get_posts($args);
?>

<section class="jobs-offers-bloc">
    <div class="wrapper">
        <h3 class="title-1 blue-polygon">
            <span><?php _e('Offres en alternance disponibles',DOMAIN);?></span>
        </h3>
        <div class="jobs">
            <?php foreach($results as $post ):?>
                <?php setup_postdata($post)?>

                <?php while(have_rows(INHNI_ALTERNATING_OFFERS,$post->ID)):the_row();?>
                    <a class="job" href="<?php the_permalink();?>" title="Consulter l'offre d'emploi">
                        <h4 class="title-4"><?= the_title()?></h4>
                        <ul class="details">
                            <li class="school"><?= get_sub_field('contract_type')?></li>
                            <li class="location"><?= get_sub_field('location')?></li>
                            <li class="money"><?= get_sub_field('cost')['cost_from']?> € par mois</li>
                        </ul>
                        <?php $offers_desc=get_sub_field('alternating_offers_description');?>
                        <?php foreach ($offers_desc as $desc):?>
                            <?php if($desc['description_show_inbox'][0] =='check'):?>
                                <p><?= strip_tags($desc['description_content'])?></p>
                            <?php endif;?>
                        <?php endforeach;?>
                        <span class="link-arrow link-arrow-align-right link-arrow-white">
                    <span class="link"><?php _e('Voir l\'annonce',DOMAIN);?></span>
              </span>
                    </a>
                <?php endwhile;?>

            <?php endforeach;?>
        </div>

        <?php $get_cate=get_the_category(); ?>
        <a class="btn" href="<?= get_category_link($get_cate[0]->cat_ID);?>" title="Voir toutes les offres">
            <span class="txt"><?php _e('Voir toutes les offres',DOMAIN);?></span>
        </a>
        <?php wp_reset_postdata($post);?>
    </div>
</section>
