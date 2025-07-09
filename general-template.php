<?php
/*
    Template Name: General Template
    Description: A general template for displaying content with a header and footer.
*/
?>

<?php get_header(); ?>

    <!-- Header Image -->
    <img src="<?php header_image(); ?>" alt="" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" class="header-image" />

    <!-- Content -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">

                        <div class="container">
                            <div class="general-template">
                                <?php
                                if (have_posts()) :
                                    while (have_posts()) : the_post();
                                ?>
                                    <article>
                                        <h1><?php the_title(); ?></h1>
                                        <div class="post-content">
                                            <?php the_content(); ?>
                                        </div>
                                    </article>
                                <?php
                                endwhile;
                                else :
                                ?>
                                <p>Nothing yet to be displayed.</p>
                                
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        

                </main>
            </div>
        </div>
 <!-- End of #page -->
    
<?php get_footer(); ?>
