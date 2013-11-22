<?php
/**
 * The template used for displaying membre content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="liste-bureau post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="membrebureau-content">
                        <?php the_post_thumbnail(); ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<h2 class=""><?php the_meta(); ?></h2>
                        
			<?php the_excerpt(); ?>
		</div><!-- .entry-content -->

	</article><!-- #post -->
