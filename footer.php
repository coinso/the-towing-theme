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

            <div class="col-sm-12 text-center">
                <a href="<?php echo esc_url( __( get_home_url('/'), 'the-towing-theme' ) ); ?>" rel="nofollow"><?php printf( esc_html__( 'All Right Reserved &copy; %s', 'the-towing-theme' ), get_bloginfo('name') ); ?></a>
                <span class="sep"> | </span>
                <?php printf( esc_html__( '%s', 'the-towing-theme' ), date('Y') ); ?>

            </div>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</section>
</div><!-- #page -->
<?php get_template_part('template-parts/globals/content','scrollup');?>
<?php wp_footer(); ?>

</body>
</html>
