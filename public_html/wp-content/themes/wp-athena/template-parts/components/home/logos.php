<?php
//    //Testimonials Logo
//    $testimonials_logo=get_sub_field(TESTIMONIALS_BLOC_DECORATION_LOGO);
//    //Testimonials Logo2
//    $testimonials_logo1_url=$testimonials_logo[TESTIMONIALS_BLOC_DECORATION_LOGO_1][TESTIMONIALS_BLOC_DECORATION_LOGO_URL];
//    $testimonials_logo1_alt=$testimonials_logo[TESTIMONIALS_BLOC_DECORATION_LOGO_1][TESTIMONIALS_BLOC_DECORATION_LOGO_ALT_TAG];
//    $testimonials_logo1_title=$testimonials_logo[TESTIMONIALS_BLOC_DECORATION_LOGO_1][TESTIMONIALS_BLOC_DECORATION_LOGO_VALUE_TAG_TITLE];
//    $testimonials_logo1_link=$testimonials_logo[TESTIMONIALS_BLOC_DECORATION_LOGO_1][TESTIMONIALS_BLOC_DECORATION_LOGO1_LINK];
//    //Testimonials Logo2
//    $testimonials_logo2_url=$testimonials_logo[TESTIMONIALS_BLOC_DECORATION_LOGO_2][TESTIMONIALS_BLOC_DECORATION_LOGO_URL];
//    $testimonials_logo2_title=$testimonials_logo[TESTIMONIALS_BLOC_DECORATION_LOGO_2][TESTIMONIALS_BLOC_DECORATION_LOGO_VALUE_TAG_TITLE];
//    $testimonials_logo1_alt=$testimonials_logo[TESTIMONIALS_BLOC_DECORATION_LOGO_2][TESTIMONIALS_BLOC_DECORATION_LOGO_ALT_TAG];
//    $testimonials_logo2_link=$testimonials_logo[TESTIMONIALS_BLOC_DECORATION_LOGO_2][TESTIMONIALS_BLOC_DECORATION_LOGO_2_LINK];
?>


<?php
    $inhni_logo_url=get_field(AT_LOGO, 'option');
    $inhni_second_logo=get_field(AT_SECOND_LOGO,'option');
?>

<div class="logos">
    <a href="<?= get_bloginfo('url')?>" class="logo">
        <img src="<?= $inhni_logo_url; ?>" alt="<?= get_bloginfo('name')?>"/>
    </a>

    <a href="<?= $inhni_second_logo['link']; ?>" title="<?= $inhni_second_logo['title']; ?>" target="_blank"
       class="proprete">
        <img src="<?= $inhni_second_logo['image']; ?>" alt="<?= $inhni_second_logo['alt']; ?>"/>
    </a>

</div>