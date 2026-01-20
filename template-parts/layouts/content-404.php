<?php
get_template_part( 'template-parts/layouts/header-main' );
?>
<main id="primary" class="site-main site-container full-width">
	<div class="no-results-container">
		<?php 
		esc_html_e( 'We tried, but we did not find that page...', 'Miss Albini' ); 
		;?>
	</div>	
</main><!-- #main -->
<?php
get_template_part( 'template-parts/layouts/footer-main' );
