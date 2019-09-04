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
                the_title('<h1 class="service-title">','</h1>');
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
    <?php $bg = get_the_post_thumbnail_url();?>
<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-3 col-sm-6 col-xs-6 service'); ?>>
    <div class="thumbnail">
        <a class="link-to-service" href="<?php the_permalink();?>">
            <?php if( has_post_thumbnail() ):?>
                <div class="service-img" style="background: url('<?php echo $bg;?>') no-repeat center; background-size: cover;">
<!--                    --><?php //the_post_thumbnail('service-thumbnail');?>
                </div>
            <?php endif; ?>
        </a>
            <header class="entry-header">
                <?php
                the_title('<a class="link-to-service" href="'. get_the_permalink() .'"><h3 class="service-title">','</h3></a>');
                ?>
            </header><!-- .entry-header -->

            <div class="entry-content">
                <a href="<?php the_permalink();?>" class="btn btn-warning">
                    Learn More...
                </a>
            </div><!-- .entry-content -->

            <footer class="entry-footer">

            </footer><!-- .entry-footer -->

    </div>
</article><!-- #post-## -->
<?php endif; ?>
