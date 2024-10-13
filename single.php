<?php get_header(); ?>

<main>
    <h1><?php the_title(); ?></h1>
    <div>
        <?php
        while (have_posts()) :
            the_post();
            the_content();
        endwhile;
        ?>
    </div>

    <div class="post-meta">
        <p>Published on: <?php the_time('F j, Y'); ?> by <?php the_author(); ?></p>
        <p>Categories: <?php the_category(', '); ?></p>
        <p>Tags: <?php the_tags('', ', '); ?></p>
    </div>
</main>

<?php get_footer(); ?>
