<?php
/**
 * Template part for displaying the pagination of the site
 *
 * @package Lost and Found
 */
?>
<?php the_posts_pagination( array(
				'mid_size'  => 1,
				'prev_text' => __( '<', 'textdomain' ),
				'next_text' => __( '>', 'textdomain' ),
			) );
?>
