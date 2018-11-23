
<div class="breadcrumb-bloc">
    <div class="content">
        <div class="wrapper">
            <?php if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb('<p id="breadcrumbs">','</p>',true);
            } ?>


            <p id="breadcrumbs">
                <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="http://my-website-url.com/" itemprop="url" title="Go to homepage">
                            <span itemprop="title">Accueil</span>
                        </a>
                    <span itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a href="http://my-website-url.com/whatever-archive-category-page/" itemprop="url">
                                <span itemprop="title">Formations</span>
                            </a>
                        <span itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                                <a href="http://my-website-url.com/whatever-archive-category-page/subpage" itemprop="url">
                                    <span itemprop="title">Formations continue</span>
                                </a>
                        </span>
                    </span>
                </span>
            </p>

        </div>
    </div>
</div>


<div class="wrapper">
    <p id="breadcrumbs">
        <span>
            <span>
                <a href="http://inhni.me/">Accueil</a> → <span class="breadcrumb_last">Formations "Phung Xuan Nha"</span>
            </span>
        </span>
    </p>
</div>

