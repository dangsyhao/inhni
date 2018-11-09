<?php if (have_rows(INHNI_FANPAGE,'option')):?>
    <?php $fanpage=get_field(INHNI_FANPAGE,'option');?>
    <ul>
        <li class="fb">
            <a href="<?= $fanpage['_facebook_fanpage_url'];?>" target="_blank" title="<?php _e('Nous suivre sur Facebook',DOMAIN);?>"></a>
        </li>
        <li class="pinterest">
            <a href="<?= $fanpage['_pinterest_fanpage_url'];?>" target="_blank" title="<?php _e('Nous suivre sur Pinterest',DOMAIN);?>"></a>
        </li>
    </ul>
<?php endif; ?>