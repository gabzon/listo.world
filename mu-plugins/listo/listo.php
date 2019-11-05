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
include 'post-types/user.php';


// foreach (glob("api/enquiry/*.php") as $filename) {
//     include $filename;
// }

require 'api/enquiry/meta-fields.php';
require 'notifications/enquiry.php';

include 'settings/defaults.php';
include 'settings/roles.php';
include 'settings/authentication.php';
