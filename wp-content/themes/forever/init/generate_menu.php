<?php 
/*
*fonction pour la génération du menu
*
*/
 ?>

 <?php 
add_action('load-nav-menus.php', 'forever_menu_init',1);
function forever_menu_init(){

        //initialisation du menu
    $run_once = get_option('menu_check');
    if(true){
        	$location = 'header-menu';
        	register_nav_menu( $location,__( 'Header Menu' ));
            $menuname = 'Studio ka';
            if(! has_nav_menu( $location )){
            	wp_delete_nav_menu($menuname);
        	}
        
            $menu_exists = wp_get_nav_menu_object( $menuname );
            // If it doesn't exist, let's create it.
         if( !$menu_exists){
                
          
        
        	$menu_id = wp_create_nav_menu($menuname);
        
                // Set up default BuddyPress links and add them to the menu.
                wp_update_nav_menu_item($menu_id, 0, array(
                    'menu-item-title' =>  __('Home'),
                    'menu-item-classes' => 'home',
                    'menu-item-url' => home_url( '/' ), 
                    'menu-item-status' => 'publish'));
        
                wp_update_nav_menu_item($menu_id, 0, array(
                	'menu-item-object' => 'page',
                    'menu-item-title' =>  __('O Mnie'),
                    'menu-item-classes' => 'activity',
                    'menu-item-object-id' => get_page_by_title('O Mnie')->ID,
                    'menu-item-type'      => 'post_type',
                    'menu-item-status' => 'publish'));
        
                wp_update_nav_menu_item($menu_id, 0, array(
                    'menu-item-title' =>  __('Craft'),
                    'menu-item-classes' => 'members',
                    'menu-item-url' => (is_wp_error(get_term_link('Craft','metody'))) ? home_url() : get_term_link('craft','metody'), 
                    'menu-item-status' => 'publish'));
        
                wp_update_nav_menu_item($menu_id, 0, array(
                    'menu-item-title' =>  __('Scrapbooking'),
                    'menu-item-classes' => 'groups',
                    'menu-item-url' => (is_wp_error(get_term_link('Scrapbooking','metody'))) ? home_url() : get_term_link('Scrapbooking','metody'),
                    'menu-item-status' => 'publish'));
        
                wp_update_nav_menu_item($menu_id, 0, array(
                    'menu-item-title' =>  __('Decoupage & Mixmedia'),
                    'menu-item-url' =>  (is_wp_error(get_term_link('Decoupage & Mixmedia','metody'))) ? home_url() : get_term_link('Decoupage & Mixmedia','metody'),
                    'menu-item-classes' => 'forums',
                    'menu-item-status' => 'publish'));
        
                // Grab the theme locations and assign our newly-created menu
                // to the BuddyPress menu location.
                
            }
        
            $locations = get_theme_mod('nav_menu_locations');
        	$locations[$location] = $menu_id;
        	set_theme_mod( 'nav_menu_locations', $locations );
        	
        	     // then update the menu_check option to make sure this code only runs once
        update_option('menu_check', true);
    }
}




  ?>