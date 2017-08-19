<?php get_header(); ?>
<div class="main single">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="post col-lg-12">
            <h1 class="post-title"><?php the_title(); ?></h1>

            <div class="post-content col-lg-10 col-lg-offset-1">
                <?php the_content(); ?>
            </div>

        </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>