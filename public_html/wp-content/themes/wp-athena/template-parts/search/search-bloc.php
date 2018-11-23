

<?php global $query_string; ?>

<div class="search-bloc">
    <div class="content">
        <div class="wrapper">
            <form role="search" method="POST" class="search-form" action="<?= esc_url( home_url( '/' ) ) ?>" >
                <input type="text" placeholder="<?= str_replace(['s=','%20'],['',' '],$query_string);?>" name="s">
                <button type="submit"></button>
            </form>
        </div>
    </div>
</div>
