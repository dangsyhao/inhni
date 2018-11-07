
<?php $testimonials_test=get_sub_field(TESTIMONIALS_BLOC_TESTIMONIALS);?>
    <?php
        foreach($testimonials_test as $test):
            $testimonials_content=$test[TESTIMONIALS_BLOC_TESTIMONIALS_CONTENT];
            $testimonials_someonce=$test[TESTIMONIALS_BLOC_TESTIMONIALS_SOMEONE];
    ?>
        <div class="testimonial">
            <p class="txt"><?= $testimonials_content; ?></p>
            <p class="someone"><?= $testimonials_someonce; ?></p>
        </div>

    <?php endforeach;?>