<?php 
/**
 * Lost and Found Theme Assets
 */

/**
 * Enqueue scripts and styles using Closures.
 */
add_action('wp_enqueue_scripts', function() {
    
    // 1. Google Fonts
    wp_enqueue_style(
        'lost-and-found-fonts', 
        'https://fonts.googleapis.com/css2?family=Crimson+Text&family=Montserrat:wght@500;700&display=swap', 
        [], 
        null
    );

    // 2. Main Stylesheet
    $style_path = get_template_directory() . '/style.css';
    $style_ver  = file_exists($style_path) ? filemtime($style_path) : '1.0.0';

    wp_enqueue_style(
        'lost-and-found-style', 
        get_stylesheet_uri(), 
        [], 
        $style_ver
    );
    

    // RTL Support - Automatic swapping for style-rtl.css
    wp_style_add_data('lost-and-found-style', 'rtl', 'replace');

    // 3. Navigation Script
    $js_path = get_template_directory() . '/js/navigation.js';
    $js_ver  = file_exists($js_path) ? filemtime($js_path) : '1.0.0';

    wp_enqueue_script(
        'lost-and-found-navigation',
        get_template_directory_uri() . '/js/navigation.js',
        [],
        $js_ver,
        [
            'strategy'  => 'defer', // Non-blocking load
            'in_footer' => true
        ]
    );
});

add_action('wp_enqueue_scripts', function() {
    // Get theme version from style.css header
   
});


/**
 * Performance: Preconnect to Google Font services
 */
add_filter('wp_resource_hints', function($urls, $relation_type) {
    if ('preconnect' === $relation_type) {
        $urls[] = 'https://fonts.gstatic.com';
    }
    return $urls;
}, 10, 2);