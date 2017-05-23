<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @uses masthead.php
 *
 * @package Forever
 * @since Forever 1.0
 */
?><!DOCTYPE html>

<!--[if !(IE 6) & !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
<title>Studio K</title>
<?php wp_head(); ?>
</head>
<body>
    <div id="wrapper_layer-white">
        <div id="wrapper">
            
                <div id="header">
      
                    
                    <h1>Studio <span id="header_title-ka">KA</span></h1>
                    <p>handmade creativity <b>&</b> project passion </p>
              
                </div>
                <div id="nav">
                    <?php wp_nav_menu( array('menu' => 'main' )); ?>
                </div>

