<?php
/**
 * Template Name: Page Home
 */
get_header();
?>
<!--Start Pull HTML here-->
<?php get_template_part( 'template-parts/blocks/home/search-formation' ) ?>
<?php get_template_part( 'template-parts/blocks/home/inhni-numbers') ?>
<?php get_template_part( 'template-parts/blocks/home/featured-news' ) ?>
<?php get_template_part( 'template-parts/blocks/home/jobs-offers' ) ?>
<?php get_template_part( 'template-parts/blocks/home/jobs-zoom' ) ?>
<?php get_template_part( 'template-parts/blocks/home/testimonials' ) ?>
<?php get_template_part( 'template-parts/blocks/home/partners' ) ?>
<!--END  Pull HTML here-->
<?php get_footer(); ?>