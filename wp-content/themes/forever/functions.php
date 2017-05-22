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
 


?>

