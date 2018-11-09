
<?php if(have_rows(INHNI_FOOTER_BIG_MENU,'option')):?>
    <ul>
    <?php while(have_rows(INHNI_FOOTER_BIG_MENU,'option')):the_row();?>
        <?php
        $big_menu_info=get_sub_field('infomation_field');
        $big_menu_link=get_sub_field('link');
        if($big_menu_info !=='Crédits'):
        ?>
        <li>
            <a href="<?= $big_menu_link;?>"><?= $big_menu_info;?></a>
        </li>
    <?php else:?>
        <li class="current">
            <a href="<?= $big_menu_link;?>"><?= $big_menu_info;?></a>
        </li>
    <?php endif;?>
    <?php endwhile;?>
</ul>
<?php endif;?>