<?php
/**
* A Simple Category Template
*/

get_header(); ?> 

<div id="main">
  <div id="content">
     <h1>Main Area</h1>

 

    <?php if ( have_posts() ) : ?>
     <div id="wrapper_grid">

	  <!-- the loop -->
	
	     <?php while ( have_posts() ) : the_post(); ?>
		
		
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