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
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) & !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
<title>Studio K</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
<div id="wrapper">
    <div id="header">
        <div id="header-logo-img"></div>
   
        <h1>Studio K</h1>
        
        <div id="header-logo-img_right"></div>
    </div>
        <div id="nav">
            <?php wp_nav_menu( array('menu' => 'main' )); ?>
        </div>

