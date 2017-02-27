<?php
/*
Template Name: Home Page
*/
?>



<?php get_header(); ?>

<?php $bg_id = get_field('background_image');?>
<?php

$bkgrnd_thumb_url_array = wp_get_attachment_image_src($bg_id, 'tile_image', false);
$bkgrnd_thumb_url = $bkgrnd_thumb_url_array[0];

 ?>

<div id="index-banner" class="black" style="margin-top:0px;background-image:url(<?php echo $bkgrnd_thumb_url; ?>);background-size:cover;background-position:center center">

 <div class="section no-pad-bot">
	 <div class="container">
		 <div class="row">
		<div class='col s12 homeHeaderBanner' style='text-align:center'>
			 <h1 id="mainHeadline" class="center bombshellHeading white-text" style="text-transform:uppercase"><?php echo get_field( "main_headline" ); ?></h1>
			 <h4 id="secondaryHeadline" style='margin-top:0px' class="center headingfont white-text">
				 <?php echo get_field( "sub_headline" ); ?>
			 </h4>
			 <a href="<?php echo get_field('call_to_action_button_link'); ?>" class="btn btn-large waves-effect waves-light  pink white-text" style="font-family:'kinescope';text-transform:none;font-size:x-large"><i class="material-icons right">keyboard_arrow_right</i>
				 		 <?php echo get_field( "call_to_action_button_text" ); ?>

			</a>
		</div>
	 </div>
		 <br><br>
	 </div>
 </div>
 <!-- <div class="parallax"><img id="mainImage" style="max-height:1000px;" src="<?php echo get_field('background_image') ?>" alt="Unsplashed background img 1"></div> -->
</div>

<!-- first row of content blocks -->
 <div class="section no-pad-bot mainview white" id="index-banner" style='margin-top:0px;padding-top:15px'>
			<div class="row" style="margin-bottom:0px;padding-bottom:15px">

        <?php $booking_id = get_field('booking_image');?>
        <?php

        $booking_thumb_url_array = wp_get_attachment_image_src($booking_id, 'tile_image', false);
        $booking_thumb_url = $booking_thumb_url_array[0];

         ?>

				<div class="col s12 m12 l4 " >
					<div data-pagelink="<?php echo get_field('booking_page_link') ?>" data-imgurl="<?php echo $booking_thumb_url; ?>" style="background:linear-gradient(rgba(01,01,01,0.5),rgba(01,01,01,0.5)),url(<?php echo $booking_thumb_url; ?>);background-size:cover;height:300px;padding-left:0px;padding-top:20%;" id="bookingBlock"  class="col s12 center">
							<a class="tileFancy white-text">  <?php echo get_field('booking_text'); ?></a>
					</div>
				</div>

        <?php $services_id = get_field('services_image');?>
        <?php

        $services_thumb_url_array = wp_get_attachment_image_src($services_id, 'tile_image', false);
        $services_thumb_url = $services_thumb_url_array[0];

         ?>
				<div data-pagelink="<?php echo get_field('services_page_link') ?>" id="serviceTile" class="col s12 m12 l4 ">
					<div class="col s12 center service_img"  data-imgurl="<?php echo $services_thumb_url;?>" style="background:linear-gradient(rgba(01,01,01,0.5),rgba(01,01,01,0.5)),url(<?php echo $services_thumb_url; ?>);background-size:cover;height:300px;padding-left:0px;padding-top:20%;" id="servicesBlock"   >
					 <a class="tileFancy white-text"><?php echo get_field('services_text'); ?></a>
					</div>
				</div>


				<div class="col s12 m12 l4">
					<div id="contentblock" class="col s12 center " style="padding-top:20%" >
					 <h3 style="font-family:'alternate-gothic-no-1-d';margin-bottom:0px" class=" white-text">#MAKESWAXINGSWEET</h3>
					 <a href="<?php echo get_field('twitter_link')?>"><i style="margin:5px" class="fa fa-twitter social fa-2x pink-text"></i></a>
					 <a href="<?php echo get_field('instagram_link')?>"><i style="margin:5px" class="fa fa-instagram social fa-2x pink-text"></i></a>
					 <a href="<?php echo get_field('facebook_link')?>"><i style="margin:5px" class="fa fa-facebook fa-2x social pink-text"></i></a>
					 <a href="<?php echo get_field('snapchat_link')?>"><i style="margin:5px" class="fa fa-snapchat fa-2x pink-text social"></i></a>
					</div>
				</div>

			</div>
 </div>
 <!-- end first row of content blocks -->

 <!-- first row of content blocks -->
    <div class="section no-pad-bot mainview white" id="index-banner" style='padding-top:0px;margin-top:0px'>
         <div class="row" style="margin-bottom:0px;padding-bottom:15px">

           <div class="col s12 m12 l4 ">
             <?php $story_id = get_field('story_image');?>
             <?php

             $story_thumb_url_array = wp_get_attachment_image_src($story_id, 'tile_image', false);
             $story_thumb_url = $story_thumb_url_array[0];

              ?>
             <div id="storyBlock" data-pagelink="<?php echo get_field('story_page_link') ?>"  data-imgurl="<?php echo $story_thumb_url; ?>" class="col s12 center" style="background:linear-gradient(rgba(01,01,01,0.5),rgba(01,01,01,0.5)),url(<?php echo $story_thumb_url; ?>);background-size:cover;height:300px;padding-left:0px;background-position:center center;padding-top:20%;">
               <a class="tileBlock white-text" style='text-transform:uppercase'><?php echo get_field('story_text'); ?></a>
             </div>
           </div>

           <div class="col s12 m12 l8 specialsTile" data-pagelink="<?php echo get_field('specials_page_link') ?>" >
             <?php $specials_id = get_field('specials_image');?>
             <?php

             $specials_thumb_url_array = wp_get_attachment_image_src($specials_id, 'tile_image', false);
             $specials_thumb_url = $specials_thumb_url_array[0];

              ?>
            <div id="specialsBlock" data-pagelink="<?php echo get_field('specials_page_link') ?>"  data-imgurl="<?php echo $specials_thumb_url; ?>" style="background:linear-gradient(rgba(01,01,01,0.5),rgba(01,01,01,0.5)),url(<?php echo $specials_thumb_url; ?>);background-size:cover;height:300px;padding-left:0px;"  class="col s12 center " >
            <a class="tileBlock white-text"><?php echo get_field('specials_text');?> </a>
             </div>
           </div>

         </div>
    </div>
    <!-- end first row of content blocks -->

		<!-- 3rd row of content blocks -->
		  <div class="section no-pad-bot mainview white" id="index-banner" style='margin-top:0px;padding-top:0px'>
		       <div class="row" style="margin-bottom:0px;padding-bottom:15px">

		         <div class="col s12 m12 l8">
		           <div id="contentblock2" class="col s12 center "  >
		            <h3 style="font-family:'alternate-gothic-no-1-d';margin-bottom:0px" class=" white-text">WHAT OUR CLIENTS SAY..</h3>
		              <div class="testimonialSlider container" style="padding-top:20px">
		                  <div class="white-text" style="text-align:justify">
		                    <i class="fa fa-quote-left pink-text"></i>
		                    I regularly travel from NC to Richmond to get waxed by the lovely ladies at Bombshell.
		                    The atmosphere is super fun and makes you feel at home and comfortable, and the staff is AWESOME.
		                    Melissa always uses the best waxes and has the perfect products to make your waxing experience as
		                    smooth as possible, plus you seriously cannot beat the prices. <Br> <span class="right">- Jessamyn</span>
		                  </div>

		                  <div class="white-text" style="text-align:justify">
		                    <i class="fa fa-quote-left pink-text"></i>
		                    Love you and Bombshell, Melissa!
		                    It’s been amazing watching how quickly the business has grown over the past year & a half.
		                    I love coming in and seeing the changes and knowing that I will always be treated like a guest
		                    and not just another “customer” like at other places.
		                    The personalized treatment is what makes you the best in the business.
		                    You Rock! Keep up the fantastic work! <Br> <span class="right">- Jennifer</span>
		                  </div>

		                  <div class="white-text" style="text-align:justify">
		                    <i class="fa fa-quote-left pink-text"></i>
		                    Absolutely adore this salon! The interior design is fun, whimsical and is
		                    completely filled with black and white checkers floors with hues of bubblegum
		                     pink! What a wonderful place to be. I got sugaring done with May and she was
		                     fabulous and I didn't feel pain at all. All the associates are so darn sweet and
		                     everything about this place reminds of being in the movie Hairspray! Seriously,
		                     they are so bomb! <Br> <span class="right">- Allison</span>
		                  </div>

		                  <div class="white-text" style="text-align:justify">
		                    <i class="fa fa-quote-left pink-text"></i>
		                    I've never had anything but great experiences at Bombshell.
		                    I've tanned and waxed multiple times here and HIGHLY recommend both treatments.
		                    They have experienced staff members that have always made me feel comfortable,
		                    clean facilities, and cool decor! <Br> <span class="right">- Katie</span>
		                  </div>




		              </div>
		           </div>
		         </div>

             <?php $gc_id = get_field('gift_card_image');?>
             <?php

             $gc_thumb_url_array = wp_get_attachment_image_src($gc_id, 'tile_image', false);
             $gc_thumb_url = $gc_thumb_url_array[0];

              ?>

		         <div class="col s12 m12 l4 giftcardTile" data-pagelink="<?php echo get_field('gift_card_page_link') ?>" >
		           <div id="giftCardBlock" data-pagelink="<?php echo get_field('gift_card_page_link') ?>" data-imgurl="<?php echo $gc_thumb_url; ?>" style="background:linear-gradient(rgba(01,01,01,0.5),rgba(01,01,01,0.5)),url(<?php echo $gc_thumb_url; ?>);background-size:cover;height:300px;padding-left:0px;"  class="col s12 center giftcard_img" >
		            <a class="tileFancy white-text"><?php echo get_field('gift_card_text'); ?></a>
		           </div>
		         </div>
		       </div>
		  </div>
		  <!-- end 3rd row of content blocks -->

      <div class="section no-pad-bot mainview white" id="index-banner" style='padding-top:0px;margin-top:0px'>
       <div class="row" style="margin-bottom:0px;padding-bottom:15px">


         <div class="col s12 m12 l4 ">
           <div id="contentblock3" class="col s12 center" >
             <a  class="tileBlock white-text">BLOG</a>
           </div>
         </div>


         <?php $wedding_id = get_field('weddings_and_parties_image');?>
         <?php

         $wedding_thumb_url_array = wp_get_attachment_image_src($wedding_id, 'tile_image', false);
         $wedding_thumb_url = $wedding_thumb_url_array[0];

          ?>

         <div class="col s12 m12 l4 " data-pagelink="<?php echo get_field('weddings_and_parties_page_link') ?>">
           <div id="weddingBlock" class="col s12 center " data-imgurl="<?php echo $wedding_thumb_url; ?>" data-pagelink="<?php echo get_field('weddings_and_parties_page_link') ?>" style="background:linear-gradient(rgba(01,01,01,0.5),rgba(01,01,01,0.5)),url(<?php echo $wedding_thumb_url; ?>);background-size:cover;height:300px;padding-left:0px;">
            <a class="tileFancy white-text"><?php echo get_field('weddings_and_parties_text'); ?></a>
           </div>
         </div>


         <?php $drshaw_id = get_field('dr_travis_shaw_image');?>
         <?php

         $drshaw_thumb_url_array = wp_get_attachment_image_src($drshaw_id, 'tile_image', false);
         $drshaw_thumb_url = $drshaw_thumb_url_array[0];

          ?>


         <div class="col s12 m12 l4 " data-pagelink="<?php echo get_field('dr_travis_shaw_page_link') ?>" >
           <div id="partyBlock" class="col s12 center" data-imgurl="<?php echo $drshaw_thumb_url; ?>"  data-pagelink="<?php echo get_field('dr_travis_shaw_page_link') ?>" style="background:linear-gradient(rgba(01,01,01,0.5),rgba(01,01,01,0.5)),url(<?php echo $drshaw_thumb_url; ?>);background-size:cover;height:300px;padding-left:0px;">
             <a class="tileBlock white-text" style="text-transform:uppercase"><?php echo get_field('dr_travis_shaw_text'); ?></a>
           </div>
         </div>

       </div>
  </div>



	<?php get_footer(); ?>

