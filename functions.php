<?php
/**
 * Lost and Found functions and definitions
 * @package LostAndFound
 */

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/template-parts/template-tags/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Load the template setup.
 * 
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Load the widgets setup.
 * 
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Load site's scripts.
 * 
 */
require get_template_directory() . '/inc/scripts.php';

/**
 * Load site's settings.
 * 
 */
require get_template_directory() . '/inc/settings.php';

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.1' );
}






