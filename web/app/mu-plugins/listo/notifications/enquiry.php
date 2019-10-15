<?php
//https://wordpress.stackexchange.com/questions/100644/how-to-auto-send-email-when-publishing-a-custom-post-type

add_action( 'transition_post_status', 'enquiry_email_confirmation', 10, 3 );

// function send_mails_on_publish( $new_status, $old_status, $post )
// {
//   error_log( $post->post_type );
//     if ( 'publish' !== $new_status or 'publish' === $old_status
//         or 'my_custom_type' !== get_post_type( $post ) )
//         return;
//
//     $subscribers = get_users( array ( 'role' => 'subscriber' ) );
//     $emails      = array ();
//
//     foreach ( $subscribers as $subscriber )
//         $emails[] = $subscriber->user_email;
//
//     $body = sprintf( 'Hey there is a new entry!
//         See <%s>',
//         get_permalink( $post )
//     );
//
//     wp_mail( $emails, 'New entry!', $body );
// }

function enquiry_email_confirmation( $new_status, $old_status, $post ){
  if ($post->post_type === 'enquiry') {
    if ($new_status === 'publish') {
      error_log('je suis rentrée');
      wp_mail( 'gab.zambrano@gmail.com', 'New entry!', 'je suis un nouveau enquiry' );
    }
  }
}
