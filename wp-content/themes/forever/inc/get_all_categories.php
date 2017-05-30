
<?php

$cats = get_categories(); 
?>
	<?php foreach ($cats as $cat) : ?>
		<?php 
		    $args = array(
                'cat' => $cat->term_id,
                'post_type' => 'post',
                'posts_per_page' => '1',
            );
            $query = new WP_Query( $args );
            
            ?>	
        	<?php if ($query->have_posts() ) : ?>
                
        
         	   <?php /*-------------------------
         	               the loop 
         	          --------------------------*/ ?>
        	
        	<?php while ( $query->have_posts() ) : $query->the_post(); ?>
    
        		<div class="col-lg-3 col-md-3 col-xs-6">
            		<a href="<?php echo get_category_link( $cat->term_id); ?>" class="item_link-hover" >
            		    <figure>
            		        <?php the_post_thumbnail('thumbnail');?>
            		        <figcaption>
            		            <?= $cat->name; ?>
            		        </figcaption>
            		    </figure>
               
            		</a>
            		<p><?php the_tags(); ?></p>
                </div>
        
        	<?php endwhile; ?>
        	<!-- end of the loop -->
         
        	<?php wp_reset_postdata(); ?>
        
        <?php else : ?>
        	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

				
     <?php endforeach; ?>
 