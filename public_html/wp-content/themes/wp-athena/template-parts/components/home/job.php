<?php while(have_rows(INHNI_JOB_OFFERS)):the_row();?>
    <?php
        $job_obffer_title = get_sub_field(INHNI_JOB_OFFER_TITLE);
        $job_obffer_detail=get_sub_field(INHNI_JOB_OFFERS_DETAILS);
        $job_obffer_content=get_sub_field(INHNI_JOB_OFFERS_CONTENT);
        $job_obffer_link=get_sub_field(INHNI_JOB_OFFERS_LINK);
    ?>
    <a class="job" href="<?= $job_obffer_link[INHNI_JOB_OFFERS_LINK_URL]?>" title="<?php _e("Consulter l'offre d'emploi",DOMAIN);?>">
        <h4 class="title-4"><?= $job_obffer_title;?></h4>
        <ul class="details">
            <li class="school"><?= $job_obffer_detail[INHNI_JOB_OFFERS_DETAILS_SCHOOL]?></li>
            <li class="location"><?= $job_obffer_detail[INHNI_JOB_OFFERS_DETAILS_LOCATION]?></li>
            <li class="money"><?= $job_obffer_detail[INHNI_JOB_OFFERS_DETAILS_MONEY]?></li>
        </ul>
        <p><?= $job_obffer_content; ?> </p>
        <span class="link-arrow link-arrow-align-right link-arrow-white">
            <span class="<?= $job_obffer_link[INHNI_JOB_OFFERS_LINK_URL]?>"><?php _e("Voir l'annonce",DOMAIN);?></span>
        </span>
    </a>
<?php endwhile; ?>