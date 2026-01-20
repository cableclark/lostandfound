<?php
/**
 * Template Name: Contact
 * 
 * */
get_template_part( 'template-parts/layouts/header', 'custom' );
?>
	<main id="primary" class="site-main site-container margin-top background-unset">
		<?php
		while (have_posts()) :
			the_post();
			get_template_part( 'template-parts/components/content', 'page' );
		endwhile; 
		?>
	</main><!-- #main -->
<?php
get_template_part( 'template-parts/layouts/footer-main' );
