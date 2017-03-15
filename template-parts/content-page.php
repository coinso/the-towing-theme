<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package the_towing_theme
 */
if(is_singular('services')){
    $page_title = get_field('service_name');
}elseif(is_home()){
    $page_title = single_post_title('', false);
}else{
    $page_title = get_post_meta($post->ID,'page title', true);
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
    <div class="col-md-8 col-md-offset-2 col-sm-12 content">
        <header class="entry-header">

            <h1 class="entry-title"><?php echo $page_title ? $page_title : get_the_title(); ?></h1>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php
            the_content();
            ?>
        </div><!-- .entry-content -->

        <?php if ( get_edit_post_link() ) : ?>
        <footer class="entry-footer">
            <?php
            edit_post_link(
                sprintf(
                /* translators: %s: Name of current post */
                    esc_html__( 'Edit %s', 'the-towing-theme' ),
                    the_title( '<span class="screen-reader-text">"', '"</span>', false )
                ),
                '<span class="edit-link">',
                '</span>'
            );
            ?>
        </footer><!-- .entry-footer -->
    </div>
	<?php endif; ?>
</article><!-- #post-## -->
