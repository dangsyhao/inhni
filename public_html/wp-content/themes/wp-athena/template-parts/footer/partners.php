
<?php if(have_rows(INHNI_FOOTER_PARTENAIRES,'option')):?>
    <?php while(have_rows(INHNI_FOOTER_PARTENAIRES,'option')):the_row();?>
    <ul>
        <li>
            <a href="<?=get_sub_field('_partenaires_link')?>" target="_blank" title="<?= get_sub_field('_partenaires_title_tag')?>">
                <img class="lazy_image" src="<?= ASSETS_PATH . '/images/' ?>placeholder.gif" alt="<?php _e('Qualipropre',DOMAIN);?>"
                     data-lazy-src="<?= ASSETS_PATH . '/images/' ?>partner.png"/>
            </a>
        </li>
    </ul>
    <?php endwhile;?>
<?php endif;?>