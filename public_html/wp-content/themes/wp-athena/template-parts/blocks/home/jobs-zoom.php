
<?php if(have_rows(INHNI_JOBS_ZOOM)):?>
    <section class="jobs-zoom-bloc">
        <div class="wrapper">
            <h3 class="title-1 blue-polygon">
                <span><?php _e('Zooms métiers',DOMAIN);?></span>
            </h3>
            <div class="zooms">
            <?php while(have_rows(INHNI_JOBS_ZOOM)):the_row();?>
                <?php
                    $job_zoom_items=get_sub_field('job_zoom_items');
                    $list_all_button=get_sub_field('list_all_button');
                ?>
                <?php foreach($job_zoom_items as $key=>$items): ?>
                <a data-fancybox class="zoom" href="<?= $items['video_url'];?>" title="<?php _e('En savoir plus sur le métier',DOMAIN);?>">
                    <div class="image video">
                        <div class="lazy_image"
                             style="background-image: url('<?php echo ASSETS_PATH.'images/'?>placeholder.gif');"
                             data-lazy-src="<?= $items['image'];?>">
                            <noscript>
                                <img src="<?= $items['image'];?>" alt="<?= _e('Agent qualifié en propreté hospitalière',DOMAIN);?>"/>
                            </noscript>
                        </div>
                    </div>
                    <h4 class="title-5"><?= $items['title'];?></h4>
                    <p><?= esc_attr($items['excerpt']);?></p>
                </a>
                <?php endforeach;?>
            </div>
            <a class="btn" href="<?= $list_all_button;?>" title="<?php _e('Voir tous les métiers',DOMAIN)?>">
                <span class="txt"><?php _e('Tous les métiers',DOMAIN);?></span>
            </a>
            <?php endwhile;?>
        </div>
    </section>
<?php endif;?>
