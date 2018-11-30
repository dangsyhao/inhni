
<?php if(!is_front_page()):?>
    <div class="breadcrumb-bloc">
        <div class="content">
            <div class="wrapper">
                <p id="breadcrumbs">

                    <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                      <a href="<?= get_bloginfo('url');?>" itemprop="url" title="<?php _e('Go to homepage',DOMAIN); ?>">
                          <span itemprop="title"><?php _e('Accueil',DOMAIN);?></span>
                      </a>
                        <?php if(get_the_category() !==''):?>
                            <span itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">

                                <a href="<?php get_category_link($post->ID); ?> " itemprop="url">
                                    <span itemprop="title"><?php the_category();?></span>
                                </a>
                                <?php if(is_single()):?>
                                    <span itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                                            <a href="<?php the_permalink();?>" itemprop="url">
                                                <span itemprop="title"><?php the_title()?></span>
                                            </a>
                                      </span>
                                <?php endif;?>
                            </span>
                        <?php endif;?>
                    </span>

                </p>
            </div>
        </div>
    </div>
<?php endif;?>