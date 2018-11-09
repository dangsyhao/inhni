
<?php if(have_rows(INHNI_HOME_MENU_2,'option')):?>
    <ul class="footer-top-right-top-middle">
        <?php while(have_rows(INHNI_HOME_MENU_2,'option')):the_row();?>
            <?php
            $menu2_info=get_sub_field('infomation_field');
            $menu2_link=get_sub_field('link');
            if($menu2_info !=='FAQ'):
            ?>
                <li>
                    <a href="<?= $menu2_link;?>"><?= $menu2_info;?></a>
                </li>
            <?php else:?>
                <li class="current">
                    <a href="<?= $menu2_link;?>"><?= $menu2_info;?></a>
                </li>
            <?php endif;?>
        <?php endwhile;?>

    </ul>
<?php endif;?>






<!--<ul class="footer-top-right-top-middle">-->
<!--    <li>-->
<!--        <a href="#">INHNI recrute</a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a href="#">Qui sommes-nous ?</a>-->
<!--    </li>-->
<!--    <li class="current">-->
<!--        <a href="#">FAQ</a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a href="#">CGU</a>-->
<!--    </li>-->
<!--</ul>-->