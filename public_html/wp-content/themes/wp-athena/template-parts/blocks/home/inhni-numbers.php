
<?php if(have_rows(INHNI_NUMBERS_BLOC)): ?>
    <section class="inhni-numbers-bloc">
        <div class="wrapper">
            <?php while(have_rows(INHNI_NUMBERS_BLOC)):the_row(); ?>
                <?php
                $number_items=get_sub_field('number_items');
                ?>
                <h2 class="title-1"><?= get_sub_field('main_tittle'); ?></h2>
                <p class="desc"><?= get_sub_field('sub_title'); ?></p>
                <div class="numbers">
                    <?php foreach($number_items as $key=>$items):?>
                        <?php if($items['items_class'] =='number circle'):?>
                            <div class="number circle">
                                <canvas width="213" height="213"></canvas>
                                <span class="digit" data-digit="<?= $items['number_value']?>">
                                    <span class="value">0</span>
                                    <span class="percent">%</span>
                                </span>
                                <span class="label"><?= $items['items_label'];?></span>
                            </div>
                        <?php else:?>
                            <div class="number">
                                <span class="digit" data-digit="<?= $items['number_value']?>">
                                    <span class="value">0</span>
                                </span>
                                <span class="label"><?= $items['items_label']?></span>
                            </div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
            <?php endwhile;?>
        </div>
    </section>
<?php endif; ?>
