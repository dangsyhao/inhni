<ul>
    <?php for ( $i=0; $i<3; $i++ ) : ?>
        <li>
            <a href="http://www.qualipropre.org/" target="_blank" title="Accéder au site de Qualipropre">
                <img class="lazy_image" src="<?= ASSETS_PATH . '/images/' ?>placeholder.gif" alt="Qualipropre"
                     data-lazy-src="<?= ASSETS_PATH . '/images/' ?>partner.png"/>
            </a>
        </li>
    <?php endfor; ?>
</ul>