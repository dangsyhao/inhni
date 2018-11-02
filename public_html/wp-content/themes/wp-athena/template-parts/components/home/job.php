
<?php while(have_rows('inhni_job_offers')):the_row();?>
    <?php
        $job_obffer_title=get_sub_field('inhni_job_offer_title');
        $job_obffer_detail=get_sub_field('inhni_job_offers_details');
        $job_obffer_content=get_sub_field('inhni_job_offers_content');
        $job_obffer_link=get_sub_field('inhni_job_offers_link');
    ?>
    <a class="job" href="#" title="Consulter l'offre d'emploi">
        <h4 class="title-4">Agent de petite maintenance H/F</h4>
        <ul class="details">
            <li class="school"><?= $job_obffer_detail['inhni_job_offers_details_school']?></li>
            <li class="location"><?= $job_obffer_detail['inhni_job_offers_details_location']?></li>
            <li class="money"><?= $job_obffer_detail['inhni_job_offers_details_money']?></li>
        </ul>
        <p><?= $job_obffer_content; ?> </p>
        <span class="link-arrow link-arrow-align-right link-arrow-white">
            <span class="<?= $job_obffer_link['inhni_job_offers_link_url']?>"><?= $job_obffer_link['inhni_job_offers_link_title']?></span>
        </span>
    </a>
<?php endwhile; ?>