<?php
/**
* A Simple Category Template
*/

get_header(); ?> 

<div id="main">
  <div id="content">

    <?php if ( have_posts() ) : ?>
     <div id="wrapper_grid">

	  <!-- the loop -->
	
	     <?php while ( have_posts() ) : the_post(); ?>
		
		
     		<a href="<?php the_permalink(); ?>" class="grid_item">
		    <figure>
		        <?php the_post_thumbnail('thumbnail');?>
		        <figcaption>
		            <?php the_title(); ?>
		            <?php the_excerpt(); ?>
		        </figcaption>
		    </figure>
		    
		</a>
	
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