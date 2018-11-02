
<section class="jobs-zoom-bloc">
    <div class="wrapper">
        <h3 class="title-1 blue-polygon">
            <span><?php _e('Zooms métiers','inhni_theme');?></span>
        </h3>
        <div class="zooms">
             <?php while(have_rows('inhni_jobs_zoom')):the_row();?>
            <?php
                $jobs_zoom_video=get_sub_field('inhni_jobs_zoom_video');
                $jobs_zoom_image=get_sub_field('inhni_jobs_zoom_image');
                $jobs_zoom_title=get_sub_field('inhni_jobs_zoom_title');
                $jobs_zoom_content=get_sub_field('inhni_jobs_zoom_content');
                $jobs_zoom_button=get_sub_field('inhni_jobs_zoom_button');

                 //var_dump($jobs_zoom_image['inhni_jobs_zoom_image_url']['ur']);
            ?>

            <a data-fancybox class="zoom" href="<?= $jobs_zoom_video['inhni_jobs_zoom_video_url'];?>" title="<?= $jobs_zoom_video['inhni_jobs_zoom_video_title_tag'];?>">
                <!--{# When the "video" class is present, an icon will be added in css #}-->
                <div class="image video">
                    <div class="lazy_image"
                         style="background-image: url('<?php echo ASSETS_PATH.'images/'?>placeholder.gif');"
                         data-lazy-src="<?= $jobs_zoom_image['inhni_jobs_zoom_image_url']['url'];?>">
                        <noscript>
                            <img src="<?= $jobs_zoom_image['inhni_jobs_zoom_image_url']['url'];?>" alt="<?= $jobs_zoom_image['inhni_jobs_zoom_image_alt_tag_'];?>"/>
                        </noscript>
                    </div>
                </div>
                <h4 class="title-5"><?= $jobs_zoom_title;?></h4>
                <p><?= $jobs_zoom_content;?></p>
            </a>
            <?php endwhile;?>
        </div>
        <a class="btn" href="#" title="Voir tous les métiers">
            <span class="txt">Tous les métiers</span>
        </a>
    </div>
</section>

<!---->
<!--<section class="jobs-zoom-bloc">-->
<!--    <div class="wrapper">-->
<!--        <h3 class="title-1 blue-polygon">-->
<!--            <span>Zooms métiers</span>-->
<!--        </h3>-->
<!--        <div class="zooms">-->
<!--            --><?php //for($i=0;$i<=5;$i++):?>
<!---->
<!--                <a data-fancybox class="zoom" href="https://www.youtube.com/embed/nFUTFgMGyoU" title="En savoir plus sur le métier">-->
<!--                    <!--{# When the "video" class is present, an icon will be added in css #}-->-->
<!--                    <div class="image video">-->
<!--                        <div class="lazy_image"-->
<!--                             style="background-image: url('--><?php //echo ASSETS_PATH.'images/'?>/*placeholder.gif');"*/
/*                             data-lazy-src="*/<?php //echo ASSETS_PATH.'images/'?><!--zoom.jpg">-->
<!--                            <noscript>-->
<!--                                <img src="--><?php //echo ASSETS_PATH.'images/'?><!--zoom.jpg" alt="Agent qualifié en propreté hospitalière"/>-->
<!--                            </noscript>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <h4 class="title-5">Agent qualifié en propreté hospitalière</h4>-->
<!--                    <p>-->
<!--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus elit vitae nisl scelerisque, nec euismod nunc-->
<!--                        egestas. Duis sodales eros nulla, quis cursus mauris lobortis ut. Etiam posuere tortor id justo convallis-->
<!--                        consectetur. Duis mattis luctus sem in pellentesque. Mauris non laoreet magna, in ornare elit. Sed vel auctor mi.-->
<!--                        Fusce justo ipsum, mollis a vestibulum in, lobortis quis nunc. Integer imperdiet at erat vitae dignissim. Praesent-->
<!--                        fermentum ex sed nisi euismod, maximus aliquet ante elementum.-->
<!--                    </p>-->
<!--                </a>-->
<!--            --><?php //endfor;?>
<!--        </div>-->
<!--        <a class="btn" href="#" title="Voir tous les métiers">-->
<!--            <span class="txt">Tous les métiers</span>-->
<!--        </a>-->
<!--    </div>-->
<!--</section>-->