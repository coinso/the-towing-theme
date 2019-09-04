<?php
function coiso_customize_register($wp_customize){



   
    ///***********Footer area ************/

    //Footer scroll up background color settings
    $wp_customize->add_setting('footer_scroll_up_background_color', array(
        'default' => _x('#000000', 'coinso_towing_theme'),
        'type'  => 'theme_mod',
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    //Footer scroll up background control
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_scroll_up_background_color', array(
        'label' => __('Footer Scroll Up Background Color', 'coinso_towing_theme'),
        'section'  => 'Footer',
        'priority' => 10
    )));


    /**
    * Benefits Panel
    **/

    $wp_customize->add_section('benefits', array(
        'title'  => __('Main Benefits', 'coinso_towing_theme' ),
        'description' => sprintf(__('Main benefits bar', 'coinso_towing_theme')),
        'priority'  => 160
    ));
    //Benefits-Box-1
    //Benefits-Box-1 Image Settings
    $wp_customize->add_setting('benefit_1_image', array(
        'default' => get_template_directory_uri() . '/assets/img/24-hr-service.png',
        'type'  => 'theme_mod',
        'sanitize_callback' => ''
    ));
    //Service-Box-1 Image control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'benefit_1_image', array(
        'label' => __('Benefit 1 image','coinso_towing_theme' ),
        'section' => 'benefits',
        'settings' => 'benefit_1_image'
    )));
    //Benefit-Box-1 Heading Settings
    $wp_customize->add_setting('benefit_1_heading', array(
        'default' => _x('Benefit 1 heading', 'coinso_towing_theme'),
        'type'  => 'theme_mod',
        'sanitize_callback' => ''
    ));
    //Service-Box-1 Heading Control
    $wp_customize->add_control('benefit_1_heading', array(
        'label' => __('Benefit 1 heading', 'coinso_towing_theme'),
        'section'  => 'benefits',
        'priority' => 20
    ));
    //Benefits-Box-2
    //Benefits-Box-2 Image Settings
    $wp_customize->add_setting('benefit_2_image', array(
        'default' => get_template_directory_uri() . '/assets/img/certified.png',
        'type'  => 'theme_mod',
        'sanitize_callback' => ''
    ));
    //Service-Box-2 Image control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'benefit_2_image', array(
        'label' => __('Benefit 2 image','coinso_towing_theme' ),
        'section' => 'benefits',
        'settings' => 'benefit_2_image'
    )));
    //Benefit-Box-2 Heading Settings
    $wp_customize->add_setting('benefit_2_heading', array(
        'default' => _x('Benefit 2 heading', 'coinso_towing_theme'),
        'type'  => 'theme_mod',
        'sanitize_callback' => ''
    ));
    //Service-Box-2 Heading Control
    $wp_customize->add_control('benefit_2_heading', array(
        'label' => __('Benefit 2 heading', 'coinso_towing_theme'),
        'section'  => 'benefits',
        'priority' => 20
    ));
    //Benefits-Box-3
    //Benefits-Box-3 Image Settings
    $wp_customize->add_setting('benefit_3_image', array(
        'default' => get_template_directory_uri() . '/assets/img/local-service.png',
        'type'  => 'theme_mod',
        'sanitize_callback' => ''
    ));
    //Service-Box-3 Image control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'benefit_3_image', array(
        'label' => __('Benefit 3 image','coinso_towing_theme' ),
        'section' => 'benefits',
        'settings' => 'benefit_3_image'
    )));
    //Benefit-Box-3 Heading Settings
    $wp_customize->add_setting('benefit_3_heading', array(
        'default' => _x('Benefit 3 heading', 'coinso_towing_theme'),
        'type'  => 'theme_mod',
        'sanitize_callback' => ''
    ));
    //Service-Box-3 Heading Control
    $wp_customize->add_control('benefit_3_heading', array(
        'label' => __('Benefit 3 heading', 'coinso_towing_theme'),
        'section'  => 'benefits',
        'priority' => 20
    ));
    //Benefits-Box-4
    //Benefits-Box-4 Image Settings
    $wp_customize->add_setting('benefit_4_image', array(
        'default' => get_template_directory_uri() . '/assets/img/trustful.png',
        'type'  => 'theme_mod',
        'sanitize_callback' => ''
    ));
    //Service-Box-1 Image control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'benefit_4_image', array(
        'label' => __('Benefit 4 image','coinso_towing_theme' ),
        'section' => 'benefits',
        'settings' => 'benefit_4_image'
    )));
    //Benefit-Box-1 Heading Settings
    $wp_customize->add_setting('benefit_4_heading', array(
        'default' => _x('Benefit 4 heading', 'coinso_towing_theme'),
        'type'  => 'theme_mod',
        'sanitize_callback' => ''
    ));
    //Service-Box-1 Heading Control
    $wp_customize->add_control('benefit_4_heading', array(
        'label' => __('Benefit 4 heading', 'coinso_towing_theme'),
        'section'  => 'benefits',
        'priority' => 20
    ));

    /*
     * Hero Section
     * */

    //Main Hero section
    $wp_customize->add_section('hero', array(
        'title' => __('Hero Section', 'coinso_towing_theme'),
        'description'   => sprintf(__('Options for home page hero section', 'coinso_towing_theme')),
        'priority'  => 130
    ));
    //Main Background Image settings
    $wp_customize->add_setting('hero_image', array(
        'default' => get_template_directory_uri() . '/assets/img/driver.jpg',
        'type'  => 'theme_mod',
        'sanitize_callback' => ''
    ));

    //Main Background Image control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
        'label' => __('Background Image','compass-tow-truck' ),
        'section' => 'hero',
        'settings' => 'hero_image'
    )));
    //Hero settings
    $wp_customize->add_setting('hero_heading', array(
        'default' => _x('Hero Section Heading', ''),
        'type'  => 'theme_mod',
        'sanitize_callback' => ''
    ));

    //Hero control
    $wp_customize->add_control('hero_heading', array(
        'label' => __('Hero Section', 'coinso_towing_theme'),
        'section'  => 'hero',
        'priority' => 20
    ));

    //Hero Text settings
    $wp_customize->add_setting('hero_text', array(
        'default' => _x('A new towing site', ''),
        'type'  => 'theme_mod',
        'sanitize_callback' => ''
    ));

    //Hero Text control
    $wp_customize->add_control('hero_text', array(
        'label' => __('description', 'coinso_towing_theme'),
        'section'  => 'hero',
        'priority' => 20
    ));
    //Main Background Image settings
    $wp_customize->add_setting('banner_iamge', array(
        'default' => get_template_directory_uri() . '/assets/img/Austin.jpg',
        'type'  => 'theme_mod',
        'sanitize_callback' => ''
    ));

    //Main Background Image control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_iamge', array(
        'label' => __('Background Image','coinso_towing_theme' ),
        'section' => 'banner',
        'settings' => 'banner_iamge'
    )));
    /*
     *
     * Nav bar
     */


}
add_action('customize_register', 'coiso_customize_register');