<!DOCTYPE html>
<html>
<head profile="http://gmpg.org/xfn/11">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/tipTip.css" />
    <!-- bloginfo( 'stylesheet_directory'); -->
    
    <script type="text/javascript">
        window.onload = function() {
            
            <?php
                if( isset( $_GET['contact'] ) && 'sent' == $_GET['contact'] ) {
                  
                    echo "alert('Message Sent. I will respond as quickly as possible. ');";
                }
            ?>
        }


//

    </script>
        
      <?php  wp_head(); ?>