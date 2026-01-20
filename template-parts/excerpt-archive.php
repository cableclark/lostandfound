<?php
/**
 * Template part for displaying cards in archive pages
 *
 * @package LostAndFound
 */
?>
<div class="card margin-2">
	<article id="post-<?php the_ID(); ?>">
		<header class="entry-header">
			<?php miss_albini_post_thumbnail('medium'); ?>
			<?php the_title( '<h2 class="content-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );?>
			<div class="entry-meta">
				<?php miss_albini_posted_on();?>
			</div>
		</header>
		<div>
			<?php the_excerpt();?>
		</div><!-- .entry-content -->
		<footer >
			<?php if ( 'post' === get_post_type() ) :
			 endif; ?>
			 <?php miss_albini_entry_footer(); ?>
		</footer>
	</article>
</div> 
