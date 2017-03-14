<?php
/**
 * Template part for displaying services
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package the_towing_theme
 */

if(is_single()):?>

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
<?php else :?>
<article id="post-<?php the_ID(); ?>" <?php post_class('thumbnail col-md-3 col-sm-6 col-xs-6'); ?>>
    <a class="link-to-service" href="<?php the_permalink();?>">
        <?php $photo = get_field('service_image');?>
        <div class="service-img">
            <img src="<?php echo $photo['url'];?>" alt="<?php echo $photo['alt'];?>">
        </div>
        <header class="entry-header">
            <?php
            the_title('<h3 class="service-title">','</h3>');
            ?>
        </header><!-- .entry-header -->

        <div class="entry-content">

        </div><!-- .entry-content -->

        <footer class="entry-footer">
            <!--            --><?php //the_towing_theme_entry_footer(); ?>
        </footer><!-- .entry-footer -->
    </a>
</article><!-- #post-## -->
<?php endif;?>
