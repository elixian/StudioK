<?php
//include_once("init/generate_menu.php");
/*
*DEFINE FOREVER GLOBALS
*/
$FOREVER_GLOBALS = array();
define("VERSION", "1.0.2");
$FOREVER_GLOBALS["version"] ="1.0.2";
$FOREVER_GLOBALS["url"] = get_template_directory_uri();




// function add_classes_on_li($classes, $item, $args) {
//   $classes[] = 'drop-shadow lifted';
//   return $classes;
// }
// add_filter('nav_menu_css_class','add_classes_on_li',1,3);

// Register Custom Taxonomy
function custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Metody', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Metoda', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Metody', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'search_items'               => __( 'Search Metoda', 'textdomain' ),
		'all_items'                  => __( 'All Metoda', 'textdomain' ),
		'parent_item'                => __( 'Parent Metoda', 'textdomain' ),
		'parent_item_colon'          => __( 'Parent Metoda:', 'textdomain' ),
		'edit_item'                  => __( 'Edit Metoda', 'textdomain' ),
		'update_item'                => __( 'Update Metoda', 'textdomain' ),
		'add_new_item'               => __( 'Add New Metoda', 'textdomain' ),
		'new_item_name'              => __( 'New Metoda Name', 'textdomain' ),
		'menu_name'                  => __( 'Metody', 'textdomain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'query_var'                 => true,
        'rewrite'                   => array( 'slug' => 'metoda' ),
	);
	register_taxonomy( 'metody', array( 'post' ), $args );


}
add_action( 'init', 'custom_taxonomy', 0 );


if ( function_exists('register_sidebar') ){
        register_sidebar(array(
            'name' => 'Footer Widgets Right',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widgettitle">',
            'after_title' => '</h2>',
        ));
				register_sidebar(array(
						'name' => 'Header Information',
						'before_widget' => '<div id="%1$s" class="widget %2$s">',
						'after_widget' => '</div>',
						'before_title' => '<h2 class="widgettitle">',
						'after_title' => '</h2>'
				));
}


$location = 'header-menu';
register_nav_menu( $location,__( 'Header Menu' ));


  // 3. Add term "mosaic-home" to custom taxonomy "tiles_categories"
    function example_insert_category() {
         if (isset($_GET['activated']) && is_admin()){
              wp_insert_term(
                'Craft',
                'metody',
                array(
                  'description' => 'craft description',
                  'slug'    => 'craft'
                  )
                );


                wp_insert_term(
                'Scrapbooking',
                'metody',
                array(
                  'description' => 'Scrapbooking description',
                  'slug'    => 'scrapbooking'
                  )
                );

                 wp_insert_term(
                'Decoupage & Mixmedia',
                'metody',
                array(
                  'description' => 'Decoupage & Mixmedia description',
                  'slug'    => 'decoupage-mixmedia'
                  )
                );
         }
      }
    add_action('init','example_insert_category',0);


if(!function_exists('load_theme_forever')){
    function load_theme_forever(){

        /* Ajoute le THumbnails pour tous les post */
        add_theme_support( 'post-thumbnails' );

        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wp_generator');
        remove_action('wp_head', 'feed_links', 2);
        remove_action('wp_head', 'index_rel_link');
        remove_action('wp_head', 'wlwmanifest_link');
        remove_action('wp_head', 'feed_links_extra', 3);
        remove_action('wp_head', 'start_post_rel_link', 10, 0);
        remove_action('wp_head', 'parent_post_rel_link', 10, 0);
        remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);


        //Allow admin bar in back-end only admin and administrator
        if (!current_user_can('administrator') && !is_admin()) {
          show_admin_bar(false);
        }

        //Hide admin bar in front end
        add_filter('show_admin_bar', '__return_false');
    }
}
     add_action( 'after_setup_theme', 'load_theme_forever' );



/* = Ajout des Scripts CSS et JS
-------------------------------------------------------------- */

add_action('wp_enqueue_scripts', 'gkp_insert_css_in_head');
function gkp_insert_css_in_head() {
    // On retire et on rajoute jquery
    if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"), false);
    wp_enqueue_script('jquery');
    }
    wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', false, VERSION , 'all' );
    wp_enqueue_style( 'fontawesomme_css',  get_template_directory_uri() . '/styles/fontawesome/css/font-awesome.min.css', false, VERSION, 'all' );
    wp_enqueue_style('forever-font-oswald','https://fonts.googleapis.com/css?family=Oswald',false);
    wp_enqueue_style('forever-style', get_stylesheet_uri(),array('bootstrap_css'),$FOREVER_GLOBALS["version"]);
    wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), VERSION, false );
    wp_enqueue_script( 'forever-js', get_template_directory_uri() . '/js/forever.js', array(), VERSION, false );




}


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


// function createPage(){

//     static $hasEverRun;
//     print_r($hasEverRun);
//     if (isset($_GET['activated']) && is_admin()){
//             $new_page_title = 'PAGE TEST';
//             $new_page_content = 'This is the page content';
//             $new_page_template = ''; //ex. template-custom.php. Leave blank if you don't want a custom page template.
//             //don't change the code bellow, unless you know what you're doing
//             $page_check = get_page_by_title($new_page_title);
//             $new_page = array(
//                     'post_type' => 'page',
//                     'post_title' => $new_page_title,
//                     'post_content' => $new_page_content,
//                     'post_status' => 'publish',
//                     'post_author' => 1,
//             );
//             if(!isset($page_check->ID)){
//                     $new_page_id = wp_insert_post($new_page);
//                     if(!empty($new_page_template)){
//                             update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
//                     }
//             }
//     }

//     $hasEverRun=true;
// }
// add_action("init","createPage");


/*
*Inclus les fichiers customs
*/

 if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Sidebar',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));


/*
* Give access to editor to widget apparence
*/
function custom_admin_menu() {
	$role = get_role('editor');
	$role->add_cap('edit_theme_options');
    $user = new WP_User(get_current_user_id());
    if (!empty( $user->roles) && is_array($user->roles)) {
        foreach ($user->roles as $role)
            $role = $role;
    }

    if($role == "editor") {
       remove_submenu_page( 'themes.php', 'themes.php' );
       remove_submenu_page( 'themes.php', 'nav-menus.php' );
    }
}

add_action('admin_menu', 'custom_admin_menu');
?>
