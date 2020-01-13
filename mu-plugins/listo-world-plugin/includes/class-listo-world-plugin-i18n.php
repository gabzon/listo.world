<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://zambrano.ch/
 * @since      1.0.0
 *
 * @package    Listo_World_Plugin
 * @subpackage Listo_World_Plugin/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Listo_World_Plugin
 * @subpackage Listo_World_Plugin/includes
 * @author     Gabriel Zambrano <gab.zambrano@gmail.com>
 */
class Listo_World_Plugin_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'listo-world-plugin',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
