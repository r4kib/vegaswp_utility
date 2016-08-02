<?php
/**
 * Plugin Name
 *
 * @package     Main Plugin File
 * @author      Rakib Hasan
 * @copyright   2016 Vegas WP
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: VegasWP Utility
 * Plugin URI:  https://vegaswp.com/
 * Description: Collection of some commonly used functionality
 * Version:     0.0.11
 * Author:      Rakib Hasan
 * Author URI:  https://example.com
 * Text Domain: vegaswp_utility
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

//auto upadter
 if( ! class_exists( 'Smashing_Updater' ) ){
 	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
 }

 $updater = new Smashing_Updater( __FILE__ );
 $updater->set_username( 'r4kib' );
 $updater->set_repository( 'vegaswp_utility' );
 /*
 	$updater->authorize( 'abcdefghijk1234567890' ); // Your auth code goes here for private repos
 */
 $updater->initialize();

// toolbar disable

include 'disable_toolbar/disable-toolbar.php';

if (!function_exists('duplicate_post_plugin_actions')) {
  include 'duplicate-post/duplicate-post.php';
}




 ?>
