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
require_once 'config.php';

// Add Taxonomy files
// include 'taxonomy/place-type.php';
// include 'taxonomy/activity.php';
// include 'taxonomy/theme.php';
// include 'taxonomy/country.php';
// include 'taxonomy/style.php';
// include 'taxonomy/year.php';
// include 'post-types/artist.php';
include ROOT_DIR . '/post-types/enquiry.php';
include ROOT_DIR . '/post-types/place.php';
include ROOT_DIR . '/post-types/user.php';


// foreach (glob("api/enquiry/*.php") as $filename) {
//     include $filename;
// }

require ROOT_DIR . '/api/enquiry/meta-fields.php';
require ROOT_DIR . '/notifications/enquiry.php';

include ROOT_DIR . '/settings/defaults.php';
include ROOT_DIR . '/settings/roles.php';
include ROOT_DIR . '/settings/authentication.php';