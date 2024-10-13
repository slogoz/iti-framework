<?php get_header(); ?>

<main>
    <h1><?php the_archive_title(); ?></h1>

    <?php if (have_posts()) : ?>
        <div class="archive-posts">
            <?php
            while (have_posts()) :
                the_post(); ?>
                <article <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-meta">
                        <p>Published on: <?php the_time('F j, Y'); ?> by <?php the_author(); ?></p>
                        <p>Categories: <?php the_category(', '); ?></p>
                        <p>Tags: <?php the_tags('', ', '); ?></p>
                    </div>
                    <div class="entry-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>

        <div class="pagination">
            <?php
            the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => __('&laquo; Previous', 'iti'),
                'next_text' => __('Next &raquo;', 'iti'),
            ));
            ?>
        </div>

    <?php else : ?>
        <p><?php _e('No posts found.', 'iti'); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
