<?php
/**
 * template name: Home Page
 *
 * The template for displaying home page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package the_towing_theme
 */

get_header();
    if(get_field('show_about_section')){

        get_template_part('template-parts/home-page/content','hp-about');
    }
    if( get_field('show_testimonial_section')){

        get_template_part('template-parts/globals/content','kudus');
    }
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/home-page/content', 'home' );


			endwhile; // End of the loop.
			?>

		</main><!-- #main container-->
	</section><!-- #primary -->

<?php
if( get_field('show_services_section')){

    get_template_part('template-parts/home-page/content', 'hp-services');
}
get_template_part('template-parts/globals/content', 'footer-optin');
if( get_field('show_blog_section')){

    get_template_part('template-parts/home-page/content','hp-blog');
}

?>


<?php
//get_sidebar();
get_footer();
