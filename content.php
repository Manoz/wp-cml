<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
        <div class="featured-post">
            <?php _e( 'Featured post', 'twentytwelve' ); ?>
        </div>
        <?php endif; ?>
        <header class="entry-header clearfix">
            <?php the_post_thumbnail(); ?>
            <?php if ( is_single() ) : ?>
            <div class="date">
                <span class="day"><?php the_time("d") ?></span>
                <span class="year"><?php the_time("M") ?> <?php the_time("Y") ?></span>
            </div>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <div class="title-comments">
                <span class="comments-datas">
                    <a href="<?php comments_link(); ?>" title="" class="comment_link"><?php comments_number( '0 commentaires', '1 commentaire', '% commentaires' ); ?></a>
                </span>
            </div>
            <?php else : ?>
            <h1 class="entry-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
            </h1>
            <?php endif; // is_single() ?>
        </header><!-- .entry-header -->

        <?php if ( is_search() ) : // Only display Excerpts for Search ?>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
        <?php else : ?>
        <div class="entry-content">
            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
        </div><!-- .entry-content -->
        <?php endif; ?>

        <footer class="entry-meta">
            <?php
                twentytwelve_entry_meta();

                edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' );

                if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
                    <div class="author-info">
                        <div class="author-avatar">
                            <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentytwelve_author_bio_avatar_size', 68 ) ); ?>
                        </div>
                        <div class="author-description">
                            <h2><?php printf( __( 'About %s', 'twentytwelve' ), get_the_author() ); ?></h2>
                            <p><?php the_author_meta( 'description' ); ?></p>
                            <div class="author-link">
                                <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
                                    <?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentytwelve' ), get_the_author() ); ?>
                                </a>
                            </div>
                        </div>
                    </div>
            <?php endif; ?>
        </footer>
    </article><!-- #post -->
