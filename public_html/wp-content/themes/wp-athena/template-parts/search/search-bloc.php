
<?php global $wp_query; ?>
<?php $search_str = $wp_query->query;?>

<div class="search-bloc">
    <div class="content">
        <div class="wrapper">
            <form role="search" method="POST" class="search-form" accept-charset="utf-8" action="<?= esc_url( home_url( '/' ) ) ?>" >
                <input type="text" placeholder="<?= $search_str['s'];?>" name="s">
                <button type="submit"></button>
            </form>
        </div>
    </div>
</div>
