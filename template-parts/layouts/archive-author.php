<?php
get_template_part( 'template-parts/layouts/header-main');
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
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/components/excerpt-archive', get_post_type() );
			endwhile;			
		else :
			get_template_part( 'template-parts/components/content', 'none' );
		endif;
		?>
	</div>	
	<?php get_template_part( 'template-parts/navigation/pagination' );
	?>
	</main><!-- #main -->
<?php
get_template_part( 'template-parts/layouts/footer-main' );
?>