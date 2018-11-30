<?php
/**
 * Template Name: Archive Alternating Offers
 */
get_header();
?>
<?php echo "This is Template Archive Page !"?>
    <!--Start Pull HTML here-->
<?php get_template_part( 'template-parts/blocks/breadcrumb' ) ?>
<?php get_template_part( 'template-parts/post/Alt_offers/maincontent' ) ?>
<?php get_template_part( 'template-parts/post/Alt_offers/job_offers' ) ?>
    <!--END  Pull HTML here-->
<?php get_footer(); ?>