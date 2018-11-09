<?php if(have_rows(INHNI_HOME_MENU_1,'option')):?>
    <ul class="footer-top-right-top-left">
        <?php while(have_rows(INHNI_HOME_MENU_1,'option')):the_row();?>
        <?php
            $menu1_info=get_sub_field('_infomation_field');
            $menu1_link=get_sub_field('_link');
            if($menu1_info !=='Contactez-nous'):
         ?>
            <li>
                <a href="<?= $menu1_link;?>"><?= $menu1_info;?></a>
            </li>
            <?php else:?>
            <li class="current">
                <a href="<?= $menu1_link;?>"><?= $menu1_info;?></a>
            </li>
            <?php endif;?>
        <?php endwhile;?>
    </ul>
<?php endif;?>