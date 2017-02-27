<?php
/*
Template Name: Locations Template
*/
?>



<?php get_header(); ?>

<div id="index-banner" class=" black" style="margin-top:0px;height:40vh;background:url(<?php echo get_field('header_image') ?>);background-size:cover;background-position:center center">
 <div class="section no-pad-bot">
	 <div class="container">
		 <div class="row">
    		<div class='col s12 homeHeaderBanner' style='text-align:center'>
    			 <h1 id="mainHeadline" class="center bombshellHeading white-text" style="text-transform:uppercase;">SELECT LOCATION</h1>
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
          <?php
          if( have_rows('location') ):
              while ( have_rows('location') ) : the_row(); ?>
              <div class="col l4 s12" style='margin-bottom:30px'>
                <h4 class='headingfont menuItems2 pink-text center-align' style="margin-bottom:2px">
                  <?php echo the_sub_field('location_name') ?>
                </h4>
                <h5 class="bombshellHeading black-text center-align" style="font-size:25px"> <?php echo the_sub_field('street') ?></h5>
                <h5 class="bombshellHeading black-text center-align" style="font-size:25px"> <?php echo the_sub_field('city') ?>, <?php echo the_sub_field('state_abbr') ?> <?php echo the_sub_field('zip_code') ?></h5>
                <div class='center-align'>
                  <a class="btn waves-effect waves-light white-text pink" style="margin-top:10px;font-family:'alternate-gothic-no-1-d';font-size:20px" href="<?php echo the_sub_field('service_menu_page_link') ?>">View Services</a><Br>
                  <a class="btn waves-effect waves-light white-text pink" style="margin-top:10px;font-family:'alternate-gothic-no-1-d';font-size:20px" href="<?php echo the_sub_field('specials_menu_page_link') ?>">View Specials</a>
                </div>


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
