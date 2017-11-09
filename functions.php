<?php

/**
 * Overriding the default nonce_life value (86400) in the theme breaks the
 * theme customizer in WordPress 4.8.
 *
 * @ref https://core.trac.wordpress.org/ticket/42477
 */
function nonce_life_override_breaks_theme_customizer_save( $lifespan ) {
  return 3600;
}
add_filter( 'nonce_life', 'nonce_life_override_breaks_theme_customizer_save' );


/**
 * Enqueue parent theme styles.
 */
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
