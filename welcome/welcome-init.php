<?php

/**
 * Welcome Page Init
 *
 * Welcome page initializer.
 *
 * @since 0.5.0
 */

if ( ! defined( 'WPINC' ) ) {

    die;

}

/**
 * Activates the welcome page.
 *
 * Adds transient to manage the welcome page.
 *
 * @since 0.5.0
 */
function QUBA_ENGINE_welcome_activate() {

    // Transient max age is 60 seconds.
    set_transient( '_welcome_redirect_QUBA_ENGINE', true, 60 );

}

register_activation_hook( QUBA_ENGINE_PLUGIN_FILE, 'QUBA_ENGINE_welcome_activate' );

/**
 * Deactivates welcome page
 *
 * Deletes the welcome page transient.
 *
 * @since 0.5.0
 */
function QUBA_ENGINE_welcome_deactivate() {

  delete_transient( '_welcome_redirect_QUBA_ENGINE' );

}

register_deactivation_hook( QUBA_ENGINE_PLUGIN_FILE, 'QUBA_ENGINE_welcome_deactivate' );
