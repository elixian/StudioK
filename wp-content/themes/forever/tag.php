<?php
/**
* A Simple Category Template
*/
?> 

<?php get_header(); ?>
<div class="container">
		<div class="row">
		     <div class="col-lg-9 content_top-marge">
		     	<? /*debut de la boucle */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="col-lg-3 col-md-3 col-xs-6">
						<a href="<?php the_permalink(); ?>" >
			    		    <figure>
			    		        <?php the_post_thumbnail('thumbnail');?>
			    		        <figcaption>
			    		            <?php the_title(); ?>
			    		            <?php the_excerpt(); ?>
			    		        </figcaption>
			    		    </figure>
			    		</a>
		   		 		<p><?php echo get_field('etat',get_the_ID()); ?></p>
		     		</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</div>
	    	<div class="col-lg-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
   	</div><!-- End container -->
<div id="delimiter">
</div>
<?php get_footer(); ?>