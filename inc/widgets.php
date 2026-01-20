<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
/**
 * Register widget areas using a Closure.
 */
add_action( 'widgets_init', function() {

    // 1. Main Sidebar
    register_sidebar([
        'name'          => esc_html__( 'Sidebar', 'lost-and-found' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here for the main sidebar area.', 'lost-and-found' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);

    // 2. Similar Posts Area
    register_sidebar([
        'name'          => esc_html__( 'Similar', 'lost-and-found' ),
        'id'            => 'similar',
        'description'   => esc_html__( 'Widgets for the similar content section.', 'lost-and-found' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);

    // 3. Latest Content Area
    register_sidebar([
        'name'          => esc_html__( 'Latest Content', 'lost-and-found' ),
        'id'            => 'latest',
        'description'   => esc_html__( 'Display your most recent updates here.', 'lost-and-found' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);

    // 4. Album of the Week (Specialty Area)
    register_sidebar([
        'name'          => esc_html__( 'Album of the Week', 'lost-and-found' ),
        'id'            => 'album-of-the-week',
        'description'   => esc_html__( 'Special widget area for featured music/albums.', 'lost-and-found' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="album-of-the-week-title">',
        'after_title'   => '</h3>',
    ]);

});

