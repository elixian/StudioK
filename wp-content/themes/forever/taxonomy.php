<?php get_header(); ?>
<div class="container">
		<div class="row">
		     <div class="col-lg-12 col-md-12 col-xs-12 content_top-marge">
		     	<?php
		if (have_posts()): /*debut de la boucle */ ?>
					<?php
    while (have_posts()):
        the_post(); ?>
						<div class="col-lg-3 col-md-3 col-xs-6 offset-bottom">
							<a href="<?php the_permalink(); ?>" class="item_link-hover" >
				    		    <figure>
				    		        <?php the_post_thumbnail('thumbnail'); ?>
				    		        <figcaption>
				    		            <?php the_title(); ?>
				    		        </figcaption>
				    		    </figure>
				    		</a>
			   		 		<?php
        $field = get_field_object('etat', get_the_ID());
        $value = $field['value'];
        $label = $field['choices'][$value];
?>

						<?php
        /*
         * Condition si le choix de l'etat de l'objet est null on affiche ou non l etat
        */

        if (isset($label)): ?>
						<p class="icons <?php echo $value ?>" >
							<?php echo $label ?>
							</p>
						<?php
        endif; ?>
			     		</div>
					<?php
    endwhile; ?>
				<?php wp_reset_postdata();
else: ?>
			 		<p><?php _e('Sorry, no posts for the momement.'); ?></p>
			 <?php
endif; ?>
			</div>
		</div>
   	</div><!-- End container -->
<div id="delimiter">
</div>
<?php get_footer(); ?>
