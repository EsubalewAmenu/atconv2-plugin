<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/EsubalewAmenu/
 * @since             1.0.0
 * @package           Atconv2_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Atconv2-plugin
 * Plugin URI:        https://datascienceplc.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Esubalew Amenu
 * Author URI:        https://github.com/EsubalewAmenu/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       atconv2-plugin
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
define( 'ATCONV2_PLUGIN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-atconv2-plugin-activator.php
 */
function activate_atconv2_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-atconv2-plugin-activator.php';
	Atconv2_Plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-atconv2-plugin-deactivator.php
 */
function deactivate_atconv2_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-atconv2-plugin-deactivator.php';
	Atconv2_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_atconv2_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_atconv2_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-atconv2-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_atconv2_plugin() {

	$plugin = new Atconv2_Plugin();
	$plugin->run();

}
run_atconv2_plugin();
