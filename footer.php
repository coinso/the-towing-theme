<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package the_towing_theme
 */

if(!is_front_page() ){

    get_template_part('template-parts/globals/content', 'footer-optin');
}
get_template_part('template-parts/globals/content', 'footer-widgets');

?>

	</div><!-- #content -->
<section id="site-footer">
    <footer id="colophon" class="site-footer container" role="contentinfo">
        <div class="site-info row">
            <div class="site-info-text text-black">

                <?php
                /* translators: %s: CMS name, i.e. WordPress. */
                printf( esc_html__( 'All Right Reserved %s', 'the-towing-theme' ), get_bloginfo('name') );
                ?>

                <span class="sep"> | </span>
                <?php
                /* translators: 1: Theme name, 2: Theme author. */
                printf( esc_html__( '%1$s  %2$s.', 'the-towing-theme' ), '&copy', date('Y') );
                ?>
            </div><!-- .site-info -->
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</section>
</div><!-- #page -->
<?php get_template_part('template-parts/globals/content','scrollup');?>
<?php wp_footer(); ?>

</body>
</html>
