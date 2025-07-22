<?php get_header(); ?>
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="id" class="site-main">
                <div class="container">
                    <div class="error-404">
                        <header>
                            <h1><?php _e('Page not found', 'wp-devs'); ?></h1>
                            <p><?php _e('Unfortunately, the page you tried to reach does not exist on this site.', 'wp-devs'); ?></p>
                        </header>

                        <div class="error">
                            <p><?php _e('How about doing a search?', 'wp-devs'); ?></p>
                            <?php get_search_form(); ?> <!-- This function displays the search form -->
                        
                            <?php the_widget('WP_Widget_Recent_Posts', 
                            array(
                                'title'    =>  __('Latest Posts'),
                                'number'   =>  3,
                                )); ?>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

<?php get_footer(); ?>