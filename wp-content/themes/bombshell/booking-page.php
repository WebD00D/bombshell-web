<?php
/*
Template Name: Booking Page
*/
?>



<?php get_header(); ?>



<?php $img_id = get_field('header_image');?>
<?php

$img_thumb_url_array = wp_get_attachment_image_src($img_id, 'tile_image', false);
$img_thumb_url = $img_thumb_url_array[0];

 ?>




<div id="index-banner" class=" black" style="margin-top:0px;height:380spx;background:url(<?php echo $img_thumb_url; ?>);background-size:cover;background-position:center center">

 <div class="section no-pad-bot">
	 <div class="container">

		 <div class="row">
		<div class='col s12 homeHeaderBanner' style='text-align:center;'>
			 <h1 id="mainHeadline" class="center bombshellHeading white-text" style="text-transform:uppercase">ONLINE BOOKING</h1>
		</div>
	</div>
		 <br><br>

	 </div>
 </div>
 <!-- <div class="parallax"><img id="mainImage" style="max-height:1000px" src="" alt="Unsplashed background img 1"></div> -->
</div>

<div class="row" style="margin-bottom:55px;margin-top:35px" >
  <div class="col s12 m12 l12" style="padding-left:0px;padding-top:7px;padding-right:0px">
    <div class="col s12 left" style="background-color:white;padding-left:0px;padding-right:0px;padding-top:1%;">
      <div class="col s12 left-align">

        <!-- <div class="container center-align">

            <h4 class="bombshellHeading" style="font-size:40px">We're almost ready!</h4>
            <p style="font-size:20px;font-weight:300">Hey Dollface! We're finishing up a few final details with 
              our online booking system. <Br>Check back soon to start booking your services online! 
              <Br><Br> - Bombshell Team</p>

        </div> -->


        <div class="container">

          <div style="text-align:center;font-weight:300;font-size:20px">
            <?php the_content(); ?>
          </div>

          <?php
          
          if( have_rows('link') ):
         
              while ( have_rows('link') ) : the_row(); ?>

               <div class="col l4 s12" style='margin-bottom:30px'>
                <h4 class='headingfont menuItems2 pink-text center-align' style="margin-bottom:2px">
                  <?php echo the_sub_field('salon') ?>
                </h4>
                <div class="center-align">
               <a target="_blank" class="btn waves-effect waves-light white-text black" style="margin-top:10px;font-family:'alternate-gothic-no-1-d';font-size:20px" href="<?php echo the_sub_field('booking_url') ?>">Book Online</a>

                </div>
              </div>
          <?php
              endwhile;
          else :
            
          endif;
          ?>
        </div> 



      </div>
    </div>
  </div>
</div>

	<?php get_footer(); ?>
