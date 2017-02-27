<?php

/**

 * The loop that displays a page.

 *

 * The loop displays the posts and the post content. See

 * http://codex.wordpress.org/The_Loop to understand it and

 * http://codex.wordpress.org/Template_Tags to understand

 * the tags used in it.

 *

 * This can be overridden in child themes with loop-page.php.

 *

 * @package WordPress

 * @subpackage Twenty_Ten

 * @since Twenty Ten 1.2

 */

?>



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
						<?php if ( is_front_page() ) { ?>
                        	<hr />
							<?php dynamic_sidebar( 'home-featured-left' ); ?>
							<br style="clear:both;" />
						<?php } else { ?>
                        <?php } ?>
                        
				
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>

					</div><!-- .entry-content -->

				</div><!-- #post-## -->







<?php endwhile; // end of the loop. ?>

