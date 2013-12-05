<?php
/**
 * The template used for displaying membre content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
    <div class="membre-bureau">
        <div class="membrebureau-content">
                 <?php the_post_thumbnail('medium'); ?>
                <h1 class=""><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                <?php the_meta(); ?>
        </div><!-- .entry-content -->
    </div>