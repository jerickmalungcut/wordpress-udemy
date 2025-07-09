<?php get_header(); ?>

    <!-- Header Image -->
    <img src="<?php header_image(); ?>" alt="" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" class="header-image" />
    <!-- Content -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <h1>Blog</h1>
                        <div class="container">
                            <div class="blog-items">
                                <?php
                                    if (have_posts()) :
                                        while (have_posts()) : the_post();
                                    ?>
                                    <article>
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
                                        
                                        <div class="meta-info">
                                            <p>Posted in <?php echo get_the_date(); ?> by: <?php the_author_posts_link(); ?> </p>
                                            <p>Categories: <?php the_category(' '); ?></p>
                                            <p>Tags: <?php the_tags('', ', '); ?></p>
                                        </div>
                                        <div class="post-content">
                                            <?php the_excerpt(); ?>
                                        </div>
                                    </article>
                                    <?php
                                    endwhile;
                                    ?>
                                      <div class="wpdevs-pagination">
                                        <div class="pages new">Left</div>
                                        <div class="pages old">Right</div>
                                      </div>
                                    <?php
                                    else :
                                    ?>
                                    <p>Nothing yet to be displayed.</p>
                                    
                                    <?php endif; ?>
                            </div><!-- End of .blog-items -->

                     <?php get_sidebar('page'); ?>                   
                </div><!-- End of .container -->
                        
            </main>
            
        </div>
    </div> <!-- End of #page -->
    
<?php get_footer(); ?>
