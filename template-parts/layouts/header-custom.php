<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>"<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php 
		wp_head(); 
		?>
	</head>
	<body>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'Miss Albini' ); ?></a>
		<header id="masthead" class="site-header">
			<div class="site-branding"><?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?><h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
				else :
					?><p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;
				$lostandfound_description = get_bloginfo( 'description', 'display' );
				if ( $lostandfound_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $lostandfound_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div>
			<?php get_template_part( 'template-parts/nav' ); ?>
		</header>