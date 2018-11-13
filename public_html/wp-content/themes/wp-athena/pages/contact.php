<?php
/**
 * Template Name: Contact Page
 */
get_header();
?>
    <main id="main-content">
    <!--Start Pull HTML here-->
<?php get_template_part( 'template-parts/blocks/contact/contact_js' ) ;?>
<?php get_template_part( 'template-parts/blocks/contact/bloc','breadcrumb' ) ;?>
<?php get_template_part( 'template-parts/blocks/contact/bloc','contact' ) ;?>
    </main>
    <!--END  Pull HTML here-->
<?php get_footer(); ?>