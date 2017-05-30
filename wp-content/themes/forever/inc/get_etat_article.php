<?php $the_query = new WP_Query( array( 'meta_key' => 'etat', 'meta_value' => 'Disponible' ) ); ?>
 <div id="wrapper_grid">

	<!-- the loop -->
	
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		
		
		<div class="grid_item">
		    <?php the_post_thumbnail('thumbnail');?>
		    <!-- clear pour garder les élément dans le flus -->
		    <div class="clear">	</div>
		     <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><p><?php echo get_field('etat',get_the_ID()); ?></p>
		     <?php echo '<p>'. get_post_type(). '</p>';?>
		</div>
	
	<?php endwhile; ?>
	<!-- end of the loop -->

     </div>

	<?php wp_reset_postdata(); ?>