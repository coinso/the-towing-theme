<?php
/**
 *
 * template name: Services Page
 * The template for displaying Service page
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
    $args = array(
        'post_type' => 'services',
        'posts_per_page'    =>  -1

    );
    $query = new WP_Query($args);
$page_title = get_post_meta($post->ID, 'page title', true);
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">
            <div class="row title-wrap">
                <div class="col-sm-12 hp-section-title-wrap">
                    <?php if($page_title):?>
                        <h1 class="section-title"><?php echo $page_title;?></h1>
                    <?php else :
                        the_title('<h1 class="section-title">','</h1>');
                    endif;?>
                    <hr>
                </div>
            </div>
            <div class="row">
                <?php
                while ( $query->have_posts() ) : $query->the_post();

                    get_template_part( 'template-parts/content', 'single-services' );



                endwhile; // End of the loop.
                ?>
            </div>
        </main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
