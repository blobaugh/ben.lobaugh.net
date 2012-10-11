<!DOCTYPE html>
<html>
<head profile="http://gmpg.org/xfn/11">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <!-- bloginfo( 'stylesheet_directory'); -->
    
    <script type="text/javascript">
        window.onload = function() {
            jQuery(function($) {
				// this adds target blank to all external links
				$('a[href^="http://"], a[href^="https://"]')
				  .attr("target", "_blank");
				
				// cycle slider - 
                $('#content').cycle({
                fx:     'scrollUp', // You can choose any effects that you like, from the Link reference : http://www.malsup.com/jquery/cycle/browser.html
                speed:  'slow',
                timeout: 0,
                pager:  '#nav',
                pagerAnchorBuilder: function(idx, slide) {
                    // return sel string for existing anchor
                    return '#nav li:eq(' + (idx) + ') a';
                        }		

                        });
            });
            
            <?php
                if( isset( $_GET['contact'] ) && 'sent' == $_GET['contact'] ) {
                  
                    echo "alert('Message Sent. I will respond as quickly as possible. ');";
                }
            ?>
        }


//

    </script>
        
      <?php  wp_head(); ?>