<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 3/1/2017
 * Time: 12:31 PM
 */
$cps_local_phone = get_field('cps_local_phone');
$optin_btn_link = get_field('optin_btn_link');
?>
<section class="footer-optin" id="optin">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center footer-optin-content">
                <h3 class="optin-title section-title">
                    <?php the_field('optin_title');?>
                </h3>
                <div class="lead about-optin-text">
                    <?php the_field('optin_desc');?>
                </div>
                <div class="optin-btn-wrap">
                    <a href="tel:<?php echo $cps_local_phone ? $cps_local_phone : $optin_btn_link;?>" class="btn optin-btn btn-warning btn-lg">
                        <i class="fa fa-phone"></i><?php the_field('optin_btn_text');?>
                    </a>
                </div>
            </div>
        </div>
        <div class="row top-optin-btn-wrap">

        </div>
    </div>
</section>
