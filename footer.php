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
            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'the-towing-theme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'the-towing-theme' ), 'WordPress' ); ?></a>
            <span class="sep"> | </span>
            <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'the-towing-theme' ), 'the-towing-theme', '<a href="https://automattic.com/" rel="designer">Ido at coinso.com</a>' ); ?>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</section>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
