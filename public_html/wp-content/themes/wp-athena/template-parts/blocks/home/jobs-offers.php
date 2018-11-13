<?php if(have_rows(INHNI_JOB_OFFERS)):?>
<section class="jobs-offers-bloc">
    <div class="wrapper">
        <h3 class="title-1 blue-polygon">
            <span><?php _e('Offres en alternance disponibles',DOMAIN)?></span>
        </h3>
        <div class="jobs">
            <?php get_template_part('template-parts/components/home/job') ;?>
        </div>
        <a class="btn" href="#" title="Voir toutes les offres d'emploi">
            <span class="txt"><?php _e('Toutes les offres demploi',DOMAIN)?></span>
        </a>
    </div>
</section>
<?php endif;?>