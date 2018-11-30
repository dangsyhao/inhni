
<div class="main">
        <h1 class="title-9"><?php the_title()?></h1>
        <?php while(have_rows(INHNI_ALTERNATING_OFFERS,$post->ID)):the_row();?>

        <ul class="present-list-detail">
            <li>
                <i class="i-contrat i-circle"></i>
                <p class="des"><?= get_sub_field('contract_type'); ?></p>
            </li>
            <li>
                <i class="i-calendar i-circle"></i>
                <p class="des"><?= get_sub_field('starting_time'); ?></p>
            </li>
            <li>
                <i class="i-pin i-circle"></i>
                <p class="des"><?= get_sub_field('location'); ?></p>
            </li>
            <li>
                <i class="i-euro i-circle"></i>
                <p class="des"><span>De</span> <?= get_sub_field('cost')['cost_from']; ?>€ <span>HT à</span> <?= get_sub_field('cost')['cost_to']; ?>€</p>
            </li>
            <li>
                <i class="i-diplome i-circle"></i>
                <p class="des"><?= get_sub_field('certificate_type'); ?></p>
            </li>
            <li>
                <i class="i-people i-circle"></i>
                <p class="des"><?= get_sub_field('number_recrutement'); ?></p>
            </li>
        </ul>

    <?php $offer_desc=get_sub_field('alternating_offers_description'); ?>

    <?php foreach($offer_desc as $desc):?>
        <div class="editor-bloc">
            <h3><?= $desc['description_items']?></h3>
            <p><?= $desc['description_content']?></p>
        </div>
        <?php endforeach;?>
        <?php endwhile;?>

        <div class="wrap-btn">
            <a class="btn" href="<?= get_bloginfo('siteurl')."/contact"?>" title="<?php _e('Contacter le centre de formation',DOMAIN);?>">
                <span class="txt"><?php _e('Contacter le centre de formation',DOMAIN);?></span>
            </a>
        </div>
    </div>




<!---->
<!--<div class="main">-->
<!--    <h1 class="title-9">Agent machiniste</h1>-->
<!--    <ul class="present-list-detail">-->
<!--        <li>-->
<!--            <i class="i-contrat i-circle"></i>-->
<!--            <p class="des">Bac +3</p>-->
<!--        </li>-->
<!--        <li>-->
<!--            <i class="i-calendar i-circle"></i>-->
<!--            <p class="des">À partir de Novembre 2018</p>-->
<!--        </li>-->
<!--        <li>-->
<!--            <i class="i-pin i-circle"></i>-->
<!--            <p class="des">Villejuif</p>-->
<!--        </li>-->
<!--        <li>-->
<!--            <i class="i-euro i-circle"></i>-->
<!--            <p class="des"><span>De</span> 800€ <span>HT à</span> 1100€</p>-->
<!--        </li>-->
<!--        <li>-->
<!--            <i class="i-diplome i-circle"></i>-->
<!--            <p class="des">Certificat type*</p>-->
<!--        </li>-->
<!--        <li>-->
<!--            <i class="i-people i-circle"></i>-->
<!--            <p class="des">2 Postes à pourvoir</p>-->
<!--        </li>-->
<!--    </ul>-->
<!---->
<!--    <div class="editor-bloc">-->
<!--        <h3>Description du poste</h3>-->
<!--        <p>Stage de 3 jours en présentiel dans l’un de nos centre de formation partout en France</p>-->
<!--        <h3>Domaine de l’entreprise</h3>-->
<!--        <p>Connaitre les règles de conduite et de sécurité relatives aux PEMP (Recommandation R386 de la CNAMTS)</p>-->
<!--        <p>Être capable d’accéder à des emplacements et évoluer en hauteur en sécurité en utilisant une PEMP de type 1B et 3B</p>-->
<!--        <h3>Missions</h3>-->
<!--        <p>Apports théoriques et manipulations sur les deux types de plateforme élévatrice mobile de personne.Au cours de la formation, une documentation sera remise à chaque stagiaire</p>-->
<!--        <h3>Profil recherché</h3>-->
<!--        <p>Les obligations du constructeur, de l’utilisateur, des employeurs et les responsabilités des conducteurs (civile / pénale) Le principe de fonctionnement et les différents organes Les différents EPI (Équipements de Protection Individuelle)</p>-->
<!--    </div>-->
<!---->
<!--    <div class="wrap-btn">-->
<!--        <a class="btn" href="#" title="Contacter le centre de formation">-->
<!--            <span class="txt">Contacter le centre de formation</span>-->
<!--        </a>-->
<!--    </div>-->
<!--</div>-->