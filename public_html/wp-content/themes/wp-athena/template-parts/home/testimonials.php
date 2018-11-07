
<?php while(have_rows(INHNI_TESTIMONIALS_BLOC)):the_row();?>
    <?php
        //Testimonials Images
        $testimonials_image=get_sub_field(TESTIMONIALS_BLOC_DECORATION_IMAGES);
        $testimonials_image_url=$testimonials_image["_testimonials_bloc_decoration_images_url"];
        $testimonials_image_alt=$testimonials_image[TESTIMONIALS_BLOC_DECORATION_IMAGES_ALT_TAG_VALUE];
    ?>
<div class="testimonials-bloc">
    <div class="decoration">
        <?php get_template_part('template-parts/components/home/logos') ;?>
        <div class="lazy_responsive_image"
             style="background-image: url('<?php echo ASSETS_PATH.'images/'?>placeholder.gif');"
             data-lazy-src-0-1200="#"
             data-lazy-src-1201="<?= $testimonials_image_url;?>">
            <noscript>s
                <img src="<?= $testimonials_image_url;?>" alt="<?=$testimonials_image_alt;?>"/>
            </noscript>
        </div>
    </div>
    <div class="content">
        <div class="wrapper">
            <div class="testimonials">
                    <?php get_template_part('template-parts/components/home/testimonial');?>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>

