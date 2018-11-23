
<?php
/**
 * Template for displaying search forms in Wp_Athena
 *Created By Dang Sy Hao
 */
?>

<form  role="search" method="get" class="search-form" action="<?= esc_url( home_url( '/' ) ) ?>">
    <div class="search-formation-input-container">
        <input type="text"  placeholder="<?php _e('Cycles métier, chantier propreté, code stage...',DOMAIN);?>" name="s">
        <button type="submit"></button>
    </div>
</form>

