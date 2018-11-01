<section class="partners-bloc">
    <div class="wrapper">
        <h3 class="title-1 blue-polygon">
            <span>Partenaires</span>
        </h3>
        <div class="partners">
            <?php for($i=0;$i<=6;$i++):?>

                <a class="partner" href="http://www.qualipropre.org/" target="_blank"
                   title="Accéder au site de Qualipropre">
                    <img class="lazy_image" src="<?php echo ASSETS_PATH.'images/'?>placeholder.gif" alt="Qualipropre"
                         data-lazy-src="<?php echo ASSETS_PATH.'images/'?>partner.png"/>
                </a>
            <?php endfor;?>

        </div>
    </div>
</section>