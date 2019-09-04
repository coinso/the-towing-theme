<?php


$services = get_field('hp_services');
if( $services ):
    ;?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-push-2 col-sm-12 section-title-wrap">
                <h3 class="section-title"><?php the_field('hp_services_title');?></h3>
            </div>
        </div>
        <?php if ( !wp_is_mobile() ){
            echo '<hr class="divider">';
        }?>
        <div class="row">
            <?php foreach( $services as $service ):
                ?>
                <div class="service-card panel panel-default col-md-3 col-sm-6 col-xs-6">
                    <a href="<?php echo get_permalink( $service->ID ); ?>">
                        <?php $photo = get_field('service_image', $service->ID);
                        if ( has_post_thumbnail( $service->ID ) ) {
                            echo get_the_post_thumbnail( $service->ID, 'medium', array('class' => 'hp-service-img') );
                        }?>
<!--                        <img src="--><?php //echo $photo['url']; ?><!--" alt="" />-->
                        <div class="overlay"></div>

                        <h3 class="card-title">
                            <?php echo get_the_title( $service->ID ); ?>
                            <br>
                            <i class="fa fa-caret-down service-card-read-more"></i>
                        </h3>
                    </a>
                    <!-- /.overlay -->
                </div>
            <?php endforeach; ?>
        </div>

    </div>
<?php endif; ?>