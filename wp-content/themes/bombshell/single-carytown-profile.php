<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2 class="entry-title"><?php the_title(); ?></h2>
					<div class="entry-content">
                    	<div id="profile-thumb"><?php
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  							the_post_thumbnail(150);
							}
						?>
                        </div>
                        <strong>Name:</strong> <?php the_title(); ?><br />
						<strong>Title:</strong> <?php echo get_post_meta($post->ID, 'wpcf-job_title', true); ?><br />
						<strong>About <?php the_title(); ?>:</strong> <?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->
<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
