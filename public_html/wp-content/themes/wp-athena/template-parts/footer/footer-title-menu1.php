<?php if(have_rows(INHNI_HOME_MENU_1,'option')):?>
    <ul class="footer-top-right-top-left">
        <?php while(have_rows(INHNI_HOME_MENU_1,'option')):the_row();?>
            <li class="<?= get_sub_field('current_class')[0];?>">
                <a href="<?= get_sub_field('_link');?>"><?= get_sub_field('_infomation_field');?></a>
            </li>
        <?php endwhile;?>
    </ul>
<?php endif;?>