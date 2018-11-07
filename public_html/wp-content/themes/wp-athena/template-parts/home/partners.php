
<section class="partners-bloc">
    <div class="wrapper">
        <h3 class="title-1 blue-polygon">
            <span><?php _e('Partenaires',DOMAIN); ?></span>
        </h3>
        <div class="partners">
            <?php while(have_rows(INHNI_PARTNERS_BLOC)) : the_row();?>
                <?php
                    $partner_link=get_sub_field(PARTNERS_BLOC_LINK);
                    $partner_title_tag=get_sub_field(PARTNERS_BLOC_TITLE_TAG);
                    $partner_image_url=get_sub_field(PARTNERS_BLOC_IMAGE_URL);
                    $partner_lazy_url=get_sub_field(PARTNERS_BLOC_IMAGE_LAZY_URL);
                    ?>
                <a class="partner" href="<?= $partner_link;?>" target="_blank"
                   title="<?= $partner_title_tag;?>">
                    <img class="lazy_image" src="<?= $partner_image_url;?>" alt="Qualipropre"
                         data-lazy-src="<?= $partner_lazy_url;?>"/>
                </a>
            <?php endwhile;?>
        </div>
    </div>
</section>


<!---->
<!--<section class="partners-bloc">-->
<!--    <div class="wrapper">-->
<!--        <h3 class="title-1 blue-polygon">-->
<!--            <span>Partenaires</span>-->
<!--        </h3>-->
<!--        <div class="partners">-->
<!--            --><?php //for($i=0;$i<=6;$i++):?>
<!---->
<!--                <a class="partner" href="http://www.qualipropre.org/" target="_blank"-->
<!--                   title="Accéder au site de Qualipropre">-->
<!--                    <img class="lazy_image" src="--><?php //echo ASSETS_PATH.'images/'?><!--placeholder.gif" alt="Qualipropre"-->
<!--                         data-lazy-src="--><?php //echo ASSETS_PATH.'images/'?><!--partner.png"/>-->
<!--                </a>-->
<!--            --><?php //endfor;?>
<!---->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->