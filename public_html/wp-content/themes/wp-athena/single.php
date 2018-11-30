
<?php get_header(); ?>
<!--Start Pull HTML here-->


<main id="main-content">
<?php if(get_post_type($post->ID) ==='alternating_offers'):?>
    <?php get_template_part( 'template-parts/blocks/breadcrumb' ) ?>
    <?php get_template_part( 'template-parts/post/Alt_offers/maincontent' ) ?>
    <?php get_template_part( 'template-parts/post/Alt_offers/job_offers' ) ?>
<?php elseif(get_post_type($post->ID) ==='post'): ?>

<?php endif;?>
</main>

<!--END  Pull HTML here-->
<?php get_footer(); ?>

