<?php

/**
 * Routing Logic Tree
 */

if ( is_home() ) :
    get_template_part( 'template-parts/layouts/archive', 'home' );

elseif ( is_404() ) :
    get_template_part( 'template-parts/layouts/content', '404' );

elseif ( is_search() ) :
    get_template_part( 'template-parts/layouts/archive', 'search' );

elseif ( is_author() ) :
    get_template_part( 'template-parts/layouts/archive', 'author' );

elseif ( is_category() || is_tag() || is_archive() ) :
    get_template_part( 'template-parts/layouts/archive', 'default' );

elseif ( is_page( 'about' ) ) :

    get_template_part( 'template-parts/layouts/page', 'about' );

elseif ( is_singular('page') ) :
    get_template_part( 'template-parts/layouts/content', 'page' );

elseif ( is_singular('post') ) :
    get_template_part( 'template-parts/layouts/content', 'single' );

else :
    get_template_part( 'template-parts/layouts/content', 'none' );
endif;

?>
	