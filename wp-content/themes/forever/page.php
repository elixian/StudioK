<?php
/**
 * The template for displaying pages
 *
 */
 ?>


<?php get_header(); ?>
<div class="container">
		<div class="row">
		     <div class="col-lg-9 content_top-marge">
		     	<? /*debut de la boucle */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="col-lg-8 col-md-8 col-xs-6">
						<?php the_content(); ?> 
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