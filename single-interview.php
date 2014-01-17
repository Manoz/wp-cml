<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">

		<div id="content" role="main" class="interview">

			<?php
                while ( have_posts() ) : the_post();

				    get_template_part( 'content', 'interview' );

				    comments_template( '', true );

			     endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();