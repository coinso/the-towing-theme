<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 3/1/2017
 * Time: 9:58 AM
 */
?>


<section id="hp-about">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12">
                <div class="row inner-row">
                    <div class="col-sm-12 hp-section-title-wrap">
                        <h3 class="section-title">
                            <?php the_field('hp_optin_title');?>
                        </h3>
                        <hr>
                    </div>
                </div>
                <div class="row inner-row">
                    <div class="col-md-5 col am-12 vid-about">
                        <?php $about_logo = get_field('hp_optin_logo');?>
                        <img src="<?php echo $about_logo['url'] ;?>" alt="<?php echo $about_logo['alt'] ;?>">
                    </div>
                    <div class="col-md-7 col am-12 text-about">
                        <?php the_field('hp_optin_text');?>
                        <a href="<?php the_field('hp_optin_link');?>" class="btn btn-optin">
                            <?php the_field('hp_optin_btn_text');?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
