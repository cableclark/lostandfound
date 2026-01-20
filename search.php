<?php
get_template_part( 'template-parts/layouts/header-main' );
?>
	<main id="primary" class="site-main site-container full-width">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 class="search-title ">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Results: %s', 'Lost and found' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/components/content', 'search' );
			endwhile;
			get_template_part( 'template-parts/navigation/pagination' );
			else :
				get_template_part( 'template-parts/components/content', 'none' );
			endif;
		?>
	</main>
<?php
get_template_part( 'template-parts/layouts/footer-main' );
