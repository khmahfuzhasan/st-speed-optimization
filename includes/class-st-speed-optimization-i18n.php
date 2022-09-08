<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://showrav.com/
 * @since      1.0.0
 *
 * @package    St_Speed_Optimization
 * @subpackage St_Speed_Optimization/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    St_Speed_Optimization
 * @subpackage St_Speed_Optimization/includes
 * @author     Star Stuff <khandakermahfuzhasan@gmail.com>
 */
class St_Speed_Optimization_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'st-speed-optimization',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
