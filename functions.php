<?php

require get_template_directory() . '/inc/customizer.php'; // Include customizer file

function wpdevs_load_scripts() {
    // wp_enqueue_style('wpdevs-style', get_stylesheet_uri(), array(), '1.0', 'all'); //To get the main stylesheet
    wp_enqueue_style('wpdevs-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all'); // You will remove this after you have created the style.css file in the theme directory.
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null);
    wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), 1.0, true); // Load the dropdown.js script
}

add_action('wp_enqueue_scripts', 'wpdevs_load_scripts'); // Hook to enqueue styles and scripts

 

function wpdevs_config() {
    // Register navigation menus
    register_nav_menus(
        array(
            'wp_devs_main_menu' => __('Main Menu', 'wpdevs'),
            'wp_devs_footer_menu' => __('Footer Menu', 'wpdevs'),
        )
    ); 

    $args = array(
        'height'    => 225,
        'width'    => 1920
    );
    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails'); // Enable featured images
    //add_theme_support('title-tag'); // Enable dynamic title tag
    //add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption')); // Enable HTML5 support
    add_theme_support('custom-logo', array(
        'height'      => 110,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    )); // Enable custom logo support
    add_theme_support('automatic-feed-links'); // Enable automatic feed links
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    )); // Enable HTML5 support for search form, comment form, comment list, gallery, and caption
    add_theme_support('title-tag'); // Enable dynamic title tag support
}

add_action('after_setup_theme', 'wpdevs_config', 0);

add_action('widgets_init', 'wpdevs_sidebars');
function wpdevs_sidebars() {
    register_sidebar(
        // array(
        //     'name'          => __('Sidebar', 'wpdevs'),
        //     'id'            => 'sidebar-1',
        //     'description'   => __('Widgets in this area will be shown on all posts and pages.', 'wpdevs'),
        //     'before_widget' => '<div id="%1$s" class="widget %2$s">',
        //     'after_widget'  => '</div>',
        //     'before_title'  => '<h2 class="widget-title">',
        //     'after_title'   => '</h2>',
        // )

        array(
            'name'  => 'Blog Sidebar',
            'id'    => 'sidebar-blog',
            'description' => 'Widgets in this area will be shown on blog posts.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
        );

    //Services
    register_sidebar(
        array(
            'name'  => 'Service 1',
            'id'    => 'services-1',
            'description' => 'First Service Widget Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name'  => 'Service 2',
            'id'    => 'services-2',
            'description' => 'Second Service Widget Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name'  => 'Service 3',
            'id'    => 'services-3',
            'description' => 'Third Service Widget Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );
}

if(!function_exists('wp_body_open')) {
    function wp_body_open() {
        do_action('wp_body_open');
    }
} // Fallback for older versions of WordPress