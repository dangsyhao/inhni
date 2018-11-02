<?php get_header(); ?>

<div class="blog-post">

    <?php while(have_posts()):the_post();?>
        <?php //var_dump($post);?>
    <div class="post-items" style="margin-bottom: 5em">
        <div class="entry-title"><span style="font-size: larger; margin-bottom: 2em;"><?= $post->post_title;?></span></div>
        <div class="entry-content"><span><?= $post->post_content;?></span></div>
    </div>
    <?php endwhile;?>
    <hr style="width: 30%; border: #0B1A23 solid 2px;"
</div>

<?php get_footer(); ?>
