<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bombshell
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div  style="font-size:20px;font-weight:300 !important">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
