<?php $the_query = new WP_Query( array( 'meta_key' => 'etat', 'meta_value' => 'Disponible' ) ); ?>


	<!-- the loop -->
	
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
	<div class="col-lg-3 col-md-3 col-xs-6">
            		<a href="<?php the_permalink(); ?>" class="item_link-hover" >
            		    <figure>
            		        <?php the_post_thumbnail('thumbnail');?>
            		        <figcaption>
            		            <?= $cat->name; ?>
            		        </figcaption>
            		    </figure>
               
            		</a>
            		<?php echo '<p>'. the_title() . '</p>';?>
            		<p><?php echo get_field('etat',get_the_ID()); ?></p>
                </div>
	
	<?php endwhile; ?>
	<!-- end of the loop -->

 
	<?php wp_reset_postdata(); ?>
