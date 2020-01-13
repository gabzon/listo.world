<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://zambrano.ch/
 * @since             1.0.0
 * @package           Listo_World_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Listo World Plugin
 * Plugin URI:        https://listo.world/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Gabriel Zambrano
 * Author URI:        https://zambrano.ch/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       listo-world-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'LISTO_WORLD_PLUGIN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-listo-world-plugin-activator.php
 */
function activate_listo_world_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-listo-world-plugin-activator.php';
	Listo_World_Plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-listo-world-plugin-deactivator.php
 */
function deactivate_listo_world_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-listo-world-plugin-deactivator.php';
	Listo_World_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_listo_world_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_listo_world_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-listo-world-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_listo_world_plugin() {

	$plugin = new Listo_World_Plugin();
	$plugin->run();

}
run_listo_world_plugin();
