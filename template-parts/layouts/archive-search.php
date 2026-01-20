<?php
get_template_part( 'template-parts/layouts/header-main' );
?>
	<main id="primary" class="site-main site-container full-width">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 class="search-title">
   					 <?= esc_html__( 'Results:', 'lostandfound' ); ?> 
    				<span><?= get_search_query(); ?></span>
				</h1>
			</header>
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/components/search', "item" );
			endwhile;
				get_template_part( 'template-parts/navigation/pagination' );
			else :
				get_template_part( 'template-parts/components/content', 'none' );
			endif;
		?>
	</main>
<?php
get_template_part( 'template-parts/layouts/footer-main' );
