<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 2/28/2017
 * Time: 9:24 AM
 */

?>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo get_theme_mod('schema_logo', get_template_directory_uri() . '/assets/img/logo.png') ;?>" alt="<?php bloginfo( 'name' ); ?>" id="logo"/>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <a href="tel:<?php echo get_theme_mod('schema_phone_number') ;?>">
                <p class="navbar-text"><i class="fa fa-phone fa-x2"></i><?php echo get_theme_mod('schema_phone_number') ;?></p>
            </a>
            <?php
            wp_nav_menu( array(
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
