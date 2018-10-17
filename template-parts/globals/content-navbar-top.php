<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 2/28/2017
 * Time: 9:24 AM
 */

$company_phone = get_field('company_phone', 'option');
$cps_local_phone = get_field('cps_local_phone') ? get_field('cps_local_phone') : $company_phone;

?>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle hamburger hamburger--spring" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                    <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            <?php if( wp_is_mobile() ){ ?>
                <a href="tel:<?php echo $cps_local_phone ;?>" class="navbar-text">
                    <p><i class="fa fa-phone fa-x2"></i>&nbsp;<?php  echo $cps_local_phone ;?></p>
                </a>
            <?php } ;?>
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php if( wp_is_mobile() ){
                    $logo = get_field('site_logo_small', 'option');?>
                    <img src="<?php echo $logo['url'] ;?>" alt="<?php echo $logo['alt']; ?>" id="logo"/>
                <?php } else {
                    $logo = get_field('site_logo_big', 'option');?>
                    <img src="<?php echo $logo['url'] ;?>" alt="<?php echo $logo['alt']; ?>" id="logo"/>
                <?php };?>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <?php if( !wp_is_mobile()):?>
            <a href="tel:<?php  echo $cps_local_phone ;?>" class="navbar-text">
                <p><i class="fa fa-phone fa-x2"></i>&nbsp;<?php  echo $cps_local_phone ;?></p>
            </a>
            <?php endif;?>
            <?php
            wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu' => 'main-menu',
                    'depth' => 2,
                    'container' => true,
                    'container_class' => 'row',
                    'menu_class' => 'nav navbar-nav navbar-right'

                )
            );
            ?>
        </div>


    </div>
</nav>
