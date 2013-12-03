<?php
/**
 * The template used for displaying membre content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class("interview"); ?>>

		<div class="entry-content list-interview">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</div><!-- .entry-content -->

	</article><!-- #post -->