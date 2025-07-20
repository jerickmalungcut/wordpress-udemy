<?php

function wpdevs_customizer($wp_customize) {
    // 1 Copyright Section
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => 'Copyright Settings',
            'description' => 'Customize the copyright text displayed in the footer.',
        )
    );

    $wp_customize->add_setting(
        'set_copyright',
        array(
            'type'  => 'theme_mod',
            'default' => 'Copyright X - All rights reserved.',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'set_copyright',
        array(
            'label' => 'Copyright Information',
            'description' => 'Enter the text you want to display in the footer.',
            'section' => 'sec_copyright',
            'type' => 'text',
        )
    );

    // 2 Hero Section

    $wp_customize->add_section(
        'sec_hero',
        array(
            'title' => 'Hero Section Settings',
            'description' => 'Customize the hero section.'
        )
    );

    // Title Setting

    $wp_customize->add_setting(
        'set_hero_title',
        array(
            'type'  => 'theme_mod',
            'default' => 'Please add some title.',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'set_hero_title',
        array(
            'label' => 'Hero Title',
            'description' => 'Please type your title here.',
            'section' => 'sec_hero',
            'type' => 'text',
        )
    );

    // Subtitle Setting

    $wp_customize->add_setting(
        'set_hero_subtitle',
        array(
            'type'  => 'theme_mod',
            'default' => 'Please add some sub-title.',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'set_hero_subtitle',
        array(
            'label' => 'Hero Subtitle',
            'description' => 'Please type your sub-title here.',
            'section' => 'sec_hero',
            'type' => 'textarea',
        )
    );

    // Button Text Setting

    $wp_customize->add_setting(
        'set_hero_button_text',
        array(
            'type'  => 'theme_mod',
            'default' => 'Learn More',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'set_hero_button_text',
        array(
            'label' => 'Hero button text',
            'description' => 'Please type your button text here.',
            'section' => 'sec_hero',
            'type' => 'text',
        )
    );

    // Button URL Setting

    $wp_customize->add_setting(
        'set_hero_button_link',
        array(
            'type'  => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw', // Sanitize URL
        )
    );

    $wp_customize->add_control(
        'set_hero_button_link',
        array(
            'label' => 'Hero button link',
            'description' => 'Please type your hero button link here.',
            'section' => 'sec_hero',
            'type' => 'url',
        )
    );

    // Hero Height Setting

    $wp_customize->add_setting(
        'set_hero_height',
        array(
            'type'  => 'theme_mod',
            'default' => 800,
            'sanitize_callback' => 'absint', // Sanitize as an absolute integer
        )
    );

    $wp_customize->add_control(
        'set_hero_height',
        array(
            'label' => 'Hero height',
            'description' => 'Please type your hero height here.',
            'section' => 'sec_hero',
            'type' => 'number',
        )
    );

    // Hero Background Image Setting

    $wp_customize->add_setting(
        'set_hero_background',
        array(
            'type'  => 'theme_mod',
            'sanitize_callback' => 'absint', // Sanitize as an absolute integer
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize,
            'set_hero_background',
            array(
                'label' => 'Hero Background Image',
                'description' => 'Upload or select a background image for the hero section.',
                'section' => 'sec_hero',
                'mime_type' => 'image',
            )
        )
        );

}

add_action('customize_register', 'wpdevs_customizer'); // Hook to register customizer settings