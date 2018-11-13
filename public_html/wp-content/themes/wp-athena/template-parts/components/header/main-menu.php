
<?php if(have_rows(INHNI_MEGA_MENU,'option')):?>
    <nav id="big_menu">
        <ul>
            <?php while(have_rows(INHNI_MEGA_MENU,'option')):the_row();?>
                <?php
                $parent_menu=get_sub_field('item_menu_parent','option');
                $sub_menu_col1=get_sub_field('item_sub_menu_col_1','option');
                $sub_menu_col2=get_sub_field('item_sub_menu_col_2','option');
                $image_text_content=get_sub_field('image_text_content','option');
                $class_flag="current";
                ?>
            <li class="<?= ($parent_menu['menu_parent_label'] =='Salariés')? $class_flag:''; ?>">
                <a href="<?= $parent_menu['menu_parent_link'];?>"><span><?= $parent_menu['menu_parent_label'];?></span></a>
                <div class="sub_menu">
                    <div class="menu-featured">
                        <span><?= $image_text_content;?></span>
                    </div>
                    <ul>
                        <?php foreach($sub_menu_col1 as $key=>$menu_col1):?>
                        <li>
                            <a href="<?= $menu_col1['link'];?>"><?= $menu_col1['label'];?></a>
                        </li>
                        <?php endforeach;?>
                    </ul>
                    <ul>
                        <?php foreach($sub_menu_col2 as $key=>$menu_col2):?>
                            <li>
                                <a href="<?= $menu_col2['link'];?>"><?= $menu_col2['label'];?></a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </li>
            <?php endwhile; ?>
        </ul>
    </nav>
<?php endif;?>



