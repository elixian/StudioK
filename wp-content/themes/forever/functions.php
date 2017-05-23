<?php 

/* Ajoute le THumbnails pour tous les post */
 add_theme_support( 'post-thumbnails' );
 
 /* Initialise le menu */
 register_nav_menus( array(
        'Top' => 'Navigation principale',
    ) );


    add_theme_support( 'menus' );
function has_children() {
	global $post;
	$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
	return ($children) ? true : false;
}

function is_child() {
	global $post;
	return ($post->post_parent) ? true : false;
}


/* = Ajout des Scripts CSS et JS 
-------------------------------------------------------------- */
function gkp_insert_css_in_head() {
    // On ajoute le css general du theme
    wp_enqueue_style('forever-style', get_template_directory_uri() . '/styles/style.css','',"1.0.0");
     wp_enqueue_style( 'forever-reset', get_template_directory_uri() . '/styles/reset.css','',"1.0.0" );

}

add_action('wp_enqueue_scripts', 'gkp_insert_css_in_head');


/* = Retire la feuille de style embarquée !!
----------------------------------------------------------------*/
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');


function new_excerpt_length($length) {
return 10;
}
add_filter('excerpt_length', 'new_excerpt_length');
?>
