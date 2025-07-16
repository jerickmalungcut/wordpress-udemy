<?php get_header(); ?>

    <!-- Header Image -->
    <img src="<?php header_image(); ?>" alt="" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" class="header-image" />
    <!-- Content -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <?php the_archive_title('<h1 class="archive-title">', '</h1>'); ?>
                    <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
                        <div class="container">
                            <div class="archive-items">
                                <?php
                                    if (have_posts()) :
                                        while (have_posts()) : the_post();
                                    ?>
                                        <?php get_template_part('parts/content-archive', 'archive'); ?> <!-- 2nd parameter is optional, used for clarity -->
                                    <?php
                                    endwhile;
                                    ?>
                                    <!-- Pagination -->
                                      <div class="wpdevs-pagination">
                                        <div class="pages new">
                                            <?php previous_posts_link("<< Newer posts"); ?>
                                        </div>
                                        <div class="pages old">
                                            <?php next_posts_link("Older posts >>"); ?>
                                        </div>
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
