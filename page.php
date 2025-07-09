<?php get_header(); ?>

    <!-- Header Image -->
    <img src="<?php header_image(); ?>" alt="" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" class="header-image" />

    <!-- Content -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">

                        <div class="container">
                            <div class="page-item">
                                <?php
                            while (have_posts()) : the_post();
                        ?>
                            <article>
                                <header><h1><?php the_title(); ?></h1></header>
                                <div class="post-content">
                                    <?php the_content(); ?>
                                </div>
                            </article>

                            <?php
                            // If comments are open or we have at least one comment, load up the comment template.
                            if (comments_open() || get_comments_number()) {
                                comments_template();
                            }
                            ?>
                        <?php endwhile; ?>
                        
                    
                            </div>

                            <!-- End of .page-item -->

                            <?php get_sidebar(); ?>
                        </div> <!-- End of .container -->
                        
                </main>
            
        </div>
    </div> <!-- End of #page -->
    
<?php get_footer(); ?>
