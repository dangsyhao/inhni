<?php
    //Testimonials Logo
    $testimonials_logo=get_sub_field(TESTIMONIALS_BLOC_DECORATION_LOGO);
    //Testimonials Logo2
    $testimonials_logo1_url=$testimonials_logo[TESTIMONIALS_BLOC_DECORATION_LOGO_1][TESTIMONIALS_BLOC_DECORATION_LOGO_URL];
    $testimonials_logo1_alt=$testimonials_logo[TESTIMONIALS_BLOC_DECORATION_LOGO_1][TESTIMONIALS_BLOC_DECORATION_LOGO_ALT_TAG];
    $testimonials_logo1_title=$testimonials_logo[TESTIMONIALS_BLOC_DECORATION_LOGO_1][TESTIMONIALS_BLOC_DECORATION_LOGO_VALUE_TAG_TITLE];
    $testimonials_logo1_link=$testimonials_logo[TESTIMONIALS_BLOC_DECORATION_LOGO_1][TESTIMONIALS_BLOC_DECORATION_LOGO1_LINK];
    //Testimonials Logo2
    $testimonials_logo2_url=$testimonials_logo[TESTIMONIALS_BLOC_DECORATION_LOGO_2][TESTIMONIALS_BLOC_DECORATION_LOGO_URL];
    $testimonials_logo2_title=$testimonials_logo[TESTIMONIALS_BLOC_DECORATION_LOGO_2][TESTIMONIALS_BLOC_DECORATION_LOGO_VALUE_TAG_TITLE];
    $testimonials_logo1_alt=$testimonials_logo[TESTIMONIALS_BLOC_DECORATION_LOGO_2][TESTIMONIALS_BLOC_DECORATION_LOGO_ALT_TAG];
    $testimonials_logo2_link=$testimonials_logo[TESTIMONIALS_BLOC_DECORATION_LOGO_2][TESTIMONIALS_BLOC_DECORATION_LOGO_2_LINK];
?>

<div class="logos">
    <a href="<?=$testimonials_logo1_link; ?>" class="logo">
        <img src="<?=$testimonials_logo1_url; ?>" alt="<?=$testimonials_logo1_alt; ?>"/>
    </a>
    <a href="<?=$testimonials_logo2_link; ?>" title="<?=$testimonials_logo2_title; ?>" target="_blank"
       class="proprete">
        <img src="<?=$testimonials_logo2_url; ?>" alt="<?=$testimonials_logo1_alt; ?>"/>
    </a>

</div>