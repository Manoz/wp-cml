<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">

		<?php if ( have_posts() ) : ?>
                    
                        <header class="entry-header">
                                <h1 class="entry-title">Les membres du bureau</h1>
                                Comme toute association, le Club des Community Managers compte avec les membres du bureau. Dans notre cas, le CML est fièrement propulsé par :
                        </header>			

                        <div class="liste-membres-bureau">
                            <?php
                            /* Start the Loop for membres du bureau */
                            while ( have_posts() ) : the_post();

                                    /* Include the post format-specific template for the content. If you want to
                                     * this in a child theme then include a file called called content-___.php
                                     * (where ___ is the post format) and that will be used instead.
                                     */
                                    get_template_part( 'content', 'bureau-list' );

                            endwhile;

                            twentytwelve_content_nav( 'nav-below' );
                            ?>
                        </div>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>