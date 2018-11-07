<?php while(have_rows(INHNI_JOB_OFFERS)):the_row();?>
    <?php
        $job_obffer_title=get_sub_field(INHNI_JOB_OFFER_TITLE);
        $job_obffer_detail=get_sub_field(INHNI_JOB_OFFERS_DETAILS);
        $job_obffer_content=get_sub_field(INHNI_JOB_OFFERS_CONTENT);
        $job_obffer_link=get_sub_field(INHNI_JOB_OFFERS_LINK);
    ?>
    <a class="job" href="#" title="Consulter l'offre d'emploi">
        <h4 class="title-4">Agent de petite maintenance H/F</h4>
        <ul class="details">
            <li class="school"><?= $job_obffer_detail[INHNI_JOB_OFFERS_DETAILS_SCHOOL]?></li>
            <li class="location"><?= $job_obffer_detail[INHNI_JOB_OFFERS_DETAILS_LOCATION]?></li>
            <li class="money"><?= $job_obffer_detail[INHNI_JOB_OFFERS_DETAILS_MONEY]?></li>
        </ul>
        <p><?= $job_obffer_content; ?> </p>
        <span class="link-arrow link-arrow-align-right link-arrow-white">
            <span class="<?= $job_obffer_link[INHNI_JOB_OFFERS_LINK_URL]?>"><?= $job_obffer_link[INHNI_JOB_OFFERS_LINK_TITLE]?></span>
        </span>
    </a>
<?php endwhile; ?>