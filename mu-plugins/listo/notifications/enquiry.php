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
    //if ($new_status === 'publish' && 'publish' !== $old_status) {
    if ($new_status === 'publish') {
      error_log('je suis rentrée');

      // email for the client
      $current_user = wp_get_current_user();
      $user_display_name = $current_user->display_name;
      $user_email = $current_user->user_email;
      $user_firstname = $current_user->user_firstname;
      $user_lastname = $current_user->user_lastname;

      //error_log($user_display_name);
      //error_log($user_email);

      $message = "Hi " . $user_display_name . "," . PHP_EOL;
      $message .= "Thank you for requesting a travel offer with List World! " . PHP_EOL;
      $message .= "We have very well received your request, and we have send it to our travel agencies partners. If you want to see review your request please visit " . PHP_EOL;
      $message .= get_permalink( $post->ID );

      //error_log(get_permalink( $post->ID ));
      //error_log($message);

      wp_mail( $user_email, 'Travel enquiry', $message );
    }
  }
}