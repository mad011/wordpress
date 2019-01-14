<?php get_header(); ?>
<div class="container">
    <div class="row">
        <?php
        $args = array(
            'posts_per_page' => 2,

        );
        $wp_query = new WP_Query($args);

        if ($wp_query->have_posts()):

            while ($wp_query->have_posts()): the_post(); ?>


            <?php endwhile; ?>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>

        <?php
        if (have_posts()):

            while (have_posts()): the_post(); ?>


            <?php endwhile;

        endif;

        ?>
    </div>
</div>
<?php get_footer(); ?>