<?php

require get_template_directory() . '/inc/svg-icons.php';

/**
 * Clean menus from classes
 */

add_filter('nav_menu_item_id', function ($id, $item, $args) {
	   return "";
   }, 10, 3);
   
   
add_filter('nav_menu_css_class', function ($classes, $item, $args) {
		return array();
	}, 10, 3);
   

add_filter( 'excerpt_more', function ( $more ) {
    return '...';
} );

add_filter('excerpt_length', function ($length){
	return 20;
	}, 999);


add_filter('pre_get_posts', function ($query){
	if ($query->is_archive) {
		$query->set('posts_per_page', 10);
	}
	return $query;
});


add_filter( 'get_search_form', function ($html ) {
	$html = str_replace( 'placeholder="Search', 'placeholder="Search"', $html );
	return $html;
} );


add_filter('get_search_form', function ($text) {
     return $text . close_icon_svg();
});

/** 
* This is a function which limits Number of Posts on Archive Pages
*/
add_filter( 'acf/format_value', function ( $value ) {
	if ( $value instanceof WP_Post ) {
	  return [
		'post_type' => $value->post_type,
		'id'        => $value->ID,
	  ];
	}
	return $value;
  }, 100 );


