<?php

function wlctest_assets() {
    wp_enqueue_style('wlctest-stylesheet', get_template_directory_uri() . '/dist/assets/css/bundle.css', array(), '1.0.0', 'all' );

    wp_enqueue_script('wlctest-scripts', get_template_directory_uri() . '/dist/assets/js/bundle.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'wlctest_assets');


function wlctest_admin_assets() {
    wp_enqueue_style('wlctest-admin-stylesheet', get_template_directory_uri() . '/dist/assets/css/admin.css', array(), '1.0.0', 'all' );

    wp_enqueue_script('wlctest-admin-scripts', get_template_directory_uri() . '/dist/assets/js/admin.js', array(), '1.0.0', true);
}
add_action('admin_enqueue_scripts', 'wlctest_admin_assets');


add_action( 'wp_enqueue_scripts', 'custom_load_font_awesome' );
/**
 * Enqueue Font Awesome.
 */
function custom_load_font_awesome() {

    wp_enqueue_script( 'font-awesome', '//use.fontawesome.com/releases/v5.2.0/js/all.js', array(), null );

}

add_filter( 'script_loader_tag', 'add_defer_attribute', 10, 2 );
/**
 * Filter the HTML script tag of `font-awesome` script to add `defer` attribute.
 *
 * @param string $tag    The <script> tag for the enqueued script.
 * @param string $handle The script's registered handle.
 *
 * @return   Filtered HTML script tag.
 */
function add_defer_attribute( $tag, $handle ) {

    if ( 'font-awesome' === $handle ) {
        $tag = str_replace( ' src', ' defer src', $tag );
    }

    return $tag;

}