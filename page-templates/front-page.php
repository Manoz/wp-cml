<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<div class="slider">
    <?php if ( function_exists('show_nivo_slider') ) { show_nivo_slider(); } ?>
</div>
<div class="banner-holder clearfix">
    <div class="banner clearfix">
        <a href="http://communitymanagerslyon.com/lassociation/" class="banner-button alignright">En savoir plus</a>
        <div class="featured-text withbutton">
            <p>Une association créée par et pour des community managers Lyonnais. <br> Nos objectifs : l'échange de bonnes pratiques et la promotion du métier.</p>
        </div>
    </div>
</div>
<div id="main" class="wrapper">

<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>