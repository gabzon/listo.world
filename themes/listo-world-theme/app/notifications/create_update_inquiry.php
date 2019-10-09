<?php

// https://wordpress.stackexchange.com/questions/152033/how-to-add-an-admin-notice-upon-post-save-update
// possible hooks: transition_post_status, save_post, publish_post
// https://wordpress.stackexchange.com/questions/178183/should-i-use-add-actionpublish-post-or-add-filterpublish-post
//require 'client_data.php';
//require 'notifications.php';

add_action( 'transition_post_status', 'saved_client', 10, 3 );
add_action( 'admin_notices', 'admin_notice_success');

function saved_client ( $new_status, $old_status, $client) {
  if ($client->post_type == "enquiries") {

    $client_id = $client->ID;
    if ($new_status == "publish") {
      wp_mail( 'gab.zambrano@gmail.com', 'YESS', 'inserted' );
      //add_filter( 'redirect_post_location', 'add_notice_query_var' , 10, 2 );
    }
  }
}
