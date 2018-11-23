
<?php if(have_rows(INHNI_JOB_OFFERS)):?>
    <section class="jobs-offers-bloc">
        <div class="wrapper">
            <h3 class="title-1 blue-polygon">
                <span><?php _e('Offres en alternance disponibles',DOMAIN)?></span>
            </h3>
        <?php while(have_rows(INHNI_JOB_OFFERS)):the_row();?>
            <div class="jobs">
                <?php get_template_part('template-parts/components/home/job') ;?>
            </div>
            <a class="btn" href="<?= get_sub_field('list_link')?>" title="<?php _e('Voir toutes les offres d\'emploi',DOMAIN);?>">
                <span class="txt"><?php _e('Toutes les offres demploi',DOMAIN)?></span>
            </a>
        <?php endwhile; ?>
        </div>
    </section>
<?php endif;?>