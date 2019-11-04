<?php

/*
Plugin Name: Listo World
Plugin URI: http://gabzon.github.com/listo.world
Description: A Wordpress Plugin for Listo World using TypeRocket
Version: 1.0
Author: Gabriel Zambrano
Author URI: http://www.zambrano.ch
License: GPL2
*/

require_once dirname(__DIR__) . '/typerocket/init.php';

// Add Taxonomy files
// include 'taxonomy/place-type.php';
// include 'taxonomy/activity.php';
// include 'taxonomy/theme.php';
// include 'taxonomy/country.php';
// include 'taxonomy/style.php';
// include 'taxonomy/year.php';
// include 'post-types/artist.php';
include 'post-types/enquiry.php';
include 'post-types/place.php';


// foreach (glob("api/enquiry/*.php") as $filename) {
//     include $filename;
// }

require 'api/enquiry/meta-fields.php';
require 'notifications/enquiry.php';

//https://www.isitwp.com/change-the-author-slug-url-base/
function cng_author_base() {
    global $wp_rewrite;
    $author_slug = 'profile'; // change slug name
    $wp_rewrite->author_base = $author_slug;
}
add_action('init', 'cng_author_base');

// function login_redirect( $redirect_to, $request, $user ){
//     $userUrl = get_author_posts_url( get_the_author_meta( 'ID' ), $user->user_nicename );
//     wp_redirect( $userUrl );
//     exit;
// }
//add_filter( 'login_redirect', 'login_redirect', 10, 3 );
