<?php
/**
 * Allow SVG through WordPress Media Uploader
 */
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/**
 * Change the Login Logo
 */
function athena_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?= get_field(AT_LOGO, 'option'); ?>);
            height:85px;
            width:100%;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'athena_login_logo' );

function athena_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'athena_login_logo_url' );

function athena_login_logo_url_title() {
    return get_bloginfo( 'name' );
}
add_filter( 'login_headertitle', 'athena_login_logo_url_title' );
