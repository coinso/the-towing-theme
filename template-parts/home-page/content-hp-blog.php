<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 3/1/2017
 * Time: 10:03 AM
 */

?>
<section id="hp-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 content">
                <div class="row inner-row">
                    <h3 class="section-title text-center">
                        Recent Post From Our Blog
                    </h3>
                </div>
                <hr class="divider">
                <div class="row inner-row">
            <?php
                global $post;
                $args = array(
                    'posts_per_page'  => 3,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_type' => 'post'
                );
            $recent_posts = get_posts($args);

            foreach ($recent_posts as $post) :
                setup_postdata($post);
                ?>

            <div class="col-md-4 col-sm-12 hp-recent-blog-post">
                <div class="thumbnail">

                    <a href="<?php the_permalink();?>">
                        <?php if ( has_post_thumbnail() ) ://check for feature image?>
                            <div class="post-image">
                                <?php the_post_thumbnail('recennt');?>
                            </div><!--end post-image-->
                        <?php endif;?>
                    </a>
                    <header class="entry-header">
                        <?php
                        if( ! is_single()):
                            printf( esc_html__('%s', 'the-towing-theme'), the_title('<h4 class="recent-post-title">', '</h4>') );
                        endif;
                        ?>
                    </header>

                    <div class="entry-content">
                        <?php
                        the_excerpt();
                        ?>
                    </div><!-- .entry-content -->
                </div>


            </div>
            <?php endforeach;
            wp_reset_postdata();?>
                </div>
            </div>
        </div>
    </div>
</section>
