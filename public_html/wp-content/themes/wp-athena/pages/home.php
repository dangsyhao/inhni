<?php
/**
 * Template Name: Page Home
 */
get_header();
?>
<!--Start Pull HTML here-->
<?php get_template_part( 'template-parts/home/search-formation' ) ?>
<?php get_template_part( 'template-parts/home/inhni-numbers') ?>
<?php get_template_part( 'template-parts/home/featured-news' ) ?>
<?php get_template_part( 'template-parts/home/jobs-offers' ) ?>
<?php get_template_part( 'template-parts/home/jobs-zoom' ) ?>
<?php get_template_part( 'template-parts/home/testimonials' ) ?>
<?php get_template_part( 'template-parts/home/partners' ) ?>
<!--END  Pull HTML here-->
<?php get_footer(); ?>