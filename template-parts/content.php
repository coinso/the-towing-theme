<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package the_towing_theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
    <div class="col-md-8 col-md-offset-2 col-sm-12">
        <header class="entry-header">
            <?php
            if ( is_single() ) :
                the_title( '<h1 class="entry-title">', '</h1>' );
            else :
                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            endif;

            if ( 'post' === get_post_type() ) : ?>
                <div class="entry-meta">
                    <?php the_towing_theme_posted_on(); ?>
                </div><!-- .entry-meta -->
                <?php
            endif; ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php
            the_content( sprintf(
            /* translators: %s: Name of current post. */
                wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'the-towing-theme' ), array( 'span' => array( 'class' => array() ) ) ),
                the_title( '<span class="screen-reader-text">"', '"</span>', false )
            ) );

//            wp_link_pages( array(
//                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'the-towing-theme' ),
//                'after'  => '</div>',
//            ) );
            ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
<!--            --><?php //the_towing_theme_entry_footer(); ?>
        </footer><!-- .entry-footer -->
    </div>
</article><!-- #post-## -->
