<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head(); // This function is important for WordPress to load styles and scripts ?>
</head>
<body <?php body_class(); ?>> <!-- body_class() adds classes to the body tag based on the context of the page, like post type, category, etc. -->
    <?php wp_body_open(); ?> <!-- This function is important for WordPress to hook into the body opening tag -->    
    
    <div id="page" class="site">

    <!-- Header -->
        <header>
            <section class="top-bar">
                <div class="container">
                    <div class="logo">
                        <!-- Display the custom logo -->
                        <?php if (has_custom_logo()) {
                            the_custom_logo();
                        } else { ?>
                            <!-- <a href="<?//php echo esc_url(home_url('/')); ?>" rel="home">
                                <img src="<?//php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?//php bloginfo('name'); ?>" class="logo">
                            </a> -->
                            <a href="<?php echo home_url('/'); ?>">
                                <span>
                                    <?php bloginfo('name'); ?>
                                    
                                </span>
                            </a>

                        <?php } ?>
                        <?php  ?>
                    </div>

                    <div class="searchBox">
                        <?php get_search_form(); ?> <!-- This function displays the search form -->
                    </div>
                </div>
                
            </section>

            <section class="menu-area">
                <div class="container">
                    <nav class="main-menu">
                        <!-- Mobile Menu Toggle -->
                         <button class="check-button">
                            <div class="menu-icon">
                                <div class="bar1"></div>
                                <div class="bar2"></div>
                                <div class="bar3"></div>
                            </div>
                         </button>
                        <!-- Main Menu -->
                        <?php wp_nav_menu(
                            array (
                                'theme_location' => 'wp_devs_main_menu',
                                'depth' => 2, // Adjust the depth as needed
                                
                            )
                        ); ?>
                    </nav>
                </div>
                
            </section>
        </header>