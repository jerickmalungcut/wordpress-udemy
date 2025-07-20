<?php get_header(); ?>

    <!-- Content -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="hero" style="background-image: url('http://wp-dev.local/wp-content/uploads/2025/07/breakingbad-1619015799364-553.jpg');">
                        <div class="overlay" style="min-height: 800px">
                            <div class="container">
                                <div class="hero-items">
                                    <h1>Lorem ipsum dolor sit amet</h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis velit itaque amet maxime, iusto ipsa sunt quasi a expedita voluptatem at possimus, laudantium sint harum quas ad obcaecati ab officia.</p>
                                    <a href="#" class="btn btn-primary">Learn More</a>
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
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 3,
                                    'category__in'  => array(7,4,10),
                                    'category__not_in' => array(1)
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
