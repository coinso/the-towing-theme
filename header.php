<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package the_towing_theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- customizer styles -->
    <style>

    </style>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'the-towing-theme' ); ?></a>

	<header id="masthead" class="site-header nav navbar-fixed-top" role="banner">
				<?php get_template_part('template-parts/globals/content', 'navbar-top');?>
	</header><!-- #masthead -->
<?php if( is_front_page() ) {
    get_template_part('template-parts/home-page/content', 'hp-hero');
} else{
    get_template_part('template-parts/globals/content', 'hero');
}

get_template_part('template-parts/globals/content','service-bar');
?>

	<div id="content" class="site-content">
