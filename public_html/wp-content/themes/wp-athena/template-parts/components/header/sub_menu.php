
<?php if(have_rows(INHNI_SUB_MENU,'option')):?>
    <nav id="little_menu">
        <ul>
            <?php while(have_rows(INHNI_SUB_MENU,'option')):the_row()?>
            <?php
                $class_flag="current";
                $item_menu_label=get_sub_field('item_menu_label','option');
                $item_menu_link=get_sub_field('item_menu_link','option');
            ?>
            <li class="<?=($item_menu_label=='Catalogue')? $class_flag:''; ?>">
                <a href="<?= $item_menu_link;?>"><?= $item_menu_label;?></a>
            </li>
            <?php endwhile;?>
        </ul>
    </nav>
<?php endif;?>
