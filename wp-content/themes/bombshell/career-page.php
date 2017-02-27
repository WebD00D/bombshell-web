<?php
/*
Template Name: Career Page
*/
?>



<?php get_header(); ?>



<?php $img_id = get_field('header_image');?>
<?php

$img_thumb_url_array = wp_get_attachment_image_src($img_id, 'tile_image', false);
$img_thumb_url = $img_thumb_url_array[0];

 ?>


<div id="index-banner" class=" black" style="margin-top:0px;height:50vh;background:url(<?php echo $img_thumb_url; ?>);background-size:cover;background-position:center">

 <div class="section no-pad-bot">
	 <div class="container">

		 <div class="row">
		<div class='col s12 homeHeaderBanner' style='text-align:center;'>
			 <h1 id="mainHeadline" class="center bombshellHeading white-text" style="text-transform:uppercase"><?php echo get_field( "page_headline" ); ?></h1>
		</div>
	</div>
		 <br><br>

	 </div>
 </div>
 <!-- <div class="parallax"><img id="mainImage" style="max-height:1000px" src="" alt="Unsplashed background img 1"></div> -->
</div>

<div class="row" style="margin-bottom:15px;margin-top:35px" >
  <div class="col s12 m12 l12" style="padding-left:0px;padding-top:7px;padding-right:0px">
    <div class="col s12 left" style="background-color:white;padding-left:0px;padding-right:0px;padding-top:1%;">
      <div class="col s12 left-align">
        <div class="container">

          <div>
            <?php the_content(); ?>
          </div>


          <?php
          // check if the repeater field has rows of data
          if( have_rows('content_repeater') ):
           	// loop through the rows of data
              while ( have_rows('content_repeater') ) : the_row(); ?>

              <h3 class="bombshellHeading pink-text" style="margin-top:0px;margin-bottom:0px;font-size:35px"><?php the_sub_field('header') ?></h3>
              <hr class="black" style="margin-right:80%;border:none;height:2px;margin-top:0px;margin-bottom:0px">
              <div class="serviceItem">
                <div style="font-weight:300;font-size:17px;text-align:justify">
                    <?php the_sub_field('content') ?>
                </div>
              </div>
          <?php
              endwhile;
          else :
              // no rows found
          endif;
          ?>

          <Br>

          <table class="striped">
          <thead>
            <tr>
                <th style="padding-left:10px" data-field="postdate">Posted On</th>
                <th style="padding-left:10px" data-field="position">Position</th>
                <th style="padding-left:10px" data-field="location">Location</th>
            </tr>
          </thead>

          <tbody>
            <?php
            // check if the repeater field has rows of data
            if( have_rows('careers') ):
              // loop through the rows of data
                while ( have_rows('careers') ) : the_row(); ?>

                <tr>
                  <td style="padding-left:10px;padding-top:10px;padding-bottom:10px"><?php the_sub_field('post_date') ?></td>
                  <td style="padding-left:10px;padding-top:10px;padding-bottom:10px"><?php the_sub_field('position') ?></td>
                  <td style="padding-left:10px;padding-top:10px;padding-bottom:10px"><?php the_sub_field('location') ?></td>
                </tr>


            <?php
                endwhile;
            else :
                // no rows found
            endif;
            ?>


          </tbody>
        </table>

        </div>
      </div>
    </div>
  </div>
</div>

	<?php get_footer(); ?>
