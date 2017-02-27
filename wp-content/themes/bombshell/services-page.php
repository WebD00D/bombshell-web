<?php
/*
Template Name: Service Menu
*/
?>



<?php get_header(); ?>

<?php $img_id = get_field('header_image');?>
<?php

$img_thumb_url_array = wp_get_attachment_image_src($img_id, 'tile_image', false);
$img_thumb_url = $img_thumb_url_array[0];

 ?>

<div id="index-banner" class=" black" style="margin-top:0px;height:50vh;background:url(<?php echo $img_thumb_url; ?>);background-size:cover;background-position:center center">
 <div class="section no-pad-bot">
	 <div class="container">
		 <div class="row">
    		<div class='col s12 homeHeaderBanner' style='text-align:center'>
    			 <h1 id="mainHeadline" class="center bombshellHeading white-text" style="text-transform:uppercase"><?php echo get_field('menu_title') ?></h1>
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
<?php the_content(); ?>

          <?php
          if( have_rows('menu_item') ):
              while ( have_rows('menu_item') ) : the_row(); ?>
              <div class="serviceItem">
                <h4 class='headingfont menuItems' style='margin-bottom:0px;border-bottom:2px dotted #e91e63 ;height:30px'>
                  <span style='background-color:white;height:32px;padding-right:10px;'><?php echo the_sub_field('service_name') ?></span>
                  <span class='right'><span  style='background-color:white;height:32px;padding-left:5px;'>$<?php echo the_sub_field('price') ?></span>
                  </span></h4>
                <p style='font-weight:300;font-size:15px;text-align:justify;margin-top:5px'><?php echo the_sub_field('description') ?></p>
              </div>
          <?php
              endwhile;
          else :
              // no rows to be found..
          endif;
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
