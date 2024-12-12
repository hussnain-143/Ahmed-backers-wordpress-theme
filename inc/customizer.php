<?php

function ahmed_backers_customizer($wp_customize) {

    // Add Panel
    $wp_customize->add_panel('ahmed_backers_panel', array(
        'title'       => __('Ahmed Backers Setting'),
        'description' => 'Customize the background color of the website',
        'priority'    => 10,
    ));

    // Add Section
    $wp_customize->add_section('ahmed_backers_color_section', array(
        'title' => __('Ahmed Backers Color Section'),
        'panel' => 'ahmed_backers_panel',
    ));
    //   <====> Customizer for Back ground color <====>
    // Add Setting
    $wp_customize->add_setting('ahmed_backers_color', array(
        'type'              => 'theme_mod',  //  or  'option'
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color', // for text sanitize_text_field
        'transport'         => 'refresh',    // or 'postMessage'
        'default'           => '#EFEFEF',
    ));

    // Add Control
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'ahmed_backers_color', 
        array(
            'label'       => __('Background Color'),
            'description' => 'Choose a background color for the website',
            'section'     => 'ahmed_backers_color_section',
            'settings'    => 'ahmed_backers_color',
        )
    ));


     //   <====> Customizer for Back ground color <====>
    // Add Section
    $wp_customize->add_section('ahmed_backers_heading_section', array(
        'title' => __('Ahmed Backers Heading Section'),
        'panel' => 'ahmed_backers_panel',
    ));
    // Add Setting
    $wp_customize->add_setting('ahmed_backers_heading', array(
        'type'              => 'theme_mod',  //  or  'option'
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field', // for text 'sanitize_text_field' and for color 'sanitize_hex_color'
        'default'           => 'Featured Deals for Ahmed Backers',
        'transport'         => 'refresh',    // or 'postMessage'
    ));

    // Add Control
    $wp_customize->add_control('ahmed_backers_heading', 
        array(
            'label'       => __('Deal Heading'),
            'description' => 'Change the deals heading form Home page for the website',
            'type'        => 'text',
            'section'     => 'ahmed_backers_heading_section',
            'settings'    => 'ahmed_backers_heading',
        )
    );
}

add_action('customize_register', 'ahmed_backers_customizer');

?>
