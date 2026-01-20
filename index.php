<?php
get_template_part( 'template-parts/layouts/header-main' );
?>
	<main id="primary" class="site-main">
		<div class="index-container">
		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while (have_posts() ) :
				the_post();
				get_template_part( 'template-parts/components/excerpt', get_post_type() );
			endwhile;
			wp_reset_postdata();
		endif;?>
		</div>
		<?php get_template_part( 'template-parts/navigation/pagination' ); ?>
	</main>
<?php
get_template_part( 'template-parts/layouts/footer-main' );
