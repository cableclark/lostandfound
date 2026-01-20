<?php
get_header();
?>
	<main id="primary" class="site-main margin-top">
		<div class="archive-title">
			<h1 class="author-name">
				<?php 
				$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
				echo $curauth->display_name;
				?>
			</h1>
		</div>
		<div class="archives-container">
		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/excerpt-archive', get_post_type() );
			endwhile;			
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
	</div>	
	<?php get_template_part( 'template-parts/pagination' );
	?>
	</main><!-- #main -->
<?php
get_sidebar();
get_footer();
?>