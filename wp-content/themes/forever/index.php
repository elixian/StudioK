<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @uses content.php as well as all derivatives.
 * @uses greeting.php
 * @uses recent-posts.php
 *
 * @package Forever
 * @since Forever 1.0
 */
?>

<?php get_header(); ?>
<div id="main">
     <div id="content">
          <h1>Main Area</h1>

     <?php 
     // the query
     $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1));
     ?>
     

     <?php if ( $wpb_all_query->have_posts() ) : ?>
<div id="wrapper_grid">

	<!-- the loop -->
	
	<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
		
		
		<div class="grid_item">
		    <?php the_post_thumbnail('thumbnail');?>
		    <!-- clear pour garder les élément dans le flus -->
		    <div class="clear">	</div>
		     <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><p><?php echo get_field('etat',get_the_ID()); ?></p>
		</div>
	
	<?php endwhile; ?>
	<!-- end of the loop -->

     </div>

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
                    
     </div>
</div>
    
<?php get_sidebar(); ?>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>