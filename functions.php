<?php

$theme_dir = dirname( __FILE__ );

if( is_front_page() ) {
    echo 'front page';
} 
require_once( 'lib/front-page-functions.php' );


