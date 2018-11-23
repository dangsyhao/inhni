

<?php if(have_rows(INHNI_PARTNERS_BLOC)):?>
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
                    ?>
                <a class="partner" href="<?= $partner_link;?>" target="_blank"
                   title="<?= $partner_title_tag;?>">
                    <img class="lazy_image" src="<?php echo ASSETS_PATH.'images/'?>placeholder.gif" alt="Qualipropre"
                         data-lazy-src="<?php echo ASSETS_PATH.'images/'?>partner.png"/>
                </a>
            <?php endwhile;?>
        </div>
    </div>
</section>
<?php endif;?>
