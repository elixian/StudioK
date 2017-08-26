<?php get_header(); ?>
<script
    type="text/javascript"
    async defer
    src="//assets.pinterest.com/js/pinit.js"
></script>
<div class="main single">
    <?php
if (have_posts()): ?>
        <?php
    while (have_posts()):
        the_post(); ?>
        <div class="post col-lg-12">
            <h1 class="post-title"><?php the_title(); ?></h1>
            <a href="https://www.pinterest.com/pin/create/button/"
              data-pin-do="buttonBookmark"
                data-pin-custom="true">
                <!-- <img src="<?php bloginfo('template_url'); ?>/images/pinit-pink.png" class="pinit-btn"/> -->
              <div class="pinit-btn"></div>
            </a>
            <div class="post-content col-lg-10 col-lg-offset-1">
                <?php the_content(); ?>
            </div>

        </div>
        <?php
    endwhile; ?>
    <?php
endif; ?>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>
