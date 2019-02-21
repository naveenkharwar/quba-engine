<?php

/**
 * Welcome Logic
 *
 * @since 0.5.0
 * @package QUBA_ENGINE
 */

if ( ! defined( 'WPINC' ) ) {

    die;

}

/**
 * Welcome page redirect.
 *
 * Only happens once and if the site is not a network or multisite.
 *
 * @since 0.5.0
 */
function QUBA_ENGINE_safe_welcome_redirect() {

    // Bail if no activation redirect transient is present.
    if ( ! get_transient( '_welcome_redirect_QUBA_ENGINE' ) ) {

        return;

    }

  // Delete the redirect transient.
  delete_transient( '_welcome_redirect_QUBA_ENGINE' );

  // Bail if activating from network or bulk sites.
  if ( is_network_admin() || isset( $_GET['activate-multi'] ) ) {

    return;

  }

  // Redirect to Welcome Page.
  // Redirects to `your-domain.com/wp-admin/plugin.php?page=QUBA_ENGINE_welcome_page`.
  wp_safe_redirect( add_query_arg( array( 'page' => 'QUBA_ENGINE_welcome_page' ), admin_url( 'plugins.php' ) ) );

}

add_action( 'admin_init', 'QUBA_ENGINE_safe_welcome_redirect' );

/**
 * Adds welcome page menu.
 *
 * @since 0.5.0
 */
function QUBA_ENGINE_welcome_page() {

  global $QUBA_ENGINE_menu;

  $QUBA_ENGINE_menu = add_menu_page(
      __( 'Quba Engine', 'QUBA_ENGINE' ), // The text to be displayed in the title tags of the page when the menu is selected.
      __( 'Quba Engine', 'QUBA_ENGINE' ), // The text to be used for the menu.
      'read', // The capability required for this menu to be displayed to the user.
      'QUBA_ENGINE_welcome_page', // The slug name to refer to this menu by (should be unique for this menu).
      'QUBA_ENGINE_welcome_page_content', // The function to be called to output the content for this page.
      plugin_dir_url( __FILE__ ).'../images/logo.png',
      2
  );

}

add_action( 'admin_menu', 'QUBA_ENGINE_welcome_page' );

/**
 * Welcome page content.
 *
 * @since 0.5.0
 */
function QUBA_ENGINE_welcome_page_content() {

    if ( file_exists( QUBA_ENGINE_DIR . '/welcome/welcome-view.php') ) {

       require_once( QUBA_ENGINE_DIR . '/welcome/welcome-view.php' );

    }
}

/**
 * Enqueue Styles.
 *
 * @since 0.5.0
 */
function QUBA_ENGINE_styles( $hook ) {

    global $QUBA_ENGINE_menu;

    // Add style to the welcome page only.
    if ( $hook != $QUBA_ENGINE_menu ) {

      return;

    }

    wp_enqueue_style('QUBA_ENGINE_style', plugin_dir_url( __FILE__ ) . 'css/style.css' );
    wp_enqueue_script('QUBA_ENGINE_script', plugin_dir_url( __FILE__ ) .'js/tab.js', array('jquery'), '1.0');

}

// Enqueue the styles.
add_action( 'admin_enqueue_scripts', 'QUBA_ENGINE_styles' );
