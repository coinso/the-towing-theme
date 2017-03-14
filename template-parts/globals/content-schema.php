<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 3/1/2017
 * Time: 12:31 PM
 */


?>
<div id="footer-disclaimer">

    <div itemscope itemtype="http://schema.org/<?php echo get_theme_mod(__('schema_type')) ? get_theme_mod(__('schema_type')) : 'locksmith';?>">
        <ul class="footer-list">
            <li>
                <div class="footer-logo">
                    <a itemprop="url" href="<?php echo get_home_url(); ?>" alt="<?php echo get_bloginfo('name'); ?>"  title="<?php echo get_bloginfo('name'); ?>">
                        <span itemprop="logo" itemtype="https://schema.org/ImageObject">
                            <img src="<?php echo get_theme_mod('schema_logo') ? get_theme_mod('schema_logo') : get_stylesheet_directory_uri() . '/assets/img/logo.png' ;?>" alt="<?php echo get_bloginfo('name'); ?>" itemprop="image">
                        </span>
                    </a>
                </div>
            </li>

            <li>
                <div class="footer-company-info">
                    <span itemprop="name"><?php echo get_theme_mod(__('schema_brand_name')) ? get_theme_mod(__('schema_brand_name')) : get_bloginfo('name'); ?></span><br>
                    <span itemprop="description"><?php echo get_theme_mod(__('schema_brand_description')) ? get_theme_mod(__('schema_brand_description')) : get_bloginfo('description'); ?></span>
                </div>
            </li>
            <li class="inline-block">
                <div class="footer-address">
                    <div class="description" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                        <i class="fa fa-home">&nbsp</i>
                        <span itemprop="streetAddress"><?php echo get_theme_mod(__('schema_street_address')) ? get_theme_mod(__('schema_street_address')) : __('Add street name'); ?></span>,<br>
                        <span itemprop="addressLocality"><?php echo get_theme_mod(__('schema_city')) ? get_theme_mod(__('schema_city')) : __('Add city name'); ?>, </span>
                        <span itemprop="addressRegion"><?php echo get_theme_mod(__('schema_region')) ? get_theme_mod(__('schema_region')) : __('Add region'); ?>, </span>
                        <span itemprop="postalCode"><?php echo get_theme_mod(__('schema_zip')) ? get_theme_mod(__('schema_zip')) : __('Add zip code'); ?></span>
                    </div>
                </div>
            </li>
            <li class="inline-block">
                <div class="footer-phone"><i class="fa fa-phone">&nbsp</i>
                    <span itemprop="telephone"><?php echo get_theme_mod('schema_phone_number') ? get_theme_mod('schema_phone_number') : __('Add phone number');?></span>

                </div>
            </li>
            <li class="inline-block">
                <div class="footer-social-icons">
                    <?php $social_cta = get_theme_mod(esc_html__('social_cta_title'));
                        if($social_cta):?>
                    <h4 class="social-cta">
                        follow us on:
                    </h4>
                    <?php endif;?>
                    <ul class="list-inline">
                        <?php $facebook = get_theme_mod(esc_html__('facebook_url_field'));
                                if($facebook) : ?>
                        <li><a href="<?php echo $facebook;?>" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i> </a></li>
                            <?php endif;
                            $twitter = get_theme_mod( esc_html__('twitter_url_field'));
                                if($twitter) :?>
                        <li><a href="<?php echo $twitter;?>" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i> </a></li>
                            <?php endif;
                            $gmb = get_theme_mod(esc_html__('google_plus_url_field'));
                                if($gmb) : ?>
                        <li><a href="<?php echo $gmb;?>" target="_blank" rel="nofollow"><i class="fa fa-google-plus"></i> </a></li>
                            <?php endif;
                           $yelp = get_theme_mod(esc_html__('yelp_url_field'));
                            if($yelp):?>
                        <li><a href="<?php echo $yelp;?>" target="_blank" rel="nofollow"><i class="fa fa-yelp"></i> </a></li>
                            <?php endif;?>
                    </ul>
                </div>
            </li>
        </ul>




        <div class="clear"></div>
    </div>



</div><!-- #footer-disclaimer -->
