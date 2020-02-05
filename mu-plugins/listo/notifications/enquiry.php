<?php
//https://wordpress.stackexchange.com/questions/100644/how-to-auto-send-email-when-publishing-a-custom-post-type

function appbase_connection($query){
  $appbase_key = 'djluYTFUTVZrOmZhZTBhNTI3LWRmNDAtNDI4Zi05MjRkLTVhODJlYjVlODliZA==';
  $curl = curl_init();

  curl_setopt_array ($curl, array(
    CURLOPT_URL => "https://scalr.api.appbase.io/experiensa/_doc/_search",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode(["query" => ["match_all" => new stdClass()]]),
    CURLOPT_POSTFIELDS => json_encode( 
      $query
    ),
    CURLOPT_HTTPHEADER => array(
      "Authorization: Basic {$appbase_key}",
      "Content-Type: application/json"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    echo "cURL Error #:" . $err;
    return $err;
  } else {
    $json = json_decode($response, true);
    $emails = [];
    if (count($json['hits']['hits']) <= 1) {
      error_log('solo hay un elemento'); 
    } else {
      error_log("I'm in many elements");
      foreach($json['hits']['hits'] as $i) {
        $emails[] = $i['_source']['email']; 
      }      
    }
    $email_string = implode(", ", $emails);        
    return $email_string;
  }  
}

function query_builder(){
  $query = array(
      "query" => array( "match" => array( "client_status" => "listo" ))
  );
  
  $result = appbase_connection($query);  
  return $result;
}

add_action( 'transition_post_status', 'enquiry_email_confirmation', 10, 3 );

function enquiry_email_confirmation( $new_status, $old_status, $post ){
  if ($post->post_type === 'enquiry') {
    //if ($new_status === 'publish' && 'publish' !== $old_status) {
    if ($new_status === 'publish') {
      

      // email for the client
      $current_user = wp_get_current_user();
      $user_display_name = $current_user->display_name;
      $user_email = $current_user->user_email;
      $user_firstname = $current_user->user_firstname;
      $user_lastname = $current_user->user_lastname;


      $msg_user = "Hi " . $user_display_name . "," . PHP_EOL;
      $msg_user .= "Thank you for requesting a travel offer with List World! " . PHP_EOL;
      $msg_user .= "We have very well received your request, and we have send it to our travel agencies partners. If you want to see review your request please visit " . PHP_EOL;
      $msg_user .= get_permalink( $post->ID );

      
      //$msg_agency = "Hi " . $user_display_name . "," . PHP_EOL;
      //$msg_agency .= "You have received travel request from " . $user_display_name . " " . PHP_EOL;

      $emails = query_builder();
      // Email for the user
      if( $emails ){
        $to_agencies = wp_mail( 'gab.zambrano@gmail.com', 'Result of Simple Query',  $emails );
        $to_user = wp_mail( $user_email, 'Travel enquiry', $msg_user );
      }
      
      error_log($to_user);
      error_log($to_agencies);
      
    }
  }
}