<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bombshell
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- STYLES  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/css/materialize.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>

<!-- JAVASCRIPT -->
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/js/materialize.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/bombshell/js/bombshell.js"></script>
<script src="https://use.typekit.net/mhf2njr.js"></script>
<script>try{Typekit.load({ async: false });}catch(e){}</script>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<div id="preloader">

		<div class="spinner">
			 <div class="double-bounce1"></div>
			 <div class="double-bounce2"></div>
			 <Br><Br>
			</div>
			 <div style="text-align:center">
				 <h4 class="white-text" style="color:#eeeeee;font-family:'kinescope'">
				 Loading...
				</h4>
				 <h4 style="color:#eeeeee;font-family:'alternate-gothic-no-1-d'">Just a moment more dollface!</h4>
			 </div>
	</div>

<div class="m-container nav">
	<div>
			<nav id="site-navigation" class="main-navigation" role="navigation" style="padding-left:5%;padding-right:5%;background-color:#1f1f1f">

				<a id="logo-container" href="/" class="brand-logo" style="padding-top:15px" >
					<img id="logome" src="http://www.ilovebombshell.com/wp-content/uploads/2013/12/cropped-logo2.png">
				</a>

				<a id="mobileMenuButton" href="#" data-activates="mobile-nav" class="button-collapse"><i class="mdi-navigation-menu white-text"></i></a>

				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu side-nav', 'menu_id' => 'mobile-nav','items_wrap' => '<ul id="%1$s" class="%2$s"><li class="mobile-header"><p>Menu</p></li>%3$s</ul><div class="clear"></div>', ) ); ?>

				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'right hide-on-med-and-down' ) ); ?>

			</nav><!-- #site-navigation -->
		<div class="clear"></div>
  </div>
</div>


<div id="fullScreenMenu" style="display:none;height:100%;overflow:auto;">
	<div class="col s12 right" style="padding-right:10px;padding-top:15px;color:white"><i data-isOpen="no" style='font-size:40px' class=" material-icons closeMenu">close</i></div>
	<div class="container">
		<div class="row">
	    <?php wp_nav_menu( array('menu' => 'Mobile' ,'theme_location' => 'primary', 'menu_class' => 'mobileNavigation ' ) ); ?>
		</div>
	</div>
</div>


<script>

$(document).ready(function(){

	$("#mobileMenuButton").click(function(){
	  var isOpen = $(".closeMenu").attr("data-isOpen");
	  if (isOpen === "no"){
	    //... it's not open so we should show the menu
	    $(".closeMenu").attr("data-isOpen","yes");
	    $("#fullScreenMenu").css("display","block");
	    $("#content").hide();
	  } else {
	    //... the menu is open so we should close it
	    $(".closeMenu").attr("data-isOpen","no");
	     $("#fullScreenMenu").css("display","none");
	     $("#content").show();
	  }
	})

	$(".closeMenu").click(function(){
	     var isOpen = $(this).attr("data-isOpen");
	     if (isOpen === "no"){
	       //... it's not open so we should show the menu
	       $(this).attr("data-isOpen","yes");
	       $("#fullScreenMenu").css("display","block");
	       $("#content").hide();
	     } else {
	       //... the menu is open so we should close it
	       $(this).attr("data-isOpen","no");
	        $("#fullScreenMenu").css("display","none");
	        $("#content").show();
	     }
	})

	$(".closeMenu").mouseover(function(){
		 $(this).css("cursor","pointer");
	})




})


</script>

	<!-- <nav style="background-color:#1f1f1f" role="navigation">
	<div class="nav-wrapper" style="margin-right:5%;margin-left:5%">

		<a id="logo-container" href="http://christian.bombshell/" class="brand-logo hide" style="padding-top:15px" >
			<img id="logome" src="http://www.ilovebombshell.com/wp-content/uploads/2013/12/cropped-logo2.png">
		</a> -->

		<!-- <ul class="right hide-on-med-and-down ">
			<li><a class='pink-text linkit footerlink' href="ServiceLocation.html" >  Services</a></li>
			<li><a class='pink-text linkit footerlink' href="BookingLocation.html"> Booking</a></li>
			<li><a class='pink-text linkit footerlink' href="SpecialsLocation.html"> Specials</a></li>
			<li><a class='pink-text dropdown-button linkit footerlink' data-beloworigin="true" data-constrainwidth="false" data-hover='true' href="#" data-activates='dropdown1'> Extras</a></li>
			<li><a class='pink-text linkit footerlink' href="SalonPolicies.html"> Salon Policies</a></li>
			<li><a class='pink-text linkit footerlink' href="tel:8043420051">RVA: <span class="number_link">804-342-0051</span></a></li>
			<li><a class='pink-text linkit footerlink' href="tel:7027782277">LAS VEGAS: <span class="number_link">702-778-2277</span></a></li>
		</ul> -->

		<!-- Dropdown Structure -->
		<!-- <ul id='dropdown1' class='dropdown-content bombshellpink' style="background-color:#1f1f1f" >
			<li><a class="bombshellpink linkit" href="story.html" style="color:white;font-size:20px">Story & Culture</a></li>
				<hr class="pink" style="margin:0px;background-color:#e91e63;border:1px solid #e91e63">
			<li><a class="bombshellpink linkit" href="Weddings.html" style="color:white;font-size:20px">Weddings & Parties</a></li>
				<hr class="pink" style="margin:0px;background-color:#e91e63;border:1px solid #e91e63">
			<li><a class="bombshellpink linkit" href="GiftCardLocation.html" style="color:white;font-size:20px">Gift Cards</a></li>
				<hr class="pink" style="margin:0px;background-color:#e91e63;border:1px solid #e91e63">
			<li><a class="bombshellpink linkit" href="https://medium.com/@ILoveBombshell" style="color:white;font-size:20px">Blog</a></li>
			<hr class="pink" style="margin:0px;background-color:#e91e63;border:1px solid #e91e63">
			<li><a class="bombshellpink linkit" href="WaxingTips.html" style="color:white;font-size:20px"> Waxing Tips</a></li>
			<hr class="pink" style="margin:0px;background-color:#e91e63;border:1px solid #e91e63">
			<li><a class="bombshellpink linkit" href="TanningTips.html" style="color:white;font-size:20px"> Tanning Tips</a></li>
		</ul>

		<ul id="nav-mobile" class="side-nav" style="background-color:#1f1f1f">

		<a href="index.html" style="margin-bottom:50px;margin-top:10px;margin-left:10px">  <img height="100px" src="http://files.parsetfss.com/69cc1ebe-f693-4f84-ae97-93438bf7ac31/tfss-0ed7deb8-14c3-4540-bc9a-2312f00a1e3a-bombshellupdateed.jpg"></a>



		<li><a class="bombshellpink linkit " href="tel:8043420051" style="color:white;font-size:x-large">RVA: <span class="number_link">804-342-0051</span></a></li>
					<hr class="pink mypinkHR" >

					<li><a class="bombshellpink linkit " href="tel:7027782277" style="color:white;font-size:x-large">LAS VEGAS: <span class="number_link">702-778-2277</span></a></li>
								<hr class="pink mypinkHR" >
			<li><a class='bombshellpink linkit ' href="ServiceLocation.html" style="color:white;font-size:x-large">  Services</a></li>
				<hr class="pink mypinkHR" >
			<li><a class='bombshellpink linkit ' href="BookingLocation.html" style="color:white;font-size:x-large"> Booking</a></li>
			<hr class="pink mypinkHR"  >
			<li><a class='bombshellpink linkit ' href="story.html" style="color:white;font-size:x-large"> Story & Culture</a></li>
				<hr  class="pink mypinkHR" >
			<li><a class='bombshellpink linkit ' href="SpecialsLocation.html" style="color:white;font-size:x-large"> Specials</a></li>
				<hr class="pink mypinkHR" >
			<li><a class="bombshellpink linkit " href="GiftCardLocation.html" style="color:white;font-size:x-large">Gift Cards</a></li>
			<hr class="pink mypinkHR" >
		<li><a class="bombshellpink linkit " href="Contact.html" style="color:white;font-size:x-large">Get In Touch</a></li>


		</ul>
		<a href="#" data-activates="nav-mobile" class="button-collapse "><i class="material-icons pink-text">menu</i></a>
	</div>
</nav> -->




	<div id="content" class="site-content">
