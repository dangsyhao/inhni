<div class="logos">
    <a href="<?= site_url() ?>" class="logo">
        <img src="<?= get_field(AT_LOGO, 'option') ?>" alt="<?= get_bloginfo('name') ?> - logo"/>
    </a>
    <?php 
    	if ( have_rows(AT_SECOND_LOGO, 'option') ) :the_row() ;
    		$secondLogo = get_field(AT_SECOND_LOGO, 'option');
    ?>
	    <a href="<?= $secondLogo['link'] ?>" title="<?= get_sub_field('title');?>" target="_blank"
	       class="proprete">
	        <img src="<?= $secondLogo['image'] ?>" alt="<?= get_sub_field('alt');?>"/>
	    </a>
	<?php endif; ?>
</div>