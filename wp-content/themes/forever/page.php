<?php
/**
 * The template for displaying pages
 *
 */

get_header(); ?>

<div id="main">
     <div id="content">
      
			<?php
			    // TO SHOW THE PAGE CONTENTS
			    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
			        <div class="entry-content-page">
			            <?php the_content(); ?> <!-- Page Content -->
			        </div><!-- .entry-content-page -->
			
			    <?php
			    endwhile; //resetting the page loop
			    wp_reset_query(); //resetting the page query
			    ?>
 </div>
	<?php wp_reset_postdata(); ?>
     </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
