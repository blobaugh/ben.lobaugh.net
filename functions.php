<?php

require_once( 'options-framework-plugin/options-framework.php' );
	wp_enqueue_script('jquery');
 	wp_enqueue_script( 'jquery-cycle', get_bloginfo( 'template_directory' ) . '/js/jquery.cycle.all.js' );
        //wp_enqueue_script('tipTip', get_bloginfo('template_directory') . '/js/jquery.tipTip.minified.js');
        
        wp_enqueue_script('front-page', get_bloginfo('template_directory') . '/js/front-page.js');

/*
 * NOTES:
 * 
 * To setup your information please visit your user profile page
 */

$path_to_theme = trailingslashit( dirname( __FILE__) );

require_once( $path_to_theme . 'lib/card_setup.php' );
