<?php
/*
Template Name: Blog Posts Template
*/
?>



<?php get_header(); ?>

<?php $img_id = get_field('header_image');?>
<?php

$img_thumb_url_array = wp_get_attachment_image_src($img_id, 'tile_image', false);
$img_thumb_url = $img_thumb_url_array[0];

 ?>

<div id="index-banner" class=" black" style="margin-top:0px;height:40vh;background:url(<?php echo $img_thumb_url; ?>);background-size:cover;background-position:center center">
 <div class="section no-pad-bot">
	 <div class="container">

		 <div class="row">
		<div class='col s12 homeHeaderBanner' style='text-align:center'>
			 <h1 id="mainHeadline" class="center bombshellHeading white-text" style="text-transform:uppercase">THE BLOG</h1>
		</div>
	</div>
		 <br><br>



	 </div>
 </div>
 <!-- <div class="parallax"><img id="mainImage" style="max-height:1000px" src="<?php echo get_field('header_image') ?>" alt="Unsplashed background img 1"></div> -->
</div>

<div class="row" style="margin-bottom:15px;margin-top:35px" >
  <div class="col s12 m12 l12" style="padding-left:0px;padding-top:7px;padding-right:0px">
    <div class="col s12 left" style="background-color:white;padding-left:0px;padding-right:0px;padding-top:1%;">
      <div class="col s12 left-align">
        <div class="container">


          <?php
$args= array(
	'posts_per_page' => -1,
	'paged' => $paged
);			 
             $lastposts = get_posts( $args );
             foreach ( $lastposts as $post ) :
              setup_postdata( $post ); ?>
             <?php
              $thumb_id = get_post_thumbnail_id();
              $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
              $thumb_url = $thumb_url_array[0];
              ?>

         	    <!-- <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> -->
              <a href="<?php the_permalink();?>" style="color:black">
              <div class="col s12" >
              <div class="col s12 l3 m3" style="min-height:225px;background:url(<?php echo $thumb_url; ?>);background-size:cover;background-position:center center;">
              </div>
              <div class="col s12 l9 m9 blogPreviewContent ">
                <h3 class="bombshellHeading pink-text blogTitle" style="margin-top:0px;margin-bottom:0px;font-size:55px"><?php the_title(); ?></h3>
                <hr class="black" style="margin-right:80%;border:none;height:2px;margin-top:0px;margin-bottom:0px">
                <div class="serviceItem">
                  <div style="font-weight:300;font-size:17px;text-align:justify;padding-top:25px">
                    <h5 class="bombshellHeading" style="font-size:26px;text-align:justify;color:#232323"> <?php echo get_the_author(); ?> <small >on <?php the_time('M. d, Y'); ?></small></h5>
                    <?php echo the_excerpt();?>
                  </div>
                </div>
              </div>
              <div class="col s12" style="margin:0px;padding-left:0px;padding-right:0px;padding-top:15px" >
              <hr>
              </div>
            </div>
          </a>



             <?php endforeach;?>
		 
             <?php wp_reset_postdata(); ?>







        </div>
      </div>
    </div>
  </div>
</div>

	<?php get_footer(); ?>
