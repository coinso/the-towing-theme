<?php
/**
 * Template part for displaying services
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
                the_title('<h2 class="service-title">','</h2>');
            ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php
            the_field('service_content');
            ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
<!--            --><?php //the_towing_theme_entry_footer(); ?>
        </footer><!-- .entry-footer -->
    </div>
</article><!-- #post-## -->
