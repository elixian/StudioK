<?php 


function my_get_posts( $query ) {
 if ( is_home() )
 $query->set( 'post_type', array( 'produit' ) );

 return $query;
}

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
    wp_enqueue_style('forever-style', get_stylesheet_uri(),'',"1.0.0");
     wp_enqueue_style( 'forever-reset', get_template_directory_uri() . '/styles/reset.css','',"1.0.0" );

}

add_action('wp_enqueue_scripts', 'gkp_insert_css_in_head');

function forever_enque_font(){
    wp_enqueue_style('forever-font-oswald','https://fonts.googleapis.com/css?family=Oswald',false);
}
add_action('wp_enqueue_scripts',forever_enque_font);
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



if (isset($_GET['activated']) && is_admin()){
        $new_page_title = 'PAGE TEST';
        $new_page_content = 'This is the page content';
        $new_page_template = ''; //ex. template-custom.php. Leave blank if you don't want a custom page template.
        //don't change the code bellow, unless you know what you're doing
        $page_check = get_page_by_title($new_page_title);
        $new_page = array(
                'post_type' => 'page',
                'post_title' => $new_page_title,
                'post_content' => $new_page_content,
                'post_status' => 'publish',
                'post_author' => 1,
        );
        if(!isset($page_check->ID)){
                $new_page_id = wp_insert_post($new_page);
                if(!empty($new_page_template)){
                        update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
                }
        }
}
?>
