<?php 
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
add_action( 'after_setup_theme', function() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Register Navigation Menus.
    register_nav_menus([
        'menu-1' => esc_html__( 'Primary', 'lost-and-found' ),
        'social' => esc_html__( 'Social', 'lost-and-found' ),
    ]);

    // Switch core markup to output valid HTML5.
    add_theme_support( 'html5', [
        'search-form',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    // Add support for core custom logo.
    add_theme_support( 'custom-logo', [
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ]);

    // 2026 Modern Addition: Align Wide
    // This allows blocks like images or covers to be "Wide" or "Full" width.
    add_theme_support( 'align-wide' );

    // 2026 Modern Addition: Responsive Embeds
    // Makes YouTube/Vimeo embeds responsive by default.
    add_theme_support( 'responsive-embeds' );
});

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */

add_action( 'after_setup_theme', function () {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'miss_albini_content_width', 740 );
}, 0 );

/**
 * Head Clean-up
 */
	remove_action ('wp_head', 'rsd_link');

	add_filter('the_generator', function () {
		return '';
	});

	remove_action( 'wp_head', 'wlwmanifest_link');
	remove_action( 'wp_head', 'wp_shortlink_wp_head');
	remove_action('wp_head', 'rest_output_link_wp_head', 10);
	remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
	remove_action('template_redirect', 'rest_output_link_header', 11, 0);

	/**
 * Stop loading contact form 7 scrips on every page
 */	
	add_filter( 'wpcf7_load_js', '__return_false' );
    add_filter( 'wpcf7_load_css', '__return_false' );
/**
 * Remove previous/next
 */
   remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
/**
 * Force HTTPS for loading scripts
 */

add_filter('force_ssl' , function ($force_ssl, $post_id = 0 ) {
    $force_ssl_on_these_posts = array(4729, 5547, 2493, 4679, 5454, 4192, 4750, 5473, 5344, 5183, 4222, 5135, 5492);
    if(in_array($post_id, $force_ssl_on_these_posts )) {
        return true;
    }
    return $force_ssl;
}, 1, 3);

/**
 * Add preconnect for Google Fonts.
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */

add_filter( 'wp_resource_hints', function ( $urls, $relation_type ) {
	if ( wp_style_is( 'miss_albini-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}
	return $urls;
}, 10, 2 );