<?php

//https://www.isitwp.com/change-the-author-slug-url-base/
// function cng_author_base() {
//     global $wp_rewrite;
//     $author_slug = 'profile'; // change slug name
//     $wp_rewrite->author_base = $author_slug;
// }
// add_action('init', 'cng_author_base');

function listo_hide_admin_bar( $show ) {
	if ( ! current_user_can( 'administrator' ) ) {
		return false;
	}
	return $show;
}
//add_filter( 'show_admin_bar', 'listo_hide_admin_bar' );
