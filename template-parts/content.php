<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package the_towing_theme
 */

if( is_single()){
    $classes = 'row';
}else{
    $classes = 'col-md-6 col-sm-12';
}
?>


<article id="post-<?php the_ID(); ?>" <?php post_class($classes); ?>>

    <?php
    if ( is_single() ) :?>
    <div class="col-md-8 col-md-offset-2 col-sm-12">

        <header class="entry-header">
            <?php  the_title( '<h2 class="entry-title">', '</h2>' );?>
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
    <?php else :

        if (has_post_thumbnail()):?>

                <figure class="effect-lily">
                    <div class="blog-post-thumbnail">
                        <?php the_post_thumbnail('blog-post-thumbnail');?>
                        <figcaption>
                            <div class="blog-post-excerpt">
                                <?php   the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

                                if ( 'post' === get_post_type() ) : ?>
                                    <div class="entry-meta post-details">
                                        <i class="fa fa-user"></i> <?php the_author();  ?>
                                        <i class="fa fa-clock-0"></i>
                                        <time><?php the_date(); ?></time>
                                        <i class="fa fa-folder"></i> <?php the_category(', '); ?>
                                        <i class="fa fa-tags"></i> <?php the_tags('', ', ', ''); ?>
                                    </div><!-- .entry-meta -->
                                <?php endif;
                                the_excerpt();?>
                            </div>
                        </figcaption>
                    </div>
                </figure>

        <?php endif;?>

    <?php endif;?>
</article><!-- #post-## -->
