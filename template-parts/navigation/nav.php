<?php
/**
 * Template part for displaying the navigation of the site
 *
 * @package LostAndFound
 */
?>
<nav id="site-navigation" class="main-navigation">
	<div class="main-menu"><?php
		wp_nav_menu(
					[
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					]
				);
				if ( ! is_active_sidebar( 'sidebar-1' ) ) {
					return;
				}
				echo search_icon_svg();
	?></div>
	<div class="toggler" aria-controls="primary-menu" aria-expanded="false"> 
		<div></div>
		<div></div>
		<div></div>
	</div>
	<div class="menu-hider"></div>
</nav>