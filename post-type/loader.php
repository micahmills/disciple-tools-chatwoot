<?php
if ( !defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly.

/**
 * Test that DT_Module_Base has loaded
 */
if ( ! class_exists( 'DT_Module_Base' ) ) {
    dt_write_log( 'Disciple.Tools System not loaded. Cannot load custom post type.' );
    return;
}

/**
 * Add any modules required or added for the post type
 */
add_filter( 'dt_post_type_modules', function( $modules ){

    /**
     * @todo Update the starter in the array below 'starter_base'. Follow the pattern.
     * @todo Add more modules by adding a new array element. i.e. 'starter_base_two'.
     */
    $modules['starter_base'] = [
        'name' => __( 'Starter', 'disciple-tools-chatwoot' ),
        'enabled' => true,
        'locked' => true,
        'prerequisites' => [ 'contacts_base' ],
        'post_type' => 'chatwoot_post_type',
        'description' => __( 'Default starter functionality', 'disciple-tools-chatwoot' )
    ];

    return $modules;
}, 20, 1 );

require_once 'module-base.php';
Disciple_Tools_Chatwoot_Base::instance();

/**
 * @todo require_once and load additional modules
 */
