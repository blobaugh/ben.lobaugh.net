<?php

require_once( $theme_dir . '/options-framework-plugin/options-framework.php' );


/*
 * NOTES:
 * 
 * To setup your information please visit your user profile page
 */

require_once( $theme_dir . '/lib/card_setup.php' );


add_action( 'wp_enqueue_scripts', 'front_page_scripts' );
function front_page_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'jquery-cycle', get_bloginfo( 'template_directory' ) . '/js/jquery.cycle.all.js' );
    wp_enqueue_script('tipTip', get_bloginfo('template_directory') . '/js/jquery.tipTip.minified.js');

    wp_enqueue_script('front-page', get_bloginfo('template_directory') . '/js/front-page.js');
}