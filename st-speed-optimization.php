<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://showrav.com/
 * @since             1.0.0
 * @package           St_Speed_Optimization
 *
 * @wordpress-plugin
 * Plugin Name:       ST Speed Optimization
 * Plugin URI:        https://showrav.com/wp/plugins/st-speed-optimization
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Star Stuff
 * Author URI:        https://showrav.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       st-speed-optimization
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
define( 'ST_SPEED_OPTIMIZATION_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-st-speed-optimization-activator.php
 */
function activate_st_speed_optimization() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-st-speed-optimization-activator.php';
	St_Speed_Optimization_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-st-speed-optimization-deactivator.php
 */
function deactivate_st_speed_optimization() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-st-speed-optimization-deactivator.php';
	St_Speed_Optimization_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_st_speed_optimization' );
register_deactivation_hook( __FILE__, 'deactivate_st_speed_optimization' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-st-speed-optimization.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_st_speed_optimization() {

	$plugin = new St_Speed_Optimization();
	$plugin->run();

}
run_st_speed_optimization();
