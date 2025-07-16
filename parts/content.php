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