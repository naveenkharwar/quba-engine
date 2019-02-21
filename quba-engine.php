<?php

/**
 *
 * @link              https://naveenkharwar.com/
 * @since             0.5.0
 * @package           QUBA_ENGINE
 *
 * @wordpress-plugin
 * Plugin Name:       Quba Engine
 * Plugin URI:        https://wordpress.org/plugins/quba-engine/
 * Description:       Quba Engine will provide some amazing features Quba WordPress Theme.
 * Version:           0.5.0
 * Author:            Naveen Kharwar
 * Author URI:        https://naveenkharwar.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       quba-engine
 */

if ( ! defined( 'WPINC' ) ) {

    die;

}

// Plugin version.
if ( ! defined( 'QUBA_ENGINE_VERSION' ) ) {

    define( 'QUBA_ENGINE_VERSION', '0.5.0' );

}

// Plugin folder name.
if ( ! defined( 'QUBA_ENGINE_NAME' ) ) {

    define( 'QUBA_ENGINE_NAME', trim( dirname( plugin_basename( __FILE__ ) ), '/' ) );

}

// Plugin directory, including the folder.
if ( ! defined( 'QUBA_ENGINE_DIR' ) ) {

    define( 'QUBA_ENGINE_DIR', WP_PLUGIN_DIR . '/' . QUBA_ENGINE_NAME );

}

// Plugin url, including the folder.
if ( ! defined( 'QUBA_ENGINE_URL' ) ) {

    define( 'QUBA_ENGINE_URL', WP_PLUGIN_URL . '/' . QUBA_ENGINE_NAME );

}

// Plugin root file.
if ( ! defined( 'QUBA_ENGINE_PLUGIN_FILE' ) ) {

    define( 'QUBA_ENGINE_PLUGIN_FILE', __FILE__ );

}

if ( file_exists( QUBA_ENGINE_DIR . '/welcome/welcome-init.php' ) ) {

    require_once( QUBA_ENGINE_DIR . '/welcome/welcome-init.php' );

}

if ( file_exists( QUBA_ENGINE_DIR . '/welcome/welcome-logic.php' ) ) {

    require_once( QUBA_ENGINE_DIR . '/welcome/welcome-logic.php' );

}

if ( file_exists( QUBA_ENGINE_DIR . '/include/portfolio-cpt.php' ) ) {

    require_once( QUBA_ENGINE_DIR . '/include/portfolio-cpt.php' );

}

if ( file_exists( QUBA_ENGINE_DIR . '/include/enqueue.php' ) ) {

    require_once( QUBA_ENGINE_DIR . '/include/enqueue.php' );

}