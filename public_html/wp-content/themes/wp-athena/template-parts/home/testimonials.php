
<?php if(have_rows(INHNI_TESTIMONIALS_BLOC)):?>
    <div class="testimonials-bloc">
    <div class="decoration">
        <?php get_template_part('template-parts/components/home/logos') ;?>
        <div class="lazy_responsive_image"
             style="background-image: url('<?php echo ASSETS_PATH.'images/'?>placeholder.gif');"
             data-lazy-src-0-1200="#"
             data-lazy-src-1201="<?= ASSETS_PATH.'/images/testimonial-decoration.jpg'?>">
            <noscript>s
                <img src="<?= ASSETS_PATH.'/images/testimonial-decoration.jpg'?>" alt="<?= get_bloginfo('name');?>"/>
            </noscript>
        </div>
    </div>
    <?php while(have_rows(INHNI_TESTIMONIALS_BLOC)):the_row();?>
    <div class="content">
        <div class="wrapper">
            <div class="testimonials">
                <?php get_template_part('template-parts/components/home/testimonial');?>
            </div>
        </div>
    </div>
    <?php endwhile; ?>

    </div>
<?php endif;?>