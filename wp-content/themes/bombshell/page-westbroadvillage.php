<?php

/**

 * Template Name: West Broad Village Page Tenplate

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages

 * and that other 'pages' on your WordPress site will use a

 * different template.

 *

 * @package WordPress

 * @subpackage Twenty_Ten

 * @since Twenty Ten 1.0

 */



get_header(); ?>


        <div id="container">

        	<div id="content" role="main">

			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<?php if ( is_front_page() ) { ?>

						

					<?php } else { ?>

						<h1 class="entry-title"><?php the_title(); ?></h1>

					<?php } ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					



					<div class="entry-content">
						<?php if ( is_front_page() ) { ?>
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                        <?php } else { ?>
                        <?php } ?>
						<?php the_content(); ?>
                        	
<?php
$type = 'west-broad-profile';
$args=array(
  'post_type' => $type,
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1
  );

$my_query = null;
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <div style="float:left; width: 125px;">
    	<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php if ( has_post_thumbnail() ) { 
		// check if the post has a Post Thumbnail assigned to it.
  		the_post_thumbnail(array(200,100));
		}
		?></a>
    </div>
    <div style="float:right; width:525px;">
    	<h2 style="margin-bottom:0px;"><?php the_title(); ?></h2>
    	<?php echo get_post_meta($post->ID, 'wpcf-job_title', true); ?> 
        <?php the_content(); ?>   
    </div>
    <hr style="clear:both;" />
    <?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>

					</div><!-- .entry-content -->

				</div><!-- #post-## -->







<?php endwhile; // end of the loop. ?>



			</div><!-- #content -->





</div><!-- #container -->
<?php get_sidebar(); ?>
		
<?php get_footer(); ?>