<?php
//tutorial: https://jeroensormani.com/block-dashboard-access-non-admins/

// For implementation instructions see: https://aceplugins.com/how-to-add-a-code-snippet/
/**
 * Redirect users after login
 */
function listo_login_redirect( $url ) {
    return home_url( '' );
}
add_filter( 'login_redirect', 'listo_login_redirect' );


// function login_redirect( $redirect_to, $request, $user ){
//     $userUrl = get_author_posts_url( get_the_author_meta( 'ID' ), $user->user_nicename );
//     wp_redirect( $userUrl );
//     exit;
// }
// add_filter( 'login_redirect', 'login_redirect', 10, 3 );
//
//

// For implementation instructions see: https://aceplugins.com/how-to-add-a-code-snippet/
/**
 * Block wp-admin access for non-admins
 */
function block_listo_users_wp_admin() {
	if ( is_admin() && ! current_user_can( 'administrator' ) && ! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
		wp_safe_redirect( home_url() );
		exit;
	}
}
add_action( 'admin_init', 'block_listo_users_wp_admin' );


// tutorial: http://wp-api.org/node-wpapi/authentication/
function cookie_authentication() {
    wp_localize_script( 'listo_form_enquiry', 'WP_API_Settings', array(
        'root' => esc_url_raw( rest_url() ),
        'nonce' => wp_create_nonce( 'wp_rest' )
    ) );
}
add_action( 'wp_enqueue_scripts', 'cookie_authentication' );


// For implementation instructions see: https://aceplugins.com/how-to-add-a-code-snippet/
/**
 * Redirect users after logout
 */
function listo_logout_redirect( $url ) {
    return home_url( '' );
}

add_filter( 'logout_redirect', 'listo_logout_redirect' );
