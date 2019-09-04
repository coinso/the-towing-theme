<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 3/12/2017
 * Time: 7:36 AM
 */
/**
 * Template part for displaying contact page content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package the_towing_theme
 */
$map  = get_field('company_map', 'option');
?>
<div class="row main-row">
    <div class="col-md-6 col-sm-12" id="contact-form">
        <?php the_content();?>
    </div>
    <div class="col-md-6 col-sm-12" id="locations">
        <?php echo $map;?>
    </div>
</div>
