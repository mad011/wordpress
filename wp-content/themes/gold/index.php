<?php
/**
 * Created by PhpStorm.
 * User: Alexandros
 * Date: 13/1/2019
 * Time: 6:47 μμ
 */
?>
<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <?php
            if (have_posts()):

                while (have_posts()): the_post(); ?>
                    <?php get_template_part('template-parts/content', get_post_format()); ?>

                <?php endwhile;

            endif;

            ?>
        </div>
    </div>
<?php get_footer(); ?>