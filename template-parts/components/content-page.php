<?php
/**
 * Template part for displaying page content in page.php
 * @package LostAndFound
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <div class="entry-meta">
            <time class="published" datetime="<?= get_the_date('c'); ?>">
                <?php echo get_the_date(); ?>
            </time>
        </div>
    </header>
    <?php if ( has_post_thumbnail() ) : ?>
        <figure class="post-thumbnail">
            <?php the_post_thumbnail( 'large', [ 'loading' => 'eager' ] ); ?>
            <?php if ( get_the_post_thumbnail_caption() ) : ?>
                <figcaption class="wp-caption-text"><?= get_the_post_thumbnail_caption(); ?></figcaption>
            <?php endif; ?>
        </figure>
    <?php endif; ?>
    <div class="entry-content">
        <?php
        the_content();
        wp_link_pages([
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lost-and-found' ),
            'after'  => '</div>',
        ]);
        ?>
    </div>
</article>
