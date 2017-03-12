<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 3/1/2017
 * Time: 9:57 AM
 */
?>

<section id="kudus">
    <div class="kudus-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 section-title-wrap">
                <?php printf( esc_html('%s', 'the-towing-theme'), '<h3>'.get_field('testimonial_section_title').'</h3>');?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 kudus-slider slick-item">
                <?php
                $test_p = get_field('testimonial_section_cont');
                if($test_p):
                $count = 1;
                foreach ($test_p as $tp):
                    ?>
                    <div class="kudus-cont">
                             <i class="fa fa-quote-left"></i>
                             <?php the_field('testimonial_content', $tp->ID) ;?>
                             <i class="fa fa-quote-right"></i>
                        <span class="kudus-name">
                            ~<?php the_field('testimonial_name', $tp->ID);?>
                        </span>
                    </div>

                <?php      $count++;

                     endforeach;

                endif;
                ;?>
            </div>
        </div>
    </div>
</section>
