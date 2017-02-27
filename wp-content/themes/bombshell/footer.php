<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bombshell
 */

?>

	</div><!-- #content -->

	<div class="row" style="margin-bottom:0px;margin-top:30px" >
    <div class="col s12 grey lighten-4" style="padding-top:0px;padding-bottom:35px">
      <div class="container">
        <div class="col l12 s12 left" style="padding-top:16px">
        <h3 class="pink-text headingfont">Get our Newsletter!</h3>

        </div>
				<div class="col l4 s12 input-field" style="padding-top:20px">

            <input placeholder="Marilyn Monroe" id="txtName" type="text" style="font-family:'alternate-gothic-no-1-d';font-size:larger;background-color:white">
            <label for="txtName" style="margin-top:25px;font-family:'kinescope';font-size:larger;padding-bottom:10px">Full Name</label>

        </div>
        <div class="col l4 s12 input-field" style="padding-top:20px">

            <input placeholder="you@example.com" id="txtEmailAddress" type="text" style="font-family:'alternate-gothic-no-1-d';font-size:larger;background-color:white">
            <label for="txtEmailAddress" style="margin-top:25px;font-family:'kinescope';font-size:larger;padding-bottom:10px">Your Email</label>

        </div>
        <div class="col l4 s12 left" style="padding-top:35px">
          <a id="btnGetNewsletter" href="#" class="btn btn-large waves-effect waves-light  pink" class="white-text" style="font-family:'kinescope';text-transform:none;font-size:x-large"><i class="material-icons right">keyboard_arrow_right</i> Subscribe<a>
        </div>
      </div>

    </div>
    </div>
		<div class="section no-pad-bot mainview "  style='padding-top:0px;margin-bottom:0px;margin-top:0px'>
        <div class="row" style="margin-bottom:0px" >

            <div class="col s12 center-align" style="background-color:#1f1f1f;padding-left:0px;padding-right:0px;padding-top:15px;padding-bottom:20px">



                  <h3 style="font-family:'alternate-gothic-no-1-d';margin-bottom:0px" class=" white-text">#MAKESWAXINGSWEET</h3>
									<div class="center-align">
										<a href="https://twitter.com/ilovebombshell" target="_new"><i style="margin:5px" class="fa fa-twitter fa-2x pink-text social"></i></a>
										<a href="https://www.instagram.com/ilovebombshell/" target="_new"><i style="margin:5px" class="fa fa-instagram fa-2x pink-text social"></i></a>
										<a href="https://www.facebook.com/ilovebombshell" target="_new"><i style="margin:5px" class="fa fa-facebook fa-2x pink-text social"></i></a>
										<a href="https://www.snapchat.com/add/bombshellvegas" target="_new"><i style="margin:5px" class="fa fa-snapchat fa-2x pink-text social"></i></a>
										<h6 style="font-family:'alternate-gothic-no-1-d';margin-bottom:0px" class=" grey-text text-darken-3">&copy <span id="theYear"></span> Bombshell Enterprises, LLC. All Rights Reserved.</h6>

									</div>







            </div>

        </div>
   </div>

<?php wp_footer(); ?>
<script type="text/javascript">
	 (function(){
			emailjs.init("user_ryjk8p6UQxOCknqymgFXU");
	 })();
</script>
<script>

 $(document).ready(function(){
	 // get the current year for footerlink
	 var theDate = new Date();
	 $("#theYear").text(theDate.getFullYear());


	 $("#btnGetNewsletter").click(function(e){
				 e.preventDefault();

				 var email = $("#txtEmailAddress").val();
				 var fullname = $("#txtName").val();

				 if ($.trim(email) === ""){
					 return;
				 }

				 var message = 'Please subscribe the following person to the Bombshell Newsletter: ' + fullname + ' ->' + email;
				 console.log(message);
				 var subject = 'Bombshell Newsletter Subscription';
				 var newMessage = fullname + ' --> ' + email;

				 // Send Email
				var textToSend = "Bombshell Newsletter Subscription\n" +
				"Message: "+ message ;

				emailjs.send("bombshell","newsletter",{myemail: newMessage});
				swal({
					title: "Thanks Dollface!",
					text: "You've successfull subscribed to the Bombshell Newsletter!",
					type: "success",
					confirmButtonColor:"#e91e63",
					confirmButtonText:"Cool",
					showConfirmButton: true });
					$("#txtEmailAddress").val('');
					$("#txtName").val('');
			 })

			 $("#btnSendMessage").click(function(e){
				 e.preventDefault();
				 var name = $("#first_name").val() + ' ' + $("#last_name").val();
				 var phone = $("#phone_number").val();
				 var email = $("#email").val();
				 var message = $("#message").val();
				 var subject = $(this).attr("data-subject");

				 // Send Email
				var textToSend = "Weddings / Parties Inquiry\n" +
				"From: "+ name + "\n"+
				"Email: "+ email + "\n"+
				"Phone: "+ phone + "\n\n"+
				"Message: "+ message ;

				emailjs.send("bombshell","wedding",{name: name,email:email,phone:phone,message:message});

				swal({
					title: "Message Sent!",
					text: "We'll be in touch with you soon Dollface!",
					timer: 2000,
					 type: "success",
					showConfirmButton: false });

			 })

 })

</script>

</body>
</html>
