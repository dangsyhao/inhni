<section class="jobs-offers-bloc">
    <div class="wrapper">
        <h3 class="title-1 blue-polygon">
            <span>Offres en alternance disponibles</span>
        </h3>
        <div class="jobs">
            <?php for($i=0;$i<=3;$i++):?>
            <?php get_template_part('template-parts/components/home/job') ;?>
            <?php endfor;?>

        </div>
        <a class="btn" href="#" title="Voir toutes les offres d'emploi">
            <span class="txt">Toutes les offres d'emploi</span>
        </a>
    </div>
</section>