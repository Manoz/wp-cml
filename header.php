<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes();  ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Exo:300,400,600' rel='stylesheet' type='text/css'>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="social-media-top">
    <ul class="social_media_icons">
        <li>
            <a target="_blank" href="http://www.twitter.com/ClubCML" title="Twitter">
                <img src="<?php echo get_template_directory_uri(); ?>/images/assets/social_media/icon-twitter.png" width="24" height="24" alt="" style="opacity: 1;">
                <div class="social_tip" style="display: none; opacity: 0;">Twitter</div>
            </a>
        </li>
        <li>
            <a target="_blank" href="https://www.facebook.com/groups/Clubdescommunitymanagersdelyon/" title="Facebook">
                <img src="<?php echo get_template_directory_uri(); ?>/images/assets/social_media/icon-facebook.png" width="24" height="24" alt="" style="opacity: 1;">
                <div class="social_tip" style="display: none; opacity: 0;">Facebook</div>
            </a>
        </li>
    </ul>
</div>
<div id="container">
    <div class="red-line"></div>
    <div class="content-wrapper">
        <header id="masthead" class="site-header clearfix" role="banner">
            <div id="logo" class="clearfix   ">
                <div class="shadow-left"></div>
                <div class="logo-holder">
                    <div class="transparent-line logo"></div>
                    <div class="logo-background">
                        <!-- Temp url pour que ce soit plus pratique tant que c'est en préprod -->
                        <a href="http://mwanoz.fr/cml/" title="Club des Community Managers de Lyon"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_CML.png" alt="Club des Community Managers de Lyon" class="png"></a>
                    </div>
                </div>
                <div class="shadow-right"></div>
            </div>

            <nav id="site-navigation" class="main-navigation" role="navigation">
                 <h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
                 <a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
                 <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
            </nav><!-- #site-navigation -->

            <?php $header_image = get_header_image();
            if ( ! empty( $header_image ) ) : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
            <?php endif; ?>
        </header>
    </div>
</div>
<div id="page" class="hfeed site clear">

