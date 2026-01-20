<?php
get_template_part( 'template-parts/layouts/header-main' );
?>
	<main id="primary" class="site-main site-container">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/components/content', 'page' );
		endwhile;
		?>
	</main>
<?php
get_template_part( 'template-parts/layouts/footer-main' );
