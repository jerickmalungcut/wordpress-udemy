<?php get_header(); ?>

    <!-- Content -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <?php
                    // Fetching theme customizer settings for the hero section
                    // Default values are provided in case the settings are not set
                    $hero_title = get_theme_mod('set_hero_title', 'Welcome to Our Site');
                    $hero_subtitle = get_theme_mod('set_hero_subtitle', 'This is a subtitle for the hero section.');
                    $hero_button_text = get_theme_mod('set_hero_button_text', 'Learn More');
                    $hero_button_link = get_theme_mod('set_hero_button_link', '#');
                    $hero_height = get_theme_mod('set_hero_height', '800');
                    $hero_background = wp_get_attachment_url(get_theme_mod('set_hero_background'));
                    ?>

                    <section class="hero" style="background-image: url('<?php echo $hero_background ?>');">
                        <div class="overlay" style="min-height: <?php echo esc_attr($hero_height); ?>px;">
                            <div class="container">
                                <div class="hero-items">
                                    <h1><?php echo $hero_title; ?></h1>
                                    <p><?php echo nl2br($hero_subtitle); ?></p>
                                    <a href="<?php echo $hero_button_link ?>" class="btn btn-primary"><?php echo $hero_button_text ?></a>
                                </div>
                            </div>
                        </div>
                        
                    </section>

                    <section class="services">
                        <h2>Services</h2>
                        <div class="container">
                            <div class="services-item">
                                <?php 
                                    if(is_active_sidebar('services-1')) {
                                        dynamic_sidebar('services-1');
                                    } else {
                                        echo '<p>Please add a widget to the Services 1 area.</p>';
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                    if(is_active_sidebar('services-2')) {
                                        dynamic_sidebar('services-2');
                                    } else {
                                        echo '<p>Please add a widget to the Services 2 area.</p>';
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                    if(is_active_sidebar('services-3')) {
                                        dynamic_sidebar('services-3');
                                    } else {
                                        echo '<p>Please add a widget to the Services 3 area.</p>';
                                    }
                                ?>
                            </div>
                        </div>
                    </section>
                    <section class="home-blog">
                        <h2>Latest News</h2>
                        <div class="container">
                                <?php
                                $per_page = get_theme_mod('set_per_page', 3); // Get the number of posts per page from theme customizer
                                $category_include = get_theme_mod('set_category_include', '7,4,10'); // Categories to include
                                $category_exclude = get_theme_mod('set_category_exclude', '1'); // Categories to exclude
                                

                                // Custom query to fetch latest posts from specific categories
                                // Categories with IDs 7, 4, and 10 are included, while category with ID 1 is excluded
                                // Adjust the category IDs as per your requirements

                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => $per_page,
                                    'category__in'  => explode(',', $category_include), // Include specific categories
                                    'category__not_in' => explode(',', $category_exclude) // Exclude specific categories
                                ); // Arguments for the custom query

                                $postlist = new WP_Query($args); // Custom query to fetch posts

                                    if ($postlist -> have_posts()) :
                                        while ($postlist->have_posts()) : $postlist->the_post();
                                ?>
                                <article class="latest-news">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(275, 275)); ?></a>
                                        
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        
                                        <div class="meta-info">
                                            <p>
                                                by <span><?php the_author_posts_link(); ?></span>
                                                Categories: <span><?php the_category(' '); ?></span>
                                                Tags: <?php the_tags('', ','); ?>
                                            </p>
                                            <p><span><?php echo get_the_date(); ?></span></p>
                                            
                                        </div>
                                        <div class="post-content">
                                            <?php the_excerpt(); ?>
                                        </div>
                                </article>
                                <?php
                                endwhile;
                                wp_reset_postdata(); // Reset the post data after the custom query
                                else :
                                ?>
                                <p>Nothing yet to be displayed.</p>
                                
                                <?php endif; ?>
                      
                        </div> <!-- End of .container -->
                        
                        
                    </section>
                </main>
            </div> <!-- End of #primary -->
        </div> <!-- End of #content -->
    </div> <!-- End of #page -->
    
<?php get_footer(); ?>
