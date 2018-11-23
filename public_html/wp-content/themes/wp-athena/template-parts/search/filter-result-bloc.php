

    <div class="filter-result-bloc">
        <div class="content">
            <div class="wrapper">
                <div class="formation-result formation-result-2">
                    <div class="list-result">
                        <!--START Search Items Section-->
                        <?php if(have_posts()):?>
                            <?php get_template_part( 'template-parts/blocks/search/search_items' ) ?>
                        <?php else: ?>
                            <h3 style="font-size: x-large; text-align: center; margin-top: 3em;margin-bottom: 3em;"><?php _e('Not Found Results To Request !',DOMAIN);?></h3>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>



