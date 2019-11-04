<?php

/**
 * Plugin Name: Listo Enquiry Form
 */


// Require the composer autoload for getting conflict-free access to enqueue
require_once __DIR__ . '/vendor/autoload.php';

// Instantiate
//$enqueue = new \WPackio\Enqueue( 'listoEnquiryForm', 'dist', '1.0.0', 'plugin', __FILE__ );

class ListoEnquiryFormInit {
	/**
	 * @var \WPackio\Enqueue
	 */
	public $enqueue;

	public function __construct() {
		// It is important that we init the Enqueue class right at the plugin/theme load time
		$this->enqueue = new \WPackio\Enqueue(
			// Name of the project, same as `appName` in wpackio.project.js
			'listoEnquiryForm',
			// Output directory, same as `outputPath` in wpackio.project.js
			'dist',
			// Version of your plugin
			'1.0.0',
			// Type of your project, same as `type` in wpackio.project.js
			'plugin',
			// Plugin location, pass false in case of theme.
			__FILE__
		);
		// Enqueue a few of our entry points
		add_action( 'wp_enqueue_scripts', [ $this, 'plugin_enqueue' ] );
	}

	public function plugin_enqueue() {
		// Enqueue files[0] (name = app) - entryPoint main
		$this->enqueue->enqueue( 'app', 'main', [] );
	}
}


// Init
new ListoEnquiryFormInit();
