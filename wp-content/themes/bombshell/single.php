<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bombshell
 */

get_header(); ?>

<?php
 $thumb_id = get_post_thumbnail_id();
 $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
 $thumb_url = $thumb_url_array[0];


 ?>


<div id="index-banner" class=" black" style="margin-top:0px;padding-top:50px;padding-bottom:50px;background:url(<?php echo $thumb_url?>);background-size:cover;background-position:center center">
 <div class="section no-pad-bot">
	 <div class="container">
			<div class="row">
			<div class='col s12 homeHeaderBanner' style='text-align:center'>
				 <h1 id="mainHeadline" class="center bombshellHeading white-text" style="text-transform:uppercase;font-size:60px !important;vertical-align: middle;"><?php echo the_title(); ?></h1>
			</div>
		</div>
		 <br><br>

	 </div>
 </div>
 <!-- <div class="parallax"><img id="mainImage" style="max-height:1000px" src="<?php echo get_field('header_image') ?>" alt="Unsplashed background img 1"></div> -->
</div>

<div class="row" style="margin-bottom:15px;margin-top:15px" >
  <div class="col s12 m12 l12" style="padding-left:0px;padding-top:7px;padding-right:0px">
    <div class="col s12 left" style="background-color:white;padding-left:0px;padding-right:0px;padding-top:1%;">
      <div class="col s12 left-align">
        <div class="container">
					<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', get_post_format() );

						// // If comments are open or we have at least one comment, load up the comment template.
						// if ( comments_open() || get_comments_number() ) :
						// 	comments_template();
						// endif;

					endwhile; // End of the loop.
					?>
					<a href='/blog/' class="bombshellHeading pink-text" style="font-size:25px"><i class="material-icons">arrow_back</i> Back to Posts</a>
        </div>
      </div>
    </div>
  </div>
</div>


<?php

get_footer();
