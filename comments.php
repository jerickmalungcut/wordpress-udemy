<?php
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ($comments_number === 1) {
                printf(__('One comment on &ldquo;%1$s&rdquo;', 'wp-devs'), get_the_title());
            } else {
                printf(
                    _n('%1$s comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', $comments_number, 'wp-devs'),
                    number_format_i18n($comments_number),
                    get_the_title()
                );
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'      => 'ol',
                'short_ping' => true,
                'avatar_size'=> 48,
            ));
            ?>
        </ol>

        <?php the_comments_navigation(); ?>

    <?php endif; ?>

    <?php
    // If comments are closed and there are comments, leave a note.
    if (!comments_open() && get_comments_number()) :
    ?>
        <p class="no-comments"><?php _e('Comments are closed.', 'wp-devs'); ?></p>
    <?php endif; ?>

    <?php comment_form(); ?>

</div>