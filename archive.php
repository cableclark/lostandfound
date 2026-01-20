<?php
get_header();
?>
	<main id="primary" class="site-main margin-top">
		<div class="archive-title">
			<h1>
				<?php 
				echo get_cat_name(get_queried_object_id());
				?>
			</h1>
		</div>
		<div class="archives-container">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/excerpt-archive', get_post_type() );
			endwhile;			
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
	</div>	
	<?php get_template_part( 'template-parts/pagination' ); ?>
</main><!-- #main -->

<?php
get_sidebar();
get_sidebar( 'latest' );
get_footer();
?>