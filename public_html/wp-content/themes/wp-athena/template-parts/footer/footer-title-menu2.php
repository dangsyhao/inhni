
<?php if(have_rows(INHNI_HOME_MENU_2,'option')):?>
    <ul class="footer-top-right-top-left">
        <?php while(have_rows(INHNI_HOME_MENU_2,'option')):the_row();?>
            <li class="<?= get_sub_field('current_class')[0];?>">
                <a href="<?= get_sub_field('link');?>"><?= get_sub_field('infomation_field');?></a>
            </li>
        <?php endwhile;?>
    </ul>
<?php endif;?>