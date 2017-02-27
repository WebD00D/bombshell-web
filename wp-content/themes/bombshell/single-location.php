<?php
/*
Template Name: Single Location
*/
?>


<?php get_header(); ?>

<?php $img_id = get_field('location_image');?>
<?php

$img_thumb_url_array = wp_get_attachment_image_src($img_id, 'tile_image', false);
$img_thumb_url = $img_thumb_url_array[0];

 ?>


<?php if ( get_field('include_popup') ) {  ?>

<div class="popup">
    <div class="popup__message">
      <h5>Hey Dollface!</h5>
      <?php echo get_field('popup_message'); ?>
      <button id="btnClosePopup" class="btn waves-effect waves-light pink">Close</button>
    </div>

</div>

<script>

  $("#btnClosePopup").click(function(){

    $(".popup").addClass("popup__hidden");

  })

</script>


<?php } ?>




<div id="index-banner" class="black service-banner" style="margin-top:0px;background:url(<?php echo $img_thumb_url; ?>);background-size:cover;background-position:center center">

 <div class="section no-pad-bot" style="width: 100%">
	 <div class="container">

		 <div class="row">
		<div class='col s12 homeHeaderBanner' style='text-align:center'>
			 <h1 id="mainHeadline" class="center bombshellHeading white-text" style="text-transform:uppercase"><?php echo the_title(); ?></h1>
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


 <div class="row">
   <div class="col s12">
     <div class="col s12 l7">
     <div class="video-container" style="margin-bottom: 30px">
       <iframe width="853" height="480" src="<?php echo get_field('google_map_embed_url') ?>" frameborder="0" allowfullscreen></iframe>
     </div>
     </div>

     <div class="col s12 l5">
       <h4 class="bombshellHeading pink-text" style="font-size:40px"><?php echo get_field('street'); ?></h4>
       <h4 class="bombshellHeading pink-text" style="font-size:40px"><?php echo get_field('city_/_state_/_zip'); ?></h4>
       <h4 class="bombshellHeading pink-text" style="font-size:40px"><a class="pink-text" href="tel:<?php echo get_field('telephone'); ?>"><?php echo get_field('telephone'); ?></a></h4>
       <p><?php echo get_field('custom_message') ?></p>
     </div>
    </div>
   </div>



           <?php $waxing_id = get_field('waxing_image');?>
           <?php

           $wax_thumb_url_array = wp_get_attachment_image_src($waxing_id, 'tile_image', false);
           $wax_thumb_url = $wax_thumb_url_array[0];

            ?>

          <a href="<?php echo get_field('waxing_link') ?>">
          <div class="col s12 l4 m4" style="margin-top:25px" >
            <div class="col s12 center-align" style="min-height:240px;background:url(<?php echo $wax_thumb_url; ?>);background-size:cover;background-position:center center">
              <h4 class="bombshellHeading white-text" style="font-size:60px;margin-top:80px">WAXING</h4>
            </div>
          </div>
          </a>

          <?php $sugaring_id = get_field('sugaring_image');?>
          <?php

          $sugar_thumb_url_array = wp_get_attachment_image_src($sugaring_id, 'tile_image', false);
          $sugar_thumb_url = $sugar_thumb_url_array[0];

           ?>

          <a href="<?php echo get_field('sugaring_link') ?>">
          <div class="col s12 l4 m4" style="margin-top:25px" >
            <div class="col s12 center-align" style="min-height:240px;background:url(<?php echo $sugar_thumb_url; ?>);background-size:cover;background-position:center center">
              <h4 class="bombshellHeading white-text" style="font-size:60px;margin-top:80px">SUGARING</h4>
            </div>
          </div>
        </a>


        <?php $tanning_id = get_field('tanning_image');?>
        <?php

        $tan_thumb_url_array = wp_get_attachment_image_src($tanning_id, 'tile_image', false);
        $tan_thumb_url = $tan_thumb_url_array[0];

         ?>


          <a href="<?php echo get_field('tanning_link') ?>">
          <div class="col s12 l4 m4" style="margin-top:25px" >
            <div class="col s12 center-align" style="min-height:240px;background:url(<?php echo $tan_thumb_url; ?>);background-size:cover;background-position:center center">
              <h4 class="bombshellHeading white-text" style="font-size:60px;margin-top:80px">TANNING</h4>
            </div>
          </div>
         </a>


         <?php $skin_id = get_field('skin_care_image');?>
         <?php

         $skin_thumb_url_array = wp_get_attachment_image_src($skin_id, 'tile_image', false);
         $skin_thumb_url = $skin_thumb_url_array[0];

          ?>


          <a href="<?php echo get_field('skin_care_link') ?>">
          <div class="col s12 l4 m4" style="margin-top:25px">
            <div class="col s12 center-align" style="min-height:240px;background:url(<?php echo $skin_thumb_url; ?>);background-size:cover;background-position:center center">
              <h4 class="bombshellHeading white-text" style="font-size:60px;margin-top:80px">SKIN CARE</h4>
            </div>
          </div>
         </a>



          <?php $hair_id = get_field('hair_image');?>
          <?php

          $hair_thumb_url_array = wp_get_attachment_image_src($hair_id, 'tile_image', false);
          $hair_thumb_url = $hair_thumb_url_array[0];

           ?>

          <a href="<?php echo get_field('hair_link') ?>">
          <div class="col s12 l4 m4" style="margin-top:25px">
            <div class="col s12 center-align" style="min-height:240px;background:url(<?php echo $hair_thumb_url; ?>);background-size:cover;background-position:center center">
              <h4 class="bombshellHeading white-text" style="font-size:60px;margin-top:80px">HAIR</h4>
            </div>
          </div>
          </a>

          <?php $nails_id = get_field('nails_image');?>
          <?php

          $nails_thumb_url_array = wp_get_attachment_image_src($nails_id, 'tile_image', false);
          $nails_thumb_url = $nails_thumb_url_array[0];

           ?>

          <a href="<?php echo get_field('nails_link') ?>">
          <div class="col s12 l4 m4" style="margin-top:25px">
            <div class="col s12 center-align" style="min-height:240px;background:url(<?php echo $nails_thumb_url; ?>);background-size:cover;background-position:center center">
              <h4 class="bombshellHeading white-text" style="font-size:60px;margin-top:80px">NAILS</h4>
            </div>
          </div>
         </a>

         <?php $extras_id = get_field('the_little_things_image_link');?>
         <?php

         $extra_thumb_url_array = wp_get_attachment_image_src($extras_id, 'tile_image', false);
         $extra_thumb_url = $extra_thumb_url_array[0];

          ?>

           <a href="<?php echo get_field('the_little_extras_page') ?>">
          <div class="col s12 l4 m4" style="margin-top:25px">
            <div class="col s12 center-align" style="min-height:240px;background:url(<?php echo $extra_thumb_url; ?>);background-size:cover;background-position:center center">
              <h4 class="bombshellHeading white-text" style="font-size:60px;margin-top:80px">THE LITTLE EXTRAS</h4>
            </div>
          </div>
          </a>

        </div>
      </div>
    </div>
  </div>
</div>



<?php get_footer(); ?>
