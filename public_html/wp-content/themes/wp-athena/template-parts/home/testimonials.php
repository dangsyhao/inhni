<div class="testimonials-bloc">
    <div class="decoration">
        <?php get_template_part('template-parts/components/home/logos') ;?>
        <div class="lazy_responsive_image"
             style="background-image: url('<?php echo ASSETS_PATH.'images/'?>placeholder.gif');"
             data-lazy-src-0-1200="" {# leave this empty #}
             data-lazy-src-1201="<?php echo ASSETS_PATH.'images/'?>testimonial-decoration.jpg">
            <noscript>
                <img src="<?php echo ASSETS_PATH.'images/'?>testimonial-decoration.jpg" alt="{{ project_name }}"/>
            </noscript>
        </div>
    </div>
    <div class="content">
        <div class="wrapper">
            <div class="testimonials">
                 <?php for($i=0;$i<=4;$i++):?>
                    <?php get_template_part('template-parts/components/home/testimonial');?>
                <?php endfor;?>
            </div>
        </div>
    </div>
</div>