
<section class="inhni-numbers-bloc">
    <div class="wrapper">
        <?php while(have_rows('inhni_numbers_bloc')):the_row();?>
            <?php   $number_object=get_sub_field('inhni_number_items');
                    $number_title=get_sub_field('inhni_number_title');
                    $number_desc_title=get_sub_field('inhni_number_description_title');
            ?>
                    <h2 class="title-1"><?= $number_title;?></h2>
                    <p class="desc"><?= $number_desc_title;?></p>

            <div class="numbers">
                        <?php foreach($number_object as $number):?>
                        <div class="<?= $number['inhni_number_items_class_type'];?>">
                            <span class="digit" data-digit="<?= $number['inhni_number_items_data-digit'];?>">
                                <span class="value"><?= $number['inhni_number_items_value'];?></span>
                            </span>
                            <?php if($number['inhni_number_items_class_type']=='number circle'):?>
                                <span class="percent">%</span>
                            <?php else: ?>
                                <span class="label"><?= $number['inhni_number_items_label'];?></span>
                            <?php endif;?>

                        </div>
                        <?php endforeach;?>
            </div>
        <?php endwhile;?>
    </div>
</section>

<!--<section class="inhni-numbers-bloc">-->
<!--    <div class="wrapper">-->
<!--        <h2 class="title-1">Accédez à 105 formations continues</h2>-->
<!--        <p class="desc">En quelques chiffres</p>-->
<!--        <div class="numbers">-->
<!--            <div class="number">-->
<!--                <span class="digit" data-digit="7">-->
<!--                    <span class="value">0</span>-->
<!--                </span>-->
<!--                <span class="label">Centres de formation d’apprentis du CAP au Master</span>-->
<!--            </div>-->
<!--            <div class="number">-->
<!--                <span class="digit" data-digit="40">-->
<!--                    <span class="value">0</span>-->
<!--                </span>-->
<!--                <span class="label">Sites de formation et de conseil en France</span>-->
<!--            </div>-->
<!--            <div class="number circle">-->
<!--                <span class="digit" data-digit="97">-->
<!--                    <span class="value">0</span>-->
<!--                    <span class="percent">%</span>-->
<!--                </span>-->
<!--                <span class="label">De réussite</span>-->
<!--            </div>-->
<!--            <div class="number">-->
<!--                <span class="digit" data-digit="1600">-->
<!--                    <span class="value">0</span>-->
<!--                </span>-->
<!--                <span class="label">Sites de formation et de conseil en France</span>-->
<!--            </div>-->
<!--            <div class="number">-->
<!--                <span class="digit" data-digit="29000">-->
<!--                    <span class="value">0</span>-->
<!--                </span>-->
<!--                <span class="label">Stagiaires</span>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->