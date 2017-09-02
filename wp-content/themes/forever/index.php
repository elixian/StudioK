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

<?php
/* On récupère le paramètre afin d'afficher la bonne vue */
$param = isset($_GET["dispfilter"]); ?>
<?php get_header(); ?>
<div class="container content_top-marge main-content-min-height">
		<div class="row">

			     <div class="col-lg-10 col-lg-offset-1 ">
						 <div id="header-widget" class="col-lg-12">
							 <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header-sidebar-1') ) : ?><?php endif; ?>
						 </div>
						<?php if(!$param):?>
					    	<?php get_template_part( 'inc/get_all_categories' ); ?>
					 	<?php else: ?>
						 	<?php get_template_part( 'inc/get_etat_article' ); ?>

					 	<?php endif ?>
			     </div>

		  		<!--  	<div class="col-lg-3">-->
				<!--	<?php get_sidebar(); ?>-->
				<!--</div>-->

		</div>
   	</div><!-- End container -->
<div id="delimiter">
</div>
<?php get_footer(); ?>
