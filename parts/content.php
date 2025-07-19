<article>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <?php if(has_post_thumbnail()) : ?> <!-- Display featured image if available -->
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>

    <?php else : ?> 
        <img src="<?php echo get_template_directory_uri() . "/images/default-image.jpg"; ?>" alt="Default Image" class="default-image" />
    <?php endif; ?>

    
    
    <div class="meta-info">
        <p>Posted in <?php echo get_the_date(); ?> by: <?php the_author_posts_link(); ?> </p>
        <?php if (has_category()) : ?>
            <p>Categories: <?php the_category(', '); ?></p>
        <?php endif; ?>
        <?php if (has_tag()) : ?>
            <p>Tags: <?php the_tags('', ', '); ?></p>
        <?php endif; ?>
    </div>
    <div class="post-content">
        <?php the_excerpt(); ?>
    </div>
</article>