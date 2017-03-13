<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 3/1/2017
 * Time: 12:31 PM
 */


?>
<div id="footer-disclaimer">

    <div itemscope itemtype="http://schema.org/<?php echo get_theme_mod(__('schema_type'));?>">
        <ul class="footer-list">
            <li>
                <div class="footer-logo">
                    <a itemprop="url" href="<?php echo get_home_url(); ?>" alt="<?php echo get_bloginfo('name'); ?>"  title="<?php echo get_bloginfo('name'); ?>">
                        <span itemprop="logo" itemtype="https://schema.org/ImageObject">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/logo_small.png' ;?>" alt="<?php echo get_bloginfo('name'); ?>" itemprop="image">
                        </span>
                    </a>
                </div>
            </li>

            <li>
                <div class="footer-company-info">
                    <span itemprop="name"><?php echo get_theme_mod(__('schema_brand_name')); ?></span><br>
                    <span itemprop="description"><?php echo get_theme_mod(__('schema_brand_description')); ?></span>
                </div>
            </li>
            <li class="inline-block">
                <div class="footer-address">
                    <div class="description" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                        <i class="fa fa-home">&nbsp</i>
                        <span itemprop="streetAddress"><?php echo get_theme_mod(__('schema_street_address')); ?></span>,<br>
                        <span itemprop="addressLocality"><?php echo get_theme_mod(__('schema_city')); ?>, </span>
                        <span itemprop="addressRegion"><?php echo get_theme_mod(__('schema_region')); ?>, </span>
                        <span itemprop="postalCode"><?php echo get_theme_mod(__('schema_zip')); ?></span>
                    </div>
                </div>
            </li>
            <li class="inline-block">
                <div class="footer-phone"><i class="fa fa-phone">&nbsp</i>
                    <span itemprop="telephone"><?php echo get_theme_mod('schema_phone_number');?></span>

                </div>
            </li>
            <li class="inline-block">
                <div class="footer-hours"><i class="fa fa-clock-o">&nbsp</i>
                    <?php if(have_rows('company_opening_hours','options') ):
                        while( have_rows('company_opening_hours','options')): the_row();?>
                            <time itemprop="openingHours" datetime="<?php the_sub_field('opening_hours_day','options');?>"><?php the_sub_field('opening_hours_time','options');?></time>
                        <?php endwhile; endif;?>
                </div>
            </li>
        </ul>

<!--        <div class="footer-social-icons">-->
<!--            <ul class="list-inline">-->
<!--                <li><a href="--><?php //the_field('company_fb','options');?><!--" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i> </a></li>-->
<!--                <li><a href="--><?php //the_field('company_twitter','options');?><!--" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i> </a></li>-->
<!--                <li><a href="--><?php //the_field('company_gmb','options');?><!--" target="_blank" rel="nofollow"><i class="fa fa-google-plus"></i> </a></li>-->
<!--                <li><a href="--><?php //the_field('company_yelp','options');?><!--" target="_blank" rel="nofollow"><i class="fa fa-yelp"></i> </a></li>-->
<!--            </ul>-->
<!--        </div>-->


        <div class="clear"></div>
    </div>



</div><!-- #footer-disclaimer -->
