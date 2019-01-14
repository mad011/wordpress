<div class="col-md-12">
    <h3><?php the_title(); ?></h3>
    <div class="img-content"><?php the_post_thumbnail('thumbnail'); ?></div>

    <div>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>,
        <!--    in --><?php //the_category(); ?><!--</small>-->


        <p><?php the_content(); ?></p>
    </div>
</div>
</div>
<hr>
