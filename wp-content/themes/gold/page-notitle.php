<?php
/*
    Template name: no title
*/
?>

<?php get_header(); ?>
<?php if ( have_posts() ):
    while ( have_posts() ): the_post(); ?>



    <?php endwhile; ?>

<?php endif; ?>
<?php
//$some = $wp_query->posts;
//echo '<pre>';
//var_dump($some);
//echo '</pre>';


?>

<?php get_footer(); ?>