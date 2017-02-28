<?php
function barbareshet_customize_register($wp_customize){
   
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

    //
    //=================Local Business Schema===============================//
    //
    // Local Business Schema
    $wp_customize->add_section('Schema', array(
        'title' => __('Local Business Schema', 'coinso_towing_theme'),
        'description'   => sprintf(__('Options for Local Business Schema', 'coinso_towing_theme')),
        'priority'  => 30
    ));
    //Brand Logo settings
    $wp_customize->add_setting('schema_logo', array(
        'default' => get_template_directory_uri() . '/assets/img/logo.png',
        'type'  => 'theme_mod',
        'sanitize_callback' => ''
    ));

    //Brand Logo control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'schema_logo', array(
        'label' => __('Logo','coinso_towing_theme' ),
        'section' => 'Schema',
        'settings' => 'schema_logo'
    )));
    //Schema Type settings
    $wp_customize->add_setting('schema_type', array(
        'default' => _x('LocalBusiness', 'coinso_towing_theme'),
        'type'  => 'theme_mod',
        'sanitize_callback' => ''
    ));

    //Schema Type control
    $wp_customize->add_control('schema_type', array(
        'label' => __('Schema Type', 'coinso_towing_theme'),
        'section'  => 'Schema',
        'priority' => 20
    ));
    //Brand Name settings
    $wp_customize->add_setting('schema_brand_name', array(
        'default' => _x(get_bloginfo( 'name' ), 'coinso_towing_theme'),
        'type'  => 'theme_mod',
        'sanitize_callback' => ''
    ));

    //Brand Name control
    $wp_customize->add_control('schema_brand_name', array(
        'label' => __('Brand Name', 'coinso_towing_theme'),
        'section'  => 'Schema',
        'priority' => 20
    ));
    //Brand Description settings
    $wp_customize->add_setting('schema_brand_description', array(
        'default' => _x(get_bloginfo( 'description' ), 'coinso_towing_theme'),
        'type'  => 'theme_mod',
        'sanitize_callback' => ''
    ));

    //Brand Description control
    $wp_customize->add_control('schema_brand_description', array(
        'label' => __('Brand Description', 'coinso_towing_theme'),
        'section'  => 'Schema',
        'priority' => 20
    ));
    //Phone number settings
    $wp_customize->add_setting('schema_phone_number', array(
        'default' => _x('(123) 456-7890', 'coinso_towing_theme'),
        'type'  => 'theme_mod',
        'sanitize_callback' => ''
    ));

    //Phone number control
    $wp_customize->add_control('schema_phone_number', array(
        'label' => __('Phone Number', 'text-domain'),
        'section'  => 'Schema',
        'priority' => 20
    ));
    //Street Address settings
    $wp_customize->add_setting('schema_street_address', array(
        'default' => _x('Street Address', 'coinso_towing_theme'),
        'type'  => 'theme_mod',
        'sanitize_callback' => ''
    ));

    //Street Address control
    $wp_customize->add_control('schema_street_address', array(
        'label' => __('Street Address', 'text-domain'),
        'section'  => 'Schema',
        'priority' => 20
    ));
    //City settings
    $wp_customize->add_setting('schema_city', array(
        'default' => _x('City', 'coinso_towing_theme'),
        'type'  => 'theme_mod',
        'sanitize_callback' => ''
    ));

    //City control
    $wp_customize->add_control('schema_city', array(
        'label' => __('City', 'coinso_towing_theme'),
        'section'  => 'Schema',
        'priority' => 20
    ));
    //Region settings
    $wp_customize->add_setting('schema_region', array(
        'default' => _x('Region', 'coinso_towing_theme'),
        'type'  => 'theme_mod',
        'sanitize_callback' => ''
    ));

    //Region control
    $wp_customize->add_control('schema_region', array(
        'label' => __('Region', 'coinso_towing_theme'),
        'section'  => 'Schema',
        'priority' => 20
    ));
    //Zip settings
    $wp_customize->add_setting('schema_zip', array(
        'default' => _x('11111', 'coinso_towing_theme'),
        'type'  => 'theme_mod',
        'sanitize_callback' => ''
    ));

    //Zip control
    $wp_customize->add_control('schema_zip', array(
        'label' => __('Zip Code', 'coinso_towing_theme'),
        'section'  => 'Schema',
        'priority' => 20
    ));
    //Zip settings
    $wp_customize->add_setting('schema_map', array(
        'default' => _x(' ', 'coinso_towing_theme'),
        'type'  => 'theme_mod',
        'sanitize_callback' => ''
    ));

    //Zip control
    $wp_customize->add_control('schema_map', array(
        'label' => __('Google Map', 'coinso_towing_theme'),
        'section'  => 'Schema',
        'priority' => 20
    ));
    /*====================*/
    //**
    // Social Panel
    //**

    // Add Social Panel
    $wp_customize->add_panel( 'Social', array(
        'priority' => 30,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Social Links', 'coinso_towing_theme' ),
        'description' => __( 'Put in the social links for this site.', 'coinso_towing_theme' ),
    ) );
    // Add Social Section
    $wp_customize->add_section( 'social_links', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Social Links', 'coinso_towing_theme' ),
        'description' => '',
        'panel' => 'Social',
    ) );

    // Add Facebook settings

    $wp_customize->add_setting( 'facebook_url_field', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => '',
        'sanitize_callback' => 'esc_url',
    ) );
    // Add Facebook control

    $wp_customize->add_control( 'facebook_url_field', array(
        'type' => 'url',
        'priority' => 10,
        'section' => 'social_links',
        'label' => __( 'Facebook URL Field', 'coinso_towing_theme' ),
        'description' => 'Put in the facebook page link.',
    ) );

    // Add Twitter settings

    $wp_customize->add_setting( 'twitter_url_field', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => '',
        'sanitize_callback' => 'esc_url',
    ) );
    // Add Twitter control

    $wp_customize->add_control( 'twitter_url_field', array(
        'type' => 'url',
        'priority' => 10,
        'section' => 'social_links',
        'label' => __( 'Twitter URL Field', 'coinso_towing_theme' ),
        'description' => 'Put in the twitter page link.',
    ) );

    // Add Google Plus settings

    $wp_customize->add_setting( 'google_plus_url_field', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => '',
        'sanitize_callback' => 'esc_url',
    ) );
    // Add Google Plus control

    $wp_customize->add_control( 'google_plus_url_field', array(
        'type' => 'url',
        'priority' => 10,
        'section' => 'social_links',
        'label' => __( 'Google Plus URL Field', 'coinso_towing_theme' ),
        'description' => 'Put in the google plus page link.',
    ) );

    // Add Yelp settings

    $wp_customize->add_setting( 'yelp_url_field', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => '',
        'sanitize_callback' => 'esc_url',
    ) );
    // Add Yelp Plus control

    $wp_customize->add_control( 'yelp_url_field', array(
        'type' => 'url',
        'priority' => 10,
        'section' => 'social_links',
        'label' => __( 'Yelp URL Field', 'coinso_towing_theme' ),
        'description' => 'Put in the Yelp page link.',
    ) );

    // Add bbb settings

    $wp_customize->add_setting( 'bbb_url_field', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => '',
        'sanitize_callback' => 'esc_url',
    ) );
    // Add bbb control

    $wp_customize->add_control( 'bbb_url_field', array(
        'type' => 'url',
        'priority' => 10,
        'section' => 'social_links',
        'label' => __( 'BBB URL Field', 'coinso_towing_theme' ),
        'description' => 'Put in the BBB page link.',
    ) );
}
add_action('customize_register', 'barbareshet_customize_register');