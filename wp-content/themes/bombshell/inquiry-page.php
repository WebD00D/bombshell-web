<?php
/*
Template Name: Custom Contact Page
*/
?>



<?php get_header(); ?>

<div id="index-banner" class="black" style="margin-top:0px;height:40vh;background:url(<?php echo get_field('header_image') ?>);background-size:cover;background-position:center center">

 <div class="section no-pad-bot">
	 <div class="container">

		 <div class="row">
		<div class='col s12 homeHeaderBanner' style='text-align:center'>
			 <h1 id="mainHeadline" class="center bombshellHeading white-text" style="text-transform:uppercase"><?php echo get_field( "page_headline" ); ?></h1>
		</div>
	</div>
		 <br><br>

	 </div>
 </div>
 <!-- <div class="parallax"><img id="mainImage" style="max-height:800px" src="" alt="Unsplashed background img 1"></div> -->
</div>

<div class="row" style="margin-bottom:15px;margin-top:25px" >
  <div class="col s12 m12 l12" style="padding-left:0px;padding-top:7px;padding-right:0px">
    <div class="col s12 left" style="background-color:white;padding-left:0px;padding-right:0px;padding-top:1%;">
      <div class="col s12 left-align">
        <div class="container">
            <div class="col s12" style="padding-bottom:50px;padding-top:0px">
              <div class="row">
                <div class="col s12 center">
                  <h3 class="headingfont" style="color:#232323"><?php echo get_field( "form_instructions" ); ?></h3>
                  <?php
                  if( have_rows('location') ):
                      while ( have_rows('location') ) : the_row(); ?>

                    <div class="col l3 m6 s12 center" style="margin-top:25px">
                        <h4 class="bombshellHeading pink-text" style="font-size:30px;margin-top:5px"><?php echo the_sub_field('location_name') ?></h4>
                        <h4 class="bombshellHeading black-text" style="font-size:22px;margin-top:5px"><?php echo the_sub_field('phone') ?></h4>
                        <h4 class="bombshellHeading black-text" style="font-size:22px;margin-top:5px"><?php echo the_sub_field('street') ?></h4>
                        <h4 class="bombshellHeading black-text" style="font-size:22px;margin-top:5px"><?php echo the_sub_field('city') ?>, <?php echo the_sub_field('state_abrv.') ?> <?php echo the_sub_field('zip') ?></h4>
                        <a style="color:white;font-size:22px;margin-top:15px" class="bombshellHeading btn pink" href="<?php echo the_sub_field('google_map_link') ?>">Get Directions</a>
                    </div>




                  <?php
                      endwhile;
                  else :
                      // no rows to be found..
                  endif;
                  ?>
                </div>
              </div>
			  
              <div class="row" style="padding-top:60px !important">
                <div class="input-field col s12 l6 m6">
                  <input placeholder="Marilyn" id="first_name" type="text" >
                  <label for="first_name" style="padding-bottom:10px">First Name</label>
                </div>
                <div class="input-field col col s12 l6 m6">
                  <input placeholder="Monroe" id="last_name" type="text" >
                  <label for="last_name" style="padding-bottom:10px">Last Name</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 l6 m6">
                  <input placeholder="804-555-5555" id="phone_number" type="text" >
                  <label for="phone_number" style="padding-bottom:10px">Phone Number</label>
                </div>
                <div class="input-field col col s12 l6 m6">
                  <input placeholder="Marilyn@Ilovebombshell.com" id="email" type="text" >
                  <label for="email" style="padding-bottom:10px">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 l12 m12">
                  <input placeholder="I'm looking to schedule a wedding service on.." id="message" type="text" >
                  <label for="message" style="padding-bottom:10px">Message</label>
                </div>
                <a href="#" data-subject="<?php echo get_field('page_headline'); ?>" id="btnSendMessage" class="btn-large waves-effect waves-light pink bombshellSubHeading right" style="text-transform:none;font-size:x-large;margin-top:15px">Submit</a>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
<script>

$(document).ready(function(){





}) // end doc ready

</script>
