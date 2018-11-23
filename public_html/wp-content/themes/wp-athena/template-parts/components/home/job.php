
<?php $job_offer_items = get_sub_field('job_offer_items');?>
    <?php foreach($job_offer_items as $key=>$items):?>
        <a class="job" href="<?= $items['detail_link']?>" title="<?php _e("Consulter l'offre d'emploi",DOMAIN);?>">
            <h4 class="title-4"><?= $items['title'];?></h4>
            <ul class="details">
                <li class="school"><?= $items['details']['school']?></li>
                <li class="location"><?= $items['details']['location']?></li>
                <li class="money"><?= $items['details']['money']?></li>
            </ul>
            <p><?= $items['excerpt']; ?> </p>
            <span class="link-arrow link-arrow-align-right link-arrow-white">
                <span class="<?= $items['detail_link']?>"><?php _e("Voir l'annonce",DOMAIN);?></span>
            </span>
        </a>
    <?php endforeach;?>