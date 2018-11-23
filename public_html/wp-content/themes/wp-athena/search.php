
<?php get_header();?>
<!--Start Pull HTML here-->

<main id="main-content">
    <?php get_template_part('template-parts/search/breadcrumb-bloc');?>
    <?php get_template_part('template-parts/search/search-bloc');?>
    <?php get_template_part('template-parts/search/filter-result-bloc');?>
    <?php get_template_part( 'template-parts/blocks/home/jobs-zoom' ); ?>
</main>

<!--END  Pull HTML here-->
<?php get_footer(); ?>
