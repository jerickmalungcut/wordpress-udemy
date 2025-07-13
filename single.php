<?php get_header(); ?>
    <div id="primary">
        <main id="main">
            <div class="container">
                
                 <?php while(have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header>
                             <h2><?php the_title(); ?></h2>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
                            
                            <div class="meta-info">
                                <p>Posted in <?php echo get_the_date(); ?> by: <?php the_author_posts_link(); ?> </p>
                                <p>Categories: <?php the_category(' '); ?></p>
                                <p>Tags: <?php the_tags('', ', '); ?></p>
                            </div>
                        </header> 
                                       
                        <div class="post-content">
                            <?php the_content(); ?>
                            <?php wp_link_pages(); ?> <!-- For paginated posts / Need to add page breaks on the post first -->
                        </div>
                        </article>

                        <!-- Pagination -->
                                      <div class="wpdevs-pagination">
                                        <div class="pages next">
                                            <?php next_post_link("&laquo; %link"); ?>
                                        </div>
                                        <div class="pages old">
                                            <?php previous_post_link('%link &raquo;'); ?>
                                        </div>
                                      </div>

                    <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) {
                        comments_template();
                    }
                    ?>

                <?php endwhile;?>
            </div>
        </main>
    </div>
<?php get_footer(); ?>