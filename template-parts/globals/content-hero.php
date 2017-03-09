<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 2/28/2017
 * Time: 9:24 AM
 */
if(is_singular('services')){
    $page_title = get_field('service_name');
}elseif(is_home()){
    $page_title = single_post_title('', false);
}else{
    $page_title = get_post_meta($post->ID,'page title', true);
}
?>

<?php if (has_post_thumbnail( ) && ! is_home()) :?>
<section class="hero" id="hero" style="background: url('<?php the_post_thumbnail_url('page-hero') ?>') no-repeat 50% 75% scroll">
    <div class="container">
        <div class="row">
            <h1><?php echo $page_title ? $page_title : the_title();?></h1>
            <?php if(is_singular('services')){
               printf( '%s', '<div class="lead">'. get_field('service_description'). '</div>');

            }?>
        </div>
    </div>
</section>
<?php else:?>
    <section class="hero" id="hero">
        <div class="container">
            <div class="row">
                <h1><?php echo $page_title ? $page_title : the_title();?></h1>
                <?php if(is_singular('services')){
                    printf( '%s', '<div class="lead">'. get_field('service_description'). '</div>');

                }?>
            </div>
        </div>
    </section>
<?php endif;?>
