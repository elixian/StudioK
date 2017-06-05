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
 * 
 */

get_header(); ?>
<?php wp_nav_menu( array(
    'sort_column' => 'menu_order',
    'theme_location' => 'header_menu',
    'menu_class' => 'css-menu',
    'title_li' => '<div class="l"></div>',
    'link_before' => '<span class="l">',
    'link_after' => '</span>'
) ); ?> 
	<div id="primary" class="content-area">
                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

		<main id="main" class="site-main <?php echo "page-".$paged;?>" role="main">

		<?php if ( have_posts() ) : ?>

			<div class="article-container">
			
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>

			<?php endwhile; ?>
			
			</div>
			
		

		<?php else : ?>

			<p> nothing to say</p>
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>