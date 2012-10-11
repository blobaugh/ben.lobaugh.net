<?php


add_filter( 'user_contactmethods', 'blobaugh_card_user_profile_setup' );
function blobaugh_card_user_profile_setup( $user_contactmethods ) {
    //echo '<pre>'; print_r($user_contactmethods); echo '</pre>';
    
    // Remove unused contact methods
    unset( $user_contactmethods['aim'] );
    unset( $user_contactmethods['yim'] );
    unset( $user_contactmethods['jabber'] );
    
    // Add contact methods
    $user_contactmethods['title'] = 'Title';
    $user_contactmethods['phone'] = 'Phone Number';
    $user_contactmethods['twitter'] = 'Twitter handle (no @)';
    $user_contactmethods['facebook'] = 'Facebook';
    $user_contactmethods['linkedin'] = 'LinkedIn';
    $user_contactmethods['flickr'] = 'Flickr';
    $user_contactmethods['youtube'] = 'Youtube';
    $user_contactmethods['wordpress'] = 'WordPress.org';
    $user_contactmethods['github'] = 'Github';
    
    return $user_contactmethods;
}

/**
 * Returns an array of user information to display in the card
 * 
 * @return Mixed (WP_User|Array) 
 */
function blobaugh_get_user_for_card() {
    $user_id = of_get_option( 'user-to-display' );
    return get_userdata( $user_id );
}

function blobaugh_maybe_send_contact() {
    if( !isset( $_POST['blobaugh_card_contact'] ) ) 
           return; // Just kidding, nothing to do
    
    if( '' != $_POST['h1'] && '42' != $_POST['h2'] )
        return; // Honeypot failed, let's bail
    
    $user = blobaugh_get_user_for_card();
    
    $name = esc_textarea( $_POST['name'] );
    $email = esc_textarea( $_POST['email'] );
    $subject = esc_textarea( $_POST['subject'] );
    $body = esc_textarea( $_POST['body'] );
    
    $headers = "From: $name <$email>\r\n";
    
    $result = wp_mail( $user->user_email, "Site Contact: $subject", $body, $headers );
    wp_redirect( home_url("?contact=sent") ); die();
}
add_action( 'init', 'blobaugh_maybe_send_contact' );