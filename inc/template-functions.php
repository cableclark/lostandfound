<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package LostAndFound
*/

/**
 * Adds custom classes to the array of body classes.
 */
add_filter( 'body_class', function( $classes ) {
    // Adds a class of 'hfeed' (Hierarchy Feed) to non-singular pages (archives, index).
    if ( ! is_singular() ) {
        $classes[] = 'hfeed';
    }

    // Adds a class of 'no-sidebar' when there is no sidebar present or active.
    if ( ! is_active_sidebar( 'sidebar-1' ) ) {
        $classes[] = 'no-sidebar';
    }

    // NEW: Adds a class to indicate if the user is using a specific page template.
    if ( is_page_template() ) {
        $classes[] = 'has-custom-template';
    }

    return $classes;
});

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 * Note: While pingbacks are older tech, this keeps your theme compliant with 
 * WordPress standards for "singular" views.
 */
add_action( 'wp_head', function() {
    if ( is_singular() && pings_open() ) {
        printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
    }
});
