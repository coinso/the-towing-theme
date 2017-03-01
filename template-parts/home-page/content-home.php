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
	<div class="col-md-8 col-md-offset-2 col-sm-12 content">
        <?php
        $h1 = esc_attr(get_field('home_page_content_title'));
        if ($h1) :?>
            <h2 class="section-title"><?php echo $h1;?></h2>
            <?php else: ?>
            <?php the_title('<h2 class="section-title">','</h2>');
   endif;?>
        <?php esc_attr(the_field('home_page_content'));?>
    </div>
</article><!-- #post-## -->
