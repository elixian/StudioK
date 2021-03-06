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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php  bloginfo('name'); ?><?php wp_title();   ?></title>
<?php wp_head(); ?>
</head>
<body>

      <div id="myModal" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
      <span id="cross-close" class="btn" data-dismiss="modal"></span>
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                 <?php echo do_shortcode('[pirate_forms]')?>
                </div>
            </div>
        </div>
    </div>
    <div id="contact-infos">
      <span id="contact-icon" class="btn btn-lg" data-toggle="modal" data-target="#myModal" ></span>
    </div>
                <div id="header">
                    <h1>Studio <span class="header_title-ka">KA</span></h1>
                    <p>handmade creativity <b>&</b> project passion </p>
                </div>
                <nav class="navbar" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header navbar-default">
                          <div id="header-collapsed">
                              <h1>Studio <span class="header_title-ka">KA</span></h1>
                          </div>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#forever-nav-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="forever-nav-collapse">
                           <div id="banner-md">Studio KA <p>handmade amp; creativity</p></div>
                                <?php wp_nav_menu( array(   'theme_location' => 'header-menu',
                                                            'menu' => 'main',
                                                            'menu_class'=> "nav navbar-nav ",
                                                            'after' => "<span class='forever_nav_right'></span>",
                                                            'container' => false)); ?>


                        </div>
                    </div>
                </nav>
                <div id="mail-infos">
                    <h4>Email info</h4>
                </div>
