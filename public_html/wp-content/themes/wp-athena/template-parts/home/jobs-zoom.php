
<?php if(have_rows(INHNI_JOBS_ZOOM)):?>
<section class="jobs-zoom-bloc">
    <div class="wrapper">
        <h3 class="title-1 blue-polygon">
            <span><?php _e('Zooms métiers',DOMAIN);?></span>
        </h3>
        <div class="zooms">
             <?php while(have_rows(INHNI_JOBS_ZOOM)):the_row();?>
            <?php
                $jobs_zoom_video=get_sub_field(INHNI_JOBS_ZOOM_VIDEO);
                $jobs_zoom_image=get_sub_field(INHNI_JOBS_ZOOM_IMAGE);
                $jobs_zoom_title=get_sub_field(INHNI_JOBS_ZOOM_TITLE);
                $jobs_zoom_content=get_sub_field(INHNI_JOBS_ZOOM_CONTENT);
                $jobs_zoom_button=get_sub_field(INHNI_JOBS_ZOOM_BUTTON);
            ?>
            <a data-fancybox class="zoom" href="<?= $jobs_zoom_video[INHNI_JOBS_ZOOM_VIDEO_URL];?>" title="<?= $jobs_zoom_video[INHNI_JOBS_ZOOM_VIDEO_TITLE_TAG];?>">
                <div class="image video">
                    <div class="lazy_image"
                         style="background-image: url('<?php echo ASSETS_PATH.'images/'?>placeholder.gif');"
                         data-lazy-src="<?= $jobs_zoom_image[INHNI_JOBS_ZOOM_IMAGE_URL]['url'];?>">
                        <noscript>
                            <img src="<?= $jobs_zoom_image[INHNI_JOBS_ZOOM_IMAGE_URL]['url'];?>" alt="<?= $jobs_zoom_image[INHNI_JOBS_ZOOM_IMAGE_ALT_TAG];?>"/>
                        </noscript>
                    </div>
                </div>
                <h4 class="title-5"><?= $jobs_zoom_title;?></h4>
                <p><?= $jobs_zoom_content;?></p>
            </a>
            <?php endwhile;?>
        </div>
        <a class="btn" href="#" title="<?php _e('Voir tous les métiers',DOMAIN)?>">
            <span class="txt"><?php _e('Tous les métiers',DOMAIN);?></span>
        </a>
    </div>
</section>
<?php endif;?>
